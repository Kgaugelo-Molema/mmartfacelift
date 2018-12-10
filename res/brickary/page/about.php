<?php
include "../../../inc/imageuploadinc.php";  
include "../../../inc/dbconfiginc.php";
include "../../../inc/sessionconfiginc.php";
include "../../../inc/postmethodsinc.php";
include "../../../inc/cmsinc.php";
?>
<!DOCTYPE html>
<!--
Template Name: mmARTHouse
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>mmARTHouse | Pages | About</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/upload.css" rel="stylesheet" type="text/css" media="all">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="../layout/styles/login.css" rel="stylesheet" type="text/css" media="all">
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
	<!--  LOG IN  -->
				<input class="radio" id="tab-1" name="tabs-name" type="radio" checked>
				<label for="tab-1" class="table"><span><?php echo !isset($_SESSION["user"]) ? "Login" : "Gallery"; ?></span></label>
				<div class="tabs-content">
				   <div class="login_socnet">
					   <!-- <a href="" class="fa fa-twitter" aria-hidden="true"></a>
					   <a href="" class="fa fa-google-plus" aria-hidden="true"></a>
					   <a href="" class="fa fa-facebook" aria-hidden="true"></a> -->
				   </div>
           <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype='multipart/form-data'>
            <input type="hidden" value="<?php echo $_SERVER['PHP_SELF'] ?>" name="location">
            <input type="hidden" value="../../../gallery/" name="imgfolder">
            <input type="hidden" value="./gallery.php" name="gallerypage">
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
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('../../../img/bg_img_2-1.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear" style="max-width:1000px;"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
                <a href="./"><img src="../../../img/logoinsta3.jpg"></a>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
		  <li><a href="./">Home</a></li>
          <li class="active"><a href="about.php">About Us</a></li>
		  <li><a href="gallery.php">Gallery</a></li>
		  <li><a href="news.php">Our Friends</a></li>
		  <li><a href="events.php">Events</a></li>
		  <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <section id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="./">Home</a></li>
      <li><a href="#">About Us</a></li>
    </ul>
    <!-- ################################################################################################ -->
    <h6 class="heading">About Us</h6>
    <!-- ################################################################################################ -->
  </section>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content about"> 
      <!-- ################################################################################################ -->
	  <div>
		<article>
            <h3 class="heading">We Love art, We Collect art, Let’s Share art</h3>
            <p>The Muzi Mavuso Art House – Affectionately known as mmArtHouse is a private home of Muzi Mavuso, who is a passionate collector of contemporary art by young emerging artists. The ArtHouse looks to provide a lucrative platform for young artists and collectors to share their works with the public. Young curators will also have the opportunity to utilize the house for private exhibitions and art talks.</p>

			<p>mmARTHouse aspires  to provide a unique experience, which is intimate and personal for our guests. We pride ourselves on our artists and know that everyone who visits mmArtHouse will find a work of art that connects with them.</p>

			<p>mmARTHouse is also utilised as an events venue for those that look to have artistic background to their event. Have your guests captured and mesmerised  by every piece of our art while you entertain your guests be it a launch party, birthday party, the ArtHouse will cater for your needs.</p>
            <!-- <footer><a class="btn inverse" href="#">Find out more</a></footer> -->
          </article>
        </li>
	  </div>
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4 bgded overlay" style="background-image:url('../../../img/MMArtHouse_40.jpg');">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <h3 class="heading">mmARTHouse</h3>
    <nav>
      <ul class="nospace inline pushright uppercase">
        <li><a href="./"><i class="fa fa-lg fa-home"></i></a></li>
		  <li><a href="about.php">About Us</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="news.php">Our Friends</a></li>
          <li><a href="events.php">Events</a></li>
          <li><a href="contact.php">Contact Us</a></li>
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
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">www.mmart.co.za</a></p>
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
<script src="../../../js/custom-file-input.js"></script>
</body>
</html>