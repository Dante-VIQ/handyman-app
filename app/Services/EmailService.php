<?php

namespace App\Services;

use App\Models\Booking;
use App\Mail\BookingReschedule;
use App\Mail\BookingCancellation;
use App\Mail\BookingConfirmation;
use Illuminate\Support\Facades\Log;
use App\Mail\NewBookingNotification;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminBookingNotification;

class EmailService
{
    private $adminEmail = 'admissions@amazingpalaceseattle.com';
    private $infoEmail = 'info@amazingpalaceseattle.com';

    /**
     * Send booking confirmation to customer
     */
    public function sendBookingConfirmation(Booking $booking): bool
    {
        try {
            Mail::to($booking->email)
                ->cc($this->infoEmail)
                ->send(new BookingConfirmation($booking));

            return true;
        } catch (\Exception $e) {
            Log::error('Failed to send booking confirmation: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Send notification to admin team
     */
    public function sendAdminNotification(Booking $booking): bool
    {
        try {
            Mail::to($this->adminEmail)
                ->send(new NewBookingNotification($booking));

            return true;
        } catch (\Exception $e) {
            Log::error('Failed to send admin notification: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Send cancellation notification
     */
    public function sendCancellationNotification(Booking $booking, ?string $reason = null): bool
    {
        try {
            // Send to customer
            Mail::to($booking->email)
                ->send(new BookingCancellation($booking, $reason));

            // Send to admin
            Mail::to($this->adminEmail)
                ->send(new BookingCancellation($booking, $reason, true));

            return true;
        } catch (\Exception $e) {
            Log::error('Failed to send cancellation notification: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Send reschedule notification
     */
    public function sendRescheduleNotification(Booking $booking, $oldDate, $oldTime): bool
    {
        try {
            Mail::to($booking->email)
                ->cc($this->adminEmail)
                ->send(new BookingReschedule($booking, $oldDate, $oldTime));

            return true;
        } catch (\Exception $e) {
            Log::error('Failed to send reschedule notification: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Send reminder for upcoming appointments
     */
    public function sendReminder(Booking $booking): bool
    {
        try {
            Mail::to($booking->email)
                ->send(new \App\Mail\BookingReminder($booking));

            $booking->update(['reminder_sent_at' => now()]);

            return true;
        } catch (\Exception $e) {
            Log::error('Failed to send reminder: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Send follow-up email after appointment
     */
    public function sendFollowUp(Booking $booking): bool
    {
        try {
            Mail::to($booking->email)
                ->send(new \App\Mail\BookingFollowUp($booking));

            return true;
        } catch (\Exception $e) {
            Log::error('Failed to send follow-up: ' . $e->getMessage());
            return false;
        }
    }
}
