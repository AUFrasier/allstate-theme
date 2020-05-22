<?php
/**
 * Template part for displaying the header main navigation
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

if ( ! wp_rig()->is_primary_nav_menu_active() ) {
	return;
}

?>

<div class="main-navigation">
  <menu class="site-menu">
   <?php 
     wp_nav_menu("Temp Main Menu");
   ?>
  </menu>
</div><!-- .main-navigation -->