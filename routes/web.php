<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\LostItemController;
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

// Route::get('/item-list', function () {
//     return view('item-list');
// })->middleware(['auth', 'verified'])->name('item');

Route::get('/item-list', [LostItemController::class, 'index'])->middleware(['auth', 'verified'])->name('item');


Route::get('/claim-requests', function () {
    return view('claim-requests');
})->middleware(['auth', 'verified'])->name('claim');

Route::get('/assign-staff', function () {
    return view('assign-staff');
})->middleware(['auth', 'verified'])->name('assign');

Route::get('/add-administrator', function () {
    return view('add-administrator');
})->middleware(['auth', 'verified'])->name('add-administrator');


Route::get('/found-items', function () {
    return view('found-items');
})->middleware(['auth', 'verified'])->name('found-items');

Route::get('/new-request', function () {
    return view('new-request');
})->middleware(['auth', 'verified'])->name('new-request');

Route::get('/claimed-items', function () {
    return view('claimed-items');
})->middleware(['auth', 'verified'])->name('claimed-items');

Route::get('/unclaimed-items', function () {
    return view('unclaimed-items');
})->middleware(['auth', 'verified'])->name('unclaimed-items');

Route::get('/rejected-request', function () {
    return view('rejected-request');
})->middleware(['auth', 'verified'])->name('rejected-request');

Route::get('/ticket-request', function () {
    return view('ticket-request');
})->middleware(['auth', 'verified'])->name('ticket');


Route::get('/handle-ticket', function () {
    return view('handle-ticket');
})->middleware(['auth', 'verified'])->name('handle-ticket');


Route::get('auth/google/redirect', [GoogleAuthController::class, 'redirect']);
Route::get('auth/google/callback', [GoogleAuthController::class, 'callback']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::post('/lost-details', [LostItemController::class, 'store'])->name('lostItem.store'); 

require __DIR__.'/auth.php';