<?php 

// Register Custom Post Type
function team_post_type() {

	$labels = array(
		'name'                  => _x( 'Team Members', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Team Member', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Team Members', 'text_domain' ),
		'name_admin_bar'        => __( 'Team Member', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Team Member', 'text_domain' ),
		'description'           => __( 'Team Members', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor','thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'team', $args );

}
add_action( 'init', 'team_post_type', 0 );

// Register Custom Post Type
function resources() {

	$labels = array(
		'name'                  => _x( 'Resources', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Resource', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Resources', 'text_domain' ),
		'name_admin_bar'        => __( 'Resources', 'text_domain' ),
		'archives'              => __( 'Resource Archives', 'text_domain' ),
		'attributes'            => __( 'Resource Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Resource', 'text_domain' ),
		'description'           => __( 'Resources eg. Videos, Checklists, Case Studies', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag', 'resource-type' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'with_front'           	=> true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'resources', $args );

}
add_action( 'init', 'resources', 0 );

//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_topics_hierarchical_taxonomy', 0 );
 
//create a custom taxonomy name it topics for your posts
 
function create_topics_hierarchical_taxonomy() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'Resource Type', 'taxonomy general name' ),
    'singular_name' => _x( 'Resource Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Resource Types' ),
    'all_items' => __( 'All Resource Types' ),
    'parent_item' => __( 'Parent Resource Type' ),
    'parent_item_colon' => __( 'Parent Resource Type:' ),
    'edit_item' => __( 'Edit Resource Type' ), 
    'update_item' => __( 'Update Resource Type' ),
    'add_new_item' => __( 'Add New Resource Type' ),
    'new_item_name' => __( 'New Resource Type Name' ),
    'menu_name' => __( 'Resource Types' ),
  );    
 
// Now register the taxonomy
 
  register_taxonomy('resource-type','resources', array(
    'hierarchical' => true,
    'labels' => $labels,
    'has_archive' => true,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'resource-type' ),
  ));
 
}



/* Safesite specific custom post types & taxonomy */

if ( ! function_exists('add_careers_custom_post_type') ) {

	// Register Custom Post Type
	function add_careers_custom_post_type() {

		$labels = array(
			'name'                  => _x( 'Careers', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'Career', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Careers', 'text_domain' ),
			'name_admin_bar'        => __( 'Careers', 'text_domain' ),
			'archives'              => __( 'Careers', 'text_domain' ),
			'attributes'            => __( 'Career Attributes', 'text_domain' ),
			'parent_item_colon'     => __( 'Parent Career:', 'text_domain' ),
			'all_items'             => __( 'All Careers', 'text_domain' ),
			'add_new_item'          => __( 'Add New Career', 'text_domain' ),
			'add_new'               => __( 'Add New Career', 'text_domain' ),
			'new_item'              => __( 'New Career', 'text_domain' ),
			'edit_item'             => __( 'Edit Career', 'text_domain' ),
			'update_item'           => __( 'Update Career', 'text_domain' ),
			'view_item'             => __( 'View Career', 'text_domain' ),
			'view_items'            => __( 'View Careers', 'text_domain' ),
			'search_items'          => __( 'Search Careers', 'text_domain' ),
			'not_found'             => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
			'featured_image'        => __( 'Featured Image', 'text_domain' ),
			'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
			'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
			'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Career', 'text_domain' ),
			'items_list'            => __( 'Careers list', 'text_domain' ),
			'items_list_navigation' => __( 'Careers list navigation', 'text_domain' ),
			'filter_items_list'     => __( 'Filter Careers list', 'text_domain' ),
		);
		$rewrite = array(
			'slug'                  => 'company/careers',
			'with_front'            => true,
			'pages'                 => true,
			'feeds'                 => true,
		);
		$args = array(
			'label'                 => __( 'Career', 'text_domain' ),
			'description'           => __( 'Safesite Career Opportunities', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'thumbnail' ),
			'taxonomies'            => array( 'tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-megaphone',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'rewrite'               => $rewrite,
			'capability_type'       => 'page',
		);
		register_post_type( 'careers', $args );

	}
	add_action( 'init', 'add_careers_custom_post_type', 0 );

}


if ( ! function_exists('add_careers_custom_taxonomy') ) {
	// Register Custom Taxonomy
	function add_careers_custom_taxonomy() {

		$labels = array(
			'name'                       => _x( 'Career Categories', 'Taxonomy General Name', 'text_domain' ),
			'singular_name'              => _x( 'Career Category', 'Taxonomy Singular Name', 'text_domain' ),
			'menu_name'                  => __( 'Career Categories', 'text_domain' ),
			'all_items'                  => __( 'All Career Categories', 'text_domain' ),
			'parent_item'                => __( 'Parent Career Category', 'text_domain' ),
			'parent_item_colon'          => __( 'Parent Career Category:', 'text_domain' ),
			'new_item_name'              => __( 'New Career Category Name', 'text_domain' ),
			'add_new_item'               => __( 'Add New Career Category', 'text_domain' ),
			'edit_item'                  => __( 'Edit Career Category', 'text_domain' ),
			'update_item'                => __( 'Update Career Category', 'text_domain' ),
			'view_item'                  => __( 'View Career Category', 'text_domain' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
			'add_or_remove_items'        => __( 'Add or remove Career Categories', 'text_domain' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
			'popular_items'              => __( 'Popular Items', 'text_domain' ),
			'search_items'               => __( 'Search Career Categories', 'text_domain' ),
			'not_found'                  => __( 'Not Found', 'text_domain' ),
			'no_terms'                   => __( 'No Career Categories', 'text_domain' ),
			'items_list'                 => __( 'Career Categories list', 'text_domain' ),
			'items_list_navigation'      => __( 'Career Categories list navigation', 'text_domain' ),
		);
		$args   = array(
			'labels'            => $labels,
			'hierarchical'      => true,
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
		);
		register_taxonomy( 'career-category', array( 'careers' ), $args );

	}

	add_action( 'init', 'add_careers_custom_taxonomy', 0 );
}



/* Safesite specific custom post types & taxonomy */

if ( ! function_exists('add_industries_custom_post_type') ) {

	// Register Custom Post Type
	function add_industries_custom_post_type() {

		$labels = array(
			'name'                  => _x( 'industries', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'industry', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'industries', 'text_domain' ),
			'name_admin_bar'        => __( 'industries', 'text_domain' ),
			'archives'              => __( 'industries', 'text_domain' ),
			'attributes'            => __( 'industry Attributes', 'text_domain' ),
			'parent_item_colon'     => __( 'Parent industry:', 'text_domain' ),
			'all_items'             => __( 'All industries', 'text_domain' ),
			'add_new_item'          => __( 'Add New industry', 'text_domain' ),
			'add_new'               => __( 'Add New industry', 'text_domain' ),
			'new_item'              => __( 'New industry', 'text_domain' ),
			'edit_item'             => __( 'Edit industry', 'text_domain' ),
			'update_item'           => __( 'Update industry', 'text_domain' ),
			'view_item'             => __( 'View industry', 'text_domain' ),
			'view_items'            => __( 'View industries', 'text_domain' ),
			'search_items'          => __( 'Search industries', 'text_domain' ),
			'not_found'             => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
			'featured_image'        => __( 'Featured Image', 'text_domain' ),
			'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
			'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
			'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Uploaded to this industry', 'text_domain' ),
			'items_list'            => __( 'industries list', 'text_domain' ),
			'items_list_navigation' => __( 'industries list navigation', 'text_domain' ),
			'filter_items_list'     => __( 'Filter industries list', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'industries', 'text_domain' ),
			'description'           => __( 'Safesite Industries', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'thumbnail' ),
			'taxonomies'            => array( 'tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-building',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'industries', $args );

	}
	add_action( 'init', 'add_industries_custom_post_type', 0 );

}



/* Safesite specific custom post types & taxonomy */

if ( ! function_exists('add_partners_custom_post_type') ) {

	// Register Custom Post Type
	function add_partners_custom_post_type() {

		$labels = array(
			'name'                  => _x( 'partners', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'partner', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'partners', 'text_domain' ),
			'name_admin_bar'        => __( 'partners', 'text_domain' ),
			'archives'              => __( 'partners', 'text_domain' ),
			'attributes'            => __( 'partner Attributes', 'text_domain' ),
			'parent_item_colon'     => __( 'Parent partner:', 'text_domain' ),
			'all_items'             => __( 'All partners', 'text_domain' ),
			'add_new_item'          => __( 'Add New partner', 'text_domain' ),
			'add_new'               => __( 'Add New partner', 'text_domain' ),
			'new_item'              => __( 'New partner', 'text_domain' ),
			'edit_item'             => __( 'Edit partner', 'text_domain' ),
			'update_item'           => __( 'Update partner', 'text_domain' ),
			'view_item'             => __( 'View partner', 'text_domain' ),
			'view_items'            => __( 'View partners', 'text_domain' ),
			'search_items'          => __( 'Search partners', 'text_domain' ),
			'not_found'             => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
			'featured_image'        => __( 'Featured Image', 'text_domain' ),
			'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
			'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
			'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Uploaded to this partner', 'text_domain' ),
			'items_list'            => __( 'partners list', 'text_domain' ),
			'items_list_navigation' => __( 'partners list navigation', 'text_domain' ),
			'filter_items_list'     => __( 'Filter partners list', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'partner', 'text_domain' ),
			'description'           => __( 'Safesite partners', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'thumbnail' ),
			'taxonomies'            => array( 'tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-building',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'partners', $args );

	}
	add_action( 'init', 'add_partners_custom_post_type', 0 );

}




?>