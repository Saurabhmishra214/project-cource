<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DigitalProduct extends Model
{
    use HasFactory;

    protected $table = 'digital_products';
    protected $primaryKey = 'product_id'; 
    public $incrementing = true;          
    protected $keyType = 'int'; 

    protected $fillable = [
        'product_name',
        'product_image_url',
        'sales_page_url',
        'google_drive_link',
    ];

    // Relation: A product can have many referrals
    public function referrals()
    {
        return $this->hasMany(UserReferral::class, 'product_id');
    }
}
