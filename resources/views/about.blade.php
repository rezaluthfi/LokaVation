@extends('layouts.app')

@section('title', 'Tentang Kami - LokaVation')

@section('content')
<!-- Page Header -->
<section class="pt-24 pb-16 bg-gradient-to-r from-primary to-primary-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="animate-fade-in">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Tentang LokaVation
            </h1>
            <p class="text-xl text-primary-100 max-w-3xl mx-auto">
                Misi kami adalah menjadi jembatan antara potensi pariwisata lokal dengan dunia digital.
            </p>
        </div>
    </div>
</section>

<!-- Story Section -->
<section class="py-20 bg-light-background">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="animate-on-scroll">
                <h2 class="text-3xl md:text-4xl font-bold text-text mb-6">
                    Perjalanan Kami Dimulai dari Kepedulian
                </h2>
                <div class="space-y-6 text-lg text-gray-600">
                    <p>
                        Indonesia memiliki ribuan destinasi wisata lokal yang memukau, namun sayangnya banyak yang masih tersembunyi dari mata dunia. Keterbatasan teknologi dan pengelolaan konvensional menjadi penghalang utama bagi destinasi-destinasi indah ini untuk berkembang.
                    </p>
                    <p>
                        Berangkat dari keprihatinan tersebut, LokaVation hadir sebagai solusi. Kami percaya bahwa setiap destinasi wisata lokal memiliki cerita unik yang layak dibagikan dan potensi ekonomi yang dapat memberdayakan masyarakat sekitar.
                    </p>
                    <p>
                        Dengan menggabungkan teknologi modern dan pemahaman mendalam tentang budaya lokal Indonesia, kami berkomitmen membantu destinasi wisata meraih potensi penuh mereka di era digital.
                    </p>
                </div>
            </div>
            <div class="animate-on-scroll">
                <img src="https://placehold.co/600x400/2A9D8F/FFFFFF?text=Tim+LokaVation" 
                     alt="Tim LokaVation" 
                     class="rounded-lg shadow-xl w-full">
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold text-text mb-6">
                Visi & Misi Kami
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Fondasi yang mengarahkan setiap langkah kami dalam memajukan pariwisata Indonesia.
            </p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Vision -->
            <div class="bg-gradient-to-br from-primary to-primary-600 rounded-2xl p-8 text-white animate-on-scroll">
                <div class="flex items-center mb-6">
                    <svg class="w-8 h-8 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                    <h3 class="text-2xl font-bold">Visi</h3>
                </div>
                <p class="text-lg leading-relaxed">
                    Menjadi mitra teknologi terdepan dalam akselerasi ekonomi kreatif dan pariwisata berbasis komunitas di Indonesia.
                </p>
            </div>
            
            <!-- Mission -->
            <div class="bg-gradient-to-br from-secondary to-accent rounded-2xl p-8 text-text animate-on-scroll">
                <div class="flex items-center mb-6">
                    <svg class="w-8 h-8 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    <h3 class="text-2xl font-bold">Misi</h3>
                </div>
                <p class="text-lg leading-relaxed">
                    Memberdayakan destinasi wisata lokal melalui solusi digital yang inovatif, mudah diakses, dan berkelanjutan, serta meningkatkan kapabilitas sumber daya manusia lokal untuk bersaing secara global.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-20 bg-light-background">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold text-text mb-6">
                Nilai-Nilai Kami
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Prinsip-prinsip yang kami pegang teguh dalam setiap kolaborasi dan inovasi.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Value 1 -->
            <div class="bg-white rounded-xl p-6 shadow-lg text-center animate-on-scroll">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-text mb-3">Kepedulian</h3>
                <p class="text-gray-600 text-sm">
                    Berkomitmen memahami dan memenuhi kebutuhan unik setiap destinasi wisata.
                </p>
            </div>
            
            <!-- Value 2 -->
            <div class="bg-white rounded-xl p-6 shadow-lg text-center animate-on-scroll">
                <div class="w-16 h-16 bg-secondary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-secondary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-text mb-3">Inovasi</h3>
                <p class="text-gray-600 text-sm">
                    Menghadirkan solusi kreatif dan teknologi terdepan untuk setiap tantangan.
                </p>
            </div>
            
            <!-- Value 3 -->
            <div class="bg-white rounded-xl p-6 shadow-lg text-center animate-on-scroll">
                <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-accent-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-text mb-3">Kolaborasi</h3>
                <p class="text-gray-600 text-sm">
                    Bekerja sama dengan komunitas lokal untuk hasil yang berkelanjutan.
                </p>
            </div>
            
            <!-- Value 4 -->
            <div class="bg-white rounded-xl p-6 shadow-lg text-center animate-on-scroll">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-text mb-3">Integritas</h3>
                <p class="text-gray-600 text-sm">
                    Menjunjung tinggi transparansi dan profesionalisme dalam setiap layanan.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold text-text mb-6">
                Tim Kami
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Kumpulan individu berbakat dengan passion yang sama: memajukan pariwisata Indonesia.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($teamMembers as $member)
            <div class="bg-light-background rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 animate-on-scroll">
                <div class="aspect-square overflow-hidden">
                    <img src="{{ $member['image'] }}" 
                         alt="{{ $member['name'] }}" 
                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold text-text mb-2">{{ $member['name'] }}</h3>
                    <p class="text-primary font-semibold mb-4">{{ $member['role'] }}</p>
                    <div class="flex justify-center space-x-3">
                        <a href="#" class="text-gray-400 hover:text-primary transition-colors duration-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-primary transition-colors duration-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-primary transition-colors duration-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.62 5.367 11.987 11.988 11.987s11.987-5.367 11.987-11.987C24.014 5.367 18.647.001 12.017.001zM8.449 16.988c-2.452 0-4.44-1.988-4.44-4.44s1.988-4.44 4.44-4.44 4.44 1.988 4.44 4.44-1.988 4.44-4.44 4.44zm7.938 0c-2.452 0-4.44-1.988-4.44-4.44s1.988-4.44 4.44-4.44 4.44 1.988 4.44 4.44-1.988 4.44-4.44 4.44z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="py-20 bg-gradient-to-r from-primary to-primary-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Dampak yang Kami Ciptakan
            </h2>
            <p class="text-xl text-primary-100 max-w-3xl mx-auto">
                Angka-angka yang menunjukkan komitmen kami dalam memajukan pariwisata Indonesia.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Stat 1 -->
            <div class="text-center animate-on-scroll">
                <div class="text-4xl md:text-5xl font-bold text-white mb-2">25+</div>
                <div class="text-primary-200 font-semibold">Destinasi Wisata</div>
                <div class="text-primary-100 text-sm mt-1">yang telah kami bantu transformasi digital</div>
            </div>
            
            <!-- Stat 2 -->
            <div class="text-center animate-on-scroll">
                <div class="text-4xl md:text-5xl font-bold text-white mb-2">150%</div>
                <div class="text-primary-200 font-semibold">Peningkatan Rata-rata</div>
                <div class="text-primary-100 text-sm mt-1">visibilitas online destinasi klien</div>
            </div>
            
            <!-- Stat 3 -->
            <div class="text-center animate-on-scroll">
                <div class="text-4xl md:text-5xl font-bold text-white mb-2">500+</div>
                <div class="text-primary-200 font-semibold">Peserta Pelatihan</div>
                <div class="text-primary-100 text-sm mt-1">pengelola wisata yang telah diberdayakan</div>
            </div>
            
            <!-- Stat 4 -->
            <div class="text-center animate-on-scroll">
                <div class="text-4xl md:text-5xl font-bold text-white mb-2">98%</div>
                <div class="text-primary-200 font-semibold">Tingkat Kepuasan</div>
                <div class="text-primary-100 text-sm mt-1">klien terhadap layanan kami</div>
            </div>
        </div>
    </div>
</section>

<!-- Awards & Recognition Section -->
<section class="py-20 bg-light-background">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold text-text mb-6">
                Penghargaan & Pengakuan
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Apresiasi atas dedikasi kami dalam memajukan sektor pariwisata Indonesia.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Award 1 -->
            <div class="bg-white rounded-xl p-8 shadow-lg text-center animate-on-scroll">
                <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-text mb-4">Best Innovation Award</h3>
                <p class="text-gray-600 mb-2">Indonesia Tourism Tech Summit 2024</p>
                <p class="text-sm text-gray-500">Kategori: Digital Solution for Local Tourism</p>
            </div>
            
            <!-- Award 2 -->
            <div class="bg-white rounded-xl p-8 shadow-lg text-center animate-on-scroll">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-text mb-4">Startup of the Year</h3>
                <p class="text-gray-600 mb-2">Indonesian Creative Economy Awards 2024</p>
                <p class="text-sm text-gray-500">Kategori: Tourism & Hospitality Technology</p>
            </div>
            
            <!-- Award 3 -->
            <div class="bg-white rounded-xl p-8 shadow-lg text-center animate-on-scroll">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-text mb-4">Social Impact Recognition</h3>
                <p class="text-gray-600 mb-2">Ministry of Tourism RI 2024</p>
                <p class="text-sm text-gray-500">Kategori: Community Empowerment Through Technology</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-secondary to-accent">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold text-text mb-6">
                Mari Berkolaborasi Memajukan Pariwisata Indonesia
            </h2>
            <p class="text-xl text-text/80 mb-8">
                Bergabunglah dengan kami dalam misi membangun ekosistem pariwisata digital yang berkelanjutan.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#contact" 
                   class="bg-primary hover:bg-primary-600 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105">
                    Mulai Kemitraan
                </a>
                <a href="{{ route('services') }}" 
                   class="bg-white text-primary hover:bg-gray-100 px-8 py-4 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105">
                    Lihat Layanan Kami
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section id="contact" class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold text-text mb-6">
                Hubungi Tim Kami
            </h2>
            <p class="text-xl text-gray-600">
                Siap menjadi bagian dari transformasi digital pariwisata Indonesia? Mari diskusikan potensi destinasi Anda.
            </p>
        </div>
        
        <div class="bg-light-background rounded-xl shadow-lg p-8 animate-on-scroll">
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