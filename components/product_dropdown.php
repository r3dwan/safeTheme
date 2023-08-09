<?php
    $data = getData();
?>
<div class="product_dropdown">
    <div class="container">

        <h2><?php echo $data['title'] ?></h2>

        <?php if(!empty($data['desc'])): ?>
        <div class="desc">
            <?php echo $data['desc'] ?>
        </div>
        <?php endif ?>

        <div class="custom_dropdown">
            Välj stad
            <svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 0.904459L5.5 6L0 0.904459L0.97625 0L5.5 4.19108L10.0238 0L11 0.904459Z" fill="white"/>
            </svg>
        </div>
        <div class="dropdown_items">

            <?php  

                $args = array(
                    'post_type'      => 'product',
                    'posts_per_page' => -1,
                    'post__in' => array(49, 186, 210, 209, 211),
                    'orderby'=> 'post__in', 
                );

                $loop = new WP_Query( $args );

                while ( $loop->have_posts() ) : $loop->the_post();
                    global $product;
                ?>
                    <?php if(get_the_title($post->ID) == 'Umeå'): ?>
                        <a href="<?php echo home_url('/umea') ?>" class="item">
                    <?php elseif (get_the_title($post->ID) == 'Gävle'): ?>
                        <a href="<?php echo home_url('/gavle') ?>" class="item">
                    <?php elseif (get_the_title($post->ID) == 'Luleå'): ?>
                        <a href="<?php echo home_url('/lulea') ?>" class="item">
                    <?php elseif (get_the_title($post->ID) == 'Uppsala'): ?>
                        <a href="<?php echo home_url('/uppsala') ?>" class="item">
                    <!-- <php elseif ($_GET['type'] == 'sverige'): ?>
                            <a href="<php echo home_url('/sverige') ?>" class="item">                    
                        <php else: ?>
                            <a href="<php echo home_url('/sammanfattning/?id='.$product->get_id().'&title='.$title) ?>" class="item">
                        <php endif; ?> -->
                        <?php else: ?>
                            <a href="<?php echo home_url('/sverige') ?>" class="item">                    
                        <?php endif ?>
                    <div class="title_price">
                        <div class="title">
                            <?php echo get_the_title($post->ID) ?>
                        </div>
                    </div>
                    <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.904459 0L6 5.5L0.904459 11L0 10.0237L4.19108 5.5L0 0.97625L0.904459 0Z" fill="#100D23"/>
                    </svg>
                </a>
                    <?php
                endwhile;


                $args = array(
                    'post_type'      => 'product',
                    'posts_per_page' => -1,
                    'orderby'=> 'title', 
                    'order' => 'ASC'
                );

                $loop = new WP_Query( $args );

                while ( $loop->have_posts() ) : $loop->the_post();
                    global $product;

                    if(
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
                    ){
                        continue;
                    }

                    ?>
                    <?php if(get_the_title($post->ID) == 'Umeå'): ?>
                        <a href="<?php echo home_url('/umea') ?>" class="item">
                    <?php elseif (get_the_title($post->ID) == 'Gävle'): ?>
                        <a href="<?php echo home_url('/gavle') ?>" class="item">
                    <?php elseif (get_the_title($post->ID) == 'Luleå'): ?>
                        <a href="<?php echo home_url('/lulea') ?>" class="item">
                    <?php elseif (get_the_title($post->ID) == 'Uppsala'): ?>
                        <a href="<?php echo home_url('/uppsala') ?>" class="item">
                    <!-- <php elseif ($_GET['type'] == 'sverige'): ?>
                            <a href="<php echo home_url('/sverige') ?>" class="item">                    
                        <php else: ?>
                            <a href="<php echo home_url('/sammanfattning/?id='.$product->get_id().'&title='.$title) ?>" class="item">
                        <php endif; ?> -->
                        <?php else: ?>
                            <a href="<?php echo home_url('/sverige') ?>" class="item">                    
                        <?php endif ?>
                    <div class="title_price">
                        <div class="title">
                            <?php echo get_the_title($post->ID) ?>
                        </div>
                    </div>
                    <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.904459 0L6 5.5L0.904459 11L0 10.0237L4.19108 5.5L0 0.97625L0.904459 0Z" fill="#100D23"/>
                    </svg>
                </a>
                    <?php
                endwhile;

                wp_reset_query();
            ?>
        </div>

    </div>
</div>