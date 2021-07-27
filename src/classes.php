<?php
/**
 * This file adds functions and actions for classes.
 *
 * @author Recovery Dharma NYC
 * @since 1.0.0
 */

namespace WP_RDNYC;

use \Walker_Nav_Menu;

add_filter( 'body_class', function( $classes ) {

  if ( is_singular( ['post', 'page'] ) ) {
    $classes[] = 'singular';
  }

  if ( is_front_page() ) {
    $classes[] = 'front-page';
  }

  return $classes;

});

/**
 * Filter to add CSS class to navbar menu <li> items
 */
add_filter( 'nav_menu_css_class' , function( $classes, $item, $args, $depth ) {
  if ( 'navbar-main-menu' === $args->theme_location ) {
    if (property_exists($args, 'menu_item_class')) {
      array_push($classes, $args->menu_item_class);
    }
  }      
  return $classes;
}, 3, 4 );

/**
 * Filter to add CSS class to navbar menu item <a> links
 */
add_filter( 'nav_menu_link_attributes' , function( $atts, $item, $args ) {
  if ( 'navbar-main-menu' === $args->theme_location ) {
    $atts['class'] = (empty($atts['class'])) ? '' : $atts['class'];
    if ( in_array('current_page_item', $item->classes) ) {
      $atts['class'] .= ' active ';
    }
    if (property_exists($args, 'link_class')) {
      $atts['class'] .= ' ' . $args->link_class;
    }
  }
  return $atts;
}, 2, 3 );


/**
 * custom walker to handle nav main menu dropdowns (one level deep, bs5 doesn't have native submenu support)
 */
class RDNYC_Menu_Walker extends Walker_Nav_Menu {

  function start_lvl(&$output, $depth = 0, $args = array()) {
    $output .= "\n<ul class=\"dropdown-menu dropdown-menu-dark dropdown-menu-lg-end\">\n";
  }

  function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
    $item_html = '';
    parent::start_el($item_html, $item, $depth, $args);

    if ( $item->is_dropdown && $depth === 0 ) {
      $item_html = str_replace( '<a', '<a class="dropdown-toggle top-navbar-grid-main-menu-item-link" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false"', $item_html );
      $item_html = str_replace( '</a>', inline_svg( 'bsi-chevron-down', array( 'div_class' => 'icon baseline ms-1' ) ) . '</a>', $item_html );
    }

    if ( $item->menu_item_parent && $item->menu_item_parent > 0 && $depth > 0 ) {
      $item_html = str_replace( '<a', '<a class="dropdown-item top-navbar-grid-main-menu-item-link"', $item_html );
    }

    $output .= $item_html;
  }

  function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output) {
    if ( $element->current )
      $element->classes[] = 'active';

    $element->is_dropdown = !empty( $children_elements[$element->ID] );

    if ( $element->is_dropdown && $depth === 0 ) {
      $element->classes[] = 'dropdown';
    }

    parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
  }

}