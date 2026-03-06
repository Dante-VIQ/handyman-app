<div class="grid grid-cols-2 md:grid-cols-4 gap-4">
    @foreach ($this->services as $service)
        <div class="relative p-5 rounded-3xl border border-soft-blue flex flex-col items-start soft-shadow hover-lift transition-soft min-h-[280px]"
             style="background: linear-gradient(0deg, rgba(30,79,99,0.85) 0%, rgba(30,79,99,0.4) 50%, rgba(0,0,0,0.2) 100%), url('{{ $service->image }}'); background-size: cover; background-position: center;">
            
            <!-- Content (no extra overlay needed since gradient is in background) -->
            <div class="text-white w-full mt-auto">
                <span class="font-semibold text-lg block mb-1 drop-shadow-lg">{{ $service->title }}</span>
                <span class="text-sm text-white/90 drop-shadow line-clamp-2">{{ $service->description }}</span>
            </div>
        </div>
    @endforeach
</div>