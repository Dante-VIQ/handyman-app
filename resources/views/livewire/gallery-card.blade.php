<div>
    @forelse($images as $image)
        <div class="grid grid-cols-2 gap-2 p-4 bg-gray-50">
            @if ($image->image)
                <img src="{{ $image->image }}" alt="Before renovation"
                    class="rounded-2xl shadow-md w-full h-48 object-cover">
            @else
                <span class="bg-white/70 px-4 py-1 rounded-full text-sm">No before image</span>
            @endif

            @if ($image->photo)
                <img src="{{ $image->photo }}" alt="After renovation"
                    class="rounded-2xl shadow-md w-full h-48 object-cover">
            @else
                <span class="bg-white/70 px-4 py-1 rounded-full text-sm">No after image</span>
            @endif
        </div>
    @empty
        <div class="col-span-full text-center py-12">
            <p class="text-[#4a7e93]">No gallery images found.</p>
        </div>
    @endforelse

</div>
