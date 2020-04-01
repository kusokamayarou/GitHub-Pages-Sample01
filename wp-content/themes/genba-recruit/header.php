<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package genba-recruit
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
<script>_strwpcnf_=["https://webpush.satori.cloud","da738007"]</script>
<script src="https://webpush.satori.cloud/js/webpush.js" defer></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'genba-recruit' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
      <div class="site-branding-content">
        <?php
  			if ( is_front_page() || is_home() ) : ?>
  				<h1 class="site-title">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
              <img src="<?php echo get_theme_file_uri(); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>">
              <span class="sub-site-title">新卒/キャリア採用</span>
            </a>
          </h1>
  			<?php else : ?>
  				<p class="site-title">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
              <img src="<?php echo get_theme_file_uri(); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>">
              <span class="sub-site-title">新卒/キャリア採用</span>
            </a>
          </p>
  			<?php
        endif;
        ?>
      </div>

		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-navicon"></i>Menu</button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
