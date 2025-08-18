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
}
