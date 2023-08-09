<?php
    $data = getData();
?>
<div class="fifty-fifty-points">
    <div class="container">
        <?php if(!empty($data['title'])): ?>
            <h2><?php echo $data['title'] ?></h2>
        <?php endif ?>

        <div class="flex_container">

            <div class="left_col">
                <div class="col_title"><?php echo $data['left_title'] ?></div>
                <div class="desc">
                    <?php echo $data['left_desc'] ?>
                </div>
            </div>
            <div class="right_col">
                <div class="col_title"><?php echo $data['right_title'] ?></div>
                <div class="desc">
                    <?php echo $data['right_desc'] ?>
                </div>
            </div>

        </div>

    </div>
</div>