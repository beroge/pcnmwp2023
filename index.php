<?php get_header(); ?>
 <div class="post-section mt-5">
 	<div class="container">
 		<div class="row">
 			<div class="col-lg-8 col-sm-6 col-md-8">
 				<div class="row">
	 				<?php while ( have_posts() ) : the_post();
	 					get_template_part( 'template-parts/post/post-content' );
	 				endwhile; ?>
	 			</div>
 			  <div class="navigation pagination">
 				<?php // Previous/next page navigation.
 				  the_posts_pagination( array(
 					  'prev_text'          => __( 'Previous page', 'vw-computer-repair-pro' ),
 					  'next_text'          => __( 'Next page', 'vw-computer-repair-pro' ),
 					  'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-computer-repair-pro' ) . ' </span>',
 				  )); ?>
 			  </div>
 			</div>
 			<div class="col-lg-4 col-md-4 col-sm-12" id="sidebar">
 				<?php dynamic_sidebar('vw-sidebar-1'); ?>
 			</div>
 		</div>
 	</div>
 </div>
<?php get_footer(); ?>