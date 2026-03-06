<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Confirmation - GB Handyman Solutions</title>
    <style>
        /* Reset styles */
        body, p, h1, h2, h3, h4, h5, h6 {
            margin: 0;
            padding: 0;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        }

        body {
            background-color: #f5faff;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            padding: 20px;
        }

        /* Container */
        .email-container {
            max-width: 580px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 32px;
            overflow: hidden;
            box-shadow: 0 20px 40px -12px rgba(27, 94, 117, 0.25);
            border: 1px solid #d9ecff;
        }

        /* Header with celebration gradient */
        .email-header {
            background: linear-gradient(145deg, #e6f3e6 0%, #d9ecff 70%, #fff9db 100%);
            padding: 36px 40px 30px;
            text-align: center;
            border-bottom: 3px solid #c5e0ff;
        }

        .success-icon {
            background-color: white;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 18px;
            box-shadow: 0 10px 20px -5px rgba(22, 107, 138, 0.2);
            border: 3px solid #fff9db;
        }

        .success-icon svg {
            width: 40px;
            height: 40px;
            color: #166b8a;
        }

        .logo {
            font-size: 28px;
            font-weight: 800;
            letter-spacing: -0.5px;
            color: #115e7a;
            margin-bottom: 6px;
        }

        .logo span {
            color: #166b8a;
            font-weight: 400;
            font-size: 20px;
        }

        .confirmation-badge {
            background-color: #166b8a;
            color: white;
            font-size: 14px;
            font-weight: 600;
            padding: 6px 20px;
            border-radius: 40px;
            display: inline-block;
            margin: 12px 0 0;
            border: 1px solid #115e7a;
            letter-spacing: 0.3px;
            box-shadow: 0 4px 8px rgba(22, 107, 138, 0.15);
        }

        /* Content */
        .email-content {
            padding: 40px;
            background-color: #ffffff;
        }

        .greeting {
            font-size: 22px;
            font-weight: 700;
            color: #115e7a;
            margin-bottom: 12px;
        }

        .greeting span {
            background-color: #fff9db;
            padding: 4px 12px;
            border-radius: 40px;
            font-size: 16px;
            font-weight: 500;
            color: #166b8a;
            margin-left: 8px;
        }

        .message {
            font-size: 16px;
            line-height: 1.6;
            color: #1e4f63;
            margin-bottom: 28px;
        }

        /* Summary Card */
        .summary-card {
            background: linear-gradient(135deg, #fcfefc 0%, #f0faff 100%);
            border: 1px solid #d9ecff;
            border-radius: 28px;
            padding: 24px;
            margin: 28px 0;
            box-shadow: 0 8px 16px -8px rgba(27, 94, 117, 0.08);
        }

        .summary-title {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 15px;
            font-weight: 600;
            color: #4a7e93;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 20px;
            padding-bottom: 12px;
            border-bottom: 2px dashed #d9ecff;
        }

        .summary-row {
            display: flex;
            padding: 12px 0;
            border-bottom: 1px solid #e6f3e6;
        }

        .summary-row:last-child {
            border-bottom: none;
        }

        .summary-label {
            width: 110px;
            font-size: 14px;
            font-weight: 500;
            color: #4a7e93;
        }

        .summary-value {
            flex: 1;
            font-size: 16px;
            font-weight: 600;
            color: #115e7a;
            word-break: break-word;
        }

        /* Next steps */
        .next-steps {
            background-color: #e6f3e6;
            border-radius: 24px;
            padding: 24px;
            margin: 28px 0 20px;
            border: 1px solid #d2ecce;
        }

        .next-steps h4 {
            color: #115e7a;
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .steps-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .step-item {
            display: flex;
            gap: 14px;
            margin-bottom: 18px;
            align-items: flex-start;
        }

        .step-number {
            background-color: white;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 14px;
            color: #166b8a;
            border: 2px solid #166b8a;
            flex-shrink: 0;
        }

        .step-text {
            font-size: 15px;
            line-height: 1.5;
            color: #1e4f63;
            flex: 1;
        }

        .step-text strong {
            color: #115e7a;
        }

        /* Info boxes */
        .info-boxes {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            margin: 28px 0;
        }

        .info-box {
            background-color: #fcfefc;
            border: 1px solid #d9ecff;
            border-radius: 20px;
            padding: 18px;
            text-align: center;
        }

        .info-box-icon {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .info-box-title {
            font-size: 14px;
            font-weight: 600;
            color: #4a7e93;
            margin-bottom: 6px;
        }

        .info-box-content {
            font-size: 16px;
            font-weight: 600;
            color: #115e7a;
        }

        .info-box-content a {
            color: #115e7a;
            text-decoration: none;
        }

        .info-box-content a:hover {
            text-decoration: underline;
        }

        /* Business card */
        .business-card {
            background-color: #fff9db;
            border-radius: 24px;
            padding: 24px;
            margin: 28px 0 16px;
            border: 1px solid #ffefb0;
            text-align: center;
        }

        .business-name {
            font-size: 20px;
            font-weight: 800;
            color: #115e7a;
            margin-bottom: 12px;
        }

        .business-detail {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-size: 15px;
            color: #1e4f63;
            margin-bottom: 8px;
        }

        .business-detail a {
            color: #166b8a;
            text-decoration: none;
            font-weight: 500;
        }

        .business-detail a:hover {
            text-decoration: underline;
        }

        .business-hours {
            background-color: white;
            border-radius: 40px;
            padding: 10px 18px;
            display: inline-block;
            margin-top: 12px;
            font-size: 14px;
            color: #166b8a;
            border: 1px solid #ffefb0;
        }

        /* Footer */
        .email-footer {
            background-color: #f0faff;
            padding: 28px 40px;
            border-top: 1px solid #d9ecff;
            text-align: center;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 16px;
            margin-bottom: 20px;
        }

        .social-link {
            background-color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #166b8a;
            text-decoration: none;
            font-size: 20px;
            border: 1px solid #d9ecff;
            transition: all 0.2s;
        }

        .footer-note {
            color: #4a7e93;
            font-size: 13px;
            line-height: 1.6;
        }

        .footer-note p {
            margin-bottom: 6px;
        }

        .copyright {
            font-size: 11px;
            color: #6d9eb3;
            margin-top: 16px;
        }

        /* Button */
        .btn {
            display: inline-block;
            padding: 14px 32px;
            border-radius: 40px;
            font-weight: 600;
            font-size: 15px;
            text-decoration: none;
            text-align: center;
            background-color: #166b8a;
            color: white;
            border: 1px solid #115e7a;
            box-shadow: 0 4px 12px rgba(22, 107, 138, 0.2);
            transition: all 0.2s;
            margin: 10px 0 5px;
        }

        .btn:hover {
            background-color: #0e4e63;
            box-shadow: 0 6px 16px rgba(22, 107, 138, 0.3);
        }

        /* Divider */
        .divider {
            height: 2px;
            background: linear-gradient(to right, transparent, #d9ecff, #c5e0ff, #d9ecff, transparent);
            margin: 28px 0;
        }

        /* Responsive */
        @media (max-width: 480px) {
            .email-header, .email-content, .email-footer {
                padding: 24px 20px;
            }

            .info-boxes {
                grid-template-columns: 1fr;
            }

            .summary-row {
                flex-direction: column;
                gap: 4px;
            }

            .summary-label {
                width: 100%;
            }

            .greeting {
                font-size: 20px;
            }

            .btn {
                width: 100%;
                padding: 14px 20px;
            }
        }
    </style>
</head>
<body style="background-color: #f5faff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;">

    <div class="email-container" style="max-width: 580px; margin: 0 auto; background-color: #ffffff; border-radius: 32px; overflow: hidden; box-shadow: 0 20px 40px -12px rgba(27,94,117,0.25); border: 1px solid #d9ecff;">

        <!-- Header with success animation -->
        <div class="email-header" style="background: linear-gradient(145deg, #e6f3e6 0%, #d9ecff 70%, #fff9db 100%); padding: 36px 40px 30px; text-align: center; border-bottom: 3px solid #c5e0ff;">
            <div class="success-icon" style="background-color: white; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 18px; box-shadow: 0 10px 20px -5px rgba(22,107,138,0.2); border: 3px solid #fff9db;">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 7L9 18L4 13" stroke="#166b8a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                </svg>
            </div>

            <div class="logo" style="font-size: 28px; font-weight: 800; color: #115e7a; margin-bottom: 6px;">
                GB <span style="color: #166b8a; font-weight: 400; font-size: 20px;">handyman solutions</span>
            </div>

            <div class="confirmation-badge" style="background-color: #166b8a; color: white; font-size: 14px; font-weight: 600; padding: 6px 20px; border-radius: 40px; display: inline-block; margin: 12px 0 0; border: 1px solid #115e7a; box-shadow: 0 4px 8px rgba(22,107,138,0.15);">
                ✓ REQUEST CONFIRMED
            </div>
        </div>

        <!-- Main Content -->
        <div class="email-content" style="padding: 40px; background-color: #ffffff;">

            <!-- Greeting -->
            <div class="greeting" style="font-size: 22px; font-weight: 700; color: #115e7a; margin-bottom: 12px;">
                Thanks, {{ $appointment->full_name }}!
                <span style="background-color: #fff9db; padding: 4px 12px; border-radius: 40px; font-size: 16px; font-weight: 500; color: #166b8a; margin-left: 8px; display: inline-block;">🙌</span>
            </div>

            <p class="message" style="font-size: 16px; line-height: 1.6; color: #1e4f63; margin-bottom: 20px;">
            <div class="business-card" style="background-color: #fff9db; border-radius: 24px; padding: 24px; margin: 28px 0 16px; border: 1px solid #ffefb0; text-align: center;">
    <div class="business-name" style="font-size: 20px; font-weight: 800; color: #115e7a; margin-bottom: 12px;">
        📋 Quick Reference
    </div>
    <div class="business-detail" style="display: flex; align-items: center; justify-content: center; gap: 8px; font-size: 15px; color: #1e4f63; margin-bottom: 8px;">
        <span style="background-color: white; width: 24px; height: 24px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center;">🆔</span>
        <span><strong>Request ID:</strong> #{{ $appointment->id }}</span>
    </div>
    <div class="business-detail" style="display: flex; align-items: center; justify-content: center; gap: 8px; font-size: 15px; color: #1e4f63; margin-bottom: 8px;">
        <span style="background-color: white; width: 24px; height: 24px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center;">📅</span>
        <span><strong>Submitted:</strong> {{ $appointment->created_at->format('M j, Y \a\t g:i A') }}</span>
    </div>
    <div class="business-hours" style="background-color: white; border-radius: 40px; padding: 8px 18px; display: inline-block; margin-top: 8px; font-size: 13px; color: #166b8a; border: 1px solid #ffefb0;">
        ⚡ We'll respond within 2 hours
    </div>
</div>

                We've received your appointment request and we're excited to help with your {{ strtolower($appointment->service) }} needs!
            </p>

            <!-- Summary Card -->
            <div class="summary-card" style="background: linear-gradient(135deg, #fcfefc 0%, #f0faff 100%); border: 1px solid #d9ecff; border-radius: 28px; padding: 24px; margin: 20px 0 28px;">
                <div class="summary-title" style="display: flex; align-items: center; gap: 8px; font-size: 15px; font-weight: 600; color: #4a7e93; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 20px; padding-bottom: 12px; border-bottom: 2px dashed #d9ecff;">
                    <span>📋</span> REQUEST SUMMARY
                </div>

                <div class="summary-row" style="display: flex; padding: 12px 0; border-bottom: 1px solid #e6f3e6;">
                    <div class="summary-label" style="width: 100px; font-size: 14px; font-weight: 500; color: #4a7e93;">Service:</div>
                    <div class="summary-value" style="flex: 1; font-size: 16px; font-weight: 600; color: #115e7a;">{{ $appointment->service }}</div>
                </div>

                <div class="summary-row" style="display: flex; padding: 12px 0; border-bottom: 1px solid #e6f3e6;">
                    <div class="summary-label" style="width: 100px; font-size: 14px; font-weight: 500; color: #4a7e93;">Location:</div>
                    <div class="summary-value" style="flex: 1; font-size: 16px; font-weight: 600; color: #115e7a;">{{ $appointment->city }}</div>
                </div>

                <div class="summary-row" style="display: flex; padding: 12px 0; border-bottom: 1px solid #e6f3e6;">
                    <div class="summary-label" style="width: 100px; font-size: 14px; font-weight: 500; color: #4a7e93;">Contact:</div>
                    <div class="summary-value" style="flex: 1; font-size: 16px; font-weight: 600; color: #115e7a;">{{ $appointment->phone }}</div>
                </div>

                <div class="summary-row" style="display: flex; padding: 12px 0;">
                    <div class="summary-label" style="width: 100px; font-size: 14px; font-weight: 500; color: #4a7e93;">Email:</div>
                    <div class="summary-value" style="flex: 1; font-size: 16px; font-weight: 600; color: #115e7a; word-break: break-word;">{{ $appointment->email }}</div>
                </div>
            </div>

            <!-- Next Steps -->
            <div class="next-steps" style="background-color: #e6f3e6; border-radius: 24px; padding: 24px; margin: 20px 0;">
                <h4 style="color: #115e7a; font-size: 18px; font-weight: 700; margin-bottom: 16px; display: flex; align-items: center; gap: 8px;">
                    <span>🔜</span> What's Next?
                </h4>

                <ul class="steps-list" style="list-style: none; padding: 0; margin: 0;">
                    <li class="step-item" style="display: flex; gap: 14px; margin-bottom: 18px; align-items: flex-start;">
                        <span class="step-number" style="background-color: white; width: 28px; height: 28px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 14px; color: #166b8a; border: 2px solid #166b8a; flex-shrink: 0;">1</span>
                        <span class="step-text" style="font-size: 15px; line-height: 1.5; color: #1e4f63;">We'll review your request within <strong>2 hours</strong> during business hours</span>
                    </li>

                    <li class="step-item" style="display: flex; gap: 14px; margin-bottom: 18px; align-items: flex-start;">
                        <span class="step-number" style="background-color: white; width: 28px; height: 28px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 14px; color: #166b8a; border: 2px solid #166b8a; flex-shrink: 0;">2</span>
                        <span class="step-text" style="font-size: 15px; line-height: 1.5; color: #1e4f63;"><strong>Glen or Mike</strong> will call you at <strong>{{ $appointment->phone }}</strong> to discuss your project</span>
                    </li>

                    <li class="step-item" style="display: flex; gap: 14px; margin-bottom: 0; align-items: flex-start;">
                        <span class="step-number" style="background-color: white; width: 28px; height: 28px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 14px; color: #166b8a; border: 2px solid #166b8a; flex-shrink: 0;">3</span>
                        <span class="step-text" style="font-size: 15px; line-height: 1.5; color: #1e4f63;">We'll schedule a convenient time and provide a <strong>free estimate</strong></span>
                    </li>
                </ul>
            </div>

            <!-- Quick Info Boxes -->
            <div class="info-boxes" style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin: 28px 0;">
                <div class="info-box" style="background-color: #fcfefc; border: 1px solid #d9ecff; border-radius: 20px; padding: 18px; text-align: center;">
                    <div class="info-box-icon" style="font-size: 24px; margin-bottom: 10px;">⏰</div>
                    <div class="info-box-title" style="font-size: 14px; font-weight: 600; color: #4a7e93; margin-bottom: 6px;">Business Hours</div>
                    <div class="info-box-content" style="font-size: 15px; font-weight: 600; color: #115e7a;">Mon-Fri 7am-7pm<br>Sat 8am-4pm</div>
                </div>

                <div class="info-box" style="background-color: #fcfefc; border: 1px solid #d9ecff; border-radius: 20px; padding: 18px; text-align: center;">
                    <div class="info-box-icon" style="font-size: 24px; margin-bottom: 10px;">📞</div>
                    <div class="info-box-title" style="font-size: 14px; font-weight: 600; color: #4a7e93; margin-bottom: 6px;">Need to reschedule?</div>
                    <div class="info-box-content" style="font-size: 15px; font-weight: 600; color: #115e7a;">
                        <a href="tel:+12024601753" style="color: #115e7a; text-decoration: none;">+1 202 4601753</a>
                    </div>
                </div>
            </div>

            <!-- Business Card -->
            <div class="business-card" style="background-color: #fff9db; border-radius: 24px; padding: 24px; margin: 28px 0 16px; border: 1px solid #ffefb0; text-align: center;">
                <div class="business-name" style="font-size: 20px; font-weight: 800; color: #115e7a; margin-bottom: 12px;">
                    GB Handyman Solutions
                </div>
                <div class="business-detail" style="display: flex; align-items: center; justify-content: center; gap: 8px; font-size: 15px; color: #1e4f63; margin-bottom: 8px;">
                    <span>📍</span>
                    <span>6249 S 242nd Pl, Bldg 8 Apt 203, Kent, WA</span>
                </div>
                <div class="business-detail" style="display: flex; align-items: center; justify-content: center; gap: 8px; font-size: 15px; color: #1e4f63; margin-bottom: 8px;">
                    <span>📞</span>
                    <a href="tel:+12024601753" style="color: #166b8a; text-decoration: none; font-weight: 500;">+1 202 4601753</a>
                </div>
                <div class="business-detail" style="display: flex; align-items: center; justify-content: center; gap: 8px; font-size: 15px; color: #1e4f63; margin-bottom: 8px;">
                    <span>✉️</span>
                    <a href="mailto:gbhandymanllc@yahoo.com" style="color: #166b8a; text-decoration: none; font-weight: 500;">gbhandymanllc@yahoo.com</a>
                </div>
                <div class="business-hours" style="background-color: white; border-radius: 40px; padding: 10px 18px; display: inline-block; margin-top: 12px; font-size: 14px; color: #166b8a; border: 1px solid #ffefb0;">
                    ⚡ Remote & mobile • Serving 20+ cities
                </div>
            </div>

            <div class="divider" style="height: 2px; background: linear-gradient(to right, transparent, #d9ecff, #c5e0ff, #d9ecff, transparent); margin: 24px 0;"></div>

            <!-- Call to action -->
            <div style="text-align: center; margin: 16px 0 8px;">
                <a href="{{ route('services') }}" class="btn" style="display: inline-block; padding: 14px 32px; border-radius: 40px; font-weight: 600; font-size: 15px; text-decoration: none; text-align: center; background-color: #166b8a; color: white; border: 1px solid #115e7a; box-shadow: 0 4px 12px rgba(22,107,138,0.2); margin: 10px 0 5px;">
                    🔨 Browse Our Services
                </a>
                <p style="font-size: 13px; color: #4a7e93; margin-top: 12px;">
                    In a hurry? Just give us a call — we answer live!
                </p>
            </div>
        </div>

        <!-- Footer -->
        <div class="email-footer" style="background-color: #f0faff; padding: 28px 40px; border-top: 1px solid #d9ecff; text-align: center;">
            <div class="social-links" style="display: flex; justify-content: center; gap: 16px; margin-bottom: 20px;">
                <a href="#" class="social-link" style="background-color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #166b8a; text-decoration: none; font-size: 20px; border: 1px solid #d9ecff;">f</a>
                <a href="#" class="social-link" style="background-color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #166b8a; text-decoration: none; font-size: 20px; border: 1px solid #d9ecff;">📷</a>
                <a href="#" class="social-link" style="background-color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #166b8a; text-decoration: none; font-size: 20px; border: 1px solid #d9ecff;">⭐</a>
            </div>

            <div class="footer-note" style="color: #4a7e93; font-size: 13px; line-height: 1.6;">
                <p style="margin-bottom: 6px;">This email confirms your appointment request with GB Handyman Solutions.</p>
                <p style="margin-bottom: 6px;">We'll be in touch soon!</p>
            </div>

            <div class="copyright" style="font-size: 11px; color: #6d9eb3; margin-top: 16px;">
                © {{ date('Y') }} GB Handyman Solutions LLC. All rights reserved.<br>
                6249 S 242nd Place (bld 8 apt 203) Kent, WA 98032
            </div>
        </div>
    </div>

    <!-- Email client fallback -->
    <div style="max-width: 580px; margin: 16px auto 0; text-align: center; color: #6d9eb3; font-size: 12px; padding: 0 20px;">
        This is a service confirmation email from GB Handyman Solutions.
    </div>
</body>
</html>
