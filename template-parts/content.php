<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starter
 */

?>
	<article class="post-block">
		<div class="col-sm-12 post-title">
				<?php
				if ( is_single() ) :
					the_title( '<h2 class="entry-title">', '</h2>' );
				else :
					the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
				endif;
				?>
				<?php edit_post_link(' Edit ',' <i class="fa fa-pencil" aria-hidden="true"></i>');?>
				<span class="tag tag-default pull-right" title="Total Comments" alt="Total Comments"> <a href="<?php comments_link();?>"><?php comments_number( '0', '1', '% ' );?></a></span>
		</div>
		<div class="row">
			<div class="col-sm-3 col-xs-12 post-img">
				<a src="<?php the_permalink();?>" alt="<?php the_title_attribute();?>">
					<?php if(has_post_thumbnail()){?>
						<?php the_post_thumbnail('medium',  array('class' => 'img-thumbnail' ));?>
					<?php }
						else
							echo '<img src="'.get_template_directory_uri().'/assets/images/common/no-image.png" class="img-thumbnail wp-post-image" alt="01">';
						?>
			    </a>
			</div>
			<div class="col-sm-8  col-xs-12 post-tag-text">
				<div class="post-tag">
					<i class="fa fa-calendar" aria-hidden="true"></i> <time><?php the_date(); ?></time>
					<i class="fa fa-user" aria-hidden="true"></i> <?php the_author(); ?>
					<i class="fa fa-folder-open-o" aria-hidden="true"></i> <?php the_category(', ');?>
				</div>
				<div class="post-short-text text-justify">
					<?php
						the_excerpt(40);
					?>
				</div>
				<!--footer class="entry-footer">
					<php starter_entry_footer(); ?>
				</footer--><!-- .entry-footer -->
		    </div>
	  </div>
   </article><!-- #post-## -->
