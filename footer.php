<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<footer id="colophon" class="site-footer">
	<div class="footer-container pt-5">
		<div class="footer-content container-fluid">
			<div class="row justify-content-between">
				<div class="col-lg-6 col-md-6 col-sm-12 pb-4">
					<?php get_template_part('template-parts/partials/action-button') ?>
					<?php get_template_part('template-parts/footer/footer', 'contact') ?>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="row footer-image-row align-items-center">
						<div class="mb-3 col-lg-6 col-md-6 col-sm-12">
							<?php get_template_part('template-parts/footer/footer', 'logo') ?>
						</div>
						<div class="mb-3 col-lg-6 col-md-6 col-sm-12">
							<img src="<?= get_template_directory_uri()?>/assets/images/oc-platinum-img.png" alt="OC Plat">
						</div>
					</div>
					<div class="row justify-content-between">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<menu class="footer-menu block-one">
								<li><a href=""><strong>Roofing</strong></a></li>
								<li><a href="/residential-repair">Residential Repair</a></li>
								<li><a href="/residential-replacement">Residential Replacement</a></li>
								<li><a href="/commercial">Commercial</a></li>
							</menu>
							<menu class="footer-menu block-two">
								<li><a href=""><strong>Services</strong></a></li>
								<li><a href="/gutters">Gutters</a></li>
								<li><a href="/siding">Siding</a></li>
								<li><a href="/doors">Doors</a></li>
								<li><a href="/skylights">Skylights</a></li>
							</menu>
						</div>
						<div class="col-lg- col-md-6 col-sm-12">
							<menu class="footer-menu block-three">	
								<li><a href="/about-us"><strong>About Us</strong></a></li>
								<li><a href="/meet-the-team">Meet the Team</a></li>
								<li><a href="/job-opportunities">Job Opportunities</a></li>
								<li><a href="/financing">Financing</a></li>
								<li><a href="/awards-and-affiliations">Awards and Affiliations</a></li>
							</menu>
							<menu class="footer-menu block-four">
								<li><a href="/service-area"><strong>Service Area</strong></a></li>
								<li><a href="/free-estimate"><strong>Free Estimate</a></strong></li>    
								<li><a href="/blog"><strong>Blog</a></strong></li>
							</menu>
						</div>
					</div>
				</div>
			</div>
		</div><!-- .footer-content -->
	</div><!-- .footer-container -->
	<?php get_template_part( 'template-parts/footer/footer','social' ); ?>
	<?php get_template_part( 'template-parts/footer/copyright-bar' ); ?>
</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
