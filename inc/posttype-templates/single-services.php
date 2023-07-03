<?php
/**
 * The Template for displaying all single classes.
 *
 * @package vw-computer-repair-pro
 */
get_header();
get_template_part( 'template-parts/banner' ); ?>
<main id="maincontent" role="main">
    <div class="container">
        <div class="row">
            <div id="services_single" class="col-lg-8 col-md-7">
                <?php while ( have_posts() ) : the_post(); ?>
                <div class="services-image">
                    <?php if(has_post_thumbnail()){ ?>
                        <img src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="<?php the_title(); ?> post thumbnail">
                    <?php } ?>  
                </div>
                <div class="single-page-content pt-3"><?php the_content();?></div>     
                <div class="post_pagination mt-4">
                    <?php the_post_navigation( array(
                        'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'vw-computer-repair-pro' ) . '</span> ' .
                            '<span class="screen-reader-text">' . __( 'Next post:', 'vw-computer-repair-pro' ) . '</span> ' .
                            '<span class="post-title">%title</span>',
                        'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'vw-computer-repair-pro' ) . '</span> ' .
                            '<span class="screen-reader-text">' . __( 'Previous post:', 'vw-computer-repair-pro' ) . '</span> ' .
                            '<span class="post-title">%title</span>',
                    ) );?>
                </div>
            </div>    
            <div class="col-lg-4 col-md-5" id="sidebar">
                <?php dynamic_sidebar('vw-sidebar-1'); ?>
            </div>   
            <div class="clearfix"></div>
            <?php endwhile; // end of the loop. ?> 
        </div>    
    </div>
</main>
<?php get_footer(); ?>