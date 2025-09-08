<?php

namespace App\Http\Controllers;

use App\Models\AutomationCourse;
use App\Models\Blog;
use App\Models\Content;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        // $hero = Content::where('section', 'hero')
        //                ->pluck('value', 'field');

        // $global = Content::where('section', 'global')
        //                  ->pluck('value', 'field')
        //                  ->toArray();

        // return view('frontend.home', compact('global', 'hero'));
        return view('frontend.home');

    }

    public function blog()
    {
        $blogs = Blog::latest()->take(6)->get();
        return view('frontend.pages.blog', compact('blogs'));
    }

    public function pricing()
    {
        return view('frontend.pricing');
    }

    public function blogDetails()
    {
        return view('frontend.pages.blog_details');
    }

    public function automation_course()
    {
        // $videos = AutomationCourse::all();
        $videos = AutomationCourse::with('snippet')->get();
        return view('frontend.pages.courses.automation_course', compact('videos'));
    }

    public function hustlers_course()
    {
        return view('frontend.pages.courses.hustlers');
    }
}
