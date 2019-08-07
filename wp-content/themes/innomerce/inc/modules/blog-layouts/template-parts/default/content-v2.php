<?php
/**
 * Template part for displaying default posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Innomerce
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('posts-list__item default-item'); ?>>
	<header class="entry-header">
		<h3 class="entry-title"><?php 
			innomerce_sticky_label();
			the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
		?></h3>
		<div class="entry-meta">
			<?php
				innomerce_posted_by();
				innomerce_posted_in( array(
					'prefix' => __( 'In', 'innomerce' ),
				) );
				innomerce_posted_on( array(
					'prefix' => __( 'Posted', 'innomerce' )
				) );
			?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php innomerce_post_thumbnail( 'innomerce-thumb-l' ); ?>

	<?php innomerce_post_excerpt(); ?>

	<footer class="entry-footer">
		<div class="entry-meta">
			<div><?php
					innomerce_post_tags( array(
						'prefix' => __( 'Tags:', 'innomerce' )
					) );
					innomerce_post_comments( array(
						'postfix' => __( 'Comment(s)', 'innomerce' )
					) );
			?></div>
			<?php
				innomerce_post_link();
			?>
		</div>
		<?php innomerce_edit_link(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
