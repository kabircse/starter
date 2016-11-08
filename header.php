<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!--Google Fonts-->
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<!--Bootstrap CSS-->
<link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_directory_uri());?>/assets/css/bootstrap.min.css" />
<!--FontAwesome Icons-->
<link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_directory_uri());?>/assets/css/font-awesome/css/font-awesome.min.css" />
<?php wp_head(); ?>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'starter' ); ?></a>

	    <header>
	        <div class="blog-head">
	            <div class="container">
	                <div class="col-sm-4">
	                    <a href="<?php echo esc_url( home_url() );?>" class="navbar-brand pull-left site-title"><strong>Starter</strong></a>
	                </div>
	                <div class="col-sm-8">
	                    <nav class="navbar navbar-light pull-right" id="nav1">
	                        <div class="container-fluid">
	                            <button class="navbar-toggler hidden-sm-up pull-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar1">
	                                ☰
	                            </button>
															<?php
																wp_nav_menu(array(
																		'theme_location'  => 'primary',
																		'container' 	      => 'div',
																		'container_class'  => 'collapse navbar-toggleable-xs',
																		'container_id'		 => 'collapsingNavbar1',
																		'menu_class'	    => 'nav nav-inline',
																		'sub_menu_class' => 'nav-item'
																	)
																);
															?>
	                        </div>
	                    </nav>
	                </div>
	        	</div>
	        </div>
	        <!--div class="banner">
	            <div class="container">
	                <div class="col-sm-12">
	                    <div class="page-header">
	                        <img src="http://localhost/wordpress/wp-content/uploads/" alt="banner" class="img-fluid banner-img">
	                    </div>
	                </div>
	            </div>
	        </div-->
		</header><!-- #masthead -->

	<div id="content" class="site-content">
