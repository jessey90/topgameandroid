		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-content') ) : ?>
		<?php endif; ?>

	</div>
	<div class="iz-footer">
        <!-- View cat -->
        <div id="category">
            <div class="category">
                <a class="a_category " href="#"><span class="category_name">Tất cả</span>
                </a>
                <a class="a_category " href="#"><span class="category_name">Nhập vai</span>
                </a>
                <a class="a_category " href="#"><span class="category_name">Phiêu lưu</span>
                </a>
                <a class="a_category " href="#"><span class="category_name">Thể thao</span>
                </a>
            </div>
            <div class="category">
                <a class="a_category " href="#"><span class="category_name">Trí tuệ</span>
                </a>
                <a class="a_category " href="#"><span class="category_name">Bắn súng</span>
                </a>
                <a class="a_category " href="#"><span class="category_name">Giải trí</span>
                </a>
                <a class="a_category " href="#"><span class="category_name">Chiến thuật</span>
                </a>
            </div>
            <div class="category">
                <a class="a_category " href="#"><span class="category_name">Đua xe</span>
                </a>
                <a class="a_category " href="#"><span class="category_name">Âm nhạc</span>
                </a>
                <a class="a_category " href="#"><span class="category_name">Mô phỏng</span>
                </a>
                <a class="a_category " href="#"><span class="category_name">Online</span>
                </a>
            </div>
        </div>
        <div id="bottom">
            <div class="b_right">

                <a href="mailto:abc@gmail.com" id="supportLink" class="b_mail">
                    <img src="<?php echo get_template_directory_uri()?>/images/mail.png">
                </a>
                <a href="tel: +19001900" class="b_tel">
                    <img src="<?php echo get_template_directory_uri()?>/images/phone1.png">
                </a>
                <a href="#" class="b_tel">
                    <img src="<?php echo get_template_directory_uri()?>/images/top-hover.png">
                </a>
            </div>
            <!-- <a class="b_logo">
                <img src="/images/layoutv2/logo-bottom.png"/>
            </a> -->

        </div>
        <title>Top game android - Tải game android hay nhất</title>
		&copy; <?php echo date("Y"); ?>, <a href="<?php echo home_url('/'); ?>" title="<?php bloginfo('description'); ?> - <?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a><br />
	</div>
		<?php wp_footer(); ?>
	</body>
</html>