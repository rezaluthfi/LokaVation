<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display the services page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $services = [
            [
                'title' => 'Pengembangan Website & Sistem Digital',
                'description' => 'Kami membangun situs web promosi interaktif yang modern dan responsif, lengkap dengan informasi detail, galeri, kalender event, hingga sistem pembayaran tiket dan parkir secara daring. Tujuannya adalah menciptakan gerbang digital utama yang kredibel bagi destinasi Anda.',
                'features' => [
                    'Desain Responsif',
                    'Galeri Foto & Video',
                    'Sistem Booking Online',
                    'Pembayaran Digital Terintegrasi',
                    'Laporan Keuangan Otomatis'
                ],
                'image' => 'https://placehold.co/600x400/2A9D8F/FFFFFF?text=Fitur+Website'
            ],
            [
                'title' => 'Brand Guidelines & Konten Kreatif',
                'description' => 'Citra profesional dimulai dari identitas visual yang kuat. Tim kami membantu merancang logo, palet warna, tipografi, dan template konten yang selaras dengan karakter unik destinasi Anda. Hasilnya adalah promosi yang konsisten dan mudah dikenali di semua platform.',
                'features' => [
                    'Desain Logo Profesional',
                    'Panduan Palet Warna & Tipografi',
                    'Template Konten Media Sosial',
                    'Gaya Visual Fotografi'
                ],
                'image' => 'https://placehold.co/600x400/E9C46A/264653?text=Proses+Branding'
            ],
            [
                'title' => 'Pelatihan Promosi Digital',
                'description' => 'Teknologi tanpa sumber daya manusia yang terampil tidak akan optimal. Kami menyelenggarakan program pelatihan khusus untuk Pokdarwis dan Karang Taruna, mencakup manajemen media sosial, optimisasi mesin pencari (SEO) dasar, dan pembuatan konten yang menarik agar destinasi bisa mandiri dalam berpromosi.',
                'features' => [
                    'Kurikulum Praktis & Aplikatif',
                    'Studi Kasus Relevan',
                    'Pendampingan Pasca-Pelatihan',
                    'Sertifikat Kompetensi'
                ],
                'image' => 'https://placehold.co/600x400/F4A261/264653?text=Workshop+Pemasaran'
            ]
        ];

        return view('services', compact('services'));
    }
}