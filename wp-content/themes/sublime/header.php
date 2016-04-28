<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sublime
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sublime' ); ?></a>

	<header id="masthead" class="site-header container" role="banner">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<span class="navlinks"><h2><?php bloginfo( 'name' ); ?></h2><?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?></span>
		</nav><!-- #site-navigation -->
		<section class="site-branding">
			<?php
			if ( is_front_page() ) : ?>
					<div><h1 class="site-title"><?php bloginfo( 'name' ); ?></h2></div>			
					<h3><?php bloginfo( 'description' ); ?></h3>
					<div class="site-description"><?php the_field('site-description'); ?></div>
			<?php endif; ?>
		</section><!-- .site-branding -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
