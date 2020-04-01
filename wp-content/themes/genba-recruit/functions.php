<?php
/**
 * genba-recruit functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package genba-recruit
 */

if ( ! function_exists( 'genba_recruit_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function genba_recruit_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on genba-recruit, use a find and replace
	 * to change 'genba-recruit' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'genba-recruit', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'genba-recruit' ),
		'menu-2' => esc_html__( 'SNS', 'genba-recruit' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'genba_recruit_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'genba_recruit_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function genba_recruit_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'genba_recruit_content_width', 700 );
}
add_action( 'after_setup_theme', 'genba_recruit_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function genba_recruit_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'genba-recruit' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'genba-recruit' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Entry', 'genba-recruit' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'genba-recruit' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'genba_recruit_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function genba_recruit_scripts() {
	wp_enqueue_style( 'genba-recruit-style', get_stylesheet_uri() );
	wp_enqueue_style( 'genba-recruit-theme', get_theme_file_uri() . '/theme.css' );
  wp_enqueue_style( 'genba-recruit-page', get_theme_file_uri() . '/page.css' );

	wp_enqueue_script( 'genba-recruit-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'genba-recruit-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
  wp_enqueue_script( 'genba-recruit-scrollfix', get_template_directory_uri() . '/js/scrollfix.js', array(), '20151215', true );
	wp_enqueue_script( 'genba-recruit-smoothscroll', get_template_directory_uri() . '/js/smoothscroll.js', array(), '20151215', true );

  if(is_page_template('page-top.php')){
		wp_enqueue_script( 'genba-recruit-movie', get_template_directory_uri() . '/js/movie.js', array(), '20151215', true );
	}

	if(is_page_template('page-tab.php')){
		wp_enqueue_script( 'genba-recruit-tab', get_template_directory_uri() . '/js/tab.js', array(), '20151215', true );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'genba_recruit_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * create_post_type
 */

function create_post_type() {
 register_post_type( 'interview',
   array(
     'labels' => array(
       'name' => __( 'インタビュー' ),
       'singular_name' => __( 'インタビュー' )
     ),
		 'menu_icon' => 'dashicons-clipboard',
     'supports' => array('title','editor','thumbnail','revisions'),
     'taxonomies' => array('genre-estate','area-estate'),
     'public' => true,
     'has_archive' => true,
     'rewrite' => array('with_front' => false)
   )
 );
}
add_action( 'init', 'create_post_type' );


/* taxonomy　*/

function create_taxonomy() {
	register_taxonomy(
		'job',
   array(
		    'interview'
		),
		array(
      'label' => __( 'ジョブ' ),
      'hierarchical' => true
		)
	);
}
add_action( 'init', 'create_taxonomy' );


/**
 * First Post
 */

function is_first_post(){
	global $wp_query;
	return ($wp_query->current_post === 0);
}
