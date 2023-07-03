<?php
    /* Footer Sections */
    $wp_customize->add_section('vw_computer_repair_pro_social_icons',array(
        'title' => __('Social Icons','vw-computer-repair-pro'),
        'description'   => __('Add social Icons Here','vw-computer-repair-pro'),
        'panel' => 'vw_computer_repair_pro_panel_id',
    ));
    $wp_customize->add_setting( 'vw_computer_repair_pro_social_icon_youtube_link', array(
    ) );
    $wp_customize->add_control( new VW_Button_Custom_Content( $wp_customize, 'vw_computer_repair_pro_social_icon_youtube_link', array(
          'section' => 'vw_computer_repair_pro_social_icons',
          'label' => __( 'Youtube Video', 'vw-computer-repair-pro' ),
          'description' => __( 'Watch our youtube video for add social media icons in your WordPress Website.', 'vw-computer-repair-pro' ),
          'content' => sprintf( __( 'Check the button %1$sWatch Now%2$s', 'vw-computer-repair-pro' ), '<a href="' . esc_url( VW_COMPUTER_REPAIR_PRO_SOCIAL_ICON_LINK  ) . '" class="button button-secondary alignright review_st" target="_blank">', '</a>' ),
    )));
    $wp_customize->add_setting('vw_computer_repair_pro_headertwitter',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('vw_computer_repair_pro_headertwitter',array(
        'label' => __('Add twitter link','vw-computer-repair-pro'),
        'section'   => 'vw_computer_repair_pro_social_icons',
        'setting'   => 'vw_computer_repair_pro_headertwitter',
        'type'      => 'text'
    ));
    $wp_customize->add_setting('vw_computer_repair_pro_headerpinterest',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_computer_repair_pro_headerpinterest',array(
        'label' => __('Add pinterest link','vw-computer-repair-pro'),
        'section'   => 'vw_computer_repair_pro_social_icons',
        'setting'   => 'vw_computer_repair_pro_headerpinterest',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_computer_repair_pro_headerfacebook',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_computer_repair_pro_headerfacebook',array(
        'label' => __('Add facebook link','vw-computer-repair-pro'),
        'section'   => 'vw_computer_repair_pro_social_icons',
        'setting'   => 'vw_computer_repair_pro_headerfacebook',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_computer_repair_pro_headeryoutube',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_computer_repair_pro_headeryoutube',array(
        'label' => __('Add Youtube link','vw-computer-repair-pro'),
        'section'   => 'vw_computer_repair_pro_social_icons',
        'setting'   => 'vw_computer_repair_pro_headeryoutube',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_computer_repair_pro_headerinstagram',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_computer_repair_pro_headerinstagram',array(
        'label' => __('Add Instagram link','vw-computer-repair-pro'),
        'section'   => 'vw_computer_repair_pro_social_icons',
        'setting'   => 'vw_computer_repair_pro_headerinstagram',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_computer_repair_pro_headerlinkedin',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_computer_repair_pro_headerlinkedin',array(
        'label' => __('Add Linkedin link','vw-computer-repair-pro'),
        'section'   => 'vw_computer_repair_pro_social_icons',
        'setting'   => 'vw_computer_repair_pro_headerlinkedin',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_computer_repair_pro_headertumblric',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_computer_repair_pro_headertumblric',array(
        'label' => __('Add Tumblr link','vw-computer-repair-pro'),
        'section'   => 'vw_computer_repair_pro_social_icons',
        'setting'   => 'vw_computer_repair_pro_headertumblric',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_computer_repair_pro_headerflickr',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_computer_repair_pro_headerflickr',array(
        'label' => __('Add Flickr link','vw-computer-repair-pro'),
        'section'   => 'vw_computer_repair_pro_social_icons',
        'setting'   => 'vw_computer_repair_pro_headerflickr',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_computer_repair_pro_headervk',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_computer_repair_pro_headervk',array(
        'label' => __('Add VK link','vw-computer-repair-pro'),
        'section'   => 'vw_computer_repair_pro_social_icons',
        'setting'   => 'vw_computer_repair_pro_headervk',
        'type'  => 'text'
    ));
   
?>