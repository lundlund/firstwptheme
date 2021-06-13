<?php

// Adds theme functions ***********************************************
function lundtheme_theme_support(){

    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
// hook to handle title-tag - dynamic
add_action( 'after_setup_theme', 'lundtheme_theme_support');


function lundtheme_menus(){

    $locations =array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu"
    );

    register_nav_menus($locations);
}
// hook to handle menus - dynamic
add_action( 'init', 'lundtheme_menus');



function config_custom_logo() {
        
    add_theme_support('custom-logo');
}
// hook to handle custom logo
add_action('after_setup_theme','config_custom_logo');

//End theme functions **************************************************


// Fecthes CSS
function lundtheme_register_styles(){

    $version = wp_get_theme()->get( 'Version' ); 
    wp_enqueue_style('lundtheme-style', get_template_directory_uri() . "/style.css", array('lundtheme-bootstrap'), $version, 'all');

    wp_enqueue_style('lundtheme-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');

    wp_enqueue_style('lundtheme-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '1.0', 'all');
}
// hook to handle CSS scripts
add_action( 'wp_enqueue_scripts', 'lundtheme_register_styles');



// Fecthes JS
function lundtheme_register_scripts(){

    wp_enqueue_script('lundtheme-jquery',"https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
    
    wp_enqueue_script('lundtheme-popper',"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true);

    wp_enqueue_script('lundtheme-bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" , array(), '4.4.1', true);

    wp_enqueue_script('lundtheme-main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0.0', true);
}
// hook to fetch JS
add_action( 'wp_enqueue_scripts', 'lundtheme_register_scripts');


// Widgets function
function lundtheme_widget_areas(){

    register_sidebar( 
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget' => '</ul>',
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area'
        )
    );

    register_sidebar( 
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Footer Area',
            'id' => 'footer-1',
            'description' => 'Footer Widget Area'
        )
    );
}

// hook to handle widgets
add_action( 'widgets_init', 'lundtheme_widget_areas');

?>