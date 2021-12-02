<?php
/**
 * SETUP-START
 *
 * This file adds the Content Layout unto Genesis Themes.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

add_action( 'after_setup_theme', 'setup_start_register_content_layout' );
/**
 * Registers custom content layout.
 */
function setup_start_register_content_layout() {
   genesis_register_layout(
      'content-layout', // A layout slug of your choice. Used in body classes. 
      [
         'label' => __( 'Content Layout', 'setup-start' ),
         'img'   => get_stylesheet_directory_uri() . '/images/grid.gif',
         'type'  => [ 'category', 'post_tag' ],
      ]
   );
}
