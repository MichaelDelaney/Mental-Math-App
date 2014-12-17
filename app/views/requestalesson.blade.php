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
		  			Request A Lesson <span>Help us grow!</span>
	  			</h2>
	  			<div class="welcome">
	  					<h3>Is there something particular you want to learn?</h3>
	  					<p class="text-justify">We continously strive to meet the demands of our users.
						If there is a trick or tip out there to boost your mental math skills, we want to make sure it is offered here.
						If you know of one that isn't on this site, please leave a request for consideration. It's your contribution to this community that makes it so valuable. 
						</p><br/>
				
						<h3>Request Form</h3>
		  				<p>
							{{ Form::open(array('url' => '/request/create')) }}
								{{ Form::label('subject','Subject') }}<br/>
								{{ Form::text('subject', null, ['size' => '47x1']) }}<br />
								{{ Form::label('author','Name') }}<br />
								{{ Form::text('author', null, ['size' => '47x1']) }}<br />
								{{ Form::label('comment','Comment') }}<br />
								{{ Form::textarea('comment', null, ['size' => '46x7']) }}<br />
								{{ Form::label('email_link','Email Address') }}<br />
								{{ Form::text('email_link', null, ['size' => '47x1']) }}<br /><br />
								{{ Form::submit('Submit Lesson Request'); }}
							{{ Form::close() }}
						</p><br/>
						
						<h4><font color="purple">Requests under consideration:</font></h4><br />

						<p>
						<?php
							$collection = Siterequest::all();

							foreach($collection as $siterequest) {
								echo "<br />";
								echo "<b>Topic Name</b><br />";
								echo $siterequest->subject."<br />";
								echo "<b>Last Modified By:</b><br />";
								echo $siterequest->author."<br />";
								echo "<b>Details:</b><br />";
								echo $siterequest->comment."<br />";
								echo "<b>Modifier's Email Address:</b><br />";
								echo $siterequest->email_link."<br />";
								echo "<form action='/deleterequest'>
										<input type='hidden' name='delete' value='".$siterequest->id."' placeholder='delete'/>
										<button type='submit'>Delete Request</button>
										</form>";
								echo "<img src='images/team/banner.jpg'>";

								
								
							}
						?>
						</p>
						<br />
						<p><a href="/request_edit"><u>Do you want to edit a request on this page?</u></a></p>	
	  			</div>
	  			<br />
				<br />
				<br />
	  		</div>
	  	</div>
	  	<!-- END MAIN CONTAINER -->
@stop