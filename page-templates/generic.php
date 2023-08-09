<?php
/**
 * Template Name: Generic Page
 *
 * Template for displaying a generic page.
 *
 * 
 */

defined( 'ABSPATH' ) || exit;

get_header('generic');


?>

<div class="wrapper page-wrapper generic-page">

	<div id="primary">

		<main class="site-main" id="main" role="main">

			<div class="container generic-page-container">
				<?php

					wp_reset_query(); 
					while ( have_posts() ) : the_post();
						the_content();
					endwhile; // End of the loop.

				?>
			</div>
				
        </main><!-- #main -->

</div><!-- #primary -->

</div><!-- #page-wrapper -->

<?php get_footer();