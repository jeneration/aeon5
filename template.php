<?php
/**
 * @ file
 * Theme function overrides and template preprocess functions for Aeon5.
 */


/*******************************************************************************
 * Theme function overrides.
 ******************************************************************************/

/**
 * Override the theme_menu_tree().
 *
 * Adds an invisible link used to toggle open the menu on mobile devices.
 */
function aeon5_menu_tree($variables) {
  $output  = '<a class="hamburger" href="#show-menu">Menu</a>';
  $output .= '<ul class="menu">' . $variables['tree'] . '</ul>';

  return $output;
}


/*******************************************************************************
 * Preprocess functions.
 ******************************************************************************/
                                                               