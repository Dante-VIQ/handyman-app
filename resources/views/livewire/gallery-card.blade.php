<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16" itemscope
    itemtype="https://schema.org/ImageGallery">
    @forelse($Images as $image)
    <!--Gallery Item -->
    <div class="bg-white rounded-[2.5rem] overflow-hidden border border-soft-blue soft-shadow hover-lift transition-soft"
        itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
        <div class="relative h-64 overflow-hidden">
            @if ($image->image)
                <img src="{{ $image->image }}" alt="Bathroom before remodel in Kent, WA - outdated fixtures and tile"
                    class="w-full h-full object-cover gallery-image" loading="lazy" itemprop="thumbnail"
                    data-before="true">
            @else
                <span class="bg-white/70 px-4 py-1 rounded-full text-sm">No before image</span>
            @endif
            <span
                class="absolute top-4 left-4 bg-soft-yellow px-4 py-1 rounded-full text-sm font-semibold">Before</span>
        </div>
        <div class="relative h-64 overflow-hidden border-t">
            @if ($image->photo)
                <img src="{{ $image->photo }}"
                    alt="Bathroom after remodel in Kent, WA - new modern tile, vanity, and fixtures"
                    class="w-full h-full object-cover gallery-image" loading="lazy" itemprop="contentUrl"
                    data-after="true">
            @else
                <span class="bg-white/70 px-4 py-1 rounded-full text-sm">No after image</span>
            @endif
            <span class="absolute top-4 left-4 bg-soft-green px-4 py-1 rounded-full text-sm font-semibold">After</span>
        </div>
        <div class="p-6">
            <h3 class="text-xl font-bold text-[#115e7a]" itemprop="name">{{ $image->title }}</h3>
            {{-- <p class="text-[#306f86] mt-2" itemprop="description">Complete bathroom renovation including new tile
                flooring, walk-in shower with glass doors, modern vanity, and updated lighting fixtures.</p> --}}
            <div class="flex justify-between items-center mt-4">
                {{-- <span class="text-sm bg-soft-blue px-3 py-1 rounded-full">📍 Kent</span> --}}
                <span class="text-sm text-[#4a7e93]">{{ $image->created_at ? $image->created_at->format('M Y') : 'Recent' }}</span>
            </div>
            <meta itemprop="uploadDate" content="2025-03-15">
            <meta itemprop="keywords"
                content="bathroom remodel, bathroom renovation, Kent WA, tile installation, shower remodel">
        </div>
    </div>

    @empty
    <div class="col-span-full text-center py-12">
        <p class="text-[#4a7e93]">No gallery images found.</p>
    </div>
    @endforelse
</div>
