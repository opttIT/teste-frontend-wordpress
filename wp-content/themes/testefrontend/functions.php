<?php
require get_template_directory() . '/inc/customizer.php';

function load_scripts()
{
    //    wp_enquence_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',
    //      array('jquery'), '4.3.1', true );
    wp_enqueue_style(
        'boostrap-css',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',
        array(),
        '4.3.1',
        'all'
    );
    wp_enqueue_style(
        'template',
        get_template_directory_uri() . '/css/template.css',
        array(),
        '1.0',
        'all'
    );
}

add_action('wp_enqueue_scripts', 'load_scripts');


function wptestefrontend_config()
{
    register_nav_menus(
        array(
            'my_main_menu' => 'Main Menu',
            'footer_menu' => 'Footer Menu'
        )
    );

    $args = array(
        'height'    => 225,
        'width'        => 1920
    );
    add_theme_support('custom-header', $args);
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'wptestefrontend_config', 0);

add_action('widgets_init', 'wptestefrontend_sidebar');

function wptestefrontend_sidebar()
{

    register_sidebar(
		array(
			'name' => __( 'Home Page Sidebar', 'wptestefrontend' ),
			'id' => 'sidebar-1',
			'description' => __( 'Sidebar to be used on Home Page', 'wptestefrontend'),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);
    register_sidebar(
        array(
            'name' => 'Social Icons',
            'id' => 'social-media',
            'description' => "Services Area",
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
}
