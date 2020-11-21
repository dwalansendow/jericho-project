<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Figur extends Model
{
    use HasFactory;
    public function area(){
        return $this->belongsTo('App\Models\Area', 'area_id');
    }

    public function dailytrends(){
        return $this->hasMany('App\Models\DailyTrend', 'figur_id');
    }

    public function yearlytrends(){
        return $this->hasMany('App\Models\YearlyTrend', 'figur_id');
    }
}
