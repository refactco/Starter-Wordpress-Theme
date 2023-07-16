<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Starter_Theme
 */

if ( ! defined( 'THEME_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'THEME_VERSION', '1.0.0' );
}

/**
 * Add theme support.
 */
function starter_theme_setup() {
	// Make theme available for translation: Translations can be filed in the /languages/ directory.
	load_theme_textdomain( 'starter-theme', get_template_directory() . '/languages' );

	// Add support for Post thumbnails.
	add_theme_support( 'post-thumbnails' );

	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for Editor Styles.
	add_theme_support( 'editor-styles' );

	// Enqueue Editor Styles.
	add_editor_style( 'assets/styles/main.css' );
}
add_action( 'after_setup_theme', 'starter_theme_setup' );

/**
 * Set Default Logo
 */
function starter_theme_custom_logo( $html ) {
	if ( !$html ) {
		$html = sprintf(
			'<a href="%1$s" class="custom-logo-link" rel="home"><img src="%2$s" width="168" alt="%3$s" class="custom-logo"></a>',
			esc_url( home_url() ),
			get_theme_file_uri( 'assets/images/logo.png' ),
			get_bloginfo( 'name' )
		);
	}
	return $html;
}
add_filter( 'get_custom_logo', 'starter_theme_custom_logo' );

/**
 * Enqueue the Assets files.
 */
function starter_theme_assets() {
	$theme_version = defined( 'THEME_VERSION' ) ? THEME_VERSION : '1.0.0';
	wp_register_style( 'starter-theme-flickity', get_theme_file_uri( 'assets/styles/flickity.css' ), [], $theme_version );
	wp_register_script( 'starter-theme-flickity', get_theme_file_uri( 'assets/scripts/flickity.js' ), [], $theme_version, true );

	wp_enqueue_style( 'starter-theme', get_theme_file_uri( 'assets/styles/main.css' ), [], $theme_version );
	wp_enqueue_script( 'starter-theme', get_theme_file_uri( 'assets/scripts/main.js' ), [], $theme_version, true );
}
add_action( 'wp_enqueue_scripts', 'starter_theme_assets' );

function starter_theme_admin_assets() {
	$theme_version = defined( 'THEME_VERSION' ) ? THEME_VERSION : '1.0.0';
	wp_enqueue_style( 'starter-theme-admin', get_theme_file_uri( 'assets/styles/admin.css' ), [], $theme_version );
	wp_register_style( 'starter-theme-flickity', get_theme_file_uri( 'assets/styles/flickity.css' ), [], $theme_version );
	wp_register_script( 'starter-theme-flickity', get_theme_file_uri( 'assets/scripts/flickity.js' ), [], $theme_version, true );
}
add_action( 'admin_enqueue_scripts', 'starter_theme_admin_assets' );


// Block style
require_once get_theme_file_path( 'inc/register-block-styles.php' );

// WP Hooks
require_once get_theme_file_path( 'inc/hooks.php' );

// Advanced Custom Fields Functions
require_once get_theme_file_path( 'inc/acf.php' );
