<?php

/* Single Events Post Type */
function vw_computer_repair_pro_single_services($single_template) {
	global $post;
	if ($post->post_type == 'services') {
		$single_template = dirname( __FILE__ ) . '/single-services.php';
	}
	return $single_template;
}
add_filter( 'single_template', 'vw_computer_repair_pro_single_services' );

/* Single projects */
function vw_computer_repair_pro_single_projects($single_template) {
	global $post;
	if ($post->post_type == 'projects') {
		$single_template = dirname( __FILE__ ) . '/single-projects.php';
	}
	return $single_template;
}
add_filter( 'single_template', 'vw_computer_repair_pro_single_projects' );

/* Single Trainer Post Type */
function vw_computer_repair_pro_single_trainer($single_template) {
	global $post;
	if ($post->post_type == 'team') {
		$single_template = dirname( __FILE__ ) . '/single-team.php';
	}
	return $single_template;
}
add_filter( 'single_template', 'vw_computer_repair_pro_single_trainer' );

/* Single Testimonial Post Type */
function vw_computer_repair_pro_single_testimonials($single_template) {
	global $post;
	if ($post->post_type == 'testimonials') {
		$single_template = dirname( __FILE__ ) . '/single-testimonial.php';
	}
	return $single_template;
}
add_filter( 'single_template', 'vw_computer_repair_pro_single_testimonials' );
