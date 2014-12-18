@extends('masterThemeTwo')
@section('title')
	Stroke of Genius
@stop
 @section('content')
		<div class="main-container">
	  		<div class="container">
	  			<h2 class="with-breaker animate-me fadeInUp">
		  		Multilpy any numbers up to 19 x 19
	  			</h2>
	  			<div class="row">
	  				<div class="col-md-8">
						<h4>Instructions:</h4>
						<br /><br />
	  					<p class="text-justify">In this lesson you will learn how to quickly take 2 differente two-digit numbers and multiple them.<br />
						For example:<br />
						<center><b>14 x 17 = </b></center> <br />
						First, you want to take the number in the ones place of the smaller number and add it to the larger number.<br />
						For example:<br />
						<center><b>17 + 4 = 21</b></center> <br />
						<br />
						Next, you want to add a 0 to the end of that number.<br />
						<center><b>210</b></center> <br />
						<br />
						Next, you want to multiple the one's place of the two numbers<br />
						<center><b>7 x 4 = 28</b></center> <br />
						<br />
						Lastly, take the results of the two numbers above and add them together.<br />
						<center><b>210 + 28 = 238</b></center> <br />
						</p>
						<br />
						<br />
						<u><a href="advancedlessons"><font color="#0066CC"><b>Try A Different Lesson</b></font></a></u>
		  			</div>
		  			<div class="col-md-4">
		  				<h4><font color="purple">Try it out for yourself with this quiz:</font></h4>
		  				<iframe src="quizzes/lesson6quiz.php" height="400" frameborder="0"></iframe>
		  			</div>
	  			</div><br /><br /><br />
	  		</div>
	  	</div>
@stop