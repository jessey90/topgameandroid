<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html xml:lang="vi" xmlns="http://www.w3.org/1999/xhtml">
  <head>
	<title><?php echo strip_shortcodes(wp_title(' ',false)); ?> <?php if(is_home() || is_tag()){ bloginfo('name')."| Tải game hot cho điện thoại"; } else { echo " ";} ?> <?php if ( is_single() ) { ?> <?php } ?> </title>
	<meta http-equiv="Content-Type"	content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
      <meta name="viewport" content="width=device-width; initial-scale=1.0;  maximum-scale=1.0" />
      <meta name="format-detection" content="telephone=no" />
      <meta http-equiv="collapsable" content="none" />
      <meta name="apple-mobile-web-app-capable" content="yes" />
      <meta name="apple-mobile-web-app-status-bar-style" content="black" />

      <meta content="tai game mien phi, wap tai game s40, wap game s40, tai ung dung hot cho nokia s40, tai phan mem mien phi cho di dong" name="keywords">
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
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css" media="screen" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/layout.css" media="screen" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" media="screen" type="text/css" />
	<?php wp_head();?>
<meta name="google-site-verification" content="utwzUrss8wTSs9Sizy22dhsZl9oJFLskChu9nsk26bg" />
      <script src="http://code.jquery.com/jquery-1.3.2.min.js"></script>
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
                        <div class="logo-hd"><a href="http://topgameandroid.com/"> <img src="http://gamemobihay.com/wp-content/uploads/2013/10/logo.jpg" alt="GameMobiHay"></a></div>
                    </div>
				</div>
                <div id="filter_game">
                    <div class="chia3">
                        <div class="center">
                                <a href="<?php bloginfo(url);?>">
                                    <img src="<?php echo get_template_directory_uri().'/images/1.png';?>" alt="">
                                </a>
                        </div>
                        <div class="imageff">
                            <span>Mới nhất</span>
                        </div>
                    </div>
                    <div class="chia3">
                        <div class="center">
                                <a href="<?php bloginfo(url); echo "/download";?>">
                                    <img src="<?php echo get_template_directory_uri().'/images/2.png';?>" alt="">
                                </a>
                        </div>
                        <div class="imageff" style="background: #262626">
                            <span>Hay nhất</span>
                        </div>
                    </div>
                    <div class="chia3">
                        <div class="center">
                                <a href="<?php bloginfo(url); echo "/download";?>">
                                    <img src="<?php echo get_template_directory_uri().'/images/3.png';?>" alt="">
                                </a>
                        </div>
                        <div class="imageff">
                            <span>Tải nhiều</span>
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