<?php
    $data = getData();
?>
<div class="three_col_image">
    <div class="container">

        <div class="col">
            <div class="image">
                <?php echo wp_get_attachment_image($data['image_1'], 'full') ?>
            </div>
        </div>
        <div class="col">
            <div class="image">
                <?php echo wp_get_attachment_image($data['image_2'], 'full') ?>
            </div>
        </div>
        <div class="col">
            <div class="image">
                <?php echo wp_get_attachment_image($data['image_3'], 'full') ?>
            </div>
        </div>

    </div>
</div>