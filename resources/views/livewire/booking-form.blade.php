 <div>

     <!-- Hero Section -->
     <section class="booking-hero-bg text-white py-24">
         <div class="container mx-auto px-4 text-center">
             <h1 class="cormorant text-5xl md:text-6xl font-bold mb-6">Book Online</h1>
             <div class="w-32 h-1 bg-gold mx-auto mb-8"></div>
             <p class="text-2xl max-w-3xl mx-auto font-light">
                 Schedule a tour, care assessment, or respite stay at Amazing Palace.
             </p>
         </div>
     </section>

     <!-- Booking Wizard -->
     <section class="py-20 booking-bg">
         <div class="container mx-auto px-4 max-w-6xl">
             <!-- Progress Steps -->
             <div class="mb-12">
                 <div class="step-indicator mb-8">
                     <div class="step-circle active" id="step-1">1</div>
                     <div class="step-line" id="line-1-2"></div>
                     <div class="step-circle inactive" id="step-2">2</div>
                     <div class="step-line" id="line-2-3"></div>
                     <div class="step-circle inactive" id="step-3">3</div>
                     <div class="step-line" id="line-3-4"></div>
                     <div class="step-circle inactive" id="step-4">4</div>
                 </div>

                 <div class="text-center">
                     <p class="text-gray-600">
                         <span id="current-step-text">Select Booking Type</span>
                         <span class="mx-2">•</span>
                         <span id="total-steps-text">4 Steps</span>
                     </p>
                 </div>
             </div>

             <!-- Step 1: Booking Type -->
             <div id="step-1-content" class="form-step active">
                 <div class="text-center mb-12">
                     <h2 class="cormorant text-4xl font-bold text-navy mb-4">What would you like to book?</h2>
                     <div class="w-24 h-1 bg-gold mx-auto mb-6"></div>
                     <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                         Choose the type of appointment that best fits your needs.
                     </p>
                 </div>

                 <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                     <!-- Facility Tour Option -->
                     <div class="booking-option" data-booking-type="tour">
                         <div class="text-center mb-6">
                             <div class="w-20 h-20 bg-navy rounded-full flex items-center justify-center mx-auto mb-4">
                                 <i class="fas fa-home text-white text-2xl"></i>
                             </div>
                             <h3 class="cormorant text-2xl font-bold text-navy mb-2">Facility Tour</h3>
                             <p class="text-gold font-semibold">60 Minutes</p>
                         </div>
                         <p class="text-gray-700 mb-6 text-center">
                             Personal guided tour of our facility. Meet our team and see our luxurious accommodations.
                         </p>
                         <ul class="space-y-2 mb-6">
                             <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Facility
                                 walkthrough</li>
                             <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Meet care team
                                 members</li>
                             <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Q&A session</li>
                         </ul>
                         <div class="text-center">
                             <div class="text-navy font-bold text-lg">Free</div>
                         </div>
                     </div>

                     <!-- Care Assessment Option -->
                     <div class="booking-option" data-booking-type="assessment">
                         <div class="text-center mb-6">
                             <div class="w-20 h-20 bg-navy rounded-full flex items-center justify-center mx-auto mb-4">
                                 <i class="fas fa-clipboard-check text-white text-2xl"></i>
                             </div>
                             <h3 class="cormorant text-2xl font-bold text-navy mb-2">Care Assessment</h3>
                             <p class="text-gold font-semibold">90 Minutes</p>
                         </div>
                         <p class="text-gray-700 mb-6 text-center">
                             Comprehensive evaluation of care needs with our nursing director. Includes tour.
                         </p>
                         <ul class="space-y-2 mb-6">
                             <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Medical history
                                 review</li>
                             <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Care needs
                                 evaluation</li>
                             <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Personalized
                                 care plan discussion</li>
                         </ul>
                         <div class="text-center">
                             <div class="text-navy font-bold text-lg">Free</div>
                         </div>
                     </div>

                     <!-- Virtual Tour Option -->
                     <div class="booking-option" data-booking-type="virtual">
                         <div class="text-center mb-6">
                             <div class="w-20 h-20 bg-navy rounded-full flex items-center justify-center mx-auto mb-4">
                                 <i class="fas fa-video text-white text-2xl"></i>
                             </div>
                             <h3 class="cormorant text-2xl font-bold text-navy mb-2">Virtual Tour</h3>
                             <p class="text-gold font-semibold">45 Minutes</p>
                         </div>
                         <p class="text-gray-700 mb-6 text-center">
                             Live virtual tour via video call. Perfect for out-of-town families or initial
                             consultations.
                         </p>
                         <ul class="space-y-2 mb-6">
                             <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Live video
                                 walkthrough</li>
                             <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Screen sharing
                                 of facilities</li>
                             <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Q&A with care
                                 coordinator</li>
                         </ul>
                         <div class="text-center">
                             <div class="text-navy font-bold text-lg">Free</div>
                         </div>
                     </div>
                 </div>

                 <div class="text-center">
                     <button id="next-step-1"
                         class="btn-gold px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-xl"
                         disabled>
                         Next: Select Date & Time <i class="fas fa-arrow-right ml-2"></i>
                     </button>
                 </div>
             </div>

             <!-- Step 2: Date & Time -->
             <div id="step-2-content" class="form-step">
                 <div class="text-center mb-12">
                     <h2 class="cormorant text-4xl font-bold text-navy mb-4">Select Date & Time</h2>
                     <div class="w-24 h-1 bg-gold mx-auto mb-6"></div>
                     <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                         Choose a convenient date and time for your <span id="booking-type-display"></span>.
                     </p>
                 </div>

                 <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                     <!-- Calendar Section -->
                     <div>
                         <h3 class="cormorant text-2xl font-bold text-navy mb-6">Select Date</h3>

                         <!-- Month Navigation -->
                         <div class="flex justify-between items-center mb-6">
                             <button id="prev-month"
                                 class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-gray-200 transition">
                                 <i class="fas fa-chevron-left"></i>
                             </button>
                             <h4 id="current-month" class="cormorant text-2xl font-bold text-navy">November 2023</h4>
                             <button id="next-month"
                                 class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-gray-200 transition">
                                 <i class="fas fa-chevron-right"></i>
                             </button>
                         </div>

                         <!-- Calendar Days -->
                         <div class="mb-8">
                             <div class="grid grid-cols-7 gap-2 mb-4">
                                 <div class="text-center font-semibold text-gray-500 py-2">Sun</div>
                                 <div class="text-center font-semibold text-gray-500 py-2">Mon</div>
                                 <div class="text-center font-semibold text-gray-500 py-2">Tue</div>
                                 <div class="text-center font-semibold text-gray-500 py-2">Wed</div>
                                 <div class="text-center font-semibold text-gray-500 py-2">Thu</div>
                                 <div class="text-center font-semibold text-gray-500 py-2">Fri</div>
                                 <div class="text-center font-semibold text-gray-500 py-2">Sat</div>
                             </div>
                             <div id="calendar-days" class="grid grid-cols-7 gap-2">
                                 <!-- Calendar days will be generated by JavaScript -->
                             </div>
                         </div>

                         <div class="bg-light-blue rounded-xl p-6">
                             <h4 class="font-bold text-navy mb-4">Availability Notes</h4>
                             <ul class="space-y-2 text-sm">
                                 <li class="flex items-start">
                                     <i class="fas fa-info-circle text-gold mr-2 mt-0.5"></i>
                                     <span>Tours are available Monday through Saturday</span>
                                 </li>
                                 <li class="flex items-start">
                                     <i class="fas fa-info-circle text-gold mr-2 mt-0.5"></i>
                                     <span>We recommend weekday appointments for the most flexibility</span>
                                 </li>
                                 <li class="flex items-start">
                                     <i class="fas fa-info-circle text-gold mr-2 mt-0.5"></i>
                                     <span>Same-day appointments may be available - call (206) 555-1234</span>
                                 </li>
                             </ul>
                         </div>
                     </div>

                     <!-- Time Selection -->
                     <div>
                         <h3 class="cormorant text-2xl font-bold text-navy mb-6">Select Time</h3>
                         <p class="text-gray-700 mb-8">Available times for <span id="selected-date-display"
                                 class="font-semibold text-navy">Select a date first</span></p>

                         <div class="mb-10">
                             <h4 class="font-bold text-navy mb-4">Morning Session</h4>
                             <div class="grid grid-cols-3 gap-4 mb-6">
                                 <div class="time-slot" data-time="9:00">9:00 AM</div>
                                 <div class="time-slot" data-time="9:30">9:30 AM</div>
                                 <div class="time-slot" data-time="10:00">10:00 AM</div>
                                 <div class="time-slot" data-time="10:30">10:30 AM</div>
                                 <div class="time-slot unavailable" data-time="11:00">11:00 AM</div>
                                 <div class="time-slot" data-time="11:30">11:30 AM</div>
                             </div>

                             <h4 class="font-bold text-navy mb-4">Afternoon Session</h4>
                             <div class="grid grid-cols-3 gap-4">
                                 <div class="time-slot" data-time="1:00">1:00 PM</div>
                                 <div class="time-slot" data-time="1:30">1:30 PM</div>
                                 <div class="time-slot unavailable" data-time="2:00">2:00 PM</div>
                                 <div class="time-slot" data-time="2:30">2:30 PM</div>
                                 <div class="time-slot" data-time="3:00">3:00 PM</div>
                                 <div class="time-slot" data-time="3:30">3:30 PM</div>
                                 <div class="time-slot" data-time="4:00">4:00 PM</div>
                                 <div class="time-slot unavailable" data-time="4:30">4:30 PM</div>
                             </div>
                         </div>

                         <div class="bg-light-blue rounded-xl p-6">
                             <h4 class="font-bold text-navy mb-4">Need a different time?</h4>
                             <p class="text-gray-700 mb-4">If you need a time not listed here, please call us at
                                 <strong>(206) 555-1234</strong> or note your preference in the next step.
                             </p>
                             <button id="request-custom-time"
                                 class="text-navy font-semibold hover:text-gold transition">
                                 <i class="fas fa-clock mr-2"></i> Request Custom Time
                             </button>
                         </div>
                     </div>
                 </div>

                 <div class="flex justify-between mt-12">
                     <button id="prev-step-2"
                         class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-8 py-4 rounded-full font-bold text-lg transition-all duration-300">
                         <i class="fas fa-arrow-left mr-2"></i> Back
                     </button>
                     <button id="next-step-2"
                         class="btn-gold px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-xl"
                         disabled>
                         Next: Contact Information <i class="fas fa-arrow-right ml-2"></i>
                     </button>
                 </div>
             </div>

             <!-- Step 3: Contact Information -->
             <div id="step-3-content" class="form-step">
                 <div class="text-center mb-12">
                     <h2 class="cormorant text-4xl font-bold text-navy mb-4">Contact Information</h2>
                     <div class="w-24 h-1 bg-gold mx-auto mb-6"></div>
                     <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                         Please provide your contact details so we can confirm your appointment.
                     </p>
                 </div>

                 <div class="max-w-3xl mx-auto">
                     <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
                         <div class="mb-8">
                             <h3 class="cormorant text-2xl font-bold text-navy mb-6">Appointment Summary</h3>
                             <div class="bg-light-blue rounded-xl p-6">
                                 <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                     <div>
                                         <p class="text-gray-600 mb-1">Booking Type</p>
                                         <p id="summary-type" class="font-bold text-navy text-lg">-</p>
                                     </div>
                                     <div>
                                         <p class="text-gray-600 mb-1">Date & Time</p>
                                         <p id="summary-datetime" class="font-bold text-navy text-lg">-</p>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <form id="contact-form" method="POST" action="{{ route('booking.submit') }}">
                             <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                 <div>
                                     <label class="block mb-2 font-semibold text-gray-800">First Name *</label>
                                     <input type="text" id="first-name" required
                                         class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold focus:border-transparent">
                                 </div>
                                 <div>
                                     <label class="block mb-2 font-semibold text-gray-800">Last Name *</label>
                                     <input type="text" id="last-name" required
                                         class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold focus:border-transparent">
                                 </div>
                             </div>

                             <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                 <div>
                                     <label class="block mb-2 font-semibold text-gray-800">Email Address *</label>
                                     <input type="email" id="email" required
                                         class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold focus:border-transparent">
                                 </div>
                                 <div>
                                     <label class="block mb-2 font-semibold text-gray-800">Phone Number *</label>
                                     <input type="tel" id="phone" required
                                         class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold focus:border-transparent">
                                 </div>
                             </div>

                             <div class="mb-6">
                                 <label class="block mb-2 font-semibold text-gray-800">Relationship to Resident
                                     *</label>
                                 <select id="relationship" required
                                     class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold focus:border-transparent">
                                     <option value="">Select relationship</option>
                                     <option value="spouse">Spouse/Partner</option>
                                     <option value="child">Child</option>
                                     <option value="sibling">Sibling</option>
                                     <option value="other-relative">Other Relative</option>
                                     <option value="friend">Friend</option>
                                     <option value="self">Self (Potential Resident)</option>
                                     <option value="professional">Professional (Social Worker, Doctor, etc.)</option>
                                 </select>
                             </div>

                             <div class="mb-6">
                                 <label class="block mb-2 font-semibold text-gray-800">Resident's Name (if
                                     applicable)</label>
                                 <input type="text" id="resident-name"
                                     class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold focus:border-transparent"
                                     placeholder="Name of the person who may become a resident">
                             </div>

                             <div class="mb-6">
                                 <label class="block mb-2 font-semibold text-gray-800">Additional Attendees</label>
                                 <select id="attendees"
                                     class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold focus:border-transparent">
                                     <option value="1">Just me</option>
                                     <option value="2" selected>2 people</option>
                                     <option value="3">3 people</option>
                                     <option value="4">4 people</option>
                                     <option value="5">5+ people</option>
                                 </select>
                                 <p class="text-gray-600 text-sm mt-2">Please let us know if you need accommodations
                                     for larger groups.</p>
                             </div>

                             <div class="mb-8">
                                 <label class="block mb-2 font-semibold text-gray-800">Special Requests or
                                     Questions</label>
                                 <textarea id="special-requests" rows="4"
                                     class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold focus:border-transparent"
                                     placeholder="Any accessibility needs, specific areas of interest, or questions you'd like us to address during your appointment..."></textarea>
                             </div>

                             <div class="mb-8">
                                 <div class="flex items-start">
                                     <input type="checkbox" id="consent" required class="w-5 h-5 mr-3 mt-1">
                                     <label for="consent" class="text-gray-700">
                                         I consent to Amazing Palace contacting me via phone or email regarding my
                                         appointment. I understand that my information will be kept confidential and
                                         used only for scheduling and communication purposes. *
                                     </label>
                                 </div>
                             </div>
                         </form>
                     </div>

                     <div class="flex justify-between">
                         <button id="prev-step-3"
                             class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-8 py-4 rounded-full font-bold text-lg transition-all duration-300">
                             <i class="fas fa-arrow-left mr-2"></i> Back
                         </button>
                         <button id="next-step-3"
                             class="btn-gold px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-xl">
                             Next: Review & Confirm <i class="fas fa-arrow-right ml-2"></i>
                         </button>
                     </div>
                 </div>
             </div>

             <!-- Step 4: Review & Confirmation -->
             <div id="step-4-content" class="form-step">
                 <div class="text-center mb-12">
                     <h2 class="cormorant text-4xl font-bold text-navy mb-4">Review & Confirm</h2>
                     <div class="w-24 h-1 bg-gold mx-auto mb-6"></div>
                     <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                         Please review your appointment details before confirming.
                     </p>
                 </div>

                 <div class="max-w-4xl mx-auto">
                     <div class="bg-white rounded-2xl shadow-lg p-10 mb-8">
                         <div class="text-center mb-10">
                             <div class="w-20 h-20 bg-gold rounded-full flex items-center justify-center mx-auto mb-6">
                                 <i class="fas fa-calendar-check text-navy text-3xl"></i>
                             </div>
                             <h3 class="cormorant text-3xl font-bold text-navy mb-4">Appointment Details</h3>
                             <p class="text-gray-700">Please verify all information is correct</p>
                         </div>

                         <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
                             <div class="space-y-6">
                                 <div>
                                     <h4 class="font-bold text-gray-600 mb-2">Appointment Type</h4>
                                     <p id="review-type" class="text-xl font-bold text-navy">-</p>
                                 </div>
                                 <div>
                                     <h4 class="font-bold text-gray-600 mb-2">Date & Time</h4>
                                     <p id="review-datetime" class="text-xl font-bold text-navy">-</p>
                                 </div>
                                 <div>
                                     <h4 class="font-bold text-gray-600 mb-2">Contact Person</h4>
                                     <p id="review-contact" class="text-xl font-bold text-navy">-</p>
                                 </div>
                             </div>

                             <div class="space-y-6">
                                 <div>
                                     <h4 class="font-bold text-gray-600 mb-2">Contact Information</h4>
                                     <p id="review-email" class="text-navy">-</p>
                                     <p id="review-phone" class="text-navy">-</p>
                                 </div>
                                 <div>
                                     <h4 class="font-bold text-gray-600 mb-2">Relationship</h4>
                                     <p id="review-relationship" class="text-navy">-</p>
                                 </div>
                                 <div>
                                     <h4 class="font-bold text-gray-600 mb-2">Number of Attendees</h4>
                                     <p id="review-attendees" class="text-navy">-</p>
                                 </div>
                             </div>
                         </div>

                         <div class="mb-10">
                             <h4 class="font-bold text-gray-600 mb-4">Special Requests</h4>
                             <div id="review-requests" class="bg-light-blue rounded-xl p-6 min-h-20">
                                 <p class="text-gray-700">No special requests provided.</p>
                             </div>
                         </div>

                         <div class="bg-light-blue rounded-xl p-8">
                             <h4 class="cormorant text-2xl font-bold text-navy mb-6">What Happens Next?</h4>
                             <div class="space-y-6">
                                 <div class="flex items-start">
                                     <div
                                         class="w-10 h-10 bg-gold rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                         <span class="font-bold text-navy">1</span>
                                     </div>
                                     <div>
                                         <h5 class="font-bold text-navy mb-1">Confirmation Email</h5>
                                         <p class="text-gray-700">You'll receive a confirmation email within 15 minutes
                                             with all appointment details.</p>
                                     </div>
                                 </div>
                                 <div class="flex items-start">
                                     <div
                                         class="w-10 h-10 bg-gold rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                         <span class="font-bold text-navy">2</span>
                                     </div>
                                     <div>
                                         <h5 class="font-bold text-navy mb-1">Reminder Call</h5>
                                         <p class="text-gray-700">Our team will call you 24 hours before your
                                             appointment to confirm and answer any last-minute questions.</p>
                                     </div>
                                 </div>
                                 <div class="flex items-start">
                                     <div
                                         class="w-10 h-10 bg-gold rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                         <span class="font-bold text-navy">3</span>
                                     </div>
                                     <div>
                                         <h5 class="font-bold text-navy mb-1">Prepare for Your Visit</h5>
                                         <p class="text-gray-700">We'll send you a preparation guide with what to
                                             bring, parking information, and what to expect.</p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="flex justify-between">
                         <button id="prev-step-4"
                             class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-8 py-4 rounded-full font-bold text-lg transition-all duration-300">
                             <i class="fas fa-arrow-left mr-2"></i> Back
                         </button>
                         <button id="confirm-booking"
                             class="btn-gold px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-xl">
                             <i class="fas fa-check-circle mr-2"></i> Confirm Booking
                         </button>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <!-- Booking Success Modal -->
     <div id="success-modal" class="fixed inset-0 bg-black/70 z-50 hidden items-center justify-center p-4">
         <div class="bg-white rounded-2xl max-w-md w-full p-10 text-center">
             <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                 <i class="fas fa-check text-green-600 text-3xl"></i>
             </div>
             <h3 class="cormorant text-3xl font-bold text-navy mb-4">Booking Confirmed!</h3>
             <p class="text-gray-700 mb-6">
                 Your appointment has been successfully scheduled. A confirmation email with all details has been sent
                 to <span id="confirmation-email" class="font-semibold"></span>.
             </p>
             <div class="bg-light-blue rounded-xl p-6 mb-8">
                 <p class="font-bold text-navy mb-2" id="confirmation-type"></p>
                 <p class="text-gray-700" id="confirmation-datetime"></p>
             </div>
             <div class="space-y-4">
                 <a href="index.html"
                     class="block btn-gold px-6 py-3 rounded-full font-bold transition-all duration-300 shadow-lg">
                     <i class="fas fa-home mr-2"></i> Return to Homepage
                 </a>
                 <button id="book-another"
                     class="block w-full bg-transparent border-2 border-navy text-navy hover:bg-navy hover:text-white px-6 py-3 rounded-full font-bold transition-all duration-300">
                     <i class="fas fa-calendar-plus mr-2"></i> Book Another Appointment
                 </button>
             </div>
         </div>
     </div>

     <!-- FAQ Section -->
     <section class="py-20">
         <div class="container mx-auto px-4">
             <div class="text-center mb-16">
                 <h2 class="cormorant text-4xl md:text-5xl font-bold text-navy mb-4">Booking FAQs</h2>
                 <div class="w-24 h-1 bg-gold mx-auto mb-6"></div>
                 <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                     Common questions about scheduling appointments at Amazing Palace.
                 </p>
             </div>

             <div class="max-w-3xl mx-auto">
                 <div class="space-y-6">
                     <div class="bg-white rounded-2xl shadow-lg p-8">
                         <h3 class="cormorant text-2xl font-bold text-navy mb-4">How far in advance should I book?</h3>
                         <p class="text-gray-700">We recommend booking at least 48 hours in advance to ensure
                             availability. However, we occasionally have same-day availability for tours - please call
                             (206) 555-1234 to check.</p>
                     </div>

                     <div class="bg-white rounded-2xl shadow-lg p-8">
                         <h3 class="cormorant text-2xl font-bold text-navy mb-4">What if I need to cancel or
                             reschedule?</h3>
                         <p class="text-gray-700">You can cancel or reschedule your appointment by calling us at (206)
                             555-1234 or replying to your confirmation email. We request at least 24 hours notice for
                             cancellations.</p>
                     </div>

                     <div class="bg-white rounded-2xl shadow-lg p-8">
                         <h3 class="cormorant text-2xl font-bold text-navy mb-4">What should I bring to my tour?</h3>
                         <p class="text-gray-700">We recommend bringing any medical information or questions you have,
                             a list of medications (if applicable), and identification. Comfortable walking shoes are
                             also recommended for the facility tour.</p>
                     </div>

                     <div class="bg-white rounded-2xl shadow-lg p-8">
                         <h3 class="cormorant text-2xl font-bold text-navy mb-4">Can I bring other family members to
                             the tour?</h3>
                         <p class="text-gray-700">Yes, we encourage families to visit together. Please indicate the
                             number of attendees when booking so we can prepare accordingly. For groups larger than 5,
                             please call us to make special arrangements.</p>
                     </div>

                     <div class="bg-white rounded-2xl shadow-lg p-8">
                         <h3 class="cormorant text-2xl font-bold text-navy mb-4">Is there parking available?</h3>
                         <p class="text-gray-700">Yes, we have free visitor parking on-site. Detailed parking
                             instructions will be included in your confirmation email.</p>
                     </div>
                 </div>

                 <div class="text-center mt-12">
                     <p class="text-xl text-gray-700 mb-8">
                         Have more questions about booking?
                     </p>
                     <a href="contact.html"
                         class="inline-block bg-navy hover:bg-royal-blue text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-lg">
                         <i class="fas fa-question-circle mr-2"></i> Contact Us
                     </a>
                 </div>
             </div>
         </div>
     </section>

     <!-- CTA Section -->
     <section class="py-20 bg-navy text-white">
         <div class="container mx-auto px-4 text-center">
             <h2 class="cormorant text-4xl md:text-5xl font-bold mb-6">Prefer to Book by Phone?</h2>
             <div class="w-32 h-1 bg-gold mx-auto mb-8"></div>
             <p class="text-xl max-w-3xl mx-auto mb-10">
                 Our care coordinators are available to help you schedule an appointment and answer any questions.
             </p>
             <div class="flex flex-col md:flex-row justify-center space-y-6 md:space-y-0 md:space-x-8">
                 <a href="tel:2065551234"
                     class="btn-gold px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-xl">
                     <i class="fas fa-phone-alt mr-2"></i> Call Now: (206) 555-1234
                 </a>
                 <a href="contact.html"
                     class="bg-transparent border-2 border-white hover:bg-white hover:text-navy text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300">
                     <i class="fas fa-envelope mr-2"></i> Email Us
                 </a>
             </div>
         </div>
     </section>
 </div>
