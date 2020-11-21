<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyTrend extends Model
{
    use HasFactory;
    public function figur(){
        return $this->belongsTo('App\Models\Figur', 'figur_id');
    }
}
