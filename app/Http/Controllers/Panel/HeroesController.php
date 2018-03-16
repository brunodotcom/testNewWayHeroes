<?php

namespace App\Http\Controllers\Panel;

use App\Models\Heroes;
use App\Models\Classes;
use App\Models\Specialities;
use App\Models\HeroesPhotos;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class HeroesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heroes = Heroes::with('heroPhoto')->orderBy('name')->simplePaginate(5);
        return view('site.panel.heroes.index',['allrows' => $heroes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = Classes::orderBy('name')->get();
        $specialities = Specialities::orderBy('name')->get();
        
        return view('site.panel.heroes.create', ['classes' => $classes,'specialities'=>$specialities]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'name' => 'required'
                ,'idClass' => 'required'
                ,'idSpeciality' => 'required'
                ,'lifePoints' => 'required'
                ,'defensePoints' => 'required'
                ,'damagePoints' => 'required'
                ,'attackSpeed' => 'required'
                ,'movementSpeed' => 'required'
                ]);

        $hero = new Heroes;
        $hero->name = $request->name;
        $hero->idClass = $request->idClass;
        $hero->idSpeciality = $request->idSpeciality;
        $hero->lifePoints = $request->lifePoints;
        $hero->defensePoints = $request->defensePoints;
        $hero->damagePoints = $request->damagePoints;
        $hero->attackSpeed = $request->attackSpeed;
        $hero->movementSpeed = $request->movementSpeed;
        $hero->description = $request->description;             
        
        $hero->idUserInsert = Auth::id();
        
        if($hero->save()){
        
            if($request->hasFile('photos'))
            {
                $files = $request->file('photos');

                foreach ($files as $file) {
                    $file->store('public/heroes/' . $hero->idHero . '/photos');
                    
                    $heroPhoto = new HeroesPhotos;
                    $heroPhoto->fileName = $file->hashName();
                    $heroPhoto->idHero = $hero->idHero;
                    $heroPhoto->idUserInsert = Auth::id();
                    $heroPhoto->save();
                }
            }
        }

        return redirect('heroes')->with('message', 'Hero added to party!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Heroes  $heroes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $hero = Heroes::find($id); 
        
        if(!$hero){
        	abort(404);
        }
        
        $class = Classes::find($hero->idClass);
        $speciality = Specialities::find($hero->idSpeciality);
        $photos = HeroesPhotos::where('idHero',$hero->idHero)->get();
        
        $hero->className = $class->name;
        $hero->specialityName = $speciality->name;
        $hero->photos = $photos;
        
        
        return view('site.panel.heroes.details')->with('detailpage', $hero);
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Heroes  $heroes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $hero = Heroes::find($id);
        if(!$hero){
            abort(404);
        }
        
        $classes = Classes::orderBy('name')->get();
        $specialities = Specialities::orderBy('name')->get();        
        
        return view('site.panel.heroes.edit', [
            'classes' => $classes
                ,'specialities'=>$specialities                
            ])->with('hero', $hero);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Heroes  $heroes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
                'name' => 'required'
                ,'idClass' => 'required'
                ,'idSpeciality' => 'required'
                ,'lifePoints' => 'required'
                ,'defensePoints' => 'required'
                ,'damagePoints' => 'required'
                ,'attackSpeed' => 'required'
                ,'movementSpeed' => 'required'
                ]);

        $hero = Heroes::find($id);
        $hero->name = $request->name;
        $hero->idClass = $request->idClass;
        $hero->idSpeciality = $request->idSpeciality;
        $hero->lifePoints = $request->lifePoints;
        $hero->defensePoints = $request->defensePoints;
        $hero->damagePoints = $request->damagePoints;
        $hero->attackSpeed = $request->attackSpeed;
        $hero->movementSpeed = $request->movementSpeed;
        $hero->description = $request->description;                     
        
        $hero->idUserUpdate = Auth::id();
        
        if($hero->save()){
        
            if($request->hasFile('photos'))
            {
                $files = $request->file('photos');

                foreach ($files as $file) {
                    $file->store('public/heroes/' . $hero->idHero . '/photos');
                    
                    $heroPhoto = new HeroesPhotos;
                    $heroPhoto->fileName = $file->hashName();
                    $heroPhoto->idHero = $hero->idHero;
                    $heroPhoto->idUserInsert = Auth::id();
                    $heroPhoto->save();
                }
            }
        }
        if(count($request->heroPhotos) > 0){
            foreach ($request->heroPhotos as $photoKey => $photo){
                if($heroPhoto = HeroesPhotos::find($photoKey)){
                    Storage::delete('public/heroes/'.$hero->idHero.'/photos/'.$heroPhoto->fileName);
                    $heroPhoto->delete();            
                }
            }
        }
        
        return redirect('heroes')->with('message', 'Hero skils updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Heroes  $heroes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hero = Heroes::find($id);
        $heroPhotos = HeroesPhotos::where('idHero',$hero->idHero)->get();
        foreach ($heroPhotos as $heroPhoto){
            Storage::delete('public/heroes/'.$hero->idHero.'/photos/'.$heroPhoto->fileName);
            $heroPhoto->delete();                        
        }
        
        $hero->delete();
        return redirect('heroes')->with('message', 'Hero '.$hero->name.' dismissed!');
    }
    
    public function api($id){

        if($id){
            $heroes = Heroes::find($id);
        }
        else{
            $heroes = Heroes::all();  
        }
        
        return response()->json($heroes, 200);
    }
}
