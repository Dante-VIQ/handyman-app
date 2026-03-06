<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @forelse($Images as $image)
        <div class="bg-white rounded-[2.5rem] overflow-hidden border border-soft-blue soft-shadow">
            <div class="h-44 bg-gradient-to-br from-[#d2e0ed] to-[#c4dddb] flex flex-wrap items-center justify-center gap-4 p-2">
                <!-- Before Image -->
                <div class="flex-1 h-full flex items-center justify-center">
                    @if($image->image)
                        <img src="{{ $image->image }}" alt="Before - {{ $image->title }}" 
                             class="w-full h-full object-cover rounded-2xl">
                    @else
                        <span class="bg-white/70 px-4 py-1 rounded-full text-sm">No before image</span>
                    @endif
                </div>
                
                <span class="text-2xl font-bold text-[#1e4f63]">→</span>
                
                <!-- After Photos -->
                <div class="flex-1 h-full flex items-center justify-center">

                   
                                     @if($image->photo)
                                            <img src="{{ $image->photo }}" alt="After" 
                                                 class="w-full h-full object-cover rounded-2xl">
                                        @else
                                            <div class="w-full h-full bg-soft-blue flex items-center justify-center text-xs">
                                                📷
                                            </div>
                                        @endif
                   
                            @if(count($photos) > 3)
                                <div class="w-10 h-10 rounded-full bg-soft-green border-2 border-white -ml-2 flex items-center justify-center text-xs font-bold">
                                    +{{ count($photos) - 3 }}
                                </div>
                            @endif
                  
                    {{-- @else
                        <span class="bg-white/70 px-4 py-1 rounded-full text-sm">No after photos</span>
                    @endif --}}
                </div>
            </div>
            
            <div class="p-4 flex justify-between items-center">
                <span class="font-medium">{{ $image->title }}</span>
                <span class="bg-soft-green px-3 py-1 rounded-full text-xs">
                    {{ $image->created_at ? $image->created_at->format('M Y') : 'Recent' }}
                </span>
            </div>
        </div>
    @empty
        <div class="col-span-full text-center py-12">
            <p class="text-[#4a7e93]">No gallery images found.</p>
        </div>
    @endforelse
</div>