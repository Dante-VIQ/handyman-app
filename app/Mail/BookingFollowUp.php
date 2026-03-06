<?php

namespace App\Mail;

use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingFollowUp extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;
    public $followUpQuestions;
    public $nextSteps;

    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
        $this->followUpQuestions = $this->getFollowUpQuestions();
        $this->nextSteps = $this->getNextSteps();
    }

    public function build()
    {
        $subject = "Thank You for Visiting Amazing Palace";

        return $this->subject($subject)
                    ->view('emails.booking.follow-up')
                    ->with([
                        'booking' => $this->booking,
                        'questions' => $this->followUpQuestions,
                        'nextSteps' => $this->nextSteps,
                        'contactEmail' => 'admissions@amazingpalaceseattle.com',
                        'contactPhone' => '(206) 555-1234'
                    ]);
    }

    private function getFollowUpQuestions()
    {
        return [
            'How was your experience during the tour/assessment?',
            'Did our team address all your questions and concerns?',
            'What additional information would be helpful for your decision?',
            'Is there anything specific we can clarify about our services or facility?'
        ];
    }

    private function getNextSteps()
    {
        return [
            'Schedule a follow-up meeting with our admissions coordinator',
            'Submit any required paperwork or medical information',
            'Discuss financial options and payment plans',
            'Arrange a trial stay if applicable',
            'Coordinate move-in logistics'
        ];
    }
}
