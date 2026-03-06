<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>GB Handyman - Admin @yield('title', 'Dashboard')</title>
    <meta name="robots" content="noindex, nofollow">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    
    <style>
        * { font-family: 'Inter', sans-serif; }
        .bg-soft-blue { background-color: #d9ecff; }
        .bg-soft-white { background-color: #fcfefc; }
        .bg-soft-green { background-color: #e6f3e6; }
        .bg-soft-yellow { background-color: #fff9db; }
        .border-soft-blue { border-color: #c5e0ff; }
        .border-soft-green { border-color: #d2ecce; }
        .border-soft-yellow { border-color: #ffefb0; }
        .soft-shadow { box-shadow: 0 15px 30px -12px rgba(27, 94, 117, 0.12); }
        .text-soft-teal { color: #1f5f7a; }
        .hover-lift:hover { transform: translateY(-2px); box-shadow: 0 20px 25px -5px rgba(27, 94, 117, 0.1); }
    </style>

    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#f5faff] font-sans antialiased">

    <!-- NAVBAR -->
    <nav class="fixed top-0 left-0 right-0 h-16 bg-white/90 backdrop-blur-sm border-b border-soft-blue/60 soft-shadow flex items-center px-4 sm:px-6 z-20">
        <!-- Mobile Hamburger -->
        <button id="mobile-menu-button" class="lg:hidden text-[#1e4f63] hover:bg-soft-blue p-2 rounded-full transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
        
        <!-- Brand -->
        <a href="{{ route('analysis') }}" class="flex items-center gap-2 ml-2 lg:ml-0">
            <span class="text-2xl font-bold bg-gradient-to-br from-[#166b8a] to-[#2e8cad] bg-clip-text text-transparent">GB</span>
            <span class="h-6 w-px bg-soft-blue/60"></span>
            <span class="text-sm font-medium text-[#2c6f8a] hidden sm:block">handyman admin</span>
        </a>
        
        <!-- Spacer -->
        <div class="flex-1"></div>
        
        <!-- User Dropdown -->
        <div class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="flex items-center gap-2 text-[#1e4f63] hover:bg-soft-blue px-3 py-2 rounded-full transition">
                <div class="w-8 h-8 rounded-full bg-gradient-to-br from-soft-blue to-soft-green flex items-center justify-center">
                    <span class="text-sm font-semibold text-[#1e4f63]">A</span>
                </div>
                <span class="hidden sm:block text-sm font-medium">Admin</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            
            <div x-show="open" @click.away="open = false" x-transition class="absolute right-0 mt-2 w-48 bg-white rounded-2xl shadow-xl border border-soft-blue/60 overflow-hidden z-30">
                <div class="p-3 border-b border-soft-blue/30 bg-soft-blue/20">
                    <p class="text-sm font-medium text-[#1e4f63]">Administrator</p>
                    <p class="text-xs text-[#4a7e93]">admin@gbhandyman.com</p>
                </div>
                <a href="/" class="flex items-center gap-2 px-4 py-3 text-[#1e4f63] hover:bg-soft-blue transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    <span class="text-sm">Back to Site</span>
                </a>
              
                    <button wire:click="logout" class="w-full text-left flex items-center gap-2 px-4 py-3 text-red-600 hover:bg-red-50 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                        <span class="text-sm">Logout</span>
                    </button>
              
            </div>
        </div>
    </nav>

    <!-- SIDEBAR (Desktop & Mobile) -->
    <div class="flex pt-16 min-h-screen">
        <!-- Desktop Sidebar -->
        <aside class="hidden lg:flex flex-col w-72 bg-white/80 backdrop-blur-sm border-r border-soft-blue/60 soft-shadow fixed h-[calc(100vh-4rem)] overflow-y-auto">
            <div class="p-6">
                <div class="mb-6 pb-4 border-b border-soft-blue/40">
                    <h2 class="text-xs font-semibold text-[#4a7e93] uppercase tracking-wider">Main Menu</h2>
                </div>
                @include('admin.partials.sidebar')
            </div>
        </aside>

        <!-- Mobile Sidebar (off-canvas) -->
        <aside id="mobile-sidebar" class="fixed inset-y-0 left-0 w-72 bg-white/95 backdrop-blur-sm border-r border-soft-blue/60 shadow-xl transform -translate-x-full transition-transform duration-300 ease-in-out z-40 lg:hidden overflow-y-auto">
            <div class="p-6">
                <div class="flex justify-between items-center mb-6 pb-4 border-b border-soft-blue/40">
                    <h2 class="text-xs font-semibold text-[#4a7e93] uppercase tracking-wider">Menu</h2>
                    <button id="mobile-menu-close" class="text-[#1e4f63] hover:bg-soft-blue p-2 rounded-full transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                @include('admin.partials.sidebar')
            </div>
        </aside>

        <!-- MAIN CONTENT -->
        <main class="flex-1 ml-0 lg:ml-72 p-6 lg:p-8">
            <!-- Breadcrumb / Page Header -->
            <div class="mb-6 flex items-center justify-between">
                <div>
                    <h1 class="text-2xl lg:text-3xl font-bold text-[#115e7a]">@yield('title', 'Dashboard')</h1>
                    <p class="text-sm text-[#4a7e93] mt-1">@yield('subtitle', 'Manage your handyman business')</p>
                </div>
                <div class="flex items-center gap-2">
                    @yield('header-actions')
                </div>
            </div>

            <!-- Content Area -->
            <div class="bg-white/80 backdrop-blur-sm rounded-3xl p-6 lg:p-8 border border-soft-blue/60 soft-shadow">
                {{ $slot }}
            </div>
        </main>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-overlay" class="fixed inset-0 bg-black/20 backdrop-blur-sm z-30 hidden lg:hidden" style="display: none;"></div>

    @livewireScripts
    
    <script>
        // Mobile menu toggle with improved UX
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileSidebar = document.getElementById('mobile-sidebar');
            const mobileMenuClose = document.getElementById('mobile-menu-close');
            const mobileOverlay = document.getElementById('mobile-overlay');

            function openMobileMenu() {
                mobileSidebar.classList.remove('-translate-x-full');
                mobileOverlay.style.display = 'block';
                document.body.style.overflow = 'hidden';
            }

            function closeMobileMenu() {
                mobileSidebar.classList.add('-translate-x-full');
                mobileOverlay.style.display = 'none';
                document.body.style.overflow = '';
            }

            if (mobileMenuButton) {
                mobileMenuButton.addEventListener('click', openMobileMenu);
            }

            if (mobileMenuClose) {
                mobileMenuClose.addEventListener('click', closeMobileMenu);
            }

            if (mobileOverlay) {
                mobileOverlay.addEventListener('click', closeMobileMenu);
            }

            // Close on escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeMobileMenu();
                }
            });
        });
    </script>
</body>
</html>