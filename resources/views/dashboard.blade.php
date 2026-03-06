@extends('layouts.app')

@section('title', 'GB Handyman Solutions – Professional Home Repairs & Remodeling in Kent, WA')
@section('meta_title', 'Best Handyman in Kent, WA | Home Repair & Remodeling Services')
@section('meta_description', '🏠 Family-owned handyman serving Kent, Auburn, Seattle & beyond. Bathroom remodeling,
    flooring, drywall, plumbing, electrical. Free estimates! Call 202-460-1753.')
@section('meta_keywords', 'handyman Kent WA, home remodeling Auburn, bathroom renovation Seattle, flooring Tacoma,
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


    <!-- Main Content Grid -->
    <div class="grid lg:grid-cols-2 gap-12 items-center mb-24">
        <div>
            <span
                class="bg-soft-yellow/80 text-[#1a627b] px-5 py-2 rounded-full text-sm font-medium border border-soft-yellow inline-block mb-6">⚡
                works remotely · fully mobile</span>
            <h1 class="text-5xl lg:text-6xl font-bold leading-tight tracking-tight text-[#0b4a61]">craftsmanship <br><span
                    class="text-[#217a95] bg-soft-blue/30 px-4 inline-block rounded-3xl">that travels</span> to you</h1>
            <p class="text-lg mt-6 text-[#2a647a] max-w-xl">From bathroom remodels to flooring, drywall, electrical — we
                bring the workshop to your doorstep. Serving 20+ cities with precision.</p>

            <div class="flex flex-wrap gap-6 mt-8">
                <div class="flex items-center gap-2"><span
                        class="w-8 h-8 rounded-full bg-soft-green flex items-center justify-center text-lg">⭐</span> <span
                        class="font-medium">4.9 · 350+ reviews</span></div>
                <div class="flex items-center gap-2"><span
                        class="w-8 h-8 rounded-full bg-soft-blue flex items-center justify-center text-lg">🔨</span> <span
                        class="font-medium">15+ years</span></div>
                <div class="flex items-center gap-2"><span
                        class="w-8 h-8 rounded-full bg-soft-yellow flex items-center justify-center text-lg">🛻</span> <span
                        class="font-medium">fully stocked</span></div>
            </div>

            <div
                class="mt-10 bg-white/90 rounded-3xl p-5 border border-soft-blue/70 flex flex-wrap items-center gap-4 soft-shadow">
                <div class="bg-soft-yellow p-3 rounded-2xl">
                    📍 <span class="font-medium">6249 S 242nd Pl, Bldg8 Apt203, Kent</span>
                </div>
                <div class="flex gap-3">
                    <span class="bg-soft-blue px-4 py-2 rounded-full text-sm">202 4601753</span>
                    <span class="bg-soft-green px-4 py-2 rounded-full text-sm truncate">gbhandymanllc@yahoo.com</span>
                </div>
            </div>
        </div>

        <div class="mb-16">
            <x-hero-card :images="$sliderImages ?? []" />
        </div>
    </div>

    <!-- Service Area Teaser -->
    <div class="bg-white/70 rounded-[4rem] p-8 soft-shadow border border-soft-blue/60 mb-24">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <h2 class="text-2xl font-semibold text-[#1f647e]">📍 service area — we cover all major cities</h2>
            <a href="{{ route('service-area') }}" class="text-[#1d728f] underline-offset-4 hover:underline font-medium">full
                service area page →</a>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 lg:grid-cols-7 gap-2 mt-6">
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
                <span class="bg-soft-blue/60 px-3 py-2 rounded-full text-sm text-center">{{ $city }}</span>
            @endforeach
        </div>
        <p class="text-sm text-[#3b6d82] mt-4">plus Kirkland, Bothell, Lynwood, Chehalis, Centralia, Bremerton, Gig Harbor,
            Port Orchard, Seatac …</p>
    </div>

    <!-- About Teaser -->
    <div class="grid md:grid-cols-2 gap-8 items-center mb-24">
        <div class="bg-soft-green/30 p-8 rounded-[3rem] border border-soft-green/70 soft-shadow">
            <h2 class="text-3xl font-bold text-[#115e7a]">more than a handyman</h2>
            <p class="mt-3 text-lg">Family owned, operating since 2012. We don't just fix things — we make them better.
                Based in Kent, fully remote ready, and obsessed with quality.</p>
            <div class="mt-6 flex gap-3">
                <span class="bg-soft-white px-4 py-2 rounded-full border border-soft-blue">📋 licensed</span>
                <span class="bg-soft-white px-4 py-2 rounded-full border border-soft-green">🛡️ insured</span>
                <span class="bg-soft-white px-4 py-2 rounded-full border border-soft-yellow">⭐ 5 star</span>
            </div>
            <a href="/about"
                class="mt-8 inline-flex items-center gap-2 bg-soft-blue px-6 py-3 rounded-full font-medium hover:bg-[#c5e0ff] transition">read
                full story →</a>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="bg-soft-yellow p-5 rounded-3xl text-center">🏠 500+ projects</div>
            <div class="bg-soft-blue p-5 rounded-3xl text-center">🔧 20+ specialties</div>
            <div class="bg-soft-green p-5 rounded-3xl text-center">📞 same-day call</div>
            <div class="bg-soft-white p-5 rounded-3xl border border-soft-blue">🚐 remote trailer</div>
        </div>
    </div>

    <!-- Services Preview -->
    <div class="mb-24">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-3xl font-bold text-[#115e7a]">services we deliver</h2>
            <a href="/services"
                class="bg-soft-yellow px-6 py-3 rounded-full font-medium border border-soft-yellow/80 hover:bg-[#ffefb5] transition">view
                all services →</a>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach ([['icon' => '🏠', 'title' => 'home renovation', 'desc' => 'full remodels'], ['icon' => '🛁', 'title' => 'bathroom', 'desc' => 'remodeling'], ['icon' => '🪚', 'title' => 'flooring', 'desc' => 'hardwood, tile, vinyl'], ['icon' => '🧱', 'title' => 'dry walling', 'desc' => 'repair & install'], ['icon' => '🎨', 'title' => 'painting', 'desc' => 'interior/exterior'], ['icon' => '⚡', 'title' => 'electrical', 'desc' => 'fixtures, repair'], ['icon' => '🚿', 'title' => 'plumbing', 'desc' => 'leaks, installs'], ['icon' => '🪜', 'title' => 'carpentry', 'desc' => 'custom builds']] as $service)
                <div
                    class="bg-white/80 p-5 rounded-3xl border border-soft-blue flex flex-col items-start soft-shadow hover-lift transition-soft">
                    <span class="text-3xl mb-2">{{ $service['icon'] }}</span>
                    <span class="font-semibold">{{ $service['title'] }}</span>
                    <span class="text-sm text-[#3f7287]">{{ $service['desc'] }}</span>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Gallery Preview -->
    <div class="mb-24">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-3xl font-bold text-[#115e7a]">recent transformations</h2>
            <a href="/gallery"
                class="bg-soft-blue px-6 py-3 rounded-full font-medium border border-soft-blue/80 hover:bg-[#c5e0ff] transition">gallery
                page →</a>
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            @for ($i = 1; $i <= 3; $i++)
                <div class="bg-white rounded-[2.5rem] overflow-hidden border border-soft-blue soft-shadow">
                    <div class="h-44 bg-gradient-to-br from-[#d2e0ed] to-[#c4dddb] flex items-center justify-center gap-4">
                        <span class="bg-white/70 px-4 py-1 rounded-full text-sm">before</span>
                        <span class="text-2xl">→</span>
                        <span class="bg-white/70 px-4 py-1 rounded-full text-sm">after</span>
                    </div>
                    <div class="p-4 flex justify-between items-center">
                        <span class="font-medium">bathroom remodel {{ $i }}</span>
                        <span class="bg-soft-green px-3 py-1 rounded-full text-xs">2025</span>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    <!-- Contact CTA -->
    <div class="bg-soft-blue/20 rounded-[4rem] p-10 soft-shadow border border-white/70 mb-16 backdrop-blur-sm">
        <div class="grid md:grid-cols-2 gap-10 items-center">
            <div>
                <h2 class="text-4xl font-bold text-[#0f556e]">ready to fix it right?</h2>
                <p class="mt-3 text-lg">Call or email — we'll schedule a remote consultation or arrive with our fully
                    stocked trailer.</p>
                <div class="mt-6 flex flex-wrap gap-4">
                    <div class="bg-white px-6 py-4 rounded-full text-xl font-medium flex gap-2 items-center"><span>📞</span>
                        202 4601753</div>
                    <div class="bg-white px-6 py-4 rounded-full text-xl font-medium flex gap-2 items-center"><span>✉️</span>
                        gbhandymanllc@yahoo.com</div>
                </div>
                <p class="mt-4 text-[#266982]">📍 6249 S 242nd Place (bld 8 apt 203) Kent, WA</p>
            </div>
            <div class="bg-soft-yellow p-6 rounded-3xl border border-soft-yellow/80">
                <p class="font-medium text-lg">⚡ remote & mobile</p>
                <p class="mt-2">We cover: Auburn, Kent, Renton, Tacoma, Olympia, Lacey, Bellevue, Issaquah, Tukwila,
                    Seatac, Port Orchard, Seattle, Federal Way, Everett, Redmond, Puyallup, Kirkland, Bothell, Lynwood,
                    Chehalis, Centralia, Bremerton, Gig Harbor.</p>
                <div class="mt-4 bg-white/60 rounded-full py-2 px-4 text-center">call for same‑week availability</div>
            </div>
        </div>
    </div>
@endsection
