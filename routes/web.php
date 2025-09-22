<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

// Landing Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Services Page
Route::get('/services', [ServiceController::class, 'index'])->name('services');

// About Page
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Contact Form
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
