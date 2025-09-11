<?php

namespace App\Http\Controllers\admin;

use App\Models\SocialMedia;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SocialMediaController extends Controller
{
    /**
     * Display all social media records.
     */
    public function index()
    {
        $socialMedias = SocialMedia::all();
        return view('admin_dashboard.socialMedia_management.list', compact('socialMedias'));
    }

    /**
     * Show create form.
     */
    public function create()
    {
        return view('admin_dashboard.socialMedia_management.add');
    }

    /**
     * Store new social media record.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'platform_name'   => 'nullable|string|max:100',
            'username'        => 'nullable|string|max:100',
            'profile_url'     => 'nullable|url|max:255',
            'followers_count' => 'nullable|integer|min:0',
            'account_link'    => 'nullable|url|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        SocialMedia::create($validator->validated());

        return redirect()->route('social_media.index')
                         ->with('success', 'Social media record created successfully.');
    }

    /**
     * Show edit form.
     */
    public function edit($id)
    {
        $socialMedia = SocialMedia::findOrFail($id);
        return view('admin_dashboard.socialMedia_management.edit', compact('socialMedia'));
    }

    /**
     * Update social media record.
     */
    public function update(Request $request, $id)
    {
        $socialMedia = SocialMedia::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'platform_name'   => 'nullable|string|max:100',
            'username'        => 'nullable|string|max:100',
            'profile_url'     => 'nullable|url|max:255',
            'followers_count' => 'nullable|integer|min:0',
            'account_link'    => 'nullable|url|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $socialMedia->update($validator->validated());

        return redirect()->route('social_media.index')
                         ->with('success', 'Social media record updated successfully.');
    }

    /**
     * Delete social media record.
     */
    public function destroy($id)
    {
        $socialMedia = SocialMedia::findOrFail($id);
        $socialMedia->delete();

        return redirect()->route('social_media.index')
                         ->with('success', 'Social media record deleted successfully.');
    }
}
