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
		  			What do we do <span>Built for any kind of activity !</span>
	  			</h2>
	  			<table id="skills-container" class="skills">
		  			<tr class="skills-row">
			  			<td class="skill animate-me zoomIn">
				  			<h4><i class="fa fa-star-o"></i>Premium Website</h4>
				  			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque volutpat justo nisl. 
				  			Phasellus ac nibh ut dui fringilla aliquam</p>
			  			</td>
			  			<td class="skill animate-me zoomIn">
				  			<h4><i class="fa fa-envelope-o"></i>E-mailing</h4>
				  			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque volutpat justo nisl. 
				  			Phasellus ac nibh ut dui fringilla aliquam</p>
			  			</td>
			  			<td class="skill animate-me zoomIn">
				  			<h4><i class="fa fa-line-chart"></i>E-commerce</h4>
				  			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque volutpat justo nisl. 
				  			Phasellus ac nibh ut dui fringilla aliquam</p>
			  			</td>
		  			</tr>
		  			<tr class="skills-row animate-me zoomIn">
			  			<td class="skill">
				  			<h4><i class="fa fa-thumbs-up"></i>Expertise</h4>
				  			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque volutpat justo nisl. 
				  			Phasellus ac nibh ut dui fringilla aliquam</p>
			  			</td>
			  			<td class="skill animate-me zoomIn">
				  			<h4><i class="fa fa-mobile"></i>Applications</h4>
				  			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque volutpat justo nisl.</p>
			  			</td>
			  			<td class="skill animate-me zoomIn">
				  			<h4><i class="fa fa-cubes"></i>3D Printing</h4>
				  			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque volutpat justo nisl. 
				  			Phasellus ac nibh ut dui fringilla aliquam</p>
			  			</td>
		  			</tr>
	  			</table>
	  			<div class="skill-button center animate-me fadeInUp">
	  				<a href="skills.html" class="btn btn-default"><i class="fa fa-trophy"></i> Check Out our skills</a>
	  			</div>
	  			
	  			<!--PORTFOLIO -->
	  			<h2 class="with-breaker animate-me fadeInUp">
		  			Our Latest Work <span>Yep, and we're proud !</span>
	  			</h2>
	  		</div>
	  		<div id="portfolio-container" class="with-separation-bottom with-separation-top">
	  			<!--PORTFOLIO ITEM -->
	  			<figure class="portfolio-item effect-sadie">
			        <img src="images/portfolio/01.jpg" alt="Image portfolio"/>
			        <figcaption>
			            <h4>Project Name</h4>
			            <p>Short description</p>
			            <a href="portfolio-single.html">View more</a>
			        </figcaption>         
			    </figure>
			    <!--PORTFOLIO ITEM -->
	  			<figure class="portfolio-item effect-sadie">
			        <img src="images/portfolio/02.jpg" alt="Image portfolio"/>
			        <figcaption>
			            <h4>Project Name</h4>
			            <p>Short description</p>
			            <a href="portfolio-single.html">View more</a>
			        </figcaption>         
			    </figure>
			    <!--PORTFOLIO ITEM -->
	  			<figure class="portfolio-item effect-sadie">
			        <img src="images/portfolio/03.jpg" alt="Image portfolio"/>
			        <figcaption>
			            <h4>Project Name</h4>
			            <p>Short description</p>
			            <a href="portfolio-single.html">View more</a>
			        </figcaption>         
			    </figure>
			    <!--PORTFOLIO ITEM -->
	  			<figure class="portfolio-item effect-sadie">
			        <img src="images/portfolio/04.jpg" alt="Image portfolio"/>
			        <figcaption>
			            <h4>Project Name</h4>
			            <p>Short description</p>
			            <a href="portfolio-single.html">View more</a>
			        </figcaption>         
			    </figure>
			    <!--PORTFOLIO ITEM -->
	  			<figure class="portfolio-item effect-sadie">
			        <img src="images/portfolio/05.jpg" alt="Image portfolio"/>
			        <figcaption>
			            <h4>Project Name</h4>
			            <p>Short description</p>
			            <a href="portfolio-single.html">View more</a>
			        </figcaption>         
			    </figure>
			    <!--PORTFOLIO ITEM -->
	  			<figure class="portfolio-item effect-sadie">
			        <img src="images/portfolio/06.jpg" alt="Image portfolio"/>
			        <figcaption>
			            <h4>Project Name</h4>
			            <p>Short description</p>
			            <a href="portfolio-single.html">View more</a>
			        </figcaption>         
			    </figure>
	  		</div>
	  		<div class="portfolio-button center animate-me zoomIn">
		  		<a href="portfolio.html" class="btn btn-default"><i class="fa fa-suitcase"></i> More Stuff on our Portfolio</a>
	  		</div>
	  		<!-- CUSTOM CONTAINER -->
	  		<section class="custom-section-container with-separation-bottom with-separation-top">
		  		<div class="container">
			  		<div class="custom-section-text">
				  		<h2 class="animate-me fadeInLeft">Become an Affiliate</h2>
				  		<p class="animate-me fadeInLeft">Just a custom box, relax ;) You can add any kind of content and change the icons, buttons, title, background etc...</p>
				  		
			  		</div>
			  		<div class="custom-section-buttons">
				  		<a href="page.html" class="btn btn-default animate-me fadeInRight"><i class="fa fa-book"></i> Learn More</a>
				  		<a href="contact.html" class="btn btn-default animate-me fadeInRight"><i class="fa fa-paper-plane"></i> Ask your question</a>
			  		</div>
		  		</div>
	  		</section>
	  		<div class="container">
	  			<!-- ABOUT -->
	  			<h2 class="with-breaker animate-me fadeInUp">
		  			Our Team <span>Yep, we rock !</span>
	  			</h2>
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
	  			<!-- PARTNERS -->
	  			<h2 class="with-breaker animate-me fadeInUp">
		  			Our partners<span>Thanks to all</span>
	  			</h2>
	  			<div id="partners-slider" class="flexslider">
		  			<ul class="slides">
		  				<li class="partners-slide">
		  					<a href="#"><img src="images/partners/01.jpg" alt="Partner Logo"></a>
		  					<a href="#"><img src="images/partners/02.jpg" alt="Partner Logo"></a>
		  				</li>
		  				<li class="partners-slide">
		  					<a href="#"><img src="images/partners/03.jpg" alt="Partner Logo"></a>
		  					<a href="#"><img src="images/partners/04.jpg" alt="Partner Logo"></a>
		  				</li>
		  				<li class="partners-slide">
		  					<a href="#"><img src="images/partners/05.jpg" alt="Partner Logo"></a>
		  					<a href="#"><img src="images/partners/06.jpg" alt="Partner Logo"></a>
		  				</li>
		  				<li class="partners-slide">
		  					<a href="#"><img src="images/partners/07.jpg" alt="Partner Logo"></a>
		  					<a href="#"><img src="images/partners/08.jpg" alt="Partner Logo"></a>
		  				</li>
		  				<li class="partners-slide">
		  					<a href="#"><img src="images/partners/09.jpg" alt="Partner Logo"></a>
		  					<a href="#"><img src="images/partners/10.jpg" alt="Partner Logo"></a>
		  				</li>
		  			</ul>
			  	</div>
	  			<!-- GET IN TOUCH  -->
	  			<h2 class="with-breaker animate-me fadeInUp">
		  			Get In Touch<span>What are you waiting for ?</span>
	  			</h2>
	  		</div>
			
			<!--This is the end of the content section-->
		
	@stop
  
  