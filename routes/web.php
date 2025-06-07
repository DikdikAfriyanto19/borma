<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/promosi', function () {
    return view('promosi',['title' => 'Promosi']);
});

Route::get('/event', function () {
    return view('event',['title' => 'Event']);
});

Route::get('/layanan', function () {
    return view('layanan',['title' => 'Layanan']);
});

Route::get('/tentang', function () {
    return view('tentang',['title' => 'Tentang Kami']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
