<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::create([
            'id' => 1,
            'nama_area' => 'SULUT'
        ]);
        Area::create([
            'id' => 2,
            'nama_area' => 'MANADO'
        ]);
        Area::create([
            'id' => 3,
            'nama_area' => 'BITUNG'
        ]);
        Area::create([
            'id' => 4,
            'nama_area' => 'MINUT'
        ]);
        Area::create([
            'id' => 5,
            'nama_area' => 'MINSEL'
        ]);
    }
}
