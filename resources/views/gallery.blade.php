@extends('layouts.app')

@section('title', 'Before & After Gallery | Handyman Projects in Kent, Auburn, Seattle WA')
@section('meta_title', 'Handyman Before & After Photos | Bathroom, Kitchen, Flooring Projects')
@section('meta_description', '📸 See real transformations from GB Handyman Solutions. Browse our gallery of bathroom remodels, flooring installations, kitchen renovations, and painting projects in Kent, Auburn, Seattle, and across Western Washington.')
@section('meta_keywords', 'handyman before after photos, bathroom remodel pictures, flooring installation photos, kitchen renovation images, handyman portfolio Kent WA, home improvement gallery')
@section('canonical', route('gallery'))

@push('schema')
<script type="application/ld+json">
@php
$galleryItems = [
    [
        'name' => 'Bathroom Remodel in Kent',
        'description' => 'Complete bathroom renovation with new tile, vanity, and fixtures',
        'image' => 'bathroom-remodel-kent.jpg',
        'keywords' => 'bathroom remodel, bathroom renovation, Kent WA'
    ],
    [
        'name' => 'Hardwood Flooring Installation',
        'description' => 'New hardwood floors throughout living room and kitchen',
        'image' => 'flooring-installation.jpg',
        'keywords' => 'flooring installation, hardwood floors, Auburn WA'
    ],
    [
        'name' => 'Kitchen Renovation with Custom Cabinetry',
        'description' => 'Full kitchen remodel with custom cabinets and quartz countertops',
        'image' => 'kitchen-renovation.jpg',
        'keywords' => 'kitchen renovation, kitchen remodel, Seattle WA'
    ],
    [
        'name' => 'Deck Repair and Staining',
        'description' => 'Pressure washing, repair, and staining of existing deck',
        'image' => 'deck-repair.jpg',
        'keywords' => 'deck repair, deck staining, Tacoma WA'
    ],
    [
        'name' => 'Bathroom Vanity Installation',
        'description' => 'New vanity, mirror, and lighting installation',
        'image' => 'bathroom-vanity.jpg',
        'keywords' => 'bathroom vanity, bathroom fixtures, Olympia WA'
    ],
    [
        'name' => 'Drywall Repair and Texturing',
        'description' => 'Professional drywall repair and orange peel texturing',
        'image' => 'drywall-repair.jpg',
        'keywords' => 'drywall repair, drywall texturing, Bellevue WA'
    ],
];

$hasPart = [];
foreach ($galleryItems as $index => $item) {
    $hasPart[] = [
        "@type" => "ImageObject",
        "name" => $item['name'],
        "description" => $item['description'],
        "contentUrl" => "https://www.gbhandyman.com/images/gallery/" . $item['image'],
        "thumbnailUrl" => "https://www.gbhandyman.com/images/gallery/thumbnails/" . $item['image'],
        "uploadDate" => "2025-" . str_pad($index + 1, 2, '0', STR_PAD_LEFT) . "-15",
        "keywords" => $item['keywords']
    ];
}

$gallerySchema = [
    "@context" => "https://schema.org",
    "@type" => "ImageGallery",
    "@id" => "https://www.gbhandyman.com/gallery#gallery",
    "name" => "GB Handyman Solutions Project Gallery",
    "description" => "Before and after photos of home renovation projects in Western Washington. See our bathroom remodels, flooring installations, kitchen renovations, and more.",
    "url" => "https://www.gbhandyman.com/gallery",
    "image" => "https://www.gbhandyman.com/images/gallery-hero.jpg",
    "author" => [
        "@type" => "LocalBusiness",
        "@id" => "https://www.gbhandyman.com/#business"
    ],
    "about" => [
        "@type" => "Service",
        "name" => "Home Renovation Services"
    ],
    "hasPart" => $hasPart
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
            "name" => "Gallery",
            "item" => "https://www.gbhandyman.com/gallery"
        ]
    ]
];
@endphp
{!! json_encode($gallerySchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
</script>

<script type="application/ld+json">
{!! json_encode($breadcrumbSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
</script>
@endpush

@push('styles')
<style>
    /* Image lazy loading and hover effects */
    .gallery-image {
        transition: transform 0.3s ease;
    }
    .gallery-image:hover {
        transform: scale(1.02);
    }
    .image-loading {
        background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
        background-size: 200% 100%;
        animation: loading 1.5s infinite;
    }
    @keyframes loading {
        0% { background-position: 200% 0; }
        100% { background-position: -200% 0; }
    }
</style>
@endpush

@section('content')
<!-- Page Header with H1 -->
<div class="text-center max-w-4xl mx-auto mb-12">
    <h1 class="text-5xl md:text-6xl font-bold text-[#115e7a] mb-4">Our Project Gallery</h1>
    <p class="text-xl text-[#2a647a]">Real before & after transformations from homes across Kent, Auburn, Seattle, and beyond</p>
    <div class="w-24 h-1 bg-soft-green mx-auto mt-6 rounded-full"></div>
</div>

<!-- Filter Categories for SEO (internal linking) -->
<div class="flex flex-wrap justify-center gap-3 mb-10">
    <a href="#all" class="px-6 py-3 rounded-full bg-soft-green font-semibold border border-soft-green">All Projects</a>
    <a href="#bathroom" class="px-6 py-3 rounded-full bg-soft-white hover:bg-soft-blue transition border border-soft-blue">Bathroom Remodels</a>
    <a href="#kitchen" class="px-6 py-3 rounded-full bg-soft-white hover:bg-soft-blue transition border border-soft-blue">Kitchen Renovations</a>
    <a href="#flooring" class="px-6 py-3 rounded-full bg-soft-white hover:bg-soft-blue transition border border-soft-blue">Flooring</a>
    <a href="#painting" class="px-6 py-3 rounded-full bg-soft-white hover:bg-soft-blue transition border border-soft-blue">Painting</a>
    <a href="#deck" class="px-6 py-3 rounded-full bg-soft-white hover:bg-soft-blue transition border border-soft-blue">Decks & Fences</a>
</div>

<!-- Gallery Grid with Lazy Loading and Schema.org markup -->
<livewire:gallery-card />

<!-- Gallery SEO Text Block -->
<div class="bg-soft-blue/20 rounded-[4rem] p-10 soft-shadow border border-soft-blue/60 mb-16">
    <h2 class="text-3xl font-bold text-[#115e7a] mb-6">Handyman Projects Across Western Washington</h2>
    <div class="grid md:grid-cols-2 gap-8">
        <div>
            <h3 class="text-xl font-semibold mb-3">Bathroom Remodels in Kent & Auburn</h3>
            <p class="text-[#306f86]">Our bathroom transformations range from simple fixture updates to complete gut renovations. We've helped homeowners in Kent, Auburn, Federal Way, and Tacoma create their dream bathrooms with custom tile work, walk-in showers, and modern vanities.</p>
        </div>
        <div>
            <h3 class="text-xl font-semibold mb-3">Flooring Installation in Seattle & Eastside</h3>
            <p class="text-[#306f86]">From hardwood and laminate to luxury vinyl plank, we've installed flooring in hundreds of homes across Seattle, Bellevue, Redmond, and Kirkland. Each project includes proper subfloor preparation and professional finishing.</p>
        </div>
        <div>
            <h3 class="text-xl font-semibold mb-3">Kitchen Renovations in Olympia & Lacey</h3>
            <p class="text-[#306f86]">Our kitchen projects feature custom cabinetry, quartz and granite countertops, and professional appliance installation. We serve Olympia, Lacey, Tumwater, and Centralia with comprehensive kitchen remodeling.</p>
        </div>
        <div>
            <h3 class="text-xl font-semibold mb-3">Deck & Fence Projects in Puyallup & Bonney Lake</h3>
            <p class="text-[#306f86]">We specialize in deck repair, staining, and new construction. Our team has completed projects throughout Puyallup, Bonney Lake, Sumner, and Orting, focusing on durability and curb appeal.</p>
        </div>
    </div>
</div>

<!-- Call to Action -->
<div class="text-center bg-gradient-to-r from-soft-blue to-soft-green rounded-[4rem] p-12 soft-shadow">
    <h2 class="text-3xl font-bold text-[#115e7a] mb-4">Ready to Transform Your Home?</h2>
    <p class="text-xl text-[#2a647a] mb-8">See your own before & after photos. Get a free estimate today.</p>
    <div class="flex justify-center gap-4">
        <a href="{{ route('contact') }}" class="bg-soft-yellow px-8 py-4 rounded-full font-bold text-lg hover:bg-[#ffefb5] transition">Get Free Estimate</a>
        <a href="tel:2024601753" class="bg-white px-8 py-4 rounded-full font-bold text-lg hover:bg-soft-blue transition">Call Now</a>
    </div>
</div>
@endsection