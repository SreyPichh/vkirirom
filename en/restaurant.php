<!DOCTYPE HTML>
<html>

<head>
    <title>vKirirom Restaurent - Cambodia Resorts</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Cambodia Resort , Pine resort Cambodia, Kirirom resort, Mountain resort cambodia">
    <meta name="description" content="vKirirom Pine Resort located on top of kirirom mountain national park provides you once in a life time experiences. A lot of activities in the fresh air like Jungle trekking, horse riding, fruit picking, team building for corporation as well with new creative delicious cuisine contains organic vegetable from own farm">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="../images/HomePage/favicon.png" type="image/x-icon" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../css/lightbox.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="../css/jquery.littlelightbox.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/jquery.littlelightbox.js"></script>
    <script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="../js/camera.min.js"></script>
    <script type="text/javascript" src="../js/jquery.lightbox.jp.kh.js"></script>
    <!-- build:css mfb.css -->
    <link href="../css/mfb.css" rel="stylesheet">
    <!-- build:js mfb.js -->
    <script src="../js/mfb.js"></script>

    <!--Start drop menu-->
   <script>
        $(function () {
            var pull = $('#pull');
            menu = $('nav ul');
            menuHeight = menu.height();
            $(pull).on('click', function (e) {
                e.preventDefault();
                menu.slideToggle();
            });
            $(window).resize(function () {
                var w = $(window).width();
                if (w > 320 && menu.is(':hidden')) {
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
                    <a href="../jp/restaurant.php" data-mfb-label="Japanese" class="mfb-component__button--child-jp"></a>
                </li>
                <li>
                    <a href="../kh/restaurant.php" data-mfb-label="Khmer" class="mfb-component__button--child-kh"></a>
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
                            <a href="https://www.instagram.com/vkirirom/" target="_blank"><img src="../images/instagram.svg" alt=" www.instagram.com" title="instagram" /></a>
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
            <!--start-top-nav-->
            <div class="top-nav">
                <div class="top-nav-left">
                    <ul>
                        <li><a href="index.php">Concept</a></li>
                        <li><a href="specialoffer.php">Special Offers</a></li>
                        <li><a href="services.php">Services & Facilities</a></li>
                        <li><a href="activities.php">Activities</a></li>
                        <li><a href="accommodation.php">Accommodation</a></li>
                        <li><a href="vkiriromCalendar.php">Price Calendar</a></li>
						<li class="active"><a href="restaurant.php">Restaurant</a></li>
						<li><a href="contact.php">Contact</a></li>
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
                        <li><a href="index.php">Concept</a></li>
                        <li><a href="specialoffer.php">Special Offers</a></li>
                        <li><a href="services.php">Services & Facilities</a></li>
                        <li><a href="activities.php">Activities</a></li>
                        <li><a href="accommodation.php">Accommodation</a></li>
                        <li><a href="vkiriromCalendar.php">Price Calendar</a></li>
                        <li class="active"><a href="restaurant.php">Restaurant</a></li>
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
        <!---start-about---->
        <div class="about-us">
            <div class="wrap">

                <div class="about-header">
                    <h3>About us</h3>
                    <div class="clear"> </div>
                </div>
                <div class="about-info">
                    <a href="#">Modern Khmer restaurant on top of Kirirom Mountain</a>
                    <p>This restaurant is located 600m above sea level. What makes Pine View Kitchen distinctive, aside from the variety of good Khmer foods being served, is its unique naturalistic ambience. This restaurant is surrounded by lofty pine trees that make the sound of the wind soothing to the ears while you enjoy your meal.
                    Our chef master prepares modem Khmer dishes cooked with fresh vegetables and fruits picked from our garden. The trees swaying in the wind let you feel fresh and leave you mesmerize. The greenery and Pine View Kitchen Restaurant are the best for your vacation and holidays. You can stop over for a cup of coffee or tea as you visit Kirirom National Park.</p>
                </div>
                <div class="specials">
                    <div class="specials-heading">
                        <h3>Trending Foods</h3>
                        <div class="clear"> </div>
                    </div>
                    <div class="clear"> </div>
                    <div class="specials-grids">
                        <div class="special-grid">
                            <a href="../images/foods/29_large.jpg" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/foods/29_large.jpg" alt="food" title="food"></a>
                        </div>
                        <div class="special-grid">
                            <a href="../images/foods/Banana%20in%20Coconut%20milk.jpg" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/foods/Banana%20in%20Coconut%20milk.jpg" alt="banana coconut milk" class="img-responsive"> </a>
                        </div>
                        <div class="special-grid spe-grid">
                            <a href="../images/foods/Breakfast.jpg" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/foods/Breakfast.jpg" alt="breakfast" class="img-responsive"> </a>
                        </div>
                        <div class="clear"> </div>

                        <div class="special-grid">
                            <a href="../images/foods/Snack.jpg" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/foods/Snack.jpg" alt="snack" class="img-responsive"> </a>
                        </div>
                        <div class="special-grid">
                            <a href="../images/foods/Spaghetti.jpg" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/foods/Spaghetti.jpg" alt="spaghetti in kirirom" alt="spaghetti" class="img-responsive"> </a>
                        </div>
                        <div class="special-grid spe-grid">
                            <a href="../images/foods/Fruit%20plater.jpg" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/foods/Fruit%20plater.jpg" alt="fruit plater" class="img-responsive"> </a>
                        </div>
                        <div class="clear"> </div>

                        <div class="special-grid">
                            <a href="../images/foods/Cake.jpg" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/foods/Cake.jpg" alt="vkirirom cake" class="img-responsive"> </a>
                        </div>
                        <div class="special-grid">
                            <a href="../images/foods/Chocollate%20cake.jpg" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/foods/Chocollate%20cake.jpg"  alt=" chocolate cake" class="img-responsive"> </a>
                        </div>
                        <div class="special-grid spe-grid">
                            <a href="../images/foods/IMG_5879.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/foods/IMG_5879.JPG" alt="food" class="img-responsive"> </a>
                        </div>
                        <div class="clear"> </div>
                    </div>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="testmonials">
                <div class="wrap">
                    <div class="testmonial-grid">
                        <h3>Special Ingredients :</h3>
                        <p>vKirirom resort has its own vegetable garden for special recipes. These organic vegetables make our dishes remarkably tastier than other foods. </p>
                    </div>
                </div>
            </div>
            <!---End-about---->
        </div>
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
                    <p>
                        <label>KIT</label>adapts a new style of learning with an effective new educational techniques as a boarding school.</p>
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
        <!--<script type="text/javascript">
		var imglightbox = function(){
			$('.specials .img-lightbox').lightBox();
		};

		var gridmargin = function(){
			var grid = document.getElementsByClassName('special-grid');
			for(var i=0;i<grid.length;i++){
				grid[i].style.marginBottom = "0.5%";
			};
		};
		$(document).ready(function(){
			imglightbox();
			gridmargin();
		});

	</script>-->
        <script>
            $('.lightbox').littleLightBox();
        </script>
    </div>
</body>

</html>