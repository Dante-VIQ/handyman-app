<?php

namespace App\Http\Controllers;

use App\Mail\AppointmentNotification;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use App\Mail\AppointmentRequestMail;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::latest()->paginate(10);

        return view('admin.partials.requests', compact('appointments'));
    }
    public function create()
    {
        return view('components.partials.appointment');
    }

    public function show()
    {
        return view('components.partials.form');
    }
public function store(Request $request)
{
    // Validate flexible form input (support both forms)
    $validated = $request->validate([
        'full_name' => 'nullable|string|max:255',
        'phone' => 'nullable|string|max:20',
        'city' => 'nullable|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string|max:2000',
    ]);

    try {
        // Build canonical fields expected by the Appointment model
        $fullName = $validated['full_name'] ?? null;

        // Fallback to email prefix if no name provided
        if (empty($fullName) && !empty($validated['email'])) {
            $fullName = strstr($validated['email'], '@', true) ?: $validated['email'];
        }

        $phone = $validated['phone'] ?? null;
        $message = $validated['message'];

        $data = [
            'full_name' => $fullName,
            'phone' => $phone,
            'city' => $validated['city'] ?? null,
            'email' => $validated['email'],
            'message' => $message,
        ];

        // Save to database
        $appointment = Appointment::create($data);

        // Send email to admin (MASTER_EMAILS from .env)
        $masterEmails = env('MASTER_EMAILS', '');
        $masterRecipients = array_filter(array_map('trim', explode(',', $masterEmails)));
        if (empty($masterRecipients)) {
            $masterRecipients = [config('mail.admin_address_1', 'damalide20@gmail.com')];
        }

        // Send admin notification
        Mail::to($masterRecipients)->send(new AppointmentRequestMail($appointment));

        // FIXED: Send customer confirmation with proper name
        try {
 // Simplest fix - just use email without name
Mail::to($appointment->email)->send(new AppointmentNotification($appointment));

            Log::info('Customer notification sent to: ' . $appointment->email);
        } catch (\Exception $e) {
            // Log but don't fail - customer still sees success message
            Log::error('Customer email failed: ' . $e->getMessage());
        }

        return back()->with('success', 'Your appointment request has been submitted successfully!');

    } catch (\Exception $e) {
        Log::error('Failed to process appointment request: ' . $e->getMessage());
        return back()->with('error', 'Something went wrong. Please try again later.');
    }
}
}
