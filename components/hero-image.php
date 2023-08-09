<?php
    $data = getData();
?>
<div class="hero_image">
    <div class="container">
        <?php echo wp_get_attachment_image($data['image'], 'full') ?>
    </div>
</div>