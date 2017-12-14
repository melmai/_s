<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div id="contact-info" class="site-footer">
			<a href="mailto:mel@mel.codes" class="button">mel@mel.codes</a>
			<a href="tel:2066196344" class="button">206.619.6344</a>
		</div><!-- #contact-info -->

		<div class="site-info">
			<p>&copy; 2017 Melissa Wong <span class="sep"> | </span> All Rights Reserved</p>
			<!--
			<a href="<?php //echo esc_url( __( 'https://wordpress.org/', 'portfolio' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				//printf( esc_html__( 'Proudly powered by %s', 'portfolio' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				//printf( esc_html__( 'Theme: %1$s by %2$s.', 'portfolio' ), 'portfolio', '<a href="https://mel.codes/">Melissa Wong</a>' );
			?>
		-->
		</div><!-- .site-info -->


	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
