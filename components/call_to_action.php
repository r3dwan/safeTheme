<?php
    $data = getData();
?>

<div class="call_to_action">
    <div class="container">
        <h2><?php echo $data['title'] ?></h2>
        <div class="desc">
            <?php echo $data['description'] ?>
        </div>

        <?php if(!empty($data['btn_url'])): ?>
            <a href="<?php echo $data['btn_url'] ?>" class="btn primary-btn"><?php echo $data['btn_title'] ?></a>
        <?php endif ?>
    </div>
</div>