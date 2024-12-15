<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/halaman/1', [HomeController::class, 'halaman1'])->name('halaman1');
Route::get('/halaman/2', [HomeController::class, 'halaman2'])->name('halaman2');
