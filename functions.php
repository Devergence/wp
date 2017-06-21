<?php 

function strongly_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
    wp_enqueue_style( 'ie8', get_template_directory_uri() . '/css/ie8.css' );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'jquery-dropotron', get_template_directory_uri() . '/js/jquery.dropotron.min.js' );
	wp_enqueue_script( 'viewport', get_template_directory_uri() . '/js/skel-viewport.min.js' );
	wp_enqueue_script( 'skel', get_template_directory_uri() . '/js/skel.min.js' );
    wp_enqueue_script( 'util', get_template_directory_uri() . '/js/util.js' );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js' );
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
?>