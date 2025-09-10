<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingLesson extends Model
{
    protected $table = 'training_lessons';

    protected $fillable = [
        'course_id',
        'title',
        'description',
        'video_url',
        'lesson_order',
    ];

    // Relation with parent training
    public function course()
    {
        return $this->belongsTo(HustlersTraining::class, 'course_id');
    }
}
