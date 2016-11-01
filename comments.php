<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starter
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
				<!--p>Comments Section</p-->
				<p>
						<a class="btn btn-primary collapsed" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
									Make your comment
						</a>
				</p>
				<form class="collapse" id="collapseExample">
						<div class="form-group row">
								<label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
								<div class="col-sm-10">
										<input type="text" class="form-control" id="inputEmail3" placeholder="Type Your Name">
								</div>
						</div>
						<div class="form-group row">
								<label for="inputPassword3" class="col-sm-2 col-form-label">E-mail</label>
								<div class="col-sm-10">
										<input type="email" class="form-control" id="inputPassword3" placeholder="Type Your E-mail">
								</div>
						</div>
						<div class="form-group row">
								<label for="inputPassword3" class="col-sm-2 col-form-label">Comment</label>
								<div class="col-sm-10">
										<textarea class="form-control" id="inputPassword30" placeholder="Type Your Comment" rows="8"></textarea>
								</div>
						</div>
						<div class="form-group row">
								<label for="inputPassword3" class="col-sm-2 col-form-label"></label>
								<div class="col-sm-10">
										<input class="form-control btn btn-success" id="inputPassword32" value="Submit">
								</div>
						</div>
				</form>
				<div class="row">
				<div class="col-md-12 comments-list">
						<p>Previous Comments</p>
						<div class="card parent-comments">
										<div class="col-sm-2 pull-sm-left comment-author">
														<img class="img img-thumbnail" src="assets/images/thumb/thumb-03.jpg" alt="Author Pic">
										</div>
										<div class="card-block comment">
												<a href="#">Admin says, </a>
												<p>Nice post. Write again this type of post. We are with you for taking action against this rules.</p>
												<p class="btn btn-outline-success btn-sm">Reply</p>
										</div>
						</div>
						<div class="card offset-sm-1 parent-comments">
										<div class="col-sm-2 pull-sm-left comment-author">
														<img class="img img-thumbnail" src="assets/images/thumb/thumb-03.jpg" alt="Author Pic">
										</div>
										<div class="card-block comment">
												<a href="#">Bayes says, </a>
												<p>Nice post. Write again this type of post. We are with you for taking action against this rules.</p>
												<p class="btn btn-outline-success btn-sm">Reply</p>
										</div>
						</div>
				</div>
		</div>
		</div>
</div>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( // WPCS: XSS OK.
					esc_html( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'starter' ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'starter' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'starter' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'starter' ) ); ?></div>

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
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'starter' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'starter' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'starter' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php
		endif; // Check for comment navigation.

	endif; // Check for have_comments().


	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'starter' ); ?></p>
	<?php
	endif;

	comment_form();
	?>

</div><!-- #comments -->
