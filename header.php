<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
	<header class="site_header">
		<div class="wrapper">
			<div class="header-wrap d-flex">
				<div class="logo">
					<div class="hamburger-icon">
						<span></span>
						<span></span>
						<span></span>
					</div>
					<a href="<?php echo get_home_url(); ?>"><?php echo get_custom_logo(); ?>
						<img src="<?php echo get_stylesheet_directory_uri();?>/images/logo-mobile.png" alt="Logo" class="mobile-logo">
					</a>
				</div>
				<div class="header-search">
					<div class="header-srch-wrap">
						<img src="<?php echo get_stylesheet_directory_uri();?>/images/svg/search-icon.svg" alt="Search" class="search-img">
						<input type="search" name="" placeholder="Search">
					</div>
				</div>
				<div class="header-right d-flex justify-content-end align-items-center">
					<div class="hdr-mobile-search">
						<img src="<?php echo get_stylesheet_directory_uri();?>/images/svg/search-icon-black.svg" alt="Search" class="search-img"><span>Search</span>
					</div>
					<div class="hdr-support">
						<a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/images/svg/phone.svg" alt="Search" class="phone-icon" ><span>Support</span></a>
					</div>
					<div class="hdr-signin">
						<a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/images/svg/user.svg" alt="Search"><span>Sign in</span></a>
					</div>
					<div class="hdr-cart">
						<a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/images/svg/shopping-cart.svg" alt="Cart"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="header-main-menu">
			<div class="wrapper">
				<?php
						wp_nav_menu( array(
						    'menu' => 'header main menu'
						) );
					?>
			</div>
		</div>
	</header>
	<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery(".hdr-mobile-search").click(function(){
				jQuery(".header-search").toggle();
			});
			jQuery(".site_header").removeClass("mobile-menu-open");
			jQuery(".hamburger-icon").click(function(){
				jQuery(".site_header").toggleClass("mobile-menu-open");
			});
		});
	</script>
</body>