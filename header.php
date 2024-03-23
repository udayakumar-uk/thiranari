<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/fontawesome/css/all.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
<!-- theme -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/parallax.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<!-- glightbox -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/glightbox-style.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/glightbox.css">
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/customise.css">
</head>
<body <?php body_class(); ?>>
<?php
$logo_img           = get_theme_mod('wpex_logo');
$blog_name          = get_bloginfo( 'name' );
$blog_description   = get_bloginfo( 'description' );
$home_url           = home_url( '/' );
$site_contact_number = get_settings('site_contact_number');
$site_email_id = get_settings('site_email_id');
$site_contact_address = get_settings('site_contact_address');
?>
<div id="wrap" class="clr">
<div id="header-wrap" class="clr">
	<header id="header" class="site-header clr py-2 px-0" role="banner">
		<div class="container-fluid">
			<div class="row align justify-content-between">
				<div class="col-lg-3 col-md-3 col-7">
					<div class="site-branding clr">
						<div id="logo" class="clr">
							<a href="<?php bloginfo('url')?>">
								<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo"/>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-5 col-md-6 col-5 clr">
					<div id="site-navigation-wrap">
						<nav id="site-navigation" class="navigation main-navigation clr" role="navigation">
							<?php
							wp_nav_menu( array(
								'menu'=>'Header Menu',
								'menu_class'     => 'header-dropdown-menu sf-menu text-center',
								'fallback_cb'    => false,
								'walker'         => new WPEX_Dropdown_Walker_Nav_Menu()
							) ); ?>
						</nav>
					</div>
					<div class="text-end me-4 me-sm-4 d-md-none d-block">
						<span id="mob-menu-toggle" onclick="myFunction(this)" class="mob-menu-toggle-btn scrollable-menu d-inline-block" role="menu" data-target-element="#side-navigation">
							<div class="bar bar1"></div>
							<div class="bar bar2"></div>
							<div class="bar bar3"></div>
						</span>
					</div>
					<div class="d-block d-md-none">
						<nav>
							<div id="mob-site-navigation">
								<?php
								wp_nav_menu( array(
									'menu'			=> 'Header Menu',
									'menu_class'	=> 'accordian-menu',
									'fallback_cb'	=> false,
									'walker'		=> new WPEX_Accordian_Walker_Nav_Menu()
								) ); ?>
							</div>
						</nav>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-3 clr d-none d-md-block">
					<div class="top-contact text-center text-sm-start float-end">
						<a href="mailto:<?php echo $site_email_id ?>" class="mb-0 mb-lg-2 d-inline-block d-lg-block"><i class="me-3 me-lg-0 fas fa-phone-alt pe-2"></i><span class="d-none d-lg-inline-block"> <?php echo $site_email_id ?></span></a>

						<a href="tel:<?php echo $site_contact_number; ?>" class="d-inline-block d-lg-block"><i class=" me-3 me-lg-0 fas fa-envelope pe-2"></i><span class="d-none d-lg-inline-block">  <?php echo $site_contact_number; ?></span></a>
					</div>					
				</div>


			</div>
		</div>
	</header>
</div>
<?php if ( is_front_page() && get_theme_mod( 'wpex_homepage_slider', true ) ) {
get_template_part( 'partials/home/slider' );
}  ?>

<?php /* if ( is_front_page() ) {
get_template_part( 'partials/home/home-slider' );
} */ ?>	

<div id="main" class="site-main clr">


