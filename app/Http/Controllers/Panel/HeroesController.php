<?php

namespace App\Http\Controllers\Panel;

use App\Models\Heroes;
use App\Models\Classes;
use App\Models\Specialities;
use App\Models\HeroesPhotos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class HeroesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $searchKey = \Request::get('searchKey');

        if(!$searchKey){
            $heroes = Heroes::all();
        }
        else{
            $heroes = Heroes::where('name','like','%'.trim($searchKey).'%')->get();            
                            
        }        
        return view('site.panel.heroes.index',['allrows' => $heroes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = Classes::all();
        $specialities = Specialities::all();
        
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
        $hero->name= $request->name;
        $hero->idClass= $request->name;
        $hero->idSpeciality= $request->name;
        $hero->lifePoints= $request->name;
        $hero->defensePoints= $request->name;
        $hero->damagePoints= $request->name;

        $hero->save();

        return redirect('jedi')->with('message', 'Jedi incluído com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Heroes  $heroes
     * @return \Illuminate\Http\Response
     */
    public function show(Heroes $heroes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Heroes  $heroes
     * @return \Illuminate\Http\Response
     */
    public function edit(Heroes $heroes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Heroes  $heroes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Heroes $heroes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Heroes  $heroes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Heroes $heroes)
    {
        //
    }
}
