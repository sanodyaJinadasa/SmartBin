<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

    Route::get('/bins', [UserController::class, 'bins'])->name('bins');

    Route::get('/bins/create', [UserController::class, 'createBin'])->name('bins.create');

    Route::post('/bins/store', [UserController::class, 'storeBin'])->name('bins.store');

// });