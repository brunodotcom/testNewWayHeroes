@extends('site.templates.home')   


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

                            <h2 class="presentation-subtitle text-center">Make your mark with a Free Bootstrap 4 UI Kit! </h2>
                        </div>
                </div>
            <div class="moving-clouds" style="background-image: url('img/clouds.png'); "></div>
            <h6 class="category category-absolute">Designed and coded by
                    <a href="https://www.creative-tim.com" target="_blank">
                            <img src="{{ asset('img/creative-tim-white-slim2.png') }}" class="creative-tim-logo">
                    </a>
            </h6>
        </div>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <nav class="footer-nav">
                        <ul>
                            <li><a href="http://www.creative-tim.com">Creative Tim</a></li>
                            <li><a href="http://blog.creative-tim.com">Blog</a></li>
                            <li><a href="http://www.creative-tim.com/license">Licenses</a></li>
                        </ul>
                    </nav>
                    <div class="credits ml-auto">
                        <span class="copyright">
                            © <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
                        </span>
                    </div>
                </div>
            </div>
        </footer>
@endsection