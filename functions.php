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