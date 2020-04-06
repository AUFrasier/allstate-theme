<?php
/**
 * Template part for displaying the hero box - header
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
?>

<div class="hero-box mb-5">
    <div class="container shadow-lg">
        <div class="row justify-content-center">
            <div class="hero-box-img d-inline-flex align-self-center col-lg-4 col-md-4 col-sm-12 bg-theme-secondary">
                <img src="<?= get_template_directory_uri()?>/assets/images/oc-platinum-img.png" alt="Owens Corning">
            </div>
            <div class="hero-box-text col-lg-8 col-md-8 col-sm-12 bg-white p-3 text-left">
                <div class="box-title d-inline-block m-2 text-center">
                    <span>Select Status</span>
                </div>
                <div class="box-text text-left p-2">
                    <span>Allstate Exteriors is in an elite class of roofing professionals dedicated to service, reliability, and professional craftsmanship.</span>  
                </div>
            </div>
        </div>
    </div>
</div><!-- .hero-box -->