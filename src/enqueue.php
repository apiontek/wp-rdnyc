<?php

namespace WP_RDNYC;

/**
 * Enqueue scripts and styles
 */
add_action( 'wp_enqueue_scripts', function() {

  $min_ext = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

  // JS
  wp_enqueue_script(
    'wp_rdnyc_js',
    WP_RDNYC_URL . "/dist/main{$min_ext}.js",
    [],
    WP_RDNYC_VERSION,
    true
  );

  // CSS
  wp_enqueue_style(
    'wp_rdnyc_css',
    WP_RDNYC_URL . "/dist/main{$min_ext}.css",
    [],
    WP_RDNYC_VERSION,
    ''
  );

} );