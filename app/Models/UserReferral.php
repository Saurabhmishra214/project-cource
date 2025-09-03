<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserReferral extends Model
{
    use HasFactory;

    protected $table = 'user_referrals';
    protected $primaryKey = 'referral_id';

    protected $fillable = [
        'user_id',
        'product_id',
        'software_id',   // <-- new field
        'referral_code',
        'clicks',
        'conversions',
    ];

    // Relation: Referral belongs to a product
    public function product()
    {
        return $this->belongsTo(DigitalProduct::class, 'product_id');
    }

    // Relation: Referral belongs to a software
    public function software()
    {
        return $this->belongsTo(DigitalSoftware::class, 'software_id');
    }

    // Relation: Referral belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
