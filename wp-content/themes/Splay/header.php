<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html xml:lang="vi" xmlns="http://www.w3.org/1999/xhtml">
  <head>
      <title><?php echo strip_shortcodes(wp_title(' ',false)); ?> <?php if(is_home() || is_tag()){ bloginfo('name').'| Tải game hot cho điện thoại'; } else { echo " ";} ?> <?php if ( is_single() ) { ?> <?php } ?> </title>
      <meta http-equiv="Content-Type"	content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
      <meta content="tai game mien phi, wap tai game s40, wap game s40, tai ung dung hot cho nokia s40, tai phan mem mien phi cho di dong" name="keywords" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="google-site-verification" content="wAp6Hoh6eAHiBIlFKCtbHxpy2mZGfUsQDH9hx3RJxuA" />
      <!-- Fav and touch icons -->
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-144-precomposed.png"/>
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-114-precomposed.png"/>
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-72-precomposed.png"/>
      <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-57-precomposed.png"/>
      <link rel="shortcut icon" href="/favicon.ico"/>
      <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css" type="text/css" />
      <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/layout.css" type="text/css" />
      <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" />
      <?php wp_head();?>
      <meta name="google-site-verification" content="HTuthc8OPhxE_6inQ33yaw28e6H3qqOw3mVrIpce1vM" />
      <script type="text/javascript" src="http://code.jquery.com/jquery-1.3.2.min.js"></script>
      <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.7.2.min.js"></script>
      <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
      <script type="text/javascript">
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-44745230-1', 'taiungdungandroid.com');
          ga('send', 'pageview');

          $(document).ready(function () {
              var myurl = "http://taiungdungandroid.com/";
              var myurl1 = "http://taiungdungandroid.com/game-android/";
              var myurl2 = "http://taiungdungandroid.com/ung-dung-android/";
              var currenturl = window.location
              if(myurl == currenturl) {
                  var d = document.getElementById("menu_top1");
                  d.className = d.className + " selected";
              }
              if(myurl1 == currenturl) {
                  var c = document.getElementById("menu_top2");
                  c.className = c.className + " selected";
              }
              if(myurl2 == currenturl) {
                  var a = document.getElementById("menu_top3");
                  a.className = a.className + " selected";
              }
          });
      </script>
  </head>
  	<body>
		<div id="wapper">
                <div id="topheader">
                    <a href="<?php bloginfo(url);?>" id="logo">
                        <img src="http://taiungdungandroid.com/wp-content/uploads/2013/10/Android-logo.png" alt="" /></a>
                    <div id="right_top" style="text-align: right">
                        <ul id="small_menu">
                            <!-- <li class="li_2">
<a class="t_search li_2" href="http://home.newsqplay.vn:88">
<img class="top_menu" src="<?php echo get_template_directory_uri() . '/images/news.png';?>" onmouseover="this.src='/images/layoutv2/news2.png'" onmouseout="this.src='/images/layoutv2/news.png'">
</a>
</li> -->
                            <li class="li_2">
                                <a class="t_search li_2" onclick="load_bottom('t_search','/index/search-form','t_login','/index/login-form')">
                                    <img class="top_menu" src="<?php echo get_template_directory_uri() . '/images/search.png';?>" onmouseover="this.src='<?php echo get_template_directory_uri() . '/images/search2.png';?>'" onmouseout="this.src='<?php echo get_template_directory_uri() . '/images/search.png';?>'" alt=""/>
                                </a>
                            </li>
                            <li class="li_2" id="t_menu">
                                <a class="t_catalog li_2" onclick="menu_hover()">
                                    <img class="top_menu" src="<?php echo get_template_directory_uri() . '/images/catalog.png';?>" onmouseover="this.src='<?php echo get_template_directory_uri() . '/images/catalog2.png';?>'" onmouseout="this.src='<?php echo get_template_directory_uri() . '/images/catalog.png';?>'" alt=""/>
                                </a>
                                <ul id="menu_hover" style="z-index: 999; display: none;">
                                    <!-- <li class="li_1" onclick="category()">
                                            <img class="icon_topmenu" src="/images/layoutv2/category.png">
                                            <a>Phân loại</a>
                                            <img class="hover_menu" src="/images/layoutv2/mui_ten.png"/>
                                     </li>-->
                                    <li class=" li_1 " onclick="window.location='/1/0-0-0--1/3s/game.html'">
                                        <img class="icon_topmenu" src="/images/site/game281112-122710.png" alt="" />
                                        <a>Game</a>
                                        <img class="hover_menu" src="<?php echo get_template_directory_uri() . '/images/mui_ten.png';?>" alt="" />

                                    </li>
                                    <li class=" li_1 " onclick="window.location='/1/0-0-0--1/3s/ung-dung.html'">
                                        <img class="icon_topmenu" src="/images/site/ungdung281112-122723.png" alt="" />
                                        <a>Ứng dụng</a>
                                        <img class="hover_menu" src="<?php echo get_template_directory_uri() . '/images/mui_ten.png';?>" alt="" />
                                    </li>
                                    <li class=" li_1 " onclick="window.location='/index/send-email'">
                                        <img class="icon_topmenu" src="/images/site/phanhoi281112-122732.png"alt="" />
                                        <a>Phản hồi</a>
                                        <img class="hover_menu" src="<?php echo get_template_directory_uri() . '/images/mui_ten.png';?>"alt="" />
                                    </li>

                                    <li class="li_1" onclick="requires_login2('/0-0-0--1/thegame.html')">
                                        <img class="icon_topmenu" src="/images/layoutv2/card.png" alt="" />
                                        <a>Nhận thẻ game</a>
                                        <img class="hover_menu" src="<?php echo get_template_directory_uri() . '/images/mui_ten.png';?>"alt="" />
                                    </li>
                                    <li class="li_1" onclick="window.location='/1/0-0-0--1/3s/free.html'">
                                        <img class="icon_topmenu" src="/images/layoutv2/game-free.png" alt=""/>
                                        <a href="/1/0-0-0--1/3s/free.html">Game miễn phí</a>
                                        <img class="hover_menu" src="<?php echo get_template_directory_uri() . '/images/mui_ten.png';?>" alt=""/>
                                    </li>


                                </ul>
                            </li></ul>
                    </div>
                </div>
    <div id="menu">
        <div id="table_menutop">
            <ul id="filter">
                <li>
                    <a href="<?php bloginfo(url);?>" id="menu_top1" class=" menu_top">
                        Home
                    </a>
                </li>
                <li>
                    <a href="<?php bloginfo(url);?>/game-android/" id="menu_top2" class=" menu_top">
                        Game
                    </a>
                </li>
                <li>
                    <a href="<?php bloginfo(url);?>/ung-dung-android/" id="menu_top3" class=" menu_top">
                        App
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!--<div class="iz-category">
						<form action="<?php /*bloginfo('url'); */?>/" method="get">
							<div >
							<?php
    /*								$args = array(
                                        'show_option_all'    => '',
                                        'show_option_none'   => 'Chọn chuyên mục',
                                        'orderby'            => 'ID',
                                        'order'              => 'ASC',
                                        'show_count'         => 1,
                                        'hide_empty'         => 1,
                                        'child_of'           => 0,
                                        'exclude'            => '',
                                        'echo'               => 0,
                                        'selected'           => 0,
                                        'hierarchical'       => 1,
                                        'name'               => 'cat',
                                        'id'                 => '',
                                        'class'              => 'postform',
                                        'depth'              => 0,
                                        'tab_index'          => 0,
                                        'taxonomy'           => 'category',
                                        'hide_if_empty'      => false
                                    );
                                $select = wp_dropdown_categories($args);
                                $select = preg_replace("#<select([^>]*)>#", "<select$1 onchange='return this.form.submit()'>", $select);
                                $select = str_replace('id','class',$select);
                                echo $select;
                                */?>
							<noscript><input type="submit" value="Xem" /></noscript>
							</div>
						</form>
				</div>-->
	<div class="iz-body">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('header-content') ) : ?>
<?php endif; ?>