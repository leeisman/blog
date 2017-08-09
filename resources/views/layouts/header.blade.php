<!DOCTYPE html>
<html lang="zh">
<head>


    {{--google ad--}}
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-6288259574765696",
            enable_page_level_ads: true
        });
    </script>
    {{--google ad finish--}}

    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {{--{!! Twitter::generate() !!}--}}
    <!-- OR -->
    {{--{!! SEO::generate() !!}--}}

    <!-- MINIFIED -->
    {{--{!! SEO::generate(true) !!}--}}


    <!-- LUMEN -->
    {{--{!! app('seotools')->generate() !!}--}}

    <link rel="alternate" href="{{url()->current()}}" hreflang="zh-TW">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Robots" content="all">


    <!--facebook><!-->

    {{--<meta property="og:type" content="website"/>--}}
    {{--<meta property="og:url" content="http://35.167.58.15/"/>--}}
    {{--<meta property="og:site_name" content="騏駿科技有限公司"/>--}}
    {{--<meta property="og:image" src="/images/logo.png"/>--}}

    <meta http-equiv="Content-Type" content="text/html; charset=big5"/>
    <meta charset="utf-8">
    <meta name="google-site-verification" content="x4woiAMww5QFanIevDKtpuB8CmIbVHaHLAtZoftvJO4"/>
    <link rel="icon" href="/images/logoicon.ico">
    <link rel="shortcut icon" href="/images/logoicon.ico"/>

    <link rel="stylesheet" media="screen" href="/css/style.css">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    {{--<link rel="stylesheet" href="css/camera.css">--}}
    <script src="/js/jquery.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="http://malsup.github.com/jquery.cycle2.js"></script>
    <script>
        $(document).ready(function () {

        });
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
        $(window).load(

        );


    </script>

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
<header style="border-bottom: 1px solid #000000;">

    @include('layouts.rwdMenu')

    <div class="menu_block">
        <nav>
            @if($lang =='en')
                <li><a href="{{ url('/') }}">繁體中文</a></li>
            @endif

            @if($lang !='en')
                <li><a href="{{ url('/en') }}">English</a></li>
            @endif
        </nav>
        <div class="clear"></div>
    </div>

    <div class="container">
        <h1><a href="/"><img src="/images/logo.png" alt="騏駿"></a>
        </h1>
        @include('layouts.menus')
    </div>

</header>
<div class="clear"></div>

<!--=======content================================-->

<div class="row main-content">
    @yield('content')

</div>

<!--==============================footer=================================-->
<div style="background: #F2F2F2">
    <div class="container" style="padding-top: 10px">
        <div class="col-md-offset-2">
            <footer style="text-align: center">
                <span class="certificate-h1" style="color: #555">
                    © Copyright 2015 Designed by <a href="">ChiJuin</a>
                    </br>
                    新北市新莊區中港路132巷8號1樓
                    </br>
                    電話: (02)8993-3299 | 傳真: (02)8993-3266
                    </br>
                    E-mail:
                <a href="mailto:chijiun.telstar@msa.hinet.net"><font color="blue"><u>
                            chijiun.telstar@msa.hinet.net</font></u></a>
                    </span>
            </footer>
        </div>

    </div>
</div>


</body>
</html>