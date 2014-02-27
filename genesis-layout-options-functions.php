<?php
/**
 * Genesis Layout Options
 *
 * @package   Genesis_Layout_Options
 * @author    Brad Potter
 * @license   GPL-2.0+
 * @link      http://www.bradpotter.com/plugins/genesis-layout-options
 * @copyright Copyright (c) 2014, Brad Potter
 */

add_post_type_support( 'post', array( 'genesis-layout-options' ) );
add_post_type_support( 'page', array( 'genesis-layout-options' ) );

/**
 * Load Genesis Layout Options Style Sheet
 */
add_action( 'wp_enqueue_scripts', 'glo_style_sheet' );
function glo_style_sheet() {
	wp_enqueue_style( 'glo-theme-layouts', GLO_URL . 'css/genesis-layout-options.css', array(), '1.0.0' );
}

/**
 * Register Sidebar-Content-SidebarAlt Layout
 */
function glo_register_layout_scsa() {
	
	genesis_register_layout( 'sidebar-content-sidebaralt', array(
		'label' => __('Sidebar-Content-SidebarAlt', 'genesis-layout-options'),
		'img' => GLO_URL . '/assets/layouts/sidebar-content-sidebaralt.gif'
	) );

}
add_action( 'init', 'glo_register_layout_scsa' );

/**
 * Create Sidebar-Content-SidebarAlt Layout
 */
function glo_create_layout_scsa() {

	$glo_site_layout = genesis_site_layout();

	if ( $glo_site_layout == 'sidebar-content-sidebaralt' ) {

		remove_action( 'genesis_after_content', 'genesis_get_sidebar' );
		remove_action( 'genesis_after_content_sidebar_wrap', 'genesis_get_sidebar_alt');
		add_action( 'genesis_after_content', 'genesis_get_sidebar' );
		add_action( 'genesis_after_content_sidebar_wrap', 'genesis_get_sidebar_alt' );
	}

}
add_action('genesis_before', 'glo_create_layout_scsa');

/**
 * Register Sidebar-SidebarAlt-Content Layout
 */
function glo_register_layout_ssac() {
	
	genesis_register_layout( 'sidebar-sidebaralt-content', array(
		'label' => __('Sidebar-SidebarAlt-Content', 'genesis-layout-options'),
		'img' => GLO_URL . '/assets/layouts/sidebar-sidebaralt-content.gif'
	) );

}
add_action( 'init', 'glo_register_layout_ssac' );

/**
 * Create Sidebar-SidebarAlt-Content Layout
 */
function glo_create_layout_ssac() {

	$glo_site_layout = genesis_site_layout();

	if ( $glo_site_layout == 'sidebar-sidebaralt-content' ) {

		remove_action( 'genesis_after_content', 'genesis_get_sidebar' );
		remove_action( 'genesis_after_content_sidebar_wrap', 'genesis_get_sidebar_alt');
		add_action( 'genesis_after_content', 'genesis_get_sidebar_alt' );
		add_action( 'genesis_after_content_sidebar_wrap', 'genesis_get_sidebar' );
	}

}
add_action('genesis_before', 'glo_create_layout_ssac');

/**
 * Register Content-SidebarAlt-Sidebar Layout
 */
function glo_register_layout_csas() {
	
	genesis_register_layout( 'content-sidebaralt-sidebar', array(
		'label' => __('Content-SidebarAlt-Sidebar', 'genesis-layout-options'),
		'img' => GLO_URL . '/assets/layouts/content-sidebaralt-sidebar.gif'
	) );

}
add_action( 'init', 'glo_register_layout_csas' );

/**
 * Create Content-SidebarAlt-Sidebar Layout
 */
function glo_create_layout_csas() {

	$glo_site_layout = genesis_site_layout();

	if ( $glo_site_layout == 'content-sidebaralt-sidebar' ) {

		remove_action( 'genesis_after_content', 'genesis_get_sidebar' );
		remove_action( 'genesis_after_content_sidebar_wrap', 'genesis_get_sidebar_alt');
		add_action( 'genesis_after_content', 'genesis_get_sidebar_alt' );
		add_action( 'genesis_after_content_sidebar_wrap', 'genesis_get_sidebar' );
	}

}
add_action('genesis_before', 'glo_create_layout_csas');

/**
 * Register Content-SidebarAlt Layout
 */
function glo_register_custom_layout_csa() {
	
	genesis_register_layout( 'content-sidebaralt', array(
		'label' => __('Content-SidebarAlt', 'genesis-layout-options'),
		'img' => GLO_URL . '/assets/layouts/content-sidebaralt.gif'
	) );

}
add_action( 'init', 'glo_register_custom_layout_csa' );

/**
 * Create Content-SidebarAlt Layout
 */
function glo_create_custom_layout_csa() {

	$glo_site_layout = genesis_site_layout();

	if ( $glo_site_layout == 'content-sidebaralt' ) {

		remove_action( 'genesis_after_content', 'genesis_get_sidebar' );
		remove_action( 'genesis_after_content_sidebar_wrap', 'genesis_get_sidebar_alt');
		add_action( 'genesis_after_content_sidebar_wrap', 'genesis_get_sidebar_alt' );
	}

}
add_action('genesis_before', 'glo_create_custom_layout_csa');

/**
 * Register SidebarAlt-Content Layout
 */
function glo_register_layout_sac() {
	
	genesis_register_layout( 'sidebaralt-content', array(
		'label' => __('SidebarAlt-Content', 'genesis-layout-options'),
		'img' => GLO_URL . '/assets/layouts/sidebaralt-content.gif'
	) );

}
add_action( 'init', 'glo_register_layout_sac' );

/**
 * Create SidebarAlt-Content Layout
 */
function glo_create_layout_sac() {

	$glo_site_layout = genesis_site_layout();

	if ( $glo_site_layout == 'sidebaralt-content' ) {

		remove_action( 'genesis_after_content', 'genesis_get_sidebar' );
		remove_action( 'genesis_after_content_sidebar_wrap', 'genesis_get_sidebar_alt');
		add_action( 'genesis_after_content_sidebar_wrap', 'genesis_get_sidebar_alt' );
	}

}
add_action('genesis_before', 'glo_create_layout_sac');