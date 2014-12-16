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
	  			<div class="row">
	  				<div class="col-md-8">
	  					<h3>Is there something particular you want to learn?</h3>
	  					<p class="text-justify"><span class="dropcap">T</span>ell us about it.</p><br/>
							{{ Form::open(array('url' => '/request/create')) }}
								{{ Form::label('subject','Subject') }}
								{{ Form::text('subject'); }}<br />
								{{ Form::label('author','Name') }}
								{{ Form::text('author'); }}<br />
								{{ Form::label('comment','Comment') }}
								{{ Form::text('comment'); }}<br />
								{{ Form::label('email_link','Email Address') }}
								{{ Form::text('email_link'); }}<br />
								{{ Form::submit('Add'); }}
							{{ Form::close() }}
						<br />
						<h4><font color="purple">Requests under consideration:</font></h4><br />
							
						<p>
						<?php
							$collection = Siterequest::all();

							foreach($collection as $siterequest) {
								echo "<br />";
								echo "<b>Request Topic Name</b><br />";
								echo $siterequest->subject."<br />";
								echo "<b>Requester's Name</b><br />";
								echo $siterequest->author."<br />";
								echo "<b>Details</b><br />";
								echo $siterequest->comment."<br />";
								echo "<b>Contact Address:</b><br />";
								echo $siterequest->email_link."<br />";
								echo "<form action='/deleterequest'>
    <input type='hidden' name='delete' value='".$siterequest->id."' placeholder='delete'/>
    <button type='submit'>Delete Request</button>
</form>";
							}
						?>
						
						</p>
						<br />
						<p><a href="request_edit"><u>Do you want to edit a request on this page?</u></a></p>
							
						
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