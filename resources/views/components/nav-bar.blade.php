<header x-data="{ mobileMenuOpen: false }"
        class="relative flex flex-wrap items-center justify-between gap-4 mb-10 bg-white/70 backdrop-blur-sm py-3 px-4 sm:px-7 rounded-2xl sm:rounded-full border border-soft-blue/60 soft-shadow z-50">
    <!-- Logo -->
    <div class="flex items-center gap-4 z-20">
        <img src="/images/logo.png" alt="GB Handyman Solutions" class="w-12 h-12 sm:w-16 sm:h-16 object-cover">
        <a href="/" class="text-2xl sm:text-3xl font-bold bg-gradient-to-br from-[#166b8a] to-[#2e8cad] bg-clip-text text-transparent">
            GB
        </a>
        <span class="h-6 w-px bg-soft-blue/60 hidden xs:block"></span>
        <span class="text-xs sm:text-sm font-medium text-[#2c6f8a]">handyman solutions</span>
    </div>

    <!-- Mobile Menu Button -->
    <button @click="mobileMenuOpen = !mobileMenuOpen"
            class="lg:hidden flex items-center justify-center w-10 h-10 rounded-full bg-soft-blue border border-soft-blue z-20 focus:outline-none"
            :aria-expanded="mobileMenuOpen">
        <svg x-show="!mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
        <svg x-show="mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5" x-cloak>
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

    <!-- Desktop Navigation -->
    <nav class="hidden lg:flex flex-wrap items-center gap-1 text-sm font-medium">
        <a href="/" class="px-5 py-2 rounded-full text-[#1e607b] hover:bg-soft-blue transition-all duration-200 {{ request()->is('/') ? 'bg-soft-green border border-soft-green font-semibold' : '' }}">
            Home
        </a>
        <a href="/about" class="px-5 py-2 rounded-full text-[#1e607b] hover:bg-soft-blue transition-all duration-200 {{ request()->is('about') ? 'bg-soft-green border border-soft-green font-semibold' : '' }}">
            About
        </a>
        <a href="/services" class="px-5 py-2 rounded-full text-[#1e607b] hover:bg-soft-blue transition-all duration-200 {{ request()->is('services') ? 'bg-soft-green border border-soft-green font-semibold' : '' }}">
            Services
        </a>
        <a href="/service-area" class="px-5 py-2 rounded-full text-[#1e607b] hover:bg-soft-blue transition-all duration-200 {{ request()->is('service-area') ? 'bg-soft-green border border-soft-green font-semibold' : '' }}">
            Service area
        </a>
        <a href="/gallery" class="px-5 py-2 rounded-full text-[#1e607b] hover:bg-soft-blue transition-all duration-200 {{ request()->is('gallery') ? 'bg-soft-green border border-soft-green font-semibold' : '' }}">
            Gallery
        </a>
        <a href="/contact" class="px-5 py-2 rounded-full text-[#1e607b] hover:bg-soft-blue transition-all duration-200 {{ request()->is('contact') ? 'bg-soft-green border border-soft-green font-semibold' : '' }}">
            Contact
        </a>

        @role('master|engineer')
            <a href="/analysis" class="px-5 py-2 rounded-full text-[#1e607b] hover:bg-soft-blue transition-all duration-200 {{ request()->is('analysis') ? 'bg-soft-green border border-soft-green font-semibold' : '' }}">
                Analysis
            </a>
        @endrole

        @auth
            <div class="relative group ml-2">
                <button class="flex items-center gap-2 px-4 py-2 rounded-full bg-soft-blue border border-soft-blue font-semibold hover:bg-[#c5e0ff] transition">
                    <span class="truncate max-w-[100px]">{{ Auth::user()->name }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
                <div class="absolute right-0 mt-2 w-48 bg-white rounded-2xl shadow-lg border border-soft-blue/60 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                    <div class="p-4 border-b border-gray-100">
                        <div class="font-medium text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="text-sm text-gray-500 truncate">{{ Auth::user()->email }}</div>
                    </div>
                   <button wire:click="logout" @click="mobileMenuOpen = false"
                            class="w-full mt-2 px-5 py-3 rounded-2xl bg-red-50 text-red-600 font-semibold hover:bg-red-100 transition text-center">
                        <i class="fas fa-sign-out-alt mr-2"></i>Log Out
                    </button>
                </div>
            </div>
        @endauth

        @guest
            <div class="flex items-center gap-2 ml-2">
                <a href="{{ route('login') }}" class="px-4 py-2 text-sm font-semibold text-gray-700 hover:text-[#166b8a] hover:bg-soft-blue rounded-full transition">
                    Login
                </a>
                <a href="{{ route('register') }}" class="px-4 py-2 bg-[#166b8a] text-white rounded-full text-sm font-semibold hover:bg-[#0e4e63] transition shadow-sm">
                    Register
                </a>
            </div>
        @endguest
    </nav>

    <!-- Mobile Navigation Menu -->
    <div x-show="mobileMenuOpen"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="absolute top-full left-0 right-0 mt-2 lg:hidden bg-white/95 backdrop-blur-sm rounded-3xl shadow-xl border border-soft-blue/60 p-4 z-50"
         @click.away="mobileMenuOpen = false"
         x-cloak>

        <nav class="flex flex-col space-y-1">
            <a href="/" @click="mobileMenuOpen = false"
               class="px-5 py-3 rounded-2xl text-[#1e607b] hover:bg-soft-blue transition-all text-center duration-200 {{ request()->is('/') ? 'bg-soft-green font-semibold' : '' }}">
                Home
            </a>
            <a href="/about" @click="mobileMenuOpen = false"
               class="px-5 py-3 rounded-2xl text-[#1e607b] hover:bg-soft-blue transition-all text-center duration-200 {{ request()->is('about') ? 'bg-soft-green font-semibold' : '' }}">
                About
            </a>
            <a href="/services" @click="mobileMenuOpen = false"
               class="px-5 py-3 rounded-2xl text-[#1e607b] hover:bg-soft-blue transition-all text-center duration-200 {{ request()->is('services') ? 'bg-soft-green font-semibold' : '' }}">
                Services
            </a>
            <a href="/service-area" @click="mobileMenuOpen = false"
               class="px-5 py-3 rounded-2xl text-[#1e607b] hover:bg-soft-blue transition-all text-center duration-200 {{ request()->is('service-area') ? 'bg-soft-green font-semibold' : '' }}">
                Service area
            </a>
            <a href="/gallery" @click="mobileMenuOpen = false"
               class="px-5 py-3 rounded-2xl text-[#1e607b] hover:bg-soft-blue transition-all text-center duration-200 {{ request()->is('gallery') ? 'bg-soft-green font-semibold' : '' }}">
                Gallery
            </a>
            <a href="/contact" @click="mobileMenuOpen = false"
               class="px-5 py-3 rounded-2xl border border-soft-blue font-semibold hover:bg-[#c5e0ff] transition text-center mt-2 {{ request()->is('contact') ? 'bg-soft-green border border-soft-green font-semibold' : '' }}">
                Contact
            </a>

            @role('master|engineer')
                <a href="/analysis" @click="mobileMenuOpen = false"
                   class="px-5 py-3 rounded-2xl border border-soft-blue font-semibold hover:bg-[#c5e0ff] transition text-center">
                    Analysis
                </a>
            @endrole

            @auth
                <div class="border-t border-gray-100 my-2 pt-2">
                    <div class="px-5 py-3 bg-soft-blue/30 rounded-2xl">
                        <div class="font-medium text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="text-sm text-gray-500 truncate">{{ Auth::user()->email }}</div>
                    </div>
                    <button wire:click="logout" @click="mobileMenuOpen = false"
                            class="w-full mt-2 px-5 py-3 rounded-2xl bg-red-50 text-red-600 font-semibold hover:bg-red-100 transition text-center">
                        <i class="fas fa-sign-out-alt mr-2"></i>Log Out
                    </button>
                </div>
            @endauth

            @guest
                <div class="border-t border-gray-100 my-2 pt-2 flex flex-col space-y-2">
                    <a href="{{ route('login') }}" @click="mobileMenuOpen = false"
                       class="px-5 py-3 rounded-2xl text-center font-semibold text-gray-700 hover:bg-soft-blue transition">
                        Login
                    </a>
                    <a href="{{ route('register') }}" @click="mobileMenuOpen = false"
                       class="px-5 py-3 rounded-2xl bg-[#166b8a] text-white font-semibold text-center hover:bg-[#0e4e63] transition">
                        Register
                    </a>
                </div>
            @endguest
        </nav>
    </div>
</header>

<!-- Add Alpine.js if not already included -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<style>
    [x-cloak] { display: none !important; }
</style>
