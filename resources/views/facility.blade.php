@extends('layouts.app')

@section('title', 'Our Facility – Comfortable Home Environment | Amazing Palace')
@section('description', 'Explore the Amazing Palace facility, designed to provide a safe, clean and welcoming home-style environment focused on comfort, care and peace of mind.')
@section('keywords', 'care home facility, home care environment, comfortable living facility, safe care home')

@push('head')
<link rel="canonical" href="{{ url('/facility') }}">
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="relative facility-hero-bg text-white py-24">
        <div class="absolute inset-0 bg-gradient-to-r from-purpleDeep to-purpleLight"></div>
        <div class="relative container mx-auto px-4 text-center">
            <h1 class="cormorant text-5xl md:text-6xl font-bold mb-6">Our Home-Styled Facility</h1>
            <div class="w-32 h-1 bg-gold mx-auto mb-8"></div>
            <p class="text-2xl max-w-3xl mx-auto font-light">
                Experience the perfect blend of comfort, safety, and elegance in Auburn's adult family home.
            </p>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="cormorant text-4xl font-bold text-navy mb-6">A Home Designed for Comfort & Care</h2>
                    <div class="w-24 h-1 bg-gold mb-8"></div>
                    <p class="text-lg text-gray-700 mb-6">
                     Amazing Palace is more than a care facility- it's a thoughtfully designed adult residential home. Located in Auburn, our property blends the comfort and familiarity of a private home with the professional support, safety features, and amenities of a dedicated care setting. From well-appointed bedrooms and bathrooms to intentionally designed shared spaces, every aspect of our home is carefully planned to promote comfort, connection, and well-being.
                    </p>
                    <p class="text-lg text-gray-700 mb-8">
                    We've created a welcoming environment where residents can flourish, engage with others, and enjoy daily life with dignity and peace of mind.
                    </p>
                    {{-- <div class="grid grid-cols-2 gap-6">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-gold rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-ruler-combined text-white text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-navy">8,500 Sq Ft</h4>
                                <p class="text-gray-600 text-sm">Luxury residence</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-navy rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-bed text-white text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-navy">12 Private Suites</h4>
                                <p class="text-gray-600 text-sm">With ensuite bathrooms</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="relative">
                    <div class="rounded-2xl overflow-hidden shadow-2xl">
                        <img src="images/facility.jpg" 
                             alt="Elegant living room at Amazing Palace" 
                             class="w-full h-96 object-cover">
                    </div>
                    {{-- <div class="absolute -bottom-6 -right-6 bg-gold text-navy p-6 rounded-2xl shadow-xl max-w-xs">
                        <h4 class="cormorant text-2xl font-bold mb-2">Secure & Serene</h4>
                        <p class="font-semibold">Gated property in prestigious neighborhood</p>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- Room Types Section -->
    {{-- <section class="py-20 amenities-bg">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="cormorant text-4xl md:text-5xl font-bold text-navy mb-4">Accommodations & Suites</h2>
                <div class="w-24 h-1 bg-gold mx-auto mb-6"></div>
                <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                    Choose from our selection of beautifully appointed private suites, each designed for comfort, safety, and privacy.
                </p>
            </div>
            
            <!-- Room Tabs -->
            <div class="mb-12">
                <div class="flex flex-wrap justify-center gap-4 mb-12">
                    <button id="private-suite-tab" class="tab-button active px-6 py-3 rounded-full font-semibold border-2 border-navy bg-navy text-white transition-all duration-300">
                        <i class="fas fa-door-closed mr-2"></i> Private Rooms
                    </button>
                    <button id="deluxe-suite-tab" class="tab-button px-6 py-3 rounded-full font-semibold border-2 border-gray-300 hover:border-navy transition-all duration-300">
                        <i class="fas fa-crown mr-2"></i> Deluxe Suite
                    </button>
                    <button id="companion-suite-tab" class="tab-button px-6 py-3 rounded-full font-semibold border-2 border-gray-300 hover:border-navy transition-all duration-300">
                        <i class="fas fa-user-friends mr-2"></i> Companion Suite
                    </button>
                    <button id="memory-care-suite-tab" class="tab-button px-6 py-3 rounded-full font-semibold border-2 border-gray-300 hover:border-navy transition-all duration-300">
                        <i class="fas fa-brain mr-2"></i> Memory Care Suite
                    </button>
                </div>
                
                <!-- Private Suite Content -->
                <div id="private-suite-content" class="room-content">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div class="order-2 lg:order-1">
                            <h3 class="cormorant text-4xl font-bold text-navy mb-6">Private Rooms</h3>
                            <p class="text-lg text-gray-700 mb-6">
                                Our standard private suites offer a comfortable, spacious living area with ensuite bathroom, large windows with garden views, and elegant finishes. Perfect for residents who value privacy and independence.
                            </p>
                            <ul class="space-y-4 mb-8">
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span><strong>200-250 sq ft</strong> of private living space</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span><strong>Private bathroom</strong> with walk-in shower and safety features</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span><strong>Large windows</strong> with garden or courtyard views</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span><strong>Emergency call system</strong> in bedroom and bathroom</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span><strong>Adjustable bed</strong> with premium mattress</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span><strong>Ample storage</strong> including closet and drawers</span>
                                </li>
                            </ul>
                            <div class="flex items-center space-x-4">
                                <a href="contact.html#pricing" class="inline-block bg-navy hover:bg-royal-blue text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-lg">
                                    <i class="fas fa-tag mr-2"></i> View Pricing
                                </a>
                                <a href="#virtual-tour" class="inline-block border-2 border-navy text-navy hover:bg-navy hover:text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300">
                                    <i class="fas fa-video mr-2"></i> Virtual Tour
                                </a>
                            </div>
                        </div>
                        <div class="order-1 lg:order-2">
                            <div class="rounded-2xl overflow-hidden shadow-2xl">
                                <img src="images/private_suite.jpg" 
                                     alt="Private suite at Amazing Palace" 
                                     class="w-full h-96 object-cover">
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Deluxe Suite Content (Hidden by default) -->
                <div id="deluxe-suite-content" class="room-content hidden">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <h3 class="cormorant text-4xl font-bold text-navy mb-6">Deluxe Rooms</h3>
                            <p class="text-lg text-gray-700 mb-6">
                                Our premium deluxe suites offer expanded living space with separate sitting areas, upgraded finishes, and enhanced amenities. These suites feature private balconies or patios with beautiful views of our gardens.
                            </p>
                            <ul class="space-y-4 mb-8">
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span><strong>300-350 sq ft</strong> of luxurious living space</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span><strong>Private bathroom</strong> with spa-like features and heated floors</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span><strong>Private balcony or patio</strong> with garden access</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span><strong>Separate sitting area</strong> for visiting with family</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span><strong>Premium finishes</strong> including hardwood accents and crown molding</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span><strong>Enhanced storage</strong> with walk-in closet</span>
                                </li>
                            </ul>
                            <div class="flex items-center space-x-4">
                                <a href="contact.html#pricing" class="inline-block bg-navy hover:bg-royal-blue text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-lg">
                                    <i class="fas fa-tag mr-2"></i> View Pricing
                                </a>
                                <a href="#virtual-tour" class="inline-block border-2 border-navy text-navy hover:bg-navy hover:text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300">
                                    <i class="fas fa-video mr-2"></i> Virtual Tour
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="rounded-2xl overflow-hidden shadow-2xl">
                                <img src="images/facility.jpg" 
                                     alt="Deluxe suite at Amazing Palace" 
                                     class="w-full h-96 object-cover">
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Companion Suite Content (Hidden by default) -->
                <div id="companion-suite-content" class="room-content hidden">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div class="order-2 lg:order-1">
                            <h3 class="cormorant text-4xl font-bold text-navy mb-6">Companion Rooms</h3>
                            <p class="text-lg text-gray-700 mb-6">
                                Designed for couples or friends who wish to live together, our companion suites offer separate sleeping areas with a shared living space. These suites provide the perfect balance of companionship and privacy.
                            </p>
                            <ul class="space-y-4 mb-8">
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span><strong>400-450 sq ft</strong> of shared living space</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span><strong>Two separate bedrooms</strong> with privacy dividers</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span><strong>Shared living area</strong> and private bathroom</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span><strong>Dual emergency call systems</strong> in both bedrooms</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span><strong>Cost-effective option</strong> for couples or friends</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span><strong>Separate storage areas</strong> for each resident</span>
                                </li>
                            </ul>
                            <div class="flex items-center space-x-4">
                                <a href="contact.html#pricing" class="inline-block bg-navy hover:bg-royal-blue text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-lg">
                                    <i class="fas fa-tag mr-2"></i> View Pricing
                                </a>
                                <a href="#virtual-tour" class="inline-block border-2 border-navy text-navy hover:bg-navy hover:text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300">
                                    <i class="fas fa-video mr-2"></i> Virtual Tour
                                </a>
                            </div>
                        </div>
                        <div class="order-1 lg:order-2">
                            <div class="rounded-2xl overflow-hidden shadow-2xl">
                                <img src="images/dining1.jpg" 
                                     alt="Companion suite at Amazing Palace" 
                                     class="w-full h-96 object-cover">
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Memory Care Suite Content (Hidden by default) -->
                <div id="memory-care-suite-content" class="room-content hidden">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <h3 class="cormorant text-4xl font-bold text-navy mb-6">Memory Care Rooms</h3>
                            <p class="text-lg text-gray-700 mb-6">
                                Specially designed for residents with dementia or Alzheimer's, these suites feature enhanced safety features, soothing colors, and wayfinding cues to reduce confusion and anxiety while maximizing independence.
                            </p>
                            <ul class="space-y-4 mb-8">
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span><strong>Enhanced safety features</strong> throughout the suite</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span><strong>Soothing color palette</strong> and dementia-friendly design</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span><strong>Wayfinding cues</strong> and visual markers for orientation</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span><strong>Proximity to secure outdoor garden</strong> and common areas</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span><strong>Enhanced monitoring capabilities</strong> for safety</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span><strong>Specialized lighting</strong> to reduce sundowning symptoms</span>
                                </li>
                            </ul>
                            <div class="flex items-center space-x-4">
                                <a href="https://wa.me/2064889285" class="inline-block bg-navy hover:bg-royal-blue text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-lg">
                                    <i class="fas fa-tag mr-2"></i> Request Pricing
                                </a>
                                <a href="https://wa.me/2064889285" class="inline-block border-2 border-navy text-navy hover:bg-navy hover:text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300">
                                    <i class="fas fa-video mr-2"></i> Request Tour
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="rounded-2xl overflow-hidden shadow-2xl">
                                <img src="images/companion.jpg" 
                                     alt="Memory care suite at Amazing Palace" 
                                     class="w-full h-96 object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-12 text-center">
                <p class="text-xl text-gray-700 mb-8 max-w-3xl mx-auto">
                    <strong>All suites include:</strong> Housekeeping and linen service, cable TV and WiFi, utilities, emergency call system, and access to all common areas and amenities.
                </p>
            </div>
        </div>
    </section> --}}

    <!-- Amenities Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="cormorant text-4xl md:text-5xl font-bold text-navy mb-4">Amenities & Common Areas</h2>
                <div class="w-24 h-1 bg-gold mx-auto mb-6"></div>
                <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                    Our facility features beautifully designed common areas that encourage socialization, activity, and relaxation.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl shadow-lg p-8 room-card">
                    <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-utensils text-white text-2xl"></i>
                    </div>
                    <h3 class="cormorant text-2xl font-bold text-navy mb-4">Dining Room</h3>
                    <p class="text-gray-700 mb-6">
                      
                    </p>
                    <div class="text-gold font-semibold">
                        <i class="fas fa-clock mr-2"></i> 3 meals daily + snacks
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl shadow-lg p-8 room-card">
                    <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-couch text-white text-2xl"></i>
                    </div>
                    <h3 class="cormorant text-2xl font-bold text-navy mb-4">Living Area</h3>
                    <p class="text-gray-700 mb-6">
                        Spacious living area with comfortable seating, fireplace, large-screen TV, and library nook. The heart of our home for socializing and activities.
                    </p>
                    <div class="text-gold font-semibold">
                        <i class="fas fa-fireplace mr-2"></i> Cozy fireplace & reading areas
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl shadow-lg p-8 room-card">
                    <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-spa text-white text-2xl"></i>
                    </div>
                    <h3 class="cormorant text-2xl font-bold text-navy mb-4">Friendly Environment</h3>
                    <p class="text-gray-700 mb-6">
                     Welcoming service with a touch of home.
                    </p>
                    <div class="text-gold font-semibold">
                        <i class="fas fa-sun mr-2"></i> Home-Styled
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Safety & Security Section -->
    <section class="py-20 amenities-bg">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="cormorant text-4xl font-bold text-navy mb-6">Safety & Security Features</h2>
                    <div class="w-24 h-1 bg-gold mb-8"></div>
                    <p class="text-lg text-gray-700 mb-8">
                        At Amazing Palace, resident safety is our top priority. Our facility incorporates state-of-the-art safety systems while maintaining a warm, homelike atmosphere.
                    </p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-white rounded-xl p-6 shadow-md">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 bg-gold rounded-full flex items-center justify-center mr-3">
                                    <i class="fas fa-bell text-white"></i>
                                </div>
                                <h4 class="font-bold text-navy">Emergency Call System</h4>
                            </div>
                            <p class="text-gray-700 text-sm">Call buttons in every room and bathroom with 24/7 monitoring.</p>
                        </div>
                        
                        <div class="bg-white rounded-xl p-6 shadow-md">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 bg-gold rounded-full flex items-center justify-center mr-3">
                                    <i class="fas fa-video text-white"></i>
                                </div>
                                <h4 class="font-bold text-navy">Security Monitoring</h4>
                            </div>
                            <p class="text-gray-700 text-sm">24/7 security cameras in common areas (not in private rooms).</p>
                        </div>
                        
                        <div class="bg-white rounded-xl p-6 shadow-md">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 bg-gold rounded-full flex items-center justify-center mr-3">
                                    <i class="fas fa-walking text-white"></i>
                                </div>
                                <h4 class="font-bold text-navy">Fall Prevention</h4>
                            </div>
                            <p class="text-gray-700 text-sm">Non-slip flooring, grab bars, and proper lighting throughout.</p>
                        </div>
                        
                        <div class="bg-white rounded-xl p-6 shadow-md">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 bg-gold rounded-full flex items-center justify-center mr-3">
                                    <i class="fas fa-smoke text-white"></i>
                                </div>
                                <h4 class="font-bold text-navy">Fire Safety</h4>
                            </div>
                            <p class="text-gray-700 text-sm">Advanced fire detection and suppression systems with regular drills.</p>
                        </div>
                    </div>
                    
                    <div class="mt-10">
                        <a href="contact.html#safety" class="inline-block bg-navy hover:bg-royal-blue text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-lg">
                            <i class="fas fa-shield-alt mr-2"></i> Learn More About Safety
                        </a>
                    </div>
                </div>
                
                <div class="relative">
                    <div class="rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                             alt="Safe and secure hallway at Amazing Palace" 
                             class="w-full h-96 object-cover">
                    </div>
                    <div class="absolute -bottom-6 -left-6 bg-gold text-navy p-6 rounded-2xl shadow-xl max-w-xs">
                        <h4 class="cormorant text-2xl font-bold mb-2">24/7 Staff</h4>
                        <p class="font-semibold">Trained caregivers always on-site</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Photo Gallery -->
    {{-- <section class="py-20" id="virtual-tour">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="cormorant text-4xl md:text-5xl font-bold text-navy mb-4">Photo Gallery</h2>
                <div class="w-24 h-1 bg-gold mx-auto mb-6"></div>
                <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                    Take a visual tour of our beautiful facility and see why Amazing Palace is Auburn's premier adult family home.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                <div class="gallery-image rounded-2xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1674&q=80" 
                         alt="Elegant living area" 
                         class="w-full h-64 object-cover">
                    <div class="p-4 bg-white">
                        <p class="font-semibold text-navy">Great Room & Fireplace</p>
                    </div>
                </div>
                
                <div class="gallery-image rounded-2xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1674&q=80" 
                         alt="Dining room" 
                         class="w-full h-64 object-cover">
                    <div class="p-4 bg-white">
                        <p class="font-semibold text-navy">Elegant Dining Room</p>
                    </div>
                </div>
                
                <div class="gallery-image rounded-2xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1616594039964-ae9021a400a0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1674&q=80" 
                         alt="Private bedroom" 
                         class="w-full h-64 object-cover">
                    <div class="p-4 bg-white">
                        <p class="font-semibold text-navy">Private Suite</p>
                    </div>
                </div>
                
                <div class="gallery-image rounded-2xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1583847268964-b28dc8f51f92?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1674&q=80" 
                         alt="Sunroom" 
                         class="w-full h-64 object-cover">
                    <div class="p-4 bg-white">
                        <p class="font-semibold text-navy">Bright Sunroom</p>
                    </div>
                </div>
                
                <div class="gallery-image rounded-2xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1581579431531-5c65f537180d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1674&q=80" 
                         alt="Garden area" 
                         class="w-full h-64 object-cover">
                    <div class="p-4 bg-white">
                        <p class="font-semibold text-navy">Secure Gardens</p>
                    </div>
                </div>
                
                <div class="gallery-image rounded-2xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1674&q=80" 
                         alt="Activity room" 
                         class="w-full h-64 object-cover">
                    <div class="p-4 bg-white">
                        <p class="font-semibold text-navy">Activity & Wellness Center</p>
                    </div>
                </div>
            </div>
            
        </div>
    </section> --}}

    <!-- Image Modal -->
    {{-- <div id="imageModal" class="image-modal">
        <div class="relative">
            <button id="closeModal" class="absolute top-4 right-4 text-white text-3xl z-10">
                <i class="fas fa-times"></i>
            </button>
            <img id="modalImage" class="modal-image" src="" alt="">
            <div id="modalCaption" class="text-white text-center mt-4 text-lg"></div>
        </div>
    </div> --}}

    <!-- Virtual Tour Section -->
    {{-- <section class="py-20 bg-navy text-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="cormorant text-4xl font-bold mb-6">Experience Amazing Palace Virtually</h2>
                    <div class="w-24 h-1 bg-gold mb-8"></div>
                    <p class="text-xl mb-8">
                        Can't visit in person right now? Take our interactive virtual tour to explore our facility from the comfort of your home.
                    </p>
                    <p class="text-lg mb-10">
                        Our 360° virtual tour allows you to navigate through common areas, view different room types, and get a true sense of our luxurious environment.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-6">
                        <a href="#virtual-tour" class="btn-gold px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-xl text-center">
                            <i class="fas fa-play-circle mr-2"></i> Book Now
                        </a>
                        <a href="https://wa.me/2064889285" class="bg-transparent border-2 border-white hover:bg-white hover:text-navy text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 text-center">
                            <i class="fas fa-calendar-alt mr-2"></i> Schedule Live Tour
                        </a>
                    </div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-10 border border-white/20">
                    <h3 class="cormorant text-3xl font-bold mb-6 text-gold">Virtual Tour Features</h3>
                    <div class="space-y-6">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-gold rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-360-degrees text-navy text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-xl mb-1">360° Room Views</h4>
                                <p class="text-gray-300">Explore every angle of our rooms and common areas</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-gold rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-info-circle text-navy text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-xl mb-1">Interactive Information</h4>
                                <p class="text-gray-300">Click on points of interest for detailed information</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-gold rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-video text-navy text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-xl mb-1">Video Walkthroughs</h4>
                                <p class="text-gray-300">Guided tours of different areas of our facility</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-gold rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-question-circle text-navy text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-xl mb-1">Live Q&A Option</h4>
                                <p class="text-gray-300">Schedule a virtual tour with a staff member for real-time Q&A</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- CTA Section -->
    <section class="py-20">
        <div class="container mx-auto px-4 text-center">
            <h2 class="cormorant text-4xl md:text-5xl font-bold text-navy mb-6">Ready to See Amazing Palace in Person?</h2>
            <div class="w-32 h-1 bg-gold mx-auto mb-8"></div>
            <p class="text-xl text-gray-700 max-w-3xl mx-auto mb-10">
                Schedule a personal tour to experience our facility firsthand, meet our team, and see why families choose Amazing Palace for their loved ones.
            </p>
            <div class="flex flex-col md:flex-row justify-center space-y-6 md:space-y-0 md:space-x-8">
                <a href="/contact" class="btn-gold px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-xl">
                    <i class="fas fa-calendar-check mr-2"></i> Schedule a Tour
                </a>
                <a href="tel:+12064889285" class="bg-navy hover:bg-royal-blue text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-lg">
                    <i class="fas fa-phone-alt mr-2"></i> Call Now: (206) 4889285
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
 <x-footer-card />
 @endsection
@push('scripts')
    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        // Close mobile menu when clicking a link
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });
        
        // Room tab functionality
        const roomTabs = document.querySelectorAll('button[id$="-tab"]');
        const roomContents = document.querySelectorAll('.room-content');
        
        roomTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove active class from all tabs
                roomTabs.forEach(t => {
                    t.classList.remove('active', 'bg-navy', 'text-white', 'border-navy');
                    t.classList.add('border-gray-300');
                });
                
                // Add active class to clicked tab
                tab.classList.add('active', 'bg-navy', 'text-white', 'border-navy');
                tab.classList.remove('border-gray-300');
                
                // Hide all content
                roomContents.forEach(content => {
                    content.classList.add('hidden');
                });
                
                // Show corresponding content
                const contentId = tab.id.replace('-tab', '-content');
                document.getElementById(contentId).classList.remove('hidden');
            });
        });
        
        // Image gallery modal functionality
        const galleryImages = document.querySelectorAll('.gallery-image img');
        const imageModal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        const modalCaption = document.getElementById('modalCaption');
        const closeModal = document.getElementById('closeModal');
        
        galleryImages.forEach(image => {
            image.addEventListener('click', () => {
                const imgSrc = image.getAttribute('src');
                const imgAlt = image.getAttribute('alt');
                const caption = image.closest('.gallery-image').querySelector('p').textContent;
                
                modalImage.setAttribute('src', imgSrc);
                modalImage.setAttribute('alt', imgAlt);
                modalCaption.textContent = caption;
                
                imageModal.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
        });
        
        closeModal.addEventListener('click', () => {
            imageModal.classList.remove('active');
            document.body.style.overflow = 'auto';
        });
        
        // Close modal when clicking outside the image
        imageModal.addEventListener('click', (e) => {
            if (e.target === imageModal) {
                imageModal.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if(href === '#' || href.includes('.html')) return;
                
                e.preventDefault();
                
                const targetElement = document.querySelector(href);
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
@endpush

@push('schema')
@php
$schema = [
    "@context" => "https://schema.org",
    "@type" => "LocalBusiness",
    "name" => "Amazing Palace",
    "url" => url('/facility'),
    "description" => "Experience the perfect blend of comfort, safety, and elegance in Auburn's adult family home.",
    "areaServed" => [
        "@type" => "Place",
        "name" => "Auburn, Washington"
    ]
];
@endphp

<script type="application/ld+json">
{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
@endpush
