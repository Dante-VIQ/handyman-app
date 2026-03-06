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
<div class="gradient-bg min-h-screen">

  <!-- container -->
  <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10 py-6">

    <!-- ===== HEADER consistent with landing page ===== -->

    <!-- ===== HERO SECTION WITH GRADIENTS ===== -->
    <div class="relative mb-20">
      <!-- decorative gradient blob -->
      <div class="absolute top-0 right-0 w-96 h-96 bg-soft-yellow/30 rounded-full blur-3xl -z-10"></div>
      <div class="absolute bottom-0 left-0 w-80 h-80 bg-soft-green/30 rounded-full blur-3xl -z-10"></div>
      
      <div class="text-center max-w-3xl mx-auto">
        <span class="bg-soft-blue/80 text-[#1a627b] px-6 py-2 rounded-full text-sm font-medium border border-soft-blue inline-block mb-6 backdrop-blur-sm">🇺🇸 family owned · since 2012</span>
        <h1 class="text-5xl md:text-6xl font-bold leading-tight tracking-tight bg-gradient-to-r from-[#0b4a61] via-[#1f7a95] to-[#2b6d7a] bg-clip-text text-transparent">more than a handyman.<br><span class="bg-gradient-to-r from-[#166b8a] to-[#3c8daa] bg-clip-text text-transparent">we're your neighbors.</span></h1>
        <p class="text-xl mt-6 text-[#2a647a] max-w-2xl mx-auto">Based in Kent, Washington — we've been fixing, remodeling, and caring for homes across the region for over a decade. Remote ready, quality obsessed.</p>
      </div>
    </div>

    <!-- ===== OUR STORY TIMELINE ===== -->
    <div class="mb-28">
      <h2 class="text-3xl font-bold text-center text-[#115e7a] mb-12">our journey</h2>
      
      <div class="relative">
        <!-- timeline line (hidden on mobile) -->
        <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-gradient-to-b from-soft-blue via-soft-green to-soft-yellow rounded-full hidden md:block"></div>
        
        <div class="space-y-12 relative">
          <!-- item 1 -->
          <div class="flex flex-col md:flex-row items-center gap-8 relative">
            <div class="md:w-1/2 md:text-right">
              <div class="bg-white/90 p-6 rounded-3xl border border-soft-blue/70 soft-shadow ml-auto max-w-md hover-lift transition-soft">
                <span class="text-2xl font-bold text-[#0b5e7c]">2012</span>
                <h3 class="text-xl font-semibold mt-1">the beginning</h3>
                <p class="mt-2 text-[#306f86]">Glen started GB Handyman from a single truck in Kent. First job: a bathroom remodel in Auburn. Word spread fast.</p>
              </div>
            </div>
            <div class="relative flex items-center justify-center">
              <div class="w-10 h-10 rounded-full bg-soft-yellow border-4 border-soft-blue timeline-dot z-10"></div>
            </div>
            <div class="md:w-1/2">
              <div class="bg-gradient-card p-6 rounded-3xl border border-soft-yellow/70 soft-shadow max-w-md invisible md:visible"> </div>
            </div>
          </div>
          
          <!-- item 2 -->
          <div class="flex flex-col md:flex-row items-center gap-8 relative">
            <div class="md:w-1/2 md:text-right">
              <div class="bg-gradient-card p-6 rounded-3xl border border-soft-yellow/70 soft-shadow max-w-md invisible md:visible"> </div>
            </div>
            <div class="relative flex items-center justify-center">
              <div class="w-10 h-10 rounded-full bg-soft-green border-4 border-soft-blue timeline-dot z-10"></div>
            </div>
            <div class="md:w-1/2">
              <div class="bg-white/90 p-6 rounded-3xl border border-soft-green/70 soft-shadow max-w-md hover-lift transition-soft">
                <span class="text-2xl font-bold text-[#0b5e7c]">2016</span>
                <h3 class="text-xl font-semibold mt-1">family grows</h3>
                <p class="mt-2 text-[#306f86]">Brother Mike joined, expanding to full remodeling. Added electrical and plumbing licenses. Became LLC.</p>
              </div>
            </div>
          </div>
          
          <!-- item 3 -->
          <div class="flex flex-col md:flex-row items-center gap-8 relative">
            <div class="md:w-1/2 md:text-right">
              <div class="bg-white/90 p-6 rounded-3xl border border-soft-yellow/70 soft-shadow max-w-md hover-lift transition-soft">
                <span class="text-2xl font-bold text-[#0b5e7c]">2020</span>
                <h3 class="text-xl font-semibold mt-1">remote & mobile</h3>
                <p class="mt-2 text-[#306f86]">Invested in a fully stocked trailer. Started serving 20+ cities remotely — from Olympia to Bellevue.</p>
              </div>
            </div>
            <div class="relative flex items-center justify-center">
              <div class="w-10 h-10 rounded-full bg-soft-blue border-4 border-soft-yellow timeline-dot z-10"></div>
            </div>
            <div class="md:w-1/2">
              <div class="bg-gradient-card p-6 rounded-3xl border border-soft-yellow/70 soft-shadow max-w-md invisible md:visible"> </div>
            </div>
          </div>
          
          <!-- item 4 -->
          <div class="flex flex-col md:flex-row items-center gap-8 relative">
            <div class="md:w-1/2 md:text-right">
              <div class="bg-gradient-card p-6 rounded-3xl border border-soft-yellow/70 soft-shadow max-w-md invisible md:visible"> </div>
            </div>
            <div class="relative flex items-center justify-center">
              <div class="w-10 h-10 rounded-full bg-soft-yellow border-4 border-soft-green timeline-dot z-10"></div>
            </div>
            <div class="md:w-1/2">
              <div class="bg-white/90 p-6 rounded-3xl border border-soft-blue/70 soft-shadow max-w-md hover-lift transition-soft">
                <span class="text-2xl font-bold text-[#0b5e7c]">2025</span>
                <h3 class="text-xl font-semibold mt-1">today & beyond</h3>
                <p class="mt-2 text-[#306f86]">350+ 5-star reviews, 3 trucks, and the same commitment to craftsmanship. Still family owned, still hands-on.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ===== MEET THE TEAM ===== -->
    <div class="mb-24">
      <h2 class="text-3xl font-bold text-center text-[#115e7a] mb-4">meet the hands behind the work</h2>
      <p class="text-center text-lg text-[#306f86] max-w-2xl mx-auto mb-12">brothers, builders, perfectionists</p>
      
      <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
        <!-- glen card -->
        <div class="bg-white/80 backdrop-blur-sm rounded-[3rem] p-8 border border-soft-blue/70 soft-shadow hover-lift transition-soft">
          <div class="flex items-center gap-4 mb-4">
            <div class="w-20 h-20 rounded-full bg-gradient-to-br from-soft-blue to-soft-green flex items-center justify-center text-4xl">👨‍🔧</div>
            <div>
              <h3 class="text-2xl font-bold text-[#115e7a]">Glen</h3>
              <p class="text-[#3d748b]">founder · 18 years experience</p>
            </div>
          </div>
          <p class="text-[#2a647a]">Specializes in bathroom remodeling, tile work, and custom carpentry. The one who answers the phone at 7am.</p>
          <div class="mt-4 flex gap-2">
            <span class="bg-soft-blue px-3 py-1 rounded-full text-sm">bathroom pro</span>
            <span class="bg-soft-green px-3 py-1 rounded-full text-sm">carpentry</span>
          </div>
        </div>
        
        <!-- mike card -->
        <div class="bg-white/80 backdrop-blur-sm rounded-[3rem] p-8 border border-soft-green/70 soft-shadow hover-lift transition-soft">
          <div class="flex items-center gap-4 mb-4">
            <div class="w-20 h-20 rounded-full bg-gradient-to-br from-soft-yellow to-soft-blue flex items-center justify-center text-4xl">👨‍🔧</div>
            <div>
              <h3 class="text-2xl font-bold text-[#115e7a]">Mike</h3>
              <p class="text-[#3d748b]">co-owner · 15 years experience</p>
            </div>
          </div>
          <p class="text-[#2a647a]">Licensed electrician & plumber. Master of drywall and flooring. Keeps the trailer immaculately organized.</p>
          <div class="mt-4 flex gap-2">
            <span class="bg-soft-yellow px-3 py-1 rounded-full text-sm">electrical</span>
            <span class="bg-soft-blue px-3 py-1 rounded-full text-sm">plumbing</span>
            <span class="bg-soft-green px-3 py-1 rounded-full text-sm">flooring</span>
          </div>
        </div>
      </div>
    </div>

    <!-- ===== VALUES WITH GRADIENTS ===== -->
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

    <!-- ===== TESTIMONIAL SPOTLIGHT ===== -->
    <div class="mb-24">
      <div class="bg-white/70 backdrop-blur-sm rounded-[4rem] p-10 border border-soft-blue/60 soft-shadow max-w-4xl mx-auto">
        <div class="flex flex-col md:flex-row gap-8 items-center">
          <div class="text-8xl bg-soft-yellow w-24 h-24 rounded-full flex items-center justify-center">“</div>
          <div>
            <p class="text-xl italic text-[#1d5e78]">Glen and Mike remodeled our master bath — they were punctual, clean, and the tile work is stunning. They even fixed a plumbing issue the same day. True pros.</p>
            <div class="mt-4 flex items-center gap-3">
              <span class="font-semibold">— Sarah, Kent</span>
              <span class="flex text-yellow-500">★★★★★</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ===== LOCATION & CONTACT CARD ===== -->
    <div class="mb-20">
      <div class="bg-gradient-to-r from-soft-blue to-soft-green/70 rounded-[4rem] p-10 border border-white/60 soft-shadow">
        <div class="grid md:grid-cols-2 gap-8 items-center">
          <div>
            <h2 class="text-3xl font-bold text-[#0b4a61]">visit or call — we're based in Kent</h2>
            <p class="mt-3 text-lg text-[#1a5f79]">Stop by our workshop or give us a call. We're always happy to talk through your project.</p>
            <div class="mt-6 space-y-3">
              <div class="flex items-center gap-3 bg-white/80 p-4 rounded-full"><span class="text-xl">📍</span> 6249 S 242nd Place, Bldg 8 Apt 203, Kent, WA 98032</div>
              <div class="flex items-center gap-3 bg-white/80 p-4 rounded-full"><span class="text-xl">📞</span> 202 4601753</div>
              <div class="flex items-center gap-3 bg-white/80 p-4 rounded-full"><span class="text-xl">✉️</span> gbhandymanllc@yahoo.com</div>
            </div>
          </div>
          <div class="bg-soft-yellow p-8 rounded-3xl border border-soft-yellow/80">
            <p class="font-semibold text-lg">📋 quick facts</p>
            <ul class="mt-4 space-y-2">
              <li>✓ licensed & insured</li>
              <li>✓ 15+ years combined experience</li>
              <li>✓ fully stocked mobile trailer</li>
              <li>✓ serving 20+ cities remotely</li>
              <li>✓ free estimates</li>
            </ul>
            <div class="mt-6 bg-white/60 rounded-full py-3 px-4 text-center font-medium">call for same‑week availability</div>
          </div>
        </div>
      </div>
    </div>

  </div> <!-- end container -->
</div> <!-- end gradient-bg -->

@endsection




<!-- ========== ABOUT US PAGE – GB HANDYMAN SOLUTIONS ========== -->
