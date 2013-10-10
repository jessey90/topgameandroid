<?php get_header(); ?>
<!--Slider-->
<div class="poster theme-default">
    <div id="slider" class="nivoSlider">
        <?php vslider('slider'); ?>
    </div>
</div>
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
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('index-content') ) : ?>
        <?php endif; ?>
<?php get_footer(); ?>