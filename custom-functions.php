<?php

/**
 * Function to support inline SVG icons by name with div wrapper
 */
// function svg_icon_use($icon_name, $div_class = '') {
//   $div_class .= ' icon';
//   $output = "<div class=\"$div_class $icon_name\"><svg class=\"$icon_name\" aria-hidden=\"true\">";
//   $output .= "<use xlink:href=\"" . get_stylesheet_directory_uri() . "/dist/images/icon-sprites.svg#$icon_name\"></use>";
//   return $output . "</svg></div>";
// };

// function svg_logo_use($icon_name, $div_class = '', $svg_title = 'Logo') {
//   $div_class .= ' logo';
//   $output = "<div class=\"$div_class $icon_name\"><svg class=\"$icon_name\" role=\"img\"><title>$svg_title</title>";
//   $output .= "<use xlink:href=\"" . get_stylesheet_directory_uri() . "/dist/images/icon-sprites.svg#$icon_name\"></use>";
//   return $output . "</svg></div>";
// };

function inline_svg(
    $svg_name,
    $div_class = 'icon',
    $svg_class = '',
    $svg_title = '',
    $svg_role_img = false,
    $svg_aria_hidden = true) {
  $svg_content = file_get_contents( get_template_directory_uri() . '/dist/images/' . $svg_name . '.svg' );
  $to_replace = $svg_class == '' ? 'class="{{class-placeholder}}"' : '{{class-placeholder}}';
  $svg_content = str_replace($to_replace, $svg_class, $svg_content);
  $svg_content = $svg_role_img ? str_replace('<svg ', '<svg role="img" ', $svg_content) : $svg_content;
  $svg_content = $svg_aria_hidden ? str_replace('<svg ', '<svg aria-hidden="true" ', $svg_content) : $svg_content;
  $svg_title = $svg_title == '' ? '' : '<title>' . $svg_title . '</title>';
  $svg_content = substr_replace($svg_content, $svg_title, strpos($svg_content,'>') + 1, 0);
  $svg_content = $div_class == '' ? $svg_content : '<div class="' . $div_class . '">' . $svg_content . '</div>';
  return $svg_content;
};

?>