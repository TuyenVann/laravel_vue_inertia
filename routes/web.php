<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store']);
    Route::get('register', [RegisterController::class, 'create']);
    Route::post('register', [RegisterController::class, 'store']);

});

Route::middleware('auth')->group(function () {
    Route::inertia('/', 'Home');
    Route::inertia('/home', 'Home');
    Route::inertia('/settings', 'Settings');
    Route::post('logout', [LoginController::class, 'destroy']);

});