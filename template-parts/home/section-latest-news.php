<?php
/**
 * Template part for displaying latest news
 *
 * @package vw-computer-repair-pro
 */

  $section_hide = get_theme_mod( 'vw_computer_repair_pro_latest_news_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  $img_bg = get_theme_mod('vw_computer_repair_pro_latest_news_image_bg');

  if( get_theme_mod('vw_computer_repair_pro_latest_news_bgcolor','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_computer_repair_pro_latest_news_bgcolor','')).';';
  }elseif( get_theme_mod('vw_computer_repair_pro_latest_news_bgimage','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_computer_repair_pro_latest_news_bgimage')).'\')';
  }else{
    $about_backg='';
  }

  $news_loop="";
  if(get_theme_mod('vw_computer_repair_pro_latest_news_slider_loop',true)=='1')
  {
    $news_loop="true";
  }else{
    $news_loop="false";
  }
?>
<section id="latest-news" style="<?php echo esc_attr($about_backg); ?>" class="<?php echo esc_attr($img_bg); ?> pb-0">
  <div class="container">
    <div class="row latest-news-head pb-4">
      <div class="col-lg-1 col-md-1 col-sm-2">
         <?php if(get_theme_mod('vw_computer_repair_pro_latest_news_small_heading')!=''){ ?>
          <p class="small-title mb-0">
            <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_latest_news_small_heading')); ?>
          </p>
        <?php } ?>
      </div>
      <div class="col-lg-11 col-md-11 col-sm-10">
        <?php if(get_theme_mod('vw_computer_repair_pro_latest_news_main_heading')!=''){ ?>
          <h3>
            <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_latest_news_main_heading')); ?>
          </h3>
        <?php } if(get_theme_mod('vw_computer_repair_pro_latest_news_text')!=''){ ?>
          <p class="news-text mb-0 pt-2">
            <?php echo (get_theme_mod('vw_computer_repair_pro_latest_news_text')); ?>
          </p>
        <?php } ?>
      </div>
    </div>
    <div class="owl-carousel">
      <?php
      $i=1;
      $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => get_theme_mod('vw_computer_repair_pro_latest_news_number')
      );  
      $query = new WP_Query($args); 
      if ( $query->have_posts() ) :  while ($query->have_posts()) : $query->the_post(); ?>
        <div class="news-content text-center">
          <img  src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" alt="<?php echo esc_html(get_theme_mod('vw_computer_repair_pro_post_image_alt_text'.$i)); ?>">

          <div class="news-info">
            <?php if ( get_theme_mod('vw_computer_repair_pro_post_general_settings_post_date',true) == "1" ) { ?>
              <div class="news-date">
                <span class="d-inline-block py-3 px-4"><?php the_time('d M'); ?></span>
              </div> 
            <?php } ?>
            <h4><span class="text-center">
                <?php the_title(); ?>
            </span></h4>
            <div class="blog-meta pb-3">              
              <?php if ( get_theme_mod('vw_computer_repair_pro_post_general_settings_post_author',true) == "1" ) { ?>
                <span class="blog-author text-center">
                  <i class="fas fa-user"></i>
                  <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="text-center"><?php the_author(); ?></a>
                </span>
              <?php } if ( get_theme_mod('vw_computer_repair_pro_post_general_settings_post_comments',true) == "1" ) { ?>
                <span class="blog-comments text-center"> 
                  <i class="fas fa-comments"></i>
                  <?php comments_number( '0 Comment', 'Comment 1', 'Comments % ' ); ?>
                </span>
              <?php } ?>
            </div>
            <?php if(get_theme_mod('vw_computer_repair_pro_latest_news_button_title')!=''){ ?>
              <a href="<?php the_permalink(); ?>" class="news-link text-center py-3 px-4 d-inline-block">
                <?php echo esc_html(get_theme_mod('vw_computer_repair_pro_latest_news_button_title')); ?>
              </a>
            <?php } ?>
          </div>
        </div>
      <?php $i++; endwhile; endif; ?>
    </div>
  </div>
  <span id="news-loop" class="d-none"><?php echo esc_html($news_loop); ?></span>
</section>