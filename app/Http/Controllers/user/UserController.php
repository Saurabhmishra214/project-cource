<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use App\Models\AutomationCourse;
use App\Models\HustlersTraining; 
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Skill; // Job model ko import karein --- IGNORE ---
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage; // 👈 yeh add karo

class UserController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.home');
    }



     public function automation_course()
    {
     
        $courses = AutomationCourse::all();

        
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

    // public function freelance_apply()
    // {
    //     return view('dashboard.apply_form');
    // }


    public function asset_sections()
    {
        return view('dashboard.asset_section');
    }

   public function user_profile()
{
    $user = Auth::user(); // Logged-in user ka data
    return view('dashboard.user_profile', compact('user'));
}



public function uploadProfile(Request $request)
{
    $request->validate([
        'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $user = Auth::user();

    // Purani image delete karo agar hai
    if ($user->profile_image) {
        Storage::disk('public')->delete($user->profile_image);
    }

    // Nayi image store
    $path = $request->file('profile_image')->store('profiles', 'public');

    $user->profile_image = $path;
    $user->save();

    // Upload ke baad wapas redirect ho jaye
    return redirect()->back()->with('success', 'Profile image uploaded successfully.');
}


 
 public function deleteProfile()
{
    $user = Auth::user();

    // Agar image hai to delete karo
    if ($user->profile_image) {
        Storage::disk('public')->delete($user->profile_image);
    }

    // Path null kar do
    $user->profile_image = null;
    $user->save();

    return redirect()->back()->with([
        'success' => 'Profile image deleted successfully.'
    ]);
}

 


}
