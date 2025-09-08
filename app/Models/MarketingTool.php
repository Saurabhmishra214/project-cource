<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketingTool extends Model
{
    use HasFactory;

    protected $table = 'marketing_tools';

    /**
     * Mass assignable fields
     */
    protected $fillable = [
        'title',
        'type',
        'file_path',
        'link_url',
        'description',
    ];

    /**
     * Generic type checker
     * Example: $tool->isType('image')
     */
    public function isType(string $type): bool
    {
        return $this->type === $type;
    }

    /**
     * Scope query for type filtering
     * Example: MarketingTool::type('video')->get();
     */
    public function scopeType($query, string $type)
    {
        return $query->where('type', $type);
    }
}
