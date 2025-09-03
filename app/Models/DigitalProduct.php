<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DigitalProduct extends Model
{
    use HasFactory;

    protected $primaryKey = 'product_id';
    
    public $incrementing = true;

    protected $fillable = [
        'product_name',
        'product_image_url',
        'sales_page_url',
        'google_drive_link',
        'description',
        'price',
        'title'
    ];
}
