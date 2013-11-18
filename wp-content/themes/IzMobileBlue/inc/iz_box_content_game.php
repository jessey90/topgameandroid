<?php
class Iz_Box_Content_Game extends WP_Widget
{
    function Iz_Box_Content_Game(){
			parent::WP_Widget('Iz_Box_Content_Game',
					'Iz Box Content Top Game',
            array('description' => 'Hiển thị số bài có lượt view cao nhất.'));
    }

  //Displays the Widget in the front-end
    function widget($args, $instance){
		extract($args);
		$title = apply_filters('widget_title', empty($instance['title']) ? 'Recent From ' : $instance['title']);
		$posts_number = empty($instance['posts_number']) ? '' : (int) $instance['posts_number'];

		echo $before_widget;
		$file_img_list=get_template_directory_uri().'/images/default-list.png';
		$file_img=get_template_directory_uri().'/images/default.png';
		if ( $title )
			/*echo $before_title .'<img src="'.$file_img.'" alt="'.get_bloginfo("name").'"/>'. $title . $after_title;*/
			?>
        <div class="iz-content">
        <div style="height:1px;border-bottom: 1px solid #dfdfdf;"></div>
			<?php
				if(have_posts()):
					$game_page = max( 1, $_GET['game-page']);
					$args1 = array(
							'posts_per_page' => 20,
							'paged' => $game_page,
							'orderby' =>'date',
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
                    $i =0;
					while ($my_query->have_posts()):
                        $i++;
						$my_query->the_post();
						$do_not_duplicate = $post->ID;
				?>
					<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($the_post->ID) ); ?>
                        <div class="iz-label" <?php if($i%2!=1){echo "style='background: #f6f8f4'";}?>>
                            <div id="contentwrapper">
                                <div id="contentcolumn">
                                    <div class="iz-label-title">
                                        <a title="<?php echo esc_attr(the_title());?>" href="<?php the_permalink() ?>"><?php echo the_title(); ?></a>
                                    </div>
                                    <div class="iz-desc">
                                        <?php the_field('mo_ta');?>
                                    </div>
                                </div>
                            </div>
                            <div class="iz-logo" id="leftcolumn">
                                <a class="iz-label-img"href="<?php the_permalink(); ?>" title ="<?php echo strip_shortcodes($recent['post_title']); ?>">
                                    <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php echo $feat_image; ?>" alt="<?php  echo strip_shortcodes($recent['post_title']); ?> " />
                                    <?php else : ?>
                                    <img src="<?php bloginfo('template_url'); ?>/images/no-image.jpg" alt="<?php  echo strip_shortcodes(the_title()); ?> "/>
                                    <?php endif; ?>
                                </a>
                            </div>
                            <div class="iz-download" id="rightcolumn">
                                <a class="btn-download" href="<?php the_field('link_download_game');?>" onClick="_gaq.push(['_trackEvent', 'Trang-Tai-Nhieu', 'Download-Link: <?php the_field('link_download_game'); ?>', 'Game <?php echo the_title();?>' , '<?php the_field('link_download_game');?>']);">Tải Game</a>
                            </div>
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
			<?php
		echo $after_widget;
    }

  //Saves the settings.
    function update($new_instance, $old_instance){
		$instance = $old_instance;
		$instance['title'] = stripslashes($new_instance['title']);
		$instance['posts_number'] = (int) $new_instance['posts_number'];
		$instance['blog_category'] = (int) $new_instance['blog_category'];
		return $instance;
    }

  //Creates the form for the widget in the back-end.
    function form($instance){
		//Defaults
    $instance = wp_parse_args( (array) $instance, array('title'=>'Tiêu đề Categories', 'posts_number'=>'5', 'blog_category'=>'') );

    $title = esc_attr($instance['title']);
    $posts_number = (int) $instance['posts_number'];

    # Title
    echo '<p><label for="' . $this->get_field_id('title') . '">' . 'Title:' . '</label><input class="widefat" id="' . $this->get_field_id('title') . '" name="' . $this->get_field_name('title') . '" type="text" value="' . $title . '" /></p>';
    # Number Of Posts
    echo '<p><label for="' . $this->get_field_id('posts_number') . '">' . 'Số lượng hiển thị:' . '</label><input class="widefat" id="' . $this->get_field_id('posts_number') . '" name="' . $this->get_field_name('posts_number') . '" type="text" value="' . $posts_number . '" /></p>';
    # Category ?>
    <?php
    }

} // end bcdonline_fromcategorieswidget class

function Iz_Box_Content_GameInit() {
  register_widget('Iz_Box_Content_Game');
}
add_action('widgets_init', 'Iz_Box_Content_GameInit');
?>