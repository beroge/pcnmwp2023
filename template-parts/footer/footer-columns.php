<?php


$about_section = get_theme_mod( 'vw_computer_repair_pro_footer_widgets_enable' );
if ( 'Disable' == $about_section ) {
  return;
}
$img_bg = get_theme_mod('vw_computer_repair_pro_footer_image_bg');

if( get_theme_mod('vw_computer_repair_pro_footer_widget_bgcolor','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_computer_repair_pro_footer_widget_bgcolor','')).';';
}elseif( get_theme_mod('vw_computer_repair_pro_footer_widget_section_bgimage','') ){
$about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_computer_repair_pro_footer_widget_section_bgimage')).'\')';
}else{
$about_backg='';
}

$partners_loop="";
if(get_theme_mod('vw_computer_repair_pro_our_partners_slider_loop',true)=='1')
{
$partners_loop="true";
}else{
$partners_loop="false";
}

?>
<div id="footer" style="<?php echo esc_attr($about_backg);?>" class="<?php echo esc_attr($img_bg); ?> pt-4">
	<div id="footer_box" class="pb-3">
		<div class="container footer-cols">
			<?php
			$count = 0;
			if ( is_active_sidebar('vw-footer-1') != '' ) {
				$count++;
			}
			if ( is_active_sidebar('vw-footer-2') != '' ) {
				$count++;
			}
			if ( is_active_sidebar('vw-footer-3') != '' ) {
				$count++;
			}
			if ( is_active_sidebar('vw-footer-4') != '' ) {
				$count++;
			}
			if ( $count == 1 ) {
				$colmd = 'col-lg-12 col-sm-6';
			} elseif ( $count == 2 ) {
				$colmd = 'col-lg-6 col-sm-6';
			} elseif ( $count == 3 ){
				$colmd = 'col-lg-4 col-sm-6';
			} else {
				$colmd = 'col-lg-3 col-sm-6';
			}
			if ( is_active_sidebar('vw-footer-1') != '' || is_active_sidebar('vw-footer-2') != '' || is_active_sidebar('vw-footer-3') != '' || is_active_sidebar('vw-footer-4') != ''){
      		?>
			
				<div class="row footer-details">
					<div class="<?php if ( is_active_sidebar('vw-footer-1') == '' ) { echo 'footer_hide d-none'; } else { echo esc_html( $colmd ); } ?> footer1">
						<?php dynamic_sidebar( 'vw-footer-1' ); ?>
					</div>
					<div class="<?php if ( is_active_sidebar('vw-footer-2') == '' ) { echo 'footer_hide d-none'; } else { echo esc_html( $colmd ); } ?> footer2">
						<?php dynamic_sidebar( 'vw-footer-2' ); ?>
					</div>
					<div class="<?php if ( is_active_sidebar('vw-footer-3') == '' ) { echo 'footer_hide d-none'; } else { echo esc_html( $colmd ); } ?> footer3">
						<?php dynamic_sidebar( 'vw-footer-3' ); ?>
					</div>
					<div class="<?php if ( is_active_sidebar('vw-footer-4') == '' ) { echo 'footer_hide d-none'; } else { echo esc_html( $colmd ); } ?>">
						<?php dynamic_sidebar( 'vw-footer-4' ); ?>
					</div>
				</div>
			<?php } ?>
			<!-- removed our partners code  -->
			<?php get_template_part( 'template-parts/footer/copyright' ); ?>
		</div><!-- .container -->
	</div><!-- #footer_box -->
	<span id="partners-loop" class="d-none"><?php echo esc_html($partners_loop); ?></span>
</div>
