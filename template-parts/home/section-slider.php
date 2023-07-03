<?php 

/**
 * Template to show the content of Slider
 *
 * @package vw-computer-repair-pro
 */ 

$section_hide = get_theme_mod( 'vw_computer_repair_pro_slider_enabledisable' );
if ( 'Disable' == $section_hide ) {
  return;
}
$number = get_theme_mod('vw_computer_repair_pro_slide_number'); 
$slide_delay = get_theme_mod('vw_computer_repair_pro_slide_delay'); 
  if($number != ''){
?>
  <section id="slider" class="p-0">
      <div id="carouselindicators" class="carousel slide <?php if ( get_theme_mod('vw_computer_repair_pro_slide_remove_fade',true) == 1 ) { ?> carousel-fade <?php } ?>" data-ride="carousel" data-interval="<?php echo esc_attr($slide_delay); ?>">
        <div class="carousel-inner m-0" role="listbox">
          <?php for ($i=1; $i<=$number; $i++) {  ?>
              <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
                <?php if ( get_theme_mod('vw_computer_repair_pro_slide_image'.$i,true) != "" ) { ?>
                  <img  src="<?php echo esc_url(get_theme_mod('vw_computer_repair_pro_slide_image'.$i)); ?>" alt="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_slide_image_alt_text'.$i)); ?>">
                <?php } ?>
                <?php if ( get_theme_mod('vw_computer_repair_pro_slide_heading'.$i) != "" || get_theme_mod('vw_computer_repair_pro_slide_text'.$i) != "") {?>
                <div class="carousel-caption d-md-block mt-5 p-0 m-0">
                  <div class="container h-100">
                    <div class="row h-100">
                      <div class="inner_carousel">
                        <div class="slider-box text-lg-left text-md-center">
                          <span class="mb-0 py-2 px-3">
                            <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_slide_small_heading'.$i)); ?>
                          </span>
                          <h2 class="pt-3"><?php echo esc_html(get_theme_mod('vw_computer_repair_pro_slide_heading'.$i)); ?></h2>
                          <div class=""><p><?php echo (get_theme_mod('vw_computer_repair_pro_slide_text'.$i)); ?></p></div>
                          <?php if( get_theme_mod('vw_computer_repair_pro_slide_btn_one_text'.$i) != ''){ ?>
                            <a class="read-more slider-button-1 font-weight-bold mr-2 d-inline-block mt-2" href="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_slide_btn_one_url'.$i)); ?>">
                              <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_slide_btn_one_text'.$i)); ?>
                            </a>
                          <?php } if( get_theme_mod('vw_computer_repair_pro_slide_btn_two_text'.$i) != ''){ ?>
                            <a class="read-more slider-button-2 font-weight-bold theme_button d-inline-block mt-2" href="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_slide_btn_two_url'.$i)); ?>">
                              <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_slide_btn_two_text'.$i)); ?>
                            </a>
                          <?php } ?>
                        </div>
                      </div>
                    </div> 
                    <?php if ( get_theme_mod('vw_computer_repair_pro_slider_arrows',true) == "1" ) { ?>
                      <div class="slide_nav">
                        <a class="carousel-prev-button hvr-shrink" href="#carouselindicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                          <span class="sr-only"><?php esc_html_e('Previous','vw-computer-repair-pro'); ?></span>
                        </a>
                        <a class="carousel-next-button hvr-shrink" href="#carouselindicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                          <span class="sr-only"><?php esc_html_e('Next','vw-computer-repair-pro'); ?></span>
                        </a>
                      </div>
                    <?php }?>
                  </div>
                </div>  
                <?php } ?>
              </div>
          <?php } ?>
        </div>
        <?php if ( get_theme_mod('vw_computer_repair_pro_slider_dots',true) == "1" ) { ?>
          <ol class="carousel-indicators">
            <?php for($i=1;$i<=$number;$i++){ ?>
              <li data-target="#carouselindicators" data-slide-to="<?php echo($i-1); ?>" class="<?php if($i==1){echo 'active';} ?>"></li>
            <?php } ?>
          </ol> 
        <?php } ?>  
      </div> 
      <div class="clearfix"></div>
  </section>
<?php 
  }
?>