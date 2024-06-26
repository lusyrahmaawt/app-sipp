<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Public Routes
Route::view('/', 'welcome');
Route::view('/ukm', 'ukm');
Route::view('/berita', 'berita.berita');
Route::view('/nib', 'nib');
Route::view('/halal', 'halal');
Route::view('/cppob', 'cppob');
Route::view('/pirt', 'pirt');
Route::view('/penjadwalan', 'penjadwalan');
Route::view('/akun', 'akun');
Route::view('/umku', 'umku');
Route::view('/pangan', 'pangan');
Route::view('/jadwal', 'jadwal');

    
    Route::prefix('admin')->as('admin.')->group(function () {
        Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
        Route::get('/user', [HomeController::class, 'index'])->name('index');
        Route::get('/create', [HomeController::class, 'create'])->name('user.create');
        Route::post('/store', [HomeController::class, 'store'])->name('user.store');
        Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('user.edit');
        Route::put('/update/{id}', [HomeController::class, 'update'])->name('user.update');
        Route::delete('/delete/{id}', [HomeController::class, 'delete'])->name('user.delete');
    });

    Route::prefix('blog')->as('blog.')->group(function () {
        Route::get('/', [BlogController::class, 'index'])->name('index');
        Route::get('/create', [BlogController::class, 'create'])->name('create');
        Route::post('/store', [BlogController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [BlogController::class, 'update'])->name('update');
        Route::post('/destroy/{id}', [BlogController::class, 'destroy'])->name('destroy');
    });

// LoginController Routes
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register-proses', [LoginController::class, 'register_proses'])->name('register-proses');
