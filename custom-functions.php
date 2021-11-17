<?php

/**
 * standard "page/multi-post index/listing" & "single-blog-post" header styles
 */
function get_page_multi_heading( $content_str = '' ) {
  $class = 'fw-light text-muted mb-4 border-bottom border-dashed border-spaceblue-600';
  return '<h1 class="' . $class . '">' . $content_str . '</h1>';
}
function get_post_single_heading( $content_str = '' ) {
  $class = 'fs-2 fw-600 mb-2';
  return '<h2 class="' . $class . '">' . $content_str . '</h2>';
}



/**
 * example inline SVG function atts array supported keys
 */
// array(
//   'div_class' => 'icon baseline', // or 'img logo' or something
//   'svg_class' => '',
//   'svg_title' => '',
//   'role_img' => false,
//   'aria_hidden' => true
// )

/**
 * inline SVG function
 * desired SVG must exist in ./dist/images,
 * preferably by import in main.js and processing by webpack
 */
function inline_svg( $svg_name, $atts = array() ) {
  // load atts or set defaults
  extract(shortcode_atts(array(
    'div_class' => '',
    'svg_class' => '',
    'svg_title' => '',
    'svg_role_img' => false,
    'svg_aria_hidden' => true,
  ), $atts));

  // load initial svg content
  $svg_content = file_get_contents( get_template_directory() . '/dist/images/' . $svg_name . '.svg' );

  // replace svg class
  $svg_content = str_replace('{{class-placeholder}}', $svg_class, $svg_content);

  // handle if role=img
  $svg_content = $svg_role_img ? str_replace('<svg ', '<svg role="img" ', $svg_content) : $svg_content;

  // handle if aria_hidden
  $svg_content = $svg_aria_hidden ? str_replace('<svg ', '<svg aria-hidden="true" ', $svg_content) : $svg_content;

  // handle svg title
  $svg_title = $svg_title == '' ? '' : '<title>' . $svg_title . '</title>';
  $svg_content = substr_replace($svg_content, $svg_title, strpos($svg_content,'>') + 1, 0);

  // handle if div class
  $svg_content = $div_class == '' ? $svg_content : '<div class="' . $div_class . '">' . $svg_content . '</div>';

  // return assembled svg (or div>svg)
  return $svg_content;
};


?>