<?php
/**
 * Template part for displaying our projects
 *
 * @package vw-computer-repair-pro
 */

  $section_hide = get_theme_mod( 'vw_computer_repair_pro_our_projects_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  $img_bg = get_theme_mod('vw_computer_repair_pro_project_image_bg');

  if( get_theme_mod('vw_computer_repair_pro_our_projects_bgcolor','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_computer_repair_pro_our_projects_bgcolor','')).';';
  }elseif( get_theme_mod('vw_computer_repair_pro_our_projects_bgimage','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_computer_repair_pro_our_projects_bgimage')).'\')';
  }else{
    $about_backg='';
  }

  $projects_loop="";
  if(get_theme_mod('vw_computer_repair_pro_our_projects_slider_loop',true)=='1')
  {
    $projects_loop="true";
  }else{
    $projects_loop="false";
  }

?>
<section id="our-projects" style="<?php echo esc_attr($about_backg); if(get_theme_mod('vw_computer_repair_pro_our_features_enable')=='Disable'){ echo "padding-top:50px;"; } if(get_theme_mod('vw_computer_repair_pro_about_us_enable')=='Disable'){ echo "padding-top:50px;"; }?>" class="<?php echo esc_attr($img_bg); ?>">
  <div class="container">
    <div class="row our-projects-head mb-4">
      <div class="col-lg-1 col-md-1 col-sm-2">
         <?php if(get_theme_mod('vw_computer_repair_pro_our_projects_small_heading')!=''){ ?>
          <p class="small-title">
            <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_our_projects_small_heading')); ?>
          </p>
        <?php } ?>
      </div>
      <div class="col-lg-11 col-md-11 col-sm-10">
        <?php if(get_theme_mod('vw_computer_repair_pro_our_projects_main_heading')!=''){ ?>
          <h3>
            <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_our_projects_main_heading')); ?>
          </h3>
        <?php } if(get_theme_mod('vw_computer_repair_pro_our_projects_text')!=''){ ?>
          <p class="project-text pt-2 mb-0">
            <?php echo (get_theme_mod('vw_computer_repair_pro_our_projects_text')); ?>
          </p>
        <?php } ?>
      </div>
    </div>
    <div class="owl-carousel">
      <?php
      $i=1;
      $args = array(
        'post_type' => 'projects',
        'post_status' => 'publish',
        'posts_per_page' => get_theme_mod('vw_computer_repair_pro_our_projects_number')
      );  
      $query = new WP_Query($args); 
      if ( $query->have_posts() ) :  while ($query->have_posts()) : $query->the_post(); ?>
        <div class="project-content">
          <div class="vw-computer-box text-center">
            <img  src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" alt="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_project_featured_image_alt_text'.$i)); ?>">
            <div class="vw-computer-box-content">
              <div class="vw-computer-content">
                <a href="<?php the_permalink(); ?>" class="post mb-2 d-block pl-2 text-lg-left">
                  <?php the_title(); ?>
                  <?php if(get_post_meta($post->ID,'meta-project-issue',true)) { ?>
                    <h4><?php echo esc_html(get_post_meta($post->ID,'meta-project-issue',true)); ?></h4>
                  <?php } ?>
                 </a>
              </div>
            </div>
          </div>
        </div>
      <?php $i++; endwhile; endif; ?>
    </div>
  </div>
  <span id="projects-loop" class="d-none"><?php echo esc_html($projects_loop); ?></span>
</section>