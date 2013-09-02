<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package democracyos
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer " role="contentinfo">
		<div class="site-info container">
			<?php do_action( 'democracyos_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'democracyos' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'democracyos' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>