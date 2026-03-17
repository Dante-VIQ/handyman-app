<!-- Service Area Map Section with Real Map -->
<section class="py-16 md:py-24 bg-gradient-to-br from-blue-50 via-teal-50 to-green-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header (same as above) -->
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="inline-block bg-amber-100 text-amber-700 px-4 py-1.5 rounded-full text-sm font-semibold mb-4">
                <i class="fas fa-map-marked-alt mr-2"></i>We Come To You
            </span>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Serving <span class="text-amber-600">Your Neighborhood</span> & Beyond
            </h2>
            <p class="text-lg text-gray-600">
                Based near 6249 S 242nd Place, Bldg 8 Apt 203, we provide fast, reliable handyman services throughout the area. No travel fees within our core zone!
            </p>
        </div>

        <!-- Real Map Container -->
        <div class="relative rounded-3xl overflow-hidden shadow-2xl border-8 border-white/90 h-[500px]">
            <!-- Embedded Google Map (replace with your actual embed code) -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d172139.41616614434!2d-122.48215172189914!3d47.61294319130156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5490435a9ed9c3c1%3A0x8d3d3a3b3c3b3c3b!2sKent%2C%20WA!5e0!3m2!1sen!2sus!4v1620000000000!5m2!1sen!2sus"
                width="100%"
                height="100%"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>

            <!-- Branded overlay (very subtle) -->
            <div class="absolute inset-0 bg-gradient-to-tr from-amber-500/5 via-transparent to-green-500/5 pointer-events-none"></div>

            <!-- Location Marker (overlay on map) -->
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10 pointer-events-none">
                <div class="relative">
                    <div class="absolute -inset-4 bg-amber-400 rounded-full animate-ping opacity-20"></div>
                    <div class="relative bg-gradient-to-br from-amber-500 to-amber-600 text-white w-16 h-16 rounded-2xl shadow-xl flex items-center justify-center">
                        <i class="fas fa-map-pin text-3xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map Info Bar (same as above) -->
        <div class="bg-white p-6 rounded-2xl shadow-lg mt-6 flex flex-wrap items-center justify-between gap-4">
            <div class="flex items-center gap-4">
                <div class="flex -space-x-3">
                    <div class="w-10 h-10 bg-amber-100 rounded-full border-2 border-white flex items-center justify-center text-amber-600 font-bold">K</div>
                    <div class="w-10 h-10 bg-green-100 rounded-full border-2 border-white flex items-center justify-center text-green-600 font-bold">C</div>
                    <div class="w-10 h-10 bg-blue-100 rounded-full border-2 border-white flex items-center justify-center text-blue-600 font-bold">A</div>
                </div>
                <div>
                    <span class="font-bold text-gray-800">Coverage Area:</span>
                    <span class="text-gray-600 text-sm block md:inline md:ml-2">Kent, Covington, Auburn, Federal Way, Des Moines + more</span>
                </div>
            </div>

            <!-- Link to Service Area Page -->
            <a href="/service-area"
               class="group flex items-center gap-3 px-6 py-3 bg-gradient-to-r from-amber-500 to-amber-600 text-white rounded-xl font-semibold hover:from-amber-600 hover:to-amber-700 transition-all duration-300 shadow-lg shadow-amber-200/50">
                <span>View Full Service Area</span>
                <i class="fas fa-arrow-right group-hover:translate-x-1.5 transition-transform"></i>
            </a>
        </div>

        <!-- Service Zone Cards (same as above) -->
        <!-- ... -->
    </div>
</section>
