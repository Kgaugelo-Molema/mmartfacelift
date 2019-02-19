<?php
include "../../../inc/imageuploadinc.php";  
include "../../../inc/dbconfiginc.php";
include "../../../inc/sessionconfiginc.php";
include "../../../inc/postmethodsinc.php";
include "../../../inc/cmsinc.php";
include "../../../inc/emailinc.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>mmARTHouse - Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/upload.css" rel="stylesheet" type="text/css" media="all">
<link href="../layout/styles/login.css" rel="stylesheet" type="text/css" media="all">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="shortcut icon" href="../../../img/mmarthouse-icon.png">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul>
        <!--<li><i class="fa fa-phone"></i> +27 11 888 9900</li>-->
        <!--<li><i class="fa fa-envelope-o"></i> info@mmarthouse.co.za</li>-->
      </ul>
    </div>
    <div class="fl_right">
      <ul>
        <li><a href="./"><i id="hm" class="fa fa-lg fa-home"></i></a></li>
        <?php echo $label ?>
      </ul>
    </div>
	<!--SIGN IN-->
		<input id="modal-toggle" type="checkbox">
		<label class="modal-backdrop" for="modal-toggle"></label>
		<div class="modal-content">
			<label class="modal-close-btn" for="modal-toggle">
				  <svg width="50" height="50">
				<line x1="10" y1="10" x2="40" y2="40"/>
					<line x1="40" y1="10" x2="10" y2="40"/>
				  </svg>
			  </label>
			<div class="tabs">
  <!--  LOG IN / GALLERY -->
				<input class="radio" id="tab-1" name="tabs-name" type="radio" checked>
				<label for="tab-1" class="table"><span><?php echo !isset($_SESSION["user"]) ? "Login" : "Gallery"; ?></span></label>
				<div class="tabs-content">
				   <div class="login_socnet">
<?php             
          if (!isset($_SESSION["user"])) {
					  //  echo '<a href="" class="fa fa-twitter" aria-hidden="true"></a>';
					  //  echo '<a href="" class="fa fa-google-plus" aria-hidden="true"></a>';
            //  echo '<a href="" class="fa fa-facebook" aria-hidden="true"></a>';
          }
?>             
				   </div>
           <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype='multipart/form-data'>
            <div class="js">
<?php            
            include "../../../inc/tab1inc.php";
?>             
            </div>
				   </form>
				   <form class="forgot-password" action="">
             <input id="forgot-password-toggle" type="checkbox">
<?php
            if (!isset($_SESSION["user"]))              
             //echo '<label for="forgot-password-toggle">forgot password?</label>';
?>             
					   <div class="forgot-password-content">
						   <input type="email" placeholder="enter your email" required>
						   <input name="loginBtn" type="submit" value="go">
					   </div>
				   </form>
				</div>
	<!--  SIGN UP  -->
				<input class="radio" id="tab-2" name="tabs-name" type="radio">
				<label for="tab-2" class="table"><span><?php echo !isset($_SESSION["user"]) ? "Sign up" : "Events"; ?></span></label>
				<div class="tabs-content">
					<div class="login_socnet">
					   <!-- <a href="" class="fa fa-twitter" aria-hidden="true"></a>
					   <a href="" class="fa fa-google-plus" aria-hidden="true"></a>
					   <a href="" class="fa fa-facebook" aria-hidden="true"></a> -->
				   </div>
           <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
           <div class="js">
<?php            
            include "../../../inc/tab2inc.php";
?>             
            </div>
           
				   </form>
				</div>
			</div>
		</div>        		
	<!--END-->		
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('../../../img/bg_img_2-1.jpg'); color:black;"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear" style="max-width:1000px;"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
                <a href="./"><img src="../../../img/logoinsta3.jpg"></a>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="./">Home</a></li>
          <li><a href="./about.php">About Us</a></li>
          <li><a class="drop" href="./gallery.php">Gallery</a>
            <ul>
              <li><a href="./gallery.php?album=calculations">Calculations</a></li>
              <li><a href="./gallery.php?album=current">2018 Exhibitions</a></li>
              <li><a href="./gallery.php?album=archive">Past Exhibitions</a></li>
            </ul>
		  </li>
          <li><a href="./news.php">Our Friends</a></li>		  
          <li><a href="./events.php">Events</a></li>
          <li><a href="./contact.php">Contact Us</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="pageintro" class="hoc clear" style="max-width:1000px; background:white; padding:0 0 0"> 
			<div id="ad-box">
    
				<!-- <img class="ad" src="../../../img/hlanga_exibit.jpeg" /> -->

				<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/gyHuMxLApM8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
				<iframe width="560" height="315" src="https://www.youtube.com/embed/Y2-v9qFXcpM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				
				<!-- <iframe src="https://player.vimeo.com/video/316179353" width="640" height="362" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				<p><a href="https://vimeo.com/316179353">Calculations</a> from <a href="https://vimeo.com/user81325417">Kgaoza Gp</a> on <a href="https://vimeo.com">Vimeo</a>.</p> -->
    
				<div >
				  
				  
				</div>
    
    
		  </div>		
  
          <!-- <div class="side-img" style="margin:0 100px -300px 0; background:url('../../../img/home_left_s.jpeg');background-repeat:no-repeat;height:468px;width:35%;background-position:left;"></div> -->
    <!-- ################################################################################################ -->
    <div class="flexslider basicslider">
      <ul class="slides">
        <li>
			<div style="background: url('../../../img/hlanga_exibit_s.jpg');">
			<article style="background:rgba(255,255,255,0.7)">
				<p>Hlangana lathi | Join us | Sanganai Nesu</p>
				<h3 class="heading">Calculations</h3>
				<p>7 February 2019 | 17H30 - 21H00</p>
				<footer><a class="btn inverse" href="./gallery.php?album=calculations">Find out more</a></footer>
			</article>
          </div>
        <!-- <li>
			<div style="background: url('../../../img/home_right_s.jpeg');">
			  <article style="background:rgba(255,255,255,0.7)">
				<p>Private space for Artists, Collectors, Curators and Creatives</p>
				<h3 class="heading">Showroom Event</h3>
				<p>Exhibition of new paintings</p>
				<footer>
				  <form class="group" method="post" action="#">
					<fieldset>
					  <legend>Sign-Up:</legend>
					  <input name="email" type="email" value="" placeholder="Email Here&hellip;">
					  <button class="fa fa-sign-in" type="submit" title="Submit"><em>Submit</em></button>
					</fieldset>
				  </form>
				</footer>
			  </article>
			</div>
        </li> -->
        <li>
          <div style="background:url('../../../img/GreatJoy12.jpg')">
			<article style="background:rgba(255,255,255,0.7)">
				<p>*******</p>
				<h3 class="heading">The Path to Greatjoy</h3>
				<p>by GreatJoy Ndlovu</p>
				<footer><a class="btn inverse" href="#">Find out more</a></footer>
			</article>
          </div>
        </li>
        <li>
			<div style="background:url('../../../img/mmarthouse-2.jpg');">
			  <article style="background:rgba(255,255,255,0.7)">
				<p>*******</p>
				<h3 class="heading">Celebrating Africanness</h3>
				<p>by Ntsikelelo Mzibomvu</p>
				<footer><a class="btn" href="#">Find out more</a></footer>
			  </article>
        </li>
      </ul>
    </div>
	<iframe scrolling="no" frameborder="0" src="../../slider/css-slideshow-24.php"></iframe>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
  <!-- <div class="side-img" style="margin:-680px 0 0 900px; background:url('../../../img/home_right_s.jpeg');background-repeat:no-repeat;height:468px;width:35%;background-position:left;"></div> -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="display:none; background-image:url('../../../img/MMArtHouse_40.jpg');">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle center">
      <!-- <h3 class="heading">Our Friends</h3>
      <p>mmARTHouse Artists Friends</p> -->
    </div>
    <ul class="nospace group center">
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="group">
      <section class="one_half first">
        <!-- <h6 class="heading btmspace-50">From The Blog</h6> -->
        <ul class="nospace">
          <li class="btmspace-30">
            <article>
              <!-- <h4 class="nospace"><a href="#">Article 1</a></h4>
              <time class="font-xs" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time> -->
            </article>
          </li>
          <li class="btmspace-30">
            <article>
              <!-- <h4 class="nospace"><a href="#">Article 2</a></h4>
              <time class="font-xs" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time> -->
            </article>
          </li>
          <li>
            <article>
              <!-- <h4 class="nospace"><a href="#">Article 3</a></h4>
              <time class="font-xs" datetime="2045-04-04">Wednesday, 4<sup>th</sup> April 2045</time> -->
            </article>
          </li>
        </ul>
      </section>
      <section class="one_half">
        <h6 class="heading btmspace-50">OPENING HOURS</h6>
        <p>Mon – Fri: By Appointment</p>
        <p>Sat: 11am – 2pm</p>
        <p class="btmspace-30">Sun: Closed</p>
        <form id="newsletter" method="post" action="#">
          <fieldset>
            <legend>Newsletter:</legend>
            <!-- <input class="btmspace-15" type="text" value="" placeholder="Name">
            <input class="btmspace-15" type="text" value="" placeholder="Email">
            <button type="submit" value="submit">Submit</button> -->
          </fieldset>
        </form>
      </section>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4 bgded overlay" style="height:700px; background-image:url('../../../img/MMArtHouse_40.jpg');">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <h3 class="heading">mmARTHouse</h3>
    <nav>
      <ul class="nospace inline pushright uppercase">
        <li><a href=""><i class="fa fa-lg fa-home"></i></a></li>
		  <li><a href="./about.php">About Us</a></li>
          <li><a href="./gallery.php">Gallery</a></li>
          <li><a href="./news.php">Our Friends</a></li>
          <li><a href="./events.php">Events</a></li>
          <li><a href="./contact.php">Contact Us</a></li>
      </ul>
    </nav>
    <ul class="faico clear">
      <li><a class="faicon-facebook" target="_blank" href="http://web.facebook.com/mmarthouse/"><i class="fa fa-facebook"></i></a></li>
      <li><a class="faicon-twitter" target="_blank" href="http://twitter.com/search?q=mmarthouse&src=typd"><i class="fa fa-twitter"></i></a></li>
      <li><a class="faicon-instagram" target="_blank" href="http://www.instagram.com/mmarthouse/"><i class="fa fa-instagram"></i></a></li>
      <!-- <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
      <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li> -->
    </ul>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">www.mmarthouse.co.za</a></p>
    <p class="fl_right">Designed by <a target="_blank" href="http://www.gatewaysytems.co.za/">Gateway Systems</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
<script src="../layout/scripts/jquery.flexslider-min.js"></script>
<script src="../../../js/custom-file-input.js"></script>
</body>
</html>