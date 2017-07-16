<?php if (have_posts()): while (have_posts()) : the_post(); 
	
?>

	<a class="project__single post__preview">
					  	
		<img src="https://static.pexels.com/photos/104827/cat-pet-animal-domestic-104827.jpeg" alt="cat placeholder">
			<h5>January 1, 2018</h5>
			<h3>Title of Post</h3>
			<div class="project__overlay">
				<h5>Tag 1</h5>
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
