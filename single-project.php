<?php
/**
 * Template for displaying a project
 *
 * @package chd_portfolio
 *
 */
 get_header(); ?>

<?php while ( have_posts() ) : the_post();?>

<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="jumbotron">
  				<div class="container">
  					<div class="hero__background-page"></div>
  					<div class="hero__callout">
  						<h1><?php the_field('hero_callout_heading'); ?></h1>
  						<p><?php the_field('hero_callout_text'); ?></p>


  					</div>
   
 				 </div>
 			</section>

 			<div class="entry-content">
				<article class="container-fluid">
					<section class="section__training row">
						<!-- <h2 class="section__title-center">training</h2> -->
						<div class="col-sm-10 col-sm-offset-1">
							<div class="col-sm-12">
								<?php the_field('project_body'); ?>


							</div>
						</div>


					</section>
				
				</article>
			</div><!-- .entry-content -->

		</main><!-- #main -->
</div><!-- #primary -->




<?php endwhile; ?>

 <?php
get_footer();
