<?php get_header(); ?>
<div class="iz-content" id="stage">
    <input type="button" id="driver" value="Load Data" />
    <?php
    if(have_posts()):
        $game_page = max( 1, $_GET['game-page']);
        $args1 = array(
            'posts_per_page' => 7,
            'paged' => $game_page,
            'orderby' =>'meta_value_num',
            'meta_key' => 'views',
            'order' => 'DESC',
            'meta_query' => array(
                'relation' =>'AND',
                array(
                    'key' => 'top-game-hot',
                    'value' => 'on',
                    'compare' => '='
                )
            )
        );
        $my_query = new WP_Query($args1);
        while ($my_query->have_posts()):
            $my_query->the_post();
            $do_not_duplicate = $post->ID;
            ?>
            <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($the_post->ID) ); ?>
            <div class="iz-label">
                <h3 class="iz-label-title">
                    <a title="<?php echo esc_attr(the_title());?>" href="<?php the_permalink() ?>"><?php echo the_title(); ?></a>
                </h3>
                <a class="iz-label-img"href="<?php the_permalink() ?>" title ="<?php echo strip_shortcodes(the_title()); ?>">
                    <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php echo $feat_image; ?>" alt="<?php  echo strip_shortcodes(the_title()); ?>" style="width: 80px; height: 80px" />
                    <?php else : ?>
                    <img src="<?php bloginfo('template_url'); ?>/images/no-image.jpg" alt="<?php  echo strip_shortcodes(the_title()); ?> "/>
                    <?php endif; ?>
                </a>

                <?php
                $downloadID =0;
                $categoryID = 1;
                $regex_pattern = get_shortcode_regex();
                preg_match ('/'.$regex_pattern.'/s', get_the_content(), $regex_matches);
                if ($regex_matches[2] == 'download') :
                    //  Found a download file find out what ID
                    //  Turn the attributes into a URL parm string
                    $attribureStr = str_replace (" ", "&", trim ($regex_matches[3]));
                    $attribureStr = str_replace ('"', '', $attribureStr);
                    //  Parse the attributes
                    $defaults = array (
                        'category' => '1',
                    );
                    $attributes = wp_parse_args ($attribureStr, $defaults);
                    if (isset ($attributes["id"])) :
                        $downloadID = $attributes["id"];
                    endif;
                    if (isset($attributes["category"])) :
                        $categoryID = $attributes["category"];
                    endif;
                endif;
                if($downloadID !=0):
                    $url = site_url(). '/download/';
                    ?>

                    <div class="iz-download">
                        <a class="iz-download-link" title="Bấm vào để tải về máy" href="<?php echo add_query_arg( 'post_id',get_the_ID(), $url );?>">
                            <img alt="Bấm vào để tải về máy" src="<?php echo get_template_directory_uri().'/images/download.png'?>"/>
                            Tải về máy </a>
                        <em class="iz-download-spes">|</em>
                        <span class="iz-download-views"><?php if(function_exists('the_views')) { the_views(); } ?></span>
                    </div>
                    <?php else:?>
                    <div class="iz-desc">
                        <?php the_field('mo_ta');?>
                            <?php /*if (have_posts()) : while (have_posts()) : the_post(); */?><!--
                                            <?php
                            /*                                            $content = get_the_content();
                                                                        echo strip_tags(substr($content, 0, strpos($content," ",100))).' ...';
                                                                        */?>
                                    --><?php /*endwhile;endif;*/?>
                    </div>
                    <div class="iz-download">
                        <a class="btn-download" href="<?php the_field('link_download_game'); ?>">TẢI MIỄN PHÍ</a>
                        <?php
                        /*											$categories = get_the_category();
                                                                    $separator = ' | ';
                                                                    $output = '';
                                                                    if($categories){
                                                                        foreach($categories as $category) {
                                                                        if( strip_shortcodes($category->name ) !='Featured'){
                                                                            $output .= '<a href="'.get_category_link($category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), strip_shortcodes($category->name )) ) . '">'.strip_shortcodes($category->cat_name).'</a>'.$separator;
                                                                        }
                                                                        }
                                                                    //echo trim($output, $separator);
                                                                    }
                                                                    */?>
                        <!--<em class="iz-download-a"> »</em>--><?php /*echo trim($output, $separator); //the_category(' | '); */?>
                        <!--<span class="iz-download-views"><em class="iz-download-spes"> | </em><?php /*if(function_exists('the_views')) { the_views(); } */?></span>-->
                    </div>
                    <?php endif;?>
                <div class="clear"></div>
            </div>
            <?php
        endwhile;
        wp_reset_query();
        echo '<div class ="page_nav">';
        paging('game',$my_query);
        echo '</div>';
    endif;
    ?>
</div>
<script type="text/javascript" language="javascript">
    $(document).ready(function() {
        $("#driver").click(function(event){
            $('#stage').load('hot');
        });
    });
</script>
<?php get_footer(); ?>