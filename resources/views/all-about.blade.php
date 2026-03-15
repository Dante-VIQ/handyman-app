@extends('layouts.app')

@section('title', 'About GB Handyman Solutions | Family-Owned Handyman in Kent, WA Since 2012')
@section('meta_title', 'About Us | Family Handyman Service in Kent, Auburn & Seattle')
@section('meta_description',
    '👨‍🔧 Learn about GB Handyman Solutions - family-owned and operated since 2012. Meet Glen,
    see our story, and discover why hundreds of homeowners trust us with their projects.')
@section('meta_keywords',
    'about handyman, family handyman, handyman story, local handyman Kent WA, experienced
    handyman')
@section('canonical', route('all-about'))

@push('schema')
    <script type="application/ld+json">
@php
$aboutSchema = [
    "@context" => "https://schema.org",
    "@type" => "AboutPage",
    "@id" => "https://www.gbhandyman.com/about#about",
    "name" => "About GB Handyman Solutions",
    "description" => "Family-owned handyman service serving Western Washington since 2012",
    "url" => "https://www.gbhandyman.com/about",
    "mainEntity" => [
        "@id" => "https://www.gbhandyman.com/#business"
    ],
    "breadcrumb" => [
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
                "name" => "About",
                "item" => "https://www.gbhandyman.com/about"
            ]
        ]
    ]
];

$glenSchema = [
    "@context" => "https://schema.org",
    "@type" => "Person",
    "@id" => "https://www.gbhandyman.com/#glen",
    "name" => "Glen",
    "description" => "Founder of GB Handyman Solutions with 18 years of experience in bathroom remodeling, carpentry, electrical and plumbing",
    "image" => "https://www.gbhandyman.com/images/glen.jpg",
    "worksFor" => [
        "@id" => "https://www.gbhandyman.com/#business"
    ],
    "jobTitle" => "Founder & Lead Craftsman",
    "knowsAbout" => ["Bathroom Remodeling", "Carpentry", "Tile Installation", "Home Renovation", "Electrical", "Plumbing", "Flooring", "Drywall"]
];
@endphp
{!! json_encode($aboutSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
</script>

    <script type="application/ld+json">
{!! json_encode($glenSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
</script>
@endpush

@section('content')

    @include('about')

@endsection
