<main>
    <!-- ===== GALLERY HERO ===== -->
    <section class="relative bg-gradient-to-br from-amber-50 via-white to-amber-50/30 py-8 md:py-10 overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <i class="fas fa-camera-retro absolute text-9xl text-amber-300 -rotate-12 -top-6 left-10"></i>
            <i class="fas fa-image absolute text-8xl text-amber-300 rotate-45 bottom-0 right-10"></i>
        </div>
        <div class="max-w-7xl mx-auto px-5 sm:px-8 relative z-10">
            <div class="max-w-3xl">
                <span
                    class="bg-amber-200 text-amber-800 px-4 py-1.5 rounded-full text-sm font-semibold inline-flex items-center gap-1"><i
                        class="fas fa-camera"></i> Our portfolio</span>
                <h1 class="text-5xl md:text-6xl font-black text-gray-900 mt-6 leading-tight">See the <span
                        class="text-amber-600">difference</span> we make</h1>
                <p class="text-xl text-gray-600 mt-6 max-w-2xl">From small repairs to full transformations – browse
                    photos of our recent work around your neighbourhood.</p>
                <div class="flex flex-wrap gap-4 mt-10">
                    <a href="#gallery-grid"
                        class="bg-gradient-to-r from-red-500 to-red-600 hover:from-amber-600 hover:to-amber-700 text-white font-semibold py-3 px-6 rounded-xl shadow-lg shadow-amber-200/50 transition-all duration-300 ring-2 ring-amber-300/50 ring-offset-2 ring-offset-white hover:ring-amber-400 hover:shadow-xl transform hover:scale-[1.02]"><i
                            class="fas fa-images"></i> View gallery</a>
                    <a href="#featured"
                        class="bg-white border-2 border-red-400 hover:bg-amber-50 text-gray-700 px-8 py-4 rounded-xl font-bold flex items-center gap-2 transition-all"><i
                            class="fas fa-star text-amber-500"></i> Featured projects</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FILTER BUTTONS (interactive style) ===== -->
    <section class="max-w-7xl mx-auto px-5 sm:px-8 pt-8 pb-4">
        <div class="flex flex-wrap justify-center gap-3">
            <button
                class="filter-btn active bg-red-500 text-white px-6 py-3 rounded-full font-semibold shadow-md hover:bg-amber-600 transition-all border-2 border-amber-500">All</button>
            <button
                class="filter-btn bg-white text-gray-700 px-6 py-3 rounded-full font-semibold shadow-md hover:bg-amber-100 transition-all border-2 border-gray-200">Repairs</button>
            <button
                class="filter-btn bg-white text-gray-700 px-6 py-3 rounded-full font-semibold shadow-md hover:bg-amber-100 transition-all border-2 border-gray-200">Plumbing</button>
            <button
                class="filter-btn bg-white text-gray-700 px-6 py-3 rounded-full font-semibold shadow-md hover:bg-amber-100 transition-all border-2 border-gray-200">Electrical</button>
            <button
                class="filter-btn bg-white text-gray-700 px-6 py-3 rounded-full font-semibold shadow-md hover:bg-amber-100 transition-all border-2 border-gray-200">Carpentry</button>
            <button
                class="filter-btn bg-white text-gray-700 px-6 py-3 rounded-full font-semibold shadow-md hover:bg-amber-100 transition-all border-2 border-gray-200">Painting</button>
            <button
                class="filter-btn bg-white text-gray-700 px-6 py-3 rounded-full font-semibold shadow-md hover:bg-amber-100 transition-all border-2 border-gray-200">Assembly</button>
        </div>
    </section>

    <!-- ===== GALLERY GRID ===== -->
    <section id="gallery-grid" class="max-w-7xl mx-auto px-5 sm:px-8 py-8">
        <livewire:photo-card />
    </section>

    <!-- ===== FEATURED PROJECT SPOTLIGHT ===== -->
    <section id="featured" class="max-w-7xl mx-auto px-5 sm:px-8 py-8">
        <div class="text-center max-w-2xl mx-auto">
            <span class="bg-amber-100 text-amber-700 px-4 py-1.5 rounded-full text-sm font-semibold"><i
                    class="fas fa-crown mr-1"></i> Featured project</span>
            <h2 class="text-4xl font-bold mt-4 text-gray-900">Complete Bldg 8, Apt 203 refresh</h2>
        </div>
        <div class="mt-16 bg-white rounded-4xl shadow-2xl overflow-hidden">
            <div class="grid md:grid-cols-2">
                <div class="p-10 md:p-14">
                    <span class="bg-amber-500 text-white text-sm px-4 py-2 rounded-full">Before & After</span>
                    <h3 class="text-3xl font-bold mt-6 text-gray-900">From tired to transformed</h3>
                    <p class="text-gray-600 text-lg mt-4">We worked with the resident at 6249 S 242nd Place, Bldg 8 Apt
                        203 to give their home a complete refresh. New lighting, painted walls, custom shelving, and TV
                        mounting – all in one week.</p>
                    <div class="mt-8 space-y-4">
                        <div class="flex items-center gap-3"><i
                                class="fas fa-check-circle text-amber-500 text-xl"></i><span>Recessed LED lighting in
                                living room</span></div>
                        <div class="flex items-center gap-3"><i
                                class="fas fa-check-circle text-amber-500 text-xl"></i><span>Accent wall painting
                                (featured above)</span></div>
                        <div class="flex items-center gap-3"><i
                                class="fas fa-check-circle text-amber-500 text-xl"></i><span>Custom shelving unit for
                                bedroom</span></div>
                        <div class="flex items-center gap-3"><i
                                class="fas fa-check-circle text-amber-500 text-xl"></i><span>65" TV mounting with cable
                                concealment</span></div>
                    </div>
                    <a href="quote.html"
                        class="inline-block mt-8 bg-red-500 hover:bg-amber-600 text-gray-900 font-bold px-8 py-4 rounded-xl shadow-lg transition-all">Start
                        your project <i class="fas fa-arrow-right ml-2"></i></a>
                </div>
                <livewire:gallery-card />
            </div>
    </section>

    {{-- <!-- ===== BEFORE/AFTER STRIP ===== -->
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
            <img src="https://placehold.co/400x400/CFC5B6/352d22?text=Insta+1"
                class="rounded-2xl shadow-md w-full h-48 object-cover">
            <img src="https://placehold.co/400x400/B9AA99/241f18?text=Insta+2"
                class="rounded-2xl shadow-md w-full h-48 object-cover">
            <img src="https://placehold.co/400x400/CCC2B3/3f3327?text=Insta+3"
                class="rounded-2xl shadow-md w-full h-48 object-cover">
            <img src="https://placehold.co/400x400/E9DFD3/4a3b2c?text=Insta+4"
                class="rounded-2xl shadow-md w-full h-48 object-cover">
        </div>
    </section> --}}

    <!-- ===== CTA ===== -->
    <section class="bg-gray-900 text-white py-8">
        <div class="max-w-7xl mx-auto px-5 sm:px-8 text-center">
            <i class="fas fa-camera text-6xl text-amber-400 mb-5"></i>
            <h2 class="text-4xl font-bold">Ready to create your own 'after' photo?</h2>
            <p class="text-gray-300 text-xl mt-3 max-w-2xl mx-auto">Let's fix, build, or transform something together.
            </p>
            <div class="flex flex-wrap justify-center gap-5 mt-10">
                <a href="/contact"
                    class="bg-red-500 hover:bg-amber-600 text-gray-900 font-bold px-10 py-5 rounded-full text-lg shadow-2xl transition-all"><i
                        class="fas fa-calendar-check mr-2"></i> Book online</a>
                <a href="tel:+12024601753"
                    class="bg-transparent border-2 border-red hover:bg-white hover:text-gray-900 text-white font-bold px-10 py-5 rounded-full text-lg transition-all"><i
                        class="fas fa-phone-alt mr-2"></i> +1 (202) 460 1753</a>
            </div>
        </div>
    </section>
</main>


<!-- floating chat icon -->
<!-- Floating WhatsApp Icon - Links to WhatsApp -->
<a href="https://wa.me/+12024601753" target="_blank" rel="noopener noreferrer"
    class="fixed bottom-6 right-6 bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-2xl cursor-pointer transition-all duration-300 hover:scale-110 z-50 flex items-center justify-center w-16 h-16 shadow-green-200/50">
    <i class="fab fa-phone text-3xl"></i>
</a>

<!-- simple filter script (demo/interactive) -->
