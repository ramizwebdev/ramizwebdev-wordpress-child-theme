<?php

/**
 * Custom admin and login modifications for Ramiz Web Dev child theme.
 *
 * @package RamizWebDev
 */

/**
 * Customize the admin footer text.
 *
 * Displays custom branding in the admin footer.
 */
function rwd_custom_admin_footer()
{
    echo 'Theme developed by <a href="https://ramizwebdev.com" target="_blank">Ramiz Web Dev</a>.';
}
add_filter('admin_footer_text', 'rwd_custom_admin_footer');

/**
 * Customize the login logo URL.
 *
 * Changes the login logo URL to point to the Ramiz Web Dev website.
 *
 * @return string Custom URL for the login logo.
 */
function rwd_custom_login_logo_url()
{
    return 'https://ramizwebdev.com';
}
add_filter('login_headerurl', 'rwd_custom_login_logo_url');

/**
 * Customize the login logo.
 *
 * Adds a custom logo to the WordPress login page.
 */
function rwd_custom_login_logo()
{
    echo '<style type="text/css">
        #login h1 a {
            background-image: url("https://ramizwebdev.com/wp-content/uploads/2024/10/cropped-dev_ramiz_1707-2-1-png-300x148.avif") !important;
            background-size: contain;
            width: 100%;
        }
    </style>';
}
add_action('login_head', 'rwd_custom_login_logo');

/**
 * Remove the WordPress logo from the admin bar.
 *
 * Removes the WordPress logo from the admin bar for a cleaner interface.
 *
 * @param WP_Admin_Bar $wp_admin_bar WordPress Admin Bar instance.
 */
function rwd_remove_wp_logo($wp_admin_bar)
{
    $wp_admin_bar->remove_node('wp-logo');
}
add_action('admin_bar_menu', 'rwd_remove_wp_logo', 999);

/**
 * Add a custom favicon to the admin and front-end.
 *
 * Adds a favicon to the admin dashboard and the front-end of the website.
 */
function rwd_add_custom_favicon()
{
    echo '<link rel="icon" type="image/png" href="https://ramizwebdev.com/wp-content/uploads/2024/12/cropped-RamizWebDev-logo-Icon-only-white-2-32x32-1.avif">';
}
add_action('admin_head', 'rwd_add_custom_favicon');
add_action('wp_head', 'rwd_add_custom_favicon');

/**
 * Remove emoji scripts and styles.
 *
 * Disables WordPress emoji-related scripts and styles for better performance.
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
