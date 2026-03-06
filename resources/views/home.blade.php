@extends('layouts.app')

@section('title', 'GB Handyman Solutions – Professional Home Repairs & Remodeling in Kent, WA')
@section('meta_title', 'Best Handyman in Kent, WA | Home Repair & Remodeling Services')
@section('meta_description',
    '🏠 Family-owned handyman serving Kent, Auburn, Seattle & beyond. Bathroom remodeling,
    flooring, drywall, plumbing, electrical. Free estimates! Call 202-460-1753.')
@section('meta_keywords',
    'handyman Kent WA, home remodeling Auburn, bathroom renovation Seattle, flooring Tacoma,
    drywall repair Olympia, plumbing Lacey, electrical Bellevue')
    {{-- @section('canonical', route('home')) --}}

    @push('schema')
        <script type="application/ld+json">
@php
$businessSchema = [
    "@context" => "https://schema.org",
    "@type" => "LocalBusiness",
    "@id" => "https://www.gbhandyman.com/#business",
    "name" => "GB Handyman Solutions LLC",
    "url" => "https://www.gbhandyman.com",
    "logo" => asset('images/logo.png'),
    "image" => isset($sliderImages[0]) ? $sliderImages[0]['url'] : asset('images/gb-handyman-team.jpg'),
    "description" => "Professional handyman services serving Kent and 20+ cities across Western Washington. Family owned since 2012.",
    "address" => [
        "@type" => "PostalAddress",
        "streetAddress" => "6249 S 242nd Place, Bldg 8 Apt 203",
        "addressLocality" => "Kent",
        "addressRegion" => "WA",
        "postalCode" => "98032",
        "addressCountry" => "US"
    ],
    "geo" => [
        "@type" => "GeoCoordinates",
        "latitude" => 47.3809,
        "longitude" => -122.2348
    ],
    "telephone" => "+12024601753",
    "email" => "gbhandymanllc@yahoo.com",
    "openingHoursSpecification" => [
        [
            "@type" => "OpeningHoursSpecification",
            "dayOfWeek" => ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
            "opens" => "07:00",
            "closes" => "19:00"
        ],
        [
            "@type" => "OpeningHoursSpecification",
            "dayOfWeek" => "Saturday",
            "opens" => "08:00",
            "closes" => "16:00"
        ]
    ],
    "priceRange" => "$$",
    "sameAs" => [
        "https://www.facebook.com/gbhandyman",
        "https://www.instagram.com/gbhandyman",
        "https://www.yelp.com/biz/gb-handyman-solutions"
    ],
    "hasMap" => "https://maps.google.com/?q=6249+S+242nd+Pl+Kent+WA+98032",
    "areaServed" => [
        ["@type" => "City", "name" => "Kent"],
        ["@type" => "City", "name" => "Auburn"],
        ["@type" => "City", "name" => "Seattle"],
        ["@type" => "City", "name" => "Tacoma"],
        ["@type" => "City", "name" => "Olympia"],
        ["@type" => "City", "name" => "Bellevue"],
        ["@type" => "City", "name" => "Redmond"]
    ],
    "aggregateRating" => [
        "@type" => "AggregateRating",
        "ratingValue" => "4.9",
        "reviewCount" => "350",
        "bestRating" => "5",
        "worstRating" => "1"
    ]
];

$websiteSchema = [
    "@context" => "https://schema.org",
    "@type" => "WebSite",
    "@id" => "https://www.gbhandyman.com/#website",
    "url" => "https://www.gbhandyman.com",
    "name" => "GB Handyman Solutions",
    "potentialAction" => [
        "@type" => "SearchAction",
        "target" => "https://www.gbhandyman.com/search?q={search_term_string}",
        "query-input" => "required name=search_term_string"
    ]
];
@endphp
{!! json_encode($businessSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
</script>

        <script type="application/ld+json">
    {!! json_encode($websiteSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
    </script>
    @endpush

@section('content')
    <!-- Hero Slider Section -->
    <!-- Main Content Grid - FIXED RESPONSIVE -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center mb-10 lg:mb-16 px-4 sm:px-6 lg:px-8">
        <div class="order-2 lg:order-1">
            <span
                class="bg-soft-yellow/80 text-[#1a627b] px-4 sm:px-5 py-2 rounded-full text-sm font-medium border border-soft-yellow inline-block mb-4 sm:mb-6">⚡
                works remotely · fully mobile</span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold leading-tight tracking-tight text-[#0b4a61]">
                craftsmanship <br><span
                    class="text-[#217a95] bg-soft-blue/30 px-3 sm:px-4 inline-block rounded-2xl sm:rounded-3xl">that
                    travels</span> to you
            </h1>
            <p class="text-base sm:text-lg mt-4 sm:mt-6 text-[#2a647a] max-w-xl">From bathroom remodels to flooring, drywall,
                electrical — we
                bring the workshop to your doorstep. Serving 20+ cities with precision.</p>

            <div class="flex flex-wrap gap-4 sm:gap-6 mt-6 sm:mt-8">
                <div class="flex items-center gap-2"><span
                        class="w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-soft-green flex items-center justify-center text-base sm:text-lg">⭐</span>
                    <span class="text-sm sm:text-base font-medium">4.9 · 350+ reviews</span>
                </div>
                <div class="flex items-center gap-2"><span
                        class="w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-soft-blue flex items-center justify-center text-base sm:text-lg">🔨</span>
                    <span class="text-sm sm:text-base font-medium">15+ years</span>
                </div>
                <div class="flex items-center gap-2"><span
                        class="w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-soft-yellow flex items-center justify-center text-base sm:text-lg">🛻</span>
                    <span class="text-sm sm:text-base font-medium">fully stocked</span>
                </div>
            </div>

            <div
                class="mt-6 sm:mt-10 bg-white/90 rounded-2xl sm:rounded-3xl p-4 sm:p-5 border border-soft-blue/70 flex flex-col sm:flex-row flex-wrap items-start sm:items-center gap-3 sm:gap-4 soft-shadow">
                <div class="bg-soft-yellow p-2 sm:p-3 rounded-xl sm:rounded-2xl text-sm sm:text-base w-full sm:w-auto">
                    📍 <span class="font-medium">6249 S 242nd Pl, Bldg8 Apt203, Kent</span>
                </div>
                <div class="flex flex-col sm:flex-row gap-2 sm:gap-3 w-full sm:w-auto">
                    <a href="tel:+12024601753"
                        class="bg-soft-blue px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-xs sm:text-sm text-center">+1 202
                        4601753</a>
                    <a href="mailto:gbhandymanllc@yahoo.com"
                        class="bg-soft-green px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-xs sm:text-sm truncate text-center">gbhandymanllc@yahoo.com</a>
                </div>
            </div>
        </div>

        <div class="order-1 lg:order-2 mb-4 lg:mb-8">
            <livewire:image-card />
        </div>
    </div>

    <!-- Service Area Teaser - FIXED RESPONSIVE -->
    <div
        class="bg-white/70 rounded-3xl sm:rounded-[4rem] p-4 sm:p-6 soft-shadow border border-soft-blue/60 mb-12 sm:mb-14 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3 sm:gap-4">
            <h2 class="text-xl sm:text-2xl font-semibold text-[#1f647e]">📍 service area — we cover all major cities</h2>
            <a href="{{ route('service-area') }}"
                class="text-[#1d728f] underline-offset-4 hover:underline font-medium text-sm sm:text-base">
                full service area page →
            </a>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 lg:grid-cols-7 gap-2 mt-4 sm:mt-6">
            @php
                $cities = [
                    'Kent',
                    'Auburn',
                    'Renton',
                    'Tacoma',
                    'Olympia',
                    'Lacey',
                    'Bellevue',
                    'Issaquah',
                    'Tukwila',
                    'Seattle',
                    'Federal Way',
                    'Everett',
                    'Redmond',
                    'Puyallup',
                ];
            @endphp
            @foreach ($cities as $city)
                <span
                    class="bg-soft-blue/60 px-2 sm:px-3 py-1.5 sm:py-2 rounded-full text-xs sm:text-sm text-center">{{ $city }}</span>
            @endforeach
        </div>
        <p class="text-xs sm:text-sm text-[#3b6d82] mt-3 sm:mt-4">plus Kirkland, Bothell, Lynwood, Chehalis, Centralia,
            Bremerton, Gig Harbor,
            Port Orchard, Seatac …</p>
    </div>

    <!-- About Teaser - FIXED RESPONSIVE -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 items-center mb-16 md:mb-24 px-4 sm:px-6 lg:px-8">
        <div
            class="bg-soft-green/30 p-6 sm:p-8 rounded-2xl sm:rounded-[3rem] border border-soft-green/70 soft-shadow order-2 md:order-1">
            <h2 class="text-2xl sm:text-3xl font-bold text-[#115e7a]">more than a handyman</h2>
            <p class="mt-3 text-base sm:text-lg">Family owned, operating since 2012. We don't just fix things — we make them
                better.
                Based in Kent, fully remote ready, and obsessed with quality.</p>
            <div class="mt-4 sm:mt-6 flex flex-wrap gap-2 sm:gap-3">
                <span
                    class="bg-soft-white px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-xs sm:text-sm border border-soft-blue">📋
                    licensed</span>
                <span
                    class="bg-soft-white px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-xs sm:text-sm border border-soft-green">🛡️
                    insured</span>
                <span
                    class="bg-soft-white px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-xs sm:text-sm border border-soft-yellow">⭐
                    5 star</span>
            </div>
            <a href="/about"
                class="mt-6 sm:mt-8 inline-flex items-center gap-2 bg-soft-blue px-5 sm:px-6 py-2.5 sm:py-3 rounded-full text-sm sm:text-base font-medium hover:bg-[#c5e0ff] transition">read
                full story →</a>
        </div>
        <div class="grid grid-cols-2 gap-3 sm:gap-4 order-1 md:order-2">
            <div class="bg-soft-yellow p-4 sm:p-5 rounded-2xl sm:rounded-3xl text-center text-sm sm:text-base">🏠 500+
                projects</div>
            <div class="bg-soft-blue p-4 sm:p-5 rounded-2xl sm:rounded-3xl text-center text-sm sm:text-base">🔧 20+
                specialties</div>
            <div class="bg-soft-green p-4 sm:p-5 rounded-2xl sm:rounded-3xl text-center text-sm sm:text-base">📞 same-day
                call</div>
            <div
                class="bg-soft-white p-4 sm:p-5 rounded-2xl sm:rounded-3xl border border-soft-blue text-center text-sm sm:text-base">
                🚐 remote trailer</div>
        </div>
    </div>

    <!-- Services Preview - FIXED RESPONSIVE -->
    <div class="mb-16 md:mb-24 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3 sm:gap-4 mb-4 sm:mb-6">
            <h2 class="text-2xl sm:text-3xl font-bold text-[#115e7a]">services we deliver</h2>
            <a href="/services"
                class="bg-soft-yellow px-5 sm:px-6 py-2.5 sm:py-3 rounded-full text-sm sm:text-base font-medium border border-soft-yellow/80 hover:bg-[#ffefb5] transition whitespace-nowrap">
                view all services →
            </a>
        </div>
        <livewire:service-card />
    </div>

    <!-- Gallery Preview - FIXED RESPONSIVE -->
    <div class="mb-16 md:mb-24 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3 sm:gap-4 mb-4 sm:mb-6">
            <h2 class="text-2xl sm:text-3xl font-bold text-[#115e7a]">recent transformations</h2>
            <a href="/gallery"
                class="bg-soft-blue px-5 sm:px-6 py-2.5 sm:py-3 rounded-full text-sm sm:text-base font-medium border border-soft-blue/80 hover:bg-[#c5e0ff] transition whitespace-nowrap">
                gallery page →
            </a>
        </div>
        <livewire:gallery-card />
    </div>

    <!-- Contact CTA - FIXED RESPONSIVE -->
<div class="bg-soft-blue/20 rounded-3xl sm:rounded-[4rem] p-6 sm:p-8 md:p-10 soft-shadow border border-white/70 mb-12 sm:mb-16 backdrop-blur-sm mx-2 sm:mx-4 md:mx-6 lg:mx-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
        
        <!-- Left Column -->
        <div class="space-y-5">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-[#0f556e]">ready to fix it right?</h2>
            <p class="text-base sm:text-lg text-[#1e4f63]">Call or email — we'll schedule a remote consultation or arrive with our fully stocked trailer.</p>
            
            <!-- Contact Buttons -->
            <div class="flex flex-col sm:flex-row gap-3">
                <a href="tel:+12024601753" 
                   class="flex-1 bg-white px-4 py-4 rounded-2xl sm:rounded-full flex items-center justify-between hover:bg-soft-blue transition-all duration-300 border border-soft-blue/30">
                    <div class="flex items-center gap-3">
                        <span class="text-xl sm:text-2xl bg-soft-yellow w-10 h-10 rounded-full flex items-center justify-center">📞</span>
                        <span class="text-[#1e4f63] font-semibold text-sm">+1 202 4601753</span>
                    </div>
                    <span class="text-xs bg-soft-green px-3 py-1.5 rounded-full sm:hidden">Call</span>
                </a>
                
                <a href="mailto:gbhandymanllc@yahoo.com" 
                   class="flex-1 bg-white px-4 py-4 rounded-2xl sm:rounded-full flex items-center justify-between hover:bg-soft-blue transition-all duration-300 border border-soft-blue/30">
                    <div class="flex items-center gap-3 min-w-0">
                        <span class="text-xl sm:text-2xl bg-soft-green w-10 h-10 rounded-full flex items-center justify-center">✉️</span>
                        <span class="text-[#1e4f63] font-semibold text-sm truncate">gbhandymanllc@yahoo.com</span>
                    </div>
                    <span class="text-xs bg-soft-yellow px-3 py-1.5 rounded-full sm:hidden">Email</span>
                </a>
            </div>
            
            <!-- Address -->
            <p class="text-sm sm:text-base text-[#266982] flex items-start gap-2 pt-2">
                <span class="text-lg shrink-0">📍</span>
                <span>6249 S 242nd Place (bld 8 apt 203) Kent, WA</span>
            </p>
        </div>
        
        <!-- Right Column -->
        <div class="bg-soft-yellow p-6 sm:p-7 rounded-3xl border border-soft-yellow/80">
            <div class="flex items-center gap-3 mb-4">
                <span class="text-2xl bg-white/80 w-12 h-12 rounded-2xl flex items-center justify-center shrink-0">⚡</span>
                <h3 class="font-bold text-lg sm:text-xl text-[#0f556e]">remote & mobile</h3>
            </div>
            
            <!-- Mobile: Scrollable city list -->
            <div class="overflow-x-auto pb-3 -mx-1 px-1 sm:overflow-visible sm:pb-0 sm:mx-0 sm:px-0 mb-4 sm:mb-0">
                <div class="flex sm:flex-wrap gap-2 min-w-max sm:min-w-0">
                    @php
                        $cities = ['Auburn', 'Kent', 'Renton', 'Tacoma', 'Olympia', 'Lacey', 'Bellevue', 'Issaquah', 'Tukwila', 'Seatac', 'Port Orchard', 'Seattle', 'Federal Way', 'Everett', 'Redmond', 'Puyallup', 'Kirkland', 'Bothell', 'Lynwood', 'Chehalis', 'Centralia', 'Bremerton', 'Gig Harbor'];
                    @endphp
                    
                    @foreach($cities as $city)
                        <span class="bg-white/80 px-3 py-1.5 rounded-full text-xs sm:text-sm border border-white/60 whitespace-nowrap sm:whitespace-normal shadow-sm">
                            {{ $city }}
                        </span>
                    @endforeach
                </div>
            </div>
            
            <!-- Availability Badge -->
            <div class="bg-white/80 rounded-full py-3 px-4 text-sm text-center font-medium text-[#0f556e] border border-soft-yellow/60 mt-4 sm:mt-6">
                📞 call for same‑week availability • we respond within 2 hours
            </div>
        </div>
    </div>
</div>
@endsection
