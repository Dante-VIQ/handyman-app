@extends('layouts.app')

@section('title', 'Contact GB Handyman Solutions | Free Estimates in Kent, Auburn, Seattle WA')
@section('meta_title', 'Contact Us | Handyman Services in Kent, Auburn, Seattle & Beyond')
@section('meta_description', '📞 Contact GB Handyman Solutions for free estimates. Call 202-460-1753, email gbhandymanllc@yahoo.com, or visit our Kent base. Serving 20+ cities across Western Washington.')
@section('meta_keywords', 'contact handyman, handyman phone number, handyman Kent WA, free estimate handyman, handyman near me, local handyman')
@section('canonical', route('contact'))

@push('schema')
<script type="application/ld+json">
@php
$contactBusinessSchema = [
    "@context" => "https://schema.org",
    "@type" => "LocalBusiness",
    "name" => "GB Handyman Solutions LLC",
    "url" => "https://www.gbhandyman.com",
    "logo" => "https://www.gbhandyman.com/images/logo.png",
    "image" => "https://www.gbhandyman.com/images/shop-front.jpg",
    "description" => "Professional handyman services serving Kent and 20+ cities across Western Washington. Family owned since 2012.",
    "address" => [
        "@type" => "PostalAddress",
        "streetAddress" => "6249 S 242nd Place, Bldg 8 Apt 203",
        "addressLocality" => "Kent",
        "addressRegion" => "WA",
        "postalCode" => "98032",
        "addressCountry" => "US"
    ],
    "geo" => [
        "@type" => "GeoCoordinates",
        "latitude" => 47.3809,
        "longitude" => -122.2348
    ],
    "telephone" => "+12024601753",
    "email" => "gbhandymanllc@yahoo.com",
    "openingHoursSpecification" => [
        [
            "@type" => "OpeningHoursSpecification",
            "dayOfWeek" => ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
            "opens" => "07:00",
            "closes" => "19:00"
        ],
        [
            "@type" => "OpeningHoursSpecification",
            "dayOfWeek" => "Saturday",
            "opens" => "08:00",
            "closes" => "16:00"
        ]
    ],
    "priceRange" => "$$",
    "contactPoint" => [
        "@type" => "ContactPoint",
        "telephone" => "+12024601753",
        "contactType" => "customer service",
        "email" => "gbhandymanllc@yahoo.com",
        "availableLanguage" => ["English", "Spanish"]
    ],
    "sameAs" => [
        "https://www.facebook.com/gbhandyman",
        "https://www.instagram.com/gbhandyman",
        "https://www.yelp.com/biz/gb-handyman-solutions-kent"
    ],
    "hasMap" => "https://maps.google.com/?q=6249+S+242nd+Pl+Kent+WA",
    "areaServed" => [
        ["@type" => "City", "name" => "Kent"],
        ["@type" => "City", "name" => "Auburn"],
        ["@type" => "City", "name" => "Seattle"],
        ["@type" => "City", "name" => "Tacoma"],
        ["@type" => "City", "name" => "Olympia"],
        ["@type" => "City", "name" => "Bellevue"],
        ["@type" => "City", "name" => "Redmond"],
        ["@type" => "City", "name" => "Kirkland"],
        ["@type" => "City", "name" => "Bothell"],
        ["@type" => "City", "name" => "Issaquah"],
        ["@type" => "City", "name" => "Federal Way"],
        ["@type" => "City", "name" => "Puyallup"],
        ["@type" => "City", "name" => "Everett"],
        ["@type" => "City", "name" => "Lacey"],
        ["@type" => "City", "name" => "Bremerton"],
        ["@type" => "City", "name" => "Gig Harbor"]
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
            "name" => "Contact",
            "item" => "https://www.gbhandyman.com/contact"
        ]
    ]
];
@endphp
{!! json_encode($contactBusinessSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
</script>

<script type="application/ld+json">
{!! json_encode($breadcrumbSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
</script>
@endpush

@section('content')
<!-- Page Header -->
<div class="text-center max-w-4xl mx-auto mb-12">
    <h1 class="text-5xl md:text-6xl font-bold text-[#115e7a] mb-4">Contact GB Handyman Solutions</h1>
    <p class="text-xl text-[#2a647a]">Free estimates · Same-week availability · Family owned since 2012</p>
    <div class="w-24 h-1 bg-soft-green mx-auto mt-6 rounded-full"></div>
</div>

<!-- Contact Grid -->
<div class="grid lg:grid-cols-3 gap-8 mb-16">
    <!-- Phone Card -->
    <div class="bg-white/80 p-8 rounded-[3rem] border border-soft-blue soft-shadow text-center hover-lift transition-soft">
        <div class="w-20 h-20 bg-soft-yellow rounded-full flex items-center justify-center text-3xl mx-auto mb-4">📞</div>
        <h2 class="text-2xl font-bold text-[#115e7a] mb-3">Call Us Directly</h2>
        <p class="text-lg text-[#2a647a] mb-4">Fast response · Emergency calls welcome</p>
        <a href="tel:2024601753" class="text-3xl font-bold text-[#166b8a] hover:underline block mb-2">202-460-1753</a>
        <p class="text-sm text-[#4a7e93]">Mon-Fri 7am-7pm · Sat 8am-4pm</p>
    </div>

    <!-- Email Card -->
    <div class="bg-white/80 p-8 rounded-[3rem] border border-soft-green soft-shadow text-center hover-lift transition-soft">
        <div class="w-20 h-20 bg-soft-blue rounded-full flex items-center justify-center text-3xl mx-auto mb-4">✉️</div>
        <h2 class="text-2xl font-bold text-[#115e7a] mb-3">Email Us</h2>
        <p class="text-lg text-[#2a647a] mb-4">Send photos · Get detailed estimates</p>
        <a href="mailto:gbhandymanllc@yahoo.com" class="text-2xl font-bold text-[#166b8a] hover:underline break-all">gbhandymanllc@yahoo.com</a>
        <p class="text-sm text-[#4a7e93] mt-2">Response within 2 hours</p>
    </div>

    <!-- Visit Card -->
    <div class="bg-white/80 p-8 rounded-[3rem] border border-soft-yellow soft-shadow text-center hover-lift transition-soft">
        <div class="w-20 h-20 bg-soft-green rounded-full flex items-center justify-center text-3xl mx-auto mb-4">📍</div>
        <h2 class="text-2xl font-bold text-[#115e7a] mb-3">Visit Our Base</h2>
        <p class="text-lg text-[#2a647a] mb-4">Kent, Washington</p>
        <address class="not-italic text-xl font-semibold text-[#166b8a]">6249 S 242nd Place<br>Bldg 8 Apt 203<br>Kent, WA 98032</address>
        <a href="https://maps.google.com/?q=6249+S+242nd+Pl+Kent+WA" target="_blank" rel="noopener" class="inline-block mt-4 text-soft-blue underline">Get Directions →</a>
    </div>
</div>

<!-- Contact Form & Map Row -->
<div class="grid lg:grid-cols-2 gap-8 mb-16">
    <!-- Contact Form -->
    <div class="bg-white/90 p-8 rounded-[3rem] border border-soft-blue soft-shadow">
        <h2 class="text-2xl font-bold text-[#115e7a] mb-6">Send Us a Message</h2>
        <form action="{{ route('appointments.store') }}" method="POST" class="space-y-5">
            @csrf
            <div class="grid md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-[#306f86] mb-1">Name *</label>
                    <input type="text" name="name" required class="w-full p-3 rounded-full border border-soft-blue focus:outline-none focus:ring-2 focus:ring-soft-green">
                </div>
                <div>
                    <label class="block text-sm font-medium text-[#306f86] mb-1">Phone *</label>
                    <input type="tel" name="phone" required class="w-full p-3 rounded-full border border-soft-blue focus:outline-none focus:ring-2 focus:ring-soft-green">
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-[#306f86] mb-1">Email</label>
                <input type="email" name="email" class="w-full p-3 rounded-full border border-soft-blue focus:outline-none focus:ring-2 focus:ring-soft-green">
            </div>
            <div>
                <label class="block text-sm font-medium text-[#306f86] mb-1">Service Location (City) *</label>
                <input type="text" name="city" required placeholder="Kent, Auburn, Seattle, etc." class="w-full p-3 rounded-full border border-soft-blue focus:outline-none focus:ring-2 focus:ring-soft-green">
            </div>
            <div>
                <label class="block text-sm font-medium text-[#306f86] mb-1">Service Needed *</label>
                <select name="service" required class="w-full p-3 rounded-full border border-soft-blue focus:outline-none focus:ring-2 focus:ring-soft-green">
                    <option value="">Select a service</option>
                    <option value="bathroom">Bathroom Remodeling</option>
                    <option value="flooring">Flooring Installation</option>
                    <option value="drywall">Drywall Repair</option>
                    <option value="painting">Painting</option>
                    <option value="plumbing">Plumbing</option>
                    <option value="electrical">Electrical</option>
                    <option value="general">General Repairs</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-[#306f86] mb-1">Message *</label>
                <textarea name="message" rows="4" required placeholder="Describe your project..." class="w-full p-3 rounded-2xl border border-soft-blue focus:outline-none focus:ring-2 focus:ring-soft-green"></textarea>
            </div>
            <div class="flex items-center gap-2">
                <input type="checkbox" name="agree" required id="agree" class="w-4 h-4">
                <label for="agree" class="text-sm text-[#306f86]">I agree to receive calls/texts about my project</label>
            </div>
            <button type="submit" class="bg-soft-yellow px-8 py-4 rounded-full font-bold text-lg hover:bg-[#ffefb5] transition w-full">Get Free Estimate</button>
        </form>
    </div>

    <!-- Map with Local SEO -->
    <div>
        <div class="bg-white/90 p-6 rounded-[3rem] border border-soft-green soft-shadow h-full">
            <h2 class="text-2xl font-bold text-[#115e7a] mb-4">Our Service Area</h2>
            <div class="rounded-[2rem] overflow-hidden border-4 border-soft-blue h-96 mb-4">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d345079.5045523308!2d-122.24163662265677!3d47.44116948183589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1617823901450!5m2!1sen!2sus"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" 
                    title="GB Handyman Solutions service area map covering Kent, Auburn, Seattle, Tacoma, Olympia, Bellevue and more"
                    class="w-full h-full"></iframe>
            </div>
            <div class="grid grid-cols-3 gap-2 text-center">
                <div class="bg-soft-blue p-2 rounded-full text-sm">Kent</div>
                <div class="bg-soft-green p-2 rounded-full text-sm">Auburn</div>
                <div class="bg-soft-yellow p-2 rounded-full text-sm">Seattle</div>
                <div class="bg-soft-blue p-2 rounded-full text-sm">Tacoma</div>
                <div class="bg-soft-green p-2 rounded-full text-sm">Olympia</div>
                <div class="bg-soft-yellow p-2 rounded-full text-sm">Bellevue</div>
            </div>
            <p class="text-sm text-center mt-4 text-[#4a7e93]">Serving 20+ cities across Western Washington</p>
        </div>
    </div>
</div>

<!-- FAQ Section for Contact Page -->
<div class="bg-soft-green/20 rounded-[4rem] p-10 soft-shadow border border-soft-green/60 mb-16">
    <h2 class="text-3xl font-bold text-[#115e7a] mb-8 text-center">Frequently Asked Questions</h2>
    <div class="grid md:grid-cols-2 gap-6">
        <div class="bg-white p-6 rounded-3xl">
            <h3 class="font-bold text-lg">Do you provide free estimates?</h3>
            <p class="mt-2 text-[#306f86]">Yes! We offer free, no-obligation estimates for all projects. Call us or fill out the form above to schedule.</p>
        </div>
        <div class="bg-white p-6 rounded-3xl">
            <h3 class="font-bold text-lg">How soon can you come to my location?</h3>
            <p class="mt-2 text-[#306f86]">We typically have availability within 2-3 days. Emergency repairs may be accommodated sooner.</p>
        </div>
        <div class="bg-white p-6 rounded-3xl">
            <h3 class="font-bold text-lg">Do you serve my city?</h3>
            <p class="mt-2 text-[#306f86]">We serve Kent, Auburn, Seattle, Tacoma, Olympia, Bellevue, Redmond, Kirkland, Bothell, Issaquah, Federal Way, Puyallup, Everett, Lacey, and 10+ more cities.</p>
        </div>
        <div class="bg-white p-6 rounded-3xl">
            <h3 class="font-bold text-lg">Are you licensed and insured?</h3>
            <p class="mt-2 text-[#306f86]">Absolutely. GB Handyman Solutions is fully licensed, bonded, and insured for your protection.</p>
        </div>
    </div>
</div>

<!-- Business Hours with Schema -->
<div class="bg-soft-yellow/30 rounded-[4rem] p-8 soft-shadow border border-soft-yellow/80 mb-16">
    <div class="text-center max-w-3xl mx-auto">
        <h2 class="text-2xl font-bold text-[#115e7a] mb-6">Business Hours</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            <div class="bg-white p-4 rounded-2xl">
                <span class="font-semibold">Mon-Fri</span>
                <p class="text-lg">7am - 7pm</p>
            </div>
            <div class="bg-white p-4 rounded-2xl">
                <span class="font-semibold">Saturday</span>
                <p class="text-lg">8am - 4pm</p>
            </div>
            <div class="bg-white p-4 rounded-2xl">
                <span class="font-semibold">Sunday</span>
                <p class="text-lg">Closed</p>
            </div>
        </div>
        <p class="mt-6 text-[#2a647a]">Emergency calls may be accommodated outside hours - just ask!</p>
    </div>
</div>
@endsection