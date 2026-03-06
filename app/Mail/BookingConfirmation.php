<?php

namespace App\Mail;

use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;
    public $bookingDetails;
    public $preparationInstructions;

    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
        $this->bookingDetails = $this->prepareBookingDetails();
        $this->preparationInstructions = $this->getPreparationInstructions();
    }

    public function build()
    {
        return $this->subject('Amazing Palace - Booking Confirmation')
                    ->view('emails.booking.confirmation')
                    ->with([
                        'booking' => $this->booking,
                        'details' => $this->bookingDetails,
                        'instructions' => $this->preparationInstructions
                    ]);
    }

    private function prepareBookingDetails()
    {
        return [
            'Booking Number' => $this->booking->booking_number,
            'Appointment Type' => $this->booking->type_label,
            'Date' => $this->booking->formatted_date,
            'Time' => $this->booking->formatted_time,
            'Duration' => $this->booking->duration . ' minutes',
            'Your Name' => $this->booking->full_name,
            'Email' => $this->booking->email,
            'Phone' => $this->booking->phone,
            'Number of Attendees' => $this->booking->attendees . ' person(s)',
            'Resident Name' => $this->booking->resident_name ?? 'Not specified',
            'Special Requests' => $this->booking->special_requests ?? 'None'
        ];
    }

    private function getPreparationInstructions()
    {
        $instructions = [
            'tour' => [
                'Please arrive 10 minutes before your scheduled time.',
                'Bring a list of any questions you may have.',
                'Comfortable walking shoes are recommended.',
                'Feel free to bring family members or friends.',
                'Photo ID may be required for security purposes.'
            ],
            'assessment' => [
                'Please bring any relevant medical records or medication lists.',
                'Arrive 15 minutes early to complete necessary paperwork.',
                'Have insurance information available if applicable.',
                'Bring a list of current medications and dosages.',
                'Consider bringing a family member or caregiver.'
            ],
            'virtual' => [
                'Test your video/audio connection 10 minutes before the tour.',
                'Ensure you have a stable internet connection.',
                'Prepare any questions in advance.',
                'Find a quiet, well-lit space for the call.',
                'Have pen and paper ready for notes.'
            ]
        ];

        return $instructions[$this->booking->type] ?? $instructions['tour'];
    }
}
