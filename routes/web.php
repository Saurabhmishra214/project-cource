<?php


use App\Http\Controllers\user\AffiliateController;

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\admin\AutomationCoursesController;
use App\Http\Controllers\admin\AffiliateBusinessTrainingsController;
use App\Http\Controllers\admin\FreelancingController;
use App\Http\Controllers\admin\LiveWebinarController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\Admin\AffiliateTrainingController;
use App\Http\Controllers\admin\GamifyController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\SoftwareController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('frontend.home');
});


Route::get('/register-form', [AuthController::class, 'showRegister'])->name('register_form');
Route::post('/register-store', [AuthController::class, 'registerUser'])->name('register.submit');



Route::get('/referral-register', [AuthController::class, 'showReferralForm'])->name('referral.register');



Route::get('/login-form', [AuthController::class, 'showLogin'])->name('login_form');

Route::post('/login-user', [AuthController::class, 'loginUser'])->name('login.submit');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/home', [FrontController::class, 'index'])->name('home');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('/blog-details', [FrontController::class, 'blogDetails'])->name('blog.details');
Route::get('/automation', [FrontController::class, 'automation_course'])->name('courses.automation');
Route::get('/hustler', [FrontController::class, 'hustlers_course'])->name('courses.hustlers');




Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
Route::get('/automation-course', [UserController::class, 'automation_course'])->name('user.dashboard.automation');
Route::get('/hustlers', [UserController::class, 'huslers_campus'])->name('user.dashboard.huslers.traings');
Route::get('/freelance-content', [UserController::class, 'freelance_content'])->name('user.dashboard.freelance.content');
Route::get('/applyjob-form/{job}', [UserController::class, 'applyjob'])->name('applyjob.form');
Route::post('/job-application', [UserController::class, 'store'])->name('job.application.store');

Route::get('/asset-sections', [UserController::class, 'asset_sections'])->name('user.dashboard.huslers.assets');


// Route::get('/affiliate-panel', [AffiliateController::class, 'affiliate_dashboard'])->name('user.affiliate.dashboard');

Route::get('/profile', [UserController::class, 'user_profile'])->name('user.profile');

    Route::post('/profile/upload', [UserController::class, 'uploadProfile'])->name('profile.upload');
    Route::delete('/profile/delete', [UserController::class, 'deleteProfile'])->name('profile.delete');


Route::get('/affiliate-panel', [AffiliateController::class, 'affiliate_dashboard'])->name('user.affiliate.dashboard');
Route::get('/affiliate-training', [AffiliateController::class, 'affiliate_training'])->name('user.affiliate.training');

Route::get('/affiliate-webinar', [AffiliateController::class, 'affiliate_webinar'])->name('user.affiliate.webinar');
Route::get('/affiliate-rewards', [AffiliateController::class, 'affiliate_rewards'])->name('user.affiliate.rewards');
Route::get('rewards_dashboard', [AffiliateController::class, 'rewards_dashboard'])->name('rewards_dashboard');

Route::get('/freelance/apply', [ApplicationController::class, 'freelance_apply'])->name('user.dashboard.freelance.apply');
Route::post('/freelance/apply/store', [ApplicationController::class, 'store'])->name('user.dashboard.freelance.application.store');





// admin routes

Route::get('/admin-dashboard', [AdminController::class, 'admin_dashboard'])->name('admin.dashboard');
Route::get('/admin-profile', [AdminController::class, 'admin_profile'])->name('admin.profile');





// admin courses routes



Route::get('/courses/add', [AutomationCoursesController::class, 'coursesadd'])->name('courses.add');

Route::post('/courses/store', [AutomationCoursesController::class, 'coursestore'])->name('courses.store');

Route::get('/courses/list', [AutomationCoursesController::class, 'courseslist'])->name('courses.list');

Route::get('/courses/view/{id}', [AutomationCoursesController::class, 'courseview'])->name('courses.view');

Route::get('/courses/edit/{id}', [AutomationCoursesController::class, 'coursesedit'])->name('courses.edit');

Route::post('/courses/update/{id}', [AutomationCoursesController::class, 'courseupdate'])->name('courses.update');

Route::delete('/courses/delete/{id}', [AutomationCoursesController::class, 'coursedelete'])->name('courses.delete');





// admin business trainings routes  

    Route::get('businesstrainings-list', [AffiliateBusinessTrainingsController::class, 'list'])->name('businesstrainings.list');


    Route::get('businesstrainings-create', [AffiliateBusinessTrainingsController::class, 'create'])->name('businesstrainings.create');
    Route::post('businesstrainings-store', [AffiliateBusinessTrainingsController::class, 'store'])->name('businesstrainings.store');
    
    // Show single training with sessions
    Route::get('business-trainings/view/{id}', [AffiliateBusinessTrainingsController::class, 'details'])->name('businesstrainings.view');
    
    // Edit + update
    Route::get('businesstrainings{id}/edit', [AffiliateBusinessTrainingsController::class, 'edit'])->name('businesstrainings.edit');
    Route::put('businesstrainings{id}', [AffiliateBusinessTrainingsController::class, 'update'])->name('businesstrainings.update');
    
    // Delete
    Route::delete('businesstrainings{id}/delete', [AffiliateBusinessTrainingsController::class, 'destroy'])->name('businesstrainings.destroy');





// Freelancing Jobs routes without group
Route::get('/freelancing', [FreelancingController::class, 'index'])->name('freelancing.index');          // List Jobs
Route::get('/freelancing/create', [FreelancingController::class, 'create'])->name('freelancing.create');   // Add Job form
Route::post('/freelancing/store', [FreelancingController::class, 'store'])->name('freelancing.store');     // Save Job
Route::get('/freelancing/view/{id}', [FreelancingController::class, 'details'])->name('freelancing.view');        // Show single Job
Route::get('/freelancing/{id}/edit', [FreelancingController::class, 'edit'])->name('freelancing.edit');   // Edit Job form
Route::post('/freelancing/{id}', [FreelancingController::class, 'update'])->name('freelancing.update');    // Update Job
Route::delete('/freelancing/{id}', [FreelancingController::class, 'destroy'])->name('freelancing.destroy');// Delete Job


// Live Webinar Routes
Route::get('livewebinar', [LiveWebinarController::class, 'index'])->name('livewebinar.index');          // List all webinars
Route::get('livewebinar/create', [LiveWebinarController::class, 'create'])->name('livewebinar.create'); // Show add webinar form
Route::post('livewebinar', [LiveWebinarController::class, 'store'])->name('livewebinar.store');         // Save new webinar
Route::get('livewebinar/{id}', [LiveWebinarController::class, 'show'])->name('livewebinar.show');
Route::get('livewebinar/{id}/edit', [LiveWebinarController::class, 'edit'])->name('livewebinar.edit'); // Show edit form
Route::post('livewebinar/{id}/update', [LiveWebinarController::class, 'update'])->name('livewebinar.update');
Route::delete('livewebinar/{id}', [LiveWebinarController::class, 'destroy'])->name('livewebinar.destroy');   // Delete webinar



// Blog Routes (without group)
Route::get('blogs', [BlogController::class, 'index'])->name('blogs.index');           // List all blogs
Route::get('blogs/create', [BlogController::class, 'create'])->name('blogs.create');  // Show add blog form
Route::post('blogs', [BlogController::class, 'store'])->name('blogs.store');          // Save new blog
Route::get('blogs/{id}', [BlogController::class, 'show'])->name('blogs.show');        // Show single blog
Route::get('blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');   // Show edit form
Route::post('blogs/{id}/update', [BlogController::class, 'update'])->name('blogs.update'); // Update blog using POST
Route::delete('blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');   



// Admin Affiliate Trainings Routes

Route::get('admin/affiliatetrainings', [AffiliateTrainingController::class, 'index'])->name('affiliatetrainings.list');
Route::get('admin/affiliatetrainings/add', [AffiliateTrainingController::class, 'create'])->name('affiliatetrainings.add');
Route::get('admin/affiliatetrainings/view/{id}', [AffiliateTrainingController::class, 'details'])->name('affiliatetrainings.show');
Route::post('admin/affiliatetrainings/store', [AffiliateTrainingController::class, 'store'])->name('affiliatetrainings.store');
Route::get('admin/affiliatetrainings/{id}/edit', [AffiliateTrainingController::class, 'edit'])->name('affiliatetrainings.edit');
Route::post('admin/affiliatetrainings/{id}/update', [AffiliateTrainingController::class, 'update'])->name('affiliatetrainings.update');
Route::delete('admin/affiliatetrainings/{id}/delete', [AffiliateTrainingController::class, 'destroy'])->name('affiliatetrainings.delete');

// Route::get('/softwares', [DigitalSoftwareController::class, 'index'])->name('softwares.index');

// Route::post('/softwares/generate-referral', [DigitalSoftwareController::class, 'generateReferralLink'])->name('softwares.generateReferral');

// Route::get('/software-sales/{software}', [DigitalSoftwareController::class, 'show'])->name('softwares.show');


// Hustlers Campus Digital Assets - Software Products Routes
// Route::get('product/index', [SoftwareProductController::class, 'productindex'])->name('product.index');

// Digital Product Routes
Route::get('/digital-product/index', [ProductController::class, 'index'])->name('digitalproduct.index'); // List all the products
Route::get('/digital-product/add', [ProductController::class, 'create'])->name('digitalproduct.add'); 
Route::get('/digital-product/{id}/edit', [ProductController::class, 'edit'])->name('digitalproduct.edit'); 
Route::post('/digital-product/store', [ProductController::class, 'store'])->name('digitalproduct.store'); 
Route::post('/digital-product/{id}/update', [ProductController::class, 'update'])->name('digitalproduct.update'); 
Route::delete('/digital-product/{id}/delete', [ProductController::class, 'destroy'])->name('digitalproduct.delete');

//Software routes
Route::get('/software/index', [SoftwareController::class, 'index'])->name('software.index'); // List all the products
Route::get('/software/add', [SoftwareController::class, 'create'])->name('software.add'); 
Route::get('/software/{id}/edit', [SoftwareController::class, 'edit'])->name('software.edit'); 
Route::post('/software/store', [SoftwareController::class, 'store'])->name('software.store'); 
Route::put('/software/{id}/update', [SoftwareController::class, 'update'])->name('software.update'); 
Route::delete('/software/{id}/delete', [SoftwareController::class, 'destroy'])->name('software.delete');

// Gamify Challenge Routes
Route::get('/gamify-challenge/index', [GamifyController::class, 'index'])->name('gamifychallenge.index'); // List all the challenges
Route::post('/gamify-challenge/store', [GamifyController::class, 'store'])->name('gamifychallenge.store');
Route::get('/gamify-challenge/add', [GamifyController::class, 'create'])->name('gamifychallenge.add'); 
Route::get('/gamify-challenge/{id}/edit', [GamifyController::class, 'edit'])->name('gamifychallenge.edit'); 
Route::put('/gamify-challenge/{id}/update', [GamifyController::class, 'update'])->name('gamifychallenge.update'); 
Route::delete('/gamify-challenge/{id}/delete', [GamifyController::class, 'destroy'])->name('gamifychallenge.delete');
