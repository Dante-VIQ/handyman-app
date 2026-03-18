@props(['images' => []])

@php
    $slideCount = is_countable($images) ? count($images) : 0;
    if ($slideCount === 0) {
        $slideCount = 1; // Default to 1 slide for empty state
    }
@endphp

<div x-data="{
    currentSlide: 0,
    totalSlides: {{ $slideCount }},
    autoAdvance: null,
    init() {
        // Ensure currentSlide is valid
        if (this.currentSlide >= this.totalSlides) {
            this.currentSlide = 0;
        }
        // Auto advance slides only if more than 1
        if (this.totalSlides > 1) {
            this.startAutoAdvance();
        }
        // Pause auto-advance when hovering
        this.$el.addEventListener('mouseenter', () => this.stopAutoAdvance());
        this.$el.addEventListener('mouseleave', () => this.startAutoAdvance());
    },
    startAutoAdvance() {
        if (this.totalSlides <= 1) return;
        this.autoAdvance = setInterval(() => {
            this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
        }, 5000);
    },
    stopAutoAdvance() {
        if (this.autoAdvance) {
            clearInterval(this.autoAdvance);
            this.autoAdvance = null;
        }
    },
    goToSlide(index) {
        this.currentSlide = index;
        // Restart auto-advance after manual navigation
        this.stopAutoAdvance();
        this.startAutoAdvance();
    }
}" class="relative w-full">

    <div class="relative order-first md:order-last overflow-hidden rounded-3xl">
        <!-- decorative background blob -->
        <div class="absolute inset-0 bg-amber-200 rounded-full blur-3xl opacity-30 -z-10"></div>

        <!-- Slides container -->
        <div class="relative w-full" style="min-height: 400px;">
            @forelse($images as $index => $image)
                <div x-show="currentSlide === {{ $index }}"
                     x-transition:enter="transition ease-out duration-500"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-300"
                     x-transition:leave-start="opacity-100 scale-100"
                     x-transition:leave-end="opacity-0 scale-95"
                     class="absolute inset-0 w-full h-full"
                     x-cloak>
                    <img src="{{ $image->photo ?? $image }}"
                         alt="Handyman at work - {{ $index + 1 }}"
                         class="w-full h-full object-cover rounded-3xl shadow-2xl border-8 border-white/70">
                </div>
            @empty
                <!-- Default placeholder when no images -->
                <div class="w-full h-full">
                    <img src="https://placehold.co/800x700/FAF7F2/987654?text=GB+Handyman+at+work"
                         alt="GB Handyman at work"
                         class="w-full h-full object-cover rounded-3xl shadow-2xl border-8 border-white/70">
                </div>
            @endforelse
        </div>

        <!-- floating badge (shown on all slides) -->
        <div class="absolute -bottom-4 -left-4 bg-white rounded-2xl shadow-xl p-4 flex items-center gap-3 border-l-8 border-amber-400 z-30">
            <i class="fas fa-smile text-4xl text-amber-500"></i>
            <div><span class="font-black text-xl">200+</span> <span class="text-gray-600 text-sm">happy jobs</span></div>
        </div>

        <!-- Navigation arrows (only if more than 1 slide) -->
        @if ($slideCount > 1)
            <button @click="goToSlide(currentSlide - 1 < 0 ? totalSlides - 1 : currentSlide - 1)"
                class="absolute left-4 top-1/2 transform -translate-y-1/2 z-20 bg-black/30 hover:bg-black/50 text-white w-12 h-12 rounded-full flex items-center justify-center transition backdrop-blur-sm"
                type="button" aria-label="Previous slide">
                <i class="fas fa-chevron-left text-xl"></i>
            </button>
            <button @click="goToSlide((currentSlide + 1) % totalSlides)"
                class="absolute right-4 top-1/2 transform -translate-y-1/2 z-20 bg-black/30 hover:bg-black/50 text-white w-12 h-12 rounded-full flex items-center justify-center transition backdrop-blur-sm"
                type="button" aria-label="Next slide">
                <i class="fas fa-chevron-right text-xl"></i>
            </button>

            <!-- Dots indicator -->
            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 z-20 flex gap-2">
                @foreach(range(0, $slideCount - 1) as $index)
                    <button @click="goToSlide({{ $index }})"
                            class="w-3 h-3 rounded-full transition-all duration-300"
                            :class="currentSlide === {{ $index }} ? 'bg-amber-500 w-6' : 'bg-white/70 hover:bg-white'"
                            :aria-label="'Go to slide {{ $index + 1 }}'">
                    </button>
                @endforeach
            </div>
        @endif
    </div>
</div>

@push('styles')
    <style>
        /* Fix for Alpine.js cloaking */
        [x-cloak] { display: none !important; }

        /* Ensure images cover properly on all devices */
        .object-cover {
            object-fit: cover !important;
        }

        /* Mobile-specific adjustments */
        @media (max-width: 768px) {
            .absolute.-bottom-4.-left-4 {
                bottom: -8px;
                left: -8px;
                padding: 12px !important;
            }
            .absolute.-bottom-4.-left-4 i {
                font-size: 2rem !important;
            }
        }
    </style>
@endpush