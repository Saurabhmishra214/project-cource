<?php

namespace App\Http\Controllers\user\hustlerscampus\digitalassets;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DigitalSoftware;
use App\Models\UserReferral;
use Illuminate\Support\Facades\Auth;
use App\Models\Payment;
use Illuminate\Support\Str;

class DigitalSoftwareController extends Controller
{
    /**
     * Show paginated list of digital softwares
     */
public function index()
{
    $softwares = DigitalSoftware::paginate(4);
    $user = Auth::user();

    // Purchased product IDs default empty
    $purchasedProductIds = [];

    if ($user) {
        // Agar user ke paas referral code nahi hai to generate karo
        if (empty($user->referral_code)) {
            $user->referral_code = Str::upper(Str::random(8));
            $user->save();
        }

        // Yaha se purchased softwares nikal lo
        $purchasedProductIds = Payment::where('user_id', $user->id)
            ->where('status', 'success') // sirf successful payments
            ->pluck('software_id')
            ->map(fn ($id) => (int) $id) // int convert
            ->toArray();
    }

    return view('dashboard.hustlerscampus.digitalassets.softwareindex', compact(
        'softwares',
        'user',
        'purchasedProductIds'
    ));
}


    /**
     * Generate referral link for software
     */
public function generateReferralLink(Request $request)
{
    $request->validate(['software_id' => 'required|integer|exists:digital_softwares,software_id']);

    $user = Auth::user();
    // find or create referral row
    $referral = UserReferral::firstOrCreate(
        ['user_id' => $user->id, 'software_id' => $request->software_id],
        ['referral_code' => Str::upper(Str::random(8)), 'clicks' => 0, 'conversions' => 0]
    );

    $link = url('software/'.$request->software_id) . '?ref=' . $referral->referral_code;
    return response()->json(['link' => $link, 'referral_id' => $referral->referral_id]);
}

    /**
     * Show software details and track referral clicks
     */
public function show(DigitalSoftware $software, Request $request)
{
    $referralCode = $request->query('ref');
    $referrerUser = null;

    if ($referralCode) {
        // Referral entry निकालो
        $referralEntry = UserReferral::where('referral_code', $referralCode)
            ->where('software_id', $software->id) // ✅ id use करो
            ->first();

        if ($referralEntry) {
            // Referral click count बढ़ाओ
            $referralEntry->increment('clicks');

            // Referrer user relation से लाओ
            $referrerUser = $referralEntry->user;

            // Referral code session में save करो ताकि login/signup के बाद use हो
            session(['referral_code' => $referralCode]);
        }
    }

    // अगर user login नहीं है और referral से आया है → login/signup पर redirect
    if ($referralCode && !auth()->check()) {
        return redirect()->route('login')->with('referral_message', 'Please login/signup to continue with referral benefits!');
    }

    // Otherwise software details page दिखाओ
    return view('dashboard.hustlerscampus.digitalassets.showdetailssoftware', compact('software', 'referrerUser'));
}

}
