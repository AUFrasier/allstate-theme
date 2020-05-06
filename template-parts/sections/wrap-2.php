<?php
/**
 * Template part for displaying Section 2 of the front page
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="wrap wrap-2">
    <div class="container-fluid mb-5 pt-5 pb-5">
        <div id="bond">
            <div class="section-header mt-5 p-5">
                <div class="section-title">
                    <span>THE ALLSTATE FAMILY</span>
                </div>
                <div class="section-sub big-text">
                    <span>From Our Family To Yours</span>
                </div>
                <div class="pt-3 section-text">
                    <span>When you get an Allstate Roof you become part of the Allstate family. For us, its more than just roofing. It’s the impact we can make in the lives of the families we serve.</span>
                </div>
            </div>

            <div class="row mt-5 justify-content-center align-items-center">

                <div class="wrap-2-img col-lg-6 col-sm-12">
                    <svg class="wrap-2-svg" xmlns="http://www.w3.org/2000/svg" width="322.932" height="500" viewBox="0 0 982.75 1863.5">
                        <defs>
                            <style>
                            .cls-1 {
                                fill: none;
                                stroke: #c12529;
                                stroke-width: 37.5px;
                            }
                            </style>
                        </defs>
                        <rect class="cls-1" x="-460" y="18.75" width="1424" height="1826"/>
                    </svg>
                    <img src="<?=get_template_directory_uri()?>/assets/images/Family-Pic.jpg" alt="">
                </div>
                <div class="wrap-text col-lg-6 col-sm-12 p-4">
                    <p>Your Home And Family Is Our Priority! </br> Feel the peace of mind that comes with an Allstate Roof.</p>
                    <p>We believe in providing  only the industry’s best materials for your home. We only employee the best installers to work on your home. We provide you with the best and most trusted warranties in the industry. We are in the top 1% of roofing contractors in the nation.  We are a Platinum Preferred Contractor.</p>
                    <?php get_template_part('template-parts/partials/action-button') ?>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap-2-end bg-theme-secondary">
        <img class="float-right pt-3 pr-3" src="<?= get_template_directory_uri()?>/assets/images/oc-platinum-img.png" alt="OC Plat">
    </div>
</div><!-- .wrap-2 -->
