<?php

/**
 * RamizWebDev Theme functions and definitions
 *
 * This file contains core functionality for the RamizWebDev child theme.
 * It defines constants, enqueues styles, and includes additional files for branding and support features.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package RamizWebDev
 * @since 1.0.0
 */

/**
 * Define Constants
 *
 * RWD_CHILD_THEME_VERSION is used to ensure proper versioning of styles and scripts.
 */
define('RWD_CHILD_THEME_VERSION', '1.0.0');

/**
 * Enqueue Styles
 *
 * This function enqueues the child theme's stylesheet. It ensures the child theme styles
 * are loaded after the parent Astra theme styles to allow proper overriding.
 */
function rwd_enqueue_styles()
{

	// Enqueue the child theme's stylesheet
	wp_enqueue_style(
		'rwd-theme-css', // Handle for the stylesheet
		get_stylesheet_directory_uri() . '/style.css', // Path to the stylesheet
		array('astra-theme-css'), // Dependencies (load after Astra's main CSS)
		RWD_CHILD_THEME_VERSION, // Version number for cache busting
		'all' // Media type
	);
}
add_action('wp_enqueue_scripts', 'rwd_enqueue_styles', 15); // Priority 15 ensures it loads after parent theme styles

/**
 * Include Additional Core Functionality
 *
 * - core/branding.php: Handles theme branding-related features.
 * - core/support.php: Provides support functionality, such as dashboard widgets or custom admin features.
 */
require_once get_stylesheet_directory() . '/core/branding.php'; // Path to the branding functions file
require_once get_stylesheet_directory() . '/core/support.php'; // Path to the support functions file
