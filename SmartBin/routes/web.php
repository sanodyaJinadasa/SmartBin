<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DriverController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth'])->group(function () {

Route::middleware(['citizen'])->group(function () {

    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

    Route::get('/bins', [UserController::class, 'bins'])->name('bins');

    Route::get('/bins/create', [UserController::class, 'createBin'])->name('bins.create');

    Route::post('/bins/store', [UserController::class, 'storeBin'])->name('bins.store');
});
});




Route::middleware(['auth'])->group(function () {

    Route::middleware(['driver'])->group(function () {

        Route::get('/driver/dashboard', [DriverController::class, 'dashboard'])->name('driver.dashboard');

        Route::get('/driver/bins', [DriverController::class, 'bins'])->name('driver.bins');

        Route::post('/driver/bin/update/{id}', [DriverController::class, 'updateStatus'])->name('driver.bin.update');

    });

});