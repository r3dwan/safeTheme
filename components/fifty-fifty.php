<?php
    $data = getData();
?>
<div class="fancy-fifty fifty-fifty <?php echo ($data['reverse_column'] == 'yes')? 'reverse' : '' ?>">

    <div class="container">

        <div class="left-col">
            <h2><?php echo $data['title'] ?></h2>
            <div class="desc">
                <?php echo $data['desc'] ?>
            </div>
            <?php 
                if(
                    (!empty($data['btn_1_url']) 
                    ||  
                    (!empty($data['btn_2_url']) )
                    ||  
                    (!empty($data['btn_3_url']) )
                    ||  
                    (!empty($data['btn_4_url']) )
                )): 
            ?>
                <div class="btn_container hide-on-mobile">

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
            <?php endif ?>
        </div>
        <div class="right-col">
            <div class="section_image">
                <?php echo wp_get_attachment_image($data['image'], 'full') ?>
            </div>

            <?php if( !empty($data['btn_1_url']) || !empty($data['btn_2_url']) || ($data['show_playstore'] == 'yes') || ($data['show_appstore'] == 'yes') ): ?>
                <div class="btn_container hide-on-desktop">

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
            <?php endif ?>
        </div>

    </div>
</div>