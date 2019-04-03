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
	<meta name="description" content="Aussie Rules Football Club based in the Northern Suburbs">
	<meta name="twitter:card" content="Whitford Amateur Football Club">
	<meta name="twitter:site" content="@WhitfordAfc">
	<meta name="twitter:title" content="Whitford Warriors">
	<meta name="twitter:description" content="Aussie Rules Football Club based in the Northern Suburbs">
	<meta name="twitter:creator" content="@whitfordafc">
	<meta name="twitter:image" content="http://www.whitfordafc.com.au/apple-touch-icon-180x180.png">
	<meta property="og:title" content="Whitford Warriors" >
	<meta property="og:type" content="website">
	<meta property="og:url" content="http://www.whitfordafc.com.au/">
	<meta property="og:image" content="http://whitfordafc.com.au/warrior.png">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="732">
	<meta property="og:image:height" content="815">
	<meta property="og:description" content="Aussie Rules Football Club based in the Northern Suburbs">
	<meta property="og:site_name" content="whitfordafc.com.au">
	<meta property="fb:admins" content="623254378">
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#3e4189">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#3e4189">

		

	<?php wp_head(); ?>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

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
				
				
				<nav id="site-navigation" class="main-navigation col-xs-12 col-lg-10">
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