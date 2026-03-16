@props(['images' => []])
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 auto-rows-fr">

    @forelse($images as $image)
        <!-- Gallery Item 1 - Carpentry -->
        <div class="gallery-item relative overflow-hidden rounded-3xl shadow-xl group cursor-pointer"
            data-category="carpentry">
            @if ($image->image)
                <img src="{{ $image->image }}" alt="Custom built-in shelving"
                    class="w-full h-80 object-cover transition-all duration-500 group-hover:scale-105">
            @else
            @endif
            <div
                class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                <div>
                    <span class="bg-amber-500 text-white text-xs px-3 py-1 rounded-full">{{ $image->title }}</span>
                    {{-- <p class="text-white font-bold text-xl mt-2">Custom built-in shelving</p>
                            <p class="text-gray-200 text-sm">Maple Valley home office</p> --}}
                </div>
            </div>
        </div>
    @empty
        <p class="text-gray-700 p-4 bg-white mx-auto">No image at the moment</p>
    @endforelse


</div>
