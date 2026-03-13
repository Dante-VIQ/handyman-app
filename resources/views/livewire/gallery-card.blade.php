<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
    <!-- Project 1: Kitchen Remodel -->
     @forelse($Images as $image)
    <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
        <div class="grid grid-cols-2 gap-0">
            <div class="relative">
                @if($image->image)
                <img src="{{ $image->image }}" alt="Before kitchen"
                    class="w-full h-64 object-cover">

                        @else
                    <span class="bg-white/70 px-4 py-1 rounded-full text-sm">No before image</span>
                @endif
                <div class="absolute top-2 left-2 bg-red-500 text-white px-3 py-1 rounded-full text-xs font-bold">BEFORE
                </div>
            </div>
            <div class="relative">
                @if($image->photo)
                <img src="{{ $image->photo }}" alt="After kitchen"
                    class="w-full h-64 object-cover">

                        @else
                    <span class="bg-white/70 px-4 py-1 rounded-full text-sm">No after image</span>
                @endif
                <div class="absolute top-2 left-2 bg-[#2e6b4e] text-white px-3 py-1 rounded-full text-xs font-bold">
                    AFTER</div>
            </div>
        </div>
        <div class="p-6">
            <h3 class="text-2xl font-bold text-[#1e4a6f] mb-2">Kitchen Cabinet Refresh</h3>
            <p class="text-slate-600 mb-4">Refaced cabinets, new hardware, and under-cabinet lighting in Kent, WA</p>
            <a href="/quote" class="text-[#2e6b4e] font-semibold hover:text-[#1e4a6f] transition">Get similar quote
                →</a>
        </div>
    </div>
    @empty
        <div class="col-span-full text-center py-12">
            <p class="text-[#4a7e93]">No gallery images found.</p>
        </div>
    @endforelse
</div>
