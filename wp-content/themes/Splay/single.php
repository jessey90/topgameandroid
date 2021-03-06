<?php get_header(); ?>
<?php $feat_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
	<div class="iz-box">
		<div class="iz-title">
			<h1>
				<?php seobreadcrumbs(); ?>
			</h1>
		</div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="head"></div>
        <div class="poster">
            <img src="<?php the_field('img_banner_chitiet'); ?>" alt="" style="width: 100%;height: 235px;">
        </div>
		<div class="iz-content-meta">
            <div class="div1">
                <a class="iz-label-img"href="<?php the_permalink() ?>" title ="<?php echo strip_shortcodes(the_title()); ?>">
                    <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php echo $feat_image; ?>" alt="<?php  echo strip_shortcodes(the_title()); ?> " />
                    <?php else : ?>
                    <img src="<?php bloginfo('template_url'); ?>/images/no-image.jpg" alt="<?php  echo strip_shortcodes(the_title()); ?> "/>
                    <?php endif; ?>
                </a>
                <a class="btn-download download_11" href="<?php the_field('link_download_game'); ?>">Tải xuống</a>
            </div>
            <h2 itemprop="name" class="iz-post-title">
                <?php the_title(); ?>
            </h2>
            <div class="div2" id="cat_single">
                <span>
				    <span class="iz-download-views"><?php if(function_exists('the_views')) { the_views(); } ?></span>
                </span>
                <p>
                   <span>
                       NSX: <?php the_field('nha_phat_hanh'); ?>
                </span>
                </p>
                <p>
                    <span>
                    Dung Lượng: <?php the_field('dung_luong'); ?>
                </span>
                </p>
                <p>
                    <span>
                        Thể Loại: <?php echo the_category($post->ID); ?>
                    </span>
                </p>
                <span>
                    <?php get_ssb(); ?>
                </span>

                <!--            <span style="float: left">Đăng ngày: <?php /*the_time('d/m/Y'); */?> bởi <b><?php /*the_author(); */?></b></span>-->
            </div>
        </div>
		<div class="iz-content" itemtype="http://schema.org/BlogPosting" itemscope="itemscope">
			<div class="iz-content-body" itemprop="articleBody">
					<?php if (function_exists('wp_pagenavi')) wp_pagenavi( array( 'type' => 'multipart' ) ); ?>
					<div class="messageContent">
						<?php the_content();?>
					</div>
					<?php if (function_exists('wp_pagenavi')) wp_pagenavi( array( 'type' => 'multipart' ) ); ?>
				<div><?php edit_post_link('>> Edit This Post <<', '<p>', '</p>'); ?></div>
				<div class="tags">
					Tags:<?php the_tags('', ', ', ''); ?>
				</div>
			</div>
		</div>
		<?php endwhile;endif;?>
	</div>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-single') ) : ?>
	<?php endif; ?>
<?php get_footer(); ?>