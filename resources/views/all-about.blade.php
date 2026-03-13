@extends('layouts.app')

@section('title', 'About GB Handyman Solutions | Family-Owned Handyman in Kent, WA Since 2012')
@section('meta_title', 'About Us | Family Handyman Service in Kent, Auburn & Seattle')
@section('meta_description', '👨‍🔧 Learn about GB Handyman Solutions - family-owned and operated since 2012. Meet Glen,
    see our story, and discover why hundreds of homeowners trust us with their projects.')
@section('meta_keywords', 'about handyman, family handyman, handyman story, local handyman Kent WA, experienced
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

  <!-- ABOUT hero / page title (blue / green / yellow) -->
  <section class="bg-gradient-to-r from-[#1e4a6f] to-[#2e6b4e] py-20 text-white">
    <div class="container mx-auto px-4 md:px-8 text-center">
      <h1 class="text-5xl md:text-6xl font-bold mb-4"><span class="text-yellow-400">//</span> About Us</h1>
      <p class="text-xl max-w-2xl mx-auto opacity-90">Your trusted local handyman – committed to quality, transparency, and same‑day smiles.</p>
    </div>
  </section>

  <!-- our story / mission (mix of colors) -->
  <section class="py-20 bg-white">
    <div class="container mx-auto px-4 md:px-8 flex flex-col lg:flex-row gap-12 items-center">
      <div class="flex-1 space-y-6">
        <span class="text-yellow-500 font-semibold tracking-wider">— SINCE 2012</span>
        <h2 class="text-4xl font-bold text-[#1e4a6f] brand-underline">Craftsmanship with a conscience</h2>
        <p class="text-lg text-slate-600 leading-relaxed">GB Handyman Solutions started in a small garage with a big dream: to offer reliable, friendly handyman services without the corporate runaround. Over a decade later, we’ve grown into a team of 12 certified pros, but our core stays the same – show up on time, respect the home, and fix it right the first time.</p>
        <div class="grid grid-cols-2 gap-4 pt-4">
          <div class="bg-[#eef7f0] p-4 rounded-2xl border-l-4 border-[#2e6b4e]">
            <p class="text-3xl font-bold text-[#1e4a6f]">2,400+</p>
            <p class="text-sm">Happy clients</p>
          </div>
          <div class="bg-[#fef9e6] p-4 rounded-2xl border-l-4 border-yellow-400">
            <p class="text-3xl font-bold text-[#1e4a6f]">12</p>
            <p class="text-sm">Certified experts</p>
          </div>
        </div>
      </div>
      <div class="flex-1">
        <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?q=80&w=2069&auto=format&fit=crop" alt="team member working" class="rounded-[50px] rounded-br-none border-8 border-white shadow-2xl w-full">
      </div>
    </div>
  </section>

  <!-- values / badges (green / blue / yellow) -->
  <section class="py-16 bg-[#eef7f0]">
    <div class="container mx-auto px-4 md:px-8">
      <h2 class="text-4xl font-bold text-center text-[#1e4a6f] mb-4">What drives us</h2>
      <p class="text-center max-w-xl mx-auto text-slate-600 mb-12">Four pillars that haven’t changed since day one.</p>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-3xl shadow-md text-center border-b-4 border-yellow-400">
          <div class="w-16 h-16 bg-[#1e4a6f]/10 rounded-full flex items-center justify-center mx-auto mb-4"><i class="fas fa-hand-holding-heart text-3xl text-[#1e4a6f]"></i></div>
          <h3 class="font-bold text-xl text-[#2e6b4e]">Integrity</h3>
          <p class="text-sm mt-2">Upfront pricing, no hidden fees. We promise.</p>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-md text-center border-b-4 border-yellow-400">
          <div class="w-16 h-16 bg-[#2e6b4e]/10 rounded-full flex items-center justify-center mx-auto mb-4"><i class="fas fa-leaf text-3xl text-[#2e6b4e]"></i></div>
          <h3 class="font-bold text-xl text-[#2e6b4e]">Eco‑smart</h3>
          <p class="text-sm mt-2">Low‑VOC paints, energy‑saving fixtures.</p>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-md text-center border-b-4 border-yellow-400">
          <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4"><i class="fas fa-clock text-3xl text-yellow-500"></i></div>
          <h3 class="font-bold text-xl text-[#2e6b4e]">Punctuality</h3>
          <p class="text-sm mt-2">We respect your time – arrive within window.</p>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-md text-center border-b-4 border-yellow-400">
          <div class="w-16 h-16 bg-[#1e4a6f]/10 rounded-full flex items-center justify-center mx-auto mb-4"><i class="fas fa-shield-alt text-3xl text-[#1e4a6f]"></i></div>
          <h3 class="font-bold text-xl text-[#2e6b4e]">Fully insured</h3>
          <p class="text-sm mt-2">Liability & workers' comp for your peace.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- TEAM section (face + names) – classy, with yellow/blue/green -->
  <section class="py-20 bg-white">
    <div class="container mx-auto px-4 md:px-8">
      <div class="text-center mb-12">
        <span class="text-yellow-500 font-semibold">— THE FACES BEHIND THE TOOLS —</span>
        <h2 class="text-4xl font-bold text-[#1e4a6f] mt-2">Meet the GB team</h2>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- team 1 -->
        <div class="fade-in text-center group" style="animation-delay: 0.1s;">
          <div class="relative mb-4 overflow-hidden rounded-full border-4 border-yellow-400 w-40 h-40 mx-auto">
            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=1974&auto=format&fit=crop" alt="Founder" class="w-full h-full object-cover group-hover:scale-105 transition">
          </div>
          <h3 class="font-bold text-xl text-[#1e4a6f]">Greg Brewer</h3>
          <p class="text-[#2e6b4e] font-medium">Founder & Master Carpenter</p>
          <p class="text-sm mt-2 text-slate-500">20+ years experience, still loves the smell of sawdust.</p>
        </div>
        <!-- team 2 -->
        <div class="fade-in text-center" style="animation-delay: 0.2s;">
          <div class="relative mb-4 overflow-hidden rounded-full border-4 border-yellow-400 w-40 h-40 mx-auto">
            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=1976&auto=format&fit=crop" alt="plumber" class="w-full h-full object-cover">
          </div>
          <h3 class="font-bold text-xl text-[#1e4a6f]">Maya Rivera</h3>
          <p class="text-[#2e6b4e] font-medium">Plumbing & Gas Specialist</p>
          <p class="text-sm mt-2 text-slate-500">Licensed, woman-owned, can fix any leak with a smile.</p>
        </div>
        <!-- team 3 -->
        <div class="fade-in text-center" style="animation-delay: 0.3s;">
          <div class="relative mb-4 overflow-hidden rounded-full border-4 border-yellow-400 w-40 h-40 mx-auto">
            <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=1974&auto=format&fit=crop" alt="electrician" class="w-full h-full object-cover">
          </div>
          <h3 class="font-bold text-xl text-[#1e4a6f]">David Chen</h3>
          <p class="text-[#2e6b4e] font-medium">Lead Electrician</p>
          <p class="text-sm mt-2 text-slate-500">Master electrician, fan of smart home & safety first.</p>
        </div>
        <!-- team 4 -->
        <div class="fade-in text-center" style="animation-delay: 0.4s;">
          <div class="relative mb-4 overflow-hidden rounded-full border-4 border-yellow-400 w-40 h-40 mx-auto">
            <img src="https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?q=80&w=2070&auto=format&fit=crop" alt="painter" class="w-full h-full object-cover">
          </div>
          <h3 class="font-bold text-xl text-[#1e4a6f]">Sofia Malik</h3>
          <p class="text-[#2e6b4e] font-medium">Painting & Finishing</p>
          <p class="text-sm mt-2 text-slate-500">Perfect edges, color consultant, eco-friendly paints.</p>
        </div>
      </div>
      <p class="text-center mt-12 text-slate-500 italic">…and 8 more skilled pros behind the scenes, all background-checked.</p>
    </div>
  </section>

  <!-- CTA mini section (blue/green gradient + yellow) -->
  <section class="container mx-auto px-4 md:px-8 my-12">
    <div class="bg-gradient-to-r from-[#1e4a6f] to-[#2e6b4e] text-white p-12 rounded-[70px] rounded-bl-none flex flex-col md:flex-row items-center justify-between gap-6">
      <div>
        <h3 class="text-3xl font-bold">Feel the GB difference</h3>
        <p class="text-lg opacity-90 mt-2">We treat your home like our own. Free estimate, no obligation.</p>
      </div>
      <a href="#" class="bg-yellow-400 text-[#1e3b2c] px-8 py-4 rounded-full font-bold text-lg whitespace-nowrap hover:bg-white transition shadow-lg flex items-center gap-2"><i class="fas fa-phone-alt"></i> Call (555) 123-4567</a>
    </div>
  </section>

  <!-- fun fact / map / eco friendly (green highlight) -->
  <section class="py-16 bg-[#fef9e6]">
    <div class="container mx-auto px-4 md:px-8 flex flex-col lg:flex-row gap-12 items-center">
      <div class="flex-1 order-2 lg:order-1">
        <h2 class="text-3xl font-bold text-[#1e4a6f] mb-4"><i class="fas fa-map-signs text-yellow-500 mr-2"></i> Proudly local, 100%</h2>
        <p class="text-lg">We’re based in Springfield and serve all surrounding counties. Every job stays local – we support our neighbors and hire from the community. And we’ve planted over 800 trees through our “green for service” program.</p>
        <div class="mt-6 flex gap-3">
          <span class="bg-white px-4 py-2 rounded-full text-sm font-semibold border border-[#2e6b4e]"><i class="fas fa-recycle text-[#2e6b4e] mr-1"></i> Zero plastic waste</span>
          <span class="bg-white px-4 py-2 rounded-full text-sm font-semibold border border-yellow-400"><i class="fas fa-tree text-yellow-500 mr-1"></i> 800+ trees</span>
        </div>
      </div>
      <div class="flex-1 order-1 lg:order-2">
        <img src="https://images.unsplash.com/photo-1590959651373-a9db58fefc9f?q=80&w=1974&auto=format&fit=crop" alt="local community" class="rounded-3xl border-8 border-white shadow-xl w-full">
      </div>
    </div>
  </section>

@endsection
