@extends('site.panel.heroes.master')

@section('panel-content')
	<h1>{{ $detailpage->name }}</h1>
	<h5>{{ $detailpage->className }}</h5>                
        <h3>Speciality</h3>
        <p>{{ $detailpage->specialityName }} </p>
        <h3>Life Points</h3>
	<p>{{ $detailpage->lifePoints }} </p>
        <h3>Defense Points</h3>
	<p>{{ $detailpage->defensePoints }} </p>
        <h3>Damage Points</h3>
	<p>{{ $detailpage->damagePoints }} </p>
        <h3>Attack Speed</h3>
	<p>{{ $detailpage->attackSpeed }} </p>
        <h3>Movement Speed</h3>
	<p>{{ $detailpage->movementSpeed }} </p>
        <h3>Description</h3>
	<p>{{ $detailpage->description }} </p>
        <h3>Photos</h3>
        </br>
        @foreach($detailpage->photos as $photo)            
        <img style="max-width: 200px;" src="{{ asset('storage/heroes/'.$detailpage->idHero.'/photos/'.$photo->fileName)}}" />&nbsp;&nbsp;
        @endforeach
        
        </br>
        </br>               
        
        
        </br>
        <button onclick="location.href='/heroes'" type="button" class="btn btn-default">Return</button>
	
@endsection