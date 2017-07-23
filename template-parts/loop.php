<?php if (have_posts()): while (have_posts()) : the_post(); 
	
?>

	<a class="project__single post__preview" href="<?php the_permalink(); ?>">
					  	
			<?php echo get_the_post_thumbnail(); ?>
			<h5><?php the_date(); ?></h5>
			<h3><?php the_title(); ?></h3>
			<div class="project__overlay">
			<?php 
				$posttags = get_the_tags();
				if ($posttags) {
					foreach($posttags as $tag) {
						echo "<h5>" . $tag->name . "</h5>"; 
					}
				}
			?>
			</div>
	</a>	

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'chd_portfolio' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
