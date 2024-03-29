<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Innomerce
 */
?>

<?php if ( is_active_sidebar( 'sidebar-shop' ) && 'none' !== innomerce_theme()->sidebar_position ) : ?>
	<aside id="secondary" <?php innomerce_secondary_content_class( array( 'widget-area' ) ); ?>>
	  <?php dynamic_sidebar( 'sidebar-shop' ); ?>
	</aside><!-- #secondary -->
<?php endif;