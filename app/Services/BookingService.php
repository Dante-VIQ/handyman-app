<?php

namespace App\Services;

use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class BookingService
{
    private $workingHours = [
        'start' => '09:00',
        'end' => '17:00',
        'lunch_start' => '12:00',
        'lunch_end' => '13:00'
    ];

    private $timeSlots = [
        'tour' => ['09:00', '10:00', '11:00', '14:00', '15:00', '16:00'],
        'assessment' => ['09:00', '11:00', '14:00', '16:00'],
        'virtual' => ['09:00', '10:00', '11:00', '14:00', '15:00', '16:00']
    ];

    private $maxBookingsPerSlot = [
        'tour' => 3, // Max 3 tours at same time
        'assessment' => 1, // One assessment at a time
        'virtual' => 2 // Max 2 virtual tours at same time
    ];

    /**
     * Get available dates for the next N days
     */
    public function getAvailableDates(int $days = 30): array
    {
        $dates = [];
        $today = Carbon::today();

        for ($i = 0; $i < $days; $i++) {
            $date = $today->copy()->addDays($i);

            // Skip Sundays
            if ($date->dayOfWeek === Carbon::SUNDAY) {
                continue;
            }

            // Check if there are any available slots for this date
            $availableSlots = $this->getAvailableTimeSlots($date);

            if (!empty($availableSlots)) {
                $dates[] = [
                    'date' => $date->format('Y-m-d'),
                    'display' => $date->format('l, M j'),
                    'available' => true,
                    'slots_count' => count($availableSlots)
                ];
            }
        }

        return $dates;
    }

    /**
     * Get available time slots for a specific date and booking type
     */
    public function getAvailableTimeSlots(Carbon $date, ?string $type = null): array
    {
        $cacheKey = "available_slots_{$date->format('Y-m-d')}_{$type}";

        return Cache::remember($cacheKey, 300, function () use ($date, $type) {
            $availableSlots = [];

            // Skip Sundays
            if ($date->dayOfWeek === Carbon::SUNDAY) {
                return $availableSlots;
            }

            // Get all booking types or specific type
            $types = $type ? [$type] : ['tour', 'assessment', 'virtual'];

            foreach ($types as $bookingType) {
                foreach ($this->timeSlots[$bookingType] as $slot) {
                    if ($this->isTimeSlotAvailable($date, $slot, $bookingType)) {
                        $availableSlots[] = [
                            'time' => $slot,
                            'type' => $bookingType,
                            'display' => date('g:i A', strtotime($slot)),
                            'duration' => $this->getDuration($bookingType)
                        ];
                    }
                }
            }

            // Sort by time
            usort($availableSlots, function ($a, $b) {
                return strtotime($a['time']) <=> strtotime($b['time']);
            });

            return $availableSlots;
        });
    }

    /**
     * Check if a specific time slot is available
     */
    public function checkTimeSlotAvailability(Carbon $date, string $time, string $type): bool
    {
        // Validate time format
        if (!preg_match('/^([0-1]?[0-9]|2[0-3]):[0-5][0-9]$/', $time)) {
            return false;
        }

        // Check if time is within working hours
        if (!$this->isWithinWorkingHours($time, $type)) {
            return false;
        }

        // Check if slot is in the predefined slots for this type
        if (!in_array($time, $this->timeSlots[$type])) {
            return false;
        }

        // Check availability
        return $this->isTimeSlotAvailable($date, $time, $type);
    }

    /**
     * Get unavailable time slots for today and tomorrow
     */
    public function getUnavailableTimeSlots(): array
    {
        $unavailable = [];
        $today = Carbon::today();
        $tomorrow = $today->copy()->addDay();

        foreach ([$today, $tomorrow] as $date) {
            if ($date->dayOfWeek === Carbon::SUNDAY) {
                continue;
            }

            foreach (['tour', 'assessment', 'virtual'] as $type) {
                foreach ($this->timeSlots[$type] as $slot) {
                    if (!$this->isTimeSlotAvailable($date, $slot, $type)) {
                        $unavailable[] = [
                            'date' => $date->format('Y-m-d'),
                            'time' => $slot,
                            'type' => $type
                        ];
                    }
                }
            }
        }

        return $unavailable;
    }

    /**
     * Check if time slot is within working hours
     */
    private function isWithinWorkingHours(string $time, string $type): bool
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

        // Virtual tours have extended hours
        if ($type === 'virtual' && $timeValue >= strtotime('17:00') && $timeValue < strtotime('19:00')) {
            return true;
        }

        return true;
    }

    /**
     * Check if a specific time slot is available
     */
    private function isTimeSlotAvailable(Carbon $date, string $time, string $type): bool
    {
        // Get existing bookings for this time slot
        $existingBookings = Booking::whereDate('appointment_date', $date)
            ->where('appointment_time', $time)
            ->where('type', $type)
            ->whereIn('status', ['pending', 'confirmed'])
            ->count();

        // Check against max bookings per slot
        return $existingBookings < $this->maxBookingsPerSlot[$type];
    }

    /**
     * Get duration in minutes for booking type
     */
    private function getDuration(string $type): int
    {
        $durations = [
            'tour' => 60,
            'assessment' => 90,
            'virtual' => 45
        ];

        return $durations[$type] ?? 60;
    }

    /**
     * Check if a date is fully booked
     */
    public function isDateFullyBooked(Carbon $date): bool
    {
        $availableSlots = $this->getAvailableTimeSlots($date);
        return empty($availableSlots);
    }

    /**
     * Get booking statistics
     */
    public function getBookingStats(): array
    {
        $today = Carbon::today();
        $tomorrow = $today->copy()->addDay();

        return [
            'today' => [
                'total' => Booking::whereDate('appointment_date', $today)->count(),
                'confirmed' => Booking::whereDate('appointment_date', $today)
                    ->where('status', 'confirmed')
                    ->count()
            ],
            'tomorrow' => [
                'total' => Booking::whereDate('appointment_date', $tomorrow)->count(),
                'confirmed' => Booking::whereDate('appointment_date', $tomorrow)
                    ->where('status', 'confirmed')
                    ->count()
            ],
            'pending' => Booking::pending()->count(),
            'upcoming' => Booking::upcoming()->count()
        ];
    }
}
