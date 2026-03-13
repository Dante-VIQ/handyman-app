<section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-8">

        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach ($images as $image)
                <div class="gallery-item relative rounded-2xl overflow-hidden shadow-lg cursor-pointer group"
                    x-data="{ showLightbox: false }" @click="showLightbox = true">
                    @if ($image->image)
                        <!-- Image -->
                        <img src="{{ $image->image }}" alt="{{ $image->title ?? 'Gallery image' }}"
                            class="w-full h-64 object-cover" loading="lazy">
                    @else
                        <span class="bg-white/70 px-4 py-1 rounded-full text-sm">No before image</span>
                    @endif
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 gallery-overlay opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-4 text-white">
                        @if ($image->title)
                            <h3 class="text-xl font-bold">{{ $image->title }}</h3>
                        @endif
                        <span
                            class="inline-block mt-2 bg-yellow-400 text-[#1e3b2c] px-3 py-1 rounded-full text-xs font-bold">
                            <i class="fas fa-search-plus mr-1"></i>Click to enlarge
                        </span>
                    </div>

                    <!-- Lightbox Modal (per image) -->
                    <div x-show="showLightbox" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/90"
                        @click.away="showLightbox = false" @keydown.escape="showLightbox = false">

                        <div class="relative max-w-6xl w-full fade-in" @click.stop>
                            <!-- Close Button -->
                            <button class="absolute -top-12 right-0 text-white hover:text-yellow-400 transition"
                                @click="showLightbox = false">
                                <i class="fas fa-times text-3xl"></i>
                            </button>

                            <!-- Image Container -->
                            <div class="bg-white rounded-2xl overflow-hidden">
                                <img src="{{ $image->image ?? asset('storage/' . $image->image) }}"
                                    alt="{{ $image->title ?? 'Gallery image' }}"
                                    class="w-full max-h-[80vh] object-contain">

                                <!-- Image Details -->
                                @if ($image->title)
                                    <div class="p-6 bg-white">
                                        <h3 class="text-2xl font-bold text-[#1e4a6f] mb-4">{{ $image->title }}</h3>

                                        <!-- CTA Buttons -->
                                        <div class="flex gap-4 mt-4">
                                            <a href="/quote"
                                                class="bg-yellow-400 text-[#1e3b2c] px-6 py-3 rounded-full font-semibold hover:bg-[#1e4a6f] hover:text-white transition">
                                                <i class="fas fa-calendar-check mr-2"></i> Get Quote
                                            </a>
                                            <a href="/contact"
                                                class="border-2 border-[#1e4a6f] text-[#1e4a6f] px-6 py-3 rounded-full font-semibold hover:bg-[#1e4a6f] hover:text-white transition">
                                                <i class="fas fa-phone-alt mr-2"></i> Contact Us
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination if needed -->
        {{-- @if (method_exists($galleryImages, 'links'))
                <div class="mt-12">
                    {{ $galleryImages->links() }}
                </div>
            @endif --}}

    </div>
</section>
