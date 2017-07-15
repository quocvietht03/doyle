<?php
// Icons
Redux::setSection( $opt_name, array(
	'title'            => __( 'Font Icons', 'redux-framework-demo' ),
	'id'               => 'bt_fonticons',
	'icon'             => 'el el-info-circle',
	'fields'           => array(
		array(
			'id'       => 'font_awesome',
			'type'     => 'switch',
			'title'    => __( 'Font Awesome', 'redux-framework-demo' ),
			'subtitle' => __( 'Use font awesome.', 'redux-framework-demo' ),
			'default'  => false,
		),
		array(
			'id'       => 'font_pe_icon_7_stroke',
			'type'     => 'switch',
			'title'    => __( 'Font Pe Icon 7 Stroke', 'redux-framework-demo' ),
			'subtitle' => __( 'Use font pe icon 7 stroke.', 'redux-framework-demo' ),
			'default'  => false,
		),
		array(
			'id'       => 'flaticon',
			'type'     => 'switch',
			'title'    => __( 'Font Flaticon', 'redux-framework-demo' ),
			'subtitle' => __( 'Use font flaticon.', 'redux-framework-demo' ),
			'default'  => false,
		),
	)
) );
