<?php
	// -------------Top Bar----------------

	$wp_customize->add_section('vw_computer_repair_pro_topbar',array(
		'title'	=> __('Top Bar','vw-computer-repair-pro'),
		'description'	=> __('Top Bar Settings','vw-computer-repair-pro'),
		'priority'	=> null,
		'panel' => 'vw_computer_repair_pro_panel_id',
	));

	$wp_customize->add_setting( 'vw_computer_repair_pro_topbar_option',
	    array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
	));

    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_topbar_option',
	    array(
	        'label' => __('Top Bar Option','vw-computer-repair-pro'),
	        'section' => 'vw_computer_repair_pro_topbar'
	    )
    ));

	$wp_customize->add_setting('vw_computer_repair_pro_topbar_enable',
    array(
        'default' => 'Enable',
        'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
    ));
    $wp_customize->add_control('vw_computer_repair_pro_topbar_enable',
    array(
        'type' => 'radio',
        'label' => 'Do you want this section',
        'section' => 'vw_computer_repair_pro_topbar',
        'choices' => array(
            'Enable' => __('Enable', 'vw-computer-repair-pro'),
            'Disable' => __('Disable', 'vw-computer-repair-pro')
        ),
    ));
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'vw_computer_repair_pro_topbar_enable', array(
	    'selector' => '#site_top .container',
	    'render_callback' => 'vw_computer_repair_pro_customize_partial_vw_computer_repair_pro_topbar_enable',
	));
}
    $wp_customize->add_setting( 'vvw_computer_repair_pro_topbar_bgcolor', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vvw_computer_repair_pro_topbar_bgcolor', array(
	    'label' => __('Background Color', 'vw-computer-repair-pro'),
	    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','vw-computer-repair-pro'),
	    'section' => 'vw_computer_repair_pro_topbar',
	    'settings' => 'vvw_computer_repair_pro_topbar_bgcolor',
	)));

	$wp_customize->add_setting('vw_computer_repair_pro_topbar_bgimage',array(
	    'default' => '',
	    'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control(
	    new WP_Customize_Image_Control( $wp_customize,'vw_computer_repair_pro_topbar_bgimage',array(
	    'label' => __('Section Background Image','vw-computer-repair-pro'),
	    'description' => __('Dimension 1600px * 70px','vw-computer-repair-pro'),
	    'section' => 'vw_computer_repair_pro_topbar',
	    'settings' => 'vw_computer_repair_pro_topbar_bgimage'
	)));

	$wp_customize->add_setting( 'vw_computer_repair_pro_topbar_content_option',
	    array(
	        'default' => '',
	        'transport' => 'postMessage',
	        'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
	    )
    );
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_topbar_content_option',
	    array(
	        'label' => __('Top Bar Content','vw-computer-repair-pro'),
	        'section' => 'vw_computer_repair_pro_topbar'
	    )
    ));
    $wp_customize->add_setting(
    'vw_computer_repair_pro_topbar_cart_icon',
      array(
        'default'     => '',
        'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
      )
    );
    $wp_customize->add_control(
      new Vw_Computer_Pro_Fontawesome_Icon_Chooser(
        $wp_customize,
        'vw_computer_repair_pro_topbar_cart_icon',
        array(
          'settings'    => 'vw_computer_repair_pro_topbar_cart_icon',
          'section'   => 'vw_computer_repair_pro_topbar',
          'type'      => 'icon',
          'label'     => esc_html__( 'Cart Icon', 'vw-computer-repair-pro' ),
        )
      )
    );
	$wp_customize->add_setting('vw_computer_repair_pro_topbar_button_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_computer_repair_pro_topbar_button_title',array(
		'label'	=> __('Button Title','vw-computer-repair-pro'),
		'section'	=> 'vw_computer_repair_pro_topbar',
		'setting'	=> 'vw_computer_repair_pro_topbar_button_title',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('vw_computer_repair_pro_topbar_button_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_computer_repair_pro_topbar_button_url',array(
		'label'	=> __('Button Url','vw-computer-repair-pro'),
		'section'	=> 'vw_computer_repair_pro_topbar',
		'setting'	=> 'vw_computer_repair_pro_topbar_button_url',
		'type'	=> 'text'
	));

	$wp_customize->add_setting( 'vw_computer_repair_pro_topbar_contact_details_color_option',
    array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
    ));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_topbar_contact_details_color_option',
	array(
	    'label' => __('Top Bar Contact Color Option','vw-computer-repair-pro'),
	    'section' => 'vw_computer_repair_pro_topbar'
	)));
	
	$wp_customize->add_setting( 'vw_computer_repair_pro_header_section_social_icon_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_header_section_social_icon_color', array(
	    'label' => __('Social Icon Color', 'vw-computer-repair-pro'),
	    'section' => 'vw_computer_repair_pro_topbar',
	    'settings' => 'vw_computer_repair_pro_header_section_social_icon_color',
	)));

	$wp_customize->add_setting( 'vw_computer_repair_pro_topbar_button_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_topbar_button_color', array(
	    'label' => __('Topbar Button Color', 'vw-computer-repair-pro'),
	    'section' => 'vw_computer_repair_pro_topbar',
	    'settings' => 'vw_computer_repair_pro_topbar_button_color',
	)));

	$wp_customize->add_setting('vw_computer_repair_pro_topbar_button_font_family',array(
	    'default' => '',
	    'capability' => 'edit_theme_options',
	    'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(
	    'vw_computer_repair_pro_topbar_button_font_family', array(
	    'section'  => 'vw_computer_repair_pro_topbar',
	    'label'    => __('Topbar Button Font Family','vw-computer-repair-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_computer_repair_pro_topbar_button_font_size',array(
	      'default' => '',
	      'sanitize_callback' => 'sanitize_text_field'
	    )
	);
	$wp_customize->add_control('vw_computer_repair_pro_topbar_button_font_size',array(
	      'label' => __('Topbar Button Text Font Size in px','vw-computer-repair-pro'),
	      'section' => 'vw_computer_repair_pro_topbar',
	      'setting' => 'vw_computer_repair_pro_topbar_button_font_size',
	      'type'    => 'text'
	    )
	);
	$wp_customize->add_setting( 'vw_computer_repair_pro_topbar_button_bgcolor', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_topbar_button_bgcolor', array(
	    'label' => __('Topbar Button Background Color', 'vw-computer-repair-pro'),
	    'section' => 'vw_computer_repair_pro_topbar',
	    'settings' => 'vw_computer_repair_pro_topbar_button_bgcolor',
	)));

	$wp_customize->add_setting( 'vw_computer_repair_pro_topbar_cart_icon_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_topbar_cart_icon_color', array(
	    'label' => __('Topbar Cart Icon Color', 'vw-computer-repair-pro'),
	    'section' => 'vw_computer_repair_pro_topbar',
	    'settings' => 'vw_computer_repair_pro_topbar_cart_icon_color',
	)));

	$wp_customize->add_setting( 'vw_computer_repair_pro_topbar_cart_icon_bgcolor', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_topbar_cart_icon_bgcolor', array(
	    'label' => __('Topbar Cart Icon Background Color', 'vw-computer-repair-pro'),
	    'section' => 'vw_computer_repair_pro_topbar',
	    'settings' => 'vw_computer_repair_pro_topbar_cart_icon_bgcolor',
	)));
	$wp_customize->add_setting('vw_computer_repair_pro_topbar_top_bottom_padding',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_topbar_top_bottom_padding',array(
        'label' => __('Topbar Top Bottom Padding','vw-computer-repair-pro'),
        'section'   => 'vw_computer_repair_pro_topbar',
        'type'      => 'number'
    ));
	// --------------- Header Section ---------------

	$wp_customize->add_section('vw_computer_repair_pro_header_section',array(
		'title'	=> __('Header','vw-computer-repair-pro'),
		'description'	=> __('Header Settings','vw-computer-repair-pro'),
		'priority'	=> null,
		'panel' => 'vw_computer_repair_pro_panel_id',
	));	
	$wp_customize->add_setting( 'vw_computer_repair_pro_header_section_sticky',
   		array(
	      'default' => 1,
	      'transport' => 'refresh',
	      'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
   	));
  	$wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_header_section_sticky',
     array(
        'label' => esc_html__( 'Sticky Header On/Off', 'vw-computer-repair-pro' ),
        'section' => 'vw_computer_repair_pro_header_section'
    )));
    $wp_customize->add_setting('vw_computer_repair_pro_sticky_header_alingment',array(
		'default' => __('center','vw-computer-repair-pro'),
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(new vw_computer_repair_pro_Image_Radio_Control($wp_customize, 'vw_computer_repair_pro_sticky_header_alingment', array(
		'type' => 'select',
		'label' => __('Sticky Header Alignment','vw-computer-repair-pro'),
		'section' => 'vw_computer_repair_pro_header_section',
		'settings' => 'vw_computer_repair_pro_sticky_header_alingment',
		'choices' => array(
	    'left' => get_template_directory_uri().'/assets/images/copyright1.png',
	    'center' => get_template_directory_uri().'/assets/images/copyright2.png',
	    'right' => get_template_directory_uri().'/assets/images/copyright3.png'
	))));
    $wp_customize->add_setting( 'vw_computer_repair_pro_header_search_toggle',
	   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
   	));
  	$wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_header_search_toggle',
     array(
        'label' => esc_html__( 'Show or Hide Search', 'vw-computer-repair-pro' ),
        'section' => 'vw_computer_repair_pro_header_section'
    )));
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'vw_computer_repair_pro_header_search_toggle', array(
	    'selector' => '#sticky-menu .container',
	    'render_callback' => 'vw_computer_repair_pro_customize_partial_vw_computer_repair_pro_header_search_toggle',
	));
}
    $wp_customize->add_setting( 'vw_computer_repair_pro_menu_youtube_link', array(
	) );
	$wp_customize->add_control( new VW_Button_Custom_Content( $wp_customize, 'vw_computer_repair_pro_menu_youtube_link', array(
	    'section' => 'vw_computer_repair_pro_header_section',
	    'label' => __( 'Youtube Video', 'vw-computer-repair-pro' ),
	    'description' => __( 'Watch our youtube video for how to create Menu in WordPress Website', 'vw-computer-repair-pro' ),
	    /* translators: %s: plugin name. */
      'content' => sprintf( __( 'Check the button %1$sWatch Now%2$s', 'vw-computer-repair-pro' ), '<a href="' . esc_url( VW_COMPUTER_REPAIR_PRO_CREATE_MENU_LINK  ) . '" class="button button-secondary alignright review_st" target="_blank">', '</a>' ),
	)));
	$wp_customize->add_setting( 'vw_computer_repair_pro_header_section_color_settings',
    array(
	    'default' => '',
	    'transport' => 'postMessage',
	    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_header_section_color_settings',
	    array(
	    'label' => __('Section Content Color And Font Settings','vw-computer-repair-pro'),
	    'section' => 'vw_computer_repair_pro_header_section'
	)));

	$wp_customize->add_setting( 'vw_computer_repair_pro_header_section_logo_box_bgcolor', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_header_section_logo_box_bgcolor', array(
	    'label' => __('Logo Box Background Color', 'vw-computer-repair-pro'),
	    'section' => 'vw_computer_repair_pro_header_section',
	    'settings' => 'vw_computer_repair_pro_header_section_logo_box_bgcolor',
	)));

	$wp_customize->add_setting( 'vw_computer_repair_pro_header_section_logo_title_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_header_section_logo_title_color', array(
	    'label' => __('Logo Title Color', 'vw-computer-repair-pro'),
	    'section' => 'vw_computer_repair_pro_header_section',
	    'settings' => 'vw_computer_repair_pro_header_section_logo_title_color',
	)));

	$wp_customize->add_setting('vw_computer_repair_pro_header_section_logo_title_font_family',array(
	    'default' => '',
	    'capability' => 'edit_theme_options',
	    'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(
	    'vw_computer_repair_pro_header_section_logo_title_font_family', array(
	    'section'  => 'vw_computer_repair_pro_header_section',
	    'label'    => __('Logo Title Font Family','vw-computer-repair-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_computer_repair_pro_header_section_logo_title_font_size',array(
	      'default' => '',
	      'sanitize_callback' => 'sanitize_text_field'
	    )
	);
	$wp_customize->add_control('vw_computer_repair_pro_header_section_logo_title_font_size',array(
	      'label' => __('Logo Title Font Size in px','vw-computer-repair-pro'),
	      'section' => 'vw_computer_repair_pro_header_section',
	      'setting' => 'vw_computer_repair_pro_header_section_logo_title_font_size',
	      'type'    => 'text'
	    )
	);
	$wp_customize->add_setting( 'vw_computer_repair_pro_header_section_logo_text_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_header_section_logo_text_color', array(
	    'label' => __('Logo Text Color', 'vw-computer-repair-pro'),
	    'section' => 'vw_computer_repair_pro_header_section',
	    'settings' => 'vw_computer_repair_pro_header_section_logo_text_color',
	)));

	$wp_customize->add_setting('vw_computer_repair_pro_header_section_logo_text_font_family',array(
	    'default' => '',
	    'capability' => 'edit_theme_options',
	    'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(
	    'vw_computer_repair_pro_header_section_logo_text_font_family', array(
	    'section'  => 'vw_computer_repair_pro_header_section',
	    'label'    => __('Logo Text Font Family','vw-computer-repair-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_computer_repair_pro_header_section_logo_text_font_size',array(
	      'default' => '',
	      'sanitize_callback' => 'sanitize_text_field'
	    )
	);
	$wp_customize->add_control('vw_computer_repair_pro_header_section_logo_text_font_size',array(
	      'label' => __('Logo Text Font Size in px','vw-computer-repair-pro'),
	      'section' => 'vw_computer_repair_pro_header_section',
	      'setting' => 'vw_computer_repair_pro_header_section_logo_text_font_size',
	      'type'    => 'text'
	    )
	);
 
	// This is Header Menu Color picker setting
	$wp_customize->add_setting( 'vw_computer_repair_pro_headermenu_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_headermenu_color', array(
		'label' => __('Menu Item Color', 'vw-computer-repair-pro'),
		'section' => 'vw_computer_repair_pro_header_section',
		'settings' => 'vw_computer_repair_pro_headermenu_color',
	)));
	//This is Header Menu FontFamily picker setting
	$wp_customize->add_setting('vw_computer_repair_pro_headermenu_font_family',array(
	  	'default' => '',
	  	'capability' => 'edit_theme_options',
	  	'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
	 ));
	$wp_customize->add_control(
	    'vw_computer_repair_pro_headermenu_font_family', array(
	    'section'  => 'vw_computer_repair_pro_header_section',
	    'label'    => __( 'Menu Item Fonts','vw-computer-repair-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_computer_repair_pro_headermenu_font_size',array(
	      'default' => '',
	      'sanitize_callback' => 'sanitize_text_field'
	    )
	);
	$wp_customize->add_control('vw_computer_repair_pro_headermenu_font_size',array(
	      'label' => __('Menu Item Font Size in px','vw-computer-repair-pro'),
	      'section' => 'vw_computer_repair_pro_header_section',
	      'setting' => 'vw_computer_repair_pro_headermenu_font_size',
	      'type'    => 'text'
	    )
	);
	$wp_customize->add_setting( 'vw_computer_repair_pro_header_menuhovercolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_header_menuhovercolor', array(
		'label' => __('Menu Item Hover Color', 'vw-computer-repair-pro'),
		'section' => 'vw_computer_repair_pro_header_section',
		'settings' => 'vw_computer_repair_pro_header_menuhovercolor',
	)));
	
	// This is Nav Dropdown Background Color picker setting
	$wp_customize->add_setting( 'vw_computer_repair_pro_dropdownbg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_dropdownbg_color', array(
		'label' => __('Menu DropDown Background Color', 'vw-computer-repair-pro'),
		'section' => 'vw_computer_repair_pro_header_section',
		'settings' => 'vw_computer_repair_pro_dropdownbg_color',
	)));

	$wp_customize->add_setting( 'vw_computer_repair_pro_dropdownbg_itemcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_dropdownbg_itemcolor', array(
		'label' => __('Menu DropDown Item Color', 'vw-computer-repair-pro'),
		'section' => 'vw_computer_repair_pro_header_section',
		'settings' => 'vw_computer_repair_pro_dropdownbg_itemcolor',
	)));
	//This is Header Menu FontFamily picker setting
	$wp_customize->add_setting('vw_computer_repair_pro_header_dropdown_item_font_family',array(
	  	'default' => '',
	  	'capability' => 'edit_theme_options',
	  	'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
	 ));
	$wp_customize->add_control(
	    'vw_computer_repair_pro_header_dropdown_item_font_family', array(
	    'section'  => 'vw_computer_repair_pro_header_section',
	    'label'    => __( 'Menu DropDown Item Fonts','vw-computer-repair-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_computer_repair_pro_header_dropdown_item_font_size',array(
	      'default' => '',
	      'sanitize_callback' => 'sanitize_text_field'
	    )
	);
	$wp_customize->add_control('vw_computer_repair_pro_header_dropdown_item_font_size',array(
	      'label' => __('Menu DropDown Item Font Size in px','vw-computer-repair-pro'),
	      'section' => 'vw_computer_repair_pro_header_section',
	      'setting' => 'vw_computer_repair_pro_header_dropdown_item_font_size',
	      'type'    => 'text'
	    )
	);

	$wp_customize->add_setting( 'vw_computer_repair_pro_dropdownbg_item_hovercolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_dropdownbg_item_hovercolor', array(
		'label' => __('Menu DropDown Item Hover Color', 'vw-computer-repair-pro'),
		'section' => 'vw_computer_repair_pro_header_section',
		'settings' => 'vw_computer_repair_pro_dropdownbg_item_hovercolor',
	)));

	$wp_customize->add_setting( 'vw_computer_repair_pro_header_menu_active_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_header_menu_active_color', array(
		'label' => __('Active Menu Item Color', 'vw-computer-repair-pro'),
		'section' => 'vw_computer_repair_pro_header_section',
		'settings' => 'vw_computer_repair_pro_header_menu_active_color',
	)));
	$wp_customize->add_setting('vw_computer_repair_pro_header_dropdown_letter_spacing',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
	);
	$wp_customize->add_control('vw_computer_repair_pro_header_dropdown_letter_spacing',array(
		'label' => __('Menu DropDown Item Letter Spacing','vw-computer-repair-pro'),
		'section' => 'vw_computer_repair_pro_header_section',
		'setting' => 'vw_computer_repair_pro_header_dropdown_letter_spacing',
		'type'    => 'number'
		)
	);
	//Font weight
	$wp_customize->add_setting('vw_computer_repair_pro_header_dropdown_font_weight',array(
      'default' => '',
      'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
	));

	$wp_customize->add_control( 'vw_computer_repair_pro_header_dropdown_font_weight', array(
	'label'       => esc_html__( 'Menu DropDown Item Font Weight','vw-computer-repair-pro' ),
	'section'     => 'vw_computer_repair_pro_header_section',
	'type'        => 'select',
	'settings'    => 'vw_computer_repair_pro_header_dropdown_font_weight',
	'choices' => array(
      '100' =>  esc_attr('100','vw-computer-repair-pro'),
      '200' =>  esc_attr('200','vw-computer-repair-pro'),
      '300' =>  esc_attr('300','vw-computer-repair-pro'),
      '400' =>  esc_attr('400','vw-computer-repair-pro'),
      '500' =>  esc_attr('500','vw-computer-repair-pro'),
      '600' =>  esc_attr('600','vw-computer-repair-pro'),
      '700' =>  esc_attr('700','vw-computer-repair-pro'),
      '800' =>  esc_attr('800','vw-computer-repair-pro'),
      '900' =>  esc_attr('900','vw-computer-repair-pro'),
      'bold' =>  esc_attr('bold','vw-computer-repair-pro'),
      'bolder' =>  esc_attr('bolder','vw-computer-repair-pro')
	),
	));
	$wp_customize->add_setting('vw_computer_repair_pro_header_dropdown_text_transform',array(
      'default' => '',
      'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
	));

	$wp_customize->add_control( 'vw_computer_repair_pro_header_dropdown_text_transform', array(
	'label'       => esc_html__( 'Menus Text Transform','vw-computer-repair-pro' ),
	'section'     => 'vw_computer_repair_pro_header_section',
	'type'        => 'select',
	'settings'    => 'vw_computer_repair_pro_header_dropdown_text_transform',
	'choices' => array(
      'uppercase' =>  esc_attr('uppercase','vw-computer-repair-pro'),
      'lowercase' =>  esc_attr('lowercase','vw-computer-repair-pro'),
      'capitalize' =>  esc_attr('capitalize','vw-computer-repair-pro'),
      'unset' =>  esc_attr('unset','vw-computer-repair-pro')
	),
	));
	/* --------- menudropdown Opacity  ----------- */

	$wp_customize->add_setting('vw_computer_repair_pro_header_dropdown_bg_opacity_color',array(
      'default'              => '1',
      'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
	));

	$wp_customize->add_control( 'vw_computer_repair_pro_header_dropdown_bg_opacity_color', array(
		'label'       => esc_html__( 'Menu Dropdown Opacity','vw-computer-repair-pro' ),
		'section'     => 'vw_computer_repair_pro_header_section',
		'type'        => 'select',
		'settings'    => 'vw_computer_repair_pro_header_dropdown_bg_opacity_color',
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
	$wp_customize->add_setting('vw_computer_repair_pro_header_dropdown_box_shadow',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_header_dropdown_box_shadow',array(
        'label' => __('Menu Dropdown Shadow in px','vw-computer-repair-pro'),
        'section'   => 'vw_computer_repair_pro_header_section',
        'type'      => 'text'
    ));
	
	//In Responsive
	$wp_customize->add_setting( 'vw_computer_repair_pro_dropdownbg_responsivecolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_dropdownbg_responsivecolor', array(
		'label' => __('Responsive Menu Background Color', 'vw-computer-repair-pro'),
		'section' => 'vw_computer_repair_pro_header_section',
		'settings' => 'vw_computer_repair_pro_dropdownbg_responsivecolor',
	)));
	$wp_customize->add_setting( 'vw_computer_repair_pro_headermenu_responsive_item_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_headermenu_responsive_item_color', array(
		'label' => __('Responsive Menu item Color', 'vw-computer-repair-pro'),
		'section' => 'vw_computer_repair_pro_header_section',
		'settings' => 'vw_computer_repair_pro_headermenu_responsive_item_color',
	)));
	$wp_customize->add_setting( 'vw_computer_repair_pro_header_section_search_icon_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
	 ));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_header_section_search_icon_color', array(
	    'label' => __('Search Icon Color', 'vw-computer-repair-pro'),
	    'section' => 'vw_computer_repair_pro_header_section',
	    'settings' => 'vw_computer_repair_pro_header_section_search_icon_color',
	)));
	$wp_customize->add_setting( 'vw_computer_repair_pro_header_section_search_icon_bgcolor', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
	 ));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_header_section_search_icon_bgcolor', array(
	    'label' => __('Search Icon Background Color', 'vw-computer-repair-pro'),
	    'section' => 'vw_computer_repair_pro_header_section',
	    'settings' => 'vw_computer_repair_pro_header_section_search_icon_bgcolor',
	)));

	// -------------- Contact Details ----------------

	$wp_customize->add_section('vw_computer_repair_pro_contact_details',array(
	    'title' => __('Contact Details','vw-computer-repair-pro'),
	    'description' => __('Add Content Here','vw-computer-repair-pro'),
	    'panel' => 'vw_computer_repair_pro_panel_id',
	));
	$wp_customize->add_setting('vw_computer_repair_pro_contact_details_enable',
	      array(
	    'default' => 'Enable',
	    'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
	));
	$wp_customize->add_control('vw_computer_repair_pro_contact_details_enable',
	    array(
	    'type' => 'radio',
	    'label' => __('Do you want this section', 'vw-computer-repair-pro'),
	    'section' => 'vw_computer_repair_pro_contact_details',
	    'choices' => array(
	    'Enable' => __('Enable', 'vw-computer-repair-pro'),
	    'Disable' => __('Disable', 'vw-computer-repair-pro')
	),));
if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial( 'vw_computer_repair_pro_contact_details_enable', array(
	    'selector' => '#contact-details .container',
	    'render_callback' => 'vw_computer_repair_pro_customize_partial_vw_computer_repair_pro_contact_details_enable',
	));
}
	$wp_customize->add_setting( 'vw_computer_repair_pro_contact_details_settings',
	    array(
	    'default' => '',
	    'transport' => 'postMessage',
	    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_contact_details_settings',
	    array(
	    'label' => __('Section Background Settings','vw-computer-repair-pro'),
	    'section' => 'vw_computer_repair_pro_contact_details'
	)));
	$wp_customize->add_setting( 'vw_computer_repair_pro_contact_details_bgcolor', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_contact_details_bgcolor', array(
	    'label' => __('Background Color', 'vw-computer-repair-pro'),
	    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','vw-computer-repair-pro'),
	    'section' => 'vw_computer_repair_pro_contact_details',
	    'settings' => 'vw_computer_repair_pro_contact_details_bgcolor',
	)));

	$wp_customize->add_setting('vw_computer_repair_pro_contact_details_bgimage',array(
	    'default' => '',
	    'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control(
	    new WP_Customize_Image_Control( $wp_customize,'vw_computer_repair_pro_contact_details_bgimage',array(
	    'label' => __('Section Background Image','vw-computer-repair-pro'),
	    'description' => __('Dimension 1600px * 70px','vw-computer-repair-pro'),
	    'section' => 'vw_computer_repair_pro_contact_details',
	    'settings' => 'vw_computer_repair_pro_contact_details_bgimage'
	)));

	$wp_customize->add_setting( 'vw_computer_repair_pro_contact_details_content_settings',
	    array(
	    'default' => '',
	    'transport' => 'postMessage',
	    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_contact_details_content_settings',
	    array(
	    'label' => __('Section Content Settings','vw-computer-repair-pro'),
	    'section' => 'vw_computer_repair_pro_contact_details'
	)));
	$wp_customize->add_setting(
    'vw_computer_repair_pro_contact_details_address_icon',
      array(
        'default'     => '',
        'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
      )
    );
    $wp_customize->add_control(
      new Vw_Computer_Pro_Fontawesome_Icon_Chooser(
        $wp_customize,
        'vw_computer_repair_pro_contact_details_address_icon',
        array(
          'settings'    => 'vw_computer_repair_pro_contact_details_address_icon',
          'section'   => 'vw_computer_repair_pro_contact_details',
          'type'      => 'icon',
          'label'     => esc_html__( 'Address Icon', 'vw-computer-repair-pro' ),
        )
      )
    );
	$wp_customize->add_setting('vw_computer_repair_pro_contact_details_address_text',array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_computer_repair_pro_contact_details_address_text',array(
	    'label' => __('Address Text','vw-computer-repair-pro'),
	    'section' => 'vw_computer_repair_pro_contact_details',
	    'setting' => 'vw_computer_repair_pro_contact_details_address_text',
	    'type'    => 'text'
	)); 
	$wp_customize->add_setting(
    'vw_computer_repair_pro_contact_details_phone_icon',
      array(
        'default'     => '',
        'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
      )
    );
    $wp_customize->add_control(
      new Vw_Computer_Pro_Fontawesome_Icon_Chooser(
        $wp_customize,
        'vw_computer_repair_pro_contact_details_phone_icon',
        array(
          'settings'    => 'vw_computer_repair_pro_contact_details_phone_icon',
          'section'   => 'vw_computer_repair_pro_contact_details',
          'type'      => 'icon',
          'label'     => esc_html__( 'Phone Icon', 'vw-computer-repair-pro' ),
        )
      )
    );
	$wp_customize->add_setting('vw_computer_repair_pro_contact_details_phone_text',array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_computer_repair_pro_contact_details_phone_text',array(
	    'label' => __('Phone Text','vw-computer-repair-pro'),
	    'section' => 'vw_computer_repair_pro_contact_details',
	    'setting' => 'vw_computer_repair_pro_contact_details_phone_text',
	    'type'    => 'text'
	)); 
	$wp_customize->add_setting(
    'vw_computer_repair_pro_contact_details_email_icon',
      array(
        'default'     => '',
        'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
      )
    );
    $wp_customize->add_control(
      new Vw_Computer_Pro_Fontawesome_Icon_Chooser(
        $wp_customize,
        'vw_computer_repair_pro_contact_details_email_icon',
        array(
          'settings'    => 'vw_computer_repair_pro_contact_details_email_icon',
          'section'   => 'vw_computer_repair_pro_contact_details',
          'type'      => 'icon',
          'label'     => esc_html__( 'Email Icon', 'vw-computer-repair-pro' ),
        )
      )
    );
	$wp_customize->add_setting('vw_computer_repair_pro_contact_details_email_text',array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_computer_repair_pro_contact_details_email_text',array(
	    'label' => __('Email Text','vw-computer-repair-pro'),
	    'section' => 'vw_computer_repair_pro_contact_details',
	    'setting' => 'vw_computer_repair_pro_contact_details_email_text',
	    'type'    => 'text'
	)); 

	$wp_customize->add_setting( 'vw_computer_repair_pro_contact_details_color_settings',
    array(
	    'default' => '',
	    'transport' => 'postMessage',
	    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
	 ));
  	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_contact_details_color_settings',
    array(
    	'label' => __('Section Content Color And Font Settings','vw-computer-repair-pro'),
    	'section' => 'vw_computer_repair_pro_contact_details'
  	)));

  	$wp_customize->add_setting( 'vw_computer_repair_pro_contact_details_title_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_contact_details_title_color', array(
      'label' => __('Contact Details Text Color', 'vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_contact_details',
      'settings' => 'vw_computer_repair_pro_contact_details_title_color',
  	)));

  	$wp_customize->add_setting('vw_computer_repair_pro_contact_details_title_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  	));
 	 $wp_customize->add_control(
      'vw_computer_repair_pro_contact_details_title_font_family', array(
      'section'  => 'vw_computer_repair_pro_contact_details',
      'label'    => __('Contact Details Text Font Family','vw-computer-repair-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  	));
 	$wp_customize->add_setting('vw_computer_repair_pro_contact_details_title_font_size',array(
	      'default' => '',
	      'sanitize_callback' => 'sanitize_text_field'
	    )
	);
	$wp_customize->add_control('vw_computer_repair_pro_contact_details_title_font_size',array(
	      'label' => __('Contact Details Text Font Size in px','vw-computer-repair-pro'),
	      'section' => 'vw_computer_repair_pro_contact_details',
	      'setting' => 'vw_computer_repair_pro_contact_details_title_font_size',
	      'type'    => 'text'
	    )
	);
 	$wp_customize->add_setting( 'vw_computer_repair_pro_contact_details_icon_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_contact_details_icon_color', array(
      'label' => __('Contact Details Icon Color', 'vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_contact_details',
      'settings' => 'vw_computer_repair_pro_contact_details_icon_color',
  	)));
?>