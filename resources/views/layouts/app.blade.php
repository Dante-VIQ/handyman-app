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

        .text-soft-teal {
            color: #1f5f7a;
        }

        .hover-lift:hover {
            transform: translateY(-2px);
            box-shadow: 0 20px 25px -5px rgba(27, 94, 117, 0.1);
        }
    </style>

    @stack('styles')
    @stack('schema')
    @livewireStyles()
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased text-[#1e4f63] bg-[#f5faff]">

    <!-- Navigation -->
    <div class="max-w-7xl px-5 sm:px-4 lg:px-8 py-6">
        <x-nav-bar />

        <!-- Main Content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        <footer
            class="border-t border-soft-blue/50 pt-8 pb-4 flex flex-wrap justify-between items-center text-sm mt-16">
            <div class="font-semibold text-[#166b85]">© {{ date('Y') }} GB Handyman Solutions LLC ·
                www.gbhandyman.com</div>
            <div class="flex gap-6">
                <a href="/" class="hover:underline">Home</a>
                <a href="/about" class="hover:underline">About</a>
                <a href="/services" class="hover:underline">Services</a>
                <a href="/service-area" class="hover:underline">Service area</a>
                <a href="/gallery" class="hover:underline">Gallery</a>
                <a href="/contact" class="hover:underline">Contact</a>
            </div>
            <div>📞 +1 202 4601753 | ✉️ gbhandymanllc@yahoo.com</div>
        </footer>
    </div>
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
                }
            }));
        });
    </script>

</body>

</html>
