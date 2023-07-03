<?php
/**
 * Template part for displaying our features 
 *
 * @package vw-computer-repair-pro
 */

  $section_hide = get_theme_mod( 'vw_computer_repair_pro_our_features_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }

  $feature_loop="";
  if(get_theme_mod('vw_computer_repair_pro_our_features_slider_loop',true)=='1')
  {
    $feature_loop="true";
  }else{
    $feature_loop="false";
  }
?>
<section id="our-features" class="p-0" style="<?php if(get_theme_mod('vw_computer_repair_pro_about_us_enable')=='Disable'){ echo "position: unset;"; } ?>">
  <div class="container">
    <div class="owl-carousel">
      <?php
      $features_no=get_theme_mod('vw_computer_repair_pro_our_features_number');
      for($i=1;$i<=$features_no;$i++)
      {
      ?>
        <div class="features-content p-4">
          <div class="row">
            <div class="col-lg-3 col-md-4">
              <?php if(get_theme_mod('vw_computer_repair_pro_our_features_icon'.$i)!=''){ ?>
                <img src="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_our_features_icon'.$i)); ?>"  alt="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_features_icon_image_alt_text'.$i)); ?>" class="main-icons pb-3">
              <?php } ?>
              <?php if(get_theme_mod('vw_computer_repair_pro_our_features_hover_icon'.$i)!=''){ ?>
                <img src="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_our_features_hover_icon'.$i)); ?>"  alt="hover image" class="hover-icons pb-3">
              <?php } ?>
            </div>
            <div class="col-lg-9 col-md-8">
              <?php if(get_theme_mod('vw_computer_repair_pro_our_features_title'.$i)!=''){ ?>
                <h5>
                  <a href="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_our_features_url'.$i)); ?>">
                    <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_our_features_title'.$i)); ?>
                  </a>
                </h5>
              <?php } ?>
            </div>
          </div>
          <?php if(get_theme_mod('vw_computer_repair_pro_our_features_text'.$i)!=''){ ?>
            <p class="pt-2">
              <?php echo (get_theme_mod('vw_computer_repair_pro_our_features_text'.$i)); ?>
            </p>
          <?php } ?>
        </div>
      <?php } ?>
    </div>
  </div>
  <span id="feature-loop" class="d-none"><?php echo esc_html($feature_loop); ?></span>
</section>