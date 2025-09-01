<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * AutomationCourse Model
 * Yeh class 'automation_courses' database table se interact karti hai.
 */
class AutomationCourse extends Model
{
    use HasFactory;

    /**

     *
     * @var string
     */
    protected $table = 'automation_courses';

    /**
   
     *
     * @var array
     */
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
