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
    <!-- Page Hero -->
    <section class="coverage-badge py-20 text-white">
        <div class="container mx-auto px-4 md:px-8 text-center">
            <div class="inline-block bg-yellow-400 text-[#1e3b2c] px-6 py-2 rounded-full text-sm font-bold mb-6">
                <i class="fas fa-map-marker-alt mr-2"></i> BASED IN KENT, WA
            </div>
            <h1 class="text-5xl md:text-6xl font-bold mb-4">
                <span class="text-yellow-400">//</span> Service Area
            </h1>
            <p class="text-xl max-w-2xl mx-auto opacity-90">
                Proudly serving Kent and the greater Seattle area. Your local handyman experts just minutes away.
            </p>
            <div class="mt-6 text-lg">
                <i class="fas fa-location-dot text-yellow-400 mr-2"></i>
                <span class="font-semibold">6249 S 242nd Place, Bldg 8 Apt 203, Kent, WA 98032</span>
            </div>
        </div>
    </section>

    <!-- Location Highlight -->
    <section class="py-8 bg-white border-b border-gray-200">
        <div class="container mx-auto px-4 md:px-8">
            <div class="bg-[#eef7f0] p-6 rounded-3xl flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="flex items-center gap-4">
                    <div class="w-16 h-16 bg-[#1e4a6f] rounded-full flex items-center justify-center">
                        <i class="fas fa-house text-3xl text-yellow-400"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-[#1e4a6f]">Our Headquarters</h3>
                        <p class="text-lg">6249 S 242nd Place, Bldg 8 Apt 203, Kent, WA 98032</p>
                        <p class="text-sm text-slate-500"><i class="fas fa-clock mr-2"></i>Open 7am-8pm, emergency 24/7</p>
                    </div>
                </div>
                <a href="https://maps.google.com/?q=6249+S+242nd+Place+Kent+WA+98032" target="_blank" class="bg-[#1e4a6f] text-white px-6 py-3 rounded-full hover:bg-[#2e6b4e] transition whitespace-nowrap">
                    <i class="fas fa-map-marked-alt mr-2"></i> Get Directions
                </a>
            </div>
        </div>
    </section>

    <!-- Coverage Map & Info -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="flex flex-col lg:flex-row gap-12">
                <!-- Map Column -->
                <div class="lg:w-3/5">
                    <div class="map-container shadow-2xl border-4 border-yellow-400">
                        <!-- SVG Map of King County / Seattle Area -->
                        <svg viewBox="0 0 800 600" class="w-full h-auto bg-[#eef7f0]">
                            <!-- Background base -->
                            <rect width="800" height="600" fill="#eef7f0"/>
                            
                            <!-- Puget Sound (water) -->
                            <path d="M0 200 L150 150 L200 100 L300 80 L400 100 L500 150 L600 200 L700 250 L800 300 L800 600 L0 600 Z" 
                                  fill="#60a5fa" opacity="0.3"/>
                            
                            <!-- Major Highways (I-5, I-405, SR-167) -->
                            <path d="M200 100 L220 200 L240 300 L260 400 L280 500" stroke="#94a3b8" stroke-width="6" fill="none" stroke-dasharray="10 10" opacity="0.6"/>
                            <path d="M400 80 L420 180 L440 280 L460 380 L480 480" stroke="#94a3b8" stroke-width="6" fill="none" stroke-dasharray="10 10" opacity="0.6"/>
                            <path d="M500 120 L520 220 L540 320 L560 420" stroke="#94a3b8" stroke-width="6" fill="none" stroke-dasharray="10 10" opacity="0.6"/>
                            
                            <!-- KENT (Base Location) - Highlighted -->
                            <circle cx="420" cy="380" r="28" fill="#1e4a6f" class="service-pin ken-location" filter="url(#dropShadow)"/>
                            <circle cx="420" cy="380" r="32" fill="none" stroke="#eab308" stroke-width="3" stroke-dasharray="6 4"/>
                            <text x="420" y="360" text-anchor="middle" class="text-xs font-bold fill-white" style="font-size: 16px;">GB</text>
                            <text x="420" y="420" text-anchor="middle" class="text-sm font-bold fill-[#1e4a6f]" style="font-size: 18px;">KENT</text>
                            
                            <!-- Seattle -->
                            <circle cx="280" cy="120" r="20" fill="#2e6b4e" class="service-pin"/>
                            <text x="280" y="90" text-anchor="middle" class="text-xs font-bold fill-[#2e6b4e]" style="font-size: 14px;">Seattle</text>
                            
                            <!-- Tacoma -->
                            <circle cx="360" cy="520" r="18" fill="#2e6b4e" class="service-pin"/>
                            <text x="360" y="490" text-anchor="middle" class="text-xs font-bold fill-[#2e6b4e]" style="font-size: 14px;">Tacoma</text>
                            
                            <!-- Bellevue -->
                            <circle cx="350" cy="200" r="16" fill="#2e6b4e" class="service-pin"/>
                            <text x="350" y="170" text-anchor="middle" class="text-xs font-bold fill-[#2e6b4e]" style="font-size: 14px;">Bellevue</text>
                            
                            <!-- Redmond -->
                            <circle cx="400" cy="150" r="14" fill="#eab308" class="service-pin"/>
                            <text x="400" y="120" text-anchor="middle" class="text-xs font-bold fill-[#eab308]" style="font-size: 12px;">Redmond</text>
                            
                            <!-- Renton -->
                            <circle cx="380" cy="280" r="14" fill="#eab308" class="service-pin"/>
                            <text x="380" y="250" text-anchor="middle" class="text-xs font-bold fill-[#eab308]" style="font-size: 12px;">Renton</text>
                            
                            <!-- Auburn -->
                            <circle cx="440" cy="450" r="14" fill="#eab308" class="service-pin"/>
                            <text x="440" y="420" text-anchor="middle" class="text-xs font-bold fill-[#eab308]" style="font-size: 12px;">Auburn</text>
                            
                            <!-- Federal Way -->
                            <circle cx="400" cy="320" r="14" fill="#eab308" class="service-pin"/>
                            <text x="400" y="290" text-anchor="middle" class="text-xs font-bold fill-[#eab308]" style="font-size: 12px;">Federal Way</text>
                            
                            <!-- Covington -->
                            <circle cx="480" cy="400" r="12" fill="#eab308" class="service-pin"/>
                            <text x="480" y="370" text-anchor="middle" class="text-xs font-bold fill-[#eab308]" style="font-size: 11px;">Covington</text>
                            
                            <!-- Maple Valley -->
                            <circle cx="520" cy="320" r="12" fill="#eab308" class="service-pin"/>
                            <text x="520" y="290" text-anchor="middle" class="text-xs font-bold fill-[#eab308]" style="font-size: 11px;">Maple Valley</text>
                            
                            <!-- SeaTac -->
                            <circle cx="320" cy="250" r="12" fill="#eab308" class="service-pin"/>
                            <text x="320" y="220" text-anchor="middle" class="text-xs font-bold fill-[#eab308]" style="font-size: 11px;">SeaTac</text>
                            
                            <!-- Des Moines -->
                            <circle cx="360" cy="300" r="12" fill="#eab308" class="service-pin"/>
                            <text x="360" y="270" text-anchor="middle" class="text-xs font-bold fill-[#eab308]" style="font-size: 11px;">Des Moines</text>
                            
                            <!-- 25 mile radius indicator from Kent -->
                            <circle cx="420" cy="380" r="150" stroke="#eab308" stroke-width="3" fill="none" stroke-dasharray="12 6"/>
                            <text x="550" y="270" class="text-sm fill-[#eab308] font-semibold" style="font-size: 14px;">25 mile radius</text>
                            
                            <!-- Kent location detail -->
                            <text x="420" y="460" text-anchor="middle" class="text-xs fill-[#1e4a6f]" style="font-size: 10px;">6249 S 242nd Pl</text>
                            
                            <!-- Drop shadow filter -->
                            <defs>
                                <filter id="dropShadow" x="-20%" y="-20%" width="140%" height="140%">
                                    <feDropShadow dx="2" dy="2" stdDeviation="3" flood-opacity="0.3"/>
                                </filter>
                            </defs>
                        </svg>
                    </div>
                    <p class="text-sm text-slate-500 mt-4 text-center">
                        <i class="fas fa-map-marked-alt text-yellow-400 mr-2"></i>
                        Serving Kent and the greater Seattle area within 25 miles of our location
                    </p>
                </div>
                
                <!-- Coverage Info Column -->
                <div class="lg:w-2/5 space-y-8">
                    <div class="bg-[#eef7f0] p-8 rounded-3xl">
                        <h2 class="text-3xl font-bold text-[#1e4a6f] mb-4">We're Your Neighbors!</h2>
                        <p class="text-lg mb-4">Based in <strong class="text-[#2e6b4e]">Kent, WA 98032</strong>, we're centrally located to serve you quickly.</p>
                        <p class="text-lg mb-6">No matter where you are in the greater Seattle area, we'll send a professional handyman right to your doorstep.</p>
                        <div class="flex items-center gap-4 text-[#2e6b4e]">
                            <i class="fas fa-truck text-4xl"></i>
                            <span class="text-xl font-semibold">Average arrival: 20-30 minutes</span>
                        </div>
                    </div>
                    
                    <!-- Coverage Stats -->
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white p-6 rounded-2xl shadow-lg text-center border-b-4 border-yellow-400">
                            <div class="text-4xl font-bold text-[#1e4a6f]">25+</div>
                            <div class="text-sm text-slate-600">Cities & Towns</div>
                        </div>
                        <div class="bg-white p-6 rounded-2xl shadow-lg text-center border-b-4 border-yellow-400">
                            <div class="text-4xl font-bold text-[#1e4a6f]">25mi</div>
                            <div class="text-sm text-slate-600">Service Radius</div>
                        </div>
                        <div class="bg-white p-6 rounded-2xl shadow-lg text-center border-b-4 border-yellow-400">
                            <div class="text-4xl font-bold text-[#1e4a6f]">2M+</div>
                            <div class="text-sm text-slate-600">Households</div>
                        </div>
                        <div class="bg-white p-6 rounded-2xl shadow-lg text-center border-b-4 border-yellow-400">
                            <div class="text-4xl font-bold text-[#1e4a6f]">24/7</div>
                            <div class="text-sm text-slate-600">Emergency</div>
                        </div>
                    </div>
                    
                    <!-- Emergency Notice -->
                    <div class="bg-yellow-400/10 border-2 border-yellow-400 p-6 rounded-3xl">
                        <div class="flex items-start gap-4">
                            <i class="fas fa-clock text-4xl text-yellow-400"></i>
                            <div>
                                <h3 class="text-xl font-bold text-[#1e4a6f]">Emergency services available 24/7</h3>
                                <p class="text-slate-600 mt-2">From Kent to Seattle to Tacoma, we respond to emergencies day or night.</p>
                                <a href="tel:+12024601753" class="inline-block mt-4 bg-red-500 text-white px-6 py-3 rounded-full font-bold hover:bg-red-600 transition">
                                    <i class="fas fa-phone-alt mr-2"></i> Emergency: (460) 460-1753
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cities We Serve (King County & South Sound) -->
    <section class="py-16 bg-[#eef7f0]">
        <div class="container mx-auto px-4 md:px-8">
            <div class="text-center mb-12">
                <span class="text-yellow-500 font-semibold tracking-wider">— COVERAGE AREA —</span>
                <h2 class="text-4xl font-bold text-[#1e4a6f] mt-2">Cities We Serve in Washington</h2>
                <p class="text-lg text-slate-600 mt-4">Based in Kent, we reach all these communities within 25 miles</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Kent & Surrounding -->
                <div class="bg-white rounded-2xl shadow-lg p-6 border-l-8 border-yellow-400">
                    <h3 class="text-2xl font-bold text-[#1e4a6f] mb-3">
                        <i class="fas fa-star text-yellow-400 mr-2"></i>Kent (HQ)
                    </h3>
                    <p class="text-slate-600 text-sm mb-3">Primary hub • 15min response</p>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center gap-2"><i class="fas fa-map-pin text-[#2e6b4e]"></i> 98030, 98031, 98032, 98042</li>
                        <li class="flex items-center gap-2"><i class="fas fa-clock text-[#2e6b4e]"></i> 24/7 emergency coverage</li>
                        <li class="flex items-center gap-2"><i class="fas fa-house text-[#2e6b4e]"></i> 6249 S 242nd Pl (base)</li>
                    </ul>
                </div>
                
                <!-- King County North -->
                <div class="bg-white rounded-2xl shadow-lg p-6 border-l-8 border-[#2e6b4e]">
                    <h3 class="text-xl font-bold text-[#1e4a6f] mb-3">North King County</h3>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Seattle (all areas)</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Bellevue</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Redmond</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Kirkland</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Issaquah</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Mercer Island</li>
                    </ul>
                </div>
                
                <!-- South King County -->
                <div class="bg-white rounded-2xl shadow-lg p-6 border-l-8 border-[#2e6b4e]">
                    <h3 class="text-xl font-bold text-[#1e4a6f] mb-3">South King County</h3>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Renton</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Federal Way</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Auburn</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Covington</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Maple Valley</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Tukwila</li>
                    </ul>
                </div>
                
                <!-- Pierce County -->
                <div class="bg-white rounded-2xl shadow-lg p-6 border-l-8 border-[#2e6b4e]">
                    <h3 class="text-xl font-bold text-[#1e4a6f] mb-3">Pierce County</h3>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Tacoma</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Puyallup</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Fife</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Milton</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Edgewood</li>
                    </ul>
                </div>
                
                <!-- Eastside -->
                <div class="bg-white rounded-2xl shadow-lg p-6 border-l-8 border-yellow-400">
                    <h3 class="text-xl font-bold text-[#1e4a6f] mb-3">Eastside</h3>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Sammamish</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Woodinville</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Bothell</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Duvall</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Carnation</li>
                    </ul>
                </div>
                
                <!-- Airport Area -->
                <div class="bg-white rounded-2xl shadow-lg p-6 border-l-8 border-yellow-400">
                    <h3 class="text-xl font-bold text-[#1e4a6f] mb-3">Airport Area</h3>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> SeaTac</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Des Moines</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Burien</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Normandy Park</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> White Center</li>
                    </ul>
                </div>
                
                <!-- Additional Communities -->
                <div class="bg-white rounded-2xl shadow-lg p-6 border-l-8 border-yellow-400 col-span-1 md:col-span-2">
                    <h3 class="text-xl font-bold text-[#1e4a6f] mb-3">Also Serving These Communities</h3>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <ul class="space-y-2">
                            <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Vashon Island</li>
                            <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Mercer Island</li>
                            <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Medina</li>
                            <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Clyde Hill</li>
                        </ul>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Enumclaw</li>
                            <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Black Diamond</li>
                            <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Pacific</li>
                            <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Algona</li>
                        </ul>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Newcastle</li>
                            <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> Bryn Mawr</li>
                            <li class="flex items-center gap-2"><i class="fas fa-check-circle text-[#2e6b4e]"></i> East Renton</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Coverage Checker with Kent Zip Codes -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-8 max-w-3xl">
            <div class="bg-gradient-to-r from-[#1e4a6f] to-[#2e6b4e] text-white p-8 md:p-12 rounded-[50px] rounded-bl-none text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Check If We Cover Your Area</h2>
                <p class="text-lg mb-8">Enter your zip code to see if we serve your neighborhood</p>
                
                <div x-data="{ zipCode: '', showResult: false, isCovered: false }" 
                     @submit.prevent="isCovered = ['98030','98031','98032','98042','98055','98056','98057','98058','98059','98092','98093','98101','98102','98103','98104','98105','98106','98107','98108','98109','98115','98116','98117','98118','98119','98121','98122','98125','98126','98133','98144','98146','98148','98168','98178','98188','98198','98354','98371','98372','98373','98374','98375','98387','98401','98402','98403','98404','98405','98406','98407','98408','98409','98418','98421','98422','98424','98430','98433','98438','98439','98442','98443','98444','98445','98446','98447','98448','98450','98455','98460','98464','98465','98466','98467','98471','98477','98481','98490','98492','98493','98494','98496','98497','98498','98499'].includes(zipCode); showResult = true">
                        <form class="flex flex-col sm:flex-row gap-4 max-w-xl mx-auto">
                            <input type="text" 
                                   placeholder="Enter zip code (e.g., 98032)" 
                                   class="flex-1 px-6 py-4 rounded-full text-slate-800 focus:outline-none focus:ring-4 focus:ring-yellow-400"
                                   x-model="zipCode"
                                   maxlength="5"
                                   pattern="[0-9]{5}">
                            <button type="submit" 
                                    class="bg-yellow-400 text-[#1e3b2c] px-8 py-4 rounded-full font-bold hover:bg-white transition shadow-lg whitespace-nowrap">
                                <i class="fas fa-search mr-2"></i> Check Coverage
                            </button>
                        </form>
                        
                        <div x-show="showResult" x-transition class="mt-6 bg-white/20 backdrop-blur-sm p-4 rounded-2xl">
                            <p x-show="isCovered" class="text-green-300 font-semibold">
                                <i class="fas fa-check-circle mr-2"></i> ✅ Great news! We serve your area. Book now for same-day service.
                            </p>
                            <p x-show="!isCovered" class="text-yellow-200">
                                <i class="fas fa-info-circle mr-2"></i> We don't currently serve this zip code, but we're expanding! Call us to check.
                            </p>
                        </div>
                    </div>
                
                <p class="text-sm mt-4 opacity-80">Common Kent zip codes: 98030, 98031, 98032, 98042 • Seattle: 981xx • Tacoma: 984xx</p>
            </div>
        </div>
    </section>

    <!-- Drive Times from Kent -->
    <section class="py-16 bg-[#eef7f0]">
        <div class="container mx-auto px-4 md:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-[#1e4a6f] mb-4">Estimated Drive Times from Kent</h2>
                <p class="text-lg text-slate-600">We're centrally located to reach you quickly</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                <!-- Zone 1 - Kent -->
                <div class="bg-white p-6 rounded-3xl shadow-lg text-center">
                    <div class="w-16 h-16 bg-[#1e4a6f] rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white text-2xl font-bold">1</span>
                    </div>
                    <h3 class="text-xl font-bold text-[#1e4a6f]">Kent & Surrounding</h3>
                    <p class="text-3xl font-bold text-[#2e6b4e] my-2">10-15 min</p>
                    <p class="text-sm text-slate-500">Covington, Auburn, Federal Way</p>
                </div>
                
                <!-- Zone 2 - Seattle/Tacoma -->
                <div class="bg-white p-6 rounded-3xl shadow-lg text-center">
                    <div class="w-16 h-16 bg-[#2e6b4e] rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white text-2xl font-bold">2</span>
                    </div>
                    <h3 class="text-xl font-bold text-[#1e4a6f]">Seattle / Tacoma</h3>
                    <p class="text-3xl font-bold text-[#2e6b4e] my-2">20-30 min</p>
                    <p class="text-sm text-slate-500">Via I-5 or I-405</p>
                </div>
                
                <!-- Zone 3 - Eastside -->
                <div class="bg-white p-6 rounded-3xl shadow-lg text-center">
                    <div class="w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-[#1e3b2c] text-2xl font-bold">3</span>
                    </div>
                    <h3 class="text-xl font-bold text-[#1e4a6f]">Eastside</h3>
                    <p class="text-3xl font-bold text-[#2e6b4e] my-2">25-35 min</p>
                    <p class="text-sm text-slate-500">Bellevue, Redmond, Issaquah</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Local Testimonials -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-[#1e4a6f] mb-4">What Your Neighbors Say</h2>
                <p class="text-lg text-slate-600">Local reviews from Kent and surrounding areas</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Kent Review -->
                <div class="bg-[#eef7f0] p-6 rounded-3xl">
                    <div class="flex items-center gap-2 mb-3">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-slate-700 mb-4">"Fast, friendly, and fair! They fixed my plumbing issue in under an hour. So glad to have a reliable handyman right here in Kent."</p>
                    <p class="font-bold text-[#1e4a6f]">— Mike R., Kent</p>
                </div>
                
                <!-- Seattle Review -->
                <div class="bg-[#eef7f0] p-6 rounded-3xl">
                    <div class="flex items-center gap-2 mb-3">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-slate-700 mb-4">"They came all the way from Kent to Seattle on a Sunday emergency. Saved our basement from flooding. True heroes!"</p>
                    <p class="font-bold text-[#1e4a6f]">— Sarah L., Seattle</p>
                </div>
                
                <!-- Tacoma Review -->
                <div class="bg-[#eef7f0] p-6 rounded-3xl">
                    <div class="flex items-center gap-2 mb-3">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-slate-700 mb-4">"Professional electricians, fair pricing, and they showed up exactly when they said they would. Rare find these days!"</p>
                    <p class="font-bold text-[#1e4a6f]">— Dave P., Tacoma</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="container mx-auto px-4 md:px-8 my-16">
        <div class="bg-gradient-to-r from-[#1e4a6f] to-[#2e6b4e] text-white p-12 rounded-[70px] rounded-bl-none text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">Need a Handyman in Kent or Seattle?</h2>
            <p class="text-xl max-w-2xl mx-auto mb-8">We're based locally and ready to help with any home repair.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="/quote" class="bg-yellow-400 text-[#1e3b2c] px-8 py-4 rounded-full text-xl font-bold hover:bg-white transition shadow-lg">
                    <i class="fas fa-calendar-check mr-2"></i> Schedule online
                </a>
                <a href="tel:+12024601753" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-full text-xl font-bold hover:bg-white/20 transition">
                    <i class="fas fa-phone-alt mr-2"></i> (202) 460-1753
                </a>
            </div>
            <p class="mt-6 text-sm opacity-80">
                <i class="fas fa-map-pin mr-2"></i>6249 S 242nd Place, Bldg 8 Apt 203, Kent, WA 98032
            </p>
        </div>
    </section>
@endsection
