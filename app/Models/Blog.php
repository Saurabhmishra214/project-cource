<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

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

    public $timestamps = true;

    protected $dates = [
        'published_at',
        'created_at',
        'updated_at',
    ];
}
