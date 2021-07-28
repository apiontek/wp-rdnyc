<?php
/**
 * The default archive page template.
 *
 * @author Recovery Dharma NYC
 * @since 1.0.0
 */

namespace WP_RDNYC;

get_header(); ?>
<main class="rdnyc-single-outer">

  <?php if (!is_singular()) : ?>
    <h1 class="fw-light text-gray-300 mb-4 border-bottom border-dashed border-gray-600">
    <?php if (is_archive()) : get_the_archive_title();
        else : single_post_title();
        endif;
      ?>
    </h1>
  <?php endif; ?>

  <?php
    if ( have_posts() ) :
      while ( have_posts() ) :
        the_post();
        echo get_template_part( 'content-templates/content', 'article' );
      endwhile;
  ?>

    <?php if (!is_singular()) : ?>
      <nav class="d-flex justify-content-between" aria-label="Page navigation">
        <div class="nav-previous alignleft"><?php next_posts_link( '&larr; Older' ); ?></div>
        <div class="nav-next alignright"><?php previous_posts_link( 'Newer &rarr;' ); ?></div>
      </nav>
    <?php endif; ?>

  <?php
    endif;
  ?>

</main>
<?php
get_footer('', array('frontpage'=>false));
