<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    protected $table = 'job_applications';

    protected $fillable = [
        'job_id',
        'full_name',
        'email',
        'phone_number',
        'date_of_birth',
        'address',
        'highest_qualification',
        'school_college',
        'passing_year',
        'total_experience_years',
        'total_experience_months',
        'previous_company',
        'job_title',
        'current_ctc',
        'notice_period',
        'preferred_location',
        'cover_letter',
        'resume_path',
        'linkedin_url',
    ];

    // Optional: Relationship with Job
    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }
}
