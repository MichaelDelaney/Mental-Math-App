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
		  			Beginner Math Lessons <span>Get ready to learn!</span>
	  			</h2>
	  			<div class="row">
	  				<div class="col-md-8">
	  					<h3>What We Provide</h3>
	  					<p class="text-justify"><span class="dropcap">H</span>aving a few mental math tricks up your sleeves will serve you well in a number of practical situations: drunk gambling, counting piles of money, the Mental Math Championships.  The list goes on for miles.  But practical purposes aside, mental math is fun, satisfying and it makes you feel and appear smarter than you probably are.  All wonderful things.  What follows is a list of mental math deceits, beginning on the novice end of the scale and culminating with tricks perhaps better labeled as high-flying acrobatics.</p><br/>
							{{ Form::open(array('url' => '/request/create')) }}
								{{ Form::label('subject','Subject') }}
								{{ Form::text('subject'); }}
								{{ Form::label('icon','Icon Image URL') }}
								{{ Form::text('icon'); }}
								{{ Form::label('email_link','Email Link URL') }}
								{{ Form::text('email_link'); }}
								{{ Form::submit('Add'); }}
							{{ Form::close() }}
						
		  			</div>
		  			<div class="col-md-4">
		  				<h3>Lessons:</h3>
		  				<ul>
							<li><u><a href="lesson1">Finding the square of a number that ends in 5</a></u></li>
							<li><a href="#">Lesson 1</a></li>
							<li><a href="#">Lesson 1</a></li>
							<li><a href="#">Lesson 1</a></li>
						</ul>
		  			</div>
	  			</div>
	  			<br />
				<br />
				<br />
	  		</div>
	  	
	  		
	  	</div>
	  	<!-- END MAIN CONTAINER -->
@stop