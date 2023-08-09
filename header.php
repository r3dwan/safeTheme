<?php
defined( 'ABSPATH' ) || exit;
/* Custom root paths */
define('ROOTPATH',get_template_directory_uri());
define('ICONS',get_template_directory_uri().'/src/icons');
define('IMG',get_template_directory_uri().'/src/images');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> style="margin-top: 0 !important;">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>

    <?php
        $sticky_header_text_desktop = carbon_get_theme_option('sticky_header_text_desktop');
        $sticky_btn_title = carbon_get_theme_option('sticky_btn_title');
        $sticky_btn_url = carbon_get_theme_option('sticky_btn_url');

        $has_extra_body_top = ( ( !empty($sticky_header_text_desktop) ) && ( is_front_page() || (get_the_ID() == 50) ||  (get_the_ID() == 442) ) );
    ?>

</head>

<body <?php body_class(($has_extra_body_top)? 'extra_margin_top' : ''); ?>>
<?php do_action( 'wp_body_open' ); ?>

<div class="overlay"></div>

<header>

    <?php 
        $sticky_header_enabled = carbon_get_theme_option('show_sticky_header');
        $sticky_header_logo = carbon_get_theme_option('sticky_header_logo');
        $sticky_header_title = carbon_get_theme_option('sticky_header_title');
        $sticky_header_text = carbon_get_theme_option('sticky_header_text');

        $play_store_link = carbon_get_theme_option('play_store_link');
        $app_store_link = carbon_get_theme_option('app_store_link');


        if($sticky_header_enabled && is_front_page()):
    ?>

        <div class="sticky_mobile_header">

            <input type="hidden" id="playstore_link" value="<?php echo $play_store_link ?>">
            <input type="hidden" id="appstore_link" value="<?php echo $app_store_link ?>">

            <div class="close_header">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11 1L1 11M11 11L1 1L11 11Z" stroke="#858585" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>

            <div class="sticky_logo">
                <?php echo wp_get_attachment_image($sticky_header_logo, 'full') ?>
            </div>

            <div class="title_text">
                <div class="title"><?php echo $sticky_header_title ?></div>
                <div class="text"><?php echo $sticky_header_text ?></div>
            </div>

            <div class="app_download_btn">
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.609 2.013C8.10822 0.720203 10.0204 0.00620777 12 0C16.035 0 19.3845 3 19.749 6.8685C22.137 7.206 24 9.2055 24 11.6595C24 14.3535 21.753 16.5 19.0305 16.5H15C14.8011 16.5 14.6103 16.421 14.4697 16.2803C14.329 16.1397 14.25 15.9489 14.25 15.75C14.25 15.5511 14.329 15.3603 14.4697 15.2197C14.6103 15.079 14.8011 15 15 15H19.032C20.9685 15 22.5 13.482 22.5 11.6595C22.5 9.8355 20.97 8.3175 19.0305 8.3175H18.2805V7.5675C18.282 4.2375 15.492 1.5 12 1.5C10.3798 1.50647 8.81526 2.09165 7.5885 3.15C6.453 4.128 5.859 5.307 5.859 6.2325V6.9045L5.1915 6.978C3.096 7.2075 1.5 8.928 1.5 10.977C1.5 13.1775 3.345 15 5.6715 15H9C9.19891 15 9.38968 15.079 9.53033 15.2197C9.67098 15.3603 9.75 15.5511 9.75 15.75C9.75 15.9489 9.67098 16.1397 9.53033 16.2803C9.38968 16.421 9.19891 16.5 9 16.5H5.6715C2.562 16.5 0 14.049 0 10.977C0 8.3325 1.899 6.1425 4.413 5.5875C4.6275 4.293 5.46 3.003 6.609 2.013V2.013Z" fill="black"/>
                    <path d="M11.4699 23.781C11.5396 23.8508 11.6224 23.9063 11.7135 23.9441C11.8046 23.9819 11.9023 24.0013 12.0009 24.0013C12.0996 24.0013 12.1973 23.9819 12.2884 23.9441C12.3795 23.9063 12.4623 23.8508 12.5319 23.781L17.0319 19.281C17.1728 19.1402 17.2519 18.9492 17.2519 18.75C17.2519 18.5508 17.1728 18.3598 17.0319 18.219C16.8911 18.0782 16.7001 17.9991 16.5009 17.9991C16.3018 17.9991 16.1108 18.0782 15.9699 18.219L12.7509 21.4395V8.25C12.7509 8.05109 12.6719 7.86032 12.5313 7.71967C12.3906 7.57902 12.1999 7.5 12.0009 7.5C11.802 7.5 11.6113 7.57902 11.4706 7.71967C11.33 7.86032 11.2509 8.05109 11.2509 8.25V21.4395L8.03195 18.219C7.89112 18.0782 7.70011 17.9991 7.50095 17.9991C7.30178 17.9991 7.11078 18.0782 6.96995 18.219C6.82912 18.3598 6.75 18.5508 6.75 18.75C6.75 18.9492 6.82912 19.1402 6.96995 19.281L11.4699 23.781Z" fill="black"/>
                </svg>
            </div>

        </div>

    <?php
        endif;
    ?>




	<div class="header-desktop" id="header-desktop">
        <div class="container">

            <div class="left_items">

                <div class="logo-holder">
                    <a href="<?php echo home_url('/') ?>">
                        <?php echo wp_get_attachment_image(carbon_get_theme_option('header_logo'), 'full') ?>
                    </a>
                </div>

                <div class="desktop_menu">

                    <?php wp_nav_menu( array(
                        'theme_location' => 'primary-menu',
                    ) ); ?>

                </div>

            </div>


            <div class="right_items">
                <?php
                    $facebook_link = carbon_get_theme_option('facebook_link');
                    $instagram_link = carbon_get_theme_option('instagram_link');
                    $tiktok_link = carbon_get_theme_option('tiktok_link');
                    $tiktok_link = carbon_get_theme_option('tiktok_link');
                    $play_store_link = carbon_get_theme_option('play_store_link');
                    $app_store_link = carbon_get_theme_option('app_store_link');
                    $show_klarna = carbon_get_theme_option('show_klarna_logo');
                ?>

                <?php if(!empty($facebook_link)): ?>
                    <a href="<?php echo $facebook_link ?>">
                        <img src="<?php echo ICONS.'/facebook.svg' ?>" alt="Facebook icon">
                    </a>
                <?php endif ?>

                <?php if(!empty($instagram_link)): ?>
                    <a href="<?php echo $instagram_link ?>">
                        <img src="<?php echo ICONS.'/instagram.svg' ?>" alt="Instagram icon">
                    </a>
                <?php endif ?>

                <?php if(!empty($tiktok_link)): ?>
                    <a href="<?php echo $tiktok_link ?>">
                        <img src="<?php echo ICONS.'/tiktok.svg' ?>" alt="Tiktok icon">
                    </a>
                <?php endif ?>

                <?php if( $show_klarna == 'yes'): ?>
                    <img src="<?php echo IMG.'/klarna_logo.svg' ?>" alt="Klarna logo">
                <?php endif ?>

                <?php if(!empty($app_store_link)): ?>
                    <a href="<?php echo $app_store_link ?>">
                        <img src="<?php echo IMG.'/app_store_logo.svg' ?>" alt="App store logo">
                    </a>
                <?php endif ?>

                <?php if(!empty($play_store_link)): ?>
                    <a href="<?php echo $play_store_link ?>">
                        <img src="<?php echo IMG.'/play_store_logo.svg' ?>" alt="Play store logo">
                    </a>
                <?php endif ?>

            </div>

        </div>  
        


        <?php
            if($has_extra_body_top):
                if(get_the_ID() == 442){
                    $sticky_header_text_desktop = str_replace('Umeå','Gävle',$sticky_header_text_desktop);
                    $sticky_btn_url = 'https://safetrafikskola.se/testlektion-gavle/';
                }
        ?>
            <a href="<?php echo $sticky_btn_url ?>" class="sticky_header_text">
                <?php echo $sticky_header_text_desktop ?>

                <?php if(!empty($sticky_btn_url)): ?>
                    <div class="sticky_btn">
                        <?php echo $sticky_btn_title ?>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_5123_39234" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                <rect width="24" height="24" fill="#D9D9D9"/>
                            </mask>
                            <g mask="url(#mask0_5123_39234)">
                                <path d="M11.3 19.3C11.1167 19.1167 11.0208 18.8834 11.0125 18.6C11.0042 18.3167 11.0917 18.0834 11.275 17.9L16.175 13H5C4.71667 13 4.47917 12.9042 4.2875 12.7125C4.09583 12.5209 4 12.2834 4 12C4 11.7167 4.09583 11.4792 4.2875 11.2875C4.47917 11.0959 4.71667 11 5 11H16.175L11.275 6.10005C11.0917 5.91672 11.0042 5.68338 11.0125 5.40005C11.0208 5.11672 11.1167 4.88338 11.3 4.70005C11.4833 4.51672 11.7167 4.42505 12 4.42505C12.2833 4.42505 12.5167 4.51672 12.7 4.70005L19.3 11.3C19.4 11.3834 19.4708 11.4875 19.5125 11.6125C19.5542 11.7375 19.575 11.8667 19.575 12C19.575 12.1334 19.5542 12.2584 19.5125 12.375C19.4708 12.4917 19.4 12.6 19.3 12.7L12.7 19.3C12.5167 19.4834 12.2833 19.575 12 19.575C11.7167 19.575 11.4833 19.4834 11.3 19.3Z" fill="#FFC700"/>
                            </g>
                        </svg>
                    </div>
                <?php endif; ?>
            </a>
        <?php
            endif;
        ?>
        
	</div>


    <div class="header_mobile">


        <?php
            if($has_extra_body_top):
        ?>
            <a href="<?php echo $sticky_btn_url ?>" class="sticky_header_text">
                <?php echo $sticky_header_text_desktop ?>

                <?php if(!empty($sticky_btn_url)): ?>
                    <div class="sticky_btn" href="<?php echo $sticky_btn_url ?>">
                        <?php echo $sticky_btn_title ?>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_5123_39234" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                <rect width="24" height="24" fill="#D9D9D9"/>
                            </mask>
                            <g mask="url(#mask0_5123_39234)">
                                <path d="M11.3 19.3C11.1167 19.1167 11.0208 18.8834 11.0125 18.6C11.0042 18.3167 11.0917 18.0834 11.275 17.9L16.175 13H5C4.71667 13 4.47917 12.9042 4.2875 12.7125C4.09583 12.5209 4 12.2834 4 12C4 11.7167 4.09583 11.4792 4.2875 11.2875C4.47917 11.0959 4.71667 11 5 11H16.175L11.275 6.10005C11.0917 5.91672 11.0042 5.68338 11.0125 5.40005C11.0208 5.11672 11.1167 4.88338 11.3 4.70005C11.4833 4.51672 11.7167 4.42505 12 4.42505C12.2833 4.42505 12.5167 4.51672 12.7 4.70005L19.3 11.3C19.4 11.3834 19.4708 11.4875 19.5125 11.6125C19.5542 11.7375 19.575 11.8667 19.575 12C19.575 12.1334 19.5542 12.2584 19.5125 12.375C19.4708 12.4917 19.4 12.6 19.3 12.7L12.7 19.3C12.5167 19.4834 12.2833 19.575 12 19.575C11.7167 19.575 11.4833 19.4834 11.3 19.3Z" fill="#FFC700"/>
                            </g>
                        </svg>
                    </div>
                <?php endif; ?>
            </a>
        <?php
            endif;
        ?>


        <div class="container"> 

            <div class="left">
                <div class="logo-holder">
                    <a href="<?php echo home_url('/') ?>">
                        <?php echo wp_get_attachment_image(carbon_get_theme_option('header_logo'), 'full') ?>
                    </a>
                </div>
            </div>

            <div class="right">
                <div id="hamburger" class="ham active">
                    <svg width="40" height="27" viewBox="0 0 40 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.22222 27C1.59259 27 1.06519 26.784 0.64 26.352C0.213334 25.9215 0 25.3875 0 24.75C0 24.1125 0.213334 23.5785 0.64 23.148C1.06519 22.716 1.59259 22.5 2.22222 22.5H37.7778C38.4074 22.5 38.9348 22.716 39.36 23.148C39.7867 23.5785 40 24.1125 40 24.75C40 25.3875 39.7867 25.9215 39.36 26.352C38.9348 26.784 38.4074 27 37.7778 27H2.22222ZM2.22222 15.75C1.59259 15.75 1.06519 15.534 0.64 15.102C0.213334 14.6715 0 14.1375 0 13.5C0 12.8625 0.213334 12.3277 0.64 11.8957C1.06519 11.4652 1.59259 11.25 2.22222 11.25H37.7778C38.4074 11.25 38.9348 11.4652 39.36 11.8957C39.7867 12.3277 40 12.8625 40 13.5C40 14.1375 39.7867 14.6715 39.36 15.102C38.9348 15.534 38.4074 15.75 37.7778 15.75H2.22222ZM2.22222 4.5C1.59259 4.5 1.06519 4.28475 0.64 3.85425C0.213334 3.42225 0 2.8875 0 2.25C0 1.6125 0.213334 1.07775 0.64 0.64575C1.06519 0.21525 1.59259 0 2.22222 0H37.7778C38.4074 0 38.9348 0.21525 39.36 0.64575C39.7867 1.07775 40 1.6125 40 2.25C40 2.8875 39.7867 3.42225 39.36 3.85425C38.9348 4.28475 38.4074 4.5 37.7778 4.5H2.22222Z" fill="white"/>
                    </svg>
                </div>
                <div id="hamburger_close" class="ham">
                    <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M30 3L3 30M3 3L30 30" stroke="white" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>

        </div>
    </div>

    <div class="navigation_container">
        <div class="container"> 

            <?php wp_nav_menu( array(
                'theme_location' => 'mobile-menu',
            ) ); ?>
        
        </div>
    </div>

</header>

