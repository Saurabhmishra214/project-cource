<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class OfferController extends Controller
{

    public function index()
    {
        $offers = Offer::latest()->paginate(10);
        return view('admin_dashboard.offers.list', compact('offers'));
    }

    public function create()
    {
        return view('admin_dashboard.offers.add');
    }

    public function store(Request $request)
    {
        // Validation
        $validator = Validator::make($request->all(), [
            'brand_logo'           => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'offer_provider_name'  => 'required|string|max:255',
            'subtitle'             => 'nullable|string|max:255',
            'offer_percent'        => 'nullable|numeric|min:0|max:100',
            'offer_amount'         => 'nullable|numeric|min:0',
            'description'          => 'nullable|string',
            'coupon_code'          => 'nullable|string|max:100',
        ]);

        // If validation fails
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = $validator->validated();

        // Handle file upload if provided
        if ($request->hasFile('brand_logo')) {
            $data['brand_logo'] = $request->file('brand_logo')->store('offer_logos', 'public');
        }

        // Create offer
        Offer::create($data);

        return redirect()->back()->with('success', 'Offer created successfully!');
    }

    public function edit($id)
    {
        $offer = Offer::findOrFail($id);
        return view('admin_dashboard.offers.edit', compact('offer'));
    }

    public function update(Request $request, $id)
    {
        $offer = Offer::findOrFail($id);

        // Validation
        $data = $request->validate([
            'brand_logo'           => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'offer_provider_name'  => 'required|string|max:255',
            'subtitle'             => 'nullable|string|max:255',
            'offer_percent'        => 'nullable|numeric|min:0|max:100',
            'offer_amount'         => 'nullable|numeric|min:0',
            'description'          => 'nullable|string',
            'coupon_code'          => 'nullable|string|max:100',
        ]);

        // If new logo is uploaded
        if ($request->hasFile('brand_logo')) {
            // Delete old one if present
            if ($offer->brand_logo) {
                Storage::disk('public')->delete($offer->brand_logo);
            }

            // Save new one
            $data['brand_logo'] = $request->file('brand_logo')->store('offer_logos', 'public');
        }

        $offer->update($data);

        return redirect()->route('offer.index')->with('success', 'Offer updated successfully!');
    }

    public function destroy($id)
    {
        $offer = Offer::findOrFail($id);
        $offer->delete();

        return redirect()->route('offer.index')->with('success', 'Webinar deleted successfully!');
    }

    
}
