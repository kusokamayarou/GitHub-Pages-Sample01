<header class="entry-header">
    <?php
      if ( has_post_thumbnail() ) {
        $large_image_url = wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ),'full');
      }
      ?>
  <div class="entry-header-img" style="background-image:url(<?php echo $large_image_url; ?>);">
  </div>
  <?php
  if ( is_single() || is_page()) :
    the_title( '<h1 class="entry-title">', '</h1>' );
  else :
    the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
  endif; ?>
</header><!-- .entry-header -->
