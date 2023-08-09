<?php
    $data = getData();
    $items = $data['items'];
?>
<div class="info_box">
    <div class="container">

        <?php foreach($items as $item): ?>

            <div class="item" style="background: <?php echo (!empty($item['bg_color']))? $item['bg_color'] : '#5A4D79' ?>;">
                <?php if(!empty($item['title'])): ?>
                    <div class="title"><?php echo $item['title'] ?></div>
                <?php endif ?>
                <?php if(!empty($item['desc'])): ?>
                    <div class="desc">
                        <div class="dot"></div>
                        <?php echo $item['desc'] ?>
                    </div>
                <?php endif ?>
            </div>

        <?php endforeach ?>

    </div>
</div>