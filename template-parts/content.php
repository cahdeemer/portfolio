<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package chd_portfolio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="jumbotron">
  				<div class="container">
  					<div class="hero__background-single" id="grid-single"></div>
  					<div class="hero__callout">
  						<h6><?php the_date(); ?></h6>
  						<h1 class="entry-title"><?php the_title(); ?></h1>

  						<?php
						    $tags = get_the_tags();
						    $html = '<div class="post_tags">';
						    if ($tags) {
						    	foreach ($tags as $tag){
						        	$tag_link = get_tag_link($tag->term_id);

						        	$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug} tag-link btn btn-default'>";
						        	$html .= "{$tag->name}</a>";
						    	}
						    }
						    $html .= '</div>';
						    echo $html;
							
						?>

  					</div>
   
 				 </div>
	</section>

	<div class="entry-content">
		<article class="container-fluid">
			<section class="section__training row">
				<!-- <h2 class="section__title-center">training</h2> -->
				<div class="col-sm-8 col-sm-offset-2">
					
						<?php the_content(); ?>


					
				</div>


			</section>
		
		</article>
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
