<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    use HasFactory;

    // Table ka naam specify karein
    protected $table = 'jobs';

    // Mass assignment ke liye fillable fields
    protected $fillable = [
        'title',
        'description',
        'company_name',
        'location',
        'pay',
        'duration',
    ];

    /**
     * Job aur Skills ke beech many-to-many relationship define karein.
     * Ek job ke paas kai skills ho sakte hain.
     */
    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class, 'job_skills', 'job_id', 'skill_id');
    }
}
