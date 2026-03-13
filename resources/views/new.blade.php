<!-- HERO with image slider (full blend of colors) -->
<section class="pt-2">
    <!-- sliding wrapper -->
    <livewire:image-card />
    <!-- small caption -->
    <div
        class="absolute bottom-5 right-5 z-20 bg-white/90 text-[#1e4a6f] px-4 py-2 rounded-full text-sm font-semibold border border-yellow-400 shadow">
        <i class="fas fa-camera mr-1"></i> real GB projects
    </div>
</section>

<!-- SERVICES section (cards: blue, white, green, yellow) -->
<section id="services" class="py-15 bg-white">
    <div class="container mx-auto px-4 md:px-8">
        <h2
            class="text-4xl md:text-5xl font-bold text-[#1e4a6f] relative inline-block after:content-[''] after:block after:w-20 after:h-1 after:bg-yellow-400 after:mt-2 after:rounded mb-4">
            Our handyman services
        </h2>

        <livewire:service-card />
    </div>
</section>

<!-- ABOUT / why us (green soft background + yellow highlights) -->
<section id="about" class="py-15 bg-[#eef7f0]">
    <div class="container mx-auto px-4 md:px-8 flex flex-col lg:flex-row gap-12 items-center">
        <div class="flex-1">
            <h2 class="text-4xl font-bold text-[#1e4a6f]">Why GB Handyman Solutions?</h2>
            <div class="bg-[#fef9e6] p-6 rounded-3xl border-2 border-dashed border-[#2e6b4e] my-6 space-y-3">
                <p><i class="fas fa-leaf text-[#2e6b4e] mr-3 text-xl"></i> <strong class="text-[#1e4a6f]">Green
                        commitment</strong> – eco-friendly practices & materials</p>
                <p><i class="fas fa-star text-yellow-400 mr-3 text-xl"></i> <strong class="text-[#1e4a6f]">5-star
                        reputation</strong> – 10+ years of local trust</p>
                <p><i class="fas fa-shield-alt text-[#1e4a6f] mr-3 text-xl"></i> <strong class="text-[#1e4a6f]">Fully
                        insured</strong> & background-checked pros</p>
            </div>
            <div class="flex gap-4">
                <span class="bg-white px-6 py-3 rounded-full font-bold text-[#1e4a6f] border-2 border-yellow-400"><i
                        class="fas fa-smile text-[#2e6b4e] mr-2"></i>2k+ clients</span>
                <span class="bg-white px-6 py-3 rounded-full font-bold text-[#1e4a6f] border-2 border-yellow-400"><i
                        class="fas fa-clock text-[#1e4a6f] mr-2"></i>15 min response</span>
            </div>
            <p class="mt-6 text-lg">We blend the <span class="text-[#1e4a6f] font-semibold">reliability</span> of a big
                company with the <span class="text-[#2e6b4e] font-semibold">personal touch</span> of a neighbor. <span
                    class="bg-yellow-400 text-[#1e3b2c] px-3 py-1 inline-block rounded-full text-sm font-bold">Satisfaction
                    guaranteed</span>.</p>
        </div>
        <div class="flex-1">
            <img src="/images/glen.jpg"
                alt="handyman working" class="rounded-[40px] rounded-bl-none border-8 border-white shadow-2xl w-full h-[80vh]">
        </div>
    </div>
</section>

<!-- CTA / quote section (gradient blue to green with yellow) -->
<div class="container mx-auto px-4 md:px-8" id="quote">
    <div
        class="bg-gradient-to-br from-[#1e4a6f] to-[#2e6b4e] text-white py-16 px-8 my-16 rounded-[80px] rounded-tr-none text-center">
        <h2 class="text-4xl md:text-5xl font-bold"><i class="fas fa-calendar-alt text-yellow-400 mr-4"></i>Ready to fix
            that list?</h2>
        <p class="text-xl max-w-2xl mx-auto mt-4">We bring the tools, expertise, and a smile. Same-day service
            available.</p>
        <a href="tel:+12024601753"
            class="inline-block mt-8 bg-yellow-400 text-[#1e3b2c] px-10 py-4 rounded-full text-xl font-bold hover:bg-white transition shadow-lg">📞
            (202) 460-1753 — call or text</a>
        <p class="mt-6"><i class="fas fa-envelope text-yellow-400 mr-2"></i> gbhandymanllc@yahoo.com | free estimates
            24/7</p>
    </div>
</div>

<!-- tiny script for smooth scroll (optional) -->
<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href === "#" || href === "") return;
            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
</script>
