<?php

/**
 * Use Archive Loop
 *
 */
function setup_link_custom_taxonomy_set() {

	if( ! is_singular() && ! is_404() ) {
		    
	    // generic archive taxonomy page
	    if( is_tax( 'set' ) ) {
	        add_action( 'genesis_loop', 'setup_link_custom_taxonomy_loop_set' );
	        setup_link_remove_be_archive_loop(); // remove Bill's archive loop version
	    }
		
		// remove default Genesis archive loop
		remove_action( 'genesis_loop', 'genesis_do_loop' );

	}

}
add_action( 'template_redirect', 'setup_link_custom_taxonomy_set', 20 );


/**
 * Archive Loop | TAXONOMY-SET
 * Uses template partials
 */
function setup_link_custom_taxonomy_loop_set() {

	if ( have_posts() ) {
        
		do_action( 'genesis_before_while' );

		while ( have_posts() ) {

			the_post();
			do_action( 'genesis_before_entry' );
            
			// Template part
			$partial = apply_filters( 'setup_start_loop_partial', 'taxonomy-set' );
			$context = apply_filters( 'setup_start_loop_partial_context', is_search() ? 'search' : get_post_type() );
			get_template_part( 'partials/' . $partial, $context );

			do_action( 'genesis_after_entry' );

		}

		do_action( 'genesis_after_endwhile' );

	} else {

		do_action( 'genesis_loop_else' );

	}

}

// this function just removes Bill's archive loop version
function setup_link_remove_be_archive_loop() {
    remove_action( 'genesis_loop', 'ea_archive_loop' );
    return true;
}