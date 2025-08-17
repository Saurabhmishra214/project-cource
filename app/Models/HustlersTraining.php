<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HustlersTraining extends Model
{
    use HasFactory;

    protected $table = 'hustlers_trainings';

    // Fillable fields
    protected $fillable = [
        'title',
        'description',
        'image_url',
        'category',
        'status',
        'progress_percent',
        'link',
    ];

    // Agar aapko status ke liye constant chahiye (best practice)
    const STATUS_IN_PROGRESS = 'In Progress';
    const STATUS_START_HERE = 'Start Here';
    const STATUS_BOOKMARKS = 'Bookmarks';
}
