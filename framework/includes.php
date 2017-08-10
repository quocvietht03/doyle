<?php
/* Theme install */
require_once get_template_directory().'/framework/install/plugin_required.php';
require_once get_template_directory().'/framework/install/demo_data.php';

/* Theme options */
if (class_exists("Redux")){
	require_once get_template_directory().'/framework/options/options.php';
}

/* Extra field */
if (function_exists("vc_add_shortcode_param")){
	require_once get_template_directory().'/framework/vc_params/vc_extra_fields.php';
}

/* Extra params */
if (function_exists("vc_add_param")){
	require_once get_template_directory().'/framework/vc_params/vc_extra_params.php';
}

/* Shortcodes */
if(class_exists("WPBakeryShortCode")){
	foreach (glob(get_template_directory().'/framework/elements/*.php') as $filepath){
		include $filepath;
	}
}
