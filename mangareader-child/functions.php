<?php defined("ABSPATH") || die("!");
/**
 * import parent theme syle.css 
 * and add /script.js
 */
add_action( 'wp_enqueue_scripts', 'mangareader_child_enqueue_styles' );
function mangareader_child_enqueue_styles() {
    $parenthandle = 'parent-style'; 
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(), 
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version')
    );
    //uncomment script bellow if you want to add custom script
    /*
    wp_enqueue_script(
        'mangareader-child-script', 
        get_template_directory_uri() . '/script.js', 
        array('jquery'),
        "1.0.0",
        TRUE
    );
    */
}

