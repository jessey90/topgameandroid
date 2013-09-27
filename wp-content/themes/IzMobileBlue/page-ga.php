<?php

// Include and instantiate the class.
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;

//Xét theo đại lý
$ref = (isset($_GET['ref'])) ? $_GET['ref'] : 'B56';

?>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="robots" content="index, follow"/>
    <meta name="keywords"
          content="game bai,ta la, tu lo kho,lieng, tien lien, tien len mien nam,iphone game,game iphone,game andoid,android game,download game iphone,free game iphone,game iphone free, game android free"/>
    <meta name="author" content="SongHong Soft"/>
    <meta name="description" content="gameb52.com -Game B52 - GAME MOBILE ĐẦU TIÊN RÚT THƯỞNG THẬT!"/>
    <meta name="generator" content="Songhong Soft"/>
    <title>Chào mừng bạn đến với Game B52 - GAME MOBILE ĐẦU TIÊN RÚT THƯỞNG THẬT!</title>
    <link href="/templates/sh_tc/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Chào mừng bạn đến với Game B52 - GAME MOBILE ĐẦU TIÊN RÚT THƯỞNG THẬT!"/>
    <meta property="og:url" content="http://gameb52.com/"/>
    <meta property="og:site_name" content="Game B52"/>
    <meta property="og:description" content="gameb52.com -Game B52 - GAME MOBILE ĐẦU TIÊN RÚT THƯỞNG THẬT!"/>
    <meta content='game mini, game hay, game mobile' itemprop='name'/>
    <meta content=' Chào mừng bạn đến với Game B52 - GAME MOBILE ĐẦU TIÊN RÚT THƯỞNG THẬT!' itemprop='description'/>
    <link rel="canonical" href="http://gameb52.com/"/>

    <!--//for facebook-->

    <!--//for google-->

    <!-- cho mobile -->
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>
    <!-- cho mobile -->

    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
    <!--<link rel="stylesheet" href="/css/mobile.css" type="text/css" />-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="http://gameb52.com/css/style.css"/>
    <script type="text/javascript" src="http://gameb52.com/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="http://gameb52.com/js/jquery.iosslider.min.js"></script>
    <script type="text/javascript" src="http://gameb52.com/js/jquery.fastClick.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            if ($("body").hasClass("android")) {
                tabDown("#tabAdr");
                $("#tabAdr").css("margin-left", "74px");
                $("#tabIos").hide();
            } else if ($("body").hasClass('ios')) {
                tabDown("#tabIos");
                $("#tabAdr").hide();
                $("#tabIos").css("margin-left", "74px");
            } else {
                tabDown("#tabIos");
            }
            tabAjax("#tabAll");
            $('.shg-slide').iosSlider({
                scrollbar:true,
                snapToChildren:true,
                desktopClickDrag:true,
                scrollbarLocation:'top',
                scrollbarMargin:'10px 10px 0 10px',
                scrollbarBorderRadius:'0',
                navSlideSelector:$('.shg-button .button'),
                infiniteSlider:true,
                autoSlide:true,
                'autoSlideTimer':3000,
                onSlideChange:slideContentChange
            });

            function slideContentChange(args) {
                $(args.sliderObject).parent().find('.shg-button .button').removeClass('selected');
                $(args.sliderObject).parent().find('.shg-button .button:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');
            }
        });

        function ipadGaTabDowm(id) {
            tabDown(id);
            _gaq.push(['_trackEvent', 'GA', 'iPad', 'B56']);
        }
        function javaGaTabDowm(id) {
            tabDown(id);
            _gaq.push(['_trackEvent', 'GA', 'Jaba', 'B56']);
        }
        function iosGaTabDowm(id) {
            tabDown(id);
            _gaq.push(['_trackEvent', 'GA', 'iPhone', 'B56']);
        }
        function androidGaTabDowm(id) {
            tabDown(id);
            _gaq.push(['_trackEvent', 'GA', 'Android', 'B56']);
        }

        function tabDown(id) {
            $(".infoDown,.iarrTop").hide();
            $(id).find(".iarrTop").show();
            var dataId = $(id).data("id");
            $("#" + dataId).show();
        }
        function tabAjax(id) {
            $(".nitem,.dataNews,.dataEmv").removeClass("active");
            $(id).addClass("active");
            var dataId = $(id).data("id");
            $("#" + dataId).addClass("active");
        }

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-43875018-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();


        function download_itun() {

            window.location.href = 'https://itunes.apple.com/vn/app/tinh-kiem/id597768531?ls=1&mt=8'
        }
        /*console.log('aaaaaaaaaaaa');*/
        function downloadTrack() {
            // Track conversion
            var google_conversion_id = 995526959;
            var google_conversion_language = "en";
            var google_conversion_format = "2";
            var google_conversion_color = "ffffff";
            var google_conversion_label = "JULXCNmp6wMQr5La2gM";
            var google_conversion_value = 0;
            // $.getScript("http://www.googleadservices.com/pagead/conversion.js");
            var image = new Image(1, 1);
            image.src = 'http://www.googleadservices.com/pagead/conversion/' + google_conversion_id + '/?label=' + google_conversion_label + ' &guid=ON&script=0';

            var url_click = 'http://soap.soha.vn/api/a/POST/mobile/logClick?app_key=63c97c31b3c7b8ff4bce11668983e416&source=shg';
            jQuery("body").append('<iframe style="position:fixed;top:-8888em;" width="1" height="1" src="' + url_click + '" frameborder="0" allowfullscreen></iframe>');

            window.location = "itms-services://?action=download-manifest&url=http%3A%2F%2F123.30.53.54%3A8080%2Ftinhkiem%2F2.0%2FCaiTinhKiem_2.0.0_Sohagame.plist";
        }
        function download_ggplay() {

            window.location.href = 'https://play.google.com/store/apps/details?id=gamebai.b52.tv'
        }
        function downloadTrack_android() {
            // Track conversion
            var google_conversion_id = 995526959;
            var google_conversion_language = "en";
            var google_conversion_format = "2";
            var google_conversion_color = "ffffff";
            var google_conversion_label = "JULXCNmp6wMQr5La2gM";
            var google_conversion_value = 0;
            // $.getScript("http://www.googleadservices.com/pagead/conversion.js");
            var image = new Image(1, 1);
            image.src = 'http://www.googleadservices.com/pagead/conversion/' + google_conversion_id + '/?label=' + google_conversion_label + ' &guid=ON&script=0';

            var url_click = 'http://soap.soha.vn/api/a/POST/mobile/logClick?app_key=7b27b23ce11a11ae5bedf2fc64624cc8&source=shg';
            jQuery("body").append('<iframe style="position:fixed;top:-8888em;" width="1" height="1" src="' + url_click + '" frameborder="0" allowfullscreen></iframe>');

            window.location = "http://dl.sohagame.vn/tk/android/version3.0.0/vn.sohagame.tinhkiem.3.0.0.apk";
        }
        $(".viewmore").fastClick(function (e) {
            if ($('i', this).hasClass('active')) {
                $(".intro_content").css('height', '120px');
                $('i', this).removeClass('active');
            } else {
                $(".intro_content").css('height', 'auto');
                $('i', this).addClass('active');
            }
        });

    </script>
</head>
<?php
// Include and instantiate the class.
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;

?>

<body class="rs default">


<!------layout new begin -------->
<div id="container" class="container">
<header class="header">
    <?php
    $home = "<a href='http://gameb52.com/' title='Trang chủ' class='home'><span>Trang chủ</span></a>";
    if ($ref == 'B52') {
        echo $home;
    }
    ?>

    <a class="logo" target="_blank" href="http://gameb52.com" title="GameB52">GameB52</a>
</header>
<!--    <div class="backHome"><a href="/" title="">« Trang chủ</a></div>-->
<div class="boxGame pRel">
    <img class="thumb pAbs" src="http://gameb52.com/images/icon.jpg" alt="Game B52" width="64" height="64"/>

    <h1 class="rs">
        Game B52 <span>(version 1.0)</span>
    </h1>


    <p class="rs">
        <?php
        if ($detect->isiPhone() || $detect->isiPad()) {
            echo "Hỗ trợ: iOS 4.3.3 trở lên" . "</br>" . "Kích thước: 12MB";
        } elseif ($detect->isAndroidOS()) {
            echo "Hỗ trợ: Android 2.3 trở lên" . "</br>" . "Kích thước: 7.3MB";
        } else {
            echo "Tải cho các hệ điều hành khác nhau" . "</br>" . "Kích thước: 12MB";
        }
        ?>
    </p>

    <!--<p class="rs">
            Hỗ trợ:<br/>
            Kích thước:</p>-->


</div>
<!--//boxGame-->
<!-- Sau khi đối tác có link iTunes và G-Play thì"
Thay: href thành -> javascript:void(0)
thay tabAdr thành tabIos
sửa css .boxDown .lstDown

 -->
<div class="boxDown">
    <ul class="rs lstDown cf">
        <?php if ($detect->isiPhone()) {
        echo "<li>
            <a href='javascript:void(0)' title='Tải iOS 4.3.3 trở lên' rel='nofollow'
               data-id='dataIos' id='tabIos' onclick='_gaq.push(['_trackEvent', 'Wap', 'iPhone', '" . $ref . "']);' class='btn btn-blue'>
                <span class='icon iios'></span>
                <span class='text'>Tải cho iPhone</span>
                <span class='icon iarrTop'></span>
            </a>
        </li>";
    } elseif ($detect->isAndroidOS()) {
        echo "<li>
            <a href='javascript:void(0)' title='Tải Android 2.3 trở lên' rel='nofollow'
               data-id='dataAndroid' id='tabIos' onclick='_gaq.push(['_trackEvent', 'Wap', 'Android', '" . $ref . "']);' class='btn btn-green'>
                <span class='icon iadr'></span>
                <span class='text'>Tải cho Android</span>
                <span class='icon iarrTop'></span>
            </a>
        </li>";
    } elseif ($detect->isiPad()) {
        echo"<li>
            <a href='javascript:void(0)' title='Tải iOS 4.3.3 trở lên' rel='nofollow'
               data-id='dataIpad' id='tabIos' onclick='_gaq.push(['_trackEvent', 'Wap', 'iPad', '" . $ref . "']);' class='btn btn-blue'>
                <span class='icon iios'></span>
                <span class='text'>Tải cho iPad</span>
                <span class='icon iarrTop'></span>
            </a>
        </li>";
    } else {
        echo "
        <li>
            <a href='javascript:void(0)' title='Tải iOS 4.3.3 trở lên' rel='nofollow'
               data-id='dataIpad' id='tabIos' onclick='ipadGaTabDowm(this)' class='btn btn-blue'>
                <span class='icon iios'></span>
                <span class='text'>Tải cho iPad</span>
                <span class='icon iarrTop'></span>
            </a>
        </li>
        <li>
            <a href='#' title='Tải Symbian OS' rel='nofollow'
               data-id='dataJava' id='tabAdr' onclick='javaGaTabDowm(this)' class='btn btn-orange'>
                <span class='icon ijv'></span>
                <span class='text'>Sắp ra mắt</span>
                <span class='icon iarrTop'></span>
            </a>
        </li>
        <li>
            <a href='javascript:void(0)' title='Tải Android 2.3 trở lên' rel='nofollow'
               data-id='dataAndroid' id='tabIos' onclick='androidGaTabDowm(this)' class='btn btn-green'>
                <span class='icon iadr'></span>
                <span class='text'>Tải cho Android</span>
                <span class='icon iarrTop'></span>
            </a>
        </li>
        <li>
            <a href='javascript:void(0)' title='Tải iOS 4.3.3 trở lên' rel='nofollow'
               data-id='dataIos' id='tabIos' onclick='iosGaTabDowm(this)' class='btn btn-blue'>
                <span class='icon iios'></span>
                <span class='text'>Tải cho iPhone</span>
                <span class='icon iarrTop'></span>
            </a>
        </li>";
    }?>
    </ul>
    <div class="infoDown" id="dataAndroid">
        <a href="https://play.google.com/store/apps/details?id=gamebai.b52.tv&hl=vi" rel="nofollow"
           onclick="download_ggplay();"
           title="Tải từ Google Play" class="item">

            <span class="icon igog"></span>
            <span class="text">Tải từ Google Play</span>
        </a>

        <div class="hr"></div>
        <a href="http://www.gameb52.com/tai/<?php echo $ref?>/Android/b52.apk" rel="nofollow"
           onclick="_gaq.push(['_trackEvent', 'Wap', 'Android', '<?php echo $ref;?>']);"
           title="Tải từ SHS" class="item">

            <span class="icon ishg"></span>
            <span class="text">Tải từ B52</span>
        </a>
        <!-- <a class="item" href="/" title="">
<span class="icon ishg"></span>
<span class="text">Tải bản từ Soha Game</span>
</a>-->
        <div class="guide">
            <!-- Để cài đặt phiên bản này, thiết bị của bạn cần được Jailbreak và cài AppSync tương ứng với phiên bản iOS
           trên máy.-->
        </div>
    </div>

    <div class="infoDown" id="dataIos">
        <a href="https://itunes.apple.com/us/app/gamebai-b52/id693974784?ls=1&mt=8" rel="nofollow" onclick="download_itun();"
           title="Click vào đây để tài từ Apple Store" class="item">
            <span class="icon iapp"></span>
            <span class="text">Click vào đây để tài từ Apple Store</span>
        </a>
        <div class="hr"></div>
        <a href="<?php if($detect->isiPhone())
        {
            echo "itms-services://?action=download-manifest&url=http://www.gameb52.com/tai/".$ref."/iPhone/B52.plist";
        }else{
            echo "http://www.gamebaib52.com/download/B56/iPhone/b52_iphone.ipa";
        }
        ?>"
           rel="nofollow" onclick="_gaq.push(['_trackEvent', 'Wap', 'iPhone', '<?php echo $ref;?>']);"
           title="Click vào đây để tải bản Jailbreak" class="item">
            <span class="icon ijai"></span>
            <span class="text">Click vào đây để tải bản Jailbreak</span>
        </a>

        <div class="guide">
            Để cài đặt phiên bản này, thiết bị của bạn cần được Jailbreak và cài AppSync.
        </div>
        <!--<ul class="cf">
            <li>
                <a href="http://tinhkiem.sohagame.vn/thu-vien/79-huong-dan-cai-dat/845-huong-dan-cai-dat-installous-appsync.html" title="" class="btn btn-gray">Cài
                    AppSync</a>
            </li>
            <li>
                <a href="http://m.tinhkiem.sohagame.vn/thu-vien/79-huong-dan-cai-dat/860-huong-dan-cai-dat-tinh-kiem-qua-cai-tinh-kiem.html"
                   title="" class="btn btn-gray">Jailbreak</a>
            </li>

        </ul>-->
    </div>

    <div class="infoDown" id="dataIpad">
        <a href="https://itunes.apple.com/us/app/gamebai-b52-hd/id693982277?ls=1&mt=8" rel="nofollow"
           title="Click vào đây để tài từ Apple Store" class="item">

            <span class="icon iapp"></span>
            <span class="text">Click vào đây để tài từ Apple Store</span>
        </a>
        <div class="hr"></div>
        <a href="<?php if($detect->isiPhone())
    {
        echo "itms-services://?action=download-manifest&url=http://www.gameb52.com/tai/".$ref."/iPad/B52.plist";
    }else{
        echo "http://www.gamebaib52.com/download/B56/iPad/b52_ipad.ipa";
    }
        ?>"
           rel="nofollow" onclick="_gaq.push(['_trackEvent', 'Wap', 'iPad', '<?php echo $ref;?>']);"
           title="Tải từ SHS" class="item">

            <span class="icon ishg"></span>
            <span class="text">Tải Free</span>
        </a>
        <!-- <a class="item" href="/" title="">
<span class="icon ishg"></span>
<span class="text">Tải bản từ Soha Game</span>
</a>-->
        <div class="guide">
            <!-- Để cài đặt phiên bản này, thiết bị của bạn cần được Jailbreak và cài AppSync tương ứng với phiên bản iOS
           trên máy.-->
        </div>
    </div>

    <div class="infoDown" id="dataJava">
        <!--<a href="javascript:void(0);" rel="nofollow" onclick="download_ggplay();"
title="Tải từ Google Play" class="item">

<span class="icon igog"></span>
<span class="text">Tải từ Google Play</span>
</a>-->
        <div class="hr"></div>
        <a href="javascript:void(0);" rel="nofollow"
           onclick="_gaq.push(['_trackEvent', 'Wap', 'Java', '<?php echo $ref;?>']);"
           title="Tải từ SHS" class="item">

            <span class="icon ishg"></span>
            <span class="text">Chưa ra mắt</span>
        </a>
        <!-- <a class="item" href="/" title="">
<span class="icon ishg"></span>
<span class="text">Tải bản từ Soha Game</span>
</a>-->
        <div class="guide">
            <!-- Để cài đặt phiên bản này, thiết bị của bạn cần được Jailbreak và cài AppSync tương ứng với phiên bản iOS
           trên máy.-->
        </div>
    </div>
</div>
<!--//boxDown-->

<div class="boxNews">
<div class="tab">
    <a href="javascript:void(0);" title="Tất cả" rel="nofollow" data-id="dataAll" id="tabAll"
       class="nitem tabAll active" onclick="tabAjax(this)"><span>Giới thiệu</span></a>
    <a href="javascript:void(0);" title="Tin tức" rel="nofollow" data-id="dataNews" id="tabNews"
       class="nitem tabNews" onclick="tabAjax(this)"><span>Sự kiện</span></a>
    <a href="javascript:void(0);" title="Cài đặt-Gỡ bỏ" rel="nofollow" data-id="dataUti" id="tabUti"
       class="nitem tabNews" onclick="tabAjax(this)"><span>Cài đặt-gỡ bỏ</span></a>
    <a href="javascript:void(0);" title="Tin tức" rel="nofollow" data-id="dataUse" id="tabUse"
       class="nitem tabNews" onclick="tabAjax(this)"><span>Điều khoản sử dụng</span></a>
    <!--<a href="javascript:void(0);" title="Tin tức" rel="nofollow" data-id="dataEmv" id="tabEmv"
       class="nitem tabSP" onclick="tabAjax(this)"><span>Dòng máy</span></a>-->
</div>
<!--//tabIn-->
<div class="dataNews" id="dataAll">

    <b>1. Giới thiệu:</b> <br><br>


    Game B52 – Game đầu tiên và duy nhất tại Việt Nam cho phép RÚT THƯỞNG THẬT. Bạn không cần phải đua top hay tham gia event may mắn để nhận thưởng. Chỉ cần bạn chơi game và thắng cuộc! Khi ấy, bạn có thể ĐỔI THƯỞNG từ đồng BOM (tiền ảo trong game) sang các phần thưởng lớn sau: <br><br>

    -          <b>Thẻ cào mệnh giá 100.000, 200.000 và 500.000 VNĐ</b> <br><br>

    -          <b>Vật phẩm: điện thoại, máy tính, TV… </b><br><br>

    <div class="box-slide">
        <div class='shg-slide'>
            <div class='slider'>
                <div class='item' id='item0'>
                    <img alt="" src="http://gameb52.com/wp-content/uploads/2013/09/1.png"
                         width="300" height="150">
                </div>
                <div class='item' id='item1'>
                    <img alt="" src="http://gameb52.com/wp-content/uploads/2013/09/2.png"
                         width="300" height="150">
                </div>
                <div class='item' id='item2'>
                    <img alt="" src="http://gameb52.com/wp-content/uploads/2013/09/3.png"
                         width="300" height="150">
                </div>
                <div class='item' id='item3'>
                    <img alt="" src="http://gameb52.com/wp-content/uploads/2013/09/4.png"
                         width="300" height="150">
                </div>
                <div class='item' id='item4'>
                    <img alt="" src="http://gameb52.com/wp-content/uploads/2013/09/5.png"
                         width="300" height="150">
                </div>
                <div class='item' id='item5'>
                    <img alt="" src="http://gameb52.com/wp-content/uploads/2013/09/6.png"
                         width="300" height="150">
                </div>
                <div class='item' id='item6'>
                    <img alt="" src="http://gameb52.com/wp-content/uploads/2013/09/7.png"
                         width="300" height="150">
                </div>
            </div>

            <div class='shg-button'>
                <div class="button selected"></div>
                <div class="button"></div>
                <div class="button"></div>
                <div class="button"></div>
                <div class="button"></div>
                <div class="button"></div>
                <div class="button"></div>
                <div class="button"></div>

            </div>
        </div>
        <!--//shg-slide-->
    </div>
    <!--//box-slide-->
    <div id="gioithieu">
        <div class="intro_content">
            <div class="title">Giới thiệu</div>
            <div class="viewmore">
                Khi cần hỗ trợ thông tin, vui lòng liên hệ với chúng tôi qua các kênh Chăm sóc khách hàng sau: <br><br>

                Hotline: 012.35.18.7979 <br>
                Khi cần hỗ trợ thông tin, vui lòng liên hệ với chúng tôi qua các kênh Chăm sóc khách hàng sau: <br><br>

                Hotline: 012.35.18.7979 <br>
                Khi cần hỗ trợ thông tin, vui lòng liên hệ với chúng tôi qua các kênh Chăm sóc khách hàng sau: <br><br>

                Hotline: 012.35.18.7979 <br>
                Khi cần hỗ trợ thông tin, vui lòng liên hệ với chúng tôi qua các kênh Chăm sóc khách hàng sau: <br><br>

                Hotline: 012.35.18.7979 <br>

                <p>
                    <br>
                </p>
                <i class="arrow"></i>
            </div>
        </div>
    </div>


    Khi cần hỗ trợ thông tin, vui lòng liên hệ với chúng tôi qua các kênh Chăm sóc khách hàng sau: <br><br>

    Hotline: 012.35.18.7979 <br>

    Email: <a href="mailto:cskh.b52@gmail.com" style="text-decoration: underline;color: #0000ff">cskh.b52@gmail.com</a> <br>

    Skype: cskh.b52 <br>

    Yahoo: b52.cskh <br>

    Diễn đàn: <a href="http://forum.b52.tv/" style="text-decoration: underline;color: #0000ff">http://forum.b52.tv/</a> <br><br>

    Fanpage: <a href="https://www.facebook.com/gameb52" style="text-decoration: underline;color: #0000ff">https://www.facebook.com/gameb52</a> <br><br>

</div>
<div class="dataNews" id="dataNews">
    <p style="text-align: justify;"><span style="color: #000000; font-size: 16px;"><b><span style="color: #ff0000;">EVENT
            1: Tặng BOM chào đón user mới</b></span><br><br>

        - Thời gian khuyến mại: 01 tuần, từ 0:00 ngày <b>4/9/2013 – </b>23:59’ ngày<b> 10/9/2013</b>;<br><br>

        - Hình thức khuyến mại: <span style="color: #618200;"> <b>Tặng 3.333 BOM cho tất cả user đăng ký mới;</b></span><br><br>

        - Quy định: <b>Mỗi thiết bị chỉ có 01 tài khoản được nhận được khuyến mại</b>.<br><br>

        <br>

    <p style="text-align: justify;"><span style="color: #000000; font-size: 16px;"><b><span
            style="color: #ff0000;"><b>Event 2: Tặng BOM tri ân khách hàng</b></span><br><br>

        - Thời gian khuyến mại: 01 tuần, từ 0:00 ngày <b>4/9/2013 – </b>23:59’ ngày<b> 10/9/2013</b>;<br><br>

        - Hình thức khuyến mại: <span style="color: #ff9900;"><b>Tặng 1.000 BOM/ngàycho toàn bộ khách hàng đăng ký tài khoản trên hệ thống của
            Game B52</b></span>; không áp dụng với tài khoản chơi thử và đăng nhập qua Facebook.<br><br>

        - Quy định: <b>Mỗi thiết bị chỉ có 01 tài khoản được nhận BOM khuyến mại mỗi ngày</b>.<br><br>
        <br></b>
    <b>2. Event:</b> <br><br>

        “Kích hoạt” Game B52 trên App Store (20 – 30/9/2013) <br><br>

        Nhân dịp này, Game B52 dành tặng <b>3.000 BOM</b> vào tài khoản cho tất cả các user đăng ký trên thiết bị mới. Với khách hàng cũ có tài khoản dưới <b>2.000 BOM</b>, tài khoản sẽ nhận được cộng thêm 2.000 BOM vào ngày kế tiếp. <br><br>

        Thời gian khuyến mại kéo dài từ <b>0h ngày 20/9 đến 23h59’ ngày 30/9/2013.</b> <br><br>

        Lưu ý: Mỗi thiết bị chỉ có 01 tài khoản nhận được khuyến mại. <br><br>

        Nếu bạn chưa chơi Game B52, hãy download ngay! Chắc chắn bạn sẽ có những trải nghiệm thú vị! <br><br>

        <b>“Chơi Ảo”… nhưng “Thưởng Thật”… Chỉ có thể là B52!</b> <br><br>
    </p>
</div>
<div class="dataNews" id="dataUse">
    <strong>ĐIỀU KHOẢN SỬ DỤNG GAME B52</strong><br>

    Các điều khoản thoả thuận sau đây thể hiện mong muốn hợp tác hiệu quả – tốt đẹp giữa Ban quản trị Game B52 (được gọi chung là “Chúng tôi“) và người sử dụng dịch vụ (còn được gọi là “người chơi”, “thành viên” hoặc “khách hàng”). <br>

    Chúng tôi đề nghị bạn dành thời gian để đọc các điều khoản sử dụng dưới đây khi chính thức tham gia Game B52. Mục đích của việc làm này là đảm bảo các quyền và lợi ích chính đáng của bạn! <br>

    <b>ĐIỀU 1. ĐIỀU KHOẢN CHUNG</b><br>

    1.1. Chúng tôi là Ban quản trị, nhà sản xuất và phát hành Game B52. Bạn là một khách hàng – người sử dụng dịch vụ trò chơi Game B52 của chúng tôi. Sử dụng dịch vụ của chúng tôi đồng nghĩa với việc bạn chấp nhận các điều khoản do chúng tôi ban hành. <br>

    1.2. Các điều khoản trong văn bản này áp dụng đối với mọi khách hàng sử dụng dịch vụ Game B52, bất kể thành viên đăng ký mới, người chơi thử hay các khách hàng khác. <br>

    1.3. Chúng tôi có quyền thay đổi các điều khoản này bất cứ lúc nào. Do vậy, bạn cần theo dõi thường xuyên các thông tin được Chúng tôi cập nhật. <br>

    <b>ĐIỀU 2. QUẢN LÝ TÀI KHOẢN</b><br>

    2.1. Bạn phải từ 18 tuổi trở lên để có thể đăng ký làm thành viên và sở hữu một tài khoản Game B52. <br>

    2.2. Các thông tin đăng ký thành viên bao gồm: tên đăng nhập và mật khẩu. <br>

    2.3. Bạn buộc phải nhập chính xác số điện thoại di động để nhận được hỗ trợ khi cần thiết. Mọi giao dịch liên quan đến tài khoản (khôi phục mật khẩu, đổi thưởng, hỗ trợ thông tin…) và giải quyết khiếu nại sẽ được xử lý thông qua số điện thoại này. <br>

    2.4. Bạn có quyền thay đổi và cập nhật các thông tin cá nhân của mình. Trong trường hợp cần thiết, Chúng tôi có quyền yêu cầu bạn phải xác minh thông tin do bạn cung cấp. <br>

    2.5. Bạn phải chịu trách nhiệm bảo mật tài khoản của mình và không được phép cho người khác sử dụng chung tài khoản và mật khẩu của mình. <br>

    2.6. Trách nhiệm về dịch vụ của chúng tôi với bạn chỉ áp dụng khi bạn là khách hàng đăng ký thành viên chính thức và cung cấp thông tin cá nhân chính xác. Nếu bạn khai báo không chính xác những thông tin chúng tôi yêu cầu, Chúng tôi có quyền ngừng cung cấp các dịch vụ hỗ trợ bạn. <br>

    2.7. Tài khoản của bạn sẽ bị xóa khỏi hệ thống một trong các trường hợp sau: <br>

    2.7.1. Tài khoản không hoạt động trong vòng 30 ngày kể từ ngày đăng ký; <br>

    2.7.2. Tài khoản không hoạt động trong vòng 90 ngày kể từ giao dịch gần nhất. <br>

    2.8. Quyền riêng tư: Những thông tin cá nhân bạn cung cấp trong quá trình đăng ký sẽ được giữ bí mật và chỉ được sử dụng cho mục đích nội bộ, ví dụ như sử dụng thông tin mà chúng tôi thu thập được từ bạn để cải thiện dịch vụ của chúng tôi. Chúng tôi sẽ không cung cấp bất cứ thông tin cá nhân nào của bạn cho một bên thứ ba ngoại trừ trường hợp cần thiết cho mục đích điều tra và giải quyết các vấn đề liên quan đến pháp luật. <br>

    <b>ĐIỀU 3. GIAO DỊCH TRONG GAME</b><br>

    3.1. Bạn phải tự chịu trách nhiệm đối với mọi hành vi giao dịch trong game của mình, cũng như các thông tin đăng tải khi chat hay trên diễn đàn. <br>

    3.2. Bạn cần sử dụng ngôn ngữ lịch sự, văn minh khi trao đổi với các thành viên khác và khi đề nghị trợ giúp thông tin từ Chúng tôi. <br>

    3.3. Khi cần hỗ trợ, bạn vui lòng liên hệ với chúng tôi qua các kênh Chăm sóc khách hàng và trình bày cụ thể, chi tiết các câu hỏi về dịch vụ của mình. Chúng tôi sẽ không xử lý các yêu cầu hỗ trợ khi phát hiện các dấu hiệu thông tin được cung cấp không trung thực. <br>

    <b>ĐIỀU 4. CÁC HÀNH VI BỊ CẤM</b><br>

    -       Mua bán hoặc chuyển nhượng tài khoản <br>

    -       Mua bán hoặc chuyển nhượng tiền trong game <br>

    -       Sử dụng tên đăng nhập và hình ảnh đại diện không lành mạnh, mang ý nghĩa xấu, phản cảm <br>

    -       Gian lận, lợi dụng kẽ hở của game để trục lợi <br>

    -       Tuyên truyền, chống phá và xuyên tạc thông tin có động cơ chính trị, tôn giáo hay phân biệt chủng tộc <br>

    -       Sử dụng các chương trình, công cụ hay hình thức nào khác để can thiệp vào trò chơi hay làm thay đổi kết quả chơi bình thường (hack, cheat, bots) <br>

    -       Phát tán, truyền bá hay cỗ vũ cho bất kỳ hoạt động nào nhằm can thiệp, phá hoại hay xâm nhập vào dữ liệu của trò chơi và hệ thống máy chủ <br>

    -       Đăng nhập trái phép hoặc tìm cách đăng nhập trái phép cũng như gây thiệt hại cho hệ thống máy chủ của trò chơi <br>

    -       Quấy rối, làm phiền hay xúc phạm đối với người chơi khác và thành viên Ban quản trị <br>

    -       Mạo nhận hay cố ý làm người khác tưởng lầm mình là một người chơi khác trong game <br>

    -       Tuyên truyền, chống phá và xuyên tạc chính quyền, thể chế chính trị, và các chính sách của nhà nước <br>

    -       Bàn luận về các vấn đề Chính trị, tôn giáo, sắc tộc, giới tính và các chủ đề nhạy cảm khác <br>

    -       Gây rối, làm tổn hại đến uy tín của các sản phẩm game cũng như công ty phát hành dưới bất kỳ hình thức nào <br>

    -       Quảng cáo, tung tin rao vặt, gây nhiễu loạn thông tin <br>

    -       Lợi dụng việc chơi game để tổ chức các hình thức cá cược, cờ bạc hoặc các thỏa thuận bất hợp pháp khác <br>

    -       Các hành vi phá hoại hoặc trục lợi bất chính khác. <br>

    <b>ĐIỀU 5. XỬ LÝ VI PHẠM</b> <br>

    5.1. Nếu Chúng tôi phát hiện bạn vi phạm một trong các mục tại “Điều 4”, Chúng tôi sẽ ngay lập tức khóa tài khoản của bạn  mà không cần có thông báo trước. Đồng thời, Chúng tôi có thể khởi tố đối với từng trường hợp cụ thể dựa trên mức độ vi phạm. Chúng tôi cũng có thể cung cấp thông tin của người vi phạm cho các cơ quan chức năng để xử lý theo pháp luật. <br>

    5.2. Chúng tôi có toàn quyền thay đổi hoặc bổ sung các điều khoản vào khung quy định xử lý vi phạm bất kỳ thời điểm nào. <br>

    5.3. Chúng tôi đề nghị bạn nghiêm túc thực hiện các nội quy trong bản “Điều khoản sử dụng này”. Đồng thời, Chúng tôi sẵn sàng tiếp nhận phản ánh của bạn về các trường hợp vi phạm nhằm mục tiêu xây dựng một môi trường giải trí lành mạnh – bình đẳng với tất cả khách hàng. <br>

    <b>ĐIỀU 6. MIỄN TRỪ TRÁCH NHIỆM</b><br>

    6.1. Chúng tôi khước từ các trách nhiệm về nội dung và độ chính xác của thông tin do các thành viên đăng tải hoặc từ các website bên ngoài. <br>

    6.2. Mọi thông tin, tính năng sử dụng… của Game B52 đều có thể được cập nhật vào bất kỳ thời điểm nào để phù hợp hơn về nhu cầu sử dụng của khách hàng và sự phát triển của dịch vụ. Chúng tôi sẽ có thông báo trên hệ thống và đề nghị bạn luôn cập nhật các tin tức mới. Do vậy, chúng tôi không chịu trách nhiệm đối với các trường hợp xảy ra do bạn không cập nhật các thông tin đã thông báo từ trước đó. <br>

    6.3. Chúng tôi không chịu trách nhiệm trong bất kỳ trường hợp nào liên quan đến các sự cố thuộc lỗi của bạn hay lỗi của bên thứ ba như: sự gián đoạn hoặc lỗi truyền tín hiệu tới/hoặc từ dịch vụ, trang web của chúng tôi do phía nhà cung cấp dịch vụ Internet hoặc cá nhân người sử dụng; các lỗi, virus, phần mềm gián điệp, hoặc những phần mềm tương tự như vậy có thể bị chuyển tới/hoặc từ hệ thống của chúng tôi bởi bên thứ ba; các lỗi hoặc sai sót trong nội dung tin tức hoặc những thiệt hại mắc phải do việc bạn sử dụng các nội dung trên hoặc thông qua bên thứ ba. <br>

    6.4. Bạn đồng ý miễn trừ trách nhiệm cho Chúng tôi trong những trường hợp bất khả kháng như chập điện, hư hỏng phần cứng, phần mềm, hoặc do thiên tai, chiến tranh… và chấp nhận những thiệt hại (nếu có). <br>
</div>
<div class="dataNews" id="dataUti">
    <b>HƯỚNG DẪN CÀI ĐẶT GAME B52</b><br><br>

    Bước 1: Các bạn vào trình duyệt wap địa chỉ <b>http://gamemobihay.com/ga</b><br>
    Bước 2: Chọn file b52<br>
    Bước 3: Bấm OK để cài đặt<br>

    <b>HƯỚNG DẪN GỠ BỎ GAME B52</b><br>

    Bước 1: Các bạn vào trình cài đặt hay biểu tượng cài đặt trong điện thoại (trên màn hình).<br>
    Bước 2: Các bạn vào mục Quản lý ứng dụng ( ở đây có tất cả các ứng dụng game mà bạn cài đặt)<br>
    Bước 3: Bạn chọn ứng dụng B52 mà bạn cần gỡ bỏ<br>
    Bước 4: Bạn chọn Gỡ bỏ cài đặt<br>
    Lưu ý: Quá trình gỡ bỏ sẽ mất vài phút, bạn đợi cho nó chạy xong là hoàn tất quá trình gỡ cài đặt.<br>

    <!--<div>
        <ul>
            <li style="margin: 0px 0px 10px 0px;">
                Game B52 phiên bản <b>iPhone (jailbreak)</b><br> <a
                    href="itms-services://?action=download-manifest&url=http://www.gameb52.com/tai/<?php /*echo $ref*/?>/iPhone/B52.plist"
                    class="classname3">Tải miễn phí</a>
            </li>
            <br>
            <li style="margin: 0px 0px 10px 0px;">
                Game B52 phiên bản <b>iPad (jailbreak)</b><br><a
                    href="itms-services://?action=download-manifest&url=http://www.gameb52.com/tai/<?php /*echo $ref*/?>/iPad/B52.plist"
                    class="classname1">Tải miễn phí</a>
            </li>
            <br>
            <li style="margin: 0px 0px 10px 0px;">
                Game B52 phiên bản <b>Android</b><br> <a
                    href="http://www.gameb52.com/tai/<?php /*echo $ref*/?>/Android/b52.apk" class="classname2">Tải miễn
                phí</a>
            </li>
            <br>
            <li style="margin: 0px 0px 10px 0px;">
                Tải file IPA về <b>PC</b><br> <a href="http://gamebaib52.com/download/iPhone/B52.ipa"
                                                 class="classname3">Tải miễn phí</a>
            </li>
        </ul>

    </div>-->
</div>
<!--//boxNews-->

<footer class="footer">
    © 2013 Game B52 - Hotline: 01235.18.7979
</footer>

</div>
<!--//container-->

</body>
<script type="text/javascript"
        src="http://shgimg.vcmedia.vn/frontend/navtopall/js/changevcc-min.js?v=1377054851"></script>
<style type="text/css">
    .classname {
        -moz-box-shadow: inset 0px 1px 0px 0px #769011;
        -webkit-box-shadow: inset 0px 1px 0px 0px #769011;
        box-shadow: inset 0px 1px 0px 0px #769011;
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #aecd33), color-stop(1, #607604));
        background: -moz-linear-gradient(center top, #aecd33 5%, #607604 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr = '#ededed', endColorstr = '#dfdfdf');
        background-color: #ededed;
        -moz-border-radius: 6px;
        -webkit-border-radius: 6px;
        border-radius: 6px;
        border: 1px solid #637906;
        display: inline-block;
        color: #ffffff;
        font-family: arial;
        font-size: 15px;
        font-weight: bold;
        padding: 4px 18px;
        text-decoration: none;
        text-shadow: 1px 1px 0px #170000;
    }

    .classname1 {
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f6a700), color-stop(1, #e87500));
        background: -moz-linear-gradient(center top, #f6a700 5%, #e87500 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr = '#ededed', endColorstr = '#dfdfdf');
        background-color: #ededed;
        -moz-border-radius: 6px;
        -webkit-border-radius: 6px;
        border-radius: 6px;
        border: 1px solid #a03800;
        display: inline-block;
        color: #ffffff;
        font-family: arial;
        font-size: 15px;
        font-weight: bold;
        padding: 1px 7px;
        text-decoration: none;
        text-shadow: 1px 1px 0px #170000;
    }

    .classname2 {
        background: -moz-linear-gradient(top, #afec5a 0%, #abe657 15%, #9ed451 35%, #7fac41 73%, #6f9639 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #afec5a), color-stop(15%, #abe657), color-stop(35%, #9ed451), color-stop(73%, #7fac41), color-stop(100%, #6f9639));
        background: -webkit-linear-gradient(top, #afec5a 0%, #abe657 15%, #9ed451 35%, #7fac41 73%, #6f9639 100%);
        background: -moz-linear-gradient(center top, #e87500 5%, #f6a700 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr = '#ededed', endColorstr = '#dfdfdf');
        background-color: #ededed;
        -moz-border-radius: 6px;
        -webkit-border-radius: 6px;
        border-radius: 6px;
        border: 1px solid #4e6b27;
        display: inline-block;
        color: #ffffff;
        font-family: arial;
        font-size: 15px;
        font-weight: bold;
        padding: 1px 7px;
        text-decoration: none;
        text-shadow: 1px 1px 0px #170000;
    }

    .classname3 {
        background: -moz-linear-gradient(top, #5ab8ee 0%, #5ab8ee 8%, #54a6e3 27%, #426fc1 73%, #3a56b2 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #5ab8ee), color-stop(8%, #5ab8ee), color-stop(27%, #54a6e3), color-stop(73%, #426fc1), color-stop(100%, #3a56b2));
        background: -webkit-linear-gradient(top, #5ab8ee 0%, #5ab8ee 8%, #54a6e3 27%, #426fc1 73%, #3a56b2 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr = '#ededed', endColorstr = '#dfdfdf');
        background-color: #ededed;
        -moz-border-radius: 6px;
        -webkit-border-radius: 6px;
        border-radius: 6px;
        border: 1px solid #284070;
        display: inline-block;
        color: #ffffff;
        font-family: arial;
        font-size: 15px;
        font-weight: bold;
        padding: 1px 7px;
        text-decoration: none;
        text-shadow: 1px 1px 0px #170000;
    }
</style>