<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Contact vkirirom- Cambodia Resorts</title>
	<meta name="keywords" content="Cambodia Resort , Pine resort Cambodia, Kirirom resort, Mountain resort cambodia">
	<meta name="description" content="vKirirom Pine Resort located on top of kirirom mountain national park provides you once in a life time experiences. A lot of activities in the fresh air like Jungle trekking, horse riding, fruit picking, team building for corporation as well with new creative delicious cuisine contains organic vegetable from own farm">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="icon" href="../images/HomePage/favicon.png" type="image/x-icon"/>
  <link href="../css/style.css" rel="stylesheet" type="text/css"  media="all" />
  <link href="../css/validate.css" rel="stylesheet" type="text/css"  media="all" />
  
  
  <!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">-->
    

  <link href="../css/formValidation.min.css" rel="stylesheet" type="text/css"  media="all" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<!--<script type="text/javascript" src="js/jquery.min.js"></script>-->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>
	<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="../js/camera.min.js"></script>
	<script type="text/javascript" src="../js/jquery.lightbox.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/formValidation.js"></script>
	<script type="text/javascript" src="../js/bootstrapvalidate.js"></script>
	<script type="text/javascript" src="../js/validator.js"></script>
	<!-- build:css mfb.css -->
  	<link href="../css/mfb.css" rel="stylesheet">
  	<!-- build:js mfb.js -->
  	<script src="../js/mfb.js"></script>
	<!--Start drop menu-->
	<script>
		$(function() {
			var pull 		= $('#pull');
			menu 		= $('nav ul');
			menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
				var w = $(window).width();
				if(w > 320 && menu.is(':hidden')) {
					menu.removeAttr('style');
				}
			});
		});
	</script>
	<!--End drop menu-->
	 <script src="../js/fbplugin.js"></script>
 </head>
  <body>
  	<!-- Language Button -->

  	<ul id="menu" class="mfb-component--bl mfb-zoomin" data-mfb-toggle="hover">
      <li class="mfb-component__wrap">
        <a href="#" class="mfb-component__button--main-en" data-mfb-label="English"></a>
        <ul class="mfb-component__list">
          <li>
            <a href="../jp/contact.php" data-mfb-label="Japanese" class="mfb-component__button--child-jp"></a>
          </li>
          <li>
            <a href="../kh/contact.php" data-mfb-label="Khmer" class="mfb-component__button--child-kh"></a>
          </li>
        </ul>
      </li>
    </ul>

    <div id="book-now-button"><a style="color:white;" href="reservation.php">Book Now</a></div>
    
	<!--start-header-->
	 <div class="header">
	     <div class="wrap">
			<div class="top-header">
				<div class="logo">
					<a href="index.php"><img src="../images/HomePage/vKirirom.svg" alt="vKirirom logo" title="logo" /></a>
				</div>
				<div class="social-icons">
					<ul>
                        <li>
                            <a href="https://www.facebook.com/vkirirom" target="_blank"><img src="../images/facebook.svg" alt="www.facebook.com" title="facebook" /></a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCCIu3JTn0s4UX5Kze5Hse0g" target="_blank"><img src="../images/youtube.svg" alt="www.youtube.com" title="youtube" /></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/vkirirom/" target="_blank"><img src="../images/instagram.svg" alt="www.instagram.com" title="instagram" /></a>
                        </li>
                        <!-- <li>
                            <a href="https://vkirirom.live" target="_blank"><img src="../images/blog-icon.png" alt="www.vkirirom.live" title="blog" /></a>
                        </li> -->
                        <li id="book-button"><a href="reservation.php">BOOK NOW</a></li>
                    </ul>
					<div class="facebook">
					<div class="fb-like" data-href="https://www.facebook.com/vkirirom" data-width="250" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
					</div>
				</div>
				<div class="clear"> </div>
			</div>
			<!---start-top-nav---->
			<div class="top-nav">
				<div class="top-nav-left">
					 <ul>
						<li><a href="index.php">Concept</a></li>
						<li><a href="specialoffer.php">Special Offers</a></li>
						<li><a href="services.php">Services & Facilities</a></li>
						<li><a href="activities.php">Activities</a></li>
						<li><a href="accommodation.php">Accommodation</a></li>
						<li><a href="vkiriromCalendar.php">Price Calendar</a></li>
						<li><a href="restaurant.php">Restaurant</a></li>
						<li class="active"><a href="contact.php">Contact</a></li>
						<li><a href="vkclub.php">vKclub</a></li>
						<div class="clear"> </div>
					</ul>
				</div>
				<div class="top-nav-right">
					<ul>
						<li><a href="reservation.php">Book Now</a></li>
					</ul>
				</div>
				<div class="clear"> </div>
			</div>
			 <!--Start import drop down menu-->
			 <div class="top-nav-1">
				 <nav class="dropdown">
					  <ul>
						<li class="active"><a href="index.php">Concept</a></li>
						<li><a href="specialoffer.php">Special Offers</a></li>
						<li><a href="services.php">Services & Facilities</a></li>
						<li><a href="activities.php">Activities</a></li>
						<li><a href="accommodation.php">Accommodation</a></li>
						<li><a href="vkiriromCalendar.php">Price Calendar</a></li>                     <li><a href="restaurant.php">Restaurant</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li><a href="vkclub.php">vKclub</a></li>
						<div class="clear"> </div>
					</ul>
					 <a href="#" id="pull">Menu</a>
				 </nav>
				 <div class="clear"></div>
			 </div>
			 <!--end drop down menu-->
			<!---End-top-nav---->
		</div>
	</div>
   <!----End-header----->
		 <!---start-content---->
		 <div class="content">
		 	<!---start-contact---->
		 	<div class="contact">
		 		<div class="wrap">
				<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	<h3>Find Us Here</h3>
			    	 		<div class="iframe-container">
			    	 		<!--<iframe src="https://www.google.com/maps/d/embed?mid=1R8W9hGTP1ViFRQIThG6c54BeGPo" width="500" height="300"></iframe>-->
			    	 		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13158.465022794839!2d104.05722555090057!3d11.332148296319305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3108e85207384c83%3A0x1c0dc50984a079a3!2sVkirirom+Pine+Resort!5e0!3m2!1sen!2skh!4v1472627179894" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			    	 		</div>
      				</div>
      			<div class="company_address">
				     	<h3>Information :</h3>
				     	<p>vKirirom Pine Resort is 112 kms southwest of Phnom Penh, located about 30 kms to the west of National Highway #4. On the bottom of Kirirom Mountain, you will find SOKIMEX with Kirirom Mart along the National Highway #4.</p><br>
						<p>Resort: <a href="#" style="color: #816943">+855 78 777 284</a></p>
						<p>Sale: <a href="#" style="color: #816943">+855 78 777 343 / 78 777 346</a></p>
				 	 	<p>Email: <span><b><i><a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&source=mailto&to=info@vKirirom.com" target="_blank">info@vKirirom.com</a></i></b></p>
				   		<p>Follow on: <span><a href="https:/www.facebook.com/vkirirom">Facebook</a></span>, 
<!--                            <span><a href="#">Google+</a></span>,-->
                            <span><a href="https://www.instagram.com/vkirirom/">Instagram</a></span>, <span><a href="https://twitter.com/vKirirom">Twitter</a></span></p>
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Contact Us</h3>
					    <form id="defaultForm" class="form-horizontal" method="post" action="sendemail.php">
					    	<div class="form-group">
						    	<span><label>NAME</label></span>
						    	<span><input name="userName" type="text" class="form-control textbox" /></span>
						    </div>
						    <div class="form-group">
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="userEmail" type="text" class="form-control textbox" /></span>
						    </div>
						    <div class="form-group">
						     	<span><label>MOBILE</label></span>
						    	<span><input name="userPhone" type="text" class="form-control textbox" /></span>
						    </div>
						    <div class="form-group">
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="userMsg" class="form-control textbox"> </textarea></span>
						    </div>
						   <div class="form-group">
						   		<span><button name="sendMsg" type="submit" class="btn btn-primary mybutton" value="Submit">Submit</button></span>
						  </div>
					    </form>

				    </div>
  				</div>				
			  </div>
			</div>
			</div>
			<?php
				$_SESSION["te"] = NULL;
				if ($_SESSION["te"]) {
					echo("<script>alert('Thanks for your message.');</script>");
					//$_SESSION["te"] = false;
				}
				$_SESSION["te"] = false;
			?>
		 	<!---End-contact---->
		 <!---End-content---->
		 <!---start-footer---->
			  <div class="footer">
		<div class="wrap">
			<div class="footer-grid">
			<h3>About vKirirom</h3>
				<p>vKirirom Pine Resort is located amongst the pine trees of Kirirom Mountain. Here at vKiriom, we try to preserve the natural beauty of the environment. Our building locations are properly studied so that we avoid cutting down many trees.</p>
				<a class="button2" href="detailsCompany.php">Read More</a>
			</div>
			<div class="footer-grid center-grid">
				<h3>vKirirom 2nd home</h3>
				<ul>
					<li><a href="http://property.vkirirom.com/about_us.php">About Us</a></li>
					<li><a href="http://property.vkirirom.com/type_a.php">Type of property</a></li>
					<li><a href="http://property.vkirirom.com/gallery.php">Gallery</a></li>
					<li><a href="http://property.vkirirom.com/contact.php">Contact Us</a></li>
				</ul>
			</div>
			<div class="footer-grid twitts">
				<h3>Kirirom Institute of Technology</h3>
				<p><label>KIT</label>adapts a new style of learning with an effective new educational techniques as a boarding school.</p>
				<span onclick="location='http://kit.vkirirom.com/contact.php'">Enroll here !!</span>
				<p>New university for the future in Kirirom Mountain under the vKririom Project. An educational approach that stands amongst the forest.</p>
				<span onclick="location='http://kit.vkirirom.com/index.php'"> More about KIT</span>
			</div>
			<div class="footer-grid">
				<h3>THE MEANING OF OUR LOGO</h3>
				<p>In the logo of vKirirom - you will find '<span style="color: orange;">v</span>' in orange and <span style="color: green;">'Kirirom'</span> in green. The orange colour represents the people who live in Kirirom. This is the colour of joy and creativity. It also reminds us  of the robes monks wear in Cambodia. The green represents the nature and its beauty.</p>
			</div>
			<div class="clear"> </div>
		</div>
		<div class="clear"> </div>
	</div>
	      <div class="copy-right">
		<div class="top-to-page">
						<a href="#top" class="scroll"> </a>
						<div class="clear"> </div>
					</div>
		<p>Designed by <a href="http://kit.vkirirom.com/"> Kirirom Institute of Technology</a></p>
	</div>
		 <!---End-footer---->
	</body>
</html>

