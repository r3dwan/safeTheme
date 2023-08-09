<?php
$data = getData();
$items = $data['items'];
?>
<div class="reviews">
    <div class="container">

        <div class="splide">
            <div class="splide__track">
                <div class="splide__list">

                    <?php foreach ($items as $item) : ?>

                        <div class="splide__slide review_card">

                            <div class="img">
                                <img src="<?php echo IMG . '/user.svg' ?>" alt="User placeholder image">
                            </div>
                            <div class="name"><?php echo $item['name'] ?></div>

                            <?php if ($item['star_count'] == '4.5') : ?>
                                <div class="stars">
                                    <img src="<?php echo IMG . '/star.svg' ?>" alt="Star image">
                                    <img src="<?php echo IMG . '/star.svg' ?>" alt="Star image">
                                    <img src="<?php echo IMG . '/star.svg' ?>" alt="Star image">
                                    <img src="<?php echo IMG . '/star.svg' ?>" alt="Star image">
                                    <img src="<?php echo IMG . '/half_star.svg' ?>" alt="Star image">
                                </div>
                            <?php else : ?>
                                <div class="stars">
                                    <img src="<?php echo IMG . '/star.svg' ?>" alt="Star image">
                                    <img src="<?php echo IMG . '/star.svg' ?>" alt="Star image">
                                    <img src="<?php echo IMG . '/star.svg' ?>" alt="Star image">
                                    <img src="<?php echo IMG . '/star.svg' ?>" alt="Star image">
                                    <img src="<?php echo IMG . '/star.svg' ?>" alt="Star image">
                                </div>
                            <?php endif ?>

                            <div class="message">
                                <?php echo $item['message'] ?>
                            </div>

                            <div class="google_logo">
                                <img src="<?php echo IMG . '/google_logo.svg' ?>" alt="Google logo">
                            </div>

                        </div>

                    <?php endforeach ?>

                </div>
            </div>
        </div>

    </div>
</div>