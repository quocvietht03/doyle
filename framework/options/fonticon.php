<?php
// Icons
Redux::setSection( $opt_name, array(
	'title'            => __( 'Font Icons', 'doyle' ),
	'id'               => 'bt_fonticons',
	'icon'             => 'el el-info-circle',
	'fields'           => array(
		array(
			'id'       => 'font_awesome',
			'type'     => 'switch',
			'title'    => __( 'Font Awesome', 'doyle' ),
			'subtitle' => __( 'Use font awesome.', 'doyle' ),
			'default'  => false,
		),
		array(
			'id'       => 'font_pe_icon_7_stroke',
			'type'     => 'switch',
			'title'    => __( 'Font Pe Icon 7 Stroke', 'doyle' ),
			'subtitle' => __( 'Use font pe icon 7 stroke.', 'doyle' ),
			'default'  => false,
		),
		array(
			'id'       => 'flaticon',
			'type'     => 'switch',
			'title'    => __( 'Font Flaticon', 'doyle' ),
			'subtitle' => __( 'Use font flaticon.', 'doyle' ),
			'default'  => false,
		),
	)
) );
