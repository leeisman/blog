<html>
<head>
    <title>Your Website Title</title>
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="騏駿科技有限公司">
    <meta property="og:description" content="本公司為一專業電池組裝製造廠，主要業務如鋰離子電池組、鋰聚合物電池組、鎳氫鎳鎘電池組，將其電池成品完成組裝後，應用於可攜式3C產品及OEM代工，研發設計製造等。"/>
    <meta property="og:url" content="http://35.167.58.15/"/>
    <meta property="og:site_name" content="騏駿科技有限公司"/>
    <meta property="og:image" src="images/logo.png" />
    <script src="js/jquery.js"></script>
    <meta http-equiv="Content-Security-Policy" content="127.0.0.1:8000">
</head>
<body>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>

    $(function() {
        $('#send_api').click(function(){
            $name = 'join';
            $.ajax({
                type: 'GET',
                url: 'http://127.0.0.1:8000/shop',
                data: {name: $name, address: 'Boston'},
                success: function(msg) {
                    alert('Data Saved: ' + msg);
                }
            });
        });

    });


</script>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.8";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your share button code -->
<div class="fb-share-button"
     data-href="http://35.167.58.15/share"
     data-layout="button_count">
</div>

<div>

    <input type="button" id="send_api" value="Send" >
</div>

</body>
</html>