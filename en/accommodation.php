<!DOCTYPE HTML>
<html>

<head>
    <title>vKirirom Pine Resort - Cambodia Resorts</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Cambodia Resort , Pine resort Cambodia, Kirirom resort, Mountain resort cambodia">
    <meta name="description" content="vKirirom Pine Resort located on top of kirirom mountain national park provides you once in a life time experiences. A lot of activities in the fresh air like Jungle trekking, horse riding, fruit picking, team building for corporation as well with new creative delicious cuisine contains organic vegetable from own farm">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="images/HomePage/favicon.png" type="image/x-icon" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="../js/camera.min.js"></script>
    <script type="text/javascript" src="../js/jquery.lightbox.js"></script>
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
    <!--strat-date-piker-->
    <link rel="stylesheet" type="text/css" href="../css/jquery-ui.css" />
    <script type="text/javascript">
        var book = document.getElementById("book");
    </script>
    <script src="../js/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#datepicker,#datepicker1").datepicker();
        });
    </script>
    <!--/End-date-piker-->
    <script src="../js/fbplugin.js"></script>
</head>

<body>
    <!-- Language Button -->
    <ul id="menu" class="mfb-component--bl mfb-zoomin" data-mfb-toggle="hover">
        <li class="mfb-component__wrap">
            <a href="#" class="mfb-component__button--main-en" data-mfb-label="English"></a>
            <ul class="mfb-component__list">
                <li>
                    <a href="../jp/accommodation.php" data-mfb-label="Japanese" class="mfb-component__button--child-jp"></a>
                </li>
                <li>
                    <a href="../kh/accommodation.php" data-mfb-label="Khmer" class="mfb-component__button--child-kh"></a>
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
                <div class="clear"></div>
            </div>
            <!--start-top-nav-->
            <div class="top-nav">
                <div class="top-nav-left">
                    <ul>
                        <li><a href="index.php">Concept</a></li>
                        <li><a href="specialoffer.php">Special Offers</a></li>
                        <li><a href="services.php">Services & Facilities</a></li>
                        <li><a href="activities.php">Activities</a></li>
                        <li class="active"><a href="accommodation.php">Accommodation</a></li>
                        <li><a href="vkiriromCalendar.php">Price Calendar</a></li>                                                                        
                        <li><a href="restaurant.php">Restaurant</a></li>
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
                        <li class="active"><a href="index.php">Concept</a></li>
                        <li><a href="specialoffer.php">Special Offers</a></li>
                        <li><a href="services.php">Services & Facilities</a></li>
                        <li><a href="activities.php">Activities</a></li>
                        <li><a href="accommodation.php">Accommodation</a></li>
                        <li><a href="vkiriromCalendar.php">Price Calendar</a></li>                                                                        
                        <li><a href="restaurant.php">Restaurant</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="vkclub.php">vKclub</a></li>
                        <div class="clear"> </div>
                    </ul> <a href="#" id="pull">Menu</a> </nav>
                <div class="clear"></div>
            </div>
            <!--end drop down menu-->
            <!---End-top-nav---->
        </div>
    </div>
    <!----End-header----->
    <!---start-content---->
    <div class="content">
        <div class="clear"></div>
        <!-start-gallery-->
        <div class="gallerys">
            <div class="wrap">
                <h3>Accommodation</h3>
                
                <div class="clear"></div>
                <div class="gallery-grids">
                    <div class="gallery-grid">
                        <a href="details.php#BoreyR"><img src="../images/Accommodation/boreyR.JPG" alt="beautiful boreyR in vkirirom natural resort"><span>see detail</span></a> <a href="details.php#BoreyR"><h4>Villa Jasmine</h4></a>
                        <p> Studio designed holiday homes for everyone. With a spacious built up area of 36 sqaure meters, these units are perfect for couples or small families wanting a private retreat away from the city.<strong>...</strong></p>
                        <div class="gallery-button"><a href="details.php#BoreyR">Read More</a></div>
                        <div class="BookNow-button"><a href="reservation.php">Book Now</a></div>
                        <div class="clear"></div>
                    </div>
                    
                    
                    
                    <div class="gallery-grid grid2">
                        <a href="details.php#BoreyA"><img src="../images/Accommodation/1villaA1.jpg" alt="beautiful boreyA in vkirirom natural resort of Cambodia"><span>see detail</span></a> <a href="details.php#BoreyA"><h4>Villa Suite</h4></a>
                        <p>You will love the house with 2 bedrooms, 1 bathroom, 1 kitchen, and 110 sqm of house building. It is suitable for a big family. Especially rooftop veranda<strong>...</strong></p>
                        <div class="gallery-button"><a href="details.php#BoreyA">Read More</a></div>
                        <div class="BookNow-button"><a href="reservation.php">Book Now</a></div>
                        <div class="clear"></div>
                    </div>
                    <div class="gallery-grid">
                        <a href="details.php#Bungalow"><img src="../images/Accommodation/bungalowAcc.jpg" alt="beautiful bungalow in vkirirom natural resort"><span>see detail</span></a> <a href="details.php#Bungalow"><h4>Bungalow</h4></a>
                        <p>Stay in one of our specially designed bungalows and experience the invigorating fresh air and peaceful life in the pine forests of kirirom. Relax in our king size or twin-bed bungalows<strong>...</strong></p>
                        <div class="gallery-button"><a href="details.php#Bungalow">Read More</a></div>
                        <div class="BookNow-button"><a href="reservation.php">Book Now</a></div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"> </div>
                </div>
                <div class="gallery-grids">
                    <div class="gallery-grid">
                        <a href="details.php#Luxurytent"><img src="../images/Accommodation/luxaryTent.jpg" alt="beautiful view luxury tent in vkirirom natural resort"><span>see detail</span></a> <a href="details.php#Luxurytent"><h4>Luxury Tent</h4></a>
                        <p>Luxury Tent-Stay in style and comfort in a high quality tent with the comfort of a hotel room. The tents come with a king size bed and en suite bathroom<strong>...</strong></p>
                        <div class="gallery-button"><a href="details.php#Luxurytent">Read More</a></div>
                        <div class="BookNow-button"><a href="reservation.php">Book Now</a></div>
                        <div class="clear"></div>
                    </div>
                    
                    <div class="gallery-grid grid2">
                        <a href="details.php#Khmercottage"><img src="../images/Accommodation/cottage.JPG" alt="beautiful traditional khmer cottage in vkirirom natural resort"><span>see detail</span></a> <a href="details.php#Khmercottage"><h4>Khmer Cottage</h4></a>
                        <p> Experience a real Khmer traditional hut with the fresh and cool breeze. Stay in a Khmer farmer's open-style house nicely decorated with natural materials<strong>...</strong></p>
                        <div class="gallery-button"><a href="details.php#Khmercottage">Read More</a></div>
                        <div class="BookNow-button"><a href="reservation.php">Book Now</a></div>
                        <div class="clear"></div>
                    </div>

                    <div class="gallery-grid">
                        <a href="details.php#Piperoom"><img src="../images/Accommodation/pipeRoom.jpg" alt="beautiful piperoom in vkirirom natural resort"><span>see detail</span></a> <a href="details.php#Piperoom"><h4>Pipe Room</h4></a>
                        <p>A unique design to Cambodia and other Asian countries, the Pipe Rooms are affordable and cozy option. Ideal for students and couples who want to experience a creatively<strong>...</strong> </p>
                        <div class="gallery-button"><a href="details.php#Piperoom">Read More</a></div>
                        <div class="BookNow-button"><a href="reservation.php">Book Now</a></div>
                        <div class="clear"></div>
                    </div>
                    
                    <div class="clear"> </div>
                </div>
                <div class="clear"></div>
                <div class="gallery-grids">
                    <div class="gallery-grid">
                        <a href="details.php#Camping"><img src="../images/Accommodation/tent.jpg" alt="beautiful view camping in vkirirom natural resort"><span>see detail</span></a> <a href="details.php#Camping"><h4>Auto Camping</h4></a>
                        <p> Come with your car and camp amongst nature with your safety in mind. Our campsite has perimeter fence and 24 hours security staff on duty. Simply drive your car to Kirirom<strong>...</strong></p>
                        <div class="gallery-button"><a href="details.php#Camping">Read More</a></div>
                        <div class="BookNow-button"><a href="reservation.php">Book Now</a></div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                    <div class="projects-bottom-paination">
                        <!--			<ul>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>z
						</ul>      -->
                    </div>
                </  div>
            </div>
        </div>
        <!---End-gallery----->
        <!---End-content---->
        <!---start-footer---->
        <div class="footer">
            <div class="wrap">
                <div class="footer-grid">
                    <h3>About vKirirom</h3>
                    <p>vKirirom Pine Resort is located amongst the pine trees of Kirirom Mountain. Here at vKiriom, we try to preserve the natural beauty of the environment. Our building locations are properly studied so that we avoid cutting down many trees.</p> <a class="button2" href="detailsCompany.php">Read More</a> </div>
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
                        <label>KIT</label>adapts a new style of learning with an effective new educational techniques as a boarding school.</p> <span onclick="location='http://kit.vkirirom.com/contact.php'">Enroll here !!</span>
                    <p>New university for the future in Kirirom Mountain under the vKririom Project. An educational approach that stands amongst the forest.</p> <span onclick="location='http://kit.vkirirom.com/index.php'"> More about KIT</span> </div>
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