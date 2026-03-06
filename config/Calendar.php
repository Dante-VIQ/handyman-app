<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Calendar Configuration
    |--------------------------------------------------------------------------
    |
    | Configuration for calendar services
    |
    */

    'default_service' => env('CALENDAR_SERVICE', 'google'), // google or local

    'services' => [
        'google' => [
            'enabled' => env('GOOGLE_CALENDAR_ENABLED', false),
            'calendar_id' => env('GOOGLE_CALENDAR_ID'),
            'timezone' => env('APP_TIMEZONE', 'America/Los_Angeles'),
        ],

        'local' => [
            'enabled' => true, // Always enabled as fallback
            'storage_days' => 365, // Keep events for 1 year
        ],
    ],

    'cache' => [
        'slots_ttl' => 300, // 5 minutes
        'events_ttl' => 60, // 1 minute
    ],

    'sync' => [
        'enabled' => env('CALENDAR_SYNC_ENABLED', true),
        'interval' => 15, // minutes
        'retry_attempts' => 3,
    ],

    'notifications' => [
        'admin_email' => env('CALENDAR_ADMIN_EMAIL'),
        'error_threshold' => 5, // Number of errors before notification
    ],
];
