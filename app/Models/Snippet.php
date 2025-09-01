<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Snippet extends Model
{
    use HasFactory;

    protected $table = 'course_snippets';

    protected $fillable = [
        'course_id',
        'snippet_url',
        'category',
        'course_type',
    ];

   
    public function course()
    {
        return $this->belongsTo(AutomationCourse::class, 'course_id');
    }
}
