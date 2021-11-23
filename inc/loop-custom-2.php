<?php

/**
 * Use Archive Loop
 *
 */
function setup_link_custom_taxonomy_set() {

	$taxonomies = array(
		'set',
		'profileset',
	);

	$get_tax = get_queried_object()->taxonomy;

	if( ! is_singular() && ! is_404() && !empty( $get_tax ) ) {

		if( is_array( $taxonomies ) ) :

			foreach( $taxonomies as $tax ) {
//				echo '<h2 style="color:red;">'.$tax.' == '.get_queried_object()->taxonomy.'</h2>';
				$verify_template = get_stylesheet_directory().'/partials/taxonomy-'.$tax.'.php';
				//var_dump( get_queried_object()->taxonomy );
				//echo '<h1 style="color:red;">'.$verify_template.'</h1>';
				// generic archive taxonomy page
				if( is_tax( $tax ) && $tax == $get_tax && is_file( $verify_template ) ) {
//					echo '<h6 style="color:blue">Template file found!</h6>';
					//add_action( 'genesis_loop', 'setup_link_custom_taxonomy_loop_set' );
					add_action( 'genesis_loop', function() use ( $tax ) {
						setup_link_custom_taxonomy_loop_set( $tax );
					});
					
					// remove default Genesis archive loop
					remove_action( 'genesis_loop', 'genesis_do_loop' );
					remove_action( 'genesis_loop', 'ea_archive_loop' );
				} else {
					echo '<h6 style="color:blue">Template file NOT found!</h6>';
//					add_action( 'genesis_loop', 'genesis_do_loop' );
					add_action( 'genesis_loop', 'ea_archive_loop' );
//					remove_action( 'genesis_loop', 'ea_archive_loop' );
				}

			}

			// remove Bill's archive loop version
//			remove_action( 'genesis_loop', 'ea_archive_loop' );
			// remove default Genesis archive loop
//			remove_action( 'genesis_loop', 'genesis_do_loop' );

		endif;

	}

}
add_action( 'template_redirect', 'setup_link_custom_taxonomy_set', 20 );


/**
 * Archive Loop | TAXONOMY
 * Uses template partials
 */
function setup_link_custom_taxonomy_loop_set( $tax ) {

	if ( have_posts() ) {
        
		do_action( 'genesis_before_while' );

		while ( have_posts() ) {

			the_post();
			do_action( 'genesis_before_entry' );
            
			// Template part
			$partial = apply_filters( 'ea_loop_partial', 'taxonomy-'.$tax );
			$context = apply_filters( 'ea_loop_partial_context', is_search() ? 'search' : get_post_type() );
			get_template_part( 'partials/' . $partial, $context );

			do_action( 'genesis_after_entry' );

		}

		do_action( 'genesis_after_endwhile' );

	} else {

		do_action( 'genesis_loop_else' );

	}

}
