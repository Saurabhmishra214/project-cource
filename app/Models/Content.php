<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'content';
    // public $timestamps = false; 
    protected $fillable = ['section', 'field', 'value', 'type'];
}

