<?php
/**
 * Genesis Sample appearance settings.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

$genesis_sample_default_colors = [
	'link'   => '#0073e5',
	'accent' => '#0073e5',
];

$genesis_sample_link_color = get_theme_mod(
	'genesis_sample_link_color',
	$genesis_sample_default_colors['link']
);

$genesis_sample_accent_color = get_theme_mod(
	'genesis_sample_accent_color',
	$genesis_sample_default_colors['accent']
);

$genesis_sample_link_color_contrast   = genesis_sample_color_contrast( $genesis_sample_link_color );
$genesis_sample_link_color_brightness = genesis_sample_color_brightness( $genesis_sample_link_color, 35 );

return [
	'fonts-url'            => 'https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800&display=swap',
	'content-width'        => 1062,
	'button-bg'            => $genesis_sample_link_color,
	'button-color'         => $genesis_sample_link_color_contrast,
	'button-outline-hover' => $genesis_sample_link_color_brightness,
	'link-color'           => $genesis_sample_link_color,
	'default-colors'       => $genesis_sample_default_colors,
	'editor-color-palette' => [
		[
			'name'  => __( 'Custom color', 'genesis-sample' ), // Called “Link Color” in the Customizer options. Renamed because “Link Color” implies it can only be used for links.
			'slug'  => 'theme-primary',
			'color' => $genesis_sample_link_color,
		],
		[
			'name'  => __( 'Accent color', 'genesis-sample' ),
			'slug'  => 'theme-secondary',
			'color' => $genesis_sample_accent_color,
		],
	],
	'editor-font-sizes'    => [
		[
			'name' => __( 'Smaller', 'setup-start' ),
			'size' => 12,
			'slug' => 'smaller',
		],
		[
			'name' => __( 'Small', 'setup-start' ),
			'size' => 14,
			'slug' => 'small',
		],
		[
			'name' => __( 'Base', 'setup-start' ),
			'size' => 16,
			'slug' => 'base',
		],
		[
			'name' => __( 'Normal', 'setup-start' ),
			'size' => 18,
			'slug' => 'normal',
		],
		[
			'name' => __( 'Medium', 'setup-start' ),
			'size' => 24,
			'slug' => 'medium',
		],
		[
			'name' => __( 'Large', 'setup-start' ),
			'size' => 36,
			'slug' => 'large',
		],
		[
			'name' => __( 'Larger', 'setup-start' ),
			'size' => 48,
			'slug' => 'larger',
		],
		[
			'name' => __( 'Largest', 'setup-start' ),
			'size' => 60,
			'slug' => 'largest',
		],
		[
			'name' => __( 'Huge', 'setup-start' ),
			'size' => 72,
			'slug' => 'huge',
		],
		[
			'name' => __( 'Huge2x', 'setup-start' ),
			'size' => 96,
			'slug' => 'huge2x',
		],
		[
			'name' => __( 'Huge3x', 'setup-start' ),
			'size' => 128,
			'slug' => 'huge3x',
		],
	],
];
