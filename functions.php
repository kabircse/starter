<?php
/**
 * Starter functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Starter
 */

if ( ! function_exists( 'starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function starter_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Starter, use a find and replace
	 * to change 'starter' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'starter', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'starter' ),
		'secondary' => esc_html__( 'Secondary', 'starter' ),
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
	add_theme_support( 'custom-background', apply_filters( 'starter_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'starter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'starter_content_width', 640 );
}
add_action( 'after_setup_theme', 'starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function starter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar-1', 'starter' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'starter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar-2', 'starter' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'starter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
		register_sidebar( array(
			'name'          => esc_html__( 'Footer-1', 'starter' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'starter' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );
		register_sidebar( array(
			'name'          => esc_html__( 'Footer-2', 'starter' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'starter' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );
}
add_action( 'widgets_init', 'starter_widgets_init' );


//Custom functions
/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	 /*
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'blog-header', 900, 300, array('center','center')); //blog Image
		add_image_size( 'portfolio-thumbnail', 560, 450, array('center','center')); //Portfolio Image
	  add_image_size( 'blog-thumbnail', 480, 300, array('center','center')); //Blog Image
		add_image_size( 'team-thumbnail', 380, 380, array('top','center')); //Portfolio Image
	*/

/**
 * Enqueue scripts and styles.
 */
function starter_scripts() {
	wp_enqueue_style( 'starter-style', get_stylesheet_uri() );

	wp_enqueue_script( 'starter-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'starter-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'starter_scripts' );

/*makign pagination*/
function pagination($pages = '', $range = 4)
{
     $showitems = ($range * 2)+1;
     global $paged;
     if(empty($paged)) $paged = 1;
     if($pages == ''){
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }
     if(1 != $pages){
         echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}
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
	return '...<a class="moretag" href="'.get_permalink($post->ID).'"> continue reading &raquo;</a> ';
}
add_filter( 'excerpt_more', 'custom_excerpt_more', 45 );

function social_sharing_buttons($content) {
	global $post;
	if(is_singular() || is_home()){
		// Get current page URL
		$currentURL = urlencode(get_permalink());
		// Get current page title//crunchify
		$currentTitle = str_replace( ' ', '%20', get_the_title());
		// Get Post Thumbnail for pinterest
		$currentThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
		// Construct sharing URL without using any script
		$twitterURL = 1;//'https://twitter.com/intent/tweet?text='.$currentTitle.'&amp;url='.$currentURL.'&amp;via=current';
		$facebookURL = 1;//'https://www.facebook.com/sharer/sharer.php?u='.$currentURL;
		$googleURL = 1;//'https://plus.google.com/share?url='.$currentURL;
		$youtubeURL = 1;//'https://bufferapp.com/add?url='.$currentURL.'&amp;text='.$currentTitle;
		$linkedInURL = 1;//'https://www.linkedin.com/shareArticle?mini=true&url='.$currentURL.'&amp;title='.$currentTitle;
		$pinterestURL = 1;//'https://pinterest.com/pin/create/button/?url='.$currentURL.'&amp;media='.$currentThumbnail[0].'&amp;description='.$currentTitle;

		// Add sharing button at the end of page/page content
		$content .= '<div class="current-social">Share on: ';
		$content .= '<a class="btn btn-outline-primary btn-md m-l-5" title="FaceBook" href="'.$facebookURL.'" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>';
		$content .= '<a class="btn btn-outline-danger btn-md m-l-5" title="Google" href="'.$googleURL.'" target="_blank"><i class="fa fa-google-plus-official" aria-hidden="true"></i></a>';
		$content .= '<a class="btn btn-outline-primary btn-md m-l-5" title="Tweet" href="'.$twitterURL.'" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>';
		$content .= '<a class="btn btn-outline-danger btn-md m-l-5" title="youtube" href="'.$youtubeURL.'" target="_blank"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>';
		$content .= '<a class="btn btn-outline-primary btn-md m-l-5" title="linkedin" href="'.$linkedInURL.'" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>';
		$content .= '<a class="btn btn-outline-danger btn-md m-l-5" title="pinterest" href="'.$pinterestURL.'" target="_blank"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>';
		$content .= '</div>';
		return $content;
	}else{
		// if not a post/page then don't include sharing button
		return $content;
	}
}
add_filter( 'the_content', 'social_sharing_buttons');

/*Add social links to user profile*/
function my_social_networks($networks){
		//facebook
		$networks['facebook'] = 'FaceBook';
		//twitter
		$networks['twitter'] = 'Twitter';
		return $networks;
}
add_filter( 'user_contactmethods', 'my_social_networks', 10,1);

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
