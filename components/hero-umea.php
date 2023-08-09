<?php
    $data = getData();
?>
<div class="hero <?php echo (!empty($data['section_image']))? 'has_gradient' : '' ?>">
    <div class="container">

        <h1><?php echo $data['title'] ?></h1>

        <?php if(!empty($data['location'])): ?>
            <div class="location">
                <img src="<?php echo ICONS.'/map_pin.svg' ?>" alt="Map icon">
                <?php echo $data['location'] ?>
            </div>
        <?php endif ?>

        <?php if(!empty($data['desc'])): ?>
        <div class="desc">
            <?php echo $data['desc'] ?>
        </div>
        <?php endif ?>

        <?php if((!empty($data['btn_1_url']) ||  (!empty($data['btn_2_url']) ) ||  (!empty($data['btn_3_url']) ) )): ?>
            <div class="btn_container">

                <?php if(!empty($data['btn_1_url'])): ?>
                    <a href="<?php echo $data['btn_1_url'] ?>" class="btn primary-btn"><?php echo $data['btn_1_text'] ?></a>
                <?php endif ?>

                <?php if(!empty($data['btn_2_url'])): ?>
                    <a href="<?php echo $data['btn_2_url'] ?>" class="btn ghost-btn"><?php echo $data['btn_2_text'] ?></a>
                <?php endif ?>

                <?php if(!empty($data['btn_3_url'])): ?>
                    <a href="tel:<?php echo $data['btn_3_url'] ?>" class="btn ghost-btn calling-btn">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.21778 6.92444C4.49778 9.44 6.56 11.4933 9.07556 12.7822L11.0311 10.8267C11.2711 10.5867 11.6267 10.5067 11.9378 10.6133C12.9333 10.9422 14.0089 11.12 15.1111 11.12C15.6 11.12 16 11.52 16 12.0089V15.1111C16 15.6 15.6 16 15.1111 16C6.76444 16 0 9.23556 0 0.888889C0 0.4 0.4 0 0.888889 0H4C4.48889 0 4.88889 0.4 4.88889 0.888889C4.88889 2 5.06667 3.06667 5.39556 4.06222C5.49333 4.37333 5.42222 4.72 5.17333 4.96889L3.21778 6.92444Z" fill="white"/>
                        </svg>
                        <?php echo $data['btn_3_text'] ?>
                    </a>
                <?php endif ?>

            </div>
        <?php endif ?>

    </div>
</div>  

<?php if(!empty($data['section_image'])): ?>
    <div class="section_image">
        <?php echo wp_get_attachment_image($data['section_image'], 'full') ?>
    </div>
<?php endif ?>