<?php
/**
 * The article template.
 *
 * @author Recovery Dharma NYC
 * @since 1.0.0
 */

namespace WP_RDNYC;

?>
<article <?php $extra_post_class = is_singular() ? '' : ' mb-two-rem';
    echo post_class( 'post border-bottom border-gray-750 pb-4' . $extra_post_class ); ?>
  itemscope itemtype="https://schema.org/CreativeWork">

  <header class="post-header">
    <h2 class="post-title fs-2 fw-600 mb-2">
    <?php
      if ( is_archive() || is_search() || is_home() ) {
        printf( '<a href="%s" rel="bookmark">%s</a>',
          esc_url( get_the_permalink() ),
          esc_html( get_the_title() )
        );
      } else {
        echo get_the_title();
      } ?>
    </h2>

    <div class="post-date text-gray-400 mb-3" style="margin-top: -.33rem;">
      <!-- inline_svg( 'bsi-clock', array( 'div_class' => 'icon baseline me-2' ) ) .  -->
      <?php echo get_the_date('F j, Y'); ?>
    </div>

  </header>

  <div class="article post-body">
    <?php
    if ( has_post_thumbnail() ) {
      echo get_the_post_thumbnail( get_the_ID(), 'large', ['class' => 'rounded shadow mb-3 mw-100 h-auto'] );
    }

    the_content(); ?>
  </div>
</article>
