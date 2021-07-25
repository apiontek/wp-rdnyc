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

  <link rel="preload" href="<?php echo get_stylesheet_directory_uri() . '/dist/fonts/overpass-latin-400-normal.woff2'; ?>" as="font" type="font/woff2" crossorigin="anonymous">
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

<nav class="navbar navbar-expand-lg navbar-dark px-1 px-sm-2 px-lg-3 px-xl-4 px-xxl-5 pt-5 pb-3 ">
  <div class="container-fluid">

    <h1 class="my-0 py-0 lh-base">
      <?php
        printf( '<a class="navbar-brand" href="%1$s" rel="home">',
          esc_url( home_url( '/' ) )
        );

        // printf( '<span class="font-handbrush">%1$s</span>',
        //   esc_html( get_bloginfo( 'name' ) )
        // );
        echo svg_logo_use("rdnyc-logo", "", "Recovery Dharma New York City");

        echo "</a>";
      ?>
    </h1>

    <button class="hamburger hamburger--vortex collapsed navbar-toggler" id="navbarSupportedContentToggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="hamburger-box d-flex">
        <span class="hamburger-inner"></span>
      </span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">


    <?php
            if ( is_active_sidebar( 'navbar-socialicon-widget' ) ) :
              dynamic_sidebar( 'navbar-socialicon-widget' );
            endif;
            ?>


      <?php
        if ( has_nav_menu( 'navbar-main-menu' ) ) {
          wp_nav_menu([
            'theme_location'  => 'navbar-main-menu',
            'depth' => 1,
            'menu'  => 'navbar-main-menu',
            'container'       => '',
            'container_class' => '',
            'menu_class'      => 'navbar-nav',
            'menu_item_class' => 'nav-item',
            'link_class'      => 'nav-link font-monospace fs-6'
            // 'link_before' => '<span>',
            // 'link_after' => '</span>'
          ]);
        }
      ?>

    </div>

  </div>
</nav>
