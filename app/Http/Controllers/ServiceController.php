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
                'title' => 'Website & Sistem Digital',
                'description' => 'Situs web profesional dengan sistem reservasi dan pembayaran terintegrasi untuk meningkatkan kredibilitas dan efisiensi operasional.',
                'features' => [
                    'Desain Responsif',
                    'Sistem Booking Online',
                    'Payment Gateway',
                    'SEO Optimized'
                ],
                'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2015&q=80'
            ],
            [
                'title' => 'Branding & Identitas Visual',
                'description' => 'Membangun citra destinasi yang konsisten dan profesional melalui identitas visual yang kuat dan memorable.',
                'features' => [
                    'Logo Design',
                    'Brand Guidelines',
                    'Marketing Materials',
                    'Social Media Kit'
                ],
                'image' => 'https://images.unsplash.com/photo-1611224923853-80b023f02d71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2015&q=80'
            ],
            [
                'title' => 'Pelatihan Digital Marketing',
                'description' => 'Program pelatihan komprehensif untuk tim lokal agar mandiri dalam mengelola promosi digital dan mengoptimalkan kehadiran online.',
                'features' => [
                    'Social Media Management',
                    'Content Creation',
                    'SEO Training',
                    'Analytics & Reporting'
                ],
                'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2015&q=80'
            ]
        ];

        return view('services', compact('services'));
    }
}
