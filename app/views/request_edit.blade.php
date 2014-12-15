@extends('masterThemeTwo')

@section('title')
	Stroke of Genius
	
@stop
 
 @section('content')


	  	<!-- START MAIN CONTAINER -->
	  	<div class="main-container">
	  		<div class="container">
	  			<!-- ABOUT -->
	  			<h2 class="with-breaker animate-me fadeInUp">
		  			Ah, so you want to edit a request? <span>Add on to others thoughts!</span>
	  			</h2>
	  			<div class="row">
	  				<div class="col-md-8">
	  					<h3>What request did you want to edit?</h3>

						<br />
						{{ Form::open(array('url' => '/search2', 'method' => 'GET')) }}
						{{ Form::label('query','Paragraphs ') }}
						{{ Form::text('query'); }}
						{{ Form::submit('Submit'); }}
						{{ Form::close() }}
						<br />
						<p>
					
						</p>
							
						
		  			</div>
		  			<div class="col-md-4">
		  				<h3>Thank You</h3>
		  				<p>We appeciate you taking the time to..
						</p>
		  			</div>
	  			</div>
	  			<br />
				<br />
				<br />
	  		</div>
	  	
	  		
	  	</div>
	  	<!-- END MAIN CONTAINER -->
@stop