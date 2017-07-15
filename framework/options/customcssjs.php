<?php
// Custom Css & Js
Redux::setSection( $opt_name, array(
	'title'            => __( 'Custom Css & Js', 'redux-framework-demo' ),
	'id'               => 'bt_customcssjs',
	'icon'             => 'el el-css',
	'fields'		   => array(
		array(
			'id'       => 'custom_css_code',
			'type'     => 'ace_editor',
			'title'    => __( 'CSS Code', 'redux-framework-demo' ),
			'subtitle' => __( 'Paste your custom CSS code here.', 'redux-framework-demo' ),
			'mode'     => 'css',
			'theme'    => 'monokai',
			'default'  => ''
		),
		array(
			'id'       => 'custom_js_code',
			'type'     => 'ace_editor',
			'title'    => __( 'JS Code', 'redux-framework-demo' ),
			'subtitle' => __( 'Paste your custom JS code here.', 'redux-framework-demo' ),
			'mode'     => 'javascript',
			'theme'    => 'chrome',
			'default'  => ''
		),
	)
) );
