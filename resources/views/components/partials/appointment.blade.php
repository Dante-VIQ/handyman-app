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
 <form action="{{ route('appointments.store') }}" method="POST" class="space-y-5">
     @csrf
     <div class="grid md:grid-cols-2 gap-4">
         <div>
             <label class="block text-sm font-medium text-[#306f86] mb-1">Full Name *</label>
             <input type="text" name="full_name" required
                 class="w-full p-3 rounded-full border border-soft-blue focus:outline-none focus:ring-2 focus:ring-soft-green">
         </div>
         <div>
             <label class="block text-sm font-medium text-[#306f86] mb-1">Phone *</label>
             <input type="tel" name="phone" required
                 class="w-full p-3 rounded-full border border-soft-blue focus:outline-none focus:ring-2 focus:ring-soft-green">
         </div>
     </div>
     <div>
         <label class="block text-sm font-medium text-[#306f86] mb-1">Email</label>
         <input type="email" name="email"
             class="w-full p-3 rounded-full border border-soft-blue focus:outline-none focus:ring-2 focus:ring-soft-green">
     </div>
     <div>
         <label class="block text-sm font-medium text-[#306f86] mb-1">Service Location (City) *</label>
         <input type="text" name="city" required placeholder="Kent, Auburn, Seattle, etc."
             class="w-full p-3 rounded-full border border-soft-blue focus:outline-none focus:ring-2 focus:ring-soft-green">
     </div>
     <div>
         <label class="block text-sm font-medium text-[#306f86] mb-1">Service Needed *</label>
         <select name="service" required
             class="w-full p-3 rounded-full border border-soft-blue focus:outline-none focus:ring-2 focus:ring-soft-green">
             <option value="">Select a service</option>
             <option value="bathroom">Bathroom Remodeling</option>
             <option value="flooring">Flooring Installation</option>
             <option value="drywall">Drywall Repair</option>
             <option value="painting">Painting</option>
             <option value="plumbing">Plumbing</option>
             <option value="electrical">Electrical</option>
             <option value="general">General Repairs</option>
             <option value="other">Other</option>
         </select>
     </div>
     <div>
         <label class="block text-sm font-medium text-[#306f86] mb-1">Message *</label>
         <textarea name="message" rows="4" required placeholder="Describe your project..."
             class="w-full p-3 rounded-2xl border border-soft-blue focus:outline-none focus:ring-2 focus:ring-soft-green"></textarea>
     </div>
     <div class="flex items-center gap-2">
         <input type="checkbox" name="agree" required id="agree" class="w-4 h-4">
         <label for="agree" class="text-sm text-[#306f86]">I agree to receive calls/texts about my project</label>
     </div>
     <button type="submit"
         class="bg-soft-yellow px-8 py-4 rounded-full font-bold text-lg hover:bg-[#ffefb5] transition w-full">Get Free
         Estimate</button>
 </form>
