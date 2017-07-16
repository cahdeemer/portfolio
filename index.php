<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package chd_portfolio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<section class="jumbotron">
  				<div class="container">
  					
  					<div class="hero__background-single"></div>
  					
  					<div class="hero__callout-center">
  						<h6>maybe a subheading</h6>
  						<h1 class="entry-title">blog</h1>
  						<a href="">here's a thing</a>
  					</div>
   
 				</div>
		</section>
		<article class="container-fluid">
			<section class="section__featured row">
				<h2 class="section__title-center">featured post</h2>
				<div class="col-sm-10 col-sm-offset-1">
					<div class="col-sm-4">
						<img src="http://rs150.pbsrc.com/albums/s85/michelleNpete/BaBas/awesome-beautiful-blue-eyes-cat-cute-Favimcom-110476.jpg~c200">

					</div>
					<div class="col-sm-8">
						<h5 class="featured-date">January 1, 2018</h5>
						<h2 class="featured-title">post title</h2>
						<p class="featured-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pretium pharetra purus vitae mattis. Vestibulum et malesuada nisl. Suspendisse faucibus felis sit amet lacus condimentum dictum. Nam aliquam molestie pretium. Nam mi diam, efficitur non pharetra vitae, consequat ac turpis. </p>
					</div>
				</div>


			</section>

			<section class="section__posts row">
				<h2 class="section__title-left">most recent posts</h2>
				<div class="col-sm-10 col-sm-offset-1 posts__wrapper">
					  	<a class="project__single post__preview">
					  	
						  	<img src="https://static.pexels.com/photos/104827/cat-pet-animal-domestic-104827.jpeg" alt="cat placeholder">
						  	<h5>January 1, 2018</h5>
						  	<h3>Title of Post</h3>
						  	<div class="project__overlay">
						  		<h5>Tag 1</h5>
						  	</div>
					  	</a>
					  	<a class="project__single post__preview">
					  	
						  	<img src="https://static.pexels.com/photos/104827/cat-pet-animal-domestic-104827.jpeg" alt="cat placeholder">
						  	<h5>Spring 2015</h5>
						  	<h3>Title of Project</h3>
						  	<div class="project__overlay">
						  		<h5>Tag 1 </h5>
						  		<h5>Tag 2</h5>
						  	</div>
					  	</a>

					  	<a class="project__single post__preview">
					  	
						  	<img src="https://static.pexels.com/photos/104827/cat-pet-animal-domestic-104827.jpeg" alt="cat placeholder">
						  	<h5>Spring 2015</h5>
						  	<h3>Title of Project</h3>
						  	<div class="project__overlay">
						  		<h5>Tag 1</h5>
						  		<h5>Tag 2</h5>
						  		<h5>Tag 3</h5>
						  	</div>
					  	</a>
					  	<a class="project__single post__preview">
					  	
						  	<img src="https://static.pexels.com/photos/104827/cat-pet-animal-domestic-104827.jpeg" alt="cat placeholder">
						  	<h5>Spring 2015</h5>
						  	<h3>Title of Project</h3>
						  	<div class="project__overlay">
						  		<h5>Tag 1</h5>
						  		<h5>Tag 2</h5>
						  		<h5>Tag 3</h5>
						  		<h5>Tag 4</h5>
						  	</div>
					  	</a>
				</div>
			</section>

			<section class="section__tags row">
				<h2 class="section__title-center">all tags</h2>
				<div class="col-sm-10 col-sm-offset-1 tag__wrapper">
					<a class="btn btn-default" href="">Tag 1</a>
					<a class="btn btn-default" href="">Tag 2</a>
					<a class="btn btn-default" href="">Long Tag Name</a>
					<a class="btn btn-default" href="">Tag 4</a>
					<a class="btn btn-default" href="">Tag 1</a>
					<a class="btn btn-default" href="">Tag 2</a>
					<a class="btn btn-default" href="">Tag 3</a>
					<a class="btn btn-default" href="">Even Longer Tag Name</a>
					<a class="btn btn-default" href="">Tag 1</a>
					<a class="btn btn-default" href="">Tag 2</a>
					<a class="btn btn-default" href="">Tag 3</a>
					<a class="btn btn-default" href="">Tag 4</a>
				</div>
			</section>



		</article>

		








		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
