<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Snippet extends Model
{
    use HasFactory;

    // Table name (optional if following Laravel convention)
    protected $table = 'course_snippets';

    // Fillable fields for mass assignment
    protected $fillable = [
        'course_id',
        'snippet_url',
        'category',
        'course_type',
    ];

    /**
     * Relation: snippet belongs to a course
     */
    public function course()
    {
        return $this->belongsTo(AutomationCourse::class, 'course_id');
    }
}
