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
	  				<div class="welcome">
	  					<h3>What request did you want to edit?</h3>

						<br />
<form action="/updating">
Select the topic request you want to edit:<br />
<select name="edit">
					<?php
							$collection = Siterequest::all();
							foreach($collection as $siterequest) {
								echo "<option value='".$siterequest->id."'>".$siterequest->subject."</option>";
							}
					?>
</select>
<br /><br />
What is you name? *You will be listed as the last modifier.<br>
<input type="text"  size="47" name="author" placeholder="Your Name"/><br /><br />
Request Details<br>
<textarea  rows="5" cols="45" name="author" placeholder="The comment you insert here will replace the current comment of the request."></textarea><br /><br />
<button type='submit'>Edit Request</button>
</form>
						<br />
		  			</div>
	  			</div>
	  			<br />
				<br />
				<br />
	  		</div>
	  	
	  		
	  	</div>
	  	<!-- END MAIN CONTAINER -->
@stop