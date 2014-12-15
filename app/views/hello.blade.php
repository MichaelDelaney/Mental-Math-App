@extends('masterThemeOne')

@section('title')
	Stroke of Genius
	
@stop
 
 @section('content')

	  		
	  		
	  		<!-- TEXT SLIDER -->
			<div id="ticker" class="animate-me zoomIn">
				<h4 class="with-breaker">Why choose us ?</h4>
				<div id="ticker-text">
					<ul>
						<li>Learn Mental Math</li>
						<li>Secret Math Tips and Tricks</li>
						<li>New Lessons Weekly</li>
						<li>Request Lessons!</li>
					</ul>
				</div>
			</div>  		
	  		
	  		<!-- SCROLL BOTTOM -->
	  		<div id="scroll-bottom" class="animate-me fadeInUpBig">
		  		<a href="#"><i class="fa fa-angle-double-down"></i></a>
	  		</div>
	  		
	  		<!-- SHADOW -->
	  		<div id="shade"></div>

	  		<!-- HEADER SLIDER -->
		  	<div class="flexslider" id="header-slider">
		  		<ul class="slides">
		  			<li><img src="images/backgrounds/bg1.jpg" alt="SLider Image"></li>
		  		</ul>	
		  	</div>
		  	<!-- OR VIDEO -> https://github.com/VodkaBears/Vide -->
		  	<!--<div id="header-video"
			    data-vide-bg="ogv: images/video/video, webm: images/video/video, poster: images/video/poster" data-vide-options="posterType: jpg, loop: true, muted: true, position: 50% 50%">
			</div>-->
	  		
	  	</header>
	  	<!-- END HEADER -->
	  	
	  	<!-- START MAIN CONTAINER -->
	  	<div class="main-container">
	  		<div class="container">
	  			<!-- SKILLS -->
	  			<h2 class="with-breaker animate-me fadeInUp">
		  			P4: Stroke of Genius<span>Description: Stroke of Genius is a simple web application to help students learn mental math.</span>
					<br /><span>What components make up Stroke of Genius?</span>
	  			</h2>
	  			<table id="skills-container" class="skills">
		  			<tr class="skills-row">
			  			<td class="skill animate-me zoomIn">
				  			<h4><i class="fa fa-star-o"></i>PHP/Laravel</h4>
				  			<p>Stroke of genius uses Laravel as it's framework. The quizzes are generated with a simple php script.</p>
			  			</td>
			  			<td class="skill animate-me zoomIn">
				  			<h4><i class="fa fa-star-o"></i>MySQL</h4>
				  			<p>The request that users post on the site and saved in a table inside of an sql database.</p>
			  			</td>
			  			<td class="skill animate-me zoomIn">
				  			<h4><i class="fa fa-star-o"></i>CRUD Interactions</h4>
				  			<p>CRUD operations are used on the Request a Lesson page. A giver can leave a feedback comment, edit it, and delete it.</p>
			  			</td>
		  			</tr>
		  			
	  			</table>
	  			<br />
	  			
	  		</div>
	  		
	  		
	  		<!-- CUSTOM CONTAINER -->
	  		<section class="custom-section-container with-separation-bottom with-separation-top">
		  		<div class="container">
			  		<div class="custom-section-text">
				  		<h2 class="animate-me fadeInLeft">Become a student at HES</h2>
				  		<p class="animate-me fadeInLeft">Interested in taking a math course at Harvard's Extension School. HES offers a number of courses from quantitative reasoning to combinatorics.</p>
				  		
			  		</div>
			  		<div class="custom-section-buttons">
				  		<a href="http://www.extension.harvard.edu/courses/subject/mathematics" class="btn btn-default animate-me fadeInRight" target="_blank"><i class="fa fa-book"></i> Browse extension school math courses</a>
				  	</div>
		  		</div>
	  		</section>
	  		<div class="container">
	  			<!-- ABOUT -->
	  			<h2 class="with-breaker animate-me fadeInUp">
		  			Learn to appreciate math like others 
				</h2>
	  			<!-- TEAM SHORTCODE -->
	  			<div id="team-container" class="row">
	  				<div class="col-md-3 team-single">
	  					<img src="images/team/franklin.jpg" alt="Profile Image" class="animate-me bounceIn">
	  					<h3 class="center">Benjamin Franklin</h3>
	  					<p>"No employment can be managed without arithmetic, no mechanical invention without geometry."</p>
			  		</div>
	  				<div class="col-md-3 team-single">
	  					<img src="images/team/einstein.jpg" alt="Profile Image" class="animate-me bounceIn">
	  					<h3 class="center">Albert Einstein</h3>
	  					<p>"Pure mathematics is, in its way, the poetry of logical ideas."</p>
			  		</div>
	  				<div class="col-md-3 team-single">
	  					<img src="images/team/sylvester.jpg" alt="Profile Image" class="animate-me bounceIn">
	  					<h3 class="center">James Sylvester</h3>
	  					<p>"Mathematics is the music of reason."</p>
			  		</div>
	  				<div class="col-md-3 team-single">
	  					<img src="images/team/cantor.jpg" alt="Profile Image" class="animate-me bounceIn">
	  					<h3 class="center">Georg Cantor</h3>
	  					<p>"In mathematics the art of proposing a question must be held of higher value than solving it."</p>
	  				</div>
	  			</div>
	  		<br />
			<br />
			<br />

	  		</div>
			
			<!--This is the end of the content section-->
		
	@stop
  
  