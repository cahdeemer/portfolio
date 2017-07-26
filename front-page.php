<?php
/**
 * The template for the home page
 *
 * @link https://codex.wordpress.org/Creating_a_Static_Front_Page
 *
 * @package chd_portfolio
 */

get_header(); ?>

<!-- 	<div id="primary" class="content-area"> -->
		<main id="main" class="site-main">
			<section class="jumbotron">
  				<div class="container">
  					<div class="hero__background">
  					</div>
  					<div class="hero__callout">
  						<h1><?php the_field('hero_callout_heading'); ?></h1>
  						<p><?php the_field('hero_callout_text'); ?></p>
  					</div>
   
 				 </div>
			</section>
			<article class="container-fluid">
			<section class="section__featured-projects row">
				<h2 class="section__title-left">featured projects</h2>
				<div class="slider__small col-sm-10 col-sm-offset-1">


	    				<?php
			    				
								$args = array(
									'post_type' => array('project'),
									'nopaging'  => false,
									'paged'		=> 1,
									'taxonomy'  => 'category',
									'order' 	=> 'ASC',
								); 

								$the_query = new WP_Query( $args );

								if ( $the_query->have_posts()): while ( $the_query->have_posts() ):$the_query->the_post(); 
							?>

							<a class="slider__single  project__single" href="<?php the_permalink(); ?>">
								<img src="<?php the_post_thumbnail_url( 'full' );  ?>">
								<h5><?php the_date(); ?></h5>
					  			<h3><?php the_title(); ?></h3>
					  			<div class="project__overlay">
					  				<?php 
					  					$terms = get_the_terms($the_query->ID, 'category' );
										if ($terms && ! is_wp_error($terms)) :
									
									foreach ($terms as $term) {
									    echo '<h5>' . $term->name . '</h5>';
									}
									
								endif;
								
									?>
					  			</div>

							</a>

						<?php 
									wp_reset_postdata(); 
									endwhile; 
									endif; 

						?>





				  	<!-- <a class="slider__single  project__single">
				  	
					  	<img src="https://static.pexels.com/photos/104827/cat-pet-animal-domestic-104827.jpeg" alt="cat placeholder">
					  	<h5>Spring 2015</h5>
					  	<h3>Title of Project</h3>
					  	<div class="project__overlay">
					  		<h5>Wordpress</h5>
					  		<h5>Responsive Design</h5>
					  		<h5>Flexible Content</h5>
					  	</div>
				  	</a>

				  	-->
				  
				</div>
			</section>

			<section class="section__about row">
				<h2 class="section__title-center">about me</h2>
				<div class="col-sm-10 col-sm-offset-1">
					<div class="col-sm-4">
						<div class="img-sq-wrapper">
						<img src="<?php the_field('about_section_image'); ?>">
						</div>
					</div>
					<div class="col-sm-8">
						<p><?php the_field('about_section_text'); ?></p>
					</div>
				</div>


			</section>
			</article>


		</main><!-- #main -->
	<!-- </div> --><!-- #primary -->

<?php
get_footer();
