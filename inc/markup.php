<?php

// Remove sidebar(s) for content layout
function setup_start_change_content_sidebar_wrap( $attributes ) {
	$attributes['class'] = 'content-area';
	return $attributes;
}
add_filter( 'genesis_attr_content-sidebar-wrap', 'setup_start_change_content_sidebar_wrap' );