<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default. Please note that
 * this is the WordPress construct of pages: specifically, posts with a post
 * type of `page`.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gorilabs_tw
 */

get_header();
?>

	<section id="primary">
		<main id="main">
<div class="text-white">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );

			endwhile; // End of the loop.
			?>
</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
