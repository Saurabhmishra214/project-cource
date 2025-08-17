<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Skill extends Model
{
    use HasFactory;

    // Table ka naam specify karein
    protected $table = 'skills';

    // Mass assignment ke liye fillable fields
    protected $fillable = [
        'name',
    ];

    /**
     * Skill aur Jobs ke beech many-to-many relationship define karein.
     * Ek skill kai jobs se juda ho sakta hai.
     */
    public function jobs(): BelongsToMany
    {
        return $this->belongsToMany(Job::class, 'job_skills', 'skill_id', 'job_id');
    }
}
