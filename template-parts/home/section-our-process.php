<?php
/**
 * Template part for displaying our process
 *
 * @package vw-computer-repair-pro
 */

  $section_hide = get_theme_mod( 'vw_computer_repair_pro_working_process_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  $img_bg = get_theme_mod('vw_computer_repair_pro_working_process_image_bg');

  if( get_theme_mod('vw_computer_repair_pro_working_process_bgcolor','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_computer_repair_pro_working_process_bgcolor','')).';';
  }elseif( get_theme_mod('vw_computer_repair_pro_working_process_bgimage','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_computer_repair_pro_working_process_bgimage')).'\')';
  }else{
    $about_backg='';
  }

?>
<section id="our-process" style="<?php echo esc_attr($about_backg); ?>" class="<?php echo esc_attr($img_bg); ?>">
  <div class="container">
    <div class="row our-process-head pb-4">
      <div class="col-lg-1 col-md-1 col-sm-2">
         <?php if(get_theme_mod('vw_computer_repair_pro_working_process_small_heading')!=''){ ?>
          <p class="small-title mb-0">
            <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_working_process_small_heading')); ?>
          </p>
        <?php } ?>
      </div>
      <div class="col-lg-11 col-md-11 col-sm-10">
        <?php if(get_theme_mod('vw_computer_repair_pro_working_process_main_heading')!=''){ ?>
          <h3>
            <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_working_process_main_heading')); ?>
          </h3>
        <?php } if(get_theme_mod('vw_computer_repair_pro_working_process_text')!=''){ ?>
          <p class="process-text mb-0 pt-2">
            <?php echo (get_theme_mod('vw_computer_repair_pro_working_process_text')); ?>
          </p>
        <?php } ?>
      </div>
    </div>
    <div class="row">
      <?php
      $process_no=get_theme_mod('vw_computer_repair_pro_working_process_number');
      for($i=1;$i<=$process_no;$i++)
      {
      ?>
        <div class="col-lg-3 col-md-3 col-sm-6 process-box text-center">
          <div class="process-icon py-5 px-3">
            <?php if(get_theme_mod('vw_computer_repair_pro_working_process_number'.$i)!=''){ ?>
              <span class="text-center p-2 d-inline-block">
                <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_working_process_number'.$i)); ?>
              </span>
            <?php } if(get_theme_mod('vw_computer_repair_pro_working_process_icon'.$i)!=''){ ?>
              <img src="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_working_process_icon'.$i)); ?>" alt="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_working_process_icon_image_alt_text'.$i)); ?>">
            <?php } if(get_theme_mod('vw_computer_repair_pro_working_process_arrow'.$i)!=''){ ?>
              <i class="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_working_process_arrow'.$i)); ?>"></i>
            <?php } ?>
          </div>
          <?php if(get_theme_mod('vw_computer_repair_pro_working_process_title'.$i)!=''){ ?>
            <?php if(get_theme_mod('vw_computer_repair_pro_working_process_url'.$i)==''){ ?>
              <p class="text-center mb-0 pt-3">
                <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_working_process_title'.$i)); ?>
              </p>
            <?php }else{ ?>
              <a href="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_working_process_url'.$i)); ?>" class="text-center pt-2 d-inline-block">
                <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_working_process_title'.$i)); ?>
              </a>
          <?php } } ?>
        </div>
      <?php } ?>
    </div>
  </div>
</section>