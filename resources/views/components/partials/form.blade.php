                    @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6 flex items-center">
                        <i class="fas fa-check-circle mr-3"></i>
                        <span>{{ session('success') }}</span>
                    </div>
                @endif

                @if (session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-6 flex items-center">
                        <i class="fas fa-exclamation-circle mr-3"></i>
                        <span>{{ session('error') }}</span>
                    </div>
                @endif

                <form action="{{ route('appointments.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="first_name" class="block mb-2 font-semibold text-gray-800">First Name *</label>
                                <input type="text" id="first_name" name="first_name" required class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold focus:border-transparent">
                            </div>
                            <div>
                                <label for="last_name" class="block mb-2 font-semibold text-gray-800">Last Name *</label>
                                <input type="text" id="last_name" name="last_name" required class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold focus:border-transparent">
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="email" class="block mb-2 font-semibold text-gray-800">Email Address *</label>
                                <input type="email" id="email" name="email" required class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold focus:border-transparent">
                            </div>
                            <div>
                                <label for="phone" class="block mb-2 font-semibold text-gray-800">Phone Number *</label>
                                <input type="tel" id="phone" name="phone" required class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold focus:border-transparent">
                            </div>
                        </div>
                        
                        <div>
                            <label for="subject" class="block mb-2 font-semibold text-gray-800">Subject</label>
                            <select name="subject" id="subject" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold focus:border-transparent">
                                <option value="">Select a subject</option>
                                <option value="Schedule a Tour">Schedule a Tour</option>
                                <option value="Admissions Information">Admissions Information</option>
                                <option value="Pricing & Financial Options">Pricing & Financial Options</option>
                                <option value="Care Needs Assessment">Care Needs Assessment</option>
                                <option value="Employment Opportunities">Employment Opportunities</option>
                                <option value="General Inquiry">General Inquiry</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="message" class="block mb-2 font-semibold text-gray-800">Message *</label>
                            <textarea id="message" name="message" rows="5" required class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold focus:border-transparent" placeholder="Tell us about your specific needs or questions..."></textarea>
                        </div>
                        
                        <div class="flex items-center">
                            <input type="checkbox" id="consent" name="consent" required class="w-5 h-5 mr-3">
                            <label for="consent" class="text-gray-700">
                                I consent to Amazing Palace contacting me via phone or email regarding my inquiry. *
                            </label>
                        </div>
                        
                        <button type="submit" class="btn-gold w-full py-4 rounded-lg font-bold text-lg transition-all duration-300 shadow-lg">
                            <i class="fas fa-paper-plane mr-2"></i> Send Message
                        </button>
                        
                        <p class="text-gray-600 text-sm text-center">
                            * Required fields. We respect your privacy and will not share your information with third parties.
                        </p>
                    </form>