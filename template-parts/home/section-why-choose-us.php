<?php
/**
 * Template part for displaying why choose us
 *
 * @package vw-computer-repair-pro
 */

  $section_hide = get_theme_mod( 'vw_computer_repair_pro_why_choose_us_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  $img_bg = get_theme_mod('vw_computer_repair_pro_why_choose_image_bg');

  if( get_theme_mod('vw_computer_repair_pro_why_choose_us_bgcolor','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_computer_repair_pro_why_choose_us_bgcolor','')).';';
  }elseif( get_theme_mod('vw_computer_repair_pro_why_choose_us_bgimage','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_computer_repair_pro_why_choose_us_bgimage')).'\')';
  }else{
    $about_backg='';
  }

  $tab_count=get_theme_mod('vw_computer_repair_pro_why_choose_us_number');
  
?>
<section id="why-choose-us" style="<?php echo esc_attr($about_backg); ?> <?php if(get_theme_mod('vw_computer_repair_pro_our_products_enable')=='Disable'){ echo ";margin-top:6%"; } ?>" class="<?php echo esc_attr($img_bg); ?>">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12">
        <div class="row why-choose-us-head pb-4">
          <div class="col-lg-1 col-md-2 col-sm-2">
             <?php if(get_theme_mod('vw_computer_repair_pro_why_choose_us_small_heading')!=''){ ?>
              <p class="small-title">
                <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_why_choose_us_small_heading')); ?>
              </p>
            <?php } ?>
          </div>
          <div class="col-lg-11 col-md-10 col-sm-10">
            <?php if(get_theme_mod('vw_computer_repair_pro_why_choose_us_main_heading')!=''){ ?>
              <h3>
                <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_why_choose_us_main_heading')); ?>
              </h3>
            <?php } if(get_theme_mod('vw_computer_repair_pro_why_choose_us_text')!=''){ ?>
              <p class="services-text mb-0 pt-2">
                <?php echo (get_theme_mod('vw_computer_repair_pro_why_choose_us_text')); ?>
              </p>
            <?php } ?>
          </div>
        </div>
        <div class="tab-content pt-3">
          <?php 
          for($j=1;$j<=$tab_count;$j++)
          {
          ?>
            <div id="why-tab<?php echo $j; ?>" class="container tab-pane <?php if($j==1){ echo "active";}else{ echo "fade"; } ?>">
              <?php if(get_theme_mod('vw_computer_repair_pro_why_choose_us_tab_icon'.$j)!=''){ ?>
                <img src="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_why_choose_us_tab_icon'.$j)); ?>" alt="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_why_choose_us_tab_icon_image_alt_text'.$j)); ?>">
              <?php } if(get_theme_mod('vw_computer_repair_pro_why_choose_us_tab_heading'.$j)!=''){ ?>
                <sub>
                  <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_why_choose_us_tab_heading'.$j)); ?>
                </sub>
              <?php } if(get_theme_mod('vw_computer_repair_pro_why_choose_us_tab_text'.$j)!=''){ ?>
                <p class="pt-2 mb-0">
                  <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_why_choose_us_tab_text'.$j)); ?>
                </p>
              <?php } ?>
            </div>
          <?php } ?>
        </div>
      </div>
      <div class="col-lg-4 col-md-12">
        <ul class="why-tabs ml-0" role="tablist">
          <?php 
          for($i=1;$i<=$tab_count;$i++)
          {
          ?>
            <?php if(get_theme_mod('vw_computer_repair_pro_why_choose_us_tab_title'.$i)!=''){ ?>
              <li class="nav-item d-inline-block">
                <a class="nav-link <?php if($i==1){ echo "active";} ?> text-center mr-2 mt-2" data-toggle="tab" href="#why-tab<?php echo $i; ?>">
                  <?php if(get_theme_mod('vw_computer_repair_pro_why_choose_us_tab_icon'.$i)!=''){ ?>
                    <img src="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_why_choose_us_tab_icon'.$i)); ?>" alt="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_why_choose_us_tab_icon_image_alt_text'.$i)); ?>">
                  <?php } ?>
                  <span class="pt-2 d-block"><?php echo esc_html(get_theme_mod('vw_computer_repair_pro_why_choose_us_tab_title'.$i)); ?></span></a>
              </li>
          <?php } } ?>
        </ul>
      </div>
    </div>
  </div>
</section>