<?php

/**

 * Template part for displaying header content

 *

 * @package vw-computer-repair-pro

 */



$sticky_header="";

if ( get_theme_mod('vw_computer_repair_pro_header_section_sticky',true) == "1" ) {



	$sticky_header="yes";

}else{



	$sticky_header="no";

}

$menu_width="";

if ( get_theme_mod('vw_computer_repair_pro_site_menu_width',true) != "" ) {

  $menu_width=get_theme_mod('vw_computer_repair_pro_site_menu_width','250');

}

?>

<div class="container nav_wrap">

	<div class="main-header-box">

	    <div class="row bg-media">

	    	<div class="col-lg-3 col-md-8 col-sm-8">

	    		<div class="logo text-center py-4 px-2">

		          <?php 

		          if( has_custom_logo() ){  vw_computer_repair_pro_the_custom_logo();  } ?>

		          <div class="logo-text">

		            <?php if( get_theme_mod('vw_computer_repair_pro_display_title', true) != ''){ ?>

		                <h1 class="p-0 mt-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr(bloginfo( 'name' )); ?></a></h1>

		              <?php }



		              if( get_theme_mod('vw_computer_repair_pro_display_tagline', true) != ''){ 

		                $description = get_bloginfo( 'description', 'display' );

		                if ( $description || is_customize_preview() ) : ?>

		                  <p class="site-description mb-0"><?php echo esc_html($description); ?></p>

		            <?php endif; } ?>

		          </div>

		        </div>

	    	</div>

	    	<div class="col-lg-10 col-md-2 col-sm-2 col-4 header-nav">

	          <?php get_template_part('/template-parts/header/navigation'); ?>

	     	</div>

	     	<?php if(get_theme_mod('vw_computer_repair_pro_header_search_toggle',true)=='1'){ ?>

       			<div class="col-lg-1 col-md-2 col-sm-2 col-8 header-search">

	              	<span class="search-icon">

	                	<i class="fas fa-search"></i>

	              	</span>

	              	<div class="serach_outer">

	                  <div class="closepop"><i class="fa fa-window-close"></i></div>

	                  <div class="serach_inner search_popup">

	                    <form role="search" method="get" class="search-form serach-page" action="<?php echo esc_url( home_url( '/' ) ); ?>">

	                        <label>

	                        	<span class="screen-reader-text"><?php esc_html_e('Search for:','vw-computer-repair-pro')?></span>

	                            <input type="search" class="search-field" placeholder="<?php if (get_theme_mod('vw_computer_repair_pro_header_search_placeholder_text')!==''){?><?php echo esc_html(get_theme_mod('vw_computer_repair_pro_header_search_placeholder_text','placeholder'));}?>" value="<?php echo esc_attr(the_search_query()); ?>" name="s">

	                        </label>

	                        <button type="submit" class="search-submit">

	                          <i class="fas fa-search"></i><span class="screen-reader-text"><?php esc_html_e('Submit button','vw-computer-repair-pro')?></span>

	                        </button>

	                    </form>

	                  </div>

	              	</div>

	        	</div>

      		<?php } ?>

	    </div>

  	</div>

</div>

<span id="sticky-onoff">

	<?php echo esc_html($sticky_header); ?>

</span>

<span class="d-none" id="menu-width"><?php echo esc_html($menu_width); ?></span>