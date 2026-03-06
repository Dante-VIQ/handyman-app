<?php

namespace App\Console\Commands;

use App\Services\CalendarServiceManager;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class SyncCalendar extends Command
{
    protected $signature = 'calendar:sync
                            {--force : Force sync even if disabled}';

    protected $description = 'Synchronize calendar events between services';

    public function handle(CalendarServiceManager $calendarService)
    {
        if (!config('calendar.sync.enabled') && !$this->option('force')) {
            $this->info('Calendar sync is disabled. Use --force to override.');
            return;
        }

        $this->info('Starting calendar synchronization...');

        try {
            $result = $calendarService->syncEvents();

            if (isset($result['error'])) {
                $this->error('Sync failed: ' . $result['error']);
                Log::error('Calendar sync failed', $result);
            } else {
                $this->info('Sync completed successfully.');
                $this->table(
                    array_keys($result),
                    [$result]
                );
                Log::info('Calendar sync completed', $result);
            }

        } catch (\Exception $e) {
            $this->error('Sync error: ' . $e->getMessage());
            Log::error('Calendar sync error', ['error' => $e->getMessage()]);
        }
    }
}
