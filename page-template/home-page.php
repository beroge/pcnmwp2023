<?php

/**
 * Template Name: Home Page
 */

get_header();
if (ThemeWhizzie::get_the_validation_status() === 'true') {
	get_template_part('/template-parts/home/section-slider');
?>
<style type="text/css">
		.typed {
			overflow: hidden;
			/* white-space: nowrap; */
			width: 0;
			animation: typing;
			animation-duration: 2.5s;
			animation-timing-function: steps(100, end);
			animation-fill-mode: forwards;
		}

		@keyframes typing {
			from {
				width: 0
			}

			to {
				width: 100%
			}
		}
	</style>

	<script type="text/javascript">
		jQuery(window).on('load', function() {
        jQuery("h3").addClass("typed");
    });
	</script>
	
<?php
	$section_order = '';

	$section_order = explode(',', get_theme_mod('vw_computer_repair_pro_section_ordering_settings_repeater'));

	foreach ($section_order as $key => $value) {
		if ($value != '') {

			get_template_part('template-parts/home/section', $value);
		}
	}
}
get_footer(); ?>