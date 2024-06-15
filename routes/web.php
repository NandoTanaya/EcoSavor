<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/**
 * Atur route awal admin
 */
use App\Http\Controllers\HomeController;

/**
 * Ubah route ke home (habis ditambah template HTML)
 */
route::get('/', [HomeController::class, 'home']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/**
 * Atur route awal admin, ada tambahan untuk auth middleware
 */
route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);
