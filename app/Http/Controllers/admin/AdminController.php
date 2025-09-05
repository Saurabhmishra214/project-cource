<?php

namespace App\Http\Controllers\admin;
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
