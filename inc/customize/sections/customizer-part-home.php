<?php         
  // ---------------- Our Services  --------------

  $wp_customize->add_section('vw_computer_repair_pro_our_services',array(
    'title' => __('Our Services','vw-computer-repair-pro'),
    'description' => __('Add Content Here','vw-computer-repair-pro'),
    'panel' => 'vw_computer_repair_pro_panel_id',
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_our_services_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_our_services_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_services',
    'choices' => array(
    'Enable' => __('Enable', 'vw-computer-repair-pro'),
    'Disable' => __('Disable', 'vw-computer-repair-pro')
  ),));
if ( isset( $wp_customize->selective_refresh ) ) {
  $wp_customize->selective_refresh->add_partial( 'vw_computer_repair_pro_our_services_enable', array(
    'selector' => '#our-services .container',
    'render_callback' => 'vw_computer_repair_pro_customize_partial_vw_computer_repair_pro_our_services_enable',
  ));
}
  $wp_customize->add_setting( 'vw_computer_repair_pro_our_services_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_our_services_settings',
    array(
    'label' => __('Section Background Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_services'
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_our_services_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_services_bgcolor', array(
    'label' => __('Section Background Color', 'vw-computer-repair-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_services',
    'settings' => 'vw_computer_repair_pro_our_services_bgcolor',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_services_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'vw_computer_repair_pro_our_services_bgimage',array(
    'label' => __('Section Background Image','vw-computer-repair-pro'),
    'description' => __('Dimension 1600px * 900px','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_services',
    'settings' => 'vw_computer_repair_pro_our_services_bgimage'
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_services_image_bg', array(
      'default'         => '',
      'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_services_image_bg', array(
      'type'      => 'radio',
      'label'     => __('Choose image option', 'vw-computer-repair-pro'),
      'section'   => 'vw_computer_repair_pro_our_services',
      'choices'   => array(
        'vw-fixed'      => __( 'Fixed', 'vw-computer-repair-pro' ),
        'vw-scroll'      => __( 'Scroll', 'vw-computer-repair-pro' ),                    
  ),));
  $wp_customize->add_setting( 'vw_computer_repair_pro_our_services_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_our_services_content_settings',
    array(
    'label' => __('Section Content Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_services'
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_services_small_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_our_services_small_heading',array(
    'label' => __('Section Small Heading','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_services',
    'setting' => 'vw_computer_repair_pro_our_services_small_heading',
    'type'    => 'text'
  )); 

  $wp_customize->add_setting('vw_computer_repair_pro_our_services_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_our_services_main_heading',array(
    'label' => __('Section Main Heading','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_services',
    'setting' => 'vw_computer_repair_pro_our_services_main_heading',
    'type'    => 'text'
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_our_services_text',array(
      'default'   => '',
      'capability'         => 'edit_theme_options',
      'sanitize_callback'  => 'wp_kses_post'
  ));
  $wp_customize->add_control(new vw_computer_repair_pro_Editor_Control($wp_customize,'vw_computer_repair_pro_our_services_text',array(
      'label' => __('Section Text','vw-computer-repair-pro'),
      'description' => __('Add Section Text','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_our_services',
      'setting'   => 'vw_computer_repair_pro_our_services_text',       
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_services_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_our_services_number',array(
    'label' => __('No Of Services To Show','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_services',
    'setting' => 'vw_computer_repair_pro_our_services_number',
    'type'    => 'number'
  ));
  $services_count = get_theme_mod('vw_computer_repair_pro_our_services_number');
    for($i=1; $i<=$services_count; $i++) {
    $wp_customize->add_setting('vw_computer_repair_pro_services_featured_image_alt_text'.$i,array(
    'default' => '',
    'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_services_featured_image_alt_text'.$i,array(
    'label' => __('Services Features Image ALT Text ','vw-computer-repair-pro').$i,
    'description' => __('This is image text for image alt attribute.This text is only for coding purpose.','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_services',
    'setting' => 'vw_computer_repair_pro_services_featured_image_alt_text'.$i,
    'type' => 'text'
    ));
  }
  $wp_customize->add_setting('vw_computer_repair_pro_our_services_link_title',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_our_services_link_title',array(
    'label' => __('Link Title','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_services',
    'setting' => 'vw_computer_repair_pro_our_services_link_title',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_services_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_our_services_color_settings',
    array(
    'label' => __('Section Content Color And Font Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_services'
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_services_slider_loop',
     array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
  ));
  $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_our_services_slider_loop',
   array(
      'label' => esc_html__( 'Slider Loop', 'vw-computer-repair-pro' ),
      'section' => 'vw_computer_repair_pro_our_services'
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_services_small_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_services_small_heading_color', array(
      'label' => __('Section Small Heading Color', 'vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_our_services',
      'settings' => 'vw_computer_repair_pro_our_services_small_heading_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_services_small_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_computer_repair_pro_our_services_small_heading_font_family', array(
      'section'  => 'vw_computer_repair_pro_our_services',
      'label'    => __('Section Small Heading Font Family','vw-computer-repair-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_our_services_small_heading_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
  );
  $wp_customize->add_control('vw_computer_repair_pro_our_services_small_heading_font_size',array(
        'label' => __('Section Small Heading Font Size in px','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_our_services',
        'setting' => 'vw_computer_repair_pro_our_services_small_heading_font_size',
        'type'    => 'text'
      )
  );
  $wp_customize->add_setting( 'vw_computer_repair_pro_our_services_small_heading_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_services_small_heading_bgcolor', array(
      'label' => __('Section Small Heading Background Color', 'vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_our_services',
      'settings' => 'vw_computer_repair_pro_our_services_small_heading_bgcolor',
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_services_main_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_services_main_heading_color', array(
      'label' => __('Section Main Heading Color', 'vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_our_services',
      'settings' => 'vw_computer_repair_pro_our_services_main_heading_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_services_main_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_computer_repair_pro_our_services_main_heading_font_family', array(
      'section'  => 'vw_computer_repair_pro_our_services',
      'label'    => __('Section Main Heading Font Family','vw-computer-repair-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_our_services_main_heading_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
  );
  $wp_customize->add_control('vw_computer_repair_pro_our_services_main_heading_font_size',array(
        'label' => __('Section Main Heading Font Size in px','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_our_services',
        'setting' => 'vw_computer_repair_pro_our_services_main_heading_font_size',
        'type'    => 'text'
      )
  );
  $wp_customize->add_setting( 'vw_computer_repair_pro_our_services_text_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_services_text_color', array(
      'label' => __('Section Text Color', 'vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_our_services',
      'settings' => 'vw_computer_repair_pro_our_services_text_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_services_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_computer_repair_pro_our_services_text_font_family', array(
      'section'  => 'vw_computer_repair_pro_our_services',
      'label'    => __('Section Text Font Family','vw-computer-repair-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_our_services_text_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
  );
  $wp_customize->add_control('vw_computer_repair_pro_our_services_text_font_size',array(
        'label' => __('Section Text Font Size in px','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_our_services',
        'setting' => 'vw_computer_repair_pro_our_services_text_font_size',
        'type'    => 'text'
      )
  );
  $wp_customize->add_setting( 'vw_computer_repair_pro_our_services_title_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_services_title_color', array(
      'label' => __('Services Title Color', 'vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_our_services',
      'settings' => 'vw_computer_repair_pro_our_services_title_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_services_title_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_computer_repair_pro_our_services_title_font_family', array(
      'section'  => 'vw_computer_repair_pro_our_services',
      'label'    => __('Section Title Font Family','vw-computer-repair-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_our_services_title_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
  );
  $wp_customize->add_control('vw_computer_repair_pro_our_services_title_font_size',array(
        'label' => __('Section Title Font Size in px','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_our_services',
        'setting' => 'vw_computer_repair_pro_our_services_title_font_size',
        'type'    => 'text'
      )
  );
  $wp_customize->add_setting( 'vw_computer_repair_pro_our_services_link_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_services_link_color', array(
      'label' => __('Services Button Text Color', 'vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_our_services',
      'settings' => 'vw_computer_repair_pro_our_services_link_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_services_link_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_computer_repair_pro_our_services_link_font_family', array(
      'section'  => 'vw_computer_repair_pro_our_services',
      'label'    => __('Section Button Text Font Family','vw-computer-repair-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_our_services_link_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
  );
  $wp_customize->add_control('vw_computer_repair_pro_our_services_link_font_size',array(
        'label' => __('Section Button Text Font Size in px','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_our_services',
        'setting' => 'vw_computer_repair_pro_our_services_link_font_size',
        'type'    => 'text'
      )
  );
  $wp_customize->add_setting( 'vw_computer_repair_pro_our_services_link_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_services_link_bgcolor', array(
      'label' => __('Services Button Background Color', 'vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_our_services',
      'settings' => 'vw_computer_repair_pro_our_services_link_bgcolor',
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_services_box_border_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_services_box_border_color', array(
      'label' => __('Services Box Border Color', 'vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_our_services',
      'settings' => 'vw_computer_repair_pro_our_services_box_border_color',
  )));


  $wp_customize->add_setting( 'vw_computer_repair_pro_our_services_box_hover_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_services_box_hover_color', array(
      'label' => __('Services Box Hover Color', 'vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_our_services',
      'settings' => 'vw_computer_repair_pro_our_services_box_hover_color',
  )));

  // ----------- About Us And Our Features -------------

  $wp_customize->add_section('vw_computer_repair_pro_about_and_features',array(
    'title' => __('About Us And Our Features','vw-computer-repair-pro'),
    'description' => __('Add Content Here','vw-computer-repair-pro'),
    'panel' => 'vw_computer_repair_pro_panel_id',
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_about_and_features_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_about_and_features_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_about_and_features',
    'choices' => array(
    'Enable' => __('Enable', 'vw-computer-repair-pro'),
    'Disable' => __('Disable', 'vw-computer-repair-pro')
  ),));

  // ------------- About Us -------------

  $wp_customize->add_section('vw_computer_repair_pro_about_us',array(
    'title' => __('About Us','vw-computer-repair-pro'),
    'description' => __('Add Content Here','vw-computer-repair-pro'),
    'panel' => 'vw_computer_repair_pro_panel_id',
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_about_us_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_about_us_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_about_us',
    'choices' => array(
    'Enable' => __('Enable', 'vw-computer-repair-pro'),
    'Disable' => __('Disable', 'vw-computer-repair-pro')
  ),));
if ( isset( $wp_customize->selective_refresh ) ) {
  $wp_customize->selective_refresh->add_partial( 'vw_computer_repair_pro_about_us_enable', array(
    'selector' => '#about-us .container',
    'render_callback' => 'vw_computer_repair_pro_customize_partial_vw_computer_repair_pro_about_us_enable',
  ));
}
  $wp_customize->add_setting( 'vw_computer_repair_pro_about_us_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_about_us_settings',
    array(
    'label' => __('Section Background Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_about_us'
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_about_us_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_about_us_bgcolor', array(
    'label' => __('Section Background Color', 'vw-computer-repair-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_about_us',
    'settings' => 'vw_computer_repair_pro_about_us_bgcolor',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_about_us_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'vw_computer_repair_pro_about_us_bgimage',array(
    'label' => __('Section Background Image','vw-computer-repair-pro'),
    'description' => __('Dimension 1600px * 900px','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_about_us',
    'settings' => 'vw_computer_repair_pro_about_us_bgimage'
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_about_us_image_bg', array(
      'default'         => 'vw-scroll',
      'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_about_us_image_bg', array(
      'type'      => 'radio',
      'label'     => __('Choose image option', 'vw-computer-repair-pro'),
      'section'   => 'vw_computer_repair_pro_about_us',
      'choices'   => array(
        'vw-fixed'      => __( 'Fixed', 'vw-computer-repair-pro' ),
        'vw-scroll'      => __( 'Scroll', 'vw-computer-repair-pro' ),                    
  ),));
  $wp_customize->add_setting( 'vw_computer_repair_pro_about_us_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_about_us_content_settings',
    array(
    'label' => __('Section Content Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_about_us'
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_about_us_small_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_about_us_small_heading',array(
    'label' => __('Section Small Heading','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_about_us',
    'setting' => 'vw_computer_repair_pro_about_us_small_heading',
    'type'    => 'text'
  )); 

  $wp_customize->add_setting('vw_computer_repair_pro_about_us_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_about_us_main_heading',array(
    'label' => __('Section Main Heading','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_about_us',
    'setting' => 'vw_computer_repair_pro_about_us_main_heading',
    'type'    => 'text'
  )); 
  $wp_customize->add_setting('vw_computer_repair_pro_about_us_text',array(
      'default'   => '',
      'capability'         => 'edit_theme_options',
      'sanitize_callback'  => 'wp_kses_post'
  ));
  $wp_customize->add_control(new vw_computer_repair_pro_Editor_Control($wp_customize,'vw_computer_repair_pro_about_us_text',array(
      'label' => __('Section Text','vw-computer-repair-pro'),
      'description' => __('Add Section Text','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_about_us',
      'setting'   => 'vw_computer_repair_pro_about_us_text',       
  )));
  $wp_customize->add_setting('vw_computer_repair_pro_about_us_title',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_about_us_title',array(
    'label' => __('About Title','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_about_us',
    'setting' => 'vw_computer_repair_pro_about_us_title',
    'type'    => 'text'
  )); 

  $wp_customize->add_setting('vw_computer_repair_pro_about_us_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_about_us_number',array(
    'label' => __('No Of Services To Show','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_about_us',
    'setting' => 'vw_computer_repair_pro_about_us_number',
    'type'    => 'number'
  )); 

  $about_count=get_theme_mod('vw_computer_repair_pro_about_us_number');
  for($i=1;$i<=$about_count;$i++)
  {
    $wp_customize->add_setting('vw_computer_repair_pro_about_service'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_computer_repair_pro_about_service'.$i,array(
      'label' => __('Service Title','vw-computer-repair-pro').$i,
      'section' => 'vw_computer_repair_pro_about_us',
      'setting' => 'vw_computer_repair_pro_about_service'.$i,
      'type'    => 'text'
    )); 
  }

  $wp_customize->add_setting('vw_computer_repair_pro_about_us_call',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_about_us_call',array(
    'label' => __('Enquiry Title','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_about_us',
    'setting' => 'vw_computer_repair_pro_about_us_call',
    'type'    => 'text'
  )); 

  $wp_customize->add_setting('vw_computer_repair_pro_about_us_button_title',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_about_us_button_title',array(
    'label' => __('Button Title','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_about_us',
    'setting' => 'vw_computer_repair_pro_about_us_button_title',
    'type'    => 'text'
  )); 

  $wp_customize->add_setting('vw_computer_repair_pro_about_us_button_url',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_about_us_button_url',array(
    'label' => __('Button Url','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_about_us',
    'setting' => 'vw_computer_repair_pro_about_us_button_url',
    'type'    => 'text'
  )); 

  $wp_customize->add_setting('vw_computer_repair_pro_about_us_image',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'vw_computer_repair_pro_about_us_image',array(
    'label' => __('Section Image','vw-computer-repair-pro'),
    'description' => __('Dimension 400px * 600px','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_about_us',
    'settings' => 'vw_computer_repair_pro_about_us_image'
  )));
  $wp_customize->add_setting('vw_computer_repair_pro_about_us_image_alt_text',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_textarea_field',
  ));
  $wp_customize->add_control('vw_computer_repair_pro_about_us_image_alt_text',array(
      'label' => __('About Image ALT Text ','vw-computer-repair-pro'),
      'description' => __('This is image text for image alt attribute.This text is only for coding purpose.','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_about_us',
      'setting' => 'vw_computer_repair_pro_about_us_image_alt_text',
      'type' => 'text'
  ));
  $wp_customize->add_setting( 'vw_computer_repair_pro_about_us_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_about_us_color_settings',
    array(
    'label' => __('Section Content Color And Font Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_about_us'
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_about_us_small_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_about_us_small_heading_color', array(
      'label' => __('Section Small Heading Color', 'vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_about_us',
      'settings' => 'vw_computer_repair_pro_about_us_small_heading_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_about_us_small_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_computer_repair_pro_about_us_small_heading_font_family', array(
      'section'  => 'vw_computer_repair_pro_about_us',
      'label'    => __('Section Small Heading Font Family','vw-computer-repair-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_about_us_small_heading_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
  );
  $wp_customize->add_control('vw_computer_repair_pro_about_us_small_heading_font_size',array(
        'label' => __('Section Small Heading Font Size in px','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_our_services',
        'setting' => 'vw_computer_repair_pro_about_us_small_heading_font_size',
        'type'    => 'text'
      )
  );
  $wp_customize->add_setting( 'vw_computer_repair_pro_about_us_small_heading_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_about_us_small_heading_bgcolor', array(
      'label' => __('Section Small Heading Background Color', 'vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_about_us',
      'settings' => 'vw_computer_repair_pro_about_us_small_heading_bgcolor',
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_about_us_main_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_about_us_main_heading_color', array(
      'label' => __('Section Main Heading Color', 'vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_about_us',
      'settings' => 'vw_computer_repair_pro_about_us_main_heading_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_about_us_main_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_computer_repair_pro_about_us_main_heading_font_family', array(
      'section'  => 'vw_computer_repair_pro_about_us',
      'label'    => __('Section Main Heading Font Family','vw-computer-repair-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_about_us_main_heading_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
  );
  $wp_customize->add_control('vw_computer_repair_pro_about_us_main_heading_font_size',array(
        'label' => __('Section Main Heading Font Size in px','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_our_services',
        'setting' => 'vw_computer_repair_pro_about_us_main_heading_font_size',
        'type'    => 'text'
      )
  );
  $wp_customize->add_setting( 'vw_computer_repair_pro_about_us_text_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_about_us_text_color', array(
      'label' => __('Section Text Color', 'vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_about_us',
      'settings' => 'vw_computer_repair_pro_about_us_text_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_about_us_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_computer_repair_pro_about_us_text_font_family', array(
      'section'  => 'vw_computer_repair_pro_about_us',
      'label'    => __('Section Text Font Family','vw-computer-repair-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_about_us_text_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
  );
  $wp_customize->add_control('vw_computer_repair_pro_about_us_text_font_size',array(
        'label' => __('Section Text Font Size in px','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_about_us',
        'setting' => 'vw_computer_repair_pro_about_us_text_font_size',
        'type'    => 'text'
      )
  );
  $wp_customize->add_setting( 'vw_computer_repair_pro_about_us_title_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_about_us_title_color', array(
      'label' => __('About Title Color', 'vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_about_us',
      'settings' => 'vw_computer_repair_pro_about_us_title_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_about_us_title_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_computer_repair_pro_about_us_title_font_family', array(
      'section'  => 'vw_computer_repair_pro_about_us',
      'label'    => __('About Title Font Family','vw-computer-repair-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_about_us_title_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
  );
  $wp_customize->add_control('vw_computer_repair_pro_about_us_title_font_size',array(
        'label' => __('About Title Font Size in px','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_about_us',
        'setting' => 'vw_computer_repair_pro_about_us_title_font_size',
        'type'    => 'text'
      )
  );
  $wp_customize->add_setting( 'vw_computer_repair_pro_about_us_services_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_about_us_services_color', array(
      'label' => __('Services Title Color', 'vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_about_us',
      'settings' => 'vw_computer_repair_pro_about_us_services_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_about_us_services_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_computer_repair_pro_about_us_services_font_family', array(
      'section'  => 'vw_computer_repair_pro_about_us',
      'label'    => __('Services Title Font Family','vw-computer-repair-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_about_us_services_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
  );
  $wp_customize->add_control('vw_computer_repair_pro_about_us_services_font_size',array(
        'label' => __('Services Title Font Size in px','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_about_us',
        'setting' => 'vw_computer_repair_pro_about_us_services_font_size',
        'type'    => 'text'
      )
  );
  $wp_customize->add_setting( 'vw_computer_repair_pro_about_us_services_icon_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_about_us_services_icon_color', array(
      'label' => __('Services Title Icon Color', 'vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_about_us',
      'settings' => 'vw_computer_repair_pro_about_us_services_icon_color',
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_about_us_enquiry_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_about_us_enquiry_color', array(
      'label' => __('Enquiry Title Color', 'vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_about_us',
      'settings' => 'vw_computer_repair_pro_about_us_enquiry_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_about_us_enquiry_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_computer_repair_pro_about_us_enquiry_font_family', array(
      'section'  => 'vw_computer_repair_pro_about_us',
      'label'    => __('Enquiry Title Font Family','vw-computer-repair-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_about_us_enquiry_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
  );
  $wp_customize->add_control('vw_computer_repair_pro_about_us_enquiry_font_size',array(
        'label' => __('Enquiry Title Font Size in px','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_about_us',
        'setting' => 'vw_computer_repair_pro_about_us_enquiry_font_size',
        'type'    => 'text'
      )
  );
  $wp_customize->add_setting( 'vw_computer_repair_pro_about_us_button_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_about_us_button_color', array(
      'label' => __('Button Title Color', 'vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_about_us',
      'settings' => 'vw_computer_repair_pro_about_us_button_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_about_us_button_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_computer_repair_pro_about_us_button_font_family', array(
      'section'  => 'vw_computer_repair_pro_about_us',
      'label'    => __('Button Title Font Family','vw-computer-repair-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_about_us_button_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
  );
  $wp_customize->add_control('vw_computer_repair_pro_about_us_button_font_size',array(
        'label' => __('Button Title Font Size in px','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_about_us',
        'setting' => 'vw_computer_repair_pro_about_us_button_font_size',
        'type'    => 'text'
      )
  );
  $wp_customize->add_setting( 'vw_computer_repair_pro_about_us_button_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_about_us_button_bgcolor', array(
      'label' => __('Button Background Color', 'vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_about_us',
      'settings' => 'vw_computer_repair_pro_about_us_button_bgcolor',
  )));

  // --------------- Our Features -----------

  $wp_customize->add_section('vw_computer_repair_pro_our_features',array(
    'title' => __('Our Features','vw-computer-repair-pro'),
    'description' => __('Add Content Here','vw-computer-repair-pro'),
    'panel' => 'vw_computer_repair_pro_panel_id',
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_our_features_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_our_features_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_features',
    'choices' => array(
    'Enable' => __('Enable', 'vw-computer-repair-pro'),
    'Disable' => __('Disable', 'vw-computer-repair-pro')
  ),));
if ( isset( $wp_customize->selective_refresh ) ) {
  $wp_customize->selective_refresh->add_partial( 'vw_computer_repair_pro_our_features_enable', array(
    'selector' => '#our-features .container',
    'render_callback' => 'vw_computer_repair_pro_customize_partial_vw_computer_repair_pro_our_features_enable',
  ));
}
  $wp_customize->add_setting( 'vw_computer_repair_pro_our_features_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_our_features_content_settings',
    array(
    'label' => __('Section Content Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_features'
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_features_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_our_features_number',array(
    'label' => __('No Of Features To Show','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_features',
    'setting' => 'vw_computer_repair_pro_our_features_number',
    'type'    => 'number'
  )); 

  $feature_no=get_theme_mod('vw_computer_repair_pro_our_features_number');
  for($i=1;$i<=$feature_no;$i++)
  {

    $wp_customize->add_setting( 'vw_computer_repair_pro_our_features_box_settings'.$i,
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_our_features_box_settings'.$i,
      array(
      'label' => __('Feature ','vw-computer-repair-pro').$i,
      'section' => 'vw_computer_repair_pro_our_features'
    )));
    $wp_customize->add_setting('vw_computer_repair_pro_our_features_title'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_computer_repair_pro_our_features_title'.$i,array(
      'label' => __('Feature Title ','vw-computer-repair-pro').$i,
      'section' => 'vw_computer_repair_pro_our_features',
      'setting' => 'vw_computer_repair_pro_our_features_title'.$i,
      'type'    => 'text'
    )); 

    $wp_customize->add_setting('vw_computer_repair_pro_our_features_url'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_computer_repair_pro_our_features_url'.$i,array(
      'label' => __('Feature Url ','vw-computer-repair-pro').$i,
      'section' => 'vw_computer_repair_pro_our_features',
      'setting' => 'vw_computer_repair_pro_our_features_url'.$i,
      'type'    => 'text'
    )); 

    $wp_customize->add_setting('vw_computer_repair_pro_our_features_text'.$i,array(
        'default'   => '',
        'capability'         => 'edit_theme_options',
        'sanitize_callback'  => 'wp_kses_post'
    ));
    $wp_customize->add_control(new vw_computer_repair_pro_Editor_Control($wp_customize,'vw_computer_repair_pro_our_features_text'.$i,array(
        'label' => __('Feature Text','vw-computer-repair-pro').$i,
        'description' => __('Add Feature Text','vw-computer-repair-pro').$i,
        'section' => 'vw_computer_repair_pro_our_features',
        'setting'   => 'vw_computer_repair_pro_our_features_text'.$i,       
    )));

    $wp_customize->add_setting('vw_computer_repair_pro_our_features_icon'.$i,array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
      new WP_Customize_Image_Control( $wp_customize,'vw_computer_repair_pro_our_features_icon'.$i,array(
      'label' => __('Feature Icon ','vw-computer-repair-pro').$i,
      'description' => __('Dimension 50px * 50px','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_our_features',
      'settings' => 'vw_computer_repair_pro_our_features_icon'.$i
    )));
    $wp_customize->add_setting('vw_computer_repair_pro_our_features_hover_icon'.$i,array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
      new WP_Customize_Image_Control( $wp_customize,'vw_computer_repair_pro_our_features_hover_icon'.$i,array(
      'label' => __('Feature Hover Icon ','vw-computer-repair-pro').$i,
      'description' => __('Dimension 50px * 50px','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_our_features',
      'settings' => 'vw_computer_repair_pro_our_features_hover_icon'.$i
    )));
    $wp_customize->add_setting('vw_computer_repair_pro_features_icon_image_alt_text'.$i,array(
        'default' => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_features_icon_image_alt_text'.$i,array(
      'label' => __('Feature Icon Image ALT Text ','vw-computer-repair-pro').$i,
      'description' => __('This is image text for image alt attribute.This text is only for coding purpose.','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_our_features',
      'setting' => 'vw_computer_repair_pro_features_icon_image_alt_text'.$i,
      'type' => 'text'
    ));
  }
  
  $wp_customize->add_setting( 'vw_computer_repair_pro_our_features_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_our_features_color_settings',
    array(
    'label' => __('Section Content Color And Font Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_features'
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_features_slider_loop',
     array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
  ));
  $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_our_features_slider_loop',
   array(
      'label' => esc_html__( 'Slider Loop', 'vw-computer-repair-pro' ),
      'section' => 'vw_computer_repair_pro_our_features'
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_features_title_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_features_title_color', array(
      'label' => __('Feature Title Color', 'vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_our_features',
      'settings' => 'vw_computer_repair_pro_our_features_title_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_features_title_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_computer_repair_pro_our_features_title_font_family', array(
      'section'  => 'vw_computer_repair_pro_our_features',
      'label'    => __('Feature Title Font Family','vw-computer-repair-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_our_features_title_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
  );
  $wp_customize->add_control('vw_computer_repair_pro_our_features_title_font_size',array(
        'label' => __('Feature Title Font Size in px','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_our_features',
        'setting' => 'vw_computer_repair_pro_our_features_title_font_size',
        'type'    => 'text'
      )
  );
  $wp_customize->add_setting( 'vw_computer_repair_pro_our_features_text_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_features_text_color', array(
      'label' => __('Feature Text Color', 'vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_our_features',
      'settings' => 'vw_computer_repair_pro_our_features_text_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_features_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_our_features_text_font_family', array(
    'section'  => 'vw_computer_repair_pro_our_features',
    'label'    => __('Feature Text Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_our_features_text_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
  );
  $wp_customize->add_control('vw_computer_repair_pro_our_features_text_font_size',array(
        'label' => __('Feature Text Font Size in px','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_our_features',
        'setting' => 'vw_computer_repair_pro_our_features_text_font_size',
        'type'    => 'text'
      )
  );
  $wp_customize->add_setting( 'vw_computer_repair_pro_our_features_box_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_features_box_bgcolor', array(
      'label' => __('Feature Box Background Color', 'vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_our_features',
      'settings' => 'vw_computer_repair_pro_our_features_box_bgcolor',
  )));

  // -------------- Our Projects -----------

  $wp_customize->add_section('vw_computer_repair_pro_our_projects',array(
    'title' => __('Our Projects','vw-computer-repair-pro'),
    'description' => __('Add Content Here','vw-computer-repair-pro'),
    'panel' => 'vw_computer_repair_pro_panel_id',
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_our_projects_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_our_projects_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_projects',
    'choices' => array(
    'Enable' => __('Enable', 'vw-computer-repair-pro'),
    'Disable' => __('Disable', 'vw-computer-repair-pro')
  ),));
if ( isset( $wp_customize->selective_refresh ) ) {
  $wp_customize->selective_refresh->add_partial( 'vw_computer_repair_pro_our_projects_enable', array(
    'selector' => '#our-projects .vw-computer-repair-pro-our-projects-head h3',
    'render_callback' => 'vw_computer_repair_pro_customize_partial_vw_computer_repair_pro_our_projects_enable',
  ));
}
  $wp_customize->add_setting( 'vw_computer_repair_pro_our_projects_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_our_projects_settings',
    array(
    'label' => __('Section Background Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_projects'
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_our_projects_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_projects_bgcolor', array(
    'label' => __('Section Background Color', 'vw-computer-repair-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_projects',
    'settings' => 'vw_computer_repair_pro_our_projects_bgcolor',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_projects_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'vw_computer_repair_pro_our_projects_bgimage',array(
    'label' => __('Section Background Image','vw-computer-repair-pro'),
    'description' => __('Dimension 1600px * 900px','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_projects',
    'settings' => 'vw_computer_repair_pro_our_projects_bgimage'
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_project_image_bg', array(
      'default'         => '',
      'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_project_image_bg', array(
      'type'      => 'radio',
      'label'     => __('Choose image option', 'vw-computer-repair-pro'),
      'section'   => 'vw_computer_repair_pro_our_projects',
      'choices'   => array(
        'vw-fixed'      => __( 'Fixed', 'vw-computer-repair-pro' ),
        'vw-scroll'      => __( 'Scroll', 'vw-computer-repair-pro' ),                    
  ),));
  $wp_customize->add_setting( 'vw_computer_repair_pro_our_projects_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_our_projects_content_settings',
    array(
    'label' => __('Section Content Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_projects'
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_projects_small_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_our_projects_small_heading',array(
    'label' => __('Section Small Heading','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_projects',
    'setting' => 'vw_computer_repair_pro_our_projects_small_heading',
    'type'    => 'text'
  )); 

  $wp_customize->add_setting('vw_computer_repair_pro_our_projects_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_our_projects_main_heading',array(
    'label' => __('Section Main Heading','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_projects',
    'setting' => 'vw_computer_repair_pro_our_projects_main_heading',
    'type'    => 'text'
  )); 
  $wp_customize->add_setting('vw_computer_repair_pro_our_projects_text',array(
      'default'   => '',
      'capability'         => 'edit_theme_options',
      'sanitize_callback'  => 'wp_kses_post'
  ));
  $wp_customize->add_control(new vw_computer_repair_pro_Editor_Control($wp_customize,'vw_computer_repair_pro_our_projects_text',array(
      'label' => __('Section Text','vw-computer-repair-pro'),
      'description' => __('Add Section Text','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_our_projects',
      'setting'   => 'vw_computer_repair_pro_our_projects_text',       
  )));
  $wp_customize->add_setting('vw_computer_repair_pro_our_projects_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_our_projects_number',array(
    'label' => __('No Of Projects To Show','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_projects',
    'setting' => 'vw_computer_repair_pro_our_projects_number',
    'type'    => 'number'
  ));
  $project_count = get_theme_mod('vw_computer_repair_pro_our_projects_number');
    for($i=1; $i<=$project_count; $i++) {
    $wp_customize->add_setting('vw_computer_repair_pro_project_featured_image_alt_text'.$i,array(
    'default' => '',
    'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_project_featured_image_alt_text'.$i,array(
    'label' => __('Services Features Image ALT Text ','vw-computer-repair-pro').$i,
    'description' => __('This is image text for image alt attribute.This text is only for coding purpose.','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_projects',
    'setting' => 'vw_computer_repair_pro_project_featured_image_alt_text'.$i,
    'type' => 'text'
    ));
  } 
  $wp_customize->add_setting( 'vw_computer_repair_pro_our_projects_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_our_projects_color_settings',
    array(
    'label' => __('Section Content Color And Font Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_projects'
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_projects_slider_loop',
     array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
  ));
  $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_our_projects_slider_loop',
   array(
      'label' => esc_html__( 'Slider Loop', 'vw-computer-repair-pro' ),
      'section' => 'vw_computer_repair_pro_our_projects'
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_projects_small_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_projects_small_heading_color', array(
      'label' => __('Section Small Heading Color', 'vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_our_projects',
      'settings' => 'vw_computer_repair_pro_our_projects_small_heading_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_projects_small_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_computer_repair_pro_our_projects_small_heading_font_family', array(
      'section'  => 'vw_computer_repair_pro_our_projects',
      'label'    => __('Section Small Heading Font Family','vw-computer-repair-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_our_projects_small_heading_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
  );
  $wp_customize->add_control('vw_computer_repair_pro_our_projects_small_heading_font_size',array(
        'label' => __('Section Small Heading Font Size in px','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_our_projects',
        'setting' => 'vw_computer_repair_pro_our_projects_small_heading_font_size',
        'type'    => 'text'
      )
  );
  $wp_customize->add_setting( 'vw_computer_repair_pro_our_projects_small_heading_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_projects_small_heading_bgcolor', array(
      'label' => __('Section Small Heading Background Color', 'vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_our_projects',
      'settings' => 'vw_computer_repair_pro_our_projects_small_heading_bgcolor',
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_projects_main_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_projects_main_heading_color', array(
      'label' => __('Section Main Heading Color', 'vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_our_projects',
      'settings' => 'vw_computer_repair_pro_our_projects_main_heading_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_projects_main_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_computer_repair_pro_our_projects_main_heading_font_family', array(
      'section'  => 'vw_computer_repair_pro_our_projects',
      'label'    => __('Section Main Heading Font Family','vw-computer-repair-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_our_projects_main_heading_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
  );
  $wp_customize->add_control('vw_computer_repair_pro_our_projects_main_heading_font_size',array(
        'label' => __('Section Small Heading Font Size in px','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_our_projects',
        'setting' => 'vw_computer_repair_pro_our_projects_main_heading_font_size',
        'type'    => 'text'
      )
  );
  $wp_customize->add_setting( 'vw_computer_repair_pro_our_projects_text_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_projects_text_color', array(
      'label' => __('Section Text Color', 'vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_our_projects',
      'settings' => 'vw_computer_repair_pro_our_projects_text_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_projects_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_computer_repair_pro_our_projects_text_font_family', array(
      'section'  => 'vw_computer_repair_pro_our_projects',
      'label'    => __('Section Text Font Family','vw-computer-repair-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting( 'vw_computer_repair_pro_our_projects_title_one_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_projects_title_one_color', array(
      'label' => __('Project Title 1 Color', 'vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_our_projects',
      'settings' => 'vw_computer_repair_pro_our_projects_title_one_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_projects_title_one_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_computer_repair_pro_our_projects_title_one_font_family', array(
      'section'  => 'vw_computer_repair_pro_our_projects',
      'label'    => __('Project Title 1 Font Family','vw-computer-repair-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_projects_title_two_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_projects_title_two_color', array(
      'label' => __('Project Title 2 Color', 'vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_our_projects',
      'settings' => 'vw_computer_repair_pro_our_projects_title_two_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_projects_title_two_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_computer_repair_pro_our_projects_title_two_font_family', array(
      'section'  => 'vw_computer_repair_pro_our_projects',
      'label'    => __('Project Title 2 Font Family','vw-computer-repair-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_projects_single_page_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_our_projects_single_page_settings',
    array(
    'label' => __('Project Single Page Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_projects'
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_projects_issue_title',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_our_projects_issue_title',array(
    'label' => __('Project Issue Title','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_projects',
    'setting' => 'vw_computer_repair_pro_our_projects_issue_title',
    'type'    => 'text'
  )); 

  $wp_customize->add_setting('vw_computer_repair_pro_our_projects_duration_title',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_our_projects_duration_title',array(
    'label' => __('Project Duration Title','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_projects',
    'setting' => 'vw_computer_repair_pro_our_projects_duration_title',
    'type'    => 'text'
  )); 

  $wp_customize->add_setting('vw_computer_repair_pro_our_projects_location_title',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_our_projects_location_title',array(
    'label' => __('Project Location Title','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_projects',
    'setting' => 'vw_computer_repair_pro_our_projects_location_title',
    'type'    => 'text'
  )); 

  $wp_customize->add_setting('vw_computer_repair_pro_our_projects_client_title',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_our_projects_client_title',array(
    'label' => __('Project Client Name','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_projects',
    'setting' => 'vw_computer_repair_pro_our_projects_client_title',
    'type'    => 'text'
  ));

  // ----------- Our Records -------------

  $wp_customize->add_section('vw_computer_repair_pro_our_records',array(
    'title' => __('Our Records','vw-computer-repair-pro'),
    'description' => __('Add Content Here','vw-computer-repair-pro'),
    'panel' => 'vw_computer_repair_pro_panel_id',
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_our_records_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_our_records_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_records',
    'choices' => array(
    'Enable' => __('Enable', 'vw-computer-repair-pro'),
    'Disable' => __('Disable', 'vw-computer-repair-pro')
  ),));
if ( isset( $wp_customize->selective_refresh ) ) {
  $wp_customize->selective_refresh->add_partial( 'vw_computer_repair_pro_our_records_enable', array(
    'selector' => '#our-records .container',
    'render_callback' => 'vw_computer_repair_pro_customize_partial_vw_computer_repair_pro_our_records_enable',
  ));
}
  $wp_customize->add_setting( 'vw_computer_repair_pro_our_records_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_our_records_settings',
    array(
    'label' => __('Section Background Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_records'
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_our_records_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_records_bgcolor', array(
    'label' => __('Section Background Color', 'vw-computer-repair-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_records',
    'settings' => 'vw_computer_repair_pro_our_records_bgcolor',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_records_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'vw_computer_repair_pro_our_records_bgimage',array(
    'label' => __('Section Background Image','vw-computer-repair-pro'),
    'description' => __('Dimension 1600px * 500px','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_records',
    'settings' => 'vw_computer_repair_pro_our_records_bgimage'
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_record_image_bg', array(
      'default'         => 'vw-scroll',
      'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_record_image_bg', array(
      'type'      => 'radio',
      'label'     => __('Choose image option', 'vw-computer-repair-pro'),
      'section'   => 'vw_computer_repair_pro_our_records',
      'choices'   => array(
        'vw-fixed'      => __( 'Fixed', 'vw-computer-repair-pro' ),
        'vw-scroll'      => __( 'Scroll', 'vw-computer-repair-pro' ),                    
  ),));
  $wp_customize->add_setting( 'vw_computer_repair_pro_our_records_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_our_records_content_settings',
    array(
    'label' => __('Section Content Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_records'
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_records_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_our_records_number',array(
    'label' => __('No Of Records To Show','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_records',
    'setting' => 'vw_computer_repair_pro_our_records_number',
    'type'    => 'number'
  )); 

  $records_count=get_theme_mod('vw_computer_repair_pro_our_records_number');
  for($i=1;$i<=$records_count;$i++)
  {
    $wp_customize->add_setting( 'vw_computer_repair_pro_our_records_box_settings'.$i,
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_our_records_box_settings'.$i,
      array(
      'label' => __('Record ','vw-computer-repair-pro').$i,
      'section' => 'vw_computer_repair_pro_our_records'
    )));

    $wp_customize->add_setting('vw_computer_repair_pro_our_records_icon'.$i,array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
      new WP_Customize_Image_Control( $wp_customize,'vw_computer_repair_pro_our_records_icon'.$i,array(
      'label' => __('Record Icon ','vw-computer-repair-pro').$i,
      'description' => __('Dimension 50px * 50px','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_our_records',
      'settings' => 'vw_computer_repair_pro_our_records_icon'.$i
    )));
    $wp_customize->add_setting('vw_computer_repair_pro_record_image_alt_text'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_record_image_alt_text'.$i,array(
      'label' => __('Record Image ALT Text ','vw-computer-repair-pro').$i,
      'description' => __('This is image text for image alt attribute.This text is only for coding purpose.','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_our_records',
      'setting' => 'vw_computer_repair_pro_record_image_alt_text'.$i,
      'type' => 'text'
    ));
    $wp_customize->add_setting('vw_computer_repair_pro_our_records_no'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_computer_repair_pro_our_records_no'.$i,array(
      'label' => __('Record Number ','vw-computer-repair-pro').$i,
      'section' => 'vw_computer_repair_pro_our_records',
      'setting' => 'vw_computer_repair_pro_our_records_no'.$i,
      'type'    => 'text'
    ));

    $wp_customize->add_setting('vw_computer_repair_pro_our_records_title'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_computer_repair_pro_our_records_title'.$i,array(
      'label' => __('Record Title ','vw-computer-repair-pro').$i,
      'section' => 'vw_computer_repair_pro_our_records',
      'setting' => 'vw_computer_repair_pro_our_records_title'.$i,
      'type'    => 'text'
    ));
  }

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_records_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_our_records_color_settings',
    array(
    'label' => __('Section Content Color And Font Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_records'
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_records_slider_loop',
     array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
  ));
  $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_our_records_slider_loop',
   array(
      'label' => esc_html__( 'Slider Loop', 'vw-computer-repair-pro' ),
      'section' => 'vw_computer_repair_pro_our_records'
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_records_number_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_records_number_color', array(
    'label' => __('Record Number Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_records',
    'settings' => 'vw_computer_repair_pro_our_records_number_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_records_number_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_our_records_number_font_family', array(
    'section'  => 'vw_computer_repair_pro_our_records',
    'label'    => __('Record Number Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_records_title_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_records_title_color', array(
    'label' => __('Record Title Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_records',
    'settings' => 'vw_computer_repair_pro_our_records_title_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_records_title_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_our_records_title_font_family', array(
    'section'  => 'vw_computer_repair_pro_our_records',
    'label'    => __('Record Title Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  // ----------- Pricing Plan -----------

  $wp_customize->add_section('vw_computer_repair_pro_pricing_plan',array(
    'title' => __('Pricing Plan','vw-computer-repair-pro'),
    'description' => __('Add Content Here','vw-computer-repair-pro'),
    'panel' => 'vw_computer_repair_pro_panel_id',
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_pricing_plan_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_pricing_plan_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_pricing_plan',
    'choices' => array(
    'Enable' => __('Enable', 'vw-computer-repair-pro'),
    'Disable' => __('Disable', 'vw-computer-repair-pro')
  ),));
if ( isset( $wp_customize->selective_refresh ) ) {
  $wp_customize->selective_refresh->add_partial( 'vw_computer_repair_pro_pricing_plan_enable', array(
    'selector' => '#pricing-plan .container',
    'render_callback' => 'vw_computer_repair_pro_customize_partial_vw_computer_repair_pro_pricing_plan_enable',
  ));
}
  $wp_customize->add_setting( 'vw_computer_repair_pro_pricing_plan_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_pricing_plan_settings',
    array(
    'label' => __('Section Background Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_pricing_plan'
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_pricing_plan_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_pricing_plan_bgcolor', array(
    'label' => __('Section Background Color', 'vw-computer-repair-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_pricing_plan',
    'settings' => 'vw_computer_repair_pro_pricing_plan_bgcolor',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_pricing_plan_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'vw_computer_repair_pro_pricing_plan_bgimage',array(
    'label' => __('Section Background Image','vw-computer-repair-pro'),
    'description' => __('Dimension 1600px * 900px','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_pricing_plan',
    'settings' => 'vw_computer_repair_pro_pricing_plan_bgimage'
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_pricing_plan_image_bg', array(
      'default'         => '',
      'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_pricing_plan_image_bg', array(
      'type'      => 'radio',
      'label'     => __('Choose image option', 'vw-computer-repair-pro'),
      'section'   => 'vw_computer_repair_pro_pricing_plan',
      'choices'   => array(
        'vw-fixed'      => __( 'Fixed', 'vw-computer-repair-pro' ),
        'vw-scroll'      => __( 'Scroll', 'vw-computer-repair-pro' ),                    
  ),));
  $wp_customize->add_setting( 'vw_computer_repair_pro_pricing_plan_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_pricing_plan_content_settings',
    array(
    'label' => __('Section Content Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_pricing_plan'
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_pricing_plan_small_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_pricing_plan_small_heading',array(
    'label' => __('Section Small Heading','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_pricing_plan',
    'setting' => 'vw_computer_repair_pro_pricing_plan_small_heading',
    'type'    => 'text'
  )); 

  $wp_customize->add_setting('vw_computer_repair_pro_pricing_plan_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_pricing_plan_main_heading',array(
    'label' => __('Section Main Heading','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_pricing_plan',
    'setting' => 'vw_computer_repair_pro_pricing_plan_main_heading',
    'type'    => 'text'
  )); 
  $wp_customize->add_setting('vw_computer_repair_pro_pricing_plan_text',array(
      'default'   => '',
      'capability'         => 'edit_theme_options',
      'sanitize_callback'  => 'wp_kses_post'
  ));
  $wp_customize->add_control(new vw_computer_repair_pro_Editor_Control($wp_customize,'vw_computer_repair_pro_pricing_plan_text',array(
      'label' => __('Section Text','vw-computer-repair-pro'),
      'description' => __('Add Section Text','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_pricing_plan',
      'setting'   => 'vw_computer_repair_pro_pricing_plan_text',       
  )));
  $wp_customize->add_setting('vw_computer_repair_pro_pricing_plan_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_pricing_plan_number',array(
    'label' => __('No Of Pricing Plan To Show','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_pricing_plan',
    'setting' => 'vw_computer_repair_pro_pricing_plan_number',
    'type'    => 'number'
  )); 

  $pricing_plan=get_theme_mod('vw_computer_repair_pro_pricing_plan_number');

  for($i=1;$i<=$pricing_plan;$i++)
  {
    $wp_customize->add_setting( 'vw_computer_repair_pro_pricing_plan_box_settings'.$i,
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_pricing_plan_box_settings'.$i,
      array(
      'label' => __('Pricing Plan ','vw-computer-repair-pro').$i,
      'section' => 'vw_computer_repair_pro_pricing_plan'
    )));
    $wp_customize->add_setting('vw_computer_repair_pro_pricing_plan_icon'.$i,array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
      new WP_Customize_Image_Control( $wp_customize,'vw_computer_repair_pro_pricing_plan_icon'.$i,array(
      'label' => __('Pricing Plan Icon ','vw-computer-repair-pro').$i,
      'description' => __('Dimension 60px * 60px','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_pricing_plan',
      'settings' => 'vw_computer_repair_pro_pricing_plan_icon'.$i
    )));
    $wp_customize->add_setting('vw_computer_repair_pro_pricing_icon_image_alt_text'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_pricing_icon_image_alt_text'.$i,array(
      'label' => __('Pricing Plan Icon Image ALT Text ','vw-computer-repair-pro').$i,
      'description' => __('This is image text for image alt attribute.This text is only for coding purpose.','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_pricing_plan',
      'setting' => 'vw_computer_repair_pro_pricing_icon_image_alt_text'.$i,
      'type' => 'text'
    ));
    $wp_customize->add_setting('vw_computer_repair_pro_pricing_plan_title'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_computer_repair_pro_pricing_plan_title'.$i,array(
      'label' => __('Pricing Plan Title ','vw-computer-repair-pro').$i,
      'section' => 'vw_computer_repair_pro_pricing_plan',
      'setting' => 'vw_computer_repair_pro_pricing_plan_title'.$i,
      'type'    => 'text'
    )); 
    $wp_customize->add_setting('vw_computer_repair_pro_pricing_plan_price'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_computer_repair_pro_pricing_plan_price'.$i,array(
      'label' => __('Pricing Plan Price ','vw-computer-repair-pro').$i,
      'section' => 'vw_computer_repair_pro_pricing_plan',
      'setting' => 'vw_computer_repair_pro_pricing_plan_price'.$i,
      'type'    => 'text'
    ));

    $wp_customize->add_setting('vw_computer_repair_pro_pricing_plan_price_title'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_computer_repair_pro_pricing_plan_price_title'.$i,array(
      'label' => __('Pricing Plan Price Title ','vw-computer-repair-pro').$i,
      'section' => 'vw_computer_repair_pro_pricing_plan',
      'setting' => 'vw_computer_repair_pro_pricing_plan_price_title'.$i,
      'type'    => 'text'
    )); 

    $wp_customize->add_setting('vw_computer_repair_pro_pricing_plan_image'.$i,array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
      new WP_Customize_Image_Control( $wp_customize,'vw_computer_repair_pro_pricing_plan_image'.$i,array(
      'label' => __('Pricing Plan Image ','vw-computer-repair-pro').$i,
      'description' => __('Dimension 400px * 400px','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_pricing_plan',
      'settings' => 'vw_computer_repair_pro_pricing_plan_image'.$i
    )));
    $wp_customize->add_setting('vw_computer_repair_pro_pricing_plan_image_alt_text'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_pricing_plan_image_alt_text'.$i,array(
      'label' => __('Pricing Plan Image ALT Text ','vw-computer-repair-pro').$i,
      'description' => __('This is image text for image alt attribute.This text is only for coding purpose.','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_pricing_plan',
      'setting' => 'vw_computer_repair_pro_pricing_plan_image_alt_text'.$i,
      'type' => 'text'
    ));
    $wp_customize->add_setting('vw_computer_repair_pro_pricing_plan_button_title'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_computer_repair_pro_pricing_plan_button_title'.$i,array(
      'label' => __('Pricing Plan Button Title ','vw-computer-repair-pro').$i,
      'section' => 'vw_computer_repair_pro_pricing_plan',
      'setting' => 'vw_computer_repair_pro_pricing_plan_button_title'.$i,
      'type'    => 'text'
    ));

    $wp_customize->add_setting('vw_computer_repair_pro_pricing_plan_button_url'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_computer_repair_pro_pricing_plan_button_url'.$i,array(
      'label' => __('Pricing Plan Button Url ','vw-computer-repair-pro').$i,
      'section' => 'vw_computer_repair_pro_pricing_plan',
      'setting' => 'vw_computer_repair_pro_pricing_plan_button_url'.$i,
      'type'    => 'text'
    ));

    $wp_customize->add_setting('vw_computer_repair_pro_pricing_plan_feature_number'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_computer_repair_pro_pricing_plan_feature_number'.$i,array(
      'label' => __('No Of Features To Show ','vw-computer-repair-pro').$i,
      'section' => 'vw_computer_repair_pro_pricing_plan',
      'setting' => 'vw_computer_repair_pro_pricing_plan_feature_number'.$i,
      'type'    => 'text'
    ));

    $plan_feature=get_theme_mod('vw_computer_repair_pro_pricing_plan_feature_number'.$i);
    for($j=1;$j<=$plan_feature;$j++)
    {
      $wp_customize->add_setting('vw_computer_repair_pro_pricing_plan_feature_title'.$i.$j,array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
      ));
      $wp_customize->add_control('vw_computer_repair_pro_pricing_plan_feature_title'.$i.$j,array(
        'label' => __('Pricing Plan Feature ','vw-computer-repair-pro').$j,
        'section' => 'vw_computer_repair_pro_pricing_plan',
        'setting' => 'vw_computer_repair_pro_pricing_plan_feature_title'.$i.$j,
        'type'    => 'text'
      ));
    }
  }

  $wp_customize->add_setting( 'vw_computer_repair_pro_pricing_plan_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_pricing_plan_color_settings',
    array(
    'label' => __('Section Content Color And Font Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_pricing_plan'
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_pricing_plan_slider_loop',
     array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
  ));
  $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_pricing_plan_slider_loop',
   array(
      'label' => esc_html__( 'Slider Loop', 'vw-computer-repair-pro' ),
      'section' => 'vw_computer_repair_pro_pricing_plan'
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_pricing_plan_small_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_pricing_plan_small_heading_color', array(
    'label' => __('Section Small Heading Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_pricing_plan',
    'settings' => 'vw_computer_repair_pro_pricing_plan_small_heading_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_pricing_plan_small_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_pricing_plan_small_heading_font_family', array(
    'section'  => 'vw_computer_repair_pro_pricing_plan',
    'label'    => __('Section Small Heading Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_pricing_plan_small_heading_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_pricing_plan_small_heading_bgcolor', array(
    'label' => __('Section Small Heading Background Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_pricing_plan',
    'settings' => 'vw_computer_repair_pro_pricing_plan_small_heading_bgcolor',
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_pricing_plan_main_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_pricing_plan_main_heading_color', array(
    'label' => __('Section Main Heading Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_pricing_plan',
    'settings' => 'vw_computer_repair_pro_pricing_plan_main_heading_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_pricing_plan_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_pricing_plan_main_heading_font_family', array(
    'section'  => 'vw_computer_repair_pro_pricing_plan',
    'label'    => __('Section Main Heading Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_pricing_plan_text_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_pricing_plan_text_color', array(
    'label' => __('Section Text Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_pricing_plan',
    'settings' => 'vw_computer_repair_pro_pricing_plan_text_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_pricing_plan_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_pricing_plan_text_font_family', array(
    'section'  => 'vw_computer_repair_pro_pricing_plan',
    'label'    => __('Section Text Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_pricing_plan_title_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_pricing_plan_title_color', array(
    'label' => __('Plan Title Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_pricing_plan',
    'settings' => 'vw_computer_repair_pro_pricing_plan_title_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_pricing_plan_title_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_pricing_plan_title_font_family', array(
    'section'  => 'vw_computer_repair_pro_pricing_plan',
    'label'    => __('Plan Title Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_pricing_plan_price_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_pricing_plan_price_color', array(
    'label' => __('Plan Price Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_pricing_plan',
    'settings' => 'vw_computer_repair_pro_pricing_plan_price_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_pricing_plan_price_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_pricing_plan_price_font_family', array(
    'section'  => 'vw_computer_repair_pro_pricing_plan',
    'label'    => __('Plan Price Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_pricing_plan_price_title_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_pricing_plan_price_title_color', array(
    'label' => __('Plan Price Title Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_pricing_plan',
    'settings' => 'vw_computer_repair_pro_pricing_plan_price_title_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_pricing_plan_price_title_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_pricing_plan_price_title_font_family', array(
    'section'  => 'vw_computer_repair_pro_pricing_plan',
    'label'    => __('Plan Price Title Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_pricing_plan_features_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_pricing_plan_features_color', array(
    'label' => __('Plan Feature Title Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_pricing_plan',
    'settings' => 'vw_computer_repair_pro_pricing_plan_features_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_pricing_plan_features_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_pricing_plan_features_font_family', array(
    'section'  => 'vw_computer_repair_pro_pricing_plan',
    'label'    => __('Plan Feature Title Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_pricing_plan_button_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_pricing_plan_button_color', array(
    'label' => __('Plan Button Title Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_pricing_plan',
    'settings' => 'vw_computer_repair_pro_pricing_plan_button_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_pricing_plan_button_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_pricing_plan_button_font_family', array(
    'section'  => 'vw_computer_repair_pro_pricing_plan',
    'label'    => __('Plan Button Title Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_pricing_plan_button_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_pricing_plan_button_bgcolor', array(
    'label' => __('Plan Button Title Background Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_pricing_plan',
    'settings' => 'vw_computer_repair_pro_pricing_plan_button_bgcolor',
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_pricing_plan_box_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_pricing_plan_box_bgcolor', array(
    'label' => __('Plan Box Background Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_pricing_plan',
    'settings' => 'vw_computer_repair_pro_pricing_plan_box_bgcolor',
  )));

  // ----------- Video And Testimonial ---------

  $wp_customize->add_section('vw_computer_repair_pro_testimonial_video',array(
    'title' => __('Testimonial And Video','vw-computer-repair-pro'),
    'description' => __('Add Content Here','vw-computer-repair-pro'),
    'panel' => 'vw_computer_repair_pro_panel_id',
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_testimonial_video_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_testimonial_video_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_testimonial_video',
    'choices' => array(
    'Enable' => __('Enable', 'vw-computer-repair-pro'),
    'Disable' => __('Disable', 'vw-computer-repair-pro')
  ),));

  $wp_customize->add_setting( 'vw_computer_repair_pro_testimonial_video_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_testimonial_video_settings',
    array(
    'label' => __('Section Background Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_testimonial_video'
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_testimonial_video_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_testimonial_video_bgcolor', array(
    'label' => __('Section Background Color', 'vw-computer-repair-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_testimonial_video',
    'settings' => 'vw_computer_repair_pro_testimonial_video_bgcolor',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_testimonial_video_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'vw_computer_repair_pro_testimonial_video_bgimage',array(
    'label' => __('Section Background Image','vw-computer-repair-pro'),
    'description' => __('Dimension 1600px * 800px','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_testimonial_video',
    'settings' => 'vw_computer_repair_pro_testimonial_video_bgimage'
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_testimonial_video_image_bg', array(
      'default'         => 'vw-scroll',
      'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_testimonial_video_image_bg', array(
      'type'      => 'radio',
      'label'     => __('Choose image option', 'vw-computer-repair-pro'),
      'section'   => 'vw_computer_repair_pro_testimonial_video',
      'choices'   => array(
        'vw-fixed'      => __( 'Fixed', 'vw-computer-repair-pro' ),
        'vw-scroll'      => __( 'Scroll', 'vw-computer-repair-pro' ),                    
  ),));
  // ------------- Testimonial -----------

  $wp_customize->add_section('vw_computer_repair_pro_testimonial',array(
    'title' => __('Testimonial','vw-computer-repair-pro'),
    'description' => __('Add Content Here','vw-computer-repair-pro'),
    'panel' => 'vw_computer_repair_pro_panel_id',
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_testimonial_enable',
     array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
  ));
  $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_testimonial_enable',
   array(
      'label' => esc_html__( 'Enable/Disable', 'vw-computer-repair-pro' ),
      'section' => 'vw_computer_repair_pro_testimonial'
  )));
if ( isset( $wp_customize->selective_refresh ) ) {
  $wp_customize->selective_refresh->add_partial( 'vw_computer_repair_pro_testimonial_enable', array(
    'selector' => '.test-heading',
    'render_callback' => 'vw_computer_repair_pro_customize_partial_vw_computer_repair_pro_testimonial_enable',
  ));
}
  $wp_customize->add_setting( 'vw_computer_repair_pro_testimonial_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_testimonial_settings',
    array(
    'label' => __('Section Background Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_testimonial'
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_testimonial_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_testimonial_bgcolor', array(
    'label' => __('Section Background Color', 'vw-computer-repair-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_testimonial',
    'settings' => 'vw_computer_repair_pro_testimonial_bgcolor',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_testimonial_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'vw_computer_repair_pro_testimonial_bgimage',array(
    'label' => __('Section Background Image','vw-computer-repair-pro'),
    'description' => __('Dimension 700px * 600px','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_testimonial',
    'settings' => 'vw_computer_repair_pro_testimonial_bgimage'
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_testimonial_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_testimonial_content_settings',
    array(
    'label' => __('Section Content Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_testimonial'
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_testimonial_small_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_testimonial_small_heading',array(
    'label' => __('Section Heading','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_testimonial',
    'setting' => 'vw_computer_repair_pro_testimonial_small_heading',
    'type'    => 'text'
  )); 

  $wp_customize->add_setting('vw_computer_repair_pro_testimonial_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_testimonial_number',array(
    'label' => __('No Of Testimonials To Show','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_testimonial',
    'setting' => 'vw_computer_repair_pro_testimonial_number',
    'type'    => 'number'
  )); 
  $services_count = get_theme_mod('vw_computer_repair_pro_testimonial_number');
    for($i=1; $i<=$services_count; $i++) {
    $wp_customize->add_setting('vw_computer_repair_pro_testimonial_featured_image_alt_text'.$i,array(
    'default' => '',
    'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_testimonial_featured_image_alt_text'.$i,array(
    'label' => __('Testimonial Features Image ALT Text ','vw-computer-repair-pro').$i,
    'description' => __('This is image text for image alt attribute.This text is only for coding purpose.','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_testimonial',
    'setting' => 'vw_computer_repair_pro_testimonial_featured_image_alt_text'.$i,
    'type' => 'text'
    ));
  }
  $wp_customize->add_setting( 'vw_computer_repair_pro_testimonial_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_testimonial_color_settings',
    array(
    'label' => __('Section Content Color And Font Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_testimonial'
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_testimonial_slider_loop',
     array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
  ));
  $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_testimonial_slider_loop',
   array(
      'label' => esc_html__( 'Slider Loop', 'vw-computer-repair-pro' ),
      'section' => 'vw_computer_repair_pro_testimonial'
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_testimonial_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_testimonial_heading_color', array(
    'label' => __('Section Heading Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_testimonial',
    'settings' => 'vw_computer_repair_pro_testimonial_heading_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_testimonial_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_testimonial_heading_font_family', array(
    'section'  => 'vw_computer_repair_pro_testimonial',
    'label'    => __('Section Heading Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_testimonial_heading_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_testimonial_heading_bgcolor', array(
    'label' => __('Section Heading Background Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_testimonial',
    'settings' => 'vw_computer_repair_pro_testimonial_heading_bgcolor',
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_testimonial_title_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_testimonial_title_color', array(
    'label' => __('Testimonial Title Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_testimonial',
    'settings' => 'vw_computer_repair_pro_testimonial_title_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_testimonial_title_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_testimonial_title_font_family', array(
    'section'  => 'vw_computer_repair_pro_testimonial',
    'label'    => __('Testimonial Title Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_testimonial_desig_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_testimonial_desig_color', array(
    'label' => __('Testimonial Designation Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_testimonial',
    'settings' => 'vw_computer_repair_pro_testimonial_desig_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_testimonial_desig_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_testimonial_desig_font_family', array(
    'section'  => 'vw_computer_repair_pro_testimonial',
    'label'    => __('Testimonial Designation Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_testimonial_text_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_testimonial_text_color', array(
    'label' => __('Testimonial Text Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_testimonial',
    'settings' => 'vw_computer_repair_pro_testimonial_text_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_testimonial_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_testimonial_text_font_family', array(
    'section'  => 'vw_computer_repair_pro_testimonial',
    'label'    => __('Testimonial Text Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting( 'vw_computer_repair_pro_testimonial_email_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_testimonial_email_color', array(
    'label' => __('Phone And Email Text Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_testimonial',
    'settings' => 'vw_computer_repair_pro_testimonial_email_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_testimonial_email_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_testimonial_email_font_family', array(
    'section'  => 'vw_computer_repair_pro_testimonial',
    'label'    => __('Phone And Email Text Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_testimonial_social_icon_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_testimonial_social_icon_color', array(
    'label' => __('Social Icon Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_testimonial',
    'settings' => 'vw_computer_repair_pro_testimonial_social_icon_color',
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_testimonial_excerpt_no',
  array(
    'default' => 20,
    'transport' => 'postMessage',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control( new Vw_Computer_Repair_Pro_Slider_Custom_Control( $wp_customize, 'vw_computer_repair_pro_testimonial_excerpt_no',
    array(
      'label' => __( 'Blog Excerpt Number (Limit 60 Words)', 'vw-computer-repair-pro' ),
      'section' => 'vw_computer_repair_pro_testimonial',
      'input_attrs' => array(
        'min' => 5, // Required. Minimum value for the slider
        'max' => 60, // Required. Maximum value for the slider
        'step' => 1, // Required. The size of each interval or step the slider takes between the minimum and maximum values
      ),
  )));

  // ----------- Video --------------

  $wp_customize->add_section('vw_computer_repair_pro_video',array(
    'title' => __('Video','vw-computer-repair-pro'),
    'description' => __('Add Content Here','vw-computer-repair-pro'),
    'panel' => 'vw_computer_repair_pro_panel_id',
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_video_enable',
     array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
  ));
  $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_video_enable',
   array(
      'label' => esc_html__( 'Enable/Disable', 'vw-computer-repair-pro' ),
      'section' => 'vw_computer_repair_pro_video'
  )));
if ( isset( $wp_customize->selective_refresh ) ) {  
  $wp_customize->selective_refresh->add_partial( 'vw_computer_repair_pro_video_enable', array(
    'selector' => '.video',
    'render_callback' => 'vw_computer_repair_pro_customize_partial_vw_computer_repair_pro_video_enable',
  ));
}
  $wp_customize->add_setting( 'vw_computer_repair_pro_video_youtube_link', array(
  ) );
  $wp_customize->add_control( new VW_Button_Custom_Content( $wp_customize, 'vw_computer_repair_pro_video_youtube_link', array(
      'section' => 'vw_computer_repair_pro_video',
      'label' => __( 'Youtube Video', 'vw-computer-repair-pro' ),
      'description' => __( 'Watch our youtube video for how to add YouTube Video Link in WordPress Theme.', 'vw-computer-repair-pro' ),
       /* translators: %s: plugin name. */
      'content' => sprintf( __( 'Check the button %1$sWatch Now%2$s', 'vw-computer-repair-pro' ), '<a href="' . esc_url( VW_JEWELLERY_PRO_VEDIO_LINK_LINK  ) . '" class="button button-secondary alignright review_st" target="_blank">', '</a>' ),
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_video_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_video_content_settings',
    array(
    'label' => __('Section Content Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_video'
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_video_small_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_video_small_heading',array(
    'label' => __('Section Small Title','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_video',
    'setting' => 'vw_computer_repair_pro_video_small_heading',
    'type'    => 'text'
  )); 

  $wp_customize->add_setting('vw_computer_repair_pro_video_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_video_main_heading',array(
    'label' => __('Section Main Title','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_video',
    'setting' => 'vw_computer_repair_pro_video_main_heading',
    'type'    => 'text'
  )); 
  $wp_customize->add_setting(
  'vw_computer_repair_pro_video_play_icon',
    array(
      'default'     => '',
      'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
    )
  );
  $wp_customize->add_control(
    new Vw_Computer_Pro_Fontawesome_Icon_Chooser(
      $wp_customize,
      'vw_computer_repair_pro_video_play_icon',
      array(
        'settings'    => 'vw_computer_repair_pro_video_play_icon',
        'section'   => 'vw_computer_repair_pro_video',
        'type'      => 'icon',
        'label'     => esc_html__( 'Video Play Icon', 'vw-computer-repair-pro' ),
      )
    )
  );
  $wp_customize->add_setting('vw_computer_repair_pro_video_url',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_video_url',array(
    'label' => __('Add Video Url Here','vw-computer-repair-pro'),
    'description' => __('Add Video Url Here From (https://www.youtube.com/)','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_video',
    'setting' => 'vw_computer_repair_pro_video_url',
    'type'    => 'text'
  )); 

  $wp_customize->add_setting( 'vw_computer_repair_pro_video_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_video_color_settings',
    array(
    'label' => __('Section Content Color And Font Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_video'
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_video_small_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_video_small_heading_color', array(
    'label' => __('Section Small Title Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_video',
    'settings' => 'vw_computer_repair_pro_video_small_heading_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_video_small_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_video_small_heading_font_family', array(
    'section'  => 'vw_computer_repair_pro_video',
    'label'    => __('Section Small Title Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_video_main_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_video_main_heading_color', array(
    'label' => __('Section Main Title Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_video',
    'settings' => 'vw_computer_repair_pro_video_main_heading_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_video_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_video_main_heading_font_family', array(
    'section'  => 'vw_computer_repair_pro_video',
    'label'    => __('Section Main Title Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_video_icon_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_video_icon_color', array(
    'label' => __('Video Icon Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_video',
    'settings' => 'vw_computer_repair_pro_video_icon_color',
  )));

  // ------------ Our Products -----------

  $wp_customize->add_section('vw_computer_repair_pro_our_products',array(
    'title' => __('Computer Products','vw-computer-repair-pro'),
    'description' => __('Add Content Here','vw-computer-repair-pro'),
    'panel' => 'vw_computer_repair_pro_panel_id',
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_our_products_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_our_products_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_products',
    'choices' => array(
    'Enable' => __('Enable', 'vw-computer-repair-pro'),
    'Disable' => __('Disable', 'vw-computer-repair-pro')
  ),));
if ( isset( $wp_customize->selective_refresh ) ) {
  $wp_customize->selective_refresh->add_partial( 'vw_computer_repair_pro_our_products_enable', array(
    'selector' => '#our-products .our-product-head h3',
    'render_callback' => 'vw_computer_repair_pro_customize_partial_vw_computer_repair_pro_our_products_enable',
  ));
}
  $wp_customize->add_setting( 'vw_computer_repair_pro_shop_youtube_link', array(
  ) );
  $wp_customize->add_control( new VW_Button_Custom_Content( $wp_customize, 'vw_computer_repair_pro_shop_youtube_link', array(
      'section' => 'vw_computer_repair_pro_our_products',
      'label' => __( 'Youtube Video', 'vw-computer-repair-pro' ),
      'description' => __( 'Watch our youtube video for installing woocommerce plugin and create product in WordPress.', 'vw-computer-repair-pro' ),
      /* translators: %s: plugin name. */
      'content' => sprintf( __( 'Check the button %1$sWatch Now%2$s', 'vw-computer-repair-pro' ), '<a href="' . esc_url( VW_COMPUTER_REPAIR_PRO_WOOCOMMERCE_LINK  ) . '" class="button button-secondary alignright review_st" target="_blank">', '</a>' ),
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_our_products_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_our_products_settings',
    array(
    'label' => __('Section Background Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_products'
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_our_products_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_products_bgcolor', array(
    'label' => __('Section Background Color', 'vw-computer-repair-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_products',
    'settings' => 'vw_computer_repair_pro_our_products_bgcolor',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_products_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'vw_computer_repair_pro_our_products_bgimage',array(
    'label' => __('Section Background Image','vw-computer-repair-pro'),
    'description' => __('Dimension 1600px * 900px','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_products',
    'settings' => 'vw_computer_repair_pro_our_products_bgimage'
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_product_image_bg', array(
      'default'         => '',
      'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_product_image_bg', array(
      'type'      => 'radio',
      'label'     => __('Choose image option', 'vw-computer-repair-pro'),
      'section'   => 'vw_computer_repair_pro_our_products',
      'choices'   => array(
        'vw-fixed'      => __( 'Fixed', 'vw-computer-repair-pro' ),
        'vw-scroll'      => __( 'Scroll', 'vw-computer-repair-pro' ),                    
  ),));
  $wp_customize->add_setting( 'vw_computer_repair_pro_our_products_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_our_products_content_settings',
    array(
    'label' => __('Section Content Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_products'
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_products_small_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_our_products_small_heading',array(
    'label' => __('Section Small Heading','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_products',
    'setting' => 'vw_computer_repair_pro_our_products_small_heading',
    'type'    => 'text'
  )); 

  $wp_customize->add_setting('vw_computer_repair_pro_our_products_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_our_products_main_heading',array(
    'label' => __('Section Main Heading','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_products',
    'setting' => 'vw_computer_repair_pro_our_products_main_heading',
    'type'    => 'text'
  )); 
  $wp_customize->add_setting('vw_computer_repair_pro_our_products_text',array(
      'default'   => '',
      'capability'         => 'edit_theme_options',
      'sanitize_callback'  => 'wp_kses_post'
  ));
  $wp_customize->add_control(new vw_computer_repair_pro_Editor_Control($wp_customize,'vw_computer_repair_pro_our_products_text',array(
      'label' => __('Section Text','vw-computer-repair-pro'),
      'description' => __('Add Section Text','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_our_products',
      'setting'   => 'vw_computer_repair_pro_our_products_text',       
  )));
  $wp_customize->add_setting('vw_computer_repair_pro_our_products_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_our_products_number',array(
    'label' => __('No Of Products To Show','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_products',
    'setting' => 'vw_computer_repair_pro_our_products_number',
    'type'    => 'number'
  )); 
  $wp_customize->add_setting( 'vw_computer_repair_pro_our_products_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_our_products_color_settings',
    array(
    'label' => __('Section Content Color And Font Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_products'
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_products_slider_loop',
     array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
  ));
  $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_our_products_slider_loop',
   array(
      'label' => esc_html__( 'Slider Loop', 'vw-computer-repair-pro' ),
      'section' => 'vw_computer_repair_pro_our_products'
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_products_small_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_products_small_heading_color', array(
    'label' => __('Section Small Heading Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_products',
    'settings' => 'vw_computer_repair_pro_our_products_small_heading_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_products_small_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_our_products_small_heading_font_family', array(
    'section'  => 'vw_computer_repair_pro_our_products',
    'label'    => __('Section Small Heading Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_products_small_heading_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_products_small_heading_bgcolor', array(
    'label' => __('Section Small Heading Background Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_products',
    'settings' => 'vw_computer_repair_pro_our_products_small_heading_bgcolor',
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_products_main_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_products_main_heading_color', array(
    'label' => __('Section Main Heading Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_products',
    'settings' => 'vw_computer_repair_pro_our_products_main_heading_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_products_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_our_products_main_heading_font_family', array(
    'section'  => 'vw_computer_repair_pro_our_products',
    'label'    => __('Section Main Heading Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting( 'vw_computer_repair_pro_our_products_text_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_products_text_color', array(
    'label' => __('Section Text Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_products',
    'settings' => 'vw_computer_repair_pro_our_products_text_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_products_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_our_products_text_font_family', array(
    'section'  => 'vw_computer_repair_pro_our_products',
    'label'    => __('Section Text Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_products_title_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_products_title_color', array(
    'label' => __('Product Title Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_products',
    'settings' => 'vw_computer_repair_pro_our_products_title_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_products_title_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_our_products_title_font_family', array(
    'section'  => 'vw_computer_repair_pro_our_products',
    'label'    => __('Product Title Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_products_price_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_products_price_color', array(
    'label' => __('Product Price Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_products',
    'settings' => 'vw_computer_repair_pro_our_products_price_color',
  )));
  $wp_customize->add_setting('vw_computer_repair_pro_our_products_price_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_our_products_price_font_family', array(
    'section'  => 'vw_computer_repair_pro_our_products',
    'label'    => __('Product Price Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_products_cart_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_products_cart_color', array(
    'label' => __('Cart Icon Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_products',
    'settings' => 'vw_computer_repair_pro_our_products_cart_color',
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_products_cart_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_products_cart_bgcolor', array(
    'label' => __('Cart Icon Background Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_products',
    'settings' => 'vw_computer_repair_pro_our_products_cart_bgcolor',
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_products_sale_tag_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_products_sale_tag_color', array(
    'label' => __('Sale Tag Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_products',
    'settings' => 'vw_computer_repair_pro_our_products_sale_tag_color',
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_products_sale_tag_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_products_sale_tag_bgcolor', array(
    'label' => __('Sale Tag Background Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_products',
    'settings' => 'vw_computer_repair_pro_our_products_sale_tag_bgcolor',
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_products_hover_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_products_hover_color', array(
    'label' => __('Product Hover Background Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_products',
    'settings' => 'vw_computer_repair_pro_our_products_hover_color',
  )));

  // ------------- Why Choose Us -------------

  $wp_customize->add_section('vw_computer_repair_pro_why_choose_us',array(
    'title' => __('Why Choose Us','vw-computer-repair-pro'),
    'description' => __('Add Content Here','vw-computer-repair-pro'),
    'panel' => 'vw_computer_repair_pro_panel_id',
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_why_choose_us_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_why_choose_us_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_why_choose_us',
    'choices' => array(
    'Enable' => __('Enable', 'vw-computer-repair-pro'),
    'Disable' => __('Disable', 'vw-computer-repair-pro')
  ),));
if ( isset( $wp_customize->selective_refresh ) ) {
  $wp_customize->selective_refresh->add_partial( 'vw_computer_repair_pro_why_choose_us_enable', array(
    'selector' => '#why-choose-us .container',
    'render_callback' => 'vw_computer_repair_pro_customize_partial_vw_computer_repair_pro_why_choose_us_enable',
  ));
}
  $wp_customize->add_setting( 'vw_computer_repair_pro_why_choose_us_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_why_choose_us_settings',
    array(
    'label' => __('Section Background Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_why_choose_us'
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_why_choose_us_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_why_choose_us_bgcolor', array(
    'label' => __('Section Background Color', 'vw-computer-repair-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_why_choose_us',
    'settings' => 'vw_computer_repair_pro_why_choose_us_bgcolor',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_why_choose_us_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'vw_computer_repair_pro_why_choose_us_bgimage',array(
    'label' => __('Section Background Image','vw-computer-repair-pro'),
    'description' => __('Dimension 1600px * 900px','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_why_choose_us',
    'settings' => 'vw_computer_repair_pro_why_choose_us_bgimage'
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_why_choose_image_bg', array(
      'default'         => 'vw-scroll',
      'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_why_choose_image_bg', array(
      'type'      => 'radio',
      'label'     => __('Choose image option', 'vw-computer-repair-pro'),
      'section'   => 'vw_computer_repair_pro_why_choose_us',
      'choices'   => array(
        'vw-fixed'      => __( 'Fixed', 'vw-computer-repair-pro' ),
        'vw-scroll'      => __( 'Scroll', 'vw-computer-repair-pro' ),                    
  ),));
  $wp_customize->add_setting( 'vw_computer_repair_pro_why_choose_us_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_why_choose_us_content_settings',
    array(
    'label' => __('Section Content Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_why_choose_us'
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_why_choose_us_small_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_why_choose_us_small_heading',array(
    'label' => __('Section Small Heading','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_why_choose_us',
    'setting' => 'vw_computer_repair_pro_why_choose_us_small_heading',
    'type'    => 'text'
  )); 

  $wp_customize->add_setting('vw_computer_repair_pro_why_choose_us_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_why_choose_us_main_heading',array(
    'label' => __('Section Main Heading','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_why_choose_us',
    'setting' => 'vw_computer_repair_pro_why_choose_us_main_heading',
    'type'    => 'text'
  )); 
  $wp_customize->add_setting('vw_computer_repair_pro_why_choose_us_text',array(
      'default'   => '',
      'capability'         => 'edit_theme_options',
      'sanitize_callback'  => 'wp_kses_post'
  ));
  $wp_customize->add_control(new vw_computer_repair_pro_Editor_Control($wp_customize,'vw_computer_repair_pro_why_choose_us_text',array(
      'label' => __('Section Text','vw-computer-repair-pro'),
      'description' => __('Add Section Text','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_why_choose_us',
      'setting'   => 'vw_computer_repair_pro_why_choose_us_text',       
  )));
  $wp_customize->add_setting('vw_computer_repair_pro_why_choose_us_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_why_choose_us_number',array(
    'label' => __('No Of Tabs To Show','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_why_choose_us',
    'setting' => 'vw_computer_repair_pro_why_choose_us_number',
    'type'    => 'number'
  )); 

  $tab_count=get_theme_mod('vw_computer_repair_pro_why_choose_us_number');
  for($i=1;$i<=$tab_count;$i++)
  {

    $wp_customize->add_setting( 'vw_computer_repair_pro_why_choose_us_tab_settings'.$i,
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_why_choose_us_tab_settings'.$i,
      array(
      'label' => __('Tab ','vw-computer-repair-pro').$i,
      'section' => 'vw_computer_repair_pro_why_choose_us'
    )));

    $wp_customize->add_setting('vw_computer_repair_pro_why_choose_us_tab_icon'.$i,array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
      new WP_Customize_Image_Control( $wp_customize,'vw_computer_repair_pro_why_choose_us_tab_icon'.$i,array(
      'label' => __('Tab Icon ','vw-computer-repair-pro').$i,
      'description' => __('Dimension 70px * 70px','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_why_choose_us',
      'settings' => 'vw_computer_repair_pro_why_choose_us_tab_icon'.$i
    )));
    $wp_customize->add_setting('vw_computer_repair_pro_why_choose_us_tab_icon_image_alt_text'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_why_choose_us_tab_icon_image_alt_text'.$i,array(
      'label' => __('Why Choose Image ALT Text ','vw-computer-repair-pro').$i,
      'description' => __('This is image text for image alt attribute.This text is only for coding purpose.','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_why_choose_us',
      'setting' => 'vw_computer_repair_pro_why_choose_us_tab_icon_image_alt_text'.$i,
      'type' => 'text'
    ));
    $wp_customize->add_setting('vw_computer_repair_pro_why_choose_us_tab_title'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_computer_repair_pro_why_choose_us_tab_title'.$i,array(
      'label' => __('Tab Title ','vw-computer-repair-pro').$i,
      'section' => 'vw_computer_repair_pro_why_choose_us',
      'setting' => 'vw_computer_repair_pro_why_choose_us_tab_title'.$i,
      'type'    => 'text'
    )); 

    $wp_customize->add_setting( 'vw_computer_repair_pro_why_choose_us_tab_content_settings'.$i,
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_why_choose_us_tab_content_settings'.$i,
      array(
      'label' => __('Tab Content','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_why_choose_us'
    )));

    $wp_customize->add_setting('vw_computer_repair_pro_why_choose_us_tab_heading'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_computer_repair_pro_why_choose_us_tab_heading'.$i,array(
      'label' => __('Tab Content Heading ','vw-computer-repair-pro').$i,
      'section' => 'vw_computer_repair_pro_why_choose_us',
      'setting' => 'vw_computer_repair_pro_why_choose_us_tab_heading'.$i,
      'type'    => 'text'
    )); 
    $wp_customize->add_setting('vw_computer_repair_pro_why_choose_us_tab_text'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_computer_repair_pro_why_choose_us_tab_text'.$i,array(
      'label' => __('Tab Content Text ','vw-computer-repair-pro').$i,
      'section' => 'vw_computer_repair_pro_why_choose_us',
      'setting' => 'vw_computer_repair_pro_why_choose_us_tab_text'.$i,
      'type'    => 'text'
    )); 
  }

  $wp_customize->add_setting( 'vw_computer_repair_pro_why_choose_us_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_why_choose_us_color_settings',
    array(
    'label' => __('Section Content Color And Font Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_why_choose_us'
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_why_choose_us_small_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_why_choose_us_small_heading_color', array(
    'label' => __('Section Small Heading Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_why_choose_us',
    'settings' => 'vw_computer_repair_pro_why_choose_us_small_heading_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_why_choose_us_small_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_why_choose_us_small_heading_font_family', array(
    'section'  => 'vw_computer_repair_pro_why_choose_us',
    'label'    => __('Section Small Heading Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_why_choose_us_small_heading_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_why_choose_us_small_heading_bgcolor', array(
    'label' => __('Section Small Heading Background Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_why_choose_us',
    'settings' => 'vw_computer_repair_pro_why_choose_us_small_heading_bgcolor',
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_why_choose_us_main_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_why_choose_us_main_heading_color', array(
    'label' => __('Section Main Heading Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_why_choose_us',
    'settings' => 'vw_computer_repair_pro_why_choose_us_main_heading_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_why_choose_us_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_why_choose_us_main_heading_font_family', array(
    'section'  => 'vw_computer_repair_pro_why_choose_us',
    'label'    => __('Section Main Heading Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_why_choose_us_text_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_why_choose_us_text_color', array(
    'label' => __('Section Text Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_why_choose_us',
    'settings' => 'vw_computer_repair_pro_why_choose_us_text_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_why_choose_us_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_why_choose_us_text_font_family', array(
    'section'  => 'vw_computer_repair_pro_why_choose_us',
    'label'    => __('Section Text Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_why_choose_us_tab_title_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_why_choose_us_tab_title_color', array(
    'label' => __('Tab Title Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_why_choose_us',
    'settings' => 'vw_computer_repair_pro_why_choose_us_tab_title_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_why_choose_us_tab_title_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_why_choose_us_tab_title_font_family', array(
    'section'  => 'vw_computer_repair_pro_why_choose_us',
    'label'    => __('Tab Title Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_why_choose_us_tab_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_why_choose_us_tab_heading_color', array(
    'label' => __('Tab Content Heading Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_why_choose_us',
    'settings' => 'vw_computer_repair_pro_why_choose_us_tab_heading_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_why_choose_us_tab_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_why_choose_us_tab_heading_font_family', array(
    'section'  => 'vw_computer_repair_pro_why_choose_us',
    'label'    => __('Tab Content Heading Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_why_choose_us_tab_text_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_why_choose_us_tab_text_color', array(
    'label' => __('Tab Content Text Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_why_choose_us',
    'settings' => 'vw_computer_repair_pro_why_choose_us_tab_text_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_why_choose_us_tab_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_why_choose_us_tab_text_font_family', array(
    'section'  => 'vw_computer_repair_pro_why_choose_us',
    'label'    => __('Tab Content Text Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_why_choose_us_tab_hover_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_why_choose_us_tab_hover_bgcolor', array(
    'label' => __('Tab Hover Background Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_why_choose_us',
    'settings' => 'vw_computer_repair_pro_why_choose_us_tab_hover_bgcolor',
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_why_choose_us_active_tab_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_why_choose_us_active_tab_bgcolor', array(
    'label' => __('Active Tab Background Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_why_choose_us',
    'settings' => 'vw_computer_repair_pro_why_choose_us_active_tab_bgcolor',
  )));

  // ----------- Our Team -----------

  $wp_customize->add_section('vw_computer_repair_pro_our_team',array(
    'title' => __('Our Team','vw-computer-repair-pro'),
    'description' => __('Add Content Here','vw-computer-repair-pro'),
    'panel' => 'vw_computer_repair_pro_panel_id',
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_our_team_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_our_team_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_team',
    'choices' => array(
    'Enable' => __('Enable', 'vw-computer-repair-pro'),
    'Disable' => __('Disable', 'vw-computer-repair-pro')
  ),));
if ( isset( $wp_customize->selective_refresh ) ) {
  $wp_customize->selective_refresh->add_partial( 'vw_computer_repair_pro_our_team_enable', array(
    'selector' => '#our-team .container',
    'render_callback' => 'vw_computer_repair_pro_customize_partial_vw_computer_repair_pro_our_team_enable',
  ));
}
  $wp_customize->add_setting( 'vw_computer_repair_pro_our_team_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_our_team_settings',
    array(
    'label' => __('Section Background Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_team'
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_our_team_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_team_bgcolor', array(
    'label' => __('Section Background Color', 'vw-computer-repair-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_team',
    'settings' => 'vw_computer_repair_pro_our_team_bgcolor',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_team_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'vw_computer_repair_pro_our_team_bgimage',array(
    'label' => __('Section Background Image','vw-computer-repair-pro'),
    'description' => __('Dimension 1600px * 900px','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_team',
    'settings' => 'vw_computer_repair_pro_our_team_bgimage'
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_team_image_bg', array(
      'default'         => '',
      'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_team_image_bg', array(
      'type'      => 'radio',
      'label'     => __('Choose image option', 'vw-computer-repair-pro'),
      'section'   => 'vw_computer_repair_pro_our_team',
      'choices'   => array(
        'vw-fixed'      => __( 'Fixed', 'vw-computer-repair-pro' ),
        'vw-scroll'      => __( 'Scroll', 'vw-computer-repair-pro' ),                    
  ),));
  $wp_customize->add_setting( 'vw_computer_repair_pro_our_team_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_our_team_content_settings',
    array(
    'label' => __('Section Content Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_team'
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_team_small_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_our_team_small_heading',array(
    'label' => __('Section Small Heading','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_team',
    'setting' => 'vw_computer_repair_pro_our_team_small_heading',
    'type'    => 'text'
  )); 

  $wp_customize->add_setting('vw_computer_repair_pro_our_team_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_our_team_main_heading',array(
    'label' => __('Section Main Heading','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_team',
    'setting' => 'vw_computer_repair_pro_our_team_main_heading',
    'type'    => 'text'
  )); 
  $wp_customize->add_setting('vw_computer_repair_pro_our_team_text',array(
      'default'   => '',
      'capability'         => 'edit_theme_options',
      'sanitize_callback'  => 'wp_kses_post'
  ));
  $wp_customize->add_control(new vw_computer_repair_pro_Editor_Control($wp_customize,'vw_computer_repair_pro_our_team_text',array(
      'label' => __('Section Text','vw-computer-repair-pro'),
      'description' => __('Add Section Text','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_our_team',
      'setting'   => 'vw_computer_repair_pro_our_team_text',       
  )));
  $wp_customize->add_setting('vw_computer_repair_pro_our_team_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_our_team_number',array(
    'label' => __('No Of Team Members To Show','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_team',
    'setting' => 'vw_computer_repair_pro_our_team_number',
    'type'    => 'number'
  ));
  $team_count = get_theme_mod('vw_computer_repair_pro_our_team_number');
    for($i=1; $i<=$team_count; $i++) {
    $wp_customize->add_setting('vw_computer_repair_pro_team_featured_image_alt_text'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_team_featured_image_alt_text'.$i,array(
      'label' => __('Team Features Image ALT Text ','vw-computer-repair-pro').$i,
      'description' => __('This is image text for image alt attribute.This text is only for coding purpose.','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_our_team',
      'setting' => 'vw_computer_repair_pro_team_featured_image_alt_text'.$i,
      'type' => 'text'
    ));
  }
  $wp_customize->add_setting( 'vw_computer_repair_pro_our_team_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_our_team_color_settings',
    array(
    'label' => __('Section Content Color And Font Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_team'
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_team_slider_loop',
     array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
  ));
  $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_our_team_slider_loop',
   array(
      'label' => esc_html__( 'Slider Loop', 'vw-computer-repair-pro' ),
      'section' => 'vw_computer_repair_pro_our_team'
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_team_small_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_team_small_heading_color', array(
    'label' => __('Section Small Heading Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_team',
    'settings' => 'vw_computer_repair_pro_our_team_small_heading_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_team_small_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_our_team_small_heading_font_family', array(
    'section'  => 'vw_computer_repair_pro_our_team',
    'label'    => __('Section Small Heading Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_team_small_heading_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_team_small_heading_bgcolor', array(
    'label' => __('Section Small Heading Background Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_team',
    'settings' => 'vw_computer_repair_pro_our_team_small_heading_bgcolor',
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_team_main_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_team_main_heading_color', array(
    'label' => __('Section Main Heading Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_team',
    'settings' => 'vw_computer_repair_pro_our_team_main_heading_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_team_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_our_team_main_heading_font_family', array(
    'section'  => 'vw_computer_repair_pro_our_team',
    'label'    => __('Section Main Heading Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_team_text_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_team_text_color', array(
    'label' => __('Section Text Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_team',
    'settings' => 'vw_computer_repair_pro_our_team_text_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_team_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_our_team_text_font_family', array(
    'section'  => 'vw_computer_repair_pro_our_team',
    'label'    => __('Section Text Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_team_title_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_team_title_color', array(
    'label' => __('Team Title Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_team',
    'settings' => 'vw_computer_repair_pro_our_team_title_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_team_title_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_our_team_title_font_family', array(
    'section'  => 'vw_computer_repair_pro_our_team',
    'label'    => __('Team Title Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_team_desig_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_team_desig_color', array(
    'label' => __('Team Designation Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_team',
    'settings' => 'vw_computer_repair_pro_our_team_desig_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_team_desig_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_our_team_desig_font_family', array(
    'section'  => 'vw_computer_repair_pro_our_team',
    'label'    => __('Team Designation Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_team_email_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_team_email_color', array(
    'label' => __('Email And Phone Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_team',
    'settings' => 'vw_computer_repair_pro_our_team_email_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_our_team_email_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_our_team_email_font_family', array(
    'section'  => 'vw_computer_repair_pro_our_team',
    'label'    => __('Email And Phone Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_team_social_icon_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_team_social_icon_color', array(
    'label' => __('Social Icon Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_team',
    'settings' => 'vw_computer_repair_pro_our_team_social_icon_color',
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_team_box_border_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_our_team_box_border_color', array(
    'label' => __('Team Content Hover Border Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_team',
    'settings' => 'vw_computer_repair_pro_our_team_box_border_color',
  )));

  // ---------- Appointment -----------

  $wp_customize->add_section('vw_computer_repair_pro_appointment',array(
    'title' => __('Appointment','vw-computer-repair-pro'),
    'description' => __('Add Content Here','vw-computer-repair-pro'),
    'panel' => 'vw_computer_repair_pro_panel_id',
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_appointment_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_appointment_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_appointment',
    'choices' => array(
    'Enable' => __('Enable', 'vw-computer-repair-pro'),
    'Disable' => __('Disable', 'vw-computer-repair-pro')
  ),));
if ( isset( $wp_customize->selective_refresh ) ) {
  $wp_customize->selective_refresh->add_partial( 'vw_computer_repair_pro_appointment_enable', array(
    'selector' => '#appointment .container',
    'render_callback' => 'vw_computer_repair_pro_customize_partial_vw_computer_repair_pro_appointment_enable',
  ));
}
  $wp_customize->add_setting( 'vw_computer_repair_pro_appointment_youtube_link', array(
  ) );
  $wp_customize->add_control( new VW_Button_Custom_Content( $wp_customize, 'vw_computer_repair_pro_appointment_youtube_link', array(
      'section' => 'vw_computer_repair_pro_appointment',
      'label' => __( 'Youtube Video', 'vw-computer-repair-pro' ),
      'description' => __( 'Watch our youtube video for installing contact form7 plugin and create contact form in WordPress.', 'vw-computer-repair-pro' ),
      /* translators: %s: plugin name. */
      'content' => sprintf( __( 'Check the button %1$sWatch Now%2$s', 'vw-computer-repair-pro' ), '<a href="' . esc_url( VW_COMPUTER_REPAIR_PRO_CONTACT_FORM_LINK  ) . '" class="button button-secondary alignright review_st" target="_blank">', '</a>' ),
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_appointment_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_appointment_settings',
    array(
    'label' => __('Section Background Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_appointment'
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_appointment_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_appointment_bgcolor', array(
    'label' => __('Section Background Color', 'vw-computer-repair-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_appointment',
    'settings' => 'vw_computer_repair_pro_appointment_bgcolor',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_appointment_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'vw_computer_repair_pro_appointment_bgimage',array(
    'label' => __('Section Background Image','vw-computer-repair-pro'),
    'description' => __('Dimension 1600px * 900px','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_appointment',
    'settings' => 'vw_computer_repair_pro_appointment_bgimage'
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_appointment_image_bg', array(
      'default'         => 'vw-scroll',
      'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_appointment_image_bg', array(
      'type'      => 'radio',
      'label'     => __('Choose image option', 'vw-computer-repair-pro'),
      'section'   => 'vw_computer_repair_pro_appointment',
      'choices'   => array(
        'vw-fixed'      => __( 'Fixed', 'vw-computer-repair-pro' ),
        'vw-scroll'      => __( 'Scroll', 'vw-computer-repair-pro' ),                    
  ),));
  $wp_customize->add_setting( 'vw_computer_repair_pro_appointment_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_appointment_content_settings',
    array(
    'label' => __('Section Content Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_appointment'
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_appointment_small_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_appointment_small_heading',array(
    'label' => __('Section Small Heading','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_appointment',
    'setting' => 'vw_computer_repair_pro_appointment_small_heading',
    'type'    => 'text'
  )); 

  $wp_customize->add_setting('vw_computer_repair_pro_appointment_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_appointment_main_heading',array(
    'label' => __('Section Main Heading','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_appointment',
    'setting' => 'vw_computer_repair_pro_appointment_main_heading',
    'type'    => 'text'
  )); 
  $wp_customize->add_setting('vw_computer_repair_pro_appointment_text',array(
      'default'   => '',
      'capability'         => 'edit_theme_options',
      'sanitize_callback'  => 'wp_kses_post'
  ));
  $wp_customize->add_control(new vw_computer_repair_pro_Editor_Control($wp_customize,'vw_computer_repair_pro_appointment_text',array(
      'label' => __('Section Text','vw-computer-repair-pro'),
      'description' => __('Add Section Text','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_appointment',
      'setting'   => 'vw_computer_repair_pro_appointment_text',       
  )));
  $wp_customize->add_setting('vw_computer_repair_pro_appointment_shortcode',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_appointment_shortcode',array(
    'label' => __('Appointment Shortcode','vw-computer-repair-pro'),
    'description' => __('Add Contact Form 7 Shortcode Here','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_appointment',
    'setting' => 'vw_computer_repair_pro_appointment_shortcode',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_appointment_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_appointment_color_settings',
    array(
    'label' => __('Section Content Color And Font Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_appointment'
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_appointment_small_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_appointment_small_heading_color', array(
    'label' => __('Section Small Heading Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_appointment',
    'settings' => 'vw_computer_repair_pro_appointment_small_heading_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_appointment_small_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_appointment_small_heading_font_family', array(
    'section'  => 'vw_computer_repair_pro_appointment',
    'label'    => __('Section Small Heading Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_appointment_small_heading_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_appointment_small_heading_bgcolor', array(
    'label' => __('Section Small Heading Background Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_appointment',
    'settings' => 'vw_computer_repair_pro_appointment_small_heading_bgcolor',
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_appointment_main_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_appointment_main_heading_color', array(
    'label' => __('Section Main Heading Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_appointment',
    'settings' => 'vw_computer_repair_pro_appointment_main_heading_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_appointment_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_appointment_main_heading_font_family', array(
    'section'  => 'vw_computer_repair_pro_appointment',
    'label'    => __('Section Main Heading Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_appointment_text_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_appointment_text_color', array(
    'label' => __('Section Text Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_appointment',
    'settings' => 'vw_computer_repair_pro_appointment_text_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_appointment_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_appointment_text_font_family', array(
    'section'  => 'vw_computer_repair_pro_appointment',
    'label'    => __('Section Text Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_appointment_button_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_appointment_button_color', array(
    'label' => __('Form Button Text Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_appointment',
    'settings' => 'vw_computer_repair_pro_appointment_button_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_appointment_button_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_appointment_button_font_family', array(
    'section'  => 'vw_computer_repair_pro_appointment',
    'label'    => __('Form Button Text Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_appointment_button_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_appointment_button_bgcolor', array(
    'label' => __('Form Button Background Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_appointment',
    'settings' => 'vw_computer_repair_pro_appointment_button_bgcolor',
  )));

  // ----------- working process ------------

  $wp_customize->add_section('vw_computer_repair_pro_working_process',array(
    'title' => __('Working Process','vw-computer-repair-pro'),
    'description' => __('Add Content Here','vw-computer-repair-pro'),
    'panel' => 'vw_computer_repair_pro_panel_id',
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_working_process_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_working_process_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_working_process',
    'choices' => array(
    'Enable' => __('Enable', 'vw-computer-repair-pro'),
    'Disable' => __('Disable', 'vw-computer-repair-pro')
  ),));
if ( isset( $wp_customize->selective_refresh ) ) {
  $wp_customize->selective_refresh->add_partial( 'vw_computer_repair_pro_working_process_enable', array(
    'selector' => '#our-process .container',
    'render_callback' => 'vw_computer_repair_pro_customize_partial_vw_computer_repair_pro_working_process_enable',
  ));
}
  $wp_customize->add_setting( 'vw_computer_repair_pro_working_process_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_working_process_settings',
    array(
    'label' => __('Section Background Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_working_process'
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_working_process_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_working_process_bgcolor', array(
    'label' => __('Section Background Color', 'vw-computer-repair-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_working_process',
    'settings' => 'vw_computer_repair_pro_working_process_bgcolor',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_working_process_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'vw_computer_repair_pro_working_process_bgimage',array(
    'label' => __('Section Background Image','vw-computer-repair-pro'),
    'description' => __('Dimension 1600px * 900px','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_working_process',
    'settings' => 'vw_computer_repair_pro_working_process_bgimage'
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_working_process_image_bg', array(
      'default'         => '',
      'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_working_process_image_bg', array(
      'type'      => 'radio',
      'label'     => __('Choose image option', 'vw-computer-repair-pro'),
      'section'   => 'vw_computer_repair_pro_working_process',
      'choices'   => array(
        'vw-fixed'      => __( 'Fixed', 'vw-computer-repair-pro' ),
        'vw-scroll'      => __( 'Scroll', 'vw-computer-repair-pro' ),                    
  ),));
  $wp_customize->add_setting( 'vw_computer_repair_pro_working_process_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_working_process_content_settings',
    array(
    'label' => __('Section Content Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_working_process'
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_working_process_small_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_working_process_small_heading',array(
    'label' => __('Section Small Heading','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_working_process',
    'setting' => 'vw_computer_repair_pro_working_process_small_heading',
    'type'    => 'text'
  )); 

  $wp_customize->add_setting('vw_computer_repair_pro_working_process_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_working_process_main_heading',array(
    'label' => __('Section Main Heading','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_working_process',
    'setting' => 'vw_computer_repair_pro_working_process_main_heading',
    'type'    => 'text'
  )); 
  $wp_customize->add_setting('vw_computer_repair_pro_working_process_text',array(
      'default'   => '',
      'capability'         => 'edit_theme_options',
      'sanitize_callback'  => 'wp_kses_post'
  ));
  $wp_customize->add_control(new vw_computer_repair_pro_Editor_Control($wp_customize,'vw_computer_repair_pro_working_process_text',array(
      'label' => __('Section Text','vw-computer-repair-pro'),
      'description' => __('Add Section Text','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_working_process',
      'setting'   => 'vw_computer_repair_pro_working_process_text',       
  )));
  $wp_customize->add_setting('vw_computer_repair_pro_working_process_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_working_process_number',array(
    'label' => __('No Of Process To Show','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_working_process',
    'setting' => 'vw_computer_repair_pro_working_process_number',
    'type'    => 'number'
  )); 

  $process_no=get_theme_mod('vw_computer_repair_pro_working_process_number');
  for($i=1;$i<=$process_no;$i++)
  {
    $wp_customize->add_setting( 'vw_computer_repair_pro_working_process_box_settings'.$i,
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_working_process_box_settings'.$i,
      array(
      'label' => __('Process ','vw-computer-repair-pro').$i,
      'section' => 'vw_computer_repair_pro_working_process'
    )));

    $wp_customize->add_setting('vw_computer_repair_pro_working_process_icon'.$i,array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
      new WP_Customize_Image_Control( $wp_customize,'vw_computer_repair_pro_working_process_icon'.$i,array(
      'label' => __('Process Icon ','vw-computer-repair-pro').$i,
      'description' => __('Dimension 60px * 60px','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_working_process',
      'settings' => 'vw_computer_repair_pro_working_process_icon'.$i
    )));
    $wp_customize->add_setting('vw_computer_repair_pro_working_process_icon_image_alt_text'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_working_process_icon_image_alt_text'.$i,array(
      'label' => __('Working Process Image ALT Text ','vw-computer-repair-pro').$i,
      'description' => __('This is image text for image alt attribute.This text is only for coding purpose.','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_working_process',
      'setting' => 'vw_computer_repair_pro_working_process_icon_image_alt_text'.$i,
      'type' => 'text'
    ));
    $wp_customize->add_setting('vw_computer_repair_pro_working_process_title'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_computer_repair_pro_working_process_title'.$i,array(
      'label' => __('Process Title ','vw-computer-repair-pro').$i,
      'section' => 'vw_computer_repair_pro_working_process',
      'setting' => 'vw_computer_repair_pro_working_process_title'.$i,
      'type'    => 'text'
    )); 
    $wp_customize->add_setting('vw_computer_repair_pro_working_process_url'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_computer_repair_pro_working_process_url'.$i,array(
      'label' => __('Process Title Url ','vw-computer-repair-pro').$i,
      'section' => 'vw_computer_repair_pro_working_process',
      'setting' => 'vw_computer_repair_pro_working_process_url'.$i,
      'type'    => 'text'
    ));

    $wp_customize->add_setting('vw_computer_repair_pro_working_process_number'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_computer_repair_pro_working_process_number'.$i,array(
      'label' => __('Process Number ','vw-computer-repair-pro').$i,
      'section' => 'vw_computer_repair_pro_working_process',
      'setting' => 'vw_computer_repair_pro_working_process_number'.$i,
      'type'    => 'text'
    ));
    $wp_customize->add_setting(
    'vw_computer_repair_pro_working_process_arrow'.$i,
      array(
        'default'     => '',
        'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
      )
    );
    $wp_customize->add_control(
      new Vw_Computer_Pro_Fontawesome_Icon_Chooser(
        $wp_customize,
        'vw_computer_repair_pro_working_process_arrow'.$i,
        array(
          'settings'    => 'vw_computer_repair_pro_working_process_arrow'.$i,
          'section'   => 'vw_computer_repair_pro_working_process',
          'type'      => 'icon',
          'label'     => esc_html__( 'Arrow Icon', 'vw-computer-repair-pro' ).$i,
        )
      )
    );
  }
  $wp_customize->add_setting( 'vw_computer_repair_pro_working_process_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_working_process_color_settings',
    array(
    'label' => __('Section Content Color And Font Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_working_process'
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_working_process_small_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_working_process_small_heading_color', array(
    'label' => __('Section Small Heading Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_working_process',
    'settings' => 'vw_computer_repair_pro_working_process_small_heading_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_working_process_small_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_working_process_small_heading_font_family', array(
    'section'  => 'vw_computer_repair_pro_working_process',
    'label'    => __('Section Small Heading Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_working_process_small_heading_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_working_process_small_heading_bgcolor', array(
    'label' => __('Section Small Heading Background Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_working_process',
    'settings' => 'vw_computer_repair_pro_working_process_small_heading_bgcolor',
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_working_process_main_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_working_process_main_heading_color', array(
    'label' => __('Section Main Heading Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_working_process',
    'settings' => 'vw_computer_repair_pro_working_process_main_heading_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_working_process_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_working_process_main_heading_font_family', array(
    'section'  => 'vw_computer_repair_pro_working_process',
    'label'    => __('Section Main Heading Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_working_process_text_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_working_process_text_color', array(
    'label' => __('Section Text Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_working_process',
    'settings' => 'vw_computer_repair_pro_working_process_text_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_working_process_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_working_process_text_font_family', array(
    'section'  => 'vw_computer_repair_pro_working_process',
    'label'    => __('Section Text Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting( 'vw_computer_repair_pro_working_process_title_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_working_process_title_color', array(
    'label' => __('Process Title Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_working_process',
    'settings' => 'vw_computer_repair_pro_working_process_title_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_working_process_title_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_working_process_title_font_family', array(
    'section'  => 'vw_computer_repair_pro_working_process',
    'label'    => __('Process Title Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_working_process_number_and_arrow_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_working_process_number_and_arrow_color', array(
    'label' => __('Process Number And Arrow Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_working_process',
    'settings' => 'vw_computer_repair_pro_working_process_number_and_arrow_color',
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_working_process_number_and_arrow_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_working_process_number_and_arrow_bgcolor', array(
    'label' => __('Process Number And Arrow Background Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_working_process',
    'settings' => 'vw_computer_repair_pro_working_process_number_and_arrow_bgcolor',
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_working_process_border_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_working_process_border_color', array(
    'label' => __('Process Box Border Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_working_process',
    'settings' => 'vw_computer_repair_pro_working_process_border_color',
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_working_process_hover_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_working_process_hover_color', array(
    'label' => __('Process Hover Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_working_process',
    'settings' => 'vw_computer_repair_pro_working_process_hover_color',
  )));

  // ----------- Newsletter ----------

  $wp_customize->add_section('vw_computer_repair_pro_newsletter',array(
    'title' => __('Newsletter','vw-computer-repair-pro'),
    'description' => __('Add Content Here','vw-computer-repair-pro'),
    'panel' => 'vw_computer_repair_pro_panel_id',
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_newsletter_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_newsletter_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_newsletter',
    'choices' => array(
    'Enable' => __('Enable', 'vw-computer-repair-pro'),
    'Disable' => __('Disable', 'vw-computer-repair-pro')
  ),));
if ( isset( $wp_customize->selective_refresh ) ) {
  $wp_customize->selective_refresh->add_partial( 'vw_computer_repair_pro_newsletter_enable', array(
    'selector' => '#newsletter .container',
    'render_callback' => 'vw_computer_repair_pro_customize_partial_vw_computer_repair_pro_newsletter_enable',
  ));
}
  $wp_customize->add_setting( 'vw_computer_repair_pro_newsletter_youtube_link', array(
  ) );
  $wp_customize->add_control( new VW_Button_Custom_Content( $wp_customize, 'vw_computer_repair_pro_newsletter_youtube_link', array(
      'section' => 'vw_computer_repair_pro_newsletter',
      'label' => __( 'Youtube Video', 'vw-computer-repair-pro' ),
      'description' => __( 'Watch our youtube video for installing contact form7 plugin and create contact form in WordPress.', 'vw-computer-repair-pro' ),
       /* translators: %s: plugin name. */
      'content' => sprintf( __( 'Check the button %1$sWatch Now%2$s', 'vw-computer-repair-pro' ), '<a href="' . esc_url( VW_COMPUTER_REPAIR_PRO_CONTACT_FORM_LINK  ) . '" class="button button-secondary alignright review_st" target="_blank">', '</a>' ),
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_newsletter_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_newsletter_settings',
    array(
    'label' => __('Section Background Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_newsletter'
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_newsletter_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_newsletter_bgcolor', array(
    'label' => __('Section Background Color', 'vw-computer-repair-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_newsletter',
    'settings' => 'vw_computer_repair_pro_newsletter_bgcolor',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_newsletter_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'vw_computer_repair_pro_newsletter_bgimage',array(
    'label' => __('Section Background Image','vw-computer-repair-pro'),
    'description' => __('Dimension 1600px * 900px','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_newsletter',
    'settings' => 'vw_computer_repair_pro_newsletter_bgimage'
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_newsletter_image_bg', array(
      'default'         => 'vw-scroll',
      'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_newsletter_image_bg', array(
      'type'      => 'radio',
      'label'     => __('Choose image option', 'vw-computer-repair-pro'),
      'section'   => 'vw_computer_repair_pro_newsletter',
      'choices'   => array(
        'vw-fixed'      => __( 'Fixed', 'vw-computer-repair-pro' ),
        'vw-scroll'      => __( 'Scroll', 'vw-computer-repair-pro' ),                    
  ),));
  $wp_customize->add_setting( 'vw_computer_repair_pro_newsletter_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_newsletter_content_settings',
    array(
    'label' => __('Section Content Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_newsletter'
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_newsletter_small_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_newsletter_small_heading',array(
    'label' => __('Section Small Heading','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_newsletter',
    'setting' => 'vw_computer_repair_pro_newsletter_small_heading',
    'type'    => 'text'
  )); 

  $wp_customize->add_setting('vw_computer_repair_pro_newsletter_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_newsletter_main_heading',array(
    'label' => __('Section Main Heading','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_newsletter',
    'setting' => 'vw_computer_repair_pro_newsletter_main_heading',
    'type'    => 'text'
  )); 
  $wp_customize->add_setting('vw_computer_repair_pro_newsletter_text',array(
      'default'   => '',
      'capability'         => 'edit_theme_options',
      'sanitize_callback'  => 'wp_kses_post'
  ));
  $wp_customize->add_control(new vw_computer_repair_pro_Editor_Control($wp_customize,'vw_computer_repair_pro_newsletter_text',array(
      'label' => __('Section Text','vw-computer-repair-pro'),
      'description' => __('Add Section Text','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_newsletter',
      'setting'   => 'vw_computer_repair_pro_newsletter_text',       
  )));
  $wp_customize->add_setting('vw_computer_repair_pro_newsletter_shortcode',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_newsletter_shortcode',array(
    'label' => __('Newsletter Shortcode','vw-computer-repair-pro'),
    'description' => __('Add Contact Form 7 Shortcode Here','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_newsletter',
    'setting' => 'vw_computer_repair_pro_newsletter_shortcode',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_newsletter_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_newsletter_color_settings',
    array(
    'label' => __('Section Content Color And Font Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_newsletter'
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_newsletter_small_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_newsletter_small_heading_color', array(
    'label' => __('Section Small Heading Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_newsletter',
    'settings' => 'vw_computer_repair_pro_newsletter_small_heading_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_newsletter_small_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_newsletter_small_heading_font_family', array(
    'section'  => 'vw_computer_repair_pro_newsletter',
    'label'    => __('Section Small Heading Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_newsletter_small_heading_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_newsletter_small_heading_bgcolor', array(
    'label' => __('Section Small Heading Background Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_newsletter',
    'settings' => 'vw_computer_repair_pro_newsletter_small_heading_bgcolor',
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_newsletter_main_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_newsletter_main_heading_color', array(
    'label' => __('Section Main Heading Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_newsletter',
    'settings' => 'vw_computer_repair_pro_newsletter_main_heading_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_newsletter_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_newsletter_main_heading_font_family', array(
    'section'  => 'vw_computer_repair_pro_newsletter',
    'label'    => __('Section Main Heading Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_newsletter_text_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_newsletter_text_color', array(
    'label' => __('Section Text Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_newsletter',
    'settings' => 'vw_computer_repair_pro_newsletter_text_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_newsletter_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_newsletter_text_font_family', array(
    'section'  => 'vw_computer_repair_pro_newsletter',
    'label'    => __('Section Text Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_newsletter_button_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_newsletter_button_color', array(
    'label' => __('Section Button Text Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_newsletter',
    'settings' => 'vw_computer_repair_pro_newsletter_button_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_newsletter_button_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_newsletter_button_font_family', array(
    'section'  => 'vw_computer_repair_pro_newsletter',
    'label'    => __('Section Button Text Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_newsletter_button_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_newsletter_button_bgcolor', array(
    'label' => __('Section Button Background Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_newsletter',
    'settings' => 'vw_computer_repair_pro_newsletter_button_bgcolor',
  )));

  // ---------- Latest News -------------

  $wp_customize->add_section('vw_computer_repair_pro_latest_news',array(
    'title' => __('Latest News','vw-computer-repair-pro'),
    'description' => __('Add Content Here','vw-computer-repair-pro'),
    'panel' => 'vw_computer_repair_pro_panel_id',
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_latest_news_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_latest_news_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_latest_news',
    'choices' => array(
    'Enable' => __('Enable', 'vw-computer-repair-pro'),
    'Disable' => __('Disable', 'vw-computer-repair-pro')
  ),));
if ( isset( $wp_customize->selective_refresh ) ) {
  $wp_customize->selective_refresh->add_partial( 'vw_computer_repair_pro_latest_news_enable', array(
    'selector' => '#latest-news .container',
    'render_callback' => 'vw_computer_repair_pro_customize_partial_vw_computer_repair_pro_latest_news_enable',
  ));
}
  $wp_customize->add_setting( 'vw_computer_repair_pro_blog_youtube_link', array(
  ) );
  $wp_customize->add_control( new VW_Button_Custom_Content( $wp_customize, 'vw_computer_repair_pro_blog_youtube_link', array(
      'section' => 'vw_computer_repair_pro_latest_news',
      'label' => __( 'Youtube Video', 'vw-computer-repair-pro' ),
      'description' => __( 'Watch our youtube video for How to Create a New Post in WordPress.', 'vw-computer-repair-pro' ),
       /* translators: %s: plugin name. */
      'content' => sprintf( __( 'Check the button %1$sWatch Now%2$s', 'vw-computer-repair-pro' ), '<a href="' . esc_url( VW_COMPUTER_REPAIR_PRO_CREATE_POST_LINK  ) . '" class="button button-secondary alignright review_st" target="_blank">', '</a>' ),
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_latest_news_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_latest_news_settings',
    array(
    'label' => __('Section Background Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_latest_news'
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_latest_news_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_latest_news_bgcolor', array(
    'label' => __('Section Background Color', 'vw-computer-repair-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_latest_news',
    'settings' => 'vw_computer_repair_pro_latest_news_bgcolor',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_latest_news_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'vw_computer_repair_pro_latest_news_bgimage',array(
    'label' => __('Section Background Image','vw-computer-repair-pro'),
    'description' => __('Dimension 1600px * 900px','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_latest_news',
    'settings' => 'vw_computer_repair_pro_latest_news_bgimage'
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_latest_news_image_bg', array(
      'default'         => '',
      'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_latest_news_image_bg', array(
      'type'      => 'radio',
      'label'     => __('Choose image option', 'vw-computer-repair-pro'),
      'section'   => 'vw_computer_repair_pro_latest_news',
      'choices'   => array(
        'vw-fixed'      => __( 'Fixed', 'vw-computer-repair-pro' ),
        'vw-scroll'      => __( 'Scroll', 'vw-computer-repair-pro' ),                    
  ),));
  $wp_customize->add_setting( 'vw_computer_repair_pro_latest_news_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_latest_news_content_settings',
    array(
    'label' => __('Section Content Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_latest_news'
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_latest_news_small_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_latest_news_small_heading',array(
    'label' => __('Section Small Heading','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_latest_news',
    'setting' => 'vw_computer_repair_pro_latest_news_small_heading',
    'type'    => 'text'
  )); 

  $wp_customize->add_setting('vw_computer_repair_pro_latest_news_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_latest_news_main_heading',array(
    'label' => __('Section Main Heading','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_latest_news',
    'setting' => 'vw_computer_repair_pro_latest_news_main_heading',
    'type'    => 'text'
  )); 
  $wp_customize->add_setting('vw_computer_repair_pro_latest_news_text',array(
      'default'   => '',
      'capability'         => 'edit_theme_options',
      'sanitize_callback'  => 'wp_kses_post'
  ));
  $wp_customize->add_control(new vw_computer_repair_pro_Editor_Control($wp_customize,'vw_computer_repair_pro_latest_news_text',array(
      'label' => __('Section Text','vw-computer-repair-pro'),
      'description' => __('Add Section Text','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_latest_news',
      'setting'   => 'vw_computer_repair_pro_latest_news_text',       
  )));
  $wp_customize->add_setting('vw_computer_repair_pro_latest_news_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_latest_news_number',array(
    'label' => __('No Of Latest News To Show','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_latest_news',
    'setting' => 'vw_computer_repair_pro_latest_news_number',
    'type'    => 'number'
  ));
  $post_count = get_theme_mod('vw_computer_repair_pro_latest_news_number');
    for($i=1; $i<=$post_count; $i++) {
    $wp_customize->add_setting('vw_computer_repair_pro_post_image_alt_text'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_post_image_alt_text'.$i,array(
      'label' => __('Post Image ALT Text ','vw-computer-repair-pro').$i,
      'description' => __('This is image text for image alt attribute.This text is only for coding purpose.','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_latest_news',
      'setting' => 'vw_computer_repair_pro_post_image_alt_text'.$i,
      'type' => 'text'
    ));
  }
  $wp_customize->add_setting('vw_computer_repair_pro_latest_news_button_title',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_latest_news_button_title',array(
    'label' => __('Section Button Title','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_latest_news',
    'setting' => 'vw_computer_repair_pro_latest_news_button_title',
    'type'    => 'text'
  )); 

  $wp_customize->add_setting( 'vw_computer_repair_pro_latest_news_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_latest_news_color_settings',
    array(
    'label' => __('Section Content Color And Font Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_latest_news'
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_latest_news_slider_loop',
     array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
  ));
  $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_latest_news_slider_loop',
   array(
      'label' => esc_html__( 'Slider Loop', 'vw-computer-repair-pro' ),
      'section' => 'vw_computer_repair_pro_latest_news'
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_latest_news_small_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_latest_news_small_heading_color', array(
    'label' => __('Section Small Heading Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_latest_news',
    'settings' => 'vw_computer_repair_pro_latest_news_small_heading_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_latest_news_small_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_latest_news_small_heading_font_family', array(
    'section'  => 'vw_computer_repair_pro_latest_news',
    'label'    => __('Section Small Heading Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_latest_news_small_heading_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_latest_news_small_heading_bgcolor', array(
    'label' => __('Section Small Heading Background Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_latest_news',
    'settings' => 'vw_computer_repair_pro_latest_news_small_heading_bgcolor',
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_latest_news_main_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_latest_news_main_heading_color', array(
    'label' => __('Section Main Heading Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_latest_news',
    'settings' => 'vw_computer_repair_pro_latest_news_main_heading_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_latest_news_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_latest_news_main_heading_font_family', array(
    'section'  => 'vw_computer_repair_pro_latest_news',
    'label'    => __('Section Main Heading Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_latest_news_text_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_latest_news_text_color', array(
    'label' => __('Section Text Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_latest_news',
    'settings' => 'vw_computer_repair_pro_latest_news_text_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_latest_news_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_latest_news_text_font_family', array(
    'section'  => 'vw_computer_repair_pro_latest_news',
    'label'    => __('Section Text Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_latest_news_title_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_latest_news_title_color', array(
    'label' => __('News Title Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_latest_news',
    'settings' => 'vw_computer_repair_pro_latest_news_title_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_latest_news_title_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_latest_news_title_font_family', array(
    'section'  => 'vw_computer_repair_pro_latest_news',
    'label'    => __('News Title Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_latest_news_meta_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_latest_news_meta_color', array(
    'label' => __('News Meta Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_latest_news',
    'settings' => 'vw_computer_repair_pro_latest_news_meta_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_latest_news_meta_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_latest_news_meta_font_family', array(
    'section'  => 'vw_computer_repair_pro_latest_news',
    'label'    => __('News Meta Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_latest_news_button_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_latest_news_button_color', array(
    'label' => __('News Button Text Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_latest_news',
    'settings' => 'vw_computer_repair_pro_latest_news_button_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_latest_news_button_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_latest_news_button_font_family', array(
    'section'  => 'vw_computer_repair_pro_latest_news',
    'label'    => __('News Button Text Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_latest_news_button_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_latest_news_button_bgcolor', array(
    'label' => __('News Button Background Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_latest_news',
    'settings' => 'vw_computer_repair_pro_latest_news_button_bgcolor',
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_latest_news_date_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_latest_news_date_color', array(
    'label' => __('News Date Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_latest_news',
    'settings' => 'vw_computer_repair_pro_latest_news_date_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_latest_news_date_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_latest_news_date_font_family', array(
    'section'  => 'vw_computer_repair_pro_latest_news',
    'label'    => __('News Date Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_latest_news_date_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_latest_news_date_bgcolor', array(
    'label' => __('News Date Background Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_latest_news',
    'settings' => 'vw_computer_repair_pro_latest_news_date_bgcolor',
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_latest_news_content_border_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_latest_news_content_border_color', array(
    'label' => __('News Content Border Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_latest_news',
    'settings' => 'vw_computer_repair_pro_latest_news_content_border_color',
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_latest_news_content_hover_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_latest_news_content_hover_color', array(
    'label' => __('News Content Hover Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_latest_news',
    'settings' => 'vw_computer_repair_pro_latest_news_content_hover_color',
  )));

  // ----------- Our Partners -------------

  $wp_customize->add_section('vw_computer_repair_pro_our_partners',array(
    'title' => __('Our Partners','vw-computer-repair-pro'),
    'description' => __('Add Content Here','vw-computer-repair-pro'),
    'panel' => 'vw_computer_repair_pro_panel_id',
  ));
  $wp_customize->add_setting( 'vw_computer_repair_pro_our_partners_enable',
    array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
  ));
  $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_our_partners_enable',
   array(
      'label' => esc_html__( 'Enable/Disable Section', 'vw-computer-repair-pro' ),
      'section' => 'vw_computer_repair_pro_our_partners'
  )));
if ( isset( $wp_customize->selective_refresh ) ) {
  $wp_customize->selective_refresh->add_partial( 'vw_computer_repair_pro_our_partners_enable', array(
    'selector' => '.our-partners',
    'render_callback' => 'vw_computer_repair_pro_customize_partial_vw_computer_repair_pro_our_partners_enable',
  ));
}
  $wp_customize->add_setting('vw_computer_repair_pro_our_partners_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_our_partners_number',array(
    'label' => __('No Of Partners To Show','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_our_partners',
    'setting' => 'vw_computer_repair_pro_our_partners_number',
    'type'    => 'number'
  )); 

  $partner_no=get_theme_mod('vw_computer_repair_pro_our_partners_number');
  for($i=1;$i<=$partner_no;$i++)
  {
    $wp_customize->add_setting('vw_computer_repair_pro_our_partners_image'.$i,array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
      new WP_Customize_Image_Control( $wp_customize,'vw_computer_repair_pro_our_partners_image'.$i,array(
      'label' => __('Partner Image ','vw-computer-repair-pro').$i,
      'description' => __('Dimension 160px * 150px','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_our_partners',
      'settings' => 'vw_computer_repair_pro_our_partners_image'.$i
    )));
    $wp_customize->add_setting('vw_computer_repair_pro_partner_image_url'.$i,array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_partner_image_url'.$i,array(
      'label' => __('Partner Image Url','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_our_partners',
      'setting' => 'vw_computer_repair_pro_partner_image_url'.$i,
      'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_computer_repair_pro_partner_image_alt_text'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_partner_image_alt_text'.$i,array(
      'label' => __('Partner Image ALT Text ','vw-computer-repair-pro').$i,
      'description' => __('This is image text for image alt attribute.This text is only for coding purpose.','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_our_partners',
      'setting' => 'vw_computer_repair_pro_partner_image_alt_text'.$i,
      'type' => 'text'
    ));
  }

  $wp_customize->add_setting( 'vw_computer_repair_pro_our_partners_slider_loop',
     array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
  ));
  $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_our_partners_slider_loop',
   array(
      'label' => esc_html__( 'Slider Loop', 'vw-computer-repair-pro' ),
      'section' => 'vw_computer_repair_pro_our_partners'
  )));

  // --------------- General Settings -------------

  $wp_customize->add_section('vw_computer_repair_pro_products_sidebar_settings',array(
    'title' => __('General Settings','vw-computer-repair-pro'),
    'description'   => __('Change Your Setting','vw-computer-repair-pro'),
    'priority'  => null,
    'panel' => 'vw_computer_repair_pro_panel_id',
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_products_shop_page_sidebar',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
   ));
 
  $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_products_shop_page_sidebar',
     array(
        'label' => esc_html__( 'Hide Shop Page Sidebar', 'vw-computer-repair-pro' ),
        'section' => 'vw_computer_repair_pro_products_sidebar_settings'
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_products_single_page_sidebar',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
   ));
 
  $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_products_single_page_sidebar',
     array(
        'label' => esc_html__( 'Hide Product Page Sidebar', 'vw-computer-repair-pro' ),
        'section' => 'vw_computer_repair_pro_products_sidebar_settings'
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_products_sidebar_settings_spinner_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_products_sidebar_settings_spinner_settings',
    array(
    'label' => __('Spinner Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_products_sidebar_settings'
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_products_spinner_enable',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
  ));
  $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_products_spinner_enable',
     array(
      'label' => esc_html__( 'Enable/Disable Spinner', 'vw-computer-repair-pro' ),
      'section' => 'vw_computer_repair_pro_products_sidebar_settings'
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_products_spinner_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_products_spinner_bgcolor', array(
    'label' => __('Spinner Background Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_products_sidebar_settings',
    'settings' => 'vw_computer_repair_pro_products_spinner_bgcolor',
  )));

  /* --------- Spinner Opacity  ----------- */

  $wp_customize->add_setting('vw_computer_repair_pro_spinner_opacity_color',array(
      'default'              => '1',
      'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));

  $wp_customize->add_control( 'vw_computer_repair_pro_spinner_opacity_color', array(
    'label'       => esc_html__( 'Slider Image Opacity','vw-computer-repair-pro' ),
    'section'     => 'vw_computer_repair_pro_products_sidebar_settings',
    'type'        => 'select',
    'settings'    => 'vw_computer_repair_pro_spinner_opacity_color',
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
  $wp_customize->add_setting( 'computer_repair_pro_general_settings_scroll_top',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_pro_general_settings_scroll_top',
    array(
    'label' => __('Scroll Top Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_products_sidebar_settings'
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_footer_widget_section_show_scroll_top',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
  ));
  $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_footer_widget_section_show_scroll_top',
         array(
            'label' => esc_html__( 'Show or Hide Scroll Top', 'vw-computer-repair-pro' ),
            'section' => 'vw_computer_repair_pro_products_sidebar_settings'
  )));
  $wp_customize->add_setting( 'computer_repair_pro_general_scroll_top_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_pro_general_scroll_top_bgcolor', array(
    'label' => __('Scroll Top Background Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_products_sidebar_settings',
    'settings' => 'computer_repair_pro_general_scroll_top_bgcolor',
  )));
  $wp_customize->add_setting( 'computer_repair_pro_general_scroll_top_hover_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_pro_general_scroll_top_hover_bgcolor', array(
    'label' => __('Scroll Top Hover Background Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_products_sidebar_settings',
    'settings' => 'computer_repair_pro_general_scroll_top_hover_bgcolor',
  )));
  $wp_customize->add_setting('computer_repair_pro_scroll_top_layout',array(
        'default' => __('Left','vw-computer-repair-pro'),
        'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));
  $wp_customize->add_control(new vw_computer_repair_pro_Image_Radio_Control($wp_customize, 'computer_repair_pro_scroll_top_layout', array(
        'type' => 'select',
        'label' => __('Scroll Top Layouts','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_products_sidebar_settings',
        'choices' => array(
            'Left' => get_template_directory_uri().'/assets/images/header-layout1.png',
            'Center' => get_template_directory_uri().'/assets/images/header-layout2.png',
            'Right' => get_template_directory_uri().'/assets/images/header-layout3.png',
  ))));
   $wp_customize->add_setting('vw_computer_repair_pro_scroll_top_icon_width',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_scroll_top_icon_width',array(
        'label' => __('Scroll Top Icon Width','vw-computer-repair-pro'),
        'section'   => 'vw_computer_repair_pro_products_sidebar_settings',
        'type'      => 'number'
    ));
    $wp_customize->add_setting('vw_computer_repair_pro_scroll_top_icon_height',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_scroll_top_icon_height',array(
        'label' => __('Scroll Top Icon Height','vw-computer-repair-pro'),
        'section'   => 'vw_computer_repair_pro_products_sidebar_settings',
        'type'      => 'number'
    ));
    $wp_customize->add_setting('vw_computer_repair_pro_scroll_top_icon_border_radius',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_scroll_top_icon_border_radius',array(
        'label' => __('Scroll Top Icon Border Radius','vw-computer-repair-pro'),
        'section'   => 'vw_computer_repair_pro_products_sidebar_settings',
        'type'      => 'number'
    ));
  $wp_customize->add_setting( 'vw_computer_repair_pro_site_frame_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_site_frame_settings',
    array(
    'label' => __('Site Frame Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_products_sidebar_settings'
  )));
  $wp_customize->add_setting('vw_computer_repair_pro_site_frame_width',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_textarea_field',
  ));
  $wp_customize->add_control('vw_computer_repair_pro_site_frame_width',array(
      'label' => __('Frame Width','vw-computer-repair-pro'),
      'section'   => 'vw_computer_repair_pro_products_sidebar_settings',
      'type'      => 'number'
  ));

  $wp_customize->add_setting('vw_computer_repair_pro_site_frame_type',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_site_frame_type',array(
        'type' => 'select',
        'label' => __('Frame Type','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_products_sidebar_settings',
        'choices' => array(
            '' => '',
            'solid' => __('Solid','vw-computer-repair-pro'),
            'dashed' => __('Dashed','vw-computer-repair-pro'),
            'double' => __('Double','vw-computer-repair-pro'),
            'groove' => __('Groove','vw-computer-repair-pro'),
            'ridge' => __('Ridge','vw-computer-repair-pro'),
            'inset' => __('Inset','vw-computer-repair-pro')
        ),  
  ) );
  $wp_customize->add_setting( 'vw_computer_repair_pro_site_frame_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_site_frame_color', array(
      'label' => __('Frame Color', 'vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_products_sidebar_settings',
      'settings' => 'vw_computer_repair_pro_site_frame_color',
  )));
  // ------------- Button Settings ----------

  $wp_customize->add_setting( 'vw_computer_repair_pro_site_button_setting',array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_site_button_setting',
      array(
      'label' => __('Button Settings','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_products_sidebar_settings'
  )));
  $wp_customize->add_setting('vw_computer_repair_pro_button_setting_radius',array(
      'default'=> '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_computer_repair_pro_button_setting_radius',array(
      'label' => __('Border Radius','vw-computer-repair-pro'),
      'section'=> 'vw_computer_repair_pro_products_sidebar_settings',
      'type'=> 'text'
  ));

  $wp_customize->add_setting('vw_computer_repair_pro_button_top_bottom_padding',array(
      'default'=> '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_computer_repair_pro_button_top_bottom_padding',array(
      'label' => __('Button Top and Bottom Padding','vw-computer-repair-pro'),
      'section'=> 'vw_computer_repair_pro_products_sidebar_settings',
      'type'=> 'number'
  ));

  $wp_customize->add_setting('vw_computer_repair_pro_button_left_right_padding',array(
      'default'=> '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_computer_repair_pro_button_left_right_padding',array(
      'label' => __('Button Left and Right Padding','vw-computer-repair-pro'),
      'section'=> 'vw_computer_repair_pro_products_sidebar_settings',
      'type'=> 'number'
  ));

  // ------------ Breadcrumb -----------

  $wp_customize->add_setting( 'vw_computer_repair_pro_site_breadcrumb_setting',array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_site_breadcrumb_setting',
      array(
      'label' => __('Breadcrumb Settings','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_products_sidebar_settings'
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_site_breadcrumb_enable',array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
  ));  
  $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_site_breadcrumb_enable',array(
        'label' => esc_html__( 'Show / Hide Breadcrumb','vw-computer-repair-pro' ),
        'section' => 'vw_computer_repair_pro_products_sidebar_settings'
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_site_breadcrumb_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_site_breadcrumb_color', array(
      'label' => __('Breadcrumb Color', 'vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_products_sidebar_settings',
      'settings' => 'vw_computer_repair_pro_site_breadcrumb_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_site_breadcrumb_font_size',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_textarea_field',
  ));
  $wp_customize->add_control('vw_computer_repair_pro_site_breadcrumb_font_size',array(
      'label' => __('Breadcrumb Font Size','vw-computer-repair-pro'),
      'section'   => 'vw_computer_repair_pro_products_sidebar_settings',
      'type'      => 'number'
  ));
   // ----------- Social Icon Setting -------------

    $wp_customize->add_setting( 'vw_computer_repair_pro_social_icon_setting',array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_social_icon_setting',
        array(
        'label' => __('Social Icon Settings','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_products_sidebar_settings'
    )));

    $wp_customize->add_setting('vw_computer_repair_pro_social_icon_width',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_social_icon_width',array(
        'label' => __('Social Icon Width','vw-computer-repair-pro'),
        'section'   => 'vw_computer_repair_pro_products_sidebar_settings',
        'type'      => 'number'
    ));

    $wp_customize->add_setting('vw_computer_repair_pro_social_icon_height',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_social_icon_height',array(
        'label' => __('Social Icon Height','vw-computer-repair-pro'),
        'section'   => 'vw_computer_repair_pro_products_sidebar_settings',
        'type'      => 'number'
    ));

    $wp_customize->add_setting('vw_computer_repair_pro_social_icon_border_radius',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_social_icon_border_radius',array(
        'label' => __('Social Icon Border Radius','vw-computer-repair-pro'),
        'section'   => 'vw_computer_repair_pro_products_sidebar_settings',
        'type'      => 'number'
    ));

    $wp_customize->add_setting('vw_computer_repair_pro_social_icon_padding',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_social_icon_padding',array(
        'label' => __('Social Icon Padding','vw-computer-repair-pro'),
        'section'   => 'vw_computer_repair_pro_products_sidebar_settings',
        'type'      => 'number'
    ));

    $wp_customize->add_setting( 'vw_computer_repair_pro_social_icon_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_social_icon_bgcolor', array(
        'label' => __('Social Icon Background Color', 'vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_products_sidebar_settings',
        'settings' => 'vw_computer_repair_pro_social_icon_bgcolor',
    )));
     // ------------- Search Padding Settings ----------

    $wp_customize->add_setting( 'vw_computer_repair_pro_Search_setting',array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_Search_setting',
        array(
        'label' => __('Search Settings','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_products_sidebar_settings'
    )));

    $wp_customize->add_setting( 'vw_computer_repair_pro_header_search_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_header_search_color', array(
    'label' => __('Search Icon Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_products_sidebar_settings',
    'settings' => 'vw_computer_repair_pro_header_search_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_header_search_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_header_search_font_size',array(
    'label' => __('Font Size','vw-computer-repair-pro'),
    'description' => __('Add font size in px','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_products_sidebar_settings',
    'setting' => 'vw_computer_repair_pro_header_search_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_header_search_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_header_search_bgcolor', array(
    'label' => __('Search Icon Background Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_products_sidebar_settings',
    'settings' => 'vw_computer_repair_pro_header_search_bgcolor',
  )));

    $wp_customize->add_setting('vw_computer_repair_pro_Search_top_bottom_padding',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_Search_top_bottom_padding',array(
        'label' => __('Search Padding Top and Bottom','vw-computer-repair-pro'),
        'section'   => 'vw_computer_repair_pro_products_sidebar_settings',
        'type'      => 'number'
    ));

    $wp_customize->add_setting('vw_computer_repair_pro_Search_left_right_padding',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_Search_left_right_padding',array(
        'label' => __('Search Padding Left and Right','vw-computer-repair-pro'),
        'section'   => 'vw_computer_repair_pro_products_sidebar_settings',
        'type'      => 'number'
    ));

    $wp_customize->add_setting('vw_computer_repair_pro_Search_setting_radius',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_Search_setting_radius',array(
        'label' => __('Search Border Radius','vw-computer-repair-pro'),
        'section'   => 'vw_computer_repair_pro_products_sidebar_settings',
        'type'      => 'number'
    ));
     $wp_customize->add_setting('vw_computer_repair_pro_header_search_placeholder_text',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_header_search_placeholder_text',array(
        'label' => __('Search placeholder Text','vw-computer-repair-pro'),
        'section'   => 'vw_computer_repair_pro_products_sidebar_settings',
        'type'      => 'text'
    ));
  // --------------- Post General Settings ---------------

  $wp_customize->add_section('vw_computer_repair_pro_post_general_settings',array(
    'title' => __('Post Settings','vw-computer-repair-pro'),
    'description'   => __('Change Your Setting','vw-computer-repair-pro'),
    'priority'  => null,
    'panel' => 'vw_computer_repair_pro_panel_id',
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_post_general_settings_post_date',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
  ));
  $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_post_general_settings_post_date',
     array(
        'label' => esc_html__( 'Show or Hide Post Date', 'vw-computer-repair-pro' ),
        'section' => 'vw_computer_repair_pro_post_general_settings'
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_post_general_settings_post_comments',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
  ));
 
  $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_post_general_settings_post_comments',
     array(
        'label' => esc_html__( 'Show or Hide Comments', 'vw-computer-repair-pro' ),
        'section' => 'vw_computer_repair_pro_post_general_settings'
     )
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_post_general_settings_post_author',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
   )
  );
 
  $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_post_general_settings_post_author',
     array(
        'label' => esc_html__( 'Show or Hide Author', 'vw-computer-repair-pro' ),
        'section' => 'vw_computer_repair_pro_post_general_settings'
     )
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_post_general_settings_post_share',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
   )
  );
 
  $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_post_general_settings_post_share',
     array(
        'label' => esc_html__( 'Show or Hide Share Icons', 'vw-computer-repair-pro' ),
        'section' => 'vw_computer_repair_pro_post_general_settings'
     )
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_post_general_settings_post_share_facebook',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
   )
  );
 
  $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_post_general_settings_post_share_facebook',
     array(
        'label' => esc_html__( 'Post Share Facebook', 'vw-computer-repair-pro' ),
        'section' => 'vw_computer_repair_pro_post_general_settings'
     )
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_post_general_settings_post_share_linkedin',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
   )
  );
 
  $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_post_general_settings_post_share_linkedin',
     array(
        'label' => esc_html__( 'Post Share Linkedin', 'vw-computer-repair-pro' ),
        'section' => 'vw_computer_repair_pro_post_general_settings'
     )
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_post_general_settings_post_share_googleplus',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
   )
  );
 
  $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_post_general_settings_post_share_googleplus',
     array(
        'label' => esc_html__( 'Post Share Google Plus', 'vw-computer-repair-pro' ),
        'section' => 'vw_computer_repair_pro_post_general_settings'
     )
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_post_general_settings_post_share_twitter',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
   )
  );
 
  $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_post_general_settings_post_share_twitter',
     array(
        'label' => esc_html__( 'Post Share Twitter', 'vw-computer-repair-pro' ),
        'section' => 'vw_computer_repair_pro_post_general_settings'
     )
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_post_general_settings_post_tags',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
   )
  );
 
  $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_post_general_settings_post_tags',
     array(
        'label' => esc_html__( 'Show or Hide Tags', 'vw-computer-repair-pro' ),
        'section' => 'vw_computer_repair_pro_post_general_settings'
     )
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_post_general_settings_post_category',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
   )
  );
 
  $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_post_general_settings_post_category',
     array(
        'label' => esc_html__( 'Show or Hide Category', 'vw-computer-repair-pro' ),
        'section' => 'vw_computer_repair_pro_post_general_settings'
     )
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_post_general_settings_post_sidebar',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
   )
  );
 
  $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_post_general_settings_post_sidebar',
     array(
        'label' => esc_html__( 'Show or Hide Sidebar', 'vw-computer-repair-pro' ),
        'section' => 'vw_computer_repair_pro_post_general_settings'
     )
  ));
   //Page Title layout
  $wp_customize->add_setting('vw_computer_repair_pro_page_title_content_option',array(
        'default' => __('Left','vw-computer-repair-pro'),
        'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));
  $wp_customize->add_control(new vw_computer_repair_pro_Image_Radio_Control($wp_customize, 'vw_computer_repair_pro_page_title_content_option', array(
        'type' => 'select',
        'label' => __('Page Title Layouts','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_post_general_settings',
        'choices' => array(
            'Left' => get_template_directory_uri() . '/assets/images/header-layout1.png',
            'Center' => get_template_directory_uri() . '/assets/images/header-layout2.png',
            'Right' => get_template_directory_uri() . '/assets/images/header-layout3.png',
  ))));
   //Blog layout
  $wp_customize->add_setting('vw_computer_repair_pro_single_blog_option',array(
        'default' => __('two_col','vw-computer-repair-pro'),
        'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_single_blog_option',array(
        'type' => 'select',
        'label' => __('Post Layout','vw-computer-repair-pro'),
        'description' => __('Here you can change the Posts layout for Blog Pages. ','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_post_general_settings',
        'choices' => array(
            'one_col' => __('One Columns','vw-computer-repair-pro'),
            'two_col' => __('Two Columns','vw-computer-repair-pro'),
            'three_col' => __('Three Column','vw-computer-repair-pro')
        ),
  ) );
  $wp_customize->add_setting('vw_computer_repair_pro_post_content_blog',array(
        'default' => __('Excerpt Content','vw-computer-repair-pro'),
          'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_post_content_blog',array(
          'type' => 'radio',
          'label' => __('Post Content Type','vw-computer-repair-pro'),
          'section' => 'vw_computer_repair_pro_post_general_settings',
          'choices' => array(
              'No Content' => __('No Content','vw-computer-repair-pro'),
              'Full Content' => __('Full Content','vw-computer-repair-pro'),
              'Excerpt Content' => __('Excerpt Content','vw-computer-repair-pro'),
          ),
  ) );
  $wp_customize->add_setting( 'vw_computer_repair_pro_excerpt_length', array(
      'default'              => 25,
      'sanitize_callback' => 'sanitize_text_field'
  ) );
  $wp_customize->add_control( 'vw_computer_repair_pro_excerpt_length', array(
      'label' => esc_html__( 'Post Excerpt Length','vw-computer-repair-pro' ),
      'section'  => 'vw_computer_repair_pro_post_general_settings',
      'type'  => 'number',
      'settings' => 'vw_computer_repair_pro_excerpt_length',
      'input_attrs' => array(
        'step'             => 1,
        'min'              => 0,
        'max'              => 50,
      ),
  ) );

  $wp_customize->add_setting( 'vw_computer_repair_pro_button_excerpt_suffix', array(
      'default'   => '[...]',
      'sanitize_callback' => 'sanitize_text_field'
  ) );
  $wp_customize->add_control( 'vw_computer_repair_pro_button_excerpt_suffix', array(
      'label'       => esc_html__( 'Excerpt Suffix','vw-computer-repair-pro' ),
      'section'     => 'vw_computer_repair_pro_post_general_settings',
      'type'        => 'text',
      'settings' => 'vw_computer_repair_pro_button_excerpt_suffix'
  ) );
  // Featured iMage setting
  $wp_customize->add_setting( 'vw_computer_repair_pro_feature_image_settings',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_feature_image_settings',
  array(
    'label' => __('Featured Image Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_post_general_settings'
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_blog_featured_image_enable',
       array(
          'default' => 1,
          'transport' => 'refresh',
          'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
    ));
    $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_blog_featured_image_enable',
         array(
            'label' => esc_html__( 'Hide/show featured image', 'vw-computer-repair-pro' ),
            'section' => 'vw_computer_repair_pro_post_general_settings'
    )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_blog_featured_image_border_radius', array(
      'default'              => "",
      'type'                 => 'theme_mod',
      'transport'        => 'refresh',
      'sanitize_callback'    => 'absint',
      'sanitize_js_callback' => 'absint',
  ) );
  $wp_customize->add_control( 'vw_computer_repair_pro_blog_featured_image_border_radius', array(
      'label'       => esc_html__( 'Featured Image Border Radius','vw-computer-repair-pro' ),
      'section'     => 'vw_computer_repair_pro_post_general_settings',
      'type'        => 'range',
      'input_attrs' => array(
        'step'             => 1,
        'min'              => 1,
        'max'              => 50,
  ),) );
  $wp_customize->add_setting('vw_computer_repair_pro_blog_featured_image_box_shadow',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_blog_featured_image_box_shadow',array(
        'label' => __('Featured Image Box Shadow','vw-computer-repair-pro'),
        'section'   => 'vw_computer_repair_pro_post_general_settings',
        'type'      => 'text'
    )); 

    $wp_customize->add_setting('vw_computer_repair_pro_blog_category_prev_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_blog_category_prev_title',array(
        'label' => __('Previous Title','vw-computer-repair-pro'),
        'section'   => 'vw_computer_repair_pro_post_general_settings',
        'type'      => 'text'
    ));

    $wp_customize->add_setting('vw_computer_repair_pro_blog_category_next_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_blog_category_next_title',array(
        'label' => __('Next Title','vw-computer-repair-pro'),
        'section'   => 'vw_computer_repair_pro_post_general_settings',
        'type'      => 'text'
    ));
    $wp_customize->add_setting( 'vw_computer_repair_pro_related_posts',array(
      'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
    ));  
    $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_related_posts',array(
        'label' => esc_html__( 'Enable / Disable Related Posts','vw-computer-repair-pro' ),
        'section' => 'vw_computer_repair_pro_post_general_settings'
    )));

    $wp_customize->add_setting('vw_computer_repair_pro_related_posts_title',array(
       'default' => 'Related Posts',
       'sanitize_callback'  => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_computer_repair_pro_related_posts_title',array(
       'type' => 'text',
       'label' => __('Related Posts Title','vw-computer-repair-pro'),
       'section' => 'vw_computer_repair_pro_post_general_settings'
    ));

    $wp_customize->add_setting( 'vw_computer_repair_pro_related_post_count', array(
      'default' => 3,
      'sanitize_callback' => 'sanitize_text_field'
    ) );
    $wp_customize->add_control( 'vw_computer_repair_pro_related_post_count', array(
      'label' => esc_html__( 'Related Posts Count','vw-computer-repair-pro' ),
      'section' => 'vw_computer_repair_pro_post_general_settings',
      'type' => 'number',
      'settings' => 'vw_computer_repair_pro_related_post_count',
      'input_attrs' => array(
        'step'             => 1,
        'min'              => 0,
        'max'              => 6,
    ),) );

    // -----------Woocommerce Product settings-------------------
    $wp_customize->add_section('vw_computer_repair_pro_woocom_product_setting',array(
        'title' => __('Woocommerce Product Settings','vw-computer-repair-pro'),
        'panel' => 'vw_computer_repair_pro_panel_id',
    ));
    $wp_customize->add_setting('vw_computer_repair_pro_product_sale_left_right_padding',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_product_sale_left_right_padding',array(
        'label' => __('Product Sale Left Right Padding','vw-computer-repair-pro'),
        'section'   => 'vw_computer_repair_pro_woocom_product_setting',
        'type'      => 'number'
    ));
    $wp_customize->add_setting('vw_computer_repair_pro_product_sale_top_bottom_padding',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_product_sale_top_bottom_padding',array(
        'label' => __('Product Sale Top Bottom Padding','vw-computer-repair-pro'),
        'section'   => 'vw_computer_repair_pro_woocom_product_setting',
        'type'      => 'number'
    ));
    $wp_customize->add_setting('vw_computer_repair_pro_product_sale_border_radius',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_product_sale_border_radius',array(
        'label' => __('Product Sale Border Radius','vw-computer-repair-pro'),
        'section'   => 'vw_computer_repair_pro_woocom_product_setting',
        'type'      => 'number'
    ));
?>