<?php

add_action( 'wp_ajax_nopriv_sort_blogs', 'blog_sort' );
add_action( 'wp_ajax_sort_blogs', 'blog_sort' );


function blog_sort() {

    $args = array(  
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 10,
        'orderby' => 'date',
    );

    if($_POST['asc_desc'] == 'Older'){
        $args['order'] = 'ASC';
    }
    else{
        $args['order'] = 'DESC';
    }

    if(!empty($_POST['filter_type'])){
        $args['tag__in'] = $_POST['filter_type'];    
    }

    if(!empty($_POST['filter_year'])){
        $args['date_query'] = array(
            array('year' => $_POST['filter_year']),
        );
    }

    if(!empty($_POST['filter_topic'])){
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'category',
                'field'    => 'id',
                'terms'    => $_POST['filter_topic'],
            )
        );
    }
    
    remove_all_filters('posts_orderby');

	$loop = new WP_Query($args);

    if ($loop->have_posts()) :

        while ($loop->have_posts()) : $loop->the_post(); ?>
            <div class="single-news">
                <a href="<?php the_permalink() ?>"></a>
                <div class="img-holder">
                    <?php echo get_the_post_thumbnail($post->ID, 'full') ?>
                </div>

                <div class="content">

                    <div class="date-cat">
                        <div class="category">
                            <?php 
                                $post_categories = wp_get_post_categories( $post->ID ); 
                                $term = get_term($post_categories[0]);
                                print_r($term->name);
                            ?>
                        </div>
                    </div>

                    <p class="title"><?php echo get_the_title($post->ID) ?></p>

                    <div class="flex-items">
                        <div class="date"><?php echo get_the_date('d M Y') ?></div>
                        <div class="separator"></div>
                        <div class="readtime">
                            <img src="<?php echo ICONS.'/clock_icon.svg' ?>" alt="Clock icon">
                            <?php echo get_post_read_time($post); ?> min read
                        </div>
                    </div>

                </div>
                
            </div>
        
        <?php 
        
        endwhile;
    endif;

    exit;
}






add_action( 'wp_ajax_nopriv_sort_blog_by_category', 'blog_sort_by_cat' );
add_action( 'wp_ajax_sort_blog_by_category', 'blog_sort_by_cat' );


function blog_sort_by_cat() {

    if(!empty($_POST['id'])){
        $args = array(  
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 10, 
            'tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field'    => 'id',
                    'terms'    => $_POST['id'],
                ),
            ),
        );
    }
    else{
        $args = array(  
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 10, 
        );
    }


    if($_POST['asc_desc'] == 'Older'){
        $args['sort_by'] = 'date';
        $args['order'] = 'ASC';
    }
    else{
        $args['sort_by'] = 'date';
        $args['order'] = 'DESC';
    }

    if(!empty($_POST['filter_type'])){
        $args['tag__in'] = $_POST['filter_type'];    
    }

    if(!empty($_POST['filter_year'])){
        $args['date_query'] = array(
            array('year' => $_POST['filter_year']),
        );
    }

    if(!empty($_POST['filter_topic'])){
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'category',
                'field'    => 'id',
                'terms'    => $_POST['filter_topic'],
            )
        );
    }
    
    
	$loop = new WP_Query($args);

    while ($loop->have_posts()) : $loop->the_post(); ?> 

        <div class="single-news">
            <a href="<?php the_permalink() ?>"></a>
            <div class="img-holder">
                <?php echo get_the_post_thumbnail($post->ID, 'full') ?>
            </div>

            <div class="content">

                <div class="date-cat">
                    <div class="category">
                        <?php 
                            $post_categories = wp_get_post_categories( $post->ID ); 
                            $term = get_term($post_categories[0]);
                            print_r($term->name);
                        ?>
                    </div>
                </div>

                <p class="title"><?php echo get_the_title($post->ID) ?></p>

                <div class="flex-items">
                    <div class="date"><?php echo get_the_date('d M Y') ?></div>
                    <div class="separator"></div>
                    <div class="readtime">
                        <img src="<?php echo ICONS.'/clock_icon.svg' ?>" alt="Clock icon">
                        <?php echo get_post_read_time($post); ?> min read
                    </div>
                </div>

            </div>
            
        </div>
        
    <?php 

    endwhile;

    exit;
}


add_action( 'wp_ajax_nopriv_sort_blog_by_year', 'blog_sort_by_yr' );
add_action( 'wp_ajax_sort_blog_by_year', 'blog_sort_by_yr' );


function blog_sort_by_yr() {

    if(!empty($_POST['year'])){
        $args = array(  
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 10, 
            'date_query' => array(
                array('year' => $_POST['year']),
            ),
        );
    }
    else{
        $args = array(  
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 10, 
        );
    }


    if($_POST['asc_desc'] == 'Older'){
        $args['sort_by'] = 'date';
        $args['order'] = 'ASC';
    }
    else{
        $args['sort_by'] = 'date';
        $args['order'] = 'DESC';
    }

    if(!empty($_POST['filter_type'])){
        $args['tag__in'] = $_POST['filter_type'];    
    }

    if(!empty($_POST['filter_year'])){
        $args['date_query'] = array(
            array('year' => $_POST['filter_year']),
        );
    }

    if(!empty($_POST['filter_topic'])){
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'category',
                'field'    => 'id',
                'terms'    => $_POST['filter_topic'],
            )
        );
    }
    
    
	$loop = new WP_Query($args);

    while ($loop->have_posts()) : $loop->the_post(); ?> 

        <div class="single-news">
            <a href="<?php the_permalink() ?>"></a>
            <div class="img-holder">
                <?php echo get_the_post_thumbnail($post->ID, 'full') ?>
            </div>

            <div class="content">

                <div class="date-cat">
                    <div class="category">
                        <?php 
                            $post_categories = wp_get_post_categories( $post->ID ); 
                            $term = get_term($post_categories[0]);
                            print_r($term->name);
                        ?>
                    </div>
                </div>

                <p class="title"><?php echo get_the_title($post->ID) ?></p>

                <div class="flex-items">
                    <div class="date"><?php echo get_the_date('d M Y') ?></div>
                    <div class="separator"></div>
                    <div class="readtime">
                        <img src="<?php echo ICONS.'/clock_icon.svg' ?>" alt="Clock icon">
                        <?php echo get_post_read_time($post); ?> min read
                    </div>
                </div>

            </div>
            
        </div>
        
    <?php 

    endwhile;

    exit;
}





add_action( 'wp_ajax_nopriv_sort_blog_by_tag', 'blog_sort_by_tg' );
add_action( 'wp_ajax_sort_blog_by_tag', 'blog_sort_by_tg' );


function blog_sort_by_tg() {

    $args = array(  
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 10, 
        'tag__in' => $_POST['tag']
    );    


    if($_POST['asc_desc'] == 'Older'){
        $args['sort_by'] = 'date';
        $args['order'] = 'ASC';
    }
    else{
        $args['sort_by'] = 'date';
        $args['order'] = 'DESC';
    }

    if(!empty($_POST['filter_type'])){
        $args['tag__in'] = $_POST['filter_type'];    
    }

    if(!empty($_POST['filter_year'])){
        $args['date_query'] = array(
            array('year' => $_POST['filter_year']),
        );
    }

    if(!empty($_POST['filter_topic'])){
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'category',
                'field'    => 'id',
                'terms'    => $_POST['filter_topic'],
            )
        );
    }
    
	$loop = new WP_Query($args);

    while ($loop->have_posts()) : $loop->the_post(); ?> 

        <div class="single-news">
            <a href="<?php the_permalink() ?>"></a>
            <div class="img-holder">
                <?php echo get_the_post_thumbnail($post->ID, 'full') ?>
            </div>

            <div class="content">

                <div class="date-cat">
                    <div class="category">
                        <?php 
                            $post_categories = wp_get_post_categories( $post->ID ); 
                            $term = get_term($post_categories[0]);
                            print_r($term->name);
                        ?>
                    </div>
                </div>

                <p class="title"><?php echo get_the_title($post->ID) ?></p>

                <div class="flex-items">
                    <div class="date"><?php echo get_the_date('d M Y') ?></div>
                    <div class="separator"></div>
                    <div class="readtime">
                        <img src="<?php echo ICONS.'/clock_icon.svg' ?>" alt="Clock icon">
                        <?php echo get_post_read_time($post); ?> min read
                    </div>
                </div>

            </div>
            
        </div>
        
    <?php 

    endwhile;

    exit;
}




add_action( 'wp_ajax_nopriv_reset_filters', 'reset_all_filters' );
add_action( 'wp_ajax_reset_filters', 'reset_all_filters' );


function reset_all_filters() {

    $args = array(  
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 10, 
    );    

    
	$loop = new WP_Query($args);

    while ($loop->have_posts()) : $loop->the_post(); ?> 

        <div class="single-news">
            <a href="<?php the_permalink() ?>"></a>
            <div class="img-holder">
                <?php echo get_the_post_thumbnail($post->ID, 'full') ?>
            </div>

            <div class="content">

                <div class="date-cat">
                    <div class="category">
                        <?php 
                            $post_categories = wp_get_post_categories( $post->ID ); 
                            $term = get_term($post_categories[0]);
                            print_r($term->name);
                        ?>
                    </div>
                </div>

                <p class="title"><?php echo get_the_title($post->ID) ?></p>

                <div class="flex-items">
                    <div class="date"><?php echo get_the_date('d M Y') ?></div>
                    <div class="separator"></div>
                    <div class="readtime">
                        <img src="<?php echo ICONS.'/clock_icon.svg' ?>" alt="Clock icon">
                        <?php echo get_post_read_time($post); ?> min read
                    </div>
                </div>

            </div>
            
        </div>
        
    <?php 

    endwhile;

    exit;
}






add_action( 'wp_ajax_nopriv_load_more_posts', 'load_more_custom' );
add_action( 'wp_ajax_load_more_posts', 'load_more_custom' );


function load_more_custom() {


    $args = array(  
        'post_type' => 'post',
        'post_status' => 'publish',
        'post_per_page' => 10,
        'paged' => $_POST['page'], 
    );    

    if(!empty($_POST['year'])){
        $args = array(  
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 10, 
            'paged' => $_POST['page'], 
            'date_query' => array(
                array('year' => $_POST['year']),
            ),
        );
    }
    else{
        $args = array(  
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 10, 
            'paged' => $_POST['page'], 
        );
    }


    if($_POST['asc_desc'] == 'Older'){
        $args['sort_by'] = 'date';
        $args['order'] = 'ASC';
    }
    else{
        $args['sort_by'] = 'date';
        $args['order'] = 'DESC';
    }

    if(!empty($_POST['filter_type'])){
        $args['tag__in'] = $_POST['filter_type'];    
    }

    if(!empty($_POST['filter_year'])){
        $args['date_query'] = array(
            array('year' => $_POST['filter_year']),
        );
    }

    if(!empty($_POST['filter_topic'])){
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'category',
                'field'    => 'id',
                'terms'    => $_POST['filter_topic'],
            )
        );
    }
    
	$loop = new WP_Query($args);

    while ($loop->have_posts()) : $loop->the_post(); ?> 

        <div class="single-news">
            <a href="<?php the_permalink() ?>"></a>
            <div class="img-holder">
                <?php echo get_the_post_thumbnail($post->ID, 'full') ?>
            </div>

            <div class="content">

                <div class="date-cat">
                    <div class="category">
                        <?php 
                            $post_categories = wp_get_post_categories( $post->ID ); 
                            $term = get_term($post_categories[0]);
                            print_r($term->name);
                        ?>
                    </div>
                </div>

                <p class="title"><?php echo get_the_title($post->ID) ?></p>

                <div class="flex-items">
                    <div class="date"><?php echo get_the_date('d M Y') ?></div>
                    <div class="separator"></div>
                    <div class="readtime">
                        <img src="<?php echo ICONS.'/clock_icon.svg' ?>" alt="Clock icon">
                        <?php echo get_post_read_time($post); ?> min read
                    </div>
                </div>

            </div>
            
        </div>
        
    <?php 

    endwhile;

    exit;
}
?>