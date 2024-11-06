<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/community', function () {
    return view('community'); // Sesuaikan dengan nama view yang Anda ingin tampilkan
})->name('community');

Route::get('/news', function () {
    return view('news'); // Sesuaikan dengan nama view yang Anda ingin tampilkan
})->name('news');

Route::get('/about', function () {
    return view('about'); // Sesuaikan dengan nama view yang Anda ingin tampilkan
})->name('about');

Route::get('/contact', function () {
    return view('contact'); // Sesuaikan dengan nama view yang Anda ingin tampilkan
})->name('contact');

Route::get('/apply', function () {
    return view('apply'); // Sesuaikan dengan nama view yang Anda ingin tampilkan
})->name('apply');

Route::get('/disnet', function () {
    return view('disNetwork'); // Sesuaikan dengan nama view yang Anda ingin tampilkan
})->name('disnet');