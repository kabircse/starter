<?php
/**
 *
 * @package Starter
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post-block'); ?>>
	<div class="col-sm-12 post-title">
			<?php
			if ( is_single() ) :
				the_title( '<h4 class="entry-title">', '</h4>' );
			else :
				the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
			endif;
			?>
			<span class="tag pull-right comments-number" title="Total Comments" alt="Total Comments"><a href="<?php comments_link();?>">
				<i class="fa fa-comment" aria-hidden="true"></i>  <?php comments_number( '0', '1', '% ' );?></a></span>
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
				<i class="fa fa-calendar" aria-hidden="true"><?php starter_posted_on(); ?></i>
				<i class="fa fa-user" aria-hidden="true"> <?php the_author(); ?></i>
				<i class="fa fa-folder-open-o" aria-hidden="true"><?php the_category(', ');?></i>
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
