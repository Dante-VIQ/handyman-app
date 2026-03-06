<?php

namespace App\Http\Controllers;

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
            'first_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'phone_number' => 'nullable|string|max:20',
            'date' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        try {
            // Build canonical fields expected by the Appointment model
            $fullName = null;
            if (!empty($validated['full_name'])) {
                $fullName = $validated['full_name'];
            } else {
                $parts = array_filter([($validated['first_name'] ?? null), ($validated['last_name'] ?? null)]);
                $fullName = $parts ? implode(' ', $parts) : null;
            }

            // Fallback to email prefix if no name provided
            if (empty($fullName) && !empty($validated['email'])) {
                $fullName = strstr($validated['email'], '@', true) ?: $validated['email'];
            }

            $phone = $validated['phone_number'] ?? $validated['phone'] ?? null;

            $message = $validated['message'];
            if (!empty($validated['subject'])) {
                $message = trim($validated['subject'] . "\n\n" . $message);
            }

            $data = [
                'full_name' => $fullName,
                'phone_number' => $phone,
                'date' => $validated['date'] ?? null,
                'email' => $validated['email'],
                'message' => $message,
            ];

            // Save to database (uses mass assignment like before)
            $appointment = Appointment::create($data);

            // Send email to MASTER_EMAILS from .env (comma-separated). Use send() to avoid queue driver issues.
            $masterEmails = env('MASTER_EMAILS', '');
            $masterRecipients = array_filter(array_map('trim', explode(',', $masterEmails)));
            if (empty($masterRecipients)) {
                $masterRecipients = [config('mail.admin_address_1', 'damalide20@gmail.com')];
            }

            Mail::to($masterRecipients)->send(new AppointmentRequestMail($appointment));

            return back()->with('success', 'Your appointment request has been submitted successfully!');
        } catch (\Exception $e) {
            Log::error('Failed to process appointment request: ' . $e->getMessage());
            return back()->with('error', 'Something went wrong. Please try again later.');
        }
    }
}
