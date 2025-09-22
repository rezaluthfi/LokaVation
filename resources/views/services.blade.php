@extends('layouts.app')

@section('title', 'Layanan - LokaVation')

@section('content')
<!-- Page Header -->
<section class="pt-24 pb-16 bg-gradient-to-r from-primary to-primary-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="animate-fade-in">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Layanan Kami
            </h1>
            <p class="text-xl text-primary-100 max-w-3xl mx-auto">
                Kami menyediakan ekosistem digital lengkap untuk mendukung setiap tahap pertumbuhan destinasi wisata Anda.
            </p>
        </div>
    </div>
</section>

<!-- Services Detail List -->
<section class="py-20 bg-light-background">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="space-y-24">
            @foreach($services as $index => $service)
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden animate-on-scroll">
                <div class="grid grid-cols-1 lg:grid-cols-2 {{ $index % 2 == 1 ? 'lg:grid-flow-col-dense' : '' }}">
                    <!-- Service Image -->
                    <div class="{{ $index % 2 == 1 ? 'lg:col-start-2' : '' }} relative">
                        <img src="{{ $service['image'] }}" 
                             alt="{{ $service['title'] }}" 
                             class="w-full h-64 lg:h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-r from-primary/20 to-transparent"></div>
                    </div>
                    
                    <!-- Service Content -->
                    <div class="{{ $index % 2 == 1 ? 'lg:col-start-1' : '' }} p-8 lg:p-12">
                        <div class="h-full flex flex-col justify-center">
                            <div class="mb-4">
                                <span class="inline-block bg-primary text-white px-4 py-2 rounded-full text-sm font-semibold">
                                    Layanan {{ $index + 1 }}
                                </span>
                            </div>
                            
                            <h2 class="text-2xl lg:text-3xl font-bold text-text mb-6">
                                {{ $service['title'] }}
                            </h2>
                            
                            <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                                {{ $service['description'] }}
                            </p>
                            
                            <div class="mb-8">
                                <h3 class="text-lg font-semibold text-text mb-4">Fitur Utama:</h3>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                    @foreach($service['features'] as $feature)
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-primary mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-gray-700">{{ $feature }}</span>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            
                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="#contact" 
                                   class="bg-primary hover:bg-primary-600 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 text-center">
                                    Mulai Konsultasi
                                </a>
                                <a href="#" 
                                   class="border-2 border-primary text-primary hover:bg-primary hover:text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 text-center">
                                    Lihat Portfolio
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold text-text mb-6">
                Proses Kerja Kami
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Metodologi yang teruji untuk memastikan hasil terbaik bagi destinasi wisata Anda.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Step 1 -->
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-white font-bold text-xl">1</span>
                </div>
                <h3 class="text-xl font-bold text-text mb-4">Konsultasi & Analisis</h3>
                <p class="text-gray-600">
                    Memahami potensi, tantangan, dan target yang ingin dicapai destinasi Anda.
                </p>
            </div>
            
            <!-- Step 2 -->
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 bg-secondary rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-text font-bold text-xl">2</span>
                </div>
                <h3 class="text-xl font-bold text-text mb-4">Perencanaan Strategi</h3>
                <p class="text-gray-600">
                    Merancang roadmap digital yang sesuai dengan karakteristik dan budget Anda.
                </p>
            </div>
            
            <!-- Step 3 -->
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 bg-accent rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-white font-bold text-xl">3</span>
                </div>
                <h3 class="text-xl font-bold text-text mb-4">Implementasi</h3>
                <p class="text-gray-600">
                    Mengembangkan dan meluncurkan solusi digital dengan standar profesional.
                </p>
            </div>
            
            <!-- Step 4 -->
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-white font-bold text-xl">4</span>
                </div>
                <h3 class="text-xl font-bold text-text mb-4">Pelatihan & Pendampingan</h3>
                <p class="text-gray-600">
                    Memberdayakan tim lokal agar mandiri dalam mengelola ekosistem digital.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-20 bg-light-background">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold text-text mb-6">
                Mengapa Memilih LokaVation?
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Pengalaman dan dedikasi kami dalam mengembangkan pariwisata lokal Indonesia.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Advantage 1 -->
            <div class="bg-white rounded-xl p-8 shadow-lg text-center animate-on-scroll">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-text mb-4">Solusi Inovatif</h3>
                <p class="text-gray-600">
                    Menggunakan teknologi terdepan yang disesuaikan dengan kebutuhan lokal Indonesia.
                </p>
            </div>
            
            <!-- Advantage 2 -->
            <div class="bg-white rounded-xl p-8 shadow-lg text-center animate-on-scroll">
                <div class="w-16 h-16 bg-secondary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-secondary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-text mb-4">Tim Berpengalaman</h3>
                <p class="text-gray-600">
                    Didukung oleh tim ahli dengan track record sukses di industri pariwisata digital.
                </p>
            </div>
            
            <!-- Advantage 3 -->
            <div class="bg-white rounded-xl p-8 shadow-lg text-center animate-on-scroll">
                <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-accent-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-text mb-4">Harga Terjangkau</h3>
                <p class="text-gray-600">
                    Paket layanan yang fleksibel dan sesuai dengan budget destinasi wisata lokal.
                </p>
            </div>
            
            <!-- Advantage 4 -->
            <div class="bg-white rounded-xl p-8 shadow-lg text-center animate-on-scroll">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-text mb-4">Dukungan Berkelanjutan</h3>
                <p class="text-gray-600">
                    Pendampingan dan maintenance untuk memastikan sistem berjalan optimal.
                </p>
            </div>
            
            <!-- Advantage 5 -->
            <div class="bg-white rounded-xl p-8 shadow-lg text-center animate-on-scroll">
                <div class="w-16 h-16 bg-secondary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-secondary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-text mb-4">Hasil Terukur</h3>
                <p class="text-gray-600">
                    Metodologi yang terbukti meningkatkan visibilitas dan revenue destinasi wisata.
                </p>
            </div>
            
            <!-- Advantage 6 -->
            <div class="bg-white rounded-xl p-8 shadow-lg text-center animate-on-scroll">
                <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-accent-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-text mb-4">Komitmen Lokal</h3>
                <p class="text-gray-600">
                    Berdedikasi untuk memajukan pariwisata Indonesia dengan pendekatan yang ramah budaya.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-primary to-primary-600">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Siap Memulai Transformasi Digital?
            </h2>
            <p class="text-xl text-primary-100 mb-8">
                Konsultasikan kebutuhan destinasi wisata Anda dengan tim ahli kami.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#contact" 
                   class="bg-white text-primary hover:bg-gray-100 px-8 py-4 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105">
                    Konsultasi Gratis
                </a>
                <a href="{{ route('about') }}" 
                   class="bg-transparent border-2 border-white hover:bg-white hover:text-primary text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105">
                    Pelajari Tentang Kami
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section id="contact" class="py-20 bg-light-background">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold text-text mb-6">
                Hubungi Kami Sekarang
            </h2>
            <p class="text-xl text-gray-600">
                Tim kami siap membantu mewujudkan visi digital destinasi wisata Anda.
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
                              placeholder="Ceritakan tentang destinasi wisata Anda dan layanan yang dibutuhkan...">{{ old('pesan') }}</textarea>
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