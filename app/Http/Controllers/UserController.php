<?php

namespace App\Http\Controllers;
use App\Models\AutomationCourse;
use App\Models\HustlersTraining; 
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Skill; // Job model ko import karein --- IGNORE ---

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

   public function freelance_content(Request $request)
{
    // Sabhi available skills (dropdown ke liye)
    $allSkills = Skill::all();

    // Agar filter lagaya gaya hai
    $query = Job::with('skills');

    if ($request->has('skill') && $request->skill != '') {
        $query->whereHas('skills', function ($q) use ($request) {
            $q->where('skills.id', $request->skill);
        });
    }

    $jobs = $query->get();

    return view('dashboard.freelancing_content', compact('jobs', 'allSkills'));
}


    public function asset_sections()
    {
        return view('dashboard.asset_section');
    }

    public function user_profile()
    {
        return view('dashboard.user_profile');
    }
}
