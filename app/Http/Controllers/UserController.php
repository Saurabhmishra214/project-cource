<?php

namespace App\Http\Controllers;
use App\Models\AutomationCourse;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.home');
    }

     public function automation_course()
    {
        // AutomationCourse model ka upyog karke saare courses database se nikaal rahe hain.
        // `get()` method sabhi records ko ek collection ke roop mein return karta hai.
        $courses = AutomationCourse::all();

        // `courses` variable ko view mein pass kar rahe hain.
        // Ab 'dashboard.automation_course' view mein `$courses` variable available hoga.
        return view('dashboard.automation_course', compact('courses'));
    }
}
