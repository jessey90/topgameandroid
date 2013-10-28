	</div>
    <script type="text/javascript">
        $(document).ready(function () {
            var myurl1 = "http://topgameandroid.com/game-tri-tue";
            var myurl2 = "http://topgameandroid.com/game-chien-thuat";
            var myurl3 = "http://topgameandroid.com/game-giai-tri";
            var myurl4 = "http://topgameandroid.com/game-hanh-dong";
            var myurl5 = "http://topgameandroid.com/game-the-thao";
            var currenturl = window.location
            if(myurl1 == currenturl) {
                var a = document.getElementById("menu_bottom1");
                a.className = a.className + " selected";
            }
            if(myurl2 == currenturl) {
                var b = document.getElementById("menu_bottom2");
                b.className = b.className + " selected";
            }
            if(myurl3 == currenturl) {
                var c = document.getElementById("menu_bottom3");
                c.className = c.className + " selected";
            }
            if(myurl4 == currenturl) {
                var d = document.getElementById("menu_bottom4");
                d.className = d.className + " selected";
            }
            if(myurl5 == currenturl) {
                var e = document.getElementById("menu_bottom5");
                e.className = e.className + " selected";
            }
        });
    </script>
	<div class="iz-footer">
        <div class="device">
            <a class="arrow-left" href="#"></a>
            <a class="arrow-right" href="#"></a>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="chia4">
                            <div class="center-footer">
                                <a href="<?php bloginfo(url); echo "/game-tri-tue";?>">
                                    <img src="<?php echo get_template_directory_uri().'/images/game-tri-tue.png';?>" alt="Trí tuệ">
                                </a>
                            </div>
                            <div class="center-footer">
                                <span id="menu_bottom1"><h3>Trí tuệ</h3></span>
                            </div>
                        </div>
                        <div class="chia4">
                            <div class="center-footer">
                                <a href="<?php bloginfo(url); echo "/game-chien-thuat";?>">
                                    <img src="<?php echo get_template_directory_uri().'/images/game-chien-thuat.png';?>" alt="Chiến thuật">
                                </a>
                            </div>
                            <div class="center-footer">
                                <span id="menu_bottom2"><h3>Chiến thuật</h3></span>
                            </div>
                        </div>
                        <div class="chia4">
                            <div class="center-footer">
                                <a href="<?php bloginfo(url); echo "/game-the-thao";?>">
                                    <img src="<?php echo get_template_directory_uri().'/images/game-the-thao.png';?>" alt="Thể thao">
                                </a>
                            </div>
                            <div class="center-footer">
                                <span id="menu_bottom5"><h3>Thể thao</h3></span>
                            </div>
                        </div>
                        <div class="chia4">
                            <div class="center-footer">
                                <a href="<?php bloginfo(url); echo "/game-giai-tri";?>">
                                    <img src="<?php echo get_template_directory_uri().'/images/game-giai-tri.png';?>" alt="Giải trí">
                                </a>
                            </div>
                            <div class="center-footer">
                                <span id="menu_bottom3"><h3>Giải trí</h3><span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="chia4">
                            <div class="center-footer">
                                <a href="<?php bloginfo(url); echo "/game-hanh-dong";?>">
                                    <img src="<?php echo get_template_directory_uri().'/images/game-hanh-dong.png';?>" alt="Hành động">
                                </a>
                            </div>
                            <div class="center-footer">
                                <span id="menu_bottom4"><h3>Hành động</h3></span>
                            </div>
                        </div>                    </div>
                </div>
            </div>
            <div class="pagination"></div>
        </div>
        <script>
            var mySwiper = new Swiper('.swiper-container',{
                pagination: '.pagination',
                loop:true,
                grabCursor: true,
                paginationClickable: true
            })
            $('.arrow-left').on('click', function(e){
                e.preventDefault()
                mySwiper.swipePrev()
            })
            $('.arrow-right').on('click', function(e){
                e.preventDefault()
                mySwiper.swipeNext()
            })
        </script>
        <title>topgameandroid.com web app tải game & ứng dụng Android miễn phí hay nhất top game app của google play, kho game android, ứng dụng android miễn phí tuyệt đối</title>
        <h1 style="margin: 0 30px;">Tải Top Game, Ứng Dụng Android Miễn Phí Hay Nhất Goole Play</h1>
		&copy; <?php echo date("Y"); ?> <a href="<?php echo home_url('/'); ?>" title="<?php bloginfo('description'); ?> - <?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a><br />
        <div id="link_chan_trang">
            <a href="<?php bloginfo(url); echo "/gioi-thieu";?>" style="border-right: 1px solid #0000ff">Giới thiệu</a>
            <a href="<?php bloginfo(url); echo "/dieu-khoan";?>" style="border-right: 1px solid #0000ff"> Điều khoản</a>
            <a href="<?php bloginfo(url); echo "/cai-dat-va-go-bo";?>" style="border-right: 1px solid #0000ff">Cài đặt & Gỡ bỏ</a>
            <a href="<?php bloginfo(url); echo "/thanh-toan";?>">Thanh toán</a>
        </div>

        <a href="https://plus.google.com/117345115411613044114" rel="publisher" style="font-size:10px">Game Mobile</a>
        " Of "
        <a href="https://plus.google.com/115356918732014909363?rel=author" style="font-size:10px"> Ngo Hoan</a>
        <h3 style="margin: 0 30px;"><a href="http://topgameandroid.com/">Top Game Android</a></h3>
	</div>
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-content') ) : ?>
    <?php endif; ?>
		<?php wp_footer(); ?>
	</body>
</html>