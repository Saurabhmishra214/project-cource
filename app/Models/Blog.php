<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    // Table ka naam agar default 'blogs' se match nahi karta
    protected $table = 'blogs';

    // Mass assignment ke liye fillable fields
    protected $fillable = [
        'title',
        'slug',
        'category',
        'description',
        'content',
        'image',
        'author',
        'published_at',
    ];

    // Agar आप timestamps automatic manage करना चाहते हैं
    public $timestamps = true;

    // Optional: Date casting for published_at
    protected $dates = [
        'published_at',
        'created_at',
        'updated_at',
    ];
}
