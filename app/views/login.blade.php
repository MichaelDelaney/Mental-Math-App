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
		  			Login<span>Time to practice math</span>
				</h2>
	  			<p class="center">
				<!--Login form-->
					{{ Form::open(array('url' => '/login')) }}
						Email<br>
						{{ Form::text('email') }}<br><br>
						Password:<br>
						{{ Form::password('password') }}<br><br>
						{{ Form::submit('Submit') }}
					{{ Form::close() }}
				<!--End of Login form-->
				</p>
	  		</div>
	  	</div>
	  	<!-- END MAIN CONTAINER -->
@stop