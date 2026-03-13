@extends('layouts.app')

@section('title', 'Handyman Services in Kent WA | Bathroom Remodeling, Flooring, Plumbing')
@section('meta_description',
    '🔨 Professional handyman services across Western Washington: bathroom remodeling, flooring
    installation, drywall repair, painting, plumbing, electrical. Free estimates!')
@section('meta_keywords',
    'handyman services, bathroom remodeling Kent, flooring installation Auburn, drywall repair
    Seattle, plumbing Tacoma, electrical Olympia')
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
    <!-- Page Hero -->
    <section class="bg-gradient-to-r from-[#1e4a6f] to-[#2e6b4e] py-20 text-white">
        <div class="container mx-auto px-4 md:px-8 text-center">
            <h1 class="text-5xl md:text-6xl font-bold mb-4">
                <span class="text-yellow-400">//</span> Our Services
            </h1>
            <p class="text-xl max-w-2xl mx-auto opacity-90">
                Professional solutions for every corner of your home. Licensed, insured, and guaranteed.
            </p>
        </div>
    </section>

    <!-- Service Categories Tabs -->
    <section class="py-12 bg-white" x-data="{ activeTab: 'all' }">
        <div class="container mx-auto px-4 md:px-8">
            <!-- Filter tabs -->
            <div class="flex flex-wrap justify-center gap-3 mb-12">
                <button @click="activeTab = 'all'"
                    :class="activeTab === 'all' ? 'bg-[#1e4a6f] text-white' :
                        'bg-gray-100 text-slate-700 hover:bg-gray-200'"
                    class="px-6 py-3 rounded-full font-semibold transition shadow-md">
                    All Services
                </button>
                <button @click="activeTab = 'plumbing'"
                    :class="activeTab === 'plumbing' ? 'bg-[#1e4a6f] text-white' :
                        'bg-gray-100 text-slate-700 hover:bg-gray-200'"
                    class="px-6 py-3 rounded-full font-semibold transition shadow-md">
                    <i class="fas fa-wrench mr-2"></i>Plumbing
                </button>
                <button @click="activeTab = 'electrical'"
                    :class="activeTab === 'electrical' ? 'bg-[#1e4a6f] text-white' :
                        'bg-gray-100 text-slate-700 hover:bg-gray-200'"
                    class="px-6 py-3 rounded-full font-semibold transition shadow-md">
                    <i class="fas fa-bolt mr-2"></i>Electrical
                </button>
                <button @click="activeTab = 'carpentry'"
                    :class="activeTab === 'carpentry' ? 'bg-[#1e4a6f] text-white' :
                        'bg-gray-100 text-slate-700 hover:bg-gray-200'"
                    class="px-6 py-3 rounded-full font-semibold transition shadow-md">
                    <i class="fas fa-hammer mr-2"></i>Carpentry
                </button>
                <button @click="activeTab = 'painting'"
                    :class="activeTab === 'painting' ? 'bg-[#1e4a6f] text-white' :
                        'bg-gray-100 text-slate-700 hover:bg-gray-200'"
                    class="px-6 py-3 rounded-full font-semibold transition shadow-md">
                    <i class="fas fa-paint-brush mr-2"></i>Painting
                </button>
            </div>

            <!-- Services Grid -->
            <livewire:service-card />
        </div>
    </section>

    <!-- Service Process -->
    <section class="py-20 bg-[#eef7f0]">
        <div class="container mx-auto px-4 md:px-8">
            <div class="text-center mb-12">
                <span class="text-yellow-500 font-semibold tracking-wider">— HOW IT WORKS —</span>
                <h2 class="text-4xl font-bold text-[#1e4a6f] mt-2">Our simple 3-step process</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Step 1 -->
                <div class="text-center">
                    <div
                        class="w-20 h-20 bg-[#1e4a6f] rounded-full flex items-center justify-center mx-auto mb-4 text-white text-3xl font-bold border-4 border-yellow-400">
                        1
                    </div>
                    <h3 class="text-2xl font-bold text-[#2e6b4e] mb-2">Book online or call</h3>
                    <p class="text-slate-600">Schedule your service instantly through our website or give us a call. We'll
                        confirm within 30 minutes.</p>
                </div>

                <!-- Step 2 -->
                <div class="text-center">
                    <div
                        class="w-20 h-20 bg-[#1e4a6f] rounded-full flex items-center justify-center mx-auto mb-4 text-white text-3xl font-bold border-4 border-yellow-400">
                        2
                    </div>
                    <h3 class="text-2xl font-bold text-[#2e6b4e] mb-2">We arrive on time</h3>
                    <p class="text-slate-600">Our licensed pro shows up at the scheduled time with all tools and parts
                        needed for the job.</p>
                </div>

                <!-- Step 3 -->
                <div class="text-center">
                    <div
                        class="w-20 h-20 bg-[#1e4a6f] rounded-full flex items-center justify-center mx-auto mb-4 text-white text-3xl font-bold border-4 border-yellow-400">
                        3
                    </div>
                    <h3 class="text-2xl font-bold text-[#2e6b4e] mb-2">Job done right</h3>
                    <p class="text-slate-600">We fix the issue, clean up thoroughly, and ensure you're 100% satisfied before
                        we leave.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Guarantee -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="gradient-border max-w-4xl mx-auto">
                <div class="p-8 md:p-12 text-center">
                    <i class="fas fa-shield-alt text-6xl text-[#1e4a6f] mb-4"></i>
                    <h2 class="text-3xl font-bold text-[#1e4a6f] mb-4">Our 100% Satisfaction Guarantee</h2>
                    <p class="text-lg text-slate-600 mb-6">If you're not completely happy with our work, we'll make it right
                        or your money back. No questions asked.</p>
                    <div class="flex flex-wrap justify-center gap-4">
                        <div class="bg-[#eef7f0] px-4 py-2 rounded-full">
                            <i class="fas fa-check-circle text-[#2e6b4e] mr-1"></i> Licensed & insured
                        </div>
                        <div class="bg-[#eef7f0] px-4 py-2 rounded-full">
                            <i class="fas fa-check-circle text-[#2e6b4e] mr-1"></i> Background-checked
                        </div>
                        <div class="bg-[#eef7f0] px-4 py-2 rounded-full">
                            <i class="fas fa-check-circle text-[#2e6b4e] mr-1"></i> 1-year warranty
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="container mx-auto px-4 md:px-8 my-4">
        <div
            class="bg-gradient-to-r from-[#1e4a6f] to-[#2e6b4e] text-white p-12 rounded-[70px] rounded-bl-none text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">Ready to get started?</h2>
            <p class="text-xl max-w-2xl mx-auto mb-8">Book any service today and get 10% off your first repair.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="/contact"
                    class="bg-yellow-400 text-[#1e3b2c] px-8 py-4 rounded-full text-xl font-bold hover:bg-white transition shadow-lg">
                    <i class="fas fa-calendar-check mr-2"></i> Schedule online
                </a>
                <a href="tel:+12024601753"
                    class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-full text-xl font-bold hover:bg-white/20 transition">
                    <i class="fas fa-phone-alt mr-2"></i> (202) 460-1753
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-8 max-w-3xl">
            <h2 class="text-4xl font-bold text-[#1e4a6f] text-center mb-12">Frequently Asked Questions</h2>

            <div class="space-y-4" x-data="{ openFaq: null }">
                <!-- FAQ 1 -->
                <div class="border border-gray-200 rounded-2xl overflow-hidden">
                    <button @click="openFaq = openFaq === 1 ? null : 1"
                        class="w-full px-6 py-4 text-left bg-gray-50 hover:bg-gray-100 flex justify-between items-center">
                        <span class="font-semibold text-[#1e4a6f]">Are you licensed and insured?</span>
                        <i class="fas fa-chevron-down transition" :class="openFaq === 1 ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="openFaq === 1" x-collapse class="px-6 py-4 bg-white">
                        <p>Yes! We are fully licensed, bonded, and insured for your protection. All our technicians undergo
                            thorough background checks and carry liability insurance.</p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="border border-gray-200 rounded-2xl overflow-hidden">
                    <button @click="openFaq = openFaq === 2 ? null : 2"
                        class="w-full px-6 py-4 text-left bg-gray-50 hover:bg-gray-100 flex justify-between items-center">
                        <span class="font-semibold text-[#1e4a6f]">Do you provide free estimates?</span>
                        <i class="fas fa-chevron-down transition" :class="openFaq === 2 ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="openFaq === 2" x-collapse class="px-6 py-4 bg-white">
                        <p>Absolutely! We offer free, no-obligation estimates for all services. We'll assess the job,
                            provide a detailed quote, and only proceed when you're happy.</p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="border border-gray-200 rounded-2xl overflow-hidden">
                    <button @click="openFaq = openFaq === 3 ? null : 3"
                        class="w-full px-6 py-4 text-left bg-gray-50 hover:bg-gray-100 flex justify-between items-center">
                        <span class="font-semibold text-[#1e4a6f]">What areas do you serve?</span>
                        <i class="fas fa-chevron-down transition" :class="openFaq === 3 ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="openFaq === 3" x-collapse class="px-6 py-4 bg-white">
                        <p>We serve Springfield and all surrounding areas within a 30-mile radius. Contact us to check if we
                            cover your specific location.</p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="border border-gray-200 rounded-2xl overflow-hidden">
                    <button @click="openFaq = openFaq === 4 ? null : 4"
                        class="w-full px-6 py-4 text-left bg-gray-50 hover:bg-gray-100 flex justify-between items-center">
                        <span class="font-semibold text-[#1e4a6f]">Do you offer emergency services?</span>
                        <i class="fas fa-chevron-down transition" :class="openFaq === 4 ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="openFaq === 4" x-collapse class="px-6 py-4 bg-white">
                        <p>Yes! We provide 24/7 emergency services for urgent issues like burst pipes, electrical failures,
                            and lockouts. Just call our emergency line.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
