<?php

namespace App\Http\Controllers\admin;

use App\Models\MarketingTool;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MarketingToolController extends Controller
{

    public function create()
    {
        return view('admin_dashboard.marketing_tools.add');
    }

    public function index()
    {
        $tools = MarketingTool::latest()->paginate(10); // 10 items per page
        return view('admin_dashboard.marketing_tools.list', compact('tools'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'        => 'required|string|max:255',
            'type'         => 'required|string',
            'file_path'    => 'nullable|file|mimes:jpg,jpeg,png,mp4,pdf|max:20480',
            'link_url'     => 'nullable|url',
            'description'  => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $tool = new MarketingTool();
        $tool->title = $request->title;
        $tool->type = $request->type;
        $tool->description = $request->description;
        $tool->link_url = $request->link_url;

        if ($request->hasFile('file_path')) {
            $tool->file_path = $request->file('file_path')->store('marketing_tools', 'public');
        }

        $tool->save();

        return redirect()->route('marketing-tools.index')->with('success', 'Marketing Tool added successfully!');
    }

    public function edit($id)
    {
        $tool = MarketingTool::findOrFail($id);
        return view('admin_dashboard.marketing_tools.edit', compact('tool'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title'        => 'required|string|max:255',
            'type'         => 'nullable|string',
            'file_path'    => 'nullable|file|mimes:jpg,jpeg,png,mp4,pdf|max:20480',
            'link_url'     => 'nullable|url',
            'description'  => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $tool = MarketingTool::findOrFail($id);

        $tool->title = $request->title;
        // $tool->type = $request->type;
        $tool->description = $request->description;
        $tool->link_url = $request->link_url;

        if ($request->hasFile('file_path')) {
            // delete old file if exists
            if ($tool->file_path && Storage::disk('public')->exists($tool->file_path)) {
                Storage::disk('public')->delete($tool->file_path);
            }

            // store new file
            $tool->file_path = $request->file('file_path')->store('marketing_tools', 'public');
        }

        $tool->save();

        return redirect()->route('marketing-tools.index')->with('success', 'Marketing Tool updated successfully!');
    }

    public function destroy($id)
    {
        $tool = MarketingTool::findOrFail($id);
        $tool->delete();

        return redirect()->route('marketing-tools.index')->with('success', 'Tool deleted successfully!');
    }

}
