<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Str;
use App\Models\Network;
use Illuminate\Support\Facades\Mail; 
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Log;
use App\Mail\RegisterMail;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('frontend.auth.register');
    }










//  public function registerUser(Request $request)
//     {
//         // 1️⃣ Validation
//         $validator = Validator::make($request->all(), [
//             'name'          => 'required|string|max:255',
//             'email'         => 'required|string|email|max:255|unique:users,email',
//             'password'      => 'required|string|min:8|confirmed',
//             'mobile_number' => 'nullable|string|max:20',
//             'referral_code' => 'nullable|exists:users,referral_code',
//         ]);

//         if ($validator->fails()) {
//             return redirect()->back()->withErrors($validator)->withInput();
//         }

//         // 2️⃣ Referral handling
//         $referred_by_id = null;
//         $referrer = null; // Referrer object ko yahan define kar dein
//         if ($request->referral_code) {
//             $referrer = User::where('referral_code', $request->referral_code)->first();
//             if ($referrer) {
//                 $referred_by_id = $referrer->id;
//             }
//         }

//         $plainPassword = $request->password;

//         // 3️⃣ User creation
//         $user = User::create([
//             'name'          => $request->name,
//             'email'         => $request->email,
//             'password'      => Hash::make($plainPassword),
//             'mobile_number' => $request->mobile_number,
//             'role_id'       => 2,
//             'status'        => 'active',
//             'referral_code' => (string) Str::uuid(),
//             'referred_by'   => $referred_by_id,
//             'remember_token' => Str::random(60),
//             'is_verified' => 0,
//         ]);

//         // 4️⃣ Rewards and Network Entry
//         // Naye user aur referrer ko coins denge aur network entry banayenge
//         if ($referred_by_id) {
//             // Naye user ko 10 coins dein
//             $user->increment('coins', 10);

//             // Referrer ko bhi 10 coins dein
//             // $referrer variable pehle hi define ho chuka hai
//             if ($referrer) {
//                  $referrer->increment('coins', 10);
//             }

//             // Network entry banayein
//             Network::create([
//                 'user_id'        => $user->id,
//                 'parent_user_id' => $referred_by_id,
//                 'referral_code'  => $request->referral_code,
//             ]);
//         }

//         // 5️⃣ Send registration email
//         try {
//             Log::info('Attempting to send registration email to ' . $user->email);

//             Mail::to($user->email)->send(new RegisterMail($user));

//             Log::info('Registration email successfully sent to ' . $user->email);

//         } catch (\Exception $e) {
//             Log::error('Mail could not be sent. Error: ' . $e->getMessage());
//         }

//         return redirect()->route('login_form')->with('success', 'Registration successful! Please login.');
//     }


public function registerUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'          => 'required|string|max:255',
            'email'         => 'required|string|email|max:255|unique:users,email',
            'password'      => 'required|string|min:8|confirmed',
            'mobile_number' => 'string|max:20',
            'referral_code' => 'nullable|string|exists:users,referral_code',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $referrer = null;
        if ($request->filled('referral_code')) {
            $referrer = User::where('referral_code', $request->input('referral_code'))->first();
        }

        $user = User::create([
            'name'          => $request->name,
            'email'         => $request->email,
            'password'      => Hash::make($request->password),
            'mobile_number' => $request->mobile_number,
            'status'        => 'active',
            'referral_code' => (string) Str::uuid(),
            'referred_by'   => $referrer ? $referrer->id : null,
            'is_verified'   => 0,
            'coins'         => 0, 
        ]);

        if ($referrer) {
            $user->increment('coins', 10);
            
            $referrer->increment('coins', 10);

            Network::create([
                'user_id'        => $user->id,
                'parent_user_id' => $referrer->id,
                'referral_code'  => $request->input('referral_code'),
            ]);
        }

        try {
            Mail::to($user->email)->send(new RegisterMail($user));
            Log::info('Registration email successfully sent to ' . $user->email);
        } catch (\Exception $e) {
            Log::error('Mail could not be sent. Error: ' . $e->getMessage());
        }

        return redirect()->route('login_form')->with('success', 'Registration successful! Please login.');
    }











    public function showLogin()
    {
        return view('frontend.auth.login');
    }


public function loginUser(Request $request)
{
    $request->validate([
        'email' => ['required', 'string', 'email'],
        'password' => ['required', 'string'],
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        $user = Auth::user();
        $user->last_login_at = now();
        $user->save();

        // ✅ Always redirect to home page
        return redirect('/');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
}


    
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('home')->with('success', 'You have been logged out.');
    }







      public function showReferralForm(Request $request)
    {
        if (Auth::check()) {
            return redirect()->route('referral.register');
        }

        $referralCode = $request->query('referral_code');

        if ($referralCode) {
            $userExists = User::where('referral_code', $referralCode)->exists();

            if (!$userExists) {
                abort(404);
            }
        }

       
        return view('frontend.referralregister', compact('referralCode'));
    }






}
