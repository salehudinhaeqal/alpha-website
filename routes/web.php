<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/contact', function () {
    return view('contact');
});

// RUTE UNTUK HALAMAN KONTAK
Route::get('/contact', function () {
    return view('contact');
});

// RUTE POST HALAMAN KONTAK
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');