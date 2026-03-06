<x-hero-card />
{{--  <section id="home" class="hero-bg relative text-white py-20 md:py-32">
         <div class="absolute inset-0 bg-gradient-to-b from-transparent to-purpleLight"></div>
        <div class="relative container mx-auto px-4 text-center bottom-0">
            <div class="max-w-3xl mx-auto py-4">
                <h1 class="cormorant text-3xl md:text-5xl font-bold mb-6">
                    AFH in a serene environment in <span class="text-gold">Auburn Washington</span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto font-light">
                    Experience compassionate care in a safe and peaceful environment at Amazing Palace  Adult Family Home
                </p>
                <div class="flex flex-col md:flex-row justify-center space-y-4 md:space-y-0 md:space-x-6">
                    <a href="tel:+12064889285"
                        class="btn-gold px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-xl">
                        <i class="fas fa-phone-alt mr-2"></i> Contact Us Today
                    </a>
                    <a href="/gallery"
                        class="bg-transparent border-2 border-white hover:bg-white hover:text-navy text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300">
                        <i class="fas fa-images mr-2"></i> View Our Facility
                    </a>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- About Section -->
    <section id="about" class="py-20 section-bg">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="cormorant text-3xl md:text-5xl font-bold text-purple-950 mb-4">Welcome to Amazing Palace</h2>
                <div class="w-24 h-1 bg-gold mx-auto mb-6"></div>
                <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                  Loving, attentive support and a personalized care in a home-style environment
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="cormorant text-2xl font-bold text-purple-950 mb-6">A Home That Feels Like Home</h3>
                    <p class="text-lg text-gray-700 mb-6">
Welcome to Amazing Palace, where the comfort of a private residence meets the excellence of professional care. Located in beautiful Auburn, our home is more than just a facility - it's a sanctuary built on warmth, safety, and connection.
                    </p>
                    <p class="text-lg text-gray-700 mb-6">
                Our caregivers aren't just highly trained, they are deeply compassionate. With 24/7 availability, we provide the security your loved ones need while celebrating their independence. From specialized Memory Care and daily Assisted living to peaceful Hospice support, we ensure that every stage of the journey is met with grace and kindness
                    </p>
                    <div class="grid grid-cols-2 gap-6 mt-10">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-gold rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-shield-alt text-white text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-navy">Licensed & Certified</h4>
                                <p class="text-gray-600 text-sm">State-licensed facility</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-navy rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-user-md text-white text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-navy">Expert Caregivers</h4>
                                <p class="text-gray-600 text-sm">24/7 professional staff</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <livewire:header-image />
                    <div class="absolute -bottom-6 -left-6 bg-gold text-navy p-6 rounded-2xl shadow-xl max-w-xs">
                        <h4 class="cormorant text-2xl font-bold mb-2">7+ Years</h4>
                        <p class="font-semibold">Of Excellence in Service</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    {{-- <section id="services" class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="cormorant text-4xl md:text-5xl font-bold text-navy mb-4">Our Premium Services</h2>
                <div class="w-24 h-1 bg-gold mx-auto mb-6"></div>
                <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                    Comprehensive care tailored to individual needs with attention to every detail.
                </p>
            </div>

            <livewire:service-card />

            <div class="text-center mt-12">
                <button onclick="openContactModal()"
                    class="bg-navy hover:bg-royal-blue text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-lg">
                    <i class="fas fa-file-alt mr-2"></i> View Full Services List
                </button>
            </div>
        </div>
    </section> --}}

    <!-- Facility Tour -->
    <section id="facility" class="relative py-20 care-bg text-white">
        <div class="absolute inset-0 bg-gradient-to-r from-purpleDeep to-purpleLight"></div>
        <div class=" relative container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="cormorant text-4xl md:text-5xl font-bold mb-4">Our Home-Styled Facility</h2>
                <div class="w-24 h-1 bg-gold mx-auto mb-6"></div>
                <p class="text-xl max-w-3xl mx-auto font-light">
                    Experience the comfort and care in our AFH designed to meet each person's personalized needs.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20">
                    <div class="text-5xl text-gold mb-6">
                        <i class="fas fa-bed"></i>
                    </div>
                    <h3 class="cormorant text-2xl font-bold mb-4">Private Rooms</h3>
                    <p class="mb-6">Spacious private rooms with emergncy call systems. 24hr monitoring available</p>
                    <a href="/gallery" class="text-gold font-semibold hover:text-yellow-300 transition">View Gallery <i
                            class="fas fa-arrow-right ml-1"></i></a>
                </div>

                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20">
                    <div class="text-5xl text-gold mb-6">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3 class="cormorant text-2xl font-bold mb-4">Dining</h3>
                    <p class="mb-6">Meals with nutritionist-approved menus tailored to individual
                        dietary needs.</p>
                    <a href="#" class="text-gold font-semibold hover:text-yellow-300 transition">View Sample Menu
                        <i class="fas fa-arrow-right ml-1"></i></a>
                </div>

                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20">
                    <div class="text-5xl text-gold mb-6">
                        <i class="fas fa-spa"></i>
                    </div>
                    <h3 class="cormorant text-2xl font-bold mb-4">Amenities & Activities</h3>
                    <p class="mb-6">Beautiful backyard for activity and daily social and recreational programs.
                        </p>
                    <a href="#" class="text-gold font-semibold hover:text-yellow-300 transition">See Activities <i
                            class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Care Team -->
    <section id="team" class="py-20 section-bg">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="cormorant text-4xl md:text-5xl font-bold text-navy mb-4">Meet Our Staff</h2>
                <div class="w-24 h-1 bg-gold mx-auto mb-6"></div>
                <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                    Our compassionate, highly trained professionals are dedicated to providing exceptional care.
                </p>
            </div>

            {{-- <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="h-64 bg-navy flex items-center justify-center">
                        <i class="fas fa-user-md text-white text-8xl"></i>
                    </div>
                    <div class="p-8">
                        <h3 class="cormorant text-2xl font-bold text-navy mb-2">Dr. Emily Thompson</h3>
                        <p class="text-gold font-semibold mb-4">Medical Director</p>
                        <p class="text-gray-700">Board-certified geriatrician with 20+ years of experience in senior
                            care.</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="h-64 bg-navy flex items-center justify-center">
                        <i class="fas fa-user-nurse text-white text-8xl"></i>
                    </div>
                    <div class="p-8">
                        <h3 class="cormorant text-2xl font-bold text-navy mb-2">Maria Rodriguez</h3>
                        <p class="text-gold font-semibold mb-4">Head Care Manager</p>
                        <p class="text-gray-700">RN with specialized training in dementia care and 15 years of
                            experience.</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="h-64 bg-navy flex items-center justify-center">
                        <i class="fas fa-heartbeat text-white text-8xl"></i>
                    </div>
                    <div class="p-8">
                        <h3 class="cormorant text-2xl font-bold text-navy mb-2">James Wilson</h3>
                        <p class="text-gold font-semibold mb-4">Therapy & Wellness Director</p>
                        <p class="text-gray-700">Physical therapist specializing in geriatric rehabilitation and
                            mobility.</p>
                    </div>
                </div>
            </div> --}}
            @php
                $teamMembers = App\Models\Team::orderBy('order')->get();
            @endphp

            @if ($teamMembers->count() > 0)
                <x-team-section :teamMembers="$teamMembers" />
            @endif
        </div>
    </section>

    <!-- Contact Section -->
<section id="contact" class="py-12 md:py-20 bg-navy text-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:grid lg:grid-cols-2 gap-8 lg:gap-12">
            <!-- Left Column -->
            <div class="lg:pr-8">
                <h2 class="cormorant text-3xl md:text-4xl lg:text-5xl font-bold mb-6 text-center lg:text-left">
                    Contact Amazing Palace
                </h2>
                <div class="w-24 h-1 bg-gold mb-8 mx-auto lg:mx-0"></div>
                
                <p class="text-lg md:text-xl mb-8 text-center lg:text-left">
                    We're here to answer your questions and help you make the best decision for your loved one's care.
                </p>

                <!-- Contact Info Cards -->
                <div class="space-y-6 mb-12 lg:mb-0">
                    <div class="flex flex-col sm:flex-row items-center sm:items-start gap-4 p-4 bg-white/5 rounded-xl hover:bg-white/10 transition-all">
                        <div class="w-12 h-12 bg-gold rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-map-marker-alt text-white text-lg"></i>
                        </div>
                        <div class="text-center sm:text-left">
                            <h4 class="cormorant text-xl font-bold mb-1">Our Location</h4>
                            <p class="text-gray-300">2638 26th pl SE, Auburn, WA 98002</p>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center sm:items-start gap-4 p-4 bg-white/5 rounded-xl hover:bg-white/10 transition-all">
                        <div class="w-12 h-12 bg-gold rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-phone-alt text-white text-lg"></i>
                        </div>
                        <div class="text-center sm:text-left">
                            <h4 class="cormorant text-xl font-bold mb-1">Call Us</h4>
                            <p class="text-gray-300 text-lg font-medium">(206) 488-9285</p>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center sm:items-start gap-4 p-4 bg-white/5 rounded-xl hover:bg-white/10 transition-all">
                        <div class="w-12 h-12 bg-gold rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-envelope text-white text-lg"></i>
                        </div>
                        <div class="text-center sm:text-left">
                            <h4 class="cormorant text-xl font-bold mb-1">Email Us</h4>
                            <p class="text-gray-300 break-all md:break-normal">amazingpalaceafh@gmail.com</p>
                        </div>
                    </div>
                </div>

                <!-- License & Accreditation -->
                <div class="mt-8 lg:mt-12">
                    <h4 class="cormorant text-2xl font-bold mb-4 text-center lg:text-left">License & Accreditation</h4>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <div class="bg-white/10 px-6 py-3 rounded-lg text-center hover:bg-white/15 transition-all">
                            <p class="font-semibold">WA State License</p>
                            <p class="text-sm text-gray-300 mt-1">Fully Licensed & Certified</p>
                        </div>
                        <div class="bg-white/10 px-6 py-3 rounded-lg text-center hover:bg-white/15 transition-all">
                            <p class="font-semibold">Medicaid Approved</p>
                            <p class="text-sm text-gray-300 mt-1">Provider Accepted</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Form -->
            <div class="lg:pl-4">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-white/20">
                    <h3 class="cormorant text-2xl md:text-3xl font-bold mb-6 text-center lg:text-left">
                        Schedule a Tour
                    </h3>
                    <p class="mb-8 text-center lg:text-left">
                        Contact us to schedule a personal tour of our facility or a virtual consultation.
                    </p>

                    @include('components.partials.appointment')
                    
                    <!-- Optional: Add a direct contact CTA for mobile -->
                    <div class="mt-8 block lg:hidden">
                        <a href="tel:+12064889285" 
                           class="w-full bg-gold text-navy font-bold py-4 px-6 rounded-lg flex items-center justify-center gap-3 hover:bg-yellow-500 transition-all">
                            <i class="fas fa-phone-alt"></i>
                            <span>Call Now: (206) 488-9285</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map Section (Optional) -->
        <div class="mt-12 lg:mt-16">
            <h4 class="cormorant text-2xl md:text-3xl font-bold mb-6 text-center lg:text-left">
                Find Our Location
            </h4>
            <div class="bg-white/5 rounded-2xl p-4 border border-white/10">
                <!-- You can add a Google Maps embed here -->
                <div id="hotel-map"></div>

            </div>
        </div>
    </div>
</section>

    <!-- Footer -->
    <x-footer-card />

    <!-- Contact Modal -->
    <div id="contactModal" class="fixed inset-0 bg-black/70 z-50 hidden items-center justify-center p-4">
        <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-8">
                <div class="flex justify-between items-center mb-8">
                    <h3 class="cormorant text-3xl font-bold text-navy">Schedule a Tour</h3>
                    <a href="/booking" class="text-gray-500 hover:text-gray-700 text-2xl">
                        <i class="fas fa-times"></i>
                    </a>
                </div>

                <p class="text-gray-700 mb-8">Fill out the form below and our team will contact you within 24 hours to
                    schedule a personal tour of Amazing Palace.</p>

                @include('components.partials.appointment')
            </div>
        </div>
    </div>

    <script>
        // Contact modal functions
        function openContactModal() {
            document.getElementById('contactModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeContactModal() {
            document.getElementById('contactModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        document.getElementById('contactModal').addEventListener('click', function(e) {
            if (e.target.id === 'contactModal') {
                closeContactModal();
            }
        });



        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
