<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hartlco
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'hartlco' ); ?></a>

	<header id="masthead" class="blog-header" role="banner">
		<div class="section group">
				<div class="col span_1_of_2 col_left">
			        <h1 class="blog-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
					<?php
					endif; ?>
			        <h2 class="blog-description"><?php echo $description; /* WPCS: xss ok. */ ?></h2>
				</div>
				<div class="col span_1_of_2 col_right">
					<img class="ava" src="https://hartl.co/wp-content/uploads/2016/02/2015-near.jpg" width="140rem" height="140rem" alt="Image of Martin Hartl">
			        <div class="custom-links">
			            <a href="https://hartl.co/about-me/" target="_self">About me</i></a>&nbsp;&nbsp;
			            <a href="https://twitter.com/mhaddl" target="_blank">Twitter</i></a>&nbsp;&nbsp;
			            <a href="https://github.com/hartlco" target="_blank">Github</i></a>&nbsp;&nbsp;
			            <a href="https://hartl.co/apps" target="_blank">Apps</a>&nbsp;&nbsp;
			            <a href="mailto:&#104;&#105;&#064;&#104;&#097;&#114;&#116;&#108;&#046;&#099;&#111;">Mail</a>&nbsp;&nbsp;
			            <a href="https://hartl.co/feed" target="_blank">RSS</a>
			        </div>
				</div>
			</div>


		<div class="site-branding">
			
		</div><!-- .site-branding -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
