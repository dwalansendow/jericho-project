<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Trendy Walansendow',
            'email' => 'bungtd@gmail.com',
            'current_team_id' => 1,
            'password' => bcrypt('Warnet02')
        ]);
        User::create([
            'name' => 'Team Paslon',
            'email' => 'sulut@jerichoproject.net',
            'current_team_id' => 2,
            'password' => bcrypt('PilkadaS01020895')
        ]);
        User::create([
            'name' => 'Team Paslon',
            'email' => 'manado@jerichoproject.net',
            'current_team_id' => 3,
            'password' => bcrypt('PilkadaS01M02020895')
        ]);
        User::create([
            'name' => 'Team Paslon',
            'email' => 'bitung@jerichoproject.net',
            'current_team_id' => 4,
            'password' => bcrypt('PilkadaS01B03020895')
        ]);
        User::create([
            'name' => 'Team Paslon',
            'email' => 'minut@jerichoproject.net',
            'current_team_id' => 5,
            'password' => bcrypt('PilkadaS01M04020895')
        ]);
        User::create([
            'name' => 'Team Paslon',
            'email' => 'minsel@jerichoproject.net',
            'current_team_id' => 6,
            'password' => bcrypt('PilkadaS01M05020895')
        ]);
    }
}
