@extends('layouts.app')

@section('title', 'Contact GB Handyman Solutions | Free Estimates in Kent, Auburn, Seattle WA')
@section('meta_title', 'Contact Us | Handyman Services in Kent, Auburn, Seattle & Beyond')
@section('meta_description', '📞 Contact GB Handyman Solutions for free estimates. Call 202-460-1753, email
    gbhandymanllc@yahoo.com, or visit our Kent base. Serving 20+ cities across Western Washington.')
@section('meta_keywords', 'contact handyman, handyman phone number, handyman Kent WA, free estimate handyman, handyman
    near me, local handyman')
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
   @include('facility')
@endsection

@push('scripts')
    <script>
        document.addEventListener('alpine:init', () => {
            // Contact Form Component
            Alpine.data('contactForm', () => ({
                formData: {
                    name: '',
                    email: '',
                    phone: '',
                    service: '',
                    message: '',
                    contactMethod: 'email'
                },
                errors: {},
                isSubmitting: false,
                showSuccess: false,
                successMessage: '',
                
                submitForm() {
                    this.errors = {};
                    this.isSubmitting = true;
                    
                    // Basic validation
                    if (!this.formData.name) this.errors.name = 'Name is required';
                    if (!this.formData.email) this.errors.email = 'Email is required';
                    else if (!this.validateEmail(this.formData.email)) this.errors.email = 'Invalid email format';
                    
                    if (Object.keys(this.errors).length > 0) {
                        this.isSubmitting = false;
                        return;
                    }
                    
                    // Simulate form submission
                    setTimeout(() => {
                        this.isSubmitting = false;
                        this.showSuccess = true;
                        this.successMessage = 'Thank you! We\'ll contact you within 24 hours.';
                        
                        // Reset form
                        this.formData = {
                            name: '',
                            email: '',
                            phone: '',
                            service: '',
                            message: '',
                            contactMethod: 'email'
                        };
                        
                        // Hide success message after 5 seconds
                        setTimeout(() => {
                            this.showSuccess = false;
                        }, 5000);
                    }, 1500);
                },
                
                validateEmail(email) {
                    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
                }
            }));

            // Business Hours Component
            Alpine.data('businessHours', () => ({
                get currentTime() {
                    return new Date();
                },
                
                get isOpen() {
                    const now = new Date();
                    const day = now.getDay(); // 0 = Sunday, 1 = Monday, etc.
                    const hour = now.getHours();
                    const minutes = now.getMinutes();
                    const timeValue = hour + minutes / 60;
                    
                    // Sunday (emergency only)
                    if (day === 0) return false;
                    
                    // Saturday 8am-4pm
                    if (day === 6) return timeValue >= 8 && timeValue < 16;
                    
                    // Weekdays 7am-8pm
                    return timeValue >= 7 && timeValue < 20;
                },
                
                get statusMessage() {
                    const now = new Date();
                    const options = { weekday: 'long', hour: 'numeric', minute: 'numeric' };
                    const timeStr = now.toLocaleTimeString('en-US', { hour: 'numeric', minute: '2-digit' });
                    
                    return `${timeStr} on ${now.toLocaleDateString('en-US', { weekday: 'long' })}`;
                }
            }));
        });
    </script>
@endpush