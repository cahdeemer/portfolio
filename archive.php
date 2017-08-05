<?php
/**
 * The template for displaying archive pages
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
  					
  					<div class="hero__background" id="grid-archive"></div>
  					
  					<div class="hero__callout">
  						<h6>so many projects!</h6>
  						<h1 class="entry-title"><?php echo post_type_archive_title( '', false ); ?></h1>
  					</div>
   
 				</div>
		</section>
		<article class="container-fluid">
			

			<section class="section__posts row">
				<h2 class="section__title-left">recent projects</h2>
				<div class="col-sm-10 col-sm-offset-1 posts__wrapper">
						<?php

							$content = "";						

						        while( have_posts() ) : the_post();
						    		$thumbnail = get_the_post_thumbnail();
						    		$date = get_the_date();
						            $link = get_permalink();
						            $title = get_the_title();  

						                                

						            $content .= "<a class='project__single post__preview' href='$link'>";
						            $content .= $thumbnail;
						            $content .= "<h5>$date</h5>";
						            $content .= "<h3>$title</h3>";
						            $content .= "<div class='project__overlay'>";

									$posttags = get_the_tags();
									if ($posttags) {
									  foreach($posttags as $tag) {
									    $content .= "<h5>" . $tag->name . "</h5>"; 
									  }
									}
									
						            $content .= "</div>";
						            $content .= "</a>";
						        endwhile;

						       

    						

    						echo $content; 
						?>


				</div>
			</section>

			



		</article>

		




		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
