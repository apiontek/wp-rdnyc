<?php

/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WPRDNYC
 */

get_header(); ?>

<main class="container-fluid d-flex flex-column justify-content-center align-items-center text-light mt-4">

    <h1>Oops! That page can't be found.</h1>
		<p>It looks like nothing was found at this location.</p>
		<?php get_search_form(); ?>

</main>

<?php
get_footer();
