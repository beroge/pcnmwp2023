<?php
/**
 * Template Name:Page with Left and Right Sidebar
 */ 

get_header();

get_template_part( 'template-parts/banner' );
?>

<div class="container">
  <div class="row">
    <div class="col-lg-3 col-md-5" id="sidebar">
      <?php dynamic_sidebar('vw-page-left-sidebar'); ?>
    </div>
    <div class="col-lg-6 col-md-7 content_page">
      <?php while ( have_posts() ) : the_post(); ?>
         <?php the_content();?>
         <?php
         //If comments are open or we have at least one comment, load up the comment template
          if ( comments_open() || '0' != get_comments_number() )
              comments_template();
         ?>
       <?php endwhile; // end of the loop. ?>
    </div>
    <div class="col-lg-3 col-md-5" id="sidebar">
      <?php dynamic_sidebar('vw-sidebar-2'); ?>
    </div>
    <div class="clear"></div>
  </div>
</div>
<?php get_footer(); ?>