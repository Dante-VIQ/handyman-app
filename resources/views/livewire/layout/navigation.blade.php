<?php
use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
};
?>

<div class="sticky top-0 z-50 bg-white shadow-lg" x-data="{ mobileMenuOpen: false }">
    <div class="max-w-7xl mx-auto px-2">
        <div class="flex flex-row justify-between h-20 items-center">
            <!-- Logo Section -->
            <div class="flex-shrink-0 flex items-center">
                <div class="flex items-center justify-center">
                    <div class="h-24 w-auto">
                        <a href="/">
                            <img src="{{ asset('images/logo0.png') }}" alt="Amazing Palace Logo"
                                class="h-32 w-auto object-cover mx-auto">
                        </a>
                    </div>
                    <div class="block">
                        <a href="/" class="block hover:opacity-90 transition-opacity">
                            <h1 class="cormorant text-xl sm:text-2xl font-bold text-navy leading-tight">Amazing Palace</h1>
                            <p class="text-xs font-semibold text-navy tracking-wider">ADULT FAMILY HOME</p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center space-x-4">
                <a href="/" class="font-semibold text-gray-700 hover:text-gold transition duration-200 {{ request()->is('/') ? 'text-gold' : '' }}">Home</a>
                <a href="/all-about"
                    class="font-semibold text-gray-700 hover:text-gold transition duration-200 {{ request()->is('all-about*') ? 'text-gold' : '' }}">About</a>
                <a href="/facility"
                    class="font-semibold text-gray-700 hover:text-gold transition duration-200 {{ request()->is('facility*') ? 'text-gold' : '' }}">Facility</a>
                <a href="/careteam" class="font-semibold text-gray-700 hover:text-gold transition duration-200 {{ request()->is('careteam*') ? 'text-gold' : '' }}">Care Team</a>
                <a href="/contact"
                    class="font-semibold text-gray-700 hover:text-gold transition duration-200 {{ request()->is('contact*') ? 'text-gold' : '' }}">Contact</a>
                @role('master|engineer')
                    <a href="/analysis"
                        class="font-semibold text-gray-700 hover:text-gold transition duration-200 {{ request()->is('analysis*') ? 'text-gold' : '' }}">Admin</a>
                @endrole
            </nav>
            
            <div class="hidden lg:flex items-center space-x-6">
                <!-- Auth for Desktop -->
                @auth
                    <div x-data="{ show: false }" @click.away="show = false" class="relative">
                        <button @click="show = !show"
                            class="flex items-center space-x-2 text-gray-700 hover:text-gold focus:outline-none">
                            <div class="text-right">
                                <div class="font-medium text-base">{{ Auth::user()->name }}</div>
                                <div class="font-medium text-xs text-gray-500">{{ Auth::user()->email }}</div>
                            </div>
                            <i class="fas fa-chevron-down text-sm transition-transform duration-200" :class="{ 'rotate-180': show }"></i>
                        </button>

                        <div x-show="show" x-cloak x-transition
                            class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 z-50 border border-gray-100">
                            <button wire:click="logout"
                                class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-red-600 transition">
                                <i class="fas fa-sign-out-alt mr-2"></i>Log Out
                            </button>
                        </div>
                    </div>
                @endauth

                @guest
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('login') }}" class="text-sm font-semibold text-gray-700 hover:text-gold">Login</a>
                        <a href="{{ route('register') }}"
                            class="bg-navy text-white px-4 py-2 rounded-full text-sm font-semibold hover:bg-navy-dark transition hover:shadow-lg">
                            Register
                        </a>
                    </div>
                @endguest
            </div>
            
            <!-- Mobile menu button -->
            <div class="flex items-center lg:hidden space-x-4">
                @auth
                    <div class="hidden sm:block text-right">
                        <div class="font-medium text-sm text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="text-xs text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                @endauth

                <button @click="mobileMenuOpen = !mobileMenuOpen" 
                        class="text-gray-700 hover:text-gold focus:outline-none transition"
                        aria-label="Toggle mobile menu">
                    <i class="fas text-2xl" :class="mobileMenuOpen ? 'fa-times' : 'fa-bars'"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" x-cloak x-transition.opacity.duration.300ms
         class="lg:hidden bg-white border-t border-gray-100 shadow-lg max-h-[80vh] overflow-y-auto">
        <div class="px-4 pt-2 pb-6 space-y-1">

            <!-- Navigation Links -->
            <a href="/" @click="mobileMenuOpen = false"
                class="block py-3 px-4 text-base font-semibold text-gray-700 hover:text-gold hover:bg-gray-50 rounded-lg transition {{ request()->is('/') ? 'text-gold bg-gray-50' : '' }}">Home</a>
            <a href="/all-about" @click="mobileMenuOpen = false"
                class="block py-3 px-4 text-base font-semibold text-gray-700 hover:text-gold hover:bg-gray-50 rounded-lg transition {{ request()->is('all-about*') ? 'text-gold bg-gray-50' : '' }}">About</a>
            <a href="/facility" @click="mobileMenuOpen = false"
                class="block py-3 px-4 text-base font-semibold text-gray-700 hover:text-gold hover:bg-gray-50 rounded-lg transition {{ request()->is('facility*') ? 'text-gold bg-gray-50' : '' }}">Facility</a>
            <a href="/careteam" @click="mobileMenuOpen = false"
                class="block py-3 px-4 text-base font-semibold text-gray-700 hover:text-gold hover:bg-gray-50 rounded-lg transition {{ request()->is('careteam*') ? 'text-gold bg-gray-50' : '' }}">Care Team</a>
            <a href="/contact" @click="mobileMenuOpen = false"
                class="block py-3 px-4 text-base font-semibold text-gray-700 hover:text-gold hover:bg-gray-50 rounded-lg transition {{ request()->is('contact*') ? 'text-gold bg-gray-50' : '' }}">Contact</a>

            @role('master|engineer')
                <a href="/analysis" @click="mobileMenuOpen = false"
                    class="block py-3 px-4 text-base font-semibold text-gray-700 hover:text-gold hover:bg-gray-50 rounded-lg transition {{ request()->is('analysis*') ? 'text-gold bg-gray-50' : '' }}">Admin</a>
            @endrole

            <!-- Auth for Mobile -->
            @auth
                <div class="pt-6 mt-6 border-t border-gray-200">
                    <div class="px-4 mb-4">
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                    <button wire:click="logout" @click="mobileMenuOpen = false"
                        class="block w-full text-left py-3 px-4 text-base font-semibold text-gray-700 hover:text-red-600 hover:bg-gray-50 rounded-lg transition">
                        <i class="fas fa-sign-out-alt mr-2"></i>Log Out
                    </button>
                </div>
            @endauth

            @guest
                <div class="pt-6 mt-6 border-t border-gray-200 space-y-3">
                    <a href="{{ route('login') }}" @click="mobileMenuOpen = false"
                        class="block py-3 px-4 text-base font-semibold text-gray-700 hover:text-gold hover:bg-gray-50 rounded-lg transition">Login</a>
                    <a href="{{ route('register') }}" @click="mobileMenuOpen = false"
                        class="block bg-slate-800 text-white px-4 py-3 rounded-full text-base font-semibold text-center hover:bg-navy-dark transition hover:shadow-lg">
                        Register
                    </a>
                </div>
            @endguest
        </div>
    </div>
</div>

<!-- Add this script if Alpine.js is not included globally -->
<script>
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        const mobileMenu = document.querySelector('[x-data*="mobileMenuOpen"]');
        const mobileMenuButton = document.querySelector('[aria-label="Toggle mobile menu"]');
        
        if (mobileMenu && mobileMenuButton && !mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target)) {
            Alpine.store('mobileMenuOpen', false);
        }
    });

    // Close mobile menu on escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            Alpine.store('mobileMenuOpen', false);
        }
    });
</script>