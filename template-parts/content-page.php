<?php
/**
 * @package Starter
 */

?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('post-block'); ?>>
			<div class="row">
				<div class="col-sm-12 post-title">
						<h2 class="pull-left"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
						<span class="m-l-10"> <?php edit_post_link(' Edit ',' <i class="fa fa-pencil" aria-hidden="true"></i>');?></span>
				</div>
			</div>
			<hr/>

			<div class="row">
				<?php if(has_post_thumbnail()):?>
					<div class="col-sm-12 single-post-img">
							<?php the_post_thumbnail('thumbnails',  array('class' => 'img-thumbnail' ));?>
					</div>
				<?php endif;?>
			</div>

			<div class="row">
					<div class="col-sm-12 ">
							<div class="col-sm-12 single-post-text text text-justify">
									<div class="single-post-text">
										<?php the_content();?>
									</div>
							</div>
					</div>
			</div>
</article>
