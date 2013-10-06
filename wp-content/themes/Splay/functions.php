<?php
include(TEMPLATEPATH . '/inc/iz_box_content_latest.php');
include(TEMPLATEPATH . '/inc/iz_box_content_game.php');
include(TEMPLATEPATH . '/inc/iz_box_content_app.php');
include(TEMPLATEPATH . '/inc/iz_box_content_link.php');
include(TEMPLATEPATH . '/inc/iz_box_content_footer.php');
include(TEMPLATEPATH . '/inc/iz_box_content_random.php');
include(TEMPLATEPATH . '/inc/iz_box_content_search.php');
include(TEMPLATEPATH . '/inc/iz_box_content_sameCategory.php');
include(TEMPLATEPATH . '/inc/iz_box_content_ads.php');
include(TEMPLATEPATH . '/inc/iz_box_content.php');
add_theme_support ( 'nav-menus' );
add_theme_support ( 'post-thumbnails' );
register_nav_menus ( array (
		'main_top' => __ ( 'Menu chính ở trên' ) 
) );

register_sidebar(array(
	'id'            => 'header-content',
	'name'          => 'Header Content',
	'before_widget' => '<div class="iz-box">',
	'after_widget' => '</div>',
	'before_title' => '<div class="iz-title"><h2>',
	'after_title' => '</h2></div>',
 ));
register_sidebar(array(
	'id'            => 'index-content',
	'name'          => 'Index Content',
	'before_widget' => '<div class="iz-box">',
	'after_widget' => '</div>',
	'before_title' => '',
	'after_title' => '',
 ));

 register_sidebar(array(
	'id'            => 'footer-content',
	'name'          => 'Footer Content',
	'before_widget' => '<div class="iz-box">',
	'after_widget' => '</div>',
	'before_title' => '<div class="iz-title"><h2>',
	'after_title' => '</h2></div>',
 ));
  register_sidebar(array(
	'id'            => 'footer-single',
	'name'          => 'Footer Single',
	'before_widget' => '<div class="iz-box">',
	'after_widget' => '</div>',
	'before_title' => '<div class="iz-title"><h2>',
	'after_title' => '</h2></div>',
 ));
function paging($param, $query){
	if ($param =='app'){
		$total_pages = $query->max_num_pages;
		if ($total_pages > 1){
		$pag_args1 = array(
					'base' =>'%_%', 
	                'format'  => '?app-page=%#%',
					'end_size'     => 1,
					'mid_size'     => 2,
	                'current' => max( 1, $_GET['app-page'] ),
	                'total'   => $query->max_num_pages,
	                'add_args' => array( array( 'game-page' => max( 1, $_GET['game-page'] ),'best-page' => max( 1, $_GET['best-page'] )))
	            );
	            echo paginate_links( $pag_args1 );
		}
	}
	else if ($param=='game'){
		$total_pages = $query->max_num_pages;
		if ($total_pages > 1){
		$pag_args2 = array(
				'base' =>  '%_%',
				'end_size'     => 1,
				'mid_size'     => 2,
				'format'  => '?game-page=%#%',
				'current' => max( 1, $_GET['game-page'] ),
				'total'   => $query->max_num_pages,
				'add_args' => array( array( 'app-page' => max( 1, $_GET['app-page'] ),'best-page' => max( 1, $_GET['best-page'] )))
			);
			echo paginate_links( $pag_args2 );
		}
	}
	else if ($param=='best'){
		$total_pages = $query->max_num_pages;  
		if ($total_pages > 1){
		$pag_args3 = array(
			'base' =>  '%_%', 
			'format'       => '?best-page=%#%',
			'end_size'     => 1,
			'mid_size'     => 2,
			'current' => max( 1, $_GET['best-page'] ),
			'total'   => $query->max_num_pages,
			'add_args' => array( 'app-page' => max( 1, $_GET['app-page'] ),'game-page' => max( 1, $_GET['game-page'] ))
		);
		echo paginate_links( $pag_args3 );
		}
	}
	else{
		$total_pages = $wp_query->max_num_pages;  
		if ($total_pages > 1){  
		  $current_page = max(1, get_query_var('paged'));  
		 
		  echo paginate_links(array(  
			  'base' =>  '%_%',  
			  'format' => '?paged=%#%',  
			  'current' => $current_page,  
			  'total' => $total_pages,  
			  'prev_text' => 'Trang trước',  
			  'next_text' => 'Trang sau'  
			));  
		  
		}  
	}
}
function _substr($str, $n, $link) {
	if (strlen ( $str ) < $n)
		return $str;
	$html = substr ( $str, 0, $n );
	$html = substr ( $html, 0, strrpos ( $html, ' ' ) );
	$link1 = '<a href="' . $link . '" title="Xem tiếp.."> [more..]</a>';
	return $html . $link1;
}
/* SEO friendly breadcrumb */
if (! function_exists ( 'seobreadcrumbs' )) :
function seobreadcrumbs() {
		$separator = '»';
		$home = 'Trang chủ';
		echo '<div xmlns:v="http://rdf.data-vocabulary.org/#" class="seobreadcrumbs">';
		global $post;
		echo '  <span typeof="v:Breadcrumb">
		<a rel="v:url" property="v:title" href="' . site_url () . '">Trang chủ</a>
		</span> ';
		$category = get_the_category ();
		if ($category) {
			foreach ( $category as $category ) {
				echo $separator . "<span typeof=\"v:Breadcrumb\">
		<a rel=\"v:url\" property=\"v:title\" href=\"" . get_category_link ( $category->term_id ) . "\" >$category->name</a>
		</span>";
			}
		}
		echo '</div>';
	}

endif;
/* end SEO friendly breadcrumb */
// Add top game hot meta
add_action ( 'add_meta_boxes', 'game_hot_add' );
function game_hot_add() {
	add_meta_box ( 'game-hot-box', __ ( 'Top Game Hot' ), 'game_hot_meta_box', 'post', 'normal', 'high' );
}
function game_hot_meta_box($post) {
	$values = get_post_custom ( $post->ID );
	$check = isset ( $values ['top-game-hot'] ) ? esc_attr ( $values ['top-game-hot'] [0] ) : '';
	?>

<input type='checkbox' name='top-game-hot' id='is-top-game-hot'
	<?php echo checked( $check, 'on' );?> />

<label for="top-game-hot"> Thêm bài này vào Top Game Hot</label>
<?php
}
add_action ( 'save_post', 'game_hot_meta_box_save' );
function game_hot_meta_box_save($post_id) {
	if (defined ( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE)
		return;
	$chk = (isset ( $_POST ['top-game-hot'] ) && $_POST ['top-game-hot']) ? 'on' : 'off';
	update_post_meta ( $post_id, 'top-game-hot', $chk );
}
// end top game hot meta

// Add top application meta
add_action ( 'add_meta_boxes', 'application_hot_add' );
function application_hot_add() {
	add_meta_box ( 'application-hot-box', __ ( 'Top ứng dụng hot' ), 'application_hot_meta_box', 'post', 'normal', 'high' );
}
function application_hot_meta_box($post) {
	$values = get_post_custom ( $post->ID );
	$check = isset ( $values ['top-application-hot'] ) ? esc_attr ( $values ['top-application-hot'] [0] ) : '';
	?>

<input type='checkbox' name='top-application-hot'
	id='is-top-application-hot' <?php echo checked( $check, 'on' );?> />

<label for="top-application-hot"> Thêm bài này vào Top ứng dụng hot</label>
<?php
}
add_action ( 'save_post', 'application_hot_meta_box_save' );
function application_hot_meta_box_save($post_id) {
	if (defined ( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE)
		return;
	$chk = (isset ( $_POST ['top-application-hot'] ) && $_POST ['top-application-hot']) ? 'on' : 'off';
	update_post_meta ( $post_id, 'top-application-hot', $chk );
}
// end top application meta
add_filter('query_vars', 'parameter_queryvars' );
function parameter_queryvars( $qvars )
{
$qvars[] = 'post_id';
return $qvars;
}
function get_cat_slug($cat_id) {
	$cat_id = (int) $cat_id;
	$category = &get_category($cat_id);
	return $category->slug;
}
function my_get_highest_parent( $id ) {
			$cat = get_category( $id );
			$parent = $cat->parent;
				
			if( $parent == 0 ) 
			{
				//if($cat->name!='Featured')
				//{
					return $id;
				//}
			}
			else
				my_get_highest_parent( $parent );
}