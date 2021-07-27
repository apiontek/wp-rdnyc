<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WPRDNYC
 */

namespace WP_RDNYC;

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <meta name="description" content="Recovery Dharma NYC: a peer-led movement using Buddhist practices and principles to overcome addiction through meditation, personal inquiry, and community">

  <link rel="preload" href="<?php echo get_stylesheet_directory_uri() . '/dist/fonts/open-sans-latin-400-normal.woff2'; ?>" as="font" type="font/woff2" crossorigin="anonymous">
  <link rel="preload" href="<?php echo get_stylesheet_directory_uri() . '/dist/fonts/permanent-marker-latin-400-normal.woff2'; ?>" as="font" type="font/woff2" crossorigin="anonymous">

  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri() . '/dist/images/apple-touch-icon.png'; ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri() . '/dist/images/favicon-32x32.png'; ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri() . '/dist/images/favicon-16x16.png'; ?>">
  <link rel="manifest" href="<?php echo get_stylesheet_directory_uri() . '/dist/images/site.webmanifest'; ?>">
  <meta name="apple-mobile-web-app-title" content="73k">
  <meta name="application-name" content="73k">
  <meta name="msapplication-TileColor" content="#2b5797">
  <meta name="theme-color" content="#ffffff">
  <link rel="icon" href="/favicon.ico">

  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">

  <nav id="top-navbar-grid-outer">

    <div id="top-navbar-grid-brand-outer">
      <h1>
        <!-- my-0 py-0 -->
        <?php
          printf( '<a id="top-navbar-grid-brand-link" href="%1$s" rel="home">',
            esc_url( home_url( '/' ) )
          );

          echo inline_svg( 'svg-rdnyc-logo',
              array(
                'svg_class' => 'img header-logo',
                'svg_title' => 'Recovery Dharma New York City',
                'svg_role_img' => true,
                'svg_aria_hidden' => false
              )
            );

          echo "</a>";
        ?>
      </h1>
    </div>

    <div id="top-navbar-grid-toggle-button-outer">
      <button class="hamburger hamburger--squeeze" id="top-navbar-grid-toggle-button"
        type="button" data-bs-toggle="collapse" data-bs-target="#top-navbar-grid-main-menu-outer"
        aria-controls="top-navbar-grid-main-menu-outer" aria-expanded="false" aria-label="Toggle navigation"
      >
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
    </div>

    <div id="top-navbar-grid-socialicon-widget-outer">
      <?php
          // using widget to include social icons, so they can be edited by wordpress users
          if ( is_active_sidebar( 'navbar-socialicon-widget' ) ) :
            dynamic_sidebar( 'navbar-socialicon-widget' );
          endif;
        ?>
    </div>
    
    <?php
        // main navigation menu
        if ( has_nav_menu( 'navbar-main-menu' ) ) {
          // echo '<section>';
          wp_nav_menu([
            'theme_location'  => 'navbar-main-menu',
            'depth' => 2,
            'menu'  => 'navbar-main-menu',
            'container'       => 'div',
            'container_id' => 'top-navbar-grid-main-menu-outer',
            'menu_class'      => 'top-navbar-grid-main-menu',
            'menu_item_class' => 'top-navbar-grid-main-menu-item',
            'link_class'      => 'top-navbar-grid-main-menu-item-link',
            'walker' => new RDNYC_Menu_Walker()
          ]);
          // echo '</section>';
        }
      ?>
  
  </nav>
