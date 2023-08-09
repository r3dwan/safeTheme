<?php
    $footer_logo = carbon_get_theme_option('footer_logo');
    $footer_desc = carbon_get_theme_option('footer_desc');
    $footer_menus = carbon_get_theme_option('footer_menus');
?>

    <footer class="footer" id="footer">        
        <div class="container">

            <div class="first_col">

                <div class="footer_logo">
                    <a href="<?php echo home_url('/') ?>">
                        <?php echo wp_get_attachment_image($footer_logo, 'full') ?>
                    </a>
                </div>
                <div class="footer_desc">
                    <?php echo wpautop($footer_desc) ?>
                </div>

            </div>

            <div class="menu_cols">

                <?php foreach($footer_menus as $menu): ?>

                    <div class="col">
                        <div class="title"><?php echo $menu['menu_title'] ?></div>
                        <div class="menu_holder">
                            <?php foreach($menu['menu_items'] as $item): ?>
                                <a href="<?php echo $item['menu_url'] ?>"><?php echo $item['menu_name'] ?></a>
                            <?php endforeach ?>
                        </div>
                    </div>

                <?php endforeach ?>

            </div>

            <div class="apps_col">
                <?php 
                    $app_store_link = carbon_get_theme_option('app_store_link');
                    $play_store_link = carbon_get_theme_option('play_store_link');
                ?>
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
    </footer>

    <div class="footer_bottom_image">
        <img src="<?php echo IMG.'/footer_bottom.jpg' ?>" alt="Footer bottom image">
    </div>

</body>


<?php wp_footer(); ?>