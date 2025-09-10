<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'plantname',
        'amount',
        'mode',
        'description',
        // 'features',   // old feature field (अगर रखना है)
        'is_active',
    ];

    // Relationship: One Plan has many Features
    public function features()
    {
        return $this->hasMany(PlanFeature::class, 'plan_id', 'id');
    }
}
