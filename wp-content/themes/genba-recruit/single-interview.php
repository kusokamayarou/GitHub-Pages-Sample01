<?php
/**
 * The template for displaying all interview single posts
 * @package genba-recruit
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content-interview', get_post_format() );

		endwhile; // End of the loop.
		?>

		<?php if(has_term('engineer','job')) {
			get_template_part('inc/box','talk');
		} ?>

    <?php get_template_part('inc/list-member'); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
