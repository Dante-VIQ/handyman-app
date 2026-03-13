@extends('layouts.app')

@section('title', 'Before & After Gallery | Handyman Projects in Kent, Auburn, Seattle WA')
@section('meta_title', 'Handyman Before & After Photos | Bathroom, Kitchen, Flooring Projects')
@section('meta_description',
    '📸 See real transformations from GB Handyman Solutions. Browse our gallery of bathroom
    remodels, flooring installations, kitchen renovations, and painting projects in Kent, Auburn, Seattle, and across
    Western Washington.')
@section('meta_keywords',
    'handyman before after photos, bathroom remodel pictures, flooring installation photos,
    kitchen renovation images, handyman portfolio Kent WA, home improvement gallery')
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
            0% {
                background-position: 200% 0;
            }

            100% {
                background-position: -200% 0;
            }
        }
    </style>
@endpush

@section('content')
    <!-- Page Header with H1 -->
    <!-- Page Hero -->
    <section class="bg-gradient-to-r from-[#1e4a6f] to-[#2e6b4e] py-20 text-white">
        <div class="container mx-auto px-4 md:px-8 text-center">
            <h1 class="text-5xl md:text-6xl font-bold mb-4">
                <span class="text-yellow-400">//</span> Project Gallery
            </h1>
            <p class="text-xl max-w-2xl mx-auto opacity-90">
                See the quality of our work across Kent and the greater Seattle area
            </p>
        </div>
    </section>

    <!-- Gallery Section with Alpine.js Filtering -->
   <livewire:photo-card />

    <!-- Featured Projects Section -->
    <section class="py-20 bg-[#eef7f0]">
        <div class="container mx-auto px-4 md:px-8">
            <div class="text-center mb-12">
                <span class="text-yellow-500 font-semibold tracking-wider">— FEATURED WORK —</span>
                <h2 class="text-4xl font-bold text-[#1e4a6f] mt-2">Before & After Transformations</h2>
            </div>

            <!-- Before/After Grid -->
            <livewire:gallery-card />
        </div>
    </section>

    <!-- Video Gallery Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="text-center mb-12">
                <span class="text-yellow-500 font-semibold tracking-wider">— IN ACTION —</span>
                <h2 class="text-4xl font-bold text-[#1e4a6f] mt-2">Watch Our Work</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Video 1 -->
                <div class="rounded-3xl overflow-hidden shadow-xl group relative">
                    <div class="aspect-w-16 aspect-h-9 bg-gray-900">
                        <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?q=80&w=2070"
                            alt="Video thumbnail"
                            class="w-full h-48 object-cover opacity-80 group-hover:scale-105 transition">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div
                                class="w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center group-hover:bg-white transition">
                                <i class="fas fa-play text-2xl text-[#1e4a6f] ml-1"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 bg-[#eef7f0]">
                        <h3 class="font-bold text-[#1e4a6f]">How to Fix a Leaky Faucet</h3>
                        <p class="text-sm text-slate-500">2 min tutorial • Kent, WA</p>
                    </div>
                </div>

                <!-- Video 2 -->
                <div class="rounded-3xl overflow-hidden shadow-xl group relative">
                    <div class="aspect-w-16 aspect-h-9 bg-gray-900">
                        <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?q=80&w=2069"
                            alt="Video thumbnail"
                            class="w-full h-48 object-cover opacity-80 group-hover:scale-105 transition">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div
                                class="w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center group-hover:bg-white transition">
                                <i class="fas fa-play text-2xl text-[#1e4a6f] ml-1"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 bg-[#eef7f0]">
                        <h3 class="font-bold text-[#1e4a6f]">Ceiling Fan Installation</h3>
                        <p class="text-sm text-slate-500">Time-lapse • Bellevue, WA</p>
                    </div>
                </div>

                <!-- Video 3 -->
                <div class="rounded-3xl overflow-hidden shadow-xl group relative">
                    <div class="aspect-w-16 aspect-h-9 bg-gray-900">
                        <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?q=80&w=2070"
                            alt="Video thumbnail"
                            class="w-full h-48 object-cover opacity-80 group-hover:scale-105 transition">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div
                                class="w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center group-hover:bg-white transition">
                                <i class="fas fa-play text-2xl text-[#1e4a6f] ml-1"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 bg-[#eef7f0]">
                        <h3 class="font-bold text-[#1e4a6f]">Deck Building Time-Lapse</h3>
                        <p class="text-sm text-slate-500">One day transformation • Auburn, WA</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="container mx-auto px-4 md:px-8 my-16">
        <div
            class="bg-gradient-to-r from-[#1e4a6f] to-[#2e6b4e] text-white p-12 rounded-[70px] rounded-bl-none text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">Ready to Transform Your Home?</h2>
            <p class="text-xl max-w-2xl mx-auto mb-8">Let us add your project to our gallery of satisfied customers.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="/quote"
                    class="bg-yellow-400 text-[#1e3b2c] px-8 py-4 rounded-full text-xl font-bold hover:bg-white transition shadow-lg">
                    <i class="fas fa-calendar-check mr-2"></i> Get Free Estimate
                </a>
                <a href="tel:5551234567"
                    class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-full text-xl font-bold hover:bg-white/20 transition">
                    <i class="fas fa-phone-alt mr-2"></i> (555) 123-4567
                </a>
            </div>
            <p class="mt-6 text-sm opacity-80">
                <i class="fas fa-map-pin mr-2"></i>6249 S 242nd Place, Bldg 8 Apt 203, Kent, WA 98032
            </p>
        </div>
    </section>

    <!-- Instagram Feed Section -->
    <section class="py-16 bg-[#eef7f0]">
        <div class="container mx-auto px-4 md:px-8 text-center">
            <i class="fab fa-instagram text-5xl text-[#1e4a6f] mb-4"></i>
            <h2 class="text-3xl font-bold text-[#1e4a6f] mb-2">Follow Us on Instagram</h2>
            <p class="text-lg text-slate-600 mb-8">@gbhandyman_solutions</p>

            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4 max-w-5xl mx-auto">
                <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?q=80&w=2070" alt="Instagram post"
                    class="w-full aspect-square object-cover rounded-2xl shadow-lg hover:scale-105 transition">
                <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?q=80&w=2069" alt="Instagram post"
                    class="w-full aspect-square object-cover rounded-2xl shadow-lg hover:scale-105 transition">
                <img src="https://images.unsplash.com/photo-1558901346-de6a89b8aabf?q=80&w=2066" alt="Instagram post"
                    class="w-full aspect-square object-cover rounded-2xl shadow-lg hover:scale-105 transition">
                <img src="https://images.unsplash.com/photo-1562259920-51af8c4a8b3b?q=80&w=2070" alt="Instagram post"
                    class="w-full aspect-square object-cover rounded-2xl shadow-lg hover:scale-105 transition">
                <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?q=80&w=2070" alt="Instagram post"
                    class="w-full aspect-square object-cover rounded-2xl shadow-lg hover:scale-105 transition">
            </div>
        </div>
    </section>
@endsection
