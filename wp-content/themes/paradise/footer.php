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
	<div class="row par-footer__main">
		
		
		<div class="col col-sm-12 col-lg-3">
			<div class="site-info">
				
				<div class="footer-logo"><?php the_custom_logo(); ?></div>
				<div class="copyright">&copy; Copyright <?php echo date("Y"); ?> Paradise</div>

			</div><!-- .site-info -->
		</div>

		<div class="col col-sm-12 col-lg-5">
			<div class="footer-menu">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
				

			</div><!-- .site-info -->
		</div>

		<div class="col col-sm-12 col-lg-2 footer-address">
			<div class="site-info">
				<h3>Find Us</h3>
				<?php the_field('footer_address', 'options') ?>

			</div><!-- .site-info -->
		</div>

		<div class="col col-sm-12 col-lg-2 footer-phone">
			<div class="site-info">
				<h3>Call Us</h3>
				<?php the_field('footer_phone', 'options') ?>

			</div><!-- .site-info -->
		</div>


	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
