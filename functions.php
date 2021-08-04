<?php
/**
 * Kickoff theme setup and build
 */

namespace WP_RDNYC;

define( 'WP_RDNYC_VERSION', wp_get_theme()->version );
define( 'WP_RDNYC_DIR', __DIR__ );
define( 'WP_RDNYC_URL', get_template_directory_uri() );

/**
 * Custom functions
 */
require_once( WP_RDNYC_DIR . '/custom-functions.php' );

/**
 * Autoloader for browersync
 */
if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
  require_once( WP_RDNYC_DIR . '/vendor/autoload.php' );
  \A7\autoload( __DIR__ . '/src' );
} else {
  require_once( WP_RDNYC_DIR . '/src/classes.php' );
  require_once( WP_RDNYC_DIR . '/src/enqueue.php' );
  require_once( WP_RDNYC_DIR . '/src/setup.php' );
  require_once( WP_RDNYC_DIR . '/src/sidebars.php' );
}
