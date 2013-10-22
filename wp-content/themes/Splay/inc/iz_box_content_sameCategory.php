<?php 
class Iz_Box_Content_sameCategory extends WP_Widget
{
    function Iz_Box_Content_sameCategory(){
			parent::WP_Widget('Iz_Box_Content_sameCategory', 
					'Iz Box Content Same Category', 
            array('description' => 'Hiển thị bài viết cùng chuyên mục.'));
    }
 
  //Displays the Widget in the front-end 
    function widget($args, $instance){
		extract($args);

		$title = apply_filters('widget_title', empty($instance['title']) ? 'Recent From ' : $instance['title']);
		$posts_number = empty($instance['posts_number']) ? '' : (int) $instance['posts_number'];

		echo $before_widget;
		if(file_exists(get_template_directory_uri().'/images/'.get_cat_slug($blog_category).'.png'))
			$file_img=get_template_directory_uri().'/images/'.get_cat_slug($blog_category).'.png';
		else
			$file_img=get_template_directory_uri().'/images/default.png';
		if ( $title )
			echo $before_title . $title . $after_title;
			global $post;
			$category = get_the_category($post->ID);
			$category = $category[0]->cat_ID;
			$args1 = array(
						'posts_per_page' => $posts_number,
						'offset' => 0, 
						'category__in' => array($category), 
						'post__not_in' => array($post->ID),
						'post_status'=>'publish'
					);
			$my_query = new WP_Query($args1);
			if(file_exists(get_template_directory_uri().'/images/'.get_cat_slug($blog_category).'-list.png'))
				$file_img_list=get_template_directory_uri().'/images/'.get_cat_slug($blog_category).'-list.png';
			else
				$file_img_list=get_template_directory_uri().'/images/default-list.png';
			echo '<div class="iz-content">';
            $i = 0;
			while ($my_query->have_posts()): 
				$my_query->the_post();
				$do_not_duplicate = $post->ID;
                $i++;
                $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
				?>
            <div class="iz-label" <?php if($i%2!=1){echo "style='background: #f2f4f6'";}?>>
                <div class="contentwrapper">
                    <div class="contentcolumn">
                        <div class="iz-label-title">
                            <a title="<?php echo esc_attr($post->post_title);?>" href="<?php echo get_permalink($post->ID); ?>"><?php echo $post->post_title; ?></a>
                        </div>
                        <div class="iz-desc">
                            <?php
                            the_field( 'mo_ta', $post->ID);?>
                        </div>
                    </div>
                </div>
                <div class="iz-logo leftcolumn">
                    <a class="iz-label-img"href="<?php echo get_permalink($post->ID); ?>" title ="<?php echo strip_shortcodes($post->post_title); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php echo $feat_image; ?>" alt="<?php  echo strip_shortcodes($post->post_title); ?> " />
                        <?php else : ?>
                        <img src="<?php bloginfo('template_url'); ?>/images/no-image.jpg" alt="<?php  echo strip_shortcodes($post->post_title); ?> "/>
                        <?php endif; ?>
                    </a>
                    <div class="iz-download">
                        <a class="btn-download" href="<?php the_field('link_download_game',$post->ID); ?>">Tải xuống</a>
                    </div>
                </div>
            </div>

				<?php
			endwhile;
		?>
	<?php
		echo $after_widget;
    }
 
  //Saves the settings. 
    function update($new_instance, $old_instance){
		$instance = $old_instance;
		$instance['title'] = stripslashes($new_instance['title']);
		$instance['posts_number'] = (int) $new_instance['posts_number'];
		return $instance;
    }
 
  //Creates the form for the widget in the back-end. 
    function form($instance){
		//Defaults
    $instance = wp_parse_args( (array) $instance, array('title'=>'Tiêu đề Categories', 'posts_number'=>'5', 'blog_category'=>'') );
 
    $title = esc_attr($instance['title']);
    $posts_number = (int) $instance['posts_number'];
    $blog_category = (int) $instance['blog_category'];
 
    # Title
    echo '<p><label for="' . $this->get_field_id('title') . '">' . 'Title:' . '</label><input class="widefat" id="' . $this->get_field_id('title') . '" name="' . $this->get_field_name('title') . '" type="text" value="' . $title . '" /></p>';
    # Number Of Posts
    echo '<p><label for="'. $this->get_field_id('posts_number') . '">' . 'Số lượng hiển thị:' . '</label><input class="widefat" id="' . $this->get_field_id('posts_number') . '" name="' . $this->get_field_name('posts_number') . '" type="text" value="' . $posts_number . '" /></p>';
    # Category ?>
    <?php 
			$args = array(
				'echo'               => 0,
				'hierarchical'       => 1, 
				'taxonomy'           => 'category',
			);
		$cats_array = get_categories($args);
    ?>
    <?php
    }
 
} // end bcdonline_fromcategorieswidget class
 
function Iz_Box_Content_sameCategoryInit() {
  register_widget('Iz_Box_Content_sameCategory');
}
add_action('widgets_init', 'Iz_Box_Content_sameCategoryInit');
?>