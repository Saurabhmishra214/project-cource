<?php

namespace App\Http\Controllers\user\hustlerscampus\digitalassets;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Use DB facade if not using an Eloquent model

class SoftwareProductController extends Controller
{
    

   public function productindex()
    {
        // Fetch all products from the digital_products table
        $products = DB::table('digital_products')->get();

        // Pass the fetched products to the view
        return view('dashboard.hustlerscampus.digitalassets.productindex', [
            'products' => $products
        ]);
    }

}
