<?php 
    $template_uri = get_template_directory();

// Includes
    require $template_uri . "/include/setup.php";

// Hooks
    add_action('wp_enqueue_scripts', 'r3_theme_scripts' );
    add_action('after_setup_theme', 'r3_after_setup' );
    add_action("widgets_init", 'r3_widgets' );
    add_action('genesis_entry_footer', 'wpsites_image_nav_links', 25 );