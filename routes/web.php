<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\historyController;
use App\Models\Anime;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [historyController::class, 'index'])->name('home');