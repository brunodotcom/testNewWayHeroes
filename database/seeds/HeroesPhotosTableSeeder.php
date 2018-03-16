<?php

use Illuminate\Database\Seeder;
use App\Models\HeroesPhotos;

class HeroesPhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $heroesPhotos = [               
                ['idHero' => 5,'fileName'=>'635ddf9014fa882984e2cd27304a5344.gif']  
                ,	['idHero' => 5,'fileName'=>'e776edb32e139d4f6f70e36b12bb51b9.gif']
                ,	['idHero' => 5,'fileName'=>'d1d2588ed0f8973742e97ff8d6a2e606.gif']
                ,	['idHero' => 5,'fileName'=>'94067631fdaa86da710f9daaee3d0bd2.gif']
                ,	['idHero' => 5,'fileName'=>'11eb32b57f0f70c1e9b2cee6ef68d9e4.gif']
                ,	['idHero' => 10,'fileName'=>'21a9c6b420ee1391330de08a4aa8c3b8.gif']
                ,	['idHero' => 10,'fileName'=>'8d507ba44ba4baea837825cb51936502.gif']
                ,	['idHero' => 10,'fileName'=>'16cb71196bfcbbf0a5ca289b49adcdf5.gif']
                ,	['idHero' => 10,'fileName'=>'277558b5ab3ca563375273aa296bd297.gif']
                ,	['idHero' => 10,'fileName'=>'64da41c7fee268f1437e0d72b9c1b835.gif']
                ,	['idHero' => 6,'fileName'=>'eef3f3c4d132f0efcf0e0808d2242cef.gif']
                ,	['idHero' => 6,'fileName'=>'84dc76416880250c47fb0647239b156b.gif']
                ,	['idHero' => 6,'fileName'=>'44e378e9d8a1f58b3a46ac93620d4271.gif']
                ,	['idHero' => 6,'fileName'=>'1e91a53f07441ace85b7ee125753b70a.gif']
                ,	['idHero' => 6,'fileName'=>'286e429ca5d16da251b7e04221a74e78.gif']
                ,	['idHero' => 7,'fileName'=>'292bd96e2012a11fa9805067fde6d659.gif']
                ,	['idHero' => 7,'fileName'=>'8caac02aa7b6022c688602d7f1e392d2.gif']
                ,	['idHero' => 7,'fileName'=>'ee39111c236a698bbfd7a1984e25b955.gif']
                ,	['idHero' => 7,'fileName'=>'01ba0ff31d074bac7a99994991f8f213.gif']
                ,	['idHero' => 7,'fileName'=>'8339f3517edc4f4fd8402b3ece80a214.gif']
                ,	['idHero' => 2,'fileName'=>'0d41aa356feda4289a6bc5a8d2e7bf80.gif']
                ,	['idHero' => 2,'fileName'=>'696289af4e8279eebd6e32189f90ca23.gif']
                ,	['idHero' => 2,'fileName'=>'694d7644229e20b8302519d61da2c06e.gif']
                ,	['idHero' => 2,'fileName'=>'7b4626829d6891f7c712408a71b88fe0.gif']
                ,	['idHero' => 2,'fileName'=>'f545dd2f15c9653b4c0d969798b16087.gif']
                ,	['idHero' => 3,'fileName'=>'4e94201e2e2a46a9e3a193dcd3a472ef.gif']
                ,	['idHero' => 3,'fileName'=>'7d849e23b082e6bf989bf1cc7c62624b.gif']
                ,	['idHero' => 3,'fileName'=>'0f8911226b50d393cfe07b08417c4006.gif']
                ,	['idHero' => 3,'fileName'=>'70ff89dd854d6d6548b7dca57c6e27f9.gif']
                ,	['idHero' => 3,'fileName'=>'7565f31b853d1c469bb823e2b40d220e.gif']
            ];
        foreach ($heroesPhotos as $heroPhoto) 
            HeroesPhotos::create(
                    [   
                        'idHero' => $heroPhoto['idHero']
                        ,   'fileName' => $heroPhoto['fileName']                        
                    ]);
    }
}
