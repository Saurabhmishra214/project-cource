<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlanController extends Controller
{
    // 🔹 Plans Listing
    public function index()
    {
        $plans = Plan::latest()->paginate(10);
        return view('admin_dashboard.membership_management.list', compact('plans'));
    }

    // 🔹 Show Create Form
    public function create()
    {
        return view('admin_dashboard.membership_management.add');
    }

    // 🔹 Store Plan + Features
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'plantname' => 'required|required|max:255',
            'amount'    => 'required|numeric',
            'mode'      => 'nullable|string|max:100',
            'features'  => 'required|array',
            'features.*'=> 'required|string|max:255',
            'description'=> 'nullable|string|max:500',
            'is_active' => 'boolean'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }

        $plan = Plan::create([
            'plantname' => $request->plantname,
            'amount'    => $request->amount,
            'mode'      => $request->mode,
            'description' => $request->description,
            'is_active' => $request->is_active ?? 1,
        ]);

        foreach ($request->features as $feature) {
            $plan->features()->create(['feature' => $feature]);
        }

        return redirect()->route('plans.index')->with('success', 'Plan created successfully!');
    }

    // 🔹 Show Edit Form
    public function edit($id)
    {
        $plan = Plan::with('features')->findOrFail($id);
        return view('admin_dashboard.membership_management.edit', compact('plan'));
    }

    // 🔹 Update Plan + Features
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'plantname' => 'required|string|max:255',
            'amount'    => 'required|numeric',
            'mode'      => 'nullable|string|max:100',
            'features'  => 'required|array',
            'features.*'=> 'required|string|max:255',
            'description'=> 'nullable|string|max:500',
            'is_active' => 'boolean'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }

        $plan = Plan::findOrFail($id);

        $plan->update([
            'plantname' => $request->plantname,
            'amount'    => $request->amount,
            'mode'      => $request->mode,
            'description' => $request->description,
            'is_active' => $request->is_active ?? 1,
        ]);

        // पुरानी features delete करके फिर से add करेंगे
        $plan->features()->delete();
        foreach ($request->features as $feature) {
            $plan->features()->create(['feature' => $feature]);
        }

        return redirect()->route('plans.index')->with('success', 'Plan updated successfully!');
    }

    // 🔹 Delete Plan
    public function destroy($id)
    {
        $plan = Plan::findOrFail($id);
        $plan->features()->delete();
        $plan->delete();

        return redirect()->route('plans.index')->with('success', 'Plan deleted successfully!');
    }
}
