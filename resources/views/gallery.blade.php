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
    @include('license')
@endsection

@push('scripts')
    <script>
        // This is a simple filter for demonstration
        // In a real implementation, you'd want to hide/show items based on category
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.filter-btn').forEach(b => {
                    b.classList.remove('active', 'bg-amber-500', 'text-white');
                    b.classList.add('bg-white', 'text-gray-700', 'border-gray-200');
                });
                this.classList.add('active', 'bg-amber-500', 'text-white');
                this.classList.remove('bg-white', 'text-gray-700', 'border-gray-200');
                
                // Here you would filter gallery items
                // For demo purposes, we'll just show an alert
                if(this.innerText.trim() !== 'All') {
                    alert(`Showing ${this.innerText} projects (demo filter - would filter gallery items)`);
                }
            });
        });
    </script>

@endpush