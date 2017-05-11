<?php
 // Enqueueing all the java script in a no conflict mode
 function ineedmyjava() {
	if (!is_admin()) {
 
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false, '1.10.2', true);
		wp_enqueue_script('jquery');
		
		// Custom Theme scripts...
		wp_register_script(
			'custom',
			get_bloginfo('template_directory') . '/js/custom.js',
			array('jquery','flexslider','blocks','isotope','images-loaded'), '1.0' , true );
		wp_enqueue_script('custom');
		
		
		// Homepage slider 'flexslider' scripts...
		wp_register_script(
			'flexslider',
			get_bloginfo('template_directory') . '/js/flexslider.js',
			array('jquery') , '1.0' , true );
		wp_enqueue_script('flexslider');

    // Homepage slider 'flexslider' scripts...
    wp_register_script(
      'blocks',
      get_bloginfo('template_directory') . '/js/blocks.js',
      array('jquery') , '1.0' , true );
    wp_enqueue_script('blocks');
		
    wp_register_script(
      'isotope',
      get_bloginfo('template_directory') . '/js/isotope.js',
      array('jquery') , '1.0' , true );
    wp_enqueue_script('isotope');	

    wp_register_script(
      'images-loaded',
      get_bloginfo('template_directory') . '/js/images-loaded.js',
      array('jquery') , '1.0' , true );
    wp_enqueue_script('images-loaded');
		// Add more
		
		
		// between here
		
	}
}
 
add_action('wp_enqueue_scripts', 'ineedmyjava');


add_image_size('leadership',300, 9999); 
/* Custom Post Types */

add_action('init', 'js_custom_init');
function js_custom_init() 
{
	
	// Register the Homepage Slides
  
     $labels = array(
	'name' => _x('Leadership', 'post type general name'),
    'singular_name' => _x('Leadership', 'post type singular name'),
    'add_new' => _x('Add New', 'Leadership'),
    'add_new_item' => __('Add New Leadership'),
    'edit_item' => __('Edit Leadership'),
    'new_item' => __('New Leadership'),
    'view_item' => __('View Leadership'),
    'search_items' => __('Search Leadership'),
    'not_found' =>  __('No Leadership found'),
    'not_found_in_trash' => __('No Leadership found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Leadership'
  );
  $args = array(
	'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false, // 'false' acts like posts 'true' acts like pages
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail'),
	
  ); 
  register_post_type('leadership',$args); // name used in query
	
	
	// Register the Homepage Slides
  
     $labels = array(
	'name' => _x('Case Studies', 'post type general name'),
    'singular_name' => _x('Case Study', 'post type singular name'),
    'add_new' => _x('Add New', 'Case Study'),
    'add_new_item' => __('Add New Case Study'),
    'edit_item' => __('Edit Case Study'),
    'new_item' => __('New Case Study'),
    'view_item' => __('View Case Study'),
    'search_items' => __('Search Case Study'),
    'not_found' =>  __('No Case Study found'),
    'not_found_in_trash' => __('No Case Study found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Case Studies'
  );
  $args = array(
	'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false, // 'false' acts like posts 'true' acts like pages
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail'),
	
  ); 
  register_post_type('case_study',$args); // name used in query
	
	
	// Register the Homepage Slides
  
     $labels = array(
	'name' => _x('Webinars', 'post type general name'),
    'singular_name' => _x('Webinar', 'post type singular name'),
    'add_new' => _x('Add New', 'Webinar'),
    'add_new_item' => __('Add New Webinar'),
    'edit_item' => __('Edit Webinar'),
    'new_item' => __('New Webinar'),
    'view_item' => __('View Webinar'),
    'search_items' => __('Search Webinar'),
    'not_found' =>  __('No Webinar found'),
    'not_found_in_trash' => __('No Webinar found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Webinar'
  );
  $args = array(
	'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false, // 'false' acts like posts 'true' acts like pages
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail'),
	
  ); 
  register_post_type('webinars',$args); // name used in query
	
	
	// Register the Homepage Slides
  
     $labels = array(
	'name' => _x('Testimonials', 'post type general name'),
    'singular_name' => _x('Testimonial', 'post type singular name'),
    'add_new' => _x('Add New', 'Testimonial'),
    'add_new_item' => __('Add New Testimonial'),
    'edit_item' => __('Edit Testimonial'),
    'new_item' => __('New Testimonial'),
    'view_item' => __('View Testimonial'),
    'search_items' => __('Search Testimonial'),
    'not_found' =>  __('No Testimonial found'),
    'not_found_in_trash' => __('No Testimonial found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Testimonials'
  );
  $args = array(
	'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false, // 'false' acts like posts 'true' acts like pages
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail'),
	
  ); 
  register_post_type('testimonial',$args); // name used in query
  
  // Add more between here
  
  // and here
  
  } // close custom post type
  
  /*
##############################################
	Custom Taxonomies
*/
add_action( 'init', 'build_taxonomies', 0 );
 
function build_taxonomies() {
// cusotm tax
    register_taxonomy( 'leadership_region', array('leadership', 'webinars', 'case_study' ),
	 array( 
	'hierarchical' => true, // true = acts like categories false = acts like tags
	'label' => 'Leadership Region', 
	'query_var' => true, 
	'rewrite' => true ,
	'show_admin_column' => true,
	'public' => true,
	'rewrite' => array( 'slug' => 'eadership-region' ),
	'_builtin' => true
	) );
	
} // End build taxonomies
  
  // add a favicon from your theme folder
function mytheme_favicon() { 
 echo '<link rel="shortcut icon" href="' . get_bloginfo('stylesheet_directory') . '/images/favicon.ico" >'; 
} 
add_action('wp_head', 'mytheme_favicon');

/*-------------------------------------
	Custom client login, link and title.
---------------------------------------*/
function my_login_logo() { ?>
<style type="text/css">
  body.login div#login h1 a {
  	background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png);
  	background-size: 276px 79px;
  	width: 276px;
  	height: 79px;
  }
</style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

// Change Link
function loginpage_custom_link() {
	return the_permalink();
}
add_filter('login_headerurl','loginpage_custom_link');

// Pagination

function pagi_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="navigation"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";

}
// Id tree function
function is_tree($pid)
{
  global $post;

  $ancestors = get_post_ancestors($post->$pid);
  $root = count($ancestors) - 1;
  $parent = $ancestors[$root];

  if(is_page() && (is_page($pid) || $post->post_parent == $pid || in_array($pid, $ancestors)))
  {
    return true;
  }
  else
  {
    return false;
  }
};