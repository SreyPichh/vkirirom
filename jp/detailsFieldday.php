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
    <link href="../css/jquery.littlelightbox.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
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
                    <a href="../en/detailsFieldday.php" data-mfb-label="English" class="mfb-component__button--child-en">
                    </a>
                </li>
                <li>
                    <a href="../kh/detailsFieldday.php" data-mfb-label="Khmer" class="mfb-component__button--child-kh">
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
        <!--start pop up booking menu-->
        <div id="popup-booking">
            <div class="pop-up-online_reservation">
                <div class="pop-up-b_room">
                    <div class="pop-up-booking_room">
                        <h4 class="pop-up-booking">ご予約</h4>
                        <p> </p>
                    </div>
                    <div class="clear"></div>
                    <div class="pop-up-reservation">
                        <ul>
                            <li class="pop-up-span1_of_1">
                                <h5>お部屋のタイプ:</h5>
                                <!--start section_room-->
                                <div class="pop-up-section_room">
                                    <select id="country" onchange="change_country(this.value)" class="frm-field required">
                                        <option value="null">バンガロー</option>
                                        <option value="null">パイプルーム</option>
                                        <option value="AX">ラグジュアリーテント</option>
                                        <option value="AX">キャンピング</option>
                                        <option value="AX">クメールコテージ</option>
                                        <option value="AX">ビラA</option>
                                        <option value="AX">ビラ R</option>
                                    </select>
                                </div>
                            </li>
                            <li class="pop-up-span1_of_1 pop-up-left">
                                <h5>チェックイン日付:</h5>
                                <div class="pop-up-book_date">
                                    <form>
                                        <input class="date" id="datepicker" type="text" value="DD/MM/YY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">
                                    </form>

                                </div>
                            </li>
                            <li class="pop-up-span1_of_1 pop-up-left">
                                <h5>チェックアウト日付:</h5>
                                <div class="pop-up-book_date">
                                    <form>
                                        <input class="date" id="datepicker1" type="text" value="DD/MM/YY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">
                                    </form>
                                </div>
                            </li>
                            <li class="pop-up-span1_of_2 pop-up-left">
                                <h5>合計:</h5>
                                <!--start section_room-->
                                <div class="pop-up-section_room">
                                    <select id="country" onchange="change_country(this.value)" class="frm-field required">
                                        <option value="null">1</option>
                                        <option value="null">2</option>
                                        <option value="AX">3</option>
                                        <option value="AX">5</option>
                                        <option value="AX">6</option>
                                        <option value="AX">7</option>
                                        <option value="AX">8</option>
                                        <option value="AX">9</option>
                                        <option value="AX">10</option>
                                    </select>
                                </div>
                            </li>
                            <li class="pop-up-span1_of_3">
                                <div class="date_btn">
                                    <form>
                                        <input type="submit" value="book now" />
                                    </form>
                                </div>
                            </li>
                            <li class="cancelButton">
                                <div class="date_btn">
                                    <form>
                                        <input type="reset" class="cancel" onmouseup="document.getElementById('popup-booking').style.display='none';" value="Cancel">
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
        </div>
        <!--End pop up boooking-->
        <div class="about-us">
            <div class="wrap">
                <div class="about-header">
                    <h3 id="Bungalow">詳細はこちら :<span class="detail_title">運動会</span></h3>
                    <div class="clear"> </div>
                </div>
                <div class="about-info">
                    <p>vKirirom Pine Resortでは運動会を開催することができます。お客様にご満足していただけるよう 12個のアクティビティのご用意をしております。
                    </p>
                </div>
                <div class="specials">
                    <div class="specials-grids">
                        <!--Line1-->
                        <div class="special-grid">
                            <a href="../images/Activity/FieldDayPic/Warmup.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/Warmup.JPG" alt="vkirirom activity warm up" title="vkirirom activity warm up"></a>
                        </div>
                        <div class="special-grid">
                            <a href="../images/Activity/FieldDayPic/PullLine.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/PullLine.JPG" alt="vkirirom activity PullLine" title="vkirirom activity PullLine"></a>
                        </div>
                        <div class="special-grid spe-grid">
                            <a href="../images/Activity/FieldDayPic/Pullbat.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/Pullbat.JPG" alt="vkirirom activity Pullbat" title="vkirirom activity Pullbat"></a>
                        </div>
                        <!--End Line1-->
                        <!--Line2-->
                        <div class="special-grid">
                            <a href="../images/Activity/FieldDayPic/PipeLine.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/PipeLine.JPG" alt="vkirirom PineLine Activity" title="vkirirom PineLine Activity"></a>
                        </div>
                        <div class="special-grid ">
                            <a href="../images/Activity/FieldDayPic/throwEgg.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/throwEgg.JPG" alt="vkirirom throw egg" title="vkirirom throw egg"></a>
                        </div>
                        <div class="special-grid spe-grid">
                            <a href="../images/Activity/FieldDayPic/Happy.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/Happy.JPG" alt="vkirirom happy day" title="vkirirom happy day"></a>
                        </div>
                        <!--End Line2-->
                        <!--Line3-->
                        <div class="special-grid">
                            <a href="../images/Activity/FieldDayPic/Winner.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/Winner.JPG" alt="vkirirom activity winner" title="vkirirom activity winner"></a>
                        </div>
                        <div class="special-grid">
                            <a href="../images/Activity/FieldDayPic/Pullbat1.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/Pullbat1.JPG" alt="vkirirom Pullbat" title="vkirirom Activity Pullbat"></a>
                        </div>
                        <div class="special-grid spe-grid">
                            <a href="../images/Activity/FieldDayPic/PullBat2.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/PullBat2.JPG" alt="vkirirom Pullbat"  title="image-name"></a>
                        </div>
                        <!-- End Line3 -->
                        <!--Line4-->
                        <div class="special-grid">
                            <a href="../images/Activity/FieldDayPic/Bubble3.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/Bubble3.JPG" alt="vkirirom Activity Pullbat" title="vkirirom Activity Pullbat"></a>
                        </div>
                        <div class="special-grid">
                            <a href="../images/Activity/FieldDayPic/Bubble4.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/Bubble4.JPG" alt="vkirirom bubble" title="vkirirom bubble"></a>
                        </div>
                        <div class="special-grid spe-grid">
                            <a href="../images/Activity/FieldDayPic/Bubble2.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/Bubble2.JPG" alt="vkirirom bubble" title="vkirirom bubble"></a>
                        </div>
                        <!--End Line4-->
                        <!--Line5-->
                        <div class="special-grid">
                            <a href="../images/Activity/FieldDayPic/Struckout.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/Struckout.JPG" alt="vkirirom structout" title="vkirirom structout"></a>
                        </div>
                        <div class="special-grid">
                            <a href="../images/Activity/FieldDayPic/Struckout1.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/Struckout1.JPG" alt="vkirirom structout" title="vkirirom structout"></a>
                        </div>
                        <div class="special-grid spe-grid">
                            <a href="../images/Activity/FieldDayPic/Struckout2.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/Struckout2.JPG" alt="vkirirom structout" title="vkirirom structout"></a>
                        </div>
                        <!--End Line5-->
                        <!--Line6-->
                        <div class="special-grid">
                            <a href="../images/Activity/FieldDayPic/TreasureHunting.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/TreasureHunting.JPG" alt="vkirirom TreasureHunting " title="vkirirom TreasureHunting"></a>
                        </div>
                        <div class="special-grid">
                            <a href="../images/Activity/FieldDayPic/TreasureHunting1.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/TreasureHunting1.JPG" alt="vkirirom TreasureHunting" title="vkirirom TreasureHunting"></a>
                        </div>
                        <div class="special-grid spe-grid">
                            <a href="../images/Activity/FieldDayPic/TreasureHunting2.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/TreasureHunting2.JPG" alt="vkirirom TreasureHunting" title="vkirirom TreasureHunting"></a>
                        </div>
                        <!--End Line6-->
                        <!--Line7-->
                        <div class="special-grid">
                            <a href="../images/Activity/FieldDayPic/DiskGoal.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/DiskGoal.JPG" alt="vkirirom DiskGoal" title="vkirirom DiskGoal"></a>
                        </div>
                        <div class="special-grid">
                            <a href="../images/Activity/FieldDayPic/Walkracing1.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/Walkracing1.JPG" alt="vkirirom walk racing" title="vkirirom walk racing"></a>
                        </div>
                        <div class="special-grid spe-grid">
                            <a href="../images/Activity/FieldDayPic/TreasureHunting.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/TreasureHunting.JPG" alt="vkirirom TreasureHunting" title="vkirirom TreasureHunting"></a>
                        </div>
                        <!--End Line7-->
                        <div class="clear"> </div>
                    </div>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="testmonials">
                <div class="wrap">
                    <div class="testmonial-grid">
                        <h3>アクティビティリスト</h3>
                        <p class="para">
                            1.トレージャーハント
                            <br>2.ミッション•イン•キリロム
                            <br>3.バブルサッカー
                            <br>4.バブル相撲
                            <br>5.バブルレース
                            <br>6.バブルイス取りゲーム
                            <br>7.お姫様になれ！
                            <br>8.卵投げ
                            <br>9.果物食べ競争
                            <br>10.つぼ割り
                            <br>11.ダンシング玉入れ
                            <br>12.パイプラインレース
                            <br>13.綱引き
                            <br>14.ムカデ競走
                            <br>15.ストラック会アウト
                            <br>16.ブラインドスネーク
                            <br>17.廃棄物処理ゲーム
                            <br>18.マシュマロチャレンジ
                            <br>19.チームでウォールクライミング
                            <br>20.巨大シーソー
                            <br>21.風船戦争
                            <br>22.風船レース
                            <br>23.自転車競争
                            <br>24.ピンポン競争
                            <br>25.フラフープパス
                            <br>26.大縄跳び
                            <br>27.二人三脚

                        </p>
                        <div class="row button-home-back">
                            <a href="index.php"><img src="../images/detailsimage/home.png" alt="Home" title="Home"></a>
                            <a href="activities.php"><img src="../images/detailsimage/back.png" alt="back" title="Back"></a>
                        </div>

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
        <!-- lightbox script -->
        <script>
            $('.lightbox').littleLightBox();
        </script>
</body>

</html>