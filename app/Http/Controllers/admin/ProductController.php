<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DigitalProduct;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ProductController extends Controller
{

        public function index() {
            $products = DigitalProduct::latest()->paginate(10); // 10 items per page
            return view('admin_dashboard.digital_products.list', compact('products'));

        }
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

        public function edit($id)
        {
            $products = DigitalProduct::findOrFail($id);
            return view('admin_dashboard.digital_products.edit', compact('products'));
        }

        public function update(Request $request, $id)
        {
            $request->validate([
                'product_name'      => 'required|string|max:255',
                'product_image_url' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
                'sales_page_url'    => 'nullable|url',
                'google_drive_link' => 'nullable|url',
            ]);

            $products = DigitalProduct::findOrFail($id);
            $products->update($request->all());

            return redirect()->route('digitalproduct.index')
                            ->with('success', 'Product updated successfully!');
        }

        public function destroy($id)
        {
            $product = DigitalProduct::findOrFail($id);

            // Delete all referrals related to this product
            $product->referrals()->delete();

            // Now delete the product
            $product->delete();

            return redirect()->route('digitalproduct.index')
                            ->with('success', 'Product deleted successfully!');
        }
}
