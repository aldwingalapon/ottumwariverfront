<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Innomerce
 */

get_header();

	do_action( 'innomerce-theme/site/site-content-before', 'single' ); ?>

	<div <?php innomerce_content_class() ?>>
		<div class="row">

			<?php do_action( 'innomerce-theme/site/primary-before', 'single' ); ?>

			<div id="primary" <?php innomerce_primary_content_class(); ?>>

				<?php do_action( 'innomerce-theme/site/main-before', 'single' ); ?>

				<main id="main" class="site-main"><?php
					while ( have_posts() ) : the_post();

						innomerce_theme()->do_location( 'single', 'template-parts/content-post' );

					endwhile; // End of the loop.
				?></main><!-- #main -->

				<?php do_action( 'innomerce-theme/site/main-after', 'single' ); ?>

			</div><!-- #primary -->

			<?php do_action( 'innomerce-theme/site/primary-after', 'single' ); ?>

			<?php get_sidebar(); // Loads the sidebar.php template.  ?>
		</div>
	</div>

	<?php do_action( 'innomerce-theme/site/site-content-after', 'single' );

get_footer();
