<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin_dashboard()
    {
        return view('admin_dashboard.home');
    }

   public function admin_profile()
    {
          $user = Auth::user(); // Logged-in user ka data
    return view('admin_dashboard.adminprofile', compact('user'));
    }


}
