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
<div class="iz-box">
<?php if (have_posts()) : ?>
    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
    <?php /* If this is a category archive */
    if (is_category()) {
        ?>
    <div class="iz-title" style="height: 1px;" xmlns:v="http://rdf.data-vocabulary.org/#">
                    <span typeof="v:Breadcrumb">
                        <a href="<?php echo get_category_link(get_cat_ID(single_cat_title('', false)));?>"
                           property="v:title" rel="v:url">

                            <h2 style="color: #696969;"><!--<img src="<?php /*echo get_template_directory_uri().'/images/default.png';*/?>"/>-->Thể
                                Loại <?php single_cat_title(); ?></h2>
                        </a>
                    </span>
    </div>
        <?php /* If this is a tag archive */
    } elseif (is_tag()) {
        ?>
    <div class="iz-title" xmlns:v="http://rdf.data-vocabulary.org/#">
			<span typeof="v:Breadcrumb">
				<a href="<?php echo get_category_link(get_cat_ID(single_cat_title('', false)));?>" property="v:title"
                   rel="v:url"><h2><img src="<?php echo get_template_directory_uri() . '/images/default.png';?>"/>Tương
                    Thích <?php single_tag_title(); ?></h2></a>
			</span>
    </div>
        <?php /* If this is a daily archive */
    } elseif (is_day()) {
        ?>
    <div class="iz-title" xmlns:v="http://rdf.data-vocabulary.org/#">
			<span typeof="v:Breadcrumb">
				<a href="<?php echo get_category_link(get_cat_ID(single_cat_title('', false)));?>" property="v:title"
                   rel="v:url"><h2><img
                        src="<?php echo get_template_directory_uri() . '/images/default.png';?>"/>Ngày <?php the_time('d/m/Y'); ?>
                </h2></a>
			</span>
    </div>
        <?php /* If this is a monthly archive */
    } elseif (is_month()) {
        ?>
    <div class="iz-title" xmlns:v="http://rdf.data-vocabulary.org/#">
			<span typeof="v:Breadcrumb">
				<a href="<?php echo get_category_link(get_cat_ID(single_cat_title('', false)));?>" property="v:title"
                   rel="v:url"><h2><img
                        src="<?php echo get_template_directory_uri() . '/images/default.png';?>"/>Tháng <?php the_time('m/Y'); ?>
                </h2></a>
			</span>
    </div>
        <?php /* If this is a yearly archive */
    } elseif (is_year()) {
        ?>
    <div class="iz-title" xmlns:v="http://rdf.data-vocabulary.org/#">
			<span typeof="v:Breadcrumb">
				<a href="<?php echo get_category_link(get_cat_ID(single_cat_title('', false)));?>" property="v:title"
                   rel="v:url"><h2><img
                        src="<?php echo get_template_directory_uri() . '/images/default.png';?>"/>Năm <?php the_time('Y'); ?>
                </h2></a>
			</span>
    </div>
        <?php /* If this is an author archive */
    } elseif (is_author()) {
        ?>
    <div class="iz-title" xmlns:v="http://rdf.data-vocabulary.org/#">
			<span typeof="v:Breadcrumb">
				<a href="<?php echo get_category_link(get_cat_ID(single_cat_title('', false)));?>" property="v:title"
                   rel="v:url"><h2><img
                        src="<?php echo get_template_directory_uri() . '/images/default.png';?>"/>Của <?php the_author(); ?>
                </h2></a>
			</span>
    </div>
        <?php /* If this is a paged archive */
    } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
        ?>
    <div class="iz-title" xmlns:v="http://rdf.data-vocabulary.org/#">
			<span typeof="v:Breadcrumb">
				<a href="<?php echo get_category_link(get_cat_ID(single_cat_title('', false)));?>" property="v:title"
                   rel="v:url"><h2><img src="<?php echo get_template_directory_uri() . '/images/default.png';?>"/>Lưu
                    Trữ</h2></a>
			</span>
    </div>
        <?php } ?>
	<div class="iz-content">
	<?php
    //$current_tag = "";
    $tags_id = "";
    $strSQL = 'cat=' . get_cat_ID(single_cat_title('', false)) . '&paged=' . $paged . '&showposts=' . $posts_per_page;
    if (is_tag()) {
        $tags_id = get_query_var('tag_id');
        //$current_tag = single_tag_title("", false);
        $strSQL .= '&tag_id=' . $tags_id;

    }
    $my_query = new WP_Query($strSQL);
    $i = 0;
    while ($my_query->have_posts()):
        $i++;
        $my_query->the_post();
        $do_not_duplicate = $post->ID;
        ?>
        <?php $feat_image = wp_get_attachment_url(get_post_thumbnail_id($the_post->ID)); ?>
        <div class="iz-label" <?php if ($i % 2 != 1) {
            echo "style='background: #f2f4f6'";
        }?>>
            <div class="contentwrapper">
                <div class="contentcolumn">
                    <div class="iz-label-title">
                        <a title="<?php echo esc_attr(the_title());?>"
                           href="<?php the_permalink() ?>"><?php echo the_title(); ?></a>
                    </div>
                    <div class="iz-desc">
                        <?php
                        the_field('mo_ta', $recent['ID']);?>
                    </div>
                </div>
            </div>

            <div class="iz-logo leftcolumn">
                <a class="iz-label-img" href="<?php the_permalink() ?>"
                   title="<?php echo strip_shortcodes($post->post_title); ?>">
                    <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php echo $feat_image; ?>"
                         alt="<?php  echo strip_shortcodes($post->post_title); ?> "/>
                    <?php else : ?>
                    <img src="<?php bloginfo('template_url'); ?>/images/no-image.jpg"
                         alt="<?php  echo strip_shortcodes($post->post_title); ?> "/>
                    <?php endif; ?>
                </a>

                <div class="iz-download">
                    <a class="btn-download" href="<?php the_field('link_download_game', $recent['ID']); ?>">Tải về</a>
                </div>
            </div>
            <?php
            $downloadID = 0;
            $categoryID = 1;
            $regex_pattern = get_shortcode_regex();
            preg_match('/' . $regex_pattern . '/s', $post->post_content, $regex_matches);
            if ($regex_matches[2] == 'download') :
                //  Found a download file find out what ID
                //  Turn the attributes into a URL parm string
                $attribureStr = str_replace(" ", "&", trim($regex_matches[3]));
                $attribureStr = str_replace('"', '', $attribureStr);
                //  Parse the attributes
                $defaults = array(
                    'category' => '1',
                );
                $attributes = wp_parse_args($attribureStr, $defaults);
                if (isset ($attributes["id"])) :
                    $downloadID = $attributes["id"];
                endif;
                if (isset($attributes["category"])) :
                    $categoryID = $attributes["category"];
                endif;
            endif;
            if ($downloadID != 0):
                $url = site_url() . '/download/';
                ?>
                <div class="iz-download">
                    <a class="iz-download-link" title="Bấm vào để tải về máy"
                       href="<?=add_query_arg('post_id', $post->ID, $url);?>">
                        <img alt="Bấm vào để tải về máy"
                             src="<?=get_template_directory_uri() . '/images/download.png'?>"/>
                        Tải về máy </a>
                    <em class="iz-download-spes">|</em>
                        <span class="iz-download-views"><?php if (function_exists('the_views')) {
                            the_views();
                        } ?></span>
                </div>
                <?php else: ?>
                <!--Category trang của theme này lại hiển thị ở đây-->
                <!--<div class="iz-download">
                        <?php
                    /*                        $categories = get_the_category();
                                            $separator = ' | ';
                                            $output = '';
                                            if($categories){
                                                foreach($categories as $category) {
                                                    if( strip_shortcodes($category->name ) !='Featured'){
                                                        $output .= '<a href="'.get_category_link($category->term_id ).'"style="color: #000;" title="' . esc_attr( sprintf( __( "View all posts in %s" ), strip_shortcodes($category->name )) ) . '">'.strip_shortcodes($category->cat_name).'</a>'.$separator;
                                                    }
                                                }
                                                //echo trim($output, $separator);
                                            }
                                            */?>
                        <em class="iz-download-a"> »</em><?php /*echo trim($output, $separator); //the_category(' | '); */?>
                        <span class="iz-download-views"><em class="iz-download-spes"> | </em><?php /*if(function_exists('the_views')) { the_views(); } */?></span>
                    </div>-->
                <?php endif;?>
            <div class="clear"></div>
        </div>
        <?php
    endwhile;
    echo '<div class="page_nav">';
    if (function_exists('wp_pagenavi')) wp_pagenavi();
    echo '</div>';
endif;
?>


</div>

<?php get_footer(); ?>
