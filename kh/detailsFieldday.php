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
    <script type="text/javascript" src="../js/jquery.lightbox.js"></script>
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
            <a href="#" class="mfb-component__button--main-kh" data-mfb-label="Khmer">
            </a>
            <ul class="mfb-component__list">
                <li>
                    <a href="../en/detailsFieldday.php" data-mfb-label="English" class="mfb-component__button--child-en">
                    </a>
                </li>
                <li>
                    <a href="../jp/detailsFieldday.php" data-mfb-label="Japanese" class="mfb-component__button--child-jp">
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
                        <li class="active"><a href="activities.php">ល្បែងកំសាន្ត</a></li>
                        <li><a href="accommodation.php">កន្លែងស្នាក់នៅ</a></li>
						<li><a href="vkiriromCalendar.php">កាលបរិច្ឆេទ តម្លៃ</a></li>
						<li><a href="restaurant.php">ភោជនីយដ្ឋាន</a></li>
                        <li><a href="contact.php">ទំនាក់ទំនង</a></li>
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
    <!--End-header-->
    <!--start-content-->
    <div class="content">
        <!--start pop up booking menu-->
        <div id="popup-booking">
            <div class="pop-up-online_reservation">
                <div class="pop-up-b_room">
                    <div class="pop-up-booking_room">
                        <h4 class="pop-up-booking">សាកសួរពត៌មាន និង កក់ឥឡូវ​នេះ</h4>
                        <p> </p>
                    </div>
                    <div class="clear"></div>
                    <div class="pop-up-reservation">
                        <ul>
                            <li class="pop-up-span1_of_1">
                                <h5>type of room:</h5>
                                <!--start section_room-->
                                <div class="pop-up-section_room">
                                    <select id="country" onchange="change_country(this.value)" class="frm-field required">
                                        <option value="null">បង់ហ្គាឡូ</option>
                                        <option value="null">ផ្ទះលូ</option>
                                        <option value="AX">ផ្ទះតង់ទំនើប</option>
                                        <option value="AX">ផ្ទះតង់</option>
                                        <option value="AX">ផ្ទះខ្មែរ</option>
                                        <option value="AX">បុរី A ឬ វីឡាស្វីត</option>
                                        <option value="AX">បុរី R ឬ វីឡាចាស្មីន</option>
                                    </select>
                                </div>
                            </li>
                            <li class="pop-up-span1_of_1 pop-up-left">
                                <h5>check-in-date:</h5>
                                <div class="pop-up-book_date">
                                    <form>
                                        <input class="date" id="datepicker" type="text" value="DD/MM/YY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">
                                    </form>

                                </div>
                            </li>
                            <li class="pop-up-span1_of_1 pop-up-left">
                                <h5>check-out-date:</h5>
                                <div class="pop-up-book_date">
                                    <form>
                                        <input class="date" id="datepicker1" type="text" value="DD/MM/YY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">
                                    </form>
                                </div>
                            </li>
                            <li class="pop-up-span1_of_2 pop-up-left">
                                <h5>តម្លៃ និង ចំនួន ៖ </h5>
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
                    <h3 id="Bungalow">ពត៌មានបន្ថែម : <span class="detail_title">ល្បែងកំសាន្តជាក្រុម</span></h3>
                    <div class="clear"> </div>
                </div>
                <div class="about-info">
                    <p>អ្នកអាចស្នាក់នៅក្នុងរមណីយដ្ឋានដើមស្រល់ vKirirom ។ យើងមានសេវាកម្មចំនួន ១២ និង អ្នកអាចយក សេវាកម្មណាមួយ ដែលអ្នកពេញចិត្ត ហើយយើងនឹងផ្តល់ជូនអតិថិជនដោយធ្វើឱ្យឥតខ្ចោះ និងរីករាយបំផុតអំឡុងពេលអ្នកស្នាក់នៅទីនេះ។</p>
                </div>
                <div class="specials">
                    <div class="specials-grids">
                        <!--Line1-->
                        <div class="special-grid">
                            <a href="../images/Activity/FieldDayPic/Warmup.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/Warmup.JPG" alt="vkirirom activity warmup" title="vkirirom activity warmup"></a>
                        </div>
                        <div class="special-grid">
                            <a href="../images/Activity/FieldDayPic/PullLine.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/PullLine.JPG" alt="vkirirom activity PUllLine" title="vkirirom activity PUllLine"></a>
                        </div>
                        <div class="special-grid spe-grid">
                            <a href="../images/Activity/FieldDayPic/Pullbat.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/Pullbat.JPG" alt="vkirirom activity PUllbat" title="vkirirom activity PUllbat"></a>
                        </div>
                        <!--End Line1-->
                        <!--Line2-->
                        <div class="special-grid">
                            <a href="../images/Activity/FieldDayPic/PipeLine.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/PipeLine.JPG" alt="vkirirom activity Pipeline" title="vkirirom activity Pipeline"></a>
                        </div>
                        <div class="special-grid ">
                            <a href="../images/Activity/FieldDayPic/throwEgg.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/throwEgg.JPG" alt="vkirirom activity through egg" title="vkirirom activity through egg"></a>
                        </div>
                        <div class="special-grid spe-grid">
                            <a href="../images/Activity/FieldDayPic/Happy.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/Happy.JPG" alt="vkirirom activity happy" title="ivkirirom activity happy"></a>
                        </div>
                        <!--End Line2-->
                        <!--Line3-->
                        <div class="special-grid">
                            <a href="../images/Activity/FieldDayPic/Winner.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/Winner.JPG" alt="vkirirom activity winner" title="vkirirom activity winner"></a>
                        </div>
                        <div class="special-grid">
                            <a href="../images/Activity/FieldDayPic/Pullbat1.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/Pullbat1.JPG" alt="vkirirom activity Pullbat" title="vkirirom activity Pullbat"></a>
                        </div>
                        <div class="special-grid spe-grid">
                            <a href="../images/Activity/FieldDayPic/PullBat2.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/PullBat2.JPG" alt="vkirirom activity Pullbat" title="vkirirom activity Pullbat"></a>
                        </div>
                        <!-- End Line3 -->
                        <!--Line4-->
                        <div class="special-grid">
                            <a href="../images/Activity/FieldDayPic/Bubble3.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/Bubble3.JPG" alt="vkirirom activity bubble" title="vkirirom activity bubble"></a>
                        </div>
                        <div class="special-grid">
                            <a href="../images/Activity/FieldDayPic/Bubble4.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/Bubble4.JPG" alt="vkirirom activity bubble" title="vkirirom activity bubble"></a>
                        </div>
                        <div class="special-grid spe-grid">
                            <a href="../images/Activity/FieldDayPic/Bubble2.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/Bubble2.JPG" alt="vkirirom activity bubble" title="vkirirom activity bubble"></a>
                        </div>
                        <!--End Line4-->
                        <!--Line5-->
                        <div class="special-grid">
                            <a href="../images/Activity/FieldDayPic/Struckout.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/Struckout.JPG" alt="vkirirom activity struckout" title="vkirirom activity struckout"></a>
                        </div>
                        <div class="special-grid">
                            <a href="../images/Activity/FieldDayPic/Struckout1.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/Struckout1.JPG" alt="vkirirom activity struckout" title="vkirirom activity struckout"></a>
                        </div>
                        <div class="special-grid spe-grid">
                            <a href="../images/Activity/FieldDayPic/Struckout2.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/Struckout2.JPG" alt="vkirirom activity struckout" title="vkirirom activity struckout"></a>
                        </div>
                        <!--End Line5-->
                        <!--Line6-->
                        <div class="special-grid">
                            <a href="../images/Activity/FieldDayPic/TreasureHunting.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/TreasureHunting.JPG" alt="vkirirom activity treasure hunting" title="vkirirom activity treasure hunting"></a>
                        </div>
                        <div class="special-grid">
                            <a href="../images/Activity/FieldDayPic/TreasureHunting1.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/TreasureHunting1.JPG" alt="vkirirom activity treasure hunting" title="vkirirom activity treasure hunting"></a>
                        </div>
                        <div class="special-grid spe-grid">
                            <a href="../images/Activity/FieldDayPic/TreasureHunting2.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/TreasureHunting2.JPG" alt="vkirirom activity treasure hunting" title="image-name"></a>
                        </div>
                        <!--End Line6-->
                        <!--Line7-->
                        <div class="special-grid">
                            <a href="../images/Activity/FieldDayPic/DiskGoal.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/DiskGoal.JPG" alt="vkirirom activity treasure DiscGoal" title="vkirirom activity treasure DiscGoal"></a>
                        </div>
                        <div class="special-grid">
                            <a href="../images/Activity/FieldDayPic/Walkracing1.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/Walkracing1.JPG" alt="vkirirom activity treasure Walkracing" title="vkirirom activity Walkracing"></a>
                        </div>
                        <div class="special-grid spe-grid">
                            <a href="../images/Activity/FieldDayPic/TreasureHunting.JPG" class="lightbox" data-littlelightbox-group="gallery" title=""><img src="../images/Activity/FieldDayPic/TreasureHunting.JPG" alt="vkirirom activity treasure hunting" title="vkirirom activity treasure hunting"></a>
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
                        <h3>ល្បែងកំសាន្ត មានដូចជា៖ </h3>
                        <p class="para">1. Rope Climbing
                            <br>2. Bubble soccer
                            <br>3. Khmer Clay Plot
                            <br>4. Dodgeball
                            <br>5. Local net
                            <br>6. Strickout Ball
                            <br>7. SASUKE Rally
                            <br>8. Small ball with red color
                            <br>9. Small ball with green color
                            <br>10. Black, Green, yellow, Boots
                            <br>11. Volleyball net
                            <br>12. Volleyball
                            <br>13. Bedminton
                            <br>14. Petanque
                            <br>15. Disc golf
                            <br>16. Telescope
                            <br>17. Netball
                            <br>18. Futsal / Football field
                            <br>19. Futsal net
                            <br>20. Plastic Rope Jumping
                            <br>21. Unicycle
                            <br>22. Kickboard / Scooter
                            <br>22. Flying disc

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
                    <h3>ពត៍មានបន្ថែមពី vKirirom </h3>
                    <p>vKirirom Pine Resort មានទីតាំងស្ថិតភ្នំគីរីរម្យដែលពោរពេញដោយទៅដើមស្រល់ដ៏ស្រស់ត្រកាល។ នៅ vKiriom យើងព្យាយាម ការពារ សម្រស់ធម្មជាតិនៃបរិស្ថានព្រៃឈើហើយទីតាំងនៃអគាររបស់យើងត្រូវបានសិក្សាយ៉ាងម៉្មត់ចត់ និងត្រឹមត្រូវបំផុតដើម្បីជៀសវាងការកាប់បំផ្លាញដើមឈើ</p>
                    <a class="button2" href="detailsCompany.php">ពត៌មានបន្ថែម</a>
                </div>
                <div class="footer-grid center-grid">
                    <h3>vKirirom ជាផ្ទះទី២ របស់លោកអ្នក</h3>
                    <ul>
                        <li><a href="http://property.vkirirom.com/about_us.php">ពត៍មានបន្ថែមពីយើងខ្ញុំ</a></li>
                        <li><a href="http://property.vkirirom.com/type_a.php">ប្រភេទនៃអចលន:ទ្រព្យ</a></li>
                        <li><a href="http://property.vkirirom.com/gallery.php">រូបភាព</a></li>
                        <li><a href="http://property.vkirirom.com/contact.php">ទំនាក់ទំនង មកកាន់យើងខ្ញុំ</a></li>
                    </ul>
                </div>
                <div class="footer-grid twitts">
                    <h3>វិទ្យាស្ថាន បច្ចេកវិទ្យាគីរីរម្យ(KIT)</h3>
                    <p>
                        <label>KIT</label>ជាវិទ្យាស្ថាន ដែលមានរចនាបទថ្មីនៃការបង្រៀន និង ការរៀនជាមួយនឹងការអនុវត្តដែលមានប្រសិទ្ធិភាពដូចជា សាលានៅបរទេស។</p>
                    <span onclick="location='http://kit.vkirirom.com/contact.php'">ចុះឈ្មោះនៅទីនេះ !!</span>
                    <p>សាកលវិទ្យាល័យ ថ្មីមួយដែលស្ថិតនៅលើភ្នំគិរីរម្យដែលនៅក្នុងគម្រោង vKririom ។វិធីសាស្រ្តអប់រំបែបទំនើបស្តង់ដារអន្តរជាតិដែលមានទីតាំងស្ថិតនៅក្នុងសម្រស់នៃធម្មជាតិ រួមទាំងបរិស្ថានស្អាត បរិយាកាសបរិសុទ្ធ។</p>
                    <span onclick="location='http://kit.vkirirom.com/index.php'"> ពត៍មានបន្ថែមពី KIT</span>
                </div>
                <div class="footer-grid">
                    <h3>តើអ្នកដឹងទេ?</h3>
                    <p>សូមមើល ស្លាកសញ្ញា របស់ vKirirom - លោកអ្នក នឹងឃើញ '<span style="color: orange;">v</span>'ពណ៍ទឹកក្រូច តំណាងឱ្យមនុស្ស និង <span style="color: green;">'Kirirom'</span>ពណ៍បៃតងតំណាងឱ្យធម្មជាតិបៃតង។vKirirom រៀបរាប់អំពីមនុស្សដែលរស់នៅក្នុងធម្មជាតិបៃតងដ៏ស្រស់ត្រកាល។ ហើយ ពណ៍ទឹកក្រូច នេះក៑តំណាងឱ្យភាពសាមញ្ញដូចជាស្បង់ជីវររបស់ព្រះសង្ឃនៅក្នុងប្រទេសកម្ពុជា។</p>
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
            <p>រចនា ដោយ <a href="http://kit.vkirirom.com/"> វិទ្យាស្ថាន បច្ចេកវិទ្យាគីរីរម្យ</a></p>
        </div>
        <!--End-footer-->
        <!-- lightbox script -->
        <script>
            $('.lightbox').littleLightBox();
        </script>
</body>

</html>