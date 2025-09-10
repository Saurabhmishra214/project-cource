<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller; 
use App\Models\Blog;
use App\Models\DigitalProduct;
use App\Models\JobApplication;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
  

public function admin_dashboard()
{
    $totalUsers = User::count();

    $totalBlogs = Blog::count();
    $totalProducts = DigitalProduct::count();
    $totalJobApplications = JobApplication::count();
    $totalJobs = Job::count();
    $allTimeSales = DigitalProduct::sum('price');
    $last30DaysApplications = JobApplication::where('created_at', '>=', now()->subDays(30))->count();

    return view('admin_dashboard.home', compact(
        'totalUsers', 
        'totalBlogs',
        'totalProducts',
        'totalJobApplications',
        'totalJobs',
        'allTimeSales',
        'last30DaysApplications'
    ));
}





   public function admin_profile()
    {
          $user = Auth::user(); 
    return view('admin_dashboard.adminprofile', compact('user'));
    }

     public function admin_logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate(); 
        $request->session()->regenerateToken();

        return redirect('/login-form');
    }




}
