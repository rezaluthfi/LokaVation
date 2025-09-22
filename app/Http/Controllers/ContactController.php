<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Handle contact form submission
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submit(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required|string|max:255',
            'nama_destinasi' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'nomor_telepon' => 'required|string|max:20',
            'pesan' => 'required|string|max:1000',
        ], [
            'nama_lengkap.required' => 'Nama lengkap wajib diisi.',
            'nama_destinasi.required' => 'Nama destinasi wisata wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'nomor_telepon.required' => 'Nomor telepon wajib diisi.',
            'pesan.required' => 'Pesan wajib diisi.',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Mohon periksa kembali data yang Anda masukkan.');
        }

        try {
            // Here you would typically send an email
            // For now, we'll just log the contact attempt
            \Log::info('Contact form submission', $request->all());

            return back()->with('success', 'Terima kasih! Pesan Anda telah dikirim. Tim kami akan segera menghubungi Anda.');
        } catch (\Exception $e) {
            \Log::error('Contact form error: ' . $e->getMessage());
            
            return back()
                ->withInput()
                ->with('error', 'Terjadi kesalahan saat mengirim pesan. Silakan coba lagi.');
        }
    }
}