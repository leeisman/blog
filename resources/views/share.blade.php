<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="騏駿科技,騏駿科技有限公司,電池,battery,batteries">
    <meta name="description" content="本公司為一專業電池組裝製造廠，主要業務如鋰離子電池組、鋰聚合物電池組、鎳氫鎳鎘電池組，將其電池成品完成組裝後，應用於可攜式3C產品及OEM代工，研發設計製造等。">

    <!--facebook><!-->

    <meta property="og:title" content="騏駿科技有限公司">
    <meta property="og:description" content="本公司為一專業電池組裝製造廠，主要業務如鋰離子電池組、鋰聚合物電池組、鎳氫鎳鎘電池組，將其電池成品完成組裝後，應用於可攜式3C產品及OEM代工，研發設計製造等。"/>
    <meta property="og:url" content="http://35.167.58.15/share"/>
    <meta property="og:site_name" content="騏駿科技有限公司"/>
    <meta property="og:image" content="http://35.167.58.15/images/share.jpg" />
    <meta property="fb:app_id" content="chijuin">

    <meta http-equiv="Content-Type" content="text/html; charset=big5"/>
    <meta charset="utf-8">
    <meta name="google-site-verification" content="x4woiAMww5QFanIevDKtpuB8CmIbVHaHLAtZoftvJO4"/>
    <title>騏駿科技有限公司</title>
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico"/>
    <link rel="stylesheet" media="screen" href="css/style.css">
    <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.responsivemenu.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/camera.js"></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script src="js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->
    <script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
    <script src="js/jquery.touchSwipe.min.js"></script>
    <script>
        $(document).ready(function () {
            jQuery('#camera_wrap').camera({
                loader: false,
                pagination: false,
                thumbnails: false,
                height: '45%',
                caption: false,
                navigation: true,
                fx: 'simpleFade'
            });

            $('#check-topic').change(function () {

                $('#check-topic-value').val($(this).val());

                var color = $('header').css("background-color", $(this).val());
                var color = $('body').css("background-color", $(this).val());


                console.log($(this).val());
                console.log(color);
            });

            $('#check-content').change(function () {

                $('#check-content-value').val($(this).val());


                var color = $('.bg1').css("background", $(this).val());
                var color = $('.content').css("background", $(this).val());

                var color = $('.bg1').css("background-color", $(this).val());
                var color = $('.content').css("background-color", $(this).val());

                console.log($(this).val());
                console.log(color);
            });

        });

        $(window).load(
            function () {
                $('.carousel1').carouFredSel({
                    auto: false, prev: '.prev1', next: '.next1', width: 940, items: {
                        visible: {
                            min: 1,
                            max: 1
                        },
                        height: 'auto',
                        width: 940,

                    }, responsive: true,

                    scroll: 1,

                    mousewheel: false,

                    swipe: {onMouse: true, onTouch: true}
                });

            });


    </script>
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"
                 height="42" width="820"
                 alt="電池"/>
        </a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>

    <link type="text/css" media="screen" href="css/ie.css">
    <![endif]-->


    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KRKMSRL');</script>
    <!-- End Google Tag Manager -->
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-XXXX"
                height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->


    <!--analyticstracking-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-91887014-1', 'auto');
        ga('send', 'pageview');

    </script>

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KRKMSRL"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<!--==============================header=================================-->
<header>
    <div class="container_12">
        <div class="grid_12">
            <h1><a href="index.html"><img src="images/logo.png" alt="騏駿科技有限公司"></a></h1>
            <div class="menu_block">
                <nav>
                    <ul class="sf-menu">
                        <li class="current"><a href="index.html">Home</a>
                            <ul>
                                <li><a href="#">Lorem ipsum</a></li>

                                <li><a href="#">Corporis </a>
                                    <ul>
                                        <li><a href="#">Ratione dicta</a></li>
                                        <li><a href="#">Quaerat maiores</a></li>
                                        <li><a href="#">Exercitationem</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Maiores ipsum</a></li>

                            </ul>
                        </li>
                        <li><a href="index-1.html">About</a></li>
                        <li><a href="index-2.html">Services</a></li>
                        <li><a href="index-3.html">Projects</a></li>
                        <li><a href="index-4.html">Contacts</a></li>
                    </ul>
                </nav>
                <div class="clear"></div>
            </div>

        </div>
    </div>
</header>
<div class="clear"></div>
<div class="bg1">
    <div class="container_12">
        <div class="grid_12">
            <div class="slider_wrapper">
                <div>
                    <div id="camera_wrap" class="">
                        <div data-src="images/slide.jpg">
                            <div class="caption fadeIn">
                                <h2>We will help
                                    you to
                                    protect
                                    your rights! </h2>
                            </div>
                        </div>
                        <div data-src="images/slide1.jpg">
                            <div class="caption fadeIn">
                                <h2>Applying </h2>appropriate market
                                research solutions
                            </div>
                        </div>
                        <div data-src="images/slide2.jpg">
                            <div class="caption fadeIn">
                                <h2>Helping</h2>your business
                                get back on its
                                feet

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page1_block">
        <div class="container_12">
            <div class="grid_3">

                選單背景色：
                <input type="color" id="check-topic">
                <input type="text" id="check-topic-value">

                </br>
                內文背景色：
                <input type="color" id="check-content">
                <input type="text" id="check-content-value">

            </div>
        </div>
    </div>


</div>
<!--=======content================================-->
<div class="content page1">
    <div class="container_12">
        <div class="grid_4">
            <div class="pad1">
                <h3>Capabilities</h3>
                <ul class="list">
                    <li><a href="#">Suspendisse sollicitudin velit</a></li>
                    <li><a href="#">Ut pharetra augue nec augue</a></li>
                    <li><a href="#">Nam elit agna,endrerit sit amet</a></li>
                    <li><a href="#">Tincidunt ac, viverra sed, nulla</a></li>
                    <li><a href="#">Donec porta diam eu massa</a></li>
                    <li><a href="#">Quisque diam lorem</a></li>
                    <li><a href="#">Interdum vitae,dapibus ac</a></li>
                    <li><a href="#">Scelerisque vitae, pede</a></li>
                    <li class="mb0"><a href="#">Donec eget tellus non erat</a></li>
                </ul>
            </div>
        </div>
        <div class="grid_8 emp_box">
            <h3>Our Projects</h3>
            <div class="grid_4 alpha ">
                <div class="box">
                    <div class="maxheight1">
                        <img src="images/page1_img1.jpg" alt="電池">
                        <div class="extra_wrapper"><p><strong>Nique porro</strong></p>
                            <a href="#">Quisquam est qui dolorem ipsumquia dolor adipisci eius unumquam.</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid_4 omega">
                <div class="box">
                    <div class="maxheight1">
                        <img src="images/page1_img2.jpg" alt="battery">
                        <div class="extra_wrapper"><p><strong>Ut wisi enim</strong></p>
                            <a href="#">Ut wisi enim ad min ve niam, quis nostrudexerci tation ullam.</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear cl1"></div>
            <div class="grid_4 alpha">
                <div class="box">
                    <div class="maxheight1">
                        <img src="images/page1_img3.jpg" alt="騏駿">
                        <div class="extra_wrapper"><p><strong>Duis autem</strong></p> <a href="#">Ullamcorper suscipit
                                lobo rtis nisl t aliquip ex ea commodo conseqa adipisci.</a></div>
                    </div>
                </div>
            </div>
            <div class="grid_4 omega">
                <div class="box">
                    <div class="maxheight1">
                        <img src="images/page1_img4.jpg" alt="電源組">
                        <div class="extra_wrapper"><p><strong>Quis nostrud</strong></p> <a href="#">Sed diam non umy
                                nibheuismod incidunt ut lao reet dolore magna. </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==============================footer=================================-->

<div class="container_12">
    <div class="grid_12">
        <footer>
            <div class="socials">
                <a href="#">facebook</a> |
                <a href="#">twitter</a> |
                <a href="#">google+</a></div>
            <div class="copy">騏駿科技有限公司 &copy; 2013 | <a href="index-5.html">Privacy Policy</a> More <a
                    rel="nofollow" href="http://www.templatemonster.com/category.php?category=0&type=1"
                    target="_blank"> at TemplateMonster.com</a></div>
        </footer>

    </div>
</div>

</body>
</html>