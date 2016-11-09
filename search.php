<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package starterblue
 */

 get_header(); ?>
 <section class="main">
 	<div class="container">
 		<div class="row">
 				<div class="container">
 					<div class="col-md-8 col-xs-12 post-lists">
						<?php
							if ( have_posts() ) { ?>
								<header class="page-header">
									<h2 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'starterblue' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
								</header><!-- .page-header -->
								<hr/>
	 						<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();
								get_template_part( 'template-parts/content', 'search' );
							endwhile;
						}
							else{
								get_template_part( 'template-parts/content', 'none' );
							}
						?>
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
