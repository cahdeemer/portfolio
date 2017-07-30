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
  					
  					<div class="hero__background-single" id="grid-index"></div>
  					
  					<div class="hero__callout">
  						<h6>maybe a subheading</h6>
  						<h1 class="entry-title">blog</h1>
  					</div>
   
 				</div>
		</section>
		<article class="container-fluid">
			<section class="section__featured row">
				<h2 class="section__title-center">featured post</h2>
				<div class="col-sm-10 col-sm-offset-1">
					
						<?php
							$args = array( "showposts" => 1 );                  
						    query_posts($args);

						    $content = "";

						    if( have_posts() ) : 

						        while( have_posts() ) : the_post();
						    		$thumbnail = get_the_post_thumbnail();
						    		$date = get_the_date();
						            $link = get_permalink();
						            $title = get_the_title();                       

						            $content .= "<div class='col-sm-4'>";
						            $content .= $thumbnail;
						            $content .= "</div>";
						            $content .= "<div class='col-sm-8'>";
						            $content .= "<h5 class='featured-date'>$date</h5>";
						            $content .= "<h2><a href='$link' target='_top'>$title</a></h1>\n";
						            $content .= "<p class='featured-excerpt'>" . get_the_excerpt() . "</p>";
						            $content .= "</div>";
						        endwhile;

						        wp_reset_query();

    						endif;

    						echo $content; 
						?>
					</div>
				</div>


			</section>

			<section class="section__posts row">
				<h2 class="section__title-left">most recent posts</h2>
				<div class="col-sm-10 col-sm-offset-1 posts__wrapper">
						<?php
							$args = array( "showposts" => 6 );                  
						    query_posts($args);

						    $content = "";

						    if( have_posts() ) : 

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

						        wp_reset_query();

    						endif;

    						echo $content; 
						?>


				</div>
			</section>

			<section class="section__tags row">
				<h2 class="section__title-center">all tags</h2>
				<div class="col-sm-10 col-sm-offset-1 tag__wrapper">
					<?php
						   	$tags = get_tags();
							$html = '<div class="post_tags">';
							foreach ( $tags as $tag ) {
								$tag_link = get_tag_link( $tag->term_id );
										
								$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug} btn btn-default btn-dark'>";
								$html .= "{$tag->name}</a>";
							}
							$html .= '</div>';
							echo $html;

					?>



					<!-- <a class="btn btn-default btn-dark" href="">Tag 1</a>
					<a class="btn btn-default btn-dark" href="">Tag 2</a>
					<a class="btn btn-default btn-dark" href="">Long Tag Name</a>
					<a class="btn btn-default btn-dark" href="">Tag 4</a>
					<a class="btn btn-default btn-dark" href="">Tag 1</a>
					<a class="btn btn-default btn-dark" href="">Tag 2</a>
					<a class="btn btn-default btn-dark" href="">Tag 3</a>
					<a class="btn btn-default btn-dark" href="">Even Longer Tag Name</a>
					<a class="btn btn-default btn-dark" href="">Tag 1</a>
					<a class="btn btn-default btn-dark" href="">Tag 2</a>
					<a class="btn btn-default btn-dark" href="">Tag 3</a>
					<a class="btn btn-default btn-dark" href="">Tag 4</a> -->
				</div>
			</section>



		</article>

		








		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
