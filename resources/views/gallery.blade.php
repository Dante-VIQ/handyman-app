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
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16" itemscope itemtype="https://schema.org/ImageGallery">
    
    <!-- Bathroom Remodel 1 -->
    <div class="bg-white rounded-[2.5rem] overflow-hidden border border-soft-blue soft-shadow hover-lift transition-soft" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
        <div class="relative h-64 overflow-hidden">
            <img src="https://placehold.co/600x400/d9ecff/1e4f63?text=Bathroom+Before" 
                 alt="Bathroom before remodel in Kent, WA - outdated fixtures and tile"
                 class="w-full h-full object-cover gallery-image"
                 loading="lazy"
                 itemprop="thumbnail"
                 data-before="true">
            <span class="absolute top-4 left-4 bg-soft-yellow px-4 py-1 rounded-full text-sm font-semibold">Before</span>
        </div>
        <div class="relative h-64 overflow-hidden border-t">
            <img src="https://placehold.co/600x400/e6f3e6/1e4f63?text=Bathroom+After" 
                 alt="Bathroom after remodel in Kent, WA - new modern tile, vanity, and fixtures"
                 class="w-full h-full object-cover gallery-image"
                 loading="lazy"
                 itemprop="contentUrl"
                 data-after="true">
            <span class="absolute top-4 left-4 bg-soft-green px-4 py-1 rounded-full text-sm font-semibold">After</span>
        </div>
        <div class="p-6">
            <h3 class="text-xl font-bold text-[#115e7a]" itemprop="name">Bathroom Remodel - Kent, WA</h3>
            <p class="text-[#306f86] mt-2" itemprop="description">Complete bathroom renovation including new tile flooring, walk-in shower with glass doors, modern vanity, and updated lighting fixtures.</p>
            <div class="flex justify-between items-center mt-4">
                <span class="text-sm bg-soft-blue px-3 py-1 rounded-full">📍 Kent</span>
                <span class="text-sm text-[#4a7e93]">📅 March 2025</span>
            </div>
            <meta itemprop="uploadDate" content="2025-03-15">
            <meta itemprop="keywords" content="bathroom remodel, bathroom renovation, Kent WA, tile installation, shower remodel">
        </div>
    </div>

    <!-- Flooring Installation -->
    <div class="bg-white rounded-[2.5rem] overflow-hidden border border-soft-green soft-shadow hover-lift transition-soft" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
        <div class="relative h-64 overflow-hidden">
            <img src="https://placehold.co/600x400/fff9db/1e4f63?text=Flooring+Before" 
                 alt="Old carpet before hardwood floor installation in Auburn, WA"
                 class="w-full h-full object-cover gallery-image"
                 loading="lazy"
                 itemprop="thumbnail">
            <span class="absolute top-4 left-4 bg-soft-yellow px-4 py-1 rounded-full text-sm font-semibold">Before</span>
        </div>
        <div class="relative h-64 overflow-hidden border-t">
            <img src="https://placehold.co/600x400/d9ecff/1e4f63?text=Hardwood+After" 
                 alt="New hardwood flooring after installation in Auburn, WA"
                 class="w-full h-full object-cover gallery-image"
                 loading="lazy"
                 itemprop="contentUrl">
            <span class="absolute top-4 left-4 bg-soft-green px-4 py-1 rounded-full text-sm font-semibold">After</span>
        </div>
        <div class="p-6">
            <h3 class="text-xl font-bold text-[#115e7a]" itemprop="name">Hardwood Flooring - Auburn, WA</h3>
            <p class="text-[#306f86] mt-2" itemprop="description">Removal of old carpet and installation of premium engineered hardwood throughout living room and hallway.</p>
            <div class="flex justify-between items-center mt-4">
                <span class="text-sm bg-soft-green px-3 py-1 rounded-full">📍 Auburn</span>
                <span class="text-sm text-[#4a7e93]">📅 February 2025</span>
            </div>
            <meta itemprop="uploadDate" content="2025-02-20">
            <meta itemprop="keywords" content="flooring installation, hardwood floors, Auburn WA, carpet removal">
        </div>
    </div>

    <!-- Kitchen Renovation -->
    <div class="bg-white rounded-[2.5rem] overflow-hidden border border-soft-yellow soft-shadow hover-lift transition-soft" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
        <div class="relative h-64 overflow-hidden">
            <img src="https://placehold.co/600x400/d9ecff/1e4f63?text=Kitchen+Before" 
                 alt="Outdated kitchen before renovation in Seattle, WA"
                 class="w-full h-full object-cover gallery-image"
                 loading="lazy"
                 itemprop="thumbnail">
            <span class="absolute top-4 left-4 bg-soft-yellow px-4 py-1 rounded-full text-sm font-semibold">Before</span>
        </div>
        <div class="relative h-64 overflow-hidden border-t">
            <img src="https://placehold.co/600x400/e6f3e6/1e4f63?text=Kitchen+After" 
                 alt="Modern kitchen after renovation with new cabinets and quartz countertops in Seattle, WA"
                 class="w-full h-full object-cover gallery-image"
                 loading="lazy"
                 itemprop="contentUrl">
            <span class="absolute top-4 left-4 bg-soft-green px-4 py-1 rounded-full text-sm font-semibold">After</span>
        </div>
        <div class="p-6">
            <h3 class="text-xl font-bold text-[#115e7a]" itemprop="name">Kitchen Renovation - Seattle, WA</h3>
            <p class="text-[#306f86] mt-2" itemprop="description">Full kitchen remodel with custom soft-close cabinetry, quartz countertops, subway tile backsplash, and new stainless steel appliances.</p>
            <div class="flex justify-between items-center mt-4">
                <span class="text-sm bg-soft-yellow px-3 py-1 rounded-full">📍 Seattle</span>
                <span class="text-sm text-[#4a7e93]">📅 January 2025</span>
            </div>
            <meta itemprop="uploadDate" content="2025-01-10">
            <meta itemprop="keywords" content="kitchen renovation, kitchen remodel, Seattle WA, custom cabinets, quartz countertops">
        </div>
    </div>

    <!-- Deck Repair -->
    <div class="bg-white rounded-[2.5rem] overflow-hidden border border-soft-blue soft-shadow hover-lift transition-soft" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
        <div class="relative h-64 overflow-hidden">
            <img src="https://placehold.co/600x400/fff9db/1e4f63?text=Deck+Before" 
                 alt="Weathered deck before repair and staining in Tacoma, WA"
                 class="w-full h-full object-cover gallery-image"
                 loading="lazy">
            <span class="absolute top-4 left-4 bg-soft-yellow px-4 py-1 rounded-full text-sm font-semibold">Before</span>
        </div>
        <div class="relative h-64 overflow-hidden border-t">
            <img src="https://placehold.co/600x400/d9ecff/1e4f63?text=Deck+After" 
                 alt="Restored deck after repair, power washing, and staining in Tacoma, WA"
                 class="w-full h-full object-cover gallery-image"
                 loading="lazy">
            <span class="absolute top-4 left-4 bg-soft-green px-4 py-1 rounded-full text-sm font-semibold">After</span>
        </div>
        <div class="p-6">
            <h3 class="text-xl font-bold text-[#115e7a]">Deck Restoration - Tacoma, WA</h3>
            <p class="text-[#306f86] mt-2">Complete deck repair including board replacement, power washing, sanding, and premium semi-transparent stain application.</p>
            <div class="flex justify-between items-center mt-4">
                <span class="text-sm bg-soft-blue px-3 py-1 rounded-full">📍 Tacoma</span>
                <span class="text-sm text-[#4a7e93]">📅 April 2025</span>
            </div>
        </div>
    </div>

    <!-- Exterior Painting -->
    <div class="bg-white rounded-[2.5rem] overflow-hidden border border-soft-green soft-shadow hover-lift transition-soft" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
        <div class="relative h-64 overflow-hidden">
            <img src="https://placehold.co/600x400/d9ecff/1e4f63?text=House+Before" 
                 alt="House exterior before painting in Olympia, WA - faded paint"
                 class="w-full h-full object-cover gallery-image"
                 loading="lazy">
            <span class="absolute top-4 left-4 bg-soft-yellow px-4 py-1 rounded-full text-sm font-semibold">Before</span>
        </div>
        <div class="relative h-64 overflow-hidden border-t">
            <img src="https://placehold.co/600x400/e6f3e6/1e4f63?text=House+After" 
                 alt="House exterior after professional painting in Olympia, WA - fresh modern colors"
                 class="w-full h-full object-cover gallery-image"
                 loading="lazy">
            <span class="absolute top-4 left-4 bg-soft-green px-4 py-1 rounded-full text-sm font-semibold">After</span>
        </div>
        <div class="p-6">
            <h3 class="text-xl font-bold text-[#115e7a]">Exterior Painting - Olympia, WA</h3>
            <p class="text-[#306f86] mt-2">Full exterior painting including pressure washing, caulking, and two coats of premium Sherwin-Williams paint.</p>
            <div class="flex justify-between items-center mt-4">
                <span class="text-sm bg-soft-green px-3 py-1 rounded-full">📍 Olympia</span>
                <span class="text-sm text-[#4a7e93]">📅 March 2025</span>
            </div>
        </div>
    </div>

    <!-- Drywall Repair -->
    <div class="bg-white rounded-[2.5rem] overflow-hidden border border-soft-yellow soft-shadow hover-lift transition-soft" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
        <div class="relative h-64 overflow-hidden">
            <img src="https://placehold.co/600x400/fff9db/1e4f63?text=Drywall+Before" 
                 alt="Damaged drywall with hole before repair in Bellevue, WA"
                 class="w-full h-full object-cover gallery-image"
                 loading="lazy">
            <span class="absolute top-4 left-4 bg-soft-yellow px-4 py-1 rounded-full text-sm font-semibold">Before</span>
        </div>
        <div class="relative h-64 overflow-hidden border-t">
            <img src="https://placehold.co/600x400/d9ecff/1e4f63?text=Drywall+After" 
                 alt="Repaired drywall with smooth texture after professional repair in Bellevue, WA"
                 class="w-full h-full object-cover gallery-image"
                 loading="lazy">
            <span class="absolute top-4 left-4 bg-soft-green px-4 py-1 rounded-full text-sm font-semibold">After</span>
        </div>
        <div class="p-6">
            <h3 class="text-xl font-bold text-[#115e7a]">Drywall Repair - Bellevue, WA</h3>
            <p class="text-[#306f86] mt-2">Professional drywall patch and texture matching for water damage repair. Orange peel texture matched perfectly.</p>
            <div class="flex justify-between items-center mt-4">
                <span class="text-sm bg-soft-yellow px-3 py-1 rounded-full">📍 Bellevue</span>
                <span class="text-sm text-[#4a7e93]">📅 February 2025</span>
            </div>
        </div>
    </div>
</div>

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