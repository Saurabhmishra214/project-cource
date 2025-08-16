<?php

namespace App\Http\Controllers;
use App\Models\AutomationCourse;
use App\Models\HustlersTraining; 
use Illuminate\Http\Request;
use App\Models\Job; // Job model ko import karein

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

     public function huslers_campus()
    {
        // HustlerTraining model ka upyog karke saare trainings database se fetch kar rahe hain.
        $trainings = HustlersTraining::all();

        // `trainings` variable ko view mein pass kar rahe hain.
        return view('dashboard.hustlers_training', compact('trainings'));
    }

      public function freelance_content()
    {
        // Sabhi jobs ko unke skills ke saath database se fetch karein
        // with('skills') ka upyog karke N+1 query problem se bachenge
        $jobs = Job::with('skills')->get();
        
        // Jobs data ko view ke saath pass karein
        return view('dashboard.freelancing_content', compact('jobs'));
    }
}
