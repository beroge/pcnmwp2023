<?php
  $wp_customize->add_section('vw_computer_repair_pro_section_ordering_settings',array(
      'title' => __('Section Ordering','vw-computer-repair-pro'),
      'description'=> __('Section Ordering.','vw-computer-repair-pro'),
      'panel' => 'vw_computer_repair_pro_panel_id',
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_section_ordering_settings_repeater',
      array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
      )
  );
  $wp_customize->add_control( new vw_computer_repair_pro_Repeater_Custom_Control( $wp_customize, 'vw_computer_repair_pro_section_ordering_settings_repeater',
      array(
        'label' => __( 'Section Reordering','vw-computer-repair-pro' ),
        'description' => __( 'When you change the orders of section overlapping may happen to fix this use below padding top option','vw-computer-repair-pro' ),
        'section' => 'vw_computer_repair_pro_section_ordering_settings',
        'button_labels' => array(
          'add' => __( 'Add Row','vw-computer-repair-pro' ), 
      )
    )
  ));

  $wp_customize->add_setting( 'vw_computer_repair_pro_section_ordering_padding_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_section_ordering_padding_settings',
    array(
    'label' => __('Padding Top Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_section_ordering_settings'
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_section_ordering_services_padding_top',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_section_ordering_services_padding_top',array(
    'label' => __('Services Section Padding Top','vw-computer-repair-pro'),
    'description' => __('Add Padding Either in Pixel or Percentage (example 10px or 10%)','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_section_ordering_settings',
    'setting' => 'vw_computer_repair_pro_section_ordering_services_padding_top',
    'type'    => 'text'
  )); 

  $wp_customize->add_setting('vw_computer_repair_pro_section_ordering_popular_about_padding_top',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_section_ordering_popular_about_padding_top',array(
    'label' => __('About Us Section Padding Top','vw-computer-repair-pro'),
    'description' => __('Add Padding Either in Pixel or Percentage (example 10px or 10%)','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_section_ordering_settings',
    'setting' => 'vw_computer_repair_pro_section_ordering_popular_about_padding_top',
    'type'    => 'text'
  )); 

  $wp_customize->add_setting('vw_computer_repair_pro_section_ordering_projects_padding_top',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_section_ordering_projects_padding_top',array(
    'label' => __('Project Section Padding Top','vw-computer-repair-pro'),
    'description' => __('Add Padding Either in Pixel or Percentage (example 10px or 10%)','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_section_ordering_settings',
    'setting' => 'vw_computer_repair_pro_section_ordering_projects_padding_top',
    'type'    => 'text'
  )); 

  $wp_customize->add_setting('vw_computer_repair_pro_section_ordering_counter_padding_top',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_section_ordering_counter_padding_top',array(
    'label' => __('Our Records Section Padding Top','vw-computer-repair-pro'),
    'description' => __('Add Padding Either in Pixel or Percentage (example 10px or 10%)','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_section_ordering_settings',
    'setting' => 'vw_computer_repair_pro_section_ordering_counter_padding_top',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('vw_computer_repair_pro_section_ordering_pricing_padding_top',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_section_ordering_pricing_padding_top',array(
    'label' => __('Pricing Plan Section Padding Top','vw-computer-repair-pro'),
    'description' => __('Add Padding Either in Pixel or Percentage (example 10px or 10%)','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_section_ordering_settings',
    'setting' => 'vw_computer_repair_pro_section_ordering_pricing_padding_top',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('vw_computer_repair_pro_section_ordering_our_testimonial_padding_top',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_section_ordering_our_testimonial_padding_top',array(
    'label' => __('Testimonial Section Padding Top','vw-computer-repair-pro'),
    'description' => __('Add Padding Either in Pixel or Percentage (example 10px or 10%)','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_section_ordering_settings',
    'setting' => 'vw_computer_repair_pro_section_ordering_our_testimonial_padding_top',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('vw_computer_repair_pro_section_ordering_products_padding_top',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_section_ordering_products_padding_top',array(
    'label' => __('Our Product Section Padding Top','vw-computer-repair-pro'),
    'description' => __('Add Padding Either in Pixel or Percentage (example 10px or 10%)','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_section_ordering_settings',
    'setting' => 'vw_computer_repair_pro_section_ordering_products_padding_top',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('vw_computer_repair_pro_section_ordering_why_choose_us_padding_top',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_section_ordering_why_choose_us_padding_top',array(
    'label' => __('Why Choose Us Section Padding Top','vw-computer-repair-pro'),
    'description' => __('Add Padding Either in Pixel or Percentage (example 10px or 10%)','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_section_ordering_settings',
    'setting' => 'vw_computer_repair_pro_section_ordering_why_choose_us_padding_top',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('vw_computer_repair_pro_section_ordering_team_padding_top',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_section_ordering_team_padding_top',array(
    'label' => __('Our Team Section Padding Top','vw-computer-repair-pro'),
    'description' => __('Add Padding Either in Pixel or Percentage (example 10px or 10%)','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_section_ordering_settings',
    'setting' => 'vw_computer_repair_pro_section_ordering_team_padding_top',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('vw_computer_repair_pro_section_ordering_appointment_padding_top',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_section_ordering_appointment_padding_top',array(
    'label' => __('Appointment Section Padding Top','vw-computer-repair-pro'),
    'description' => __('Add Padding Either in Pixel or Percentage (example 10px or 10%)','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_section_ordering_settings',
    'setting' => 'vw_computer_repair_pro_section_ordering_appointment_padding_top',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('vw_computer_repair_pro_section_ordering_process_padding_top',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_section_ordering_process_padding_top',array(
    'label' => __('Working Process Section Padding Top','vw-computer-repair-pro'),
    'description' => __('Add Padding Either in Pixel or Percentage (example 10px or 10%)','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_section_ordering_settings',
    'setting' => 'vw_computer_repair_pro_section_ordering_process_padding_top',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('vw_computer_repair_pro_section_ordering_newsletter_padding_top',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_section_ordering_newsletter_padding_top',array(
    'label' => __('Newsletter Section Padding Top','vw-computer-repair-pro'),
    'description' => __('Add Padding Either in Pixel or Percentage (example 10px or 10%)','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_section_ordering_settings',
    'setting' => 'vw_computer_repair_pro_section_ordering_newsletter_padding_top',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('vw_computer_repair_pro_section_ordering_latest_news_padding_top',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_section_ordering_latest_news_padding_top',array(
    'label' => __('Latest News Section Padding Top','vw-computer-repair-pro'),
    'description' => __('Add Padding Either in Pixel or Percentage (example 10px or 10%)','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_section_ordering_settings',
    'setting' => 'vw_computer_repair_pro_section_ordering_latest_news_padding_top',
    'type'    => 'text'
  ));

  //General Color Pallete
  $wp_customize->add_section('vw_computer_repair_pro_color_pallette',array(
    'title' => __('Typography / General settings','vw-computer-repair-pro'),
    'description'=> __('Typography settings','vw-computer-repair-pro'),
    'panel' => 'vw_computer_repair_pro_panel_id',
  ));

  $wp_customize->add_setting('vw_computer_repair_pro_radio_boxed_full_layout',
      array(
    'default' => 'full-Width',
    'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_computer_repair_pro_radio_boxed_full_layout',
      array(
    'type' => 'radio',
    'label' => __('Choose Boxed or Full Width Layout', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_color_pallette',
    'choices' => array(
    'full-Width' => __('Full Width', 'vw-computer-repair-pro'),
    'boxed' => __('Boxed', 'vw-computer-repair-pro')
      ),
  ));

  $wp_customize->add_setting('vw_computer_repair_pro_radio_boxed_full_layout_value',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_computer_repair_pro_radio_boxed_full_layout_value',array(
    'label' => __('Add Boxed layout Width Here','vw-computer-repair-pro'),
    'description' => __('Boxed width is always set more than 1140px.','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_color_pallette',
    'setting' => 'vw_computer_repair_pro_radio_boxed_full_layout_value',
    'type'    => 'text'
    )
  );

  //This is Button Text FontFamily picker setting
  $wp_customize->add_setting('vw_computer_repair_pro_body_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_body_font_family', array(
    'section'  => 'vw_computer_repair_pro_color_pallette',
    'label'    => __( 'Body Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_body_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_computer_repair_pro_body_font_size',array(
      'label' => __('Body Font Size in px','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_color_pallette',
      'setting' => 'vw_computer_repair_pro_body_font_size',
      'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'vw_computer_repair_pro_body_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_body_color', array(
    'label' => __('Body Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_color_pallette',
    'settings' => 'vw_computer_repair_pro_body_color',
  )));
  $wp_customize->add_setting('vw_computer_repair_pro_h1_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_h1_font_family', array(
    'section'  => 'vw_computer_repair_pro_color_pallette',
    'label'    => __( 'H1 Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_h1_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_computer_repair_pro_h1_font_size',array(
    'label' => __('H1 Font Size in px','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_color_pallette',
    'setting' => 'vw_computer_repair_pro_h1_font_size',
    'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'vw_computer_repair_pro_h1_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_h1_color', array(
    'label' => __('H1 Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_color_pallette',
    'settings' => 'vw_computer_repair_pro_h1_color',
  )));
  $wp_customize->add_setting('vw_computer_repair_pro_h2_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_computer_repair_pro_h2_font_family', array(
      'section'  => 'vw_computer_repair_pro_color_pallette',
      'label'    => __( 'H2 Font Family','vw-computer-repair-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_h2_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_computer_repair_pro_h2_font_size',array(
      'label' => __('H2 Font Size in px','vw-computer-repair-pro'),
      'section' => 'vw_computer_repair_pro_color_pallette',
      'setting' => 'vw_computer_repair_pro_h2_font_size',
      'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'vw_computer_repair_pro_h2_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_h2_color', array(
    'label' => __('H2 Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_color_pallette',
    'settings' => 'vw_computer_repair_pro_h2_color',
  )));

  $wp_customize->add_setting('vw_computer_repair_pro_h3_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_h3_font_family', array(
    'section'  => 'vw_computer_repair_pro_color_pallette',
    'label'    => __( 'H3 Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_h3_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_computer_repair_pro_h3_font_size',array(
    'label' => __('H3 Font Size in px','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_color_pallette',
    'setting' => 'vw_computer_repair_pro_h3_font_size',
    'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'vw_computer_repair_pro_h3_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_h3_color', array(
    'label' => __('H3 Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_color_pallette',
    'settings' => 'vw_computer_repair_pro_h3_color',
  )));
  $wp_customize->add_setting('vw_computer_repair_pro_h4_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_h4_font_family', array(
    'section'  => 'vw_computer_repair_pro_color_pallette',
    'label'    => __( 'H4 Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_h4_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_computer_repair_pro_h4_font_size',array(
    'label' => __('H4 Font Size in px','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_color_pallette',
    'setting' => 'vw_computer_repair_pro_h4_font_size',
    'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'vw_computer_repair_pro_h4_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_h4_color', array(
    'label' => __('H4 Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_color_pallette',
    'settings' => 'vw_computer_repair_pro_h4_color',
  )));
  $wp_customize->add_setting('vw_computer_repair_pro_h5_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_h5_font_family', array(
    'section'  => 'vw_computer_repair_pro_color_pallette',
    'label'    => __( 'H5 Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_h5_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_computer_repair_pro_h5_font_size',array(
    'label' => __('H5 Font Size in px','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_color_pallette',
    'setting' => 'vw_computer_repair_pro_h5_font_size',
    'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'vw_computer_repair_pro_h5_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_h5_color', array(
    'label' => __('H5 Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_color_pallette',
    'settings' => 'vw_computer_repair_pro_h5_color',
  )));
  $wp_customize->add_setting('vw_computer_repair_pro_h6_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_h6_font_family', array(
    'section'  => 'vw_computer_repair_pro_color_pallette',
    'label'    => __( 'H6 Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_h6_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_computer_repair_pro_h6_font_size',array(
    'label' => __('H6 Font Size in px','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_color_pallette',
    'setting' => 'vw_computer_repair_pro_h6_font_size',
    'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'vw_computer_repair_pro_h6_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_h6_color', array(
    'label' => __('H6 Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_color_pallette',
    'settings' => 'vw_computer_repair_pro_h6_color',
  )));
  //paragarph font family
  $wp_customize->add_setting('vw_computer_repair_pro_paragarpah_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'vw_computer_repair_pro_paragarpah_font_family', array(
    'section'  => 'vw_computer_repair_pro_color_pallette',
    'label'    => __( 'Paragraph Font Family','vw-computer-repair-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_computer_repair_pro_para_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_computer_repair_pro_para_font_size',array(
    'label' => __('Paragraph Font Size in px','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_color_pallette',
    'setting' => 'vw_computer_repair_pro_para_font_size',
    'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'vw_computer_repair_pro_para_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_para_color', array(
    'label' => __('Paragraph Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_color_pallette',
    'settings' => 'vw_computer_repair_pro_para_color',
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_color_pallette_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_color_pallette_settings',
    array(
    'label' => __('Global Color Settings','vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_color_pallette'
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_global_color_one', array(
    'default' => '#23cfca',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_global_color_one', array(
    'label' => __('Global Color', 'vw-computer-repair-pro'),
    'section' => 'vw_computer_repair_pro_color_pallette',
    'settings' => 'vw_computer_repair_pro_global_color_one',
  )));
  $wp_customize->add_setting( 'vw_computer_repair_pro_section_nav', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_section_nav', array(
    'label' => 'Nav button color',
    'section' => 'vw_computer_repair_pro_color_pallette',
    'settings' => 'vw_computer_repair_pro_section_nav',
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_nav_hover_bg', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_nav_hover_bg', array(
    'label' => 'Nav button Hover Background Color',
    'section' => 'vw_computer_repair_pro_color_pallette',
    'settings' => 'vw_computer_repair_pro_nav_hover_bg',
  )));

  $wp_customize->add_setting( 'vw_computer_repair_pro_nav_hover_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_nav_hover_color', array(
    'label' => 'Nav button Hover Color',
    'section' => 'vw_computer_repair_pro_color_pallette',
    'settings' => 'vw_computer_repair_pro_nav_hover_color',
  )));

?>