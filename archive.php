<?php
/**
 * The template for displaying archive pages.
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
				 <h4>Archives:<?php wp_title();?></h4>
				 <div class="col-md-8 col-xs-12 post-lists">
					 <?php
					 	if ( have_posts() ) :?>
								<?php	 /* Start the Loop */
									 while ( have_posts() ) : the_post();
											 get_template_part( 'template-parts/content', '' );
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
