@extends('site.templates.site')


@section('content')
    <div class="wrapper">
        <div class="page-header" style="background-image: url('{{ asset('img/antoine-barres.jpg') }}')">
            <div class="filter"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 ml-auto mr-auto">
                            <div class="card card-register">
                                <h3 class="title">Welcome back!</h3>
								
                                <form class="register-form" role="form" method="POST" action="{{ url('/login') }}">
                                    {{ csrf_field() }}
                                    
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
                                    
                                    <button class="btn btn-danger btn-block btn-round">Login</button>
                                </form>                                
                            </div>
                        </div>
                    </div>                    
                </div>
        </div>
    </div>

@endsection
