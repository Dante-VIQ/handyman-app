<?php

namespace App\Services\Calendar;

use Calendar;
use Carbon\Carbon;
use GuzzleHttp\Client;
use App\Models\Booking;
use Google\Service\Calendar\Event;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;
use Google\Service\Calendar\EventDateTime;
use App\Contracts\CalendarServiceInterface;

class GoogleCalendarService implements CalendarServiceInterface
{
    private $client;
    private $service;
    private $calendarId;
    private $timezone;

    public function __construct()
    {
        $this->calendarId = config('services.google.calendar_id');
        $this->timezone = config('app.timezone', 'America/Los_Angeles');
        $this->initializeClient();
    }

    private function initializeClient()
    {
        try {
            $this->client = new Client();
            $this->client->setApplicationName('Amazing Palace Booking System');
            $this->client->setAuthConfig(config('services.google.credentials'));
            $this->client->addScope(Calendar::CALENDAR);

            $this->service = new Calendar($this->client);

        } catch (\Exception $e) {
            Log::error('Failed to initialize Google Calendar client: ' . $e->getMessage());
            throw new \Exception('Calendar service initialization failed');
        }
    }

    public function createEvent(Booking $booking): ?array
    {
        if (!$this->calendarId) {
            Log::warning('Google Calendar ID not configured');
            return null;
        }

        try {
            $event = $this->createEventObject($booking);

            $createdEvent = $this->service->events->insert($this->calendarId, $event, [
                'sendUpdates' => 'all',
                'conferenceDataVersion' => 1
            ]);

            // Clear cache for this date
            $this->clearCacheForDate($booking->appointment_date);

            Log::info('Google Calendar event created', [
                'booking_id' => $booking->id,
                'event_id' => $createdEvent->getId()
            ]);

            return [
                'id' => $createdEvent->getId(),
                'htmlLink' => $createdEvent->getHtmlLink(),
                'hangoutLink' => $createdEvent->getHangoutLink(),
                'iCalUID' => $createdEvent->getICalUID()
            ];

        } catch (\Exception $e) {
            Log::error('Failed to create Google Calendar event: ' . $e->getMessage(), [
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
            $event = $this->createEventObject($booking);

            $this->service->events->update($this->calendarId, $booking->calendar_event_id, $event, [
                'sendUpdates' => 'all'
            ]);

            // Clear cache for old and new dates
            $this->clearCacheForDate($booking->appointment_date);

            Log::info('Google Calendar event updated', [
                'booking_id' => $booking->id,
                'event_id' => $booking->calendar_event_id
            ]);

            return true;

        } catch (\Exception $e) {
            Log::error('Failed to update Google Calendar event: ' . $e->getMessage(), [
                'booking' => $booking->toArray()
            ]);
            return false;
        }
    }

    public function deleteEvent(string $eventId): bool
    {
        try {
            $this->service->events->delete($this->calendarId, $eventId, [
                'sendUpdates' => 'all'
            ]);

            Log::info('Google Calendar event deleted', [
                'event_id' => $eventId
            ]);

            return true;

        } catch (\Exception $e) {
            Log::error('Failed to delete Google Calendar event: ' . $e->getMessage(), [
                'event_id' => $eventId
            ]);
            return false;
        }
    }

    public function getAvailableSlots(Carbon $date): array
    {
        $cacheKey = "calendar_slots_{$date->format('Y-m-d')}";

        return Cache::remember($cacheKey, 300, function () use ($date) {
            return $this->fetchAvailableSlots($date);
        });
    }

    private function fetchAvailableSlots(Carbon $date): array
    {
        $slots = [];

        // Get all events for the day
        $events = $this->getEventsForDate($date);

        // Define working hours and time slots
        $workingHours = $this->getWorkingHours();
        $timeSlots = $this->generateTimeSlots($workingHours);

        // Check each slot for availability
        foreach ($timeSlots as $slot) {
            $slotTime = $date->copy()->setTimeFromTimeString($slot['time']);
            $endTime = $slotTime->copy()->addMinutes($slot['duration']);

            if ($this->isSlotConflictFree($slotTime, $endTime, $events)) {
                $slots[] = [
                    'time' => $slot['time'],
                    'type' => $slot['type'],
                    'available' => true,
                    'display' => date('g:i A', strtotime($slot['time']))
                ];
            }
        }

        return $slots;
    }

    public function isSlotAvailable(Carbon $date, string $time, string $bookingType): bool
    {
        $duration = $this->getDurationForType($bookingType);
        $slotTime = $date->copy()->setTimeFromTimeString($time);
        $endTime = $slotTime->copy()->addMinutes($duration);

        // Check against existing events
        $events = $this->getEventsForDate($date);

        return $this->isSlotConflictFree($slotTime, $endTime, $events);
    }

    public function syncEvents(): array
    {
        try {
            $syncStats = [
                'created' => 0,
                'updated' => 0,
                'deleted' => 0,
                'errors' => 0
            ];

            // Sync from today to 60 days in the future
            $startDate = now()->startOfDay();
            $endDate = now()->addDays(60)->endOfDay();

            // Get events from Google Calendar
            $calendarEvents = $this->getEventsFromCalendar($startDate, $endDate);

            // Get bookings from database
            $bookings = \App\Models\Booking::whereBetween('appointment_date', [$startDate, $endDate])
                ->whereNotNull('calendar_event_id')
                ->get()
                ->keyBy('calendar_event_id');

            // Process synchronization
            foreach ($calendarEvents as $calendarEvent) {
                // Update or create booking reference
                // This would be implemented based on specific sync logic
            }

            // Clear all cache
            Cache::tags(['calendar_slots'])->flush();

            Log::info('Calendar sync completed', $syncStats);

            return $syncStats;

        } catch (\Exception $e) {
            Log::error('Calendar sync failed: ' . $e->getMessage());
            return ['error' => $e->getMessage()];
        }
    }

    private function createEventObject(Booking $booking): Event
    {
        $startDateTime = new EventDateTime();
        $startDateTime->setDateTime($booking->appointment_date->setTimeFromTimeString($booking->appointment_time)->toRfc3339String());
        $startDateTime->setTimeZone($this->timezone);

        $endDateTime = new EventDateTime();
        $endTime = $booking->appointment_date->setTimeFromTimeString($booking->appointment_time)
            ->addMinutes($booking->duration);
        $endDateTime->setDateTime($endTime->toRfc3339String());
        $endDateTime->setTimeZone($this->timezone);

        $event = new Event();
        $event->setSummary("Amazing Palace: {$booking->type_label} - {$booking->full_name}");

        $description = $this->generateEventDescription($booking);
        $event->setDescription($description);

        $event->setStart($startDateTime);
        $event->setEnd($endDateTime);

        // Add attendees
        $attendees = $this->createAttendees($booking);
        if (!empty($attendees)) {
            $event->setAttendees($attendees);
        }

        // Add location
        $event->setLocation('123 Luxury Lane, Seattle, WA 98101');

        // Add conference data for virtual tours
        if ($booking->type === 'virtual') {
            $event->setConferenceData($this->createConferenceData());
        }

        // Set reminders
        $reminders = new \Google\Service\Calendar\EventReminders();
        $reminders->setUseDefault(false);
        $reminders->setOverrides([
            new \Google\Service\Calendar\EventReminder(['method' => 'email', 'minutes' => 1440]), // 24 hours
            new \Google\Service\Calendar\EventReminder(['method' => 'popup', 'minutes' => 30]),
        ]);
        $event->setReminders($reminders);

        // Add custom properties
        $event->setExtendedProperties([
            'private' => [
                'booking_id' => $booking->id,
                'booking_number' => $booking->booking_number,
                'booking_type' => $booking->type,
                'attendees_count' => $booking->attendees
            ]
        ]);

        return $event;
    }

    private function generateEventDescription(Booking $booking): string
    {
        $description = "Amazing Palace Adult Family Home\n";
        $description .= "Booking Type: {$booking->type_label}\n";
        $description .= "Booking #: {$booking->booking_number}\n\n";

        $description .= "Customer Information:\n";
        $description .= "Name: {$booking->full_name}\n";
        $description .= "Phone: {$booking->phone}\n";
        $description .= "Email: {$booking->email}\n";
        $description .= "Relationship: {$booking->relationship}\n";

        if ($booking->resident_name) {
            $description .= "Resident: {$booking->resident_name}\n";
        }

        $description .= "Attendees: {$booking->attendees}\n\n";

        if ($booking->special_requests) {
            $description .= "Special Requests:\n{$booking->special_requests}\n\n";
        }

        $description .= "Duration: {$booking->duration} minutes\n";
        $description .= "Status: {$booking->status}\n\n";

        $description .= "Internal Notes:\n";
        $description .= "Created: {$booking->created_at->format('M j, Y g:i A')}\n";

        if ($booking->confirmed_at) {
            $description .= "Confirmed: {$booking->confirmed_at->format('M j, Y g:i A')}\n";
        }

        return $description;
    }

    private function createAttendees(Booking $booking): array
    {
        $attendees = [];

        // Add customer email
        if (filter_var($booking->email, FILTER_VALIDATE_EMAIL)) {
            $attendees[] = [
                'email' => $booking->email,
                'displayName' => $booking->full_name,
                'responseStatus' => 'accepted'
            ];
        }

        // Add admin emails
        $adminEmails = [
            config('booking.email.admin'),
            config('booking.email.info')
        ];

        foreach ($adminEmails as $adminEmail) {
            if (filter_var($adminEmail, FILTER_VALIDATE_EMAIL)) {
                $attendees[] = [
                    'email' => $adminEmail,
                    'displayName' => 'Amazing Palace Admin',
                    'responseStatus' => 'accepted'
                ];
            }
        }

        return $attendees;
    }

    private function createConferenceData(): \Google\Service\Calendar\ConferenceData
    {
        $conferenceData = new \Google\Service\Calendar\ConferenceData();
        $conferenceSolutionKey = new \Google\Service\Calendar\ConferenceSolutionKey();
        $conferenceSolutionKey->setType('hangoutsMeet');

        $createRequest = new \Google\Service\Calendar\CreateConferenceRequest();
        $createRequest->setRequestId(uniqid());
        $createRequest->setConferenceSolutionKey($conferenceSolutionKey);

        $conferenceData->setCreateRequest($createRequest);

        return $conferenceData;
    }

    private function getEventsForDate(Carbon $date)
    {
        $timeMin = $date->copy()->startOfDay()->toRfc3339String();
        $timeMax = $date->copy()->endOfDay()->toRfc3339String();

        try {
            $events = $this->service->events->listEvents($this->calendarId, [
                'timeMin' => $timeMin,
                'timeMax' => $timeMax,
                'singleEvents' => true,
                'orderBy' => 'startTime',
                'showDeleted' => false
            ]);

            return $events->getItems();

        } catch (\Exception $e) {
            Log::error('Failed to fetch events from Google Calendar: ' . $e->getMessage());
            return [];
        }
    }

    private function getEventsFromCalendar(Carbon $startDate, Carbon $endDate)
    {
        try {
            $events = $this->service->events->listEvents($this->calendarId, [
                'timeMin' => $startDate->toRfc3339String(),
                'timeMax' => $endDate->toRfc3339String(),
                'singleEvents' => true,
                'orderBy' => 'startTime',
                'showDeleted' => false,
                'maxResults' => 2500
            ]);

            return $events->getItems();

        } catch (\Exception $e) {
            Log::error('Failed to fetch events from Google Calendar for sync: ' . $e->getMessage());
            return [];
        }
    }

    private function getWorkingHours(): array
    {
        return [
            'start' => '09:00',
            'end' => '17:00',
            'lunch_start' => '12:00',
            'lunch_end' => '13:00'
        ];
    }

    private function generateTimeSlots(array $workingHours): array
    {
        $slots = [];
        $bookingTypes = [
            'tour' => 60,
            'assessment' => 90,
            'virtual' => 45
        ];

        foreach ($bookingTypes as $type => $duration) {
            $current = strtotime($workingHours['start']);
            $end = strtotime($workingHours['end']);
            $lunchStart = strtotime($workingHours['lunch_start']);
            $lunchEnd = strtotime($workingHours['lunch_end']);

            while ($current < $end) {
                $slotEnd = $current + ($duration * 60);

                // Skip if slot goes into lunch break
                if ($current < $lunchEnd && $slotEnd > $lunchStart) {
                    $current = $lunchEnd;
                    continue;
                }

                // Skip if slot goes beyond working hours
                if ($slotEnd > $end) {
                    break;
                }

                $slots[] = [
                    'time' => date('H:i', $current),
                    'duration' => $duration,
                    'type' => $type
                ];

                $current += 1800; // Move in 30-minute increments
            }
        }

        return $slots;
    }

    private function getDurationForType(string $type): int
    {
        $durations = [
            'tour' => 60,
            'assessment' => 90,
            'virtual' => 45
        ];

        return $durations[$type] ?? 60;
    }

    private function isSlotConflictFree(Carbon $startTime, Carbon $endTime, array $events): bool
    {
        foreach ($events as $event) {
            $eventStart = new Carbon($event->start->dateTime ?? $event->start->date);
            $eventEnd = new Carbon($event->end->dateTime ?? $event->end->date);

            // Check for overlap
            if ($startTime < $eventEnd && $endTime > $eventStart) {
                return false;
            }
        }

        return true;
    }

    private function clearCacheForDate(Carbon $date)
    {
        $cacheKey = "calendar_slots_{$date->format('Y-m-d')}";
        Cache::forget($cacheKey);
    }
}
