<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.home');
});

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
