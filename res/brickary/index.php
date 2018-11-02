<?php
const DB_HOST = "localhost"; // set database host
const DB_USER = "mmartqlz"; // set database user
const DB_PASS = "g]p+zP7l1end"; // set database password
const DB_NAME = "mmartqlz_cms"; // set database name
$connection = new mysqli(DB_HOST,DB_USER,DB_PASS); 
/////////////////////////////////////////////////////////////////////////////////////////////////////

if (!$connection->select_db(DB_NAME)) {die ("lsdcdb selection failed<br>".$connection->error);}


session_start(); 
if ((isset($_GET['doLogoff'])) &&($_GET['doLogoff']=="true")) {
  // to fully log out a visitor we need to clear the session variables
  session_unset();
  session_destroy();
  echo '<h3>You have been logged off</h3><a href="./">Click here to login</a>';
  exit;
} 

$sql = '';
$msg = "";
$sessionUser = '';
if (isset($_SESSION["user"]))
  $sessionUser = $_SESSION["user"];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST["username"])) {
    $name = $_POST["username"];
    $password = md5($_POST["password"]);
	  if ($name == '' || $password == '') {
        $msg = "You must enter all fields";
    } else {
        $sql = "SELECT * FROM members WHERE email = '$name' AND password = '$password'";
		
        if (!$connection->query($sql)) {
            echo "Could not successfully run query ($sql) from DB: " . mysql_error();
            exit;
        }
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            $_SESSION["user"] = $name;
            header('Location: ./');
            exit;
        }

        $msg = "Username and password do not match";
    }
  }  
}
$label = '<label for="modal-toggle">Login / Sign up ' . $msg . ' </label>';
if (isset($_SESSION["user"])) 
    $label = '<a href="./?doLogoff=true">Logoff ' . $sessionUser . ' </a>';

?>

<!DOCTYPE html>
<html>
<head>
<title>Mmarthouse - Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/login.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="shortcut icon" href="../../img/mmarthouse-icon.png">
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
        <li><i class="fa fa-phone"></i> +27 11 888 9900</li>
        <li><i class="fa fa-envelope-o"></i> info@mmarthouse.co.za</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul>
        <li><a href="./"><i id="hm" class="fa fa-lg fa-home"></i></a></li>
	<!--SIGN IN-->
		<li><?php echo $label ?></li>  
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
				<label for="tab-1" class="table"><span>Login</span></label>
				<div class="tabs-content">
				   <div class="login_socnet">
					   <a href="" class="fa fa-twitter" aria-hidden="true"></a>
					   <a href="" class="fa fa-google-plus" aria-hidden="true"></a>
					   <a href="" class="fa fa-facebook" aria-hidden="true"></a>
				   </div>
				   <form name="loginForm" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
					   <input type="email" placeholder="Email" required name="username">
					   <input type="password" placeholder="Password" required name="password">
					   <input type="submit" value="Log In">
				   </form>
				   <form class="forgot-password" action="">
					   <input id="forgot-password-toggle" type="checkbox">
					   <label for="forgot-password-toggle">forgot password?</label>
					   <div class="forgot-password-content">
						   <input type="email" placeholder="enter your email" required>
						   <input type="submit" value="go">
					   </div>
				   </form>
				</div>
	<!--  SIGN UP  -->
				<input class="radio" id="tab-2" name="tabs-name" type="radio">
				<label for="tab-2" class="table"><span>Sign up</span></label>
				<div class="tabs-content">
					<div class="login_socnet">
					   <a href="" class="fa fa-twitter" aria-hidden="true"></a>
					   <a href="" class="fa fa-google-plus" aria-hidden="true"></a>
					   <a href="" class="fa fa-facebook" aria-hidden="true"></a>
				   </div>
				   <form action="">
					   <input type="email" placeholder="Email" required>
					   <input type="password" placeholder="Password" required>
					   <input type="password" placeholder="Confirm password" required>
					   <input type="submit" value="Sign Up">
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
<div class="bgded overlay" style="background-image:url('../../img/bg_img_2-1.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="./">Mmarthouse</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="./">Home</a></li>
          <li><a href="page/about.html">About Us</a></li>
          <li><a href="page/gallery.php">Gallery</a></li>
          <li><a href="page/news.html">News</a></li>
          <li><a href="page/events.html">Events</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="flexslider basicslider">
      <ul class="slides">
        <li>
          <article>
			<p><?php echo $sql ?></p>
            <p>Private space for Artists, Collectors, Curators and Creatives</p>
            <h3 class="heading">Showroom Event</h3>
            <p>Exhibition of new paintings</p>
            <footer>
              <form class="group" method="post" action="#">
                <fieldset>
                  <legend>Sign-Up:</legend>
                  <input type="email" value="" placeholder="Email Here&hellip;">
                  <button class="fa fa-sign-in" type="submit" title="Submit"><em>Submit</em></button>
                </fieldset>
              </form>
            </footer>
          </article>
        </li>
        <li>
          <article>
            <p>*******</p>
            <h3 class="heading">The Path to Greatjoy</h3>
            <p>by GreatJoy Ndlovu</p>
            <footer><a class="btn inverse" href="#">Find out more</a></footer>
          </article>
        </li>
        <li>
          <article>
            <p>*******</p>
            <h3 class="heading">Celebrating Africanness</h3>
            <p>by Ntsikelelo Mzibomvu</p>
            <footer><a class="btn" href="#">Find out more</a></footer>
          </article>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3 coloured">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div id="introblocks">
      <ul class="nospace group">
      </ul>
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('../../img/MMArtHouse_40.jpg');">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle center">
      <h3 class="heading">News</h3>
      <p>mmARTHouse Artists Friends</p>
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
        <h6 class="heading btmspace-50">From The Blog</h6>
        <ul class="nospace">
          <li class="btmspace-30">
            <article>
              <h4 class="nospace"><a href="#">Article 1</a></h4>
              <time class="font-xs" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
            </article>
          </li>
          <li class="btmspace-30">
            <article>
              <h4 class="nospace"><a href="#">Article 2</a></h4>
              <time class="font-xs" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
            </article>
          </li>
          <li>
            <article>
              <h4 class="nospace"><a href="#">Article 3</a></h4>
              <time class="font-xs" datetime="2045-04-04">Wednesday, 4<sup>th</sup> April 2045</time>
            </article>
          </li>
        </ul>
      </section>
      <section class="one_half">
        <h6 class="heading btmspace-50">OPENING HOURS</h6>
        <p>Mon – Fri: By Appointment</p>
        <p>Sat: 10am – 2pm</p>
        <p class="btmspace-30">Sun: 10am – 3pm</p>
        <form id="newsletter" method="post" action="#">
          <fieldset>
            <legend>Newsletter:</legend>
            <input class="btmspace-15" type="text" value="" placeholder="Name">
            <input class="btmspace-15" type="text" value="" placeholder="Email">
            <button type="submit" value="submit">Submit</button>
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
<div class="wrapper row4 bgded overlay" style="background-image:url('../../img/MMArtHouse_40.jpg');">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <h3 class="heading">Mmarthouse</h3>
    <nav>
      <ul class="nospace inline pushright uppercase">
        <li><a href=""><i class="fa fa-lg fa-home"></i></a></li>
		  <li><a href="page/about.html">About Us</a></li>
          <li><a href="page/gallery.php">Gallery</a></li>
          <li><a href="page/news.html">News</a></li>
          <li><a href="page/events.html">Events</a></li>
          <li><a href="page/contact.html">Contact Us</a></li>
      </ul>
    </nav>
    <ul class="faico clear">
      <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
      <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
      <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
      <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
      <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
      <li><a class="faicon-vk" href="#"><i class="fa fa-twitter"></i></a></li>
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
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>