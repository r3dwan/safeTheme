<?php
    $data = getData();
?>
<div class="three_col_content">
    <div class="container">

        <div class="col">
            <div class="icon">
                <?php echo wp_get_attachment_image($data['icon_1'], 'full') ?>
            </div>
            <div class="title"><?php echo $data['title_1'] ?></div>
            <div class="desc">
                <?php echo $data['desc_1'] ?>
            </div>
        </div>
        <div class="col">
            <div class="icon">
                <?php echo wp_get_attachment_image($data['icon_2'], 'full') ?>
            </div>
            <div class="title"><?php echo $data['title_2'] ?></div>
            <div class="desc">
                <?php echo $data['desc_2'] ?>
            </div>
        </div>
        <div class="col">
            <div class="icon">
                <?php echo wp_get_attachment_image($data['icon_3'], 'full') ?>
            </div>
            <div class="title"><?php echo $data['title_3'] ?></div>
            <div class="desc">
                <?php echo $data['desc_3'] ?>
            </div>
        </div>

    </div>
</div>