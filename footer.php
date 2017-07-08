<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package chd_portfolio
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer row">
		<div class="footer__wrapper col-sm-10 col-sm-offset-1">
		<ul id="site-info" class="list__ul--nostyle">
			<li>Designed and built by moi</li>
			<li>Copyright <?php echo date("Y"); ?></li>
		</ul><!-- .site-info -->
		<ul id="social-icons" class="list__inline">
			<li><a href="">Facebook</a></li>
			<li><a href="">Twitter</a></li>
			<li><a href="">LinkedIn</a></li>
			<li><a href="">GitHub</a></li>
		</ul>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
