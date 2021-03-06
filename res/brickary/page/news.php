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
<title>mmARTHouse | Pages | Our Friends</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/upload.css" rel="stylesheet" type="text/css" media="all">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="../layout/styles/login.css" rel="stylesheet" type="text/css" media="all">
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
						   <input type="submit" value="go">
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
    <!-- ######################### ARTIST MODAL SECTION ################################################# -->
	<!--  BEGIN ARTIST  -->
		<input id="modal-toggle-artist1" type="checkbox">
		<label class="modal-backdrop" for="modal-toggle-artist1"></label>
		<div class="modal-content">
			<label class="modal-close-btn" for="modal-toggle-artist1">
				  <svg width="50" height="50">
				<line x1="10" y1="10" x2="40" y2="40"/>
					<line x1="40" y1="10" x2="10" y2="40"/>
				  </svg>
			  </label>
			<div class="tabs-artist">
				<div class="tabs-content-artist">
					<div style="background:url('../../../img/GreatJoy12.jpg');background-size:cover;background-position:center;">
						<p>Greatjoy Ndlovu was born in Bulawayo, Zimbabwe and currently works from August House studios in Johannesburg.He has been enjoying a steady rise into art world prominence within South Africa with exhibitions at national art fairs and galleries. His current body of work focuses on portraiture and figurative themes.</p>
						<p>The artist explores are variety of materials and techniques to develop his unique, post expressionistic style that is set to make him one of the sought after African artists to achieve international acclaim.</p>
						<p>Ndlovu expresses his inner emotional world rather than depicting an external reality. There is a range of essential human emotions here that cannot be expressed in abstract and conceptual art; the figures suggest a mixture of wonder, mourning, hope and hues of happiness. splashes of primal colour in contrast to subtle, earthy shades and the uncomplicated body language of subjects seem to express the inner tension of an entire continent, torn between a traditional lifestyle from the past and a fast paced, hi-tech now.</p>
						<p>Ndlovu’s work starts from lighthearted, experimental sketches that develop into large scale, detailed works or even an entire series without loosing an experimental element that so characterizes his work.</p>
					</div>
				</div>
			</div>
		</div>        		
	<!--END-->		
	<!--  BEGIN ARTIST  -->
		<input id="modal-toggle-artist2" type="checkbox">
		<label class="modal-backdrop" for="modal-toggle-artist2"></label>
		<div class="modal-content">
			<label class="modal-close-btn" for="modal-toggle-artist2">
				  <svg width="50" height="50">
				<line x1="10" y1="10" x2="40" y2="40"/>
					<line x1="40" y1="10" x2="10" y2="40"/>
				  </svg>
			  </label>
			<div class="tabs-artist">
				<div class="tabs-content-artist">
					<div style="background:url('../../../img/lebom.jpeg');background-size:cover;background-position:center;">
						<p>Lebohang Motaung is a fine artist and a hairstylist. Plaiting hair has always been part of her life. Over the years it went from just a tool of making money to her area of research and art practice. She became more fascinated by arrangements, patterns, colour and different textures. In her work, she focuses on the activity and process of doing hair.</p>
						<p>In her work, she uses a wide range of mediums. From linocut, etching, paper making and synthetic hair on paper. With her etching works, she presents the timeous laborious process that she goes through when plaiting hair. In her recent work, she makes portraits using hair, where she talks about how a person’s hair can be a symbol of one’s identity, and how it has the power to dictate how a person is seen. She uses human hair and synthetic hair to portray her subject matter. She is influenced by the conversations she had with her clients when she was still a fulltime hairstylist.</p>
					</div>
				</div>
			</div>
		</div>        		
	<!--END-->		
	<!--  BEGIN ARTIST  -->
		<input id="modal-toggle-artist3" type="checkbox">
		<label class="modal-backdrop" for="modal-toggle-artist3"></label>
		<div class="modal-content">
			<label class="modal-close-btn" for="modal-toggle-artist3">
				  <svg width="50" height="50">
				<line x1="10" y1="10" x2="40" y2="40"/>
					<line x1="40" y1="10" x2="10" y2="40"/>
				  </svg>
			  </label>
			<div class="tabs-artist">
				<div class="tabs-content-artist">
					<div style="background:url('../../../img/happyd.jpeg');background-size:cover;background-position:center;">
						<p>Happy Dhlame, He is a South African born artist born in Soweto Johannesburg. His work ranges from Painting, Installation and video installation that mostly comment on his social urban. It unmasks existing codes on conditions in conventional art. It revives around abandoned building structures in the inner city. Interior and exterior spaces of decomposing structure, urban landscape furniture in certain vicinities as well as people inhabiting in such spaces. Thus, may be understood as the combined visual and spatial component of art production.</p>
						<p>Achievements</p>
						<p>Hansjoeg Wyss award (Switzerland)</p>
						<p>Rendez vous award (France)</p>
						<p>Collectors</p>
						<p>MAP (Modern Art Project)</p>
						<p>Gauteng legislature</p>
						<p>SAP (System Application Products)</p>
						<p>Parliament Ministers</p>
						<p>M & C Saatchi</p>
						<p>Hollard Insurance</p>
						<p>Swiss Development Agency Co operation</p>
						<p>Swiss Airways Pilot</p>
						<p>Angolan trade and Industry</p>
						<p>Hansjoeg Wyss</p>
						<p>As well as private collector that can`t be disclosed.</p>
						<p>He also exhibited and had workshops locally and internationally.</p>
					</div>
				</div>
			</div>
		</div>        		
	<!--END-->		
	<!--  BEGIN ARTIST  -->
		<input id="modal-toggle-artist4" type="checkbox">
		<label class="modal-backdrop" for="modal-toggle-artist4"></label>
		<div class="modal-content">
			<label class="modal-close-btn" for="modal-toggle-artist4">
				  <svg width="50" height="50">
				<line x1="10" y1="10" x2="40" y2="40"/>
					<line x1="40" y1="10" x2="10" y2="40"/>
				  </svg>
			  </label>
			<div class="tabs-artist">
				<div class="tabs-content-artist">
					<div style="background:url('../../../img/hqdefault.jpg');background-size:cover;background-position:center;">
						<p>Lebohang has exhibited his prints in numerous galleries and other spaces including the ABSA L’Atelier competition show, Arts on Main, Sandton Gallery, Jorbug Art Fair, and at Sharon Simpson Studio’s annual show. Most recently, he was part of a three-person show with Sizwe Khoza and Dzunisani Maluleke, called “Hiya Kwini?”(Where to?) Lebohang has worked with Sonke Gender Justice, a well-known NGO dealing with gender equality and other issues.</p>
					</div>
				</div>
			</div>
		</div>        		
	<!--END-->		
	<!--  BEGIN ARTIST  -->
		<input id="modal-toggle-artist5" type="checkbox">
		<label class="modal-backdrop" for="modal-toggle-artist5"></label>
		<div class="modal-content">
			<label class="modal-close-btn" for="modal-toggle-artist5">
				  <svg width="50" height="50">
				<line x1="10" y1="10" x2="40" y2="40"/>
					<line x1="40" y1="10" x2="10" y2="40"/>
				  </svg>
			  </label>
			<div class="tabs-artist">
				<div class="tabs-content-artist">
					<div style="background:url('../../../img/dorio.jpg');background-size:cover;background-position:center;">
						<p>Dario Manjate’s love of art began at an early age. A love that was further encouraged during the time he attended the Thusong Youth Centre in the Alexandra township, Johannesburg. Manjate creates collages by tearing up old magazines, all the time striving to achieve harmony between the medium and his concepts. Very much aware of how consumerism is feeding the perception that a person is defined by what they own, Manjate, hopes to bring awareness to his audience, encouraging them to look at our consumerist society critically.</p>
						<p>Born in Mozambique, Manjate Permanently lives in Johannesburg. He has been involved in a number of community projects, such as Work to Win, an environmental awareness project to uplift the township community. In 1996 he was the winner of the Johannesburg Gaulloise Blondes Freedom of Expression Art Competition. Manjate enrolled at Artists Proof Studio in 1998 to improve his skills and studied various printmaking techniques.   He has featured in many group exhibitions locally and abroad with the most recent being Living Artists Emporium, at the Johannesburg Turbine Art Fair (2015). Manjate’s solo exhibition at the MB Studio Gallery, Johannesburg, was titled, Joburg Consumes Me (2015).</p>
						<p>EXHIBITIONS</p>
						<p>2018- Decorex -Durban</p>
						<p>2018- Group exhibition-Daville Baille gallery</p>
						<p>2017 – Group Exhibition – Ornico Sandton</p>
						<p>2017 – Group Exhibition in France</p>
						<p>2017 – Group Exhibition – Jean Cilliers; Lizamore and associates gallery</p>
						<p>2016 – Group Exhibition – Solstice (ODA Gallery Franshoek )</p>
						<p>2016 – Group Exhibition – Group show (Tribute to Drew Lindsay – Firehouse Bezvalley )</p>
						<p>2015 – Solo Exhibition – MB Studio; DA Vinci Hotel</p>
						<p>2015 – Sandton Convention Centre –EOH</p>
						<p>2015 – Sandton Convention Centre –Sports Awards</p>
						<p>2015 – Turbine art fair – Living Artists Emporium</p>
						<p>2015 –Synprop Gallery –take me to the inner city</p>
						<p>2015 – Jean Cilliers – Lizzamore and Associates Gallery</p>
						<p>2015 – Legacy art projects (Durban museum)</p>
						<p>2014 – Legacy art projects (Polokwane museum)</p>
						<p>2014 –Turbine art fair (Art Afrique Gallery)</p>
						<p>2014 – First introductions (Art Afrique Gallery)</p>
						<p>2014 –Duet with Ronald Muchatuta, building blocks (Art Afrique Gallery)</p>
						<p>2014 –Dream of African woman (Daville Baillie Gallery )</p>
						<p>2014 – First introductions (Art Afrique Gallery )</p>
						<p>2000 – Party Design Johannesburg</p>
						<p>1999 – IDC Offices Sandton</p>
						<p>1998 – Artists proof studios</p>
						<p>1996 – Atlanta Georgia</p>
					</div>
				</div>
			</div>
		</div>        		
	<!--END-->		
	<!--  BEGIN ARTIST  -->
		<input id="modal-toggle-artist6" type="checkbox">
		<label class="modal-backdrop" for="modal-toggle-artist6"></label>
		<div class="modal-content">
			<label class="modal-close-btn" for="modal-toggle-artist6">
				  <svg width="50" height="50">
				<line x1="10" y1="10" x2="40" y2="40"/>
					<line x1="40" y1="10" x2="10" y2="40"/>
				  </svg>
			  </label>
			<div class="tabs-artist">
				<div class="tabs-content-artist">
					<div style="background:url('../../../img/madlekosi.jpg');background-size:cover;background-position:center;">
						<p>My artworks bring into conversation and discussion, the issues of migration in our contemporary society. I travelled from Zimbabwe to South Africa crossing borders, had my identity checked at immigrations, and I arrived to fit-in, in a multi-racial country. My banknote artworks (significantly etchings and linocuts) are a framework within which one can observe the issues of migration with relevance to socio-economic divergence and convergence. The directional lines in the banknotes depict the scatterings people and population displacement; the repetition of patterns symbolize the circumstantial economic system embedded to the stereotyped migrants. The linocut banknotes printed onto fabric (canvas) emphasize the constructed perambulation of the population in search for income and better life.  The figures and portraits (with head gear) painted on money are economically fabricated identities who are fitting into new homeland of occupation versus the home of origin.</p>
						<p>BIOGRAPHY</p>
						<p>Mandlenkosi Mavengere b. (1992) in Zimbabwe in Bulawayo (known as city of kings). Mavengere works predominantly in printing and painting. He moved to South Africa after completing his O’level (matric) in Zimbabwe.</p>
						<p>Thereafter it was in South Africa where he took up art as a career and got enrolled at Artist Proof Studio printmaking course where he completed his 3rd year. Along the printmaking course, his paintings began to be evident as he participated in many shows. Between 2013 – 2015 his work has been exhibited at Black Like Us Exhibition (Parkhurst) and Art Investment in Parkhurst. Mavengere exhibited at the Love-world Festival of Music and Arts held at the Nasrec Arena. His work also features in the 2015 IT-Web Calendar Brainstorm representing IBM. He has been in group exhibitions like Julie Miller Art Investments, Henry George Gallery, Turbine Art Fair, Absa Gallery, and Artist Proof Studio where he had his internship at the gallery.</p>
						<p>As an intern at Artist Proof Studio He curated an exhibition hosted by Strauss and Co. He was, thereafter recommended for a one-year internship at William Kentridge Studio for the year 2017.</p>
						<p>His mentorship by William Kentridge has precisely developed his creativity skills from etchings, into sculpturing and prominent linocut banknotes exploring themes consistent with his Migration Concept. Mavengere now runs his own studio as a production and collaborative space. It is based at Constitutional Hill in Johannesburg, South Africa.</p>
					</div>
				</div>
			</div>
		</div>        		
	<!--END-->		
	<!--  BEGIN ARTIST  -->
		<input id="modal-toggle-artist7" type="checkbox">
		<label class="modal-backdrop" for="modal-toggle-artist7"></label>
		<div class="modal-content">
			<label class="modal-close-btn" for="modal-toggle-artist7">
				  <svg width="50" height="50">
				<line x1="10" y1="10" x2="40" y2="40"/>
					<line x1="40" y1="10" x2="10" y2="40"/>
				  </svg>
			  </label>
			<div class="tabs-artist">
				<div class="tabs-content-artist">
					<div style="background:url('../../../img/Azael-Langa.jpg');background-size:cover;background-position:center;">
						<p>Azael Langa grew up in an artistic family, At first he did not adhere to being an artist until he won his first art competition in grade 6. After his primary years he went to an art High school and it was there where he realized that, that was exactly what he wanted to be – an artist.</p>
						<p>Artists’ statement : To me art is not a day job or career, but it is a lifestyle. My art is about socio-political activism and going about the subject I show the exploitation of the average joe; the corruption of the elite and bringing to the surface that which is of sight like they say “out of sight out of mind” it is also about taking the intangible events, circumstances and becoming a mediator to the public.</p>
					</div>
				</div>
			</div>
		</div>        		
	<!--END-->		
	<!--  BEGIN ARTIST  -->
		<input id="modal-toggle-artist8" type="checkbox">
		<label class="modal-backdrop" for="modal-toggle-artist8"></label>
		<div class="modal-content">
			<label class="modal-close-btn" for="modal-toggle-artist8">
				  <svg width="50" height="50">
				<line x1="10" y1="10" x2="40" y2="40"/>
					<line x1="40" y1="10" x2="10" y2="40"/>
				  </svg>
			  </label>
			<div class="tabs-artist">
				<div class="tabs-content-artist">
					<div style="background:url('../../../img/george.png');background-size:cover;background-position:center;">
						<p>George Masarira&lsquo;s Statement</p>
						<p><a target="_blank" href="../../../docs/george-masarira-calculations.pdf">Click her for BIOGRAPHY</a></p>
						<p>Life is a calculated characteristic that distinguishes physical entities that have biological processes, such as signaling and self-sustaining processes, from those that do not.</p>
						<p>Through canvas and paint, i depict a philosophy that all that exists is matter, and that life is merely a complex form or arrangement of matter.</p> 
						<p>The rendition of man as a mobile humanoid, reorganised human anatomy, political questions, dripping paintings, and my choice of artistic material,</p>
						<p>summarise that every depiction and action are calculated events, decisions, colors, material and thoughts, all represented by painted images. Through my daily Zimbabwean experiences,</p> 
						<p>the spectator is invited to think that calculations are the universe itself.</p>
					</div>
				</div>
			</div>
		</div>        		
	<!--END-->		
	<!--  BEGIN ARTIST  -->
		<input id="modal-toggle-artist9" type="checkbox">
		<label class="modal-backdrop" for="modal-toggle-artist9"></label>
		<div class="modal-content">
			<label class="modal-close-btn" for="modal-toggle-artist9">
				  <svg width="50" height="50">
				<line x1="10" y1="10" x2="40" y2="40"/>
					<line x1="40" y1="10" x2="10" y2="40"/>
				  </svg>
			  </label>
			<div class="tabs-artist">
				<div class="tabs-content-artist">
					<div style="background:url('../../../img/nkhenprof.jpeg');background-size:cover;background-position:center;">
						<img src='../../../img/nkhenprof.jpeg'/>
						<iframe style="margin-top:-30%" src="https://omny.fm/shows/power-podcasts/guest-profile-visual-artist/embed?style=artwork" frameborder="0" width="100%" height="180"></iframe>
					</div>
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
          <li><a href="about.php">About Us</a></li>
          <li class="drop"><a href="gallery.php">Gallery</a>
            <ul>
              <li><a href="./gallery.php?album=cognition">Cognition</a></li>
              <li><a href="./gallery.php?album=calculations">Calculations</a></li>
              <li><a href="./gallery.php?album=current">2018 Exhibitions</a></li>
              <li><a href="./gallery.php?album=archive">Past Exhibitions</a></li>
            </ul>
		  </li>
		  <li class="active"><a href="news.php">Our Friends</a></li>
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
      <li><a href="news.php">Our Friends</a></li>
    </ul>
    <!-- ################################################################################################ -->
    <h6 class="heading">Our Friends</h6>
    <!-- ################################################################################################ -->
  </section>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3" style="height:5000px;">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
      <div id="pageintro" style="padding:0px;">
        <label for="modal-toggle-artist9">
			<div class="thumbnail" style="background:url('../../../img/nkhenprof.jpeg');background-size:contain;background-position:top;background-repeat:no-repeat;;">
			  <ul>
				<li>
					<article>
						<h3 class="heading" style="color:aquamarine;"><br><br><br><br><br></h3>                    
					</article>
				</li>
			  </ul>
			  <a class="btn fa fa-paint-brush" href="../../brickary/page/gallery.php?album=cognition"></a>
			</div>
		</label>
        <label for="modal-toggle-artist8">
			<div class="thumbnail" style="background:url('../../../img/george.png');background-size:contain;background-position:top;background-repeat:no-repeat;;">
			  <ul>
				<li>
					<article>
						<h3 class="heading" style="color:aquamarine;"><br><br><br><br><br></h3>                    
					</article>
				</li>
			  </ul>
			  <a class="btn fa fa-paint-brush" href="../../brickary/page/gallery.php?album=george"></a>
			</div>
		</label>
        <label for="modal-toggle-artist1">
			<div class="thumbnail" style="background:url('../../../img/GreatJoy12.jpg');background-size:cover;background-position:center;">
			  <ul>
				<li>
					<article>
					  <h3 class="heading">The Path to Greatjoy<br><br><br><br><br></h3>
					</article>
				</li>
			  </ul>
					<a class="btn fa fa-paint-brush" href="../../brickary/page/gallery.php?album=greatjoy"></a>
			</div>
		</label>
        <label for="modal-toggle-artist2">
			<div class="thumbnail" style="background:url('../../../img/lebom.jpeg');background-size:cover;background-position:center;">
			  <ul>
				<li>
					<article>
						<h3 class="heading" style="color:aquamarine;"><br><br><br><br><br></h3>                    
					</article>
				</li>
			  </ul>
			  <a class="btn fa fa-paint-brush" href="../../brickary/page/gallery.php?album=lebom"></a>
			</div>
		</label>
        <label for="modal-toggle-artist3">
			<div class="thumbnail" style="background:url('../../../img/happyd.jpeg');background-size:cover;background-position:center;">
			  <ul>
				<li>
					<article>
						<h3 class="heading" style="color:aquamarine;"><br><br><br><br><br></h3>                    
					</article>
				</li>
			  </ul>
			  <a class="btn fa fa-paint-brush" href="../../brickary/page/gallery.php?album=happy"></a>
			</div>
		</label>
        <label for="modal-toggle-artist4">
			<div class="thumbnail" style="background:url('../../../img/hqdefault.jpg');background-size:cover;background-position:center;">
			  <ul>
				<li>
					<article>
						<h3 class="heading" style="color:aquamarine;"><br><br><br><br><br></h3>                    
					</article>
				</li>
			  </ul>
			  <a class="btn fa fa-paint-brush" href="../../brickary/page/gallery.php?album=lebos"></a>
			</div>
		</label>
        <label for="modal-toggle-artist5">
			<div class="thumbnail" style="background:url('../../../img/dorio.jpeg');background-size:cover;background-position:center;">
			  <ul>
				<li>
					<article>
						<h3 class="heading" style="color:aquamarine;"><br><br><br><br><br></h3>                    
					</article>
				</li>
			  </ul>
			  <a class="btn fa fa-paint-brush" href="../../brickary/page/gallery.php?album=dario"></a>
			</div>
		</label>
        <label for="modal-toggle-artist6">
			<div class="thumbnail" style="background:url('../../../img/madlekosi.jpeg');background-size:cover;background-position:center;">
			  <ul>
				<li>
					<article>
						<h3 class="heading" style="color:aquamarine;"><br><br><br><br><br></h3>                    
					</article>
				</li>
			  </ul>
			  <a class="btn fa fa-paint-brush" href="../../brickary/page/gallery.php?album=mand"></a>
			</div>
		</label>
        <label for="modal-toggle-artist7">
			<div class="thumbnail" style="background:url('../../../img/Azael-Langa.jpg');background-size:contain;background-position:top;background-repeat:no-repeat;;">
			  <ul>
				<li>
					<article>
						<h3 class="heading" style="color:aquamarine;"><br><br><br><br><br></h3>                    
					</article>
				</li>
			  </ul>
			  <a class="btn fa fa-paint-brush" href="../../brickary/page/gallery.php?album=azael"></a>
			</div>
		</label>
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
<script src="../../../js/custom-file-input.js"></script>
</body>
</html>