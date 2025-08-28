<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Models\Webinar;

class LiveWebinarController extends Controller
{
    // List all webinars
public function index() {
$webinars = Webinar::latest()->paginate(10); // 10 items per page
return view('admin_dashboard.livewebinar.list', compact('webinars'));

}


    // Show add webinar form
    public function create()
    {
        return view('admin_dashboard.livewebinar.add');
    }

    // Store new webinar
    public function store(Request $request)
    {
     
        Webinar::create($request->all());

        return redirect()->route('livewebinar.index')->with('success', 'Webinar added successfully!');
    }

    // Show webinar details
    public function show($id)
    {
        $webinar = Webinar::findOrFail($id);
        return view('admin_dashboard.livewebinar.show', compact('webinar'));
    }

    // Show edit form
    public function edit($id)
    {
        $webinar = Webinar::findOrFail($id);
        return view('admin_dashboard.livewebinar.edit', compact('webinar'));
    }

    // Update webinar
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'duration_minutes' => 'required|integer',
            'webinar_date' => 'required|date',
            'image_url' => 'nullable|url',
            'rating' => 'nullable|numeric|between:0,10',
            'likes' => 'nullable|integer',
            'genres_tags' => 'nullable|string',
        ]);

        $webinar = Webinar::findOrFail($id);
        $webinar->update($request->all());

        return redirect()->route('livewebinar.index')->with('success', 'Webinar updated successfully!');
    }

    // Delete webinar
    public function destroy($id)
    {
        $webinar = Webinar::findOrFail($id);
        $webinar->delete();

        return redirect()->route('livewebinar.index')->with('success', 'Webinar deleted successfully!');
    }
}
