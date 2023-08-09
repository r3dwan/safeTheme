<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'custom_theme_options' );
function custom_theme_options() {
    
    $basic_options_container = Container::make( 'theme_options', __( 'Theme Options' ) )
    ->set_icon('dashicons-admin-tools')
    ->set_page_menu_position( 3 )
    ->add_tab( __( 'General' ), array(
        Field::make( 'header_scripts', 'crb_header_script', __( 'Header Script' ) ),
        Field::make( 'footer_scripts', 'crb_footer_script', __( 'Footer Script' ) ),
    ) )
    ->add_tab( __( 'Header' ), array(
        Field::make( 'image', 'header_logo', __( 'Logo' ) ),
        Field::make( 'checkbox', 'show_klarna_logo', 'Show Klarna logo' )
            ->set_option_value( 'yes' )
    ) )
    ->add_tab( __( 'Sticky header (Generic)' ), array(
        Field::make( 'text', 'sticky_header_text_desktop', 'Text' ),
        Field::make( 'text', 'sticky_btn_title', 'Button title' ),
        Field::make( 'text', 'sticky_btn_url', 'Button url' ),
    ) )
    ->add_tab( __( 'Sticky mobile header' ), array(
        Field::make( 'checkbox', 'show_sticky_header', 'Show sticky header' )
            ->set_option_value( 'yes' ),
        Field::make( 'image', 'sticky_header_logo', __( 'Logo' ) ),
        Field::make( 'text', 'sticky_header_title', __( 'Title' ) ),
        Field::make( 'text', 'sticky_header_text', __( 'Text' ) )
    ) )
    ->add_tab( __( 'Social icons' ), array(        
        Field::make( 'text', 'facebook_link', __( 'Facebook link' ) ),
        Field::make( 'text', 'instagram_link', __( 'Instagram link' ) ),
        Field::make( 'text', 'tiktok_link', __( 'Tiktok link' ) ),
        Field::make( 'text', 'app_store_link', __( 'Apple store download link' ) ),
        Field::make( 'text', 'play_store_link', __( 'Play store download link' ) ),
    ) )

    ->add_tab( __( 'Footer' ), array(
        Field::make( 'image', 'footer_logo', __( 'Footer logo' ) ),
        Field::make( 'rich_text', 'footer_desc', __( 'Text' ) ),

        Field::make( 'complex', 'footer_menus', __( 'Footer menus' ) )
            ->set_layout('tabbed-horizontal')
            ->add_fields( array (
                Field::make( 'text', 'menu_title', __( 'Menu title' ) ),
                Field::make( 'complex', 'menu_items', __( 'Menu items' ) )
                    ->set_layout('tabbed-vertical')
                    ->add_fields( array (
                        Field::make( 'text', 'menu_name', __( 'Menu name' ) ),
                        Field::make( 'text', 'menu_url', __( 'Menu url' ) )
                    ) )

            ) )
        
    ) );

}


?>