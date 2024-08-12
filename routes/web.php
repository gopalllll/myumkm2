<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\KontakController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
