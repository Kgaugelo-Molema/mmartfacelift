
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>The Muzi Mavuso Art House</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Muzi, Mavuso, Art House" />
	<meta name="author" content="GatewaySystems" />
	<link rel="shortcut icon" href="../../img/mmarthouse-icon.png">

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

			<h1 id="fh5co-logo"><a href="index.php"><img src="../../img/mmarthouse-logo.png" alt="Free HTML5 Bootstrap Website Template"></a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li class="fh5co-active"><a href="index.php">Home</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>

			<div class="fh5co-footer">
				<p><small>&copy; 2018 MMARTHOUSE.<br>All Rights Reserved.</span> <span>Designed by <a href="http://www.gatewaysytems.co.za/" target="_blank">Gateway Systems</a> </span> </small></p>
				<ul>
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
					<li><a href="#"><i class="icon-linkedin"></i></a></li>
				</ul>
			</div>

		</aside>

		<div id="fh5co-main">

			<div class="fh5co-narrow-content">
				<!--<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">We Love To Design <span>See Our Portfolio</span></h2>-->
				<!--<img src="../../img/mmarthouse-logo.png" alt="">-->
				<div class="row animate-box" data-animate-effect="fadeInLeft">
<?php						
	$directory = "../../gallery";
	$images = glob("$directory/*.{jpg,png,bmp}", GLOB_BRACE);
	$count = 1;
	$liClass = '"one_quarter first"';
	foreach($images as $image)
	{
		//echo '<div><a href="'.$image.'" >'.$count.'</a></div><br>';
		$li = '<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">';
		$li .= '<a href="#">';
		$li .= '<img src="'.$image.'" alt="" class="img-responsive">';
		$li .= '<h3 class="fh5co-work-title">Exibition '.$count.'</h3>';
		$li .= '<p>Contributing artists</p></a></div>';
		
		$count += 1;
		echo $li;
		if ($count % 4 == 0) break;
	}
?>
				
					<div class="clearfix visible-md-block"></div>
					
				</div>
			</div>
			
			
			<div class="fh5co-testimonial" >
				<div class="fh5co-narrow-content">
					<div class="owl-carousel-fullwidth animate-box" data-animate-effect="fadeInLeft">
		            <div class="item">
		            	<figure>
		            		<img src="../../img/mmarthouse-icon.png" alt="">
		            	</figure>
		              	<p class="text-center quote">OPERATION SMILE ART AUCTION<cite class="author">This dream is beyond us, you are the one to breathe life into it to see it rise. This is a project of dignity [&hellip;]</cite></p>
		            </div>
		            <div class="item">
		            	<figure>
		            		<img src="../../img/mmarthouse-icon.png" alt="Free HTML5 Bootstrap Template">
		            	</figure>
		              	<p class="text-center quote">Africa’s ‘Mona Lisa’<cite class="author">“I think of it as the African Mona Lisa,” said award-winning novelist Ben Okri, gazing at the long-lost portrait [&hellip;]</cite></p>
		            </div>
		            <div class="item">
		            	<figure>
		            		<img src="../../img/mmarthouse-icon.png" alt="Free HTML5 Bootstrap Template">
		            	</figure>
		              	<p class="text-center quote">Yoko Ono & Esther<cite class="author">Yoko Ono & Esther Mahlangu lined up for art exhibit in Johannesburg – John Lennon’s widow – will exhibit her work[&hellip;]</cite></p>
		            </div>
		          </div>
				</div>
			</div>


			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">This Is What <span>We Love To Do</span></h2>
				<div class="row">
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-strategy"></i>
							</div>
							<div class="fh5co-text">
								<h3>Passion</h3>
								<p>The Muzi Mavuso Art House is passionate about collecting contemporary art by young emerging artists.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-telescope"></i>
							</div>
							<div class="fh5co-text">
								<h3>Vision</h3>
								<p>The mmArtHouse aspires to provide a unique experience, which is intimate and personal for our guests.<br><br></p>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-circle-compass"></i>
							</div>
							<div class="fh5co-text">
								<h3>Direction</h3>
								<p>The mmArtHouse is also utilised as an events venue for those that look to have artistic background to their event.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-tools-2"></i>
							</div>
							<div class="fh5co-text">
								<h3>Expertise</h3>
								<p>Young curators will also have the opportunity to utilize the house for private exhibitions and art talks.</p>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="fh5co-counters" style="background-image: url(images/hero.jpg);" data-stellar-background-ratio="0.5" id="counter-animate">
				<div class="fh5co-narrow-content animate-box">
					<div class="row" >
						<div class="col-md-4 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="17" data-speed="5000" data-refresh-interval="5"></span>
							<span class="fh5co-counter-label">Artists Worked With</span>
						</div>
						<div class="col-md-4 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="30" data-speed="5000" data-refresh-interval="5"></span>
							<span class="fh5co-counter-label">Collected Paintings</span>
						</div>
						<div class="col-md-4 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="23" data-speed="5000" data-refresh-interval="5"></span>
							<span class="fh5co-counter-label">Talks</span>
						</div>
					</div>
				</div>
			</div>
		
			<div class="fh5co-cards">
				<div class="fh5co-narrow-content">
					<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Press Release</h2>

					<div class="fh5co-flex-wrap">
						<div class="fh5co-card animate-box" data-animate-effect="fadeInLeft">
							<h5>Article 1</h5>
							<p></p>
							<p><a href="#" class="btn btn-md btn-primary">Learn More</a></p>
						</div>
						<div class="fh5co-card animate-box" data-animate-effect="fadeInLeft">
							<h5>Article 2</h5>
							<p></p>
							<p><a href="#" class="btn btn-md btn-primary">Learn More</a></p>
						</div>

					</div>	
					
				</div>
			</div>

			<div class="fh5co-narrow-content">
				<div class="row">
					<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
						<h1 class="fh5co-heading-colored">Comments &amp; Testimonies</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
						<p class="fh5co-lead">Comment 1</p>
						<p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
					</div>
					<div class="col-md-7 col-md-push-1">
						<div class="row">
							<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
								<p>Comment 2</p>
							</div>
							<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
								<p>Comment 3</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

