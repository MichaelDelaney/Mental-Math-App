@extends('masterThemeTwo')

@section('title')
	Page One
	
@stop
 
 @section('content')


	  	<!-- START MAIN CONTAINER -->
	  	<div class="main-container">
	  		<div class="container">
	  			<!-- ABOUT -->
	  			<h2 class="with-breaker animate-me fadeInUp">
		  			Mental Math Lessons <span>Yep, we rock !</span>
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
		  				<h3>Albert Einstein</h3>
		  				<blockquote>Pure mathematics is, in its way, the poetry of logical ideas.</blockquote>
		  			</div>
	  			</div>
	  			<hr>
	  			<!-- TEAM SHORTCODE -->
	  			<div id="team-container" class="row">
	  				<div class="col-md-3 team-single">
	  					<img src="images/team/01.jpg" alt="Profile Image" class="animate-me bounceIn">
	  					<h3 class="center">Teammate 1</h3>
	  					<p>Duis condimentum dignissim porttitor. Nulla libero metus, mattis eget pellentesque nec, iaculis non libero.</p>
			  			<ul class="social-list">
				  			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				  			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				  			<li><a href="#"><i class="fa fa-git"></i></a></li>
			  			</ul>
	  				</div>
	  				<div class="col-md-3 team-single">
	  					<img src="images/team/02.jpg" alt="Profile Image" class="animate-me bounceIn">
	  					<h3 class="center">Teammate 2</h3>
	  					<p>Duis condimentum dignissim porttitor. Nulla libero metus, mattis eget pellentesque nec, iaculis non libero.</p>
			  			<ul class="social-list">
				  			<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
				  			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				  			<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			  			</ul>
	  				</div>
	  				<div class="col-md-3 team-single">
	  					<img src="images/team/03.jpg" alt="Profile Image" class="animate-me bounceIn">
	  					<h3 class="center">Teammate 3</h3>
	  					<p>Duis condimentum dignissim porttitor. Nulla libero metus, mattis eget pellentesque nec, iaculis non libero.</p>
			  			<ul class="social-list">
				  			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				  			<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				  			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			  			</ul>
	  				</div>
	  				<div class="col-md-3 team-single">
	  					<img src="images/team/04.jpg" alt="Profile Image" class="animate-me bounceIn">
	  					<h3 class="center">Teammate 4</h3>
	  					<p>Duis condimentum dignissim porttitor. Nulla libero metus, mattis eget pellentesque nec, iaculis non libero.</p>
	  					<ul class="social-list">
				  			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				  			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				  			<li><a href="#"><i class="fa fa-youtube"></i></a></li>
			  			</ul>
	  				</div>
	  			</div>
	  			<div class="center animate-me fadeInUp">
	  				<a href="#" class="btn btn-default"><i class="fa fa-home"></i> Button Example</i></a>
	  				<a href="#" class="btn btn-default"><i class="fa fa-mobile"></i> Button Example 2</i></a>
	  				<a href="#" class="btn btn-default"><i class="fa fa-pencil"></i> Button Example 3</i></a>
	  			</div>
	  			<hr>
	  		</div>
	  		<div class="container">
	  			<!-- CUSTOMER REVIEWS -->
	  			<h2 class="with-breaker animate-me fadeInUp">
		  			Get In Touch<span>What are you waiting for ?</span>
	  			</h2>
	  		</div>
	  		<!-- CUSTOM CONTAINER -->
	  		<section class="contact-container with-separation-bottom with-separation-top">
		  		<div class="contact-boxes">
		  			<div class="contact-box contact-box-email animate-me zoomIn">
		  				<h2>Email</h2>
		  				<p>Write us a few lines about your ideas, your projects and let's advance together.</p>
		  				<a href="contact.html" class="btn btn-default"><i class="fa fa-envelope"></i> Email Us</a>
		  			</div>
		  			<div class="contact-box contact-box-twitter animate-me zoomIn">
		  				<h2>Twitter</h2>
		  				<p>Follow us to interact, chat and share our ideas on Twitter.</p>
		  				<a href="#" class="btn btn-default"><i class="fa fa-twitter"></i> Follow us</a>
		  			</div>
		  			<div class="contact-box contact-box-facebook animate-me zoomIn">
		  				<h2>Facebook</h2>
		  				<p>Like our page and send us message directly from our brand new Facebook page.</p>
		  				<a href="#" class="btn btn-default"><i class="fa fa-facebook"></i> Like Our Page</a>
		  			</div>
		  			<div class="contact-box contact-box-skype animate-me zoomIn">
		  				<h2>Skype</h2>
		  				<p>Call us or chat with us on Skype whenever you like, do not hesitate.</p>
		  				<a href="#" class="btn btn-default"><i class="fa fa-skype"></i> Call Us</a>
		  			</div>
		  		</div>
	  		</section>
	  	</div>
	  	<!-- END MAIN CONTAINER -->
@stop