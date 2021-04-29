<?php
/**
 * MEXETheme Customizer
 *
 * @package mexe
 */


/**
 * Load the helper class.
 */
if ( file_exists( dirname( __FILE__ ) . '/customizer-helper/class-customizer-helper.php' ) ) {
	require_once dirname( __FILE__ ) . '/customizer-helper/class-customizer-helper.php';
}

/**
 * Defines customizer settings
 */
function customizer_helper_settings() {

	// Stores all the panels to be added.
	$panels = array();

	// Stores all the sections to be added.
	$sections = array();

	// Stores all the settings that will be added.
	$settings = array();

	// Panel Example.
	$panels[] = array(
		'id'              => 'social-panel', // Panel ID.
		'title'           => esc_html__( 'Social Networks', 'mexe' ), // Title to show in the UI.
		'description'     => esc_html__( 'Configure links and sharing for social networks.', 'mexe' ), // Description to show in the UI.
		'priority'        => '160', // Priority of the panel, defining the display order of panels and sections. Default 160.
		'capability'      => 'edit_theme_options', // Capability required for the panel. Default `edit_theme_options`
		'theme_supports'  => '', // Theme features required to support the panel.
		'type'            => '', // Type of the panel.
		'active_callback' => '', // Active callback.
	);

	// Further Examples.
	$sections[] = array(
		'id'          => 'links-social-networks',
		'panel'       => 'social-panel',
		'title'       => esc_html__( 'For Linking', 'mexe' ),
		'description' => esc_html__( 'The links to the social networks you use.', 'mexe' )
	);

	// Further Examples.
	$sections[] = array(
		'id'          => 'sharing-social-networks',
		'panel'       => 'social-panel',
		'title'       => esc_html__( 'For Sharing', 'mexe' ),
		'description' => esc_html__( 'What social networks would you like to allow sharing', 'mexe' )
	);

	// Further Examples.
	$sections[] = array(
		'id'          => 'sharing-content-social-networks',
		'panel'       => 'social-panel',
		'title'       => esc_html__( 'Content for Sharing', 'mexe' ),
		'description' => esc_html__( 'What social networks would you like to allow sharing', 'mexe' )
	);


	$linkingsocialnetworks = array('twitter','facebook','instagram','youtube','vimeo');
	foreach($linkingsocialnetworks as $linkingsocialnetwork){
		$settings[$linkingsocialnetwork.'-linking-url'] = array(
			'section'     => 'links-social-networks',
			'id'          => $linkingsocialnetwork.'-linking-url',
			'label'       => esc_html__( $linkingsocialnetwork .' URL', 'mexe' ),
			'type'        => 'url',
			'input_attrs' => array(
				'placeholder' => esc_html__( 'https://www.'.$linkingsocialnetwork.'.com', 'mexe' ),
			),
		);	
	}

	$sharingsocialnetworks = array('twitter','facebook','youtube','vimeo');
	foreach($sharingsocialnetworks as $sharingsocialnetwork){
		$settings[$sharingsocialnetwork.'-sharing-checkbox'] = array(
			'section' => 'sharing-social-networks',
			'id'      => $sharingsocialnetwork.'-sharing-url',
			'label'   => esc_html__( 'Show '.$sharingsocialnetwork.'?', 'mexe' ),
			'type'    => 'checkbox',
			'default' => 0,
		);
	}


	$settings['twitter-content-sharing-text'] = array(
		'section'     => 'sharing-content-social-networks',
		'id'          => 'twitter-sharing-content-text',
		'label'       => esc_html__( 'Text Twitter', 'mexe' ),
		'type'        => 'text',
		'input_attrs' => array(
			'placeholder' => esc_html__( 'Encontro MEXE', 'mexe' ),
		),
	);

	$settings['twitter-content-sharing-hashtag'] = array(
		'section'     => 'sharing-content-social-networks',
		'id'          => 'twitter-sharing-content-hashtags',
		'label'       => esc_html__( 'Twitter Hashtags', 'mexe' ),
		'type'        => 'text',
		'input_attrs' => array(
			'placeholder' => esc_html__( '#mexe', 'mexe' ),
		),
	);

	$settings['fb-content-sharing-url'] = array(
		'section'     => 'sharing-content-social-networks',
		'id'          => 'fb-content-sharing-url',
		'label'       => esc_html__( 'URL', 'mexe' ),
		'type'        => 'url',
		'input_attrs' => array(
			'placeholder' => esc_html__( 'http://mexe.org.pt/', 'mexe' ),
		),
	);

	$settings['pinterest-content-sharing-description'] = array(
		'section'     => 'sharing-content-social-networks',
		'id'          => 'pinterest-content-sharing-description',
		'label'       => esc_html__( 'Description', 'mexe' ),
		'type'        => 'text',
		'input_attrs' => array(
			'placeholder' => esc_html__( 'Encontro Mexe IV', 'mexe' ),
		),
	);

	$settings['pinterest-content-sharing-media'] = array(
		'section' => 'links-social-networks',
		'id'      => 'pinterest-content-sharing-media',
		'label'       => esc_html__( 'Description', 'mexe' ),
		'type'    => 'image',
		'default' => '',
	);

	$settings['linkedin-content-sharing-url'] = array(
		'section'     => 'sharing-content-social-networks',
		'id'          => 'linkedin-content-sharing-url',
		'label'       => esc_html__( 'URL', 'mexe' ),
		'type'        => 'url',
		'input_attrs' => array(
			'placeholder' => esc_html__( 'http://mexe.org.pt/', 'mexe' ),
		),
	);

	$settings['email-content-sharing-subject'] = array(
		'section'     => 'sharing-content-social-networks',
		'id'          => 'email-content-sharing-subject',
		'label'       => esc_html__( 'Assunto', 'mexe' ),
		'type'        => 'text',
		'input_attrs' => array(
			'placeholder' => esc_html__( 'Encontro Mexe IV', 'mexe' ),
		),
	);

	$settings['email-content-sharing-body'] = array(
		'section'     => 'sharing-content-social-networks',
		'id'          => 'email-content-sharing-body',
		'label'       => esc_html__( 'Corpo', 'mexe' ),
		'type'        => 'text',
		'input_attrs' => array(
			'placeholder' => esc_html__( 'Encontro Mexe IV', 'mexe' ),
		),
	);

	$settings['analyticscode'] = array(
		'section' => 'title_tagline',
		'id'      => 'analytics-code',
		'label'   => esc_html__( 'Add Google Analytics code, or other as long as it is JS', 'mexe' ),
		'type'    => 'textarea',
		'default' => '',
	);

	$settings['copyrights'] = array(
		'section' => 'title_tagline',
		'id'      => 'copyrights-code',
		'label'   => esc_html__( 'Add copyright text to the footer', 'mexe' ),
		'type'    => 'textarea',
		'default' => '',
	);


	// Section Example.
	/* $section    = 'section'; // Section ID.
	$sections[] = array(
		'id'                 => 'social-links', // Section ID.
		'panel'              => $panel, // Panel ID.
		'title'              => esc_html__( 'Links for Social', 'mexe' ), // Title to show in the UI.
		'description'        => esc_html__( 'Example section description.', 'mexe' ), // Description to show in the UI.
		'priority'           => '', // Priority of the panel, defining the display order of panels and sections. Default 160.
		'capability'         => 'edit_theme_options', // Capability required for the section. Default `edit_theme_options`
		'theme_supports'     => '', // Theme features required to support the section.
		'type'               => '', // Type of the panel.
		'active_callback'    => '', // Active callback.
		'description_hidden' => false, // Hide the description behind a help icon. Default false.
	);

		// Section Example.
		$section    = 'section'; // Section ID.
		$sections[] = array(
			'id'                 => $section, // Section ID.
			'panel'              => $panel, // Panel ID.
			'title'              => esc_html__( 'Customizer Helper Section', 'mexe' ), // Title to show in the UI.
			'description'        => esc_html__( 'Example section description.', 'mexe' ), // Description to show in the UI.
			'priority'           => '160', // Priority of the panel, defining the display order of panels and sections. Default 160.
			'capability'         => 'edit_theme_options', // Capability required for the section. Default `edit_theme_options`
			'theme_supports'     => '', // Theme features required to support the section.
			'type'               => '', // Type of the panel.
			'active_callback'    => '', // Active callback.
			'description_hidden' => false, // Hide the description behind a help icon. Default false.
		); */

	// Setting Example.
	/* $settings['setting'] = array(
		'section'         => $section, // The section this control belongs to. Default empty.
		'id'              => 'setting', // Setting ID.
		'label'           => esc_html__( 'Customizer Helper Setting', 'mexe' ), // Label for the control. Default empty.
		'description'     => esc_html__( 'Example setting description', 'mexe' ), // Description for the control. Default empty.
		'type'            => 'text', // The type of the control. Default 'text'.
		'capability'      => 'edit_theme_options', // Capability required for the section. Default `edit_theme_options`
		'priority'        => '10', // Priority of the setting, defining it's order. Default 10.
		'choices'         => array(), // List of choices for 'radio' or 'select' type controls, where values are the keys, and labels are the values. Default empty array.
		'input_attrs'     => array(), // List of custom input attributes for control output, where attribute names are the keys and values are the values. Default empty array.
		'allow_addition'  => false, // Show UI for adding new content, currently only used for the dropdown-pages control. Default false.
		'active_callback' => '', // Active callback.
		'default'         => '', // Default value for the setting. Default is empty string.
	); */

	

	/* $settings['example-text'] = array(
		'id'      => 'example-text',
		'label'   => esc_html__( 'Example Text Input', 'mexe' ),
		'section' => 'links-social-networks',
		'type'    => 'text',
	);

	$settings['example-textarea'] = array(
		'section' => 'links-social-networks',
		'id'      => 'example-textarea',
		'label'   => esc_html__( 'Example Textarea', 'mexe' ),
		'type'    => 'textarea',
		'default' => esc_html__( 'Example textarea text.', 'mexe' ),
	);

	$settings['example-upload'] = array(
		'section' =>'links-social-networks',
		'id'      => 'example-upload',
		'label'   => esc_html__( 'Example Upload', 'mexe' ),
		'type'    => 'upload',
		'default' => '',
	);

	$settings['example-image'] = array(
		'section' => 'links-social-networks',
		'id'      => 'example-image',
		'label'   => esc_html__( 'Example Image', 'mexe' ),
		'type'    => 'image',
		'default' => '',
	);

	$settings['example-url'] = array(
		'section'     => 'links-social-networks',
		'id'          => 'example-url',
		'label'       => esc_html__( 'Example URL Input', 'mexe' ),
		'type'        => 'url',
		'input_attrs' => array(
			'placeholder' => esc_html__( 'https://www.google.com', 'mexe' ),
		),
	);

	$settings['example-color'] = array(
		'section' => 'sharing-social-networks',
		'id'      => 'example-color',
		'label'   => esc_html__( 'Example Color Picker', 'mexe' ),
		'type'    => 'color',
	);

	$settings['example-checkbox'] = array(
		'section' => 'sharing-social-networks',
		'id'      => 'example-checkbox',
		'label'   => esc_html__( 'Example Checkbox', 'mexe' ),
		'type'    => 'checkbox',
		'default' => 0, // 1 = checked. Default: 0.
	);

	$choices = array(
		'choice-1' => esc_html__( 'Choice One', 'mexe' ),
		'choice-2' => esc_html__( 'Choice Two', 'mexe' ),
		'choice-3' => esc_html__( 'Choice Three', 'mexe' ),
	);

	$settings['example-select'] = array(
		'section' => 'sharing-social-networks',
		'id'      => 'example-select',
		'label'   => esc_html__( 'Example Select', 'mexe' ),
		'type'    => 'select',
		'choices' => $choices,
		'default' => 'choice-1',
	);

	$settings['example-radio'] = array(
		'section' => 'sharing-social-networks',
		'id'      => 'example-radio',
		'label'   => esc_html__( 'Example Radio', 'mexe' ),
		'type'    => 'radio',
		'choices' => $choices,
		'default' => 'choice-1',
	);

	$settings['example-range'] = array(
		'section'     => 'sharing-social-networks',
		'id'          => 'example-range',
		'label'       => esc_html__( 'Example Range Input', 'mexe' ),
		'type'        => 'range',
		'input_attrs' => array(
			'min'   => 0,
			'max'   => 10,
			'step'  => 1,
			'style' => 'color: #0a0',
		),
	); */

	// Adds the panels to the $settings array.
	$settings['panels'] = $panels;

	// Adds the sections to the $settings array.
	$settings['sections'] = $sections;

	$customizer_helper = Customizer_Helper::Instance();
	$customizer_helper->add_settings( $settings );

}
add_action( 'init', 'customizer_helper_settings' );


/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function mexe_customize_partial_blogname() {
	bloginfo( 'name' );
}
function mexe_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function mexe_customize_preview_js() {
	wp_enqueue_script( 'mexe-customizer', get_template_directory_uri() . 'assets/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'mexe_customize_preview_js' );