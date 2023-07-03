<?php
  $theme_lay = get_theme_mod( 'vw_computer_repair_pro_single_blog_option','two_col');
  if($theme_lay == 'one_col'){ ?>
  <div id="single_post" class="col-lg-12 col-md-12 col-sm-12"> 
    <div class="postbox">
      <div class="postpic">
        <div class="post_pic_inner">
          <?php if (get_theme_mod('vw_computer_repair_pro_blog_featured_image_enable',true) == '1'){?>
            <?php if (has_post_thumbnail()){ ?>
              <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?> post thumbnail">
            <?php } ?>
          <?php }?>
        </div>
      </div>
      <div class="postbox-content">
        <?php 
        $post_title=get_the_title();
        if($post_title!="" || $post_title!=null){ ?>
          <h4 class="posttitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <?php }else{ ?>
          <a href="<?php the_permalink(); ?>"><?php echo esc_html_e('Read More','vw-computer-repair-pro'); ?></a>
        <?php } ?>
        <div class="mb-3 post-text">
          <?php if(get_theme_mod('vw_computer_repair_pro_post_content') == 'Full Content'){ ?>
             <p><?php the_content(); ?></p>
          <?php }
            if(get_theme_mod('vw_computer_repair_pro_post_content', 'Excerpt Content') == 'Excerpt Content'){ ?>
              <?php if(get_the_excerpt()) { ?>
                <p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_computer_repair_pro_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_computer_repair_pro_excerpt_length','20')))); ?><?php echo esc_html( get_theme_mod('vw_computer_repair_pro_button_excerpt_suffix','[...]') ); ?></p>
              <?php }?>
          <?php }?>
        </div>
        <?php if ( get_theme_mod('vw_computer_repair_pro_post_general_settings_post_date',true) == "1" ) { ?>
          <span class="entry-date mr-3">
            <i class="far fa-calendar-alt"></i>
              <?php echo esc_html( get_the_date() ); ?>
          </span>
          <?php } if ( get_theme_mod('vw_computer_repair_pro_post_general_settings_post_author',true) == "1" ) { ?>
            <span class="mr-3"><i class="fas fa-user"></i> <?php the_author() ?></span>
          <?php }if ( get_theme_mod('vw_computer_repair_pro_post_general_settings_post_comments',true) == "1" ){ ?>
          <span><i class="fas fa-comments"></i> <?php echo comments_number( __('no comments','vw-computer-repair-pro'), __('no comments','vw-computer-repair-pro'), __('% comments','vw-computer-repair-pro') ); ?></span>
        <?php } ?>
      </div>
    </div>
  </div>
  <?php }else if($theme_lay == 'two_col'){ ?>
  <div id="single_post" class="col-lg-6 col-md-6 col-sm-12"> 
    <div class="postbox">
      <div class="postpic">
         <div class="post_pic_inner">
          <?php if (get_theme_mod('vw_computer_repair_pro_blog_featured_image_enable',true) == '1'){?>
            <?php if (has_post_thumbnail()){ ?>
              <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?> post thumbnail">
            <?php } ?>
          <?php }?>
        </div>
      </div>
      <div class="postbox-content">
        <?php 
        $post_title=get_the_title();
        if($post_title!="" || $post_title!=null){ ?>
          <h4 class="posttitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <?php }else{ ?>
          <a href="<?php the_permalink(); ?>"><?php echo esc_html_e('Read More','vw-computer-repair-pro'); ?></a>
        <?php } ?>
        <div class="mb-3 post-text">
          <?php if(get_theme_mod('vw_computer_repair_pro_post_content') == 'Full Content'){ ?>
             <p><?php the_content(); ?></p>
          <?php }
            if(get_theme_mod('vw_computer_repair_pro_post_content', 'Excerpt Content') == 'Excerpt Content'){ ?>
              <?php if(get_the_excerpt()) { ?>
                <p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_computer_repair_pro_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_computer_repair_pro_excerpt_length','20')))); ?><?php echo esc_html( get_theme_mod('vw_computer_repair_pro_button_excerpt_suffix','[...]') ); ?></p>
              <?php }?>
          <?php }?>
        </div>
        <?php if ( get_theme_mod('vw_computer_repair_pro_post_general_settings_post_date',true) == "1" ) { ?>
          <span class="entry-date mr-3">
            <i class="far fa-calendar-alt"></i>
              <?php echo esc_html( get_the_date() ); ?>
          </span>
          <?php } if ( get_theme_mod('vw_computer_repair_pro_post_general_settings_post_author',true) == "1" ) { ?>
            <span class="mr-3"><i class="fas fa-user"></i> <?php the_author() ?></span>
          <?php }if ( get_theme_mod('vw_computer_repair_pro_post_general_settings_post_comments',true) == "1" ){ ?>
          <span><i class="fas fa-comments"></i> <?php echo comments_number( __('no comments','vw-computer-repair-pro'), __('no comments','vw-computer-repair-pro'), __('% comments','vw-computer-repair-pro') ); ?></span>
        <?php } ?>
      </div>
    </div>
  </div>
  <?php }else if($theme_lay == 'three_col'){ ?>
  <div id="single_post" class="col-lg-4 col-md-4 col-sm-12"> 
    <div class="postbox">
      <div class="postpic">
         <div class="post_pic_inner">
          <?php if (get_theme_mod('vw_computer_repair_pro_blog_featured_image_enable',true) == '1'){?>
            <?php if (has_post_thumbnail()){ ?>
              <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?> post thumbnail">
            <?php } ?>
          <?php }?>
        </div>
      </div>
      <div class="postbox-content">
        <?php 
        $post_title=get_the_title();
        if($post_title!="" || $post_title!=null){ ?>
          <h4 class="posttitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <?php }else{ ?>
          <a href="<?php the_permalink(); ?>"><?php echo esc_html_e('Read More','vw-computer-repair-pro'); ?></a>
        <?php } ?>
        <div class="mb-3 post-text"><?php $excerpt = get_the_excerpt(); echo esc_html(vw_computer_repair_pro_string_limit_words($excerpt,29)); ?></div>
        <?php if ( get_theme_mod('vw_computer_repair_pro_post_general_settings_post_date',true) == "1" ) { ?>
          <span class="entry-date mr-3">
            <i class="far fa-calendar-alt"></i>
              <?php echo esc_html( get_the_date() ); ?>
          </span>
          <?php } if ( get_theme_mod('vw_computer_repair_pro_post_general_settings_post_author',true) == "1" ) { ?>
            <span class="mr-3"><i class="fas fa-user"></i> <?php the_author() ?></span>
          <?php }if ( get_theme_mod('vw_computer_repair_pro_post_general_settings_post_comments',true) == "1" ){ ?>
          <span><i class="fas fa-comments"></i> <?php echo comments_number( __('no comments','vw-computer-repair-pro'), __('no comments','vw-computer-repair-pro'), __('% comments','vw-computer-repair-pro') ); ?></span>
        <?php } ?>
      </div>
    </div>
  </div>
<?php } ?>
