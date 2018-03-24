<!DOCTYPE HTML>
<html>

<head>
    <title>vKirirom Pine Resort - Cambodia Resorts</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Cambodia Resort , Pine resort Cambodia, Kirirom resort, Mountain resort cambodia">
    <meta name="description" content="vKirirom Pine Resort located on top of kirirom mountain national park provides you once in a life time experiences. A lot of activities in the fresh air like Jungle trekking, horse riding, fruit picking, team building for corporation as well with new creative delicious cuisine contains organic vegetable from own farm">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="../images/HomePage/favicon.png" type="image/x-icon" />
    <link href="../css/lightbox.css" rel="stylesheet" type="text/css">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="../js/jquery.min.js"></script>
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
            <a href="#" class="mfb-component__button--main-jp" data-mfb-label="Japanese">
            </a>
            <ul class="mfb-component__list">
                <li>
                    <a href="../en/reservation.php" data-mfb-label="English" class="mfb-component__button--child-en">
                    </a>
                </li>
                <li>
                    <a href="../kh/reservation.php" data-mfb-label="Khmer" class="mfb-component__button--child-kh">
                    </a>
                </li>
            </ul>
        </li>
    </ul>

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
                        <li><a href="contact.php">お問い合わせ</a></li>
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
                        <li><a href="index.php">コンセプト</a></li>
                        <li><a href="specialoffer.php">特別価格</a></li>
                        <li><a href="services.php">サービス &施設</a></li>
                        <li><a href="activities.php">アクティビティ</a></li>
                        <li><a href="accommodation.php">宿泊施設</a></li>
                        <li><a href="restaurant.php">レストラン</a></li>
                        <li><a href="contact.php">お問い合わせ</a></li>
                        <div class="clear"> </div>
                    </ul>
                    <a href="#" id="pull">メニュー</a>
                </nav>
                <div class="clear"></div>
            </div>
            <!--end drop down menu-->
            <!---End-top-nav-->
        </div>
    </div>
    <!--End-header-->
    <!---Start Reservation-->
    <div class="clear"> </div>
    <div class="hbe-bws" style="padding:40px;">
        <section id="hbe-bws-page">
            <div id="hbe-bws-wrapper"></div>
        </section>
    </div>
    <!--reservation script code-->
    <link type="text/css" rel="stylesheet" href="//book.securebookings.net/css/app.css" />

    <script type="text/javascript" src="//book.securebookings.net/js/widget.all.js"></script>
    <script type="text/javascript" src="//book.securebookings.net/widgetCustomize?lang=en&widgetType=Widget&id=ea3bbb2b-8b09-45cb-b465-7d4d5c9c6626&ajax=true"></script>
    <!--end reservation code-->
    <!---End Reservation script code-->
    <div class="clear"> </div>

    <!---start-footer-->
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
    <!---End-footer-->
    <script type="text/javascript">
        var imglightbox = function () {
            $('.specials .img-lightbox').lightBox();
        };

        var gridmargin = function () {
            var grid = document.getElementsByClassName('special-grid');
            for (var i = 0; i < grid.length; i++) {
                grid[i].style.marginBottom = "0.5%";
            };
        };
        $(document).ready(function () {
            imglightbox();
            gridmargin();
        });
    </script>
</body>

</html>