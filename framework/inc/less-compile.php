<?php
function doyle_autoCompileLess($inputFile, $outputFile) {
    require_once( ABSPATH.'/wp-admin/includes/file.php' );	
	WP_Filesystem();
	if(!class_exists('lessc')){
		require_once ( get_template_directory().'/framework/inc/lessc.inc.php' );
	}
	global $wp_filesystem, $doyle_options;
    $less = new lessc();
    $less->setFormatter("classic");
    $less->setPreserveComments(true);
	
	/*Styling Options*/
	$site_width = (isset($doyle_options['site_width'])&&$doyle_options['site_width'])?$doyle_options['site_width'].'px': '1200px';
	$mobile_width = (isset($doyle_options['mobile_width'])&&$doyle_options['mobile_width'])?$doyle_options['mobile_width'].'px': '991px';
	
	$main_color = (isset($doyle_options['main_color'])&&$doyle_options['main_color'])?$doyle_options['main_color']: '#00abc9';
	$secondary_color = (isset($doyle_options['secondary_color'])&&$doyle_options['secondary_color'])?$doyle_options['secondary_color']: '#00c282';
	
	$h1_menu_first_level_color_active = (isset($doyle_options['h1_menu_first_level_color']['active'])&&$doyle_options['h1_menu_first_level_color']['active'])?$doyle_options['h1_menu_first_level_color']['active']: '#00abc9';
	$h1_menu_sub_level_color_active = (isset($doyle_options['h1_menu_sub_level_color']['active'])&&$doyle_options['h1_menu_sub_level_color']['active'])?$doyle_options['h1_menu_sub_level_color']['active']: '#00abc9';
	$h1_menu_first_level_color_stick_active = (isset($doyle_options['h1_menu_first_level_color_stick']['active'])&&$doyle_options['h1_menu_first_level_color_stick']['active'])?$doyle_options['h1_menu_first_level_color_stick']['active']: '#00abc9';
	
	$h1_mobile_toggle_button_default = (isset($doyle_options['h1_mobile_toggle_button']['regular'])&&$doyle_options['h1_mobile_toggle_button']['regular'])?$doyle_options['h1_mobile_toggle_button']['regular']: '#333333';
	$h1_mobile_toggle_button_hover = (isset($doyle_options['h1_mobile_toggle_button']['hover'])&&$doyle_options['h1_mobile_toggle_button']['hover'])?$doyle_options['h1_mobile_toggle_button']['hover']: '#00abc9';
	
	$h1_menu_mobile_first_level_color_active = (isset($doyle_options['h1_menu_mobile_first_level_color']['active'])&&$doyle_options['h1_menu_mobile_first_level_color']['active'])?$doyle_options['h1_menu_mobile_first_level_color']['active']: '#00abc9';
	$h1_menu_mobile_sub_level_color_active = (isset($doyle_options['h1_menu_mobile_sub_level_color']['active'])&&$doyle_options['h1_menu_mobile_sub_level_color']['active'])?$doyle_options['h1_menu_mobile_sub_level_color']['active']: '#00abc9';
	
	$h2_menu_first_level_color_active = (isset($doyle_options['h2_menu_first_level_color']['active'])&&$doyle_options['h2_menu_first_level_color']['active'])?$doyle_options['h2_menu_first_level_color']['active']: '#00abc9';
	$h2_menu_sub_level_color_active = (isset($doyle_options['h2_menu_sub_level_color']['active'])&&$doyle_options['h2_menu_sub_level_color']['active'])?$doyle_options['h2_menu_sub_level_color']['active']: '#00abc9';
	$h2_menu_first_level_color_stick_active = (isset($doyle_options['h2_menu_first_level_color_stick']['active'])&&$doyle_options['h2_menu_first_level_color_stick']['active'])?$doyle_options['h2_menu_first_level_color_stick']['active']: '#00abc9';
	
    $variables = array(
		"site-width" => $site_width,
		"mobile-width" => $mobile_width,
		
		"main-color" => $main_color,
		"secondary-color" => $secondary_color,
		
		"h1-menu-first-level-color-active" => $h1_menu_first_level_color_active,
		"h1-menu-sub-level-color-active" => $h1_menu_sub_level_color_active,
		"h1-menu-first-level-color-stick-active" => $h1_menu_first_level_color_stick_active,
		
		"h1-mobile-toggle-button-default" => $h1_mobile_toggle_button_default,
		"h1-mobile-toggle-button-hover" => $h1_mobile_toggle_button_hover,
		
		"h1-menu-mobile-first-level-color-active" => $h1_menu_mobile_first_level_color_active,
		"h1-menu-mobile-sub-level-color-active" => $h1_menu_mobile_sub_level_color_active,
		
		"h2-menu-first-level-color-active" => $h2_menu_first_level_color_active,
		"h2-menu-sub-level-color-active" => $h2_menu_sub_level_color_active,
		"h2-menu-first-level-color-stick-active" => $h2_menu_first_level_color_stick_active,
		
    );
	
    $less->setVariables($variables);
    $cacheFile = $inputFile.".cache";
    if (file_exists($cacheFile)) {
            $cache = unserialize($wp_filesystem->get_contents($cacheFile));
    } else {
            $cache = $inputFile;
    }
    $newCache = $less->cachedCompile($inputFile);
    if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
            $wp_filesystem->put_contents($cacheFile, serialize($newCache));
            $wp_filesystem->put_contents($outputFile, $newCache['compiled']);
    }
}
function doyle_addLessStyle() {
	try {
		$inputFile = get_template_directory().'/assets/css/less/style.less';
		$outputFile = get_template_directory().'/style.css';
		doyle_autoCompileLess($inputFile, $outputFile);
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }
}
add_action('wp_enqueue_scripts', 'doyle_addLessStyle');
/* End less*/