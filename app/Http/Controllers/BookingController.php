<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Services\EmailService;
use App\Services\BookingService;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\BookingRequest;


class BookingController extends Controller
{
    protected $bookingService;
    protected $emailService;
    // protected $calendarServiceInterface;

    public function __construct(
        BookingService $bookingService,
        EmailService $emailService,
        // CalendarServiceInterface $calendarServiceInterface
    ) {
        $this->bookingService = $bookingService;
        $this->emailService = $emailService;
        // $this->calendarServiceInterface = $calendarServiceInterface;
    }

    /**
     * Display the booking form page
     */
public function showForm()
{
    return view('booking', [
        'availableDates' => $this->bookingService->getAvailableDates(30),
        'unavailableSlots' => $this->bookingService->getUnavailableTimeSlots(),
        'bookingTypes' => [
            'tour' => 'Facility Tour (60 min)',
            'assessment' => 'Care Assessment (90 min)',
            'virtual' => 'Virtual Tour (45 min)'
        ],
        'relationships' => [
            'spouse' => 'Spouse/Partner',
            'child' => 'Child',
            'sibling' => 'Sibling',
            'other-relative' => 'Other Relative',
            'friend' => 'Friend',
            'self' => 'Self (Potential Resident)',
            'professional' => 'Professional (Social Worker, Doctor, etc.)'
        ]
    ]);
}


    /**
     * Check availability for a specific date
     */
    public function checkAvailability(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'type' => 'nullable|in:tour,assessment,virtual'
        ]);

        $date = Carbon::parse($request->date);
        $type = $request->type;

        $availableSlots = $this->bookingService->getAvailableTimeSlots($date, $type);
        $isAvailable = !empty($availableSlots);

        return response()->json([
            'success' => true,
            'date' => $date->format('Y-m-d'),
            'available_slots' => $availableSlots,
            'is_available' => $isAvailable,
            'formatted_date' => $date->format('l, F j, Y')
        ]);
    }

    /**
     * Handle booking form submission
     */
    public function submitBooking(BookingRequest $request)
    {
        DB::beginTransaction();

        try {
            // Check availability
            $date = Carbon::parse($request->appointment_date);
            $isAvailable = $this->bookingService->checkTimeSlotAvailability(
                $date,
                $request->appointment_time,
                $request->type
            );

            if (!$isAvailable) {
                return response()->json([
                    'success' => false,
                    'message' => 'The selected time slot is no longer available. Please choose another time.',
                    'errors' => ['appointment_time' => ['This time slot is no longer available.']]
                ], 422);
            }

            // Check for duplicate booking (same email, same day)
            $existingBooking = Booking::where('email', $request->email)
                ->whereDate('appointment_date', $date)
                ->where('status', '!=', 'cancelled')
                ->first();

            if ($existingBooking) {
                return response()->json([
                    'success' => false,
                    'message' => 'You already have a booking for this date. Please choose a different date or contact us.',
                    'errors' => ['appointment_date' => ['You already have a booking for this date.']]
                ], 422);
            }

            // Create the booking
            $booking = Booking::create([
                'type' => $request->type,
                'appointment_date' => $date,
                'appointment_time' => $request->appointment_time,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'relationship' => $request->relationship,
                'resident_name' => $request->resident_name,
                'attendees' => $request->attendees,
                'special_requests' => $request->special_requests,
                'status' => 'pending'
            ]);

            // Send confirmation emails
            $this->emailService->sendBookingConfirmation($booking);
            $this->emailService->sendAdminNotification($booking);

            // Add to calendar (Google Calendar or similar)
            // $calendarEvent = $this->calendarServiceInterface->createAppointmentEvent($booking);

            // if ($calendarEvent) {
            //     $booking->update(['calendar_event_id' => $calendarEvent['id']]);
            // }

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Booking submitted successfully!',
                'booking_id' => $booking->booking_number,
                'redirect_url' => route('booking.confirm', $booking)
            ]);

        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Booking submission failed: ' . $e->getMessage(), [
                'exception' => $e,
                'request_data' => $request->all()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'An error occurred while processing your booking. Please try again or contact us.',
                'error' => config('app.debug') ? $e->getMessage() : null
            ], 500);
        }
    }

    /**
     * Show booking confirmation page
     */
    public function showConfirmation(Booking $booking)
    {
        if ($booking->status === 'cancelled') {
            abort(404);
        }

        return view('booking.confirmation', [
            'booking' => $booking,
            'pageTitle' => 'Booking Confirmation - Amazing Palace'
        ]);
    }

    /**
     * Cancel a booking
     */
    public function cancelBooking(Request $request, Booking $booking)
    {
        $request->validate([
            'reason' => 'nullable|string|max:500'
        ]);

        if (!$booking->isUpcoming()) {
            return response()->json([
                'success' => false,
                'message' => 'Only upcoming bookings can be cancelled.'
            ], 400);
        }

        DB::beginTransaction();

        try {
            $booking->cancel($request->reason);

            // Remove from calendar
            // if ($booking->calendar_event_id) {
            //     $this->calendarServiceInterface->deleteEvent($booking->calendar_event_id);
            // }

            // Send cancellation emails
            $this->emailService->sendCancellationNotification($booking, $request->reason);

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Booking cancelled successfully.',
                'redirect_url' => route('booking.index')
            ]);

        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Booking cancellation failed: ' . $e->getMessage(), [
                'booking_id' => $booking->id,
                'reason' => $request->reason
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Failed to cancel booking. Please contact us.'
            ], 500);
        }
    }

    /**
     * Reschedule a booking
     */
    public function rescheduleBooking(Request $request, Booking $booking)
    {
        $request->validate([
            'new_date' => 'required|date|after_or_equal:today',
            'new_time' => 'required'
        ]);

        if (!$booking->isUpcoming()) {
            return response()->json([
                'success' => false,
                'message' => 'Only upcoming bookings can be rescheduled.'
            ], 400);
        }

        $newDate = Carbon::parse($request->new_date);

        // Check availability for new time slot
        $isAvailable = $this->bookingService->checkTimeSlotAvailability(
            $newDate,
            $request->new_time,
            $booking->type
        );

        if (!$isAvailable) {
            return response()->json([
                'success' => false,
                'message' => 'The selected time slot is not available.'
            ], 422);
        }

        DB::beginTransaction();

        try {
            $oldDate = $booking->appointment_date;
            $oldTime = $booking->appointment_time;

            // Update booking
            $booking->update([
                'appointment_date' => $newDate,
                'appointment_time' => $request->new_time,
                'notes' => $booking->notes . "\nRescheduled from " .
                          $oldDate->format('Y-m-d') . " " . $oldTime .
                          " to " . $newDate->format('Y-m-d') . " " . $request->new_time
            ]);

            // Update calendar event
            // if ($booking->calendar_event_id) {
            //     $this->calendarServiceInterface->updateEvent($booking);
            // }

            // Send reschedule notification
            $this->emailService->sendRescheduleNotification($booking, $oldDate, $oldTime);

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Booking rescheduled successfully.',
                'booking' => [
                    'date' => $booking->formatted_date,
                    'time' => $booking->formatted_time
                ]
            ]);

        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Booking reschedule failed: ' . $e->getMessage(), [
                'booking_id' => $booking->id,
                'new_date' => $request->new_date,
                'new_time' => $request->new_time
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Failed to reschedule booking. Please contact us.'
            ], 500);
        }
    }

    /**
     * Get booking details for admin view
     */
    public function getBookingDetails(Booking $booking)
    {
        return response()->json([
            'success' => true,
            'booking' => [
                'id' => $booking->id,
                'booking_number' => $booking->booking_number,
                'type' => $booking->type_label,
                'date' => $booking->formatted_date,
                'time' => $booking->formatted_time,
                'duration' => $booking->duration,
                'full_name' => $booking->full_name,
                'email' => $booking->email,
                'phone' => $booking->phone,
                'relationship' => $booking->relationship,
                'resident_name' => $booking->resident_name,
                'attendees' => $booking->attendees,
                'special_requests' => $booking->special_requests,
                'status' => $booking->status,
                'created_at' => $booking->created_at->format('M j, Y g:i A'),
                'confirmed_at' => $booking->confirmed_at ? $booking->confirmed_at->format('M j, Y g:i A') : null
            ]
        ]);
    }
}
