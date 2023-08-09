<?php

defined( 'ABSPATH' ) || exit;

get_header();

$meta_title = carbon_get_post_meta($post->ID, 'banner_title');
$meta_desc = carbon_get_post_meta($post->ID, 'banner_desc');
$meta_image = carbon_get_post_meta($post->ID, 'banner_image');


?>

<div class="wrapper single-blog-page">

	<div class="single-page generic-page-container">

		<main class="site-main" role="main">

			<div class="blog-hero">

				<div class="overlay"></div>
				<div class="blog_image">
					<?php echo wp_get_attachment_image($meta_image, 'full') ?>
				</div>

				<div class="container">

					<div class="breadcrumb">
						<a href="<?php echo home_url('/') ?>">Home</a>
						<div class="separator">
							<img src="<?php echo ICONS.'/breadcrumb.svg' ?>" alt="Breadcrumb icon">
						</div>
						<div class="current">
							<?php echo get_the_title($post->ID) ?>
						</div>
					</div>

					<h1><?php echo (!empty($meta_title))? $meta_title : the_title() ?></h1>
					<div class="desc">
						<?php echo $meta_desc ?>
					</div>

				</div>

					
			</div>


            <div class="at_a_glance">
                <div class="flex_container">

                    <div class="left_col">
                        <h2><?php echo ( !empty(carbon_get_post_meta($post->ID, 'glance_title'))? carbon_get_post_meta($post->ID, 'glance_title') : 'At a glance' ) ?></h2>
                        <div class="glance_desc">
                            <?php echo ( !empty(carbon_get_post_meta($post->ID, 'glance_desc')) )? carbon_get_post_meta($post->ID, 'glance_desc') : '' ?>
                        </div>
                    </div>
                    <div class="right_col">

                        <div class="inner_section">
                            <div class="small_title">What we did</div>
                            <div class="cat_holder">
                                <?php
                                    $areas = carbon_get_post_meta($post->ID, 'areas_covered')
                                ?>
                                <?php foreach($areas as $area): ?>
                                    <div class="area"><?php echo $area['area'] ?></div>
                                <?php endforeach ?>
                            </div>
                        </div>
                        
                        <div class="separator"></div>

                        <div class="inner_section">
                            <div class="small_title">Project leads</div>
                            <div class="leads_holder">
                                <?php
                                    $leads = carbon_get_post_meta($post->ID, 'project_leads')
                                ?>
                                <?php foreach($leads as $lead): ?>
                                    <div class="lead"><?php echo $lead['lead_name'] ?></div>
                                <?php endforeach ?>
                            </div>
                        </div>

                    </div>

                </div>
            </div>


			<div class="container blog_content_section">

            
				<?php while ( have_posts() ) : the_post(); ?>

					<?php the_content() ?>

				<?php endwhile; // end of the loop. ?>


			</div>


			<div class="related-articles">

				<div class="container">
					<div class="title">Other stories</div>

					<div class="articles">

						<?php
							$args = array(  
								'post_type' => 'case-studies',
								'post_status' => 'publish',
								'posts_per_page' => 2, 
								'post__not_in' => array($post->ID)
							);

							$loop = new WP_Query($args);
						?>

						<?php if ($loop->have_posts()) : ?>

						<?php while ($loop->have_posts()) : $loop->the_post(); ?> 

							<div class="article">
								<div class="single-news">
									<a href="<?php the_permalink() ?>"></a>
									<div class="img-holder">
										<?php echo get_the_post_thumbnail($post->ID, 'full') ?>
									</div>


									<div class="content">

										<div class="date-cat">
											<div class="category">
												<?php 
													$terms = wp_get_post_terms( $post->ID, array( 'project_categories' ) );
													$term = get_term($terms[0]);
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
							</div>
						
							<?php endwhile ?>

						<?php endif ?>

					</div>
				</div>
				
			</div>



		</main><!-- #main -->

	</div><!-- #primary -->

</div><!-- #page-wrapper -->

<?php get_footer();

