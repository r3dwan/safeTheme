<?php
    $data = getData();
?>
<div class="custom_buttons">
    <div class="container">

        <?php if(!empty($data['btn_1_url'])): ?>
            <a download href="<?php echo $data['btn_1_url'] ?>" class="btn primary-btn download-btn">
                <svg width="14" height="17" viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 17H14V15H0V17ZM14 6H10V0H4V6H0L7 13L14 6Z" fill="white"/>
                </svg>
                <?php echo $data['btn_1_text'] ?>
            </a>
        <?php endif ?>

        <?php if(!empty($data['btn_2_url'])): ?>
            <a href="<?php echo $data['btn_2_url'] ?>" class="btn ghost-btn"><?php echo $data['btn_2_text'] ?></a>
        <?php endif ?>

    </div>
</div>