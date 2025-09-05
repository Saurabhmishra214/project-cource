<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller; 

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\JobApplication;
class FreelancingController extends Controller
{
    // List Jobs
    public function index()
    {
        $jobs = Job::orderBy('created_at', 'desc')->paginate(10); // 10 per page
        return view('admin_dashboard.freelancing.list', compact('jobs'));
    }


    // Add Job form
    public function create()
    {
        return view('admin_dashboard.freelancing.add');
    }

    // Save Job
public function store(Request $request)
{
    // Manual validation
    $validator = Validator::make($request->all(), [
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'company_name' => 'required|string|max:255',
        'location' => 'required|string|max:255',
        'pay' => 'required|string|max:255',
        'duration' => 'required|string|max:255',
        // अगर skills भी भेजी जा रही हैं
        // 'skills' => 'nullable|array',
        // 'skills.*' => 'exists:skills,id',
    ]);

    if ($validator->fails()) {
        return redirect()->back()
                         ->withErrors($validator)
                         ->withInput();
    }

    // Job create
    $job = Job::create($request->all());

    // अगर skills भी भेजी हैं तो attach करो
    if ($request->has('skills')) {
        $job->skills()->sync($request->skills); // skills is an array of skill IDs
    }

    return redirect()->route('freelancing.index')->with('success', 'Job added successfully!');
}


    // Show single Job
    public function details($id)
    {
        $job = Job::findOrFail($id);
        return view('admin_dashboard.freelancing.details', compact('job'));
    }

    // Edit Job form
    public function edit($id)
    {
        $job = Job::findOrFail($id);
        return view('admin_dashboard.freelancing.edit', compact('job'));
    }

    // Update Job
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'company_name' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'pay' => 'nullable|numeric',
            'duration' => 'nullable|string|max:255',
        ]);

        $job = Job::findOrFail($id);
        $job->update($request->all());

        return redirect()->route('freelancing.index')->with('success', 'Job updated successfully!');
    }

    // Delete Job
    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect()->route('freelancing.index')->with('success', 'Job deleted successfully!');
    }




   


 public function allJobApplications(Request $request)
{
    $query = JobApplication::query()->with('job');

    // Filters
    if ($request->filled('job_id')) {
        $query->where('job_id', $request->job_id);
    }
    if ($request->filled('company_name')) {
        $query->whereHas('job', function($q) use ($request) {
            $q->where('company_name', 'like', '%' . $request->company_name . '%');
        });
    }

    $applications = $query->orderBy('created_at', 'desc')->paginate(20);
    $jobs = Job::all(); // dropdown for filter

    return view('admin_dashboard.freelancing.job_applications_report', compact('applications', 'jobs'));
}

}
