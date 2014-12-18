<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title', 'Stroke of Genius')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="{{ asset('/images/favicon.ico') }}">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/animate.min.css" rel="stylesheet" media="screen">
    <link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="style.css" rel="stylesheet" media="screen">
    <link href="css/options.css" rel="stylesheet" media="screen">
    <link href="css/responsive.css" rel="stylesheet" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:900,300,400,200,800' rel='stylesheet' type='text/css'>
  </head>
  <body>
  	<div id="page">
	  	<header id="header" class="small with-separation-bottom">
			<canvas id="header-canvas"></canvas>
	  		<div id="top-navigation">
		  		<ul class="animate-me fadeInDown" data-wow-duration="1.2s">
			  	<li class="menu-item"><i class="fa fa-phone"></i> 732.306.7894</li>
			  		<li class="menu-item"> Michael Delaney</li>
			  		<li class="menu-item"><span class="navigation-social">P4 - Dynamic Web Applications</span></li>
					<li class="menu-item">
							@if(Auth::check())
								<a href='/logout'>Log out {{ Auth::user()->email; }}</a>
							@else 
								<a href='/signup'><b>Sign up</b></a>   or   <a href='/login'><b>Log in</b></a>
							@endif
					</li>
		  		</ul>
	  		</div>
			<nav id="navigation-mobile"></nav>
			<nav id="navigation">
	  			<a href="#" id="show-mobile-menu"><i class="fa fa-bars"></i></a>
	  			<a href="#" id="close-navigation-mobile"><i class="fa fa-long-arrow-left"></i></a>
	  			<ul id="left-navigation" class="animate-me fadeInLeftBig">
			  		<li class="menu-item menu-item-has-children">
			  			<a href="beginnerlessons" data-description="Getting started">Beginner</a>
			  		</li>
			  		<li class="menu-item"><a href="advancedlessons" data-description="Build on skills">Advanced</a></li>
		  		</ul>
		  		<div  class="animate-me flipInX" data-wow-duration="3s">
		  				<a href="home" id="logo-navigation"></a>
		  		</div>
		  		<ul id="right-navigation" class="animate-me fadeInRightBig">
			  		<li class="menu-item"><a href="requestalesson" data-description="Help us grow">Request a Lesson</a></li>
			  		<li class="menu-item"><a href="specialthanks" data-description="To Susan Buck">Special Thanks</a></li>
		  		</ul>
	  		</nav>
			<div id="shade"></div>
			<div class="flexslider" id="header-slider">
		  		<ul class="slides">
		  			<li><img src="images/backgrounds/bg1.jpg" alt="SLider Image"></li>
		  		</ul>	
		  	</div>
	  	</header>

	  @yield('content')
	  	
	  	<footer id="footer" class="with-separation-top">
		  	<aside id="widgets" class="container">
		  		<div class="row">
		  			<div class="col-md-4 widget animate-me fadeInLeft">
			  			<img src="images/logo-footer.png" id="footer-logo" alt="Logo footer">
			  			<p>P4's main objective is to use PHP/Laravel to create a simple application that has a MySQL database and demostrates CRUD interactions.</p>
			  		</div>
		  			<div class="col-md-4 widget animate-me fadeInUp">
				  		<h4>Navigation</h4>
				  		<ul>
					  		<li><a href="/beginnerlessons">Beginner</a></li>
					  		<li><a href="/advancedlessons">Advanced</a></li>
					  		<li><a href="/requestalesson">Request a Lesson</a></li>
					  		<li><a href="/specialthanks">Special Thanks</a></li>
				  		</ul>
			  		</div>
		  			<div class="col-md-4 widget animate-me fadeInRight">
			  			<h4>Harvard Extension School - CSCI E-15</h4>
			  			<ul class="contact-informations">
				  			<li class="contact-address">Michael Delaney</li>
				  			<li class="contact-phone">(732) 306-7894</li>
							<li>       P4 Due - December 18th, 2014</li>
			  			</ul>
			  			<a href="mailto:mdelaney@fas.harvard.edu" class="btn btn-default"><i class="fa fa-envelope-o"></i> mdelaney@fas.harvard.edu</a>
			  		</div>
		  		</div>
		  	</aside>
		  	<div id="copyright" class="animate-me fadeInUp">
		  		<div class="container">
			  		<p>&#169; 2014 All Rights Reserved. Produced By Michael Delaney For Academic Purposes.</p>
		  		</div>
		  	</div>
	  	</footer>
	  	<a href="#" id="scroll-top" class="fadeInRight animate-me"><i class="fa fa-angle-double-up"></i></a>
  	</div>
	<script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
  