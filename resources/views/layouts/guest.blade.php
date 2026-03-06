<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Primary Meta Tags (Dynamically set per page) -->
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
    
    <!-- Tailwind + Inter font -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    
    <!-- Schema Markup will be injected via @stack('schema') -->
    @stack('schema')
    
    <style>
        * { font-family: 'Inter', sans-serif; }
        .bg-soft-blue { background-color: #d9ecff; }
        .bg-soft-white { background-color: #fcfefc; }
        .bg-soft-green { background-color: #e6f3e6; }
        .bg-soft-yellow { background-color: #fff9db; }
        .border-soft-blue { border-color: #c5e0ff; }
        .border-soft-green { border-color: #d2ecce; }
        .border-soft-yellow { border-color: #ffefb0; }
        .soft-shadow { box-shadow: 0 15px 30px -12px rgba(27, 94, 117, 0.12); }
        .hover-lift:hover { transform: translateY(-4px); box-shadow: 0 20px 30px -10px rgba(70, 130, 170, 0.15); }
        .transition-soft { transition: all 0.25s ease; }
    </style>
    @stack('styles')
</head>
<body class="antialiased text-[#1e4f63] bg-[#f5faff]">

    <!-- Navigation (same as before) -->
    <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10 py-6">
        <header class="flex flex-wrap items-center justify-between gap-4 mb-10 bg-white/70 backdrop-blur-sm py-3 px-7 rounded-full border border-soft-blue/60 soft-shadow">
            <div class="flex items-center gap-2">
                <a href="/" class="text-3xl font-bold bg-gradient-to-br from-[#166b8a] to-[#2e8cad] bg-clip-text text-transparent">GB</a>
                <span class="h-6 w-px bg-soft-blue/60"></span>
                <span class="text-sm font-medium text-[#2c6f8a]">handyman solutions</span>
                <span class="ml-2 bg-soft-yellow text-xs px-3 py-1 rounded-full border border-soft-yellow/70">www.gbhandyman.com</span>
            </div>
            <nav class="flex flex-wrap items-center gap-1 text-sm font-medium">
                <a href="/" class="px-5 py-2 rounded-full text-[#1e607b] hover:bg-soft-blue transition-all duration-200 {{ request()->routeIs('home') ? 'bg-soft-green border border-soft-green font-semibold' : '' }}">Home</a>
                <a href="/about" class="px-5 py-2 rounded-full text-[#1e607b] hover:bg-soft-blue transition-all duration-200 {{ request()->routeIs('about') ? 'bg-soft-green border border-soft-green font-semibold' : '' }}">About</a>
                <a href="/services" class="px-5 py-2 rounded-full text-[#1e607b] hover:bg-soft-blue transition-all duration-200 {{ request()->routeIs('services') ? 'bg-soft-green border border-soft-green font-semibold' : '' }}">Services</a>
                <a href="/service-area" class="px-5 py-2 rounded-full text-[#1e607b] hover:bg-soft-blue transition-all duration-200 {{ request()->routeIs('service-area') ? 'bg-soft-green border border-soft-green font-semibold' : '' }}">Service area</a>
                <a href="/gallery" class="px-5 py-2 rounded-full text-[#1e607b] hover:bg-soft-blue transition-all duration-200 {{ request()->routeIs('gallery') ? 'bg-soft-green border border-soft-green font-semibold' : '' }}">Gallery</a>
                <a href="/contact" class="px-6 py-2 rounded-full bg-soft-blue border border-soft-blue font-semibold ml-2 hover:bg-[#c5e0ff] transition">Contact</a>
            </nav>
        </header>

        <!-- Main Content -->
        <main>
            {{-- @yield('content') --}}

            {{ $slot }}
        </main>

        <!-- Footer (same as before) -->
        <footer class="border-t border-soft-blue/50 pt-8 pb-4 flex flex-wrap justify-between items-center text-sm mt-16">
            <div class="font-semibold text-[#166b85]">© {{ date('Y') }} GB Handyman Solutions LLC · www.gbhandyman.com</div>
            <div class="flex gap-6">
                <a href="/" class="hover:underline">Home</a>
                <a href="/about" class="hover:underline">About</a>
                <a href="/services" class="hover:underline">Services</a>
                <a href="/service-area" class="hover:underline">Service area</a>
                <a href="/gallery" class="hover:underline">Gallery</a>
                <a href="/contact" class="hover:underline">Contact</a>
            </div>
            <div>📞 202 4601753  |  ✉️ gbhandymanllc@yahoo.com</div>
        </footer>
    </div>

    @stack('scripts')
</body>
</html>