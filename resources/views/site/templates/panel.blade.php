@extends('site.templates.site')

@section('content')
    <div class="wrapper">
        <div class="documentation page-header page-header-small" style="background-image: url('{{ asset('img/antoine-barres.jpg') }}');">
                <div class="filter"></div>
                <div class="motto">
                    <h2 class="title-uppercase text-center">@yield('title')</h2>
                </div>
        </div>
        <div class="section">
            <div class="container">                
                <div class="row">                    
                    <div class="col-lg-8 col-md-12">                        
                        @yield('options')
                    </div>
                </div>                                
                @yield('panel-content')
                
            </div>
        </div>
    </div>    
@endsection