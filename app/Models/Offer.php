<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    // Specify the table name (optional if it matches the plural form)
    protected $table = 'offers';

    // Mass assignable fields
    protected $fillable = [
        'brand_logo',
        'offer_provider_name',
        'subtitle',
        'offer_percent',
        'offer_amount',
        'description',
        'coupon_code',
    ];

    
    public $timestamps = true;
}
