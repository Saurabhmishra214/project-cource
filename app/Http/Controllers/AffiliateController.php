<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AffiliateController extends Controller
{
    public function affiliate_dashboard()
    {
        return view('affiliate_dashboard.home');
    }

    public function affiliate_training()
    {
        return view('affiliate_dashboard.training');
    }
}
