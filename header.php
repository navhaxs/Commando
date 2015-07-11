<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package commando
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- if using ★ font awesome in logo   -->
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'commando' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
        <div style="background-color: pink;"></div>
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="logo-font" style="color:#E32636; text-decoration:blink; padding-right: 15px;">★</span><?php bloginfo( 'name' ); ?></a></h1>
<!--			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>-->
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
            
            <!-- 
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
                
            </button>
             -->
            
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false">
                <?php _e( 'Navigation Menu', 'commando' ); ?>
            </button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

<!--    <div class="background-header" style="left: 0px; top: 0px; width: 100%; height: 200px; position: absolute; z-index: -1; background-color: #526D78;"></div>-->
    
	<div id="content" class="site-content">
