<?php
/**
 * The article template.
 *
 * @author Recovery Dharma NYC
 * @since 1.0.0
 */

namespace WP_RDNYC;

// for singular page, no extra bottom margin...
$post_class = is_singular() ? '' : ' mb-two-rem ';
$post_class .= 'post border-bottom border-spaceblue-700 pb-4';
$post_class = esc_attr( implode( ' ', get_post_class( $post_class ) ) );

?>

<article id="post-<?php the_ID(); ?>" class="<?php echo $post_class; ?>" itemscope itemtype="https://schema.org/CreativeWork">

  <header class="post-header">
    <?php
      // post/page header inner content (title, with link for query/index listings)
      $h_inner = ( is_archive() || is_search() || is_home() ) ?
        '<a href="' . esc_url( get_the_permalink() ) . '" rel="bookmark">'
        . esc_html( get_the_title() ) . '</a>' :
          esc_html( get_the_title() );

      // For pages we want a larger heading like an index/query listing
      // otherwise, a regular article/post header
      echo (is_page() ? get_page_multi_heading( $h_inner ) : get_post_single_heading( $h_inner ));
    ?>

    <?php // when not a page, we also output the published date
      if (!is_page()) : ?>
      <div class="post-date text-gray-400 mb-3" style="margin-top: -.33rem;">
        <?php
          if (get_the_title() === '') :
            printf( '<a href="%s" rel="bookmark">%s</a>',
              esc_url( get_the_permalink() ),
              get_the_date('F j, Y')
            );

          else :
            echo get_the_date('F j, Y');
          
          endif;
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
