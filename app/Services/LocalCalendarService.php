<?php

namespace App\Services\Calendar;

use App\Contracts\CalendarServiceInterface;
use App\Models\Booking;
use App\Models\CalendarEvent;
use App\Models\AvailabilityException;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class LocalCalendarService implements CalendarServiceInterface
{
    private $timezone;
    private $workingHours;
    private $timeSlots;

    public function __construct()
    {
        $this->timezone = config('app.timezone', 'America/Los_Angeles');
        $this->workingHours = config('booking.working_hours');
        $this->timeSlots = config('booking.time_slots');
    }

    public function createEvent(Booking $booking): ?array
    {
        try {
            $event = CalendarEvent::create([
                'booking_id' => $booking->id,
                'title' => "{$booking->type_label} - {$booking->full_name}",
                'description' => $this->generateEventDescription($booking),
                'start_time' => $booking->appointment_date->setTimeFromTimeString($booking->appointment_time),
                'end_time' => $booking->appointment_date->setTimeFromTimeString($booking->appointment_time)
                    ->addMinutes($booking->duration),
                'event_type' => $booking->type,
                'status' => 'scheduled',
                'metadata' => [
                    'booking_number' => $booking->booking_number,
                    'attendees' => $booking->attendees,
                    'phone' => $booking->phone,
                    'email' => $booking->email,
                    'special_requests' => $booking->special_requests
                ]
            ]);

            // Clear cache for this date
            $this->clearCacheForDate($booking->appointment_date);

            Log::info('Local calendar event created', [
                'booking_id' => $booking->id,
                'event_id' => $event->id
            ]);

            return [
                'id' => $event->id,
                'local_id' => $event->id,
                'created_at' => $event->created_at->toIso8601String()
            ];

        } catch (\Exception $e) {
            Log::error('Failed to create local calendar event: ' . $e->getMessage(), [
                'booking' => $booking->toArray()
            ]);
            return null;
        }
    }

    public function updateEvent(Booking $booking): bool
    {
        if (!$booking->calendar_event_id) {
            return false;
        }

        try {
            $event = CalendarEvent::find($booking->calendar_event_id);

            if (!$event) {
                return false;
            }

            $oldDate = $event->start_time->toDateString();

            $event->update([
                'title' => "{$booking->type_label} - {$booking->full_name}",
                'description' => $this->generateEventDescription($booking),
                'start_time' => $booking->appointment_date->setTimeFromTimeString($booking->appointment_time),
                'end_time' => $booking->appointment_date->setTimeFromTimeString($booking->appointment_time)
                    ->addMinutes($booking->duration),
                'event_type' => $booking->type,
                'metadata->booking_number' => $booking->booking_number,
                'metadata->attendees' => $booking->attendees,
                'metadata->phone' => $booking->phone,
                'metadata->email' => $booking->email,
                'metadata->special_requests' => $booking->special_requests
            ]);

            // Clear cache for old and new dates
            $this->clearCacheForDate(Carbon::parse($oldDate));
            $this->clearCacheForDate($booking->appointment_date);

            Log::info('Local calendar event updated', [
                'booking_id' => $booking->id,
                'event_id' => $event->id
            ]);

            return true;

        } catch (\Exception $e) {
            Log::error('Failed to update local calendar event: ' . $e->getMessage(), [
                'booking' => $booking->toArray()
            ]);
            return false;
        }
    }

    public function deleteEvent(string $eventId): bool
    {
        try {
            $event = CalendarEvent::find($eventId);

            if ($event) {
                $eventDate = $event->start_time->toDateString();
                $event->delete();

                // Clear cache for the date
                $this->clearCacheForDate(Carbon::parse($eventDate));
            }

            Log::info('Local calendar event deleted', [
                'event_id' => $eventId
            ]);

            return true;

        } catch (\Exception $e) {
            Log::error('Failed to delete local calendar event: ' . $e->getMessage(), [
                'event_id' => $eventId
            ]);
            return false;
        }
    }

    public function getAvailableSlots(Carbon $date): array
    {
        $cacheKey = "local_calendar_slots_{$date->format('Y-m-d')}";

        return Cache::remember($cacheKey, 300, function () use ($date) {
            return $this->calculateAvailableSlots($date);
        });
    }

    private function calculateAvailableSlots(Carbon $date): array
    {
        $slots = [];

        // Check for exceptions (holidays, closures, etc.)
        if ($this->isDateException($date)) {
            return $slots;
        }

        // Get existing events for the day
        $existingEvents = CalendarEvent::whereDate('start_time', $date)
            ->where('status', 'scheduled')
            ->get();

        // Check each predefined time slot
        foreach ($this->timeSlots as $type => $times) {
            foreach ($times as $time) {
                if ($this->isSlotAvailable($date, $time, $type, $existingEvents)) {
                    $slots[] = [
                        'time' => $time,
                        'type' => $type,
                        'available' => true,
                        'display' => date('g:i A', strtotime($time)),
                        'duration' => config("booking.durations.{$type}", 60)
                    ];
                }
            }
        }

        // Sort by time
        usort($slots, function ($a, $b) {
            return strtotime($a['time']) <=> strtotime($b['time']);
        });

        return $slots;
    }

    public function isSlotAvailable(Carbon $date, string $time, string $bookingType): bool
    {
        // Check for exceptions
        if ($this->isDateException($date)) {
            return false;
        }

        // Check if time is within working hours
        if (!$this->isWithinWorkingHours($time)) {
            return false;
        }

        // Check if slot is in predefined slots for this type
        if (!in_array($time, $this->timeSlots[$bookingType] ?? [])) {
            return false;
        }

        // Check against existing events
        $startTime = $date->copy()->setTimeFromTimeString($time);
        $duration = config("booking.durations.{$bookingType}", 60);
        $endTime = $startTime->copy()->addMinutes($duration);

        $conflictingEvents = CalendarEvent::whereDate('start_time', $date)
            ->where('status', 'scheduled')
            ->where(function ($query) use ($startTime, $endTime) {
                $query->where(function ($q) use ($startTime, $endTime) {
                    $q->where('start_time', '<', $endTime)
                      ->where('end_time', '>', $startTime);
                });
            })
            ->count();

        $maxBookings = config("booking.max_bookings_per_slot.{$bookingType}", 1);

        return $conflictingEvents < $maxBookings;
    }

    public function syncEvents(): array
    {
        // For local calendar, sync is just cleaning up old events
        try {
            $thirtyDaysAgo = now()->subDays(30);

            $deletedCount = CalendarEvent::where('end_time', '<', $thirtyDaysAgo)
                ->where('status', 'completed')
                ->delete();

            // Clear all cache
            Cache::tags(['local_calendar_slots'])->flush();

            Log::info('Local calendar sync completed', [
                'deleted' => $deletedCount
            ]);

            return [
                'deleted' => $deletedCount,
                'message' => 'Old events cleaned up successfully'
            ];

        } catch (\Exception $e) {
            Log::error('Local calendar sync failed: ' . $e->getMessage());
            return ['error' => $e->getMessage()];
        }
    }

    private function generateEventDescription(Booking $booking): string
    {
        $description = "Booking #: {$booking->booking_number}\n";
        $description .= "Customer: {$booking->full_name}\n";
        $description .= "Phone: {$booking->phone}\n";
        $description .= "Email: {$booking->email}\n";
        $description .= "Type: {$booking->type_label}\n";
        $description .= "Duration: {$booking->duration} minutes\n";
        $description .= "Attendees: {$booking->attendees}\n";

        if ($booking->resident_name) {
            $description .= "Resident: {$booking->resident_name}\n";
        }

        if ($booking->special_requests) {
            $description .= "Requests: {$booking->special_requests}\n";
        }

        return $description;
    }

    private function isDateException(Carbon $date): bool
    {
        // Check for day of week exceptions (Sundays)
        if ($date->dayOfWeek === Carbon::SUNDAY) {
            return true;
        }

        // Check for configured exceptions
        $exception = AvailabilityException::where('date', $date->toDateString())
            ->where('type', 'closed')
            ->first();

        return $exception !== null;
    }

    private function isWithinWorkingHours(string $time): bool
    {
        $timeValue = strtotime($time);
        $startTime = strtotime($this->workingHours['start']);
        $endTime = strtotime($this->workingHours['end']);
        $lunchStart = strtotime($this->workingHours['lunch_start']);
        $lunchEnd = strtotime($this->workingHours['lunch_end']);

        // Check if within working hours
        if ($timeValue < $startTime || $timeValue >= $endTime) {
            return false;
        }

        // Check if during lunch break
        if ($timeValue >= $lunchStart && $timeValue < $lunchEnd) {
            return false;
        }

        return true;
    }

    private function clearCacheForDate(Carbon $date)
    {
        $cacheKey = "local_calendar_slots_{$date->format('Y-m-d')}";
        Cache::forget($cacheKey);
    }

    /**
     * Get events for a date range (for calendar display)
     */
    public function getEventsForPeriod(Carbon $startDate, Carbon $endDate): array
    {
        return CalendarEvent::whereBetween('start_time', [$startDate, $endDate])
            ->where('status', 'scheduled')
            ->orderBy('start_time')
            ->get()
            ->map(function ($event) {
                return [
                    'id' => $event->id,
                    'title' => $event->title,
                    'start' => $event->start_time->toIso8601String(),
                    'end' => $event->end_time->toIso8601String(),
                    'type' => $event->event_type,
                    'backgroundColor' => $this->getEventColor($event->event_type),
                    'textColor' => '#ffffff',
                    'extendedProps' => $event->metadata
                ];
            })
            ->toArray();
    }

    private function getEventColor(string $eventType): string
    {
        $colors = [
            'tour' => '#0a2463',      // Navy
            'assessment' => '#d4af37', // Gold
            'virtual' => '#87a96b'     // Sage
        ];

        return $colors[$eventType] ?? '#6c757d';
    }

    /**
     * Get calendar statistics
     */
    public function getCalendarStats(): array
    {
        $today = now()->toDateString();
        $tomorrow = now()->addDay()->toDateString();

        return [
            'today' => [
                'total' => CalendarEvent::whereDate('start_time', $today)->count(),
                'upcoming' => CalendarEvent::whereDate('start_time', $today)
                    ->where('start_time', '>', now())
                    ->count()
            ],
            'tomorrow' => [
                'total' => CalendarEvent::whereDate('start_time', $tomorrow)->count()
            ],
            'this_week' => CalendarEvent::whereBetween('start_time', [
                now()->startOfWeek(),
                now()->endOfWeek()
            ])->count(),
            'next_week' => CalendarEvent::whereBetween('start_time', [
                now()->addWeek()->startOfWeek(),
                now()->addWeek()->endOfWeek()
            ])->count()
        ];
    }
}
