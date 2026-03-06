@extends('layouts.app')

@section('title', 'About GB Handyman Solutions | Family-Owned Handyman in Kent, WA Since 2012')
@section('meta_title', 'About Us | Family Handyman Service in Kent, Auburn & Seattle')
@section('meta_description', '👨‍🔧 Learn about GB Handyman Solutions - family-owned and operated since 2012. Meet Glen and Mike, see our story, and discover why hundreds of homeowners trust us with their projects.')
@section('meta_keywords', 'about handyman, family handyman, handyman story, local handyman Kent WA, experienced handyman')
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
    "description" => "Founder of GB Handyman Solutions with 18 years of experience in bathroom remodeling and carpentry",
    "image" => "https://www.gbhandyman.com/images/glen.jpg",
    "worksFor" => [
        "@id" => "https://www.gbhandyman.com/#business"
    ],
    "jobTitle" => "Founder & Master Carpenter",
    "knowsAbout" => ["Bathroom Remodeling", "Carpentry", "Tile Installation", "Home Renovation"]
];

$mikeSchema = [
    "@context" => "https://schema.org",
    "@type" => "Person",
    "@id" => "https://www.gbhandyman.com/#mike",
    "name" => "Mike",
    "description" => "Co-owner of GB Handyman Solutions with 15 years of experience in electrical, plumbing, and flooring",
    "image" => "https://www.gbhandyman.com/images/mike.jpg",
    "worksFor" => [
        "@id" => "https://www.gbhandyman.com/#business"
    ],
    "jobTitle" => "Co-owner & Lead Technician",
    "knowsAbout" => ["Electrical", "Plumbing", "Flooring", "Drywall"]
];
@endphp
{!! json_encode($aboutSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
</script>

<script type="application/ld+json">
{!! json_encode($glenSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
</script>

<script type="application/ld+json">
{!! json_encode($mikeSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
</script>
@endpush

@section('content')
<!-- Hero Section with H1 -->
<div class="text-center max-w-4xl mx-auto mb-16">
    <span class="bg-soft-blue/80 text-[#1a627b] px-6 py-2 rounded-full text-sm font-medium border border-soft-blue inline-block mb-6 backdrop-blur-sm">🇺🇸 family owned · since 2012</span>
    <h1 class="text-5xl md:text-6xl font-bold leading-tight tracking-tight bg-gradient-to-r from-[#0b4a61] via-[#1f7a95] to-[#2b6d7a] bg-clip-text text-transparent">more than a handyman.<br><span class="bg-gradient-to-r from-[#166b8a] to-[#3c8daa] bg-clip-text text-transparent">we're your neighbors.</span></h1>
    <p class="text-xl mt-6 text-[#2a647a] max-w-3xl mx-auto">Based in Kent, Washington — we've been fixing, remodeling, and caring for homes across the region for over a decade. Remote ready, quality obsessed, and family owned.</p>
</div>

<!-- Stats Section -->
<div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-20">
    <div class="bg-white p-6 rounded-3xl text-center soft-shadow">
        <span class="text-4xl font-bold text-[#115e7a]">15+</span>
        <p class="text-[#306f86]">Years Experience</p>
    </div>
    <div class="bg-white p-6 rounded-3xl text-center soft-shadow">
        <span class="text-4xl font-bold text-[#115e7a]">500+</span>
        <p class="text-[#306f86]">Projects Completed</p>
    </div>
    <div class="bg-white p-6 rounded-3xl text-center soft-shadow">
        <span class="text-4xl font-bold text-[#115e7a]">4.9⭐</span>
        <p class="text-[#306f86]">350+ Reviews</p>
    </div>
    <div class="bg-white p-6 rounded-3xl text-center soft-shadow">
        <span class="text-4xl font-bold text-[#115e7a]">20+</span>
        <p class="text-[#306f86]">Cities Served</p>
    </div>
</div>

<!-- Our Story Timeline with Schema (same as before, but with added microdata) -->
<div class="mb-28" itemscope itemtype="https://schema.org/ItemList">
    <h2 class="text-3xl font-bold text-center text-[#115e7a] mb-12" itemprop="name">our journey</h2>
    <div class="relative" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <!-- Timeline content same as before -->
        <!-- ... -->
    </div>
</div>

<!-- Team Section with Person Schema (already included in head) -->
<div class="mb-24">
    <h2 class="text-3xl font-bold text-center text-[#115e7a] mb-4">meet the hands behind the work</h2>
    <p class="text-center text-lg text-[#306f86] max-w-2xl mx-auto mb-12">brothers, builders, perfectionists</p>
    
    <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
        <!-- Glen Card with microdata -->
        <div class="bg-white/80 backdrop-blur-sm rounded-[3rem] p-8 border border-soft-blue/70 soft-shadow hover-lift transition-soft" itemscope itemtype="https://schema.org/Person">
            <div class="flex items-center gap-4 mb-4">
                <div class="w-20 h-20 rounded-full bg-gradient-to-br from-soft-blue to-soft-green flex items-center justify-center text-4xl" itemprop="image">👨‍🔧</div>
                <div>
                    <h3 class="text-2xl font-bold text-[#115e7a]" itemprop="name">Glen</h3>
                    <p class="text-[#3d748b]" itemprop="jobTitle">founder · 18 years experience</p>
                </div>
            </div>
            <p class="text-[#2a647a]" itemprop="description">Specializes in bathroom remodeling, tile work, and custom carpentry. The one who answers the phone at 7am.</p>
            <div class="mt-4 flex gap-2" itemprop="knowsAbout">
                <span class="bg-soft-blue px-3 py-1 rounded-full text-sm">bathroom pro</span>
                <span class="bg-soft-green px-3 py-1 rounded-full text-sm">carpentry</span>
            </div>
            <meta itemprop="worksFor" content="GB Handyman Solutions">
        </div>
        
        <!-- Mike Card with microdata -->
        <div class="bg-white/80 backdrop-blur-sm rounded-[3rem] p-8 border border-soft-green/70 soft-shadow hover-lift transition-soft" itemscope itemtype="https://schema.org/Person">
            <div class="flex items-center gap-4 mb-4">
                <div class="w-20 h-20 rounded-full bg-gradient-to-br from-soft-yellow to-soft-blue flex items-center justify-center text-4xl" itemprop="image">👨‍🔧</div>
                <div>
                    <h3 class="text-2xl font-bold text-[#115e7a]" itemprop="name">Mike</h3>
                    <p class="text-[#3d748b]" itemprop="jobTitle">co-owner · 15 years experience</p>
                </div>
            </div>
            <p class="text-[#2a647a]" itemprop="description">Licensed electrician & plumber. Master of drywall and flooring. Keeps the trailer immaculately organized.</p>
            <div class="mt-4 flex gap-2" itemprop="knowsAbout">
                <span class="bg-soft-yellow px-3 py-1 rounded-full text-sm">electrical</span>
                <span class="bg-soft-blue px-3 py-1 rounded-full text-sm">plumbing</span>
                <span class="bg-soft-green px-3 py-1 rounded-full text-sm">flooring</span>
            </div>
            <meta itemprop="worksFor" content="GB Handyman Solutions">
        </div>
    </div>
</div>

<!-- Values Section -->
<div class="mb-24">
    <h2 class="text-3xl font-bold text-center text-[#115e7a] mb-12">what drives us</h2>
    <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-gradient-to-br from-soft-blue/40 to-soft-white p-8 rounded-[3rem] border border-soft-blue/70 soft-shadow text-center">
            <div class="w-16 h-16 mx-auto bg-soft-yellow rounded-3xl flex items-center justify-center text-3xl mb-4">🔨</div>
            <h3 class="text-xl font-bold text-[#115e7a]">craftsmanship first</h3>
            <p class="mt-2 text-[#306f86]">We don't cut corners. Every job, big or small, gets the same attention to detail.</p>
        </div>
        <div class="bg-gradient-to-br from-soft-green/40 to-soft-white p-8 rounded-[3rem] border border-soft-green/70 soft-shadow text-center">
            <div class="w-16 h-16 mx-auto bg-soft-blue rounded-3xl flex items-center justify-center text-3xl mb-4">🤝</div>
            <h3 class="text-xl font-bold text-[#115e7a]">neighborly trust</h3>
            <p class="mt-2 text-[#306f86]">We're from here. We treat your home like we'd treat our own — with respect.</p>
        </div>
        <div class="bg-gradient-to-br from-soft-yellow/40 to-soft-white p-8 rounded-[3rem] border border-soft-yellow/70 soft-shadow text-center">
            <div class="w-16 h-16 mx-auto bg-soft-green rounded-3xl flex items-center justify-center text-3xl mb-4">🚐</div>
            <h3 class="text-xl font-bold text-[#115e7a]">remote ready</h3>
            <p class="mt-2 text-[#306f86]">Fully mobile. We come to you with everything needed — from Kent to Olympia, Bellevue to Bremerton.</p>
        </div>
    </div>
</div>

<!-- Testimonial with Review Schema -->
<div class="mb-24" itemscope itemtype="https://schema.org/Review">
    <div class="bg-white/70 backdrop-blur-sm rounded-[4rem] p-10 border border-soft-blue/60 soft-shadow max-w-4xl mx-auto">
        <div class="flex flex-col md:flex-row gap-8 items-center">
            <div class="text-8xl bg-soft-yellow w-24 h-24 rounded-full flex items-center justify-center">“</div>
            <div>
                <p class="text-xl italic text-[#1d5e78]" itemprop="reviewBody">Glen and Mike remodeled our master bath — they were punctual, clean, and the tile work is stunning. They even fixed a plumbing issue the same day. True pros.</p>
                <div class="mt-4 flex items-center gap-3">
                    <span class="font-semibold" itemprop="author">— Sarah, Kent</span>
                    <span class="flex text-yellow-500" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                        <meta itemprop="ratingValue" content="5">
                        <meta itemprop="bestRating" content="5">
                        ★★★★★
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action -->
<div class="bg-gradient-to-r from-soft-blue to-soft-green rounded-[4rem] p-12 soft-shadow text-center">
    <h2 class="text-3xl font-bold text-[#115e7a] mb-4">Ready to work with a team you can trust?</h2>
    <p class="text-xl text-[#2a647a] mb-8">Get your free estimate today — no obligation, just honest advice.</p>
    <div class="flex justify-center gap-4">
        <a href="{{ route('contact') }}" class="bg-soft-yellow px-8 py-4 rounded-full font-bold text-lg hover:bg-[#ffefb5] transition">Get Free Estimate</a>
        <a href="{{ route('gallery') }}" class="bg-white px-8 py-4 rounded-full font-bold text-lg hover:bg-soft-blue transition">View Our Work</a>
    </div>
</div>
@endsection