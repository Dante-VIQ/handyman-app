<?php

namespace App\Mail;

use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewBookingNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;
    public $priority;

    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
        $this->priority = $this->determinePriority();
    }

    public function build()
    {
        $subject = "New Booking: {$this->booking->full_name} - {$this->booking->type_label}";

        if ($this->priority === 'high') {
            $subject = "URGENT: " . $subject;
        }

        return $this->subject($subject)
                    ->view('emails.admin.booking-notification')
                    ->with([
                        'booking' => $this->booking,
                        'priority' => $this->priority,
                        'actionUrl' => route('admin.bookings.show', $this->booking->id)
                    ]);
    }

    private function determinePriority()
    {
        // High priority for same-day bookings or care assessments
        if ($this->booking->appointment_date->isToday() ||
            $this->booking->type === 'assessment') {
            return 'high';
        }

        // Medium priority for tomorrow's bookings
        if ($this->booking->appointment_date->isTomorrow()) {
            return 'medium';
        }

        return 'low';
    }
}
