<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Blog Routes
    Route::post('/blogs/create', [BlogController::class, 'createBlog'])->name('createBlog');
    Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blogpage');
    Route::get('/dashboard', [BlogController::class, 'dashboard'])->name('dashboard');
});

// Test Route
Route::get('/test', function () {
    return view('userview');
});

require __DIR__.'/auth.php';
