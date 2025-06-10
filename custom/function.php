<?php
function my_custom_script() {
    // Load a custom JS file from your theme's folder
    wp_enqueue_script(
        'my-custom-script', // Handle name
        get_template_directory_uri() . './assets/js/custom.js', // Path to JS file
        array(), // Dependencies, e.g., array('jquery')
        '1.0', // Version
        true // Load in footer
    );
}
add_action('wp_enqueue_scripts', 'my_custom_script');