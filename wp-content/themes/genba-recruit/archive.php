<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package genba-recruit
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php get_template_part( 'inc/breadcrumb'); ?>

		<?php
		if ( have_posts() ) : ?>

      <div class="news-list">
        <div class="news-list-box">
          <?php the_archive_title( '<h1 class="news-list-title">', '</h1>' );					the_archive_description( '<div class="archive-description">', '</div>' );
  				?>
          <ul>
			<?php
			while ( have_posts() ) : the_post();
        echo '<li class="news-list-item"><a href="' . get_the_Permalink() . '">';
        echo get_the_title() . '</a><span class="post-date">';
        echo get_the_time('Y年m月d日') . '</span></li>';
			endwhile; ?>

          </ul>
        </div>
      </div>

      <?php
      the_posts_navigation();
    endif; ?>

</article><!-- #post-## -->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
