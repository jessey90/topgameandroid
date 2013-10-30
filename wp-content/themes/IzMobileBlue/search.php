<?php get_header(); ?>
<div class="iz-box" xmlns="http://www.w3.org/1999/html">
		<div class="iz-title">
			<h1 style="margin:10px;margin-left: 0px;color: #000;border-bottom:1px solid #dfdfdf">Kết Quả Cho "<?php echo get_search_query(); ?>"</h1>
		</div><br>
	<div class="iz-content">
	<?php
        $i = 0;
        if (have_posts()) : ?>
		<?php while (have_posts()) : the_post();$i++ ?>
					<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($the_post->ID) ); ?>
                <div class="iz-label" <?php if($i%2!=1){echo "style='background: #f6f8f4'";}?>>
                    <div id="contentwrapper">
                        <div id="contentcolumn">
                            <div class="iz-label-title">
                                <a title="<?php echo esc_attr(the_title());?>" href="<?php the_permalink() ?>"><?php echo the_title(); ?></a>
                            </div>
                            <div class="iz-desc">
                                <?php the_field('mo_ta');?>
                            </div>
                        </div>
                    </div>
                    <div class="iz-logo" id="leftcolumn">
                        <a class="iz-label-img"href="<?php the_permalink(); ?>" title ="<?php echo strip_shortcodes($recent['post_title']); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php echo $feat_image; ?>" alt="<?php  echo strip_shortcodes($recent['post_title']); ?> " />
                            <?php else : ?>
                            <img src="<?php bloginfo('template_url'); ?>/images/no-image.jpg" alt="<?php  echo strip_shortcodes(the_title()); ?> "/>
                            <?php endif; ?>
                        </a>
                    </div>
                    <div class="iz-download" id="rightcolumn">
                        <a class="btn-download" href="<?php the_field('link_download_game');?>" onClick="_gaq.push(['_trackEvent', 'Trang-Tai-Nhieu', 'Download-Link: <?php the_field('link_download_game'); ?>', 'Game <?php echo the_title();?>' , '<?php the_field('link_download_game');?>']);">Tải Game</a>
                    </div>
                </div>
		<?php endwhile; ?>
		<div class="navigation">
			<?php if (function_exists('wp_pagenavi')) wp_pagenavi(); ?>
		</div>
	<?php else : ?>
		<h1>Không tìm thấy</h1>
		<div class="entry">
			Không tìm thấy game nào phù hợp. Hãy thử lại với từ khóa khác...
		</div
	<?php endif; ?>
	</div>
<?php get_footer(); ?>