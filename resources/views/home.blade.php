@extends('layouts.app')

@section('title', 'LokaVation - Transformasi Digital Pariwisata Lokal Indonesia')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="https://placehold.co/1920x1080/2A9D8F/FFFFFF?text=Pemandangan+Desa+Wisata" 
             alt="Pemandangan Desa Wisata" 
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    </div>
    
    <!-- Hero Content -->
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
        <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-fade-in">
            Transformasi Digital untuk 
            <span class="text-secondary">Pariwisata Lokal</span> Indonesia
        </h1>
        <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto animate-fade-in-delay">
            LokaVation membantu destinasi wisata Anda lebih dikenal, profesional, dan siap bersaing di era digital melalui teknologi dan pemberdayaan.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center animate-fade-in-delay-2">
            <a href="{{ route('services') }}" 
               class="bg-primary hover:bg-primary-600 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105">
                Lihat Layanan Kami
            </a>
            <a href="#contact" 
               class="bg-transparent border-2 border-white hover:bg-white hover:text-text text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105">
                Hubungi Kami
            </a>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>

<!-- Problem Statement Section -->
<section class="py-20 bg-light-background">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold text-text mb-6">
                Potensi Lokal Tersembunyi Akibat Kesenjangan Digital
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Banyak destinasi wisata lokal Indonesia memiliki potensi luar biasa, namun terhambat oleh keterbatasan teknologi dan pengelolaan konvensional.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Problem 1 -->
            <div class="bg-white rounded-xl p-8 shadow-lg text-center animate-on-scroll">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15L9 9m6 0L9 15"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-text mb-4">Informasi Sulit Ditemukan</h3>
                <p class="text-gray-600">
                    Wisatawan kesulitan menemukan informasi yang akurat dan terpercaya mengenai destinasi Anda.
                </p>
            </div>
            
            <!-- Problem 2 -->
            <div class="bg-white rounded-xl p-8 shadow-lg text-center animate-on-scroll">
                <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-text mb-4">Manajemen Konvensional</h3>
                <p class="text-gray-600">
                    Proses manual yang tidak efisien menghambat pertumbuhan dan merusak citra destinasi.
                </p>
            </div>
            
            <!-- Problem 3 -->
            <div class="bg-white rounded-xl p-8 shadow-lg text-center animate-on-scroll">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-text mb-4">Promosi Kurang Efektif</h3>
                <p class="text-gray-600">
                    Keterbatasan kapabilitas digital membuat destinasi Anda sulit bersaing secara luas.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Services Overview Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold text-text mb-6">
                Solusi Digital Terpadu dari LokaVation
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Kami menyediakan ekosistem digital lengkap untuk mengangkat destinasi wisata lokal Anda ke level yang lebih profesional.
            </p>
        </div>
        
        <div class="space-y-20">
            <!-- Service 1 -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="animate-on-scroll">
                    <h3 class="text-2xl md:text-3xl font-bold text-text mb-6">Website & Sistem Digital</h3>
                    <p class="text-lg text-gray-600 mb-6">
                        Situs web profesional, sistem reservasi, dan pembayaran daring untuk meningkatkan kredibilitas dan efisiensi.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-primary mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">Desain responsif dan modern</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-primary mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">Sistem booking online terintegrasi</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-primary mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">Pembayaran digital otomatis</span>
                        </li>
                    </ul>
                    <a href="{{ route('services') }}" class="inline-flex items-center text-primary font-semibold hover:text-primary-600 transition-colors duration-200">
                        Pelajari Lebih Lanjut
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div class="animate-on-scroll">
                    <img src="https://placehold.co/600x400/E9C46A/264653?text=Contoh+Website+Wisata" 
                         alt="Contoh Website Wisata" 
                         class="rounded-lg shadow-xl w-full">
                </div>
            </div>
            
            <!-- Service 2 -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1 animate-on-scroll">
                    <img src="https://placehold.co/600x400/F4A261/264653?text=Contoh+Brand+Guideline" 
                         alt="Contoh Brand Guideline" 
                         class="rounded-lg shadow-xl w-full">
                </div>
                <div class="order-1 lg:order-2 animate-on-scroll">
                    <h3 class="text-2xl md:text-3xl font-bold text-text mb-6">Branding & Identitas Visual</h3>
                    <p class="text-lg text-gray-600 mb-6">
                        Membangun citra destinasi yang konsisten dan profesional melalui logo, panduan visual, dan konten menarik.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-primary mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">Logo dan identitas visual unik</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-primary mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">Panduan brand yang konsisten</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-primary mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">Template konten media sosial</span>
                        </li>
                    </ul>
                    <a href="{{ route('services') }}" class="inline-flex items-center text-primary font-semibold hover:text-primary-600 transition-colors duration-200">
                        Pelajari Lebih Lanjut
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Service 3 -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="animate-on-scroll">
                    <h3 class="text-2xl md:text-3xl font-bold text-text mb-6">Pelatihan & Pemberdayaan</h3>
                    <p class="text-lg text-gray-600 mb-6">
                        Membekali pengelola lokal dengan keterampilan pemasaran digital agar mampu mandiri dan berkelanjutan.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-primary mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">Pelatihan media sosial dan SEO</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-primary mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">Pendampingan berkelanjutan</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-primary mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">Sertifikat kompetensi</span>
                        </li>
                    </ul>
                    <a href="{{ route('services') }}" class="inline-flex items-center text-primary font-semibold hover:text-primary-600 transition-colors duration-200">
                        Pelajari Lebih Lanjut
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div class="animate-on-scroll">
                    <img src="https://placehold.co/600x400/2A9D8F/FFFFFF?text=Suasana+Pelatihan+Digital" 
                         alt="Suasana Pelatihan Digital" 
                         class="rounded-lg shadow-xl w-full">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial Section -->
<section class="py-20 bg-primary">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="animate-on-scroll">
            <svg class="w-12 h-12 text-secondary mx-auto mb-8" fill="currentColor" viewBox="0 0 24 24">
                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
            </svg>
            <blockquote class="text-xl md:text-2xl font-medium text-white mb-8">
                "LokaVation bukan hanya membuatkan kami website, tetapi juga mendampingi kami untuk bisa mengelolanya sendiri. Dampaknya luar biasa!"
            </blockquote>
            <div class="text-secondary font-semibold text-lg">Bapak Suryo</div>
            <div class="text-primary-200">Ketua Pokdarwis Desa Asri</div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section id="contact" class="py-20 bg-light-background">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold text-text mb-6">
                Siap Memajukan Destinasi Anda?
            </h2>
            <p class="text-xl text-gray-600">
                Diskusikan kebutuhan Anda dengan tim kami. Isi formulir di bawah ini dan kami akan segera menghubungi Anda.
            </p>
        </div>
        
        <div class="bg-white rounded-xl shadow-lg p-8 animate-on-scroll">
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                    {{ session('success') }}
                </div>
            @endif
            
            @if(session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                    {{ session('error') }}
                </div>
            @endif
            
            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="nama_lengkap" class="block text-sm font-medium text-text mb-2">
                            Nama Lengkap *
                        </label>
                        <input type="text" 
                               id="nama_lengkap" 
                               name="nama_lengkap" 
                               value="{{ old('nama_lengkap') }}"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-colors duration-200 @error('nama_lengkap') border-red-500 @enderror"
                               placeholder="Masukkan nama lengkap Anda">
                        @error('nama_lengkap')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="nama_destinasi" class="block text-sm font-medium text-text mb-2">
                            Nama Destinasi Wisata *
                        </label>
                        <input type="text" 
                               id="nama_destinasi" 
                               name="nama_destinasi" 
                               value="{{ old('nama_destinasi') }}"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-colors duration-200 @error('nama_destinasi') border-red-500 @enderror"
                               placeholder="Nama destinasi wisata Anda">
                        @error('nama_destinasi')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="email" class="block text-sm font-medium text-text mb-2">
                            Email *
                        </label>
                        <input type="email" 
                               id="email" 
                               name="email" 
                               value="{{ old('email') }}"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-colors duration-200 @error('email') border-red-500 @enderror"
                               placeholder="email@example.com">
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="nomor_telepon" class="block text-sm font-medium text-text mb-2">
                            Nomor Telepon *
                        </label>
                        <input type="tel" 
                               id="nomor_telepon" 
                               name="nomor_telepon" 
                               value="{{ old('nomor_telepon') }}"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-colors duration-200 @error('nomor_telepon') border-red-500 @enderror"
                               placeholder="+62 812-3456-7890">
                        @error('nomor_telepon')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div>
                    <label for="pesan" class="block text-sm font-medium text-text mb-2">
                        Pesan *
                    </label>
                    <textarea id="pesan" 
                              name="pesan" 
                              rows="4"
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-colors duration-200 @error('pesan') border-red-500 @enderror"
                              placeholder="Ceritakan tentang destinasi wisata Anda dan bagaimana kami bisa membantu...">{{ old('pesan') }}</textarea>
                    @error('pesan')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="text-center">
                    <button type="submit" 
                            class="bg-primary hover:bg-primary-600 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
                        Kirim Pesan
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .animate-fade-in { animation: fadeIn 1s ease-out; }
    .animate-fade-in-delay { animation: fadeIn 1s ease-out 0.3s both; }
    .animate-fade-in-delay-2 { animation: fadeIn 1s ease-out 0.6s both; }
    
    .animate-on-scroll {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s ease-out;
    }
    
    .animate-on-scroll.animate {
        opacity: 1;
        transform: translateY(0);
    }
</style>
@endpush