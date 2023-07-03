<?php
/**
 * The Template for displaying all single teachers.
 *
 * @package vw-computer-repair-pro
 */
get_header();
get_template_part( 'template-parts/banner' ); 
?>
<main id="maincontent" role="main">
    <div class="container">
        <div id="single-team">
            <div class="row">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="col-md-7 col-sm-12 col-lg-8 col-xs-12">
                        <div class="inner-page-feature-box"> 
                            <img src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="<?php the_title(); ?> post thumbnail">
                            <?php if(get_post_meta($post->ID,'meta-designation',true)) { ?>
                                <p>
                                    <i class="fas fa-user"></i>
                                    <?php echo esc_html(get_post_meta($post->ID,'meta-designation',true)); ?></p>
                            <?php } ?>
                            <?php if(get_post_meta($post->ID,'meta-team-email',true)) { ?>
                                <p class="email">
                                    <i class="far fa-envelope"></i>
                                    <?php echo esc_html(get_post_meta($post->ID,'meta-team-email',true)); ?>
                                </p>
                            <?php } if(get_post_meta($post->ID,'meta-team-phone',true)) { ?>
                                <p class="phone">
                                    <i class="fas fa-phone"></i>
                                    <?php echo esc_html(get_post_meta($post->ID,'meta-team-phone',true)); ?>
                                </p>
                            <?php } ?>
                            <div class="social-profiles">
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
                                        <i class="fab fa-instagram align-middle"><span class="screen-reader-text"><?php echo esc_html('instagram.com', 'vw-computer-repair-pro' ) ; ?></span></i>
                                    </a>
                                <?php } if(get_post_meta($post->ID,'meta-pinterest',true)!= ''){ ?>
                                    <a href="<?php echo esc_html(get_post_meta($post->ID,'meta-pinterest',true)); ?>">
                                        <i class="fab fa-pinterest-p align-middle "></i><span class="screen-reader-text"><?php echo esc_html('pinterest.com', 'vw-computer-repair-pro' ) ; ?></span>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="single-page-content"><?php the_content();?></div>
                    </div>
                    <div class="col-md-5 col-sm-12 col-lg-4 col-xs-12" id="sidebar">
                      <?php dynamic_sidebar('vw-sidebar-1'); ?>
                    </div>
                <?php endwhile; // end of the loop. ?>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</main>
<?php get_footer(); ?>