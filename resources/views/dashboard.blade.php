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
    @include('new')
@endsection
