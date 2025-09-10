<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\DigitalSoftware;
use App\Models\DigitalProduct;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
 public function store(Request $request)
{
    $user = Auth::user();

    if ($request->software_id) {
        // Software payment
        $software = DigitalSoftware::findOrFail($request->software_id);

        $payment = Payment::create([
            'user_id'        => $user->id ?? null,
            'order_id'       => uniqid('order_'),
            'gateway_order_id'=> null,
            'payment_id'     => $request->razorpay_payment_id,
            'amount'         => $software->price,
            'currency'       => 'INR',
            'status'         => $request->payment_status == 1 ? 'success' : 'failed',
            'payment_method' => 'razorpay',
            'product_id'     => null,             // software payment me null
            'software_id'    => $software->software_id,
            'membership_id'  => null,
            'response_data'  => $request->all(),
        ]);
    } elseif ($request->product_id) {
        // Digital product payment
        $product = DigitalProduct::findOrFail($request->product_id);

        $payment = Payment::create([
            'user_id'        => $user->id ?? null,
            'order_id'       => uniqid('order_'),
            'gateway_order_id'=> null,
            'payment_id'     => $request->razorpay_payment_id,
            'amount'         => $product->price,
            'currency'       => 'INR',
            'status'         => $request->payment_status == 1 ? 'success' : 'failed',
            'payment_method' => 'razorpay',
            'product_id'     => $product->product_id,
            'software_id'    => null,
            'membership_id'  => null,
            'response_data'  => $request->all(),
        ]);
    }

    return redirect()->route('thankyou.page')->with('success', 'Payment successful! 🎉');
}




public function thankYou(Payment $payment)
{
  
    return view('thankyou', compact('payment'));
}


    
}
