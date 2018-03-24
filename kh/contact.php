<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>vKirirom Pine Resort - Cambodia Resorts</title>
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
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	  <script>
		var map;
		var marker;
		var images = '../images/Contact/Map-Image.png';
		var myLatLng = new google.maps.LatLng(11.316631, 104.064985);
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: myLatLng,
          zoom: 12,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(mapCanvas, mapOptions);
		marker = new google.maps.Marker({
			position: myLatLng,
			map: map,
			draggable: false,
			animation: google.maps.Animation.DROP,
			icon: images
  });
		google.maps.event.addListener(marker, 'click', toggleBounce);
      }
	  function toggleBounce() {

  if (marker.getAnimation() != null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
	 <style>
		#map-canvas{
			width: 99.9%;
			height: 306px;
			background: #cccccc;
			border: 1px solid #fff;
		}
	 </style>
	 <script src="../js/fbplugin.js"></script>
 </head>
  <body>
  	<!-- Language Button -->

  	<ul id="menu" class="mfb-component--bl mfb-zoomin" data-mfb-toggle="hover">
      <li class="mfb-component__wrap">
        <a href="#" class="mfb-component__button--main-kh" data-mfb-label="Khmer">
        </a>
        <ul class="mfb-component__list">
          <li>
            <a href="../en/contact.php" data-mfb-label="English" class="mfb-component__button--child-en">
            </a>
          </li>
          <li>
            <a href="../jp/contact.php" data-mfb-label="Japanese" class="mfb-component__button--child-jp">
            </a>
          </li>
        </ul>
      </li>
    </ul>

    <div id="book-now-button"><a style="color:white;" href="reservation.php">កក់ឥឡូវ​នេះ</a></div>
    
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
                            <a href="https://www.instagram.com/vkirirom/" target="_blank"><img src="../images/instagram.svg" alt=" www.instagram.com" title="instagram" /></a>
                        </li>
                        <li>
                            <a href="https://vkirirom.live" target="_blank"><img src="../images/blog-icon.png" alt="www.vkirirom.live" title="blog" /></a>
                        </li>
                        <li id="book-button"><a href="reservation.php">កក់ឥឡូវនេះ</a></li>
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
						<li><a href="index.php">ទំព័រដើម</a></li>
						<li><a href="specialoffer.php">សេវាកម្មពិសេស</a></li>
						<li><a href="services.php">សេវាកម្ម និង បរិក្ខា</a></li>
						<li><a href="activities.php">ល្បែងកំសាន្ត</a></li>
						<li><a href="accommodation.php">កន្លែងស្នាក់នៅ</a></li>
						<li><a href="vkiriromCalendar.php">កាលបរិច្ឆេទ តម្លៃ</a></li>
						<li><a href="restaurant.php">ភោជនីយដ្ឋាន</a></li>
						<li class="active"><a href="contact.php">ទំនាក់ទំនង</a></li>
						<div class="clear"> </div>
					</ul>
				</div>
				<div class="top-nav-right">
					<ul>
						<li><a href="reservation.php">កក់ឥឡូវ​នេះ</a></li>
					</ul>
				</div>
				<div class="clear"> </div>
			</div>
			<!--Start import drop down menu-->
			 <div class="top-nav-1">
				 <nav class="dropdown">
					 <ul>
						 <li class="active"><a href="index.php">ទំព័រដើម</a></li>
						 <li><a href="specialoffer.php">សេវាកម្មពិសេស</a></li>
						 <li><a href="services.php">សេវាកម្ម និង បរិក្ខា</a></li>
						  <li><a href="activities.php">ល្បែងកំសាន្ត</a></li>
						   <li><a href="accommodation.php">កន្លែងស្នាក់នៅ</a></li>
						<li><a href="vkiriromCalendar.php">កាលបរិច្ឆេទ តម្លៃ</a></li>
						<li><a href="restaurant.php">ភោជនីយដ្ឋាន</a></li> 
						 <li><a href="contact.php">ទំនាក់ទំនង</a></li>
						 <div class="clear"> </div>
					 </ul>
					 <a href="#" id="pull">ម៉ឺនុយ</a>
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
			    	 	<h3>ទំនាក់ទំនងពួកយើង នៅទីនេះ</h3>
			    	 		<div class="iframe-container">
			    	 		<!--<iframe src="https://www.google.com/maps/d/embed?mid=1R8W9hGTP1ViFRQIThG6c54BeGPo" width="500" height="300"></iframe>-->
			    	 		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13158.465022794839!2d104.05722555090057!3d11.332148296319305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3108e85207384c83%3A0x1c0dc50984a079a3!2sVkirirom+Pine+Resort!5e0!3m2!1sen!2skh!4v1472627179894" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			    	 		</div>
      				</div>
      			<div class="company_address">
				     	<h3> ព័ត៌មានបន្ថែម :</h3>
				     	<p>vKirirom Pine Resort is 112 kms ភាគនិរតីនៃ រាជធានីភ្នំពេញដែលមានទីតាំង ប្រហែល ៣០ គីឡូម៉ែត្រ ភាគខាងលិចនៃផ្លូវជាតិលេខ០៤។នៅផ្នែកខាងក្រោមនៃភ្នំគីរីរម្យ នោះអ្នកឃើញ SOKIMEX គីរីរម្យម៉ាត នៅតាមបណ្តោយផ្លូវជាតិលេខ០៤។</p><br>
						<p>រមណីយដ្ឋាន: <a href="#" style="color: #816943">+855 78 777 284</a></p> 
						<p>ផ្នែកលក់: <a href="#" style="color: #816943">+855 78 777 343 / 78 777 346</a></p>
				 	 	<p>អ៊ីម៉ែល: <span><b><i><a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&source=mailto&to=info@vKirirom.com" target="_blank">info@vKirirom.com</a></i></b></p>
				   		<p>ចូលទៅកាន់: <span><a href="https:/www.facebook.com/vkirirom">Facebook</a></span>  
<!--                            <span><a href="#">Google+</a></span>-->
                            , <span><a href="https://www.instagram.com/vkirirom/">Instagram</a></span>, <span><a href="https://twitter.com/vKirirom">Twitter</a></span></p>
						

				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>ទំនាក់ទំនង</h3>
					    <form id="defaultForm" class="form-horizontal" method="post" action="sendemail.php">
					    	<div class="form-group">
						    	<span><label>ឈ្មោះ</label></span>
						    	<span><input name="userName" type="text" class="form-control textbox" /></span>
						    </div>
						    <div class="form-group">
						    	<span><label>អ៊ីម៉ែល</label></span>
						    	<span><input name="userEmail" type="text" class="form-control textbox" /></span>
						    </div>
						    <div class="form-group">
						     	<span><label>ទូរស័ព្ទដៃ</label></span>
						    	<span><input name="userPhone" type="text" class="form-control textbox" /></span>
						    </div>
						    <div class="form-group">
						    	<span><label>មតិយោបល់</label></span>
						    	<span><textarea name="userMsg" class="form-control textbox"> </textarea></span>
						    </div>
						   <div class="form-group">
						   		<span><button name="sendMsg" type="submit" class="btn btn-primary mybutton" value="Submit">បញ្ជូន</button></span>
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
			<h3>ព័ត៍មានបន្ថែមពី vKirirom </h3>
				<p>vKirirom Pine Resort មានទីតាំងស្ថិតភ្នំគីរីរម្យដែលពោរពេញដោយទៅដើមស្រល់ដ៏ស្រស់ត្រកាល។ នៅភ្នំគីរីរម្យយើងព្យាយាម ការពារសម្រស់ធម្មជាតិនៃបរិស្ថាន ព្រៃឈើ ហើយទីតាំងនៃអគាររបស់យើងត្រូវបានសិក្សាយ៉ាងម៉្មត់ចត់ និងត្រឹមត្រូវបំផុតដើម្បីជៀសវាងការកាប់បំផ្លាញដើមឈើ ។</p>
				<a class="button2" href="detailsCompany.php">ព័ត៌មានបន្ថែម</a>
			</div>
			<div class="footer-grid center-grid">
				<h3>vKirirom ជាផ្ទះទី២ របស់លោកអ្នក</h3>
				<ul>
					<li><a href="http://property.vkirirom.com/about_us.php">ពត៍មានបន្ថែមពី យើងខ្ញុំ</a></li>
					<li><a href="http://property.vkirirom.com/type_a.php">ប្រភេទនៃអចលនៈទ្រព្យ</a></li>
					<li><a href="http://property.vkirirom.com/gallery.php">រូបភាព</a></li>
					<li><a href="http://property.vkirirom.com/contact.php">ទំនាក់ទំនង មកកាន់យើងខ្ញុំ</a></li>
				</ul>
			</div>
			<div class="footer-grid twitts">
				<h3>វិទ្យាស្ថាន បច្ចេកវិទ្យាគីរីរម្យ(KIT)</h3>
				<p><label>KIT</label>ជាវិទ្យាស្ថាន ដែលមានរចនាបទ ថ្មី នៃការបង្រៀន និង ការរៀន ជាមួយនឹងការ អនុវត្ត ដែលមានប្រសិទ្ធិភាពដូចជា សាលានៅបរទេស។</p>
				<span onclick="location='http://kit.vkirirom.com/contact.php'">ចុះឈ្មោះ នៅទីនេះ !!</span>
				<p>សាកលវិទ្យាល័យ ថ្មីមួយដែលស្ថិតនៅលើ ភ្នំ គិរីរម្យ ដែលនៅក្នុង គម្រោង vKririom ។ វិធីសាស្រ្ត អប់រំ បែបទំនើប ស្តង់ដារអន្តរជាតិ ដែលមានទីតាំងស្ថិតនៅក្នុងសម្រស់នៃធម្មជាតិ រួមទាំង បរិស្ថានស្អាត បរិយាកាសបរិសុទ្ធ 	។</p>
				<span onclick="location='http://kit.vkirirom.com/index.php'"> ពត៍មានបន្ថែមពី KIT</span>
			</div>
			<div class="footer-grid">
				<h3>តើអ្នកដឹងទេ?</h3>
				<p>សូមមើលស្លាកសញ្ញារបស់ vKirirom - លោកអ្នក នឹងឃើញ '<span style="color: orange;">v</span>''ពណ៍ទឹកក្រូច តំណាងឱ្យមនុស្ស និង <span style="color: green;">'Kirirom'</span> ពណ៍បៃតងតំណាងឱ្យ ធម្មជាតិបៃតង។vKirirom រៀបរាប់អំពីមនុស្សដែលរស់នៅក្នុងធម្មជាតិបៃតងដ៏ស្រស់ត្រកាល។

ហើយ ពណ៍ទឹកក្រូច នេះក៑តំណាងឱ្យភាពសាមញ្ញដូចជាស្បង់ជីវររបស់ព្រះសង្ឃនៅក្នុងប្រទេសកម្ពុជា ។</p>
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
		<p>រចនាដោយ <a href="http://kit.vkirirom.com/"> វិទ្យាស្ថាន បច្ចេកវិទ្យាគីរីរម្យ</a></p>
	</div>
		 <!---End-footer---->
	</body>
</html>

