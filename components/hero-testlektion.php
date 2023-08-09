<?php
    $data = getData();
?>

<div class="hero_testlektion">
    <div class="container">
        <h1><?php echo $data['title'] ?></h1>
        <div class="desc">
            <?php echo $data['desc_1'] ?>
        </div>
        <div class="shortcode">
            <?php echo do_shortcode($data['shortcode']) ?>
        </div>
        <div class="desc">
            <?php echo $data['desc_2'] ?>
        </div>
    </div>
</div>