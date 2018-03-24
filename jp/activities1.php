<!DOCTYPE HTML>
<html>

<head>
    <title>vKirirom Pine Resort - Cambodia Resorts</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Cambodia Resort , Pine resort Cambodia, Kirirom resort, Mountain resort cambodia">
    <meta name="description" content="vKirirom Pine Resort located on top of kirirom mountain national park provides you once in a life time experiences. A lot of activities in the fresh air like Jungle trekking, horse riding, fruit picking, team building for corporation as well with new creative delicious cuisine contains organic vegetable from own farm">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="../images/HomePage/favicon.png" type="image/x-icon" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="../css/lightbox.css" rel="stylesheet" type="text/css">
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
            <a href="#" class="mfb-component__button--main-jp" data-mfb-label="Japanese">
            </a>
            <ul class="mfb-component__list">
                <li>
                    <a href="../en/activities1.php" data-mfb-label="English" class="mfb-component__button--child-en">
                    </a>
                </li>
                <li>
                    <a href="../kh/activities1.php" data-mfb-label="Khmer" class="mfb-component__button--child-kh">
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
            <!---start-top-nav---->
            <div class="top-nav">
                <div class="top-nav-left">
                    <ul>
                        <li><a href="index.php">コンセプト</a></li>
                        <li><a href="specialoffer.php">特別価格</a></li>
                        <li><a href="services.php">サービス & 施設</a></li>
                        <li class="active"><a href="activities.php">アクティビティ</a></li>
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
        <!---start-gallery----->
        <div class="gallerys">
            <div class="wrap">
                <h3>アクティビティ</h3>
                <!--Activity1-->
                <div class="gallery-grids specials">
                    <div class="gallery-grid">
                        <a class="lightbox" data-littlelightbox-group="gallery" title="" href="../images/Activity/Camping.JPG"><img src="../images/Activity/image/Camping.jpg" alt="camping in nice view of vkrirom natural resort of Cambodia"><span>view</span></a>
                        <h4>キャンプ道具</h4>
                        <p>ご自身のお車でお越しください。キャンプ場では多くの自然に囲まれながら安全にお過ごしいただけます。</p>
                        <!--<div class="gallery-button"><a href="#">Read More</a></div>-->
                    </div>
                    <div class="gallery-grid grid2">
                        <a class="lightbox" data-littlelightbox-group="gallery" title="" href="../images/Activity/BBQ.jpg"><img src="../images/Activity/image/BBQ.jpg" alt="Having romantic BBQ in vkirirom natural resort of Cambodia"><span>view</span></a>
                        <h4>バーベキュー</h4>

                        <p>バーベキューセットのレンタルをご用意しております。メニューや人数などの質問やご不明な点などがございましたらお気軽に vkirirom@pineresort.com までお問い合わせくださいませ。</p>
                        <!--<div class="gallery-button"><a href="#">Read More</a></div>-->
                    </div>
                    <!--		<div class="gallery-grid">
							<a href="#"><img src="images/Activity/KiriromRestaurant.jpg" alt=""></a>
							<h4>KHMER COOKING CLASS/ BREAD TEACHING/ TOWEL ARTS</h4>
							<p>Learn how to cook Khmer food with our chef and share it with your family.</p>
							<!--<div class="gallery-button"><a href="#">Read More</a></div>-->
                    <!--	</div> -->
                    <div class="gallery-grid">
                        <a class="lightbox" data-littlelightbox-group="gallery" title="" href="../images/Activity/TreasureHunting.jpg"><img src="../images/Activity/image/TreasureHunting.jpg" alt="happy vkirirom natural resort activity TreasureHunting"><span>view</span></a>
                        <h4>トレジャーハンティング</h4>
                        <p>ちょっとした冒険に出かけてみてはいかがですか？配布されるトレジャーマップを基に歩いていくとゴールまでの道のりにいくつかの謎が隠れています。</p>
                        <!--<div class="gallery-button"><a href="#">Read More</a></div>-->
                    </div>

                    <div class="clear"> </div>
                </div>
                <!--End Activity1-->
                <!--Activity2-->
                <div class="gallery-grids specials">
                    <div class="gallery-grid">
                        <a class="lightbox" data-littlelightbox-group="gallery" title="" href="../images/Activity/RopeClimbing.jpg"><img src="../images/Activity/image/RopeClimbing.jpg" alt="happy vkirirom natural resort activity Robe climbing"><span>view</span></a>
                        <h4>ロープクライミング</h4>
                        <p>ハーネスを結び付けて止め、そのロープを登ります。</p>
                        <!--<div class="gallery-button"><a href="#">Read More</a></div>-->
                    </div>
                    <div class="gallery-grid grid2">
                        <a class="lightbox" data-littlelightbox-group="gallery" title="" href="../images/Activity/Walkracing.JPG"><img src="../images/Activity/image/Walkracing.jpg" alt="happy vkirirom natural resort activity group walk racing"><span>view</span></a>
                        <h4>ムカデ競争</h4>
                        <p>パートナーたちと一緒に協力し合いながらゲームを行い、スピードを競います。</p>
                        <!--<div class="gallery-button"><a href="#">Read More</a></div>-->
                    </div>
                    <!-- Centipede Race : Teamwork ! The aim of this game is to reach the finish and reach the line before any team does.-->
                    <div class="gallery-grid">
                        <a class="lightbox" data-littlelightbox-group="gallery" title="" href="../images/Activity/MortorBike(250c).jpg"><img src="../images/Activity/image/MortorBike_250c_.jpg" alt="Motorbike rental service in vkiriom pine resort near Phnom Penh City"><span>View</span></a>
                        <h4>モーターバイクレンタル</h4>
                        <p>モーターバイクに乗ってキリロムの絶景を楽しむのはいかがですか？ご利用の際はレセプションスタッフにお申し付けください。</p>
                        <!--<div class="gallery-button"><a href="#">Read More</a></div>-->

                        <!--<a class="lightbox" data-littlelightbox-group="gallery" title="" href="images/Activity/Sack-race.jpg"><img src="images/Activity/Sack-race.jpg" alt=""><span>View</span></a>
							<h4>Sack Race</h4>
							<p>Let's race to the end ! Enjoy this popular race with your friends to build up friendship.</p>
							<!--<div class="gallery-button"><a href="#">Read More</a></div>-->
                    </div>
                    <div class="clear"> </div>
                </div>
                <!--End Activity2-->
                <!--Activity3-->
                <div class="gallery-grids specials">
                    <div class="gallery-grid">
                        <a class="lightbox" data-littlelightbox-group="gallery" title="" href="../images/Activity/Chambok.JPG"><img src="../images/Activity/image/Chambok.jpg" alt="memory activity to chombok waterfall from vkirirom pine resort"><span>view</span></a>
                        <h4>チョンボックの滝観光ツアー</h4>
                        <p>キリロム国立公園は雨季に複数の自然の滝があることで知られています。その中で最も美しいものはチョンボック村のもので、４０メートルの高さの滝となっています。</p>
                        <!--<div class="gallery-button"><a href="#">Read More</a></div>-->
                    </div>
                    <div class="gallery-grid grid2">
                        <a class="lightbox" data-littlelightbox-group="gallery" title="" href="../images/Activity/JungleTrekking.jpg"><img src="../images/Activity/image/JungleTrekking.jpg" alt="happy vkirirom natural resort activity Jungle trekking"><span>view</span></a>
                        <h4>ジャングルトレッキング</h4>
                        <p> 山頂には美しい松林の景色が様々な熱帯植物とともに生息しています。とてもユニークな自然の景色は多くの旅行者を惹きつけます。</p>
                        <!--<div class="gallery-button"><a href="#">Read More</a></div>-->
                    </div>
                    <div class="gallery-grid">
                        <a class="lightbox" data-littlelightbox-group="gallery" title="" href="../images/Activity/Cambodia_BuddhistTemple.png"><img src="../images/Activity/image/Cambodia_BuddhistTemple.png" alt="Historical place of cambodia near vkirirom natural resort"><span>view</span></a>
                        <h4>キリロム半日観光ツアー</h4>
                        <p>キリロム国立公園の名所を巡るツアー。シハヌーク殿下の別荘や伝統的な仏教寺院をご案内します。</p>
                        <!--<div class="gallery-button"><a href="#">Read More</a></div>-->
                    </div>
                    <div class="clear"> </div>
                </div>
                <!--End Activity3-->

                <!--Activity5-->
                <div class="gallery-grids specials">
                    <div class="gallery-grid">
                        <a class="lightbox" data-littlelightbox-group="gallery" title="" href="../images/Activity/BubbleRental.jpg"><img src="../images/Activity/image/BubbleRental.jpg" alt="customer bubble rental service in vkirirom"><span>view</span></a>
                        <h4>バブルサッカーレンタル</h4>
                        <p>バブルサッカー本来の用途以外にもバブルレースやバブル相撲といった、ここだけのクリエイティブなアクティビティをご用意しております。</p>
                        <br>
                        <!--<div class="gallery-button"><a href="#">Read More</a></div>-->
                    </div>
                    <div class="gallery-grid grid2">

                    </div>

                    <div class="clear"> </div>
                </div>
                <!--End Activity5-->
                <div class="clear"> </div>
                <div class="projects-bottom-paination">
                    <ul>
                        <li><a href="activities.php">1</a></li>
                        <li class="active"><a href="activities1.php">2</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!---End-gallery----->
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
    <!--<script type="text/javascript">
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
    </script>-->
    <script>
        $('.lightbox').littleLightBox();
    </script>
</body>

</html>