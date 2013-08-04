<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	
	function create_my_taxonomies() {
	register_taxonomy('new taxonomy', 'post', array(
	'hierarchical' => false, 'label' => 'New Taxonomy',
	'query_var' => true, 'rewrite' => true));
	}
	add_action('init', 'create_my_taxonomies', 0);
	
	
	function user_the_categories() {
	    // get all categories for this post
	    global $cats;
	    $cats = get_the_category();
	    // echo the first category
	    echo $cats[0]->cat_name;
	    // echo the remaining categories, appending separator
	    for ($i = 1; $i < count($cats); $i++) {echo ', ' . $cats[$i]->cat_name ;}
	}
	
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
    
function my_custom_post_favorite() {
	$labels = array(
		'name'               => _x( 'Favorites', 'post type general name' ),
		'singular_name'      => _x( 'Favorite', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'book' ),
		'add_new_item'       => __( 'Add New Favorite' ),
		'edit_item'          => __( 'Edit Favorite' ),
		'new_item'           => __( 'New Favorite' ),
		'all_items'          => __( 'All Favorites' ),
		'view_item'          => __( 'View Favorite' ),
		'search_items'       => __( 'Search Favorites' ),
		'not_found'          => __( 'No favorites found' ),
		'not_found_in_trash' => __( 'No favorites found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Favorites'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Holds our favorites and favorite specific data',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive'   => true,
	);
	register_post_type( 'favorite', $args );	
}
add_action( 'init', 'my_custom_post_favorite' );


function my_taxonomies_favorite() {
	$labels = array(
		'name'              => _x( 'Favorites Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Favorite Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Favorite Categories' ),
		'all_items'         => __( 'All Favorite Categories' ),
		'parent_item'       => __( 'Parent Favorite Category' ),
		'parent_item_colon' => __( 'Parent Favorite Category:' ),
		'edit_item'         => __( 'Edit Favorite Category' ), 
		'update_item'       => __( 'Update Favorite Category' ),
		'add_new_item'      => __( 'Add New Favorite Category' ),
		'new_item_name'     => __( 'New Favorite Category' ),
		'menu_name'         => __( 'Favorite Categories' ),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
	);
	register_taxonomy( 'favorie_category', 'favorite', $args );
}
add_action( 'init', 'my_taxonomies_favorite', 0 );




function my_custom_post_feedposts() {
	$labels = array(
		'name'               => _x( 'feedposts', 'post type general name' ),
		'singular_name'      => _x( 'feedpost', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'feedpost' ),
		'add_new_item'       => __( 'Add New feedpost' ),
		'edit_item'          => __( 'Edit feedpost' ),
		'new_item'           => __( 'New feedpost' ),
		'all_items'          => __( 'All feedposts' ),
		'view_item'          => __( 'View feedpost' ),
		'search_items'       => __( 'Search Favorites' ),
		'not_found'          => __( 'No feedposts found' ),
		'not_found_in_trash' => __( 'No feedposts found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Feedposts'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Holds our feed posts and feed posts specific data',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive'   => true,
	);
	register_post_type( 'feedposts', $args );	
}
add_action( 'init', 'my_custom_post_feedposts' );


function my_taxonomies_feedposts() {
	$labels = array(
		'name'              => _x( 'Feedposts Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Feedpost Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Favorite Feedposts' ),
		'all_items'         => __( 'All Favorite Feedposts' ),
		'parent_item'       => __( 'Parent Favorite Feedpost' ),
		'parent_item_colon' => __( 'Parent Favorite Feedpost:' ),
		'edit_item'         => __( 'Edit Favorite Feedpost' ), 
		'update_item'       => __( 'Update Favorite Feedpost' ),
		'add_new_item'      => __( 'Add New Favorite Feedpost' ),
		'new_item_name'     => __( 'New Favorite Feedpost' ),
		'menu_name'         => __( 'Favorite Feedposts' ),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
	);
	register_taxonomy( 'feedposts_category', 'feedposts', $args );
}
add_action( 'init', 'my_taxonomies_feedposts', 0 );


?>