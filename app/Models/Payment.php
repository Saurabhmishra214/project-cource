<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    // Table name (optional agar plural hi hai)
    protected $table = 'payments';

    // Mass assignable fields
    protected $fillable = [
        'user_id',
        'order_id',
        'gateway_order_id',
        'payment_id',
        'amount',
        'currency',
        'status',
        'payment_method',
        'product_id',
        'software_id',
        'membership_id',
        'response_data',
    ];

    // Agar response_data JSON hai
    protected $casts = [
        'response_data' => 'array',
    ];
}
