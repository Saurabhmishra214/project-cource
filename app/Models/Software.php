<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use HasFactory;

    protected $table = 'digital_softwares';
    protected $primaryKey = 'software_id';
    public $incrementing = true;

    protected $fillable = [
        'software_name',
        'software_image_url',
        'sales_page_url',
        'google_drive_link',
        'description',
        'price',
        'title',
    ];

    public function referrals()
    {
        return $this->hasMany(UserReferral::class, 'product_id');
    }
}
