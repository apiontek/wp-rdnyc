<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WPRDNYC
 */

namespace WP_RDNYC;

?>

    <footer class="footer mt-auto py-3 text-center">

      <span class="text-gray-400 fs-smaller">&copy; <?php echo date("Y") ?> Recovery Dharma NYC</span>

    </footer>

  <?php wp_footer(); ?>

  <?php
    if (is_front_page()) :
  ?>
    <img 
      src="<?php echo get_template_directory_uri() . '/dist/images/svg-roll-mandala.svg'; ?>"
      class="img roll-mandala" aria_hidden="true"
    >
  <?php
    endif;
  ?>

  </body>
</html>
