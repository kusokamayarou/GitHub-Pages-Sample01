<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package genba-recruit
 */

?>

	</div><!-- #content -->

	<div class="pagetop">
		<a href="#"><i class="fa fa-angle-up"></i></a>
	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="btn-contact">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">現場サポートへ、ぜひ話を聞きにきてみませんか？</a>
    </div>
    <div class="footer-content ">
      <div class="btn-recruit">
        <a class="shinsotsu" href="https://job.rikunabi.com/2021/company/r813410056/" target="_blank">新卒採用</a>
        <a class="career" href="<?php echo esc_url( home_url( '/' ) ); ?>career">キャリア採用</a>
      </div>
      <div class="footer-widget-area" role="complementary">
        <section class="widget newpost-box widget_rss">
          <h2 class="widget-title">最新のお知らせ</h2>
          <?php echo do_shortcode('[multi-feed-reader template="info" limit="5"]') ?>
        </section>
      	<?php dynamic_sidebar( 'sidebar-1' ); ?>
      </div><!-- #footer-widget-area -->
      <div class="footer-sns">
        <?php wp_nav_menu( array( 'theme_location' => 'menu-2', 'menu_id' => 'sns-menu' ) ); ?>
      </div>
      <div class="site-info">
        <a href="https://www.genbasupport.com/" target="_blank">
          <img src="<?php echo get_theme_file_uri(); ?>/images/logo_white.png" alt="<?php bloginfo( 'name' ); ?>">
        </a>
      </div><!-- .site-info -->
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- Yahoo Code for your Target List -->
<script type="text/javascript" language="javascript">
/* <![CDATA[ */
var yahoo_retargeting_id = 'KBBOA0W0BV';
var yahoo_retargeting_label = 'recruit';
var yahoo_retargeting_page_type = '';
var yahoo_retargeting_items = [{item_id: '', category_id: '', price: '', quantity: ''}];
/* ]]> */
</script>
<script type="text/javascript" language="javascript" src="https://b92.yahoo.co.jp/js/s_retargeting.js"></script>
</body>
</html>
