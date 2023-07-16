<?php
/**
 * Advanced Custom Fields Functions & Definitions
 *
 * @package Starter_Theme
 */
defined( 'ABSPATH' ) || exit;

/**
 * Add ACF option pages.
 */
if ( function_exists('acf_add_options_page') ) {
	acf_add_options_page([
		'page_title' 	=> 'Site Options',
		'menu_title'	=> 'Site Options',
		'menu_slug' 	=> 'theme-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'position'		=> 80
	]);
}

/**
 * Add Custom Block Category
 */
function starter_theme_block_categories( $block_categories, $editor_context ) {
	array_push (
		$block_categories,
		array (
			'slug'  => 'starter-theme',
			'title' => 'Starter Theme',
			'icon'  => null,
		)
	);
	return $block_categories;
}
add_filter( 'block_categories_all', 'starter_theme_block_categories', 10, 2 );

/**
 * Register ACF Blocks
 */
function starter_theme_register_acf_blocks() {
	$template_directory = get_template_directory();
  register_block_type( $template_directory . '/blocks/headline' );
}
add_action( 'init', 'starter_theme_register_acf_blocks' );

/**
 * Remove ACF Block Wrapper
 */
add_filter( 'acf/blocks/wrap_frontend_innerblocks', '__return_false' );
