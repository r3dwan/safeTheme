<?php

// add_action( 'init', 'project_cat_init' );

function project_cat_init() {

    $labels = array( 
        'name' => _x( 'Project categories', 'project_categories' ),
        'singular_name' => _x( 'Project category', 'project_categories' ),
        'search_items' => _x( 'Project categories', 'project_categories' ),
        'popular_items' => _x( 'Popular project categories', 'project_categories' ),
        'all_items' => _x( 'All project categories', 'project_categories' ),
        'parent_item' => _x( 'Parent project category', 'project_categories' ),
        'parent_item_colon' => _x( 'Parent project category:', 'project_categories' ),
        'edit_item' => _x( 'Edit project category', 'project_categories' ),
        'update_item' => _x( 'Update project category', 'project_categories' ),
        'add_new_item' => _x( 'Add new project category', 'project_categories' ),
        'new_item_name' => _x( 'New project category', 'project_categories' ),
        'separate_items_with_commas' => _x( 'Separate project categories with commas', 'project_categories' ),
        'add_or_remove_items' => _x( 'Add or remove project category', 'project_categories' ),
        'choose_from_most_used' => _x( 'Choose from the most used project category', 'project_categories' ),
        'menu_name' => _x( 'Project categories', 'project_categories' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => true,
        'show_admin_column' => false,
        'hierarchical' => true,
        'show_in_rest' => true,
        'rewrite' => true,
        'has_archive' => false,
        'query_var' => true
    );

    register_taxonomy( 'project_categories', array('case-studies'), $args );
}
?>