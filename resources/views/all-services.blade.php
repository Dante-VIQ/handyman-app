@extends('layouts.app')

@section('title', 'Handyman Services in Kent WA | Bathroom Remodeling, Flooring, Plumbing')
@section('meta_description', '🔨 Professional handyman services across Western Washington: bathroom remodeling, flooring installation, drywall repair, painting, plumbing, electrical. Free estimates!')
@section('meta_keywords', 'handyman services, bathroom remodeling Kent, flooring installation Auburn, drywall repair Seattle, plumbing Tacoma, electrical Olympia')
  @section('canonical', route('all-services'))
@push('schema')
<script type="application/ld+json">
@php
$serviceListSchema = [
    "@context" => "https://schema.org",
    "@type" => "ItemList",
    "itemListElement" => [
        [
            "@type" => "ListItem",
            "position" => 1,
            "item" => [
                "@type" => "Service",
                "name" => "Bathroom Remodeling",
                "description" => "Complete bathroom renovation including tile, vanity, shower installation, and fixtures.",
                "provider" => [
                    "@id" => "https://www.gbhandyman.com/#business"
                ],
                "areaServed" => ["Kent", "Auburn", "Seattle", "Tacoma", "Bellevue"],
                "serviceType" => "Bathroom Remodeling"
            ]
        ],
        [
            "@type" => "ListItem",
            "position" => 2,
            "item" => [
                "@type" => "Service",
                "name" => "Flooring Installation",
                "description" => "Hardwood, laminate, vinyl, and tile flooring installation and repair.",
                "provider" => [
                    "@id" => "https://www.gbhandyman.com/#business"
                ],
                "areaServed" => ["Kent", "Auburn", "Seattle", "Redmond", "Issaquah"],
                "serviceType" => "Flooring"
            ]
        ],
        [
            "@type" => "ListItem",
            "position" => 3,
            "item" => [
                "@type" => "Service",
                "name" => "Drywall Repair & Installation",
                "description" => "Professional drywall repair, texturing, and installation for any room.",
                "provider" => [
                    "@id" => "https://www.gbhandyman.com/#business"
                ],
                "areaServed" => ["Kent", "Auburn", "Federal Way", "Tacoma"],
                "serviceType" => "Drywall"
            ]
        ],
        [
            "@type" => "ListItem",
            "position" => 4,
            "item" => [
                "@type" => "Service",
                "name" => "Plumbing Services",
                "description" => "Faucet repair, pipe replacement, toilet installation, and fixture upgrades.",
                "provider" => [
                    "@id" => "https://www.gbhandyman.com/#business"
                ],
                "areaServed" => ["Kent", "Auburn", "Seattle", "Olympia", "Lacey"],
                "serviceType" => "Plumbing"
            ]
        ],
        [
            "@type" => "ListItem",
            "position" => 5,
            "item" => [
                "@type" => "Service",
                "name" => "Electrical Services",
                "description" => "Outlet installation, lighting, panel upgrades, and electrical troubleshooting.",
                "provider" => [
                    "@id" => "https://www.gbhandyman.com/#business"
                ],
                "areaServed" => ["Kent", "Auburn", "Bellevue", "Redmond", "Kirkland"],
                "serviceType" => "Electrical"
            ]
        ],
        [
            "@type" => "ListItem",
            "position" => 6,
            "item" => [
                "@type" => "Service",
                "name" => "Painting Services",
                "description" => "Interior and exterior painting, color consultation, and touch-ups.",
                "provider" => [
                    "@id" => "https://www.gbhandyman.com/#business"
                ],
                "areaServed" => ["Kent", "Auburn", "Seattle", "Tacoma", "Puyallup"],
                "serviceType" => "Painting"
            ]
        ]
    ]
];

$faqSchema = [
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => [
        [
            "@type" => "Question",
            "name" => "How much does a handyman cost in Kent, WA?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Our rates vary by project, but most jobs range from $75-$150 per hour. We provide free estimates and transparent pricing."
            ]
        ],
        [
            "@type" => "Question",
            "name" => "Do you offer bathroom remodeling services?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Yes! We specialize in complete bathroom remodels including tile, vanity installation, shower upgrades, and fixture replacement."
            ]
        ],
        [
            "@type" => "Question",
            "name" => "What areas do you serve?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "We serve Kent, Auburn, Renton, Tacoma, Olympia, Lacey, Bellevue, Issaquah, Tukwila, Seatac, Seattle, Federal Way, Everett, Redmond, Puyallup, Kirkland, Bothell, Lynwood, Chehalis, Centralia, Bremerton, and Gig Harbor."
            ]
        ],
        [
            "@type" => "Question",
            "name" => "Are you licensed and insured?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Yes, GB Handyman Solutions is fully licensed, bonded, and insured for your protection."
            ]
        ]
    ]
];
@endphp
{!! json_encode($serviceListSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
</script>

<script type="application/ld+json">
{!! json_encode($faqSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
</script>
@endpush

@section('content')
    <div class="text-center max-w-3xl mx-auto mb-12">
        <h1 class="text-5xl font-bold text-[#115e7a]">professional handyman services<br><span class="text-2xl text-[#2a647a] mt-2 block">serving Kent, Auburn, Seattle & beyond</span></h1>
        <p class="text-xl mt-4 text-[#2a647a]">From small repairs to full renovations — we do it all with 15+ years of experience.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
        @php
            $services = [
                ['icon' => '🏠', 'title' => 'Home Renovation', 'desc' => 'Full home remodels, kitchen upgrades, basement finishing.', 'city' => 'Kent, Auburn, Seattle'],
                ['icon' => '🛁', 'title' => 'Bathroom Remodeling', 'desc' => 'Tile, vanity, shower installs — modern or classic.', 'city' => 'Kent, Federal Way, Tacoma'],
                ['icon' => '🪚', 'title' => 'Flooring', 'desc' => 'Hardwood, laminate, vinyl, tile installation and repair.', 'city' => 'Renton, Bellevue, Redmond'],
                ['icon' => '🧱', 'title' => 'Dry Walling', 'desc' => 'Drywall installation, repair, texturing, and finishing.', 'city' => 'Kent, Auburn, Puyallup'],
                ['icon' => '🎨', 'title' => 'Painting', 'desc' => 'Interior and exterior painting, color consultation.', 'city' => 'Seattle, Kirkland, Bothell'],
                ['icon' => '⚡', 'title' => 'Electrical', 'desc' => 'Outlet installation, lighting, panel upgrades, troubleshooting.', 'city' => 'Bellevue, Redmond, Issaquah'],
                ['icon' => '🚿', 'title' => 'Plumbing', 'desc' => 'Faucet repair, pipe replacement, toilet installation.', 'city' => 'Olympia, Lacey, Tacoma'],
                ['icon' => '🪜', 'title' => 'Carpentry', 'desc' => 'Custom shelves, trim work, door repair, framing.', 'city' => 'Kent, Auburn, Seattle'],
                ['icon' => '🪑', 'title' => 'Furniture Assembly', 'desc' => 'Quick and careful assembly of any flat-pack furniture.', 'city' => 'All service areas'],
                ['icon' => '🔩', 'title' => 'General Repairs', 'desc' => 'Fixing doors, windows, drywall patches, and more.', 'city' => 'All service areas'],
                ['icon' => '🏡', 'title' => 'Deck & Fence', 'desc' => 'Deck repair, staining, fence mending and installation.', 'city' => 'Kent, Auburn, Covington'],
                ['icon' => '❄️', 'title' => 'Weatherization', 'desc' => 'Draft proofing, insulation, window sealing for comfort.', 'city' => 'Olympia, Lacey, Centralia'],
            ];
        @endphp
        @foreach($services as $service)
            <div class="bg-white/80 p-6 rounded-3xl border border-soft-blue soft-shadow hover-lift transition-soft flex flex-col items-start">
                <span class="text-5xl mb-3">{{ $service['icon'] }}</span>
                <h3 class="text-xl font-bold text-[#115e7a]">{{ $service['title'] }}</h3>
                <p class="text-[#306f86] mt-1">{{ $service['desc'] }}</p>
                <span class="text-xs bg-soft-yellow px-3 py-1 rounded-full mt-3">📍 {{ $service['city'] }}</span>
            </div>
        @endforeach
    </div>

    <!-- FAQ Section (visible content matching schema) -->
    <div class="bg-soft-blue/20 rounded-[4rem] p-10 soft-shadow border border-soft-blue/60 mb-16">
        <h2 class="text-3xl font-bold text-[#115e7a] mb-8 text-center">frequently asked questions</h2>
        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-3xl">
                <h3 class="font-bold text-lg">How much does a handyman cost in Kent, WA?</h3>
                <p class="mt-2">Our rates vary by project, but most jobs range from $75-$150 per hour. We provide free estimates and transparent pricing.</p>
            </div>
            <div class="bg-white p-6 rounded-3xl">
                <h3 class="font-bold text-lg">Do you offer bathroom remodeling services?</h3>
                <p class="mt-2">Yes! We specialize in complete bathroom remodels including tile, vanity installation, shower upgrades, and fixture replacement.</p>
            </div>
            <div class="bg-white p-6 rounded-3xl">
                <h3 class="font-bold text-lg">What areas do you serve?</h3>
                <p class="mt-2">We serve Kent, Auburn, Renton, Tacoma, Olympia, Lacey, Bellevue, Issaquah, Tukwila, Seatac, Seattle, Federal Way, Everett, Redmond, Puyallup, Kirkland, Bothell, Lynwood, Chehalis, Centralia, Bremerton, and Gig Harbor.</p>
            </div>
            <div class="bg-white p-6 rounded-3xl">
                <h3 class="font-bold text-lg">Are you licensed and insured?</h3>
                <p class="mt-2">Yes, GB Handyman Solutions is fully licensed, bonded, and insured for your protection.</p>
            </div>
        </div>
    </div>
@endsection