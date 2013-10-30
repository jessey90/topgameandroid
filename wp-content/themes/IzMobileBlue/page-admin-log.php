<?php
echo "Admin";
    $game_page = max( 1, $_GET['game-page']);
    $args = array(
        'posts_per_page' => 50,
        'paged' => $game_page,
        'orderby' =>'date',
        'meta_key' => 'views',
        'order' => 'DESC',
    );
    $posts_array = get_posts($args);
    foreach($posts_array as $post)
    {
        $log = wp_get_post_revision($post->ID,OBJECT,'raw');
        echo '</br>';
        echo json_encode($post->ID);
        echo json_encode($log);

    }

