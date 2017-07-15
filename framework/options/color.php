<?php
// Colors
Redux::setSection( $opt_name, array(
	'title'            => __( 'Colors', 'redux-framework-demo' ),
	'id'               => 'bt_colors',
	'icon'             => 'el el-tint',
	'fields'           => array(
		array(
			'id'       => 'main_color',
			'type'     => 'color',
			'title'    => __( 'Main Color', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the main highlight color throughout the theme. Class apply: bt-main-color', 'redux-framework-demo' ),
			'default'  => '#00ABC9',
			'output'   => array('.bt-main-color')
		),
		array(
			'id'       => 'secondary_color',
			'type'     => 'color',
			'title'    => __( 'Secondary Color', 'redux-framework-demo' ),
			'subtitle' => __( 'Control the secondary highlight color throughout the theme. Class apply: bt-secondary-color', 'redux-framework-demo' ),
			'default'  => '#CA28FC',
			'output'   => array('.bt-secondary-color')
		),
		array(
			'id'       => 'link_color',
			'type'     => 'link_color',
			'title'    => __( 'Link Color', 'redux-framework-demo' ),
			'subtitle' => __( 'Controls the color of all text links.', 'redux-framework-demo' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#00ABC9',
			),
			'output'   => array('a, .bt-link-color')
		),
		
	)
) );
