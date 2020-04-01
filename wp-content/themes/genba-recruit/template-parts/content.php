<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package genba-recruit
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php get_template_part( 'inc/breadcrumb'); ?>

  <div class="single-content">

      <div class="single-main-content">
        <div class="post-date-box">
          <?php the_time('Y年m月d日'); ?>
        </div>
        <header class="single-entry-header">
            <h1 class="single-entry-title"><?php the_title(); ?></h1>
        </header><!-- .entry-header -->

      	<div class="entry-content">
      		<?php
      			the_content( sprintf(
      				/* translators: %s: Name of current post. */
      				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'genba-recruit' ), array( 'span' => array( 'class' => array() ) ) ),
      				the_title( '<span class="screen-reader-text">"', '"</span>', false )
      			) );

      		?>
      	</div><!-- .entry-content -->
      </div>

      <div class="single-sub-content">
        <div class="side-widget-area" role="complementary">
          <?php dynamic_sidebar( 'sidebar-2' ); ?>
        </div><!-- #footer-widget-area -->
      </div>
  </div>


</article><!-- #post-## -->
