<?php
/**
 * Template part for displaying pricing plan
 *
 * @package vw-computer-repair-pro
 */

  $section_hide = get_theme_mod( 'vw_computer_repair_pro_pricing_plan_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  $img_bg = get_theme_mod('vw_computer_repair_pro_pricing_plan_image_bg');

  if( get_theme_mod('vw_computer_repair_pro_pricing_plan_bgcolor','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_computer_repair_pro_pricing_plan_bgcolor','')).';';
  }elseif( get_theme_mod('vw_computer_repair_pro_pricing_plan_bgimage','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_computer_repair_pro_pricing_plan_bgimage')).'\')';
  }else{
    $about_backg='';
  }

  $plan_loop="";
  if(get_theme_mod('vw_computer_repair_pro_pricing_plan_slider_loop',true)=='1')
  {
    $plan_loop="true";
  }else{
    $plan_loop="false";
  }

?>
<section id="pricing-plan" style="<?php echo esc_attr($about_backg); ?>" class="<?php echo esc_attr($img_bg); ?>">
  <div class="container">
    <div class="row pricing-plan-head pb-4">
      <div class="col-lg-1 col-md-1 col-sm-2">
         <?php if(get_theme_mod('vw_computer_repair_pro_pricing_plan_small_heading')!=''){ ?>
          <p class="small-title">
            <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_pricing_plan_small_heading')); ?>
          </p>
        <?php } ?>
      </div>
      <div class="col-lg-11 col-md-11 col-sm-10">
        <?php if(get_theme_mod('vw_computer_repair_pro_pricing_plan_main_heading')!=''){ ?>
          <h3>
            <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_pricing_plan_main_heading')); ?>
          </h3>
        <?php } if(get_theme_mod('vw_computer_repair_pro_pricing_plan_text')!=''){ ?>
          <p class="services-text pt-2 mb-0">
            <?php echo (get_theme_mod('vw_computer_repair_pro_pricing_plan_text')); ?>
          </p>
        <?php } ?>
      </div>
    </div>
    <div class="owl-carousel">
      <?php
      $plan_no=get_theme_mod('vw_computer_repair_pro_pricing_plan_number');
      for($i=1;$i<=$plan_no;$i++)
      {
      ?>
        <div class="plan-box p-3">
          <div class="row plan-content">
            <div class="col-lg-8 col-md-8">
              <?php if(get_theme_mod('vw_computer_repair_pro_pricing_plan_icon'.$i)!=''){ ?>
                <img src="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_pricing_plan_icon'.$i)); ?>" alt="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_pricing_icon_image_alt_text'.$i)); ?>" class="m-0 d-inline-block">
              <?php } if(get_theme_mod('vw_computer_repair_pro_pricing_plan_price_title'.$i)!=''){ ?>
                <span class="pl-2 d-inline-block">
                  <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_pricing_plan_price_title'.$i)); ?>
                </span>
              <?php } if(get_theme_mod('vw_computer_repair_pro_pricing_plan_title'.$i)!=''){ ?>
                <h4 class="pt-2">
                  <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_pricing_plan_title'.$i)); ?>
                </h4>
              <?php } ?>
            </div>
            <div class="col-lg-4 col-md-4">
              <?php if(get_theme_mod('vw_computer_repair_pro_pricing_plan_price'.$i)!=''){ ?>
                <p class="text-center mb-0">
                  <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_pricing_plan_price'.$i)); ?>
                </p>
              <?php } ?>
            </div>
          </div>
          <ul class="plan-features ml-0 pt-2">
            <?php 
            $plan_feature=get_theme_mod('vw_computer_repair_pro_pricing_plan_feature_number'.$i);
            for($j=1;$j<=$plan_feature;$j++)
            {
            ?>
              <?php if(get_theme_mod('vw_computer_repair_pro_pricing_plan_feature_title'.$i.$j)!=''){ ?>
                <li class="">
                  <i class="fas fa-check"></i>
                  <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_pricing_plan_feature_title'.$i.$j)); ?>
                </li>
            <?php } } ?>
          </ul>
          <div class="plan-image-box">
            <?php if(get_theme_mod('vw_computer_repair_pro_pricing_plan_image'.$i)!=''){ ?>
              <img src="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_pricing_plan_image'.$i)); ?>" alt="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_pricing_plan_image_alt_text'.$i)); ?>">
            <?php } if(get_theme_mod('vw_computer_repair_pro_pricing_plan_button_title'.$i)!=''){ ?>
              <a href="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_pricing_plan_button_url'.$i)); ?>" class="text-center py-2 px-3 d-inline-block">
                <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_pricing_plan_button_title'.$i)); ?>
              </a>
            <?php } ?>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  <span id="plan-loop" class="d-none"><?php echo esc_html($plan_loop); ?></span>
</section>