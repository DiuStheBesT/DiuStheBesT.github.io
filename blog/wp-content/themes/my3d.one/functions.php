<?php

if (function_exists('register_sidebars')) {
    register_sidebar(array(
        'name' => 'sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="side-title">',
        'after_title' => '</div>',
    ));

    register_sidebar(array(
        'name' => 'footer',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '',
        'after_title' => '',
    ));
}

function my_scripts() {
    wp_deregister_script( 'jquery' );

    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js');

    wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

add_theme_support('automatic-feed-links');

register_nav_menu('foot', __('Foot Menu', 'epoca'));

add_theme_support('post-thumbnails');

add_action('after_setup_theme', 'footer_enqueue_scripts');
function footer_enqueue_scripts() {
   remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'wp_enqueue_scripts', 1);
    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_enqueue_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5);
}

?>
