<?php

namespace App\Http\Controllers\user\hustlerscampus\digitalassets;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DigitalSoftware;
use App\Models\UserReferral;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DigitalSoftwareController extends Controller
{
    /**
     * Display a listing of the digital softwares.
     */
    public function index()
    {
        // Paginate all available digital softwares, showing 4 per page.
        $softwares = DigitalSoftware::paginate(4);
        $user = Auth::user();

        // If the authenticated user does not have a referral code, generate one.
        if ($user && empty($user->referral_code)) {
            $user->referral_code = Str::upper(Str::random(8));
            $user->save();
        }

        // Return the view with the softwares and user data.
        return view('dashboard.hustlerscampus.digitalassets.softwareindex', compact('softwares', 'user'));
    }

    /**
     * Generate a unique referral link for a software.
     */
    public function generateReferralLink(Request $request)
    {
        $user = Auth::user();
        if (!$user) {
            // Return an error if the user is not logged in.
            return response()->json(['error' => 'Please log in to generate a referral link.'], 401);
        }

        $softwareId = $request->input('software_id');
        $software = DigitalSoftware::findOrFail($softwareId);

        // Find an existing referral or create a new one if it doesn't exist.
        // This ensures each user has only one unique referral code per software.
        $referral = UserReferral::firstOrCreate(
            ['user_id' => $user->id, 'software_id' => $software->software_id],
            ['referral_code' => Str::upper(Str::random(10)), 'clicks' => 0, 'conversions' => 0]
        );

        // Construct the full referral link.
        $referralLink = url('software-sales/' . $software->software_id . '?ref=' . $referral->referral_code);

        // Return the generated link as a JSON response.
        return response()->json(['link' => $referralLink]);
    }

    /**
     * Show the digital software details page and track referral clicks.
     */
    public function show(DigitalSoftware $software, Request $request)
    {
        $referralCode = $request->query('ref');
        $user = null; // Initialize a variable for the referral owner.

        if ($referralCode) {
            // Find the referral entry using the referral code and software ID.
            $referralEntry = UserReferral::where('referral_code', $referralCode)
                                         ->where('software_id', $software->software_id)
                                         ->first();

            if ($referralEntry) {
                // If a referral is found, increment the click count and get the user who owns the referral.
                $referralEntry->increment('clicks');
                $user = $referralEntry->user;
            }
        }

        // Return the software details view.
        // The 'user' variable will be the referral owner, or null if no referral code was used.
        return view('dashboard.hustlerscampus.digitalassets.softwaredetails', compact('software', 'user'));
    }
}
