// File: app/Services/CalendarServiceManager.php

<?php

namespace App\Services;

use App\Contracts\CalendarServiceInterface;
use App\Services\Calendar\GoogleCalendarService;
use App\Services\Calendar\LocalCalendarService;
use Illuminate\Support\Facades\Log;

class CalendarServiceManager implements CalendarServiceInterface
{
    private $activeService;
    private $services = [];
    private $primaryService;
    private $fallbackService;

    public function __construct()
    {
        $this->initializeServices();
        $this->determineActiveService();
    }

    private function initializeServices()
    {
        try {
            if (config('services.google.calendar_enabled')) {
                $this->services['google'] = new GoogleCalendarService();
                $this->primaryService = 'google';
            }
        } catch (\Exception $e) {
            Log::warning('Google Calendar service initialization failed: ' . $e->getMessage());
        }

        // Local service is always available as fallback
        $this->services['local'] = new LocalCalendarService();
        $this->fallbackService = 'local';

        // Set active service
        $this->activeService = $this->primaryService ?? $this->fallbackService;
    }

    private function determineActiveService()
    {
        // Check if primary service is operational
        if ($this->primaryService && $this->isServiceOperational($this->services[$this->primaryService])) {
            $this->activeService = $this->primaryService;
        } else {
            $this->activeService = $this->fallbackService;
            Log::info('Using fallback calendar service: ' . $this->activeService);
        }
    }

    private function isServiceOperational($service): bool
    {
        // Simple health check - try to get available slots for tomorrow
        try {
            $testDate = now()->addDay();
            $slots = $service->getAvailableSlots($testDate);
            return is_array($slots);
        } catch (\Exception $e) {
            return false;
        }
    }

    public function getActiveService(): CalendarServiceInterface
    {
        return $this->services[$this->activeService];
    }

    public function getService(string $serviceName): ?CalendarServiceInterface
    {
        return $this->services[$serviceName] ?? null;
    }

    public function createEvent(\App\Models\Booking $booking): ?array
    {
        try {
            $result = $this->getActiveService()->createEvent($booking);

            if (!$result && $this->activeService !== $this->fallbackService) {
                // Try fallback service
                Log::info('Primary calendar service failed, trying fallback');
                $result = $this->services[$this->fallbackService]->createEvent($booking);
            }

            return $result;

        } catch (\Exception $e) {
            Log::error('Calendar event creation failed: ' . $e->getMessage());

            // Try fallback if not already using it
            if ($this->activeService !== $this->fallbackService) {
                try {
                    return $this->services[$this->fallbackService]->createEvent($booking);
                } catch (\Exception $fallbackError) {
                    Log::error('Fallback calendar service also failed: ' . $fallbackError->getMessage());
                }
            }

            return null;
        }
    }

    public function updateEvent(\App\Models\Booking $booking): bool
    {
        try {
            $success = $this->getActiveService()->updateEvent($booking);

            if (!$success && $this->activeService !== $this->fallbackService) {
                // Try fallback service
                $success = $this->services[$this->fallbackService]->updateEvent($booking);
            }

            return $success;

        } catch (\Exception $e) {
            Log::error('Calendar event update failed: ' . $e->getMessage());

            if ($this->activeService !== $this->fallbackService) {
                try {
                    return $this->services[$this->fallbackService]->updateEvent($booking);
                } catch (\Exception $fallbackError) {
                    Log::error('Fallback calendar update failed: ' . $fallbackError->getMessage());
                }
            }

            return false;
        }
    }

    public function deleteEvent(string $eventId): bool
    {
        try {
            $success = $this->getActiveService()->deleteEvent($eventId);

            if (!$success && $this->activeService !== $this->fallbackService) {
                // Try fallback service
                $success = $this->services[$this->fallbackService]->deleteEvent($eventId);
            }

            return $success;

        } catch (\Exception $e) {
            Log::error('Calendar event deletion failed: ' . $e->getMessage());

            if ($this->activeService !== $this->fallbackService) {
                try {
                    return $this->services[$this->fallbackService]->deleteEvent($eventId);
                } catch (\Exception $fallbackError) {
                    Log::error('Fallback calendar deletion failed: ' . $fallbackError->getMessage());
                }
            }

            return false;
        }
    }

    public function getAvailableSlots(\Carbon\Carbon $date): array
    {
        try {
            return $this->getActiveService()->getAvailableSlots($date);

        } catch (\Exception $e) {
            Log::error('Failed to get available slots: ' . $e->getMessage());

            if ($this->activeService !== $this->fallbackService) {
                try {
                    return $this->services[$this->fallbackService]->getAvailableSlots($date);
                } catch (\Exception $fallbackError) {
                    Log::error('Fallback slots also failed: ' . $fallbackError->getMessage());
                }
            }

            return [];
        }
    }

    public function isSlotAvailable(\Carbon\Carbon $date, string $time, string $bookingType): bool
    {
        try {
            return $this->getActiveService()->isSlotAvailable($date, $time, $bookingType);

        } catch (\Exception $e) {
            Log::error('Slot availability check failed: ' . $e->getMessage());

            if ($this->activeService !== $this->fallbackService) {
                try {
                    return $this->services[$this->fallbackService]->isSlotAvailable($date, $time, $bookingType);
                } catch (\Exception $fallbackError) {
                    Log::error('Fallback availability check failed: ' . $fallbackError->getMessage());
                }
            }

            return false;
        }
    }

    public function syncEvents(): array
    {
        try {
            return $this->getActiveService()->syncEvents();

        } catch (\Exception $e) {
            Log::error('Calendar sync failed: ' . $e->getMessage());

            if ($this->activeService !== $this->fallbackService) {
                try {
                    return $this->services[$this->fallbackService]->syncEvents();
                } catch (\Exception $fallbackError) {
                    Log::error('Fallback sync also failed: ' . $fallbackError->getMessage());
                }
            }

            return ['error' => 'Calendar sync failed'];
        }
    }

    /**
     * Get calendar events for display
     */
    public function getEventsForDisplay(\Carbon\Carbon $startDate, \Carbon\Carbon $endDate): array
    {
        // Always use local service for display purposes
        $localService = $this->services['local'] ?? new LocalCalendarService();

        try {
            return $localService->getEventsForPeriod($startDate, $endDate);
        } catch (\Exception $e) {
            Log::error('Failed to get events for display: ' . $e->getMessage());
            return [];
        }
    }

    /**
     * Get calendar statistics
     */
    public function getStatistics(): array
    {
        $localService = $this->services['local'] ?? new LocalCalendarService();

        try {
            return $localService->getCalendarStats();
        } catch (\Exception $e) {
            Log::error('Failed to get calendar statistics: ' . $e->getMessage());
            return [];
        }
    }

    /**
     * Test calendar connection
     */
    public function testConnection(): array
    {
        $results = [];

        foreach ($this->services as $name => $service) {
            try {
                $testDate = now()->addDay();
                $slots = $service->getAvailableSlots($testDate);

                $results[$name] = [
                    'status' => 'connected',
                    'slots_count' => count($slots),
                    'test_date' => $testDate->format('Y-m-d')
                ];
            } catch (\Exception $e) {
                $results[$name] = [
                    'status' => 'failed',
                    'error' => $e->getMessage()
                ];
            }
        }

        $results['active_service'] = $this->activeService;

        return $results;
    }
}
