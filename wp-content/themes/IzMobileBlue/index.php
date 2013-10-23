<?php get_header(); ?>
<?php get_search_form(); ?>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('index-content') ) : ?>
        <?php endif; ?>
<?php get_footer(); ?>