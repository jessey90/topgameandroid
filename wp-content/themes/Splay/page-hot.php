<?php
get_header();
$posts_number = empty($instance['posts_number']) ? '' : (int) $instance['posts_number'];
$args1 = array( 'numberposts' => $posts_number,
    'post_status' => 'publish, future');
$recent_posts = wp_get_recent_posts( $args1 );

foreach( $recent_posts as $recent ){
?>
<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($recent['ID'])); ?>
<div class="iz-label">
    <h3 class="iz-label-title">
        <a title="<?php echo esc_attr($recent['post_title']);?>" href="<?php echo get_permalink($recent['ID']); ?>"><?php echo $recent['post_title']; ?></a>
    </h3>
    <a class="iz-label-img"href="<?php echo get_permalink($recent['ID']); ?>" title ="<?php echo strip_shortcodes($recent['post_title']); ?>">
        <?php if (has_post_thumbnail()) : ?>
        <img src="<?php echo $feat_image; ?>" alt="<?php  echo strip_shortcodes($recent['post_title']); ?> " />
        <?php else : ?>
        <img src="<?php bloginfo('template_url'); ?>/images/no-image.jpg" alt="<?php  echo strip_shortcodes($recent['post_title']); ?> "/>
        <?php endif; ?>
    </a>
    <div class="iz-desc">
        <?php
        the_field( 'mo_ta', $recent['ID']);?>
    </div>
    <div class="iz-download">
        <a class="btn-download" href="<?php the_field('link_download_game',$recent['ID']); ?>">TẢI MIỄN PHÍ</a>
    </div>
</div>
<?php
}
get_footer();?>