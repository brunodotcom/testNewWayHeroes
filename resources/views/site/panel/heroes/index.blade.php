@extends('site.panel.heroes.master')

@section('panel-content')
    {{ Session::get('message') }}

    @foreach($allrows as $hero)
        <p>
            <h2 class="text-left">
                <a href="/heroes/{{ $hero->idHero }}">{{ $hero->name }} </a>
            </h2>                
            <h4>
                {{ $hero->description }}        
            </h4>
        </p>    
        </br>        
        <form action="/heroes/{{ $hero->idHero }}" method="POST">            
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button onclick="location.href='/heroes/{{ $hero->idHero }}/edit'" type="button" class="btn btn-default">Edit</button>
            <input class="btn btn-danger" type="submit" name="delete" value="Delete">            
        </form>
        
    @endforeach

@endsection