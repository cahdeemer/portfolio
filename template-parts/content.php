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
  					<div class="hero__background-single"></div>
  					<div class="hero__callout-center">
  						<h6>January 1, 2018</h6>
  						<h1 class="entry-title">post title</h1>
  						<?php
							echo get_the_tag_list('',', ','');
						?>

  					</div>
   
 				 </div>
	</section>

	<div class="entry-content">
		<article class="container-fluid">
			<section class="section__training row">
				<!-- <h2 class="section__title-center">training</h2> -->
				<div class="col-sm-10 col-sm-offset-1">
					<div class="col-sm-12">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut velit in dolor ullamcorper cursus. Integer quis est viverra, efficitur sem dapibus, gravida est. Nam consectetur tincidunt orci sed ullamcorper. Duis in tempor sem, id posuere nisl. Donec lobortis leo a leo bibendum, non mollis dui imperdiet. Sed vitae scelerisque lacus. Mauris tellus tellus, scelerisque vitae egestas sit amet, semper ut ligula. Aenean vulputate sit amet justo eu tempor. Fusce ultrices aliquam elit, in porttitor diam cursus elementum. Etiam lacinia lorem magna, et convallis libero feugiat sit amet. Pellentesque varius pulvinar luctus. Morbi blandit nec erat id ultrices. Sed a gravida purus, ac tincidunt leo. Nullam imperdiet ac dui nec ultrices. Maecenas ipsum nisl, pulvinar id dui quis, facilisis luctus dui. Sed at massa ac eros elementum tempus.</p>

						<p>Duis vestibulum laoreet accumsan. Phasellus efficitur dictum sollicitudin. Etiam nec congue ante. Phasellus ultricies turpis nisi, a hendrerit tortor suscipit non. Praesent ultrices ultrices hendrerit. Maecenas massa dui, tincidunt vitae sollicitudin egestas, molestie id ex. Donec molestie tellus a arcu sodales, eu porttitor risus venenatis. Donec sed purus nibh. Cras non ligula nunc. Aliquam ut cursus erat, in placerat urna. Nullam leo tellus, euismod ornare malesuada eu, lacinia id ligula.</p>

						<p>Phasellus fringilla velit nec nulla malesuada, sit amet finibus augue consectetur. Aliquam placerat blandit mi eu condimentum. Aliquam erat volutpat. Suspendisse tortor mi, tristique ac sapien nec, iaculis posuere quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae tortor lacus. Phasellus egestas ex elit, at pellentesque lorem pretium nec. Fusce porta odio consequat convallis vulputate. In eu justo aliquet, vulputate ligula vitae, auctor mauris. Integer posuere eros vel blandit congue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur nec imperdiet mauris. Duis mattis dictum ipsum in mattis. Cras elementum tellus sollicitudin, malesuada ligula nec, faucibus urna.

						</p>


					</div>
				</div>


			</section>
		
		</article>
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
