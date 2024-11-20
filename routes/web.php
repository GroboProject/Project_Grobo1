<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/disnet', function () {
    return view('disNetwork');
})->name('disnet');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login'); // Rute untuk menampilkan form login
Route::post('/login', [AuthController::class, 'login'])->name('login.submit'); // Rute untuk memproses login

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register'); // Rute untuk menampilkan form registrasi
Route::post('/register', [AuthController::class, 'register'])->name('register.submit'); // Rute untuk memproses registrasi

// Rute untuk apply dengan middleware auth
Route::get('/apply', function () {
    return view('apply');
})->middleware('auth')->name('apply');

// Rute untuk logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/isiberita', function () {
    return view('isiBerita'); 
});

Route::get('/specification', function () {
    return view('specification'); 
});

Route::middleware(['auth', 'userAkses:admin'])->group(function () {
    Route::get('/admin/base', [AdminController::class, 'admin'])->name('base');
    Route::get('/admin/tabelBerita', [AdminController::class, 'newsTable'])->name('admin.newsTable');
    Route::get('/admin/tambahBerita', [AdminController::class, 'addNews'])->name('admin.addNews');
    Route::post('/admin/storeNews', [AdminController::class, 'storeNews'])->name('admin.storeNews');
    Route::post('/admin/news', [NewsController::class, 'store'])->name('admin.news.store');
    Route::put('/admin/news/{id}', [AdminController::class, 'updateNews'])->name('admin.news.update');
    Route::delete('/admin/news/{id}', [AdminController::class, 'destroyNews'])->name('admin.news.destroy');
});

Route::get('gambar/{filename}', function ($filename) {
    $path = storage_path('app/public/gambar/' . $filename);

    if (file_exists($path)) {
        return response()->file($path);
    }

    abort(404);
});
