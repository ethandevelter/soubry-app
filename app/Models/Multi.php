<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Multi extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'field_id', 
        'value',
    ];
}
