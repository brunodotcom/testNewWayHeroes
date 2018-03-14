@extends('site.templates.site')   


@section('content')
        <div class="page-header section-dark" style="background-image: url('{{ asset('img/antoine-barres.jpg') }}')">
            <div class="filter"></div>
                <div class="content-center">
                        <div class="container">
                            <div class="title-brand">
                                    <h1 class="presentation-title">New Way Heroes</h1>
                                    <div class="fog-low">
                                        <img src="{{ asset('img/fog-low.png') }}" alt="">
                                    </div>
                                    <div class="fog-low right">
                                        <img src="{{ asset('img/fog-low.png') }}" alt="">
                                    </div>
                            </div>

                            <h2 class="presentation-subtitle text-center">
                               A story from the mightest heroes of Fruit Basket(Bauru) land...
                            </h2>
                        </div>
                </div>
            <div class="moving-clouds" style="background-image: url('img/clouds.png'); "></div>            
        </div>        
@endsection