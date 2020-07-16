<?php

/*  -------------------------------------------------
Enqueue css and javascript files
Javscript and css will be compiled from src and placed in assets folder during build/dev
--------------------------------------------------- */

function addAssets()
{
    wp_enqueue_style('app', get_template_directory_uri() . '/assets/css/app.css', false, '1.1', 'all');

    wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js', false, '1.1', true);
}
add_action('wp_enqueue_scripts', 'addAssets');


function theme_setup()
{
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
    ));
}
add_action('after_setup_theme', 'theme_setup');


function widgets_setup()
{
    register_sidebar( array(
        'id'            => 'primary',
        'name'          => __( 'Primary Sidebar', 'wordpress-webpack-starter' ),
        'description' => __( 'Primary Sidebar', 'wordpress-webpack-starter' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'widgets_setup' );