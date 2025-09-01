<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use App\Models\AutomationCourse;
use App\Models\HustlersTraining; 
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Skill; 
use App\Models\JobApplication; 
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.home');
    }



     public function automation_course()
    {
     
    $courses = AutomationCourse::paginate(6); // per page 6 courses

        
        return view('dashboard.automation_course', compact('courses'));
    }

    public function huslers_campus()
{
    $trainings = HustlersTraining::paginate(6); // per page 6 trainings
    return view('dashboard.hustlers_training', compact('trainings'));
}


public function freelance_content(Request $request)
{
    $allSkills = Skill::all();

    $query = Job::with('skills');

    if ($request->has('skill') && $request->skill != '') {
        $query->whereHas('skills', function ($q) use ($request) {
            $q->where('skills.id', $request->skill);
        });
    }

    // 👇 get() की जगह paginate() यूज़ करो
    $jobs = $query->paginate(9); // प्रति पेज 9 jobs दिखेंगी

    return view('dashboard.freelancing_content', compact('jobs', 'allSkills'));
}


  public function applyjob($job)
{
    $job = Job::findOrFail($job); // Job ka data fetch karo
    return view('dashboard.applyjob', compact('job'));
}




public function store(Request $request)
{
    // dd($request->all());
    $validator = Validator::make($request->all(), [
        'job_id' => 'required|exists:jobs,id',
        'full_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone_number' => 'string|max:20',
        'date_of_birth' => 'date',
        'highest_qualification' => 'required|string|max:100',
        'passing_year' => 'required|digits:4|integer',
        'resume_path' => 'required|file|mimes:pdf,doc,docx|max:2048',
    ]);

    // Check validation failure
    if ($validator->fails()) {
        return redirect()->back()
                         ->withErrors($validator)
                         ->withInput();
    }

    $data = $request->all();

    // Handle resume upload
    if ($request->hasFile('resume')) {
        $data['resume_path'] = $request->file('resume')->store('resumes', 'public');
    }

    // Save to database
    JobApplication::create($data);

return redirect()->route('user.dashboard.freelance.content')
                 ->with('success', 'Your action was successful!');
}

 


    public function asset_sections()
    {
        return view('dashboard.asset_section');
    }

   public function user_profile()
{
    $user = Auth::user(); // Logged-in user ka data

    if ($user->role_id != 2) {
        return redirect()->route('home')->with('error', 'Access denied!');
    }

    return view('dashboard.user_profile', compact('user'));
}




public function uploadProfile(Request $request)
{
    $request->validate([
        'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $user = Auth::user();

   if ($user->profile_image) {
        Storage::disk('public')->delete($user->profile_image);
    }

    // Nayi image store
    $path = $request->file('profile_image')->store('profiles', 'public');

    $user->profile_image = $path;
    $user->save();

    return redirect()->back()->with('success', 'Profile image uploaded successfully.');
}


 
 public function deleteProfile()
{
    $user = Auth::user();

    if ($user->profile_image) {
        Storage::disk('public')->delete($user->profile_image);
    }

    $user->profile_image = null;
    $user->save();

    return redirect()->back()->with([
        'success' => 'Profile image deleted successfully.'
    ]);
}

 


}
