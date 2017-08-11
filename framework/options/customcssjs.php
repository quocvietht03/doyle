<?php
// Custom Css & Js
Redux::setSection( $opt_name, array(
	'title'            => __( 'Custom Css & Js', 'doyle' ),
	'id'               => 'bt_customcssjs',
	'icon'             => 'el el-css',
	'fields'		   => array(
		array(
			'id'       => 'custom_css_code',
			'type'     => 'ace_editor',
			'title'    => __( 'CSS Code', 'doyle' ),
			'subtitle' => __( 'Paste your custom CSS code here.', 'doyle' ),
			'mode'     => 'css',
			'theme'    => 'monokai',
			'default'  => ''
		),
		array(
			'id'       => 'custom_js_code',
			'type'     => 'ace_editor',
			'title'    => __( 'JS Code', 'doyle' ),
			'subtitle' => __( 'Paste your custom JS code here.', 'doyle' ),
			'mode'     => 'javascript',
			'theme'    => 'chrome',
			'default'  => ''
		),
	)
) );
