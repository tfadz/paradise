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
		<div class="col col-lg-12">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'paradise' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'paradise' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'paradise' ), 'paradise', '<a href="http://underscores.me/">Terry Fadz</a>' );
				?>
			</div><!-- .site-info -->
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
