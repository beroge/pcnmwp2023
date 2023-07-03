<?php
/**
 * The template for displaying search forms in vw-computer-repair-pro
 *
 * @package vw-computer-repair-pro
 */
?>
<form role="search" method="get" class="search-form serach-page" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
    	<span class="screen-reader-text"><?php esc_html_e('Search for:','vw-computer-repair-pro')?></span>
        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'vw-computer-repair-pro' ); ?>" value="<?php the_search_query(); ?>" name="s">
    </label>
    <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'vw-computer-repair-pro' ); ?>">
</form>