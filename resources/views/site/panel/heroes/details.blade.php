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
        @foreach($detailpage->photos as $photo)
            {{$photo->fileName}}            
        @endforeach
        
        </br>
        
        
        
        <form action="/heroes/{{ $detailpage->idHero }}" method="POST">            
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <button onclick="location.href='/heroes/{{ $detailpage->idHero }}/edit'" type="button" class="btn btn-default">Edit</button>
            <input class="btn btn-danger" type="submit" name="delete" value="Delete">            
        </form>
        
        </br>
        <button onclick="location.href='/heroes'" type="button" class="btn btn-default">Return</button>
	
@endsection