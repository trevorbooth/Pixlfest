<?php
/**
 * The header for our theme
 *
 * 
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pixlfest
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pixlfest' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
        <div id="wrapper">
     	<div id="header">
			<a href="<?php echo get_option('home'); ?>">
        		<img id="logo" src="<?php echo get_template_directory_uri() . '/images/pixlfest_logo.png'; ?>" />
			</a>
		<h1>A CONFERENCE FOR CREATIVE STUDENTS</h1>
		
	
	
	
	
	
	<nav class="nav">
	<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'nav', 'theme_location' => 'primary-menu' ) ); ?>
			
            </nav>
	<?php get_footer()?>
	
	</div>
	
	
	
 </div>
