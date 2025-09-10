<?php

namespace App\Http\Controllers\user\hustlerscampus\digitalassets;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DigitalProduct;
use App\Models\UserReferral;
use Illuminate\Support\Facades\Auth;
use App\Models\Payment;

use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Support\Str;

class DigitalProductImageController extends Controller
{

    
public function index()
{
    // ✅ Get products with pagination (4 per page)
    $products = DigitalProduct::paginate(4);

    // ✅ Get logged in user
    $user = Auth::user();

    // ✅ Generate referral code if empty
    if ($user && !$user->referral_code) {
        $user->referral_code = Str::upper(Str::random(8));
        $user->save();

        session()->flash('success', 'Your referral code has been generated successfully!');
    }

    // ✅ Get purchased product IDs for this user
  $purchasedProductIds = [];
if ($user) {
    $purchasedProductIds = Payment::where('user_id', $user->id)
        ->where('status', 'success') // adjust if DB uses '1' or 'paid'
        ->pluck('product_id')
        ->map(fn($id) => (int) $id)
        ->toArray();
}

    // ✅ Pass data to view
    return view(
        'dashboard.hustlerscampus.digitalassets.productindex',
        compact('products', 'user', 'purchasedProductIds')
    );
}


public function generateReferralLink(Request $request)
{
    $user = Auth::user();

    if (!$user) {
        return response()->json(['error' => 'Please log in to generate a link.'], 401);
    }

    $productId = $request->input('product_id');
    $product = DigitalProduct::findOrFail($productId);

    // Ensure unique referral per user-product
    $userReferral = UserReferral::firstOrCreate(
        [
            'user_id'    => $user->id,
            'product_id' => $product->product_id
        ],
        [
            'referral_code' => Str::uuid(),
            'clicks'        => 0,
            'conversions'   => 0
        ]
    );

    // Correct referral link
    $referralLink = route('products.show', [
        'product' => $product->product_id,
        'ref'     => $userReferral->referral_code
    ]);

    return response()->json([
        'link'          => $referralLink,
        'product_name'  => $product->product_name,
        'product_image' => $product->product_image_url
    ]);
}




public function show(DigitalProduct $product, Request $request)
{
    $referralCode = $request->query('ref');
    
    // Initialize the $user variable to null. This prevents the "Undefined variable" error
    // when a referral code is not present or is invalid.
    $user = null;

    if ($referralCode) {
        $referralEntry = UserReferral::where('referral_code', $referralCode)
                                     ->where('product_id', $product->product_id)
                                     ->first();

        if ($referralEntry) {
            $referralEntry->increment('clicks');
            
            // Get the user who owns this referral entry and assign it to the $user variable.
            // This assumes a 'user' relationship is set up on your UserReferral model.
            $user = $referralEntry->user; 
        }
    }
    
    // Pass both the product and the user to the view.
    return view('dashboard.hustlerscampus.digitalassets.shiwdetails', compact('product', 'user'));
}

// a
}
