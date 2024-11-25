<?php
// Enqueue Stylesheets, Bootstrap, and Google Fonts
function swim_coach_enqueue_styles() {
    // Enqueue Bootstrap CSS (via CDN)
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css');
    
    // Enqueue Bootstrap Icons (via CDN)
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css');

    // Enqueue Google Fonts
    wp_enqueue_style(
        'google-fonts', 
        'https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@400;500;600&family=Source+Sans+Pro:wght@900&family=Montserrat:wght@400;500;600;700&display=swap'
    );
    
    // Enqueue theme stylesheet with versioning for cache busting
    wp_enqueue_style('style', get_stylesheet_uri(), array('bootstrap-css', 'bootstrap-icons', 'google-fonts'), filemtime(get_stylesheet_directory() . '/style.css'));

    // Enqueue custom styles for specific templates
    wp_enqueue_style('contact-style', get_stylesheet_directory_uri() . '/Styles/contact.css', array('style'));
    wp_enqueue_style('front-style', get_stylesheet_directory_uri() . '/Styles/front.css', array('style'));
}
add_action('wp_enqueue_scripts', 'swim_coach_enqueue_styles');




// Enqueue Bootstrap JavaScript (without jQuery)
function swim_coach_enqueue_scripts() {
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js', array(), null, true);
    
    // Enqueue your custom scrollandmove.js script
    wp_enqueue_script(
        'scrollandmove-js', // Handle for the script
        get_template_directory_uri() . '/js/scrollandmove.js', // Path to the JS file
        array(), // Dependencies (none, unless needed)
        null, // Version (you can set null for no versioning)
        true // Load in the footer (true is recommended for performance)
    );
}
add_action('wp_enqueue_scripts', 'swim_coach_enqueue_scripts');

// Register Navigation Menus
function swim_coach_register_menus() {
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'swim-coach')
    ));
}
add_action('after_setup_theme', 'swim_coach_register_menus');

// Disable Gutenberg Editor for Posts and Pages
function swim_coach_disable_gutenberg($is_enabled, $post_type) {
    return false; // Disable Gutenberg editor completely
}
add_filter('use_block_editor_for_post', 'swim_coach_disable_gutenberg', 10, 2);
add_filter('use_block_editor_for_post_type', 'swim_coach_disable_gutenberg', 10, 2);

// Remove Gutenberg Block Library CSS (front-end)
function swim_coach_remove_gutenberg_styles() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('global-styles');
}
add_action('wp_enqueue_scripts', 'swim_coach_remove_gutenberg_styles', 100);
?>
