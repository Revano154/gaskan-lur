<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use App\Http\Controllers\TripController;

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [UserController::class, 'register']);

Route::post('/register-process', [UserController::class, 'register'])->name('register.process');

// Halaman login
Route::get('/login', function () {
    return view('login'); // Mengarah ke file login.blade.php
})->name('login');

// Proses login menggunakan SubscriptionController
Route::post('/login-process', [SubscriptionController::class, 'login'])->name('login.process');

// Halaman utama
Route::get('/', function () {
    return view('index');
});

// Halaman index
Route::get('/index', function () {
    return view('index');
});

// Halaman contoh (example)
Route::get('/examp', function () {
    return view('examp');
});

// Halaman subscription (form untuk subscribe)
Route::get('/subscribe', function () {
    return view('subscribe'); // Mengarah ke file subscribe.blade.php
})->name('subscribe');

// Proses subscribe menggunakan SubscriptionController
Route::post('/subscribe', [SubscriptionController::class, 'store'])->name('subscribe.process');

Route::resource('trips', TripController::class);