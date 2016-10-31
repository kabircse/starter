<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starter
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

	<aside class="sidebar-aside">
		<div class="search-bar">
			<form class="form-inline">
				<div class="form-group">
					<input type="text" class="form-control" id="search" placeholder="Search">
					<button type="submit" class="btn btn-info search-btn">Search</button>
				</div>
			</form>
		</div>
		<ul class="nav nav-tabs" id="collapse-tab">
			<li class="nav-item">
				<a class="nav-link active" data-toggle="tab" data-target="#popular">Popular</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" data-target="#recent">Recent</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" data-target="#comments">Comments</a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="popular">
				<div class="popular-posts">
					<ul class="list-group">
						<li class="list-group-item">
							<span class="tag pull-sm-left"><img class="img sidebar-post-img" src="assets/images/thumb-sidebar/thumb-006.jpg" alt="Card image cap"></span>
							<a class="text-info" href="#">Cras justo odio</a><br/>
							<span>25 Comments</span>
						</li>
						<li class="list-group-item">
							<span class="tag pull-sm-left"><img class="img sidebar-post-img" src="assets/images/thumb-sidebar/thumb-002.jpg" alt="Card image cap"></span>
							<a class="text-info" href="#">Cras justo odio</a><br/>
							<span>5 Comments</span>
						</li>
						<li class="list-group-item">
							<span class="tag pull-sm-left"><img class="img sidebar-post-img" src="assets/images/thumb-sidebar/thumb-003.jpg" alt="Card image cap"></span>
							<a class="text-info" href="#">Cras justo odio</a><br/>
							<span>10 Comments</span>
						</li>
						<li class="list-group-item">
							<span class="tag pull-sm-left"><img class="img sidebar-post-img" src="assets/images/thumb-sidebar/thumb-004.jpg" alt="Card image cap"></span>
							<a class="text-info" href="#">Cras justo odio</a><br/>
							<span>No Comment</span>
						</li>
						<li class="list-group-item">
							<span class="tag pull-sm-left"><img class="img sidebar-post-img" src="assets/images/thumb-sidebar/thumb-005.jpg" alt="Card image cap"></span>
							<a class="text-info" href="#">Cras justo odio</a><br/>
							<span>20 Comments</span>
						</li>
						<li class="list-group-item">
							<span class="tag pull-sm-left"><img class="img sidebar-post-img" src="assets/images/thumb-sidebar/thumb-002.jpg" alt="Card image cap"></span>
							<a class="text-info" href="#">Cras justo odio</a><br/>
							<span>8 Comments</span>
						</li>
					</ul>
				</div>
			</div>
			<div class="tab-pane" id="recent">
				<div class="popular-posts">
					<ul class="list-group">
						<li class="list-group-item">
							<span class="tag pull-sm-left"><img class="img sidebar-post-img" src="assets/images/thumb-sidebar/thumb-005.jpg" alt="Card image cap"></span>
							<a class="text-info" href="#">Man is going to discovery</a><br/>
							<span>2 Comments</span>
						</li>
						<li class="list-group-item">
							<span class="tag pull-sm-left"><img class="img sidebar-post-img" src="assets/images/thumb-sidebar/thumb-004.jpg" alt="Card image cap"></span>
							<a class="text-info" href="#">Science is your next friend</a><br/>
							<span>6 Comments</span>
						</li>
						<li class="list-group-item">
							<span class="tag pull-sm-left"><img class="img sidebar-post-img" src="assets/images/thumb-sidebar/thumb-006.jpg" alt="Card image cap"></span>
							<a class="text-info" href="#">The moon spreads his bright at night</a><br/>
							<span>120 Comments</span>
						</li>
						<li class="list-group-item">
							<span class="tag pull-sm-left"><img class="img sidebar-post-img" src="assets/images/thumb-sidebar/thumb-002.jpg" alt="Card image cap"></span>
							<a class="text-info" href="#">The water is an essential thins for man</a><br/>
							<span>No Comment</span>
						</li>
						<li class="list-group-item">
							<span class="tag pull-sm-left"><img class="img sidebar-post-img" src="assets/images/thumb-sidebar/thumb-004.jpg" alt="Card image cap"></span>
							<a class="text-info" href="#">Global warming is increasing day by day</a><br/>
							<span>12 Comments</span>
						</li>
						<li class="list-group-item">
							<span class="tag pull-sm-left"><img class="img sidebar-post-img" src="assets/images/thumb-sidebar/thumb-005.jpg" alt="Card image cap"></span>
							<a class="text-info" href="#">Computer technology is the biggest job market ever</a><br/>
							<span>No Comments</span>
						</li>
					</ul>
				</div>
			</div>
			<div class="tab-pane" id="comments">
				<div class="popular-posts">
					<ul class="list-group">
						<li class="list-group-item">
							<span class="tag pull-sm-left"><img class="img sidebar-post-img" src="assets/images/thumb-sidebar/thumb-006.jpg" alt="Card image cap"></span>
							<a class="text-info" href="#">Cras justo odio</a><br/>
							<span>2 Comments</span>
						</li>
						<li class="list-group-item">
							<span class="tag pull-sm-left"><img class="img sidebar-post-img" src="assets/images/thumb-sidebar/thumb-004.jpg" alt="Card image cap"></span>
							<a class="text-info" href="#">Cras justo odio</a><br/>
							<span>15 Comments</span>
						</li>
						<li class="list-group-item">
							<span class="tag pull-sm-left"><img class="img sidebar-post-img" src="assets/images/thumb-sidebar/thumb-005.jpg" alt="Card image cap"></span>
							<a class="text-info" href="#">Cras justo odio</a><br/>
							<span>1 Comments</span>
						</li>
						<li class="list-group-item">
							<span class="tag pull-sm-left"><img class="img sidebar-post-img" src="assets/images/thumb-sidebar/thumb-006.jpg" alt="Card image cap"></span>
							<a class="text-info" href="#">Cras justo odio</a><br/>
							<span>No Comment</span>
						</li>
						<li class="list-group-item">
							<span class="tag pull-sm-left"><img class="img sidebar-post-img" src="assets/images/thumb-sidebar/thumb-003.jpg" alt="Card image cap"></span>
							<a class="text-info" href="#">Cras justo odio</a><br/>
							<span>10 Comments</span>
						</li>
						<li class="list-group-item">
							<span class="tag pull-sm-left"><img class="img sidebar-post-img" src="assets/images/thumb-sidebar/thumb-005.jpg" alt="Card image cap"></span>
							<a class="text-info" href="#">Cras justo odio</a><br/>
							<span>25 Comments</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</aside>
