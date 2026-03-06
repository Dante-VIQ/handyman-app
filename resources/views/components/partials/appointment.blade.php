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

<form action="{{ route('appointments.store') }}" method="POST" enctype="multipart/form-data">
     @csrf
     <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
         <div>
             <label for="first_name" class="block mb-2 font-semibold">First Name</label>
             <input type="text" id="first_name" name="first_name"
                 class="w-full bg-white/20 border border-white/30 rounded-lg px-4 py-3 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-gold">
         </div>
         <div>
             <label for="last_name" class="block mb-2 font-semibold">Last Name</label>
             <input type="text" id="last_name" name="last_name"
                 class="w-full bg-white/20 border border-white/30 rounded-lg px-4 py-3 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-gold">
         </div>
     </div>

     <div>
         <label for="email" class="block mb-2 font-semibold">Email Address</label>
         <input type="email" name="email"
             class="w-full bg-white/20 border border-white/30 rounded-lg px-4 py-3 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-gold">
     </div>

     <div>
         <label for="phone" class="block mb-2 font-semibold">Phone Number</label>
         <input type="tel" name="phone"
             class="w-full bg-white/20 border border-white/30 rounded-lg px-4 py-3 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-gold">
     </div>

     <div>
         <label for="message" class="block mb-2 font-semibold">Message</label>
         <textarea id="message" rows="4" name="message"
             class="w-full bg-white/20 border border-white/30 rounded-lg px-4 py-3 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-gold"></textarea>
     </div>

     <button type="submit"
         class="btn-gold w-full py-4 rounded-lg font-bold text-lg transition-all duration-300 shadow-lg">
         <i class="fas fa-paper-plane mr-2"></i> Send Message
     </button>
 </form>
