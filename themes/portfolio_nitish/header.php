<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio_nitish
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'portfolio_nitish' ); ?></a>

	<header id="masthead" class="site-header">
		<a class="contact-link" href="../anvit-project/work-with-me"><p class="work-with-me">work with me</p></a>
		<div class="logo"></div>
		<nav id="site-navigation" class="main-navigation">
			<a class="menu-toggle" href=""><p class="menu-button">menu <i class="fas fa-bars"></i></p></a>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
			<a class="menu-close" href=""><p class="menu-button"><i class="fas fa-times"></i></p></a>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<div class="black-overlay"></div>
	<div class="ux-ol overlay ">
		<div class="black-section-ux"></div>
			<?php
				$args = array('post_type' => 'designs', 'posts_per_page' => 1);
				$uxquery = new WP_Query($args);
				while ($uxquery -> have_posts() ) : $uxquery -> the_post();
			?>

				<a class="ux-pic" href="<?php echo get_page_link(10); ?>" >
					<img class="ux-img" src=<?php echo get_the_post_thumbnail(); ?> 
				</a>

			<?php endwhile; ?>
	</div>
	<div class="photo-ol overlay">
			<?php
				$args = array('post_type' => 'photography', 'posts_per_page' => 1);
				$phoquery = new WP_Query($args);
				while ($phoquery -> have_posts() ) : $phoquery -> the_post();
			?>
			<a class="photo-pic" href=<?php echo get_post_type_archive_link('photography'); ?> >		
				<img class="photo-img" src=<?php echo get_the_post_thumbnail(); ?>
			</a>

			<?php endwhile; ?>
		<div class="black-section-photo"></div>
	</div>
	<div id="content" class="site-content">
