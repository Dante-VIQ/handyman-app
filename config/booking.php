<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Booking Configuration
    |--------------------------------------------------------------------------
    |
    | Configuration settings for the booking system
    |
    */

    // Working hours
    'working_hours' => [
        'start' => '09:00',
        'end' => '17:00',
        'lunch_start' => '12:00',
        'lunch_end' => '13:00',
    ],

    // Time slots for each booking type
    'time_slots' => [
        'tour' => ['09:00', '10:00', '11:00', '14:00', '15:00', '16:00'],
        'assessment' => ['09:00', '11:00', '14:00', '16:00'],
        'virtual' => ['09:00', '10:00', '11:00', '14:00', '15:00', '16:00'],
    ],

    // Maximum bookings per time slot
    'max_bookings_per_slot' => [
        'tour' => 3,
        'assessment' => 1,
        'virtual' => 2,
    ],

    // Booking duration in minutes
    'durations' => [
        'tour' => 60,
        'assessment' => 90,
        'virtual' => 45,
    ],

    // Email recipients
    'email' => [
        'admin' => env('BOOKING_ADMIN_EMAIL', 'admissions@amazingpalaceseattle.com'),
        'info' => env('BOOKING_INFO_EMAIL', 'info@amazingpalaceseattle.com'),
        'bcc' => env('BOOKING_BCC_EMAIL', null),
    ],

    // Calendar integration
    'calendar' => [
        'enabled' => env('CALENDAR_ENABLED', false),
        'provider' => env('CALENDAR_PROVIDER', 'google'),
        'calendar_id' => env('CALENDAR_ID'),
    ],

    // Reminder settings
    'reminder' => [
        'enabled' => true,
        'hours_before' => 24,
    ],

    // Booking limits
    'limits' => [
        'max_attendees' => 10,
        'max_days_advance' => 90,
        'min_hours_advance' => 2, // Minimum hours before booking
    ],
];
