<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Innomerce
 */

$is_author_block_enabled = innomerce_theme()->customizer->get_value( 'single_author_block' );
$author_block_class = $is_author_block_enabled ? 'with_author_block' : '';

?>

<div class="single-header-8 invert <?php echo esc_attr( $author_block_class ); ?>">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-lg-8 col-lg-push-2">
				<header class="entry-header">
					<?php get_template_part( 'template-parts/single-post/author-bio' ); ?>
					<?php the_title( '<h1 class="entry-title h2-style">', '</h1>' ); ?>
					<div class="entry-meta"><?php
						innomerce_posted_in( array(
							'prefix'  => __( 'In', 'innomerce' ),
						) );
						innomerce_posted_on( array(
							'prefix'  => '<i class="fa fa-clock-o" aria-hidden="true"></i> ' . __( 'Posted', 'innomerce' ),
						) );
						innomerce_post_tags ( array(
							'prefix'    => '<i class="fa fa-tag" aria-hidden="true"></i>',
						) );
						innomerce_post_comments( array(
							'prefix'    => '<i class="fa fa-comment-o" aria-hidden="true"></i>',
							'postfix' => __( 'Comment(s)', 'innomerce' )
						) );
					?></div><!-- .entry-meta -->
				</header><!-- .entry-header -->
			</div>
		</div>
	</div>
</div>