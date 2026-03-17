<header x-data="{ mobileMenuOpen: false }"
    class="relative flex flex-wrap items-center justify-between gap-2 mb-0 bg-white/80 backdrop-blur-md rounded-2xl sm:rounded-full border border-amber-200/60 shadow-lg shadow-amber-100/20 z-50 px-5 sm:px-8 py-3">

    <!-- Logo with refined styling -->
    <div class="flex items-center gap-2">
        <!-- Logo image - fully visible -->
        <img src="/images/logo.png" alt="GB Handyman Logo"
            class="h-12 w-auto object-contain transform hover:scale-105 transition-transform duration-300"
            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">

        <span class="font-bold text-lg sm:text-xl tracking-tight text-gray-800">
            GB<span
                class="text-amber-600 relative after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-amber-400/30 after:rounded-full">
                Handyman</span>
        </span>

        <!-- Fallback logo (only shows if image fails to load) -->
        <div class="hidden items-center gap-2" style="display: none;" data-fallback-logo>
            <div
                class="bg-gradient-to-br from-amber-500 to-amber-400 text-white p-2.5 rounded-xl shadow-md shadow-amber-200/50">
                <i class="fas fa-tools text-xl"></i>
            </div>
            <span class="font-bold text-2xl tracking-tight text-gray-800">
                GB<span
                    class="text-amber-600 relative after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-amber-400/30 after:rounded-full">
                    Handyman</span>
            </span>
        </div>
    </div>

    <!-- JavaScript to handle fallback if needed -->
    <script>
        // This ensures the fallback shows if the logo image fails to load
        document.querySelector('img[alt="GB Handyman Logo"]').addEventListener('error', function() {
            this.style.display = 'none';
            document.querySelector('[data-fallback-logo]').style.display = 'flex';
        });
    </script>

    <!-- Mobile Menu Button - restyled -->
    <button @click="mobileMenuOpen = !mobileMenuOpen"
        class="lg:hidden flex items-center justify-center w-12 h-12 rounded-full bg-amber-50 border border-amber-200 text-amber-600 hover:bg-amber-100 hover:border-amber-300 transition-all duration-200 z-20 focus:outline-none focus:ring-2 focus:ring-amber-300"
        :aria-expanded="mobileMenuOpen">
        <svg x-show="!mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke-width="2" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
        <svg x-show="mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke-width="2" stroke="currentColor" class="w-5 h-5" x-cloak>
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

    <!-- Desktop Navigation - completely rethemed to match GB Handyman -->
    <nav class="hidden md:flex items-center gap-1 text-gray-700 font-medium">
        <a href="/"
            class="px-3 py-2.5 rounded-full text-gray-700 hover:text-amber-700 hover:bg-amber-50 transition-all duration-200 {{ request()->is('/') ? 'bg-amber-100 text-amber-800 font-semibold shadow-sm border border-amber-200' : '' }}">
            <i class="mr-1.5 text-sm {{ request()->is('/') ? 'text-amber-600' : 'text-gray-400' }}"></i>Home
        </a>
        <a href="/about"
            class="px-3 py-2.5 rounded-full text-gray-700 hover:text-amber-700 hover:bg-amber-50 transition-all duration-200 {{ request()->is('about') ? 'bg-amber-100 text-amber-800 font-semibold shadow-sm border border-amber-200' : '' }}">
            <i class="mr-1.5 text-sm {{ request()->is('about') ? 'text-amber-600' : 'text-gray-400' }}"></i>About
        </a>
        <a href="/services"
            class="px-3 py-2.5 rounded-full text-gray-700 hover:text-amber-700 hover:bg-amber-50 transition-all duration-200 {{ request()->is('services') ? 'bg-amber-100 text-amber-800 font-semibold shadow-sm border border-amber-200' : '' }}">
            <i class="mr-1.5 text-sm {{ request()->is('services') ? 'text-amber-600' : 'text-gray-400' }}"></i>Services
        </a>
        <a href="/service-area"
            class="px-3 py-2.5 rounded-full text-gray-700 hover:text-amber-700 hover:bg-amber-50 transition-all duration-200 {{ request()->is('service-area') ? 'bg-amber-100 text-amber-800 font-semibold shadow-sm border border-amber-200' : '' }}">
            <i
                class="mr-1.5 text-sm {{ request()->is('service-area') ? 'text-amber-600' : 'text-gray-400' }}"></i>Service
            area
        </a>
        <a href="/gallery"
            class="px-5 py-2.5 rounded-full text-gray-700 hover:text-amber-700 hover:bg-amber-50 transition-all duration-200 {{ request()->is('gallery') ? 'bg-amber-100 text-amber-800 font-semibold shadow-sm border border-amber-200' : '' }}">
            <i class=" mr-1.5 text-sm {{ request()->is('gallery') ? 'text-amber-600' : 'text-gray-400' }}"></i>Gallery
        </a>
        <a href="/contact"
            class="px-3 py-2.5 rounded-full text-gray-700 hover:text-amber-700 hover:bg-amber-50 transition-all duration-200 {{ request()->is('contact') ? 'bg-amber-100 text-amber-800 font-semibold shadow-sm border border-amber-200' : '' }}">
            <i class="mr-1.5 text-sm {{ request()->is('contact') ? 'text-amber-600' : 'text-gray-400' }}"></i>Contact
        </a>

        @role('master|engineer')
            <a href="/analysis"
                class="px-3 py-2.5 rounded-full text-gray-700 hover:text-amber-700 hover:bg-amber-50 transition-all duration-200 {{ request()->is('analysis') ? 'bg-amber-100 text-amber-800 font-semibold shadow-sm border border-amber-200' : '' }}">
                <i
                    class="fas fa-chart-bar mr-1.5 text-sm {{ request()->is('analysis') ? 'text-amber-600' : 'text-gray-400' }}"></i>Analysis
            </a>
        @endrole

        @auth
            <div class="relative group ml-2">
                <button
                    class="flex items-center gap-2 pl-4 pr-3 py-2.5 rounded-full bg-amber-50 border border-amber-200 text-amber-800 font-semibold hover:bg-amber-100 transition-all shadow-sm">
                    <i class="fas fa-user-circle text-amber-500 text-lg"></i>
                    <span class="truncate max-w-[100px]">{{ Auth::user()->name }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-4 h-4 text-amber-600">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
                <div
                    class="absolute right-0 mt-2 w-56 bg-white rounded-2xl shadow-xl border border-amber-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                    <div class="p-4 border-b border-amber-50">
                        <div class="font-medium text-gray-800 flex items-center gap-2">
                            <i class="fas fa-user-circle text-amber-500"></i>
                            {{ Auth::user()->name }}
                        </div>
                        <div class="text-sm text-gray-500 truncate mt-1">{{ Auth::user()->email }}</div>
                    </div>
                    <button wire:click="logout" @click="mobileMenuOpen = false"
                        class="w-full mt-1 px-5 py-3 rounded-b-2xl bg-red-50 text-red-600 font-semibold hover:bg-red-100 transition text-center flex items-center justify-center gap-2">
                        <i class="fas fa-sign-out-alt"></i>Log Out
                    </button>
                </div>
            </div>
        @endauth

        @guest
            <div class="flex items-center gap-2 ml-3">
                <a href="{{ route('login') }}"
                    class="px-5 py-2.5 text-sm font-semibold text-gray-600 hover:text-amber-700 hover:bg-amber-50 rounded-full transition">
                    Login
                </a>
                <a href="{{ route('register') }}"
                    class="px-6 py-2.5 bg-gradient-to-r from-amber-500 to-amber-600 text-white rounded-full text-sm font-semibold hover:from-amber-600 hover:to-amber-700 transition shadow-md shadow-amber-200/50 flex items-center gap-1.5">
                    <i class="fas fa-user-plus text-xs"></i> Register
                </a>
            </div>
        @endguest
    </nav>

    <!-- Mobile Navigation Menu - rethemed -->
    <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="absolute top-full left-0 right-0 mt-3 lg:hidden bg-white/95 backdrop-blur-sm rounded-2xl shadow-xl border border-amber-200/60 p-3 z-50"
        @click.away="mobileMenuOpen = false" x-cloak>

        <nav class="flex flex-col space-y-1">
            <a href="/" @click="mobileMenuOpen = false"
                class="px-5 py-3.5 rounded-xl text-gray-700 hover:bg-amber-50 hover:text-amber-700 transition-all text-left duration-200 flex items-center gap-3 {{ request()->is('/') ? 'bg-amber-100 text-amber-800 font-semibold border-l-4 border-amber-500' : '' }}">
                <i
                    class="fas fa-home w-5 text-center {{ request()->is('/') ? 'text-amber-600' : 'text-gray-400' }}"></i>
                Home
            </a>
            <a href="/about" @click="mobileMenuOpen = false"
                class="px-5 py-3.5 rounded-xl text-gray-700 hover:bg-amber-50 hover:text-amber-700 transition-all text-left duration-200 flex items-center gap-3 {{ request()->is('about') ? 'bg-amber-100 text-amber-800 font-semibold border-l-4 border-amber-500' : '' }}">
                <i
                    class="fas fa-info-circle w-5 text-center {{ request()->is('about') ? 'text-amber-600' : 'text-gray-400' }}"></i>
                About
            </a>
            <a href="/services" @click="mobileMenuOpen = false"
                class="px-5 py-3.5 rounded-xl text-gray-700 hover:bg-amber-50 hover:text-amber-700 transition-all text-left duration-200 flex items-center gap-3 {{ request()->is('services') ? 'bg-amber-100 text-amber-800 font-semibold border-l-4 border-amber-500' : '' }}">
                <i
                    class="fas fa-toolbox w-5 text-center {{ request()->is('services') ? 'text-amber-600' : 'text-gray-400' }}"></i>
                Services
            </a>
            <a href="/service-area" @click="mobileMenuOpen = false"
                class="px-5 py-3.5 rounded-xl text-gray-700 hover:bg-amber-50 hover:text-amber-700 transition-all text-left duration-200 flex items-center gap-3 {{ request()->is('service-area') ? 'bg-amber-100 text-amber-800 font-semibold border-l-4 border-amber-500' : '' }}">
                <i
                    class="fas fa-map-marker-alt w-5 text-center {{ request()->is('service-area') ? 'text-amber-600' : 'text-gray-400' }}"></i>
                Service area
            </a>
            <a href="/gallery" @click="mobileMenuOpen = false"
                class="px-5 py-3.5 rounded-xl text-gray-700 hover:bg-amber-50 hover:text-amber-700 transition-all text-left duration-200 flex items-center gap-3 {{ request()->is('gallery') ? 'bg-amber-100 text-amber-800 font-semibold border-l-4 border-amber-500' : '' }}">
                <i
                    class="fas fa-camera-retro w-5 text-center {{ request()->is('gallery') ? 'text-amber-600' : 'text-gray-400' }}"></i>
                Gallery
            </a>
            <a href="/contact" @click="mobileMenuOpen = false"
                class="px-5 py-3.5 rounded-xl text-gray-700 hover:bg-amber-50 hover:text-amber-700 transition-all text-left duration-200 flex items-center gap-3 {{ request()->is('contact') ? 'bg-amber-100 text-amber-800 font-semibold border-l-4 border-amber-500' : '' }}">
                <i
                    class="fas fa-envelope w-5 text-center {{ request()->is('contact') ? 'text-amber-600' : 'text-gray-400' }}"></i>
                Contact
            </a>

            @role('master|engineer')
                <a href="/analysis" @click="mobileMenuOpen = false"
                    class="px-5 py-3.5 rounded-xl text-gray-700 hover:bg-amber-50 hover:text-amber-700 transition-all text-left duration-200 flex items-center gap-3 {{ request()->is('analysis') ? 'bg-amber-100 text-amber-800 font-semibold border-l-4 border-amber-500' : '' }}">
                    <i
                        class="fas fa-chart-bar w-5 text-center {{ request()->is('analysis') ? 'text-amber-600' : 'text-gray-400' }}"></i>
                    Analysis
                </a>
            @endrole

            <!-- Free Estimate CTA for mobile -->
            <a href="/quote" @click="mobileMenuOpen = false"
                class="mt-3 px-5 py-4 bg-gradient-to-r from-amber-500 to-amber-600 text-white rounded-xl font-semibold shadow-md hover:from-amber-600 hover:to-amber-700 transition-all text-center flex items-center justify-center gap-2">
                <i class="fas fa-calculator"></i> Free Estimate
            </a>

            @auth
                <div class="border-t border-amber-100 my-2 pt-3">
                    <div class="px-5 py-4 bg-amber-50/80 rounded-xl border border-amber-100">
                        <div class="font-medium text-gray-800 flex items-center gap-2">
                            <i class="fas fa-user-circle text-amber-500"></i>
                            {{ Auth::user()->name }}
                        </div>
                        <div class="text-sm text-gray-500 truncate mt-1">{{ Auth::user()->email }}</div>
                    </div>
                    <button wire:click="logout" @click="mobileMenuOpen = false"
                        class="w-full mt-2 px-5 py-4 rounded-xl bg-red-50 text-red-600 font-semibold hover:bg-red-100 transition text-center flex items-center justify-center gap-2">
                        <i class="fas fa-sign-out-alt"></i>Log Out
                    </button>
                </div>
            @endauth

            @guest
                <div class="border-t border-amber-100 my-2 pt-3 flex flex-col space-y-2">
                    <a href="{{ route('login') }}" @click="mobileMenuOpen = false"
                        class="px-5 py-3.5 rounded-xl text-center font-semibold text-gray-600 hover:bg-amber-50 hover:text-amber-700 transition border border-gray-200">
                        <i class="fas fa-sign-in-alt mr-2"></i>Login
                    </a>
                    <a href="{{ route('register') }}" @click="mobileMenuOpen = false"
                        class="px-5 py-3.5 rounded-xl bg-gradient-to-r from-amber-500 to-amber-600 text-white font-semibold text-center hover:from-amber-600 hover:to-amber-700 transition shadow-md flex items-center justify-center gap-2">
                        <i class="fas fa-user-plus"></i> Register
                    </a>
                </div>
            @endguest
        </nav>
    </div>

</header>

<!-- Add Alpine.js if not already included -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
