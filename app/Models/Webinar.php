<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webinar extends Model
{
    use HasFactory;

    protected $table = 'webinars';

    protected $primaryKey = 'webinar_id';

    public $incrementing = true;

    protected $keyType = 'int';

    public $timestamps = true;

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

    protected $casts = [
        'webinar_date' => 'date',
        'rating' => 'decimal:1',
        'likes' => 'integer',
        'duration_minutes' => 'integer',
    ];
}