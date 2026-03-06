@props(['teamMembers'])

<div class="grid grid-cols-2 md:grid-cols-3 gap-8">
    @foreach($teamMembers as $member)
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="h-80 bg-navy flex items-center justify-center">
                @if($member->image)
                    <img src="{{ asset($member->image) }}"
                         alt="{{ $member->name }}"
                         class="w-full h-full object-cover">
                @else
                    <i class="{{ $member->icon_class }} text-white text-8xl"></i>
                @endif
            </div>
            <div class="p-4">
                <h3 class="cormorant text-sm lg:text-lg font-bold text-navy mb-2">{{ $member->name }}</h3>
                <p class="text-gray-500 font-semibold mb-4">{{ $member->specialty }}</p>
                {{-- <p class="text-gray-700">{{ $member->details }}</p> --}}
            </div>
        </div>
    @endforeach
</div>
