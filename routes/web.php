<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionsController;


Route::get('/', [HomeController::class, 'index'])->name('landing');
Route::get('/landing', [HomeController::class, 'index'])->name('landing');
Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/home', 'home')->name('home');
    Route::post('/logout', 'logout')->name('logout');
});
Route::resource('/products', \App\Http\Controllers\ProductController::class)->middleware(['auth']);
Route::get('products', [ProductController::class, 'index'])->name('products');
Route::resource('/transactions', \App\Http\Controllers\TransactionsController::class)->middleware(['auth']);


Route::get('/transactions', [TransactionsController::class, 'index'])->name('transactions.index');
Route::get('/transactions.index', [TransactionsController::class, 'showTransactionsForm']);
Route::post('/transactions.index', [TransactionsController::class, 'getTransactionsById']);




