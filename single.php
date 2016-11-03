<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Starter
 */

 get_header(); ?>


 <section class="main">
 	<div class="container">
 		<div class="row">
					<div class="col-md-8 col-xs-12 post-lists">
	 						<?php	if ( have_posts() ) :?>
								<?php	while ( have_posts() ) : the_post();?>
									<article class="post-block">
									<div class="row">
										<?php if(has_post_thumbnail()):?>
											<div class="col-sm-12 single-post-img">
													<img class="img-thumbnail" src="<?php echo get_template_directory_uri();?>/assets/images/single-post/002.jpg" alt="Card image cap">
											</div>
										<?php endif;?>
									</div>
										<div class="row">
											<div class="col-sm-12 post-title">
													<h2 class="pull-left"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
											</div>

										</div>
										<div class="row">
										    <div class="col-sm-12 ">
												<div class="post-tag">
														<i class="fa fa-calendar" aria-hidden="true"></i> <time><?php the_date();?></time>
														<i class="fa fa-user" aria-hidden="true"></i> <?php the_author();?>
														<i class="fa fa-folder-open-o" aria-hidden="true"></i> <?php the_category(', ');?>
														<i class="fa fa-tags" aria-hidden="true"></i> <?php the_tags();?>
                                                        <?php edit_post_link(' Edit ',' <i class="fa fa-pencil" aria-hidden="true"></i>');?>
												</div>
												<div class="col-sm-12 single-post-text text text-justify">
														<div class="single-post-text">
															<?php the_content();?>
															<hr/>
														</div>
														<div class="author-biography">
																		<p>Writter :: <?php echo the_author();?></p>
																		<div class="tag pull-sm-left author-img">
																			<img class="img img-thumbnail" src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ), 32 ); ?>" alt="Card image cap">
																		</div>
																<div class="author-description">
																		<p class="text-justify"><i><?php the_author_meta('description');?></i></p>
																		<div class="author-history">
																				<p>Writting since:
																					<span class="tag tag-info">
																					<?php $registered = date_i18n( "M m, Y", strtotime( get_the_author_meta( 'user_registered') ) );
																					    echo $registered;?>
																					</span>
																				</p>
																				<p>Total Posts: <span class="tag tag-info"><?php count_user_posts(the_author_ID());?></span></p>
																				<p>Total Comments: <span class="tag tag-warning"><?php wp_count_comments(the_author_ID());?></span></p>
																		</div>
																		<p>URL: <a target="_blank" href="<?php the_author_meta('url');?>"><?php the_author_meta('url');?></a></p>
																</div>
														</div>
														<div class="col-sm-12 similar-post-slide">
																<section class="carousel slide" data-ride="carousel" id="postsCarousel">
																		<div class="container">
																				<div class="row">
            																<h5>Similar Posts</h5>
																						<div class="col-xs-12 text-md-right lead">
																								<a class="btn btn-secondary-outline prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
																								<a class="btn btn-secondary-outline next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
																						</div>
																				</div>
																		</div>
																		<div class="container p-t-0 m-t-2 carousel-inner">
																				<div class="row row-equal carousel-item active m-t-0">
                                          <?php
                                              //related post with tags
                                              global $post;
                                              $tags = wp_get_post_tags( $post_id = $post->ID);
                                              if($tags){
                                                $first_tag = $tags[0]->term_id;
                                                $args = array(
                                                  'tag__in' => array($first_tag),
                                                  'post__not_in' => array($post->ID),
                                                  'posts_per_page' => 3,
                                                  'orderby' => 'asc'
                                                );
                                                $related_posts = new WP_Query($args);
                                                if($related_posts->have_posts()){
                                                    $slide = 1;
                                                    while ($related_posts->have_posts()) : $related_posts->the_post();
                                                        ?>
              																						<div class="col-md-4 similar-post">
              																								<div class="card">
              																										<div class="card-img-top card-img-top-250">
                                                                    <?php if(has_post_thumbnail())
              																											        the_post_thumbnail('medium',  array('class' => 'img-fluid' ));
                                                                          else
                                                                            echo '<img width="300" height="70" src="'.get_template_directory_uri().'/assets/images/common/no-image.png" class="img-fluid wp-post-image" alt="01">';
                                                                  ?>
              																										</div>
              																										<div class="card-block p-t-2">
              																												<h6 class="small text-wide p-b-2"><a href="<?php esc_url(get_permalink());?>"><?php the_title();?></a></h6>
              																										</div>
              																								</div>
              																						</div>
                                                      <?php
                                                  endwhile;
                                                }
                                                wp_reset_query();
                                              }
                                          ?>
																				</div>
																				<div class="row row-equal carousel-item m-t-0">
                                          <?php
                                              //related post with tags
                                              global $post;
                                              $tags = wp_get_post_tags( $post_id = $post->ID);
                                              if($tags){
                                                $first_tag = $tags[0]->term_id;
                                                $args = array(
                                                  'tag__in' => array($first_tag),
                                                  'post__not_in' => array($post->ID),
                                                  'posts_per_page' => 3,
                                                  'orderby' => 'desc'
                                                );
                                                $related_posts = new WP_Query($args);
                                                if($related_posts->have_posts()){
                                                    $slide = 1;
                                                    while ($related_posts->have_posts()) : $related_posts->the_post();
                                                        ?>
              																						<div class="col-md-4 similar-post">
              																								<div class="card">
              																										<div class="card-img-top card-img-top-250">
              																												<?php the_post_thumbnail('medium',  array('class' => 'img-fluid' ));?>
              																										</div>
              																										<div class="card-block p-t-2">
              																												<h6 class="small text-wide p-b-2"><a href="<?php esc_url(get_permalink());?>"><?php the_title();?></a></h6>
              																										</div>
              																								</div>
              																						</div>
                                                      <?php
                                                  endwhile;
                                                }
                                                wp_reset_query();
                                              }
                                          ?>
																				</div>
																		</div>
																</section>
														</div>
														<?php
															// If comments are open or we have at least one comment, load up the comment template
															if ( comments_open() || '0' != get_comments_number() )
																comments_template();
														?>
												</div>
										</div>
									  </div>
								</article>
								<?php endwhile;?>
						<?php endif;?>
					</div>
					<div class="col-md-4 col-xs-12 sidebar">
					<?php
							get_sidebar();
						?>
					</div>
 	  </div>
 	</div>
 </section>
 <!-- /section -->
 <?php
 	get_footer();
