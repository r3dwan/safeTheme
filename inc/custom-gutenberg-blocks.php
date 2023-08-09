<?php
use Carbon_Fields\Container;
use Carbon_Fields\Block;
use Carbon_Fields\Field;

// Blocks style for better UI
add_action('admin_head', function(){
    echo "
    <style>
    .cf-block__fields {
        padding: 30px;
	}
	
    .block-editor-block-list__block:nth-child(even){
		background-color: #eff4fc;
	}
	.block-editor-block-list__block:nth-child(odd){
		background-color: rgba(16, 49, 107, 0.01);
	}
	
    </style>
    ";
});



add_action( 'carbon_fields_register_fields', 'custom_gutenberg_components' );
function custom_gutenberg_components() {


    //  Hero

	Block::make( __( 'Hero' ) )
    ->add_fields( array (
        Field::make( 'text', 'title', 'Title' ),
        Field::make( 'rich_text', 'desc', 'Description' ),
        Field::make( 'separator', 'separator_2', 'Ratings and followers' ),
        Field::make( 'text', 'app_store_rating', 'App store rating' ),
        Field::make( 'text', 'tiktok_followers', 'Tiktok followers' ),
        Field::make( 'separator', 'separator', 'Buttons' ),
        Field::make( 'text', 'secondary_title', 'Secondary title' ),
        Field::make( 'text', 'btn_1_text', 'Button text' )
            ->set_width('33'),
        Field::make( 'text', 'btn_2_text', 'Button 2 text' )
            ->set_width('33'),
        Field::make( 'text', 'btn_3_text', 'Calling button text' )
            ->set_width('33'),
        Field::make( 'text', 'btn_1_url', 'Url' )
            ->set_width('33'),
        Field::make( 'text', 'btn_2_url', 'Url' )
            ->set_width('33'),
        Field::make( 'text', 'btn_3_url', 'Phone number' )
            ->set_width('33'),
        Field::make( 'image', 'section_image', 'Section image' )
    ) )
    
    ->set_icon( 'star-filled' )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        setData($fields);
        get_template_part( 'components/hero' );            
    });
	
    //@end hero





    //  Hero (Home)

	Block::make( __( 'Hero (Home)' ) )
    ->add_fields( array (
        Field::make( 'text', 'title', 'Title' ),
        Field::make( 'rich_text', 'desc', 'Description' ),
        Field::make( 'separator', 'separator_2', 'Ratings and followers' ),
        Field::make( 'text', 'app_store_rating', 'App store rating' ),
        Field::make( 'text', 'tiktok_followers', 'Tiktok followers' ),
        Field::make( 'separator', 'separator', 'Buttons' ),
        Field::make( 'text', 'secondary_title', 'Secondary title' ),
        Field::make( 'text', 'btn_1_text', 'Button text' )
            ->set_width('33'),
        Field::make( 'text', 'btn_2_text', 'Button 2 text' )
            ->set_width('33'),
        Field::make( 'text', 'btn_3_text', 'Calling button text' )
            ->set_width('33'),
        Field::make( 'text', 'btn_1_url', 'Url' )
            ->set_width('33'),
        Field::make( 'text', 'btn_2_url', 'Url' )
            ->set_width('33'),
        Field::make( 'text', 'btn_3_url', 'Phone number' )
            ->set_width('33'),
        Field::make( 'image', 'section_image', 'Section image' )
    ) )
    
    ->set_icon( 'star-filled' )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        setData($fields);
        get_template_part( 'components/hero-home' );            
    });
	
    //@end hero-home




    //  Hero

	Block::make( __( 'Hero with download button' ) )
    ->add_fields( array (
        Field::make( 'text', 'title', 'Title' ),
        Field::make( 'rich_text', 'desc', 'Description' ),
        Field::make( 'separator', 'separator', 'Buttons' ),
        Field::make( 'text', 'secondary_title', 'Secondary title' ),
        Field::make( 'text', 'btn_1_text', 'Downloadable button text' )
            ->set_width('33'),
        Field::make( 'text', 'btn_2_text', 'Button 2 text' )
            ->set_width('33'),
        Field::make( 'text', 'btn_3_text', 'Calling button text' )
            ->set_width('33'),
        Field::make( 'text', 'btn_1_url', 'Downloadable file link' )
            ->set_width('33'),
        Field::make( 'text', 'btn_2_url', 'Url' )
            ->set_width('33'),
        Field::make( 'text', 'btn_3_url', 'Phone number' )
            ->set_width('33'),
        Field::make( 'image', 'section_image', 'Section image' )
    ) )
    
    ->set_icon( 'star-filled' )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        setData($fields);
        get_template_part( 'components/hero-download' );            
    });
	
    //@end hero



    //  Hero Umea

	Block::make( __( 'Hero (Umea)' ) )
    ->add_fields( array (
        Field::make( 'text', 'title', 'Title' ),
        Field::make( 'text', 'location', 'Location' ),
        Field::make( 'rich_text', 'desc', 'Description' ),
        Field::make( 'separator', 'separator', 'Buttons' ),
        Field::make( 'text', 'btn_1_text', 'Button text' )
            ->set_width('33'),
        Field::make( 'text', 'btn_2_text', 'Button 2 text' )
            ->set_width('33'),
        Field::make( 'text', 'btn_3_text', 'Calling button text' )
            ->set_width('33'),
        Field::make( 'text', 'btn_1_url', 'Url' )
            ->set_width('33'),
        Field::make( 'text', 'btn_2_url', 'Url' )
            ->set_width('33'),
        Field::make( 'text', 'btn_3_url', 'Phone number' )
            ->set_width('33'),
        Field::make( 'image', 'section_image', 'Section image' )
    ) )
    
    ->set_icon( 'star-filled' )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        setData($fields);
        get_template_part( 'components/hero-umea' );            
    });
	
    //@end hero
 


    // Fifty fifty

	Block::make( __( 'Fifty fifty' ) )
    ->add_fields( array(        
        Field::make( 'checkbox', 'reverse_column', __( 'Reverse column' ) )
            ->set_option_value( 'yes' ),
        Field::make( 'text', 'title', 'Title' ),
        Field::make( 'rich_text', 'desc', 'Description' ),

        Field::make( 'text', 'btn_1_text', 'Button text' )
            ->set_width('50'),
        Field::make( 'text', 'btn_2_text', 'Button 2 text' )
            ->set_width('50'),
        Field::make( 'text', 'btn_1_url', 'Url' )
            ->set_width('50'),
        Field::make( 'text', 'btn_2_url', 'Url' )
            ->set_width('50'),

        Field::make( 'checkbox', 'show_playstore', __( 'Show playstore' ) )
            ->set_option_value( 'yes' ),
        Field::make( 'checkbox', 'show_appstore', __( 'Show appstore' ) )
            ->set_option_value( 'yes' ),

        Field::make( 'image', 'image', 'Section image' ),
    ) )
   
    ->set_icon( 'star-filled' )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        setData($fields);
        get_template_part( 'components/fifty-fifty' );            
    });

    //@end Fifty fifty





    // Product dropdown

	Block::make( __( 'Product dropdown' ) )
    ->add_fields( array(        
        Field::make( 'text', 'title', 'Title' ),
        Field::make( 'rich_text', 'desc', 'Description' ),
        Field::make( 'separator', 'separator', 'Dropdown items come from "Dashboard -> Products"' ),
    ) )
    ->set_icon( 'star-filled' )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        setData($fields);
        get_template_part( 'components/product_dropdown' );            
    });

    //@end Product dropdown



    // Product cards

	Block::make( __( 'Product cards' ) )
    ->add_fields( array(        
        Field::make( 'complex', 'cards', 'Cards' )
            ->set_layout('tabbed-horizontal')
            ->add_fields( array (
                Field::make( 'text', 'title', 'Title' ),
                Field::make( 'complex', 'points', 'Points' )
                    ->set_layout('tabbed-vertical')
                    ->add_fields( array (
                        Field::make( 'image', 'icon', 'Icon' ),
                        Field::make( 'rich_text', 'text', 'Text' ),
                    ) ),
                Field::make( 'text', 'btn_1_text', 'Button text' )
                    ->set_width('50'),
                Field::make( 'text', 'btn_2_text', 'Button 2 text' )
                    ->set_width('50'),
                Field::make( 'text', 'btn_1_url', 'Url' )
                    ->set_width('50'),
                Field::make( 'text', 'btn_2_url', 'Url' )
                    ->set_width('50'),
            ) )
    ) )
    ->set_icon( 'star-filled' )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        setData($fields);
        get_template_part( 'components/product-cards' );            
    });

    //@end Product dropdown



    // Generic content

	Block::make( __( 'Generic content' ) )
    ->add_fields( array(        
        Field::make( 'checkbox', 'secondary_bg', __( 'Secondary background' ) )
            ->set_option_value( 'yes' ),
        Field::make( 'text', 'title', 'Title' ),
        Field::make( 'rich_text', 'desc', 'Content' ),
    ) )
    ->set_icon( 'star-filled' )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        setData($fields);
        get_template_part( 'components/generic_content' );            
    });

    //@end Generic content





    // Custom buttons

	Block::make( __( 'Custom buttons' ) )
    ->add_fields( array(        
        Field::make( 'text', 'btn_1_text', 'Button text' )
            ->set_width('50'),
        Field::make( 'text', 'btn_2_text', 'Button 2 text' )
            ->set_width('50'),
        Field::make( 'text', 'btn_1_url', 'Url' )
            ->set_width('50'),
        Field::make( 'text', 'btn_2_url', 'Url' )
            ->set_width('50'),

        Field::make( 'checkbox', 'show_playstore', __( 'Show playstore' ) )
            ->set_option_value( 'yes' ),
        Field::make( 'checkbox', 'show_appstore', __( 'Show appstore' ) )
            ->set_option_value( 'yes' ),
    ) )
    ->set_icon( 'star-filled' )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        setData($fields);
        get_template_part( 'components/custom_btns' );            
    });

    //@end custom buttons





    // Custom buttons with dropdown

	Block::make( __( 'Custom buttons with dropdown' ) )
    ->add_fields( array(        
        Field::make( 'text', 'btn_1_text', 'Button 2 text' )
            ->set_width('50'),
        Field::make( 'text', 'btn_1_url', 'Button 2 url' )
            ->set_width('50')
    ) )
    ->set_icon( 'star-filled' )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        setData($fields);
        get_template_part( 'components/custom_btns_with_dropdown' );            
    });

    //@end Custom buttons with dropdown





    // Custom download buttons

	Block::make( __( 'Custom download buttons' ) )
    ->add_fields( array(        
        Field::make( 'text', 'btn_1_text', 'Button text' )
            ->set_width('50'),
        Field::make( 'text', 'btn_2_text', 'Button 2 text' )
            ->set_width('50'),
        Field::make( 'text', 'btn_1_url', 'Url' )
            ->set_width('50'),
        Field::make( 'text', 'btn_2_url', 'Url' )
            ->set_width('50')
    ) )
    ->set_icon( 'star-filled' )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        setData($fields);
        get_template_part( 'components/custom_download_btns' );            
    });

    //@end custom download buttons





    // Generic points

	Block::make( __( 'Generic points' ) )
    ->add_fields( array(        
        Field::make( 'text', 'title', 'Title' ),
        Field::make( 'complex', 'points', 'Points' )
            ->set_layout('tabbed-vertical')
            ->add_fields( array (
                Field::make( 'image', 'icon', 'Icon' ),
                Field::make( 'rich_text', 'text', 'Text' ),
            ) ),
    ) )
    ->set_icon( 'star-filled' )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        setData($fields);
        get_template_part( 'components/generic_points' );            
    });

    //@end Generic points





    // Custom cliento widget

	Block::make( __( 'Custom cliento widget' ) )
    ->add_fields( array(        
        Field::make( 'textarea', 'script', 'Script' ),
    ) )
    ->set_icon( 'star-filled' )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        setData($fields);
        get_template_part( 'components/custom_cliento_widget' );            
    });

    //@end Custom cliento widget






    // Contact

	Block::make( __( 'Contact' ) )
    ->add_fields( array(        
        Field::make( 'text', 'shortcode', 'Form shortcode' ),
    ) )
    ->set_icon( 'star-filled' )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        setData($fields);
        get_template_part( 'components/custom_contact_form' );            
    });

    //@end Contact





    //  Hero with product card

	Block::make( __( 'Hero with product card' ) )
    ->add_fields( array (
        Field::make( 'text', 'title', 'Title' ),
        Field::make( 'rich_text', 'desc', 'Description' ),

        Field::make( 'separator', 'separator_card', 'Card info' ),

        Field::make( 'text', 'card_title', 'Card Title' ),
        Field::make( 'complex', 'points', 'Points' )
            ->set_layout('tabbed-vertical')
            ->add_fields( array (
                Field::make( 'image', 'icon', 'Icon' ),
                Field::make( 'rich_text', 'text', 'Text' ),
            ) ),
        // Field::make( 'separator', 'separator2', 'Card points are dynamic' ),

        Field::make( 'separator', 'separator', 'Buttons' ),
        Field::make( 'text', 'btn_1_text', 'Button text' )
            ->set_width('50'),
        Field::make( 'text', 'btn_2_text', 'Button 2 text' )
            ->set_width('50'),
        Field::make( 'text', 'btn_1_url', 'Url' )
            ->set_width('50'),
        Field::make( 'text', 'btn_2_url', 'Url' )
            ->set_width('50'),
    ) )
    
    ->set_icon( 'star-filled' )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        setData($fields);
        get_template_part( 'components/hero-card' );            
    });
	
    //@end Hero with product card






    // Hero dropdown

	Block::make( __( 'Hero dropdown' ) )
    ->add_fields( array(        
        Field::make( 'text', 'title', 'Title' ),
        Field::make( 'rich_text', 'desc', 'Description' ),
        Field::make( 'separator', 'separator', 'Dropdown items come from "Dashboard -> Products"' ),
    ) )
    ->set_icon( 'star-filled' )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        setData($fields);
        get_template_part( 'components/hero-dropdown' );            
    });

    //@end Hero dropdown





    
    // Hero dropdown

	Block::make( __( 'Hero dropdown and button' ) )
    ->add_fields( array(        
        Field::make( 'text', 'title', 'Title' ),
        Field::make( 'rich_text', 'desc', 'Description' ),
        Field::make( 'separator', 'separator', 'Dropdown items come from "Dashboard -> Products"' ),

        Field::make( 'text', 'btn_1_text', 'Button 2 text' )
            ->set_width('50'),
        Field::make( 'text', 'btn_1_url', 'Button 2 text' )
            ->set_width('50'),
            
    ) )
    ->set_icon( 'star-filled' )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        setData($fields);
        get_template_part( 'components/hero-dropdown-btn' );            
    });

    //@end Hero dropdown and button



    


    // Page title

	Block::make( __( 'Page title generic' ) )
    ->add_fields( array(        
        Field::make( 'text', 'title', 'Title' )
    ) )
    ->set_icon( 'star-filled' )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        setData($fields);
        get_template_part( 'components/page-title' );            
    });

    //@end Page title




    // Steps

	Block::make( __( 'Steps' ) )
    ->add_fields( array(        
        Field::make( 'complex', 'steps', 'Steps' )
            ->set_layout('tabbed-vertical')
            ->add_fields( array (
                Field::make( 'text', 'title', 'Title' ),
                Field::make( 'rich_text', 'desc', 'Description' ),
                Field::make( 'image', 'image', 'Image' ),
            ) )
    ) )
    ->set_icon( 'star-filled' )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        setData($fields);
        get_template_part( 'components/steps' );            
    });

    //@end Steps




    // Fancy points

	Block::make( __( 'Fancy points' ) )
        ->add_tab( __( 'Left column' ), array(
            Field::make( 'text', 'left_title', __( 'Left column title' ) ),
            Field::make( 'complex', 'items', __( 'Points' ) )
                ->set_layout('tabbed-vertical')
                ->add_fields( array (
                    Field::make( 'image', 'icon', __( 'Icon' ) ),
                    Field::make( 'rich_text', 'text', __( 'Text' ) ),
                ) )
        ) )
        ->add_tab( __( 'Right column' ), array(
            Field::make( 'text', 'right_title', __( 'Right column title' ) ),
            Field::make( 'rich_text', 'right_desc', __( 'Description' ) ),
        ) )
    ->set_icon( 'star-filled' )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        setData($fields);
        get_template_part( 'components/fancy-points' );            
    });

    //@end Fancy points




// Info box

Block::make( __( 'Info box' ) )
->add_fields( array(        
    Field::make( 'complex', 'items', 'Items' )
        ->set_layout('tabbed-horizontal')
        ->add_fields( array (
            Field::make( 'color', 'bg_color', 'Background color' )
                ->set_palette( array( '#5A4D79', '#463570', '#341976', '#5A4D79' ) ),
            Field::make( 'text', 'title', 'Title' ),
            Field::make( 'textarea', 'desc', 'Description' ),
        ) )
) )
->set_icon( 'star-filled' )
->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
    setData($fields);
    get_template_part( 'components/info-box' );            
});

//@end Info box




// Fifty fifty points

Block::make( __( 'Fifty fifty points' ) )
->add_tab( __('General'), array(
    Field::make( 'text', 'title', __( 'Title' ) ),
) )
->add_tab( __( 'Left column' ), array(
    Field::make( 'text', 'left_title', __( 'Left column title' ) ),
    Field::make( 'rich_text', 'left_desc', __( 'Description' ) )
) )
->add_tab( __( 'Right column' ), array(
    Field::make( 'text', 'right_title', __( 'Right column title' ) ),
    Field::make( 'rich_text', 'right_desc', __( 'Description' ) )
) )
->set_icon( 'star-filled' )
->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
setData($fields);
get_template_part( 'components/fifty-fifty-points' );            
});

//@end fifty fifty points





// Three column content

Block::make( __( 'Three column content' ) )
->add_tab( __('Left column'), array(
    Field::make( 'image', 'icon_1', __( 'Icon' ) ),
    Field::make( 'text', 'title_1', __( 'Title' ) ),
    Field::make( 'textarea', 'desc_1', __( 'Description' ) ),
) )
->add_tab( __( 'Middle column' ), array(
    Field::make( 'image', 'icon_2', __( 'Icon' ) ),
    Field::make( 'text', 'title_2', __( 'Title' ) ),
    Field::make( 'textarea', 'desc_2', __( 'Description' ) ),
) )
->add_tab( __( 'Right column' ), array(
    Field::make( 'image', 'icon_3', __( 'Icon' ) ),
    Field::make( 'text', 'title_3', __( 'Title' ) ),
    Field::make( 'textarea', 'desc_3', __( 'Description' ) ),
) )
->set_icon( 'star-filled' )
->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
setData($fields);
get_template_part( 'components/three-col-content' );            
});

//@end three column content





// Three column image

Block::make( __( 'Three column image' ) )
->add_tab( __('Left column'), array(
    Field::make( 'image', 'image_1', __( 'Image' ) ),
) )
->add_tab( __( 'Middle column' ), array(
    Field::make( 'image', 'image_2', __( 'Image' ) ),
) )
->add_tab( __( 'Right column' ), array(
    Field::make( 'image', 'image_3', __( 'Image' ) ),
) )
->set_icon( 'star-filled' )
->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
setData($fields);
get_template_part( 'components/three-col-image' );            
});

//@end three column image




// Reviews

Block::make( __( 'Custom reviews' ) )
->add_fields( array(        
    Field::make( 'complex', 'items', 'Reviews' )
        ->set_layout('tabbed-horizontal')
        ->add_fields( array (
            Field::make( 'text', 'star_count', 'Stars' )
                ->set_help_text('Type: 4.5 or 5'),
            Field::make( 'text', 'name', 'Name' ),
            Field::make( 'textarea', 'message', 'Message' ),
        ) )
) )
->set_icon( 'star-filled' )
->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
setData($fields);
get_template_part( 'components/reviews' );            
});

//@end Reviews





// Safe cards

Block::make( __( 'Safe cards' ) )
->add_fields( array(        
    Field::make( 'complex', 'items', 'Reviews' )
        ->set_layout('tabbed-horizontal')
        ->add_fields( array (
            Field::make( 'text', 'small_title', 'Small title' ),
            Field::make( 'textarea', 'subtitle', 'Subtitle' ),
            Field::make( 'text', 'title', 'Title' ),
            Field::make( 'complex', 'points', 'Points' )
                ->set_layout('tabbed-vertical')
                ->add_fields( array(
                    Field::make( 'text', 'point', 'Point' )
                ) ),
            Field::make( 'text', 'btn_1_text', 'Button text' )
                ->set_width('50'),
            Field::make( 'text', 'btn_2_text', 'Button 2 text' )
                ->set_width('50'),
            Field::make( 'text', 'btn_1_url', 'Url' )
                ->set_width('50'),
            Field::make( 'text', 'btn_2_url', 'Url' )
                ->set_width('50'),
    
            Field::make( 'checkbox', 'show_playstore', __( 'Show playstore' ) )
                ->set_option_value( 'yes' ),
            Field::make( 'checkbox', 'show_appstore', __( 'Show appstore' ) )
                ->set_option_value( 'yes' ),
        ) )
) )
->set_icon( 'star-filled' )
->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
setData($fields);
get_template_part( 'components/safe-cards' );            
});

//@end Safe cards




// Hero Testlektion

Block::make( __( 'Hero Testlektion' ) )
->add_fields( array(        
    Field::make( 'text', 'title', 'Title' ),
    Field::make( 'textarea', 'desc_1', 'Description' ),
    Field::make( 'text', 'shortcode', 'Form shortcode' ),
    Field::make( 'textarea', 'desc_2', 'Description' )
) )
->set_icon( 'star-filled' )
->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
setData($fields);
get_template_part( 'components/hero-testlektion' );            
});

//@end Hero Testlektion



// Hero Teoriapp

Block::make( __( 'Hero Teoriapp' ) )
->add_fields( array(        
    Field::make( 'text', 'title', 'Title' ),
    Field::make( 'textarea', 'desc_1', 'Description' ),
    Field::make( 'complex', 'points', 'Points' )
        ->set_layout('tabbed-horizontal')
        ->add_fields( array (
            Field::make( 'text', 'point', 'Point' )
        ) )
) )
->set_icon( 'star-filled' )
->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
setData($fields);
get_template_part( 'components/hero-teoriapp' );            
});

//@end Hero Teoriapp




// Hero Image

Block::make( __( 'Hero image' ) )
->add_fields( array(        
    Field::make( 'image', 'image', 'Image' )
) )
->set_icon( 'star-filled' )
->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
setData($fields);
get_template_part( 'components/hero-image' );            
});

//@end Hero Image




// Call to action

Block::make( __( 'Call to action' ) )
->add_fields( array(        
    Field::make( 'text', 'title', 'Title' ),
    Field::make( 'textarea', 'description', 'Description' ),
    Field::make( 'text', 'btn_title', 'Button title' ),
    Field::make( 'text', 'btn_url', 'Button url' )
) )
->set_icon( 'star-filled' )
->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
setData($fields);
get_template_part( 'components/call_to_action' );            
});

//@end Call to action



// Call to action 2

Block::make( __( 'Call to action 2' ) )
->add_fields( array(        
    Field::make( 'text', 'title', 'Title' ),
    Field::make( 'textarea', 'description', 'Description' ),
    Field::make( 'text', 'btn_title', 'Button title' ),
    Field::make( 'text', 'btn_url', 'Button url' ),
    Field::make( 'image', 'image', 'Image' ),
) )
->set_icon( 'star-filled' )
->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
setData($fields);
get_template_part( 'components/call_to_action_2' );            
});

//@end Call to action 2




// App store section

Block::make( __( 'App store section' ) )
->add_fields( array(        
    Field::make( 'text', 'title', 'Title' ),
    Field::make( 'textarea', 'description', 'Description' ),
    Field::make( 'checkbox', 'show_playstore', __( 'Show playstore' ) )
        ->set_option_value( 'yes' ),
    Field::make( 'checkbox', 'show_appstore', __( 'Show appstore' ) )
        ->set_option_value( 'yes' ),
) )
->set_icon( 'star-filled' )
->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
setData($fields);
get_template_part( 'components/app_store_section' );            
});

//@end App store section



}
?>