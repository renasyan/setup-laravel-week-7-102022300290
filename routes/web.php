<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\historyController;
use App\Http\Controllers\authController;
use App\Models\Anime;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [historyController::class, 'index'])->name('home');
Route::get('/login', [authController::class, 'index'])->name('login');
Route::post('/login', [authController::class, 'login'])->name('login.post');
Route::get('/logout', [authController::class, 'logout'])->name('logout');
Route::get('/register', [authController::class, 'register'])->name('register');
Route::post('/register/auth', [authController::class, 'registerAuth'])->name('register.auth');
Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');
