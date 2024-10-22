<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Record extends Model
{
    use HasFactory;
    
    protected $fillable = ['table_id'];

    public function table()
    {
        return $this->belongsTo(Table::class);
    }

    // Relationship with Field model
    public function fields()
    {
        return $this->hasMany(Field::class);
    }
}
