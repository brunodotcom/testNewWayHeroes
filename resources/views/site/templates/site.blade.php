<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.ico') }}">    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>New Way Heroes</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/paper-kit.css?v=2.1.0') }}" rel="stylesheet"/>

	<!--  CSS for Demo Purpose, don't include it in your project     -->
	<link href="{{ asset('css/demo.css') }}" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />

</head>

<body>
    <nav class="navbar navbar-expand-md fixed-top navbar-transparent" color-on-scroll="500">
        <div class="container">
            <div class="navbar-translate">
                <button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                </button>
                <a class="navbar-brand" href="home">New Way Heroes</a>
            </div>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto">                    
                    <li class="nav-item">
                        <a href="register" target="_blank" class="nav-link"><i class="nc-icon nc-single-02"></i> Register</a>
                    </li>
                    <li class="nav-item">
                        <a href="login" target="_blank" class="btn btn-danger btn-round"><i class="nc-icon nc-key-25"></i> Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        @yield('content')        
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
                       © <script>document.write(new Date().getFullYear())</script>, project for New Way developed by Bruno Rocha(@brunodotcom), template made with <i class="fa fa-heart heart"></i> by Creative Tim
                   </span>
               </div>
           </div>
       </div>
   </footer>
</body>

<!-- Core JS Files -->
<script src="{{ asset('js/jquery-3.2.1.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jquery-ui-1.12.1.custom.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/popper.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>

<!-- Switches -->
<script src="{{ asset('js/bootstrap-switch.min.js') }}"></script>

<!--  Plugins for Slider -->
<script src="{{ asset('js/nouislider.js') }}"></script>

<!--  Plugins for DateTimePicker -->
<script src="{{ asset('js/moment.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>

<!--  Paper Kit Initialization and functons -->
<script src="{{ asset('js/paper-kit.js?v=2.1.0') }}"></script>

</html>
