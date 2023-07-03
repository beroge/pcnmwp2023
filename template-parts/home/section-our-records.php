<?php
/**
 * Template part for displaying our records
 *
 * @package vw-computer-repair-pro
 */

  $section_hide = get_theme_mod( 'vw_computer_repair_pro_our_records_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  $img_bg = get_theme_mod('vw_computer_repair_pro_record_image_bg');

  if( get_theme_mod('vw_computer_repair_pro_our_records_bgcolor','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_computer_repair_pro_our_records_bgcolor','')).';';
  }elseif( get_theme_mod('vw_computer_repair_pro_our_records_bgimage','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_computer_repair_pro_our_records_bgimage')).'\')';
  }else{
    $about_backg='';
  }

  $records_loop="";
  if(get_theme_mod('vw_computer_repair_pro_our_records_slider_loop',true)=='1')
  {
    $records_loop="true";
  }else{
    $records_loop="false";
  }

?>
<section id="our-records" style="<?php echo esc_attr($about_backg); ?>" class="<?php echo esc_attr($img_bg); ?>">
  <div class="container">
    <div class="owl-carousel">
      <?php
      $record_no=get_theme_mod('vw_computer_repair_pro_our_records_number');
      for($i=1;$i<=$record_no;$i++)
      {
      ?>
        <div class="record-content py-5 px-0 text-lg-left">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <?php if(get_theme_mod('vw_computer_repair_pro_our_records_icon'.$i)!=''){ ?>
                <img src="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_our_records_icon'.$i)); ?>" alt="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_record_image_alt_text'.$i)); ?>">
              <?php } if(get_theme_mod('vw_computer_repair_pro_our_records_no'.$i)!=''){ ?>
                <h3 class="count text-center pt-3">
                  <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_our_records_no'.$i)); ?>
                </h3>
              <?php } ?>
            </div>
            <div class="col-lg-6 col-md-6">
              <?php if(get_theme_mod('vw_computer_repair_pro_our_records_title'.$i)!=''){ ?>
                <p class="mb-0">
                  <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_our_records_title'.$i)); ?>
                </p>
              <?php } ?>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  <span id="records-loop" class="d-none"><?php echo esc_html($records_loop); ?></span>
</section>