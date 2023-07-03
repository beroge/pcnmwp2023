<?php

	require get_template_directory() . '/theme-wizard/tgm/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function vw_computer_repair_pro_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Vw Computer Repair Pro Posttype', 'vw-computer-repair-pro' ),
			'slug'             => 'vw-computer-repair-pro-posttype',
			'source'           => get_template_directory() .'/inc/plugins/vw-computer-repair-pro-posttype.zip',
			'required'         => true,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Contact Form 7', 'vw-computer-repair-pro' ),
			'slug'             => 'contact-form-7',
			'required'         => true,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'WooCommerce', 'vw-computer-repair-pro' ),
			'slug'             => 'woocommerce',
			'required'         => true,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Ibtana - WordPress Website Builder', 'vw-computer-repair-pro' ),
			'slug'             => 'ibtana-visual-editor',
			'source'           => '',
			'required'         => true,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Ibtana - Ecommerce Product Addons', 'vw-computer-repair-pro' ),
			'slug'             => 'ibtana-ecommerce-product-addons',
			'source'           => 'https://downloads.wordpress.org/plugin/ibtana-ecommerce-product-addons.zip',
			'required'         => true,
			'force_activation' => false,
		),		
	);
	$vw_computer_repair_pro_config = array();
	tgmpa( $plugins, $vw_computer_repair_pro_config );
}
add_action( 'tgmpa_register', 'vw_computer_repair_pro_register_recommended_plugins' );