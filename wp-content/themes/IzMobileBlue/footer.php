		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-content') ) : ?>
		<?php endif; ?>

	</div>
	<div class="iz-footer">
        <div id="filter_game">
            <div class="chia5">
                <div class="center-footer">
                    <a href="<?php bloginfo(url); echo "/category/game-tri-tue-2";?>">
                        <img src="<?php echo get_template_directory_uri().'/images/game-tri-tue.png';?>" alt="">
                    </a>
                </div>
                <div class="center-footer">
                    <span>Trí tuệ</span>
                </div>
            </div>
            <div class="chia5">
                <div class="center-footer">
                    <a href="<?php bloginfo(url); echo "/category/game-chien-thuat-2";?>">
                        <img src="<?php echo get_template_directory_uri().'/images/game-chien-thuat.png';?>" alt="">
                    </a>
                </div>
                <div class="center-footer">
                    <span>Chiến thuật</span>
                </div>
            </div>
            <div class="chia5">
                <div class="center-footer">
                    <a href="<?php bloginfo(url); echo "/category/game-giai-tri-2";?>">
                        <img src="<?php echo get_template_directory_uri().'/images/game-giai-tri.png';?>" alt="">
                    </a>
                </div>
                <div class="center-footer">
                    <span>Giải trí</span>
                </div>
            </div>
            <div class="chia5">
                <div class="center-footer">
                    <a href="<?php bloginfo(url); echo "/category/game-hanh-dong-2";?>">
                        <img src="<?php echo get_template_directory_uri().'/images/game-hanh-dong.png';?>" alt="">
                    </a>
                </div>
                <div class="center-footer">
                    <span>Hành động</span>
                </div>
            </div>
            <div class="chia5">
                <div class="center-footer">
                    <a href="<?php bloginfo(url); echo "/category/game-the-thao";?>">
                        <img src="<?php echo get_template_directory_uri().'/images/game-the-thao.png';?>" alt="">
                    </a>
                </div>
                <div class="center-footer">
                    <span>Thể thao</span>
                </div>
            </div>
        </div>
        <title>Top game android - Tải game android hay nhất</title>
		&copy; <?php echo date("Y"); ?>, <a href="<?php echo home_url('/'); ?>" title="<?php bloginfo('description'); ?> - <?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a><br />
	</div>
		<?php wp_footer(); ?>
	</body>
</html>