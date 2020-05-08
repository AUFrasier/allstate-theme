<?php
/**
 * Template part for displaying Section 5 of the front page
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="wrap wrap-5"> 
    <div class="container-fluid pt-5">
        <div id="bond">
            <div class="section-header p-5 pb-5">
                <div class="section-title">
                    <span>OUR PROVEN PROCESS</span>
                </div>
                <div class="section-sub big-text">
                    <span>From start to finish experience the Allstate Difference</span>
                </div>
                <div class="section-text pb-3 pt-3">
                    <span>From the time you give us a call we have your back. Every step of the way one of our trained professionals will be there to guide you through the process.</span>
                </div>
            </div>
            <div class="process-row">
                <div class="row piece-flex justify-content-center">
                    <div class="piece red first">
                        <img class="pt-2" src="<?=get_template_directory_uri()?>/assets/images/allstate-icons_Discovery.png" alt="">
                        <span>DISCOVERY</span>
                    </div>
                    <div class="piece dark">
                        <img class="pt-2" src="<?=get_template_directory_uri()?>/assets/images/allstate-icons_Discovery.png" alt="">
                        <span>PAPERWORK & APPROVAL</span>
                    </div>
                    <div class="piece red">
                        <img class="pt-2" src="<?=get_template_directory_uri()?>/assets/images/allstate-icons_scheduling.png" alt="">
                        <span>SCHEDULING</span>
                    </div>
                    <div class="piece dark">
                        <img class="pt-2" src="<?=get_template_directory_uri()?>/assets/images/allstate-icons_build.png" alt="">
                        <span>BUILD</span>
                    </div>
                    <div class="piece red last">
                        <img class="pt-2" src="<?=get_template_directory_uri()?>/assets/images/allstate-icons_closing.png" alt="">
                        <span>CLOSING</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div id="one" class="spot discovery shadow m-4">
                <span>DISCOVERY</span>
                <p>
                    You give us a call and speak to an Allstate Representative about the work that needs completed.  We'll set a time for you to meet with one of our expert Project Managers </br></br>
                    Our Project Manager does a thorough inspection and provides you with a detailed Digital Analysis. </br></br>
                    We'll use our ground-breaking Arial Image Technology along with physical measurements to put together an appropriate solution that fits your budget.
                </p>
            </div>
            <div id="two" class="spot paperwork shadow m-4">
                <span>PAPERWORK & APPROVAL</span>
                <p>
                    Our Project Manager puts together a detailed paperwork packet and turns it into the office.</br></br>
                    Your paperwork will get checked not once, not twice, but three times to ensure everything is 100% accurate.</br></br>
                    You receive a welcome call to let you know that everything has been approved.
                </p>
            </div>
            <div id="three" class="spot scheduling shadow m-4">
                <span>SCHEDULING</span>
                <p>
                    The Production Scheduler reaches out to you to set a date to complete your project.</br></br>
                    The Production Scheduler coordinates material delivery, crews, and project scope in preperation for game day.</br></br>
                    Material is delivered along with any necessary equipment to complete the job
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div id="four" class="spot build shadow m-4">
                <span>BUILD</span>
                <p>
                    Quality Champion and crew arrive at your house to complete the work.</br></br>
                    Quality Champion meets with you to address any questions or concerns.</br></br>
                    Quality Champion briefs the crew on the project and goes over the scope of work.</br></br>
                    At the end of the job the Quality Champion does a thorough inspection to ensure the project was completed per the scope of work and excpectations.
                </p>
            </div>
            <div id="five" class="spot closing shadow m-4">
                <span>CLOSING</span>
                <p>
                    A final invoice is mailed, emailed, hand hand delivered.</br></br>
                    Payment is received and the warranty is filed and delivered.</br></br>
                    We reach out to you to ensure you receive a 5 Star Experience with Allstate Exteriors.
                </p>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/partials/action-button') ?>
</div><!-- .wrap-5 -->
