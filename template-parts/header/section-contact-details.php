<?php
/**
 * Template part for displaying contact details
 *
 * @package vw-computer-repair-pro
 */

  $section_hide = get_theme_mod( 'vw_computer_repair_pro_contact_details_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }

  if( get_theme_mod('vw_computer_repair_pro_contact_details_bgcolor','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_computer_repair_pro_contact_details_bgcolor','')).';';
  }elseif( get_theme_mod('vw_computer_repair_pro_contact_details_bgimage','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_computer_repair_pro_contact_details_bgimage')).'\')';
  }else{
    $about_backg='';
  }

?>
<section id="contact-details" style="<?php echo esc_attr($about_backg); ?>" class="p-0">
  <div class="container">
    <div class="row">
      <!-- This has been changed from the original version of this website to add logo after globe logo -->
      <div class="col-lg-0 col-md-0">

      </div>
      <div class="col-lg-12 col-md-12 contact-det-box">
      <span class="text-logo">Performance Computers</span>
        <?php if(get_theme_mod('vw_computer_repair_pro_contact_details_address_text')!=''){ ?>
          <?php if(get_theme_mod('vw_computer_repair_pro_contact_details_address_icon')!=''){ ?>
            <i class="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_contact_details_address_icon','fas fa-map-marker-alt')); ?> p-1"></i>
          <?php } ?>
          <span class="d-inline-block"><?php echo esc_html(get_theme_mod('vw_computer_repair_pro_contact_details_address_text')); ?></span>
        <?php } ?>

        <?php if(get_theme_mod('vw_computer_repair_pro_contact_details_phone_text')!=''){ ?>
          <a href="telto:"><?php if(get_theme_mod('vw_computer_repair_pro_contact_details_phone_icon','fas fa-phone')!=''){ ?>            
            <i class="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_contact_details_phone_icon')); ?> p-1"></i>
          <?php } ?><span class="d-inline-block"><?php echo esc_html(get_theme_mod('vw_computer_repair_pro_contact_details_phone_text')); ?></span></a> 
        <?php } ?>

        <?php if(get_theme_mod('vw_computer_repair_pro_contact_details_email_text')!=''){ ?>
          <a href="mailto:"><?php if(get_theme_mod('vw_computer_repair_pro_contact_details_email_icon')!=''){ ?>
            <i class="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_contact_details_email_icon','fas fa-envelope')); ?> p-1"></i>
          <?php } ?>
          <span class="d-inline-block"><?php echo esc_html(get_theme_mod('vw_computer_repair_pro_contact_details_email_text')); ?></span></a>
        <?php } ?>
      </div>
    </div>
  </div>
</section>