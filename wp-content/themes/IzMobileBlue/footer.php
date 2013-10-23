		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-content') ) : ?>
		<?php endif; ?>

	</div>
	<div class="iz-footer">
        <div id="filter_game">
            <div class="chia5">
                <div class="center-footer">
                    <a href="<?php bloginfo(url); echo "/game-tri-tue";?>">
                        <img src="<?php echo get_template_directory_uri().'/images/game-tri-tue.png';?>" alt="Trí tuệ">
                    </a>
                </div>
                <div class="center-footer">
                    <span>Trí tuệ</span>
                </div>
            </div>
            <div class="chia5">
                <div class="center-footer">
                    <a href="<?php bloginfo(url); echo "/game-chien-thuat";?>">
                        <img src="<?php echo get_template_directory_uri().'/images/game-chien-thuat.png';?>" alt="Chiến thuật">
                    </a>
                </div>
                <div class="center-footer">
                    <span>Chiến thuật</span>
                </div>
            </div>
            <div class="chia5">
                <div class="center-footer">
                    <a href="<?php bloginfo(url); echo "/game-giai-tri";?>">
                        <img src="<?php echo get_template_directory_uri().'/images/game-giai-tri.png';?>" alt="Giải trí">
                    </a>
                </div>
                <div class="center-footer">
                    <span>Giải trí</span>
                </div>
            </div>
            <div class="chia5">
                <div class="center-footer">
                    <a href="<?php bloginfo(url); echo "/game-hanh-dong";?>">
                        <img src="<?php echo get_template_directory_uri().'/images/game-hanh-dong.png';?>" alt="Hành động">
                    </a>
                </div>
                <div class="center-footer">
                    <span>Hành động</span>
                </div>
            </div>
            <div class="chia5">
                <div class="center-footer">
                    <a href="<?php bloginfo(url); echo "/game-the-thao";?>">
                        <img src="<?php echo get_template_directory_uri().'/images/game-the-thao.png';?>" alt="Thể thao">
                    </a>
                </div>
                <div class="center-footer">
                    <span>Thể thao</span>
                </div>
            </div>
        </div>
        <title>topgameandroid.com web app tải game & ứng dụng Android miễn phí hay nhất top game app của google play, kho game android, ứng dụng android miễn phí tuyệt đối</title>
        <h1>Tải top Game, ứng dụng android miễn phí hay nhất goole play</h1>
		&copy; <?php echo date("Y"); ?> <a href="<?php echo home_url('/'); ?>" title="<?php bloginfo('description'); ?> - <?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a><br />
        <div id="link_chan_trang">
            <a href="<?php bloginfo(url); echo "/gioi-thieu";?>" style="border-right: 1px solid #0000ff">Giới thiệu</a>
            <a href="<?php bloginfo(url); echo "/dieu-khoan";?>" style="border-right: 1px solid #0000ff"> Điều khoản</a>
            <a href="<?php bloginfo(url); echo "/cai-dat-va-go-bo";?>" style="border-right: 1px solid #0000ff">Cài đặt & Gỡ bỏ</a>
            <a href="<?php bloginfo(url); echo "/thanh-toan";?>">Thanh toán</a>
        </div>
	</div>
		<?php wp_footer(); ?>
	</body>
</html>