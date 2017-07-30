<?php get_header(); ?>

	<main role="main">
		<!-- section -->

		<section class="jumbotron">
  				<div class="container">
  					<div class="hero__background-single" id="grid-tag"></div>
  					<div class="hero__callout">
  						<h6>Tag Archive</h6>
  						<h1 class="entry-title"><?php echo single_tag_title('', false); ?></h1>
  						
  						<a class="btn btn-default" href="<?php echo get_permalink( get_option('page_for_posts' )); ?>">All Posts</a>

  					</div>
   
 				 </div>
		</section>
		<article class="container-fluid">

		<section class="row">
			<div class="col-sm-10 col-sm-offset-1">
				


					<?php get_template_part('template-parts/loop'); ?>

			
				
			</div>

		</section>
		<!-- /section -->
		</article>
	</main>



<?php get_footer(); ?>