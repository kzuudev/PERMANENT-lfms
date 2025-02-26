<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/lost-details', function () {
    return view('lost-details');
})->middleware(['auth', 'verified'])->name('lost');

Route::get('/tracking', function () {
    return view('tracking');
})->middleware(['auth', 'verified'])->name('tracking');

Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth', 'verified'])->name('admin');

Route::get('/item-list', function () {
    return view('item-list');
})->middleware(['auth', 'verified'])->name('item');

Route::get('/claim-requests', function () {
    return view('claim-requests');
})->middleware(['auth', 'verified'])->name('claim');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
