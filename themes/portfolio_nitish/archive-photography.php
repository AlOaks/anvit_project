<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio_nitish
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php if ( have_posts() ) : ?>
		<h1 class="photography-title">Portfolio</h1>
			
			<section class="photography-body">

				<div class="filter-box">
					<h1 class="photo-filters">Filters</h1>

					<?php

						$terms = get_terms( 'photo_types' );

						echo '<ul class="photo-types">';
						foreach ($terms as $term) {
							echo '<li class="photo-type"><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
						}

						echo '</ul>'; ?>
				</div>
			<div class="photos-container">	
			<button class="photoslider-btn-lft">></button>
            <button class="photoslider-btn-right"><</button>
		<?php
			while ( have_posts() ) : the_post(); ?>

				<div class="photo-image">
					<a href=" <?php the_permalink() ?>" rel="bookmark">
						<?php the_post_thumbnail('large') ?>
					</a>
					<p class='photo-title'><?php the_title(); ?></p>	
				</div>

		<?php endwhile; ?>
			</div>
		<?php endif; ?>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
