<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Primary Meta Tags -->
    <title>@yield('title', 'GB Handyman Solutions – Professional Home Repairs in Kent, WA')</title>
    <meta name="title" content="@yield('meta_title', 'GB Handyman Solutions – Professional Home Repairs in Kent, WA')">
    <meta name="description" content="@yield('meta_description', 'Professional handyman services in Kent and across Western Washington. Bathroom remodeling, flooring, drywall, plumbing, electrical. Remote ready, family owned since 2012.')">
    <meta name="keywords" content="@yield('meta_keywords', 'handyman, home renovation, bathroom remodeling, flooring, drywall, painting, plumbing, electrical, Kent WA, Auburn WA, Seattle handyman')">
    <meta name="author" content="GB Handyman Solutions LLC">
    <meta name="robots" content="@yield('robots', 'index, follow')">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
<meta name="google-site-verification" content="k5pI9JSyx2tyMJAqzBHh0iHRg1L6AjXWR5FwU6Dhe0w" />

    <!-- Canonical URL -->
    <link rel="canonical" href="@yield('canonical', url()->current())">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:title" content="@yield('og_title', 'GB Handyman Solutions – Professional Home Repairs')">
    <meta property="og:description" content="@yield('og_description', 'Professional handyman services in Kent and across Western Washington. Family owned since 2012.')">
    <meta property="og:image" content="@yield('og_image', asset('images/gb-handyman-og.jpg'))">
    <meta property="og:site_name" content="GB Handyman Solutions">
    <meta property="og:locale" content="en_US">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="@yield('twitter_url', url()->current())">
    <meta name="twitter:title" content="@yield('twitter_title', 'GB Handyman Solutions – Professional Home Repairs')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Professional handyman services in Kent and across Western Washington.')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('images/gb-handyman-twitter.jpg'))">

    <!-- Geo Tags (for local SEO) -->
    <meta name="geo.region" content="US-WA">
    <meta name="geo.placename" content="Kent, Auburn, Seattle, Tacoma, Olympia">
    <meta name="geo.position" content="47.3809;-122.2348">
    <meta name="ICBM" content="47.3809, -122.2348">

    <!-- Verification (add your own) -->
    <meta name="google-site-verification" content="YOUR_VERIFICATION_CODE">
    <meta name="msvalidate.01" content="YOUR_BING_VERIFICATION">

    <!-- Favicon & App Icons -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Tailwind + Inter font -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <style>
        * {
            font-family: 'Inter', sans-serif;
        }

        .bg-soft-blue {
            background-color: #d9ecff;
        }

        .bg-soft-white {
            background-color: #fcfefc;
        }

        .bg-soft-green {
            background-color: #e6f3e6;
        }

        .bg-soft-yellow {
            background-color: #fff9db;
        }

        .border-soft-blue {
            border-color: #c5e0ff;
        }

        .border-soft-green {
            border-color: #d2ecce;
        }

        .border-soft-yellow {
            border-color: #ffefb0;
        }

        .soft-shadow {
            box-shadow: 0 15px 30px -12px rgba(27, 94, 117, 0.12);
        }

        .hover-lift:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 30px -10px rgba(70, 130, 170, 0.15);
        }

        .transition-soft {
            transition: all 0.25s ease;
        }

        .text-soft-teal {
            color: #1f5f7a;
        }

        /* Mobile menu styles */
        .mobile-menu-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 40;
            display: none;
        }

        .mobile-menu-overlay.active {
            display: block;
        }

        .mobile-menu {
            position: fixed;
            top: 0;
            right: -100%;
            width: 80%;
            max-width: 400px;
            height: 100vh;
            background-color: white;
            z-index: 50;
            transition: right 0.3s ease-in-out;
            overflow-y: auto;
            padding: 2rem 1.5rem;
        }

        .mobile-menu.active {
            right: 0;
        }

        @media (max-width: 640px) {
            .container-padding {
                padding-left: 1rem;
                padding-right: 1rem;
            }
        }
    </style>

    @stack('styles')
    @stack('schema')
    @livewireStyles()
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="text-[#1e4f63] bg-[#f5faff] overflow-x-hidden">

    <!-- Navigation - Fixed Responsive -->
    <div class="w-full px-4 sm:px-6 lg:px-8 py-4 sm:py-6">
        <x-nav-bar />
    </div>

    <!-- Main Content - Fixed Responsive -->
    <main class="w-full overflow-x-hidden p-2 sm:p-2 lg:p-4">
        {{-- @yield('content') --}}
        {{ $slot }}
    </main>

    <!-- Footer - Fixed Responsive -->
    <footer class="border-t border-soft-blue/50 pt-6 sm:pt-8 pb-4 mt-12 sm:mt-16 w-full px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-6 lg:gap-0 justify-between items-center text-sm">
            <div class="font-semibold text-[#166b85] text-center lg:text-left order-3 lg:order-1">
                © {{ date('Y') }} GB Handyman Solutions LLC
            </div>
            <div class="flex flex-wrap justify-center gap-4 sm:gap-6 order-1 lg:order-2">
                <a href="/" class="hover:underline text-sm">Home</a>
                <a href="/about" class="hover:underline text-sm">About</a>
                <a href="/services" class="hover:underline text-sm">Services</a>
                <a href="/service-area" class="hover:underline text-sm">Service area</a>
                <a href="/gallery" class="hover:underline text-sm">Gallery</a>
                <a href="/contact" class="hover:underline text-sm">Contact</a>
            </div>
            <div class="text-xs sm:text-sm text-center lg:text-right order-2 lg:order-3 break-words max-w-full">
                📞 +1 202 4601753 | ✉️ gbhandymanllc@yahoo.com
            </div>
        </div>
    </footer>

    @livewireScripts()
    @stack('scripts')

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('mobileMenu', () => ({
                mobileMenuOpen: false,
                init() {
                    // Close menu on escape key
                    document.addEventListener('keydown', (e) => {
                        if (e.key === 'Escape') {
                            this.mobileMenuOpen = false;
                        }
                    });

                    // Close menu on resize if going to desktop
                    window.addEventListener('resize', () => {
                        if (window.innerWidth >= 1024) {
                            this.mobileMenuOpen = false;
                        }
                    });

                    // Prevent body scroll when mobile menu is open
                    this.$watch('mobileMenuOpen', (value) => {
                        if (value) {
                            document.body.style.overflow = 'hidden';
                        } else {
                            document.body.style.overflow = '';
                        }
                    });
                }
            }));
        });
    </script>

    <!-- Add this to your nav-bar component for mobile menu functionality -->
    <script>
        // Basic mobile menu toggle if not using Alpine
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.querySelector('[data-mobile-menu-button]');
            const mobileMenu = document.querySelector('[data-mobile-menu]');

            if (menuButton && mobileMenu) {
                menuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('active');
                });
            }
        });
    </script>

</body>

</html>
