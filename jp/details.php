<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/html">

<head>
    <title>vKirirom Pine Resort - Cambodia Resorts</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Cambodia Resort , Pine resort Cambodia, Kirirom resort, Mountain resort cambodia">
    <meta name="description" content="vKirirom Pine Resort located on top of kirirom mountain national park provides you once in a life time experiences. A lot of activities in the fresh air like Jungle trekking, horse riding, fruit picking, team building for corporation as well with new creative delicious cuisine contains organic vegetable from own farm">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="../images/HomePage/favicon.png" type="image/x-icon" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="../css/jquery.littlelightbox.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/jquery.littlelightbox.js"></script>
    <script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="../js/camera.min.js"></script>
    <script type="text/javascript" src="../js/jquery.lightbox.jp.kh.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/lightbox.css" media="screen" />
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
            <a href="#" class="mfb-component__button--main-jp" data-mfb-label="Japanese">
            </a>
            <ul class="mfb-component__list">
                <li>
                    <a href="..en/details.php" data-mfb-label="English" class="mfb-component__button--child-en">
                    </a>
                </li>
                <li>
                    <a href="../kh/details.php" data-mfb-label="Khmer" class="mfb-component__button--child-kh">
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
                    <a href="index.php"><img src="../images/HomePage/vKirirom.svg " alt="vkirirom" title="logo" /></a>
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

            <div class="top-nav">
                <div class="top-nav-left">
                    <ul>
                        <li><a href="index.php">コンセプト</a></li>
                        <li><a href="specialoffer.php">特別価格</a></li>
                        <li><a href="services.php">サービス & 施設</a></li>
                        <li><a href="activities.php">アクティビティ</a></li>
                        <li class="active"><a href="accommodation.php">宿泊施設</a></li>
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
    <!--End-header-->
    <!--start-content-->
    <div class="content">

        <div class="about-us">
            <div class="wrap">
                <div class="about-header">
                    <h3 id="Bungalow">詳細はこちら: <span class="detail_title">バンガロー</span></h3>
                    <div class="clear"> </div>
                </div>
                <div class="about-info">
                    <p>特別にデザインされた宿泊施設の１つがバンガローです。キリロムの松林の中で爽快な空気とのどかな雰囲気をお楽しみください。キングサイズのベッドとツインベッドのご用意があります。 天井扇風機 / ローカルテレビ / トイレ・バス完備(温水付き) / 電気ケトル / ヘアドライヤー / プライベートベランダ /無料Wifi / セキュリティボックス</p>
                </div>
                <div id="bungalowimg" class="specials">
                    <div class="specials-grids">
                        <div class="special-grid">
                            <a href="../images/detailsimage/bungalow/bungalow1.jpg" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/bungalow/image/bungalow1.jpg" alt="vkirirom luxury bungalow" title="vkirirom luxury bungalow"></a>
                        </div>
                        <div class="special-grid">
                            <a href="../images/detailsimage/bungalow/bungalow2.jpg" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/bungalow/image/bungalow2.jpg" alt="vkirirom luxury bungalow" title="vkirirom luxury bungalow"></a>
                        </div>
                        <div class="special-grid spe-grid">
                            <a href="../images/detailsimage/bungalow/bungalow3.jpg" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/bungalow/image/bungalow3.jpg" alt="vkirirom luxury bungalow" title="vkirirom luxury bungalow"></a>
                        </div>
                        <div class="special-grid">
                            <a href="../images/detailsimage/bungalow/bungalow4.jpg" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/bungalow/image/bungalow4.jpg" alt="vkirirom luxury bungalow" title="vkirirom luxury bungalow"></a>
                        </div>
                        <div class="special-grid ">
                            <a href="../images/detailsimage/bungalow/bungalow5.jpg" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/bungalow/image/bungalow5.jpg" alt="vkirirom luxury bungalow" title="vkirirom luxury bungalow"></a>
                        </div>
                        <div class="special-grid spe-grid">
                            <a href="../images/detailsimage/bungalow/bungalow6.jpg" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/bungalow/image/bungalow6.jpg" alt="vkirirom luxury bungalow" title="vkirirom luxury bungalow"></a>
                        </div>
                        <div class="clear"> </div>
                    </div>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="testmonials">
                <div class="wrap">
                    <div class="testmonial-grid">
                        <h3>ご予約 : </h3>
                        <p class="para">TEL : (+855)96-2222-735, (+855)78-777-343 （不動産に関するお問い合わせ）, (+855)78-777-284 （リゾート宿泊に関するお問い合わせ）
                            <br> EMAIL : info@vkirirom.com</p>
                        <h1>注 : </h1>
                        <p>*全てのレートは税金を含んだUSDで見積もりをしています。
                            <br>*ご予約は48時間以内であれば無料でキャンセルすることができます。</p>
                        <!--<a href="index.php"> "<span style="color :orange;">v</span><span style="color: green;">Kirirom </span>"</a>!-->
                    </div>
                    <div class="clear"></div>
                    <div class="BookNow-Detail-button"><a href="reservation.php">ご予約はこちら</a> </div>

                    <div class="row button-home-back">
                        <a href="index.php"><img src="../images/detailsimage/home.png" alt="Home" title="Home"></a>
                        <a href="accommodation.php"><img src="../images/detailsimage/back.png" alt="back" title="Back"></a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>








        <div class="about-us">
            <div class="wrap">
                <div class="about-header">
                    <h3 id="Luxurytent">詳細はこちら : <span class="detail_title">ラグジュアリーテント(Luxury Tent)</span></h3>
                    <div class="clear"> </div>
                </div>
                <div class="about-info">
                    <p>ラグジュアリーテント - ホテルルームのような快適さを残した、質の高いテントをお好みの方はこちらをお試しください。テントには、キングサイズベッドとトイレが設置されています。部屋のサイズは、5m×4m(20m2)です。ラグジュアリーテントは、キングサイズベッドとおしゃれなバスルームがついた現代的なテントになっています。</p>
                </div>
                <div id="luxurytentimg" class="specials">
                    <div class="specials-grids">
                        <div class="special-grid">
                            <a href="../images/detailsimage/luxurytent/luxurytent1.jpg" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/luxurytent/image/luxurytent1.jpg" alt="vkirirum luxury tent" title="vkirirom luxury tent"></a>
                        </div>
                        <div class="special-grid ">
                            <a href="../images/detailsimage/luxurytent/luxurytent2.jpg" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/luxurytent/image/luxurytent2.jpg" alt="vkirirum luxury tent" title="vkirirum luxury tent"></a>
                        </div>
                        <div class="special-grid spe-grid">
                            <a href="../images/detailsimage/luxurytent/luxurytent3.jpg" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/luxurytent/image/luxurytent3.jpg" alt="vkirirum luxury tent"  title="vkirirum luxury tent"></a>
                        </div>
                        <div class="special-grid">
                            <a href="../images/detailsimage/luxurytent/luxurytent4.jpg" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/luxurytent/image/luxurytent4.jpg" alt="vkirirom luxury tent" title="vkirirom luxuery tent"></a>
                        </div>
                        <div class="special-grid">
                            <a href="../images/detailsimage/luxurytent/luxurytent5.jpg" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/luxurytent/image/luxurytent5.jpg" alt="vkirirom luxury tent" title="vkirirom luxury tent"></a>
                        </div>
                        <div class="special-grid spe-grid">
                            <a href="../images/detailsimage/luxurytent/luxurytent6.jpg" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/luxurytent/image/luxurytent6.jpg" alt="vkirirom luxury tent" title="vkirirom luxury tent"></a>
                        </div>
                        <div class="clear"> </div>
                    </div>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="testmonials">
                <div class="wrap">
                    <div class="testmonial-grid">
                        <h3>ご予約 : </h3>
                        <p class="para">TEL : (+855)96-2222-735, (+855)78-777-343 （不動産に関するお問い合わせ）, (+855)78-777-284 （リゾート宿泊に関するお問い合わせ）
                            <br> EMAIL : info@vkirirom.com</p>
                        <h1>注 : </h1>
                        <p>* 全てのレートは税金を含んだUSDで見積もりをしています。
                            <br>* ご予約は48時間以内であれば無料でキャンセルすることができます。</p>
                    </div>
                    <div class="clear"></div>
                    <div class="BookNow-Detail-button"><a href="reservation.php">ご予約はこちら</a> </div>

                    <div class="row button-home-back">
                        <a href="index.php"><img src="../images/detailsimage/home.png" alt="Home" title="Home"></a>
                        <a href="accommodation.php"><img src="../images/detailsimage/back.png" alt="back" title="Back"></a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>








        <div class="about-us">
            <div class="wrap">
                <div class="about-header">
                    <h3 id="Piperoom">詳細はこちら : <span class="detail_title">パイプルーム(PIPE ROOM)</span></h3>
                    <div class="clear"> </div>
                </div>
                <div class="about-info">
                    <p>カンボジアや他のアジア諸国にとっても独特なデザインとなっているのが、このパイプルームです。パイプルームは、お手頃なお値段で居心地のよいオプションとなっております。普段とは一味違った経験を楽しみたい学生の方やカップルの方におすすめのオプションです。</p>
                </div>
                <div id="piperoomimg" class="specials">
                    <div class="specials-grids">
                        <div class="special-grid">
                            <a href="../images/detailsimage/piperoom/piperoom1.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/piperoom/image/piperoom1.jpg" alt="vkirirom modern piperoom" title="vkirirom modern piperoom"></a>
                        </div>
                        <div class="special-grid">
                            <a href="../images/detailsimage/piperoom/piperoom2.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/piperoom/image/piperoom2.jpg" alt="vkirirom modern piperoom" title="vkirirom modern piperoom"></a>
                        </div>
                        <div class="special-grid spe-grid">
                            <a href="../images/detailsimage/piperoom/piperoom3.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/piperoom/image/piperoom3.jpg" alt="vkirirom modern piperoom" title="vkirirom modern piperoom"></a>
                        </div>
                        <div class="special-grid">
                            <a href="../images/detailsimage/piperoom/piperoom4.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/piperoom/image/piperoom4.jpg" alt="vkirirom modern piperoom" title="vkirirom modern piperoom"></a>
                        </div>
                        <div class="special-grid">
                            <a href="../images/detailsimage/piperoom/piperoom5.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/piperoom/image/piperoom5.jpg" alt="vkirirom modern piperoom" title="vkirirom modern piperoom"></a>
                        </div>
                        <div class="special-grid spe-grid">
                            <a href="../images/detailsimage/piperoom/piperoom6.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/piperoom/image/piperoom6.jpg" alt="vkirirom modern piperoom" title="vkirirom modern piperoom"></a>
                        </div>
                        <div class="clear"> </div>
                    </div>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="testmonials">
                <div class="wrap">
                    <div class="testmonial-grid">
                        <h3>ご予約 : </h3>
                        <p class="para">TEL : (+855)96-2222-735, (+855)78-777-343 （不動産に関するお問い合わせ）, (+855)78-777-284 （リゾート宿泊に関するお問い合わせ）
                            <br> EMAIL : info@vkirirom.com</p>
                        <h1>注 : </h1>
                        <p>*全てのレートは税金を含んだUSDで見積もりをしています。
                            <br>* ご予約は48時間以内であれば無料でキャンセルすることができます。</p>
                    </div>
                    <div class="clear"></div>
                    <div class="BookNow-Detail-button"><a href="reservation.php">ご予約はこちら</a> </div>

                    <div class="row button-home-back">
                        <a href="index.php"><img src="../images/detailsimage/home.png" alt="Home" title="Home"></a>
                        <a href="accommodation.php"><img src="../images/detailsimage/back.png" alt="back" title="Back"></a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>

        <div class="about-us">
            <div class="wrap">
                <div class="about-header">
                    <h3 id="Khmercottage">詳細はこちら :<span class="detail_title">クメールコテージ</span></h3>
                    <div class="clear"> </div>
                </div>
                <div class="about-info">
                    <p>新鮮な空気に囲まれた本場のカンボジア伝統小屋を体験したい方はこちら。自然の素材で彩られたクメール農家の家に泊まることができます。 1つ1つのコテージにはツインベッドが設置されています。キリロム山にある自然豊かな松林の空気を楽しみたい学生やカップル に適しています。 部屋のサイズは、3m×4m(12 m2)です。</p>
                </div>
                <div id="cottageimg" class="specials">
                    <div class="specials-grids">
                        <div class="special-grid">
                            <a href="../images/detailsimage/khmercottage/khmercottage1.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/khmercottage/image/khmercottage1.jpg" alt="vkirirom traditional khmer cottage" title="vkirirom traditional khmer cottage"></a>
                        </div>
                        <div class="special-grid">
                            <a href="../images/detailsimage/khmercottage/khmercottage2.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/khmercottage/image/khmercottage2.jpg" alt="vkirirom traditional khmer cottage" title="vkirirom traditional khmer cottage"></a>
                        </div>
                        <div class="special-grid spe-grid">
                            <a href="../images/detailsimage/khmercottage/khmercottage3.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/khmercottage/image/khmercottage3.jpg" alt="vkirirom traditional khmer cottage" title="vkirirom traditional khmer cottage"></a>
                        </div>
                        <div class="special-grid ">
                            <a href="../images/detailsimage/khmercottage/khmercottage4.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/khmercottage/image/khmercottage4.jpg" alt="vkirirom traditional khmer cottage" title="vkirirom traditional khmer cottage"></a>
                        </div>
                        <div class="special-grid ">
                            <a href="../images/detailsimage/khmercottage/khmercottage5.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/khmercottage/image/khmercottage5.jpg" alt="vkirirom traditional khmer cottage" title="vkirirom traditional khmer cottage"></a>
                        </div>
                        <div class="special-grid spe-grid">
                            <a href="../images/detailsimage/khmercottage/khmercottage6.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/khmercottage/image/khmercottage6.jpg" alt="vkirirom traditional khmer cottage" title="vkirirom traditional khmer cottage"></a>
                        </div>
                        <div class="clear"> </div>
                    </div>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="testmonials">
                <div class="wrap">
                    <div class="testmonial-grid">
                        <h3>ご予約 : </h3>
                        <p class="para">TEL : (+855)96-2222-735, (+855)78-777-343 （不動産に関するお問い合わせ）, (+855)78-777-284 （リゾート宿泊に関するお問い合わせ）
                            <br> EMAIL : info@vkirirom.com</p>
                        <h1>注 : </h1>
                        <p> *全てのレートは税金を含んだUSDで見積もりをしています。
                            <br>* ご予約は48時間以内であれば無料でキャンセルすることができます。 </p>
                    </div>
                    <div class="clear"></div>
                    <div class="BookNow-Detail-button"><a href="reservation.php">ご予約はこちら</a> </div>

                    <div class="row button-home-back">
                        <a href="index.php"><img src="../images/detailsimage/home.png" alt="Home" title="Home"></a>
                        <a href="accommodation.php"><img src="../images/detailsimage/back.png" alt="back" title="Back"></a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>









        <div class="about-us">
            <div class="wrap">
                <div class="about-header">
                    <h3 id="BoreyA">詳細はこちら : <span class="detail_title">ヴィラスイート</span></h3>
                    <div class="clear"> </div>
                </div>
                <div class="about-info">
                    <p>
                        ロフトの位置にはシングルベットが二つご用意されており、大家族にぴったりです。現代的デザインが施され、キッチン、バスルーム、シャワールームが完備しています。 広々としたリビングルーム、太陽や数々の星の下にあるBBQパーティー屋上でゆっくりとお過ごしいただけます。
                    </p>
                </div>
                <div id="boreyaimg" class="specials">
                    <div class="specials-grids">
                        <div class="special-grid">
                            <a href="../images/detailsimage/boreyA/boreyA1.jpg" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/boreyA/image/boreyA1.jpg" alt="borey room type A" title="borey room type A"></a>
                        </div>
                        <div class="special-grid">
                            <a href="../images/detailsimage/boreyA/boreyA2.jpg" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/boreyA/image/boreyA2.jpg" alt="borey room type A" title="borey room type A"></a>
                        </div>
                        <div class="special-grid spe-grid">
                            <a href="../images/detailsimage/boreyA/boreyA3.jpg" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/boreyA/image/boreyA3.jpg" alt="borey room type A" title="borey room type A"></a>
                        </div>
                        <div class="special-grid">
                            <a href="../images/detailsimage/boreyA/boreyA4.jpg" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/boreyA/image/boreyA4.jpg" alt="borey room type A" title="borey room type A"></a>
                        </div>
                        <div class="special-grid">
                            <a href="../images/detailsimage/boreyA/boreyA5.jpg" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/boreyA/image/boreyA5.jpg" alt="borey room type A" title="borey room type A"></a>
                        </div>
                        <div class="special-grid spe-grid">
                            <a href="../images/detailsimage/boreyA/boreyA6.jpg" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/boreyA/image/boreyA6.jpg" alt="borey room type A" title="borey room type A"></a>
                        </div>
                        <div class="clear"> </div>
                    </div>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="testmonials">
                <div class="wrap">
                    <div class="testmonial-grid">
                        <h3>ご予約 : </h3>
                        <p class="para">TEL : (+855)96-2222-735, (+855)78-777-343 （不動産に関するお問い合わせ）, (+855)78-777-284 （リゾート宿泊に関するお問い合わせ）
                            <br> EMAIL : info@vkirirom.com</p>
                        <h1>注 : </h1>
                        <p>*全てのレートは税金を含んだUSDで見積もりをしています。
                            <br>* ご予約は48時間以内であれば無料でキャンセルすることができます。</p>
                    </div>
                    <div class="clear"></div>
                    <div class="BookNow-Detail-button"><a href="reservation.php">ご予約はこちら</a> </div>

                    <div class="row button-home-back">
                        <a href="index.php"><img src="../images/detailsimage/home.png" alt="Home" title="Home"></a>
                        <a href="accommodation.php"><img src="../images/detailsimage/back.png" alt="back" title="Back"></a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>


        <div class="about-us">
            <div class="wrap">
                <div class="about-header">
                    <h3 id="BoreyR">詳細はこちら : <span class="detail_title">ヴィラジャスミン</span></h3>
                    <div class="clear"> </div>
                </div>
                <div class="about-info">
                    <p>ヴィラジャスミン にはキングサイズベットとダイニングテーブル、トイレ&シャワールームがございます。お二人様がゆったりとくつろいで頂けるようなお部屋になっております。
                    </p>
                </div>
                <div id="boreyaimg" class="specials">
                    <div class="specials-grids">
                        <div class="special-grid">
                            <a href="../images/detailsimage/boreyR/boreyR1.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/boreyR/image/boreyR1.jpg" alt="vkirirom borey type R" title="vkirirom borey type R"></a>
                        </div>
                        <div class="special-grid">
                            <a href="../images/detailsimage/boreyR/boreyR2.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/boreyR/image/boreyR2.jpg" alt="vkirirom borey type R" title="vkirirom borey type R"></a>
                        </div>
                        <div class="special-grid spe-grid">
                            <a href="../images/detailsimage/boreyR/boreyR3.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/boreyR/image/boreyR3.jpg" alt="vkirirom borey type R" title="vkirirom borey type R"></a>
                        </div>
                        <div class="special-grid">
                            <a href="../images/detailsimage/boreyR/boreyR4.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/boreyR/image/boreyR4.jpg" alt="vkirirom borey type R" title="vkirirom borey type R"></a>
                        </div>
                        <div class="special-grid">
                            <a href="../images/detailsimage/boreyR/boreyR5.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/boreyR/image/boreyR5.JPG" alt="vkirirom borey type R" title="vkirirom borey type R"></a>
                        </div>
                        <div class="special-grid spe-grid">
                            <a href="../images/detailsimage/boreyR/boreyR6.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/boreyR/image/boreyR6.jpg" alt="vkirirom borey type R" title="vkirirom borey type R"></a>
                        </div>
                        <div class="clear"> </div>
                    </div>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="testmonials">
                <div class="wrap">
                    <div class="testmonial-grid">
                        <h3>ご予約 : </h3>
                        <p class="para">TEL : (+855)96-2222-735, (+855)78-777-343 （不動産に関するお問い合わせ）, (+855)78-777-284 （リゾート宿泊に関するお問い合わせ）
                            <br> EMAIL : info@vkirirom.com</p>
                        <h1>注 : </h1>
                        <p>*全てのレートは税金を含んだUSDで見積もりをしています。
                            <br>* ご予約は48時間以内であれば無料でキャンセルすることができます</p>
                    </div>
                    <div class="clear"></div>
                    <div class="BookNow-Detail-button"><a href="reservation.php">ご予約はこちら</a> </div>

                    <div class="row button-home-back">
                        <a href="index.php"><img src="../images/detailsimage/home.png" alt="Home" title="Home"></a>
                        <a href="accommodation.php"><img src="../images/detailsimage/back.png" alt="back" title="Back"></a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>


        <div class="about-us">
            <div class="wrap">
                <div class="about-header">
                    <h3 id="Camping">詳細はこちら : <span class="detail_title">野外キャンプ</span></h3>
                    <div class="clear"> </div>
                </div>
                <div class="about-info">
                    <p>ご自身のお車でお越しください。キャンプ場では多くの自然に囲まれながら安全にお過ごしいただけます。キャンプ場はフェンスに囲まれ、24時間対応のセキュリティスタッフが常駐しています。</p>
                </div>
                <div id="campingimg" class="specials">
                    <div class="specials-grids">
                        <div class="special-grid">
                            <a href="../images/detailsimage/camping/camping1.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/camping/image/camping1.jpg" alt="vkirirom auto camping" title="vkirirom auto camping"></a>
                        </div>
                        <div class="special-grid">
                            <a href="../images/detailsimage/camping/camping2.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/camping/image/camping2.jpg" alt="vkirirom auto camping" title="vkirirom auto camping"></a>
                        </div>
                        <div class="special-grid spe-grid">
                            <a href="../images/detailsimage/camping/camping3.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/camping/image/camping3.jpg" alt="vkirirom auto camping" title="vkirirom auto camping"></a>
                        </div>
                        <div class="special-grid">
                            <a href="../images/detailsimage/camping/camping4.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/camping/image/camping4.jpg" alt="vkirirom auto camping" title="vkirirom auto camping"></a>
                        </div>
                        <div class="special-grid">
                            <a href="../images/detailsimage/camping/camping5.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/camping/image/camping5.jpg" alt="vkirirom auto camping" title="vkirirom auto camping"></a>
                        </div>
                        <div class="special-grid spe-grid">
                            <a href="../images/detailsimage/camping/camping6.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/detailsimage/camping/image/camping6.jpg" alt="vkirirom auto camping" title="vkirirom auto camping"></a>
                        </div>
                        <div class="clear"> </div>
                    </div>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="testmonials">
                <div class="wrap">
                    <div class="testmonial-grid">
                        <h3>特徴</h3>
                        <h1>エコフレンドリー</h1>
                        <p class="para">vKirirom Pine Resortでは、多くの木を切らないように工夫されています。そのため、木をそのままの形で残したキャンプ場を体験していただけます。</p>
                        <h1>安全性を重視</h1>
                        <p>このキャンプ場は、たくさんの自然に囲まれていますがお客様の安全性に十分配慮をしています。24時間対応のセキュリティスタッフが常駐し、全てフェンスで囲まれています。また、夜間は十分なライトを設置しています。貴重品は車の中で保管を行ってください。</p>
                        <h3>ご予約 : </h3>
                        <p class="para">TEL : (+855)96-2222-735, (+855)78-777-343 （不動産に関するお問い合わせ）, (+855)78-777-284 （リゾート宿泊に関するお問い合わせ）
                            <br> EMAIL : info@vkirirom.com</p>
                        <h1>注 : </h1>
                        <p>全てのレートは税金を含んだUSDで見積もりをしています。
                            <br>* ご予約は48時間以内であれば無料でキャンセルすることができます。</p>
                    </div>
                    <h1 style="text-align: center;">施設/ご注意</h1>
                    <div class="no_center">
                        <hr>
                        <h1>電気</h1>
                        <br>
                        <ul style="ist-style-type:none;">
                            <li>12m*12m ------ &nbsp;&nbsp;&nbsp; lot220V*2.5 (例。ライト、携帯電話,パソコン)</li>
                            <li>無料サイト ------ &nbsp;&nbsp;&nbsp; (例。ライト、携帯電話)</li>
                        </ul>
                        <br>
                        <h1>水道</h1>
                        <br>
                        <ul style="list-style-type: none;">
                            <li>完全にろ過された水道水を飲むことができますが、</li>
                            <li> お客様には飲料水をご購入されることをお勧めします。</li>
                        </ul>
                        <br>
                        <h1>ゴミ</h1>
                        <br>
                        <ul style="list-style-type: none;">
                            <li>リサイクルのためボミの分別にご協力ください。</li>
                            <li>リサイクルすることができないゴミは捨てていただくようお願いたします。</li>
                        </ul>
                        <br>
                        <h1>キャンプファイヤー</h1>
                        <br>
                        <ul style="list-style-type: none;">
                            <li>キャンプファイヤーは指定された場所のみ許可されています。</li>
                            <li>建物内での火の使用に関しては、一度受付にご連絡ください。建物内やキャンプ場以外の火の使用は禁止されています。</li>
                        </ul>
                        <br>
                        <h1>キャンピングカー</h1>
                        <br>
                        <ul style="list-style-type: none;">
                            <li>12m x 12mのキャンピングサイトに駐車スペースを用意しています。 (一台のみになります) 。</li>
                            <li>キャンプ場の外では自由に駐車場をお使いになれます。</li>
                        </ul>
                        <br>
                        <h1>雨季</h1>
                        <br>
                        <ul style="list-style-type: none;">
                            <li>キリロムでは、雨が激しく降った場合、快適ではありません。</li>
                            <li>事前にご連絡することをおすすめいたします。ご連絡いただいた際には、雨季にタープテントを借りることがでいます。</li>
                        </ul>
                        <br>
                        <h1>お食事</h1>
                        <ul style="list-style-type:none;">
                            <li>キャンプ場では、BBQをお楽しみいただけます。</li>
                            <li>他のお食事の場合は、キャンプ場の後ろにあるキッチンをお使いください。</li>
                        </ul>
                        <br>
                        <ul style="list-style-type: none;">
                            <li>リゾートではケータリングサービスも行っております。こちらの番号へお問い合わせください。Tel:(+855)78-777-284</li>
                            <li>BBQセットのレンタルも行っております。</li>
                            <li> リゾートにてBBQ用の肉のご購入を希望される場合には、事前にリゾートへご連絡ください。</li>
                        </ul>
                        <br>
                        <h1>ご予約に関する質問/ サービス/ アクティビティ:</h1>
                    </div>
                    <div class="clear"></div>
                    <div class="BookNow-Detail-button"><a href="reservation.php">ご予約はこちら</a> </div>

                    <div class="row button-home-back">
                        <a href="index.php"><img src="../images/detailsimage/home.png" alt="Home" title="Home"></a>
                        <a href="accommodation.php"><img src="../images/detailsimage/back.png" alt="back" title="Back"></a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
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
						<p>vKiriromのロゴを見てください <span style="color: orange;">’v’</span>  はオレンジ色、 <span style="color: green;">'Kirirom'</span> は緑色でできていることが分かります。このオレンジ色は緑の自然の中に住む人たちを表しています。また、オレンジは、カンボジアの僧侶が着ている簡素なロープも表しています。</p> 
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
		var specials = $('.specials');
		for(var i=0;i<specials.length;i++){
			var imggroup = specials[i].getAttribute("id");
			$('#'+imggroup+' '+'.img-lightbox').lightBox();
		};
	};
	$(document).ready(function(){
		imglightbox();
	});
</script>-->
    <script>
        $('.lightbox').littleLightBox();
    </script>
</body>

</html>