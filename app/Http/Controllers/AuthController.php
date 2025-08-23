<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Str; // Make sure to import Str
use App\Models\Network;
use Illuminate\Support\Facades\Mail; // ✅ Mail Facade को import करें
use Illuminate\Support\Facades\URL;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('frontend.auth.register');
    }

  public function registerUser(Request $request)
    {
        // Validation rules
        $validator = Validator::make($request->all(), [
            'name'          => 'required|string|max:255',
            'email'         => 'required|string|email|max:255|unique:users,email',
            'password'      => 'required|string|min:8|confirmed',
            'mobile_number' => 'nullable|string|max:20',
            'referral_code' => 'nullable|exists:users,referral_code',
        ]);

        // Agar validation fail ho jaye
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $referred_by_id = null;
        if ($request->referral_code) {
            $referrer = User::where('referral_code', $request->referral_code)->first();
            if ($referrer) {
                $referred_by_id = $referrer->id;
            }
        }
        
        // Plaintext password को एक वेरिएबल में सेव करें ताकि बाद में email में भेज सकें
        $plainPassword = $request->password;

        // Agar validation pass ho gaya
        $user = User::create([
            'name'              => $request->name,
            'email'             => $request->email,
            'password'          => Hash::make($plainPassword),
            'mobile_number'     => $request->mobile_number,
            'role_id'           => 2,
            'status'            => 'active',
            'referral_code'     => (string) Str::uuid(),
            'referred_by'       => $referred_by_id,
        ]);

        if ($referred_by_id) {
            Network::create([
                'user_id'           => $user->id,
                'parent_user_id'    => $referred_by_id,
                'referral_code'     => $request->referral_code,
            ]);
        }
        
        // ✅ यहाँ से Email भेजने का लॉजिक शुरू होता है
        try {
            // ✅ Referral link बनाएं
            $referral_link = URL::route('register', ['referral_code' => $user->referral_code]);
            
            // ✅ Email data तैयार करें
            $emailData = [
                'name'          => $user->name,
                'email'         => $user->email,
                'password'      => $plainPassword, // Plaintext password भेजें (इसे सिर्फ testing के लिए इस्तेमाल करें)
                'referral_link' => $referral_link,
            ];

            // ✅ Email भेजें
            Mail::send('emails.register_mail', $emailData, function($message) use ($user) {
                $message->to($user->email, $user->name)
                        ->subject('Welcome to Our Platform!');
            });
            
        } catch (\Exception $e) {
            // Log the error but don't stop the application
            \Log::error('Mail could not be sent: ' . $e->getMessage());
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
            
            // last_login_at field ko update karein
            $user = Auth::user();
            $user->last_login_at = now();
            $user->save();

            return redirect()->intended('/dashboard');
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
}
