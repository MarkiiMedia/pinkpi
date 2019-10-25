<?php /* Template Name: markiiFrontPage */ ?>

<?php

get_header();
?>

	<div id="primary-full-markii" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//Her udkommenterer jeg lige sidebar, da jeg ikke gide have den på min frontpage
//get_sidebar();
get_footer();
