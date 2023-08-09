<?php
    $data = getData();
    $cards = $data['cards'];
?>
<div class="product-cards">
    <div class="container">

        <?php if(!empty($cards)): ?>
            <div class="flex_container">

                <?php foreach($cards as $item): ?>

                    <div class="card">
                        <div class="title"><?php echo $item['title'] ?></div>

                        <?php if(!empty($item['points'])): ?>
                            <div class="points">
                                <?php foreach($item['points'] as $point): ?>
                                    <div class="point">
                                        <?php 
                                            echo wp_get_attachment_image($point['icon'], 'full');
                                            echo $point['text'] 
                                        ?>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        <?php endif ?>

                        <?php if( !empty($item['btn_1_url']) || !empty($item['btn_2_url']) ): ?>

                            <div class="btn_container">

                                <?php if(!empty($item['btn_1_url'])): ?>
                                    <a href="<?php echo $item['btn_1_url'] ?>" class="btn primary-btn"><?php echo $item['btn_1_text'] ?></a>
                                <?php endif ?>

                                <?php if(!empty($item['btn_2_url'])): ?>
                                    <a href="<?php echo $item['btn_2_url'] ?>" class="btn ghost-btn"><?php echo $item['btn_2_text'] ?></a>
                                <?php endif ?>

                            </div>

                        <?php endif ?>

                    </div>


                    <div class="mob_item_container">
                        <div class="title accordion"><?php echo $item['title'] ?></div>
                        <div class="panel">
                            <?php if(!empty($item['points'])): ?>
                                <div class="points">
                                    <?php foreach($item['points'] as $point): ?>
                                        <div class="point">
                                            <?php 
                                                echo wp_get_attachment_image($point['icon'], 'full');
                                                echo $point['text'] 
                                            ?>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            <?php endif ?>

                            <?php if( !empty($item['btn_1_url']) || !empty($item['btn_2_url']) ): ?>

                                <div class="btn_container">

                                    <?php if(!empty($item['btn_1_url'])): ?>
                                        <a href="<?php echo $item['btn_1_url'] ?>" class="btn primary-btn"><?php echo $item['btn_1_text'] ?></a>
                                    <?php endif ?>

                                    <?php if(!empty($item['btn_2_url'])): ?>
                                        <a href="<?php echo $item['btn_2_url'] ?>" class="btn ghost-btn"><?php echo $item['btn_2_text'] ?></a>
                                    <?php endif ?>

                                </div>

                            <?php endif ?>
                            
                        </div>
                    </div>
                    

                <?php endforeach ?>

            </div>
        <?php endif ?>

    </div>
</div>