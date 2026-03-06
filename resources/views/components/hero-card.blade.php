@props(['images' => []])

<div class="relative w-full h-[500px] md:h-[600px] lg:h-[700px] rounded-[3rem] overflow-hidden soft-shadow group z-10">
    <div class="swiper heroSwiper w-full h-full">
        <div class="swiper-wrapper">
            @forelse($images as $image)
                <div class="swiper-slide relative">
                    <img 
                        src="{{ asset($image->image) }}" 
                        alt="{{ $image->alt ?? 'GB Handyman project showcase' }}"
                        class="w-full h-full object-cover"
                        loading="{{ $loop->first ? 'eager' : 'lazy' }}"
                    >
                    <div class="absolute inset-0 bg-gradient-to-r from-black/50 via-transparent to-black/30"></div>
                    
                    @if(isset($image['caption']))
                        <div class="absolute bottom-10 left-10 text-white max-w-xl">
                            <h3 class="lg:text-xl font-bold mb-2">{{ $image['caption'] }}</h3>
                            <p class="text-lg">{{ $image['description'] ?? '' }}</p>
                        </div>

             
                    @endif
                </div>
            @empty
                <!-- Fallback images if none uploaded -->
                <div class="swiper-slide relative">
                    <img src="https://placehold.co/1920x1080/d9ecff/1e4f63?text=Bathroom+Remodel" alt="Bathroom remodeling project" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-r from-black/40 to-transparent"></div>
                </div>
                <div class="swiper-slide relative">
                    <img src="https://placehold.co/1920x1080/e6f3e6/1e4f63?text=Flooring+Installation" alt="Flooring installation" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-r from-black/40 to-transparent"></div>
                </div>
                <div class="swiper-slide relative">
                    <img src="https://placehold.co/1920x1080/fff9db/1e4f63?text=Kitchen+Renovation" alt="Kitchen renovation" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-r from-black/40 to-transparent"></div>
                </div>
            @endforelse
        </div>
        
        <div class="swiper-button-prev !w-12 !h-12 !bg-white/80 rounded-full !text-[#1e4f63] opacity-0 group-hover:opacity-100 transition-opacity !left-4 after:!text-xl"></div>
        <div class="swiper-button-next !w-12 !h-12 !bg-white/80 rounded-full !text-[#1e4f63] opacity-0 group-hover:opacity-100 transition-opacity !right-4 after:!text-xl"></div>
        <div class="swiper-pagination !bottom-4"></div>
        <div class="absolute bottom-0 left-0 h-1 bg-soft-yellow/70 z-10 progress-bar" style="width: 0%;"></div>
    </div>
</div>