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
        <link rel="icon" href="../images/HomePage/favicon.png" type="image/x-icon" />
        <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../css/validate.css" rel="stylesheet" type="text/css" media="all" />


        <!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">-->


        <link href="../css/formValidation.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <!--<script type="text/javascript" src="js/jquery.min.js"></script>-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>
        <script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="../js/camera.min.js"></script>
        <script type="text/javascript" src="../js/jquery.lightbox.jp.kh.js"></script>
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
            #map-canvas {
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
                <a href="#" class="mfb-component__button--main-jp" data-mfb-label="Japanese">
                </a>
                <ul class="mfb-component__list">
                    <li>
                        <a href="../en/contact.php" data-mfb-label="English" class="mfb-component__button--child-en">
                        </a>
                    </li>
                    <li>
                        <a href="../kh/contact.php" data-mfb-label="Khmer" class="mfb-component__button--child-kh">
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <div id="book-now-button"><a style="color:white;" href="reservation.php">ご予約</a></div>

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
                            <li id="book-button"><a href="reservation.php">ご予約</a></li>
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
                            <li><a href="index.php">コンセプト</a></li>
                            <li><a href="specialoffer.php">特別価格</a></li>
                            <li><a href="services.php">サービス & 施設</a></li>
                            <li><a href="activities.php">アクティビティ</a></li>
                            <li><a href="accommodation.php">宿泊施設</a></li>
                        <li><a href="vkiriromCalendar.php">カレンダ</a></li>
                        <li><a href="restaurant.php">レストラン</a></li>
                            <li class="active"><a href="contact.php">お問い合わせ</a></li>
                            <div class="clear"> </div>
                        </ul>
                    </div>
                    <div class="top-nav-right">
                        <ul>
                            <li><a href="reservation.php">ご予約</a></li>
                        </ul>
                    </div>
                    <div class="clear"> </div>
                </div>
                <!--Start import drop down menu-->
                <div class="top-nav-1">
                    <nav class="dropdown">
                        <ul>
                            <li class="active"><a href="index.php">コンセプト</a></li>
                            <li><a href="specialoffer.php">特別価格</a></li>
                            <li><a href="services.php">サービス &施設</a></li>
                            <li><a href="activities.php">アクティビティ</a></li>
                            <li><a href="accommodation.php">宿泊施設</a></li>
                        <li><a href="vkiriromCalendar.php">カレンダ</a></li>
                        <li><a href="restaurant.php">レストラン</a></li>
                            <li><a href="contact.php">お問い合わせ</a></li>
                            <div class="clear"> </div>
                        </ul>
                        <a href="#" id="pull">メニュー</a>
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
                                <p>vKirirom Pine Resort is 112 kms southwest of Phnom Penh, located about 30 kms to the west of National Highway #4. On the bottom of Kirirom Mountain, you will find SOKIMEX with Kirirom Mart along the National Highway #4.</p>
                                <br>
                                <p>Resort: <a href="#" style="color: #816943">+855 78 777 284</a></p>
                                <p>Sale: <a href="#" style="color: #816943">+855 78 777 343 / 78 777 346</a></p>
                                <p>Email: <span><b><i><a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&source=mailto&to=info@vKirirom.com" target="_blank">info@vKirirom.com</a></i></b></p>
				   		<p>Follow on: <span><a href="https:/www.facebook.com/vkirirom">Facebook</a></span>, 
<!--                            <span><a href="#">Google+</a></span>, -->
                            <span><a href="https://www.instagram.com/vkirirom/">Instagram</a></span>, <span><a href="https://twitter.com/vKirirom">Twitter</a></span></p>
                            </div>
                        </div>
                        <div class="col span_2_of_3">
                            <div class="contact-form">
                                <h3>お問い合わせ</h3>
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
                            <h3>vKiriromについて</h3>
                            <p>vKirirom Pine Resortはキリロム山の松林の中に位置しています。vKiriromでは、環境の美しさをそのまま保存できるようにしています。私たちの多くの木を切ることのないよう建設地を調査しています。</p>
                            <a class="button2" href="detailsCompany.php">続きはこちら</a>
                        </div>
                        <div class="footer-grid center-grid">
                            <h3>vKirirom 2nd ホーム</h3>
                            <ul>
                                <li><a href="http://property.vkirirom.com/about_us.php">私たちについて</a></li>
                                <li><a href="http://property.vkirirom.com/type_a.php">不動産の種類</a></li>
                                <li><a href="http://property.vkirirom.com/gallery.php">ギャラリー</a></li>
                                <li><a href="http://property.vkirirom.com/contact.php">連絡先</a></li>
                            </ul>
                        </div>
                        <!--KIT information-->
                        <div class="footer-grid twitts">
                            <h3>キリロム工科大学</h3>
                            <p>vKiriromには、2014年に創設されたキリロム工科大学 (KIT)があります。主に情報技術(IT)分野で、新興国のリーダー育成を目指す全寮制の大学です。</p>
                            <span onclick="location='http://kit.vkirirom.com/contact.php'">入学希望者はこちら！</span>
                            <p>リゾートと併設することにより豊かな創造性や社会性を育み、同時に産学連携を実現します。</p>
                            <span onclick="location='http://kit.vkirirom.com/index.php'"> KITについてより詳しく知りたい方はこちら</span>
                        </div>
                        <div class="footer-grid">
                            <h3>知っていましたか？</h3>
                            <p>vKiriromのロゴを見てください <span style="color: orange;">’v’</span> はオレンジ色、 <span style="color: green;">'Kirirom'</span> は緑色でできていることが分かります。このオレンジ色は緑の自然の中に住む人たちを表しています。また、オレンジは、カンボジアの僧侶が着ている簡素なロープも表しています。</p>
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