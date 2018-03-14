<?php

use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classes = ['Mage', 'Fighter', 'Knight', 'Archer', 'Swordsman', 'Priest'];
        foreach ($classes as $class) 
	        Classes::create(['name' => $class]);
    }
}
