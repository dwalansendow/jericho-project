<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    public function figurs(){
        return $this->hasMany('App\Models\Figur', 'area_id');
    }
}
