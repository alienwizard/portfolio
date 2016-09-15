<?php
	// Need to require these files
	if ( !function_exists('media_handle_upload') ) {
		require_once(ABSPATH . "wp-admin" . '/includes/image.php');
		require_once(ABSPATH . "wp-admin" . '/includes/file.php');
		require_once(ABSPATH . "wp-admin" . '/includes/media.php');
	}


add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
function theme_enqueue_scripts(){



	wp_register_script('jquery', get_bloginfo('template_url') . '/node_modules/jquery/dist/jquery.min.js', false, true);
	wp_enqueue_script('jquery');

	wp_register_script('parallax.js', get_bloginfo('template_url') . '/node_modules//node_modules/parallax.js/parallax.min.js');
	wp_enqueue_script('parallax.js');


	wp_register_script('instafeed.js', get_bloginfo('template_url') . '/node_modules/instafeed.js/instafeed.min.js');
	wp_enqueue_script('instafeed.js');

	wp_register_script('swiper', get_bloginfo('template_url') . '/node_modules/vendor/Swiper/dist/js/swiper.js');
	wp_enqueue_script('swiper');



	wp_register_script('masonry', get_bloginfo('template_url') . '/node_modules/masonry/masonry.js');
	wp_enqueue_script('masonry');

	wp_register_script('imagesloaded', get_bloginfo('template_url') . '/node_modules/imagesloaded/imagesloaded.js');
	wp_enqueue_script('imagesloaded');

	wp_register_script('livereload', 'http://localhost:35729/livereload.js?snipver=1', null, false, true);
	wp_enqueue_script('livereload');

	wp_enqueue_style('swiper.min.css', get_bloginfo('template_url') . '/js/vendor/Swiper/dist/css/swiper.min.css');

	wp_enqueue_style('bootstrap.min.css', get_bloginfo('template_url') . '/js/vendor/bootstrap/dist/css/bootstrap.min.css');

	wp_enqueue_style('font-awesome.min.css', get_bloginfo('template_url') . '/js/vendor/font-awesome/css/font-awesome.min.css');

	wp_enqueue_style('animate.min.css', get_bloginfo('template_url') . '/js/vendor/animate.css/animate.min.css');

	wp_enqueue_style('custom.css', get_bloginfo('template_url') . '/css/custom.css');

	wp_enqueue_style('responsive.css', get_bloginfo('template_url') . '/css/responsive.css');



}

//Add Featured Image Support
add_theme_support('post-thumbnails');

// Clean up the <head>
function removeHeadLinks() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

function register_menus() {
	register_nav_menus(
		array(
			'main-nav' => 'Main Navigation',
			'secondary-nav' => 'Secondary Navigation',
			'sidebar-menu' => 'Sidebar Menu',
			'left-menu' => 'Left menu',
			'right-menu' => 'Right menu'
		)
	);
}
add_action( 'init', 'register_menus' );


// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_worker_taxonomies', 0 );


//SKAPA INLÄGGSTYP FÖR REFERENSUPPDRAG

function register_referens_post() {

	$labels = array(
		'name'                => __( 'Referenser', 'text-domain' ),
		'singular_name'       => __( 'Referens', 'text-domain' ),
		'add_new'             => _x( 'Lägg till en ny referens', 'text-domain', 'text-domain' ),
		'add_new_item'        => __( 'Add New Singular referens', 'text-domain' ),
		'edit_item'           => __( 'Edit Singular referens', 'text-domain' ),
		'new_item'            => __( 'New Singular referens', 'text-domain' ),
		'view_item'           => __( 'View Singular referens', 'text-domain' ),
		'search_items'        => __( 'Search Plural referens', 'text-domain' ),
		'not_found'           => __( 'No Plural referens found', 'text-domain' ),
		'not_found_in_trash'  => __( 'No Plural referens found in Trash', 'text-domain' ),
		'parent_item_colon'   => __( 'Parent Singular referens:', 'text-domain' ),
		'menu_name'           => __( 'Referenser', 'text-domain' ),
	);

	$args = array(
		'labels'                   => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array('category'),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => array('slug' => 'referens'),
		'capability_type'     => 'post',
		'supports'            => array(
			'title', 'editor', 'author', 'thumbnail',
			'excerpt','custom-fields', 'trackbacks', 'comments',
			'revisions', 'page-attributes', 'post-formats',
			)
	);

	register_post_type( 'referens', $args );
}

add_action( 'init', 'register_referens_post' );




function create_worker_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Uppdrag', 'taxonomy general name' ),
		'singular_name'     => _x( 'Uppdrag', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Genres' ),
		'all_items'         => __( 'All Genres' ),
		'parent_item'       => __( 'Parent Genre' ),
		'parent_item_colon' => __( 'Parent Genre:' ),
		'edit_item'         => __( 'Edit Genre' ),
		'update_item'       => __( 'Update Genre' ),
		'add_new_item'      => __( 'Add New Uppdrag' ),
		'new_item_name'     => __( 'New Genre Name' ),
		'menu_name'         => __( 'Uppdrag' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'uppdrag' ),
	);



register_taxonomy( 'uppdrag', 'worker', $args );

}

?>