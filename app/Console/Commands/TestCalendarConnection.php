<?php

namespace App\Console\Commands;

use App\Services\CalendarServiceManager;
use Illuminate\Console\Command;

class TestCalendarConnection extends Command
{
    protected $signature = 'calendar:test';

    protected $description = 'Test calendar service connections';

    public function handle(CalendarServiceManager $calendarService)
    {
        $this->info('Testing calendar service connections...');

        $results = $calendarService->testConnection();

        foreach ($results as $service => $data) {
            $this->line("\n<fg=cyan>{$service}:</>");

            if ($data['status'] === 'connected') {
                $this->info("✓ Connected successfully");
                $this->line("  Slots available: {$data['slots_count']}");
                $this->line("  Test date: {$data['test_date']}");
            } else {
                $this->error("✗ Connection failed");
                $this->line("  Error: {$data['error']}");
            }
        }

        $this->line("\n<fg=yellow>Active service: {$results['active_service']}</>");
    }
}
