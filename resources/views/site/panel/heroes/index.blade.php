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
                <a href="/heroes/{{ $hero->idHero }}" id="heroName{{ $hero->idHero }}">{{ $hero->name }} </a>
                @if($hero->heroPhoto)            
                    <img src="{{ asset('storage/heroes/'.$hero->idHero.'/photos/'.$hero->heroPhoto->fileName)}}"  id="heroPhoto{{ $hero->idHero }}" style="max-width: 100px;"/>&nbsp;&nbsp; 
                @endif
            </h2>           
            
        
            <h4>
                {{ $hero->description }}        
            </h4>
        </p>    
        </br>        
        <form action="/heroes/{{ $hero->idHero }}" method="POST" id="heroForm{{ $hero->idHero }}">            
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button onclick="location.href='/heroes/{{ $hero->idHero }}/edit'" type="button" class="btn btn-default">Edit</button>
            <!--input class="btn btn-danger" type="submit" name="delete" value="Delete"-->            
            <button type="button" name="dismissModal" class="btn btn-danger" data-id="{{ $hero->idHero }}" data-toggle="modal" data-target="#dismissModal">
                Dismiss
            </button>
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

@push('scripts')
    <script type="text/javascript">
        $(document).on("click", "button[name=dismissModal]", function () {             
            var heroId = $(this).data('id');            
            var heroName = $('#heroName'+heroId).text();
            var heroPhoto = $('#heroPhoto'+heroId).prop('src');
            
            prepareDismissModal(heroId,heroName,heroPhoto);            
       });
       
       $(document).on("click", "#dismissButton", function () {             
            dismissHero($(this).data('id'));
       });       
       
    </script>
@endpush

