<?php
/**
 * Kickoff theme setup and build
 */

namespace WP_RDNYC;

define( 'WP_RDNYC_VERSION', wp_get_theme()->version );
define( 'WP_RDNYC_DIR', __DIR__ );
define( 'WP_RDNYC_URL', get_template_directory_uri() );

/**
 * Social icons definition & functions
 */
require_once( WP_RDNYC_DIR . '/socials.php' );

/**
 * Custom functions
 */
require_once( WP_RDNYC_DIR . '/custom-functions.php' );

/**
 * Custom shortcodes for use in content
 */
require_once( WP_RDNYC_DIR . '/custom-shortcodes.php');

/**
 * Autoloader for browersync
 */
require_once( WP_RDNYC_DIR . '/vendor/autoload.php' );

\A7\autoload( __DIR__ . '/src' );
