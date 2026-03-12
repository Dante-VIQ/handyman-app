@extends('layouts.app')

@section('title', 'Handyman Service Area | 20+ Cities Across Western Washington')
@section('meta_description', '📍 GB Handyman Solutions serves Kent, Auburn, Seattle, Tacoma, Olympia, Bellevue, Redmond,
    and 15+ more cities. Fully mobile and remote ready. Call today!')
@section('meta_keywords', 'handyman service area, handyman Kent WA, handyman Auburn, handyman Seattle, handyman Tacoma,
    handyman Olympia, handyman Bellevue')
@section('canonical', route('service-area'))
@push('schema')
    <script type="application/ld+json">
@php
$areaServed = [
    ["@type" => "City", "name" => "Kent", "sameAs" => "https://en.wikipedia.org/wiki/Kent,_Washington"],
    ["@type" => "City", "name" => "Auburn", "sameAs" => "https://en.wikipedia.org/wiki/Auburn,_Washington"],
    ["@type" => "City", "name" => "Renton", "sameAs" => "https://en.wikipedia.org/wiki/Renton,_Washington"],
    ["@type" => "City", "name" => "Tacoma", "sameAs" => "https://en.wikipedia.org/wiki/Tacoma,_Washington"],
    ["@type" => "City", "name" => "Olympia", "sameAs" => "https://en.wikipedia.org/wiki/Olympia,_Washington"],
    ["@type" => "City", "name" => "Lacey", "sameAs" => "https://en.wikipedia.org/wiki/Lacey,_Washington"],
    ["@type" => "City", "name" => "Bellevue", "sameAs" => "https://en.wikipedia.org/wiki/Bellevue,_Washington"],
    ["@type" => "City", "name" => "Issaquah", "sameAs" => "https://en.wikipedia.org/wiki/Issaquah,_Washington"],
    ["@type" => "City", "name" => "Tukwila", "sameAs" => "https://en.wikipedia.org/wiki/Tukwila,_Washington"],
    ["@type" => "City", "name" => "Seatac", "sameAs" => "https://en.wikipedia.org/wiki/SeaTac,_Washington"],
    ["@type" => "City", "name" => "Seattle", "sameAs" => "https://en.wikipedia.org/wiki/Seattle"],
    ["@type" => "City", "name" => "Federal Way", "sameAs" => "https://en.wikipedia.org/wiki/Federal_Way,_Washington"],
    ["@type" => "City", "name" => "Everett", "sameAs" => "https://en.wikipedia.org/wiki/Everett,_Washington"],
    ["@type" => "City", "name" => "Redmond", "sameAs" => "https://en.wikipedia.org/wiki/Redmond,_Washington"],
    ["@type" => "City", "name" => "Puyallup", "sameAs" => "https://en.wikipedia.org/wiki/Puyallup,_Washington"],
    ["@type" => "City", "name" => "Kirkland", "sameAs" => "https://en.wikipedia.org/wiki/Kirkland,_Washington"],
    ["@type" => "City", "name" => "Bothell", "sameAs" => "https://en.wikipedia.org/wiki/Bothell,_Washington"],
    ["@type" => "City", "name" => "Lynwood", "sameAs" => "https://en.wikipedia.org/wiki/Lynnwood,_Washington"],
    ["@type" => "City", "name" => "Chehalis", "sameAs" => "https://en.wikipedia.org/wiki/Chehalis,_Washington"],
    ["@type" => "City", "name" => "Centralia", "sameAs" => "https://en.wikipedia.org/wiki/Centralia,_Washington"],
    ["@type" => "City", "name" => "Bremerton", "sameAs" => "https://en.wikipedia.org/wiki/Bremerton,_Washington"],
    ["@type" => "City", "name" => "Gig Harbor", "sameAs" => "https://en.wikipedia.org/wiki/Gig_Harbor,_Washington"],
    ["@type" => "City", "name" => "Port Orchard", "sameAs" => "https://en.wikipedia.org/wiki/Port_Orchard,_Washington"]
];

$serviceAreaSchema = [
    "@context" => "https://schema.org",
    "@type" => "LocalBusiness",
    "name" => "GB Handyman Solutions LLC",
    "url" => "https://www.gbhandyman.com",
    "telephone" => "+12024601753",
    "email" => "gbhandymanllc@yahoo.com",
    "address" => [
        "@type" => "PostalAddress",
        "streetAddress" => "6249 S 242nd Place, Bldg 8 Apt 203",
        "addressLocality" => "Kent",
        "addressRegion" => "WA",
        "postalCode" => "98032"
    ],
    "areaServed" => $areaServed,
    "serviceArea" => [
        "@type" => "GeoCircle",
        "geoMidpoint" => [
            "@type" => "GeoCoordinates",
            "latitude" => 47.3809,
            "longitude" => -122.2348
        ],
        "geoRadius" => "50000"
    ]
];

$breadcrumbSchema = [
    "@context" => "https://schema.org",
    "@type" => "BreadcrumbList",
    "itemListElement" => [
        [
            "@type" => "ListItem",
            "position" => 1,
            "name" => "Home",
            "item" => "https://www.gbhandyman.com"
        ],
        [
            "@type" => "ListItem",
            "position" => 2,
            "name" => "Service Area",
            "item" => "https://www.gbhandyman.com/service-area"
        ]
    ]
];
@endphp
{!! json_encode($serviceAreaSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
</script>

    <script type="application/ld+json">
{!! json_encode($breadcrumbSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
</script>
@endpush

@section('content')
    <div class="text-center max-w-3xl mx-auto mb-12">
        <h1 class="text-5xl font-bold text-[#115e7a]">Handyman Service Area</h1>
        <p class="text-xl mt-4 text-[#2a647a]">we travel to you — throughout western Washington</p>
    </div>

    <!-- City Grid (same as before) -->
    <!-- ... (keep your existing city grid) ... -->
    <div class="bg-white/70 rounded-[4rem] p-10 soft-shadow border border-soft-blue/60 mb-16 mx-auto max-w-7xl">
        <h2 class="text-2xl font-semibold text-[#1f647e] mb-6 justify-center text-center">📍 Cities We Serve</h2>
        @php
            $cityGroups = [
                'Eastside' => ['Bellevue', 'Redmond', 'Kirkland', 'Issaquah', 'Bothell'],
                'South King' => ['Kent', 'Auburn', 'Renton', 'Federal Way', 'Tukwila', 'Seatac'],
                'Pierce/Thurston' => ['Tacoma', 'Puyallup', 'Olympia', 'Lacey', 'Centralia', 'Chehalis'],
                'Seattle & North' => ['Seattle', 'Everett', 'Lynwood'],
                'Kitsap & Beyond' => ['Bremerton', 'Port Orchard', 'Gig Harbor'],
            ];
        @endphp
        @foreach ($cityGroups as $region => $cities)
            <div class="mb-8 justify-center text-center">
                <h3 class="text-lg font-bold text-[#115e7a] mb-3">{{ $region }}</h3>
                <div class="flex flex-wrap gap-2 justify-center">
                    @foreach ($cities as $city)
                        <span class="bg-soft-blue px-4 py-2 rounded-full text-sm">{{ $city }}</span>
                    @endforeach
                </div>
            </div>
        @endforeach
        <p class="text-sm text-[#3b6d82] mt-4">plus many smaller towns in between — if you're unsure, just call!</p>
    </div>

    <!-- Map -->
    <div class="mb-16">
        <h2 class="text-2xl font-bold text-[#115e7a] mb-6 text-center">Our Service Region</h2>
        <div class="rounded-[3rem] overflow-hidden border-4 border-soft-blue soft-shadow h-96">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d345079.5045523308!2d-122.24163662265677!3d47.44116948183589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1617823901450!5m2!1sen!2sus"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                title="GB Handyman service area map"></iframe>
        </div>
    </div>
@endsection
