<?php
    /*------------------- Footer Sections ----------------------*/

    $wp_customize->add_section('vw_computer_repair_pro_footer_widget_section',array(
        'title' => __('Footer Widgets','vw-computer-repair-pro'),
        'description'   => __('Edit footer Widgets sections','vw-computer-repair-pro'),
        'panel' => 'vw_computer_repair_pro_panel_id',
    ));
    $wp_customize->add_setting('vw_computer_repair_pro_footer_widgets_enable',
    array(
        'default' => 'Enable',
        'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
    ));
    $wp_customize->add_control('vw_computer_repair_pro_footer_widgets_enable',
    array(
        'type' => 'radio',
        'label' => 'Do you want this section',
        'section' => 'vw_computer_repair_pro_footer_widget_section',
        'choices' => array(
            'Enable' => __('Enable', 'vw-computer-repair-pro'),
            'Disable' => __('Disable', 'vw-computer-repair-pro')
        ),
    ));
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'vw_computer_repair_pro_footer_widgets_enable', array(
      'selector' => '#footer .footer-details',
      'render_callback' => 'vw_computer_repair_pro_customize_partial_vw_computer_repair_pro_footer_widgets_enable',
    ) );
  }
    $wp_customize->add_setting( 'vw_computer_repair_pro_footer_youtube_link', array(
    ) );
    $wp_customize->add_control( new VW_Button_Custom_Content( $wp_customize, 'vw_computer_repair_pro_footer_youtube_link', array(
          'section' => 'vw_computer_repair_pro_footer_widget_section',
          'label' => __( 'Youtube Video', 'vw-computer-repair-pro' ),
          'description' => __( 'Watch our youtube video for How to Create a Footer Widget in WordPress.', 'vw-computer-repair-pro' ),
          /* translators: %s: plugin name. */
         'content' => sprintf( __( 'Check the button %1$sWatch Now%2$s', 'vw-computer-repair-pro' ), '<a href="' . esc_url( VW_COMPUTER_REPAIR_PRO_FOOTER_WIDGET_LINK  ) . '" class="button button-secondary alignright review_st" target="_blank">', '</a>' ),
    )));
    $wp_customize->add_setting( 'vw_computer_repair_pro_footer_widget_section_setting',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_footer_widget_section_setting',
        array(
          'label' => __('Section Background Setting','vw-computer-repair-pro'),
          'section' => 'vw_computer_repair_pro_footer_widget_section'
        )
    ) );

    // add color picker setting
    $wp_customize->add_setting( 'vw_computer_repair_pro_footer_widget_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_footer_widget_bgcolor', array(
        'label' => __('Background Color', 'vw-computer-repair-pro'),
        'description'   => __('Either add background color or background image, if you add both background color will be top most priority','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_footer_widget_section',
        'settings' => 'vw_computer_repair_pro_footer_widget_bgcolor',
    )));
    
    $wp_customize->add_setting('vw_computer_repair_pro_footer_widget_section_bgimage',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control( $wp_customize,'vw_computer_repair_pro_footer_widget_section_bgimage',array(
        'label' => __('Section Background Image','vw-computer-repair-pro'),
        'description' => __('Dimension 1600px * 900px','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_footer_widget_section',
        'settings' => 'vw_computer_repair_pro_footer_widget_section_bgimage'
    )));
    $wp_customize->add_setting( 'vw_computer_repair_pro_footer_image_bg', array(
      'default'         => 'vw-scroll',
      'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
    ));
    $wp_customize->add_control('vw_computer_repair_pro_footer_image_bg', array(
      'type'      => 'radio',
      'label'     => __('Choose image option', 'vw-computer-repair-pro'),
      'section'   => 'vw_computer_repair_pro_footer_widget_section',
      'choices'   => array(
        'vw-fixed'      => __( 'Fixed', 'vw-computer-repair-pro' ),
        'vw-scroll'      => __( 'Scroll', 'vw-computer-repair-pro' ),                    
    ),));
    $wp_customize->add_setting( 'vw_computer_repair_pro_footer_widget_section_text_setting',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_footer_widget_section_text_setting',
        array(
          'label' => __('Section Text Color and Font Setting','vw-computer-repair-pro'),
          'section' => 'vw_computer_repair_pro_footer_widget_section'
        )
    ) );

    $wp_customize->add_setting('vw_computer_repair_pro_footer_widget_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_footer_widget_heading_color', array(
        'label' => __('Footer Heading Color', 'vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_footer_widget_section',
        'settings' => 'vw_computer_repair_pro_footer_widget_heading_color',
    )));
    
    $wp_customize->add_setting('vw_computer_repair_pro_footer_widget_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_computer_repair_pro_footer_widget_heading_font_family', array(
        'section'  => 'vw_computer_repair_pro_footer_widget_section',
        'label'    => __( 'Footer Heading Font Family','vw-computer-repair-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    $wp_customize->add_setting('vw_computer_repair_pro_footer_widget_heading_font_size',array(
          'default' => '',
          'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control('vw_computer_repair_pro_footer_widget_heading_font_size',array(
          'label' => __('Footer Heading Font Size in px','vw-computer-repair-pro'),
          'section' => 'vw_computer_repair_pro_footer_widget_section',
          'setting' => 'vw_computer_repair_pro_footer_widget_heading_font_size',
          'type'    => 'text'
        )
    );
    $wp_customize->add_setting('vw_computer_repair_pro_footer_widget_content_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_footer_widget_content_color', array(
        'label' => __('Footer Content Color', 'vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_footer_widget_section',
        'settings' => 'vw_computer_repair_pro_footer_widget_content_color',
    )));
    
    $wp_customize->add_setting('vw_computer_repair_pro_footer_widget_content_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_computer_repair_pro_footer_widget_content_font_family', array(
        'section'  => 'vw_computer_repair_pro_footer_widget_section',
        'label'    => __( 'Footer Content Font Family','vw-computer-repair-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    $wp_customize->add_setting('vw_computer_repair_pro_footer_widget_content_font_size',array(
          'default' => '',
          'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control('vw_computer_repair_pro_footer_widget_content_font_size',array(
          'label' => __('Footer Content Font Size in px','vw-computer-repair-pro'),
          'section' => 'vw_computer_repair_pro_footer_widget_section',
          'setting' => 'vw_computer_repair_pro_footer_widget_content_font_size',
          'type'    => 'text'
        )
    );
    $wp_customize->add_setting('vw_computer_repair_pro_footer_widget_icon_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_footer_widget_icon_color', array(
        'label' => __('Contact Icon Color', 'vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_footer_widget_section',
        'settings' => 'vw_computer_repair_pro_footer_widget_icon_color',
    )));
    
    /*----------------- Footer Copyright --------------*/

    $wp_customize->add_section('vw_computer_repair_pro_footer_section',array(
        'title' => __('Footer Text','vw-computer-repair-pro'),
        'description'   => __('Add some text for footer like copyright etc.','vw-computer-repair-pro'),
        'priority'  => null,
        'panel' => 'vw_computer_repair_pro_panel_id',
    ));

    $wp_customize->add_setting('vw_computer_repair_pro_footer_section_enable',
    array(
        'default' => 'Enable',
        'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
    ));
    $wp_customize->add_control('vw_computer_repair_pro_footer_section_enable',
    array(
        'type' => 'radio',
        'label' => 'Do you want this section',
        'section' => 'vw_computer_repair_pro_footer_section',
        'choices' => array(
            'Enable' => __('Enable', 'vw-computer-repair-pro'),
            'Disable' => __('Disable', 'vw-computer-repair-pro')
        ),
    ));

    $wp_customize->add_setting('vw_computer_repair_pro_footer_copy',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_footer_copy',array(
        'label' => __('Copyright Text','vw-computer-repair-pro'),
        'section'   => 'vw_computer_repair_pro_footer_section',
        'type'      => 'textarea'
    ));
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'vw_computer_repair_pro_footer_copy', array(
      'selector' => '.copy-text',
      'render_callback' => 'vw_computer_repair_pro_customize_partial_vw_computer_repair_pro_footer_copy',
    ) );
}
    $wp_customize->add_setting( 'vw_computer_repair_pro_footer_copy_content_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_footer_copy_content_color', array(
        'label' => __('Content Color', 'vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_footer_section',
        'settings' => 'vw_computer_repair_pro_footer_copy_content_color',
    )));

    $wp_customize->add_setting('vw_computer_repair_pro_footer_copy_content_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_computer_repair_pro_footer_copy_content_font_family', array(
        'section'  => 'vw_computer_repair_pro_footer_section',
        'label'    => __( 'Content Font Family','vw-computer-repair-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    $wp_customize->add_setting('vw_computer_repair_pro_footer_copy_content_font_size',array(
          'default' => '',
          'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control('vw_computer_repair_pro_footer_copy_content_font_size',array(
          'label' => __('Content Font Size in px','vw-computer-repair-pro'),
          'section' => 'vw_computer_repair_pro_footer_section',
          'setting' => 'vw_computer_repair_pro_footer_copy_content_font_size',
          'type'    => 'text'
        )
    );
    $wp_customize->add_setting('vw_computer_repair_pro_footer_copy_text_alignment',array(
        'default' => __('center','vw-computer-repair-pro'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_computer_repair_pro_footer_copy_text_alignment',array(
        'type' => 'select',
        'label' => __('Footer Text Align','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_footer_section',
        'choices' => array(
            'center' => __('center','vw-computer-repair-pro'),
            'left' => __('left','vw-computer-repair-pro'),
            'right' => __('right','vw-computer-repair-pro')
        ),  
    ) );
    $wp_customize->add_setting( 'vw_computer_repair_pro_hide_show_credit_link',
       array(
          'default' => 1,
          'transport' => 'refresh',
          'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
    ));
     
    $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_hide_show_credit_link',
         array(
            'label' => esc_html__( 'Show or Hide Credit Link', 'vw-computer-repair-pro' ),
            'section' => 'vw_computer_repair_pro_footer_section'
    )));
    $wp_customize->add_setting('vw_computer_repair_pro_copyright_top_bottom_padding',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_copyright_top_bottom_padding',array(
        'label' => __('Copyright Top Bottom Padding','vw-computer-repair-pro'),
        'section'   => 'vw_computer_repair_pro_footer_section',
        'type'      => 'number'
    ));    
    /*---------------Contact Page section-------------*/

    $wp_customize->add_section('vw_computer_repair_pro_contact_page_section',array(
        'title' => __('Contact','vw-computer-repair-pro'),
        'description'   => __('Add contact page settings here).','vw-computer-repair-pro'),
        'priority'  => null,
        'panel' => 'vw_computer_repair_pro_panel_id',
    ));
    $wp_customize->add_setting( 'vw_computer_repair_pro_contact_page_youtube_link', array(
    ) );
    $wp_customize->add_control( new VW_Button_Custom_Content( $wp_customize, 'vw_computer_repair_pro_contact_page_youtube_link', array(
          'section' => 'vw_computer_repair_pro_contact_page_section',
          'label' => __( 'Youtube Video', 'vw-computer-repair-pro' ),
          'description' => __( 'Watch our youtube video for installing contact form7 plugin and create contact form in WordPress.', 'vw-computer-repair-pro' ),
          /* translators: %s: plugin name. */
        'content' => sprintf( __( 'Check the button %1$sWatch Now%2$s', 'vw-computer-repair-pro' ), '<a href="' . esc_url( VW_COMPUTER_REPAIR_PRO_CONTACT_FORM_LINK  ) . '" class="button button-secondary alignright review_st" target="_blank">', '</a>' ),
    )));
    $wp_customize->add_setting( 'vw_computer_repair_pro_contact_page_section_setting',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_contact_page_section_setting',
        array(
          'label' => __('Section Heading Setting','vw-computer-repair-pro'),
          'section' => 'vw_computer_repair_pro_contact_page_section'
        )
    ) );

    $wp_customize->add_setting('vw_computer_repair_pro_contactpage_form_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_contactpage_form_title',array(
        'label' => __('Form Title Title','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_contact_page_section',
        'setting'   => 'vw_computer_repair_pro_contactpage_form_title',
        'type'  => 'text'
    ));
if ( isset( $wp_customize->selective_refresh ) ) {
     $wp_customize->selective_refresh->add_partial( 'vw_computer_repair_pro_contactpage_form_title', array(
        'selector' => '.contact-box .contact-head h3',
        'render_callback' => 'vw_computer_repair_pro_customize_partial_vw_computer_repair_pro_contactpage_form_title',
      ));
}
    $wp_customize->add_setting('vw_computer_repair_pro_contactpage_form_text',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_contactpage_form_text',array(
        'label' => __('Contact Text','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_contact_page_section',
        'setting'   => 'vw_computer_repair_pro_contactpage_form_text',
        'type'  => 'textarea'
    ));

    $wp_customize->add_setting( 'vw_computer_repair_pro_contact_page_section_map_setting',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_contact_page_section_map_setting',
        array(
          'label' => __('Section Map Setting','vw-computer-repair-pro'),
          'section' => 'vw_computer_repair_pro_contact_page_section'
        )
    ) );

    $wp_customize->add_setting('vw_computer_repair_pro_address_longitude',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_computer_repair_pro_address_longitude',array(
        'label' => __('Longitude','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_contact_page_section',
        'setting'   => 'vw_computer_repair_pro_address_longitude',
        'type'=>'text'
    ));
    $wp_customize->add_setting('vw_computer_repair_pro_address_latitude',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_computer_repair_pro_address_latitude',array(
        'label' => __('Latitude','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_contact_page_section',
        'setting'   => 'vw_computer_repair_pro_address_latitude',
        'type'=>'text'
    ));
    $wp_customize->add_setting( 'vw_computer_repair_pro_contact_page_section_email_setting',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_contact_page_section_email_setting',
        array(
          'label' => __('Section Email Setting','vw-computer-repair-pro'),
          'section' => 'vw_computer_repair_pro_contact_page_section'
        )
    ) );

    $wp_customize->add_setting('vw_computer_repair_pro_contactpage_email_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_contactpage_email_title',array(
        'label' => __('Email Title','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_contact_page_section',
        'setting'   => 'vw_computer_repair_pro_contactpage_email_title',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_computer_repair_pro_contactpage_email_one',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_contactpage_email_one',array(
        'label' => __('First Email','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_contact_page_section',
        'setting'   => 'vw_computer_repair_pro_contactpage_email_one',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_computer_repair_pro_contactpage_email_two',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_contactpage_email_two',array(
        'label' => __('Second Email','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_contact_page_section',
        'setting'   => 'vw_computer_repair_pro_contactpage_email_two',
        'type'  => 'text'
    ));

    $wp_customize->add_setting( 'vw_computer_repair_pro_contact_page_section_address_setting',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_contact_page_section_address_setting',
        array(
          'label' => __('Section Address Setting','vw-computer-repair-pro'),
          'section' => 'vw_computer_repair_pro_contact_page_section'
        )
    ) );
    
    $wp_customize->add_setting('vw_computer_repair_pro_address_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_address_title',array(
        'label' => __('Address Title','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_contact_page_section',
        'setting'   => 'vw_computer_repair_pro_address_title',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_computer_repair_pro_address',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_address',array(
        'label' => __('Address Text','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_contact_page_section',
        'setting'   => 'vw_computer_repair_pro_address',
        'type'  => 'textarea'
    ));

    $wp_customize->add_setting( 'vw_computer_repair_pro_contact_page_section_phone_setting',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_contact_page_section_phone_setting',
        array(
          'label' => __('Section Phone Setting','vw-computer-repair-pro'),
          'section' => 'vw_computer_repair_pro_contact_page_section'
        )
    ) );
    $wp_customize->add_setting('vw_computer_repair_pro_contactpage_phone_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_contactpage_phone_title',array(
        'label' => __('Phone Title','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_contact_page_section',
        'setting'   => 'vw_computer_repair_pro_contactpage_phone_title',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_computer_repair_pro_contactpage_phone_one',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_contactpage_phone_one',array(
        'label' => __('First Phone','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_contact_page_section',
        'setting'   => 'vw_computer_repair_pro_contactpage_phone_one',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('vw_computer_repair_pro_contactpage_phone_two',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_computer_repair_pro_contactpage_phone_two',array(
        'label' => __('Second Phone','vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_contact_page_section',
        'setting'   => 'vw_computer_repair_pro_contactpage_phone_two',
        'type'  => 'text'
    ));

    $wp_customize->add_setting( 'vw_computer_repair_pro_contact_page_section_details_setting',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_computer_repair_pro_contact_page_section_details_setting',
        array(
          'label' => __('Section Text Color and Font Setting','vw-computer-repair-pro'),
          'section' => 'vw_computer_repair_pro_contact_page_section'
        )
    ) );

    $wp_customize->add_setting( 'vw_computer_repair_pro_contact_page_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_contact_page_heading_color', array(
        'label' => __('Section Title Color', 'vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_contact_page_section',
        'settings' => 'vw_computer_repair_pro_contact_page_heading_color',
    )));

    $wp_customize->add_setting('vw_computer_repair_pro_contact_page_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_computer_repair_pro_contact_page_heading_font_family', array(
        'section'  => 'vw_computer_repair_pro_contact_page_section',
        'label'    => __( 'Section Title Font Family','vw-computer-repair-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    $wp_customize->add_setting('vw_computer_repair_pro_contact_page_heading_font_size',array(
          'default' => '',
          'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control('vw_computer_repair_pro_contact_page_heading_font_size',array(
          'label' => __('Section Title Font Size in px','vw-computer-repair-pro'),
          'section' => 'vw_computer_repair_pro_footer_section',
          'setting' => 'vw_computer_repair_pro_contact_page_heading_font_size',
          'type'    => 'text'
        )
    );
    $wp_customize->add_setting( 'vw_computer_repair_pro_contact_page_text_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_contact_page_text_color', array(
        'label' => __('Section Text Color', 'vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_contact_page_section',
        'settings' => 'vw_computer_repair_pro_contact_page_text_color',
    )));

    $wp_customize->add_setting('vw_computer_repair_pro_contact_page_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_computer_repair_pro_contact_page_text_font_family', array(
        'section'  => 'vw_computer_repair_pro_contact_page_section',
        'label'    => __( 'Section Text Font Family','vw-computer-repair-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    $wp_customize->add_setting('vw_computer_repair_pro_contact_page_text_font_size',array(
          'default' => '',
          'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control('vw_computer_repair_pro_contact_page_text_font_size',array(
          'label' => __('Section Text Font Size in px','vw-computer-repair-pro'),
          'section' => 'vw_computer_repair_pro_footer_section',
          'setting' => 'vw_computer_repair_pro_contact_page_text_font_size',
          'type'    => 'text'
        )
    );
    $wp_customize->add_setting( 'vw_computer_repair_pro_contact_page_content_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_contact_page_content_color', array(
        'label' => __('Contact Heading Color', 'vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_contact_page_section',
        'settings' => 'vw_computer_repair_pro_contact_page_content_color',
    )));

    $wp_customize->add_setting('vw_computer_repair_pro_contact_page_contact_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_computer_repair_pro_contact_page_contact_font_family', array(
        'section'  => 'vw_computer_repair_pro_contact_page_section',
        'label'    => __( 'Contact Heading Font Family','vw-computer-repair-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    $wp_customize->add_setting('vw_computer_repair_pro_contact_page_contact_font_size',array(
          'default' => '',
          'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control('vw_computer_repair_pro_contact_page_contact_font_size',array(
          'label' => __('Contact Heading Font Size in px','vw-computer-repair-pro'),
          'section' => 'vw_computer_repair_pro_footer_section',
          'setting' => 'vw_computer_repair_pro_contact_page_contact_font_size',
          'type'    => 'text'
        )
    );
    // add color picker control
    $wp_customize->add_setting( 'vw_computer_repair_pro_contact_page_contents_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));   
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_contact_page_contents_color', array(
        'label' => __('Contact Content Color', 'vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_contact_page_section',
        'settings' => 'vw_computer_repair_pro_contact_page_contents_color',
    )));

    $wp_customize->add_setting('vw_computer_repair_pro_contact_page_contacts_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_computer_repair_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_computer_repair_pro_contact_page_contacts_font_family', array(
        'section'  => 'vw_computer_repair_pro_contact_page_section',
        'label'    => __( 'Contact Content Font Family','vw-computer-repair-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    $wp_customize->add_setting('vw_computer_repair_pro_contact_page_contacts_font_size',array(
          'default' => '',
          'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control('vw_computer_repair_pro_contact_page_contacts_font_size',array(
          'label' => __('Contact Content Font Size in px','vw-computer-repair-pro'),
          'section' => 'vw_computer_repair_pro_footer_section',
          'setting' => 'vw_computer_repair_pro_contact_page_contacts_font_size',
          'type'    => 'text'
        )
    );
    // add color picker control
    $wp_customize->add_setting( 'vw_computer_repair_pro_contact_page_icon_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));   
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_contact_page_icon_color', array(
        'label' => __('Contact Content Icon Color', 'vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_contact_page_section',
        'settings' => 'vw_computer_repair_pro_contact_page_icon_color',
    )));
    $wp_customize->add_setting( 'vw_computer_repair_pro_contact_page_icon_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));   
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_contact_page_icon_bgcolor', array(
        'label' => __('Contact Content Icon Background Color', 'vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_contact_page_section',
        'settings' => 'vw_computer_repair_pro_contact_page_icon_bgcolor',
    )));
    $wp_customize->add_setting( 'vw_computer_repair_pro_contact_page_button_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_computer_repair_pro_contact_page_button_bgcolor', array(
        'label' => __('Form Button Background Color', 'vw-computer-repair-pro'),
        'section' => 'vw_computer_repair_pro_contact_page_section',
        'settings' => 'vw_computer_repair_pro_contact_page_button_bgcolor',
    )));
    //Responsive Media Settings
        $wp_customize->add_section('vw_computer_repair_pro_responsive_media',array(
        'title' => __('Responsive Media','vw-computer-repair-pro'),
        'panel' => 'vw_computer_repair_pro_panel_id',
        ));

        $wp_customize->add_setting( 'vw_computer_repair_pro_resp_topbar_hide_show',array(
              'default' => 1,
              'transport' => 'refresh',
              'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
        ));  
        $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_Control( $wp_customize, 'vw_computer_repair_pro_resp_topbar_hide_show',array(
              'label' => esc_html__( 'Show / Hide Topbar','vw-computer-repair-pro' ),
              'section' => 'vw_computer_repair_pro_responsive_media'
        )));

        $wp_customize->add_setting( 'vw_computer_repair_pro_resp_slider_hide_show',array(
              'default' => 1,
              'transport' => 'refresh',
              'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
        ));  
        $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_resp_slider_hide_show',array(
              'label' => esc_html__( 'Show / Hide Slider','vw-computer-repair-pro' ),
              'section' => 'vw_computer_repair_pro_responsive_media'
        )));

      $wp_customize->add_setting( 'vw_computer_repair_pro_metabox_hide_show',array(
              'default' => 1,
              'transport' => 'refresh',
              'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
        ));  
        $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_metabox_hide_show',array(
              'label' => esc_html__( 'Show / Hide Metabox','vw-computer-repair-pro' ),
              'section' => 'vw_computer_repair_pro_responsive_media'
        )));

        $wp_customize->add_setting( 'vw_computer_repair_pro_sidebar_hide_show',array(
              'default' => 1,
              'transport' => 'refresh',
              'sanitize_callback' => 'vw_computer_repair_pro_switch_sanitization'
        ));  
        $wp_customize->add_control( new vw_computer_repair_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_computer_repair_pro_sidebar_hide_show',array(
              'label' => esc_html__( 'Show / Hide Sidebar','vw-computer-repair-pro' ),
              'section' => 'vw_computer_repair_pro_responsive_media'
        )));

        $wp_customize->add_setting('vw_computer_repair_pro_res_open_menu_icon',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
      )); 
      $wp_customize->add_control(new Vw_Computer_Pro_Fontawesome_Icon_Chooser(
            $wp_customize,'vw_computer_repair_pro_res_open_menu_icon',array(
        'label' => __('Add Open Menu Icon','vw-computer-repair-pro'),
        'transport' => 'refresh',
        'section' => 'vw_computer_repair_pro_responsive_media',
        'setting' => 'vw_computer_repair_pro_res_open_menu_icon',
        'type'    => 'icon'
      )));

      $wp_customize->add_setting('vw_computer_repair_pro_res_close_menus_icon',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
      )); 
      $wp_customize->add_control(new Vw_Computer_Pro_Fontawesome_Icon_Chooser(
            $wp_customize,'vw_computer_repair_pro_res_close_menus_icon',array(
        'label' => __('Add Close Menu Icon','vw-computer-repair-pro'),
        'transport' => 'refresh',
        'section' => 'vw_computer_repair_pro_responsive_media',
        'setting' => 'vw_computer_repair_pro_res_close_menus_icon',
        'type'    => 'icon'
      )));
      $wp_customize->add_setting('vw_computer_repair_pro_site_menu_width',array(
        'default'   => '250',
        'sanitize_callback' => 'sanitize_text_field',
      ));
      $wp_customize->add_control('vw_computer_repair_pro_site_menu_width',array(
        'label' => __('Responsive Menu Width','vw-computer-repair-pro'),
        'section'   => 'vw_computer_repair_pro_responsive_media',
        'type'      => 'number'
      ));
      
    //404 Page Setting
    $wp_customize->add_section('vw_computer_repair_pro_404_page',array(
        'title' => __('404 Page Settings','vw-computer-repair-pro'),
        'panel' => 'vw_computer_repair_pro_panel_id',
    )); 

    $wp_customize->add_setting('vw_computer_repair_pro_404_page_title',array(
        'default'=> '',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('vw_computer_repair_pro_404_page_title',array(
        'label' => __('Add Title','vw-computer-repair-pro'),
        'input_attrs' => array(
            'placeholder' => __( '404 Not Found', 'vw-computer-repair-pro' ),
        ),
        'section'=> 'vw_computer_repair_pro_404_page',
        'type'=> 'text'
    ));

    $wp_customize->add_setting('vw_computer_repair_pro_404_page_content',array(
        'default'=> '',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('vw_computer_repair_pro_404_page_content',array(
        'label' => __('Add Text','vw-computer-repair-pro'),
        'input_attrs' => array(
            'placeholder' => __( 'Looks like you have taken a wrong turn, Dont worry, it happens to the best of us.', 'vw-computer-repair-pro' ),
        ),
        'section'=> 'vw_computer_repair_pro_404_page',
        'type'=> 'text'
    ));

    $wp_customize->add_setting('vw_computer_repair_pro_404_page_button_text',array(
        'default'=> '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_computer_repair_pro_404_page_button_text',array(
        'label' => __('Add Button Text','vw-computer-repair-pro'),
        'input_attrs' => array(
            'placeholder' => __( 'GO BACK', 'vw-computer-repair-pro' ),
        ),
        'section'=> 'vw_computer_repair_pro_404_page',
        'type'=> 'text'
    ));
    //Shortcode Section
    $wp_customize->add_section('vw_computer_repair_pro_shortcode_section',array(
        'title' => __('Shortcode Settings','vw-computer-repair-pro'),
        'description'   => __('Use below shortcode here.','vw-computer-repair-pro'),
        'priority'  => null,
        'panel' => 'vw_computer_repair_pro_panel_id',
    ));
    $wp_customize->add_setting( 'vw_computer_repair_pro_shortcode',
       array(
           'default' => '',
           'transport' => 'postMessage',
           'sanitize_callback' => 'vw_computer_repair_pro_text_sanitization'
       )
   );
   $wp_customize->add_control( new VW_Themes_Simple_Notice_Custom_Control( $wp_customize, 'vw_computer_repair_pro_shortcode',
       array(
           'label' => __( 'Shortcodes', 'vw-computer-repair-pro'),
           'description' => __('Below  shortcodes are present in the theme. Simply copy and paste into any page or post and get their listing <br><br> <ul><li><strong>[vw-computer-repair-pro-services]</li></strong><br><li><strong>[vw-computer-repair-pro-projects]</strong></li><br><li><strong>[vw-computer-repair-pro-testimonials]</strong></li><br><li><strong>[vw-computer-repair-pro-team]</strong></li></ul>','vw-computer-repair-pro' ),
           'section' => 'vw_computer_repair_pro_shortcode_section'
       )
   ));
    $wp_customize->add_setting( 'vw_computer_repair_pro_shortcode_page_youtube_link', array(
    ) );
    $wp_customize->add_control( new VW_Button_Custom_Content( $wp_customize, 'vw_computer_repair_pro_shortcode_page_youtube_link', array(
          'section' => 'vw_computer_repair_pro_shortcode_section',
          'label' => __( 'Youtube Video', 'vw-computer-repair-pro' ),
          'description' => __( 'Watch our youtube video for How to Create Pages Using Shortcode in WordPress.', 'vw-computer-repair-pro' ),
          /* translators: %s: plugin name. */
        'content' => sprintf( __( 'Check the button %1$sWatch Now%2$s', 'vw-computer-repair-pro' ), '<a href="' . esc_url( VW_COMPUTER_REPAIR_PRO_SHORTCODES_LINK  ) . '" class="button button-secondary alignright review_st" target="_blank">', '</a>' ),
    )));
?>