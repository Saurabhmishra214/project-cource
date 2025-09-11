<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;

    // Table name (optional if it follows Laravel's naming convention)
    protected $table = 'social_media';

    // Primary key (optional if it's "id")
    protected $primaryKey = 'id';

    // Fields that are mass assignable
    protected $fillable = [
        'platform_name',
        'username',
        'profile_url',
        'followers_count',
        'account_link', 
    ];

    // Laravel automatically manages created_at and updated_at
    public $timestamps = true;
}
