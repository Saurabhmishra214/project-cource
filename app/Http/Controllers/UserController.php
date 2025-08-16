<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.home');
    }

    public function automation_course()
    {
        return view('dashboard.automation_course');
    }
}
