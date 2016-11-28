<?php
/**
 * starter_blue functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package starter_blue
 */

if ( ! function_exists( 'starter_blue_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function starter_blue_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on starter-blue, use a find and replace
	 * to change 'starter-blue' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'starter-blue', get_template_directory() . '/languages' );

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

	// Add Support WooCommerce
	add_theme_support( 'woocommerce' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'starter-blue' ),
		'secondary' => esc_html__( 'Secondary', 'starter-blue' ),
	) );

	//add class on li
	function add_classes_on_li($classes, $item, $args) {
  		$classes[] = 'nav-item';
  		return $classes;
	}
	add_filter('nav_menu_css_class','add_classes_on_li',1,3);

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
	add_theme_support( 'custom-background', apply_filters( 'starter_blue_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'starter_blue_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function starter_blue_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'starter_blue_content_width', 640 );
}
add_action( 'after_setup_theme', 'starter_blue_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function starter_blue_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar-1', 'starter-blue' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'starter-blue' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar-2', 'starter-blue' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'starter-blue' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
		register_sidebar( array(
			'name'          => esc_html__( 'Footer-1', 'starter-blue' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'starter-blue' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );
		register_sidebar( array(
			'name'          => esc_html__( 'Footer-2', 'starter-blue' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'starter-blue' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );
}
add_action( 'widgets_init', 'starter_blue_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function starter_blue_scripts() {
		$query_args = array(
			'family' => 'Roboto:400,300,500,700|Oxygen:400,300,700',
		);
		wp_enqueue_style( 'starter-blue-google-fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ) );
		wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome/css/font-awesome.min.css' );
  	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
		wp_enqueue_style( 'starter-blue-style', get_stylesheet_uri() );

		wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js');
		wp_enqueue_script( 'tether', '//cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js');
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
		wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr.js');
		wp_enqueue_script( 'ie10-viewport-bug-workaround', get_template_directory_uri() . '/assets/js/ie10-viewport-bug-workaround.js');
		wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js');
		wp_enqueue_script( 'starter-blue-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
		wp_enqueue_script( 'starter-blue-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
}
add_action( 'wp_enqueue_scripts', 'starter_blue_scripts' );

/*
 * Set post views count using post meta
 */
function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}

/*Excerpt length */
function custom_excerpt_more( $length ) {
    global $post;
		return '...<a class="moretag btn-primary btn-sm" href="'.get_permalink($post->ID).'">'. __('continue reading &raquo;</a> ','starter-blue');
}
add_filter( 'excerpt_more', 'custom_excerpt_more', 45 );


/**
 * Apply theme's stylesheet to the visual editor.
 *
 * @uses add_editor_style() Links a stylesheet to visual editor
 * @uses get_stylesheet_uri() Returns URI of theme stylesheet
 */
function cd_add_editor_styles() {
    add_editor_style();
}
add_action( 'init', 'cd_add_editor_styles' );


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
