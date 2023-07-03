<?php
/**
 * The template for displaying all category pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package vw-computer-repair-pro
 */
get_header(); ?>
<div class="container">
	<?php the_archive_title( '<h1>', '</h1>' ); ?>
</div>
<div class="feature-box">
	<div class="container">
		<div class="col-md-12">
			<?php if ( get_theme_mod('vw_computer_repair_pro_site_breadcrumb_enable', true) == "1" ) { ?> 
	            <div class="bradcrumbs py-3">
	                <?php vw_computer_repair_pro_the_breadcrumb(); ?>
	            </div>
	        <?php } ?>	
		</div>
	</div>
</div>
<div class="container">
    <div class="row">
		<div class="col-lg-9 col-md-8">
			<div class="row">
				<?php if ( have_posts() ) : ?>
	                <?php while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/post/post-content' );
					endwhile; ?>
	            <?php else : ?>
	                <?php get_template_part( 'no-results', 'archive' ); ?>
	            <?php endif; ?>
	            <div class="navigation">
					<?php // Previous/next page navigation.
			            the_posts_pagination( array(
			                'prev_text'  => __( 'Previous page', 'vw-computer-repair-pro' ),
			                'next_text'  => __( 'Next page', 'vw-computer-repair-pro' ),
			                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-computer-repair-pro' ) . ' </span>',
			            ));
					?>
				</div>
			</div>
        </div>
		<div id="sidebar" class="col-lg-3 col-md-4">
			<?php get_sidebar( 'page' ); ?>
		</div>
        <div class="clearfix"></div>
    </div>
</div>
<?php get_footer(); ?>