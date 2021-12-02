<?php
/**
 * SETUP-START
 *
 * This file adds the Block Layout unto Genesis Themes.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

add_action( 'after_setup_theme', 'setup_start_register_block_layout' );
/**
 * Registers custom content layout.
 */
function setup_start_register_block_layout() {
   genesis_register_layout(
      'block-layout', // A layout slug of your choice. Used in body classes. 
      [
         'label' => __( 'Block Layout', 'setup-start' ),
         'img'   => get_stylesheet_directory_uri() . '/images/grid.gif',
         'type'  => [ 'category', 'post_tag', 'page' ],
      ]
   );
}

/**
 * Add default layouts in addition to new layouts.
 */
/*
if ( function_exists( 'genesis_add_type_to_layout' ) ) {
   genesis_add_type_to_layout( 'block-layout', [ 'category', 'post_tag', 'page' ] );
}
*/