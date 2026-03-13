@props(['images' => []])

@php
    $slideCount = is_countable($images) ? count($images) : 0;
    if ($slideCount === 0) {
        $slideCount = 3; // Default to 3 slides for empty state
    }
    $slideWidth = 100 / $slideCount;
@endphp

<div class="relative w-full h-[400px] md:h-[85vh] min-h-[500px] overflow-hidden bg-[#0b2c3d]"
     x-data="{
        currentSlide: 0,
        totalSlides: {{ $slideCount }},
        init() {
            // Ensure currentSlide is valid
            if (this.currentSlide >= this.totalSlides) {
                this.currentSlide = 0;
            }
            // Auto advance slides
            if (this.totalSlides > 1) {
                setInterval(() => {
                    this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
                }, 5000);
            }
        }
     }">

    <!-- Slides container -->
    <div class="flex h-full transition-transform duration-700 ease-in-out"
         :style="'transform: translateX(-' + (currentSlide * 100 / totalSlides) + '%); width: ' + (totalSlides * 100) + '%'">

        @forelse($images as $image)
            <!-- Dynamic slide -->
            <div class="relative h-full slide-bg flex-shrink-0"
                 style="background-image: url({{ asset($image->photo) }}); background-size: cover; background-position: center; background-repeat: no-repeat; width: {{ 100 / $slideCount }}%;">
                <div class="absolute inset-0 slide-overlay"></div>
                <div class="relative z-10 flex items-center h-full text-white max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="w-full max-w-3xl bg-white/10 backdrop-blur-sm p-6 sm:p-8 lg:p-10 rounded-2xl border-l-8 border-yellow-400">
                        @if (isset($image->caption) || isset($image->title) || isset($image->description))
                            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                                {{ $image->caption ?? ($image->title ?? 'Quality Handyman Services') }}
                            </h1>
                            @if(isset($image->description))
                                <p class="text-lg sm:text-xl md:text-2xl mt-4 opacity-90">{{ $image->description }}</p>
                            @endif
                        @else
                            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                                Professional Handyman Services
                            </h1>
                            <p class="text-lg sm:text-xl md:text-2xl mt-4 opacity-90">Reliable, skilled, and trusted</p>
                        @endif

                        <div class="flex flex-wrap gap-4 mt-6 sm:mt-8 lg:mt-10">
                            <a href="/services"
                                class="inline-block bg-yellow-400 text-[#1e3b2c] px-6 sm:px-8 py-3 sm:py-4 rounded-full font-bold text-sm sm:text-base lg:text-lg hover:bg-white hover:text-[#1e4a6f] transition shadow-lg whitespace-nowrap">
                                Explore services
                            </a>
                            <a href="tel:+12024601753"
                                class="inline-block bg-transparent border-2 border-white text-white px-6 sm:px-8 py-3 sm:py-4 rounded-full font-bold text-sm sm:text-base lg:text-lg hover:bg-white/20 transition shadow-lg whitespace-nowrap">
                                Call now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        @empty
            <!-- Default slide 1 -->
            <div class="relative h-full slide-bg flex-shrink-0"
                 style="background-image: url('https://images.unsplash.com/photo-1581578731548-c64695cc6952?q=80&w=2070&auto=format&fit=crop'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 33.333%;">
                <div class="absolute inset-0 slide-overlay"></div>
                <div class="relative z-10 flex items-center h-full text-white max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="w-full max-w-3xl bg-white/10 backdrop-blur-sm p-6 sm:p-8 lg:p-10 rounded-2xl border-l-8 border-yellow-400">
                        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">Skilled fixes. Fair prices.</h1>
                        <p class="text-lg sm:text-xl md:text-2xl mt-4"><i class="fas fa-check-circle text-yellow-400 mr-2"></i>Plumbing · Electrical · Carpentry · Assembly</p>
                        <div class="flex flex-wrap gap-4 mt-6 sm:mt-8 lg:mt-10">
                            <a href="/services"
                                class="inline-block bg-yellow-400 text-[#1e3b2c] px-6 sm:px-8 py-3 sm:py-4 rounded-full font-bold text-sm sm:text-base lg:text-lg hover:bg-white hover:text-[#1e4a6f] transition shadow-lg">
                                Explore services
                            </a>
                            <a href="/contact"
                                class="inline-block bg-transparent border-2 border-white text-white px-6 sm:px-8 py-3 sm:py-4 rounded-full font-bold text-sm sm:text-base lg:text-lg hover:bg-white/20 transition shadow-lg">
                                Call now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Default slide 2 -->
            <div class="relative h-full slide-bg flex-shrink-0"
                 style="background-image: url('https://images.unsplash.com/photo-1621905251189-08b45d6a269e?q=80&w=2069&auto=format&fit=crop'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 33.333%;">
                <div class="absolute inset-0 slide-overlay"></div>
                <div class="relative z-10 flex items-center h-full text-white max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="w-full max-w-3xl bg-white/10 backdrop-blur-sm p-6 sm:p-8 lg:p-10 rounded-2xl border-l-8 border-yellow-400">
                        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">Emergency? 24/7 support</h1>
                        <p class="text-lg sm:text-xl md:text-2xl mt-4"><i class="fas fa-tint text-blue-300 mr-2"></i>Leak repairs, piping, fixtures – we're there</p>
                        <div class="flex flex-wrap gap-4 mt-6 sm:mt-8 lg:mt-10">
                            <a href="/services"
                                class="inline-block bg-yellow-400 text-[#1e3b2c] px-6 sm:px-8 py-3 sm:py-4 rounded-full font-bold text-sm sm:text-base lg:text-lg hover:bg-white transition shadow-lg">
                                24/7 service
                            </a>
                            <a href="/contact"
                                class="inline-block bg-transparent border-2 border-white text-white px-6 sm:px-8 py-3 sm:py-4 rounded-full font-bold text-sm sm:text-base lg:text-lg hover:bg-white/20 transition shadow-lg">
                                (555) 123-4567
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Default slide 3 -->
            <div class="relative h-full slide-bg flex-shrink-0"
                 style="background-image: url('https://images.unsplash.com/photo-1558901346-de6a89b8aabf?q=80&w=2066&auto=format&fit=crop'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 33.333%;">
                <div class="absolute inset-0 slide-overlay"></div>
                <div class="relative z-10 flex items-center h-full text-white max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="w-full max-w-3xl bg-white/10 backdrop-blur-sm p-6 sm:p-8 lg:p-10 rounded-2xl border-l-8 border-yellow-400">
                        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">Quality craftsmanship</h1>
                        <p class="text-lg sm:text-xl md:text-2xl mt-4"><i class="fas fa-paint-roller text-[#2e6b4e] mr-2"></i>Renovations, drywall, painting & decks</p>
                        <div class="flex flex-wrap gap-4 mt-6 sm:mt-8 lg:mt-10">
                            <a href="/about"
                                class="inline-block bg-yellow-400 text-[#1e3b2c] px-6 sm:px-8 py-3 sm:py-4 rounded-full font-bold text-sm sm:text-base lg:text-lg hover:bg-white transition shadow-lg">
                                Our promise
                            </a>
                            <a href="/contact"
                                class="inline-block bg-transparent border-2 border-white text-white px-6 sm:px-8 py-3 sm:py-4 rounded-full font-bold text-sm sm:text-base lg:text-lg hover:bg-white/20 transition shadow-lg">
                                Free quote
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforelse
    </div>

    <!-- Slide indicators -->
    {{-- @if($slideCount > 1)
    <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 z-20 flex gap-2">
        @for($i = 0; $i < $slideCount; $i++)
            <button
                class="w-2.5 h-2.5 rounded-full transition-all duration-300 hover:scale-125"
                :class="{
                    'bg-yellow-400 w-8': currentSlide === {{ $i }},
                    'bg-white/50 hover:bg-yellow-400/70': currentSlide !== {{ $i }}
                }"
                @click="currentSlide = {{ $i }}"
                type="button"
                aria-label="Go to slide {{ $i + 1 }}">
            </button>
        @endfor
    </div>
    @endif --}}

    <!-- Navigation arrows -->
    @if($slideCount > 1)
    <button
        class="absolute left-4 top-1/2 transform -translate-y-1/2 z-20 bg-black/30 hover:bg-black/50 text-white w-10 h-10 rounded-full flex items-center justify-center transition"
        @click="currentSlide = (currentSlide - 1 + totalSlides) % totalSlides"
        type="button"
        aria-label="Previous slide">
        <i class="fas fa-chevron-left"></i>
    </button>
    <button
        class="absolute right-4 top-1/2 transform -translate-y-1/2 z-20 bg-black/30 hover:bg-black/50 text-white w-10 h-10 rounded-full flex items-center justify-center transition"
        @click="currentSlide = (currentSlide + 1) % totalSlides"
        type="button"
        aria-label="Next slide">
        <i class="fas fa-chevron-right"></i>
    </button>
    @endif
</div>

<style>
/* Overlay gradient */
.slide-overlay {
    background: linear-gradient(90deg, rgba(30,74,111,0.85) 0%, rgba(46,107,78,0.5) 70%);
}

/* Ensure images cover properly on all devices */
.slide-bg {
    background-size: cover !important;
    background-position: center !important;
    background-repeat: no-repeat !important;
}

/* Mobile-specific adjustments */
@media (max-width: 768px) {
    .slide-overlay {
        background: linear-gradient(90deg, rgba(30,74,111,0.9) 0%, rgba(46,107,78,0.6) 100%);
    }

    .slide-bg {
        background-position: 70% center !important;
    }
}
</style>

<!-- Include Alpine.js for interactive functionality -->
<script src="//unpkg.com/alpinejs" defer></script>
