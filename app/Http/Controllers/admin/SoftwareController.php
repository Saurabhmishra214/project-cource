<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Software;
use Illuminate\Http\Request;

class SoftwareController extends Controller
{
    public function index() {
        $softwares = Software::latest()->paginate(3); // 10 items per page
        return view('admin_dashboard.softwares.list', compact('softwares'));
    }

    public function create()
    {
        return view('admin_dashboard.softwares.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'software_name'      => 'required|string|max:255',
            'software_image_url' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'sales_page_url'    => 'nullable|url',
            'google_drive_link' => 'nullable|url',
            'description'       => 'nullable|string',
            'price'             => 'nullable|string',
            'title'             => 'nullable|string',
        ]);

        $data = $request->only([
            'software_name',
            'software_image_url',
            'sales_page_url',
            'google_drive_link',
            'description',
            'price',
            'title',
        ]);

        // Handle file upload if provided
        if ($request->hasFile('software_image_url')) {
            $data['software_image_url'] = $request->file('software_image_url')->store('softwares', 'public');
        }

        // Create software
        Software::create($data);

        return redirect()->back()->with('success', 'Software created successfully!');
    }

    public function edit($id)
    {
        $softwares = Software::findOrFail($id);
        return view('admin_dashboard.softwares.edit', compact('softwares'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'software_name'      => 'required|string|max:255',
            'software_image_url' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'sales_page_url'    => 'nullable|url',
            'google_drive_link' => 'nullable|url',
            'description'       => 'nullable|string',
            'price'             => 'nullable|string',
            'title'             => 'nullable|string',
        ]);

        $softwares = Software::findOrFail($id);
        $softwares->update($request->all());

        return redirect()->route('software.index')
                        ->with('success', 'Training updated successfully!');
    }

    public function destroy($id)
    {
        $product = Software::findOrFail($id);

        // Delete all referrals related to this product
        $product->referrals()->delete();

        // Now delete the product
        $product->delete();

        return redirect()->route('software.index')
                        ->with('success', 'Software data deleted successfully!');
    }
}
