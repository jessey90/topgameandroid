<?php get_header(); ?>
<!--Slider-->
<div class="poster theme-default">

    <?php echo do_shortcode("[metaslider id=77]"); ?>
</div>
<!-- View cat -->
<div id="category">
    <div class="category">
        <a class="a_category " href="<?php bloginfo(url);?>"><span class="category_name">Tất cả</span>
        </a>
        <a class="a_category " href="<?php bloginfo(url);?>/nhap-vai"><span class="category_name">Nhập vai</span>
        </a>
        <a class="a_category " href="<?php bloginfo(url);?>/phieu-luu"><span class="category_name">Phiêu lưu</span>
        </a>
        <a class="a_category " href="<?php bloginfo(url);?>/the-thao"><span class="category_name">Thể thao</span>
        </a>
    </div>
    <div class="category">
        <a class="a_category " href="<?php bloginfo(url);?>/tri-tue"><span class="category_name">Trí tuệ</span>
        </a>
        <a class="a_category " href="<?php bloginfo(url);?>/ban-sung"><span class="category_name">Bắn súng</span>
        </a>
        <a class="a_category " href="<?php bloginfo(url);?>/giai-tri"><span class="category_name">Giải trí</span>
        </a>
        <a class="a_category " href="<?php bloginfo(url);?>/chien-thuat"><span class="category_name">Chiến thuật</span>
        </a>
    </div>
    <div class="category">
        <a class="a_category " href="<?php bloginfo(url);?>/dua-xe"><span class="category_name">Đua xe</span>
        </a>
        <a class="a_category " href="<?php bloginfo(url);?>/am-nhac"><span class="category_name">Âm nhạc</span>
        </a>
        <a class="a_category " href="<?php bloginfo(url);?>/mo-phong"><span class="category_name">Mô phỏng</span>
        </a>
        <a class="a_category " href="<?php bloginfo(url);?>/game-online"><span class="category_name">Online</span>
        </a>
    </div>
</div>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('index-content') ) : ?>
<?php endif; ?>
<?php get_footer(); ?>