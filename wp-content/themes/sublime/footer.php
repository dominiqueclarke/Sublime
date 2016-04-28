<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sublime
 */

?>

	</div><!-- #content -->

	<footer id="colophon footer" class="site-footer container" role="contentinfo">
			<a href="header" class="btn up page-nav-right"><span>Top</span></a>
			<div class="social">
				<h4>Get Connected</h4>
				<ul>
					<li class="facebook"></li>
					<li class="twitter"></li>
					<li class="behance"></li>
					<li class="dribble"></li>
				</ul>
			</div>
			<div class="site-info">
				<?php dynamic_sidebar('footer-widget'); ?>
			</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
