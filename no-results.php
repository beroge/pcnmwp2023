<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vw-computer-repair-pro
 */
?>
<header class="mt-5">
	<h3 class="entry-title"><?php esc_html_e( 'Nothing Found', 'vw-computer-repair-pro' ); ?></h3>
</header>
<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	<p><?php printf( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
<?php elseif ( is_search() ) : ?>
	<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'vw-computer-repair-pro' ); ?></p><br />
		<?php get_search_form(); ?>
<?php else : ?>
	<p><?php esc_html_e( 'Don\'t worry &hellip; it happens to the best of us.', 'vw-computer-repair-pro' ); ?></p>
	<br />
	<div class="read-moresec">
		<div><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button hvr-sweep-to-right"><?php esc_html_e( 'Back to Home Page', 'vw-computer-repair-pro' ); ?></a></div>
	</div>
<?php endif; ?>