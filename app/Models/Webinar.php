<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webinar extends Model
{
    use HasFactory;

    // अगर table name model name से अलग है
    protected $table = 'webinars';

    // Primary key (default 'id' है, यहाँ 'webinar_id' है)
    protected $primaryKey = 'webinar_id';

    // Primary key auto-incrementing है
    public $incrementing = true;

    // Primary key type
    protected $keyType = 'int';

    // Timestamps auto-manage करने के लिए (created_at और updated_at)
    public $timestamps = true;

    // Mass assignment के लिए fields
    protected $fillable = [
        'title',
        'description',
        'duration_minutes',
        'webinar_date',
        'image_url',
        'rating',
        'likes',
        'genres_tags',
    ];

    // यदि आप चाहें तो casts भी define कर सकते हैं
    protected $casts = [
        'webinar_date' => 'date',
        'rating' => 'decimal:1',
        'likes' => 'integer',
        'duration_minutes' => 'integer',
    ];
}