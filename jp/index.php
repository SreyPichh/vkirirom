<!DOCTYPE HTML>
<html>

<head>
    <title>vKirirom Pine Resort - Cambodia Resorts</title>
    <meta charset="utf-8">
    <meta name="keywords" content="Cambodia Resort , Pine resort Cambodia, Kirirom resort, Mountain resort cambodia">
    <meta name="description" content="vKirirom Pine Resort located on top of kirirom mountain national park provides you once in a life time experiences. A lot of activities in the fresh air like Jungle trekking, horse riding, fruit picking, team building for corporation as well with new creative delicious cuisine contains organic vegetable from own farm">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="../images/HomePage/favicon.png" type="image/x-icon" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="../css/slider.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="../js/camera.min.js"></script>
    <script type="text/javascript" src="../js/jquery.lightbox.jp.kh.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/lightbox.css" media="screen" />
    <!-- build:css mfb.css -->
    <link href="../css/mfb.css" rel="stylesheet">
    <!-- build:js mfb.js -->
    <script src="../js/mfb.js"></script>

    <script type="text/javascript">
        jQuery(function () {
            jQuery('#camera_wrap_1').camera({
                pagination: false,
            });
        });
    </script>

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
                    <a href="../en/index.php" data-mfb-label="English" class="mfb-component__button--child-en">
                    </a>
                </li>
                <li>
                    <a href="../kh/index.php" data-mfb-label="Khmer" class="mfb-component__button--child-kh">
                    </a>
                </li>
            </ul>
        </li>
    </ul>

    <div id="book-now-button"><a style="color:white;" href="reservation.php">ご予約</a></div>

    <!--start-header-->
    <div id="fb-root"></div>
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
            <!---start-top-nav---->
            <div class="top-nav">
                <div class="top-nav-left">
                    <ul>
                        <li class="active"><a href="index.php">コンセプト</a></li>
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
    <!--start-image-slider---->
    <div class="slider">
        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
            <div data-src=../images/HomePage/slider/PineResort1.jpg></div>
            <div data-src=../images/HomePage/slider/bungalow.jpg></div>
            <div data-src=../images/HomePage/slider/boreyR.JPG></div>
            <div data-src=../images/HomePage/slider/boreyA.JPG></div>
            <div data-src=../images/HomePage/slider/pipe.JPG></div>
            <div data-src=../images/HomePage/slider/khmercottage.jpg></div>
            <div data-src=../images/HomePage/slider/luxurytent.jpg></div>
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
                <h1>vKirirom Pine Resortへようこそ！</h1>
                <h2>vKiriromは、未来を豊かにするための新しい生活スタイルブランドです。</h2>
                <p>人々が自然の中でゆったりと過ごせるような環境づくりを通して、キリロムが「すべての人のキリロム」となり、世界へvKiriromのコンセプトが広がっていくことを私たちは願っています。</p> <a class="button1" href="detailsCompany.php">続きはこちら</a>
            </div>
        </div>
        <div class="bottom-grids">
            <div class="wrap">
                <div class="bottom-grid1">
                    <h3>施設&アクティビティ</h3> <span>衣食住＋働遊…すべての生活をキリロムで</span>
                    <p>山の上での生活は、ビジネスとは大きくかけ離れたように聞こえるでしょう。しかし、私たちは人々が仕事をし仲間と議論をし合う環境が、家庭生活やリラックスする場にもなり得るような環境づくりを目指しています。 人間関係の様々な側面を同じ場所に集めることで、よりイノベーションが生まれやすくなるだろうと考えているのです。
                    </p>
                    <ul>
                        <li><a href="services.php">ミーティングルーム</a></li>
                        <li><a href="services.php">スパ＆マッサージ</a></li>
                        <li><a href="services.php">プール</a></li>
                        <li><a href="services.php">無料Wi-Fi</a></li>
                        <li><a href="activities.php">チームビルディング</a></li>
                        <li><a href="services.php">パーティー＆イベントの運営</a></li>
                        <br>
                    </ul>
                    <!--<a class="button" href="activities.php">Read More</a>!-->
                </div>
                <div class="bottom-grid2 bottom-mid">
                    <h3>快適な空間</h3>
                    <span>松の木の中にたつ快適な宿泊施設で、思い出深い日々をお過ごしいただけます。</span>
                    <p>リゾートで特別にデザインされた宿泊施設に泊まり、涼しい空気が駆け抜ける松林の森で、リラックスした時間を楽しむことができます。</p>
                    <div class="gallery">
                        <ul>
                            <li>
                                <a href="details.php#Bungalow"><img src="../images/HomePage/buttomPic/image1.jpg" alt="nice bungalow in vkirirom natural resort"></a>
                            </li>
                            <li>
                                <a href="details.php#Camping"><img src="../images/HomePage/buttomPic/image2.jpg" alt="nice camping in vkirirom natural resort"></a>
                            </li>
                            <li>
                                <a href="details.php#Luxurytent"><img src="../images/HomePage/buttomPic/image3.jpg" alt="nice luxury tent in vkirirom natural resort"></a>
                            </li>
                            <li>
                                <a href="details.php#Bungalow"><img src="../images/HomePage/buttomPic/image4.jpg" alt="nice bungalow in vkirirom natural resort"></a>
                            </li>
                            <li>
                                <a href="details.php#Khmercottage"><img src="../images/HomePage/buttomPic/image5.jpg" alt="nice traditional khmer cottage in vkirirom natural resort"></a>
                            </li>
                            <li>
                                <a href="details.php#Piperoom"><img src="../images/HomePage/buttomPic/image6.jpg" alt="nice unique piperoom in vkirirom natural resort"></a>
                            </li>
                            <div class="clear"> </div>
                        </ul>
                    </div>
                    <br>
                    <br>
                    <!-- <a class="button" href="accommodation.php">Read More</a>!-->
                </div>
                <div class="bottom-grid1 bottom-last">
                    <h3>モダン・クメールレストラン</h3>
                    <span>キリロム山の標高６００mに位置するレストラン</span>
                    <p>おいしいクメール料理のレストランはカンボジアにたくさんありますが、Pine View Kitchenならではの自慢はキリロムの松の木々の中に立っているオープンエアーな環境です。</p>
                    <p>爽やかな空気と景色の中で、シェフ特製のモダン・クメール料理をフルコースでお楽しみください。</p>
                    <p>また、vKirirom Pine Resortはレストランで使用するほとんどの野菜や果物を畑で育てています。採れたてで新鮮な作物をふんだんに使ったコースが味わえるのもここならではです。</p>
                    <p>コーヒー1杯の休憩にもご利用頂けます。</p>
                    <br>
                    <a class="button" href="restaurant.php">続きはこちら</a>
                </div>
            </div>
            <!--end-wrap--->
            <!--Top 3 pic-->
            <div class="top-grids">
                <div class="wrap">
                    <div class="top-grid">
                        <a href="details.php#Camping"><img src="../images/HomePage/3picMid/tent.jpg" alt="auto camping in vkiriom " title="Auto-camping"></a>
                        <h3>キャンプ</h3>
                        <p>ご自身のお車でお越しください。キャンプ場では多くの自然に囲まれながら安全にお過ごしいただけます。キャンプ場はフェンスに囲まれ、24時間対応のセキュリティスタッフが常駐しています。</p>
                        <a class="button" href="details.php#Camping">続きはこちら</a>
                    </div>
                    <div class="top-grid">
                        <a href="details.php#BoreyA"><img src="../images/HomePage/3picMid/boreyA.jpg" alt="vkirirom Villa-A" title="Villa-A"></a>
                        <h3>vKirirom 2<sup>nd</sup> ホーム</h3>
                        <p>私たちのリゾートでは、大家族にぴったりの家を特別価格でご用意しております。休暇に、家族や親族とともにパーティーを楽しむことができます。</p>
                        <a class="button" href="details.php#BoreyA">続きはこちら</a>
                    </div>
                    <div class="top-grid last-topgrid">
                        <a href="detailsKirirom.php"><img src="../images/HomePage/3picMid/kirirom.jpg" alt="kirirom chombok" title="Jom-bork waterfall"></a>
                        <h3>キリロム国立公園</h3>
                        <p>キリロム国立公園はカンボジアで最も歴史ある山で知られ、空に向かってまっすぐ立つ松の木々や、滝、多様な野生生物など、心あらわれるような美しい自然に出会うことができます。</p>
                        <a class="button" href="detailsKirirom.php">続きはこちら</a>
                    </div>
                    <div class="clear"> </div>
                </div>
            </div>
            <!--end top 3 pic-->
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
        </div>
    </div>
    <!---End-footer-->
</body>

</html>