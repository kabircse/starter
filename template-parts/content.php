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
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
				?>
				<span class="tag tag-default pull-right">7</span>
		</div>
		<div class="row">
			<div class="col-sm-3 col-xs-12 post-img">
				<a  src="<?php the_permalink();?>" alt="<?php the_title_attribute();?>">
					<?php the_post_thumbnail('medium',  array('class' => 'img-thumbnail' ));?>
			    </a>
			</div>
			<div class="col-sm-8  col-xs-12 post-tag-text">
				<div class="post-tag">
					<i class="fa fa-calendar" aria-hidden="true"><?php starter_posted_on(); ?></i>
					<i class="fa fa-user" aria-hidden="true"> <?php the_author(); ?></i>
					<i class="fa fa-folder-open-o" aria-hidden="true"><?php the_category(', ');?></i>
				</div>
				<div class="post-short-text text-justify">
					<?php
						the_excerpt();
					?>
				</div>
				<!--footer class="entry-footer">
					<php starter_entry_footer(); ?>
				</footer--><!-- .entry-footer -->
		    </div>
	  </div>
   </article><!-- #post-## -->
