<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function blog()
    {
        return view('frontend.pages.blog');
    }

    public function automation_course()
    {
        return view('frontend.pages.courses.automation_course');
    }

    public function hustlers_course()
    {
        return view('frontend.pages.courses.hustlers');
    }
}
