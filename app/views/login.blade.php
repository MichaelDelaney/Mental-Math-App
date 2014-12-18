@extends('masterThemeTwo')
@section('title')
	Stroke of Genius
@stop
 @section('content')
	<div class="main-container">
	  		<div class="container">
	  			<h2 class="with-breaker animate-me fadeInUp">
		  			Login <br /><span>To study a lesson or make a request</span>
				</h2>
	  			<div class="signuplogincss">
				<!--Login form-->
					{{ Form::open(array('url' => '/login')) }}
						<b>Email Address</b><br>
						{{ Form::text('email') }}<br><br>
						<b>Password</b><br>
						{{ Form::password('password') }}<br><br>
						{{ Form::submit('Login') }}
					{{ Form::close() }}
				<!--End of Login form-->
				<br />
				@if(Session::get('flash_message'))
				<div class='flash-message'>{{ Session::get('flash_message') }}</div>
				@endif
				</div>
	  		</div>
	  	</div>
@stop