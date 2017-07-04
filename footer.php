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

	<footer id="colophon" class="site-footer">
		<ul class="site-info">
			<li>Designed and built by moi</li>
			<li>Copyright <?php echo date("Y"); ?></li>
		</ul><!-- .site-info -->
		<ul class="social-icons">
			<li><a href="">Facebook</a></li>
			<li><a href="">Twitter</a></li>
			<li><a href="">LinkedIn</a></li>
			<li><a href="">GitHub</a></li>
		</ul>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
