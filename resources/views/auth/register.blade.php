@extends('site.templates.site')

@section('content')
    <div class="wrapper">
        <div class="page-header" style="background-image: url('{{ asset('img/antoine-barres.jpg') }}')">
            <div class="filter"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 ml-auto mr-auto">
                            <div class="card card-register">
                                <h3 class="title">Sign up to our quest!</h3>
								
                                <form class="register-form" role="form" method="POST" action="{{ url('/register') }}">
                                    {{ csrf_field() }}
                                    
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text"  class="form-control" placeholder="Name" id="name" name="name" value="{{ old('name') }}" required>
                                        @if ($errors->has('name'))
                                            <div class="form-control-feedback">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" placeholder="Email" id="email" name="email" value="{{ old('email') }}" required>
                                        @if ($errors->has('email'))
                                            <div class="form-control-feedback">{{ $errors->first('email') }}</div>                                            
                                        @endif
                                    </div>

                                    
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                                        @if ($errors->has('password'))
                                            <div class="form-control-feedback">{{ $errors->first('password') }}</div>                                            
                                        @endif
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" class="form-control" placeholder="Confirm Password" id="password_confirmation" name="password_confirmation" required>                                        
                                    </div>
                                    
                                    <button class="btn btn-danger btn-block btn-round">Register</button>
                                </form>                                
                            </div>
                        </div>
                    </div>
			
                </div>
        </div>
    </div>

@endsection
