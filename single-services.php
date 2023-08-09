<?php

defined( 'ABSPATH' ) || exit;

get_header();

$meta_title = carbon_get_post_meta($post->ID, 'banner_title');
$meta_desc = carbon_get_post_meta($post->ID, 'banner_desc');
$meta_image = carbon_get_post_meta($post->ID, 'banner_image');


?>

<div class="wrapper single-blog-page single-service-page">

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
						<a href="<?php echo home_url('/services') ?>">Services</a>
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


				<?php while ( have_posts() ) : the_post(); ?>

					<?php the_content() ?>

				<?php endwhile; // end of the loop. ?>


			</div>



		</main><!-- #main -->



	</div><!-- #primary -->

</div><!-- #page-wrapper -->

<?php get_footer();

