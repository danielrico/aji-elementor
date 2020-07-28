<?php

// add featured image support
add_theme_support( 'post-thumbnails' );
// Image size for recettes list
if ( function_exists( 'add_image_size' ) ) { 
  add_image_size( 'gallery_thumb', 500);
  add_image_size( 'gallery_large', '', 1100);
}

// load css
function load_styles() {
  wp_register_style('aji-elementor',  get_bloginfo( 'stylesheet_url' ));
  wp_enqueue_style( 'aji-elementor');
}
add_action('wp_print_styles', 'load_styles');


// upload svg files to medias
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


// register menus
function register_my_menus() {
  register_nav_menus(
    array( 
      'primary_menu' => __( 'Primary menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// logo
add_theme_support( 'custom-logo' );
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

// One column admin dashboard
function wpse126301_dashboard_columns() {
  add_screen_option(
    'layout_columns',
    array(
      'max'     => 2,
      'default' => 1
    )
  );
}
add_action( 'admin_head-index.php', 'wpse126301_dashboard_columns' );


?>