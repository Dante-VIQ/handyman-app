<!-- resources/views/contact.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | GB Handyman Solutions - Kent, WA</title>
    
    <!-- SEO meta -->
    <meta name="description" content="Contact GB Handyman Solutions in Kent, WA. Get free estimates, emergency services, and professional handyman advice. Call, email, or visit our office.">
    <meta name="keywords" content="contact handyman, handyman phone number, handyman Kent WA, emergency handyman, free estimate">
    <meta name="author" content="GB Handyman Solutions">
    
    <!-- Open Graph -->
    <meta property="og:title" content="Contact GB Handyman Solutions - Kent, WA">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.gbhandyman.com/contact">
    <meta property="og:description" content="Reach out to your local handyman experts in Kent, WA. Free estimates and 24/7 emergency service.">
    
    <!-- Tailwind + Fonts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz@14..32&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- Alpine.js -->
    <script src="//unpkg.com/alpinejs" defer></script>
    
    <style>
        .contact-card {
            transition: all 0.3s ease;
        }
        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .map-container {
            position: relative;
            overflow: hidden;
            border-radius: 2rem;
        }
        .map-container iframe {
            width: 100%;
            height: 100%;
            min-height: 450px;
        }
        .form-input:focus {
            border-color: #eab308;
            ring: 4px solid rgba(234, 179, 8, 0.2);
        }
        .success-message {
            animation: slideDown 0.5s ease-out;
        }
        @keyframes slideDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="font-['Inter'] antialiased text-slate-700 bg-white">

    <!-- Header -->
    <header class="sticky top-0 z-30 bg-white border-b-4 border-yellow-400 shadow-sm py-3">
        <div class="container mx-auto px-4 md:px-8 flex flex-wrap items-center justify-between">
            <a href="/" class="text-3xl font-bold tracking-tight">
                <i class="fas fa-wrench text-yellow-400 mr-1 align-middle"></i>
                <span class="text-[#1e4a6f]">GB</span> <span class="text-[#2e6b4e]">Handyman</span>
            </a>
            <div class="hidden md:flex space-x-8 font-medium">
                <a href="/" class="text-[#1e4a6f] hover:text-[#2e6b4e] border-b-2 border-transparent hover:border-yellow-400 pb-1 transition">Home</a>
                <a href="/services" class="text-[#1e4a6f] hover:text-[#2e6b4e] border-b-2 border-transparent hover:border-yellow-400 pb-1 transition">Services</a>
                <a href="/about" class="text-[#1e4a6f] hover:text-[#2e6b4e] border-b-2 border-transparent hover:border-yellow-400 pb-1 transition">About</a>
                <a href="/service-area" class="text-[#1e4a6f] hover:text-[#2e6b4e] border-b-2 border-transparent hover:border-yellow-400 pb-1 transition">Service Area</a>
                <a href="/gallery" class="text-[#1e4a6f] hover:text-[#2e6b4e] border-b-2 border-transparent hover:border-yellow-400 pb-1 transition">Gallery</a>
                <a href="/contact" class="text-[#1e4a6f] border-b-2 border-yellow-400 pb-1 font-semibold">Contact</a>
            </div>
            <a href="/quote" class="bg-[#2e6b4e] text-white px-5 py-2 rounded-full font-semibold shadow-md hover:bg-[#1e4a6f] transition flex items-center gap-2">
                <i class="fas fa-calendar-check text-yellow-400"></i> Free estimate
            </a>
        </div>
    </header>

    <!-- Page Hero -->
    <section class="bg-gradient-to-r from-[#1e4a6f] to-[#2e6b4e] py-20 text-white">
        <div class="container mx-auto px-4 md:px-8 text-center">
            <h1 class="text-5xl md:text-6xl font-bold mb-4">
                <span class="text-yellow-400">//</span> Contact Us
            </h1>
            <p class="text-xl max-w-2xl mx-auto opacity-90">
                We're here to help with any project, big or small. Reach out today!
            </p>
        </div>
    </section>

    <!-- Emergency Banner -->
    <div class="container mx-auto px-4 md:px-8 -mt-8 relative z-10">
        <div class="bg-red-500 text-white p-6 rounded-3xl shadow-2xl flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-4">
                <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center">
                    <i class="fas fa-exclamation-triangle text-3xl text-yellow-400"></i>
                </div>
                <div>
                    <h3 class="text-2xl font-bold">24/7 Emergency Service</h3>
                    <p class="text-white/90">Available day or night for urgent repairs</p>
                </div>
            </div>
            <a href="tel:5551234567" class="bg-white text-red-500 px-8 py-4 rounded-full text-xl font-bold hover:bg-yellow-400 hover:text-[#1e3b2c] transition shadow-lg whitespace-nowrap">
                <i class="fas fa-phone-alt mr-2"></i> (555) 123-4567
            </a>
        </div>
    </div>

    <!-- Contact Cards -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Phone Card -->
                <div class="contact-card bg-[#eef7f0] p-8 rounded-3xl text-center group hover:bg-[#1e4a6f] transition">
                    <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-yellow-400 transition">
                        <i class="fas fa-phone-alt text-3xl text-[#1e4a6f] group-hover:text-[#1e3b2c]"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-[#1e4a6f] mb-2 group-hover:text-white">Call Us</h3>
                    <p class="text-slate-600 mb-4 group-hover:text-white/90">Mon-Fri: 7am-8pm<br>Sat: 8am-4pm</p>
                    <a href="tel:5551234567" class="text-[#2e6b4e] font-semibold group-hover:text-yellow-400 text-lg">
                        (555) 123-4567
                    </a>
                </div>

                <!-- Email Card -->
                <div class="contact-card bg-[#eef7f0] p-8 rounded-3xl text-center group hover:bg-[#1e4a6f] transition">
                    <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-yellow-400 transition">
                        <i class="fas fa-envelope text-3xl text-[#1e4a6f] group-hover:text-[#1e3b2c]"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-[#1e4a6f] mb-2 group-hover:text-white">Email Us</h3>
                    <p class="text-slate-600 mb-4 group-hover:text-white/90">24-hour response time</p>
                    <a href="mailto:support@gbhandyman.com" class="text-[#2e6b4e] font-semibold group-hover:text-yellow-400 text-lg break-all">
                        support@gbhandyman.com
                    </a>
                </div>

                <!-- Location Card -->
                <div class="contact-card bg-[#eef7f0] p-8 rounded-3xl text-center group hover:bg-[#1e4a6f] transition">
                    <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-yellow-400 transition">
                        <i class="fas fa-map-pin text-3xl text-[#1e4a6f] group-hover:text-[#1e3b2c]"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-[#1e4a6f] mb-2 group-hover:text-white">Visit Us</h3>
                    <p class="text-slate-600 mb-4 group-hover:text-white/90">By appointment only</p>
                    <address class="not-italic text-[#2e6b4e] font-semibold group-hover:text-yellow-400">
                        6249 S 242nd Place<br>Bldg 8 Apt 203<br>Kent, WA 98032
                    </address>
                </div>

                <!-- Chat Card -->
                <div class="contact-card bg-[#eef7f0] p-8 rounded-3xl text-center group hover:bg-[#1e4a6f] transition">
                    <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-yellow-400 transition">
                        <i class="fas fa-comment-dots text-3xl text-[#1e4a6f] group-hover:text-[#1e3b2c]"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-[#1e4a6f] mb-2 group-hover:text-white">Live Chat</h3>
                    <p class="text-slate-600 mb-4 group-hover:text-white/90">Instant response</p>
                    <button class="text-[#2e6b4e] font-semibold group-hover:text-yellow-400 text-lg hover:underline">
                        Start chatting
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form & Map -->
    <section class="py-16 bg-[#eef7f0]">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div x-data="contactForm()" class="bg-white p-8 md:p-12 rounded-[50px] rounded-tl-none shadow-2xl">
                    <h2 class="text-4xl font-bold text-[#1e4a6f] mb-4">Send Us a Message</h2>
                    <p class="text-lg text-slate-600 mb-8">We'll get back to you within 24 hours</p>

                    <!-- Success Message -->
                    <div x-show="showSuccess" x-transition class="bg-[#2e6b4e] text-white p-4 rounded-2xl mb-6 success-message">
                        <i class="fas fa-check-circle mr-2"></i>
                        <span x-text="successMessage"></span>
                    </div>

                    <form @submit.prevent="submitForm" class="space-y-6">
                        <!-- Name Field -->
                        <div>
                            <label class="block text-sm font-semibold text-[#1e4a6f] mb-2">
                                <i class="fas fa-user mr-2"></i>Full Name *
                            </label>
                            <input type="text" 
                                   x-model="formData.name"
                                   required
                                   class="w-full px-6 py-4 rounded-2xl border-2 border-gray-200 focus:border-yellow-400 focus:outline-none transition"
                                   :class="{ 'border-red-500': errors.name }"
                                   placeholder="John Doe">
                            <p x-show="errors.name" class="text-red-500 text-sm mt-1" x-text="errors.name"></p>
                        </div>

                        <!-- Email Field -->
                        <div>
                            <label class="block text-sm font-semibold text-[#1e4a6f] mb-2">
                                <i class="fas fa-envelope mr-2"></i>Email Address *
                            </label>
                            <input type="email" 
                                   x-model="formData.email"
                                   required
                                   class="w-full px-6 py-4 rounded-2xl border-2 border-gray-200 focus:border-yellow-400 focus:outline-none transition"
                                   :class="{ 'border-red-500': errors.email }"
                                   placeholder="john@example.com">
                            <p x-show="errors.email" class="text-red-500 text-sm mt-1" x-text="errors.email"></p>
                        </div>

                        <!-- Phone Field -->
                        <div>
                            <label class="block text-sm font-semibold text-[#1e4a6f] mb-2">
                                <i class="fas fa-phone mr-2"></i>Phone Number
                            </label>
                            <input type="tel" 
                                   x-model="formData.phone"
                                   class="w-full px-6 py-4 rounded-2xl border-2 border-gray-200 focus:border-yellow-400 focus:outline-none transition"
                                   placeholder="(555) 123-4567">
                        </div>

                        <!-- Service Type -->
                        <div>
                            <label class="block text-sm font-semibold text-[#1e4a6f] mb-2">
                                <i class="fas fa-tools mr-2"></i>Service Needed *
                            </label>
                            <select x-model="formData.service" required
                                    class="w-full px-6 py-4 rounded-2xl border-2 border-gray-200 focus:border-yellow-400 focus:outline-none transition bg-white">
                                <option value="">Select a service</option>
                                <option value="plumbing">Plumbing</option>
                                <option value="electrical">Electrical</option>
                                <option value="carpentry">Carpentry</option>
                                <option value="painting">Painting</option>
                                <option value="general">General Repairs</option>
                                <option value="emergency">Emergency</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <!-- Message Field -->
                        <div>
                            <label class="block text-sm font-semibold text-[#1e4a6f] mb-2">
                                <i class="fas fa-comment mr-2"></i>Message *
                            </label>
                            <textarea x-model="formData.message" 
                                      required
                                      rows="5"
                                      class="w-full px-6 py-4 rounded-2xl border-2 border-gray-200 focus:border-yellow-400 focus:outline-none transition"
                                      placeholder="Tell us about your project..."></textarea>
                        </div>

                        <!-- Preferred Contact Method -->
                        <div>
                            <label class="block text-sm font-semibold text-[#1e4a6f] mb-3">
                                <i class="fas fa-hand-pointer mr-2"></i>Preferred Contact Method
                            </label>
                            <div class="flex flex-wrap gap-6">
                                <label class="flex items-center gap-2">
                                    <input type="radio" x-model="formData.contactMethod" value="email" class="text-[#1e4a6f]">
                                    <span>Email</span>
                                </label>
                                <label class="flex items-center gap-2">
                                    <input type="radio" x-model="formData.contactMethod" value="phone" class="text-[#1e4a6f]">
                                    <span>Phone</span>
                                </label>
                                <label class="flex items-center gap-2">
                                    <input type="radio" x-model="formData.contactMethod" value="text" class="text-[#1e4a6f]">
                                    <span>Text</span>
                                </label>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" 
                                class="w-full bg-[#1e4a6f] text-white px-8 py-4 rounded-full text-xl font-bold hover:bg-[#2e6b4e] transition shadow-lg flex items-center justify-center gap-2"
                                :disabled="isSubmitting">
                            <i x-show="!isSubmitting" class="fas fa-paper-plane"></i>
                            <i x-show="isSubmitting" class="fas fa-spinner fa-spin"></i>
                            <span x-text="isSubmitting ? 'Sending...' : 'Send Message'"></span>
                        </button>
                    </form>
                </div>

                <!-- Map & Location Details -->
                <div class="space-y-6">
                    <!-- Google Map Embed -->
                    <div class="map-container shadow-2xl border-4 border-yellow-400 h-[400px]">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2710.848753374387!2d-122.22767868451248!3d47.41686617917165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54905b6b8b8b8b8b%3A0x123456789abcdef!2s6249%20S%20242nd%20Pl%2C%20Kent%2C%20WA%2098032!5e0!3m2!1sen!2sus!4v1620000000000!5m2!1sen!2sus" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>

                    <!-- Location Details Card -->
                    <div class="bg-white p-8 rounded-3xl shadow-xl">
                        <h3 class="text-2xl font-bold text-[#1e4a6f] mb-4">
                            <i class="fas fa-map-marked-alt text-yellow-400 mr-2"></i>
                            Our Location
                        </h3>
                        <div class="space-y-4">
                            <p class="text-lg">
                                <span class="font-semibold">Address:</span><br>
                                6249 S 242nd Place<br>
                                Bldg 8 Apt 203<br>
                                Kent, WA 98032
                            </p>
                            <p class="text-lg">
                                <span class="font-semibold">Hours:</span><br>
                                Monday - Friday: 7am - 8pm<br>
                                Saturday: 8am - 4pm<br>
                                Sunday: Emergency only
                            </p>
                            <div class="flex gap-4 pt-4">
                                <a href="https://maps.google.com/?q=6249+S+242nd+Place+Kent+WA+98032" 
                                   target="_blank"
                                   class="bg-[#1e4a6f] text-white px-6 py-3 rounded-full hover:bg-[#2e6b4e] transition flex items-center gap-2">
                                    <i class="fas fa-directions"></i>
                                    Get Directions
                                </a>
                                <a href="#" 
                                   class="border-2 border-[#1e4a6f] text-[#1e4a6f] px-6 py-3 rounded-full hover:bg-[#1e4a6f] hover:text-white transition flex items-center gap-2">
                                    <i class="fas fa-share-alt"></i>
                                    Share
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Business Hours Card -->
                    <div class="bg-gradient-to-r from-[#1e4a6f] to-[#2e6b4e] text-white p-8 rounded-3xl shadow-xl">
                        <h3 class="text-2xl font-bold mb-4 flex items-center gap-2">
                            <i class="fas fa-clock text-yellow-400"></i>
                            Current Status
                        </h3>
                        <div x-data="businessHours()">
                            <p class="text-lg mb-2" x-text="statusMessage"></p>
                            <p class="text-3xl font-bold" :class="isOpen ? 'text-yellow-400' : 'text-red-300'" x-text="isOpen ? 'OPEN NOW' : 'CLOSED'"></p>
                            <p class="text-sm mt-4 opacity-90">Emergency? Call our 24/7 line</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-8 max-w-4xl">
            <div class="text-center mb-12">
                <span class="text-yellow-500 font-semibold tracking-wider">— QUICK ANSWERS —</span>
                <h2 class="text-4xl font-bold text-[#1e4a6f] mt-2">Frequently Asked Questions</h2>
            </div>

            <div class="space-y-4" x-data="{ openFaq: null }">
                <!-- FAQ 1 -->
                <div class="border border-gray-200 rounded-2xl overflow-hidden">
                    <button @click="openFaq = openFaq === 1 ? null : 1" class="w-full px-6 py-4 text-left bg-gray-50 hover:bg-gray-100 flex justify-between items-center">
                        <span class="font-semibold text-[#1e4a6f]">How quickly can you respond to emergencies?</span>
                        <i class="fas fa-chevron-down transition" :class="openFaq === 1 ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="openFaq === 1" x-collapse class="px-6 py-4 bg-white">
                        <p>We're available 24/7 for emergencies. Our average response time in Kent and surrounding areas is 20-30 minutes. For life-threatening emergencies, please call 911 first.</p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="border border-gray-200 rounded-2xl overflow-hidden">
                    <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full px-6 py-4 text-left bg-gray-50 hover:bg-gray-100 flex justify-between items-center">
                        <span class="font-semibold text-[#1e4a6f]">Do you provide free estimates?</span>
                        <i class="fas fa-chevron-down transition" :class="openFaq === 2 ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="openFaq === 2" x-collapse class="px-6 py-4 bg-white">
                        <p>Yes! We offer free, no-obligation estimates for all projects. We'll assess the work needed, provide a detailed quote, and answer any questions before starting.</p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="border border-gray-200 rounded-2xl overflow-hidden">
                    <button @click="openFaq = openFaq === 3 ? null : 3" class="w-full px-6 py-4 text-left bg-gray-50 hover:bg-gray-100 flex justify-between items-center">
                        <span class="font-semibold text-[#1e4a6f]">What areas do you serve?</span>
                        <i class="fas fa-chevron-down transition" :class="openFaq === 3 ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="openFaq === 3" x-collapse class="px-6 py-4 bg-white">
                        <p>We serve Kent and the greater Seattle area, including Seattle, Bellevue, Tacoma, Renton, Federal Way, Auburn, Covington, Maple Valley, SeaTac, and all surrounding communities within a 25-mile radius.</p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="border border-gray-200 rounded-2xl overflow-hidden">
                    <button @click="openFaq = openFaq === 4 ? null : 4" class="w-full px-6 py-4 text-left bg-gray-50 hover:bg-gray-100 flex justify-between items-center">
                        <span class="font-semibold text-[#1e4a6f]">Are you licensed and insured?</span>
                        <i class="fas fa-chevron-down transition" :class="openFaq === 4 ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="openFaq === 4" x-collapse class="px-6 py-4 bg-white">
                        <p>Absolutely! We are fully licensed, bonded, and insured in Washington State. All our technicians undergo background checks and carry liability insurance for your peace of mind.</p>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="border border-gray-200 rounded-2xl overflow-hidden">
                    <button @click="openFaq = openFaq === 5 ? null : 5" class="w-full px-6 py-4 text-left bg-gray-50 hover:bg-gray-100 flex justify-between items-center">
                        <span class="font-semibold text-[#1e4a6f]">Do you offer any warranties?</span>
                        <i class="fas fa-chevron-down transition" :class="openFaq === 5 ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="openFaq === 5" x-collapse class="px-6 py-4 bg-white">
                        <p>Yes! We stand behind our work with a 1-year warranty on all labor and parts. If anything goes wrong within the first year, we'll fix it at no additional cost.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="container mx-auto px-4 md:px-8 my-16">
        <div class="bg-gradient-to-r from-[#1e4a6f] to-[#2e6b4e] text-white p-12 rounded-[70px] rounded-bl-none text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">Ready to Start Your Project?</h2>
            <p class="text-xl max-w-2xl mx-auto mb-8">Get a free estimate today - no obligation, just honest advice.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="/quote" class="bg-yellow-400 text-[#1e3b2c] px-8 py-4 rounded-full text-xl font-bold hover:bg-white transition shadow-lg">
                    <i class="fas fa-calendar-check mr-2"></i> Schedule Online
                </a>
                <a href="tel:5551234567" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-full text-xl font-bold hover:bg-white/20 transition">
                    <i class="fas fa-phone-alt mr-2"></i> (555) 123-4567
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#102b36] text-slate-300 pt-16 pb-6">
        <div class="container mx-auto px-4 md:px-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
            <div>
                <div class="text-3xl font-bold text-white"><i class="fas fa-hammer text-yellow-400 mr-2"></i>GB Handyman</div>
                <p class="mt-3">Every job done right, every time.</p>
                <p class="mt-2 text-sm"><i class="fas fa-map-pin text-yellow-400 mr-1"></i> Kent, WA 98032</p>
                <div class="flex gap-5 mt-5 text-yellow-400 text-2xl">
                    <a href="#" class="hover:text-white transition"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-white transition"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="hover:text-white transition"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div>
                <h4 class="text-white text-lg font-semibold">Explore</h4>
                <ul class="mt-4 space-y-2">
                    <li><a href="/" class="hover:text-yellow-400 transition">Home</a></li>
                    <li><a href="/services" class="hover:text-yellow-400 transition">Services</a></li>
                    <li><a href="/about" class="hover:text-yellow-400 transition">About us</a></li>
                    <li><a href="/service-area" class="hover:text-yellow-400 transition">Service Area</a></li>
                    <li><a href="/gallery" class="hover:text-yellow-400 transition">Gallery</a></li>
                    <li><a href="/contact" class="hover:text-yellow-400 transition">Contact</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white text-lg font-semibold">Contact</h4>
                <address class="not-italic mt-4 space-y-2">
                    <p><i class="fas fa-map-pin text-yellow-400 w-6 mr-2"></i> 6249 S 242nd Place<br>Bldg 8 Apt 203<br>Kent, WA 98032</p>
                    <p><i class="fas fa-phone-alt text-yellow-400 w-6 mr-2"></i> (555) 123-4567</p>
                    <p><i class="fas fa-envelope text-yellow-400 w-6 mr-2"></i> support@gbhandyman.com</p>
                </address>
            </div>
            <div>
                <h4 class="text-white text-lg font-semibold">Hours</h4>
                <p class="mt-4">Mon-Fri: 7am – 8pm<br>Sat: 8am – 4pm<br>Sun: emergency only</p>
                <span class="inline-block bg-[#2e6b4e] text-white px-4 py-2 rounded-full mt-4">
                    <i class="fas fa-clock text-yellow-400 mr-2"></i>24/7 support
                </span>
            </div>
        </div>
        <div class="text-center text-sm text-slate-500 border-t border-slate-700 mt-12 pt-6">
            © 2025 GB Handyman Solutions. All rights reserved. Proudly serving Kent, WA and the greater Seattle area.
        </div>
    </footer>

    <!-- Alpine.js Components -->
    <script>
        document.addEventListener('alpine:init', () => {
            // Contact Form Component
            Alpine.data('contactForm', () => ({
                formData: {
                    name: '',
                    email: '',
                    phone: '',
                    service: '',
                    message: '',
                    contactMethod: 'email'
                },
                errors: {},
                isSubmitting: false,
                showSuccess: false,
                successMessage: '',
                
                submitForm() {
                    this.errors = {};
                    this.isSubmitting = true;
                    
                    // Basic validation
                    if (!this.formData.name) this.errors.name = 'Name is required';
                    if (!this.formData.email) this.errors.email = 'Email is required';
                    else if (!this.validateEmail(this.formData.email)) this.errors.email = 'Invalid email format';
                    
                    if (Object.keys(this.errors).length > 0) {
                        this.isSubmitting = false;
                        return;
                    }
                    
                    // Simulate form submission
                    setTimeout(() => {
                        this.isSubmitting = false;
                        this.showSuccess = true;
                        this.successMessage = 'Thank you! We\'ll contact you within 24 hours.';
                        
                        // Reset form
                        this.formData = {
                            name: '',
                            email: '',
                            phone: '',
                            service: '',
                            message: '',
                            contactMethod: 'email'
                        };
                        
                        // Hide success message after 5 seconds
                        setTimeout(() => {
                            this.showSuccess = false;
                        }, 5000);
                    }, 1500);
                },
                
                validateEmail(email) {
                    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
                }
            }));

            // Business Hours Component
            Alpine.data('businessHours', () => ({
                get currentTime() {
                    return new Date();
                },
                
                get isOpen() {
                    const now = new Date();
                    const day = now.getDay(); // 0 = Sunday, 1 = Monday, etc.
                    const hour = now.getHours();
                    const minutes = now.getMinutes();
                    const timeValue = hour + minutes / 60;
                    
                    // Sunday (emergency only)
                    if (day === 0) return false;
                    
                    // Saturday 8am-4pm
                    if (day === 6) return timeValue >= 8 && timeValue < 16;
                    
                    // Weekdays 7am-8pm
                    return timeValue >= 7 && timeValue < 20;
                },
                
                get statusMessage() {
                    const now = new Date();
                    const options = { weekday: 'long', hour: 'numeric', minute: 'numeric' };
                    const timeStr = now.toLocaleTimeString('en-US', { hour: 'numeric', minute: '2-digit' });
                    
                    return `${timeStr} on ${now.toLocaleDateString('en-US', { weekday: 'long' })}`;
                }
            }));
        });
    </script>

    <!-- Alpine.js Collapse Plugin for FAQ -->
    <script src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js" defer></script>
</body>
</html>