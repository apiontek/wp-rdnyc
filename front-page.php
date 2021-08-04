<?php
/**
 * The 73k theme static front page style
 *
 * @author Recovery Dharma NYC
 * @since 1.0.0
 */

namespace WP_RDNYC;

get_header(); ?>

<main id="fp-main" class="container-xl mt-0 mt-md-3">
  <div class="fp-grid">


    <?php
      if ( is_active_sidebar( 'front-page-widgets' ) ) :
        dynamic_sidebar( 'front-page-widgets' );
      endif;
      ?>


  </div>
</main>
<?php
get_footer();
