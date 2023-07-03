<?php
/**
 * Template part for displaying our team
 *
 * @package vw-computer-repair-pro
 */

  $section_hide = get_theme_mod( 'vw_computer_repair_pro_our_team_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  $img_bg = get_theme_mod('vw_computer_repair_pro_team_image_bg');

  if( get_theme_mod('vw_computer_repair_pro_our_team_bgcolor','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_computer_repair_pro_our_team_bgcolor','')).';';
  }elseif( get_theme_mod('vw_computer_repair_pro_our_team_bgimage','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_computer_repair_pro_our_team_bgimage')).'\')';
  }else{
    $about_backg='';
  }

  $team_loop="";
  if(get_theme_mod('vw_computer_repair_pro_our_team_slider_loop',true)=='1')
  {
    $team_loop="true";
  }else{
    $team_loop="false";
  }

?>
<section id="our-team" style="<?php echo esc_attr($about_backg); ?>" class="<?php echo esc_attr($img_bg); ?>">
  <div class="container">
    <div class="row our-team-head pb-4">
      <div class="col-lg-1 col-md-1 col-sm-2">
         <?php if(get_theme_mod('vw_computer_repair_pro_our_team_small_heading')!=''){ ?>
          <p class="small-title mb-0">
            <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_our_team_small_heading')); ?>
          </p>
        <?php } ?>
      </div>
      <div class="col-lg-11 col-md-11 col-sm-10">
        <?php if(get_theme_mod('vw_computer_repair_pro_our_team_main_heading')!=''){ ?>
          <h3>
            <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_our_team_main_heading')); ?>
          </h3>
        <?php } if(get_theme_mod('vw_computer_repair_pro_our_team_text')!=''){ ?>
          <p class="team-text mb-0 pt-2">
            <?php echo (get_theme_mod('vw_computer_repair_pro_our_team_text')); ?>
          </p>
        <?php } ?>
      </div>
    </div>
    <div class="owl-carousel">
      <?php
      $i=1;
      $args = array(
        'post_type' => 'team',
        'post_status' => 'publish',
        'posts_per_page' => get_theme_mod('vw_computer_repair_pro_our_team_number')
      );  
      $query = new WP_Query($args); 
      if ( $query->have_posts() ) :  while ($query->have_posts()) : $query->the_post(); ?>
        <div class="team-content">
          <div class="row team-info">
            <div class="col-lg-6 col-md-5 team-image pr-0">
             <img  src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" alt="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_team_featured_image_alt_text'.$i)); ?>">
            </div>
            <div class="col-lg-6 col-md-7 team-text pl-0">
              <div class="team-box py-3 px-2 pl-4">
                <a href="<?php the_permalink(); ?>" class="team-title d-inline-block mb-5">
                  <?php the_title(); ?>
                </a>
                <?php if(get_post_meta($post->ID,'meta-designation',true)) { ?>
                  <span class="pl-2">
                    <?php echo esc_html(get_post_meta($post->ID,'meta-designation',true)); ?>
                  </span>
                <?php } if(get_post_meta($post->ID,'meta-team-phone',true)) { ?>
                  <p class="mb-1">
                    <i class="fas fa-phone"></i>
                    <?php echo esc_html(get_post_meta($post->ID,'meta-team-phone',true)); ?>
                  </p>
                <?php } if(get_post_meta($post->ID,'meta-team-email',true)) { ?>
                  <p class="mb-1">
                    <i class="far fa-envelope"></i>
                    <?php echo esc_html(get_post_meta($post->ID,'meta-team-email',true)); ?>
                  </p>
                <?php } ?>
                <div class="social-icons">
                  <?php if(get_post_meta($post->ID,'meta-tfacebookurl',true)) { ?>
                    <a class="" href="<?php echo esc_html(get_post_meta($post->ID,'meta-tfacebookurl',true)); ?>" target="_blank"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php echo esc_html('facebook.com', 'vw-computer-repair-pro' ) ; ?></span></a>
                   <?php }
                  if(get_post_meta($post->ID,'meta-ttwitterurl',true)) { ?>
                    <a class="" href="<?php echo esc_html(get_post_meta($post->ID,'meta-ttwitterurl',true)); ?>" target="_blank"><i class="fab fa-twitter"></i><span class="screen-reader-text"><?php echo esc_html('twitter.com', 'vw-computer-repair-pro' ) ; ?></span></a>
                  <?php }
                  if(get_post_meta($post->ID,'meta-tlinkdenurl',true)) { ?>
                    <a class="" href="<?php echo esc_html(get_post_meta($post->ID,'meta-tlinkdenurl',true)); ?>" target="_blank"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php echo esc_html('linkedin.com', 'vw-computer-repair-pro' ) ; ?></span></a>
                  <?php } 
                      if(get_post_meta($post->ID,'meta-tinstagram',true)!= ''){ ?>
                    <a href="<?php echo esc_html(get_post_meta($post->ID,'meta-tinstagram',true)); ?>">
                        <i class="fab fa-instagram align-middle"></i><span class="screen-reader-text"><?php echo esc_html('instagram.com', 'vw-computer-repair-pro' ) ; ?></span>
                    </a>
                  <?php } if(get_post_meta($post->ID,'meta-pinterest',true)!= ''){ ?>
                    <a href="<?php echo esc_html(get_post_meta($post->ID,'meta-pinterest',true)); ?>">
                        <i class="fab fa-pinterest-p align-middle "></i><span class="screen-reader-text"><?php echo esc_html('pinterest.com', 'vw-computer-repair-pro' ) ; ?></span>
                    </a>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php $i++; endwhile; endif; ?>
    </div>
  </div>
  <span id="team-loop" class="d-none"><?php echo esc_html($team_loop); ?></span>
</section>