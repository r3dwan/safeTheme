<?php
    $data = getData();
?>
<div class="generic_content <?php echo ($data['secondary_bg'])? 'has_bg' : '' ?>">
    <div class="container">

        <?php if(!empty($data['title'])): ?>
            <h2><?php echo $data['title'] ?></h2>
        <?php endif ?>

        <?php if(!empty($data['desc'])): ?>
            <div class="content">
                <?php echo $data['desc'] ?>
            </div>
        <?php endif ?>

    </div>
</div>