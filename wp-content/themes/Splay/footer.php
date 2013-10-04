		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-content') ) : ?>
		<?php endif; ?>
        <div id="filter_game">
            <div class="chia5">
                <div class="center">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri().'/images/game-tri-tue.png';?>" alt="">
                    </a>
                </div>
                <div class="center">
                    <span>Trí tuệ</span>
                </div>
            </div>
            <div class="chia5">
                <div class="center">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri().'/images/game-chien-thuat.png';?>" alt="">
                    </a>
                </div>
                <div class="center">
                    <span>Chiến thuật</span>
                </div>
            </div>
            <div class="chia5">
                <div class="center">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri().'/images/game-giai-tri.png';?>" alt="">
                    </a>
                </div>
                <div class="center">
                    <span>Giải trí</span>
                </div>
            </div>
            <div class="chia5">
                <div class="center">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri().'/images/game-hanh-dong.png';?>" alt="">
                    </a>
                </div>
                <div class="center">
                    <span>Hành động</span>
                </div>
            </div>
            <div class="chia5">
                <div class="center">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri().'/images/game-the-thao.png';?>" alt="">
                    </a>
                </div>
                <div class="center">
                    <span>Thể thao</span>
                </div>
            </div>
        </div>
	</div>
	<div class="iz-footer">
        <title>Top game android - Tải game android hay nhất</title>
		&copy; <?php echo date("Y"); ?>, <a href="<?php echo home_url('/'); ?>" title="<?php bloginfo('description'); ?> - <?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a><br />
	</div>
		<?php wp_footer(); ?>
	</body>
</html>