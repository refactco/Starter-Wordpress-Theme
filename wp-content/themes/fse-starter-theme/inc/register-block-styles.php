<?php
/**
 * Block styles.
 *
 * @package Starter_Theme
 */
defined( 'ABSPATH' ) || exit;

/**
 * Register new block styles
 */
function starter_theme_register_block_styles() {
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'starter-theme-flat-button',
			'label' => __( 'Flat button', 'starter-theme' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'starter-theme-shadow-button',
			'label' => __( 'Button with shadow', 'starter-theme' ),
		)
	);
}
add_action( 'init', 'starter_theme_register_block_styles' );
