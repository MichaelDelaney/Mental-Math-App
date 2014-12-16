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
		  			Login <br /><p style="font-size:16px">to study a lesson or make a request</p>
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
				<br />
				@if(Session::get('flash_message'))
        <div class='flash-message'>{{ Session::get('flash_message') }}</div>
    @endif
				</p>
	  		</div>
	  	</div>
	  	<!-- END MAIN CONTAINER -->
@stop