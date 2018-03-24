<!DOCTYPE HTML>
<html>

<head>
    <title>vKirirom Pine Resort - Cambodia Resorts</title>
    <meta name="keywords" content="Cambodia Resort , Pine resort Cambodia, Kirirom resort, Mountain resort cambodia">
    <meta name="description" content="vKirirom Pine Resort is a newly built Resort in Kirirom Mountain, located about 112 Km northwest of Phnom Penh Capital City and in Kompong Speu Province">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="images/HomePage/favicon.png" type="image/x-icon" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/camera.min.js"></script>
    <script type="text/javascript" src="js/camera.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/lightbox.css" media="screen" />
    <!-- build:css mfb.css -->
    <link href="css/mfb.css" rel="stylesheet">
    <!-- build:js mfb.js -->
    <script src="js/mfb.js"></script>
    <script type="text/javascript">
        jQuery(function () {
            jQuery('#camera_wrap_1').camera({
                pagination: false,
            });
        });
    </script>
    <!--strat-date-piker-->
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
    <script type="text/javascript">
        var book = document.getElementById("book");
    </script>
    <script src="js/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#datepicker,#datepicker1").datepicker();
        });
    </script>
    <!--/End-date-piker-->
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
    <script src="js/fbplugin.js"></script>
</head>

<body>
    <!-- Language Button -->
    <ul id="menu" class="mfb-component--bl mfb-zoomin" data-mfb-toggle="hover">
        <li class="mfb-component__wrap">
            <a href="#" class="mfb-component__button--main-en" data-mfb-label="English"> </a>
            <ul class="mfb-component__list">
                <li>
                    <a href="JP/index.php" data-mfb-label="Japanese" class="mfb-component__button--child-jp"> </a>
                </li>
                <li>
                    <a href="KH/index.php" data-mfb-label="Khmer" class="mfb-component__button--child-kh"> </a>
                </li>
            </ul>
        </li>
    </ul>

    <div id="book-now-button"><a class="a-book-now" href="reservation.php">Book Now</a></div>
    <!--start-header-->
    <div id="fb-root"></div>
    <div class="header">
        <div class="wrap">
            <div class="top-header">
                <div class="logo">
                    <a href="index.php"><img src="images/HomePage/vKirirom.svg " title="logo" /></a>
                </div>
                <div class="social-icons">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/vkirirom"><img src="images/facebook.svg" title="facebook" /></a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCCIu3JTn0s4UX5Kze5Hse0g"><img src="images/youtube.svg" title="youtube" /></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/vkirirom/"><img src="images/instagram.svg" title="instagram" /></a>
                        </li>
                        <li>
                            <a href="https://plus.google.com/u/0/102004631432389725270/posts"><img src="images/googleplus.svg" title="google plus" /></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/vKirirom"><img src="images/twitter.svg" title="twitter" /></a>
                        </li>
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
                        <li class="active"><a href="index.php">Concept</a></li>
                        <li><a href="specialoffer.php">Special Offers</a></li>
                        <li><a href="services.php">Services & Facilities</a></li>
                        <li><a href="gallery.php">Activities</a></li>
                        <li><a href="accommodation.php">Accommodation</a></li>
                        <li><a href="restaurant.php">Restaurant</a></li>
                        <li><a href="contact.php">Contact</a></li>
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
                        <li><a href="gallery.php">Activities</a></li>
                        <li><a href="accommodation.php">Accommodation</a></li>
                        <li><a href="restaurant.php">Restaurant</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul> <a href="#" id="pull">MENU</a> </nav>
                <div class="clear"></div>
            </div>
            <!--end drop down menu-->
            <!---End-top-nav---->
        </div>
    </div>
    <!----End-header----->
    <!--start-image-slider---->
    <div class="slider">
        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
            <div data-src="images/HomePage/slider/PineResort.JPG"> </div>
            <div data-src="images/HomePage/slider/bungalow.JPG"> </div>
            <div data-src="images/HomePage/slider/boreyR.JPG"> </div>
            <div data-src="images/HomePage/slider/boreyA.JPG"> </div>
            <div data-src="images/HomePage/slider/pipe.JPG"> </div>
            <div data-src="images/HomePage/slider/khmercottage.jpg"> </div>
            <div data-src="images/HomePage/slider/luxurytent.jpg"> </div>
        </div>
        <div class="clear"> </div>
    </div>
    <!--End-image-slider---->
    <!---start-content---->
    <div class="content">
        <!-- start online reservation-->
        <!--<div class="wrap">

			 <div class="online_reservation">
				 <div class="b_room">
					 <div class="booking_room">
						 <h4 class="booking">vKirirom Pine Resort</h4>
						 <p> </p>
					 </div>
					 <div class="reservation">
						 <ul>
							<li><h1>The whole new concept for enriching people's life for the future.</h1></li>
							 <li class="span1_of_3">
								 <div class="date_btn">
									 <form action="reservation.php" method="POST">
										 <input type="submit" value="book now"/>
									 </form>
								 </div>
							 </li>
							 <div class="clear"></div>
						 </ul>
					 </div>
					 <div class="clear"></div>
				 </div>
				 <div class="clear"></div>
			 </div>
			 </div>!-->
        <!--End reservation-->
        <div class="mid-grid">
            <div class="wrap">
                <h1>Welcome to vKirirom Pine Resort!</h1>
                <h2>'vKirirom' is the new concept for enriching people's life for the future.</h2>
                <p>We aim to provide services and an atmosphere where everyone enjoy while conserving the environment as well. Visit our restaurant to enjoy special menu our chef has to offer or stay in one of our innovative rooms.</p> <a class="button1" href="detailsCompany.php">Read More</a> </div>
        </div>
        <div class="bottom-grids">
            <div class="wrap">
                <div class="bottom-grid1">
                    <h3>Facilities & Activities</h3> <span>Some important skills that are needed for businessmen can be built with team activities.</span>
                    <p>Come up with strategy, try harder with your team members! Get together in the mountain and tighten your relationship! We prepare suitable place for group seminar and conference for company staff gathering.</p>
                    <ul>
                        <li><a href="services.php">Meeting Room</a></li>
                        <li><a href="services.php">Spa & Massage</a></li>
                        <li><a href="services.php">Swimming Pool</a></li>
                        <li><a href="services.php">Wireless Internet</a></li>
                        <li><a href="gallery.php">Team Building</a></li>
                        <li><a href="services.php">Party & Event Organizing</a></li>
                        <br> </ul>
                    <!--<a class="button" href="gallery.php">Read More</a>!--></div>
                <div class="bottom-grid2 bottom-mid">
                    <h3>Comfortable Place</h3> <span>Comfortable &nbsp &nbsp place &nbsp and &nbsp &nbsp &nbsp memorable &nbsp &nbsp stay at &nbsp our accommodation &nbsp built &nbsp amongst the pine trees.</span>
                    <p>Stay in one of our specially designed accommodation and experience the invigorating fresh air and peaceful life in the pine forests of Kirirom National Park.</p>
                    <div class="gallery">
                        <ul>
                            <li>
                                <a href="details.php#Bungalow"><img src="images/HomePage/buttomPic/image1.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="details.php#Camping"><img src="images/HomePage/buttomPic/image2.JPG" alt=""></a>
                            </li>
                            <li>
                                <a href="details.php#Luxurytent"><img src="images/HomePage/buttomPic/image3.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="details.php#Bungalow"><img src="images/HomePage/buttomPic/image4.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="details.php#Khmercottage"><img src="images/HomePage/buttomPic/image5.JPG" alt=""></a>
                            </li>
                            <li>
                                <a href="details.php#Piperoom"><img src="images/HomePage/buttomPic/image6.JPG" alt=""></a>
                            </li>
                            <div class="clear"> </div>
                        </ul>
                    </div>
                    <br>
                    <br>
                    <!-- <a class="button" href="accommodation.php">Read More</a>!--></div>
                <div class="bottom-grid1 bottom-last">
                    <h3>Modern Khmer Restaurant</h3> <span>Restaurant locates within 600m above sea level at Kirirom Mountain</span>
                    <p>Although there are many good Khmer foods in our restaurants, what makes us different is that our restaurant stands amongst the pine trees of kirirom Mountain. The sound of the wind against the pine trees gives a smoothing sound to the ears while enjoying our dishes!</p>
                    <p>Khmer food cuisine, cooked with fresh vegetables and fruits picked straight from our organic garden by our experience chef</p>
                    <p>Customers will enjoy the freshness of the air as well as the surrounding beauty of the pine trees. The greenery and the Pine View Kitchen Restaurant are extremely perfect for your vacation and holidays.</p>
                    <p>Please stopover for a cup of coffee as you visit Kirirom National Park.</p>
                    <br> <a class="button" href="restaurant.php">Read More</a> </div>
            </div>
            <!--end-wrap--->
            <!--Top 3 pic-->
            <div class="top-grids">
                <div class="wrap">
                    <div class="top-grid">
                        <a href="details.php#Camping"><img src="images/HomePage/3picMid/tent.jpg" title="Auto-camping"></a>
                        <h3>Camping</h3>
                        <p>Experience a fun and safe camping under the moon light and the twinkle stars in our camping ground or rent one of our luxury tents which has an en suite bathroom.</p> <a class="button" href="details.php#Camping">Read More</a> </div>
                    <div class="top-grid">
                        <a href="details.php#BoreyA"><img src="images/HomePage/3picMid/boreyA.jpg" title="Villa-A"></a>
                        <h3>vKirirom 2<sup>nd</sup> Home</h3>
                        <p>Our Resort provides this special offer as you will love for this suitable house that fits with a big family which you can have a party with your family and relatives during your vocation here.</p> <a class="button" href="details.php#BoreyA">Read More</a> </div>
                    <div class="top-grid last-topgrid">
                        <a href="detailsKirirom.php"><img src="images/HomePage/3picMid/kirirom.jpg" title="Jom-bork waterfall"></a>
                        <h3>Kirirom National Park</h3>
                        <p>Kirirom National Park is one of the well-known historical mountains in Cambodia, located in Kompong Spue province, 112km northwest of the Capital City (Phnom Penh).</p> <a class="button" href="detailsKirirom.php">Read More</a> </div>
                    <div class="clear"> </div>
                </div>
            </div>
            <!--end top 3 pic-->
            <!---End-content---->
            <div class="footer">
                <div class="wrap">
                    <div class="footer-grid">
                        <h3>About vKirirom</h3>
                        <p>vKirirom Pine Resort is located amongst the pine trees of Kirirom Mountain. Here at vKiriom, we try to preserve the natural beauty of the environment. Our building locations are properly studied so that we avoid cutting down many trees.</p> <a class="button2" href="detailsCompany.php">Read More</a> </div>
                    <div class="footer-grid center-grid">
                        <h3>vKirirom 2nd home</h3>
                        <ul>
                            <li><a href="http://property-vkirirom.com/about_us.php">About Us</a></li>
                            <li><a href="http://property.vkirirom.com/type_a.php">Type of property</a></li>
                            <li><a href="http://property.vkirirom.com/gallery.php">Gallery</a></li>
                            <li><a href="http://property.vkirirom.com/contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="footer-grid twitts">
                        <h3>Kirirom Institute of Technology</h3>
                        <p>
                            <label>KIT</label>adapts a new style of learning with an effective new educational techniques as a boarding school.</p> <span onclick="location='http://kit.vkirirom.com/contact.php'">Enroll here !!</span>
                        <p>New university for the future in Kirirom Mountain under the vKririom Project. An educational approach that stands amongst the forest.</p> <span onclick="location='http://kit.vkirirom.com/index.php'"> More about KIT</span> </div>
                    <div class="footer-grid">
                        <h3>DID YOU KNOW?</h3>
                        <p>Please look at the logo of vKirirom - you will find '<span style="color: orange;">v</span>' in orange and <span style="color: green;">'Kirirom'</span> in green. This orange color describes people who live in the green nature. The orange represents simplicity as of the robes worn by monks in Cambodia.</p>
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