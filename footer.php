<?php
/**
* The template for displaying the footer.
*
* @package     Ratebeat WordPress theme
* @subpackage  Templates
* @author      Alexander Clarke
* @link        http://www.wpexplorer.com
* @since       1.0.0
*/
?>
</div><!-- #main-content -->

<div id="footer-wrap" class="site-footer main-footer mt-50 clr">
	<div id="footer">
		<?php
		if ( is_active_sidebar( 'footer-about' ) || is_active_sidebar( 'footer-follow' ) || is_active_sidebar( 'footer-nav' ) || is_active_sidebar( 'footer-copyright' ) ) : ?>
			<div id="footer-widgets" class="wpex-row clr">
				<div class="footer-contact p3rem">
					<div class="container">
						<div class="row justify-content-between">
							<?php if ( is_active_sidebar( 'footer-follow' )) { ?>
							<div class="footer-box col-md-4">
								<?php dynamic_sidebar( 'footer-follow' ); ?>
							</div>
							<?php } ?>
							<?php if ( is_active_sidebar( 'footer-nav' )) { ?>
							<div class="footer-box col-md-3">
								<?php dynamic_sidebar( 'footer-nav' ); ?>
							</div>
							<?php } ?>
							<?php if ( is_active_sidebar( 'footer-about' )) { ?>
							<div class="footer-box col-md-5 col-lg-4">							
								<?php dynamic_sidebar( 'footer-about' ); ?>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<?php dynamic_sidebar( 'company-contact' ); ?>
			<footer id="copyright-wrap" class="clr py-3">
				<div class="container">
					<div class="text-center">
						<?php if ( is_active_sidebar( 'footer-copyright' )) { ?>
						<div class="footer-copyright">
							<?php dynamic_sidebar( 'footer-copyright' ); ?>
						</div>
						<?php } ?>
					</div>
				</div>
			</footer>
		</div>
		<div id="mobile-search">
			<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search" id="mobile-search-form">
				<input type="search" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="<?php esc_attr_e( 'To search type and hit enter','wpex-elegant' ); ?>" />
			</form>
		</div>
	</div>
</div>
<!-- template -->

<script src="<?php echo get_template_directory_uri(); ?>/js/animated-headline.js" ></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/isotope.pkgd.min.js" ></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider-min.js" ></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js" ></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js" ></script>
<!-- parallax -->
<script src="<?php echo get_template_directory_uri(); ?>/js/parallax.js" ></script>
<!-- glightbox -->
<script src="<?php echo get_template_directory_uri(); ?>/js/glightbox-valde.min.js" ></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/glightbox.js" ></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/glightbox-site.js" ></script>


<!-- tsparticles -->
<script src="<?php echo get_template_directory_uri(); ?>/js/tsparticles/tsparticles.min.js" ></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/tsparticles/tsparticles-custom-elements-es5-adapter.js" ></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/tsparticles/tsparticles-webcomponents-loader.js" ></script>
<script type="module" src="<?php echo get_template_directory_uri(); ?>/js/tsparticles/tsparticles-web-min.js" ></script>

<!-- 
<script src="https://cdn.jsdelivr.net/npm/tsparticles@1.28.0/dist/tsparticles.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@webcomponents/webcomponentsjs@2.5.0/custom-elements-es5-adapter.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@webcomponents/webcomponentsjs@2.5.0/webcomponents-loader.js"></script>
<script type="module" src="https://cdn.jsdelivr.net/npm/web-particles@1.1.0/dist/web-particles.min.js"></script>
 -->
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js" ></script>




    <script>
        var lightbox = GLightbox();
        lightbox.on('open', (target) => {
            console.log('lightbox opened');
        });
        var lightboxDescription = GLightbox({
            selector: '.glightbox2'
        });
        var lightboxVideo = GLightbox({
            selector: '.glightbox3'
        });
        lightboxVideo.on('slide_changed', ({ prev, current }) => {
            console.log('Prev slide', prev);
            console.log('Current slide', current);

            const { slideIndex, slideNode, slideConfig, player } = current;

            if (player) {
                if (!player.ready) {
                    // If player is not ready
                    player.on('ready', (event) => {
                        // Do something when video is ready
                    });
                }

                player.on('play', (event) => {
                    console.log('Started play');
                });

                player.on('volumechange', (event) => {
                    console.log('Volume change');
                });

                player.on('ended', (event) => {
                    console.log('Video ended');
                });
            }
        });

        var lightboxInlineIframe = GLightbox({
            selector: '.glightbox4'
        });


        /* init Jarallax */
        jarallax(document.querySelectorAll('.jarallax'));


		jQuery(window).load(function() {
			// new WOW().init();

			// initialise flexslider
			jQuery('.flexslider').flexslider({
				animation: "fade",
				directionNav: true,
				controlNav: false,
				keyboardNav: true,
				slideToStart: 0,
				animationLoop: true,
				pauseOnHover: false,
				slideshowSpeed: 4000,
			});
		});	



	</script>

<?php wp_footer(); ?>
</body>
</html>