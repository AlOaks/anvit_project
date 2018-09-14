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

			<h1 class="story-single-title"><?php the_title(); ?></h1>
			<div class="story-single-content"><?php the_content(); ?></div>
			<div class="story-img-collage">

				<?php 
					$stories = CFS()->get('StoriesPhotos');				
				
				?>

				<img class="story-img-single img-1" src=<?php echo CFS()->get('photo_1'); ?> />
				<img class="story-img-single img-2" src=<?php echo CFS()->get('photo_2'); ?> />
				<img class="story-img-single img-3" src=<?php echo CFS()->get('photo_3'); ?> />
				<img class="story-img-single img-4" src=<?php echo CFS()->get('photo_4'); ?> />
				<img class="story-img-single img-5" src=<?php echo CFS()->get('photo_5'); ?> />
				<img class="story-img-single img-6" src=<?php echo CFS()->get('photo_6'); ?> />
				<img class="story-img-single img-7" src=<?php echo CFS()->get('photo_7'); ?> />
				<img class="story-img-single img-8" src=<?php echo CFS()->get('photo_8'); ?> />
			</div>

			<?php the_post_navigation(); ?>

		<?php	
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
