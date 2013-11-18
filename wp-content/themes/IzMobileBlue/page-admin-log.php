<?php
echo "<h1 style='text-align: center;'>Thống kê hành động người làm Content</h1>".'<br>';
    $game_page = max( 1, $_GET['game-page']);
    $args = array(
        'posts_per_page' => 10,
        'paged' => $game_page,
        'orderby' =>'date',
        'meta_key' => 'views',
        'order' => 'DESC',
    );
    $my_query = new WP_Query($args);
    $i=0;
    $posts_array = get_posts($args);
    echo '<div id="log_admin"><ul><li style="width: 50px">STT</li><li style="width: 50px">Tên Admin</li><li style="width: 300px">Tiêu đề bài viết</li><li>Mã Revisions</li><li style="width: 50px">Hành Động</li><li>Ngày tạo</li><li>Ngày sửa</li><li>Link</li></ul>';
    foreach($posts_array as $post)
    {

        $logs = wp_get_post_revisions($post->ID);
        echo '<ul>';
        foreach($logs as $log)
        {
            $i++;
            echo '<li style="width: 50px">'.$i.'</li>';
            echo '<li style="width: 50px">';
             foreach(get_userdata($log->post_author)as $user)
             {
                 echo $user->user_nicename;
             }
            //var_dump($log);
            echo '</li>';
            echo '<li style="width: 300px">'.$log->post_title.'</br></li>';
            echo '<li>'.$log->post_name.'</br></li>';
            echo '<li style="width: 50px">'.$log->comment_status.'</br></li>';
            echo '<li>'.$log->post_date.'</br></li>';
            echo '<li>'.$log->post_modified.'</br></li>';
            echo '<li><a href="http://topgameandroid.com/wp-admin/revision.php?revision='.$log->ID.'">Link Chi tiết</a></br></li>';
            echo '</br>';
        };
        echo '</ul>';
    }
    echo '</div><div class ="page_nav">';
    paging('game',$my_query);
    echo '</div>';
    echo '<style type="text/css">
    #log_admin
    {
        width: 1220px;
    }

    #log_admin ul li{
        list-style-type: none;
        padding: 7px;
        background: #CCCCCC;
        width: 150px;
        text-align: center;
        border: 1px solid #FFF;
        float: left;
        min-height: 50px;
    }
    #log_admin ul:first-child li{
        background: -o-linear-gradient(bottom, #cccccc 5%, #b2b2b2 100%);
        background: -webkit-gradient( linear, left top, left bottom, color-stop(0.05, #cccccc), color-stop(1, #b2b2b2) );
        background: -moz-linear-gradient( center top, #cccccc 5%, #b2b2b2 100% );
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#cccccc", endColorstr="#b2b2b2");
        background: -o-linear-gradient(top,#cccccc,b2b2b2);
        background-color: #cccccc;
        border: 1px solid #000000;
        text-align: center;
        font-size: 14px;
        font-family: arial;
        font-weight: bold;
        color: #000000;
        font-size: 16px;
    }
    .page_nav {
        text-align: center;
        margin: auto;
        margin-top: 10px;
        width: 100%;
        height: 40px;
        float: left;
    }
    .current {
        background: none repeat scroll 0 0 #333333 !important;
        border: 1px solid #555555 !important;
        border-radius: 3px 3px 3px 3px!important;
        color: #FFFFFF !important;
        display: inline-block !important;
        margin-bottom: 5px !important;
        padding: 4px 8px !important;
    }
    .wp-pagenavi a, .page_nav .page-numbers, .page_nav .extend, .page_nav .page, .page_nav .nextpostslink, .page_nav .previouspostslink {
        background: url("http://topgameandroid.com/wp-content/themes/IzMobileBlue/images/bg_btn.png") repeat-x scroll center bottom #FDFDFD !important;
        border: 1px solid #CACACA !important;
        border-radius: 3px 3px 3px 3px !important;
        display: inline-block !important;
        margin-bottom: 5px !important;
        padding: 4px 8px !important;
        text-decoration: none !important;
    }
.wp-pagenavi a, .page_nav .page-numbers, .page_nav .extend, .page_nav .page, .page_nav .nextpostslink, .page_nav .previouspostslink
    {
        background: url("http://topgameandroid.com/wp-content/themes/IzMobileBlue/images/bg_btn.png") repeat-x scroll center bottom #FDFDFD !important;
        border: 1px solid #CACACA !important;
        border-radius: 3px 3px 3px 3px !important;
        display: inline-block !important;
        margin-bottom: 5px !important;
        padding: 4px 8px !important;
        text-decoration: none !important;
    }
    .page_nav .current {
        background: none repeat scroll 0 0 #333333 !important;
        border: 1px solid #555555 !important;
        border-radius: 3px 3px 3px 3px!important;
        color: #FFFFFF !important;
        display: inline-block !important;
        margin-bottom: 5px !important;
        padding: 4px 8px !important;
    }
</style>';

