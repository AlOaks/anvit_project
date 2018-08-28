<?php
/**
 * Template Name: Stories
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
                $args = array('post_type' => 'post', 'posts_per_page' => 6);
                $story = new WP_query($args);
            ?>

        <div class="stories-container">

            <?php
            while ($story -> have_posts() ) : $story -> the_post(); ?>
                <a class="story-wrapper"href=<?php the_permalink(); ?> >
                    <div class="story-div">
                        <img class="story-img" src=<?php echo CFS()->get('photo_1'); ?> />
                        <div class="story-overlay"></div>
                        <h1 class="story-title"><?php the_title(); ?></h1>
                    </div>
                </a>    
            <?php
            endwhile; // End of the loop.
            ?>

        </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
