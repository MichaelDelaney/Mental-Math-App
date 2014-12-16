@extends('masterThemeTwo')

@section('title')
	Stroke of Genius
	
@stop
 
 @section('content')


	  	
	  	<!-- START MAIN CONTAINER -->
	  	<div class="main-container">
	  		<div class="container">
	  			<!-- SKILLS -->
	  			<h2 class="with-breaker animate-me fadeInUp">
		  			Sign-Up<span>Start building your math skills today!</span>
	  			</h2>
	  			<p class="center">
				<!--Sign up form-->
				{{ Form::open(array('url' => '/signup')) }}
					Email<br>
					{{ Form::text('email') }}<br><br>
					Password:<br>
					{{ Form::password('password') }}<br><br>
					{{ Form::submit('Submit') }}
				{{ Form::close() }}
				
				<!--End of Signup form-->
				</p>
	  		</div>
	  	</div>
	  	<!-- END MAIN CONTAINER -->
@stop