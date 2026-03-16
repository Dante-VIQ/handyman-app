        <!-- ===== HERO WITH ADDRESS HIGHLIGHT ===== -->
        <section class="relative bg-gradient-to-br from-amber-50 via-white to-amber-50/30 py-16 md:py-24 overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <i class="fas fa-location-dot absolute text-9xl text-amber-300 -rotate-12 -top-6 left-10"></i>
                <i class="fas fa-map-pin absolute text-8xl text-amber-300 rotate-45 bottom-0 right-10"></i>
            </div>
            <div class="max-w-7xl mx-auto px-5 sm:px-8 relative z-10">
                <div class="max-w-3xl">
                    <span class="bg-amber-200 text-amber-800 px-4 py-1.5 rounded-full text-sm font-semibold inline-flex items-center gap-1"><i class="fas fa-map-marked-alt"></i> We come to you</span>
                    <h1 class="text-5xl md:text-6xl font-black text-gray-900 mt-6 leading-tight">Serving your <span class="text-amber-600">neighbourhood</span> & beyond</h1>
                    <p class="text-xl text-gray-600 mt-6 max-w-2xl">Based near <strong class="text-gray-900">6249 S 242nd Place, Bldg 8 Apt 203</strong>, we're right in your community. Fast response, friendly service, and no travel fees within our core area.</p>
                    <div class="flex flex-wrap gap-4 mt-10">
                        <a href="#check-coverage" class="bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white font-semibold py-3 px-6 rounded-xl shadow-lg shadow-amber-200/50 transition-all duration-300 ring-2 ring-amber-300/50 ring-offset-2 ring-offset-white hover:ring-amber-400 hover:shadow-xl transform hover:scale-[1.02]"><i class="fas fa-location-arrow"></i> Check your address</a>
                        <a href="tel:01612345678" class="bg-white border-2 border-amber-400 hover:bg-amber-50 text-gray-700 px-8 py-4 rounded-xl font-bold flex items-center gap-2 transition-all"><i class="fas fa-phone-alt text-amber-500"></i> Call (0161) 234 5678</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== ADDRESS CARD (featured location) ===== -->
        <section class="max-w-7xl mx-auto px-5 sm:px-8 -mt-8 relative z-20">
            <div class="bg-white rounded-3xl shadow-2xl border-l-8 border-amber-400 p-8 md:p-10 flex flex-col md:flex-row gap-8 items-center">
                <div class="bg-amber-100 w-20 h-20 rounded-2xl flex items-center justify-center text-4xl text-amber-700 shrink-0">
                    <i class="fas fa-map-pin"></i>
                </div>
                <div class="flex-1">
                    <span class="text-sm font-semibold text-amber-600 uppercase tracking-wide">Your location</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-1">6249 S 242nd Place, Bldg 8 Apt 203</h2>
                    <p class="text-gray-500 text-lg mt-2">Building 8, Apartment 203 — we know the area well. Same-day service usually available.</p>
                </div>
                <div class="flex gap-3">
                    <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full font-semibold flex items-center gap-1"><i class="fas fa-check-circle"></i> In our core zone</span>
                </div>
            </div>
        </section>

        <!-- ===== MAP VISUAL (interactive-looking static) ===== -->
        <section class="max-w-7xl mx-auto px-5 sm:px-8 py-16">
            <div class="bg-white rounded-4xl shadow-xl overflow-hidden border border-gray-200">
                <div class="relative h-96 md:h-[500px] w-full bg-gray-100">
                    <!-- decorative map grid -->
                    <div class="absolute inset-0 opacity-20" style="background-image: linear-gradient(#ccc 1px, transparent 1px), linear-gradient(90deg, #ccc 1px, transparent 1px); background-size: 50px 50px;"></div>
                    
                    <!-- main map pin for the address -->
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10 text-center map-pin">
                        <div class="relative">
                            <i class="fas fa-map-pin text-6xl text-amber-500 drop-shadow-2xl"></i>
                            <div class="absolute -top-2 -right-2 bg-green-500 w-5 h-5 rounded-full border-2 border-white animate-pulse"></div>
                        </div>
                        <div class="bg-white px-4 py-2 rounded-full shadow-xl font-bold text-gray-800 mt-2 border border-amber-200">
                            6249 S 242nd Place <span class="text-amber-500">📍</span>
                        </div>
                    </div>

                    <!-- surrounding city labels (decorative) -->
                    <span class="absolute top-20 left-20 bg-white/90 px-3 py-1.5 rounded-full text-sm shadow-md font-medium">Kent</span>
                    <span class="absolute bottom-32 right-16 bg-white/90 px-3 py-1.5 rounded-full text-sm shadow-md font-medium">Covington</span>
                    <span class="absolute top-40 right-32 bg-white/90 px-3 py-1.5 rounded-full text-sm shadow-md font-medium">Auburn</span>
                    <span class="absolute bottom-20 left-40 bg-white/90 px-3 py-1.5 rounded-full text-sm shadow-md font-medium">Federal Way</span>
                    <span class="absolute top-60 left-1/4 bg-white/90 px-3 py-1.5 rounded-full text-sm shadow-md font-medium">Des Moines</span>
                    
                    <!-- overlay gradient for readability -->
                    <div class="absolute inset-0 bg-gradient-to-t from-transparent to-white/10 pointer-events-none"></div>
                </div>
                <div class="p-6 bg-white flex flex-wrap justify-between items-center gap-4">
                    <div class="flex items-center gap-3">
                        <i class="fas fa-circle-info text-2xl text-amber-400"></i>
                        <span class="text-gray-600">Map shows our approximate coverage radius. Give us a call to confirm.</span>
                    </div>
                    <a href="#" class="text-amber-600 font-semibold hover:underline flex items-center gap-1">Open in Google Maps <i class="fas fa-external-link-alt text-sm"></i></a>
                </div>
            </div>
        </section>

        <!-- ===== COVERAGE ZONES ===== -->
        <section id="check-coverage" class="max-w-7xl mx-auto px-5 sm:px-8 py-10">
            <div class="text-center max-w-2xl mx-auto">
                <span class="bg-amber-100 text-amber-700 px-4 py-1.5 rounded-full text-sm font-semibold"><i class="fas fa-location-dot mr-1"></i> Where we go</span>
                <h2 class="text-4xl font-bold mt-4 text-gray-900">Service areas near 242nd Place</h2>
                <p class="text-gray-600 text-lg mt-3">We're local and we cover all these neighbourhoods – usually with same/next-day availability.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 mt-16">
                <!-- core zone -->
                <div class="bg-white p-8 rounded-3xl shadow-lg border border-gray-100 hover-card transition-all">
                    <div class="bg-green-100 w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-green-600 mb-5"><i class="fas fa-heart"></i></div>
                    <h3 class="text-xl font-bold mb-3">Core zone <span class="bg-green-100 text-green-700 text-sm px-3 py-1 rounded-full ml-2">no travel fee</span></h3>
                    <ul class="space-y-3 text-gray-600">
                        <li><i class="fas fa-check text-green-500 mr-2"></i> 242nd Place & surrounding</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i> Kent – East Hill</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i> Covington</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i> Maple Valley</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i> Fairwood</li>
                    </ul>
                </div>
                <!-- standard zone -->
                <div class="bg-white p-8 rounded-3xl shadow-lg border border-gray-100 hover-card transition-all">
                    <div class="bg-amber-100 w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-600 mb-5"><i class="fas fa-car"></i></div>
                    <h3 class="text-xl font-bold mb-3">Standard zone <span class="text-gray-400 text-sm ml-2">small travel fee may apply</span></h3>
                    <ul class="space-y-3 text-gray-600">
                        <li><i class="fas fa-check text-amber-500 mr-2"></i> Auburn</li>
                        <li><i class="fas fa-check text-amber-500 mr-2"></i> Federal Way</li>
                        <li><i class="fas fa-check text-amber-500 mr-2"></i> Des Moines</li>
                        <li><i class="fas fa-check text-amber-500 mr-2"></i> Renton Highlands</li>
                        <li><i class="fas fa-check text-amber-500 mr-2"></i> SeaTac</li>
                    </ul>
                </div>
                <!-- extended zone -->
                <div class="bg-white p-8 rounded-3xl shadow-lg border border-gray-100 hover-card transition-all">
                    <div class="bg-blue-100 w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-blue-600 mb-5"><i class="fas fa-road"></i></div>
                    <h3 class="text-xl font-bold mb-3">Extended zone <span class="text-gray-400 text-sm ml-2">call for availability</span></h3>
                    <ul class="space-y-3 text-gray-600">
                        <li><i class="fas fa-phone-alt text-blue-500 mr-2"></i> Tacoma</li>
                        <li><i class="fas fa-phone-alt text-blue-500 mr-2"></i> Bellevue</li>
                        <li><i class="fas fa-phone-alt text-blue-500 mr-2"></i> Issaquah</li>
                        <li><i class="fas fa-phone-alt text-blue-500 mr-2"></i> Puyallup</li>
                        <li><i class="fas fa-phone-alt text-blue-500 mr-2"></i> + more – just ask!</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- ===== ADDRESS CHECKER (interactive style) ===== -->
        <section class="max-w-7xl mx-auto px-5 sm:px-8 py-16">
            <div class="bg-amber-50 rounded-4xl p-10 md:p-16 border border-amber-200">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-3xl font-bold text-gray-900">Quick coverage check</h3>
                        <p class="text-gray-600 mt-3 text-lg">Enter your postcode/zip and we'll tell you if you're in our core zone – and when we can arrive.</p>
                        <div class="mt-8 flex flex-col sm:flex-row gap-3">
                            <input type="text" placeholder="e.g. 98042 or 6249 S 242nd Pl" class="flex-1 px-6 py-4 rounded-2xl border-2 border-white focus:border-amber-400 outline-none shadow-lg">
                            <button class="bg-amber-500 hover:bg-amber-600 text-gray-900 font-bold px-8 py-4 rounded-2xl shadow-lg transition-all flex items-center gap-2 justify-center"><i class="fas fa-search"></i> Check</button>
                        </div>
                        <p class="text-sm text-gray-400 mt-4"><i class="fas fa-info-circle"></i> We cover most of King County and south to Pierce.</p>
                    </div>
                    <div class="bg-white p-6 rounded-3xl shadow-xl">
                        <div class="flex items-center gap-4">
                            <i class="fas fa-truck text-4xl text-amber-500"></i>
                            <div>
                                <span class="font-bold text-xl">Fast response times</span>
                                <p class="text-gray-500">Core zone: same/next day<br>Standard: within 48h</p>
                            </div>
                        </div>
                        <div class="border-t border-gray-100 my-6"></div>
                        <div class="flex items-center gap-4">
                            <i class="fas fa-pound-sign text-4xl text-amber-500"></i>
                            <div>
                                <span class="font-bold text-xl">Travel fees?</span>
                                <p class="text-gray-500">Core = £0 • Standard = £15 • Extended = quote</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== LOCAL TESTIMONIALS ===== -->
        {{-- <section class="max-w-7xl mx-auto px-5 sm:px-8 py-10">
            <div class="text-center">
                <span class="bg-amber-100 text-amber-700 px-4 py-1.5 rounded-full text-sm font-semibold"><i class="fas fa-star mr-1"></i> Neighbours love us</span>
                <h2 class="text-4xl font-bold mt-4 text-gray-900">Reviews from near 242nd Place</h2>
            </div>
            <div class="grid md:grid-cols-3 gap-8 mt-16">
                <div class="bg-white p-8 rounded-3xl shadow-lg border border-gray-100">
                    <div class="flex text-amber-400 text-lg">★★★★★</div>
                    <p class="text-gray-700 mt-3 italic">“Live in Building 8! Grace fixed my kitchen tap within 2 hours of calling. So handy having GB right nearby.”</p>
                    <div class="flex items-center gap-3 mt-6"><div class="w-12 h-12 bg-amber-200 rounded-full flex items-center justify-center text-amber-700 font-bold text-xl">DS</div><div><span class="font-bold">David S.</span><span class="text-gray-400 text-sm block">Bldg 8, Apt 105</span></div></div>
                </div>
                <div class="bg-white p-8 rounded-3xl shadow-lg border border-gray-100">
                    <div class="flex text-amber-400 text-lg">★★★★★</div>
                    <p class="text-gray-700 mt-3 italic">“They know this complex inside out. Assembled my IKEA wardrobe perfectly and even took the rubbish.”</p>
                    <div class="flex items-center gap-3 mt-6"><div class="w-12 h-12 bg-amber-200 rounded-full flex items-center justify-center text-amber-700 font-bold text-xl">LR</div><div><span class="font-bold">Laura R.</span><span class="text-gray-400 text-sm block">Bldg 7</span></div></div>
                </div>
                <div class="bg-white p-8 rounded-3xl shadow-lg border border-gray-100">
                    <div class="flex text-amber-400 text-lg">★★★★★</div>
                    <p class="text-gray-700 mt-3 italic">“Fixed my fence in a flash. Reasonable price and lovely bloke. Defo recommend.”</p>
                    <div class="flex items-center gap-3 mt-6"><div class="w-12 h-12 bg-amber-200 rounded-full flex items-center justify-center text-amber-700 font-bold text-xl">MT</div><div><span class="font-bold">Mike T.</span><span class="text-gray-400 text-sm block">242nd Place</span></div></div>
                </div>
            </div>
        </section> --}}

        <!-- ===== FAQ about service area ===== -->
        <section class="max-w-7xl mx-auto px-5 sm:px-8 py-20">
            <div class="bg-white rounded-4xl p-10 md:p-16 shadow-lg">
                <h2 class="text-3xl font-bold text-gray-900 text-center">Service area FAQs</h2>
                <div class="grid md:grid-cols-2 gap-8 mt-12">
                    <div>
                        <h3 class="font-bold text-xl flex items-center gap-2"><i class="fas fa-question-circle text-amber-500"></i> Do you charge for travel?</h3>
                        <p class="text-gray-500 mt-2 ml-7">No travel fee within our core zone (including 242nd Place). For standard zone there's a small fixed fee; extended zone by quote.</p>
                    </div>
                    <div>
                        <h3 class="font-bold text-xl flex items-center gap-2"><i class="fas fa-question-circle text-amber-500"></i> How fast can you get to Bldg 8?</h3>
                        <p class="text-gray-500 mt-2 ml-7">Usually within 2-4 hours for emergencies, or next day for non-urgent jobs. We're based minutes away.</p>
                    </div>
                    <div>
                        <h3 class="font-bold text-xl flex items-center gap-2"><i class="fas fa-question-circle text-amber-500"></i> Do you serve apartments?</h3>
                        <p class="text-gray-500 mt-2 ml-7">Absolutely! We work in flats, apartments, and gated communities – Bldg 8 included. Just give us the access info.</p>
                    </div>
                    <div>
                        <h3 class="font-bold text-xl flex items-center gap-2"><i class="fas fa-question-circle text-amber-500"></i> What if I'm just outside?</h3>
                        <p class="text-gray-500 mt-2 ml-7">Call us anyway – we often go further depending on the job and our schedule.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== BOTTOM CTA ===== -->
        <section class="bg-gray-900 text-white py-20">
            <div class="max-w-7xl mx-auto px-5 sm:px-8 text-center">
                <i class="fas fa-map-signs text-6xl text-amber-400 mb-5"></i>
                <h2 class="text-4xl font-bold">We're just around the corner</h2>
                <p class="text-gray-300 text-xl mt-3 max-w-2xl mx-auto">6249 S 242nd Place, Bldg 8 Apt 203 – you're in our core zone. Book online or call.</p>
                <div class="flex flex-wrap justify-center gap-5 mt-10">
                    <a href="quote.html" class="bg-amber-500 hover:bg-amber-600 text-gray-900 font-bold px-10 py-5 rounded-full text-lg shadow-2xl transition-all"><i class="fas fa-calendar-check mr-2"></i> Book online</a>
                    <a href="tel:01612345678" class="bg-transparent border-2 border-white hover:bg-white hover:text-gray-900 text-white font-bold px-10 py-5 rounded-full text-lg transition-all"><i class="fas fa-phone-alt mr-2"></i> 0161 234 5678</a>
                </div>
                <p class="text-gray-400 mt-8 text-sm"><i class="fas fa-clock"></i> Mon-Fri 8am-8pm • Sat 9am-5pm • Sun emergency</p>
            </div>
        </section>
    </main>

    <!-- floating chat icon -->
<!-- Floating WhatsApp Icon - Links to WhatsApp -->
<a href="https://wa.me/441612345678" 
   target="_blank" 
   rel="noopener noreferrer"
   class="fixed bottom-6 right-6 bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-2xl cursor-pointer transition-all duration-300 hover:scale-110 z-50 flex items-center justify-center w-16 h-16 shadow-green-200/50">
    <i class="fab fa-whatsapp text-3xl"></i>
</a>