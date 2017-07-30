<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package chd_portfolio
 */

get_header(); ?>

<?php
while ( have_posts() ) : the_post(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="jumbotron">
  				<div class="container">
  					<div class="hero__background-page" id="grid-page"></div>
  					<div class="hero__callout">
  						<h1><?php the_field('hero_callout_heading'); ?></h1>
  						<p><?php the_field('hero_callout_text'); ?></p>


  					</div>
   
 				 </div>
			</section>
			<article class="container-fluid">
				<section class="section__white row" id="bio">
				<h2 class="section__title-center">short bio</h2>
				<div class="col-sm-10 col-sm-offset-1">
					<div class="col-sm-4">
						<div class="img-sq-wrapper">
						<img src="<?php the_field('short_bio_image'); ?>">
						</div>
					</div>
					<div class="col-sm-8">
						<p><?php the_field('short_bio_text');?></p>
					</div>
				</div>
				</section>

				<section class="section__grey row">
					<h2 class="section__title-center">skills</h2>
					<div class="col-sm-8 col-sm-offset-2">
						
							<?php the_field('skills_body'); ?>

					</div>
				</section>

				<section class="section__white row">
					<h2 class="section__title-center">experience</h2>
					<div class="col-sm-8 col-sm-offset-2">
						
							<?php the_field('experience_body'); ?>

					</div>
				</section>



				<section class="section__grey row" id="training">
					<h2 class="section__title-center">training</h2>
					<div class="col-sm-8 col-sm-offset-2">
						
							<?php the_field('training_body'); ?>


						</div>
					</div>
				</section>

				<section class="section__white row" id="bc">
					<h2 class="section__title-center">b.c. {before code}</h2>
					<div class="col-sm-8 col-sm-offset-2">
						
							<?php the_field('bc_body'); ?>
						

						</div>
					</div>
				</section>

			</article>

		


			


		</main><!-- #main -->
	</div><!-- #primary -->

<?php endwhile; ?>

<?php
get_footer();
