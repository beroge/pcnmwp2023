<?php

/**
 * Template to show the content of Copyright Content
 *
 * @package vw-computer-repair-pro
 */ 

$about_section = get_theme_mod( 'vw_computer_repair_pro_footer_section_enable' );
if ( 'Disable' == $about_section ) {
  return;
}

if( get_theme_mod('vw_computer_repair_pro_footer_section_bgcolor') ) {
  $section_backg = 'background-color:'.esc_attr(get_theme_mod('vw_computer_repair_pro_footer_section_bgcolor')).';';
}elseif( get_theme_mod('vw_computer_repair_pro_footer_section_bgimage') ){
  $section_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_computer_repair_pro_footer_section_bgimage')).'\')';
}else{
  $section_backg = '';
}

?>
<div class="copyright pt-3" style="<?php echo esc_attr($section_backg); ?>">
	<div class="container">
		<div class="row copy-text">
			<div class="col-lg-12 col-md-12 copyright-text">
				<p class="mb-0 pt-2">&copy;<?php echo date('Y'); ?> <a href="http://www.pc-nm.com">Performance Computers, LLC</a>
				</p>
			</div>
			<?php if ( get_theme_mod('vw_computer_repair_pro_footer_widget_section_show_scroll_top',true) == "1" ) { ?>
			<a href="javascript:" id="return-to-top"><i class="fas fa-angle-double-up"></i><span class="screen-reader-text"><?php esc_html_e('Return To Top','vw-computer-repair-pro')?></span></a>
			<?php } ?>
		</div>
	</div>
</div>