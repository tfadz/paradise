<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Paradise
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer par-footer container">
	<div class="row">
		
		
		<div class="col col-lg-3">
			<div class="site-info">
				
				<div class="footer-logo"><?php the_custom_logo(); ?></div>
				<div>&copy; Copyright <?php echo date("Y"); ?> Paradise</div>

			</div><!-- .site-info -->
		</div>

		<div class="col col-lg-6">
			<div class="footer-menu">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
				

			</div><!-- .site-info -->
		</div>

		<div class="col col-lg-3">
			<div class="site-info">
				
				<p>Michigan Ave
					Suite 310
				Chicago, IL</p>

				<p>Call Us</p>

			</div><!-- .site-info -->
		</div>


	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
