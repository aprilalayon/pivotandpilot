<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pivot-pilot
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pivot-pilot' ); ?></a>

	<header id="masthead" class="site-header">
        
        <div class="hidden">
        	<?php
				wp_nav_menu( array(
					'theme_location' => 'order-menu',
					'menu_id'        => 'order-menu',
				) );
			?>
        </div>
		
		<div class="site-branding">

             <div class="site-center">
                 
                 <div class="site-logo">
                 
                     <object type="image/svg+xml" data="http://localhost:8888/pivot-pilot/wp-content/uploads/2017/10/emblem-stroke-left.svg" class="logoleft">
                    </object>

                    <object type="image/svg+xml" data="http://localhost:8888/pivot-pilot/wp-content/uploads/2017/10/emblem-stroke-right.svg" class="logoright">
                    </object>
                
                </div>
                
                <div class="hidden">
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                </div>
            </div>

			
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			
			<div class="hidden">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                    ) );
                ?>

                <div id="nav-icon">
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                </div>
                </button>
			
			</div>
			
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
