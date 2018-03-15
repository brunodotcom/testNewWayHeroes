@extends('site.panel.heroes.master')



@section('panel-content')
    
    @if (Session::get('message'))
        <div class="alert alert-warning alert-with-icon" data-notify="container">
            <div class="container">
                <div class="alert-wrapper">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="nc-icon nc-simple-remove"></i>
                    </button>
                    <div class="message"><i class="nc-icon nc-bell-55"></i> {{ Session::get('message') }}</div>
                </div>
            </div>
        </div>
    @endif
    
    <btn onclick="location.href='/heroes/create'" class="btn btn-outline-default btn-round"><i class="fa fa-group"></i> New Hero</btn>

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
    
    </br>
    
    @if($allrows instanceof \Illuminate\Pagination\Paginator)            
        <ul class="pagination">
            @if ($allrows->onFirstPage())
                <li class="page-item" >
                    <a class="page-link" onclick="javascript:void(0)" tabindex="-1" disabled>Previous</a>
                </li>                            
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $allrows->previousPageUrl() }}" tabindex="-1">Previous</a>
                </li>                            
            @endif            
           
            @if ($allrows->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $allrows->nextPageUrl() }}">Next</a>
                </li>
            @else
                <li class="page-item" >
                    <a class="page-link" onclick="javascript:void(0)" disabled>Next</a>
                </li>
            @endif
            
        </ul>            
    @endif

@endsection
