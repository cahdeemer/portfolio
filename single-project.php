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
  					<div class="hero__background" id="grid-project"></div>
  					<div class="hero__callout">
  						<h1><?php the_field('hero_callout_heading'); ?></h1>
  						<?php if (get_field('project_online')): ?>
  							<a href="<?php the_field('project_url'); ?>" target="_blank" class="btn btn-default">View the Project</a>
  						<?php else: ?>
  								<p><?php the_field('hero_callout_text'); ?></p>
  						<?php endif; ?>

  					</div>
   
 				 </div>
 			</section>

 			<div class="entry-content">
				<article class="container-fluid">
					<section class="section__training row">
						<!-- <h2 class="section__title-center">training</h2> -->
						<div class="col-sm-8 col-sm-offset-2">
							
								<?php the_field('project_body'); ?>
								
							
						</div>
					</section>
					<section class="section__pics row">
					<h2 class="section__title-left">gallery</h2>
						<div class="slider__large col-sm-10 col-sm-offset-1">

						<?php if ( have_rows('project_gallery') ): ?>
						<?php while ( have_rows('project_gallery') ): the_row(); 
							$image = get_sub_field('gallery_image');
						?>

							<div class="single__gallery">
							<img src="<?php echo $image; ?>">
							</div>
							

						<?php endwhile; ?>
						<?php endif; ?>
						
						</div>



					</section>
				
				</article>
			</div><!-- .entry-content -->

		</main><!-- #main -->
</div><!-- #primary -->




<?php endwhile; ?>

 <?php
get_footer();
