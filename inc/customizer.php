<?php
/**
 * Business Starter Theme Customizer definitions and Settings
 *
 * @package WordPress
 * @subpackage businessthemestarter
 */

/**
 * Add custom theme specific functionality to the custumizer area.
 *
 * @param object $wp_customize The  WP customize object.
 */
function businessthemestarter_customize_register( $wp_customize ) {
	// Create Custom Banner Section.
	$wp_customize->add_section(
		'banner',
		array(
			'title'       => __( 'Banner', 'businessthemestarter' ),
			'description' => sprintf( __( 'Options for the home page banner', 'businessthemestarter' ) ),
			'priority'    => 130,
		)
	);

	// Banner Heading Setting.
	$wp_customize->add_setting(
		'banner_heading',
		array(
			'default' => _x( 'Banner Heading', 'businessthemestarter' ),
			'type'    => 'theme_mod',
		)
	);

	// Banner Control.
	$wp_customize->add_control(
		'banner_heading',
		array(
			'label'    => __( 'Banner Heading', 'businessthemestarter' ),
			'section'  => 'banner',
			'priority' => 20,
		)
	);

	// Banner Text Setting.
	$wp_customize->add_setting(
		'banner_text',
		array(
			'default' => _x( 'Welcome to the WordPress Business Theme. This theme uses the Twitter Bootstrap 3 Framework and can be customized to your liking.', 'businessthemestarter' ),
			'type'    => 'theme_mod',
		)
	);

	// Banner Text Control.
	$wp_customize->add_control(
		'banner_text',
		array(
			'label'    => __( 'Banner Text', 'businessthemestarter' ),
			'section'  => 'banner',
			'priority' => 20,
		)
	);

	// Banner Button Setting.
	$wp_customize->add_setting(
		'banner_button_text',
		array(
			'default' => _x( 'Sign Up Today', 'businessthemestarter' ),
			'type'    => 'theme_mod',
		)
	);

	// Banner Button Control.
	$wp_customize->add_control(
		'banner_button_text',
		array(
			'label'    => __( 'Button Text', 'businessthemestarter' ),
			'section'  => 'banner',
			'priority' => 20,
		)
	);

	// Banner Button URL Setting.
	$wp_customize->add_setting(
		'banner_button_url',
		array(
			'default' => _x( 'http://example.com', 'businessthemestarter' ),
			'type'    => 'theme_mod',
		)
	);

	// Banner Button URL Control.
	$wp_customize->add_control(
		'banner_button_url',
		array(
			'label'    => __( 'Button URL', 'businessthemestarter' ),
			'section'  => 'banner',
			'priority' => 20,
		)
	);

	// Banner background image Setting.
	$wp_customize->add_setting(
		'banner_image',
		array(
			'default' => get_template_directory_uri() . '/img/showcase.jpg',
			'type'    => 'theme_mod',
		)
	);

	// Banner background Image URL Control.
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'banner_image',
			array(
				'label'    => __( 'Background Image', 'businessthemestarter' ),
				'section'  => 'banner',
				'settings' => 'banner_image',
			)
		)
	);

	// Home page boxes section.
	$wp_customize->add_section(
		'boxes',
		array(
			'title'       => __( 'Boxes', 'businessthemestarter' ),
			'description' => sprintf( __( 'Options for the homepage boxes. Choose icons from the Font Awesome 5 solid library only.', 'businessthemestarter' ) ),
			'priority'    => 130,
		)
	);

	// Box 1.

	// Box 1 Heading Setting.
	$wp_customize->add_setting(
		'box1_heading',
		array(
			'default' => _x( 'Box 1 Heading', 'businessthemestarter' ),
			'type'    => 'theme_mod',
		)
	);

	// Box 1 Heading Control.
	$wp_customize->add_control(
		'box1_heading',
		array(
			'label'    => __( 'Box 1 Heading', 'businessthemestarter' ),
			'section'  => 'boxes',
			'priority' => 20,
		)
	);

	// Box 1 Text Setting.
	$wp_customize->add_setting(
		'box1_text',
		array(
			'default' => _x( 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores, illo!', 'businessthemestarter' ),
			'type'    => 'theme_mod',
		)
	);

	// Box 1 text Control.
	$wp_customize->add_control(
		'box1_text',
		array(
			'label'    => __( 'Box 1 Text', 'businessthemestarter' ),
			'section'  => 'boxes',
			'priority' => 20,
		)
	);

	// Box 1 Icon Setting.
	$wp_customize->add_setting(
		'box1_icon',
		array(
			'default' => _x( 'fa-chart-bar', 'businessthemestarter' ),
			'type'    => 'theme_mod',
		)
	);

	// Box 1 icon Control.
	$wp_customize->add_control(
		'box1_icon',
		array(
			'label'    => __( 'Box 1 Icon', 'businessthemestarter' ),
			'section'  => 'boxes',
			'priority' => 20,
		)
	);

	// BOX 2.
	// Box 2 Heading Setting.
	$wp_customize->add_setting(
		'box2_heading',
		array(
			'default' => _x( 'Box 2 Heading', 'businessthemestarter' ),
			'type'    => 'theme_mod',
		)
	);

	// Box 2 Heading Control.
	$wp_customize->add_control(
		'box2_heading',
		array(
			'label'    => __( 'Box 2 Heading', 'businessthemestarter' ),
			'section'  => 'boxes',
			'priority' => 20,
		)
	);

	// Box 2 Text Setting.
	$wp_customize->add_setting(
		'box2_text',
		array(
			'default' => _x( 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores, illo!', 'businessthemestarter' ),
			'type'    => 'theme_mod',
		)
	);

	// Box 2 text Control.
	$wp_customize->add_control(
		'box2_text',
		array(
			'label'    => __( 'Box 2 Text', 'businessthemestarter' ),
			'section'  => 'boxes',
			'priority' => 20,
		)
	);

	// Box 2 Icon Setting.
	$wp_customize->add_setting(
		'box2_icon',
		array(
			'default' => _x( 'fa-code', 'businessthemestarter' ),
			'type'    => 'theme_mod',
		)
	);

	// Box 2 icon Control.
	$wp_customize->add_control(
		'box2_icon',
		array(
			'label'    => __( 'Box 2 Icon', 'businessthemestarter' ),
			'section'  => 'boxes',
			'priority' => 20,
		)
	);

	// BOX 3.
	// Box 3 Heading Setting.
	$wp_customize->add_setting(
		'box3_heading',
		array(
			'default' => _x( 'Box 3 Heading', 'businessthemestarter' ),
			'type'    => 'theme_mod',
		)
	);

	// Box 3 Heading Control.
	$wp_customize->add_control(
		'box3_heading',
		array(
			'label'    => __( 'Box 3 Heading', 'businessthemestarter' ),
			'section'  => 'boxes',
			'priority' => 20,
		)
	);

	// Box 3 Text Setting.
	$wp_customize->add_setting(
		'box3_text',
		array(
			'default' => _x( 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores, illo!', 'businessthemestarter' ),
			'type'    => 'theme_mod',
		)
	);

	// Box 3 text Control.
	$wp_customize->add_control(
		'box3_text',
		array(
			'label'    => __( 'Box 3 Text', 'businessthemestarter' ),
			'section'  => 'boxes',
			'priority' => 20,
		)
	);

	// Box 3 Icon Setting.
	$wp_customize->add_setting(
		'box3_icon',
		array(
			'default' => _x( 'fa-desktop', 'businessthemestarter' ),
			'type'    => 'theme_mod',
		)
	);

	// Box 3 icon Control.
	$wp_customize->add_control(
		'box3_icon',
		array(
			'label'    => __( 'Box 3 Icon', 'businessthemestarter' ),
			'section'  => 'boxes',
			'priority' => 20,
		)
	);

}

add_action( 'customize_register', 'businessthemestarter_customize_register' );
