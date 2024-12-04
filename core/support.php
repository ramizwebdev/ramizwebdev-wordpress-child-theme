<?php

/**
 * Custom Dashboard Widget for Ramiz Web Dev child theme.
 *
 * Displays theme support, updates, and offers directly in the WordPress admin dashboard.
 *
 * @package RamizWebDev
 */

/**
 * Add the custom dashboard widget.
 *
 * This function adds a "Theme Support & Updates" widget to the WordPress dashboard.
 */
function rwd_add_custom_dashboard_widget()
{
    wp_add_dashboard_widget(
        'rwd_custom_help_widget', // Unique widget ID
        'Theme Support & Updates', // Widget title
        'rwd_custom_dashboard_content' // Callback function to display widget content
    );
}
add_action('wp_dashboard_setup', 'rwd_add_custom_dashboard_widget');

/**
 * Content for the custom dashboard widget.
 *
 * This function generates the content that appears within the "Theme Support & Updates" widget.
 */
function rwd_custom_dashboard_content()
{
    // Display logo and intro
    echo '<div style="text-align: center; margin-bottom: 20px;">';
    echo '<img src="https://ramizwebdev.com/wp-content/uploads/2024/10/cropped-dev_ramiz_1707-2-1-png-300x148.avif" alt="Ramiz Web Dev" style="max-height: 60px; margin-bottom: 10px;">';
    echo '<h3>Welcome to Ramiz Web Dev Support</h3>';
    echo '</div>';

    // Display offers or ads from your website (dynamically loaded)
    echo '<div id="rwd-offers-section" style="padding: 10px; border: 1px solid #e1e1e1; border-radius: 5px; margin-bottom: 20px;">';
    echo '<strong>Current Offers:</strong>';
    echo '<div id="rwd-offers-content" style="margin-top: 10px;">Loading offers...</div>';
    echo '</div>';

    // Static support links (always visible)
    echo '<div>';
    echo '<p>Need help? Visit our <a href="https://ramizwebdev.com/contact-us/" target="_blank">Support Page</a>.</p>';
    echo '<p>Check out our <a href="https://ramizwebdev.com/blogs/" target="_blank">Blog</a> for updates and tips.</p>';
    echo '</div>';

    // JavaScript to dynamically load offers or promotions from the API
    echo '
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Fetching offers via the API
            fetch("https://ramizwebdev.com/wp-json/rwd/v1/offers") // Replace with your API URL
                .then(response => response.json())
                .then(data => {
                    const offersContainer = document.getElementById("rwd-offers-content");
                    if (data && data.offers && data.offers.length > 0) {
                        offersContainer.innerHTML = data.offers.map(offer => `
                            <p><a href="${offer.url}" target="_blank" style="text-decoration: none; color: #0073aa;">${offer.title}</a></p>
                        `).join("");
                    } else {
                        offersContainer.innerHTML = "<p>No offers available at the moment.</p>";
                    }
                })
                .catch(error => {
                    document.getElementById("rwd-offers-content").innerHTML = "<p>Unable to load offers. Please try again later.</p>";
                });
        });
    </script>';
}
