<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bad_Funk_Stripe
 */
$logo = get_field('logo', 'option');

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bad-funk-stripe' ); ?></a>
	<header id="masthead" class="site-header">
		<div class="container header-bg">
			<div class="row">
				<div class="site-branding col-xs-2 col-xs-offset-5 col-lg-offset-0">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']?>" class="site-branding__logo">
				</a>	
			</div><!-- .site-branding -->
			<div class="mobile-navigation col-xs-2 col-xs-offset-3">
				<img src="<?php echo get_template_directory_uri() . '/img/menu.svg'; ?>" class="mobile-navigation__icon" />
			</div>
			<nav class="mobile-navigation__content col-xs-12">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						) );
						?>
				</nav>
				
				
				<nav id="site-navigation" class="main-navigation col-xs-10">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						) );
						?>
				</nav><!-- #site-navigation -->
				
				
			</div>
		</div>
	</header><!-- #masthead -->
	
	<div id="content" class="site-content">
		
		