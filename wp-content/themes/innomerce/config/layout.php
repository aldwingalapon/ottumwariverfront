<?php
/**
 * Layout configuration.
 *
 * @package Innomerce
 */

add_action( 'after_setup_theme', 'innomerce_set_layout', 5 );
function innomerce_set_layout() {

	innomerce_theme()->layout = array(
		'one-right-sidebar' => array(
			'1/3' => array(
				'content' => array( 'col-xs-12', 'col-md-8' ),
				'sidebar' => array( 'col-xs-12', 'col-md-4' ),
			),
			'1/4' => array(
				'content' => array( 'col-xs-12', 'col-md-9' ),
				'sidebar' => array( 'col-xs-12', 'col-md-3' ),
			),
		),
		'one-left-sidebar' => array(
			'1/3' => array(
				'content' => array( 'col-xs-12', 'col-md-8', 'col-md-push-4' ),
				'sidebar' => array( 'col-xs-12', 'col-md-4', 'col-md-pull-8' ),
			),
			'1/4' => array(
				'content' => array( 'col-xs-12', 'col-md-9', 'col-md-push-3' ),
				'sidebar' => array( 'col-xs-12', 'col-md-3', 'col-md-pull-9' ),
			),
		),
		'fullwidth' => array(
			array(
				'content' => array( 'col-xs-12' ),
			),
		),
		'single-post-fullwidth' => array(
			array(
				'content' => array( 'col-xs-12', 'col-lg-8', 'col-lg-push-2' ),
			),
		),
	);
}
