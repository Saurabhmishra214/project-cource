<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function freelance_apply()
    {
        return view('dashboard.application_form'); 
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric',
            'applying_for' => 'required|string',
            'skills' => 'required|array|min:1',
            'qualification' => 'required|string',
            'experience' => 'required|string',
            'address' => 'required|string',
        ]);

        JobApplication::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'applying_for' => $validatedData['applying_for'],
            'skills' => json_encode($validatedData['skills']), // store as JSON
            'qualification' => $validatedData['qualification'],
            'experience' => $validatedData['experience'],
            'address' => $validatedData['address'],
        ]);

        return redirect()->back()->with('success', 'Your application has been submitted successfully!');
    }
}
