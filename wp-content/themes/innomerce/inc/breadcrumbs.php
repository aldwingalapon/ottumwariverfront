<?php
/**
 * Theme Breadcrumbs.
 *
 * @package Innomerce
 */

/**
 * Retrieve a holder for breadcrumbs options.
 *
 * @since  1.0.0
 * @return array
 */

function innomerce_get_breadcrumbs_options() {
	/**
	 * Filter a holder for breadcrumbs options.
	 *
	 * @since 1.0.0
	 */

	/* 'show_on_front'     => innomerce_theme()->customizer->get_value( 'breadcrumbs_front_visibillity' ),
	'show_title'        => innomerce_theme()->customizer->get_value( 'breadcrumbs_page_title' ),
	'path_type'         => innomerce_theme()->customizer->get_value( 'breadcrumbs_path_type' ), */

	return apply_filters( 'innomerce-theme/breadcrumbs/options' , array(
		'show_browse'       => false,
		'show_on_front'     => innomerce_theme()->customizer->get_value( 'breadcrumbs_front_visibillity' ),
		'show_title'        => innomerce_theme()->customizer->get_value( 'breadcrumbs_page_title' ),
		'path_type'         => innomerce_theme()->customizer->get_value( 'breadcrumbs_path_type' ),
		'css_namespace'     => array(
			'module'    => 'breadcrumbs',
			'content'   => 'breadcrumbs_content',
			'wrap'      => 'breadcrumbs_wrap',
			'browse'    => 'breadcrumbs_browse',
			'item'      => 'breadcrumbs_item',
			'separator' => 'breadcrumbs_item_sep',
			'link'      => 'breadcrumbs_item_link',
			'target'    => 'breadcrumbs_item_target',
		),
	) );
}

