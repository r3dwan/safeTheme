<?php

// Our custom post type function
// function create_posttype() {
 
//     // Add register functions below

//     $labels = array(
// 		'name'                => _x( 'Services', 'Services', 'cf_boiler_plate' ),
// 		'singular_name'       => _x( 'Service', 'Service', 'cf_boiler_plate' ),
// 		'menu_name'           => esc_html__( 'Services', 'cf_boiler_plate' ),
// 		'parent_item_colon'   => esc_html__( 'Parent Service', 'cf_boiler_plate' ),
// 		'all_items'           => esc_html__( 'All Services', 'cf_boiler_plate' ),
// 		'view_item'           => esc_html__( 'View Service', 'cf_boiler_plate' ),
// 		'add_new_item'        => esc_html__( 'Add new Service', 'cf_boiler_plate' ),
// 		'add_new'             => esc_html__( 'Add new', 'cf_boiler_plate' ),
// 		'edit_item'           => esc_html__( 'Edit Service', 'cf_boiler_plate' ),
// 		'update_item'         => esc_html__( 'Update Service', 'cf_boiler_plate' ),
// 		'search_items'        => esc_html__( 'Search Service', 'cf_boiler_plate' ),
// 		'not_found'           => esc_html__( 'Not Found', 'cf_boiler_plate' ),
// 		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'cf_boiler_plate' ),
// 	);	

//     register_post_type( 'services',
    
//     // CPT Options
//         array(
//             'labels' => $labels,
//             'public' => true,
//             'has_archive' => false,
//             'rewrite' => array('slug' => 'services'),
//             'show_in_rest' => true,	
//             'menu_icon' => 'dashicons-rss', // get dashicons from here https://developer.wordpress.org/resource/dashicons/#editor-paste-word
// 			'supports' => array('title', 'thumbnail', 'editor')
//         )
//     );




// 	$labels = array(
// 		'name'                => _x( 'Case Studies', 'Case Studies', 'cf_boiler_plate' ),
// 		'singular_name'       => _x( 'Case Studies', 'Case Studies', 'cf_boiler_plate' ),
// 		'menu_name'           => esc_html__( 'Case Studies', 'cf_boiler_plate' ),
// 		'parent_item_colon'   => esc_html__( 'Parent Case Study', 'cf_boiler_plate' ),
// 		'all_items'           => esc_html__( 'All Case Studies', 'cf_boiler_plate' ),
// 		'view_item'           => esc_html__( 'View Case Study', 'cf_boiler_plate' ),
// 		'add_new_item'        => esc_html__( 'Add new Case Study', 'cf_boiler_plate' ),
// 		'add_new'             => esc_html__( 'Add new', 'cf_boiler_plate' ),
// 		'edit_item'           => esc_html__( 'Edit Case Study', 'cf_boiler_plate' ),
// 		'update_item'         => esc_html__( 'Update Case Study', 'cf_boiler_plate' ),
// 		'search_items'        => esc_html__( 'Search Case Study', 'cf_boiler_plate' ),
// 		'not_found'           => esc_html__( 'Not Found', 'cf_boiler_plate' ),
// 		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'cf_boiler_plate' ),
// 	);	

//     register_post_type( 'case-studies',
    
//     // CPT Options
//         array(
//             'labels' => $labels,
//             'public' => true,
//             'has_archive' => false,
//             'rewrite' => array('slug' => 'case-studies'),
//             'show_in_rest' => true,	
//             'menu_icon' => 'dashicons-format-aside', // get dashicons from here https://developer.wordpress.org/resource/dashicons/#editor-paste-word
// 			'supports' => array('title', 'thumbnail', 'editor')
//         )
//     );

// }

// // Hooking up our function to theme setup
// add_action( 'init', 'create_posttype' );

?>