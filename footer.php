<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
?>

		</div><!-- #main -->


		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
        <div class="before-site-description">
				<div class="site-description">
				<p><?php bloginfo('description'); ?></p>
				<p>&copy; <?php bloginfo('title'); ?>, LLC
			</div>

			<nav class="social-media-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'social-media', 'menu_class' => 'social-media-menu' ) ); ?>
        <ul>
          <li><a href="https://www.linkedin.com/in/r-morris-web-design/" target="_blank"><span class="screen-reader-text"><i class="fab fa-linkedin-in"></i></span></a></li>
          <li><a href="https://www.facebook.com/rebthemaker/" target="_blank"><span class="screen-reader-text"><i class="fab fa-facebook-f"></i></span></a></li>
          <li><a href="https://twitter.com/rebthemaker" target="_blank"><span class="screen-reader-text"><i class="fab fa-twitter"></i></span></a></li>
        </ul>
			</nav>
     </div>

			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
