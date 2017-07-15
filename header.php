<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package chd_portfolio
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'chd_portfolio' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="navbar navbar-default main-navigation" >
  			<div class="container-fluid">
    		<!-- Brand and toggle get grouped for better mobile display -->
    			<div class="navbar-header">
      				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        				<span class="sr-only">Toggle navigation</span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
      				</button>

      				<div class="site-branding">
						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="site-title"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Christina Deemer</a></h1>
						
						<?php else : ?>
							
							<p class="site-title"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Christina Deemer</a></p>
						
						<?php endif; ?>
					</div><!-- .site-branding -->
    			</div>

    		<!-- Collect the nav links, forms, and other content for toggling -->
    		
    			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
		     		<ul class="nav navbar-nav navbar-right">
		        		<li><a href="#">About</a></li>
		        		<li><a href="#">Projects</a></li>
		        		<li><a href="#">Blog</a></li>
		      		</ul>

    			</div><!-- /.navbar-collapse -->
  			</div><!-- /.container-fluid -->
		</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
