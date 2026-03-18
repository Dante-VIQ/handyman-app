<header x-data="{ mobileMenuOpen: false, scrolled: false }"
    x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 20 })"
    :class="scrolled ? 'bg-white/95 backdrop-blur-md shadow-lg py-2' : 'bg-white/80 backdrop-blur-sm py-3'"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 px-4 md:px-6">

    <div class="max-w-8xl mx-auto flex items-center justify-between pb-4">
        <!-- Logo with refined styling - more professional -->
        <a href="/" class="flex items-center gap-3 group">
            <!-- Logo image with container -->
            <div class="relative">
                <div class="absolute inset-0 bg-amber-400/20 rounded-xl blur-md group-hover:bg-amber-400/30 transition-all duration-300"></div>
                <img src="/images/logo.png" alt="GB Handyman Logo"
                    class="relative h-10 md:h-12 w-auto object-contain transform group-hover:scale-105 transition-all duration-300"
                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
            </div>

            <!-- Brand text with better typography -->
            <div class="flex flex-col">
                <span class="font-black text-xl md:text-2xl tracking-tight text-gray-800 leading-tight">
                    GB<span class="text-red-600"> Handyman</span>
                </span>
                <span class="text-xs text-gray-500 tracking-wider -mt-1">trusted • reliable • local</span>
            </div>

            <!-- Fallback logo (only shows if image fails to load) -->
            <div class="hidden items-center gap-2" style="display: none;" data-fallback-logo>
                <div class="bg-gradient-to-br from-amber-500 to-amber-400 text-white p-2.5 rounded-xl shadow-md">
                    <i class="fas fa-tools text-xl"></i>
                </div>
                <div class="flex flex-col">
                    <span class="font-black text-2xl tracking-tight text-gray-800 leading-tight">
                        GB<span class="text-amber-600"> Handyman</span>
                    </span>
                    <span class="text-xs text-gray-500">trusted • reliable • local</span>
                </div>
            </div>
        </a>

        <!-- Desktop Navigation - refined and professional -->
        <nav class="hidden lg:flex items-center gap-1">
            @php
                $navItems = [
                    '/' => ['Home', 'fas fa-home'],
                    '/about' => ['About', 'fas fa-info-circle'],
                    '/services' => ['Services', 'fas fa-toolbox'],
                    '/gallery' => ['Gallery', 'fas fa-camera-retro'],
                    '/contact' => ['Contact', 'fas fa-envelope'],
                ];
            @endphp

            @foreach($navItems as $url => $item)
                <a href="{{ $url }}"
                   class="relative px-4 py-2.5 text-gray-600 hover:text-amber-700 font-medium transition-all duration-200 group {{ request()->is(ltrim($url, '/') ?: '/') ? 'text-amber-700' : '' }}">
                    <span class="relative z-10 flex items-center gap-2">
                        <i class="{{ $item[1] }} text-sm {{ request()->is(ltrim($url, '/') ?: '/') ? 'text-amber-500' : 'text-gray-400 group-hover:text-amber-400' }}"></i>
                        {{ $item[0] }}
                    </span>
                    <!-- Animated underline -->
                    <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-amber-400 group-hover:w-full transition-all duration-300 {{ request()->is(ltrim($url, '/') ?: '/') ? 'w-full bg-amber-500' : '' }}"></span>
                </a>
            @endforeach

            @role('master|engineer')
                <a href="/analysis"
                   class="relative px-4 py-2.5 text-gray-600 hover:text-amber-700 font-medium transition-all duration-200 group {{ request()->is('analysis') ? 'text-amber-700' : '' }}">
                    <span class="relative z-10 flex items-center gap-2">
                        <i class="fas fa-chart-bar text-sm {{ request()->is('analysis') ? 'text-amber-500' : 'text-gray-400 group-hover:text-amber-400' }}"></i>
                        Analysis
                    </span>
                    <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-amber-400 group-hover:w-full transition-all duration-300 {{ request()->is('analysis') ? 'w-full bg-amber-500' : '' }}"></span>
                </a>
            @endrole
        </nav>

        <!-- Right side actions - professional buttons -->
        <div class="flex items-center gap-3">
            @auth
                <div class="hidden lg:block">
                    <div class="relative" x-data="{ profileOpen: false }">
                        <button @click="profileOpen = !profileOpen"
                                class="flex items-center gap-2 pl-4 pr-3 py-2.5 rounded-xl bg-gradient-to-r from-red-50 to-red-100/50 border border-red-200 text-amber-800 font-semibold hover:from-amber-100 hover:to-amber-200 transition-all duration-200 shadow-sm">
                            <i class="fas fa-user-circle text-red-500 text-lg"></i>
                            <span class="truncate max-w-[100px]">{{ Auth::user()->name }}</span>
                            <i class="fas fa-chevron-down text-xs text-amber-600 transition-transform duration-200" :class="profileOpen ? 'rotate-180' : ''"></i>
                        </button>

                        <!-- Dropdown menu -->
                        <div x-show="profileOpen"
                             @click.away="profileOpen = false"
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 scale-95"
                             x-transition:enter-end="opacity-100 scale-100"
                             class="absolute right-0 mt-2 w-64 bg-white rounded-xl shadow-xl border border-amber-100 overflow-hidden z-50">
                            <div class="p-4 bg-gradient-to-r from-amber-50 to-white border-b border-amber-100">
                                <div class="font-medium text-gray-800">{{ Auth::user()->name }}</div>
                                <div class="text-sm text-gray-500 truncate mt-1">{{ Auth::user()->email }}</div>
                            </div>
                            <div class="p-2">
                                <a href="/profile" class="flex items-center gap-3 px-4 py-2.5 text-gray-700 hover:bg-amber-50 rounded-lg transition">
                                    <i class="fas fa-user-cog text-amber-500 w-5"></i>
                                    Profile Settings
                                </a>
                                {{-- <a href="/bookings" class="flex items-center gap-3 px-4 py-2.5 text-gray-700 hover:bg-amber-50 rounded-lg transition">
                                    <i class="fas fa-calendar-check text-amber-500 w-5"></i>
                                    My Bookings
                                </a> --}}
                                <button wire:click="logout"
                                        class="w-full flex items-center gap-3 px-4 py-2.5 text-red-600 hover:bg-red-50 rounded-lg transition text-left">
                                    <i class="fas fa-sign-out-alt w-5"></i>
                                    Log Out
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endauth

            @guest
                <div class="hidden lg:flex items-center gap-2">
                    <a href="{{ route('login') }}"
                       class="px-5 py-2.5 text-sm font-semibold text-gray-600 hover:text-amber-700 hover:bg-amber-50 rounded-xl transition-all duration-200">
                        Sign In
                    </a>
                    <a href="{{ route('register') }}"
                       class="px-5 py-2.5 bg-gradient-to-r from-red-500 to-red-600 text-white rounded-xl text-sm font-semibold hover:from-amber-600 hover:to-amber-700 transition-all duration-200 shadow-md shadow-amber-200/50 flex items-center gap-2">
                        <i class="fas fa-user-plus text-xs"></i>
                        Get Started
                    </a>
                </div>
            @endguest

            <!-- Quote/Estimate Button - Prominent CTA -->
            <a href="/contact"
               class="hidden lg:flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-red-500 to-red-600 text-white rounded-xl text-sm font-semibold hover:from-amber-600 hover:to-amber-700 transition-all duration-200 shadow-md shadow-amber-200/50 ml-2">
                <i class="fas fa-calculator"></i>
                Free Quote
            </a>

            <!-- Mobile menu button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen"
                    class="lg:hidden flex items-center justify-center w-12 h-12 rounded-xl bg-amber-50 border border-amber-200 text-amber-600 hover:bg-amber-100 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-amber-300">
                <svg x-show="!mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <svg x-show="mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5" x-cloak>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation Menu - improved design -->
    <div x-show="mobileMenuOpen"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="lg:hidden fixed top-[72px] left-4 right-4 bg-white rounded-2xl shadow-2xl border border-amber-200/60 overflow-hidden z-50"
         @click.away="mobileMenuOpen = false"
         x-cloak>

        <div class="max-h-[calc(100vh-100px)] overflow-y-auto">
            <!-- Mobile menu header -->
            <div class="p-4 bg-gradient-to-r from-amber-50 to-white border-b border-amber-100">
                <span class="text-sm font-semibold text-amber-600">MENU</span>
            </div>

            <!-- Navigation links -->
            <nav class="p-3 space-y-1">
                @foreach($navItems as $url => $item)
                    <a href="{{ $url }}" @click="mobileMenuOpen = false"
                       class="flex items-center gap-3 px-4 py-3.5 rounded-xl text-gray-700 hover:bg-amber-50 hover:text-amber-700 transition-all duration-200 {{ request()->is(ltrim($url, '/') ?: '/') ? 'bg-amber-100 text-amber-800 font-medium' : '' }}">
                        <i class="{{ $item[1] }} w-5 text-center {{ request()->is(ltrim($url, '/') ?: '/') ? 'text-amber-600' : 'text-gray-400' }}"></i>
                        {{ $item[0] }}
                    </a>
                @endforeach

                @role('master|engineer')
                    <a href="/analysis" @click="mobileMenuOpen = false"
                       class="flex items-center gap-3 px-4 py-3.5 rounded-xl text-gray-700 hover:bg-amber-50 hover:text-amber-700 transition-all duration-200 {{ request()->is('analysis') ? 'bg-amber-100 text-amber-800 font-medium' : '' }}">
                        <i class="fas fa-chart-bar w-5 text-center {{ request()->is('analysis') ? 'text-amber-600' : 'text-gray-400' }}"></i>
                        Analysis
                    </a>
                @endrole

                <!-- Mobile CTA -->
                <div class="pt-4 mt-4 border-t border-amber-100">
                    <a href="/quote" @click="mobileMenuOpen = false"
                       class="flex items-center justify-center gap-2 px-5 py-4 bg-gradient-to-r from-red-500 to-red-600 text-white rounded-xl font-semibold shadow-md hover:from-amber-600 hover:to-amber-700 transition-all duration-200">
                        <i class="fas fa-calculator"></i>
                        Get Free Estimate
                    </a>
                </div>

                <!-- Mobile auth section -->
                @auth
                    <div class="pt-4 mt-2 border-t border-amber-100">
                        <div class="px-4 py-3 bg-amber-50/80 rounded-xl border border-amber-100 mb-2">
                            <div class="font-medium text-gray-800 flex items-center gap-2">
                                <i class="fas fa-user-circle text-amber-500"></i>
                                {{ Auth::user()->name }}
                            </div>
                            <div class="text-sm text-gray-500 truncate mt-1">{{ Auth::user()->email }}</div>
                        </div>
                        <button wire:click="logout" @click="mobileMenuOpen = false"
                                class="w-full px-5 py-4 rounded-xl bg-red-50 text-red-600 font-semibold hover:bg-red-100 transition text-center flex items-center justify-center gap-2">
                            <i class="fas fa-sign-out-alt"></i>Log Out
                        </button>
                    </div>
                @endauth

                @guest
                    <div class="pt-4 mt-2 border-t border-amber-100 space-y-2">
                        <a href="{{ route('login') }}" @click="mobileMenuOpen = false"
                           class="flex items-center justify-center gap-2 px-5 py-3.5 rounded-xl text-center font-semibold text-gray-700 hover:bg-amber-50 hover:text-amber-700 transition border border-gray-200">
                            <i class="fas fa-sign-in-alt"></i> Sign In
                        </a>
                        <a href="{{ route('register') }}" @click="mobileMenuOpen = false"
                           class="flex items-center justify-center gap-2 px-5 py-3.5 rounded-xl bg-gradient-to-r from-amber-500 to-amber-600 text-white font-semibold text-center hover:from-amber-600 hover:to-amber-700 transition shadow-md">
                            <i class="fas fa-user-plus"></i> Create Account
                        </a>
                    </div>
                @endguest
            </nav>
        </div>
    </div>
</header>

<!-- Add spacing to push content below fixed header -->
{{-- <div class="h-20 md:h-24"></div> --}}

<!-- JavaScript for fallback logo -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const logo = document.querySelector('img[alt="GB Handyman Logo"]');
        if (logo) {
            logo.addEventListener('error', function() {
                this.style.display = 'none';
                const fallback = document.querySelector('[data-fallback-logo]');
                if (fallback) fallback.style.display = 'flex';
            });
        }
    });
</script>

<!-- Alpine.js -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
