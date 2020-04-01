<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package genba-recruit
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php get_template_part('inc/entry','header'); ?>

  <?php get_template_part( 'inc/breadcrumb'); ?>


    <?php if(is_page('about')){
      get_template_part('page/about');
    }
    elseif(is_page('member')){
      get_template_part('page/member');
    }
    elseif(is_page('job')){
      get_template_part('page/job');
    }
    elseif(is_page('step')){
      get_template_part('page/step');
    }
    elseif(is_page('company')){
      get_template_part('page/company');
    } else { ?>
      <div class="entry-content">
		      <?php	the_content(); ?>
	   </div><!-- .entry-content -->
		<?php	} ?>


</article><!-- #post-## -->
