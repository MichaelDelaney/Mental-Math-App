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
		  			Quickly multiply any number by nine
	  			</h2>
	  			<div class="row">
	  				<div class="col-md-8">
						
						<h4>Instructions:</h4>
						<br /><br />
	  					<p class="text-justify">In this lesson you will learn how to quickly multiple any number by nine.<br />
						For example:<br />
						<center><b>42 x 9 = 378</b></center> <br />
						First, you want to take the number and multiple it by 10 (just add a 0 to the end of the number).<br />
						For example:<br />
						<center><b>42  x  10 = 420</b></center> <br />
						<br />
						Next, you want to take whatever number you got in the step above and substract the original number form it.<br />
						<center><b>420 - 42 = 378</b></center> <br />
						</p>
						<br />
						<br />
						<u><a href="advancedlessons"><font color="#0066CC"><b>Try A Different Lesson</b></font></a></u>
					
		  			</div>
		  			<div class="col-md-4">
		  				<h4><font color="purple">Try it out for yourself with this quiz:</font></h4>
		  				<iframe src="quizzes/lesson4quiz.php" height="400" frameborder="0"></iframe>
		
		  			</div>
	  			</div>
	  			<br />
				<br />
				<br />
	  		</div>
	  	
	  		
	  	</div>
	  	<!-- END MAIN CONTAINER -->
@stop