jQuery(document).ready(function(){
	var plugin_status = ibmm_verify_script_obj.ibmmstatus;
	//console.log(plugin_status);
	if(plugin_status == 'plugin_not_exist'){
		var mega_menu_image = ibmm_verify_script_obj.ibmmimage;
		var mega_menu_notice = '<span class="ibmm-activation-notice">IMMA Mega Menu</span>';
		var mega_menu_model = '<div class="ibmm-menu-model"><div class="ibmm-menu-body"><span class="dashicons dashicons-no"></span><p>Upload and activate Ibtana Mega Menu plugin to add mega menu</p><img src="'+ mega_menu_image +'"><a href="">Buy Now</a></div></div>';
		jQuery('#menu-to-edit li.menu-item').each(function() {
			jQuery(this).find('.item-title').append(mega_menu_notice);
		});
		jQuery('#menu-management-liquid').append(mega_menu_model);
	}

	jQuery('.ibmm-activation-notice').click(function(){
		jQuery('.ibmm-menu-model').fadeIn();
	});
	jQuery('span.dashicons').click(function(){
		jQuery('.ibmm-menu-model').fadeOut();
	});
});