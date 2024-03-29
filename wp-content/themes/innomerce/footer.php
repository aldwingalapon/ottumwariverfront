<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Innomerce
 */

?>

	</div><!-- #content -->

	<footer id="colophon" <?php echo innomerce_get_container_classes( 'site-footer' ); ?>>
		<?php innomerce_theme()->do_location( 'footer', 'template-parts/footer' ); ?>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
