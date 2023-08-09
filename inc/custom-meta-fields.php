<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'custom_meta_fields' );
function custom_meta_fields() {
    // Show menu selection option in every page

    // $nav_menus = get_terms( 'nav_menu' );
    // $menu_names = [];

    // foreach($nav_menus as $item){
    //     $menu_names += [ $item->term_id => $item->name ];
    // }

    // Container::make( 'post_meta', 'Banner inner page' )
    //     ->where( 'post_type', '=', 'post' )
    //     ->set_context('side')
    //     ->set_priority('high')
    //     ->add_fields( array(
    //         Field::make( 'image', 'banner_image', 'Image' ),
    //         Field::make( 'text', 'banner_title', 'Title' ),
    //         Field::make( 'textarea', 'banner_desc', 'Description' ),
    //     ));


    // Container::make( 'post_meta', 'Banner inner page' )
    //     ->where( 'post_type', '=', 'services' )
    //     ->set_context('side')
    //     ->set_priority('high')
    //     ->add_fields( array(
    //         Field::make( 'image', 'banner_image', 'Image' ),
    //         Field::make( 'text', 'banner_title', 'Title' ),
    //         Field::make( 'textarea', 'banner_desc', 'Description' ),
    //     ));

    // Container::make( 'post_meta', 'Banner inner page' )
    //     ->where( 'post_type', '=', 'case-studies' )
    //     ->set_context('side')
    //     ->set_priority('high')
    //     ->add_fields( array(
    //         Field::make( 'image', 'banner_image', 'Image' ),
    //         Field::make( 'text', 'banner_title', 'Title' ),
    //         Field::make( 'textarea', 'banner_desc', 'Description' ),
    //     ));

    // Container::make( 'post_meta', 'At a glance' )
    //     ->where( 'post_type', '=', 'case-studies' )
    //     ->set_context('advanced')
    //     ->set_priority('high')
    //     ->add_fields( array(
    //         Field::make( 'text', 'glance_title', 'Title' ),
    //         Field::make( 'rich_text', 'glance_desc', 'Description' ),
    //         Field::make( 'complex', 'areas_covered', 'Areas covered' )
    //             ->set_layout('tabbed-horizontal')
    //             ->add_fields(array(
    //                 Field::make( 'text', 'area', 'Title' ),
    //             )),
    //         Field::make( 'complex', 'project_leads', 'Project leads' )
    //             ->set_layout('tabbed-horizontal')
    //             ->add_fields(array(
    //                 Field::make( 'text', 'lead_name', 'Name' ),
    //             )),
    //     ));

}

?>