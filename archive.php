<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vw-computer-repair-pro
 */

get_header(); ?>

<div class="container mt-5">
	<header class="page-header">
		<?php the_archive_title( '<h2 class="page-title">', '</h2>' );
		the_archive_description( '<div class="taxonomy-description">', '</div>' );?>
		<?php if ( get_theme_mod('vw_computer_repair_pro_site_breadcrumb_enable', true) == "1" ) { ?> 
            <div class="bradcrumbs py-3">
                <?php vw_computer_repair_pro_the_breadcrumb(); ?>
            </div>
        <?php } ?>	
	</header>
	<main id="maincontent" role="main">
		<div class="row">
			<div class="col-lg-8 col-sm-6 col-md-8">
				<div class="row">
					<?php if ( have_posts() ) : ?>
						
						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/post/post-content' );
						endwhile;?>
						<div class="navigation pagination">
							<?php // Previous/next page navigation.
							the_posts_pagination( array(
								'prev_text'          => __( 'Previous page', 'vw-computer-repair-pro' ),
								'next_text'          => __( 'Next page', 'vw-computer-repair-pro' ),
								'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-computer-repair-pro' ) . ' </span>',
							));?>

						</div>
					<?php else :
						get_template_part( 'no-results', 'archive' ); ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12" id="sidebar">
				<?php dynamic_sidebar('vw-sidebar-1'); ?>
			</div>
			<div class="clearfix"></div>
		</div>
	</main>
</div>

<?php get_footer(); ?>
