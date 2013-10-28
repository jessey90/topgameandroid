<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>

	    <meta http-equiv="Content-Type"	content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
      <meta name="description" content="topgameandroid.com web app tải game & ứng dụng Android miễn phí hay nhất top game app của google play, kho game android, ứng dụng android miễn phí tuyệt đối">
      <meta name="viewport" content="width=device-width; initial-scale=1.0;  maximum-scale=1.0" />
      <meta name="format-detection" content="telephone=no" />
      <meta http-equiv="collapsable" content="none" />
      <meta name="apple-mobile-web-app-capable" content="yes" />
      <meta name="apple-mobile-web-app-status-bar-style" content="black" />

      <meta name="keywords" content="game android, ứng dụng android, app cho android, game, android, top game android, top game, top app, top app android, tai game android miễn phí, tải ứng dụng android miễn phí.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="google-site-verification" content="wAp6Hoh6eAHiBIlFKCtbHxpy2mZGfUsQDH9hx3RJxuA" />
	<!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-144-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-114-precomposed.png"/>
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-72-precomposed.png"/>
                    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-57-precomposed.png"/>
                                   <link rel="shortcut icon" href="/favicon.ico"/>
    <!--Bootstraps-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-responsive.min.css" media="screen"/>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" media="screen" />
      <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/idangerous.swiper-2.1.min.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css" media="screen" type="text/css" />
      <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/idangerous.swiper.css" media="screen" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/layout.css" media="screen" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" media="screen" type="text/css" />
	<?php wp_head();?>
<meta name="google-site-verification" content="utwzUrss8wTSs9Sizy22dhsZl9oJFLskChu9nsk26bg" />
      <script src="http://code.jquery.com/jquery-1.3.2.min.js"></script>
      <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
      <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-32394406-5', 'topgameandroid.com');
          ga('send', 'pageview');

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-32394406-5']);
          _gaq.push(['_trackPageview']);

          $(document).ready(function () {
              var myurl = "http://topgameandroid.com/game-moi-nhat";
              var myurl1 = "http://topgameandroid.com/";
              var myurl2 = "http://topgameandroid.com/game-tai-nhieu";
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

          (function() {
              var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
              ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
              var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
      </script>
  </head>
  	<body>
		<div class="iz-container">
			<div class="iz-header">
				<div class="iz-topmenu">
					<div class="clear"></div>
                    <div id="logo">
                        <div class="logo-hd"><a href="http://topgameandroid.com/"><img src="http://gamemobihay.com/wp-content/uploads/2013/10/logo.jpg" alt="GameMobiHay"></a></div>
                    </div>
				</div>
                <div id="exeption1">
                    <?php get_search_form(); ?>
                </div>
                <div id="filter_game">
                    <div class="chia3">
                        <div class="center">
                                <a href="<?php bloginfo(url); echo "/game-moi-nhat";?>">
                                    <img src="<?php echo get_template_directory_uri().'/images/1.png';?>" alt="Mới nhất">
                                </a>
                        </div>
                        <div class="imageff">
                            <a href="<?php bloginfo(url); echo "/game-moi-nhat";?>">
                                <span id="menu_top1">Mới nhất</span>
                            </a>
                        </div>
                    </div>
                    <div class="chia3">
                        <div class="center">
                                <a href="<?php bloginfo(url);?>">
                                    <img src="<?php echo get_template_directory_uri().'/images/2.png';?>" alt="Hot">
                                </a>
                        </div>
                        <div class="imageff" style="background: #262626">
                            <a href="<?php bloginfo(url);?>">
                                <span id="menu_top2">Hay nhất</span>
                            </a>
                        </div>
                    </div>
                    <div class="chia3">
                        <div class="center">
                                <a href="<?php bloginfo(url); echo "/game-tai-nhieu";?>">
                                    <img src="<?php echo get_template_directory_uri().'/images/3.png';?>" alt="Tải nhiều">
                                </a>
                        </div>
                        <div class="imageff">
                            <a href="<?php bloginfo(url); echo "/game-tai-nhieu";?>">
                                <span id="menu_top3">Tải nhiều</span>
                            </a>
                        </div>
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
			</div>
	<div class="iz-body">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('header-content') ) : ?>
		<?php endif; ?>