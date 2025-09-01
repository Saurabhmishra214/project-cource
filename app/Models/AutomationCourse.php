<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class AutomationCourse extends Model
{
    use HasFactory;


    protected $table = 'automation_courses';

   
    protected $fillable = [
        'title',
        'description',
        'video_url',
        'category',
        'link'
    ];

    public function snippet()
    {
        return $this->hasOne(Snippet::class, 'course_id');
    }
}
