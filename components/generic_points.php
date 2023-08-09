<?php
    $data = getData();
?>
<div class="generic_points generic_content">
    <div class="container">

        <?php if(!empty($data['title'])): ?>
            <h2><?php echo $data['title'] ?></h2>
        <?php endif ?>

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

    </div>
</div>