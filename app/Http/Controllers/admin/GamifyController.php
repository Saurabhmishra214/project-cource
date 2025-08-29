<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\GamifyChallenge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GamifyController extends Controller
{
    public function create()
    {
        return view('admin_dashboard.gamify_challenge.add');
    }

    public function store(Request $request)
    {
        // Create the validator instance
        $validator = Validator::make($request->all(), [
            'video'       => 'required|file|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime|max:51200',
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'posted_by'   => 'required|string|max:100',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }

        // If validation passes, handle file upload & save
        $videoPath = null;
        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('videos', 'public');
        }

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('challenges', 'public');
        }

        GamifyChallenge::create([
            'video'       => $videoPath,
            'title'       => $request->title,
            'description' => $request->description,
            'image'       => $imagePath,
            'posted_by'   => $request->posted_by,
            'created_at'  => now(),
        ]);

        return redirect()->back()->with('success', 'Challenge created successfully!');
    }
}
