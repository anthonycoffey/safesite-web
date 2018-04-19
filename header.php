<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	


	<header class="site-header" role="banner">


		<nav class="site-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				
				<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/safesite.svg" alt="Safesite"></a>
			
				<?php foundationpress_top_bar_r(); ?>

		
			</div>
			<div class="top-bar-right">

			</div>
		</nav>

	</header>
</nav>
<div class="menu-overlay">
	    <?php
    wp_nav_menu( array( 
        'theme_location' => 'mobile_menu' ) ); 
    ?>
		<div class="demo">

		</div>
	</div>
</div>
<div class="mobile-nav">
	<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/safesite.svg" alt="Safesite"></a>
<div class="burger">

	<a class="btn-open icon-btn-close" href="#"></a>
</div>
</div>
	<div class="sub-menu">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sub Menu") ) : ?>
	<?php endif;?>
	</div>