<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [FrontController::class, 'index'])->name('homepage');

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
Route::get('/automation-course', [UserController::class, 'automation_course'])->name('user.dashboard.automation');
Route::get('/hustlers', [UserController::class, 'huslers_campus'])->name('user.dashboard.huslers.traings');
