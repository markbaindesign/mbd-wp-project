<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo esc_url( home_url() ); ?>/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url( home_url() ); ?>/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url( home_url() ); ?>/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo esc_url( home_url() ); ?>/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo esc_url( home_url() ); ?>/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo esc_url( home_url() ); ?>/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo esc_url( home_url() ); ?>/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo esc_url( home_url() ); ?>/apple-touch-icon-152x152.png">
		<link rel="icon" type="image/png" href="<?php echo esc_url( home_url() ); ?>/favicon-196x196.png" sizes="196x196">
		<link rel="icon" type="image/png" href="<?php echo esc_url( home_url() ); ?>/favicon-160x160.png" sizes="160x160">
		<link rel="icon" type="image/png" href="<?php echo esc_url( home_url() ); ?>/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="<?php echo esc_url( home_url() ); ?>/favicon-16x16.png" sizes="16x16">
		<link rel="icon" type="image/png" href="<?php echo esc_url( home_url() ); ?>/favicon-32x32.png" sizes="32x32">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-TileImage" content="<?php echo esc_url( home_url() ); ?>/mstile-144x144.png">

		<!-- Open Graph protocol -->
		<meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/og-image.png">
		<meta property="og:image:width" content="1200">
		<meta property="og:image:height" content="630">
		<meta property="og:image:type" content="image/png">

		<?php wp_head(); ?>


	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">

			<?php get_template_part( 'content', 'preheader' ); ?>

			<header id="masthead" class="site-header section" role="banner">
			
				<div class="container">
					<div class="site-branding">
						<h6 class="site-title bg-check-target">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								Raul Gallegos
							</a>
						</h6>

						<a id="nav-toggle" class="toggle"><!-- id "menu-toggle" required by responsive-nav.js Using custom toggle so can be translated -->
							<span type="button" role="button" aria-label="Toggle Navigation" class="nav-button lines-button menu-button si-icons si-icons-easing">
								<span class="si-icon si-icon-hamburger-cross" data-icon-name="hamburgerCross"></span>
							</span>
							<span class="visuallyhidden"><?php _e( 'Menu', '_mbdmaster' ); ?></span>
						</a>
					</div>

					
					<div id="main-nav-wrapper">
						<nav id="main-navigation-menu" class="nav-collapse main-navigation">
							<?php 
								wp_nav_menu( 
								array( 
										'theme_location' => 'primary', 
										'container' => 'ul', 
										'container_class' => 'nav-collapse main-navigation ' // Required by responsive-nav.js
									) 
								); 
							?>
							<a id="search-toggle" class="icon-search toggle" aria-hidden="false"><span><span class="visuallyhidden">Search</span></span></a>
							<nav id="nav-bar-search" class="hidden-search nav-collapse">
								<?php get_search_form(); ?>
							</nav>					
						</nav><!-- .nav-collapse .main-navigation -->
					</div>
					

				</div><!-- .container -->
			</header><!-- #masthead -->
			<div id="content">	