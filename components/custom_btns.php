<?php
    $data = getData();
?>
<div class="custom_buttons">
    <div class="container">

        <?php if(!empty($data['btn_1_url'])): ?>
            <a href="<?php echo $data['btn_1_url'] ?>" class="btn primary-btn"><?php echo $data['btn_1_text'] ?></a>
        <?php endif ?>

        <?php if(!empty($data['btn_2_url'])): ?>
            <a href="<?php echo $data['btn_2_url'] ?>" class="btn ghost-btn"><?php echo $data['btn_2_text'] ?></a>
        <?php endif ?>

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