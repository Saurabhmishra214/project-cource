<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class FreelancingController extends Controller
{
    // List Jobs
    public function index()
    {
        $jobs = Job::all(); // सब jobs fetch करो
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
 

    Job::create($request->all());

    return redirect()->route('freelancing.index')->with('success', 'Job added successfully!');
}


    // Show single Job
    public function show($id)
    {
        $job = Job::findOrFail($id);
        return view('admin_dashboard.freelancing.show', compact('job'));
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
}
