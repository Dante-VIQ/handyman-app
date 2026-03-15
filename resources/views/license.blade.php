<!-- ===== HEADER (consistent) ===== -->
    <header class="bg-white/90 backdrop-blur-sm shadow-sm sticky top-0 z-30 border-b border-amber-100">
        <div class="max-w-7xl mx-auto px-5 sm:px-8 py-4 flex items-center justify-between">
            <a href="index.html" class="flex items-center gap-2 hover:opacity-90 transition">
                <div class="bg-amber-500 text-white p-2 rounded-xl shadow-md">
                    <i class="fas fa-tools text-xl"></i>
                </div>
                <span class="font-bold text-2xl tracking-tight text-gray-800">GB<span class="text-amber-600"> Handyman</span></span>
            </a>
            <nav class="hidden md:flex items-center gap-8 text-gray-600 font-medium">
                <a href="services.html" class="hover:text-amber-600 transition">Services</a>
                <a href="about.html" class="hover:text-amber-600 transition">About</a>
                <a href="reviews.html" class="hover:text-amber-600 transition">Reviews</a>
                <a href="service-area.html" class="hover:text-amber-600 transition">Service area</a>
                <a href="gallery.html" class="text-amber-600 font-semibold border-b-2 border-amber-400 pb-1">Gallery</a>
                <a href="contact.html" class="hover:text-amber-600 transition">Contact</a>
            </nav>
            <a href="quote.html" class="hidden md:inline-block bg-amber-500 hover:bg-amber-600 text-white px-5 py-2 rounded-full font-semibold shadow-md hover:shadow-lg transition-all text-sm">📋 Get free quote</a>
            <button class="md:hidden text-2xl text-gray-600"><i class="fas fa-bars"></i></button>
        </div>
    </header>

    <main>
        <!-- ===== GALLERY HERO ===== -->
        <section class="relative bg-gradient-to-br from-amber-50 via-white to-amber-50/30 py-16 md:py-24 overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <i class="fas fa-camera-retro absolute text-9xl text-amber-300 -rotate-12 -top-6 left-10"></i>
                <i class="fas fa-image absolute text-8xl text-amber-300 rotate-45 bottom-0 right-10"></i>
            </div>
            <div class="max-w-7xl mx-auto px-5 sm:px-8 relative z-10">
                <div class="max-w-3xl">
                    <span class="bg-amber-200 text-amber-800 px-4 py-1.5 rounded-full text-sm font-semibold inline-flex items-center gap-1"><i class="fas fa-camera"></i> Our portfolio</span>
                    <h1 class="text-5xl md:text-6xl font-black text-gray-900 mt-6 leading-tight">See the <span class="text-amber-600">difference</span> we make</h1>
                    <p class="text-xl text-gray-600 mt-6 max-w-2xl">From small repairs to full transformations – browse photos of our recent work around your neighbourhood.</p>
                    <div class="flex flex-wrap gap-4 mt-10">
                        <a href="#gallery-grid" class="bg-gray-900 hover:bg-gray-800 text-white px-8 py-4 rounded-xl font-bold shadow-lg flex items-center gap-2 transition-all"><i class="fas fa-images"></i> View gallery</a>
                        <a href="#featured" class="bg-white border-2 border-amber-400 hover:bg-amber-50 text-gray-700 px-8 py-4 rounded-xl font-bold flex items-center gap-2 transition-all"><i class="fas fa-star text-amber-500"></i> Featured projects</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== FILTER BUTTONS (interactive style) ===== -->
        <section class="max-w-7xl mx-auto px-5 sm:px-8 pt-8 pb-4">
            <div class="flex flex-wrap justify-center gap-3">
                <button class="filter-btn active bg-amber-500 text-white px-6 py-3 rounded-full font-semibold shadow-md hover:bg-amber-600 transition-all border-2 border-amber-500">All</button>
                <button class="filter-btn bg-white text-gray-700 px-6 py-3 rounded-full font-semibold shadow-md hover:bg-amber-100 transition-all border-2 border-gray-200">Repairs</button>
                <button class="filter-btn bg-white text-gray-700 px-6 py-3 rounded-full font-semibold shadow-md hover:bg-amber-100 transition-all border-2 border-gray-200">Plumbing</button>
                <button class="filter-btn bg-white text-gray-700 px-6 py-3 rounded-full font-semibold shadow-md hover:bg-amber-100 transition-all border-2 border-gray-200">Electrical</button>
                <button class="filter-btn bg-white text-gray-700 px-6 py-3 rounded-full font-semibold shadow-md hover:bg-amber-100 transition-all border-2 border-gray-200">Carpentry</button>
                <button class="filter-btn bg-white text-gray-700 px-6 py-3 rounded-full font-semibold shadow-md hover:bg-amber-100 transition-all border-2 border-gray-200">Painting</button>
                <button class="filter-btn bg-white text-gray-700 px-6 py-3 rounded-full font-semibold shadow-md hover:bg-amber-100 transition-all border-2 border-gray-200">Assembly</button>
            </div>
        </section>

        <!-- ===== GALLERY GRID ===== -->
        <section id="gallery-grid" class="max-w-7xl mx-auto px-5 sm:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 auto-rows-fr">
                
                <!-- Gallery Item 1 - Carpentry -->
                <div class="gallery-item relative overflow-hidden rounded-3xl shadow-xl group cursor-pointer" data-category="carpentry">
                    <img src="https://placehold.co/800x600/CFC5B6/352d22?text=Custom+shelving" alt="Custom built-in shelving" class="w-full h-80 object-cover transition-all duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div>
                            <span class="bg-amber-500 text-white text-xs px-3 py-1 rounded-full">Carpentry</span>
                            <p class="text-white font-bold text-xl mt-2">Custom built-in shelving</p>
                            <p class="text-gray-200 text-sm">Maple Valley home office</p>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 2 - Plumbing -->
                <div class="gallery-item relative overflow-hidden rounded-3xl shadow-xl group cursor-pointer" data-category="plumbing">
                    <img src="https://placehold.co/800x600/B9AA99/241f18?text=Bathroom+sink+install" alt="New bathroom sink installation" class="w-full h-80 object-cover transition-all duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div>
                            <span class="bg-amber-500 text-white text-xs px-3 py-1 rounded-full">Plumbing</span>
                            <p class="text-white font-bold text-xl mt-2">Bathroom sink & faucet</p>
                            <p class="text-gray-200 text-sm">Bldg 8, Apt 203 refresh</p>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 3 - Electrical -->
                <div class="gallery-item relative overflow-hidden rounded-3xl shadow-xl group cursor-pointer" data-category="electrical">
                    <img src="https://placehold.co/800x600/CCC2B3/3f3327?text=Lighting+install" alt="LED lighting installation" class="w-full h-80 object-cover transition-all duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div>
                            <span class="bg-amber-500 text-white text-xs px-3 py-1 rounded-full">Electrical</span>
                            <p class="text-white font-bold text-xl mt-2">LED recessed lighting</p>
                            <p class="text-gray-200 text-sm">Kitchen renovation, Kent</p>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 4 - Painting -->
                <div class="gallery-item relative overflow-hidden rounded-3xl shadow-xl group cursor-pointer" data-category="painting">
                    <img src="https://placehold.co/800x600/E9DFD3/4a3b2c?text=Living+room+paint" alt="Living room painting" class="w-full h-80 object-cover transition-all duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div>
                            <span class="bg-amber-500 text-white text-xs px-3 py-1 rounded-full">Painting</span>
                            <p class="text-white font-bold text-xl mt-2">Accent wall & trim</p>
                            <p class="text-gray-200 text-sm">Covington living room</p>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 5 - Assembly -->
                <div class="gallery-item relative overflow-hidden rounded-3xl shadow-xl group cursor-pointer" data-category="assembly">
                    <img src="https://placehold.co/800x600/CFC5B6/352d22?text=IKEA+assembly" alt="IKEA wardrobe assembly" class="w-full h-80 object-cover transition-all duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div>
                            <span class="bg-amber-500 text-white text-xs px-3 py-1 rounded-full">Assembly</span>
                            <p class="text-white font-bold text-xl mt-2">PAX wardrobe system</p>
                            <p class="text-gray-200 text-sm">Bldg 8, Apt 203 bedroom</p>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 6 - Repairs -->
                <div class="gallery-item relative overflow-hidden rounded-3xl shadow-xl group cursor-pointer" data-category="repairs">
                    <img src="https://placehold.co/800x600/B9AA99/241f18?text=Deck+repair" alt="Deck repair and staining" class="w-full h-80 object-cover transition-all duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div>
                            <span class="bg-amber-500 text-white text-xs px-3 py-1 rounded-full">Repairs</span>
                            <p class="text-white font-bold text-xl mt-2">Deck board replacement</p>
                            <p class="text-gray-200 text-sm">242nd Place residence</p>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 7 - Carpentry -->
                <div class="gallery-item relative overflow-hidden rounded-3xl shadow-xl group cursor-pointer" data-category="carpentry">
                    <img src="https://placehold.co/800x600/CCC2B3/3f3327?text=Custom+gate" alt="Custom wooden gate" class="w-full h-80 object-cover transition-all duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div>
                            <span class="bg-amber-500 text-white text-xs px-3 py-1 rounded-full">Carpentry</span>
                            <p class="text-white font-bold text-xl mt-2">Garden gate & fencing</p>
                            <p class="text-gray-200 text-sm">Fairwood backyard</p>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 8 - Plumbing -->
                <div class="gallery-item relative overflow-hidden rounded-3xl shadow-xl group cursor-pointer" data-category="plumbing">
                    <img src="https://placehold.co/800x600/E9DFD3/4a3b2c?text=Toilet+repair" alt="Toilet repair and replacement" class="w-full h-80 object-cover transition-all duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div>
                            <span class="bg-amber-500 text-white text-xs px-3 py-1 rounded-full">Plumbing</span>
                            <p class="text-white font-bold text-xl mt-2">Toilet replacement</p>
                            <p class="text-gray-200 text-sm">Auburn bathroom</p>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 9 - Electrical -->
                <div class="gallery-item relative overflow-hidden rounded-3xl shadow-xl group cursor-pointer" data-category="electrical">
                    <img src="https://placehold.co/800x600/CFC5B6/352d22?text=Smart+thermostat" alt="Smart thermostat installation" class="w-full h-80 object-cover transition-all duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div>
                            <span class="bg-amber-500 text-white text-xs px-3 py-1 rounded-full">Electrical</span>
                            <p class="text-white font-bold text-xl mt-2">Nest thermostat setup</p>
                            <p class="text-gray-200 text-sm">Federal Way smart home</p>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 10 - Painting -->
                <div class="gallery-item relative overflow-hidden rounded-3xl shadow-xl group cursor-pointer" data-category="painting">
                    <img src="https://placehold.co/800x600/B9AA99/241f18?text=Kitchen+cabinets" alt="Kitchen cabinet painting" class="w-full h-80 object-cover transition-all duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div>
                            <span class="bg-amber-500 text-white text-xs px-3 py-1 rounded-full">Painting</span>
                            <p class="text-white font-bold text-xl mt-2">Cabinet refinishing</p>
                            <p class="text-gray-200 text-sm">Des Moines kitchen</p>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 11 - Assembly -->
                <div class="gallery-item relative overflow-hidden rounded-3xl shadow-xl group cursor-pointer" data-category="assembly">
                    <img src="https://placehold.co/800x600/CCC2B3/3f3327?text=TV+mounting" alt="TV wall mounting" class="w-full h-80 object-cover transition-all duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div>
                            <span class="bg-amber-500 text-white text-xs px-3 py-1 rounded-full">Assembly</span>
                            <p class="text-white font-bold text-xl mt-2">65" TV mounting</p>
                            <p class="text-gray-200 text-sm">Bldg 8, Apt 203 living room</p>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 12 - Repairs -->
                <div class="gallery-item relative overflow-hidden rounded-3xl shadow-xl group cursor-pointer" data-category="repairs">
                    <img src="https://placehold.co/800x600/E9DFD3/4a3b2c?text=Door+repair" alt="Door hinge repair" class="w-full h-80 object-cover transition-all duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div>
                            <span class="bg-amber-500 text-white text-xs px-3 py-1 rounded-full">Repairs</span>
                            <p class="text-white font-bold text-xl mt-2">Squeaky door fix</p>
                            <p class="text-gray-200 text-sm">Renton Highlands</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== FEATURED PROJECT SPOTLIGHT ===== -->
        <section id="featured" class="max-w-7xl mx-auto px-5 sm:px-8 py-20">
            <div class="text-center max-w-2xl mx-auto">
                <span class="bg-amber-100 text-amber-700 px-4 py-1.5 rounded-full text-sm font-semibold"><i class="fas fa-crown mr-1"></i> Featured project</span>
                <h2 class="text-4xl font-bold mt-4 text-gray-900">Complete Bldg 8, Apt 203 refresh</h2>
            </div>
            <div class="mt-16 bg-white rounded-4xl shadow-2xl overflow-hidden">
                <div class="grid md:grid-cols-2">
                    <div class="p-10 md:p-14">
                        <span class="bg-amber-500 text-white text-sm px-4 py-2 rounded-full">Before & After</span>
                        <h3 class="text-3xl font-bold mt-6 text-gray-900">From tired to transformed</h3>
                        <p class="text-gray-600 text-lg mt-4">We worked with the resident at 6249 S 242nd Place, Bldg 8 Apt 203 to give their home a complete refresh. New lighting, painted walls, custom shelving, and TV mounting – all in one week.</p>
                        <div class="mt-8 space-y-4">
                            <div class="flex items-center gap-3"><i class="fas fa-check-circle text-amber-500 text-xl"></i><span>Recessed LED lighting in living room</span></div>
                            <div class="flex items-center gap-3"><i class="fas fa-check-circle text-amber-500 text-xl"></i><span>Accent wall painting (featured above)</span></div>
                            <div class="flex items-center gap-3"><i class="fas fa-check-circle text-amber-500 text-xl"></i><span>Custom shelving unit for bedroom</span></div>
                            <div class="flex items-center gap-3"><i class="fas fa-check-circle text-amber-500 text-xl"></i><span>65" TV mounting with cable concealment</span></div>
                        </div>
                        <a href="quote.html" class="inline-block mt-8 bg-amber-500 hover:bg-amber-600 text-gray-900 font-bold px-8 py-4 rounded-xl shadow-lg transition-all">Start your project <i class="fas fa-arrow-right ml-2"></i></a>
                    </div>
                    <div class="grid grid-cols-2 gap-2 p-4 bg-gray-50">
                        <img src="https://placehold.co/600x400/CFC5B6/352d22?text=Before+kitchen" alt="Before renovation" class="rounded-2xl shadow-md w-full h-48 object-cover">
                        <img src="https://placehold.co/600x400/B9AA99/241f18?text=After+kitchen" alt="After renovation" class="rounded-2xl shadow-md w-full h-48 object-cover">
                        <img src="https://placehold.co/600x400/CCC2B3/3f3327?text=Before+living" alt="Before living room" class="rounded-2xl shadow-md w-full h-48 object-cover">
                        <img src="https://placehold.co/600x400/E9DFD3/4a3b2c?text=After+living" alt="After living room" class="rounded-2xl shadow-md w-full h-48 object-cover">
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== BEFORE/AFTER STRIP ===== -->
        <section class="max-w-7xl mx-auto px-5 sm:px-8 py-10">
            <div class="bg-amber-50 rounded-4xl p-12 border border-amber-200">
                <h3 class="text-3xl font-bold text-center text-gray-900">Quick transformations</h3>
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-10">
                    <div class="bg-white rounded-2xl shadow-md overflow-hidden">
                        <div class="grid grid-cols-2 h-32">
                            <img src="https://placehold.co/300x300/999/666?text=Before" class="w-full h-full object-cover">
                            <img src="https://placehold.co/300x300/CCC/333?text=After" class="w-full h-full object-cover">
                        </div>
                        <p class="p-3 font-semibold text-center">Fence repair</p>
                    </div>
                    <div class="bg-white rounded-2xl shadow-md overflow-hidden">
                        <div class="grid grid-cols-2 h-32">
                            <img src="https://placehold.co/300x300/999/666?text=Before" class="w-full h-full object-cover">
                            <img src="https://placehold.co/300x300/CCC/333?text=After" class="w-full h-full object-cover">
                        </div>
                        <p class="p-3 font-semibold text-center">Cabinet doors</p>
                    </div>
                    <div class="bg-white rounded-2xl shadow-md overflow-hidden">
                        <div class="grid grid-cols-2 h-32">
                            <img src="https://placehold.co/300x300/999/666?text=Before" class="w-full h-full object-cover">
                            <img src="https://placehold.co/300x300/CCC/333?text=After" class="w-full h-full object-cover">
                        </div>
                        <p class="p-3 font-semibold text-center">Deck staining</p>
                    </div>
                    <div class="bg-white rounded-2xl shadow-md overflow-hidden">
                        <div class="grid grid-cols-2 h-32">
                            <img src="https://placehold.co/300x300/999/666?text=Before" class="w-full h-full object-cover">
                            <img src="https://placehold.co/300x300/CCC/333?text=After" class="w-full h-full object-cover">
                        </div>
                        <p class="p-3 font-semibold text-center">Lighting upgrade</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== INSTAGRAM / SOCIAL FEED ===== -->
        <section class="max-w-7xl mx-auto px-5 sm:px-8 py-20">
            <div class="text-center">
                <i class="fab fa-instagram text-5xl text-amber-500 mb-4"></i>
                <h2 class="text-3xl font-bold text-gray-900">Follow us for daily updates</h2>
                <p class="text-gray-500 mt-2">@GBHandyman – see more work in progress</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-10">
                <img src="https://placehold.co/400x400/CFC5B6/352d22?text=Insta+1" class="rounded-2xl shadow-md w-full h-48 object-cover">
                <img src="https://placehold.co/400x400/B9AA99/241f18?text=Insta+2" class="rounded-2xl shadow-md w-full h-48 object-cover">
                <img src="https://placehold.co/400x400/CCC2B3/3f3327?text=Insta+3" class="rounded-2xl shadow-md w-full h-48 object-cover">
                <img src="https://placehold.co/400x400/E9DFD3/4a3b2c?text=Insta+4" class="rounded-2xl shadow-md w-full h-48 object-cover">
            </div>
        </section>

        <!-- ===== CTA ===== -->
        <section class="bg-gray-900 text-white py-20">
            <div class="max-w-7xl mx-auto px-5 sm:px-8 text-center">
                <i class="fas fa-camera text-6xl text-amber-400 mb-5"></i>
                <h2 class="text-4xl font-bold">Ready to create your own 'after' photo?</h2>
                <p class="text-gray-300 text-xl mt-3 max-w-2xl mx-auto">Let's fix, build, or transform something together.</p>
                <div class="flex flex-wrap justify-center gap-5 mt-10">
                    <a href="quote.html" class="bg-amber-500 hover:bg-amber-600 text-gray-900 font-bold px-10 py-5 rounded-full text-lg shadow-2xl transition-all"><i class="fas fa-calendar-check mr-2"></i> Book online</a>
                    <a href="tel:01612345678" class="bg-transparent border-2 border-white hover:bg-white hover:text-gray-900 text-white font-bold px-10 py-5 rounded-full text-lg transition-all"><i class="fas fa-phone-alt mr-2"></i> 0161 234 5678</a>
                </div>
            </div>
        </section>
    </main>

    <!-- ===== FOOTER ===== -->
    <footer class="bg-gray-900 text-gray-300 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-5 sm:px-8 grid grid-cols-1 md:grid-cols-4 gap-10">
            <div>
                <div class="flex items-center gap-2 text-white">
                    <i class="fas fa-tools text-2xl text-amber-400"></i>
                    <span class="font-bold text-2xl">GB Handyman</span>
                </div>
                <p class="mt-4 text-sm">Reliable, local, and fully insured. We treat your home like our own.</p>
                <div class="flex gap-4 mt-5 text-amber-300 text-xl">
                    <i class="fab fa-facebook"></i> <i class="fab fa-instagram"></i> <i class="fab fa-linkedin"></i>
                </div>
            </div>
            <div>
                <h4 class="text-white font-semibold text-lg">Quick links</h4>
                <ul class="mt-4 space-y-2 text-sm">
                    <li><a href="services.html" class="hover:text-amber-300">Services</a></li>
                    <li><a href="about.html" class="hover:text-amber-300">About us</a></li>
                    <li><a href="reviews.html" class="hover:text-amber-300">Reviews</a></li>
                    <li><a href="gallery.html" class="hover:text-amber-300">Gallery</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-semibold text-lg">Contact</h4>
                <ul class="mt-4 space-y-2 text-sm">
                    <li><i class="fas fa-phone-alt mr-2 text-amber-400"></i> 0161 234 5678</li>
                    <li><i class="fas fa-envelope mr-2 text-amber-400"></i> hello@gbhandyman.co.uk</li>
                    <li><i class="fas fa-map-pin mr-2 text-amber-400"></i> Serving 242nd Place & beyond</li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-semibold text-lg">Hours</h4>
                <ul class="mt-4 space-y-2 text-sm">
                    <li>Mon-Fri: 8am – 8pm</li>
                    <li>Sat: 9am – 5pm</li>
                    <li>Sun: emergency only</li>
                </ul>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-5 border-t border-gray-800 mt-12 pt-6 text-sm text-center text-gray-500">
            © 2025 GB Handyman. All rights reserved. • Gallery highlights from 6249 S 242nd Place, Bldg 8 Apt 203 and surrounding areas
        </div>
    </footer>
    <!-- floating chat icon -->
    <div class="fixed bottom-6 right-6 bg-amber-500 text-white p-4 rounded-full shadow-2xl cursor-pointer hover:bg-amber-600 transition-all">
        <i class="fas fa-message text-xl"></i>
    </div>

    <!-- simple filter script (demo/interactive) -->
