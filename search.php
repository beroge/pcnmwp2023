<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package vw-computer-repair-pro
 */
get_header(); ?>
<div class="container">
	<div class="middle-align dfgdgdfgdf">
		<h2 class="entry-title"><?php printf( __( 'Results For: %s', 'vw-computer-repair-pro' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
		<main id="maincontent" role="main">
			<div class="row">
				<div class="col-lg-8 col-sm-6 col-md-12">
					<div class="row search-result">
						<?php if ( have_posts() ) : ?>
							<?php while ( have_posts() ) : the_post();
								get_template_part( 'template-parts/post/post-content' );
							endwhile; ?>
							<div class="navigation">
								<?php // Previous/next page navigation.
								the_posts_pagination( array(
									  'prev_text'          => __( 'Previous page', 'vw-computer-repair-pro' ),
									  'next_text'          => __( 'Next page', 'vw-computer-repair-pro' ),
									  'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-computer-repair-pro' ) . ' </span>',
								)); ?>
							</div>
						<?php else : ?>
							<?php get_template_part( 'no-results', 'search' ); ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-6" id="sidebar"> 
					<?php dynamic_sidebar('vw-sidebar-1'); ?>
				</div>
				<div class="clearfix"></div>
			</div>
		</main>
	</div>
</div>
<?php get_footer(); ?>