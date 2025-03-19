<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
});

Route::prefix('admin')->name('admin.')->group(function () {
   Route::resource('/', UserController::class)->names('user');
});
