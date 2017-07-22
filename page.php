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
  					<div class="hero__background-page"></div>
  					<div class="hero__callout">
  						<h1><?php the_field('hero_callout_heading'); ?></h1>
  						<p><?php the_field('hero_callout_text'); ?></p>

  					</div>
   
 				 </div>
			</section>
			<article class="container-fluid">
				<section class="section__about row">
				<h2 class="section__title-center">short bio</h2>
				<div class="col-sm-10 col-sm-offset-1">
					<div class="col-sm-4">
						<img src="http://rs150.pbsrc.com/albums/s85/michelleNpete/BaBas/awesome-beautiful-blue-eyes-cat-cute-Favimcom-110476.jpg~c200">

					</div>
					<div class="col-sm-8">
						<p><?php the_field('short_bio_text');?></p>
					</div>
				</div>
				</section>

				<section class="section__training row">
				<h2 class="section__title-center">training</h2>
				<div class="col-sm-10 col-sm-offset-1">
					<div class="col-sm-12">
						<?php the_field('training_body'); ?>


					</div>
				</div>


			</section>

			<section class="section__bc row">
				<h2 class="section__title-center">b.c. {before code}</h2>
				<div class="col-sm-10 col-sm-offset-1">
					<div class="col-sm-8">
						<?php the_field('bc_body'); ?>
					</div>
					<div class="col-sm-4">
						<img src="http://rs150.pbsrc.com/albums/s85/michelleNpete/BaBas/awesome-beautiful-blue-eyes-cat-cute-Favimcom-110476.jpg~c200">

					</div>
				</div>
				</section>

			</article>

		


			


		</main><!-- #main -->
	</div><!-- #primary -->

<?php endwhile; ?>

<?php
get_footer();
