<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DigitalProduct;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        return view('admin_dashboard.digital_products.add');
    }
    
        public function store(Request $request)
        {
            
            $validator = Validator::make($request->all(), [
            'product_name'      => 'required|string|max:255',
            'product_image_url' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'sales_page_url'    => 'nullable|url',
            'google_drive_link' => 'nullable|url',
            ]);

            // If validation fails
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $data = $validator->validated();

            // Handle file upload if provided
            if ($request->hasFile('product_image_url')) {
                $data['product_image_url'] = $request->file('product_image_url')->store('digital_products', 'public');
            }

            // Create product
            DigitalProduct::create($data);

            return redirect()->back()->with('success', 'Digital product created successfully!');
        }
}
