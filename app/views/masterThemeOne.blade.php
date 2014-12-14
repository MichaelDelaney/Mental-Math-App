<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Stroke of Genius')</title>

    <meta charset='utf-8'>
    <!-- STYLESHEETS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/animate.min.css" rel="stylesheet" media="screen">
    <link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="style.css" rel="stylesheet" media="screen">
    <link href="css/options.css" rel="stylesheet" media="screen">
    <link href="css/responsive.css" rel="stylesheet" media="screen">
    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:900,300,400,200,800' rel='stylesheet' type='text/css'>
	<!-- MAKE IT RESPONSIVE -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>

  	<!-- LOADER DIV - ONLY HOME -->
  	<div id="loader">
  		<div id="loading-logo"></div>
  	</div>
  	<div id="page">
	  	<!-- START HEADER -->
	  	<header id="header" class="big with-separation-bottom">
	  		<!-- POINTER ANIMATED -->
	  		<canvas id="header-canvas"></canvas>
	  		
	  		<!-- TOP NAVIGATION -->
	  		<div id="top-navigation">
		  		<ul class="animate-me fadeInDown" data-wow-duration="1.2s">
			  		<li class="menu-item"><i class="fa fa-phone"></i> 732.306.7894</li>
			  		<li class="menu-item"><i class="fa fa-question"></i> mdelaney@fas.harvard.edu</a></li>
			  		<li class="menu-item"><span class="navigation-social">P4 - Dynamic Web Applications</span></li>
			  		<li class="menu-item">
			  			<!-- SEARCHFORM -->
			  			<div id="search-container" class="animate-me fadeInDown">
					  		<form role="search" method="get" action="#" >
								<input type="text" value="" name="s" id="s" placeholder="Search..."/>
								<input type="hidden" name="searchsubmit" id="searchsubmit" value="true" />
								<button type="submit" name="searchsubmit"><i class="fa fa-search"></i></button>
					        </form>
				  		</div>
			  			<a href="#" id="search-toggle"><i class="fa"></i></a>
			  		</li>
		  		</ul>
	  		</div>
	  	
	  		<!-- MOBILE NAVIGATION -->
	  		<nav id="navigation-mobile"></nav>
	  	<!-- MAIN MENU -->
	  		<nav id="navigation">
	  			<!-- DISPLAY MOBILE MENU -->
	  			<a href="#" id="show-mobile-menu"><i class="fa fa-bars"></i></a>
	  			<!-- CLOSE MOBILE MENU -->
		  		<a href="#" id="close-navigation-mobile"><i class="fa fa-long-arrow-left"></i></a>
	  			
		  		<ul id="left-navigation" class="animate-me fadeInLeftBig">
			  		
			  		<li class="menu-item menu-item-has-children">
			  			<a href="portfolio.html" data-description="Getting started">Beginner</a>
			  		</li>
			  		<li class="menu-item"><a href="skills.html" data-description="Build on skills">Advanced</a></li>
		  		</ul>
		  		<div  class="animate-me flipInX" data-wow-duration="3s">
		  				<a href="#" onclick='return false;' id="logo-navigation"></a>
		  		</div>
		  		<ul id="right-navigation" class="animate-me fadeInRightBig">
			  		<li class="menu-item"><a href="about.html" data-description="Help us grow">Request a Lesson</a></li>
			  		<li class="menu-item"><a href="contact.html" data-description="Let's get in touch">Contact</a></li>
		  		</ul>
	  		</nav>
    @yield('content')

    	
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
		  				<!-- GET THE LINL -> http://www.skype.com/en/features/skype-buttons/create-skype-buttons/--> 
		  				<a href="#" class="btn btn-default"><i class="fa fa-skype"></i> Call Us</a>
		  			</div>
		  		</div>
	  		</section>
	  	</div>
	  	<!-- END MAIN CONTAINER -->
	  	
	  
  	</div>
		<!-- START FOOTER -->
	  	<footer id="footer" class="with-separation-top">
		  	<aside id="widgets" class="container">
		  		<div class="row">
		  			<!-- WIDGET -->
			  		<div class="col-md-4 widget animate-me fadeInLeft">
			  			<img src="images/logo-footer.png" id="footer-logo" alt="Logo footer">
			  			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ullamcorper felis pulvinar neque pharetra auctor. Donec vel erat pretium, interdum justo sed, mollis tortor.</p>
			  			<a href="about.html" class="btn btn-default"><i class="fa fa-users"></i> Read more</a>
			  		</div>
		  			<!-- WIDGET -->
			  		<div class="col-md-4 widget animate-me fadeInUp">
				  		<h4>Navigation</h4>
				  		<ul>
					  		<li><a href="index.html">Home</a></li>
					  		<li><a href="portfolio.html">Portfolio</a></li>
					  		<li><a href="blog.html">Blog</a></li>
					  		<li><a href="about.html">About Us</a></li>
				  		</ul>
			  		</div>
		  			<!-- WIDGET -->
			  		<div class="col-md-4 widget animate-me fadeInRight">
			  			<h4>Contact</h4>
			  			<ul class="contact-informations">
				  			<li class="contact-address">666 Avenue des Champs-Élysées. 75000 Paris</li>
				  			<li class="contact-phone">(+33)0 11 22 33 44</li>
			  			</ul>
			  			<ul class="widget-social">
			  				<!-- ALL ICONS AVAILABLE ->http://fortawesome.github.io/Font-Awesome/icons/#brand-->
				  			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				  			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				  			<li><a href="#"><i class="fa fa-skype"></i></a></li>
				  			<li><a href="#"><i class="fa fa-rss"></i></a></li>
			  			</ul>
			  			<a href="contact.html" class="btn btn-default"><i class="fa fa-envelope-o"></i> Contact Form</a>
			  		</div>
		  		</div>
		  	</aside>
		  	<div id="copyright" class="animate-me fadeInUp">
		  		<div class="container">
			  		<p>&#169; 2014 All Rights Reserved. Produced By Michael Delaney For Academic Purposes.</p>
			  		<ul id="footer-navigation">
				  		
				  		<li><u><a href="mailto:youremailaddress">mdelaney@fas.harvard.edu</a></u></li>
			  		</ul>
		  		</div>
		  	</div>
	  	</footer>
	  	<!-- END FOOTER -->
	  	
	  	<!-- SCROLL TOP -->
	  	<a href="#" id="scroll-top" class="fadeInRight animate-me"><i class="fa fa-angle-double-up"></i></a>
	<!-- SCRIPTS -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/plugins.js"></script>
	<script type="text/javascript">
		/*TEXT TICKER (ONLY FOR HOME PAGE)*/
		$('#ticker-text').vTicker('init', {
			speed: 300, 
		    pause: 2000
	    });
	</script>
    <script src="js/custom.js"></script>
</body>
</html>