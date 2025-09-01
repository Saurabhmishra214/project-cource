<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserReferral extends Model
{
    use HasFactory;

    protected $table = 'user_referrals';

    protected $fillable = [
        'user_id',
        'product_id',
        'referral_code',
        'clicks',
        'conversions',
    ];

    // Relation: Referral belongs to a product
    public function product()
    {
        return $this->belongsTo(DigitalProduct::class, 'product_id');
    }
}
