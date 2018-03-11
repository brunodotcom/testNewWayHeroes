@extends('site.templates.site')

@section('content')
    <div class="wrapper">
        <div class="page-header" style="background-image: url('{{ asset('img/antoine-barres.jpg') }}')">
            <div class="filter"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 ml-auto mr-auto">
                            <div class="card card-register">
                                <h3 class="title">Welcome</h3>
								
                                <form class="register-form" role="form" method="POST" action="{{ url('/register') }}">
                                    {{ csrf_field() }}
                                    
                                    <label>Name</label>
                                    <input type="text"  class="form-control" placeholder="Name" id="name" name="name" required>
                                    
                                    <label>Email</label>
                                    <input type="text" class="form-control" placeholder="Email" id="email" name="email" required>

                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                                    
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control" placeholder="Confirm Password" id="password-confirm" name="password-confirm" required>
                                    
                                    <button class="btn btn-danger btn-block btn-round">Register</button>
                                </form>                                
                            </div>
                        </div>
                    </div>
					<div class="footer register-footer text-center">
						<h6>&copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by Creative Tim</h6>
					</div>
                </div>
        </div>
    </div>

@endsection
