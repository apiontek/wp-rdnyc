<?php
/**
 * The article template.
 *
 * @author Recovery Dharma NYC
 * @since 1.0.0
 */

namespace WP_RDNYC;

?>
<article
  <?php
    $extra_post_class = is_singular() ? '' : ' mb-two-rem';
    echo post_class( 'post border-bottom border-spaceblue-700 pb-4' . $extra_post_class );
  ?>
  itemscope itemtype="https://schema.org/CreativeWork">

  <header class="post-header">
    <?php
      echo (is_page() ? '<h1 class="post-title fw-light text-gray-300 mb-4 border-bottom border-dashed border-spaceblue-600">'
        : '<h2 class="post-title fs-2 fw-600 mb-2">');

      if ( is_archive() || is_search() || is_home() ) :
        printf( '<a href="%s" rel="bookmark">%s</a>',
          esc_url( get_the_permalink() ),
          esc_html( get_the_title() )
        );
      else : echo esc_html( get_the_title() );
      endif;

      echo (is_page() ? '</h1>' : '</h2>');
    ?>

    <?php if (!is_page()) : ?>
    <div class="post-date text-gray-400 mb-3" style="margin-top: -.33rem;">
      <!-- inline_svg( 'bsi-clock', array( 'div_class' => 'icon baseline me-2' ) ) .  -->
      <?php
        if (get_the_title() === '') {
          echo '<a href="' . esc_url( get_the_permalink() ) . '" rel="bookmark">';
        }
        echo get_the_date('F j, Y');
        if (get_the_title() === '') {
          echo '</a>';
        }
      ?>
    </div>
    <?php endif; ?>

  </header>

  <div class="article post-body">
    <?php
      if ( has_post_thumbnail() ) {
        echo get_the_post_thumbnail( get_the_ID(), 'large', ['class' => 'rounded shadow mb-3 mw-100 h-auto'] );
      }

      the_content();

      wp_link_pages(
        array(
          'before' => '<nav class="d-flex justify-content-center" aria-label="Page navigation for post ' . get_the_title() . '"><div class="d-flex align-items-center pe-2">Post pages:</div><div class="pagination">',
          'after' => '</div></nav>',
          'link_before' => '<span class="page-link">',
          'link_after' => '</span>'
        )
      );
    ?>
  </div>

</article>
