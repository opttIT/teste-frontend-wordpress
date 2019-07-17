<?php
require get_template_directory() . '/inc/customizer.php';

function load_scripts(){
//    wp_enquence_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',
//      array('jquery'), '4.3.1', true );
    wp_enqueue_style( 'boostrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', 
        array(), '4.3.1','all' );
    wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0',
        'all' );
}

add_action( 'wp_enqueue_scripts', 'load_scripts' );


function wptestefrontend_config(){
    register_nav_menus(
    array(
        'my_main_menu' => 'Main Menu',
        'footer_menu' => 'Main Menu'
    )
);

$args = array(
    'height'	=> 225,
    'width'		=> 1920
);
add_theme_support( 'custom-header', $args );
add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'wptestefrontend_config', 0 );

