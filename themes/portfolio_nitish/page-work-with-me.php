<?php
/**
 * Template Name: Work With Me
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

        <?php while ( have_posts() ) : the_post(); ?>


        <?php
            the_content(); ?>

            <ul class="items-description">
                <li>Having worked with various startups and companies on improving their online presence,
                    I would love to help your brand achieve the same with your websites and mobile apps. 
                    The pricing will depend on scope, durantion and effort involved in undertaking the said project.
                </li>
                <li>
                    Bringing out stories from various adventures while capturing the essence of those beautiful 
                    landscapes is what you can expect from my work. Having it published in various known magazines 
                    and online platforms such as National Geographic Traveller, Lonely Planet, Conde Nast Traveller India,
                     BBC Earth, GoPro and various others, adds on to the credibility.
                </li>
                <li>
                    Highly engaging organic social media reach as an adventurer and photographer will definitely help your brand
                     in gaining a dedicated following along with quality content.
                </li>
                <li>
                    Request a photo print of your choice or send custom requests for special print papers and sizes and bulk orders.
                </li>
            </ul>


        <?php
        endwhile;    
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
