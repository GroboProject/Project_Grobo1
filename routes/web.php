<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Routes untuk tampilan utama
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/community', function () {
    return view('community');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/apply', function () {
    return view('apply');
})->name('apply');

Route::get('/disnet', function () {
    return view('disNetwork');
})->name('disnet');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login'); // Rute untuk menampilkan form login
Route::post('/login', [AuthController::class, 'login'])->name('login.submit'); // Rute untuk memproses login

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register'); // Rute untuk menampilkan form registrasi
Route::post('/register', [AuthController::class, 'register'])->name('register.submit'); // Rute untuk memproses registrasi

Route::get('/logout', [AuthController::class, 'logout'])->name('logout'); // Rute untuk logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); // Rute untuk logout

    return view('apply'); // Sesuaikan dengan nama view yang Anda ingin tampilkan

Route::get('/disnet', function () {
    return view('disNetwork'); // Sesuaikan dengan nama view yang Anda ingin tampilkan
});

Route::get('/isiberita', function () {
    return view('isiBerita'); // Sesuaikan dengan nama view yang Anda ingin tampilkan
});

