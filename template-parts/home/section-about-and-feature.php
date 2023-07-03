<?php
	$section_hide = get_theme_mod( 'vw_computer_repair_pro_about_and_features_enable' );
	if ( 'Disable' == $section_hide ) {
	    return;
	}
?>
<div class="feature-projects">

	<?php
		 get_template_part( 'template-parts/home/section-about-us' ); 

		get_template_part ('/template-parts/home/section-our-features');
	?>
</div>