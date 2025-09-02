<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AffiliateTraining;

class AffiliateTrainingController extends Controller
{
    public function index()
    {
        $trainings = AffiliateTraining::latest()->paginate(10);
        return view('admin_dashboard.affiliatetrainings.list', compact('trainings'));
    }

    // Show add form
    public function create()
    {
        return view('admin_dashboard.affiliatetrainings.add');
    }

    public function details($id)
    {
        $training = AffiliateTraining::findOrFail($id);
        return view('admin_dashboard.affiliatetrainings.show', compact('training'));
    }

    // Store new training
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'main_video_url' => 'required|url',
            'day_number' => 'required|integer|min:1',
            'category' => 'required|string|max:100',
        ]);

        AffiliateTraining::create($request->all());

        return redirect()->route('admin.affiliatetrainings.list')
                         ->with('success', 'Training added successfully!');
    }

    // Show edit form
    public function edit($id)
    {
        $training = AffiliateTraining::findOrFail($id);
        return view('admin_dashboard.affiliatetrainings.edit', compact('training'));
    }

    // Update training
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'main_video_url' => 'required|url',
            'day_number' => 'required|integer|min:1',
            'category' => 'required|string|max:100',
        ]);

        $training = AffiliateTraining::findOrFail($id);
        $training->update($request->all());

        return redirect()->route('admin.affiliatetrainings.list')
                         ->with('success', 'Training updated successfully!');
    }

    // Delete training
    public function destroy($id)
    {
        $training = AffiliateTraining::findOrFail($id);
        $training->delete();

        return redirect()->route('admin.affiliatetrainings.list')
                         ->with('success', 'Training deleted successfully!');
    }
}
