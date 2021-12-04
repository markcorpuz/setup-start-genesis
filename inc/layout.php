<?php

// Remove sidebar(s) for content layout
add_action( 'genesis_meta', function() {
	$layout = genesis_site_layout();
	if(( 'content-layout' === $layout ) || ( 'fullscreen-layout' === $layout )) {
		remove_action( 'genesis_after_content', 'genesis_get_sidebar' );
		remove_action( 'genesis_after_content_sidebar_wrap', 'genesis_get_sidebar_alt' );
	}
});

// Remove sidebar(s) for archive layouts
add_action( 'genesis_meta', function() {
	$layout = genesis_site_layout();
	if(( 'grid-layout' === $layout ) || ( 'timeline-layout' === $layout )) {
		remove_action( 'genesis_after_content', 'genesis_get_sidebar' );
		remove_action( 'genesis_after_content_sidebar_wrap', 'genesis_get_sidebar_alt' );
	}
});