<?php
// file: app/Models/AffiliateTraining.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffiliateTraining extends Model
{
    use HasFactory;

    protected $table = 'affiliate_trainings';

    protected $fillable = [
        'title',
        'description',
        'main_video_url',
        'day_number',
        'category',
    ];

    /**
     * Get the sessions for the training.
     */
    public function sessions()
    {
        return $this->hasMany(AffiliateTrainingSession::class, 'training_id');
    }
}