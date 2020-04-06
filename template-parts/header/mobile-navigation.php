<?php
/**
 * Template part for displaying the header mobile navigation menu
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

if ( ! wp_rig()->is_primary_nav_menu_active() ) {
	return;
}

?>

<div class="mobile-navigation">
  
  <input id="nav" type="checkbox" />
  
  <label id="nav-bars" for="nav">
    <b><i></i><i></i><i></i></b>
  </label>
  
  <menu id="mobile-menu" class="site-menu pt-5">
   <?php 
      if ( $menu_items = wp_get_nav_menu_items( 'Menu 1' ) ) { 
         foreach ( $menu_items as $menu_item ) { 
            if ($menu_item->url != '') {
               echo '<li><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
            }
         }
      } 
   ?>
  </menu>
  
</div> <!-- .mobile-navigation -->
