<?php

namespace App\Mail;

use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingReminder extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;
    public $reminderDetails;
    public $directions;

    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
        $this->reminderDetails = $this->prepareReminderDetails();
        $this->directions = $this->getDirections();
    }

    public function build()
    {
        $subject = "Reminder: Your Amazing Palace Appointment Tomorrow";

        return $this->subject($subject)
                    ->view('emails.booking.reminder')
                    ->with([
                        'booking' => $this->booking,
                        'details' => $this->reminderDetails,
                        'directions' => $this->directions,
                        'cancelUrl' => route('booking.cancel', $this->booking),
                        'rescheduleUrl' => route('booking.reschedule', $this->booking)
                    ]);
    }

    private function prepareReminderDetails()
    {
        return [
            'Appointment' => "{$this->booking->formatted_date} at {$this->booking->formatted_time}",
            'Type' => $this->booking->type_label,
            'Duration' => $this->booking->duration . ' minutes',
            'Location' => '123 Luxury Lane, Seattle, WA 98101',
            'Parking' => 'Free visitor parking available on-site',
            'Contact' => '(206) 555-1234',
            'Check-in' => 'Please arrive 10-15 minutes before your appointment'
        ];
    }

    private function getDirections()
    {
        return [
            'From I-5 North/South' => 'Take exit 167 for Seneca Street. Turn onto 6th Ave, then left onto Madison St. Continue for 0.5 miles, then turn right onto Luxury Lane.',
            'From Highway 99' => 'Take the Western Ave exit. Continue on Western Ave for 1 mile, then turn left onto Lenora St. Turn right onto 1st Ave, then left onto Luxury Lane.',
            'Public Transportation' => 'Nearest bus stop: Madison St & 4th Ave (routes 11, 12, 43). Nearest light rail: Westlake Station (0.8 miles away).',
            'Parking Instructions' => 'Visitor parking is available in the front lot. Look for signs marked "Visitor Parking - Amazing Palace".'
        ];
    }
}
