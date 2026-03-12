@extends('layouts.app')

@section('title', 'About GB Handyman Solutions | Family-Owned Handyman in Kent, WA Since 2012')
@section('meta_title', 'About Us | Family Handyman Service in Kent, Auburn & Seattle')
@section('meta_description', '👨‍🔧 Learn about GB Handyman Solutions - family-owned and operated since 2012. Meet Glen, see our story, and discover why hundreds of homeowners trust us with their projects.')
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
<!-- Hero Section with H1 -->
<div class="gradient-bg min-h-screen">
    <!-- container -->
    <div class="max-w-7xl mx-auto">
        <!-- ===== HERO SECTION WITH GRADIENTS ===== -->
        <div class="relative mb-16 sm:mb-20 lg:mb-24">
            <!-- decorative gradient blobs - adjusted for mobile -->
            <div class="absolute top-0 right-0 w-48 h-48 sm:w-72 sm:h-72 lg:w-96 lg:h-96 bg-soft-yellow/30 rounded-full blur-3xl -z-10"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 sm:w-72 sm:h-72 lg:w-80 lg:h-80 bg-soft-green/30 rounded-full blur-3xl -z-10"></div>
            
            <div class="text-center max-w-2xl sm:max-w-3xl mx-auto px-2 sm:px-0">
                <span class="inline-block bg-soft-blue/80 text-[#1a627b] px-4 sm:px-6 py-2 rounded-full text-xs sm:text-sm font-medium border border-soft-blue mb-4 sm:mb-6 backdrop-blur-sm">🇺🇸 family owned · since 2012</span>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold leading-tight tracking-tight bg-gradient-to-r from-[#0b4a61] via-[#1f7a95] to-[#2b6d7a] bg-clip-text text-transparent px-2">More Than a Handyman.<br><span class="bg-gradient-to-r from-[#166b8a] to-[#3c8daa] bg-clip-text text-transparent">I'm your neighbor.</span></h1>
                <p class="text-base sm:text-lg md:text-xl mt-4 sm:mt-6 text-[#2a647a] max-w-xl sm:max-w-2xl mx-auto px-4">Based in Kent, Washington — I've been fixing, remodeling, and caring for homes across the region for over a decade. Remote ready, quality obsessed.</p>
            </div>
        </div>

        <!-- ===== OUR STORY TIMELINE ===== -->
        <div class="mb-20 sm:mb-24 lg:mb-28">
            <h2 class="text-2xl sm:text-3xl font-bold text-center text-[#115e7a] mb-8 sm:mb-12">Our Journey</h2>
            
            <div class="relative max-w-4xl mx-auto">
                <!-- Mobile timeline line (vertical) -->
                <div class="absolute left-4 top-0 bottom-0 w-0.5 bg-gradient-to-b from-soft-blue via-soft-green to-soft-yellow rounded-full md:hidden"></div>
                
                <!-- Desktop timeline line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-gradient-to-b from-soft-blue via-soft-green to-soft-yellow rounded-full hidden md:block"></div>
                
                <div class="space-y-8 sm:space-y-10 md:space-y-12 relative">
                    <!-- item 1 -->
                    <div class="flex flex-col md:flex-row items-start md:items-center gap-4 md:gap-8 relative">
                        <div class="ml-12 md:ml-0 md:w-1/2 md:text-right">
                            <div class="bg-white/90 p-4 sm:p-5 md:p-6 rounded-2xl sm:rounded-3xl border border-soft-blue/70 soft-shadow hover-lift transition-soft md:max-w-md md:ml-auto">
                                <span class="text-xl sm:text-2xl font-bold text-[#0b5e7c]">2012</span>
                                <h3 class="text-lg sm:text-xl font-semibold mt-1">The Beginning</h3>
                                <p class="mt-2 text-sm sm:text-base text-[#306f86]">Glen started GB Handyman from a single truck in Kent. First job: a bathroom remodel in Auburn. Word spread fast.</p>
                            </div>
                        </div>
                        <div class="absolute left-0 md:relative md:flex md:items-center md:justify-center">
                            <div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-soft-yellow border-3 md:border-4 border-soft-blue z-10 ml-2 md:ml-0"></div>
                        </div>
                        <div class="hidden md:block md:w-1/2"></div>
                    </div>
                    
                    <!-- item 2 -->
                    <div class="flex flex-col md:flex-row items-start md:items-center gap-4 md:gap-8 relative">
                        <div class="hidden md:block md:w-1/2"></div>
                        <div class="absolute left-0 md:relative md:flex md:items-center md:justify-center">
                            <div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-soft-green border-3 md:border-4 border-soft-blue z-10 ml-2 md:ml-0"></div>
                        </div>
                        <div class="ml-12 md:ml-0 md:w-1/2">
                            <div class="bg-white/90 p-4 sm:p-5 md:p-6 rounded-2xl sm:rounded-3xl border border-soft-green/70 soft-shadow hover-lift transition-soft md:max-w-md">
                                <span class="text-xl sm:text-2xl font-bold text-[#0b5e7c]">2016</span>
                                <h3 class="text-lg sm:text-xl font-semibold mt-1">Growing Expertise</h3>
                                <p class="mt-2 text-sm sm:text-base text-[#306f86]">Expanded services to include electrical and plumbing. Became fully licensed and insured as GB Handyman Solutions LLC.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- item 3 -->
                    <div class="flex flex-col md:flex-row items-start md:items-center gap-4 md:gap-8 relative">
                        <div class="ml-12 md:ml-0 md:w-1/2 md:text-right">
                            <div class="bg-white/90 p-4 sm:p-5 md:p-6 rounded-2xl sm:rounded-3xl border border-soft-yellow/70 soft-shadow hover-lift transition-soft md:max-w-md md:ml-auto">
                                <span class="text-xl sm:text-2xl font-bold text-[#0b5e7c]">2020</span>
                                <h3 class="text-lg sm:text-xl font-semibold mt-1">Remote & Mobile</h3>
                                <p class="mt-2 text-sm sm:text-base text-[#306f86]">Invested in a fully stocked trailer. Started serving 20+ cities remotely — from Olympia to Bellevue.</p>
                            </div>
                        </div>
                        <div class="absolute left-0 md:relative md:flex md:items-center md:justify-center">
                            <div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-soft-blue border-3 md:border-4 border-soft-yellow z-10 ml-2 md:ml-0"></div>
                        </div>
                        <div class="hidden md:block md:w-1/2"></div>
                    </div>
                    
                    <!-- item 4 -->
                    <div class="flex flex-col md:flex-row items-start md:items-center gap-4 md:gap-8 relative">
                        <div class="hidden md:block md:w-1/2"></div>
                        <div class="absolute left-0 md:relative md:flex md:items-center md:justify-center">
                            <div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-soft-yellow border-3 md:border-4 border-soft-green z-10 ml-2 md:ml-0"></div>
                        </div>
                        <div class="ml-12 md:ml-0 md:w-1/2">
                            <div class="bg-white/90 p-4 sm:p-5 md:p-6 rounded-2xl sm:rounded-3xl border border-soft-blue/70 soft-shadow hover-lift transition-soft md:max-w-md">
                                <span class="text-xl sm:text-2xl font-bold text-[#0b5e7c]">2025</span>
                                <h3 class="text-lg sm:text-xl font-semibold mt-1">Today & Beyond</h3>
                                <p class="mt-2 text-sm sm:text-base text-[#306f86]">350+ 5-star reviews and the same commitment to craftsmanship. Still family owned, still hands-on.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== MEET THE TEAM (SINGLE MEMBER) ===== -->
        <div class="mb-20 sm:mb-24">
            <h2 class="text-2xl sm:text-3xl font-bold text-center text-[#115e7a] mb-4">Meet the Hand Behind the Work</h2>
            <p class="text-center text-base sm:text-lg text-[#306f86] max-w-2xl mx-auto mb-8 sm:mb-12 px-4">Builder, perfectionist, craftsman — serving your home like it's my own.</p>
            
            <div class="max-w-2xl mx-auto px-4 sm:px-0">
                <!-- Single team member card -->
                <div class="bg-white/80 backdrop-blur-sm rounded-[2rem] sm:rounded-[3rem] p-6 sm:p-8 border border-soft-blue/70 soft-shadow hover-lift transition-soft">
                    <div class="flex flex-col sm:flex-row items-center sm:items-start gap-6 sm:gap-8">
                        <div class="w-48 h-64 sm:w-56 sm:h-72 rounded-xl bg-gradient-to-br from-soft-blue to-soft-green flex items-center justify-center text-5xl sm:text-6xl flex-shrink-0 border-4 border-white shadow-lg mx-auto">
                            
                            <img src="/images/glen.jpg" alt="Glen, founder of GB Handyman Solutions" class="absolute w-48 h-64 sm:w-56 sm:h-72 rounded-xl  object-cover border-4 border-white shadow-lg ">
                        </div>
                        <div class="text-center sm:text-left">
                            <h3 class="text-2xl sm:text-3xl font-bold text-[#115e7a]">Gerald Benjamin</h3>
                            <p class="text-base sm:text-lg text-[#3d748b] mb-3">Owner, C.E.O GB Handyman Solutions</p>
                            <p class="text-sm sm:text-base text-[#2a647a] leading-relaxed">Specializes in bathroom remodeling, tile work, custom carpentry, electrical, plumbing, and flooring. The one who answers the phone at 7am and stays until the job is done right.</p>
                            <div class="flex flex-wrap gap-2 mt-4 justify-center sm:justify-start">
                                <span class="bg-soft-blue px-3 py-1.5 rounded-full text-xs sm:text-sm">bathroom pro</span>
                                <span class="bg-soft-green px-3 py-1.5 rounded-full text-xs sm:text-sm">carpentry</span>
                                <span class="bg-soft-yellow px-3 py-1.5 rounded-full text-xs sm:text-sm">electrical</span>
                                <span class="bg-soft-blue px-3 py-1.5 rounded-full text-xs sm:text-sm">plumbing</span>
                                <span class="bg-soft-green px-3 py-1.5 rounded-full text-xs sm:text-sm">flooring</span>
                                <span class="bg-soft-yellow px-3 py-1.5 rounded-full text-xs sm:text-sm">drywall</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== VALUES WITH GRADIENTS ===== -->
        <div class="mb-20 sm:mb-24">
            <h2 class="text-2xl sm:text-3xl font-bold text-center text-[#115e7a] mb-8 sm:mb-12">What Drives Me</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-5 lg:gap-6 max-w-6xl mx-auto px-4 sm:px-0">
                <div class="bg-gradient-to-br from-soft-blue/40 to-soft-white p-6 sm:p-8 rounded-[2rem] sm:rounded-[3rem] border border-soft-blue/70 soft-shadow text-center hover-lift transition-soft">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 mx-auto bg-soft-yellow rounded-2xl sm:rounded-3xl flex items-center justify-center text-2xl sm:text-3xl mb-4">🔨</div>
                    <h3 class="text-lg sm:text-xl font-bold text-[#115e7a]">Craftsmanship First</h3>
                    <p class="mt-2 text-sm sm:text-base text-[#306f86]">I don't cut corners. Every job, big or small, gets the same attention to detail I'd give my own home.</p>
                </div>
                
                <div class="bg-gradient-to-br from-soft-green/40 to-soft-white p-6 sm:p-8 rounded-[2rem] sm:rounded-[3rem] border border-soft-green/70 soft-shadow text-center hover-lift transition-soft">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 mx-auto bg-soft-blue rounded-2xl sm:rounded-3xl flex items-center justify-center text-2xl sm:text-3xl mb-4">🤝</div>
                    <h3 class="text-lg sm:text-xl font-bold text-[#115e7a]">Neighborly Trust</h3>
                    <p class="mt-2 text-sm sm:text-base text-[#306f86]">I'm from here. I treat your home like I'd treat my own — with respect, honesty, and care.</p>
                </div>
                
                <div class="bg-gradient-to-br from-soft-yellow/40 to-soft-white p-6 sm:p-8 rounded-[2rem] sm:rounded-[3rem] border border-soft-yellow/70 soft-shadow text-center hover-lift transition-soft sm:col-span-2 lg:col-span-1 sm:max-w-md sm:mx-auto lg:max-w-none">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 mx-auto bg-soft-green rounded-2xl sm:rounded-3xl flex items-center justify-center text-2xl sm:text-3xl mb-4">🚐</div>
                    <h3 class="text-lg sm:text-xl font-bold text-[#115e7a]">Remote Ready</h3>
                    <p class="mt-2 text-sm sm:text-base text-[#306f86]">Fully mobile. I come to you with everything needed — from Kent to Olympia, Bellevue to Bremerton.</p>
                </div>
            </div>
        </div>

        <!-- ===== TESTIMONIAL SECTION ===== -->
        <div class="mb-20 sm:mb-24">
            <div class="max-w-4xl mx-auto px-4 sm:px-0">
                <div class="bg-white/80 backdrop-blur-sm rounded-[2rem] sm:rounded-[4rem] p-6 sm:p-8 lg:p-10 border border-soft-blue/60 soft-shadow">
                    <div class="flex flex-col sm:flex-row gap-6 sm:gap-8 items-center">
                        <div class="text-5xl sm:text-7xl lg:text-8xl bg-soft-yellow w-16 h-16 sm:w-20 sm:h-20 lg:w-24 lg:h-24 rounded-full flex items-center justify-center flex-shrink-0">“</div>
                        <div>
                            <p class="text-base sm:text-lg lg:text-xl italic text-[#1d5e78]">Glen remodeled our master bath — he was punctual, clean, and the tile work is stunning. He even fixed a plumbing issue the same day. True pro.</p>
                            <div class="mt-4 flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-3">
                                <span class="font-semibold text-[#115e7a]">— Sarah, Kent</span>
                                <span class="flex text-yellow-500 text-sm sm:text-base">★★★★★</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== LOCATION & CONTACT CARD ===== -->
        <div class="mb-16 sm:mb-20">
            <div class="bg-gradient-to-r from-soft-blue to-soft-green/70 rounded-[2rem] sm:rounded-[4rem] p-6 sm:p-8 lg:p-10 border border-white/60 soft-shadow mx-2 sm:mx-0">
                <div class="grid md:grid-cols-2 gap-6 sm:gap-8 lg:gap-10 items-start">
                    <div>
                        <h2 class="text-2xl sm:text-3xl font-bold text-[#0b4a61]">Visit or Call — Based in Kent</h2>
                        <p class="mt-2 sm:mt-3 text-base sm:text-lg text-[#1a5f79]">Stop by or give me a call. I'm always happy to talk through your project.</p>
                        <div class="mt-4 sm:mt-6 space-y-2 sm:space-y-3">
                            <div class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-3 bg-white/80 p-3 sm:p-4 rounded-2xl sm:rounded-full text-sm sm:text-base break-all">
                                <span class="text-xl shrink-0">📍</span> 
                                <span>6249 S 242nd Place, Bldg 8 Apt 203, Kent, WA 98032</span>
                            </div>
                            <a href="tel:+12024601753" class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-3 bg-white/80 p-3 sm:p-4 rounded-2xl sm:rounded-full text-sm sm:text-base hover:bg-soft-blue transition">
                                <span class="text-xl shrink-0">📞</span> 
                                <span>202 4601753</span>
                            </a>
                            <a href="mailto:gbhandymanllc@yahoo.com" class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-3 bg-white/80 p-3 sm:p-4 rounded-2xl sm:rounded-full text-sm sm:text-base hover:bg-soft-blue transition break-all">
                                <span class="text-xl shrink-0">✉️</span> 
                                <span>gbhandymanllc@yahoo.com</span>
                            </a>
                        </div>
                    </div>
                    <div class="bg-soft-yellow p-5 sm:p-6 lg:p-8 rounded-2xl sm:rounded-3xl border border-soft-yellow/80">
                        <p class="font-semibold text-base sm:text-lg">📋 Quick Facts</p>
                        <ul class="mt-3 sm:mt-4 space-y-2 text-sm sm:text-base">
                            <li class="flex items-start gap-2">
                                <span class="text-[#166b8a]">✓</span> 
                                <span>licensed & insured</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#166b8a]">✓</span> 
                                <span>18+ years experience</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#166b8a]">✓</span> 
                                <span>fully stocked mobile trailer</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#166b8a]">✓</span> 
                                <span>serving 20+ cities remotely</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#166b8a]">✓</span> 
                                <span>free estimates</span>
                            </li>
                        </ul>
                        <div class="mt-4 sm:mt-6 bg-white/80 rounded-full py-3 px-4 text-center text-sm sm:text-base font-medium">
                            📞 call for same‑week availability
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- end container -->
</div> <!-- end gradient-bg -->
@endsection

