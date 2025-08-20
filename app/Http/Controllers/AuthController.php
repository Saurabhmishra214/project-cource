<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('frontend.auth.register');
    }

    public function showLogin()
    {
        return view('frontend.auth.login');
    }
}
