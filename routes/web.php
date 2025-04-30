<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'dashboard']);

Route::get('/', function () {
    return view('admin.home.index');
});

Route::prefix('admin')->name('admin.')->group(function () {
   Route::resource('/', UserController::class)->names('user');
});
