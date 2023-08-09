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


			<div class="container blog_content_section">

				<div class="sidebar">

					<div class="title">Authors</div>
					<div class="authors">

						<div class="author">
							<div class="name">Chloe Oladipo</div>
							<div class="designaiton">Marketing Lead</div>
						</div>
						<div class="author">
							<div class="name">Lee Miller</div>
							<div class="designaiton">Client Delivery Director</div>
						</div>

					</div>

					<div class="separator"></div>

					<div class="posted_date">Posted 27 Jan 2023</div>
					<div class="readtime">18 min read</div>

					<div class="separator"></div>

					<div class="related_cats">
						<div class="title">Related topics</div>

						<a href="#" class="cat">Transformation</a>
						<a href="#" class="cat">Digital</a>
						<a href="#" class="cat">Sustainability</a>

					</div>

					<div class="separator"></div>

					<div class="share">
						<div class="title">Share this article</div>
						<div class="shortcode">
							<?php echo do_shortcode('[addtoany]') ?>
						</div>
					</div>


				</div>


				<?php while ( have_posts() ) : the_post(); ?>

					<?php the_content() ?>

				<?php endwhile; // end of the loop. ?>


			</div>


			<div class="related-articles">

				<div class="container">
					<div class="title">Related articles</div>

					<div class="articles">

						<?php
							$args = array(  
								'post_type' => 'post',
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
							</div>
						
							<?php endwhile ?>

						<?php endif ?>

					</div>
				</div>
				
			</div>

		</main><!-- #main -->


	</div><!-- #primary -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>