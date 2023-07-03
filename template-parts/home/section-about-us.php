<?php
/**
 * Template part for displaying about us
 *
 * @package vw-computer-repair-pro
 */

  $section_hide = get_theme_mod( 'vw_computer_repair_pro_about_us_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  $img_bg = get_theme_mod('vw_computer_repair_pro_about_us_image_bg');

  if( get_theme_mod('vw_computer_repair_pro_about_us_bgcolor','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_computer_repair_pro_about_us_bgcolor','')).';';
  }elseif( get_theme_mod('vw_computer_repair_pro_about_us_bgimage','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_computer_repair_pro_about_us_bgimage')).'\')';
  }else{
    $about_backg='';
  }

?>
<section id="about-us" style="<?php echo esc_attr($about_backg); ?>" class="<?php echo esc_attr($img_bg); ?> pb-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12">
        <div class="row about-us-head">
          <div class="col-lg-1 col-md-1 col-sm-2">
            <?php if(get_theme_mod('vw_computer_repair_pro_about_us_small_heading')!=''){ ?>
              <p class="small-title">
                <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_about_us_small_heading')); ?>
              </p>
            <?php } ?>
          </div>
          <div class="col-lg-11 col-md-11 col-sm-10">
            <?php if(get_theme_mod('vw_computer_repair_pro_about_us_main_heading')!=''){ ?>
              <h3>
                <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_about_us_main_heading')); ?>
              </h3>
            <?php } if(get_theme_mod('vw_computer_repair_pro_about_us_text')!=''){ ?>
              <p class="services-text pt-2 mb-0">
                <?php echo (get_theme_mod('vw_computer_repair_pro_about_us_text')); ?>
              </p>
            <?php } ?>
          </div>
        </div>
        <div class="about-text">
          <?php if(get_theme_mod('vw_computer_repair_pro_about_us_title')!=''){ ?>
            <h4 class="pt-3">
              <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_about_us_title')); ?>
            </h4>
          <?php } ?>
          <div class="row">
            <?php 
            $about_service=get_theme_mod('vw_computer_repair_pro_about_us_number');
            for($i=1;$i<=$about_service;$i++)
            {
            ?>
              <?php if(get_theme_mod('vw_computer_repair_pro_about_service'.$i)!=''){ ?>
                <div class="col-lg-4 col-md-4">
                  <span><i class="fas fa-check pr-1"></i><?php echo esc_html(get_theme_mod('vw_computer_repair_pro_about_service'.$i)); ?></span>
                </div>
            <?php } } ?>
          </div>
          <?php if(get_theme_mod('vw_computer_repair_pro_about_us_call')!=''){ ?>
            <h4 class="num-text ">
              <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_about_us_call')); ?>
            </h4>
          <?php } if(get_theme_mod('vw_computer_repair_pro_about_us_button_title')!=''){ ?>
            <a href="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_about_us_button_url')); ?>" class="py-3 px-4 mt-3 d-inline-block">
              <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_about_us_button_title')); ?>
            </a>
          <?php } ?>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 about-img">
        <?php if(get_theme_mod('vw_computer_repair_pro_about_us_image')!=''){ ?>
          <img src="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_about_us_image')); ?>" alt="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_about_us_image_alt_text')); ?>">
        <?php } ?>
      </div>
    </div>
  </div>
</section>