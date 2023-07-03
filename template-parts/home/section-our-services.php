<?php
/**
 * Template part for displaying our services
 *
 * @package vw-computer-repair-pro
 */

  $section_hide = get_theme_mod( 'vw_computer_repair_pro_our_services_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  $img_bg = get_theme_mod('vw_computer_repair_pro_services_image_bg');

  if( get_theme_mod('vw_computer_repair_pro_our_services_bgcolor','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_computer_repair_pro_our_services_bgcolor','')).';';
  }elseif( get_theme_mod('vw_computer_repair_pro_our_services_bgimage','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_computer_repair_pro_our_services_bgimage')).'\')';
  }else{
    $about_backg='';
  }

  $services_loop="";
  if(get_theme_mod('vw_computer_repair_pro_our_services_slider_loop',true)=='1')
  {
    $services_loop="true";
  }else{
    $services_loop="false";
  }

?>
<section id="our-services" style="<?php echo esc_attr($about_backg); ?>" class="<?php echo esc_attr($img_bg); ?> pb-0">
  <div class="container">
    <div class="row our-services-head pb-4">
      <div class="col-lg-1 col-md-2 col-sm-2">
         <?php if(get_theme_mod('vw_computer_repair_pro_our_services_small_heading')!=''){ ?>
          <p class="small-title">
            <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_our_services_small_heading')); ?>
          </p>
        <?php } ?>
      </div>
      <div class="col-lg-11 col-md-10 col-sm-10">
        <?php if(get_theme_mod('vw_computer_repair_pro_our_services_main_heading')!=''){ ?>
          <h3>
            <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_our_services_main_heading')); ?>
          </h3>
        <?php } if(get_theme_mod('vw_computer_repair_pro_our_services_text')!=''){ ?>
          <p class="services-text mb-0 pt-2">
            <?php echo (get_theme_mod('vw_computer_repair_pro_our_services_text')); ?>
          </p>
        <?php } ?>
      </div>
    </div>
    <div class="owl-carousel">
      <?php
      $i=1;
      $args = array(
        'post_type' => 'services',
        'post_status' => 'publish',
        'posts_per_page' => get_theme_mod('vw_computer_repair_pro_our_services_number')
      );  
      $query = new WP_Query($args); 
      if ( $query->have_posts() ) :  while ($query->have_posts()) : $query->the_post(); ?>
        <div class="services-content">
          <img  src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" alt="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_services_featured_image_alt_text'.$i)); ?>">
          <div class="services-box text-center">
            <h4><span><?php the_title(); ?></span></h4>
            <?php if(get_theme_mod('vw_computer_repair_pro_our_services_link_title')!=''){ ?>
              <a href="<?php the_permalink(); ?>" class="link-title d-inline-block py-3 px-4">
                <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_our_services_link_title')); ?>
              </a>
            <?php } ?>
          </div>
        </div>
      <?php $i++; endwhile; endif; ?>
    </div>
  </div>
  <span id="services-loop" class="d-none"><?php echo esc_html($services_loop); ?></span>
</section>