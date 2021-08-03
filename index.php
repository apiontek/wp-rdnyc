<?php
/**
 * The default archive page template.
 *
 * @author Recovery Dharma NYC
 * @since 1.0.0
 */

namespace WP_RDNYC;

get_header(); ?>

<main class="container-lg d-flex justify-content-center  mt-4 mb-3">
  <div class="content w-100">

    <?php
      // grab search query if there is one
      $search_query_str = is_search() ? esc_html( get_search_query() ) : false;

      // output super heading if not singular
      if (!is_singular()) {
        $title = is_archive() ? get_the_archive_title() : single_post_title( '', false );
        $title = $search_query_str ? "Search results for: &#8220;$search_query_str&#8221;" : $title;
        echo get_page_multi_heading( $title );
      }

      // begin the "if have_posts" section
      if ( have_posts() ) :
        while ( have_posts() ) :
          the_post();
          echo get_template_part( 'content-templates/content', 'article' );
        endwhile;

        // output listing pagination if not singular
        if (!is_singular()) : ?>
          <nav class="d-flex justify-content-between" aria-label="Page navigation">
            <div class="nav-previous alignleft">
              <?php
                $txt = inline_svg( 'bsi-chevron-left', array( 'div_class' => 'icon baseline me-2' ) ) . 'Older';
                next_posts_link( $txt ); ?>
            </div>
            <div class="nav-next alignright">
              <?php
                $txt = 'Newer' . inline_svg( 'bsi-chevron-right', array( 'div_class' => 'icon baseline ms-2' ) );
                previous_posts_link( $txt ); ?>
            </div>
          </nav>
        <?php endif;

      // if not have_posts, then handle if this is a search page
      else :
        if ($search_query_str) { echo "Search results for: &#8220;$search_query_str&#8221;"; }

      // finally, end the "if have_posts" section
      endif;

    ?>

  </div>
</main>

<?php
get_footer('', array('frontpage'=>false));
