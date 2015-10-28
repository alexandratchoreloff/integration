<?php  
add_action('init', 'create_post_type');

// function custom_post_type() {

// 	$labels = array(
// 		'name'                => _x( 'Post Types', 'Post Type General Name', 'text_domain' ),
// 		'singular_name'       => _x( 'Post Type', 'Post Type Singular Name', 'text_domain' ),
// 		'menu_name'           => __( 'Post Type', 'text_domain' ),
// 		'name_admin_bar'      => __( 'Post Type', 'text_domain' ),
// 		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
// 		'all_items'           => __( 'All Items', 'text_domain' ),
// 		'add_new_item'        => __( 'Add New Item', 'text_domain' ),
// 		'add_new'             => __( 'Add New', 'text_domain' ),
// 		'new_item'            => __( 'New Item', 'text_domain' ),
// 		'edit_item'           => __( 'Edit Item', 'text_domain' ),
// 		'update_item'         => __( 'Update Item', 'text_domain' ),
// 		'view_item'           => __( 'View Item', 'text_domain' ),
// 		'search_items'        => __( 'Search Item', 'text_domain' ),
// 		'not_found'           => __( 'Not found', 'text_domain' ),
// 		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
// 	);
// 	$args = array(
// 		'label'               => __( 'Post Type', 'text_domain' ),
// 		'description'         => __( 'Post Type Description', 'text_domain' ),
// 		'labels'              => $labels,
// 		'supports'            => array( ),
// 		'taxonomies'          => array( 'category', 'post_tag' ),
// 		'hierarchical'        => false,
// 		'public'              => true,
// 		'show_ui'             => true,
// 		'show_in_menu'        => true,
// 		'menu_position'       => 5,
// 		'show_in_admin_bar'   => true,
// 		'show_in_nav_menus'   => true,
// 		'can_export'          => true,
// 		'has_archive'         => true,		
// 		'exclude_from_search' => false,
// 		'publicly_queryable'  => true,
// 		'capability_type'     => 'page',
// 	);
// 	register_post_type( 'post_type', $args );

// }
add_action( 'init', 'custom_post_type', 0 );

function create_post_type() {


	$labels = array(
		'name'                => _x( 'Situation', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Situation', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Post Type', 'text_domain' ),
		'name_admin_bar'      => __( 'Post Type', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'Tout les items', 'text_domain' ),
		'add_new_item'        => __( 'Add New Item', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'new_item'            => __( 'New Item', 'text_domain' ),
		'edit_item'           => __( 'Edit Item', 'text_domain' ),
		'update_item'         => __( 'Update Item', 'text_domain' ),
		'view_item'           => __( 'View Item', 'text_domain' ),
		'search_items'        => __( 'Search Item', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Situation', 'text_domain' ),
		'description'         => __( 'Post Type Description', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'situation', $args );

    /* Films */
    // register_post_type('ingredient',
    //     array(
    //         'labels' => array(
    //             'name' => __('ingredient'),
    //             'singular_name' => __('ingredient')
    //         ),
    //     'public' => true,
    //     'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
    //     'has_archive' => true
    //     )
    // );
}

?>