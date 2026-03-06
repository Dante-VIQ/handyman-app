@props(['images' => []])

<div class="relative w-full h-[300px] sm:h-[400px] md:h-[400px] lg:h-[500px] xl:h-[600px] rounded-2xl sm:rounded-[3rem] overflow-hidden soft-shadow group z-10">
    <div class="swiper heroSwiper w-full h-full">
        <div class="swiper-wrapper">
            @forelse($images as $image)
                <div class="swiper-slide relative">
                    <!-- Image container with proper aspect ratio -->
                    <div class="absolute inset-0 w-full h-full">
                        <img
                            src="{{ asset($image->image) }}"
                            alt="{{ $image->alt ?? 'GB Handyman project showcase' }}"
                            class="w-full h-full object-contain md:object-cover bg-[#1e4f63]/10"
                            loading="{{ $image === 0 ? 'eager' : 'lazy' }}"
                        >
                    </div>

                    <!-- Gradient overlay - adjusted for object-contain -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent md:bg-gradient-to-r md:from-black/50 md:via-transparent md:to-black/30"></div>

                    @if(isset($image->caption) || isset($image->title))
                        <div class="absolute bottom-4 left-4 right-4 sm:bottom-10 sm:left-10 sm:right-auto text-white max-w-xl z-20">
                            <h3 class="text-lg sm:text-xl md:text-2xl font-bold mb-1 sm:mb-2 drop-shadow-lg">
                                {{ $image->caption ?? $image->title ?? '' }}
                            </h3>
                            @if(isset($image->description))
                                <p class="text-sm sm:text-base drop-shadow hidden sm:block">{{ $image->description }}</p>
                            @endif
                        </div>
                    @endif
                </div>
            @empty
                <!-- Fallback images if none uploaded -->
                <div class="swiper-slide relative">
                    <div class="absolute inset-0 w-full h-full bg-gradient-to-br from-soft-blue to-soft-green flex items-center justify-center">
                        <span class="text-[#1e4f63] text-xl font-bold">Bathroom Remodel</span>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                </div>
                <div class="swiper-slide relative">
                    <div class="absolute inset-0 w-full h-full bg-gradient-to-br from-soft-green to-soft-yellow flex items-center justify-center">
                        <span class="text-[#1e4f63] text-xl font-bold">Flooring Installation</span>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                </div>
                <div class="swiper-slide relative">
                    <div class="absolute inset-0 w-full h-full bg-gradient-to-br from-soft-yellow to-soft-blue flex items-center justify-center">
                        <span class="text-[#1e4f63] text-xl font-bold">Kitchen Renovation</span>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                </div>
            @endforelse
        </div>

        <!-- Navigation Buttons - hidden on mobile -->
        <div class="swiper-button-prev !w-10 !h-10 lg:!w-12 lg:!h-12 !bg-white/80 rounded-full !text-[#1e4f63] opacity-0 group-hover:opacity-100 transition-opacity !left-2 lg:!left-4 after:!text-lg lg:after:!text-xl hidden sm:flex"></div>
        <div class="swiper-button-next !w-10 !h-10 lg:!w-12 lg:!h-12 !bg-white/80 rounded-full !text-[#1e4f63] opacity-0 group-hover:opacity-100 transition-opacity !right-2 lg:!right-4 after:!text-lg lg:after:!text-xl hidden sm:flex"></div>

        <!-- Pagination Dots -->
        <div class="swiper-pagination !bottom-2 sm:!bottom-4"></div>

        <!-- Progress Bar -->
        <div class="absolute bottom-0 left-0 h-1 bg-soft-yellow/70 z-10 progress-bar" style="width: 0%;"></div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const progressBar = document.querySelector('.progress-bar');

        const swiper = new Swiper('.heroSwiper', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            speed: 800,
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                dynamicBullets: true,
            },
            on: {
                autoplayTimeLeft(s, time, progress) {
                    if (progressBar) {
                        const percentage = (1 - progress) * 100;
                        progressBar.style.width = percentage + '%';
                    }
                },
                slideChange: function() {
                    if (progressBar) {
                        progressBar.style.width = '0%';
                    }
                }
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
            },
            grabCursor: true,
            keyboard: {
                enabled: true,
            },
        });
    });
</script>
@endpush

<style>
    /* Mobile optimizations */
    @media (max-width: 640px) {
        .swiper-pagination-bullet {
            width: 6px;
            height: 6px;
        }

        .swiper-pagination-bullet-active {
            width: 16px;
            border-radius: 8px;
        }
    }

    /* Ensure images are fully visible on mobile */
    @media (max-width: 768px) {
        .heroSwiper .swiper-slide img {
            object-fit: contain !important;
            background-color: #f5faff;
        }
    }

    /* Better handling for very small screens */
    @media (max-width: 480px) {
        .heroSwiper .swiper-slide img {
            object-fit: cover !important;
            object-position: center;
        }
    }
</style>
