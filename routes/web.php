<?php


use App\Http\Controllers\AffiliateController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontController;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
});


Route::get('/register-form', [AuthController::class, 'showRegister'])->name('register_form');
Route::post('/register-store', [AuthController::class, 'registerUser'])->name('register.submit');

Route::get('/login-form', [AuthController::class, 'showLogin'])->name('login_form');

Route::post('/login-user', [AuthController::class, 'loginUser'])->name('login.submit');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/home', [FrontController::class, 'index'])->name('home');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('/blog-details', [FrontController::class, 'blogDetails'])->name('blog.details');
Route::get('/automation', [FrontController::class, 'automation_course'])->name('courses.automation');
Route::get('/hustler', [FrontController::class, 'hustlers_course'])->name('courses.hustlers');


Route::get('/admin-dashboard', [AdminController::class, 'admin_dashboard'])->name('admin.dashboard');


Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
Route::get('/automation-course', [UserController::class, 'automation_course'])->name('user.dashboard.automation');
Route::get('/hustlers', [UserController::class, 'huslers_campus'])->name('user.dashboard.huslers.traings');
Route::get('/freelance-content', [UserController::class, 'freelance_content'])->name('user.dashboard.freelance.content');
Route::get('/asset-sections', [UserController::class, 'asset_sections'])->name('user.dashboard.huslers.assets');

Route::get('/affiliate-panel', [AffiliateController::class, 'affiliate_dashboard'])->name('user.affiliate.dashboard');

Route::get('/profile', [UserController::class, 'user_profile'])->name('user.profile');

Route::get('/affiliate-panel', [AffiliateController::class, 'affiliate_dashboard'])->name('user.affiliate.dashboard');
Route::get('/affiliate-training', [AffiliateController::class, 'affiliate_training'])->name('user.affiliate.training');

Route::get('/affiliate-webinar', [AffiliateController::class, 'affiliate_webinar'])->name('user.affiliate.webinar');
Route::get('/affiliate-rewards', [AffiliateController::class, 'affiliate_rewards'])->name('user.affiliate.rewards');


