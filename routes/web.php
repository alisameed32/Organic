<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

Route::get('/', [WebController::class,'index'])->name('home');

Route::get('/store', [WebController::class,'store'])->name('store');

Route::get('/about', [WebController::class,'about'])->name('about');

Route::get('/contact', [WebController::class,'contact'])->name('contact');

Route::get('/cart', [WebController::class,'cart'])->name('cart');

Route::get('/checkout', [WebController::class,'checkout'])->name('checkout');

Route::get('/productdetail', [WebController::class,'productdetail'])->name('productdetail');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
