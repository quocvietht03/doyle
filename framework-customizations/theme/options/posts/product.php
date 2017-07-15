<?php if (!defined('FW')) die('Forbidden');

$doyle_admin_url          = admin_url();
$options = array(
	'side' => array(
		'title' => __( 'Header Image', 'doyle' ),
		'type'  => 'box',
		'context' => 'side',
		'priority' => 'low',
		'options' => array(
			'header_image' => array(
				'label' => __( 'Add Image', 'doyle' ),
				'desc'  => __( 'Upload header image', 'doyle' ),
				'help'  => __( 'You can set a general header image for all your products and product categories from the Theme Settings page under the', 'doyle').' <a target="_blank" href="'.$doyle_admin_url.'themes.php?page=fw-settings&_focus_tab=fw-options-tab-posts#fw-options-tab-products">'.__('Products tab', 'doyle').'</a>',
				'type'  => 'upload',
            ),
		),
	),
);