<?php
/**
 * Template Name: タブ切り替え用ページ
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php
  			while ( have_posts() ) : the_post();
        get_template_part('inc/entry','header');
        endwhile; // End of the loop.
  			?>
				<?php get_template_part( 'inc/breadcrumb'); ?>


        <div class="entry-content">

          <?php
            $id = get_the_ID();
            $childloop = array(
              'post_type' => 'page',
            	'post_parent' => $id,
              'posts_per_page' => -1,
              'orderby' => 'menu_order',
              'order' => 'ASC',
            );
            $wp_query = new WP_Query($childloop);
            if ( $wp_query->have_posts() ) {
            	echo '<div class="tab-list"><div class="tab-btn">';
            	while ( $wp_query->have_posts() ) {
            		$wp_query->the_post();
                if(is_first_post()) {
                  echo '<div class="tab-btn-item select">';
                } else {
                  echo '<div class="tab-btn-item">';
                }
            		echo get_the_title() . '</div>';
            	}
            	echo '</div></div>';
            } else {
            }
            wp_reset_postdata(); ?>

            <?php
              $wp_query = new WP_Query($childloop);
              if ( $wp_query->have_posts() ) {
              	echo '<div class="tab-content">';
              	while ( $wp_query->have_posts() ) {
              		$wp_query->the_post();
                  if(is_first_post()) {
            				echo '<div class="tab-content-item">';
            			} else {
            				echo '<div class="tab-content-item" style="display:none;">';
            			}
                  echo the_content();
                  echo '</div>';
              	}
              	echo '</div>';
              } else {
              }
              wp_reset_postdata(); ?>


       </div><!-- .entry-content -->

				<?php
             $careerloop = array(
                    'post_type' => 'post',
                    'posts_per_page' => 5,
                    'category_name' => 'career',
                  );
                  $wp_query = new WP_Query($careerloop);
                  if ( $wp_query->have_posts() ) {
                    echo '<div class="news-list"><div class="news-list-box"><h2 class="news-list-title">キャリア採用のお知らせ</h2><ul>';
                    while ( $wp_query->have_posts() ) {
                      $wp_query->the_post();
                      echo '<li class="news-list-item"><a href="' . get_the_Permalink() . '">';
                      echo get_the_title() . '</a><span class="post-date">';
                      echo get_the_time('Y年m月d日') . '</span></li>';
                    }
                    echo '</ul></div></div>';
                  }
                  wp_reset_postdata();
           ?>
      </article><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
