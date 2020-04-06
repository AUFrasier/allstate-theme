<?php
/**
 * Template part for displaying Section 3 of the front page
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="wrap wrap-3">
    <div class="container-fluid pt-5 pb-5">
        <div id="bond">
            <div class="section-header p-5">
                <div class="section-title">
                    <span>5 STAR EXPERIENCE</span>
                </div>
                <div class="section-sub big-text">
                    <span>What others are saying about the expert team at Allstate Exteriors</span>
                </div>
            </div>
            <img class="bg-logo" src="<?=get_template_directory_uri()?>/assets/images/Allstate-logo-gray.png" alt="">

            <div class="container">
                <div class="row justify-content-around">
                    <div class="testimonial pt-5 pr-3 pl-3 bg-white shadow-lg">
                        <p>The entire roofing process with Allstate Exteriors has been absolutely wonderful. Justin lead the way, assisted with everything we needed, and made the experience seamless. The team Allstate Exteriors sent to remove and replace the roof were skilled, proficient, and worked with a sense of urgency. Aftercare has been amazing!</p>
                        <?php get_template_part('template-parts/partials/divider') ?>
                        <p class="text-center text-theme-primary">LeeAnn Schloff</p>
                    </div>
                    <div class="testimonial pt-5 pr-3 pl-3 bg-white shadow-lg">
                        <p>Allstate made sure we were taken care of through and through with our recent roof replacement. We worked with the based on a friend’s referral, and we’re so glad we did. Noah managed our project from beginning to end, and we were incredibly impressed with his knowledge and responsiveness. Such a tremendous level of care for the customer. </p>
                        <?php get_template_part('template-parts/partials/divider') ?>
                        <p class="text-center text-theme-primary">Patrick Walters</p>
                    </div>
                    <div class="testimonial pt-5 pr-3 pl-3 bg-white shadow-lg">
                        <p>They were awesome through the entire process.  Noah the salesman was honest (told me I didn't need my replaced yet, when the other two contractors that came out and give me a quote did), and got me scheduled right away so I didn't have mess when we started getting the spring rains.  Gutters look fantastic and matched the house. Thanks Allstate!</p>
                        <?php get_template_part('template-parts/partials/divider') ?>
                        <p class="text-center text-theme-primary">Fred Heckel</p>
                    </div>
                </div>
            </div>
		</div>
    </div>
</div><!-- .wrap-3 -->
