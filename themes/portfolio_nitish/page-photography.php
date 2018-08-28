<?php
/**
 * Template Name: Photo
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio_nitish
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <h1 class="photo-port">Portfolio</h1>
			
			<div class="filter-box">
				<p class="filter-title">filters</p>
				<ul class="filters"></ul>
			</div>


		<?php
		while ( have_posts() ) : the_post(); ?>

            

        <?php
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
