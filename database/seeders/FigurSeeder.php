<?php

namespace Database\Seeders;

use App\Models\Figur;
use Illuminate\Database\Seeder;

class FigurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // SULUT
        Figur::create([
            'id' => 1,
            'area_id' => 1,
            'nama_figur' => 'CEP - SEHAN'
        ]);
        Figur::create([
            'id' => 2,
            'area_id' => 1,
            'nama_figur' => 'VAP - HR'
        ]);
        Figur::create([
            'id' => 3,
            'area_id' => 1,
            'nama_figur' => 'OLLY - STEVEN'
        ]);

        // MANADO
        Figur::create([
            'id' => 4,
            'area_id' => 2,
            'nama_figur' => 'AA - RS'
        ]);
        Figur::create([
            'id' => 5,
            'area_id' => 2,
            'nama_figur' => 'SSK - SS'
        ]);
        Figur::create([
            'id' => 6,
            'area_id' => 2,
            'nama_figur' => 'MOR - HJP'
        ]);
        Figur::create([
            'id' => 7,
            'area_id' => 2,
            'nama_figur' => 'PAHAM'
        ]);

        // BITUNG
        Figur::create([
            'id' => 8,
            'area_id' => 3,
            'nama_figur' => 'MJL - MDT'
        ]);
        Figur::create([
            'id' => 9,
            'area_id' => 3,
            'nama_figur' => 'VL - GP'
        ]);
        Figur::create([
            'id' => 10,
            'area_id' => 3,
            'nama_figur' => 'MM - HH'
        ]);

        // MINUT
        Figur::create([
            'id' => 11,
            'area_id' => 4,
            'nama_figur' => 'SGR - NAP'
        ]);
        Figur::create([
            'id' => 12,
            'area_id' => 4,
            'nama_figur' => 'JG - KWL'
        ]);
        Figur::create([
            'id' => 13,
            'area_id' => 4,
            'nama_figur' => 'SS - JL'
        ]);

        // MINSEL
        Figur::create([
            'id' => 14,
            'area_id' => 5,
            'nama_figur' => 'MEP - VT'
        ]);
        Figur::create([
            'id' => 15,
            'area_id' => 5,
            'nama_figur' => 'ROSO - HARUM'
        ]);
        Figur::create([
            'id' => 16,
            'area_id' => 5,
            'nama_figur' => 'FDW - PYR'
        ]);
    }
}
