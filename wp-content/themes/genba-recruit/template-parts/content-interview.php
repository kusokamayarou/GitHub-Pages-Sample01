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

  <header class="entry-header">
    <div class="entry-header-img">
    </div>
    <h1 class="entry-title">メンバーインタビュー</h1>
  </header><!-- .entry-header -->

  <?php get_template_part( 'inc/breadcrumb'); ?>


  <div class="interview-header">
    <div class="interview-header-img pc-box">
      <?php
      $headerimage = get_field('header-image');
      $size = 'full'; // (thumbnail, medium, large, full or custom size)
      if( $headerimage ) {
      	echo wp_get_attachment_image( $headerimage, $size );
      }
       ?>
    </div>
    <div class="interview-header-ttl">
      <h2 class="interview-title"><?php the_field('interview-title') ?></h2>
      <div class="interview-header-img sp-box">
        <?php
        $headerimage = get_field('header-image');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if( $headerimage ) {
          echo wp_get_attachment_image( $headerimage, $size );
        }
         ?>
      </div>
      <div class="interview-header-description">
        <div class="catchcopy">
          <?php the_field('catchcopy') ?>
        </div>
        <div class="history">
          <?php the_field('history') ?>
        </div>
      </div>
    </div>
  </div>

  <div class="interview-content">
    <div class="entry-content">
      <?php the_content(); ?>
    </div><!-- .entry-content -->
    <div class="profile">
      <div class="profile-img">
        <?php
        $profileimage = get_field('profile-image');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if( $profileimage ) {
          echo wp_get_attachment_image( $profileimage, $size );
        }
         ?>
      </div>
      <div class="profile-txt">
        <p>
          <?php the_field('profile') ?>
        </p>
        <div class="hobby">
          <h4>趣味</h4>
          <p><?php the_field('hobby') ?></p>
        </div>
        <div class="motto">
          <h4>好きな言葉</h4>
          <p><?php the_field('motto') ?></p>
        </div>
        <div class="schedule">
          <h3 class="schedule-ttl">一日のスケジュール</h3>
          <?php the_field('schedule') ?>
        </div>
      </div>
    </div><!-- .profile -->
  </div>

  <div class="interview-btn">
    <div class="interview-btn-img pc-box">
      <?php
      $btnimage = get_field('btn-image');
      $size = 'full'; // (thumbnail, medium, large, full or custom size)
      if( $btnimage ) {
      	echo wp_get_attachment_image( $btnimage, $size );
      }
       ?>
    </div>
    <div class="interview-btn-txt">
      <div class="btn sp-box">
        <?php
        $btnimage = get_field('btn-image');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if( $btnimage ) {
          echo wp_get_attachment_image( $btnimage, $size );
        }
         ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">話を聞きに行く</a>
      </div>
      <p><?php the_field('btn-text') ?></p>
      <div class="btn pc-box">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">話を聞きに行く</a>
      </div>
    </div>
  </div>

</article><!-- #post-## -->
