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
														<i class="fa fa-calendar" aria-hidden="true"><?php the_date();?></i>
														<i class="fa fa-user" aria-hidden="true"> <?php the_author();?></i>
														<i class="fa fa-folder-open-o" aria-hidden="true"> <?php the_category(', ');?></i>
														<i class="fa fa-tags" aria-hidden="true"> <?php the_tags();?></i>
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
														<!--div class="col-sm-12 similar-post-slide">
																<section class="container p-t-3">
																		<div class="row">
																				<div class="col-lg-12">
																						<h5>Similar Posts</h5>
																				</div>
																		</div>
																</section>
																<section class="carousel slide" data-ride="carousel" id="postsCarousel">
																		<div class="container">
																				<div class="row">
																						<div class="col-xs-12 text-md-right lead">
																								<a class="btn btn-secondary-outline prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
																								<a class="btn btn-secondary-outline next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
																						</div>
																				</div>
																		</div>
																		<div class="container p-t-0 m-t-2 carousel-inner">
																				<div class="row row-equal carousel-item active m-t-0">
																						<div class="col-md-4 similar-post">
																								<div class="card">
																										<div class="card-img-top card-img-top-250">
																												<img class="img-fluid" src="http://i.imgur.com/EW5FgJM.png" alt="Carousel 1">
																										</div>
																										<div class="card-block p-t-2">
																												<h6 class="small text-wide p-b-2"><a>Insight a view of theories bd stall</a></h6>
																										</div>
																								</div>
																						</div>
																						<div class="col-md-4 similar-post">
																								<div class="card">
																										<div class="card-img-top card-img-top-250">
																												<img class="img-fluid" src="http://i.imgur.com/Hw7sWGU.png" alt="Carousel 2">
																										</div>
																										<div class="card-block p-t-2">
																												<h6 class="small text-wide p-b-2"><a>Development your theme of studies for great learning point</a></h6>
																										</div>
																								</div>
																						</div>
																						<div class="col-md-4 similar-post">
																								<div class="card">
																										<div class="card-img-top card-img-top-250">
																												<img class="img-fluid" src="http://i.imgur.com/g27lAMl.png" alt="Carousel 3">
																										</div>
																										<div class="card-block p-t-2">
																												<h6 class="small text-wide p-b-2"><a>Development</a></h6>
																										</div>
																								</div>
																						</div>
																				</div>
																				<div class="row row-equal carousel-item m-t-0">
																						<div class="col-md-4 similar-post">
																								<div class="card">
																										<div class="card-img-top card-img-top-250">
																												<img class="img-fluid" src="//visualhunt.com/photos/l/1/office-student-work-study.jpg" alt="Carousel 4">
																										</div>
																										<div class="card-block p-t-2">
																												<h6 class="small text-wide p-b-2">Another</h6>
																										</div>
																								</div>
																						</div>
																						<div class="col-md-4 similar-post">
																								<div class="card">
																										<div class="card-img-top card-img-top-250">
																												<img class="img-fluid" src="//visualhunt.com/photos/l/1/working-woman-technology-computer.jpg" alt="Carousel 5">
																										</div>
																										<div class="card-block p-t-2">
																												<h6 class="small text-wide p-b-2"><span class="pull-xs-right">12.04</span> Category 1</h6>
																										</div>
																								</div>
																						</div>
																						<div class="col-md-4  similar-post fadeIn wow">
																								<div class="card">
																										<div class="card-img-top card-img-top-250">
																												<img class="img-fluid" src="//visualhunt.com/photos/l/1/people-office-team-collaboration.jpg" alt="Carousel 6">
																										</div>
																										<div class="card-block p-t-2">
																												<h6 class="small text-wide p-b-2">Category 3</h6>
																										</div>
																								</div>
																						</div>
																				</div>
																		</div>
																</section>
														</div> -->
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
