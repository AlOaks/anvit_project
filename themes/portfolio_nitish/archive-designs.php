<?php
/**
 * Template Name: Design
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
                        <h1 class="design-title">ux / ui design</h1>
                                <button class="slider-btn-lft">></button>
                                <button class="slider-btn-right"><</button>
                                <section class="design-slider">
                                        
                                        
                                        <?php
                                                $args = array('posts_per_page' => -1, 'post_type' => 'designs');
                                                $designs = new WP_Query($args);

                                        while ($designs -> have_posts() ) : $designs -> the_post(); ?>

                                                <a href=<?php the_permalink(); ?> class="design-slide fade">
                                                        <?php the_post_thumbnail(); ?>
                                                </a>
                                
                                        <?php endwhile; // End of the loop. ?>
                                </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
