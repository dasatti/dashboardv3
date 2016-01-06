@extends('layout.app-auth')

@section('content')

<div class="login-container">
	
	<div class="login-header login-caret">
		
		<div class="login-content">
			
			<a href="index.html" class="logo">
				<img src="public/assets/images/logo@2x.png" width="120" alt="" />
			</a>
			
			<p class="description">Dear user, log in to access the admin area!</p>
			<ul class="nav navbar-nav ">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
			<!-- progress bar indicator -->
			<div class="login-progressbar-indicator">
				<h3>43%</h3>
				<span>logging in...</span>
			</div>
		</div>
		
	</div>
	
	<div class="login-progressbar">
		<div></div>
	</div>
	
	<div class="login-form">
		
		<div class="login-content">
			
			<div class="form-login-error">
				<h3>Invalid login</h3>
				<p>Enter <strong>demo</strong>/<strong>demo</strong> as login and password.</p>
			</div>
			
			<!--<form method="post" role="form" id="form_login">-->
			 <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">	
              {!! csrf_field() !!}
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-user"></i>
						</div>
						
						<!--<input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off" />-->
                         <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" autocomplete="off" >
                            
					</div>
					
				</div>
				@if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div>
						
						<!--<input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />-->
                         <input type="password" class="form-control" name="password"  placeholder="Password" autocomplete="off" >
                      
					</div>
				
				</div>
				   @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
				<div class="form-group">
                 <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
					<button type="submit" class="btn btn-primary btn-block btn-login">
						<i class="entypo-login"></i>
						Login In
					</button>
                    
				</div>
				
				<!-- Implemented in v1.1.4 -->
				<!-- <div class="form-group">
					<em>- or -</em>
				</div>
				
				<div class="form-group">
				
					<button type="button" class="btn btn-default btn-lg btn-block btn-icon icon-left facebook-button">
						Login with Facebook
						<i class="entypo-facebook"></i>
					</button>
					
				</div>
				
				
				
				You can also use other social network buttons
				<div class="form-group">
				
					<button type="button" class="btn btn-default btn-lg btn-block btn-icon icon-left twitter-button">
						Login with Twitter
						<i class="entypo-twitter"></i>
					</button>
					
				</div>
				
				<div class="form-group">
				
					<button type="button" class="btn btn-default btn-lg btn-block btn-icon icon-left google-button">
						Login with Google+
						<i class="entypo-gplus"></i>
					</button>
					
				</div> -->
				
			</form>
			
			
			<div class="login-bottom-links">
				
				<!--<a href="extra-forgot-password.html" class="link">Forgot your password?</a>
                  <a class="link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>-->
				
				<br />
				
				<a href="#">ToS</a>  - <a href="#">Privacy Policy</a>
				
			</div>
			
		</div>
		
	</div>
	
</div>
@endsection
