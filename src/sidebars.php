<?php

namespace WP_RDNYC;

/**
 * Register widget area.
 */
add_action( 'widgets_init', function () {

  register_sidebar( [
    'name'            => esc_html( 'Navbar Social Icons' ),
    'id'              => 'navbar-socialicon-widget',
    'description'     => 'Navbar mini widget area for social icons',
    'before_widget'   => '<section id="%1$s" class="%2$s widget">',
    'after_widget'    => '</section>',
  ] );

  register_sidebar( [
    'name'            => esc_html( 'Front Page' ),
    'id'              => 'front-page-widgets',
    'description'     => 'Front page widget area',
    'before_widget'   => '<section id="%1$s" class="%2$s widget">',
    'after_widget'    => '</section>',
  ] );

} );