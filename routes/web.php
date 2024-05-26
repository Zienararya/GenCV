<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CurriculumVitaeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/create', function () {
//     return view('createcv');
// })->middleware(['auth', 'verified'])->name('create cv');

// Route::get('/download', function () {
//     return view('download');
// })->middleware(['auth', 'verified'])->name('download');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('/dashboard', CurriculumVitaeController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
