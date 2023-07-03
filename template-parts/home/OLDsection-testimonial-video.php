<?php
/**
 * Template part for displaying testimonial and video
 *
 * @package vw-computer-repair-pro
 */

  $section_hide = get_theme_mod( 'vw_computer_repair_pro_testimonial_video_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  $img_bg = get_theme_mod('vw_computer_repair_pro_testimonial_video_image_bg');

  if( get_theme_mod('vw_computer_repair_pro_testimonial_video_bgcolor','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_computer_repair_pro_testimonial_video_bgcolor','')).';';
  }elseif( get_theme_mod('vw_computer_repair_pro_testimonial_video_bgimage','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_computer_repair_pro_testimonial_video_bgimage')).'\')';
  }else{
    $about_backg='';
  }
 
  if( get_theme_mod('vw_computer_repair_pro_testimonial_bgcolor','') ) {
    $test_backg = 'background-color:'.esc_attr(get_theme_mod('vw_computer_repair_pro_testimonial_bgcolor','')).';';
  }elseif( get_theme_mod('vw_computer_repair_pro_testimonial_bgimage','') ){
    $test_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_computer_repair_pro_testimonial_bgimage')).'\')';
  }else{
    $test_backg='';
  }

  $testimonial_loop="";
  if(get_theme_mod('vw_computer_repair_pro_testimonial_slider_loop',true)=='1')
  {
    $testimonial_loop="true";
  }else{
    $testimonial_loop="false";
  }

  $test_col1="col-lg-8 col-md-8";
  $test_col2="col-lg-4 col-md-4";
  if(get_theme_mod('vw_computer_repair_pro_testimonial_enable',true)!='1'){
    $test_col1="";
    $test_col2="col-lg-12 col-md-12";
  }

  if(get_theme_mod('vw_computer_repair_pro_video_enable',true)!='1'){
    $test_col1="col-lg-12 col-md-12";
    $test_col2="";
  }

  $hide_testimonial="";
  if(get_theme_mod('vw_computer_repair_pro_testimonial_enable') !=""){
    $hide_testimonial="position:relative";
  }else{
    $hide_testimonial="position:unset";
  }
  $testi_excerpt="";
  if(get_theme_mod('vw_computer_repair_pro_testimonial_excerpt_no')!=''){
  $testi_excerpt=get_theme_mod('vw_computer_repair_pro_testimonial_excerpt_no');
  }
?>
<section id="testimonial-video" style="<?php echo esc_attr($about_backg); ?>" class="<?php echo esc_attr($img_bg); ?>">
  <div class="container">
    <div class="row">
      <?php if(get_theme_mod('vw_computer_repair_pro_testimonial_enable',true)=='1'){ ?>
        <div class="<?php echo esc_attr($test_col1); ?>">
          <div class="owl-carousel py-4 px-3" style="<?php echo esc_attr($test_backg); ?>">
            <?php
            $i=1;
            $args = array(
              'post_type' => 'testimonials',
              'post_status' => 'publish',
              'posts_per_page' => get_theme_mod('vw_computer_repair_pro_testimonial_number')
            );  
            $query = new WP_Query($args); 
            if ( $query->have_posts() ) :  while ($query->have_posts()) : $query->the_post(); ?>
              <div class="testimonial">
                <?php if(get_theme_mod('vw_computer_repair_pro_testimonial_small_heading')!=''){ ?>
                  <span class="test-heading d-inline-block py-2 px-3">
                    <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_testimonial_small_heading')); ?>
                  </span>
                <?php } ?>
                <div class="row test-title pt-3">
                  <div class="col-lg-2 col-md-3 col-sm-4">
                    <img  src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" alt="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_testimonial_featured_image_alt_text'.$i)); ?>">
                  </div>
                  <div class="col-lg-10 col-md-9 col-sm-8">
                    <h5>
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h5>
                    <?php if(get_post_meta($post->ID,'vw_computer_repair_pro_posttype_testimonial_desigstory',true)) { ?>
                      <span><?php echo esc_html(get_post_meta($post->ID,'vw_computer_repair_pro_posttype_testimonial_desigstory',true)); ?></span>
                    <?php } ?>
                  </div>
                </div>
                <div class="testimonial-text p-2"><?php $excerpt = get_the_excerpt(); echo esc_html(vw_computer_repair_pro_string_limit_words($excerpt,$testi_excerpt)); ?></div>
                <div class="test-icons">
                  <?php if(get_post_meta($post->ID,'meta-tes-phone',true)) { ?>
                    <span>
                    <i class="fas fa-phone"></i>
                    <?php echo esc_html(get_post_meta($post->ID,'meta-tes-phone',true)); ?></span>
                  <?php } if(get_post_meta($post->ID,'meta-tes-email',true)) { ?>
                    <span class="test-email px-3">
                    <i class="far fa-envelope"></i>
                    <?php echo esc_html(get_post_meta($post->ID,'meta-tes-email',true)); ?></span>
                  <?php } if(get_post_meta($post->ID,'meta-tes-facebookurl',true)) { ?>
                    <a class="" href="<?php echo esc_html(get_post_meta($post->ID,'meta-tes-facebookurl',true)); ?>" target="_blank"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php echo esc_html('facebook.com', 'vw-computer-repair-pro' ) ; ?></span></a>
                   <?php }
                  if(get_post_meta($post->ID,'meta-tes-twitterurl',true)) { ?>
                    <a class="" href="<?php echo esc_html(get_post_meta($post->ID,'meta-tes-twitterurl',true)); ?>" target="_blank"><i class="fab fa-twitter"></i><span class="screen-reader-text"><?php echo esc_html('twitter.com', 'vw-computer-repair-pro' ) ; ?></span></a>
                  <?php }
                  if(get_post_meta($post->ID,'meta-tes-linkdenurl',true)) { ?>
                    <a class="" href="<?php echo esc_html(get_post_meta($post->ID,'meta-tes-linkdenurl',true)); ?>" target="_blank"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php echo esc_html('linkedin.com', 'vw-computer-repair-pro' ) ; ?></span></a>
                  <?php } 
                      if(get_post_meta($post->ID,'meta-tes-instagram',true)!= ''){ ?>
                    <a href="<?php echo esc_html(get_post_meta($post->ID,'meta-tes-instagram',true)); ?>">
                        <i class="fab fa-instagram align-middle"></i><span class="screen-reader-text"><?php echo esc_html('instagram.com', 'vw-computer-repair-pro' ) ; ?></span>
                    </a>
                  <?php } if(get_post_meta($post->ID,'meta-tes-pinterest',true)!= ''){ ?>
                    <a href="<?php echo esc_html(get_post_meta($post->ID,'meta-tes-pinterest',true)); ?>">
                        <i class="fab fa-pinterest-p align-middle "></i><span class="screen-reader-text"><?php echo esc_html('pinterest.com', 'vw-computer-repair-pro' ) ; ?></span>
                    </a>
                  <?php } ?>
                </div>
              </div>
            <?php $i++; endwhile; endif; ?>
          </div>
        </div>
      <?php } if(get_theme_mod('vw_computer_repair_pro_video_enable',true)=='1'){ ?>
        <div class="<?php echo esc_attr($test_col2); ?>">
          <div class="video text-center" style="<?php echo esc_attr($hide_testimonial); ?>">
            <?php if(get_theme_mod('vw_computer_repair_pro_video_play_icon')!=''){ ?>
              <a data-toggle="modal" href="#myModal" id="myBtn">
                <i class="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_video_play_icon')); ?>">
                </i>
                <span class="screen-reader-text"><?php esc_html_e('Play Button','vw-computer-repair-pro')?></span>
              </a>
            <?php } if(get_theme_mod('vw_computer_repair_pro_video_small_heading')!=''){ ?>
              <p class="pt-3">
                <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_video_small_heading')); ?>
              </p>
            <?php } if(get_theme_mod('vw_computer_repair_pro_video_main_heading')!=''){ ?>
              <h3>
                <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_video_main_heading')); ?>
              </h3>
            <?php } ?>
            <div id="myNewModal" class="modal-new">
              <!-- Modal content -->
              <div class="modal-contents">
                  <button class="close-one">&times;<span class="screen-reader-text"><?php esc_html_e('Close Button','vw-computer-repair-pro')?></span></button>
                  <?php if( get_theme_mod('vw_computer_repair_pro_video_url') != ''){ ?>
                    <iframe width="100%" height="345" src=" <?php echo (get_theme_mod('vw_computer_repair_pro_video_url')); ?>">
                  </iframe>
                <?php }else{ ?>
                  <h3><?php esc_html_e('Add Video Url In Customizer To Display Video Here','vw-computer-repair-pro'); ?></h3>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  <span id="testimonial-loop" class="d-none"><?php echo esc_html($testimonial_loop); ?></span>
</section>