<?php

namespace App\Mail;

use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingCancellation extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;
    public $reason;
    public $isAdmin;
    public $cancellationDetails;

    public function __construct(Booking $booking, ?string $reason = null, bool $isAdmin = false)
    {
        $this->booking = $booking;
        $this->reason = $reason;
        $this->isAdmin = $isAdmin;
        $this->cancellationDetails = $this->prepareCancellationDetails();
    }

    public function build()
    {
        if ($this->isAdmin) {
            $subject = "Booking Cancelled: {$this->booking->booking_number} - {$this->booking->full_name}";
            $view = 'emails.admin.booking-cancellation';
        } else {
            $subject = "Amazing Palace - Booking Cancellation Confirmation";
            $view = 'emails.booking.cancellation';
        }

        return $this->subject($subject)
                    ->view($view)
                    ->with([
                        'booking' => $this->booking,
                        'reason' => $this->reason,
                        'details' => $this->cancellationDetails,
                        'isAdmin' => $this->isAdmin
                    ]);
    }

    private function prepareCancellationDetails()
    {
        return [
            'Booking Number' => $this->booking->booking_number,
            'Original Appointment' => "{$this->booking->formatted_date} at {$this->booking->formatted_time}",
            'Type' => $this->booking->type_label,
            'Cancelled By' => $this->booking->full_name,
            'Cancellation Time' => now()->format('M j, Y g:i A'),
            'Reason' => $this->reason ?? 'Not specified'
        ];
    }
}
