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
    <script src="../js/fbplugin.js"></script>
    
  <!--slide show of calendar-->
  <link rel="stylesheet" type="text/css" href="../slick/slick.css">
  <link rel="stylesheet" type="text/css" href="../slick/slick-theme.css">

  <style type="text/css">
    html, body {
      margin: 0;
      padding: 0;
    }
/*

    * {
      box-sizing: border-box;
    }
*/

    .slider {
        width: 60%;
        margin: 0px auto;
    }

    .slick-slide {
      margin: 0px 0px;
    }

    .slick-slide img {
      width: 100%;
    }
	@media only screen and (max-width: 768px) {
    	.slider {
        	width: 95%;
        	margin: 0px 0px;
    	}
		.slick-prev:before,
		.slick-next:before {
        color: black;
		box-sizing: border-box;
		display: none;
    	}
	}


    .slick-prev:before,
    .slick-next:before {
        color: black;
		box-sizing: border-box;
    }

  </style>



</head>

<body>
    <!-- Language Button -->

    <ul id="menu" class="mfb-component--bl mfb-zoomin" data-mfb-toggle="hover">
        <li class="mfb-component__wrap">
            <a href="#" class="mfb-component__button--main-kh" data-mfb-label="Khmer">
            </a>
            <ul class="mfb-component__list">
                <li>
                    <a href="../en/vkiriromCalendar.php" data-mfb-label="English" class="mfb-component__button--child-en">
                    </a>
                </li>
                <li>
                    <a href="../jp/vkiriromCalendar.php" data-mfb-label="Japanese" class="mfb-component__button--child-jp">
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
                        <li id="book-button"><a href="reservation.php">កក់ឥឡូវនេះ</a></li>
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
                        <li><a href="index.php">ទំព៏័រដើម</a></li>
                        <li><a href="specialoffer.php">សេវាកម្មពិសេស</a></li>
                        <li><a href="services.php">សេវាកម្ម និង បរិក្ខា</a></li>
                        <li><a href="activities.php">ល្បែងកំសាន្ត</a></li>
                        <li><a href="accommodation.php">កន្លែងស្នាក់នៅ</a></li>
                        <li class="active"><a href="vkiriromCalendar.php">កាលបរិច្ឆេទ តម្លៃ</a></li>
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
                        <li class="active"><a href="index.php">ទំព៏័រដើម</a></li>
                        <li><a href="specialoffer.php">សេវាកម្មពិសេស</a></li>
                        <li><a href="services.php">សេវាកម្ម និង បរិក្ខា</a></li>
                        <li><a href="activities.php">ល្បែងកំសាន្ត</a></li>
                        <li><a href="accommodation.php">កន្លែងស្នាក់នៅ</a></li>
						<li class="active"><a href="vkiriromCalendar.php">កាលបរិច្ឆេទ តម្លៃ</a></li>
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
    <!----End-header----->
    
    <!---start-content---->
    <div class="content">
        <!---start-about---->
        <div class="about-us">
           <div class="gallerys">
            <div class="wrap">

<!--                <div class="about-header">-->
                    <h3><em><strong>តម្លៃតាមកាលបរិច្ឆេទ</strong></em></h3>
                
<!--                    <a href="#">Calendar Price of Our Resort</a>-->
                         <section class="regular slider">
                             <div><img src="../images/calendar/Calendar18-1.jpg"></div>
                             <div><img src="../images/calendar/Calendar18-2.jpg"></div>
                             <div><img src="../images/calendar/Calendar18-3.jpg"></div>
                             <div><img src="../images/calendar/Calendar18-4.jpg"></div>
                             <div><img src="../images/calendar/Calendar18-5.jpg"></div>
                             <div><img src="../images/calendar/Calendar18-6.jpg"></div>
                             <div><img src="../images/calendar/Calendar18-7.jpg"></div>
                             <div><img src="../images/calendar/Calendar18-8.jpg"></div>
                             <div><img src="../images/calendar/Calendar18-9.jpg"></div>
                             <div><img src="../images/calendar/Calendar18-10.jpg"></div>
                             <div><img src="../images/calendar/Calendar18-11.jpg"></div>
                             <div><img src="../images/calendar/Calendar18-12.jpg"></div>
					      </section>
                    
                </div>
            </div>  
        </div>
        <!---End-content>
    <!--end reservation code-->
    <!---End Reservation script code---->
    <div class="clear"> </div>

    <!---start-footer---->
    <div class="footer">
        <div class="wrap">
            <div class="footer-grid">
                <h3>ពត៍មានបន្ថែមពី vKirirom </h3>
                <p>vKirirom Pine Resort មានទីតាំងស្ថិតភ្នំគីរីរម្យដែលពោរពេញដោយទៅដើមស្រល់ដ៏ស្រស់ត្រកាល។ នៅ vKiriom យើងព្យាយាមការពារសម្រស់ធម្មជាតិនៃ បរិស្ថានព្រៃឈើហើយទីតាំងនៃអគាររបស់យើងត្រូវបានសិក្សាយ៉ាងម៉្មត់ចត់ និងត្រឹមត្រូវបំផុតដើម្បីជៀសវាងការកាប់បំផ្លាញដើមឈើ</p>
                <a class="button2" href="detailsCompany.php">ពត៌មានបន្ថែម</a>
            </div>
            <div class="footer-grid center-grid">
                <h3>vKirirom ជាផ្ទះទី២ របស់លោកអ្នក</h3>
                <ul>
                    <li><a href="http://property.vkirirom.com/about_us.php">ពត៍មានបន្ថែមពីយើងខ្ញុំ</a></li>
                    <li><a href="http://property.vkirirom.com/type_a.php">ប្រភេទនៃអចលន:ទ្រព្យ</a></li>
                    <li><a href="http://property.vkirirom.com/gallery.php">រូបភាព</a></li>
                    <li><a href="http://property.vkirirom.com/contact.php">ទំនាក់ទំនងមកកាន់យើងខ្ញុំ</a></li>
                </ul>
            </div>
            <div class="footer-grid twitts">
                <h3>វិទ្យាស្ថាន បច្ចេកវិទ្យាគីរីរម្យ(KIT)</h3>
                <p>
                    <label>KIT</label>ជាវិទ្យាស្ថានដែលមានរចនាបទថ្មីនៃការបង្រៀន និង ការរៀនជាមួយនឹងការអនុវត្តដែលមានប្រសិទ្ធិភាពដូចជាសាលានៅបរទេស។</p>
                <span onclick="location='http://kit.vkirirom.com/contact.php'">ចុះឈ្មោះនៅទីនេះ !!</span>
                <p>សាកលវិទ្យាល័យថ្មីមួយដែលស្ថិតនៅលើភ្នំគិរីរម្យដែលនៅក្នុងគម្រោង vKririom ។ វិធីសាស្រ្តអប់រំបែបទំនើបស្តង់ដារអន្តរជាតិដែលមានទីតាំងស្ថិតនៅក្នុងសម្រស់នៃធម្មជាតិរួមទាំងបរិស្ថានស្អាត បរិយាកាសបរិសុទ្ធ។</p>
                <span onclick="location='http://kit.vkirirom.com/index.php'"> ព័ត៍មានបន្ថែមពី KIT</span>
            </div>
            <div class="footer-grid">
                <h3>តើអ្នកដឹងទេ?</h3>
                <p>សូមមើលស្លាកសញ្ញា របស់ vKirirom - លោកអ្នក នឹងឃើញ '<span style="color: orange;">v</span>''ពណ៍ទឹកក្រូច តំណាងឱ្យមនុស្ស និង <span style="color: green;">'Kirirom'</span> ពណ៍បៃតងតំណាងឱ្យ ធម្មជាតិបៃតង។vKirirom រៀបរាប់អំពី មនុស្សដែលរស់នៅក្នុង ធម្មជាតិ បៃតងដ៏ស្រស់ត្រកាល។ ហើយ ពណ៍ទឹកក្រូច នេះក៑តំណាងឱ្យភាពសាមញ្ញដូចជាស្បង់ជីវររបស់ព្រះសង្ឃនៅក្នុងប្រទេសកម្ពុជា ។</p>
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
        <p>រចនាដោយ <a href="http://kit.vkirirom.com/"> វិទ្យាស្ថាន បច្ចេកវិទ្យាគីរីរម្យ</a></p>
    </div>
    <!---End-footer---->
    
     <script src="../slick/slick.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript">
            $(document).on('ready', function() {
            $(".regular").slick({
                dots: true,
                infinite: false,
                slidesToShow: 1,
                slidesToScroll: 1
            });
    });
  </script>
</body>

</html>