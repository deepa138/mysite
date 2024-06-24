<?php
// Enqueue parent theme styles
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles', 11 );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri() );
}


// Enqueue Bootstrap CSS/js
function enqueue_bootstrap() {
	
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), null, true);
    wp_enqueue_style('icon', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css');
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/assets/custom-js.js', array('jquery'), '1.0', true);


}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap');

// widgets creation

function register_custom_widget_areas() {
    // First Header Widget Area
    register_sidebar(array(
        'name'          => 'Header Area 1',
        'id'            => 'custom-widget-area-1',
        'before_widget' => '<div class="custom-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="custom-widget-title">',
        'after_title'   => '</h2>',
    ));

    // Second Header Widget Area
    register_sidebar(array(
        'name'          => 'Header Area 2',
        'id'            => 'custom-widget-area-2',
        'before_widget' => '<div class="custom-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="custom-widget-title">',
        'after_title'   => '</h2>',
    ));
      // third Header Widget Area
      register_sidebar(array(
        'name'          => 'Header Area 3',
        'id'            => 'custom-widget-area-3',
        'before_widget' => '<div class="custom-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="custom-widget-title">',
        'after_title'   => '</h2>',
    ));

    // First Footer Widget Area
    register_sidebar(array(
        'name'          => 'Footer Area 1',
        'id'            => 'footer-widget-area-1',
        'before_widget' => '<div class="custom-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="custom-widget-title">',
        'after_title'   => '</h2>',
    ));

    // Second Footer Widget Area
    register_sidebar(array(
        'name'          => 'Footer Area 2',
        'id'            => 'footer-widget-area-2',
        'before_widget' => '<div class="custom-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="custom-widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'register_custom_widget_areas');


