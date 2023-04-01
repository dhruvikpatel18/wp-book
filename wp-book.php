<?php
/**
 * Plugin Name: WP Book
 * Description: This Plugin has features like, upon activation it will create custom post type book, hierarchical taxonomy Book Category, non-hierarchical taxonomy Book Tag, custom meta box to save book meta information, custom dashboard widget which shows the top 5 book categories
 * Version: 1.0.0
 * Author: Dhruvik Malaviya
 * Author URI: not available
 */

//if someone directly access through url header, die!
if(!defined('ABSPATH')){
    header('Location:/your_header/');
    die();
}

//function called upon activation of the plugin 
function wp_book_activation_func(){
    partials\base\wp_book_activation::active();
}
register_activation_hook( __FILE__, 'wp_book_activation_func' );

//function called upon deactivation of the plugin 
function wp_book_deactivation_func(){
    partials\base\wp_book_deactivation::deactive();
}
register_deactivation_hook( __FILE__, 'wp_book_deactivation_func' );

//register all services for plugin
if( class_exists( 'partials\\init' ) ) {
    partials\init::register_services();
}