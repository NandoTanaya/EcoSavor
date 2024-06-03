<?php

use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('about');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/partner', function() {
    return view('partner');
});

Route::get('/unggah', function() {
    return view('unggah');
});

Route::get('/menu', function() {
    return view('menu');
});

Route::get('/status', function() {
    return view('status');
});

Route::get('/laporan', function() {
    return view('laporan');
});

Route::get('/profilePartner', function() {
    return view('profilePartner');
});

Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');

Route::get('/register', [AuthManager::class, 'register'])->name('register');
Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post');

Route::get('/logout', [AuthManager::class,'logout'])->name('logout');
