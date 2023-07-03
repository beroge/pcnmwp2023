<?php
get_header();
get_template_part( 'template-parts/banner' );
?>
<?php do_action( 'vw_computer_repair_pro_after_page_header' ); ?>
<main id="maincontent" role="main">
	<div class="container inner_layout">
		<div class="middle-content pb-3">
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_content();
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() ) {
							comments_template();
						}
					?>
				</article>
			<?php endwhile; // end of the loop. ?>
		</div>
		<div class="clear"></div>
	</div>
</main>
<?php do_action( 'vw_computer_repair_pro_before_page_footer' ); ?>
<?php get_footer(); ?>