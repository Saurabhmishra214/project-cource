<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\seller\DashboardController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.home');
});

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');


Route::get('seller/dashboard', [DashboardController::class, 'index'])->name('seller.dashboard');



