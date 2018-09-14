<?php
/**
 * Template Name: About
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

		<?php
		while ( have_posts() ) : the_post(); ?>

			<section class="about-hero">
            	<h1 class="title-about">Nitish Waila</h1>
				<h1 class="about-nitish">adventure photographer / mountaineer / UI/UX Designer</h1>
			</section>
			<section class="about-container">
            	<div class="about-content"><?php the_content(); ?></div>
				<div class="about-image"><?php the_post_thumbnail(); ?></div>
			</section>
        
        <?php
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
