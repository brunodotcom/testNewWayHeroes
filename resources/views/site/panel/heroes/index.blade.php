@extends('site.panel.heroes.master')

@section('panel-content')
    {{ Session::get('message') }}

    @foreach($allrows as $hero)
        <p>
            <h2 class="text-left">
                <a href="/hero/{{ $hero->idHero }}">{{ $hero->name }} </a>
            </h2>                
        </p>    
        <button onclick="location.href='/hero/{{ $hero->idHero }}/edit'" type="button" class="btn btn-default">Edit</button>
        <button type="button" class="btn btn-danger">Delete</button>            
    @endforeach

@endsection