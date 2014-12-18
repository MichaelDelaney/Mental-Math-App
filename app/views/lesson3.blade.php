@extends('masterThemeTwo')
@section('title')
	Stroke of Genius
@stop
 @section('content')
		<div class="main-container">
	  		<div class="container">
	  			<h2 class="with-breaker animate-me fadeInUp">
		  			Quickly find the square of any numbers in the 50's
	  			</h2>
	  			<div class="row">
	  				<div class="col-md-8">
						<h4>Instructions:</h4>
						<br /><br />
	  					<p class="text-justify">In this lesson you will learn how to quickly find the square of any number that is in the fifties.<br />
						For example:<br />
						<center><b>52^2 = 2704</b></center> <br />
						First, you want to take whatever number is in the ones digits and add it to 25.<br />
						For example:<br />
						<center><b>25  +  2 = 27</b></center> <br />
						<br />
						Next, you want to take whatever number is in the ones digit and square it (if that number is less than 10, put a zero in front of it).<br />
						For example:<br />
						<center><b>2^2 = 04</b></center> <br />
						<br />
						Now you will combine the two by putting the second number you got behind the first number you got.<br />
						For example:<br />
						<center><b>27 <-- 04 = 2704</b></center> <br />
						</p><br /><br />
						<u><a href="beginnerlessons"><font color="#0066CC"><b>Try A Different Lesson</b></font></a></u>
		  			</div>
		  			<div class="col-md-4">
		  				<h4><font color="purple">Try it out for yourself with this quiz:</font></h4>
		  				<iframe src="quizzes/lesson3quiz.php" height="400" frameborder="0"></iframe>
		  			</div>
	  			</div><br /><br /><br />
	  		</div>
	  	</div>
@stop