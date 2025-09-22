<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="LokaVation - Transformasi Digital untuk Pariwisata Lokal Indonesia. Membantu destinasi wisata lokal menjadi lebih profesional dan siap bersaing di era digital.">
    <meta name="keywords" content="pariwisata indonesia, transformasi digital, desa wisata, branding wisata, website wisata">
    <title>@yield('title', 'LokaVation - Transformasi Digital Pariwisata Lokal')</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons@latest/icons-sprite.svg">
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @stack('styles')
</head>
<body class="font-sans antialiased">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center mr-3">
                            <span class="text-white font-bold text-lg">L</span>
                        </div>
                        <span class="text-xl font-bold text-text">LokaVation</span>
                    </a>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                            Beranda
                        </a>
                        <a href="{{ route('services') }}" class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}">
                            Layanan
                        </a>
                        <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                            Tentang Kami
                        </a>
                        <a href="#contact" class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-primary-600 transition-colors duration-200">
                            Hubungi Kami
                        </a>
                    </div>
                </div>
                
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" class="mobile-menu-btn inline-flex items-center justify-center p-2 rounded-md text-text hover:text-primary hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary">
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile menu -->
        <div class="mobile-menu hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border-t">
                <a href="{{ route('home') }}" class="mobile-nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                    Beranda
                </a>
                <a href="{{ route('services') }}" class="mobile-nav-link {{ request()->routeIs('services') ? 'active' : '' }}">
                    Layanan
                </a>
                <a href="{{ route('about') }}" class="mobile-nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                    Tentang Kami
                </a>
                <a href="#contact" class="block w-full text-center bg-primary text-white px-3 py-2 rounded-md font-medium mt-4">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-text text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center mb-4">
                        <div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center mr-3">
                            <span class="text-white font-bold text-lg">L</span>
                        </div>
                        <span class="text-xl font-bold">LokaVation</span>
                    </div>
                    <p class="text-gray-300 mb-4">
                        Menjadi mitra teknologi terdepan dalam akselerasi ekonomi kreatif dan pariwisata berbasis komunitas di Indonesia.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-primary transition-colors duration-200">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-primary transition-colors duration-200">
                            <span class="sr-only">Instagram</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.62 5.367 11.987 11.988 11.987s11.987-5.367 11.987-11.987C24.014 5.367 18.647.001 12.017.001zM8.449 16.988c-2.452 0-4.44-1.988-4.44-4.44s1.988-4.44 4.44-4.44 4.44 1.988 4.44 4.44-1.988 4.44-4.44 4.44zm7.938 0c-2.452 0-4.44-1.988-4.44-4.44s1.988-4.44 4.44-4.44 4.44 1.988 4.44 4.44-1.988 4.44-4.44 4.44z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-primary transition-colors duration-200">
                            <span class="sr-only">LinkedIn</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h3 class="font-semibold mb-4">Tautan Cepat</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="{{ route('home') }}" class="hover:text-primary transition-colors duration-200">Beranda</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-primary transition-colors duration-200">Layanan</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-primary transition-colors duration-200">Tentang Kami</a></li>
                        <li><a href="#contact" class="hover:text-primary transition-colors duration-200">Hubungi Kami</a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h3 class="font-semibold mb-4">Kontak</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li>
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                </svg>
                                info@lokavation.id
                            </span>
                        </li>
                        <li>
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                </svg>
                                +62 812-3456-7890
                            </span>
                        </li>
                        <li>
                            <span class="flex items-start">
                                <svg class="w-4 h-4 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                Jakarta, Indonesia
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-300">
                <p>&copy; {{ date('Y') }} LokaVation. Semua hak cipta dilindungi.</p>
            </div>
        </div>
    </footer>

    @stack('scripts')
    
    <style>
        .nav-link {
            @apply text-text hover:text-primary px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200;
        }
        
        .nav-link.active {
            @apply text-primary font-semibold;
        }
        
        .mobile-nav-link {
            @apply text-text hover:text-primary hover:bg-gray-50 block px-3 py-2 rounded-md text-base font-medium transition-colors duration-200;
        }
        
        .mobile-nav-link.active {
            @apply text-primary bg-primary-50 font-semibold;
        }
    </style>
</body>
</html>