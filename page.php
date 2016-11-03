<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starter
 */

 get_header(); ?>
 <section class="main">
 	<div class="container">
 		<div class="row">
 				<div class="container">
 					<div class="col-md-8 col-xs-12 post-lists">
 						<?php
 						if ( have_posts() ) :
 							/* Start the Loop */
 							while ( have_posts() ) : the_post();
 									get_template_part( 'template-parts/content', 'page' );
 							endwhile;

						else :
							get_template_part( 'template-parts/content', 'none' );

 						endif; ?>
 					</div><!-- #main -->

 					<div class="col-md-4 col-xs-12 sidebar">
 					<?php
 							get_sidebar();
 						?>
 					</div>
 	    	</div>
 	   </div>
 	</div>
 </section>
 <!-- /section -->
 <?php
 	get_footer();
