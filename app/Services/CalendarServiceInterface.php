<?php

namespace App\Contracts;

use App\Models\Booking;

interface CalendarServiceInterface
{
    /**
     * Create a calendar event for a booking
     */
    public function createEvent(Booking $booking): ?array;

    /**
     * Update an existing calendar event
     */
    public function updateEvent(Booking $booking): bool;

    /**
     * Delete a calendar event
     */
    public function deleteEvent(string $eventId): bool;

    /**
     * Get available time slots for a date
     */
    public function getAvailableSlots(\Carbon\Carbon $date): array;

    /**
     * Check if a time slot is available
     */
    public function isSlotAvailable(\Carbon\Carbon $date, string $time, string $bookingType): bool;

    /**
     * Sync calendar events
     */
    public function syncEvents(): array;
}
