<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Appointment Request - GB Handyman Solutions</title>
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
        }

        /* Container */
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 32px;
            overflow: hidden;
            box-shadow: 0 20px 40px -15px rgba(27, 94, 117, 0.2);
            border: 1px solid #d9ecff;
        }

        /* Header with gradient */
        .email-header {
            background: linear-gradient(135deg, #166b8a 0%, #2e8cad 100%);
            padding: 32px 40px;
            text-align: center;
        }

        .logo {
            font-size: 32px;
            font-weight: 800;
            letter-spacing: -0.5px;
            color: white;
            margin-bottom: 8px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .logo span {
            color: #fff9db;
            font-weight: 400;
            font-size: 24px;
        }

        .header-title {
            color: rgba(255,255,255,0.95);
            font-size: 18px;
            font-weight: 400;
            border-top: 1px solid rgba(255,255,255,0.2);
            padding-top: 12px;
            margin-top: 8px;
            display: inline-block;
        }

        /* Badge */
        .new-badge {
            background-color: #fff9db;
            color: #166b8a;
            font-size: 14px;
            font-weight: 600;
            padding: 6px 16px;
            border-radius: 40px;
            display: inline-block;
            margin-bottom: 12px;
            border: 1px solid #ffefb0;
        }

        /* Content */
        .email-content {
            padding: 40px;
            background-color: #ffffff;
        }

        /* Info cards */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
            margin: 24px 0;
        }

        .info-card {
            background-color: #fcfefc;
            border: 1px solid #d9ecff;
            border-radius: 20px;
            padding: 18px 16px;
            transition: all 0.2s;
        }

        .info-card.full-width {
            grid-column: span 2;
        }

        .info-label {
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #4a7e93;
            margin-bottom: 6px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .info-label i {
            font-size: 14px;
        }

        .info-value {
            font-size: 18px;
            font-weight: 600;
            color: #115e7a;
            word-break: break-word;
        }

        .info-value.small {
            font-size: 16px;
        }

        /* Message box */
        .message-box {
            background-color: #e6f3e6;
            border: 1px solid #d2ecce;
            border-radius: 24px;
            padding: 24px;
            margin: 24px 0 16px;
        }

        .message-box h4 {
            color: #115e7a;
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .message-content {
            background-color: white;
            border-radius: 16px;
            padding: 20px;
            font-size: 15px;
            line-height: 1.6;
            color: #1e4f63;
            border: 1px solid #c5e0ff;
        }

        /* Divider */
        .divider {
            height: 1px;
            background: linear-gradient(to right, transparent, #d9ecff, transparent);
            margin: 28px 0 20px;
        }

        /* Footer */
        .email-footer {
            background-color: #f0faff;
            padding: 28px 40px;
            border-top: 1px solid #d9ecff;
        }

        .footer-actions {
            display: flex;
            gap: 12px;
            justify-content: center;
            margin-bottom: 24px;
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            border-radius: 40px;
            font-weight: 600;
            font-size: 14px;
            text-decoration: none;
            text-align: center;
            transition: all 0.2s;
        }

        .btn-primary {
            background-color: #166b8a;
            color: white;
            border: 1px solid #115e7a;
        }

        .btn-primary:hover {
            background-color: #0e4e63;
        }

        .btn-secondary {
            background-color: #fff9db;
            color: #115e7a;
            border: 1px solid #ffefb0;
        }

        .btn-secondary:hover {
            background-color: #ffefb5;
        }

        .footer-note {
            text-align: center;
            color: #4a7e93;
            font-size: 13px;
            line-height: 1.6;
            border-top: 1px solid #c5e0ff;
            padding-top: 20px;
        }

        .response-time {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background-color: #d9ecff;
            padding: 6px 16px;
            border-radius: 40px;
            color: #115e7a;
            font-size: 13px;
            font-weight: 500;
            margin-top: 16px;
        }

        /* Service tag */
        .service-tag {
            display: inline-block;
            background-color: #d9ecff;
            color: #115e7a;
            font-size: 14px;
            font-weight: 500;
            padding: 6px 16px;
            border-radius: 40px;
            border: 1px solid #c5e0ff;
            margin-top: 8px;
        }

        /* Responsive */
        @media (max-width: 480px) {
            .email-content, .email-header, .email-footer {
                padding: 24px 20px;
            }

            .info-grid {
                grid-template-columns: 1fr;
                gap: 12px;
            }

            .info-card.full-width {
                grid-column: span 1;
            }

            .footer-actions {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body style="background-color: #f5faff; padding: 20px; font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;">

    <div class="email-container" style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 32px; overflow: hidden; box-shadow: 0 20px 40px -15px rgba(27,94,117,0.2); border: 1px solid #d9ecff;">

        <!-- Header with GB branding -->
        <div class="email-header" style="background: linear-gradient(135deg, #166b8a 0%, #2e8cad 100%); padding: 32px 40px; text-align: center;">
            <div class="logo" style="font-size: 32px; font-weight: 800; color: white; margin-bottom: 8px; text-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                GB <span style="color: #fff9db; font-weight: 400; font-size: 24px;">handyman solutions</span>
            </div>
            <div class="new-badge" style="background-color: #fff9db; color: #166b8a; font-size: 14px; font-weight: 600; padding: 6px 16px; border-radius: 40px; display: inline-block; margin-bottom: 12px; border: 1px solid #ffefb0;">
                🔔 NEW APPOINTMENT REQUEST
            </div>
            <div class="header-title" style="color: rgba(255,255,255,0.95); font-size: 18px; font-weight: 400; border-top: 1px solid rgba(255,255,255,0.2); padding-top: 12px; margin-top: 8px; display: inline-block;">
                Someone needs your handyman services
            </div>
        </div>

        <!-- Main Content -->
        <div class="email-content" style="padding: 40px; background-color: #ffffff;">

            <!-- Customer Info Grid -->
            <div style="margin-bottom: 16px;">
                <h3 style="color: #115e7a; font-size: 18px; font-weight: 600; margin-bottom: 16px; display: flex; align-items: center; gap: 8px;">
                    <span style="background-color: #d9ecff; width: 28px; height: 28px; border-radius: 10px; display: inline-flex; align-items: center; justify-content: center;">👤</span>
                    Customer Details
                </h3>
            </div>

            <div class="info-grid" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin: 24px 0;">

                <!-- Name -->
                <div class="info-card" style="background-color: #fcfefc; border: 1px solid #d9ecff; border-radius: 20px; padding: 18px 16px;">
                    <div class="info-label" style="font-size: 12px; font-weight: 600; text-transform: uppercase; color: #4a7e93; margin-bottom: 6px; display: flex; align-items: center; gap: 6px;">
                        <span>📋</span> FULL NAME
                    </div>
                    <div class="info-value" style="font-size: 18px; font-weight: 600; color: #115e7a;">
                        {{ $appointment->full_name }}
                    </div>
                </div>

                <!-- Phone -->
                <div class="info-card" style="background-color: #fcfefc; border: 1px solid #d9ecff; border-radius: 20px; padding: 18px 16px;">
                    <div class="info-label" style="font-size: 12px; font-weight: 600; text-transform: uppercase; color: #4a7e93; margin-bottom: 6px; display: flex; align-items: center; gap: 6px;">
                        <span>📞</span> PHONE
                    </div>
                    <div class="info-value" style="font-size: 18px; font-weight: 600; color: #115e7a;">
                        <a href="tel:{{ $appointment->phone }}" style="color: #115e7a; text-decoration: none;">{{ $appointment->phone }}</a>
                    </div>
                </div>

                <!-- Email (full width) -->
                <div class="info-card full-width" style="grid-column: span 2; background-color: #fcfefc; border: 1px solid #d9ecff; border-radius: 20px; padding: 18px 16px;">
                    <div class="info-label" style="font-size: 12px; font-weight: 600; text-transform: uppercase; color: #4a7e93; margin-bottom: 6px; display: flex; align-items: center; gap: 6px;">
                        <span>✉️</span> EMAIL
                    </div>
                    <div class="info-value small" style="font-size: 16px; font-weight: 600; color: #115e7a; word-break: break-word;">
                        <a href="mailto:{{ $appointment->email }}" style="color: #115e7a; text-decoration: none;">{{ $appointment->email }}</a>
                    </div>
                </div>

                <!-- City -->
                <div class="info-card" style="background-color: #fcfefc; border: 1px solid #d9ecff; border-radius: 20px; padding: 18px 16px;">
                    <div class="info-label" style="font-size: 12px; font-weight: 600; text-transform: uppercase; color: #4a7e93; margin-bottom: 6px; display: flex; align-items: center; gap: 6px;">
                        <span>📍</span> CITY
                    </div>
                    <div class="info-value" style="font-size: 18px; font-weight: 600; color: #115e7a;">
                        {{ $appointment->city }}
                    </div>
                </div>

                <!-- Service -->
                <div class="info-card" style="background-color: #fcfefc; border: 1px solid #d9ecff; border-radius: 20px; padding: 18px 16px;">
                    <div class="info-label" style="font-size: 12px; font-weight: 600; text-transform: uppercase; color: #4a7e93; margin-bottom: 6px; display: flex; align-items: center; gap: 6px;">
                        <span>🔧</span> SERVICE
                    </div>
                    <div class="info-value" style="font-size: 18px; font-weight: 600; color: #115e7a;">
                        {{ $appointment->service }}
                    </div>
                </div>

                <!-- Submitted At (full width) -->
                <div class="info-card full-width" style="grid-column: span 2; background-color: #e6f3e6; border: 1px solid #d2ecce; border-radius: 20px; padding: 18px 16px;">
                    <div class="info-label" style="font-size: 12px; font-weight: 600; text-transform: uppercase; color: #4a7e93; margin-bottom: 6px; display: flex; align-items: center; gap: 6px;">
                        <span>⏰</span> SUBMITTED
                    </div>
                    <div class="info-value small" style="font-size: 16px; font-weight: 600; color: #115e7a;">
                        {{ $appointment->created_at->format('l, F j, Y \a\t g:i A') }}
                    </div>
                </div>
            </div>

            <!-- Message Section -->
            <div class="message-box" style="background-color: #e6f3e6; border: 1px solid #d2ecce; border-radius: 24px; padding: 24px; margin: 24px 0 16px;">
                <h4 style="color: #115e7a; font-size: 16px; font-weight: 600; margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                    <span style="background-color: white; width: 28px; height: 28px; border-radius: 10px; display: inline-flex; align-items: center; justify-content: center;">💬</span>
                    Message from {{ $appointment->full_name }}
                </h4>
                <div class="message-content" style="background-color: white; border-radius: 16px; padding: 20px; font-size: 15px; line-height: 1.6; color: #1e4f63; border: 1px solid #c5e0ff;">
                    {!! nl2br(e($appointment->message)) !!}
                </div>
            </div>

            <!-- Response commitment -->
            <div style="display: flex; justify-content: center; margin-top: 20px;">
                <div class="response-time" style="display: inline-flex; align-items: center; gap: 6px; background-color: #d9ecff; padding: 6px 16px; border-radius: 40px; color: #115e7a; font-size: 13px; font-weight: 500;">
                    <span style="width: 8px; height: 8px; background-color: #166b8a; border-radius: 50%; animation: pulse 1.5s infinite;"></span>
                    Aim to respond within 2 hours
                </div>
            </div>

            <div class="divider" style="height: 1px; background: linear-gradient(to right, transparent, #d9ecff, transparent); margin: 28px 0 20px;"></div>

            <!-- Quick stats -->
            <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px;">
                <div style="display: flex; gap: 16px; flex-wrap: wrap;">
                    <span style="font-size: 13px; color: #4a7e93;">📋 Request #{{ $appointment->id }}</span>
                    <span style="font-size: 13px; color: #4a7e93;">🔨 {{ $appointment->service }}</span>
                </div>
                <span class="service-tag" style="display: inline-block; background-color: #d9ecff; color: #115e7a; font-size: 14px; font-weight: 500; padding: 6px 16px; border-radius: 40px; border: 1px solid #c5e0ff;">
                    ⚡ New Lead
                </span>
            </div>
        </div>

        <!-- Footer with actions -->
        <div class="email-footer" style="background-color: #f0faff; padding: 28px 40px; border-top: 1px solid #d9ecff;">
            <div class="footer-actions" style="display: flex; gap: 12px; justify-content: center; margin-bottom: 24px;">
                <a href="tel:{{ $appointment->phone }}" class="btn btn-primary" style="display: inline-block; padding: 12px 24px; border-radius: 40px; font-weight: 600; font-size: 14px; text-decoration: none; text-align: center; background-color: #166b8a; color: white; border: 1px solid #115e7a;">
                    📞 Call {{ $appointment->full_name }}
                </a>
                <a href="mailto:{{ $appointment->email }}" class="btn btn-secondary" style="display: inline-block; padding: 12px 24px; border-radius: 40px; font-weight: 600; font-size: 14px; text-decoration: none; text-align: center; background-color: #fff9db; color: #115e7a; border: 1px solid #ffefb0;">
                    ✉️ Reply via Email
                </a>
            </div>

            <div class="footer-note" style="text-align: center; color: #4a7e93; font-size: 13px; line-height: 1.6; border-top: 1px solid #c5e0ff; padding-top: 20px;">
                <p style="margin-bottom: 6px;">This message was automatically generated by GB Handyman Solutions.</p>
                <p style="font-size: 12px;">6249 S 242nd Place (bld 8 apt 203) Kent, WA • +1 202 4601753 • gbhandymanllc@yahoo.com</p>
                <p style="margin-top: 12px; font-size: 11px; color: #6d9eb3;">© {{ date('Y') }} GB Handyman Solutions LLC. All rights reserved.</p>
            </div>

            <!-- Animation keyframes (inline style for email compatibility) -->
            <style>
                @keyframes pulse {
                    0% { opacity: 1; transform: scale(1); }
                    50% { opacity: 0.6; transform: scale(1.1); }
                    100% { opacity: 1; transform: scale(1); }
                }
                @media (max-width: 480px) {
                    .info-grid { grid-template-columns: 1fr !important; }
                    .info-card.full-width { grid-column: span 1 !important; }
                    .footer-actions { flex-direction: column !important; }
                    .btn { width: 100% !important; box-sizing: border-box; }
                }
            </style>
        </div>
    </div>

    <!-- Email client fallback text -->
    <div style="max-width: 600px; margin: 16px auto 0; text-align: center; color: #6d9eb3; font-size: 12px; padding: 0 20px;">
        If you're having trouble viewing this email, please contact support.
    </div>
</body>
</html>
