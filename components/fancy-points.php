<?php
    $data = getData();
    $items = $data['items'];
?>
<div class="fancy-points">
    <div class="container">

        <div class="left_col">
            
            <?php if(!empty($data['left_title'])): ?>
                <p class="title"><?php echo $data['left_title'] ?></p>
            <?php endif ?>

            <?php if(!empty($items)): ?>
                <div class="points">
                    <?php foreach($items as $item): ?>

                        <div class="item">
                            <?php echo wp_get_attachment_image($item['icon'], 'full') ?>
                            <div class="text"><?php echo $item['text'] ?></div>
                        </div>

                    <?php endforeach ?>
                </div>
            <?php endif ?>

        </div>
        <div class="right_col">
            <?php if(!empty($data['right_title'])): ?>
                <p class="title"><?php echo $data['right_title'] ?></p>
            <?php endif ?>

            <div class="desc">
                <?php echo $data['right_desc'] ?>
            </div>
        </div>

    </div>
</div>