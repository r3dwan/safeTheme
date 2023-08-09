<?php
    $data = getData();
    $items = $data['steps'];
?>
<div class="steps">
    <div class="container">
        <?php
            $i=1;
            foreach($items as $item):
        ?>
        <div class="step">
            <?php if(!empty($item['title'])): ?>

                <div class="title">
                    <div class="sl"><?php echo $i ?></div>
                    <?php echo $item['title'] ?>
                </div>

            <?php endif ?>
            <div class="flex_container">
                <div class="left_col">
                    <?php echo $item['desc'] ?>
                </div>
                <?php if(!empty($item['image'])): ?>
                    <div class="right_col">
                        <?php echo wp_get_attachment_image($item['image'], 'full') ?>
                    </div>
                <?php endif ?>
            </div>
        </div>

        <?php
            $i++;
            endforeach;
        ?>
    </div>
</div>