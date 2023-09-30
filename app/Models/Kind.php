<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kind extends Model
{
    use HasFactory;
    
    public function ShiftHopes()   
    {
        return $this->hasMany(Shift_hope::class);  
    }
    public function ShiftPatterns()   
    {
        return $this->hasMany(Shift_pattern::class);  
    }
}
