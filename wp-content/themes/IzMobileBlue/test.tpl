<!DOCTYPE html>
<html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8" />
    <title>Thời trang nam Somiviet áo sơ mi nam cao cấp, thời trang công sở đẹp<?php //echo $title; ?></title>
    <base href="<?php echo $base; ?>" />
    <?php if ($description) { ?>
    <meta name="description" content="Thời trang nam Somiviet - cung cấp áo sơ mi nam công sở Hàn Quốc giá rẻ năm 2013 trên toàn quốc giá tốt. áo sơ mi nam, áo vest thời trang mới đẹp nhất<?php //echo $description; ?>" />
    <?php } ?>
    <?php if (false && $keywords) { ?>
    <meta name="keywords" content="<?php echo $keywords; ?>" />
    <?php } ?>
    <meta name="keywords" content="sơ mi nam, ao so mi nam, thoi trang nam, thoi trang so mi, so mi viet, do nam, ao so mi dai tay, ao so mi ngan tay, mua ao somi nam" />
    <meta name="robots" content="noodp,index,follow" />
    <meta name="author" content="somiviet.com"
    <meta name="copyright" content="Copyright &copy; 2012 by somiviet" />
    <meta name="abstract" content="somiviet - Thời trang sơ mi nam chất lượng cao - giá tốt" />
    <meta http-equiv="Content -Language" content="vi" />
    <meta name="Language" content="vi" />
    <meta name="distribution" content="Global" />
    <meta name="google-site-verification" content="oVLSc-wqXAXBcR5qdG2YuAIMg7mIkp7SJUVWD-P1KzY" />
    <meta http-equiv="refresh" content="1200" />
    <meta name="RATING" content="GENERAL" />
    <?php if ($icon) { ?>
    <link href="<?php echo $icon; ?>" rel="icon" />
    <?php } ?>
    <?php foreach ($links as $link) { ?>
    <link href="<?php echo $link['href']; ?>" rel="<?php echo $link['rel']; ?>" />
    <?php } ?>
    <link rel="stylesheet" type="text/css" href="catalog/view/theme/default/stylesheet/stylesheet.css?version=1.11" />
    <?php foreach ($styles as $style) { ?>
    <link rel="<?php echo $style['rel']; ?>" type="text/css" href="<?php echo $style['href']; ?>" media="<?php echo $style['media']; ?>" />
    <?php } ?>
    <script type="text/javascript" src="catalog/view/javascript/jquery/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="catalog/view/javascript/jquery/ui/jquery-ui-1.8.16.custom.min.js"></script>
    <link rel="stylesheet" type="text/css" href="catalog/view/javascript/jquery/ui/themes/ui-lightness/jquery-ui-1.8.16.custom.css" />
    <script type="text/javascript" src="catalog/view/javascript/common.js"></script>
    <?php foreach ($scripts as $script) { ?>
    <script type="text/javascript" src="<?php echo $script; ?>"></script>
    <?php } ?>
    <!-- <script type="text/javascript" src="catalog/view/javascript/jquery/easyzoom.min.js"></script> -->
    <script type="text/javascript" src="catalog/view/javascript/jquery/jquery.elevatezoom.min.js"></script>
    <!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="catalog/view/theme/default/stylesheet/ie7.css" />
    <![endif]-->
    <!--[if lt IE 7]>
    <link rel="stylesheet" type="text/css" href="catalog/view/theme/default/stylesheet/ie6.css" />
    <script type="text/javascript" src="catalog/view/javascript/DD_belatedPNG_0.0.8a-min.js"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('#logo img');
    </script>
    <![endif]-->
    <meta property="fb:app_id" content="531233593609162"/>
    <?php if ($stores) { ?>
    <script type="text/javascript"><!--
    $(document).ready(function() {
        <?php foreach ($stores as $store) { ?>
            $('body').prepend('<iframe src="<?php echo $store; ?>" style="display: none;"></iframe>');
        <?php } ?>
    });
    //--></script>
    <?php } ?>
    <?php echo $google_analytics; ?>
</head>
<body>
<div class="menubar">
    <div class="ContentMenu">
        <div class="MenuTitle"><a rel="nofollow" href="<?php echo $home; ?>"><h2>Trang chủ</h2></a></div>
        <div class="SepBotMen">&nbsp;</div>
        <div class="MenuTitle"><a rel="nofollow" href="http://somiviet.com/i/10/dong-phuc-va-qua-tang-cho-doanh-nghiep.html"><h2>Đồng phục &amp; quà tặng cho doanh nghiệp</h2></a></div>
        <div class="SepBotMen">&nbsp;</div>
        <div class="MenuTitle"><a rel="nofollow" href="http://somiviet.com/i/8/doi-tra-ao-trong-vong-7-ngay.html"><h2>Đổi trả hàng trong 7 ngày</h2></a></div>
        <div class="SepBotMen">&nbsp;</div>
        <div class="MenuTitle"><a rel="nofollow" href="http://somiviet.com/i/9/he-thong-cua-hang.html"><h2>Hệ thống cửa hàng</h2></a></div>
        <div class="SepBotMen">&nbsp;</div>
        <div class="MenuTitle"><a rel="nofollow" href="http://somiviet.com/i/4/gioi-thieu-thuong-hieu-somiviet.html"><h2>Thương hiệu</h2></a></div>
        <div class="SepBotMen">&nbsp;</div>
        <div class="MenuTitle"><a rel="nofollow" href="http://somiviet.com/index.php?route=information/news&cat_id=6"><h2>Tuyển dụng</h2></a></div>
        <div class="SepBotMen">&nbsp;</div>
        <div class="MenuTitle"><a rel="nofollow" href="<?php echo $contact; ?>"><h2>Liên hệ</h2></a></div>
        <div style="clear:both;"></div>
    </div>
</div>
<div id="container" style="margin-top:28px;">
    <div id="header">
        <?php if ($logo) { ?>
        <div id="logo"><a href="<?php echo $home; ?>"><img src="<?php echo $logo; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" /></a></div>
        <?php } ?>
        <?php // echo $language; ?>
        <?php //echo $currency; ?>
        <?php //echo $cart; ?>
        <div id="search">
            <input type="text" name="search" placeholder="<?php echo $text_search; ?>" value="<?php echo $search; ?>" />
            <div class="button-search"></div>
        </div>
        <div class="HeaderLinks">
            <!--  <a href="<?php echo $wishlist; ?>" class="first">Danh sách yêu thích</a> -->
            <?php if (!$logged) { ?>
            <a rel="nofollow" href="<?php echo $login;?>" class="lnkLogin">Đăng nhập</a>
            <a rel="nofollow" href="<?php echo $account; ?>" class="lnkRegister">Đăng ký tài khoản</a>
            <?php } else { ?>
            <a rel="nofollow" href="<?php echo $logout; ?>" class="lnkLogin">Thoát</a>
            <a rel="nofollow" href="<?php echo $account; ?>" class="lnkRegister">Tài khoản</a>
            <?php } ?>

        </div>
        <div class="HeaderOnlineSupport">
            <a href="#">Hỗ trợ trực tuyến</a>
        </div>
        <!--
          <div class="HeaderShoppingCart">
            <a href="<?php echo $shopping_cart;?>">Giỏ hàng</a>
          </div>
          <div style="position:absolute;right:10px;top:91px">
            <div class="fb-like" data-href="https://www.facebook.com/SOMIVIET.HANOI" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false"></div>
          </div> -->
        <!--   <div id="welcome">
            <?php if (!$logged) { ?>
            <?php echo $text_welcome; ?>
            <?php } else { ?>
            <?php echo $text_logged; ?>
            <?php } ?>
          </div> -->
        <!-- <div class="links">
          <a href="<?php echo $home; ?>"><?php echo $text_home; ?></a>
          <a href="<?php echo $wishlist; ?>" id="wishlist-total"><?php echo $text_wishlist; ?></a>
          <a href="<?php echo $account; ?>"><?php echo $text_account; ?></a>
          <a href="<?php echo $shopping_cart; ?>"><?php echo $text_shopping_cart; ?></a>
          <a href="<?php echo $checkout; ?>"><?php echo $text_checkout; ?></a>
        </div> -->
    </div>
    <div class="HeaderBar">
        <div class="NewProduct">
            <a href="/c/135/hang-moi-ve.html" id="lnkHeadHangMoiVe" style="left: 18px;top: -6px;height: 50px;"></a>
            <a href="/c/133/sale-off-20---50.html" id="lnkHeadSaleOff" style="left: 128px;top: -6px;height: 50px;"></a>
        </div>
        <div class="NewsLetterLabel">
            <div>Đăng ký nhận tin</div>
        </div>
        <div class="NewsLetterGender">
            <!--     <input type="radio" name="newsletter_gender" checked="checked" value="1" />
                <label style="margin-right:10px">Nam</label>
                <input type="radio" name="newsletter_gender" value="2" />
                <label>Nữ</label>
             -->
            <select name="newsletter_gender">
                <option value="1">Nam</option>
                <option value="2">Nữ</option>
            </select>
        </div>
        <div class="RegisterNewsLetter">
            <input type="text" name="newsletter_email" id="NewsLetterEmail" maxlength="100" placeholder="Địa chỉ email" />
            <a href="javascript:void(0);" id="NewsLetterSubmit"></a>
        </div>
        <div class="HeaderBarLink">
            <a href="<?php echo $wishlist; ?>" class="lnkSavedProduct">Danh sách thích</a>
            <a href="<?php echo $shopping_cart;?>" class="lnkShoppingCart">Giỏ hàng</a>
        </div>
        <div style="clear:both;"></div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            var _lockAjaxNewsLetter = false;
            $('#NewsLetterSubmit').click(function() {
                var email = $('#NewsLetterEmail').val();
                var gender = $('select[name=newsletter_gender]').val();
                if(email == '') {
                    alert('Địa chỉ email của quý khách không đúng định dạng');
                    return false;
                }
                var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                if(!re.test(email)) {
                    alert('Địa chỉ email của quý khách không đúng định dạng');
                    return false;
                }
                if(isNaN(gender)) {
                    alert('Quý khách vui lòng chọn giới tính của mình');
                    return false;
                }

                $.ajax({
                    type: "POST",
                    url: '/index.php?route=common/newsletter/subscribe',
                    data: {email:email,gender:gender},
                    success: function(response) {
                        if(response.error == 0) {
                            $('#NewsLetterEmail').val('');
                        }
                        alert(response.msg);
                    },
                    dataType: 'json'
                });
            });
        });
    </script>
    <?php if (false && $categories) { ?>
    <div id="menu">
        <ul>
            <?php foreach ($categories as $category) { ?>
            <li><a href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?></a>
                <?php if ($category['children']) { ?>
                <div>
                    <?php for ($i = 0; $i < count($category['children']);) { ?>
                    <ul>
                        <?php $j = $i + ceil(count($category['children']) / $category['column']); ?>
                        <?php for (; $i < $j; $i++) { ?>
                        <?php if (isset($category['children'][$i])) { ?>
                        <li><a href="<?php echo $category['children'][$i]['href']; ?>"><?php echo $category['children'][$i]['name']; ?></a></li>
                        <?php } ?>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                </div>
                <?php } ?>
            </li>
            <?php } ?>
        </ul>
    </div>
    <?php } ?>
    <div id="notification"></div>
