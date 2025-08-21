<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth; 

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
    ]);

    // Agar validation fail ho jaye
    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)  // ye line errors ko Blade me bhejti hai
            ->withInput();            // old() ke liye
    }

    // Agar validation pass ho gaya
    $user = User::create([
        'name'          => $request->name,
        'email'         => $request->email,
        'password'      => Hash::make($request->password), // ✅ hamesha hash
        'mobile_number' => $request->mobile_number,
        'role_id'       => 2,
        'status'        => 'active',
    ]);

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
