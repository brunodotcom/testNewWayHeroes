<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ClassesTableSeeder::class);
        $this->call(SpecialitiesTableSeeder::class);
        $this->call(HeroesTableSeeder::class);         
        $this->call(HeroesPhotosTableSeeder::class);
    }
}
