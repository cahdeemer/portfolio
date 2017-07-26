<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package chd_portfolio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="jumbotron">
  				<div class="container">
  					<div class="hero__background-page"></div>
  					<div class="hero__callout">
  						<h1>404</h1>
  						<p>Damnit. Page cannot be found.</p>


  					</div>
   
 				 </div>
 			</section>

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'chd_portfolio' ); ?></h1>
				</header><!-- .page-header -->

			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
