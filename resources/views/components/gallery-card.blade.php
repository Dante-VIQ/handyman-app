<div class="bg-white rounded-[2.5rem] overflow-hidden border border-soft-blue soft-shadow">
    <div class="h-44 bg-gradient-to-br from-[#d2e0ed] to-[#c4dddb] flex items-center justify-center gap-4 p-2">
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
            @if($image->has_photos)
                <div class="flex -space-x-2">
                    @foreach($image->photos_array as $index => $photo)
                        @if($index < 3)
                            <div class="w-10 h-10 rounded-full border-2 border-white overflow-hidden {{ $index > 0 ? '-ml-2' : '' }}">
                                @if(is_array($photo) && isset($photo['url']))
                                    <img src="{{ $photo['url'] }}" alt="After {{ $index + 1 }}" 
                                         class="w-full h-full object-cover">
                                @elseif(is_string($photo))
                                    <img src="{{ $photo }}" alt="After {{ $index + 1 }}" 
                                         class="w-full h-full object-cover">
                                @endif
                            </div>
                        @endif
                    @endforeach
                    @if(count($image->photos_array) > 3)
                        <div class="w-10 h-10 rounded-full bg-soft-green border-2 border-white -ml-2 flex items-center justify-center text-xs font-bold">
                            +{{ count($image->photos_array) - 3 }}
                        </div>
                    @endif
                </div>
            @else
                <span class="bg-white/70 px-4 py-1 rounded-full text-sm">No after photos</span>
            @endif
        </div>
    </div>
    
    <div class="p-4 flex justify-between items-center">
        <span class="font-medium">{{ $image->title }}</span>
        <span class="bg-soft-green px-3 py-1 rounded-full text-xs">
            {{ $image->created_at ? $image->created_at->format('M Y') : 'Recent' }}
        </span>
    </div>
</div>