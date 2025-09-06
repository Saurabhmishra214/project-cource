<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseLesson extends Model
{
    use HasFactory;

    // Table ka naam specify karna zaroori hai kyunki aapne naam courselessons rakha hai
    protected $table = 'courselessons';

    // Mass assignable fields
    protected $fillable = [
        'course_id',
        'title',
        'description',
        'video_url',
        'lesson_order',
    ];

    // Relation with Course
    public function course()
    {
        return $this->belongsTo(AutomationCourse::class, 'course_id');
    }
}
