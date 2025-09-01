<?php
// file: app/Models/AffiliateTrainingSession.php (नया मॉडल)

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffiliateTrainingSession extends Model
{
    use HasFactory;

    protected $table = 'affiliate_training_sessions';

    protected $fillable = [
        'training_id',
        'title',
        'session_video_url',
        'image_url',
    ];

   
    public function training()
    {
        return $this->belongsTo(AffiliateTraining::class, 'training_id');
    }
}