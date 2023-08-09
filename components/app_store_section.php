<?php
    $data = getData();
?>

<div class="app_store_section">
    <div class="container">

        <h2><?php echo $data['title'] ?></h2>
        <div class="desc">
            <?php echo $data['description'] ?>
        </div>
        
        <div class="app_buttons">
            <?php if($data['show_appstore'] == 'yes'): ?>
                <a href="<?php echo carbon_get_theme_option('app_store_link') ?>">
                    <img src="<?php echo IMG.'/app_store_logo.svg' ?>" alt="App store logo">
                </a>
            <?php endif ?>

            <?php if($data['show_playstore'] == 'yes'): ?>
                <a href="<?php echo carbon_get_theme_option('play_store_link') ?>">
                    <img src="<?php echo IMG.'/play_store_logo.svg' ?>" alt="App store logo">
                </a>
            <?php endif ?>
        </div>

    </div>
</div>