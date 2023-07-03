<?php
	$wp_customize->add_section('vw_computer_repair_pro_slider_section',array(
		'title'	=> __('Slider Settings','vw-computer-repair-pro'),
		'description'	=> __('Add slider images here.','vw-computer-repair-pro'),
		'priority'	=> null,
		'panel' => 'vw_computer_repair_pro_panel_id',
	));

	$wp_customize->add_setting('vw_computer_repair_pro_slider_enabledisable',array(
        'default'=> 'Enable',
        'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
    ));
	$wp_customize->add_control('vw_computer_repair_pro_slider_enabledisable', array(
        'type' => 'radio',
        'label' => 'Do you want this section',
        'section' => 'vw_computer_repair_pro_slider_section',
        'choices' => array(
            'Enable' => 'Enable',
            'Disable' => 'Disable'
        ),
    ));
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'vw_computer_repair_pro_slider_enabledisable', array(
    'selector' => '.slider-box h2',
    'render_callback' => 'vw_computer_repair_pro_customize_partial_vw_computer_repair_pro_slider_enabledisable',
  	) );
}
    $wp_customize->add_setting( 'vw_computer_repair_pro_slider_youtube_link', array(
	) );
	$wp_customize->add_control( new VW_Button_Custom_Content( $wp_customize, 'vw_computer_repair_pro_slider_youtube_link', array(
	      'section' => 'vw_computer_repair_pro_slider_section',
	      'label' => __( 'Youtube Video', 'vw-computer-repair-pro' ),
	      'description' => __( 'Watch our youtube video for How to add Slider using Customizer.', 'vw-computer-repair-pro' ),
	      'content' => sprintf( __( 'Check the button %1$sBuy Now%2$s', 'vw-computer-repair-pro' ), '<a href="' . esc_url( VW_COMPUTER_REPAIR_PRO_SOCIAL_ICON_LINK  ) . '" class="button button-secondary alignright review_st" target="_blank">', '</a>' ),
	)));
	$wp_customize->add_setting('vw_computer_repair_pro_slide_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_computer_repair_pro_slide_number',array(
		'label'	=> __('Number of slides to show','vw-computer-repair-pro'),
		'section'	=> 'vw_computer_repair_pro_slider_section',
		'type'		=> 'number'
	));
	$count =  get_theme_mod('vw_computer_repair_pro_slide_number');
	for($i=1; $i<=$count; $i++) {
		
		$wp_customize->add_setting( 'vw_computer_repair_pro_slider_section_settings'.$i,
		    array(
		    'default' => '',
		    'transport' => 'postMessage',
		    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
		 ));
		 $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_slider_section_settings'.$i,
		    array(
		    'label' => __('Slider Settings ','vw-computer-repair-pro').$i,
		    'section' => 'vw_computer_repair_pro_slider_section'
		)));

		$wp_customize->add_setting('vw_computer_repair_pro_slide_image'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_computer_repair_pro_slide_image'.$i,
	        array(
            'label' => __('Slider Image ','vw-computer-repair-pro').$i.__(' (1600px * 562px)','vw-computer-repair-pro'),
            'section' => 'vw_computer_repair_pro_slider_section',
            'settings' => 'vw_computer_repair_pro_slide_image'.$i
		)));
		$wp_customize->add_setting('vw_computer_repair_pro_slide_image_alt_text'.$i,array(
		    'default' => '',
		    'sanitize_callback' => 'sanitize_textarea_field',
	    ));
	    $wp_customize->add_control('vw_computer_repair_pro_slide_image_alt_text'.$i,array(
	    	'label' => __('Slider Image ALT Text ','vw-computer-repair-pro').$i,
	    	'description' => __('This is image text for image alt attribute.This text is only for coding purpose.','vw-computer-repair-pro'),
	    	'section' => 'vw_computer_repair_pro_slider_section',
	    	'setting' => 'vw_computer_repair_pro_slide_image_alt_text'.$i,
	    	'type' => 'text'
	    ));
		$wp_customize->add_setting('vw_computer_repair_pro_slide_small_heading'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('vw_computer_repair_pro_slide_small_heading'.$i,array(
			'label' => __('Slide Small Heading ','vw-computer-repair-pro').$i,
			'section' => 'vw_computer_repair_pro_slider_section',
			'setting'	=> 'vw_computer_repair_pro_slide_small_heading'.$i,
			'type'	=> 'text'
		));
		$wp_customize->add_setting('vw_computer_repair_pro_slide_heading'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('vw_computer_repair_pro_slide_heading'.$i,array(
			'label' => __('Slide Main Heading ','vw-computer-repair-pro').$i,
			'section' => 'vw_computer_repair_pro_slider_section',
			'setting'	=> 'vw_computer_repair_pro_slide_heading'.$i,
			'type'	=> 'text'
		));
		$wp_customize->add_setting('vw_computer_repair_pro_slide_text'.$i,array(
		    'default'   => '',
		    'capability'         => 'edit_theme_options',
		    'sanitize_callback'  => 'wp_kses_post'
		));
		$wp_customize->add_control(new vw_computer_repair_pro_Editor_Control($wp_customize,'vw_computer_repair_pro_slide_text'.$i,array(
		    'label' => __('Slide Text','vw-computer-repair-pro').$i,
		    'description'	=> __('Add Slide Text','vw-computer-repair-pro').$i,
		    'section' => 'vw_computer_repair_pro_slider_section',
		    'setting'   => 'vw_computer_repair_pro_slide_text'.$i,       
		)));
		$wp_customize->add_setting('vw_computer_repair_pro_slide_btn_one_text'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_textarea_field',
		));
		$wp_customize->add_control('vw_computer_repair_pro_slide_btn_one_text'.$i,array(
			'label' => __('Slider Button 1 Text','vw-computer-repair-pro'),
			'section' => 'vw_computer_repair_pro_slider_section',
			'setting'	=> 'vw_computer_repair_pro_slide_btn_one_text'.$i,
			'type'	=> 'text'
		));
		$wp_customize->add_setting('vw_computer_repair_pro_slide_btn_one_url'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control('vw_computer_repair_pro_slide_btn_one_url'.$i,array(
			'label' => __('Slider Button 1 Url','vw-computer-repair-pro'),
			'section' => 'vw_computer_repair_pro_slider_section',
			'setting'	=> 'vw_computer_repair_pro_slide_btn_one_url'.$i,
			'type'	=> 'text'
		));

		$wp_customize->add_setting('vw_computer_repair_pro_slide_btn_two_text'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_textarea_field',
		));
		$wp_customize->add_control('vw_computer_repair_pro_slide_btn_two_text'.$i,array(
			'label' => __('Slider Button 2 Text','vw-computer-repair-pro'),
			'section' => 'vw_computer_repair_pro_slider_section',
			'setting'	=> 'vw_computer_repair_pro_slide_btn_two_text'.$i,
			'type'	=> 'text'
		));
		$wp_customize->add_setting('vw_computer_repair_pro_slide_btn_two_url'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control('vw_computer_repair_pro_slide_btn_two_url'.$i,array(
			'label' => __('Slider Button 2 Url','vw-computer-repair-pro'),
			'section' => 'vw_computer_repair_pro_slider_section',
			'setting'	=> 'vw_computer_repair_pro_slide_btn_two_url'.$i,
			'type'	=> 'text'
		));
	}
    /* --------- Slider Opacity  ----------- */

	$wp_customize->add_setting('vw_computer_repair_pro_slider_section_opacity_color',array(
      'default'              => '1',
      'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
	));

	$wp_customize->add_control( 'vw_computer_repair_pro_slider_section_opacity_color', array(
		'label'       => esc_html__( 'Slider Image Opacity','vw-computer-repair-pro' ),
		'section'     => 'vw_computer_repair_pro_slider_section',
		'type'        => 'select',
		'settings'    => 'vw_computer_repair_pro_slider_section_opacity_color',
		'choices' => array(
	      '0' =>  esc_attr('0','vw-computer-repair-pro'),
	      '0.1' =>  esc_attr('0.1','vw-computer-repair-pro'),
	      '0.2' =>  esc_attr('0.2','vw-computer-repair-pro'),
	      '0.3' =>  esc_attr('0.3','vw-computer-repair-pro'),
	      '0.4' =>  esc_attr('0.4','vw-computer-repair-pro'),
	      '0.5' =>  esc_attr('0.5','vw-computer-repair-pro'),
	      '0.6' =>  esc_attr('0.6','vw-computer-repair-pro'),
	      '0.7' =>  esc_attr('0.7','vw-computer-repair-pro'),
	      '0.8' =>  esc_attr('0.8','vw-computer-repair-pro'),
	      '0.9' =>  esc_attr('0.9','vw-computer-repair-pro'),
	      '1' =>  esc_attr('1','vw-computer-repair-pro')
		),
	));

	// Other Settings
	$wp_customize->add_setting('vw_computer_repair_pro_slide_delay',array(
		'default'	=> '1000',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_computer_repair_pro_slide_delay',array(
		'label'	=> __('Slide Delay','vw-computer-repair-pro'),
		'section'	=> 'vw_computer_repair_pro_slider_section',
		'description' => __('interval is in milliseconds. 1000 = 1 second -> so 1000 * 10 = 10 seconds', 'vw-computer-repair-pro'),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'vw_computer_repair_pro_slide_remove_fade',
     array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
     )
    );
   
    $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_slide_remove_fade',
       array(
          'label' => esc_html__( 'Remove Fade Effect', 'vw-computer-repair-pro' ),
          'section' => 'vw_computer_repair_pro_slider_section'
       )
    ));
    $wp_customize->add_setting( 'vw_computer_repair_pro_slide_small_heading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_slide_small_heading_color', array(
		'label' => __('Slider Small Heading Color', 'vw-computer-repair-pro'),
		'section' => 'vw_computer_repair_pro_slider_section',
		'settings' => 'vw_computer_repair_pro_slide_small_heading_color',
	)));
	//This is Slider Heading FontFamily picker setting
	$wp_customize->add_setting('vw_computer_repair_pro_slide_small_heading_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_computer_repair_pro_slide_small_heading_font_family', array(
	    'section'  => 'vw_computer_repair_pro_slider_section',
	    'label'    => __( 'Slider Small Heading Fonts','vw-computer-repair-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_computer_repair_pro_slide_small_heading_font_size',array(
	      'default' => '',
	      'sanitize_callback' => 'sanitize_text_field'
	    )
	);
	$wp_customize->add_control('vw_computer_repair_pro_slide_small_heading_font_size',array(
	      'label' => __('Slider Small Heading Font Size in px','vw-computer-repair-pro'),
	      'section' => 'vw_computer_repair_pro_slider_section',
	      'setting' => 'vw_computer_repair_pro_slide_small_heading_font_size',
	      'type'    => 'text'
	    )
	);
	$wp_customize->add_setting( 'vw_computer_repair_pro_slide_small_heading_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_slide_small_heading_bgcolor', array(
		'label' => __('Slider Small Heading Background Color', 'vw-computer-repair-pro'),
		'section' => 'vw_computer_repair_pro_slider_section',
		'settings' => 'vw_computer_repair_pro_slide_small_heading_bgcolor',
	)));
	// This is Slider Heading Color picker setting
	$wp_customize->add_setting( 'vw_computer_repair_pro_sliderHeading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_sliderHeading_color', array(
		'label' => __('Slider Heading Color', 'vw-computer-repair-pro'),
		'section' => 'vw_computer_repair_pro_slider_section',
		'settings' => 'vw_computer_repair_pro_sliderHeading_color',
	)));
	//This is Slider Heading FontFamily picker setting
	$wp_customize->add_setting('vw_computer_repair_pro_sliderHeading_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_computer_repair_pro_sliderHeading_font_family', array(
	    'section'  => 'vw_computer_repair_pro_slider_section',
	    'label'    => __( 'Slider Heading Fonts','vw-computer-repair-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_computer_repair_pro_sliderHeading_font_size',array(
	      'default' => '',
	      'sanitize_callback' => 'sanitize_text_field'
	    )
	);
	$wp_customize->add_control('vw_computer_repair_pro_sliderHeading_font_size',array(
	      'label' => __('Slider Heading Font Size in px','vw-computer-repair-pro'),
	      'section' => 'vw_computer_repair_pro_slider_section',
	      'setting' => 'vw_computer_repair_pro_sliderHeading_font_size',
	      'type'    => 'text'
	    )
	);
	// This is Slider Text Color picker setting
	$wp_customize->add_setting( 'vw_computer_repair_pro_slidertext_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_slidertext_color', array(
		'label' => __('Slider Text Color', 'vw-computer-repair-pro'),
		'section' => 'vw_computer_repair_pro_slider_section',
		'settings' => 'vw_computer_repair_pro_slidertext_color',
	)));
	//This is Slider Text FontFamily picker setting
	$wp_customize->add_setting('vw_computer_repair_pro_slidertext_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_computer_repair_pro_slidertext_font_family', array(
	    'section'  => 'vw_computer_repair_pro_slider_section',
	    'label'    => __( 'Slider Text Fonts','vw-computer-repair-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_computer_repair_pro_slidertext_font_size',array(
	      'default' => '',
	      'sanitize_callback' => 'sanitize_text_field'
	    )
	);
	$wp_customize->add_control('vw_computer_repair_pro_slidertext_font_size',array(
	      'label' => __('Slider Text Font Size in px','vw-computer-repair-pro'),
	      'section' => 'vw_computer_repair_pro_slider_section',
	      'setting' => 'vw_computer_repair_pro_slidertext_font_size',
	      'type'    => 'text'
	    )
	);
	// Button color settings
	$wp_customize->add_setting( 'vw_computer_repair_pro_slide_buttoncolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_slide_buttoncolor', array(
		'label' => 'Button Text Color',
		'section' => 'vw_computer_repair_pro_slider_section',
		'settings' => 'vw_computer_repair_pro_slide_buttoncolor',
	)));	

	$wp_customize->add_setting('vw_computer_repair_pro_button_fontfamily',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
	 ));
	$wp_customize->add_control(
	    'vw_computer_repair_pro_button_fontfamily', array(
	    'section'  => 'vw_computer_repair_pro_slider_section',
	    'label'    => __( 'Button Text Fonts','vw-computer-repair-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
 	));
	$wp_customize->add_setting('vw_computer_repair_pro_button_font_size',array(
	      'default' => '',
	      'sanitize_callback' => 'sanitize_text_field'
	    )
	);
	$wp_customize->add_control('vw_computer_repair_pro_button_font_size',array(
	      'label' => __('Button Text Font Size in px','vw-computer-repair-pro'),
	      'section' => 'vw_computer_repair_pro_slider_section',
	      'setting' => 'vw_computer_repair_pro_button_font_size',
	      'type'    => 'text'
	    )
	);
	$wp_customize->add_setting( 'vw_computer_repair_pro_slide_button_first_bgcolor_one', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_slide_button_first_bgcolor_one', array(
		'label' => 'Button Background Color',
		'section' => 'vw_computer_repair_pro_slider_section',
		'settings' => 'vw_computer_repair_pro_slide_button_first_bgcolor_one',
	)));

 	// Button Hover color settings
	$wp_customize->add_setting( 'vw_computer_repair_pro_slide_button_hvcolor_one', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_slide_button_hvcolor_one', array(
		'label' => 'Button Hover Background Color',
		'section' => 'vw_computer_repair_pro_slider_section',
		'settings' => 'vw_computer_repair_pro_slide_button_hvcolor_one',
	)));

	$wp_customize->add_setting( 'vw_computer_repair_pro_slide_nav_one', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_slide_nav_one', array(
		'label' => 'Slider Nav And Active Dot Background Color',
		'section' => 'vw_computer_repair_pro_slider_section',
		'settings' => 'vw_computer_repair_pro_slide_nav_one',
	)));

	$wp_customize->add_setting( 'vw_computer_repair_pro_slider_arrows',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
   	));
 
  	$wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_slider_arrows',
     array(
        'label' => esc_html__( 'Show/Hide Slider Nav', 'vw-computer-repair-pro' ),
        'section' => 'vw_computer_repair_pro_slider_section'
    )));

 	$wp_customize->add_setting( 'vw_computer_repair_pro_slider_dots',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
   	));
 
  	$wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_slider_dots',
     array(
        'label' => esc_html__( 'Show/Hide Slider Dots', 'vw-computer-repair-pro' ),
        'section' => 'vw_computer_repair_pro_slider_section'
    )));
    //content Alignment
    $wp_customize->add_setting('vw_computer_repair_pro_slider_content_option',array(
    	'default' => __('Left','vw-computer-repair-pro'),
        'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
	));
	$wp_customize->add_control('vw_computer_repair_pro_slider_content_option',array(
        'type' => 'select',
        'label' => __('Slider Content Alignment','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_slider_section',
        'choices' => array(
            'Center' => __('Center','vw-computer-repair-pro'),
            'Left' => __('Left','vw-computer-repair-pro'),
            'Right' => __('Right','vw-computer-repair-pro'),
        ),
	) );

	$wp_customize->add_setting('vw_computer_repair_pro_content_spacing',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('vw_computer_repair_pro_content_spacing',array(
		'label'	=> esc_html__('Slider Content Spacing','vw-computer-repair-pro'),
		'description'	=> __('Add value in percentage here.','vw-computer-repair-pro'),
		'section'=> 'vw_computer_repair_pro_slider_section',
	));

	$wp_customize->add_setting( 'vw_computer_repair_pro_slider_top_spacing', array(
		'default'  => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'vw_computer_repair_pro_slider_top_spacing', array(
		'label' => esc_html__( 'Top','vw-computer-repair-pro' ),
		'section' => 'vw_computer_repair_pro_slider_section',
		'type'  => 'number',
		'input_attrs' => array(
			'step' => 1,
			'min' => 0,
			'max' => 100,
		),
	) );

	$wp_customize->add_setting( 'vw_computer_repair_pro_slider_bottom_spacing', array(
		'default'  => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'vw_computer_repair_pro_slider_bottom_spacing', array(
		'label' => esc_html__( 'Bottom','vw-computer-repair-pro' ),
		'section' => 'vw_computer_repair_pro_slider_section',
		'type'  => 'number',
		'input_attrs' => array(
			'step' => 1,
			'min' => 0,
			'max' => 100,
		),
	) );

	$wp_customize->add_setting( 'vw_computer_repair_pro_slider_left_spacing', array(
		'default'  => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'vw_computer_repair_pro_slider_left_spacing', array(
		'label' => esc_html__( 'Left','vw-computer-repair-pro'),
		'section' => 'vw_computer_repair_pro_slider_section',
		'type'  => 'number',
		'input_attrs' => array(
			'step' => 1,
			'min' => 0,
			'max' => 100,
		),
	) );

	$wp_customize->add_setting( 'vw_computer_repair_pro_slider_right_spacing', array(
		'default'  => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'vw_computer_repair_pro_slider_right_spacing', array(
		'label' => esc_html__('Right','vw-computer-repair-pro'),
		'section' => 'vw_computer_repair_pro_slider_section',
		'type'  => 'number',
		'input_attrs' => array(
			'step' => 1,
			'min' => 0,
			'max' => 100,
		),
	) );
?>