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
     * The table associated with the model.
     * Yeh property batati hai ki yeh model kis table se juda hua hai.
     * Agar aapki table ka naam 'automation_courses' hai, to aapko yeh define karna zaroori hai.
     * Agar table ka naam 'automation_courses' ki jagah 'automation_course' hota, to Laravel apne aap samajh jata.
     * Lekin yahan naam alag hai, isliye hum isko explicitly specify kar rahe hain.
     *
     * @var string
     */
    protected $table = 'automation_courses';

    /**
     * The attributes that are mass assignable.
     * Yeh array un fields (columns) ko define karta hai jinhe aap create ya update karte samay
     * ek saath assign kar sakte hain. Isse aapko security bhi milti hai.
     * `id` field ko yahan shamil karne ki zaroorat nahi hai kyunki woh apne aap manage hota hai.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'image_url',
        'category',
        'link'
    ];
}
