<?php
    $data = getData();
    $product_id = $_GET['id'];
    $card_title = $_GET['title'];

    if(!empty($product_id)):
        $_product = wc_get_product( $product_id );
    endif;

    // print_r($_product->get_name());
    // print_r($_product->get_price());
?>
<div class="hero with_card">
    <div class="container">

        <h1><?php echo $data['title'] ?></h1>

        <?php if(!empty($data['desc'])): ?>
        <div class="desc">
            <?php echo $data['desc'] ?>
        </div>
        <?php endif ?>

        <div class="product_card">
            <div class="card">
                <div class="title">
                    <?php if(!empty($card_title)): ?>
                        <?php echo $card_title ?>
                    <?php else: ?>
                        <?php echo $data['card_title'] ?>
                    <?php endif ?>
                </div>

                    <?php if(!empty($product_id)): ?>

                        <div class="points">
                            <div class="point">
                                <img src="<?php echo ICONS.'/white_pin_icon.svg' ?>" alt="icon">
                                <?php 
                                    echo $_product->get_name();
                                ?>
                            </div>
                            <div class="point">
                                <img src="<?php echo ICONS.'/box_open_icon.svg' ?>" alt="icon">
                                <?php 
                                    echo 'Obegränsat antal lektioner i bil & simulator'
                                ?>
                            </div>
                            <div class="point">
                                <img src="<?php echo ICONS.'/white_clock_icon.svg' ?>" alt="icon">
                                <?php 
                                    if($_GET['title'] == 'Intensivkurs Fullflex'){
                                        echo 'Intensivkurs på 6 veckor';
                                    }
                                    else{
                                        echo 'Körkort till fast pris inom 12 veckor';
                                    }
                                ?>
                            </div>
                            <div class="point">
                                <img src="<?php echo ICONS.'/box_open_icon.svg' ?>" alt="icon">
                                <?php 
                                    echo 'Premiumanvändare i vår mobilapp'
                                ?>
                            </div>
                            <div class="point">
                                <img src="<?php echo ICONS.'/box_open_icon.svg' ?>" alt="icon">
                                <?php 
                                    if($_GET['title'] == 'Intensivkurs Fullflex'){
                                        echo 'Körlektioner när det passar dig';
                                    }
                                    else{
                                        echo '20 minuter långa veckovisa samtal med trafiklärare';
                                    }
                                ?>
                            </div>
                            <div class="point">
                                <img src="<?php echo ICONS.'/white_tag_icon.svg' ?>" alt="icon">
                                <?php 
                                    echo $_product->get_price().' SEK';
                                ?>
                            </div>
                        </div>

                    <?php else: ?>

                        <?php if(!empty($data['points'])): ?>
                            <div class="points">
                                <?php foreach($data['points'] as $point): ?>
                                    <div class="point">
                                        <?php 
                                            echo wp_get_attachment_image($point['icon'], 'full');
                                            echo $point['text'] 
                                        ?>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        <?php endif ?>

                    <?php endif ?>

            </div>
        </div>


        <?php if(!empty($product_id)): ?>

            <div class="btn_container">
                <a href="<?php echo home_url() ?>/checkout/?add-to-cart=<?php echo $product_id?>" class="btn primary-btn"><?php echo 'Till betalning' ?></a>
            </div>

        <?php else: ?>

            <?php if((!empty($data['btn_1_url']) ||  (!empty($data['btn_2_url']) ))): ?>
                <div class="btn_container">

                    <?php if(!empty($data['btn_1_url'])): ?>
                        <a href="<?php echo $data['btn_1_url'] ?>" class="btn primary-btn"><?php echo $data['btn_1_text'] ?></a>
                    <?php endif ?>

                    <?php if(!empty($data['btn_2_url'])): ?>
                        <a href="<?php echo $data['btn_2_url'] ?>" class="btn ghost-btn"><?php echo $data['btn_2_text'] ?></a>
                    <?php endif ?>

                </div>
            <?php endif ?>

        <?php endif ?>

    </div>

</div>