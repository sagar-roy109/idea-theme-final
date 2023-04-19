<?php
/**
 * idea theorem Theme Customizer
 *
 * @package idea_theorem
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function idea_theorem_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'idea_theorem_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'idea_theorem_customize_partial_blogdescription',
			)
		);
	}




	/*** IDEA CUSTOM */

/** TESTIMONIAL SECTION */
$wp_customize->add_section( 'idea_new_section_name' , array(
	'title'      => __( 'Idea Testimonial', 'idea_theorem' ),
	'priority'   => 30,
) );

$wp_customize->add_setting('testimonial_title_setting', array(
	'default' => __('Testimonial Title', 'idea_theorem'),
	'transport' => 'refresh',
));
$wp_customize->add_control('testimonial_title_setting', [
	'section' => 'idea_new_section_name',
	'label' => __('Title', 'idea_theorem'),
	'type' => 'text'
] );
$wp_customize->add_setting('testimonial_content_setting', array(
	'default' => __('Testimonial Contents', 'idea_theorem'),
	'transport' => 'refresh',
));


$wp_customize->add_control('testimonial_content_setting', [
	'section' => 'idea_new_section_name',
	'label' => __('Testimonial Content', 'idea_theorem'),
	'type' => 'textarea'
] );

$wp_customize->add_setting('testimonial_person_name', array(
	'default' => __('Person Name', 'idea_theorem'),
	'transport' => 'refresh',
));
$wp_customize->add_control('testimonial_person_name', [
	'section' => 'idea_new_section_name',
	'label' => __('Person Name', 'idea_theorem'),
	'type' => 'text'
] );

$wp_customize->add_setting('testimonial_person_details', array(
	'default' => __('Person Title', 'idea_theorem'),
	'transport' => 'refresh',
));
$wp_customize->add_control('testimonial_person_details', [
	'section' => 'idea_new_section_name',
	'label' => __('Person Title', 'idea_theorem'),
	'type' => 'text'
] );

$wp_customize->add_setting('testimonial_person_image', array(
	'default' => get_theme_file_uri(). '/assets/img/member-photo.png',
	'transport' => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'testimonial_person_image',[
	'label' => __('Select Person Photo', 'idea_theorem'),
	'section' => 'idea_new_section_name',
	'settings' => 'testimonial_person_image',
]));

$wp_customize->add_setting('testimonial_logo', array(
	'default' => get_theme_file_uri(). '/assets/img/wood.png',
	'transport' => 'refresh',
));
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'testimonial_logo',[
	'label' => __('Select Person Logo', 'idea_theorem'),
	'section' => 'idea_new_section_name',
	'settings' => 'testimonial_logo',
]));
$wp_customize->add_setting('testimonial_background', array(
	'default' => get_theme_file_uri(). '/assets/img/Background-image.jpg',
	'transport' => 'refresh',
));
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'testimonial_background',[
	'label' => __('Select Person Logo', 'idea_theorem'),
	'section' => 'idea_new_section_name',
	'settings' => 'testimonial_background',
]));


/** CUSTOM IDEA IMAGE BOX */

$wp_customize->add_section( 'idea_image_box' , array(
	'title'      => __( 'Idea Image Box', 'idea_theorem' ),
	'priority'   => 20,
) );

$wp_customize->add_setting('testimonial_img_box_title_setting', array(
	'default' => __('Testimonial Title', 'idea_theorem'),
	'transport' => 'refresh',
));
$wp_customize->add_control('testimonial_img_box_title_setting', [
	'section' => 'idea_image_box',
	'label' => __('Normal Text', 'idea_theorem'),
	'type' => 'text'
] );

$wp_customize->add_setting('testimonial_img_box_color_title_setting', array(
	'default' => __('Color Text', 'idea_theorem'),
	'transport' => 'refresh',
));
$wp_customize->add_control('testimonial_img_box_color_title_setting', [
	'section' => 'idea_image_box',
	'label' => __('Color Text', 'idea_theorem'),
	'type' => 'text'
] );
$wp_customize->add_setting('testimonial_content_set', array(
	'default' => __('Add contents', 'idea_theorem'),
	'transport' => 'refresh',
));
$wp_customize->add_control('testimonial_content_set', [
	'section' => 'idea_image_box',
	'label' => __('Contents', 'idea_theorem'),
	'type' => 'textarea'
] );


$wp_customize->add_setting('idea_image', array(
	'default' => get_theme_file_uri(). '/assets/img/section-right.jpg',
	'transport' => 'refresh',
));
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'idea_image',[
	'label' => __('Select Image', 'idea_theorem'),
	'section' => 'idea_image_box',
	'settings' => 'idea_image',
]));

$wp_customize->add_setting('image-box-text-color', array(
	'default' => '#FA4321',
	'transport' => 'refresh',
	'sanitize_callback' => 'sanitize_hex_color',
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'image-box-text-color',[
	'label' => __( 'Text Color', 'idea_theorem' ),
    'section' => 'idea_image_box',
] ) );


$wp_customize->add_section( 'navbar_button', array(
	'title'       => __( 'Navbar Button', 'idea_theorem' ),
	'priority'    => 10,
) );

// Add a new setting for the button
$wp_customize->add_setting( 'show_menu_button', array(
	'default'           => true,
	'sanitize_callback' => 'wp_validate_boolean',
) );

// Add a new control for the button
$wp_customize->add_control( 'show_menu_button', array(
	'type'     => 'checkbox',
	'section'  => 'navbar_button',
	'label'    => __( 'Show Menu Button', 'your_theme' ),
	'priority' => 10,
) );
$wp_customize->add_setting( 'button_text', array(
	'default'           => 'Button',
	'transport' => 'refresh',
) );

// Add a new control for the button
$wp_customize->add_control( 'button_text', array(
	'type'     => 'text',
	'section'  => 'navbar_button',
	'label'    => __( 'Button Text', 'your_theme' ),
	'priority' => 10,
) );
$wp_customize->add_setting( 'button_url', array(
	'default'           => '#',
	'transport' => 'refresh',
) );

// Add a new control for the button
$wp_customize->add_control( 'button_url', array(
	'type'     => 'text',
	'section'  => 'navbar_button',
	'label'    => __( 'Button URL', 'your_theme' ),
	'priority' => 10,
) );
}
add_action( 'customize_register', 'idea_theorem_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function idea_theorem_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function idea_theorem_customize_partial_blogdescription() {
	bloginfo( 'description' );
}






/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function idea_theorem_customize_preview_js() {
	wp_enqueue_script( 'idea-theorem-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'idea_theorem_customize_preview_js' );
