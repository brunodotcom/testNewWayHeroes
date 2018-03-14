<?php

use Illuminate\Database\Seeder;
use App\Models\Specialities;

class SpecialitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specialities = ['White Magic', 'Cure', 'Tanker', 'Summon', 'Ranged Attack', 'Boss Killer', 'Anti-Tank', 'Area Attack'];
        foreach ($specialities as $speciality) 
            Specialities::create(['name' => $speciality]);
    }
}
