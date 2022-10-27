<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site_footer" role="">
		<div class="wrapper">
			<div class="footer-block-wrap d-flex flex-wrap">
				<div class="footer-block">
					<div class="footer-abt">
						<div class="footer-logo">
							<a href="<?php echo get_home_url(); ?>"><?php echo get_custom_logo(); ?></a>
						</div>
						<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly</p>
					</div>
				</div>

				<div class="footer-block">
					<h5>Company</h5>
					<div class="footer-menu">
						<?php
							wp_nav_menu( array(
							    'menu' => 'Footer Menu'
							) );
						?>
					</div>
				</div>

				<div class="footer-block">
					<h5>Legal</h5>
					<div class="footer-legal-menu">
						<?php
							wp_nav_menu( array(
							    'menu' => 'Footer Legal Menu'
							) );
						?>
					</div>
				</div>

				<div class="footer-block">
					<h5>Resources</h5>
					<div class="footer-legal-menu">
					<?php
						wp_nav_menu( array(
						    'menu' => 'Footer Resources Menu'
						) );
					?>
					</div>
				</div>

				<div class="footer-block">
					<h5>Contact</h5>
					<div class="footer-contact-menu">
					<ul class="footer-contact">
						<li><a href="mailto:abcd@gmail.com"><img src="<?php echo get_stylesheet_directory_uri();?>/images/svg/email.svg" alt="email"><span>abcd@gmail.com</span></a></li>
						<li><a href="tel:+110101010101010"><img src="<?php echo get_stylesheet_directory_uri();?>/images/svg/phone-orange.svg" alt="Phone">+110101010101010</a></li>
						<li>
							<ul class="footer-social-menu d-flex ">
								<li><a href=""><img src="<?php echo get_stylesheet_directory_uri();?>/images/svg/facebook_negative.svg" alt="FB"></a></li>
								<li><a href=""><img src="<?php echo get_stylesheet_directory_uri();?>/images/svg/instagram_negative.svg" alt="IG" class="search-img"></a></li>
								<li><a href=""><img src="<?php echo get_stylesheet_directory_uri();?>/images/svg/reddit_negative.svg" alt="RD" class="search-img"></a></li>
								<li><a href=""><img src="<?php echo get_stylesheet_directory_uri();?>/images/svg/twitter_negative.svg" alt="TW" class="search-img"></a></li>
							</ul>
						</li>
					</ul>
					</div>
				</div>
			</div>
			<div class="copy-ryt">
				<p>COPYRIGHT <a href="#">Magearmy, LLC 2022</a>. ALL RIGHTS RESERVED</p>
			</div>
		</div>
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>


</body>
</html>
<!-- <div class="footer-menu">
					<?php
						wp_nav_menu( array(
						    'menu' => 'Footer Menu'
						) );
					?>
				</div> -->
				<!-- <a href="<?php echo get_site_url(); ?>/terms-and-conditions/">Terms and Conditions</a> -->