<?php
/**
 * @package Starter
 */

?>

	<article class="post-block">
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
							<img class="img-thumbnail" src="<?php echo get_template_directory_uri();?>/assets/images/single-post/002.jpg" alt="Card image cap">
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
