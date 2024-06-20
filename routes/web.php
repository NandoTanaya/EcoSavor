<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/**
 * Atur route awal admin
 */
use App\Http\Controllers\HomeController;

/**
 * Atur route untuk controller admin ke category
 */
use App\Http\Controllers\AdminController;

/** Untuk BuyController */
use App\Http\Controllers\BuyController;

/**
 * Ubah route ke home (habis ditambah template HTML)
 */
route::get('/', [HomeController::class, 'home'])->name('/');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

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

/**
 * Atur route untuk controller admin ke category
 */
route::get('view_category', [AdminController::class, 'view_category'])->middleware(['auth', 'admin'])->name('view_category');
/**
 * Atur route untuk add category
 */
route::post('add_category', [AdminController::class, 'add_category'])->middleware(['auth', 'admin'])->name('view_category');

/**
 * Atur route untuk delete category
 */
route::get('delete_category/{id}', [AdminController::class, 'delete_category'])->middleware(['auth', 'admin'])->name('view_category');

/**
 * Atur route untuk edit category
 */
route::get('edit_category/{id}', [AdminController::class, 'edit_category'])->middleware(['auth', 'admin'])->name('view_category');
route::post('update_category/{id}', [AdminController::class, 'update_category'])->middleware(['auth', 'admin'])->name('view_category');

/**
 * Atur route untuk add_product
 */
route::get('add_product', [AdminController::class, 'add_product'])->middleware(['auth', 'admin'])->name('view_product');
route::post('upload_product', [AdminController::class, 'upload_product'])->middleware(['auth', 'admin'])->name('view_product');
route::get('view_product', [AdminController::class, 'view_product'])->middleware(['auth', 'admin'])->name('view_product');
route::get('delete_product/{id}', [AdminController::class, 'delete_product'])->middleware(['auth', 'admin'])->name('view_product');
route::get('edit_product/{id}', [AdminController::class, 'edit_product'])->middleware(['auth', 'admin'])->name('view_product');
route::post('update_product/{id}', [AdminController::class, 'update_product'])->middleware(['auth', 'admin'])->name('view_product');

route::get('product_search', [AdminController::class, 'product_search'])->middleware(['auth', 'admin'])->name('view_product');

/**
 * Buy
 */
route::get('/buy', [BuyController::class, 'buy'])->middleware(['auth', 'verified'])->name('/buy');
route::get('category_search', [BuyController::class, 'category_search']);
route::get('shop_search', [BuyController::class, 'shop_search']);

/**
 * logout
 */
