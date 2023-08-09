<?php
$data = getData();
?>
<div class="hero <?php echo (!empty($data['section_image'])) ? 'has_gradient' : '' ?>">
    <div class="container">

        <h1><?php echo $data['title'] ?></h1>

        <?php if (!empty($data['desc'])) : ?>
            <div class="desc">
                <?php echo $data['desc'] ?>
            </div>
        <?php endif ?>


        <?php if (!empty($data['app_store_rating']) || !empty($data['tiktok_followers'])) : ?>
            <div class="ratings">
                <div class="app_store">
                    <div class="amount">
                        <?php echo $data['app_store_rating'] ?>
                    </div>
                    <div class="title_stars">
                        <div class="rating_title">App Store rating</div>
                        <div class="stars">
                            <svg width="61" height="10" viewBox="0 0 61 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.90211 9.28261L2.71019 5.85049L0 3.54205L3.58043 3.2367L4.97283 0L6.36522 3.2367L9.94565 3.54205L7.23546 5.85049L8.04355 9.28261L4.97283 7.46273L1.90211 9.28261Z" fill="#FFC700" />
                                <path d="M15.0351 9.28261L15.7893 5.85049L13.2598 3.54205L16.6015 3.2367L17.9011 0L19.2006 3.2367L22.5424 3.54205L20.0129 5.85049L20.7671 9.28261L17.9011 7.46273L15.0351 9.28261Z" fill="#FFC700" />
                                <path d="M27.7595 9.28261L28.5676 5.85049L25.8574 3.54205L29.4379 3.2367L30.8302 0L32.2226 3.2367L35.8031 3.54205L33.0929 5.85049L33.901 9.28261L30.8302 7.46273L27.7595 9.28261Z" fill="#FFC700" />
                                <path d="M40.8944 9.28261L41.6487 5.85049L39.1191 3.54205L42.4609 3.2367L43.7604 0L45.06 3.2367L48.4017 3.54205L45.8722 5.85049L46.6264 9.28261L43.7604 7.46273L40.8944 9.28261Z" fill="#FFC700" />
                                <path d="M53.494 9.28261L54.2483 5.85049L51.7188 3.54205L55.0605 3.2367L56.3601 0L57.6596 3.2367L61.0014 3.54205L58.4718 5.85049L59.2261 9.28261L56.3601 7.46273L53.494 9.28261Z" fill="#FFC700" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="tiktok_followers">
                    <div class="tiktok_icon">
                        <svg width="19" height="22" viewBox="0 0 19 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.074 3.44667C14.2457 2.49287 13.7892 1.26797 13.7895 0H10.0453V15.1556C10.0164 15.9757 9.67312 16.7525 9.08773 17.3225C8.50233 17.8924 7.7205 18.211 6.90689 18.2111C5.18622 18.2111 3.75638 16.7933 3.75638 15.0333C3.75638 12.9311 5.76786 11.3544 7.83992 12.0022V8.14C3.65944 7.57778 0 10.8533 0 15.0333C0 19.1033 3.34439 22 6.89477 22C10.6996 22 13.7895 18.8833 13.7895 15.0333V7.34556C15.3078 8.44537 17.1307 9.03546 19 9.03222V5.25556C19 5.25556 16.7219 5.36556 15.074 3.44667Z" fill="white" />
                        </svg>
                    </div>
                    <div class="followers"><?php echo $data['tiktok_followers'] ?> </div>följare
                </div>
            </div>
        <?php endif ?>


        <?php if (!empty($data['secondary_title'])) : ?>
            <h2 class="secondary_title"><?php echo $data['secondary_title'] ?></h2>
        <?php endif ?>

        <?php if ((!empty($data['btn_1_url']) ||  (!empty($data['btn_2_url'])) ||  (!empty($data['btn_3_url'])))) : ?>

            <div class="btn_container">

                <?php if (!empty($data['btn_1_url'])) : ?>
                    <a href="<?php echo $data['btn_1_url'] ?>" class="btn primary-btn"><?php echo $data['btn_1_text'] ?></a>
                <?php endif ?>

                <div class="dropdown_container">
                    <div class="custom_dropdown">
                        Välj stad
                        <svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 0.904459L5.5 6L0 0.904459L0.97625 0L5.5 4.19108L10.0238 0L11 0.904459Z" fill="white" />
                        </svg>
                    </div>
                    <div class="dropdown_items">

                        <?php

                        $args = array(
                            'post_type'      => 'product',
                            'posts_per_page' => -1,
                            'post__in' => array(49, 186, 210, 209, 211),
                            'orderby' => 'post__in',
                        );

                        $loop = new WP_Query($args);

                        while ($loop->have_posts()) : $loop->the_post();
                            global $product;
                            // print_r($loop->the_post());
                        ?>
                            <?php if (check_title($data['title'], 'Körkortsgaranti')) : ?>
                                <a href="<?php echo home_url('/sammanfattning/?id=' . $product->get_id() . '&title=Körkortsgaranti') ?>" class="item">
                                <?php elseif (check_title($data['title'], 'Intensivkurs Fullflex')) : ?>
                                    <a href="<?php echo home_url('/sammanfattning/?id=' . $product->get_id() . '&title=Intensivkurs Fullflex') ?>" class="item">
                                    <?php else : ?>
                                        <?php if (get_the_title($post->ID) == 'Umeå') : ?>
                                            <a href="<?php echo home_url('/umea') ?>" class="item">
                                            <?php elseif (get_the_title($post->ID) == 'Gävle') : ?>
                                                <a href="<?php echo home_url('/gavle') ?>" class="item">
                                                <?php elseif (get_the_title($post->ID) == 'Luleå') : ?>
                                                    <a href="<?php echo home_url('/lulea') ?>" class="item">
                                                    <?php elseif (get_the_title($post->ID) == 'Uppsala') : ?>
                                                        <a href="<?php echo home_url('/uppsala') ?>" class="item">
                                                            <!-- <php elseif ($_GET['type'] == 'sverige'): ?>
                                        <a href="<php echo home_url('/sverige') ?>" class="item">                    
                                    <php else: ?>
                                        <a href="<php echo home_url('/sammanfattning/?id='.$product->get_id().'&title='.$title) ?>" class="item">
                                    <php endif; ?> -->
                                                        <?php else : ?>
                                                            <?php if (check_title($data['title'], 'Intensivkurs Fullflex')) : ?>
                                                                <a href="<?php echo home_url('/sammanfattning/?id=' . $product->get_id() . '&title=Intensivkurs Fullflex') ?>" class="item">
                                                                <?php else : ?>
                                                                    <a href="<?php echo home_url('/sverige') ?>" class="item">
                                                                    <?php endif ?>
                                                                <?php endif ?>
                                                            <?php endif ?>

                                                            <div class="title_price">
                                                                <div class="title">
                                                                    <?php echo get_the_title($post->ID) ?>
                                                                </div>
                                                                <?php if (check_title($data['title'], 'Körkortsgaranti') || check_title($data['title'], 'Intensivkurs Fullflex')) : ?>
                                                                    <div class="price">
                                                                        <?php echo $product->get_price() . ' kr' ?>
                                                                    </div>
                                                                <?php endif ?>
                                                            </div>
                                                            <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M0.904459 0L6 5.5L0.904459 11L0 10.0237L4.19108 5.5L0 0.97625L0.904459 0Z" fill="#100D23" />
                                                            </svg>
                                                                    </a>
                                                                <?php
                                                            endwhile;


                                                            $args = array(
                                                                'post_type'      => 'product',
                                                                'posts_per_page' => -1,
                                                                'orderby' => 'title',
                                                                'order' => 'ASC'
                                                            );

                                                            $loop = new WP_Query($args);

                                                            while ($loop->have_posts()) : $loop->the_post();
                                                                global $product;

                                                                if (
                                                                    get_the_title($post->ID) == 'Körkortsprenumeration'
                                                                    ||
                                                                    get_the_title($post->ID) == 'Umeå'
                                                                    ||
                                                                    get_the_title($post->ID) == 'Gävle'
                                                                    ||
                                                                    get_the_title($post->ID) == 'Stockholm'
                                                                    ||
                                                                    get_the_title($post->ID) == 'Göteborg'
                                                                    ||
                                                                    get_the_title($post->ID) == 'Malmö'
                                                                ) {
                                                                    continue;
                                                                }

                                                                ?>


                                                                    <?php if (check_title($data['title'], 'Körkortsgaranti')) : ?>
                                                                        <a href="<?php echo home_url('/sammanfattning/?id=' . $product->get_id() . '&title=Körkortsgaranti') ?>" class="item">
                                                                        <?php elseif (check_title($data['title'], 'Intensivkurs Fullflex')) : ?>
                                                                            <a href="<?php echo home_url('/sammanfattning/?id=' . $product->get_id() . '&title=Intensivkurs Fullflex') ?>" class="item">
                                                                            <?php else : ?>
                                                                                <?php if (get_the_title($post->ID) == 'Umeå') : ?>
                                                                                    <a href="<?php echo home_url('/umea') ?>" class="item">
                                                                                    <?php elseif (get_the_title($post->ID) == 'Gävle') : ?>
                                                                                        <a href="<?php echo home_url('/gavle') ?>" class="item">
                                                                                        <?php elseif (get_the_title($post->ID) == 'Luleå') : ?>
                                                                                            <a href="<?php echo home_url('/lulea') ?>" class="item">
                                                                                            <?php elseif (get_the_title($post->ID) == 'Uppsala') : ?>
                                                                                                <a href="<?php echo home_url('/uppsala') ?>" class="item">
                                                                                                    <!-- <php elseif ($_GET['type'] == 'sverige'): ?>
                                        <a href="<php echo home_url('/sverige') ?>" class="item">                    
                                    <php else: ?>
                                        <a href="<php echo home_url('/sammanfattning/?id='.$product->get_id().'&title='.$title) ?>" class="item">
                                    <php endif; ?> -->
                                                                                                <?php else : ?>
                                                                                                    <?php if (check_title($data['title'], 'Intensivkurs Fullflex')) : ?>
                                                                                                        <a href="<?php echo home_url('/sammanfattning/?id=' . $product->get_id() . '&title=Intensivkurs Fullflex') ?>" class="item">
                                                                                                        <?php else : ?>
                                                                                                            <a href="<?php echo home_url('/sverige') ?>" class="item">
                                                                                                            <?php endif ?>
                                                                                                        <?php endif ?>
                                                                                                    <?php endif ?>

                                                                                                    <div class="title_price">
                                                                                                        <div class="title">
                                                                                                            <?php echo get_the_title($post->ID) ?>
                                                                                                        </div>
                                                                                                        <?php if (check_title($data['title'], 'Körkortsgaranti') || check_title($data['title'], 'Intensivkurs Fullflex')) : ?>
                                                                                                            <div class="price">
                                                                                                                <?php echo $product->get_price() . ' kr' ?>
                                                                                                            </div>
                                                                                                        <?php endif ?>
                                                                                                    </div>

                                                                                                    <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path d="M0.904459 0L6 5.5L0.904459 11L0 10.0237L4.19108 5.5L0 0.97625L0.904459 0Z" fill="#100D23" />
                                                                                                    </svg>
                                                                                                            </a>
                                                                                                        <?php
                                                                                                    endwhile;

                                                                                                    wp_reset_query();
                                                                                                        ?>


                    </div>
                </div>

                <?php if (!empty($data['btn_3_url'])) : ?>
                    <a href="tel:<?php echo $data['btn_3_url'] ?>" class="btn ghost-btn calling-btn">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.21778 6.92444C4.49778 9.44 6.56 11.4933 9.07556 12.7822L11.0311 10.8267C11.2711 10.5867 11.6267 10.5067 11.9378 10.6133C12.9333 10.9422 14.0089 11.12 15.1111 11.12C15.6 11.12 16 11.52 16 12.0089V15.1111C16 15.6 15.6 16 15.1111 16C6.76444 16 0 9.23556 0 0.888889C0 0.4 0.4 0 0.888889 0H4C4.48889 0 4.88889 0.4 4.88889 0.888889C4.88889 2 5.06667 3.06667 5.39556 4.06222C5.49333 4.37333 5.42222 4.72 5.17333 4.96889L3.21778 6.92444Z" fill="white" />
                        </svg>
                        <?php echo $data['btn_3_text'] ?>
                    </a>
                <?php endif ?>

            </div>
        <?php endif ?>

    </div>

</div>
<?php if (!empty($data['section_image'])) : ?>
    <div class="section_image">
        <?php echo wp_get_attachment_image($data['section_image'], 'full') ?>
    </div>
<?php endif ?>