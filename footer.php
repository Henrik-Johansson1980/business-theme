<?php
/**
 * Index file for the Bussines Starter Theme.
 *
 * @package WordPress
 * @subpackage businessthemestarter
 *
 * @version 1.0.0
 */

?>
	<footer class="footer content-region-3 pt30">
		<div class="container">
			<div class="col-lg-4">
			<?php if ( is_active_sidebar( 'footer-area-1' ) ) : ?>
				<?php dynamic_sidebar( 'footer-area-1' ); ?>
			<?php endif; ?>
			</div>

			<div class="col-lg-4">
			<?php if ( is_active_sidebar( 'footer-area-2' ) ) : ?>
				<?php dynamic_sidebar( 'footer-area-2' ); ?>
			<?php endif; ?>
			</div>

			<div class="col-lg-4">
			<?php if ( is_active_sidebar( 'footer-area-3' ) ) : ?>
				<?php dynamic_sidebar( 'footer-area-3' ); ?>
			<?php endif; ?>
			</div>
		</div>
		<div class="copyright-information pt40 pb40">
			<p class="text-center">&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> Henrik Johansson</p>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>

</html>

