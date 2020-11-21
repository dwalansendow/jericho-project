<?php

namespace App\Http\Livewire\Sulut\Trends;

use App\Models\User;
use Livewire\Component;
use ArielMejiaDev\LarapexCharts\LarapexChart;


class DailyTrends extends Component
{
    public function Coba(){
        $this->coba;
    }
    public function render()
    {

        return view('livewire.sulut.trends.daily-trends');
    }
}
