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
<form  action="{{ route('appointments.store') }}" method="POST" class="mt-8 space-y-5">
    @csrf
                <div class="grid sm:grid-cols-2 gap-4">
                    <div>
                        <label for="full_name" class="block text-sm font-medium text-gray-700 mb-1">Your name *</label>
                        <input type="text" name="full_name" required placeholder="e.g. David Smith"
                            class="form-input w-full px-5 py-4 rounded-2xl border border-gray-200 focus:outline-none focus:border-amber-400 transition-all bg-white/80">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone number *</label>
                        <input  type="tel" name="phone" required placeholder="0161 234 5678"
                            class="form-input w-full px-5 py-4 rounded-2xl border border-gray-200 focus:outline-none focus:border-amber-400 transition-all bg-white/80">
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
                    <input type="email" name="email" placeholder="you@example.com"
                        class="form-input w-full px-5 py-4 rounded-2xl border border-gray-200 focus:outline-none focus:border-amber-400 transition-all bg-white/80">
                </div>

                <div>
                    <label for="city" class="block text-sm font-medium text-gray-700 mb-1">Your address / location</label>
                    <input type="text" name="city" required placeholder="6249 S 242nd Place, Bldg 8 Apt 203 (or nearby)"
                        class="form-input w-full px-5 py-4 rounded-2xl border border-gray-200 focus:outline-none focus:border-amber-400 transition-all bg-white/80">
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-1">What needs fixing? *</label>
                    <textarea name="message" required rows="5" placeholder="Please describe the job – e.g. dripping tap, TV mounting, painting a room..."
                        class="form-input w-full px-5 py-4 rounded-2xl border border-gray-200 focus:outline-none focus:border-amber-400 transition-all bg-white/80"></textarea>
                </div>


                <button type="submit"
                    class="w-full bg-red-500 hover:bg-amber-600 text-gray-900 font-bold py-5 rounded-2xl shadow-lg text-lg transition-all flex items-center justify-center gap-2">
                    <i class="fas fa-paper-plane"></i> Send message
                </button>

                <p class="text-xs text-gray-400 text-center">We'll never share your details. By submitting you
                    agree to our privacy policy.</p>
            </form>
