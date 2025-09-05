<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GamifyChallenge extends Model
{
    use HasFactory;
    protected $primaryKey = 'id'; 

    public $timestamps = false; 
    protected $table = 'gamify_challenges';

    protected $fillable = [
        'video',
        'title',
        'description',
        'image',
        'posted_by',
        'created_at',
    ];

    public function postedBy()
    {
        return $this->belongsTo(User::class, 'posted_by');
    }
}
