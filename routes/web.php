<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// route untuk admin
Route::prefix('admin')->middleware(['auth', 'verified', 'admin'])->group(function () {
    // dashboard admin
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // untuk mengatur petugas
    Route::get('/petugas', [ProfileController::class, 'create'])->name('petugas.create');
    Route::post('/petugas', [ProfileController::class, 'store'])->name('petugas.store');

});

//route untuk petugas
Route::prefix('petugas')->middleware(['auth', 'verified'])->group(function () {

    // dashboard admin
    Route::get('/dashboard', function () {
        return view('petugas.dashboard');
    })->name('dashboard.petugas');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
