@extends('masterThemeTwo')
@section('title')
	Stroke of Genius
@stop
 @section('content')
	<div class="main-container">
	  		<div class="container">
	  			<h2 class="with-breaker animate-me fadeInUp">
		  			Sign-Up<span>Start building your math skills today!</span>
	  			</h2>
	  			<div class="signuplogincss">
					<!--Sign up form-->
					{{ Form::open(array('url' => '/signup')) }}
						<b>Email Address</b><br />
						{{ Form::text('email') }}<br /><br />
						<b>Password</b><br>
						{{ Form::password('password') }}<br /><br />
						{{ Form::submit('Create Account') }}
					{{ Form::close() }}	
					<br />
					
					@if(Session::get('flash_message'))
					<div class='flash-message'>{{ Session::get('flash_message') }}</div>
					@endif
					<!--End of Signup form-->
				</div>
	  		</div>
	  	</div>
@stop