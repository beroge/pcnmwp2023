<?php
/**
 * Template Name:Blog With Left And Right Sidebar
 */
get_header();

get_template_part( 'template-parts/banner' );
do_action('vw_computer_repair_pro_before_blog'); ?>
<main id="maincontent" role="main">
<div id="blog-right-sidebar">
	<div class="container">
	    <div class="row">
	    	<div class="col-lg-3 col-md-12" id="sidebar">
	    		<?php dynamic_sidebar('vw-sidebar-left'); ?>
	    	</div>
			<div class="col-lg-6 col-md-12">
				<div class="row">
					<?php if ( have_posts() ) : ?>
				      	<?php $vw_paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
							$args = array(
							   'paged' => $vw_paged,
							   'category_name' => get_theme_mod('vw_computer_repair_pro_category_setting')
							);
						$custom_query = new WP_Query( $args );
						while($custom_query->have_posts()) :
						   $custom_query->the_post();
						   get_template_part('template-parts/post/post-content');
						endwhile; // end of the loop.
						wp_reset_postdata(); ?>
					<?php else : ?>
						<h2><?php _e('Not Found','vw-computer-repair-pro'); ?></h2>
					<?php endif; ?>
				</div>
				<div class="vw-navigation">
	              	<?php 
						$big = 999999999;
						echo paginate_links( array(
							'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format' => 'paged=%#%',
							'current' =>  (get_query_var('paged') ? get_query_var('paged') : 1),
							'total' => $custom_query->max_num_pages
						) );
					?>
	            </div>
			</div>
			<div class="col-lg-3 col-md-12" id="sidebar">
				<?php dynamic_sidebar('vw-sidebar-1'); ?>
			</div>
	        <div class="clearfix"></div>
	    </div>
	</div>
</div>
</main>
<?php do_action('vw_computer_repair_pro_after_blog'); ?>
<?php get_footer(); ?>