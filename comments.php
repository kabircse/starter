<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package starterblue
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div class="comments-section">
		<div class="container">
			<p>
					<a class="btn btn-primary collapsed" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
	 					Make your comment
					</a>
			</p>
				<div class="row">
					<div class="col-md-12 comments-list">
						<div id="comments" class="comments-area">
							<?php
									// If comments are closed and there are comments, let's leave a little note, shall we?
									if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
										<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'starterblue' ); ?></p>
									<?php
									endif;
									$comment_args = array(
											'fields' => apply_filters( 'comment_form_default_fields', array(
											'author' => '<div class="form-group row">' . '<label for="author" class="col-sm-2 col-form-label">' . __( 'Name','starterblue' ) . ( $req ? '<span>*<span/>' : '' ) . '</label> ' .
							        '<div class="col-sm-10"><input id="author" name="author" class="form-control" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '"  placeholder="Type Your Name"' . $aria_req . ' /></div></div>',
									    'email'  => '<div class="form-group row">' .
				              '<label for="email" class="col-sm-2 col-form-label">' . __( 'Email','starterblue' ) . ( $req ? '<span>*</span>' : '' ) . '</label> ' .
				              '<div class="col-sm-10"><input id="email" class="form-control" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" placeholder="Type Your Email"' . $aria_req . ' />'.'</div></div>',
									    'url'    => '' ) ),
									    'comment_field' => '<div class="form-group row">' .
				              '<label for="comment" class="col-sm-2 col-form-label">' . __( 'Comment','starterblue' ) . ( $req ? '<span>*</span>' : '' ) .'</label>' .
				              '<div class="col-sm-10"> <textarea class="form-control" placeholder="Type Your Comment" id="comment" name="comment" rows="8" aria-required="true"></textarea>' .
				              '</div></div>',
									    'comment_notes_after' => '',
									);?>
									<div class="collapse" id="collapseExample">
										<?php	comment_form($comment_args); ?>
									</div>
							<?php
							if ( have_comments() ) : ?>
								<h3 class="comments-title">
									<?php
										printf( // WPCS: XSS OK.
											esc_html( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'starterblue' ) ),
											number_format_i18n( get_comments_number() ),
											'<span>' . get_the_title() . '</span>'
										);
									?>
								</h3>

								<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
									<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
										<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'starterblue' ); ?></h2>
										<div class="nav-links">
											<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'starterblue' ) ); ?></div>
											<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'starterblue' ) ); ?></div>
										</div><!-- .nav-links -->
									</nav><!-- #comment-nav-above -->
								<?php endif; // Check for comment navigation. ?>

								<ol class="comment-list">
									<?php
										wp_list_comments( array(
											'style'      => 'ol',
											'short_ping' => true,
										) );
									?>
								</ol><!-- .comment-list -->

								<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
									<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
										<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'starterblue' ); ?></h2>
										<div class="nav-links">

											<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'starterblue' ) ); ?></div>
											<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'starterblue' ) ); ?></div>
										</div><!-- .nav-links -->
									</nav><!-- #comment-nav-below -->
								<?php
								endif; // Check for comment navigation.
							endif; // Check for have_comments().?>
					</div><!-- .comments-area -->
			</div><!-- .comments-list -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .comments-section -->
