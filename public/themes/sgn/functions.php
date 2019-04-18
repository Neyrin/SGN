<?php
declare(strict_types=1);

error_reporting(E_ALL & ~E_NOTICE);

add_action('after_setup_theme', function () {
   add_theme_support('title-tag');
   add_theme_support('soil-clean-up');
   add_theme_support('soil-disable-asset-versioning');
   add_theme_support('soil-disable-trackbacks');
   add_theme_support('soil-js-to-footer');
   add_theme_support('soil-nice-search');
   add_theme_support('soil-relative-urls');
});

// Hide admin bar on the front end
add_filter('show_admin_bar', '__return_false');

require get_template_directory().'/plate.php';

// Register navigation menus.
register_nav_menus([
   'navigation' => __('Navigation', 'wordplate'),
   'activities' => __('Activities', 'wordplate'),
]);

/**
* Register support for Gutenberg wide images in your theme
*/
function mytheme_setup() {
 add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'mytheme_setup' );

// Enqueue styles and scripts the right way.
add_action('wp_enqueue_scripts', function () {
   // wp_deregister_script('jquery');
   // wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
   // wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', '', '', true);
   // wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', '', '', true);
   // wp_enqueue_script('jquery');
   // wp_enqueue_script('bootstrap');
   wp_enqueue_script('script', get_template_directory_uri() . '/script.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_style( 'style', get_stylesheet_uri() );
});