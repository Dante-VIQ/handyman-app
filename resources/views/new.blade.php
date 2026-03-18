<!-- ===== HERO ===== -->
<section class="max-w-7xl mx-auto px-5 sm:px-8 pt-6 pb-4 md:pt-14 md:pb-14 grid md:grid-cols-2 gap-12 items-center">
    <div>
        <span
            class="bg-amber-100 text-amber-800 text-sm font-semibold px-4 py-1.5 rounded-full inline-flex items-center gap-1"><i
                class="fas fa-star text-amber-500 text-xs"></i> Remote • same‑day service</span>
        <h1 class="text-4xl sm:text-5xl font-extrabold text-gray-900 leading-tight mt-6">Skilled hands,
            <br><span class="text-amber-600">honest work</span> — for your home
        </h1>
        <p class="text-lg text-gray-600 mt-4 max-w-lg">GB Handyman brings years of experience, a toolbox full of
            solutions, and a smile. From leaky faucets to full room renovations — we fix it right.</p>
        <div class="flex flex-wrap gap-4 mt-8">
            <!-- Large Primary Button -->
            <a href="#contact"
                class="bg-gradient-to-r from-red-400 to-red-600 hover:from-amber-600 hover:to-amber-700 text-white font-semibold py-3 px-6 rounded-xl shadow-lg shadow-amber-200/50 transition-all duration-300 ring-2 ring-amber-300/50 ring-offset-2 ring-offset-white hover:ring-amber-400 hover:shadow-xl transform hover:scale-[1.02]">
                <i class="fas fa-calendar-check mr-2"></i> Book Online
            </a>
            <a href="tel:+12024601753"
                class="bg-white hover:bg-gray-50 text-gray-700 font-semibold py-2.5 px-5 rounded-lg shadow-sm shadow-gray-200/60 transition-all duration-300 ring-2 ring-red-300/60 ring-offset-2 ring-offset-white hover:ring-amber-400 border border-gray-200"><i
                    class="fas fa-phone-alt text-red-500"></i> Call Now</a>
        </div>
        <div class="flex items-center gap-5 mt-8 text-sm text-gray-500">
            <span><i class="far fa-clock text-amber-500"></i> 24/7 emergency</span>
            <span><i class="fas fa-check-circle text-amber-500"></i> insured & bonded</span>
            <span><i class="fas fa-pound-sign text-amber-500"></i> free estimates</span>
        </div>
    </div>
    <livewire:image-card />
</section>

<!-- ===== TRUST BAR ===== -->
<div class="bg-white border-y border-gray-200 py-5">
    <div
        class="max-w-7xl mx-auto px-5 flex flex-wrap justify-center items-center gap-8 md:gap-16 text-gray-500 text-sm font-medium">
        <span class="flex items-center gap-1"><i class="fas fa-check-circle text-amber-400"></i> 24h
            response</span>
        <span class="flex items-center gap-1"><i class="fas fa-tools text-amber-400"></i> 15+ trade
            skills</span>
        <span class="flex items-center gap-1"><i class="fas fa-warranty text-amber-400"></i> 1‑year
            guarantee</span>
        <span class="flex items-center gap-1"><i class="fas fa-coins text-amber-400"></i> fair & fixed
            prices</span>
        <span class="flex items-center gap-1"><i class="fas fa-broom text-amber-400"></i> always tidy</span>
    </div>
</div>

<!-- ===== SERVICES section ===== -->
<section id="services" class="max-w-7xl mx-auto px-5 sm:px-8 py-5">
    <div class="text-center max-w-2xl mx-auto">
        <span class="bg-amber-100 text-amber-700 px-4 py-1.5 rounded-full text-sm font-semibold"><i
                class="fas fa-toolbox mr-1"></i> what we do</span>
        <h2 class="text-4xl font-bold mt-4 text-gray-900">Professional handyman services – no job too small</h2>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-16">
        <!-- service card 1 - General repairs -->
        <div
            class="service-card relative overflow-hidden rounded-3xl shadow-lg transition-all hover:shadow-xl hover:-translate-y-1 group">
            <!-- Background Image with Dark Overlay -->
            <div class="absolute inset-0 z-0">
                <img src="https://images.unsplash.com/photo-1600607686527-6fb886090705?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    alt="Door repair" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-br from-gray-900/40 via-gray-900/30 to-gray-900/40"></div>
            </div>
            <!-- Content -->
            <div class="relative z-10 p-7">
                <div
                    class="bg-amber-100/90 backdrop-blur-sm w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5 shadow-md">
                    <i class="fas fa-door-open"></i>
                </div>
                <h3 class="text-xl font-bold mb-2 text-white">General repairs</h3>
                <p class="text-gray-100/90">Squeaky doors, broken hinges, drywall patches, furniture assembly – we
                    tackle the list.</p>
                {{-- <span
                    class="inline-block mt-4 bg-amber-500/90 backdrop-blur-sm text-white px-4 py-1.5 rounded-full font-semibold text-sm">from
                    £45</span> --}}
            </div>
        </div>

        <!-- service card 2 - Plumbing & leaks -->
        <div
            class="service-card relative overflow-hidden rounded-3xl shadow-lg transition-all hover:shadow-xl hover:-translate-y-1 group">
            <!-- Background Image with Dark Overlay -->
            <div class="absolute inset-0 z-0">
                <img src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    alt="Plumbing work" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-br from-gray-900/40 via-gray-900/30 to-gray-900/40"></div>
            </div>
            <!-- Content -->
            <div class="relative z-10 p-7">
                <div
                    class="bg-amber-100/90 backdrop-blur-sm w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5 shadow-md">
                    <i class="fas fa-shower"></i>
                </div>
                <h3 class="text-xl font-bold mb-2 text-white">Plumbing & leaks</h3>
                <p class="text-gray-100/90">Dripping taps, clogged drains, toilet repairs, and washing machine
                    installation.</p>
                {{-- <span
                    class="inline-block mt-4 bg-amber-500/90 backdrop-blur-sm text-white px-4 py-1.5 rounded-full font-semibold text-sm">from
                    £65</span> --}}
            </div>
        </div>

        <!-- service card 3 - Electrical basics -->
        <div
            class="service-card relative overflow-hidden rounded-3xl shadow-lg transition-all hover:shadow-xl hover:-translate-y-1 group">
            <!-- Background Image with Dark Overlay -->
            <div class="absolute inset-0 z-0">
                <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    alt="Electrical work" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-br from-gray-900/40 via-gray-900/30 to-gray-900/40"></div>
            </div>
            <!-- Content -->
            <div class="relative z-10 p-7">
                <div
                    class="bg-amber-100/90 backdrop-blur-sm w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5 shadow-md">
                    <i class="fas fa-bolt"></i>
                </div>
                <h3 class="text-xl font-bold mb-2 text-white">Electrical basics</h3>
                <p class="text-gray-100/90">Light fittings, socket changes, fuse board trips, and smart home installs
                    (certified).</p>
                {{-- <span
                    class="inline-block mt-4 bg-amber-500/90 backdrop-blur-sm text-white px-4 py-1.5 rounded-full font-semibold text-sm">from
                    £55</span> --}}
            </div>
        </div>

        <!-- service card 4 - Painting & decorating -->
        <div
            class="service-card relative overflow-hidden rounded-3xl shadow-lg transition-all hover:shadow-xl hover:-translate-y-1 group">
            <!-- Background Image with Dark Overlay -->
            <div class="absolute inset-0 z-0">
                <img src="https://images.unsplash.com/photo-1562259929-b4ec1b4f2eef?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    alt="Painting work" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-br from-gray-900/40 via-gray-900/30 to-gray-900/40"></div>
            </div>
            <!-- Content -->
            <div class="relative z-10 p-7">
                <div
                    class="bg-amber-100/90 backdrop-blur-sm w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5 shadow-md">
                    <i class="fas fa-paint-roller"></i>
                </div>
                <h3 class="text-xl font-bold mb-2 text-white">Painting & decorating</h3>
                <p class="text-gray-100/90">Interior painting, wallpaper removal, touch‑ups – crisp finishes guaranteed.
                </p>
                {{-- <span
                    class="inline-block mt-4 bg-amber-500/90 backdrop-blur-sm text-white px-4 py-1.5 rounded-full font-semibold text-sm">from
                    £75</span> --}}
            </div>
        </div>

        <!-- service card 5 - Carpentry & shelving -->
        <div
            class="service-card relative overflow-hidden rounded-3xl shadow-lg transition-all hover:shadow-xl hover:-translate-y-1 group">
            <!-- Background Image with Dark Overlay -->
            <div class="absolute inset-0 z-0">
                <img src="https://images.unsplash.com/photo-1611486212557-88be5ff6f941?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    alt="Carpentry work" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-br from-gray-900/40 via-gray-900/20 to-gray-900/40"></div>
            </div>
            <!-- Content -->
            <div class="relative z-10 p-7">
                <div
                    class="bg-amber-100/90 backdrop-blur-sm w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5 shadow-md">
                    <i class="fas fa-wood"></i>
                </div>
                <h3 class="text-xl font-bold mb-2 text-white">Carpentry & shelving</h3>
                <p class="text-gray-100/90">Fitted shelves, skirting boards, door hanging, garden deck repairs.</p>
                {{-- <span
                    class="inline-block mt-4 bg-amber-500/90 backdrop-blur-sm text-white px-4 py-1.5 rounded-full font-semibold text-sm">from
                    £60</span> --}}
            </div>
        </div>

        <!-- service card 6 - TV & wall mounting -->
        <div
            class="service-card relative overflow-hidden rounded-3xl shadow-lg transition-all hover:shadow-xl hover:-translate-y-1 group">
            <!-- Background Image with Dark Overlay -->
            <div class="absolute inset-0 z-0">
                <img src="https://images.unsplash.com/photo-1593784991095-a205069470b6?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    alt="TV mounting" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-br from-gray-900/40 via-gray-900/20 to-gray-900/40"></div>
            </div>
            <!-- Content -->
            <div class="relative z-10 p-7">
                <div
                    class="bg-amber-100/90 backdrop-blur-sm w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-700 mb-5 shadow-md">
                    <i class="fas fa-tv"></i>
                </div>
                <h3 class="text-xl font-bold mb-2 text-white">TV & wall mounting</h3>
                <p class="text-gray-100/90">Secure, level mounting of TVs, shelves, mirrors, and artwork – no drama.
                </p>
                {{-- <span
                    class="inline-block mt-4 bg-amber-500/90 backdrop-blur-sm text-white px-4 py-1.5 rounded-full font-semibold text-sm">from
                    £45</span> --}}
            </div>
        </div>
    </div>
    <div class="text-center mt-12">
        <a href="#contact"
            class="inline-flex items-center gap-2 bg-white border-2 border-red-400 text-gray-800 hover:bg-amber-50 px-8 py-4 rounded-full font-semibold transition-all"><span>Need
                something else? Ask us</span> <i class="fas fa-arrow-right"></i></a>
    </div>
</section>

<!-- ===== ABOUT / WHY US ===== -->
<section id="about" class="bg-white py-4">
    <div class="max-w-7xl mx-auto px-5 sm:px-8 grid md:grid-cols-2 gap-14 items-center">
        <div>
            <span class="bg-amber-100 text-amber-700 px-4 py-1.5 rounded-full text-sm font-semibold"><i
                    class="fas fa-medal mr-1"></i> about GB Handyman</span>
            <h2 class="text-4xl font-bold mt-4 text-gray-900">Third‑generation craft, modern convenience</h2>
            <p class="text-gray-600 text-lg mt-4">Founded in Manchester by Grace Baxter, GB Handyman combines
                old‑school quality with the ease of online booking. We’re a small, reliable team that actually
                shows up – and cleans up.</p>
            <div class="mt-8 space-y-5">
                <div class="flex gap-4"><span
                        class="bg-amber-100 w-8 h-8 rounded-full flex items-center justify-center text-amber-700 shrink-0 mt-1"><i
                            class="fas fa-user-tie text-sm"></i></span>
                    <div>
                        <h4 class="font-bold">Fully vetted & insured</h4>
                        <p class="text-gray-500">All work covered by £5M public liability insurance.</p>
                    </div>
                </div>
                <div class="flex gap-4"><span
                        class="bg-amber-100 w-8 h-8 rounded-full flex items-center justify-center text-amber-700 shrink-0 mt-1"><i
                            class="fas fa-mobile-alt"></i></span>
                    <div>
                        <h4 class="font-bold">Instant digital quote</h4>
                        <p class="text-gray-500">Snap a photo, get a fixed price – no hidden fees.</p>
                    </div>
                </div>
                <div class="flex gap-4"><span
                        class="bg-amber-100 w-8 h-8 rounded-full flex items-center justify-center text-amber-700 shrink-0 mt-1"><i
                            class="fas fa-leaf"></i></span>
                    <div>
                        <h4 class="font-bold">Eco‑conscious</h4>
                        <p class="text-gray-500">We recycle materials and use low‑VOC paints.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <img src="/images/paint.jpg" class="rounded-2xl shadow-xl row-span-2 object-cover h-[50vh] w-full mx-auto mt-8"
                alt="handyman at work">
            <img src="/images/clean.jpg" class="rounded-2xl shadow-lg object-cover w-full h-48" alt="tools">
            <img src="/images/capenter.jpg" class="rounded-2xl shadow-lg object-cover w-full h-48" alt="customer">
        </div>
    </div>
</section>

<!-- ===== OUR TEAM SECTION (Simpler) ===== -->
<section class="py-16 bg-gradient-to-br from-blue-50 via-teal-50 to-green-50">
    <div class="max-w-7xl mx-auto px-5 sm:px-8">
        <div class="text-center max-w-3xl mx-auto mb-10">
            <span class="inline-block bg-amber-100 text-amber-700 px-4 py-1.5 rounded-full text-sm font-semibold mb-4">
                <i class="fas fa-user mr-2"></i> Meet Your Handyman
            </span>
            <h2 class="text-4xl font-bold text-gray-900 mb-3">
                One Expert, <span class="text-amber-600">Endless Solutions</span>
            </h2>
        </div>

        <div class="flex justify-center">
            <div class="max-w-2xl w-full bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100">
                <div class="md:flex">
                    <!-- Image Side -->
                    <div class="md:w-2/5 h-64 md:h-auto bg-amber-100 relative">
                        <img src="/images/glen.jpg"
                             alt="Michael Chen - GB Handyman"
                             class="w-full h-full object-cover object-center">
                    </div>

                    <!-- Content Side -->
                    <div class="md:w-3/5 p-8">
                        <div class="inline-block bg-amber-500 text-white px-3 py-1 rounded-full text-xs font-semibold mb-3">
                            FOUNDER & OPERATOR
                        </div>

                        <h3 class="text-3xl font-bold text-gray-800 mb-1">Gerald Benjamin</h3>
                        <p class="text-amber-600 font-medium mb-4">Master Handyman</p>

                        <p class="text-gray-600 mb-4">
                            With 5+ years of experience, Michael handles everything from plumbing to carpentry with precision and care.
                        </p>

                        <div class="flex items-center gap-4 mb-4">
                            <div class="flex items-center gap-1">
                                <i class="fas fa-star text-amber-400"></i>
                                <span class="font-bold">5.0</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i class="fas fa-toolbox text-amber-400"></i>
                                <span class="font-bold">500+ jobs</span>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-amber-50 text-amber-700 px-3 py-1 rounded-full text-xs font-medium">🔧 Repairs</span>
                            <span class="bg-amber-50 text-amber-700 px-3 py-1 rounded-full text-xs font-medium">🚿 Plumbing</span>
                            <span class="bg-amber-50 text-amber-700 px-3 py-1 rounded-full text-xs font-medium">⚡ Electrical</span>
                            <span class="bg-amber-50 text-amber-700 px-3 py-1 rounded-full text-xs font-medium">🪵 Carpentry</span>
                        </div>

                        <a href="/contact" class="inline-flex items-center gap-2 text-amber-600 font-semibold hover:text-amber-700">
                            Book a service <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== QUOTE / CONTACT area (hybrid) ===== -->
<section id="quote" class="bg-gradient-to-br from-amber-50 to-white py-8 border-y border-amber-200">
    <div class="max-w-7xl mx-auto px-5 sm:px-8 grid md:grid-cols-2 gap-12 items-center">
        <div>
            <span class="bg-white text-amber-700 px-5 py-2 rounded-full text-sm font-semibold shadow-sm"><i
                    class="fas fa-envelope mr-1"></i> instant quote</span>
            <h2 class="text-4xl font-bold mt-5 text-gray-900">Tell us what’s broken – we’ll sort it</h2>
            <p class="text-gray-600 text-lg mt-3">Free, no‑obligation estimate. Usually respond within 1 hour.
            </p>
            <div class="flex items-center gap-6 mt-8">
                <div class="flex gap-3 text-2xl text-gray-600"><i class="fab fa-whatsapp text-green-600"></i><i
                        class="fab fa-facebook-messenger text-blue-600"></i><i
                        class="fas fa-camera-retro text-amber-600"></i></div>
                <span class="text-gray-400">|</span>
                <span class="text-gray-500 font-medium"><i class="fas fa-phone-alt mr-1 text-amber-500"></i>
                    +1 (202) 460 1753</span>
            </div>
        </div>
        <div id="contact" class="bg-white p-8 rounded-3xl shadow-2xl">
            <h3 class="text-2xl font-bold mb-4">Request a callback</h3>
            <form class="space-y-5">
                <div><input type="text" placeholder="Your name *"
                        class="w-full border border-gray-200 rounded-xl p-4 focus:outline-amber-400"></div>
                <div><input type="tel" placeholder="Phone number *"
                        class="w-full border border-gray-200 rounded-xl p-4 focus:outline-amber-400"></div>
                <div>
                    <textarea rows="3" placeholder="What needs fixing?"
                        class="w-full border border-gray-200 rounded-xl p-4 focus:outline-amber-400"></textarea>
                </div>
                <button
                    class="bg-red-500 hover:bg-amber-600 w-full text-white font-bold py-4 rounded-xl shadow-lg text-lg transition-all">Get
                    free estimate <i class="fas fa-paper-plane ml-2"></i></button>
                <p class="text-xs text-gray-400 text-center">We'll text or call back – no spam</p>
            </form>
        </div>
    </div>
</section>

@include('components.partials.map')
<!-- ===== FOOTER ===== -->
