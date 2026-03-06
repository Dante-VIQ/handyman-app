<?php

namespace App\Mail;

use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Carbon\Carbon;

class BookingReschedule extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;
    public $oldDate;
    public $oldTime;
    public $rescheduleDetails;

    public function __construct(Booking $booking, Carbon $oldDate, string $oldTime)
    {
        $this->booking = $booking;
        $this->oldDate = $oldDate;
        $this->oldTime = $oldTime;
        $this->rescheduleDetails = $this->prepareRescheduleDetails();
    }

    public function build()
    {
        $subject = "Amazing Palace - Booking Reschedule Confirmation";

        return $this->subject($subject)
                    ->view('emails.booking.reschedule')
                    ->with([
                        'booking' => $this->booking,
                        'oldAppointment' => "{$this->oldDate->format('l, F j, Y')} at " . date('g:i A', strtotime($this->oldTime)),
                        'newAppointment' => "{$this->booking->formatted_date} at {$this->booking->formatted_time}",
                        'details' => $this->rescheduleDetails
                    ]);
    }

    private function prepareRescheduleDetails()
    {
        return [
            'Booking Number' => $this->booking->booking_number,
            'Previous Appointment' => "{$this->oldDate->format('M j, Y')} at " . date('g:i A', strtotime($this->oldTime)),
            'New Appointment' => "{$this->booking->formatted_date} at {$this->booking->formatted_time}",
            'Type' => $this->booking->type_label,
            'Duration' => $this->booking->duration . ' minutes',
            'Rescheduled On' => now()->format('M j, Y g:i A')
        ];
    }
}
