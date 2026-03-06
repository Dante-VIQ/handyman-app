<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Tour | Amazing Palace Adult Family Home - Seattle</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'gold': '#d4af37',
                        'royal-blue': '#00308F',
                        'navy': '#0a2463',
                        'cream': '#f5f2e9',
                        'light-blue': '#e8f0f7',
                        'sage': '#87a96b',
                        'taupe': '#b8a99a',
                    },
                    fontFamily: {
                        'cormorant': ['Cormorant Garamond', 'serif'],
                        'montserrat': ['Montserrat', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        .booking-hero-bg {
            background-image: linear-gradient(rgba(10, 36, 99, 0.85), rgba(10, 36, 99, 0.8)), url('https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .booking-bg {
            background-color: #f9f7f2;
        }

        .form-step {
            display: none;
        }

        .form-step.active {
            display: block;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .step-indicator {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .step-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin: 0 10px;
            transition: all 0.3s ease;
        }

        .step-circle.active {
            background-color: #0a2463;
            color: white;
            border: 2px solid #0a2463;
        }

        .step-circle.inactive {
            background-color: white;
            color: #6b7280;
            border: 2px solid #d1d5db;
        }

        .step-circle.completed {
            background-color: #d4af37;
            color: #0a2463;
            border: 2px solid #d4af37;
        }

        .step-line {
            height: 2px;
            width: 60px;
            background-color: #d1d5db;
            transition: all 0.3s ease;
        }

        .step-line.completed {
            background-color: #d4af37;
        }

        .booking-option {
            border: 2px solid #e5e7eb;
            border-radius: 1rem;
            padding: 2rem;
            cursor: pointer;
            transition: all 0.3s ease;
            background-color: white;
        }

        .booking-option:hover {
            border-color: #0a2463;
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .booking-option.selected {
            border-color: #d4af37;
            background-color: #fef9e7;
            box-shadow: 0 10px 20px rgba(212, 175, 55, 0.15);
        }

        .time-slot {
            border: 2px solid #e5e7eb;
            border-radius: 0.75rem;
            padding: 1rem;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            background-color: white;
        }

        .time-slot:hover {
            border-color: #0a2463;
        }

        .time-slot.selected {
            border-color: #d4af37;
            background-color: #fef9e7;
            font-weight: bold;
        }

        .time-slot.unavailable {
            opacity: 0.5;
            cursor: not-allowed;
            background-color: #f3f4f6;
        }

        .btn-gold {
            background: linear-gradient(to right, #d4af37, #f7ef8a);
            color: #0a2463;
            font-weight: 600;
        }

        .btn-gold:hover {
            background: linear-gradient(to right, #b8941f, #e6d97a);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .calendar-day {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .calendar-day:hover:not(.disabled):not(.selected) {
            background-color: #e8f0f7;
        }

        .calendar-day.selected {
            background-color: #0a2463;
            color: white;
        }

        .calendar-day.disabled {
            color: #9ca3af;
            cursor: not-allowed;
        }

        .calendar-day.today {
            border: 2px solid #d4af37;
        }

        @media (max-width: 768px) {
            .booking-hero-bg {
                background-attachment: scroll;
            }

            .step-line {
                width: 30px;
            }
        }
    </style>
</head>
@livewireStyles
@vite(['resources/css/app.css', 'resources/js/app.js'])

<body class="montserrat text-gray-800">
    <div class="min-h-screen bg-gray-100">

        <!-- Header/Navigation -->
        <livewire:layout.navigation />
        <main>
            {{ $slot }}
        </main>
    </div>
    <!-- Footer -->
    <footer class="bg-navy py-12 border-t border-white/10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-8 md:mb-0">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gold rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-crown text-navy text-xl"></i>
                        </div>
                        <div>
                            <h2 class="cormorant text-2xl font-bold text-white">Amazing Palace</h2>
                            <p class="text-xs font-semibold text-gold tracking-widest">ADULT FAMILY HOME</p>
                        </div>
                    </div>
                    <p class="text-gray-400 mt-4 max-w-md">
                        Seattle's premier adult family home. Schedule your tour today to experience exceptional senior
                        care.
                    </p>
                </div>

                <div class="text-center md:text-right">
                    <p class="text-gray-400 mb-4">&copy; 2023 Amazing Palace Adult Family Home. All rights reserved.</p>
                    <div class="flex space-x-4 justify-center md:justify-end">
                        <a href="#"
                            class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-gold transition">
                            <i class="fab fa-facebook-f text-white"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-gold transition">
                            <i class="fab fa-instagram text-white"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-gold transition">
                            <i class="fab fa-linkedin-in text-white"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-12 pt-8 border-t border-white/10 text-center text-gray-400 text-sm">
                <p>123 Luxury Lane, Seattle, WA 98101 | (206) 555-1234 | info@amazingpalaceseattle.com</p>
                <p class="mt-2">WA State License #AFH-123456 | Medicaid Provider #WA98765</p>
            </div>
        </div>
    </footer>

    @livewireScripts
  <script>
        // Initialize with data from Laravel
        const bookingData = {
            availableDates: @json($availableDates ?? []),
            unavailableSlots: @json($unavailableSlots ?? []),
            bookingTypes: @json($bookingTypes ?? []),
            relationships: @json($relationships ?? []),
            csrfToken: '{{ csrf_token() }}',
            checkAvailabilityUrl: '{{ route("booking.checkAvailability") }}',
            submitUrl: '{{ route("booking.submit") }}'
        };
        
    </script>
    <script src="js/booking.js" defer></script>

</body>


</html>
