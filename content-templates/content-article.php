<?php
/**
 * The article template.
 *
 * @author Recovery Dharma NYC
 * @since 1.0.0
 */

namespace WP_RDNYC;

?>
<article class="post border-bottom border-gray pb-4 mb-3" itemscope itemtype="https://schema.org/CreativeWork">
  <header>
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

    <div class="post-date font-monospace text-gray-300 <?php echo (has_tag() ? '' : 'mb-3'); ?>">
      <?php 
        echo svg_icon_use("mdi-calendar-clock", "baseline me-2") . get_the_date('F j, Y');
        echo ' by ' . svg_icon_use("mdi-account", "baseline me-1") . get_the_author();
      ?>
    </div>

    <?php
      if (has_tag()) {
        echo '<div class="post-tags fs-smaller mb-4">';
        echo svg_icon_use("mdi-tag-multiple", "baseline text-gray-300 me-1");

        $tag_strings = array_map(function ($tag) {
          return '<span class="text-gray-300">#</span><a href="' . get_tag_link($tag) . '">' . $tag->name . '</a>';
        }, get_the_tags());

        echo implode(", ", $tag_strings) . '</div>';
      }
    ?>

  </header>

  <div class="article post-body">
    <?php
    if ( has_post_thumbnail() ) {
      echo get_the_post_thumbnail( get_the_ID(), 'large', ['class' => 'rounded shadow-lg'] );
    }

    the_content(); ?>
  </div>
</article>
