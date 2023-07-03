<?php
/**
 * Template part for displaying appointment
 *
 * @package vw-computer-repair-pro
 */

  $section_hide = get_theme_mod( 'vw_computer_repair_pro_appointment_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  $img_bg = get_theme_mod('vw_computer_repair_pro_appointment_image_bg');

  if( get_theme_mod('vw_computer_repair_pro_appointment_bgcolor','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_computer_repair_pro_appointment_bgcolor','')).';';
  }elseif( get_theme_mod('vw_computer_repair_pro_appointment_bgimage','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_computer_repair_pro_appointment_bgimage')).'\')';
  }else{
    $about_backg='';
  }

  $header_position="";

  if(get_theme_mod('vw_computer_repair_pro_appointment_shortcode') !="")
  {
   $header_position="position:relative";
  }else{
    $header_position="position:unset";
  }

?>
<section id="appointment" style="<?php echo esc_attr($about_backg); ?>" class="<?php echo esc_attr($img_bg); ?>">
  <div class="container">
    <div class="row app-content" style="<?php echo esc_attr($header_position); ?>">
      <div class="col-lg-5 col-md-6">
        <div class="row appointment-head">
          <div class="col-lg-2 col-md-2 col-sm-2">
             <?php if(get_theme_mod('vw_computer_repair_pro_appointment_small_heading')!=''){ ?>
              <p class="small-title mb-0">
                <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_appointment_small_heading')); ?>
              </p>
            <?php } ?>
          </div>
          <div class="col-lg-10 col-md-10 col-sm-10">
            <?php if(get_theme_mod('vw_computer_repair_pro_appointment_main_heading')!=''){ ?>
              <h3>
                <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_appointment_main_heading')); ?>
              </h3>
            <?php } if(get_theme_mod('vw_computer_repair_pro_appointment_text')!=''){ ?>
              <p class="appointment-text mb-0 pt-2">
                <?php echo (get_theme_mod('vw_computer_repair_pro_appointment_text')); ?>
              </p>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-6">
        <div class="appointment-form p-3">
          <?php if(get_theme_mod('vw_computer_repair_pro_appointment_shortcode')!=''){ ?>
            <?php echo do_shortcode(get_theme_mod('vw_computer_repair_pro_appointment_shortcode')); ?>
          <?php }else{ ?>
            <h4><?php esc_html_e('Install contact form 7 plugin and add shortcode here','vw-computer-repair-pro') ?></h4>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>