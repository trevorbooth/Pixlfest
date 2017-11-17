<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pixlfest
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pixlfest' ); ?></a>

	
	
	
	
 <div id="wrapper">
     	<div id="header">
			<a href="<?php echo get_option('home'); ?>">
        		<img src="<?php echo get_template_directory_uri() . '/images/pixlfest_logo.png'; ?>" />
			</a>
		<h1>A CONFERENCE FOR CREATIVE STUDENTS</h1>
		
	
	
	
	
	
	<nav class="nav">
	<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'nav', 'theme_location' => 'primary-menu' ) ); ?>
			</nav>
	<?php get_footer()?>
	
	</div>
	
	
	
 </div>
	
	
	
	
	

	
	

	
	

		
		
		
		
		
		
		
		
		
		
		