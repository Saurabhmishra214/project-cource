<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Content;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $hero = Content::where('section', 'hero')
                       ->pluck('value', 'field');

        $global = Content::where('section', 'global')
                         ->pluck('value', 'field')
                         ->toArray();

        return view('frontend.home', compact('global', 'hero'));

    }

    public function blog()
    {
        $blogs = Blog::latest()->take(6)->get();
        return view('frontend.pages.blog', compact('blogs'));
    }

    public function blogDetails()
    {
        return view('frontend.pages.blog_details');
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
