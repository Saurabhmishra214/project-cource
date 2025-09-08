<?php

namespace App\Http\Controllers\admin;

use App\Models\MarketingTool;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class MarketingToolController extends Controller
{

    public function create()
    {
        return view('admin_dashboard.marketing_tools.add');
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

        return redirect()->back()->with('success', 'Marketing Tool added successfully!');
    }

}
