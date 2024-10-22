<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Field extends Model
{
    use HasFactory;
    
    protected $fillable = ['record_id', 'field_name', 'field_type', 'field_value'];

    // Relationship with Record model (if needed)
    public function record()
    {
        return $this->belongsTo(Record::class);
    }
}
