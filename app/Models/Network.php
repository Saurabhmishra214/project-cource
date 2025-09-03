<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    use HasFactory;


    protected $table = 'network';


    protected $fillable = [
        'user_id',
        'parent_user_id',
        'referral_code',
    ];

  
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

   
    public function parent()
    {
        return $this->belongsTo(User::class, 'parent_user_id');
    }
}