<?php
/**
 * Template part for displaying the top part of the header
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
?>

<div class="header-top">
    <div class="top-first">
        <?php get_template_part( 'template-parts/header/header', 'contact' ); ?>
        <?php get_template_part( 'template-parts/header/branding' ); ?>
        <?php get_template_part( 'template-parts/header/header', 'action' ); ?>
    </div>
    <?php get_template_part( 'template-parts/header/navigation' ); ?>
</div><!-- .header-top -->
