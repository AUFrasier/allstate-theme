<?php
/**
 * Template part for displaying the hero - header
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
?>

<div class="hero-container pt-5">
    <div class="hero-content">
        <?php get_template_part( 'template-parts/header/hero', 'headline' ); ?>
        <?php get_template_part( 'template-parts/header/hero', 'tag' ); ?>
        <?php get_template_part( 'template-parts/header/hero', 'title' ); ?>
        <?php get_template_part( 'template-parts/header/hero', 'text' ); ?>
        <?php get_template_part( 'template-parts/header/hero', 'action' ); ?>
        <?php get_template_part( 'template-parts/header/hero', 'box' ); ?>
    </div><!-- .hero-content -->
</div><!-- .hero-container -->
