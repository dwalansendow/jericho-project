<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'id' => 1,
            'user_id' => 1,
            'name' => 'Administrator',
            'personal_team' => 1
        ]);
        Team::create([
            'id' => 2,
            'user_id' => 1,
            'name' => 'SULUT',
            'personal_team' => 0
        ]);
        Team::create([
            'id' => 3,
            'user_id' => 1,
            'name' => 'MANADO',
            'personal_team' => 0
        ]);
        Team::create([
            'id' => 4,
            'user_id' => 1,
            'name' => 'BITUNG',
            'personal_team' => 0
        ]);
        Team::create([
            'id' => 5,
            'user_id' => 1,
            'name' => 'MINUT',
            'personal_team' => 0
        ]);
        Team::create([
            'id' => 6,
            'user_id' => 1,
            'name' => 'MINSEL',
            'personal_team' => 0
        ]);
    }
}
