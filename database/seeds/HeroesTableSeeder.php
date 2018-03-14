<?php

use Illuminate\Database\Seeder;
use App\Models\Heroes;

class HeroesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $heroes = [               
                ['name'=>'Steven','idClass'=>1,'idSpeciality'=>1,'lifePoints'=>2900,'defensePoints'=>200,'damagePoints'=>340,'attackSpeed'=>1.3,'movementSpeed'=>320]
            ,   ['name'=>'Mona','idClass'=>6,'idSpeciality'=>2,'lifePoints'=>3100,'defensePoints'=>200,'damagePoints'=>180,'attackSpeed'=>1.3,'movementSpeed'=>330]
            ,   ['name'=>'Morgan','idClass'=>2,'idSpeciality'=>3,'lifePoints'=>6000,'defensePoints'=>360,'damagePoints'=>130,'attackSpeed'=>1.1,'movementSpeed'=>300]
            ,   ['name'=>'Rank','idClass'=>1,'idSpeciality'=>4,'lifePoints'=>2500,'defensePoints'=>220,'damagePoints'=>300,'attackSpeed'=>1.2,'movementSpeed'=>330]
            ,   ['name'=>'Braian','idClass'=>4,'idSpeciality'=>5,'lifePoints'=>2400,'defensePoints'=>190,'damagePoints'=>330,'attackSpeed'=>1.8,'movementSpeed'=>320]
            ,   ['name'=>'Lariel','idClass'=>3,'idSpeciality'=>6,'lifePoints'=>3800,'defensePoints'=>250,'damagePoints'=>280,'attackSpeed'=>1.5,'movementSpeed'=>365]
            ,   ['name'=>'Maycon','idClass'=>3,'idSpeciality'=>6,'lifePoints'=>3400,'defensePoints'=>260,'damagePoints'=>290,'attackSpeed'=>1.4,'movementSpeed'=>365]
            ,   ['name'=>'Rock','idClass'=>2,'idSpeciality'=>3,'lifePoints'=>5600,'defensePoints'=>400,'damagePoints'=>150,'attackSpeed'=>1,'movementSpeed'=>300]
            ,   ['name'=>'Rakan','idClass'=>5,'idSpeciality'=>7,'lifePoints'=>3000,'defensePoints'=>250,'damagePoints'=>400,'attackSpeed'=>1.5,'movementSpeed'=>325]
            ,   ['name'=>'Gruntar','idClass'=>3,'idSpeciality'=>8,'lifePoints'=>3700,'defensePoints'=>240,'damagePoints'=>190,'attackSpeed'=>1.4,'movementSpeed'=>345]
            
            ];
        foreach ($heroes as $hero) 
            Heroes::create(
                    [   'name' => $hero['name']
                        ,   'idClass' => $hero['idClass']
                        ,   'idSpeciality' => $hero['idSpeciality']
                        ,   'lifePoints' => $hero['lifePoints']
                        ,   'defensePoints' => $hero['defensePoints']
                        ,   'damagePoints' => $hero['damagePoints']
                        ,   'attackSpeed' => $hero['attackSpeed']
                        ,   'movementSpeed' => $hero['movementSpeed']
                    ]);
    }
}
