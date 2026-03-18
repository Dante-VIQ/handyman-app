<!-- ===== CONTACT HERO ===== -->
<section class="relative bg-gradient-to-br from-amber-50 via-white to-amber-50/30 py-8 md:py-10 overflow-hidden">
    <div class="absolute inset-0 opacity-5">
        <i class="fas fa-envelope absolute text-9xl text-amber-300 -rotate-12 -top-6 left-10"></i>
        <i class="fas fa-phone-alt absolute text-8xl text-amber-300 rotate-45 bottom-0 right-10"></i>
    </div>
    <div class="max-w-7xl mx-auto px-5 sm:px-8 relative z-10">
        <div class="max-w-3xl">
            <span
                class="bg-amber-200 text-amber-800 px-4 py-1.5 rounded-full text-sm font-semibold inline-flex items-center gap-1"><i
                    class="fas fa-headset"></i> Get in touch</span>
            <h1 class="text-5xl md:text-6xl font-black text-gray-900 mt-6 leading-tight">We're here to <span
                    class="text-amber-600">help</span> – just ask</h1>
            <p class="text-xl text-gray-600 mt-6 max-w-2xl">Questions? Need a quote? Want to book? Reach out any
                way that works for you. We usually respond within an hour.</p>
            <div class="flex flex-wrap gap-4 mt-10">
                <a href="#contact-form"
                    class="bg-gradient-to-r from-red-500 to-red-600 hover:from-amber-600 hover:to-amber-700 text-white font-semibold py-3 px-6 rounded-xl shadow-lg shadow-amber-200/50 transition-all duration-300 ring-2 ring-amber-300/50 ring-offset-2 ring-offset-white hover:ring-amber-400 hover:shadow-xl transform hover:scale-[1.02]"><i
                        class="fas fa-paper-plane"></i> Send message</a>
                <a href="tel:+12024601753"
                    class="bg-white border-2 border-red-400 hover:bg-amber-50 text-gray-700 px-8 py-4 rounded-xl font-bold flex items-center gap-2 transition-all"><i
                        class="fas fa-phone-alt text-amber-500"></i> Call now</a>
            </div>
        </div>
    </div>
</section>

<!-- ===== CONTACT CARDS ===== -->
<section class="max-w-7xl mx-auto px-5 sm:px-8 -mt-4 relative z-20">
    <div class="grid md:grid-cols-3 gap-6">
        <!-- Phone Card -->
        <div class="bg-white rounded-3xl shadow-xl p-8 contact-card transition-all border border-gray-100">
            <div
                class="bg-amber-100 w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-600 mb-5">
                <i class="fas fa-phone-alt"></i>
            </div>
            <h3 class="text-xl font-bold mb-2">Call or text</h3>
            <p class="text-gray-500 text-lg font-semibold">+1 (202) 460 1753</p>
            <p class="text-gray-400 text-sm mt-2">Mon-Fri 8am-8pm • Sat 9am-5pm<br>Sun emergency only</p>
            <a href="tel:01612345678" class="inline-block mt-4 text-amber-600 font-semibold hover:underline">Call now <i
                    class="fas fa-arrow-right ml-1 text-sm"></i></a>
        </div>

        <!-- Email Card -->
        <div class="bg-white rounded-3xl shadow-xl p-8 contact-card transition-all border border-gray-100">
            <div
                class="bg-amber-100 w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-600 mb-5">
                <i class="fas fa-envelope"></i>
            </div>
            <h3 class="text-xl font-bold mb-2">Email us</h3>
            <p class="text-gray-500 text-lg font-semibold">gbhandymanllc@yahoo.com</p>
            <p class="text-gray-400 text-sm mt-2">We reply within 1 hour during work hours</p>
            <a href="mailto:gbhandymanllc@yahoo.com"
                class="inline-block mt-4 text-amber-600 font-semibold hover:underline">Send email <i
                    class="fas fa-arrow-right ml-1 text-sm"></i></a>
        </div>

        <!-- Visit / Location Card -->
        <div class="bg-white rounded-3xl shadow-xl p-8 contact-card transition-all border border-gray-100">
            <div
                class="bg-amber-100 w-16 h-16 rounded-2xl flex items-center justify-center text-3xl text-amber-600 mb-5">
                <i class="fas fa-map-pin"></i>
            </div>
            <h3 class="text-xl font-bold mb-2">Service area</h3>
            <p class="text-gray-500 text-lg font-semibold">6249 S 242nd Place</p>
            <p class="text-gray-400 text-sm mt-2">Bldg 8 Apt 203 and surrounding areas<br>We come to you!</p>
            <a href="service-area.html" class="inline-block mt-4 text-amber-600 font-semibold hover:underline">View
                service area <i class="fas fa-arrow-right ml-1 text-sm"></i></a>
        </div>
    </div>
</section>

<!-- ===== CONTACT FORM & DETAILS ===== -->
<section id="contact-form" class="max-w-7xl mx-auto px-5 sm:px-8 py-8">
    <div class="grid md:grid-cols-2 gap-12">
        <!-- Left: Form -->
        <div>
            <span class="bg-amber-100 text-amber-700 px-4 py-1.5 rounded-full text-sm font-semibold inline-block"><i
                    class="fas fa-pencil-alt mr-1"></i> Send a message</span>
            <h2 class="text-4xl font-bold mt-4 text-gray-900">Tell us what you need</h2>
            <p class="text-gray-600 mt-3">Fill out the form and we'll get back to you within the hour – usually
                faster.</p>

@include('components.partials.appointment')
        </div>

        <!-- Right: Contact info, map, social -->
        <div>
            <div class="bg-white rounded-3xl shadow-xl p-8 mb-8">
                <h3 class="text-2xl font-bold mb-4">Quick contact</h3>

                <div class="space-y-5">
                    <div class="flex items-start gap-4">
                        <div
                            class="bg-amber-100 w-12 h-12 rounded-xl flex items-center justify-center text-xl text-amber-600 shrink-0">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <p class="font-medium text-gray-500 text-sm">PHONE</p>
                            <p class="text-xl font-bold">+1 (202) 460 1753</p>
                            <p class="text-sm text-gray-400">Available 8am-8pm weekdays</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div
                            class="bg-amber-100 w-12 h-12 rounded-xl flex items-center justify-center text-xl text-amber-600 shrink-0">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <p class="font-medium text-gray-500 text-sm">EMAIL</p>
                            <p class="text-xl font-bold">gbhandymanllc@yahoo.com</p>
                            <p class="text-sm text-gray-400">Reply within 1 hour</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div
                            class="bg-amber-100 w-12 h-12 rounded-xl flex items-center justify-center text-xl text-amber-600 shrink-0">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <p class="font-medium text-gray-500 text-sm">SERVING</p>
                            <p class="text-xl font-bold">6249 S 242nd Place</p>
                            <p class="text-gray-600">Bldg 8 Apt 203 & all surrounding areas</p>
                            <a href="/service-area"
                                class="text-amber-600 text-sm font-semibold hover:underline">See full service
                                area →</a>
                        </div>
                    </div>
                </div>

                <div class="border-t border-gray-100 my-8"></div>

                <h4 class="font-bold text-lg mb-3">Follow us</h4>
                <div class="flex gap-4 text-3xl text-gray-500">
                    <i class="fab fa-facebook hover:text-amber-500 cursor-pointer transition"></i>
                    <i class="fab fa-instagram hover:text-amber-500 cursor-pointer transition"></i>
                    <i class="fab fa-whatsapp hover:text-amber-500 cursor-pointer transition"></i>
                </div>
            </div>

            <!-- Map preview (static) -->
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
                <div class="h-64 bg-gray-200 relative">
                    <div class="absolute inset-0 opacity-30"
                        style="background-image: linear-gradient(#ccc 1px, transparent 1px), linear-gradient(90deg, #ccc 1px, transparent 1px); background-size: 30px 30px;">
                    </div>
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
                        <i class="fas fa-map-pin text-5xl text-amber-500 drop-shadow-xl"></i>
                        <p class="bg-white px-4 py-2 rounded-full shadow-lg font-bold mt-2">6249 S 242nd Place
                        </p>
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex items-center gap-2 text-gray-600">
                        <i class="fas fa-car text-amber-400"></i>
                        <span>We come to you! No office visits – we're always on the road.</span>
                    </div>
                    <a href="#" class="inline-block mt-3 text-amber-600 font-semibold hover:underline">Get
                        directions
                        <i class="fas fa-external-link-alt ml-1 text-sm"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== BUSINESS HOURS ===== -->
<section class="max-w-7xl mx-auto px-5 sm:px-8 py-8">
    <div class="bg-amber-50 rounded-4xl p-12 border border-amber-200">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <span class="bg-white text-amber-700 px-4 py-1.5 rounded-full text-sm font-semibold"><i
                        class="far fa-clock mr-1"></i> When we're available</span>
                <h2 class="text-4xl font-bold mt-4 text-gray-900">Hours of operation</h2>
                <p class="text-gray-600 mt-3 text-lg">We work around your schedule – early mornings and
                    evenings available by request.</p>
            </div>
            <div class="bg-white rounded-3xl p-8 shadow-lg">
                <div class="grid grid-cols-2 gap-4">
                    <div class="border-r border-gray-100 pr-4">
                        <p class="font-bold text-gray-900">Mon - Fri</p>
                        <p class="text-amber-600 text-xl font-bold">8am - 8pm</p>
                    </div>
                    <div class="pl-4">
                        <p class="font-bold text-gray-900">Saturday</p>
                        <p class="text-amber-600 text-xl font-bold">9am - 5pm</p>
                    </div>
                    <div class="border-r border-gray-100 pr-4">
                        <p class="font-bold text-gray-900">Sunday</p>
                        <p class="text-amber-600 text-xl font-bold">Emergency only</p>
                    </div>
                    <div class="pl-4">
                        <p class="font-bold text-gray-900">Emergency</p>
                        <p class="text-amber-600 text-xl font-bold">24/7 call</p>
                    </div>
                </div>
                <div class="border-t border-gray-100 mt-6 pt-6 text-sm text-gray-500 flex items-center gap-2">
                    <i class="fas fa-tools text-amber-400"></i> We answer calls live during hours – no
                    automated menus.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== FAQ MINI ===== -->
<section class="max-w-7xl mx-auto px-5 sm:px-8 py-8">
    <div class="text-center max-w-2xl mx-auto">
        <span class="bg-amber-100 text-amber-700 px-4 py-1.5 rounded-full text-sm font-semibold"><i
                class="fas fa-question-circle mr-1"></i> Quick answers</span>
        <h2 class="text-4xl font-bold mt-4 text-gray-900">Frequently asked</h2>
    </div>
    <div class="grid md:grid-cols-3 gap-8 mt-16">
        <div class="bg-white p-6 rounded-2xl shadow-md">
            <h3 class="font-bold text-lg flex items-center gap-2"><i class="fas fa-pound-sign text-amber-500"></i> Do
                you give free quotes?</h3>
            <p class="text-gray-500 mt-2">Yes! All estimates are free and no-obligation. We'll give you a fixed
                price.</p>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-md">
            <h3 class="font-bold text-lg flex items-center gap-2"><i class="fas fa-clock text-amber-500"></i>
                How soon can you come?</h3>
            <p class="text-gray-500 mt-2">Often same-day for emergencies, next day for most jobs. We'll confirm
                when you call.</p>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-md">
            <h3 class="font-bold text-lg flex items-center gap-2"><i class="fas fa-credit-card text-amber-500"></i>
                What payment do you take?</h3>
            <p class="text-gray-500 mt-2">Cash, card, bank transfer – whatever suits you. Payment is after the
                job is done.</p>
        </div>
    </div>
    <div class="text-center mt-10">
        <a href="about.html" class="text-amber-600 font-semibold hover:underline">More FAQs on our about page
            <i class="fas fa-arrow-right ml-1"></i></a>
    </div>
</section>

<!-- ===== CTA BOTTOM ===== -->
<section class="bg-gray-900 text-white py-8">
    <div class="max-w-7xl mx-auto px-5 sm:px-8 text-center">
        <i class="fas fa-headset text-6xl text-amber-400 mb-5"></i>
        <h2 class="text-4xl font-bold">Have a question? Just ask.</h2>
        <p class="text-gray-300 text-xl mt-3 max-w-2xl mx-auto">We're friendly, we're local, and we're ready to
            help.</p>
        <div class="flex flex-wrap justify-center gap-5 mt-10">
            <a href="tel:01612345678"
                class="bg-red-500 hover:bg-amber-600 text-gray-900 font-bold px-10 py-5 rounded-full text-lg shadow-2xl transition-all"><i
                    class="fas fa-phone-alt mr-2"></i> Call +1 (202) 460 1753</a>
            <a href="#contact-form"
                class="bg-transparent border-2 border-red hover:bg-white hover:text-gray-900 text-white font-bold px-10 py-5 rounded-full text-lg transition-all"><i
                    class="fas fa-envelope mr-2"></i> Send message</a>
        </div>
    </div>
</section>
</main>
