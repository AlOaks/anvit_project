<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package portfolio_nitish
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php
		while ( have_posts() ) : the_post(); ?>

			<div class="photo_img">
                <?php the_post_thumbnail(); ?>
            </div>

        <?php
		endwhile; // End of the loop.
        ?>

        
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
