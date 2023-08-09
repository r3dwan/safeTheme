<?php
$data = getData();
$items = $data['items'];
?>
<div class="safe_cards">

    <h2>Våra paket</h2>

    <div class="container">

        <?php if (!empty($items)) : ?>
            <?php foreach ($items as $item) : ?>

                <div class="item">
                    <div class="small_title"><?php echo $item['small_title'] ?></div>
                    <div class="subtitle"><?php echo $item['subtitle'] ?></div>
                    <div class="title"><?php echo $item['title'] ?></div>

                    <div class="points">
                        <?php foreach ($item['points'] as $point) : ?>
                            <div class="point">
                                <div class="icon">
                                    <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.48879 7.92128L11.8969 0.352769C12.1271 0.117589 12.42 0 12.7758 0C13.1315 0 13.4245 0.117589 13.6547 0.352769C13.8849 0.587949 14 0.887268 14 1.25073C14 1.61419 13.8849 1.91351 13.6547 2.14869L5.36771 10.6152C5.11659 10.8717 4.82362 11 4.48879 11C4.15396 11 3.86099 10.8717 3.60987 10.6152L0.345291 7.27988C0.115097 7.0447 0 6.74538 0 6.38192C0 6.01846 0.115097 5.71914 0.345291 5.48396C0.575485 5.24879 0.86846 5.1312 1.22422 5.1312C1.57997 5.1312 1.87294 5.24879 2.10314 5.48396L4.48879 7.92128Z" fill="#04D100" />
                                    </svg>
                                </div>
                                <?php echo $point['point'] ?>
                            </div>
                        <?php endforeach ?>
                    </div>

                    <div class="btn_container">

                        <?php if (!empty($item['btn_1_url'])) : ?>
                            <a href="<?php echo $item['btn_1_url'] ?>" class="btn primary-btn"><?php echo $item['btn_1_text'] ?></a>
                        <?php endif ?>

                        <?php if (!empty($item['btn_2_url'])) : ?>
                            <a href="<?php echo $item['btn_2_url'] ?>" class="btn ghost-btn"><?php echo $item['btn_2_text'] ?></a>
                        <?php endif ?>

                        <?php if ($item['show_appstore'] == 'yes') : ?>
                            <a href="<?php echo carbon_get_theme_option('app_store_link') ?>">
                                <img src="<?php echo IMG . '/app_store_logo.svg' ?>" alt="App store logo">
                            </a>
                        <?php endif ?>

                        <?php if ($item['show_playstore'] == 'yes') : ?>
                            <a href="<?php echo carbon_get_theme_option('play_store_link') ?>">
                                <img src="<?php echo IMG . '/play_store_logo.svg' ?>" alt="App store logo">
                            </a>
                        <?php endif ?>

                    </div>

                </div>

            <?php endforeach ?>
        <?php endif ?>
    </div>
</div>