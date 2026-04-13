<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\WasteSaleController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/marketplace', [WasteSaleController::class, 'marketplace'])->name('marketplace');
Route::get('/marketplace', [WasteSaleController::class, 'marketplace'])->name('marketplace');

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

    Route::get('/bins', [UserController::class, 'bins'])->name('bins');

    Route::get('/bins/create', [UserController::class, 'createBin'])->name('bins.create');

    Route::post('/bins/store', [UserController::class, 'storeBin'])->name('bins.store');
});





Route::middleware(['auth'])->group(function () {

    Route::get('/waste', [WasteSaleController::class, 'index'])->name('waste.index');

    Route::get('/waste/create', [WasteSaleController::class, 'create'])->name('waste.create');

    Route::post('/waste/store', [WasteSaleController::class, 'store'])->name('waste.store');

});



Route::middleware(['auth'])->group(function () {

    Route::middleware(['admin'])->group(function () {

        Route::get('/admin/dashboard', [adminController::class, 'dashboard'])->name('admin.dashboard');

        Route::get('/admin/bins', [adminController::class, 'bins'])->name('admin.bins');

        Route::post('/admin/bin/update/{id}', [adminController::class, 'updateStatus'])->name('admin.bin.update');

    });

});