@extends('layouts.app')

@section('title', 'Handyman Service Area | 20+ Cities Across Western Washington')
@section('meta_description',
    '📍 GB Handyman Solutions serves Kent, Auburn, Seattle, Tacoma, Olympia, Bellevue, Redmond,
    and 15+ more cities. Fully mobile and remote ready. Call today!')
@section('meta_keywords',
    'handyman service area, handyman Kent WA, handyman Auburn, handyman Seattle, handyman Tacoma,
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
    @include('service')
@endsection
