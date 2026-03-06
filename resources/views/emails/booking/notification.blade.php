<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Booking Notification - Amazing Palace</title>
    <style>
        body {
            font-family: 'Montserrat', 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 700px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
        }
        .header {
            background-color: {{ $priority === 'high' ? '#dc3545' : '#0a2463' }};
            color: white;
            padding: 25px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .priority-badge {
            display: inline-block;
            background-color: {{ $priority === 'high' ? '#ffc107' : '#28a745' }};
            color: {{ $priority === 'high' ? '#856404' : '#155724' }};
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 15px;
        }
        .h1 {
            font-family: 'Cormorant Garamond', Georgia, serif;
            font-size: 24px;
            font-weight: bold;
            margin: 0 0 10px 0;
        }
        .content {
            padding: 30px;
        }
        .section {
            margin-bottom: 25px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }
        .section:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        .h2 {
            font-family: 'Cormorant Garamond', Georgia, serif;
            font-size: 20px;
            color: #0a2463;
            margin-bottom: 15px;
            border-left: 4px solid #d4af37;
            padding-left: 10px;
        }
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
            margin-bottom: 20px;
        }
        .info-card {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 15px;
        }
        .info-label {
            font-weight: bold;
            color: #0a2463;
            font-size: 14px;
            margin-bottom: 5px;
        }
        .info-value {
            color: #333;
            font-size: 16px;
        }
        .action-buttons {
            display: flex;
            gap: 10px;
            margin-top: 20px;
            flex-wrap: wrap;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            font-size: 14px;
        }
        .btn-primary {
            background-color: #0a2463;
            color: white;
        }
        .btn-secondary {
            background-color: #6c757d;
            color: white;
        }
        .btn-success {
            background-color: #28a745;
            color: white;
        }
        .notes {
            background-color: #fff3cd;
            border: 1px solid #ffeaa7;
            border-radius: 8px;
            padding: 15px;
            margin-top: 20px;
        }
        .footer {
            text-align: center;
            padding: 20px;
            color: #666;
            font-size: 14px;
            border-top: 1px solid #eee;
            margin-top: 30px;
        }
        .timestamp {
            color: #6c757d;
            font-size: 12px;
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <div class="priority-badge">{{ $priority }} Priority</div>
            <h1 class="h1">New Booking Notification</h1>
            <p>Booking #{{ $booking->booking_number }}</p>
        </div>

        <!-- Content -->
        <div class="content">
            <!-- Summary -->
            <div class="section">
                <h2 class="h2">Booking Summary</h2>
                <div class="info-grid">
                    <div class="info-card">
                        <div class="info-label">Customer</div>
                        <div class="info-value">{{ $booking->full_name }}</div>
                    </div>
                    <div class="info-card">
                        <div class="info-label">Appointment Type</div>
                        <div class="info-value">{{ $booking->type_label }}</div>
                    </div>
                    <div class="info-card">
                        <div class="info-label">Date & Time</div>
                        <div class="info-value">{{ $booking->formatted_date }} at {{ $booking->formatted_time }}</div>
                    </div>
                    <div class="info-card">
                        <div class="info-label">Contact</div>
                        <div class="info-value">
                            {{ $booking->email }}<br>
                            {{ $booking->phone }}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Details -->
            <div class="section">
                <h2 class="h2">Booking Details</h2>
                <div class="info-grid">
                    <div class="info-card">
                        <div class="info-label">Relationship</div>
                        <div class="info-value">
                            @php
                                $relationshipLabels = [
                                    'spouse' => 'Spouse/Partner',
                                    'child' => 'Child',
                                    'sibling' => 'Sibling',
                                    'other-relative' => 'Other Relative',
                                    'friend' => 'Friend',
                                    'self' => 'Self (Potential Resident)',
                                    'professional' => 'Professional'
                                ];
                            @endphp
                            {{ $relationshipLabels[$booking->relationship] ?? $booking->relationship }}
                        </div>
                    </div>
                    <div class="info-card">
                        <div class="info-label">Resident Name</div>
                        <div class="info-value">{{ $booking->resident_name ?? 'Not specified' }}</div>
                    </div>
                    <div class="info-card">
                        <div class="info-label">Attendees</div>
                        <div class="info-value">{{ $booking->attendees }} person(s)</div>
                    </div>
                    <div class="info-card">
                        <div class="info-label">Duration</div>
                        <div class="info-value">{{ $booking->duration }} minutes</div>
                    </div>
                </div>
            </div>

            <!-- Special Requests -->
            @if($booking->special_requests)
            <div class="section">
                <h2 class="h2">Special Requests</h2>
                <div class="notes">
                    {{ $booking->special_requests }}
                </div>
            </div>
            @endif

            <!-- Actions -->
            <div class="section">
                <h2 class="h2">Actions</h2>
                <div class="action-buttons">
                    <a href="{{ $actionUrl }}" class="btn btn-primary">View Full Details</a>
                    <a href="mailto:{{ $booking->email }}" class="btn btn-secondary">Email Customer</a>
                    <a href="tel:{{ $booking->phone }}" class="btn btn-success">Call Customer</a>
                </div>

                <div class="timestamp">
                    Booking created: {{ $booking->created_at->format('M j, Y g:i A') }}
                </div>
            </div>

            <!-- Priority Notes -->
            @if($priority === 'high')
            <div class="section">
                <div class="notes" style="background-color: #f8d7da; border-color: #f5c6cb;">
                    <strong>High Priority Note:</strong><br>
                    @if($booking->appointment_date->isToday())
                    This is a same-day booking. Please ensure the team is prepared for their arrival.
                    @elseif($booking->type === 'assessment')
                    This is a care assessment appointment. Please ensure the nursing team is available.
                    @endif
                    Immediate follow-up is recommended.
                </div>
            </div>
            @endif
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>© {{ date('Y') }} Amazing Palace Adult Family Home Admin System</p>
            <p>This notification was generated automatically. Please do not reply to this email.</p>
        </div>
    </div>
</body>
</html>
