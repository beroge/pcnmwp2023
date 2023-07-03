<?php
if ( ! is_singular() ) {
	return;
}
global $post;
$img = get_post_meta($post->ID, 'vw_title_banner_image_wp_custom_attachment', true);
$display = '';
$display_title_bbanner = '';
$vw_title_banner_image_title_on_off = get_post_meta($post->ID, 'vw_title_banner_image_title_on_off', true);
if($vw_title_banner_image_title_on_off == 'on') $display = 'style=display:none;';
$vw_title_banner_image_title_below_on_off = get_post_meta($post->ID, 'vw_title_banner_image_title_below_on_off', true);
if($vw_title_banner_image_title_below_on_off != 'on') $display_title_bbanner = 'style=display:none;';
if( $img != '' ){ ?>
	<div class="title-box">
		<div class="container" <?php echo esc_attr($display); ?>>
			<div class="above_title ">
				<h1><?php the_title();?></h1>
				<?php if ( get_theme_mod('vw_computer_repair_pro_site_breadcrumb_enable', true) == "1" ) { ?> 
		            <div class="bradcrumbs py-3">
		                <?php vw_computer_repair_pro_the_breadcrumb(); ?>
		            </div>
		        <?php } ?>	
			</div>
		</div>
		<img src="<?php echo esc_url($img); ?>" >
	</div>
	<div class="container main_title mt-3" <?php echo esc_attr($display_title_bbanner); ?>>
		<h2 class="p-0 mb-3"><?php the_title();?></h2>
		<?php if ( get_theme_mod('vw_computer_repair_pro_site_breadcrumb_enable', true) == "1" ) { ?> 
            <div class="bradcrumbs py-3">
                <?php vw_computer_repair_pro_the_breadcrumb(); ?>
            </div>
        <?php } ?>	
	</div>
<?php }else{ ?>
	<div class="container main_title mt-3">
		<h2 class="p-0 mb-3"><?php the_title();?></h2>
		<?php if ( get_theme_mod('vw_computer_repair_pro_site_breadcrumb_enable', true) == "1" ) { ?> 
            <div class="bradcrumbs py-3">
                <?php vw_computer_repair_pro_the_breadcrumb(); ?>
            </div>
        <?php } ?>	
	</div>
<?php } ?>