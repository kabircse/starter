<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter_blue
 */
?>
<aside class="sidebar-aside">
	<div class="search-bar">
		<form class="form-inline" action="<?php esc_url(home_url('/'))?>">
			<div class="form-group">
				<input type="text" class="form-control" method="get" id="search" name="s" placeholder="Search">
				<button type="submit" class="btn btn-info search-btn"><?php _e('Search','starter-blue');?></button>
			</div>
		</form>
	</div>

	<?php if (  is_dynamic_sidebar( 'sidebar-1' ) ) {
		dynamic_sidebar( 'sidebar-1' );
	?>
			<ul class="nav nav-tabs" id="collapse-tab">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" data-target="#popular"><?php _e('Popular','starter-blue');?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" data-target="#recent"><?php _e('Recent','starter-blue');?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" data-target="#comments"><?php _e('Comments','starter-blue');?></a>
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="popular">
					<div class="popular-posts">
						<ul class="list-group">
							<?php
								query_posts('meta_key=post_views_count&posts_per_page=5&orderby=meta_value_num&order=DESC');
								if(have_posts()):
									while (have_posts()):the_post()?>
										<li class="list-group-item">
												<span class="tag pull-sm-left">
													<?php if(has_post_thumbnail()){?>
													<?php the_post_thumbnail(array(50, 50),  array('class' => 'img sidebar-post-img' ));
												  }else{
														echo '<img width="50" height="50" class="img sidebar-post-img" src="'.get_template_directory_uri().'/assets/images/common/no-image.png" class="img-thumbnail wp-post-image" alt="01">';
													}?>
												</span>

											<a class="text-info" href="<?php the_permalink(); ?>" alt="<?php the_title_attribute();?>" rel="bookmark"><?php the_title();?></a><br/>
											<span><a href="<?php comments_link();?>"><?php comments_number( '0 Comments', '1 Comments', '% Comments' );?></a></span>
										</li>
										<?php
									endwhile;
								endif;
								wp_reset_query();
							?>
						</ul>
					</div>
				</div>
				<div class="tab-pane" id="recent">
					<div class="recent-posts">
						<ul class="list-group">
							<?php
								$args = array('numberposts' => 5 );
								$recent_posts = wp_get_recent_posts($args);
								foreach ($recent_posts as $post) {?>
									<li class="list-group-item">
										<span class="tag pull-sm-left">
											<?php if(has_post_thumbnail()){?>
											<?php echo get_the_post_thumbnail($post['ID'], array(50, 50),  array('class' => 'img sidebar-post-img' ));
										}
										else{
											echo '<img width="50" height="50" class="img sidebar-post-img" src="'.get_template_directory_uri().'/assets/images/common/no-image.png" class="img-thumbnail wp-post-image" alt="01">';
										}?>
										</span>
										<a class="text-info" href="<?php echo get_permalink($post['ID']);?>"><?php echo get_the_title($post['ID']); ?></a><br/>
										<span><a href="<?php comments_link();?>"><?php comments_number( '0 Comments', '1 Comments', '% Comments' );?></a></span>
									</li>
								<?php
							 }
							?>
						</ul>
					</div>
				</div>
				<div class="tab-pane" id="comments">
					<div class="recent-comments">
						<ul class="list-group">
							<?php
								$args = array('number' => 5 );
								$recent_comments = get_comments($args);
								foreach ($recent_comments as $comment) {?>
									<li class="list-group-item">
										<span class="tag pull-sm-left">
											<img class="img sidebar-post-img img-circle" width="50" height="50" src="<?php echo get_avatar_url($comment);?>" alt="Avatar">
										</span>
										<?php echo $comment->comment_author;?>, <a class="text-info" href="<?php echo get_post_permalink($comment->comment_post_ID);?>"><?php echo get_the_title($comment->comment_post_ID,25);?></a><br/>
										<span><?php echo comment_excerpt($comment->comment_ID);?></span>
									</li>
								<?php }
							?>
						</ul>
					</div>
				</div>
			</div>
	<?php }?>
	<?php if(is_dynamic_sidebar('sidebar-2'))?>
	<?php dynamic_sidebar( 'sidebar-2' )?>
</aside>
